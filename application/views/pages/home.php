<!--==========================
  Intro Section
============================-->
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url('<?php echo base_url();?>assets/img/intro-carousel/office.jpg');">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Manage Your Events</h2>
              <?php if(!$this->session->userdata('logged_in')):?>
              <a href="<?php echo base_url();?>register" class="btn-get-started scrollto">Start Your 30-day Free Trial</a>
            <?php endif;?>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('<?php echo base_url();?>assets/img/intro-carousel/Paper.jpg');">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>OKAYsion</h2>
              <?php if(!$this->session->userdata('logged_in')):?>
              <a href="<?php echo base_url();?>register" class="btn-get-started scrollto">Start Your 30-day Free Trial</a>
              <?php endif;?>
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

<main id="main">


    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-create"></i></div>
            <h4 class="title"><a>Economize Your Resources</a></h4>
            <p class="description">We create websites, customize your designs and maintain them in an affordable price. We offer agreeable payment options for your convenience.</p>
          </div>


           <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
            <h4 class="title"><a>Advertise Your Company</a></h4>
            <p class="description">Update your company's information in your website. Pick a design or tell us your preferences. Either way, your satisfaction is our top priority.</p>
          </div>

           <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-heart-outline"></i></div>
            <h4 class="title"><a>Focus on Your Business</a></h4>
            <p class="description">Manage your events through your website. We have all the tools you need to help you and your customers, plan your events. Happy Planning!</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

  <!--==========================
    About Us Section
  ============================-->
  <section id="about">
    <div class="container">

      <header class="section-header">
        <h3>About Us</h3>
        <p>The website was established in 2018. the developers team
made an enormous amount of effort in researching in order for the
idea of creating this website occur. one of the members of the team
has an indescribable passion when it comes in organizing an event,
and as this member's experience in working in IT industry grows,
he told to himself that he should provide a conveniency in
organizing an event and this is where the idea of creating this website came
from.</p>
      </header>

      <div class="row about-cols">

        <div class="col-md-4 wow fadeInUp">
          <div class="about-col">
            <div class="img">
              <img src="<?php echo base_url();?>assets/img/about-mission.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Mission</a></h2>
            <p>OKAYsion is a website that aims to provide high quality websites and services to companies. We guarantee 100% satisfaction by catering to our customer's preferences.</p>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-col">
            <div class="img">
              <img src="<?php echo base_url();?>assets/img/about-plan.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-list-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Plan</a></h2>
            <p>Our team will continue to strive hard towards achieving the mission and vision of this website by providing services that is customized to each of our customers.
</p>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="about-col">
            <div class="img">
              <img src="<?php echo base_url();?>assets/img/about-vision.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-eye-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Vision</a></h2>
            <p>OKAysion bridges event entrepreneurs and their customers with just a simple click of a button!</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #about -->



  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>Contact Us</h3>

      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Address</h3>
            <address>Ayala Boulevard, Ermita, Manila</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855"> +(02) 302 7750</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:okaysion@gmail.com">OKAYsion@gmail.com</a></p>
          </div>
        </div>

      </div>

      <div class="form">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="amessage/send" method="post" role="form" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="fname" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="femail" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  required/>
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="fsubject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  required />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"  required></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>
  </section><!-- #contact -->

</main>
