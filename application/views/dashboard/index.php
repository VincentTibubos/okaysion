  
  <script>
    
        $("#d_index").addClass("active");
  </script>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Welcome <?php echo $this->session->userdata('cname');?>!</h2>
            </div>
            
          </header>

         <?php
          if($this->session->flashdata('user_loggedin')): ?>
          <?php echo "<p class='alert alert-success'>".$this->session->flashdata('user_loggedin')."</p>"?>
         <?php endif;?>
        <?php 
          if($this->session->flashdata('user_registered')): ?>
          <?php echo "<p class='alert alert-success'>".$this->session->flashdata('user_registered')."</p>"?>
         <?php endif;?>
		 
        <?php if($this->session->userdata('type')=='Company'): ?>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
               
			   <!-- Item -->
                <div class="col-xl-4 col-sm-9">
                  <div class="item d-flex align-items-center">

                    <div class="icon bg-violet">
                      <i class="icon-user"></i></div>
                    <div class="title"><a href="<?php echo base_url();?>dashboard/customer"><span>Total<br>Customer</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $cunum?></strong></div>
                  </div>
                </div>
				
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><a href="<?php echo base_url();?>dashboard/service"><span>Total<br>Services</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $servicenum?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><a href="<?php echo base_url();?>dashboard/calendar"><span>Total<br>Events</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $calendarnum?></strong></div>
                  </div>
                </div>
              </section>          
			  
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center container-fluid">
                      <a href="<?php echo base_url();?>dashboard/calendar"><h3 class="h4">Event Calendar</h3></a>
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
                <?php if($this->session->userdata('type')=='Admin'): ?>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
               
         <!-- Item -->
                <div class="col-xl-6 col-sm-9">
                  <div class="item d-flex align-items-center">

                    <div class="icon bg-violet">
                      <i class="icon-user"></i></div>
                    <div class="title"><a href="<?php echo base_url();?>dashboard/company"><span>Total<br>Companies</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $cosnum?></strong></div>
                  </div>
                </div>
        
                <!-- Item -->
                <div class="col-xl-6 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><a href="<?php echo base_url();?>dashboard/messages"><span>Total<br>Messages</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $msgnum?></strong></div>
                  </div>
                </div>
                <!-- Item -->
              </section> 

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <a href="<?php echo base_url();?>dashboard/company"><h3 class="h4">Companies</h3></a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Company</th>
                              <th>Email</th>
                              <th>Address</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($company as $num=>$com){
                              echo "
                            <tr>
                              <th scope='row'>".($num+1)."</th>
                              <td>".$com['cname']."</td>
                              <td>".$com['cemail']."</td>
                              <td>".$com['caddress']."</td>
                            </tr>";
                            }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
            <?php endif;?>
        <script type="text/javascript">
          $('.btn-hideto').hide();
        </script>

		
       