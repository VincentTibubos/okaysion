<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tenant Website!</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                    <li><a href="#myModal" class="trigger-btn" data-toggle="modal">Register</a></li>
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

		<div class="content">
		<div class="row">
		<p>
		<h2>Services</h2>
		</p>
		
		<div class="col-md-3">	
				<div class="card">
				<h3>Events</h3>
				<ul class="fl">
				<li><a href="#">Wedding</a></li>
				<li><a href="#">Birthday</a></li>
				<li><a href="#">Baby Shower</a></li>
				</ul>
				</div>
				</div>

				
				<div class="col-md-3">
				<img src="assets/img/meh1.jpg">
				</div>
		
		<div class="col-md-3">
				<div class="card">
				<h3>We Provide</h3>
				<ul class="fl">
				<li>Chair Covers</li>
				<li>Tables</li>
				<li>Chairs</li>
				</ul>
				</div>
		</div>
		
		
			<div class="col-md-3">
				<img src="assets/img/pro.jpg">
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