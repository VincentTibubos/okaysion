  
  <script>
    
        $("#d_users").addClass("active");
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
                  Customers    
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
                  Customers      
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

          <?php if($this->session->userdata('type')=='Company'): ?>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">

                      <h3 class="h4">Customer</h3>
                    </div>
                    <div class="card-body">
                      <p>Add or Update Company</p>
                        <form method="post" action="" id="formcus">
                          
                  <?php echo validation_errors(); ?>
                          <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="text" value="<?php echo $cudata['cuemail']; ?>" name="cuemail" class="form-control">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Customer Name</label>
                            <input type="text" value="<?php echo $cudata['cuname'];?>" name="cuname" class="form-control">
                          </div>
                          <input type="hidden" name="cuid" value="<?php echo $cudata['cuid'];?>">
                          <div class="form-group"> 

                              <input type="submit" value="Add" class="btn btn-success" onclick="cuadd();">
                            <?php if($cudata['cuid']!==''): ?>      
                              <input type="submit" value="Update" class="btn btn-success"  onclick="cuupdate();">
                            <?php endif;?>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Customers</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Customer</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Modify Customer</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($customer as $num=>$cus){
                              echo "
                            <tr>
                              <th scope='row'>".($num+1)."</th>
                              <td>".$cus['cuname']."</td>
                              <td>".$cus['cuemail']."</td>
                              <td>".$cus['cuaddress']."</td>
                              <td>
                              <div class='btn-group'>
                                  <form action='".base_url()."dashboard/customer' method='post'>
                                    <input type='hidden' value='".$cus['cuid']."' name='cuid'>
                                    <input type='hidden' value='dashboard/company' name='comp'>
                                    <input type='submit' value='Edit' class='btn btn-success'>
                                  </form>
                                  <form action='".base_url()."customer/delete' method='post'>
                                    <input type='hidden' value='".$cus['cuid']."' name='cuid'>
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
  function cuadd(){
      document.getElementById('formcus').action="<?php echo base_url();?>customer/add";
    }
  function cuupdate(){
      
      document.getElementById('formcus').action="<?php echo base_url();?>customer/update";
  }
  function add(){
      document.getElementById('formcom').action="<?php echo base_url();?>company/add";
    }
  function update(){
      
      document.getElementById('formcom').action="<?php echo base_url();?>company/update";
    }
</script>