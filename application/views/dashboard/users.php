  
  <script>
    
        $("#d_users").addClass("active");
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
                  Customers <input type="button" value="Print" class="btn btn-primary printbtn" >
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

                      <?php if($cdata['cid']===''): ?>  
                        <p>Add Company</p>
                      <?php endif;?>
                      <?php if($cdata['cid']!==''): ?>      
                        <p>Update Company</p>
                      <?php endif;?>
                        <form method="post" action="<?php echo base_url();?>company/add" id="formcom">
                          
                  <?php echo validation_errors(); ?>
                          <div class="form-group"  id="acemail" >
                            <label class="form-control-label">Email</label>
                            <input required type="email" value="<?php echo $cdata['cemail']; ?>" name="cemail" class="form-control">
                            <small class="help-block text-danger"></small>
                          </div>
                          <div class="form-group" id="acname">       
                            <label class="form-control-label">Company Name</label>
                            <input required type="text" value="<?php echo $cdata['cname'];?>" name="cname" class="form-control">
                            <small class="help-block text-danger"></small>
                          </div>
                          <input id="acid" type="hidden" name="cid" value="<?php echo $cdata['cid'];?>">
                          <input type="hidden" name="clogo" value="avatar1.jpg">
                          <div class="form-group"> 

                            <?php if($cdata['cid']===''): ?>  
                              <input type="submit" value="Add" class="btn btn-success" onclick="add();" id='addbtn' disabled>
                            <?php endif;?>
                            <?php if($cdata['cid']!==''): ?>      
                              <input type="submit" id="upbtn" value="Update" class="btn btn-success" disabled  onclick="update();">
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
                              <th class="btn-hideto">Modify Company</th>
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
                              <div class='btn-group btn-hideto'>
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
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Customers  <a href='' data-toggle="modal" data-target='#addcustomerm' class="btn btn-primary btn-hideto btn-sm">Add Customer</a></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover table-data">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Customer</th>
                              <th>Email</th>
                              <!--<th>Address</th>-->
                              <th class="btn-hideto">Modify Customer</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($customer as $num=>$cus){
                              //<td>".$cus['cuaddress']."</td>
                              echo "
                            <tr>
                              <th scope='row'>".($num+1)."</th>
                              <td>".$cus['cuname']."</td>
                              <td>".$cus['cuemail']."</td>
                              <td>
                              <div class='btn-group btn-hideto'>
                                  <form action='".base_url()."dashboard/customer' method='post'>
                                    <a class='btn btn-primary edit-customer btn-sm' href=''  data-toggle='modal' data-target='#editcusm'>Edit<input type='hidden' value='".$cus['cuid']."' name='cuid'></a>
                                  </form>
                                  <form action='".base_url()."customer/delete' method='post'>
                                    <input type='hidden' value='".$cus['cuid']."' name='cuid'>
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
  function cuadd(){
      document.getElementById('formcus').action="<?php echo base_url();?>customer/add";
    }
  function cuupdate(){
      
      document.getElementById('formcus').action="<?php echo base_url();?>customer/update";
  }
  function add(){
    alert('wew');
      document.getElementById('formcom').action="<?php echo base_url();?>company/add";
    }
  function update(){
      
      document.getElementById('formcom').action="<?php echo base_url();?>company/update";
    }
</script>

  <!-- Modal -->
  <div class="modal fade" id="editcusm" role="dialog">
    <div class="modal-dialog  modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Customer Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="<?php echo base_url();?>customer/update">
          <div class="modal-body">
                    <div class="form-group"  id="customerName" >
                      <label class="form-control-label">Customer Name</label>
                      <input required type="text" value="" name="cuname" class="form-control" id="cuname">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="customerEmail" >
                      <label class="form-control-label">Email</label>
                      <input required type="email" value="" name="cuemail" class="form-control" id="cuemail">
                      <small class="help-block text-danger"></small>
                    </div>
                    <input id="cuid" type="hidden" name="cuid" value="">
          </div>
          <div class="modal-footer">
            <div class="form-group">     
                <input type="submit" id="cuupbtn" value="Update" class="btn btn-success">
            </div>
          </div>

        </form>
      </div>
      
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="addcustomerm" role="dialog">
    <div class="modal-dialog  modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Service</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="<?php echo base_url();?>customer/add" enctype="multipart/form-data">
          <div class="modal-body">
                    <div class="form-group"  id="acustomerName" >
                      <label class="form-control-label">Customer Name</label>
                      <input required type="text" value="" name="cuname" class="form-control">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group"  id="acustomerEmail" >
                      <label class="form-control-label">Email</label>
                      <input required type="email" value="" name="cuemail" class="form-control">
                      <small class="help-block text-danger"></small>
                    </div>
                    <input type="hidden" name="cuid" value="">
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
      cuname=$('#cuname');
      cuemail=$('#cuemail');
      cuid=$('#cuid');
      $('.edit-customer').click(function(){
        $.ajax({
          url: '<?php echo base_url();?>dashboard/customer',
          type: "POST",
          data: {
            cuid: $(this).find('input').val()
          },
          dataType: 'json',
          success: function(data){
            cuname.val(data['cuname']);
            cuemail.val(data['cuemail']);
            cuid.val(data['cuid']);
          },
          error: function(xhr, textStatus, errorThrown){
                 alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                 return false;
          }
        });
      });
    });
  </script>
