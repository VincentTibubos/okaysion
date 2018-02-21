  
  <script>
    
        $("#d_users").addClass("active");
  </script>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">
                <?php if($this->session->userdata('type')=='Admin'): ?>
                  Company      
                <?php endif; ?>
                <?php if($this->session->userdata('type')=='Company'): ?>
                  Users      
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
                  Company      
                <?php endif; ?>
                <?php if($this->session->userdata('type')=='Company'): ?>
                  Users      
                <?php endif; ?>
              </li>
            </ul>
          </div>


          <?php if($this->session->userdata('type')=='Admin'): ?>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">

                      <h3 class="h4">Company</h3>
                    </div>
                    <div class="card-body">
                      <p>Update Company</p>
                        <form method="post" action="" id="formcom">
                          
                  <?php echo validation_errors(); ?>
                          <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="text" value="<?php echo $cdata['cemail']; ?>" name="cemail" class="form-control">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Company Name</label>
                            <input type="text" value="<?php echo $cdata['cname'];?>" name="cname" class="form-control">
                          </div>
                          <input type="hidden" name="cid" value="<?php echo $cdata['cid'];?>">
                          <div class="form-group"> 

                              <input type="submit" value="Add" class="btn btn-success" onclick="add();">
                            <?php if($cdata['cid']!==''): ?>      
                              <input type="submit" value="Update" class="btn btn-success"  onclick="update();">
                            <?php endif;?>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
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
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Company</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Modify Company</th>
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
                              <td>
                              <div class='btn-group'>
                                  <form action='".base_url()."dashboard/company' method='post'>
                                    <input type='hidden' value='".$com['cid']."' name='cid'>
                                    <input type='hidden' value='dashboard/company' name='comp'>
                                    <input type='submit' value='Edit' class='btn btn-success'>
                                  </form>
                                  <form action='".base_url()."company/delete' method='post'>
                                    <input type='hidden' value='".$com['cid']."' name='cid'>
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
  function add(){
      document.getElementById('formcom').action="<?php echo base_url();?>company/add";
    }
  function update(){
      
      document.getElementById('formcom').action="<?php echo base_url();?>company/update";
    }
</script>