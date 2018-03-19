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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
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



     
 <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
		  <img src="<?php echo base_url();?>assets/template1/img/intro-carousel/big4.jpg" class="img-fluid" alt="">
            <div class="carousel-container">
              <div class="carousel-content">
                
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>


          <div class="carousel-item">
		  <img src="<?php echo base_url();?>assets/template1/img/intro-carousel/big5.jpg" class="img-fluid" alt="">
            <div class="carousel-container">
              <div class="carousel-content">
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        <div class="carousel-item">
		<img src="<?php echo base_url();?>assets/template1/img/intro-carousel/big3.jpg" class="img-fluid" alt="">
            <div class="carousel-container">
              <div class="carousel-content">
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>
		  
		   <div class="carousel-item">
		   <img src="<?php echo base_url();?>assets/template1/img/intro-carousel/big6.jpg" class="img-fluid" alt="">
            <div class="carousel-container">
              <div class="carousel-content">
                <a href="#featured-services" class="btn-get-started scrollto">Book Now!</a>
              </div>
            </div>
          </div>
		  
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

    
	<!--SERVICES-->
	<section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title center">Services</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Weddings</li>
              <li data-filter=".filter-card">Birthdays</li>
              <li data-filter=".filter-web">Christening</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/page1_img5.jpg" class="img-fluid" alt="">
                <a href="img/page1_img5.jpg" data-lightbox="portfolio" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Bridal Car</a></h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/page4_img1.jpg" class="img-fluid" alt="">
                <a href="img/page4_img1.jpg" class="link-preview" data-lightbox="portfolio" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Baby Shower</a></h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/images-10.jpg" class="img-fluid" alt="">
                <a href="img/images-10.jpg" class="link-preview" data-lightbox="portfolio" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Prenup Photoshoot</a></h4>
              
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/page1_img1.jpg" class="img-fluid" alt="">
                <a href="img/page1_img1.jpg" class="link-preview" data-lightbox="portfolio" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Decorating Services</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/page1_img10.jpg" class="img-fluid" alt="">
                <a href="img/page1_img10.jpg" class="link-preview" data-lightbox="portfolio" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Maternity Photoshoot</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/shuffle_3.jpg" class="img-fluid" alt="">
                <a href="img/shuffle_3.jpg" class="link-preview" data-lightbox="portfolio" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Venue and Catering Services</a></h4>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/page1_img4.jpg" class="img-fluid" alt="">
                <a href="img/pag1_img4.jpg" class="link-preview" data-lightbox="portfolio" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="#">Catering</a></h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/shuffle_2.jpg" class="img-fluid" alt="">
                <a href="img/shuffle_2.jpg" class="link-preview" data-lightbox="portfolio" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="#">Children's Party</a></h4>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>assets/template1/img/page1_img6.jpg" class="img-fluid" alt="">
                <a href="img/page1_img6.jpg" class="link-preview" data-lightbox="portfolio" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Catering</a></h4>
                
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

<!--CONTACT-->
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
								
                <form action="cmessage/send" method="post" role="form" >
  								<div class="form-wrapper">
  									
  									<!-- form-item -->
  									<div class="form-item form-item--half">
  										<label class="form__label">Email<span>*</span>
  										</label>
  										<input class="form-control" type="email" required name=email placeholder=""/>
  									</div><!-- End / form-item -->
  									
  									
  									<!-- form-item -->
  									<div class="form-item form-item--half">
  										<label class="form__label">Name<span>*</span>
  										</label>
  										<input class="form-control" type="text" name="name" required placeholder=""/>
  									</div><!-- End / form-item -->
  									
  									
  									<!-- form-item -->
  									<div class="form-item">
  										<label class="form__label">Message<span>*</span>
  										</label>
  										<textarea class="form-control" required name="message"></textarea>
  									</div><!-- End / form-item -->
  									
                    <input value="<?php echo $web['cid'];?>" name="cid" type="hidden">
  									<input value="<?php echo $web['curl'];?>" name="curl" type="hidden">
  									<!-- form-item -->
  									<div class="form-item" style="margin-top: 10px;">
                      <input type="submit" value="Send" class="btn btn-primary btn-block">
  									</div><!-- End / form-item -->
  									
  								</div>
                </form>
							</div>
						</div>
					</div>
				</section>
  <!-- Footer -->
    <footer class="py-5">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy;2018 Your Company, All Rights Reserved</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/template1/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/template1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/template1/lib/wow/wow.js"></script>
	<script src="<?php echo base_url();?>assets/template1/lib/wow/wow.min.js"></script>
	<script src="<?php echo base_url();?>assets/template1/lib/waypoints/waypoints.min.js"></script>
	<script src="<?php echo base_url();?>assets/template1/lib/touchSwipe/jquery.touchSwipe.js"></script>
	<script src="<?php echo base_url();?>assets/template1/lib/touchSwipe/jquery.touchSwipe.min.js"></script>

  </body>

</html>