<script type="text/javascript">
  $(document).ready(function(){
        add=$('#addbtn');
        up=$('#upbtn');
        cname=$(this).find('#acname');
        cemail=$(this).find('#acemail');
        if($('#acid').val()!=''){
          vcname=cname.find('input').val();
          vcemail=cemail.find('input').val();
        }
        $('.form-control').on('blur change cut paste keyup ready',function(){
          cem=cemail.find('input').val();
          cna=cname.find('input').val();
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    cemail: cem,
                    cname: cna
                  },
                  dataType: 'json',
                  success: function(data){
                    cemail.find('small').html('');
                    cname.find('small').html('');
                    if($('#acid').val()!=''){
                      if((cem==vcemail&&data['cname']=='')){
                        up.removeAttr('disabled');
                      }
                      else if((cna==vcname&&data['cemail']=='')){
                        up.removeAttr('disabled');
                      }
                      else if((cem==vcemail&&cna==vcname)){
                        up.removeAttr('disabled');
                      }
                      else if(data['cname']!=''||data['cemail']!=''){
                        cemail.find('small').html(data['cemail']);
                        cname.find('small').html(data['cname']);
                        up.attr('disabled','disabled');
                        add.attr('disabled','disabled');
                      }
                      else{
                        add.removeAttr('disabled');
                        up.removeAttr('disabled');
                      }
                    }
                    else if(data['cname']!=''||data['cemail']!=''){
                      cemail.find('small').html(data['cemail']);
                      cname.find('small').html(data['cname']);
                      up.attr('disabled','disabled');
                      add.attr('disabled','disabled');
                    }
                    else{
                      add.removeAttr('disabled');
                      up.removeAttr('disabled');
                    }
                    return false;
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        /*
        cemail.find('input').on('blur change cut paste keyup',function(){
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    cemail: $(this).val(),
                    cname: cname.find('input').val()
                  },
                  dataType: 'json',
                  success: function(data){
                    cemail.find('small').html('');
                    if(data['cname']!=''){
                      cemail.find('small').html(data['cemail']);
                      add.attr('disabled','disabled');
                    }
                    else{
                      add.removeAttr('disabled');
                    }
                    return false;
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        cname.find('input').on('blur change cut paste keyup',function(){
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    cname: $(this).val(),
                    cemail: cemail.find('input').val()
                  },
                  dataType: 'json',
                  success: function(data){
                    cname.find('small').html('');
                    if(data['cname']!=''){
                        cname.find('small').html(data['cname']);
                      add.attr('disabled','disabled');
                    }
                    else{
                      add.removeAttr('disabled');
                    }
                    return false;
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });*/
  });
</script>