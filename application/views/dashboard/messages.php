  
  <script>
    
        $("#d_messages").addClass("active");
  </script>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Messages</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/index">Home</a></li>
              <li class="breadcrumb-item active">Messages</li>
            </ul>
          </div>
          <?php if($this->session->userdata('type')=='Admin'):?>
            <section class="tables">   
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">

                        <h3 class="h4">Messages</h3>
                      </div>
                      <div class="card-body">
                        <p>Add or Update Message</p>
                          <form method="post" action="" id="formser">
                            
                    <?php echo validation_errors(); ?>
                            <div class="form-group">       
                              <label class="form-control-label">Sender Name</label>
                              <input type="text" value="<?php echo $mdata['amname'];?>" name="amname" class="form-control">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">Email</label>
                              <input type="text" value="<?php echo $mdata['amemail']; ?>" name="amemail" class="form-control">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">Subject</label>
                              <input type="text" value="<?php echo $mdata['amsubject']; ?>" name="amsubject" class="form-control">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">Message</label>
                              <input type="numbers" value="<?php echo $mdata['ammsg']; ?>" name="ammsg" class="form-control">
                            </div>
                            <input type="hidden" name="amid" value="<?php echo $mdata['amid'];?>">
                            <div class="form-group"> 

                                <input type="submit" value="Add" class="btn btn-success" onclick="sadd();">
                              <?php if($mdata['amid']!==''): ?>      
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
                        <h3 class="h4">Messages</h3>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">                       
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Sender Name</th>
                                <th>Sender Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Modify Message</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($message as $num=>$msgs){
                                echo "
                              <tr>
                                <th scope='row'>".($num+1)."</th>
                                <td>".$msgs['amname']."</td>
                                <td>".$msgs['amemail']."</td>
                                <td>".$msgs['amsubject']."</td>
                                <td>".$msgs['ammsg']."</td>
                                <td>
                                <div class='btn-group'>
                                    <form action='".base_url()."dashboard/messages' method='post'>
                                      <input type='hidden' value='".$msgs['amid']."' name='amid'>
                                      <input type='hidden' value='dashboard/company' name='comp'>
                                      <input type='submit' value='Edit' class='btn btn-success'>
                                    </form>
                                    <form action='".base_url()."messages/delete' method='post'>
                                      <input type='hidden' value='".$msgs['amid']."' name='amid'>
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
          