  
  <script>
    
        $("#d_forms").addClass("active");
  </script>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">
                <?php if($this->session->userdata('type')=='Admin'): ?>
                  Forms     
                <?php endif; ?>
                <?php if($this->session->userdata('type')=='Company'): ?>
                  Calendar      
                <?php endif; ?>
              </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/index">Home</a></li>
              <li class="breadcrumb-item active">
                <?php if($this->session->userdata('type')=='Admin'): ?>
                  Forms     
                <?php endif; ?>
                <?php if($this->session->userdata('type')=='Company'): ?>
                  Calendar      
                <?php endif; ?>
              </li>
            </ul>
          </div>
          <!-- Page Footer-->

        <?php if($this->session->userdata('type')=='Company'): ?>
                  
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center container-fluid">
                      <h3 class="h4">Event Calendar</h3>
                    </div>
                          
                    <div class="card-body table-responsive" id="divcalendar">                                 
                      <?php echo $calendar;?>
                      <script type="text/javascript">
                        $(document).ready(function(){
                          /*$('#nextdate').click(function(){
                            var year='<?php echo $caldate['year'];?>';
                            var month=Number('<?php echo $caldate['month'];?>')+1;
                            if(month<10){
                              month='0'+month;
                            }
                            else{
                              month=month.toString();
                            }
                            alert(month);
                            $.ajax({
                              url: window.location,
                              type: "POST",
                              data: {
                                  month: month,
                                  year: year
                              },
                              success: function(data){
                                month=data;
                                location.reload();
                              },
                              error: function(xhr, textStatus, errorThrown){
                                     alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                              }
                            });
                          });*/
                        });
                      </script>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>

  <!-- Modal -->
  <div class="modal fade" id="addEvent" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                                  <input id="eventid" type="hidden" value="">
                                    <div class="container">
                                      <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="dtp_input2" class="control-label">Event Date</label>
                                            <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                              <input class="form-control" size="16" type="text" value="<?php echo date('Y-m-d');?>" readonly  id="dform">
                                              <span class="input-group-addon"><span class="okicon glyphicon glyphicon-remove fa fa-remove"></span></span>
                                              <span class="input-group-addon"><span class="okicon glyphicon glyphicon-calendar fa fa-calendar"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input2" value="" /><br/>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="dtp_input3" class="col-md-12 control-label">Event Time</label>
                                            <div class="input-group date form_time col-md-12" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                                <input class="form-control" size="16" type="text" value="" readonly id="tform">
                                                <span class="input-group-addon"><span class="okicon glyphicon glyphicon-remove fa fa-remove"></span></span>
                                                <span class="input-group-addon"><span class="okicon glyphicon glyphicon-time fa fa-clock-o"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input3" value="" /><br/>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Event Details</label>
                                            <input class="form-control" type="text" value="" id="edform">
                                        </div>
                                        <div class="dropdown col-sm-12">
                                          <label>Select Service</label>
                                          <select class="form-control" name="service" id="sform">
                                            <?php foreach($service as $ser){
                                              echo "<option value='".$ser['sid']."'>".$ser['sname']."</option>";
                                            }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="dropdown col-sm-12">
                                          <label>Select Customer</label>
                                          <select class="form-control" name="customer" id="cuform">
                                            <?php foreach($customer as $cus){
                                              echo "<option value='".$cus['cuid']."'>".$cus['cuname']."</option>";
                                            }
                                            ?>
                                          </select>

                                        </div>
                                      </div>
                                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id='aEve'>Add</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="editEvent" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                                  <input id="eeventid" type="hidden" value="">
                                    <div class="container">
                                      <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="dtp_input2" class="control-label">Event Date</label>
                                            <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                              <input class="form-control" size="16" type="text" value="<?php echo date('Y-m-d');?>" readonly  id="edaform">
                                              <span class="input-group-addon"><span class="okicon glyphicon glyphicon-remove fa fa-remove"></span></span>
                                              <span class="input-group-addon"><span class="okicon glyphicon glyphicon-calendar fa fa-calendar"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input2" value="" /><br/>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="dtp_input3" class="col-md-12 control-label">Event Time</label>
                                            <div class="input-group date form_time col-md-12" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                                <input class="form-control" size="16" type="text" value="" readonly id="etform">
                                                <span class="input-group-addon"><span class="okicon glyphicon glyphicon-remove fa fa-remove"></span></span>
                                                <span class="input-group-addon"><span class="okicon glyphicon glyphicon-time fa fa-clock-o"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input3" value="" /><br/>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Event Details</label>
                                            <input class="form-control" type="text" value="" id="eedform">
                                        </div>
                                        <div class="dropdown col-sm-12">
                                          <label>Select Service</label>
                                          <select class="form-control" name="service" id="esform">
                                            <?php foreach($service as $ser){
                                              echo "<option value='".$ser['sid']."'>".$ser['sname']."</option>";
                                            }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="dropdown col-sm-12">
                                          <label>Select Customer</label>
                                          <select class="form-control" name="customer" id="ecuform">
                                            <?php foreach($customer as $cus){
                                              echo "<option value='".$cus['cuid']."'>".$cus['cuname']."</option>";
                                            }
                                            ?>
                                          </select>

                                        </div>
                                      </div>
                                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id='uEve'>Update</button>
        </div>
      </div>
      
    </div>
  </div>
    <script src="<?php echo base_url();?>/assets/dashboard/js/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/js/locales/bootstrap-datetimepicker.fr.js"></script>
