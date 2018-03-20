<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tenant Website!</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="assets/css/style.css">
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="wrapper">
            <header>
			
                  <nav>
                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>
						
                        <div class="logo">
                             LOGO
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#about">About Us</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                    <li><a href="#">Register</a></li>
                                    <li><a href="signin.html">Sign in</a></li>
                              </ul>
                        </div>
			
                  </nav>
				  
				<div class="title">
				
				<h1>Company Name</h1>
				<p>An easy way to organize your event!</p>
				<button class="btn">Get Started</button>
				</div>				
            </header>




			<p id="about"></p>		
			<div class="content">
                        <h2 >About Us</h2>
                  <p>
                       Tell us about your company.Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your company. Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your compan.Tell us about your company.
                       Tell us about your compa.Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your company.Tell us about your company.    
                  </p>
				  <p id="services"></p>
            </div>

			
			
			
<div class="container2">
  <h2>Services</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/img/c1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="assets/img/c2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="assets/img/c3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	


		<div class="content3">
		<div class="row">
		<div class="col-md-6">	
				<div class="card">
				<h3>Events</h3>
				<ul class="fl">
				<li><a href="#">Wedding</a></li>
				<li><a href="#">Birthday</a></li>
				<li><a href="#">Baby Shower</a></li>
				</ul>
				</div>
				</div>
		
		<div class="col-md-6">
				<div class="card">
				<h3>We Provide</h3>
				<ul class="fl">
				<li>Chair Covers</li>
				<li>Tables</li>
				<li>Chairs</li>
				</ul>
				</div>
		</div>
		
		</div>		
		</div>
			
		
	<div class="content">
		<div class="row">
		<p>
		<h2 id="contact" class="marg">Contact Us</h2>
		</p>
		
		<div class="col-md-6">
		<p>If you have a question about anything related to our company or services, please do message us. 
		We'll do our best to get back to you as soon as possible.</p>
		</br>
		<ul class="icon">
		 <li><span class="glyphicon glyphicon-map-marker"></span><label>Address</label></li>
		 <li><label></label></li>
		 <li><span class="fa fa-phone"></span><label>Call us on</label></li>
		  <li><label></label></li>
		 <li><span class="glyphicon glyphicon-envelope"></span><label>Email us on</label></li>
		  <li><label></label></li>
		</ul>
		</div>
		
		<div class="col-md-6">		
			<form action="/action_page.php">
		<label for="email">Email</label>
		<input type="text" id="email" name="firstname" placeholder="Your email">
		
		<label for="subject">Message</label>
		<textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

		<input type="submit" value="Submit">
		</div>
		
	</form>
	</div>
		</div>			
      </div>
	</div>
	</br></br></br>
	
	<footer>
		</br>
		<p>&emsp;&emsp;&copy; 2018 All Rights Reserved 
		</p>
	</footer>
	  
      <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>
</body>
</html>