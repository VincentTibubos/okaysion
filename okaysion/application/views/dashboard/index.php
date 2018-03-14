  
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
		 
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
               
			   <!-- Item -->
                <div class="col-xl-4 col-sm-9">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>New<br>Users</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>25</strong></div>
                  </div>
                </div>
				
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>New<br>Visitors</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>70</strong></div>
                  </div>
                </div>
				
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Total<br>Sales</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>40</strong></div>
                  </div>
                </div>
              </section>          
			  
		
       