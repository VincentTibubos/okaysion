  
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
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Companies</h3>
                    </div>
                    <div class="card-body table-responsive" id="divcalendar">         

                        
                      <?php echo $calendar;?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
                <?php endif; ?>

