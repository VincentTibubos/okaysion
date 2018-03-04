  
  <script>
        $("#d_service").addClass("active");
  </script>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">
                <?php if($this->session->userdata('type')=='Admin'): ?>
                  Companies     
                <?php endif; ?>
                <?php if($this->session->userdata('type')=='Company'): ?>
                  Services   
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
                  Companies      
                <?php endif; ?>
                <?php if($this->session->userdata('type')=='Company'): ?>
                  Services
                <?php endif; ?>
              </li>
            </ul>
          </div>

          <?php if($this->session->userdata('type')=='Company'): ?>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">

                      <h3 class="h4">Service</h3>
                    </div>
                    <div class="card-body">
                      <p>Add or Update Service</p>
                        <form method="post" action="" id="formser">
                          
                  <?php echo validation_errors(); ?>
                          <div class="form-group">       
                            <label class="form-control-label">Service Name</label>

                            <input required type="text" value="<?php echo $sdata['sname'];?>" name="sname" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="form-control-label">Description</label>
                            <input required type="text" value="<?php echo $sdata['sdescription']; ?>" name="sdescription" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="form-control-label">Venue</label>
                            <input required type="text" value="<?php echo $sdata['svenue']; ?>" name="svenue" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="form-control-label">Price</label>
                            <input required onkeypress="return event.charCode >= 48&&event.charCode <= 57" type="number" value="<?php echo $sdata['sprice']; ?>" name="sprice" class="form-control">

                          </div>
                          <input type="hidden" name="sid" value="<?php echo $sdata['sid'];?>">
                          <div class="form-group"> 

                              <input type="submit" value="Add" class="btn btn-success" onclick="sadd();">
                            <?php if($sdata['sid']!==''): ?>      
                              <input type="submit" value="Update" class="btn btn-success"  onclick="supdate();">
                            <?php endif;?>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Services</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Service</th>
                              <th>Description</th>
                              <th>Venue</th>
                              <th>Price</th>
                              <th>Modify Service</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($service as $num=>$ser){
                              echo "
                            <tr>
                              <th scope='row'>".($num+1)."</th>
                              <td>".$ser['sname']."</td>
                              <td>".$ser['sdescription']."</td>
                              <td>".$ser['svenue']."</td>
                              <td>".$ser['sprice']."</td>
                              <td>
                              <div class='btn-group'>
                                  <form action='".base_url()."dashboard/service' method='post'>
                                    <input type='hidden' value='".$ser['sid']."' name='sid'>
                                    <input type='hidden' value='dashboard/company' name='comp'>
                                    <input type='submit' value='Edit' class='btn btn-success'>
                                  </form>
                                  <form action='".base_url()."service/delete' method='post'>
                                    <input type='hidden' value='".$ser['sid']."' name='sid'>
                                    <input type='hidden' value='dashboard/company' name='comp'>
                                    <input type='submit' value='Delete' class='btn btn-danger'>
                                  </form>
                                </div>
                              </td>
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

<script>
  function sadd(){
      document.getElementById('formser').action="<?php echo base_url();?>service/add";
    }
  function supdate(){
      
      document.getElementById('formser').action="<?php echo base_url();?>service/update";
  }
</script>