<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
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
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/dashboard/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>OKAYsion</h1>
                  </div>
                  <p>A Multi-tenant system that will help you have your own website.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <?php echo validation_errors(); ?>
                  <form id="register-form" action="register" method="post">
                    <div class="form-group">
                      <input id="rcname" type="text" name="rcname" required class="input-material">
                      <label for="rcname" class="label-material">Company Name</label>
                    </div>
                    <div class="form-group">
                      <input id="remail" type="email" name="remail" required class="input-material">
                      <label for="remail" class="label-material">Email Address      </label>
                    </div>
                    <div class="form-group">
                      <input id="rpass" type="password" name="rpassword" required class="input-material">
                      <label for="rpass" class="label-material">Password </label>
                    </div>
                    <div class="form-group">
                      <input id="rcpass" type="password" name="rcpassword" required class="input-material">
                      <label for="rcpass" class="label-material">Confirm Password </label>
                    </div>
                    <div class="form-group terms-conditions">
                      <input id="license" type="checkbox" class="checkbox-template">
                      <label for="license"><a href=''>Agree the terms and policy</a></label>
                    </div>
                    <input id="register" type="submit" value="Register" class="btn btn-primary">
                  </form><small>Already have an account? </small><a href="<?php echo base_url();?>login" class="signup">Log in</a>
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
	
    <!-- Javascript files-->
    <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>assets/dashboard/js/front.js"></script>
  </body>
</html>