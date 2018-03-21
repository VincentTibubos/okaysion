<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Tenant Website!</title>
	  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<!--
	  <link href="<?php echo base_url();?>"assets/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      -->
	   <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	   <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
	
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#about">About Us</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                              </ul>
                        </div>
                  </nav>
            </header>
				<p id="about"></p>		
			<div class="content">
                        <h2>About Us</h2>
                  <p>
                       Tell us about your company.Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your company. Tell us about your company.
                       Tell us about your company.Tell us about your company.
                       Tell us about your compan.Tell us about your company.
                       Tell us about your compa.Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                       Tell us about your company.
                  </p>
				  <p id="services"></p>
            </div>
		
		
		<div class="content">
		<div class="row">
		<p>
		<h2>Services</h2>
		</p>
		
		<div class="col-md-4">	
			<img src="img/bday.jpg" alt="balloons">
			<button class="btn" type="button">
				<h3>Birthday</h3>
			</button>
		</div>
		<div class="col-md-4">
			<img src="img/wed.jpg" alt="balloons">
			<button class="btn" type="button">
				<h3>Wedding</h3>
			</button>
		</div>
		<div class="col-md-4">
			<img src="img/anniv.jpg" alt="balloons">
			<button class="btn" type="button">
				<h3>Anniversary</h3>
			</button>
			</div>
			</div>
		</div>
		</div>		
		
	
	<div class="container">
		<div class="row">
		<p>
		<h2 id="contact">Contact Us</h2>
		</p>
		
		<div class="col-md-6">
		<p>If you have a question about anything related to our company or services, please do message us. 
		We'll do our best to get back to you as soon as possible.</p>
		</br>
		<ul>
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