<!--
<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>-->
<script type="text/javascript">
  $('.form_date').datetimepicker({
      format: 'yyyy-mm-dd',
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0,
    startDate: '<?php echo date('Y-m-d');?>'//'<?php echo date('Y-m-d');?>'
    });
  $('.form_time').datetimepicker({
      timeFormat: 'HH:mm',
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
    });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    /*date
    etime
    edetails
    sid
    cid
    cuid*/
    $('#aEve').click(function(){
      sid=$(this).offsetParent().find('#sform').val();
      cuid=$(this).offsetParent().find('#cuform').val();
      date=$(this).offsetParent().find('#dform').val();
      time=$(this).offsetParent().find('#tform').val();
      details=$(this).offsetParent().find('#edform').val();
      eid='';
      if(details!=''&&time!=''&&date!=''){
        $.ajax({
          url: window.location,
          type: "POST",
          data: {
            eid: eid,
            sid: sid,
            cuid: cuid,
            date: date,
            time: time,
            details: details,
            cid: '<?php echo $this->session->userdata('cid')?>'
          },
          success: function(data){
            location.reload();
          },//function(data){
               //location.reload();
                //alert('request success'+data);
             //},
          error: function(xhr, textStatus, errorThrown){
                 alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
          }
        }); 
      }     
      return false;
    });
    $('#uEve').click(function(){
      sid=$(this).offsetParent().find('#esform').val();
      cuid=$(this).offsetParent().find('#ecuform').val();
      date=$(this).offsetParent().find('#edaform').val();
      time=$(this).offsetParent().find('#etform').val();
      details=$(this).offsetParent().find('#eedform').val();
      eid=$(this).offsetParent().find('#eeventid').val();
      if(details!=''&&time!=''&&date!=''){
        alert('update');
        $.ajax({
          url: window.location,
          type: "POST",
          data: {
            eid: eid,
            sid: sid,
            cuid: cuid,
            date: date,
            time: time,
            details: details,
            cid: '<?php echo $this->session->userdata('cid')?>'
          },
          success: function(data){
            location.reload();
          },//function(data){
               //location.reload();
                //alert('request success'+data);
             //},
          error: function(xhr, textStatus, errorThrown){
                 alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
          }
        }); 
      }     
      return false;
    });
  });
</script>

