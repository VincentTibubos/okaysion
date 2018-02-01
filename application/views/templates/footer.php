
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>OKAYsion</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Ayala Boulevard, <br>
        Ermita, Manila <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>OKAYsion</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <div class="modal fade" id="Register" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url(); ?>users/register" method="post">
              <div class="form-group">
                <label for="name">Company Name:</label>
                <input type="text" class="form-control" id="Rname" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="Remail" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="Rpwd" name="pass">
              </div>
              <div class="form-group">
                <label for="cpwd">Confirm Password:</label>
                <input type="password" class="form-control" id="Rcpwd" name="cpass">
              </div>
              <button type="submit" class="btn btn-default">Register</button>
            </form>

        </div>
        <div class="modal-footer">
            <p>Already have an account? <a class="" href="#contact" data-toggle="modal" data-dismiss="modal" data-target="#SignIn">SignIn</a></p>
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="SignIn" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sign In</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url(); ?>users/signin" method="post">
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="Semail" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="Spwd" name="pass">
              </div>
              <button type="submit" class="btn btn-default">Sign In</button>
            </form>

        </div>
        <div class="modal-footer">
            <p>Don't have an account? <a class="" href="#contact" data-toggle="modal"  data-dismiss="modal" data-target="#Register">Register</a></p>
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>

      </div>
    </div>
</div>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url();?>assets/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>
</html>
