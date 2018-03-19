<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Calendar_model extends CI_Model{
    var $conf;
    function __construct(){
        parent::__construct();

            $this->conf=array(
                'start_day'=>'monday',
                'show_other_days'=>true,
                'show_next_prev'=>true,
                'next_prev_url'=>base_url().'dashboard/calendar'
            );
            $this->conf['template'] = '

        {table_open}<table border="0" cellpadding="0" cellspacing="0" id="usercalendar" class="calendar table table-condensed ">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}
        <div class="btn btn-group btn-hideto"><a class="btn btn-primary" id="prevdate" href="{previous_url}">&lt;&lt;</a>{/heading_previous_cell}
        
        {heading_title_cell}
            <div class="btn">{heading}</div>
        {/heading_title_cell}
        
        {heading_next_cell}<a class="btn btn-primary" id="nextdate" href="{next_url}">&gt;&gt;</a>
        </div><div class="btn btn-group btn-hideto"><a  id="addeve" data-toggle="modal" data-target="#addEvent" class="btn btn-primary"><i class="fa fa-plus"></i> Add Event</a></div>{/heading_next_cell}
        
        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr class="days">{/cal_row_start}
        {cal_cell_start}<td class="day">{/cal_cell_start}
        {cal_cell_start_today}<td class="day">{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}
            <div class="day_num">{day}</div>{content}
        {/cal_cell_content}
        {cal_cell_content_today}
            <div class="day_num highlight">{day}</div>{content}
        {/cal_cell_content_today}

        {cal_cell_no_content}
            <div class="day_num">{day}</div>
        {/cal_cell_no_content}
        {cal_cell_no_content_today}
            <div class="day_num highlight">{day}</div>
        {/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}
';// <div class="content"><small>{content}</small></div>

    }
    public function get_calendar($year,$month){
        $query=$this->db->select('eid,edate,edetails,etime,econfirmation')->from('event_tbl')->where('cid',$this->session->userdata('cid'))->where('estatus',1)->like('edate',"$year-$month",'after')->get();
        $caledata=array();
        foreach($query->result() as $row) {
            if($row->econfirmation==1){
                $style=" btn-primary ";
            }
            else{
                $style=" btn-danger ";
            }
            if(substr($row->edate,8,1)==0){
                if(empty($caledata[substr($row->edate,9,1)])){
                    $caledata[substr($row->edate,9,1)]='<a href="" data-toggle="modal" data-target="#editEvent" class="content btn-sm '.$style.' btn-block"><div class="id_num" hidden>'.$row->eid.'</div><div class="maincontent">'.$row->edetails.' ('.$row->etime.')</div></a>';
                }//<a data-toggle="modal" data-target="#addEvent" class="btn btn-primary">
                else
                    $caledata[substr($row->edate,9,1)]=$caledata[substr($row->edate,9,1)].'<a href="" data-toggle="modal" data-target="#editEvent"  class="content btn-sm  '.$style.'  btn-block"><div class="id_num" hidden>'.$row->eid.'</div><div class="maincontent">'.$row->edetails.' ('.$row->etime.')</div></a>';
            }
            else{
                if(empty($caledata[substr($row->edate,8,2)])){
                    $caledata[substr($row->edate,8,2)]='<a href="" data-toggle="modal" data-target="#editEvent"  class="content btn-sm  '.$style.'  btn-block"><div class="id_num" hidden>'.$row->eid.'</div><div class="maincontent">'.$row->edetails.' ('.$row->etime.')</div></a>';
                }
                else
                    $caledata[substr($row->edate,8,2)]=$caledata[substr($row->edate,8,2)].'<a href="" data-toggle="modal" data-target="#editEvent" class="content btn-sm  '.$style.'  btn-block"><div class="id_num" hidden>'.$row->eid.'</div><div class="maincontent">'.$row->edetails.' ('.$row->etime.')</div></a>';
            }
        }
        return $caledata;

    }
    public function generate($year,$month){
            $this->load->library('calendar',$this->conf);
            $caledata=$this->get_calendar($year,$month);
            return $this->calendar->generate($year,$month,$caledata);
           // exit();
    }
    public function addsched($eid,$edate,$etime,$edetails,$sid,$cid,$cuid){/*
        if($this->db->select('date')->from('calendar')->where('date',$date)->count_all_results()){
            $this->db->where('date',$date)->update('calendar',array('date'=>$date,'edetails'=>$edetails));
        }
        else{

            $this->db->insert('event_tbl_tbl',array(
                'date'=>$date,
                'edetails'=>$edetails
            ));

                    $this->input->post('date'),
                    $this->input->post('time'),
                    $this->input->post('details'),
                    $this->input->post('sid'),
                    $this->input->post('cid'),
                    $this->input->post('cuid')

        }*/ 
        date_default_timezone_set("Asia/Manila"); 
        if($eid==''){
            $this->db->insert('event_tbl',array(
                'edate'=>$edate,
                'etime'=>$etime,
                'edetails'=>$edetails,
                'sid'=>$sid,
                'cid'=>$cid,
                'cuid'=>$cuid,
                'econfirmation'=>1,
                'ecreated' => date('Y-m-d'),
                'emodified' => date('Y-m-d'),
                'estatus'=>1
            )); 
        }
        else{
            $this->db->where('eid',$eid)->update('event_tbl',array(
                'edate'=>$edate,
                'etime'=>$etime,
                'edetails'=>$edetails,
                'sid'=>$sid,
                'cid'=>$cid,
                'cuid'=>$cuid,
                'emodified' => date('Y-m-d'),
                'estatus'=>1
            ));   
        }
    }

    public function addrequest(){
        //Array ( [details] => details [location] => location [guest] => 12 [date] => 2018-03-19 [time] => 05:25 [cid] => 90 [sid] => 38 [cuid] => 36 [curl] => mads.com )
            $this->db->insert('event_tbl',array(
                'edate'=>$this->input->post('date'),
                'etime'=>$this->input->post('time'),
                'edetails'=>$this->input->post('details'),
                'sid'=>$this->input->post('sid'),
                'cid'=>$this->input->post('cid'),
                'cuid'=>$this->input->post('cuid'),
                'ecreated' => date('Y-m-d'),
                'emodified' => date('Y-m-d'),
                'estatus'=>1,
                'econfirmation'=>0
            )); 
        
    }
    public function getvalues($eid){
        $query = $this->db->get_where('event_tbl',array('eid'=>$eid));
        return $query->row_array();
    }
    public function cancel($eid){
            $this->db->where('eid',$eid)->update('event_tbl',array(
                'estatus'=>0
            ));  
    }
    public function countnum(){
        //$this->db->where('cid',$this->session->userdata('cid'));
        //$c=$this->db->count_all('cmessage_tbl');
        $this->db->where('estatus',1);
        $this->db->where('cid',$this->session->userdata('cid'));
        $query=$this->db->get('event_tbl');
        return count($query->result_array());
    } 
}
