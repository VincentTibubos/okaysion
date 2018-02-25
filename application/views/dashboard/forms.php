  
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
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow">
                          <a href="" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                          <a href="" class="dropdown-item" data-toggle="modal" data-target="#addEvent"><i class="fa fa-plus"></i>Add Event</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center container-fluid">
                      <h3 class="h4">Event Calendar</h3>
                    </div>
                          <a data-toggle="modal" data-target="#addEvent" class="btn btn-primary"><i class="fa fa-plus"></i>Add Event</a>
                    <div class="card-body table-responsive" id="divcalendar">                                 
                      <?php echo $calendar;?>                      
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
          <h4 class="modal-title">Logout</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                                    <div class="container">
                                      <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="dtp_input2" class="control-label">Date Picking</label>
                                            <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                              <input class="form-control" size="16" type="text" value="" readonly>
                                              <span class="input-group-addon"><span class="okicon glyphicon glyphicon-remove fa fa-remove"></span></span>
                                              <span class="input-group-addon"><span class="okicon glyphicon glyphicon-calendar fa fa-calendar"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input2" value="" /><br/>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="dtp_input3" class="col-md-12 control-label">Time Picking</label>
                                            <div class="input-group date form_time col-md-12" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                                <input class="form-control" size="16" type="text" value="" readonly>
                                                <span class="input-group-addon"><span class="okicon glyphicon glyphicon-remove fa fa-remove"></span></span>
                                                <span class="input-group-addon"><span class="okicon glyphicon glyphicon-time fa fa-clock-o"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input3" value="" /><br/>
                                        </div>

                                        <div class="dropdown col-sm-12">
                                          <select class="form-control" name="customer">
                                            <?php foreach($service as $ser){
                                              echo "<option value='".$ser['sid']."'>".$ser['sname']."</option>";
                                            }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="dropdown col-sm-12
                                            ">
                                          <select class="form-control" name="customer">
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
          <button type="button" class="btn btn-success" data-dismiss="modal"  onclick="redirout();">Yes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
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
    forceParse: 0,
    stepping: 1
    });
</script>

