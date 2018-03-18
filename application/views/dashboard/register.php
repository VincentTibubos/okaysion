<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OKAYsion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/8czrGpnqi.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid ">
      <div id="logo" class="pull-left">
        <h1><a href="<?php echo base_url();?>">OKAYsion</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

     </div>
  </header><!-- #header -->


    <div class="page login-page">
      <div class="container  d-flex align-items-center ">
        <div class="form-holder"style="margin-top:50px;">

          <div class="row">

            <!-- Form Panel    -->

            <div class="col-md-6">
			     </div>
            <div class="col-md-6 bg-white" id="reg1">
              <div class="form d-flex align-items-center">
                <div class="content">

                 <?php echo form_open_multipart('register')?>
                        <div id="form1">
                          <h2 class='form-group text-secondary'>Join OKAYsion</h2>
                          <div class="form-group" id='compname'>
                            <input id="rcname" type="text" name="cname" required class="input-material">
                            <label for="rcname" class="label-material">Company Name</label>
                            <small class="help-block text-danger"><?php echo form_error('cemail');?></small>
                          </div>
                          <div class="form-group" id='compemail'>
                            <input id="remail" type="email" name="cemail" required class="input-material">
                            <label for="remail" class="label-material">Email Address</label>
                            <small class="help-block text-danger"><?php echo form_error('cemail');?></small>
                          </div>
                          <div class="form-group" id='comppass'>
                            <input id="rpass" type="password" name="rpassword" required class="input-material" title="minimum of 6 characters">
                            <label for="rpass" class="label-material">Password </label>
                            <small class="help-block text-danger"><?php echo form_error('rpassword');?></small>
                          </div>
                          <div class="form-group"  id='compcpass'>
                            <input id="rcpass" type="password" name="rcpassword" required class="input-material" title="minimum of 6 characters">
                            <label for="rcpass" class="label-material">Confirm Password </label>
                            <small class="help-block text-danger"><?php echo form_error('rcpassword');?></small>
                          </div>
                         <!-- <div class="form-group"  id='complogo'>
                            <input id="logo" type="file" name="userfile" class="form-control-file" size="20" value="input"style="color:grey">
                            <small class="help-block text-danger"><?php echo form_error('clogo');?></small>
                          </div>-->
                          <div class="form-group terms-conditions" id='compag'>
                            <input id="license" type="checkbox" class="checkbox-template">
                            <label for="license"><a data-toggle="modal" href="" data-target="#modalAgree">I Agree to terms and policy</a></label>
                          </div>
                          <div class="form-group">
                            <input id="button1" type="submit" value="Register" class="btn btn-primary input-material">
                          </div>
                        </div><!--
                        <div id="form2">
                          <h2 class='form-group text-secondary'>Company Website:</h2>
                          <div class="form-group" id='compwelcome'>
                            <input id="welcomec" type="text" name="rwelcome" required class="input-material" >
                            <label for="welcomec" class="label-material">Welcome Message</label>
                            <small class="help-block text-danger"></small>
                          </div>
                          <div class="form-group" id='compabout'>
                            <label for="aboutc" class="text-secondary">About Company:</label>
                            <textarea id="aboutc" name="rabout" rows="5" required class="input-material" style="width: 100%"></textarea>
                            <small class="help-block text-danger"></small>
                          </div>
                          <div class="input-group" id='compurl' style="margin-bottom: 30px;">
                            <input id="urlc" type="text" name="rurl" required class="input-material" style="width:90%">
                            <label for="urlc" class="label-material">Website Url</label>
                            <h4 class="text-secondary" style="width:10%; padding-top: 16px">.com</h4>
                            <small class="help-block text-danger"></small>
                          </div>
                          <div class="form-group" id='compaddress'>
                            <input id="addrec" type="text" name="raddre" required class="input-material" >
                            <label for="addrec" class="label-material">Address</label>
                            <small class="help-block text-danger"></small>
                          </div>
                          <div class="form-group" id='compphone'>
                            <input id="phonec" type="text" name="rphone" required class="input-material" >
                            <label for="phonec" class="label-material">Phone</label>
                            <small class="help-block text-danger"></small>
                          </div>
                          <div class="form-group">
                            <div class="btn-group btn-block">
                              <input id="back2" type='button' value="Back" class="btn btn-danger input-material">
                              <input id="button2" type='submit' value="Register" class="btn btn-primary input-material">
                            </div>
                          </div>
                          <div class="btn-group btn-block form-group">
                          </div>
                        </div>
                        <div id="formlast">
                          <input id="register" type="submit" value="Register" class="btn btn-primary">
                        </div>-->
                  </form>
                  <small>Already have an account?     </small><a href="<?php echo base_url();?>login" class="signup">Log in</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!--<div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a>-->
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)
        </p>
      </div>
    </div>-->
    <div class="modal fade" id="modalAgree" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->

        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">OKAYsion Terms of Service</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
                      <h5>1. Terms</h5>
                      <p>By accessing the website at <a href="<?php echo base_url()?>">http://okaysion.com</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>
                      <h5>2. Use License</h5>
                      <ol type="a">
                         <li>Permission is granted to temporarily download one copy of the materials (information or software) on OKAYsion's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                         <ol type="i">
                             <li>modify or copy the materials;</li>
                             <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                             <li>attempt to decompile or reverse engineer any software contained on OKAYsion's website;</li>
                             <li>remove any copyright or other proprietary notations from the materials; or</li>
                             <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                         </ol>
                          </li>
                         <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by OKAYsion at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
                      </ol>
                      <h5>3. Disclaimer</h5>
                      <ol type="a">
                         <li>The materials on OKAYsion's website are provided on an 'as is' basis. OKAYsion makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
                         <li>Further, OKAYsion does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
                      </ol>
                      <h5>4. Limitations</h5>
                      <p>In no event shall OKAYsion or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on OKAYsion's website, even if OKAYsion or a OKAYsion authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
                      <h5>5. Accuracy of materials</h5>
                      <p>The materials appearing on OKAYsion website could include technical, typographical, or photographic errors. OKAYsion does not warrant that any of the materials on its website are accurate, complete or current. OKAYsion may make changes to the materials contained on its website at any time without notice. However OKAYsion does not make any commitment to update the materials.</p>
                      <h5>6. Links</h5>
                      <p>OKAYsion has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by OKAYsion of the site. Use of any such linked website is at the user's own risk.</p>
                      <h5>7. Modifications</h5>
                      <p>OKAYsion may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>
                      <h5>8. Governing Law</h5>
                      <p>These terms and conditions are governed by and construed in accordance with the laws of technological university of the philippines and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
          </div>
          <div class="modal-footer">

            <input id="areg" hidden type="submit" value="Agree" class="btn  btn-primary" data-dismiss="modal" >
            <input id="creg" type="submit" value="OK" class="btn  btn-primary" data-dismiss="modal">
            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
        </div>
      </div>
    </div>

    <!-- Javascript files-->
    <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>assets/dashboard/js/front.js"></script>
    <script>
    </script>
    <script type="">
      //$('#form1').hide();
      $('#formlast').hide();
      $('#form2').hide();
      $(document).ready(function(){

        regi=$(this).find('#button1');
          if($('#license').is(':checked'))
            regi.removeAttr('disabled');
          else
            regi.attr('disabled','disabled');

        cname=$(this).find('#compname');
        cemail=$(this).find('#compemail');
        cpass=$(this).find('#comppass');
        ccpass=$(this).find('#compcpass');
        clogo=$(this).find('#complogo');
        license=$(this).find('#license');
        $('#license').change(function(){
          wew=$(this).is(':checked');
          if(wew)
            regi.removeAttr('disabled');
          else
            regi.attr('disabled','disabled');
        });
        ccpass.find('input').on('blur change cut paste keyup',function(){
          //alert(cpass.find('input').val());
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    cpass: cpass.find('input').val(),
                    ccpass: $(this).val()
                  },
                  dataType: 'json',
                  success: function(data){
                    ccpass.find('small').html('');
                    if(data['ccpass']!=''){
                        ccpass.find('small').html(data['ccpass']);
                    }
                    return false;
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        cpass.find('input').on('blur change cut paste keyup',function(){
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    ccpass: ccpass.find('input').val(),
                    cpass: $(this).val()
                  },
                  dataType: 'json',
                  success: function(data){
                    ccpass.find('small').html('');
                    cpass.find('small').html('');
                    if(data['cpass']!=''){
                        cpass.find('small').html(data['cpass']);
                    }
                    else if(data['ccpass']!=''){
                        ccpass.find('small').html(data['ccpass']);
                    }
                    return false;
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        cemail.find('input').on('blur change cut paste keyup',function(){
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    cemail: $(this).val()
                  },
                  dataType: 'json',
                  success: function(data){
                    cemail.find('small').html('');
                    if(data['cname']!=''){
                        cemail.find('small').html(data['cemail']);
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
                    cname: $(this).val()
                  },
                  dataType: 'json',
                  success: function(data){
                    cname.find('small').html('');
                    if(data['cname']!=''){
                        cname.find('small').html(data['cname']);
                    }
                    return false;
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        $(regi).click(function(e){
                     // e.preventDefault();
          name=cname.find('input').val();
          email=cemail.find('input').val();
          pass=cpass.find('input').val();
          conpass=ccpass.find('input').val();
          logo=clogo.find('input').val();
          //alert(name+' '+email+' '+pass+' '+conpass+' '+logo);
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    cname: name,
                    cemail: email,
                    cpass: pass,
                    ccpass: conpass,
                    clogo: logo
                  },
                  dataType: 'json',
                  success: function(data){
                    //alert('success= '+ data['cname']+' '+ data['cemail']+' '+ data['cpass']+' '+ data['ccpass']);
                    if(data['cname']==''&&data['cemail']==''&&data['cpass']==''&&data['ccpass']==''){
                      //alert('form success');
                      $('#form1').hide();
                      $('#form2').show();
                    }
                    else{
          //init error msgs
                        cname.find('small').html('');
                        cemail.find('small').html('');
                        cpass.find('small').html('');
                        ccpass.find('small').html('');
                        //clogo.find('small').html('');
                      //xsaas
                        if(data['cname']!=''){
                          cname.find('small').html(data['cname']);
                        }
                        if(data['cemail']!=''){
                          cemail.find('small').html(data['cemail']);
                        }
                        if(data['cpass']!=''){
                          cpass.find('small').html(data['cpass']);
                        }
                        if(data['ccpass']!=''){
                          ccpass.find('small').html(data['ccpass']);
                        }
                        e.preventDefault();
                        //alert('prevented');
                        return false;
                    }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });/*
        $('#button2').click(function(){
         //alert('grabh');
          //alert(name+email+pass+conpass+logo);
         $.ajax({
                  url: '<?php echo base_url();?>register',
                  type: "POST",
                  data: {
                    cname: 'abamatindi',//name,
                    cemail: 'mal@kas',//email,
                    cpass: '123',//pass,
                    ccpass: '123',//conpass,
                    userfile: 'C:/xampp/htdocs/okaysion/assets/img/portfolio/card1.jpg'//logo
                  },
               //   dataType: 'json',
                  success: function(data){
                    alert(data+" success");
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        $('#back2').click(function(){

          $('#form2').hide();
          $('#form1').show();
        });*/
      });
    </script>
  </body>
</html>
