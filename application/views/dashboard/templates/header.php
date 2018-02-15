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
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dashboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/dashboard/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <script src="<?php echo base_url();?>/assets/lib/jquery/jquery.min.js"> </script>
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
                <!-- Navbar Brand --><a href="<?php echo base_url();?>dashboard/index" class="navbar-brand">
                  <div class="brand-text brand-big"><span>OKAYsion</span></div>
                  <div class="brand-text brand-small"><strong>OK</strong></div></a>
               
			   <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
          
                <!-- Logout    -->
                <li class="nav-item"><a href="<?php echo base_url();?>" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
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
            <div class="avatar"><img src="<?php echo base_url();?>/assets/dashboard/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Mark Stephen</h1>
              <p>Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li id="d_index"><a href="<?php echo base_url();?>dashboard/index"> <i class="icon-home"></i>Home </a></li>
                    <li id="d_messages"><a href="<?php echo base_url();?>dashboard/messages"> <i class="icon-mail"></i>Messages</a></li>
                    <li id="d_users"><a href="<?php echo base_url();?>dashboard/users"> <i class="icon-user"></i>Users</a></li>
                    <li id="d_forms"><a href="<?php echo base_url();?>dashboard/forms"> <i class="icon-padnote"></i>Sample</a></li>
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