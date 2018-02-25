<!DOCTYPE html>
<html>
  <head>
    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <title>OKAYsion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow"> 
	
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/css/glyphicons.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/css/fontastic.css">
  <link href="<?php echo base_url();?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/css/bootstrap-datetimepicker.min.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/8czrGpnqi.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<style type="text/css">
.okicon{
  margin: 0px 10px;
}
  .calendar {
    font-size: 20px;
  }
  table.calendar{
    margin: auto;
    border-collapse: collapse;
  }
  .calendar .days td{
    width: 80px; height: 80px; padding: 4px;
    vertical-align: top; background-color: #DEF;
    border: 1px solid #dee2e6;
  }
  .calendar .days td :hover{
    background-color: #fff; 
  }
  .calendar .highlight{
    font-weight: bold;
    color: #00f;  
  }
  .content {
    font-size: 10px;
    padding: 0px 5px;
  }
  .maincontent{

    color: white;
  }
  .calendar .days > .other-month{
    background-color: #EEF;
    color: gray;
  }
</style>
    <script src="<?php echo base_url();?>/assets/lib/jquery/jquery.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/ajax/jquery.min.js"> </script>
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="<?php echo base_url();?>" class="navbar-brand">
                  <div class="brand-text brand-big"><span>OKAYsion</span></div>
                  <div class="brand-text brand-small"><strong><img src="<?php echo base_url();?>/assets/img/icon.png"></strong></div></a>
               
			   <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
          
                <!-- Logout    -->
                <li class="nav-item"><a href="" class="nav-link logout" data-toggle="modal" data-target="#logoutm">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo base_url().'assets/img/logo/'.$this->session->userdata('clogo');?>" alt="..." class="rounded-circle" style="height:55px;width:55px;"></div>
            <div class="title">
              <h1 class="h4"><?php echo $this->session->userdata('cname');?></h1>
              <p><?php echo $this->session->userdata('type');?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li id="d_index"><a href="<?php echo base_url();?>dashboard/index"> <i class="icon-home"></i>Home </a></li>
                    <li id="d_messages"><a href="<?php echo base_url();?>dashboard/messages"> <i class="icon-mail"></i>Messages</a></li>

          <?php if($this->session->userdata('type')=='Company'): ?>
                    <li id="d_users"><a href="<?php echo base_url();?>dashboard/customer"> <i class="icon-user"></i>Customers</a></li>
          <?php endif;?>
          <?php if($this->session->userdata('type')=='Company'): ?>
                    <li id="d_service"><a href="<?php echo base_url();?>dashboard/service"> <i class="icon-user"></i>Services</a></li>
          <?php endif;?>
          <?php if($this->session->userdata('type')=='Admin'): ?>
                    <li id="d_users"><a href="<?php echo base_url();?>dashboard/company"> <i class="icon-user"></i>Companies</a></li>
          <?php endif;?>

                <?php if($this->session->userdata('type')=='Admin'): ?>
                  
                    <li id="d_forms"><a href="<?php echo base_url();?>dashboard/forms"> <i class="icon-padnote"></i>Sample</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('type')=='Company'): ?>
                  
                    <li id="d_forms"><a href="<?php echo base_url();?>dashboard/calendar"> <i class="icon-padnote"></i>Calendar</a></li>   
                <?php endif; ?>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                      </ul>
                    </li>
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul>
        </nav>