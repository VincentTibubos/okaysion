<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $web['cname'];?></title>

    <link href="<?php echo base_url().'assets/img/logo/'.$web['clogo'];?>" rel="icon">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/template1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/template1/css/heroic-features.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/template1/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/template1/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/template1/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/template1/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/template1/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><?php echo $web['cname'];?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3"><?php echo $web['cwelcome'];?></h1>
        <p class="lead"><?php echo $web['cabout'];?></p>
        <a href="#" class="btn-get-started scrollto">Get Started</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card1">
            <img class="card-img-top" src="<?php echo base_url();?>assets/template1/img/images-10.jpg" alt="">
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card2">
            <img class="card-img-top" src="<?php echo base_url();?>assets/template1/img/images-11.jpg" alt="">
            
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card3">
            <img class="card-img-top" src="<?php echo base_url();?>assets/template1/img/images-16.jpg" alt="">
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card4">
            <img class="card-img-top" src="<?php echo base_url();?>assets/template1/img/Corporate-Event.jpg" alt="">
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
 <section class="md-section" id="id-5">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 ">
								
								<!-- title -->
								<div class="title">
									<h2 class="title__title">CONTACT US</h2>
								</div><!-- End / title -->
								
								<div class="mb-40">
									
									<!-- contact -->
									<div class="contact">
										<h4 class="contact__title">Address</h4>
										<div><?php echo $web['caddress'];?></div>
									</div><!-- End / contact -->
									
									
									<!-- contact -->
									<div class="contact">
										<h4 class="contact__title">Email</h4>
										<div><a href="<?php echo $web['cemail'];?>"><?php echo $web['cemail'];?></a></div>
									</div><!-- End / contact -->
									
									
									<!-- contact -->
									<div class="contact">
										<h4 class="contact__title">Phone</h4>
										<div><?php echo $web['ccontact'];?></div>
									</div><!-- End / contact -->
									
									 <div class="social-links">
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
										</div>

								</div>
							</div>
							<div class="col-lg-6 col-md-6 ">
								
								<!-- title -->
								<div class="title">
									<h2 class="title__title">SEND US A MESSAGE</h2>
								</div><!-- End / title -->
								
								<div class="form-wrapper">
									
									<!-- form-item -->
									<div class="form-item form-item--half">
										<label class="form__label">Email<span>*</span>
										</label>
										<input class="form-control" type="text" name="input" placeholder=""/>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item form-item--half">
										<label class="form__label">Name<span>*</span>
										</label>
										<input class="form-control" type="text" name="input" placeholder=""/>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item">
										<label class="form__label">Message<span>*</span>
										</label>
										<textarea class="form-control"></textarea>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item">
										<a class="md-btn btn-custom" href="#">Send message
										</a>
									</div><!-- End / form-item -->
									
								</div>
							</div>
						</div>
					</div>
				</section>
  <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy;2018 Easy Event, All Rights Reserved</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/template1/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/template1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
