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
    <!-- Custom stylesheet - for your changes
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon
    <link rel="shortcut icon" href="img/favicon.ico">-->
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
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="<?php echo base_url();?>">OKAYsion</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
     </div>
  </header><!-- #header -->

  <!-- LOG IN -->
  <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder" style="margin-top:50px;">
          <div class="row">

            <!-- Form Panel-->
            <div class="col-lg-3">
			      </div>

            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <?php echo validation_errors();?>
                  <?php 
                    if($this->session->flashdata('login_failed')): ?>
                    <?php echo "<p class='alert alert-danger'>".$this->session->flashdata('login_failed')."</p>"?>
                   <?php endif;?>
                  <?php
                    if($this->session->flashdata('user_registered')): ?>
                    <?php echo "<p class='alert alert-success'>".$this->session->flashdata('user_registered')."</p>"?>
                   <?php endif;?>

                  <?php
                    if($this->session->flashdata('logged_out')): ?>
                    <?php echo "<p class='alert alert-danger'>".$this->session->flashdata('logged_out')."</p>"?>
                   <?php endif;?>
                  <h2 class='form-group text-secondary'>Log in to OKAYsion</h2>
                  <p id="inv" class="help-block text-danger"></p>
                  <form id="login-form" action="login" method="post">
                    <div class="form-group" id='lemail-group'>
                      <input id="lemail" type="email" name="lemail" required class="input-material">
                      <label for="lemail" class="label-material active">Email Address      </label>
                      <small class="help-block text-danger"></small>
                    </div>
                    <div class="form-group" id='lpass-group'>
                      <input id="lpass" type="password" name="lpassword" required class="input-material">
                      <label for="lpass" class="label-material active">Password </label>
                      <small class="help-block text-danger"></small>
                    </div>
                    <input id="loginr" type="button" value="Log in" class="btn btn-primary">
                  </form>
				  <br>
                  <small>Doesn't have an account? </small><a href="<?php echo base_url();?>register" class="signup">Register</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
            </div>
          </div>
        </div>
      </div>

       <!-- <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a>-->
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->

    </div>



  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/wow/wow.min.js"></script>

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
      $(document).ready(function(){
        passg=$(this).find('#lpass-group');
        emailg=$(this).find('#lemail-group');
        passin=passg.find('input');
        emailin=emailg.find('input');
        loginr=$(this).find('#loginr');
        invalid=$(this).find('#inv');
        //alert(passin.val()+emailin.val());

        if(passin.val()!=''){
            passg.find('label').addClass('active');
        }
        if(emailin.val()!=''){
            emailg.find('label').addClass('active');
        }
        loginr.click(function(e){
          check=true;
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    lpass: passin.val(),
                    lemail: emailin.val()
                  },
                  dataType: 'json',
                  success: function(data){
                    //location='wew';
                    //location.reload();
                    passg.find('small').html('');
                    emailg.find('small').html('');
                    invalid.html('');
                    if(data['lpass']==''&&data['lemail']==''){
                      //return true;
                      $.ajax({
                        url: '<?php echo base_url();?>login',
                        type: 'POST',
                        data: {
                          lpassword: passin.val(),
                          lemail: emailin.val()
                        },
                        success: function(data){
                          window.location.href = "<?php echo base_url().'dashboard'?>";
                        },
                        error: function(xhr, textStatus, errorThrown){
                               return false;
                        }
                      });
                      //$(this).submit();
                    }
                    else if(data['lpass']=='1'||data['lemail']=='1'){
                      //loginr.attr('type','submit');
                      invalid.html('Invalid Email or password');
                      //alert('invalid');
                      check=false;
                    }/*
                    else{
                      loginr.attr('type','button');
                      if(data['lpass']!=''){
                          passg.find('small').html(data['lpass']);
                      }
                      if(data['lemail']!=''){
                          emailg.find('small').html(data['lemail']);
                      }
                      alert('required');
                      check=false;
                    }*/

          //alert(check);
          if(check){
            $(this).attr('type', 'submit');
            $(this).click();
            return true;

          }
          else{
            e.preventDefault();
            return false;
          }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         return false;
                  }
          });
        });
        //password checker
        /*
        passin.on('ready change blur click keyup paste cut',function(){

          if(passin.val()!=''){

              passg.find('label').addClass('active');
              //alert('added');
          }
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    lpass: $(this).val(),
                    lemail: emailin.val()
                  },
                  dataType: 'json',
                  success: function(data){
                    //alert(data['error'])
                    passg.find('small').html('');
                    emailg.find('small').html('');
                    if(data['lpass']==''&&data['lemail']==''){
                      loginr.attr('type','submit');
                    }
                    else{
                      loginr.attr('type','button');
                      if(data['lpass']!=''){
                          passg.find('small').html(data['lpass']);
                      }

                      if(data['lemail']!=''){
                          emailg.find('small').html(data['lemail']);
                      }
                      return false;
                    }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        emailin.on('ready change blur click keyup paste cut',function(){
          if(emailin.val()!=''){
              emailg.find('label').addClass('active');
              //alert('added');
          }
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    lpass: passin.val(),
                    lemail: emailin.val()
                  },
                  dataType: 'json',
                  success: function(data){
                    //alert(data['error']);
                    emailg.find('small').html('');
                    passg.find('small').html('');

                    if(data['lpass']==''&&data['lemail']==''){
                      loginr.attr('type','submit');
                    }
                    else{
                      loginr.attr('type','button');
                      if(data['lpass']!=''){
                        //alert(data['lpass']);
                          passg.find('small').html(data['lpass']);
                      }
                      if(data['lemail']!=''){
                          emailg.find('small').html(data['lemail']);
                      }
                      return false;
                    }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        */
      });
    </script>
  </body>
</html>
