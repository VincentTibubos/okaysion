  
  <script>
        $("#d_service").addClass("active");
  </script>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">
                <?php if($this->session->userdata('type')=='Admin'): ?>
                  Companies <input type="button" value="Print" class="btn btn-primary printbtn" >    
                <?php endif; ?>
                <?php if($this->session->userdata('type')=='Company'): ?>
                  Services  <input type="button" value="Print" class="btn btn-primary printbtn" >
                <?php endif; ?>
              </h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Home</a></li>

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
              <div class="row"><!--
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
                </div>-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Services <a href='' data-toggle="modal" data-target='#addservicem' class="btn btn-primary btn-hideto btn-sm">Add Service</a></h3> 
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover table-data" id="service_tbl">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Service</th>
                              <th>Description</th>
                              <th>Venue</th>
                              <th>Price</th>
                              <th class="btn-hideto">Modify Service</th>
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
                              <div class='btn-group btn-hideto'>
                                  <form action='".base_url()."dashboard/service' method='post'>
                                    <a class='btn btn-primary edit-service btn-sm' href=''  data-toggle='modal' data-target='#editservicem'>Edit<input type='hidden' value='".$ser['sid']."' name='sid'></a>
                                  </form>
                                  <form action='".base_url()."service/delete' method='post'>
                                    <input type='hidden' value='".$ser['sid']."' name='sid'>
                                    <input type='hidden' value='dashboard/company' name='comp'>
                                    <input type='submit' value='Delete' class='btn btn-danger btn-sm'>
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

  <!-- Modal -->
  <div class="modal fade" id="editservicem" role="dialog">
    <div class="modal-dialog  modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Service</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="<?php echo base_url();?>service/update"  enctype="multipart/form-data">
          <div class="modal-body">
                    <div class="form-group"  id="serviceName" >
                      <label class="form-control-label">Service Name</label>
                      <input required type="text" value="" name="sname" class="form-control" id="sname">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="EServiceImage" >
                      <label class="form-control-label">Service Image</label>
                      <input type="file" value="" name="image" class="form-control">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="serviceDescription" >
                      <label class="form-control-label">Description</label>
                      <input required type="text" value="" name="sdescription" class="form-control" id="sdescription">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="serviceVenue" >
                      <label class="form-control-label">Venue</label>
                      <input required type="text" value="" name="svenue" class="form-control" id="svenue">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="servicePrice" >
                      <label class="form-control-label">Price</label>
                      <input required id="sprice" onkeypress="return event.charCode >= 48&&event.charCode <= 57" type="number" value="" name="sprice" class="form-control">
                      <small class="help-block text-danger"></small>
                    </div>
                    <input id="sid" type="hidden" name="sid" value="">
          </div>
          <div class="modal-footer">
            <div class="form-group">     
                <input type="submit" id="serupbtn" value="Update" class="btn btn-success">
            </div>
          </div>

        </form>
      </div>
      
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="addservicem" role="dialog">
    <div class="modal-dialog  modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Service</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="<?php echo base_url();?>service/add" enctype="multipart/form-data">
          <div class="modal-body">
                    <div class="form-group"  id="serviceName" >
                      <label class="form-control-label">Service Name</label>
                      <input required type="text" value="" name="sname" class="form-control">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="serviceImage" >
                      <label class="form-control-label">Service Image</label>
                      <input required type="file" value="" name="image" class="form-control">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="serviceDescription" >
                      <label class="form-control-label">Description</label>
                      <input required type="text" value="" name="sdescription" class="form-control" >
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="serviceVenue" >
                      <label class="form-control-label">Venue</label>
                      <input required type="text" value="" name="svenue" class="form-control">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="servicePrice" >
                      <label class="form-control-label">Price</label>
                      <input required onkeypress="return event.charCode >= 48&&event.charCode <= 57" type="number" value="" name="sprice" class="form-control">
                      <small class="help-block text-danger"></small>
                    </div>
          </div>
          <div class="modal-footer">
            <div class="form-group">     
                <input type="submit" value="Add" class="btn btn-success" id="add-service">
            </div>
          </div>

        </form>
      </div>
      
    </div>
  </div>

    <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"> </script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"> </script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
    
  <script type="text/javascript">
    $(document).ready(function(){
      asimg=$('#serviceImage');
      esimg=$('#EServiceImage');
      errimage=asimg.find('small');
      eerrimage=esimg.find('small');
      $('#add-service').click(function(e){
        var aimage=asimg.find('input').val();
        var ext=aimage.split('.').pop().toLowerCase();
        if(aimage==''){
          errimage.html('Please select an image');
          e.preventDefault();
          return false;
        }
        else if(ext!='jpg'&&ext!='gif'&&ext!='jpeg'&&ext!='png'){
          errimage.html('Invalid Image File');
          asimg.find('input').val('');
          e.preventDefault();
          return false;
        }
      });
      $('#serupbtn').click(function(e){
        var eimage=esimg.find('input').val();
        var ext=eimage.split('.').pop().toLowerCase();
        if(eimage!=''&&(ext!='jpg'&&ext!='gif'&&ext!='jpeg'&&ext!='png')){
          eerrimage.html('Invalid Image File');
          esimg.find('input').val('');
                    e.preventDefault();
          return false;
        }
      });
      sname=$('#sname');
      sid=$('#sid');
      sdescription=$('#sdescription');
      svenue=$('#svenue');
      sprice=$('#sprice');
      $('.edit-service').click(function(){
        $.ajax({
          url: '<?php echo base_url();?>dashboard/service',
          type: "POST",
          data: {
            sid: $(this).find('input').val()
          },
          dataType: 'json',
          success: function(data){
            sname.val(data['sname']);
            sdescription.val(data['sdescription']);
            svenue.val(data['svenue']);
            sprice.val(data['sprice']);
            sid.val(data['sid']);
          },
          error: function(xhr, textStatus, errorThrown){
                 alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                 return false;
          }
        });
      });
    });
  </script>