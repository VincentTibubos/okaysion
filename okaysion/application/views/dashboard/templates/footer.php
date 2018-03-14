
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>OKAYsion &copy; 2018</p>
                  <?php if($this->session->userdata('type')=='Company'){
                    $thiday=strtotime($this->session->userdata('ccreated').'+ 30 days');
                    $numdays= ($thiday-time());
                    $numdays=round($numdays/(60*60*24));
                    if($numdays<0){
                      $numdays=0;
                    }
                    if($numdays<=1){
                      echo $numdays.' day left';
                    }
                    else{
                      echo $numdays.' days left';
                    }
                  }?>
                </div>

               <!--
 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Hi Admin!</h2>
            </div>
          </header>

                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's
				  development at https://bootstrapious.com/donate. It is part of the license conditions.
				  Thank you for understanding :)
                </div>-->
              </div>
            </div>
          </footer>

        </div>
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="logoutm" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Logout</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Do you really want to logout?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal"  onclick="redirout();">Yes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
      </div>

    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="editaccm" role="dialog">
    <div class="modal-dialog  modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Account</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="<?php echo base_url();?>company/update" id="formcom">
          <div class="modal-body">

                    <div class="form-group"  id="aacemail" >
                      <label class="form-control-label">Email</label>
                      <input required type="email" value="" name="cemail" class="form-control emailAndName">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group" id="aacname">
                      <label class="form-control-label">Company Name</label>
                      <input required type="text" value="" name="cname" class="form-control emailAndName">
                      <small class="help-block text-danger"></small>
                    </div>
                    <input id="aacid" type="hidden" name="cid" value="<?php echo $this->session->userdata('cid');?>">
                    <input type="hidden" name="clogo" value="avatar1.jpg">

          </div>
          <div class="modal-footer">
            <div class="form-group">
                <input type="submit" id="aupbtn" value="Update" class="btn btn-success" disabled>
            </div>
          </div>

        </form>
      </div>

    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="editpassm" role="dialog">
    <div class="modal-dialog  modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="<?php echo base_url();?>company/updatepass" id="formedit">
          <div class="modal-body">
                    <div class="form-group"  id="aacpass" >
                      <label class="form-control-label">Enter Password</label>
                      <input required type="password" value="" name="cpass" class="form-control changePass">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group" id="aacnpass">
                      <label class="form-control-label">New Password</label>
                      <input required type="password" value="" name="cnpass" class="form-control changePass">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group" id="aaccpass">
                      <label class="form-control-label">Confirm Password</label>
                      <input required type="password" value="" name="ccpass" class="form-control changePass">
                      <small class="help-block text-danger"></small>
                    </div>
                    <input id="epcid" type="hidden" name="cid" value="<?php echo $this->session->userdata('cid');?>">
          </div>
          <div class="modal-footer">
            <div class="form-group">
                <input type="submit" id="aupPassbtn" value="Update" class="btn btn-success">
            </div>
          </div>

        </form>
      </div>

    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="editwebm" role="dialog">
    <div class="modal-dialog  modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Website</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="<?php echo base_url();?>company/updateweb" id="formeditweb">
          <div class="modal-body">
                    <div class="form-group"  id="aacwelcome" >
                      <label class="form-control-label">Welcome message</label>
                      <input required type="text" value="" name="cwelcome" class="form-control changeWeb text-secondary">
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group" id="aacabout">
                            <label for="aboutc" class="text-secondary">About Company</label>
                            <textarea name="cabout" rows="5" required class="input-material changeWeb text-secondary" style="width: 100%"></textarea>
                            <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group" id="aacurl">
                      <label for="curl" class="form-control-label">Url</label>
                      <div class='input-group'>
                        <input  id='curl' required type="text" value="" name="curl" class="form-control changeWeb text-secondary" style="width: 80%; margin-right: 0px;">
                        <h4 class='text-secondary' style="width:20%; padding: 7px 7px;">.com</h4>
                      </div>
                        <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group" id="aactemplate">
                      <label class="form-control-label">Template</label>
                      <div class='input-group'>
                        <select class="form-control text-secondary" name="ctemplate">
                              <option value='1'>Template 1</option>
                              <option value='2'>Template 2</option>
                        </select>
                      </div>
                        <small class="help-block text-danger"></small>
                    </div>
                    <input id="ewcid" type="hidden" name="cid" value="<?php echo $this->session->userdata('cid');?>">
          </div>
          <div class="modal-footer">
            <div class="form-group">
                <input type="button" id="aupWebbtn" value="Update" class="btn btn-success">
            </div>
          </div>

        </form>
      </div>

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function(){

        add=$('#aaddbtn');
        up=$('#aupbtn');
        editpass=$('#aupPassbtn');
        editweb=$('#aupWebbtn');
        formedit=$('#formedit');
        formeditweb=$('#formeditweb');
        cname=$(this).find('#aacname');
        cemail=$(this).find('#aacemail');
        cpass=$(this).find('#aacpass');
        cnpass=$(this).find('#aacnpass');
        ccpass=$(this).find('#aaccpass');
        cwelcome=$(this).find('#aacwelcome');
        cabout=$(this).find('#aacabout');
        curl=$(this).find('#aacurl');
        ctemplate=$(this).find('#aactemplate');
        if($('#ewcid').val()!=''){
          vcurl=curl.find('input').val();
        }
        if($('#aacid').val()!=''){
          vcname=cname.find('input').val();
          vcemail=cemail.find('input').val();
        }
        $('#editacc').click(function(){
           $.ajax({
                  url: '<?php echo base_url();?>dashboard/company',
                  type: "POST",
                  data: {
                    cid: '<?php echo $this->session->userdata('cid');?>'
                  },
                  dataType: 'json',
                  success: function(data){
                    cname.find('input').val(data['cname']);
                    cemail.find('input').val(data['cemail']);
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        $('#editweb').click(function(){
           $.ajax({
                  url: '<?php echo base_url();?>dashboard/company',
                  type: "POST",
                  data: {
                    cid: '<?php echo $this->session->userdata('cid');?>'
                  },
                  dataType: 'json',
                  success: function(data){
                    data['curl']=data['curl'].substring(0,data['curl'].lastIndexOf(".com"));
                    vcwelcome=data['cwelcome'];
                    vcurl=data['curl'];
                    vcabout=data['cabout'];
                    cwelcome.find('input').val(data['cwelcome']);
                    cabout.find('textarea').val(data['cabout']);
                    curl.find('input').val(data['curl']);
                    ctemplate.find('select').val(data['ctemplate']);
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        $('.emailAndName').on('blur change cut paste keyup ready',function(){
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
        editweb.on('click',function(e){
          cwel=cwelcome.find('input').val();
          cab=cabout.find('textarea').val();
          cur=curl.find('input').val();
                      cwelcome.find('small').html('');
                      cabout.find('small').html('');
                      curl.find('small').html('');
          e.preventDefault();
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    cid: '<?php echo $this->session->userdata("cid");?>',
                    cwelcome: cwel,
                    cabout: cab,
                    curl: cur
                  },
                  dataType: 'json',
                  success: function(data){
                    if(data['cwelcome']==''&&data['cabout']==''&&vcurl==cur){

                        formeditweb.submit();
                        return true;
                    }
                     else if(data['cwelcome']!=''||data['cabout']!=''||data['curl']!=''){
                        cwelcome.find('small').html(data['cwelcome']);
                        cabout.find('small').html(data['cabout']);
                        curl.find('small').html(data['curl']);
                        return false;
                      }
                      else{
                        formeditweb.submit();
                        return true;
                      }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });

        editpass.on('click',function(e){
          cpa=cpass.find('input').val();
          cnpa=cnpass.find('input').val();
          ccpa=ccpass.find('input').val();

                      cpass.find('small').html('');
                      cnpass.find('small').html('');
                      ccpass.find('small').html('');
          e.preventDefault();
          $.ajax({
                  url: '<?php echo base_url();?>company/checkpass',
                  type: "POST",
                  data: {
                    cid: '<?php echo $this->session->userdata("cid");?>',
                    cpass: cpa,
                    cnpass: cnpa,
                    ccpass: ccpa
                  },
                  dataType: 'json',
                  success: function(data){
                      if(data['cpass']!=''||data['cnpass']!=''||data['ccpass']!=''){
                        cpass.find('small').html(data['cpass']);
                        cnpass.find('small').html(data['cnpass']);
                        ccpass.find('small').html(data['ccpass']);
                        return false;
                      }
                      else{
                        formedit.submit();
                        return true;
                      }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
  });
  //setInterval(checkIsLoggedIn, 1000);
  function checkIsLoggedIn(){
    $.ajax({
                  url: '<?php echo base_url();?>IsLoggedIn',
                  type: "POST",
                  data: {
                    cid: '<?php echo $this->session->userdata('cid');?>'
                  },
                  //dataType: 'json',
                  success: function(data){
                    if(data!='1'){
                      location.reload();
                    }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
    });

  }
  /*
    var login='<?php if($this->session->userdata("logged_in")==true){
      echo "true";
    }
    else
      echo "false";
      ?>';

    alert(login);
    if(login=='false'){

      location.reload();
      //window.location.replace("<?php echo base_url();?>");
    }*/
</script>
    <!-- Javascript files-->
    <script src="<?php echo base_url();?>/assets/lib/jquery/jquery.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/ajax/jquery.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>/assets/dashboard/js/front.js"></script>


    <script>
      function redirout(){
              window.location="<?php echo base_url()?>logout";
      }
    </script>

  </body>
</html>
