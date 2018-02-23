<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Calendar_model extends CI_Model{
    var $conf;
    function __construct(){
        parent::__construct();

            $this->conf=array(
                'start_day'=>'monday',
                'show_next_prev'=>true,
                'next_prev_url'=>base_url().'dashboard/calendar'
            );
            $this->conf['template'] = '

        {table_open}<table border="0" cellpadding="0" cellspacing="0" id="usercalendar" class="calendar table">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr class="days">{/cal_row_start}
        {cal_cell_start}<td class="day">{/cal_cell_start}
        {cal_cell_start_today}<td class="day">{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}
            <div class="day_num">{day}</div>
            <div class="content"><small>{content}</small></div>
        {/cal_cell_content}
        {cal_cell_content_today}
            <div class="day_num highlight">{day}</div>
            <div class="content"><small>{content}</small></div>
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
';

    }
    public function get_calendar($year,$month){
        $query=$this->db->select('date,details')->from('schedule')->like('date',"$year-$month",'after')->get();
        $caledata=array();
        foreach($query->result() as $row) {
            $caledata[substr($row->date,8,2)]=$row->details;
        }
        return $caledata;

    }
    public function generate($year,$month){
            $this->load->library('calendar',$this->conf);
            $caledata=$this->get_calendar($year,$month);
            return $this->calendar->generate($year,$month,$caledata);
           // exit();
    }
    public function addsched($date,$details){
        $this->db->insert('schedule',array(
            'date'=>$date,
            'details'=>$details
        ));
    }
}
