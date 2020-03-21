<?php include('templates/header.php');?>
      <!-- Page Titile Area -->
      <section class="page-title-section section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="title-center">
                          <div class="title-middle">
                              <h2 class="page-tagline">Feel free to</h2>
                              <h1 class="page-title">Contact</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Page Titile Area End -->
      <!-- Contact Us Section -->

    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">

                <div class="find-widget">
                  <a href="#"><i class="material-icons mdi mdi-map-marker"></i>Central Park - 870 7th Avenue, NY 10019</a>
                </div>
                <div class="find-widget">
                  <a href="#"><i class="material-icons mdi mdi-map-marker"></i>Brooklyn Bridge - 1 East Broadway, NY 1003 </a>
                </div>
                <div class="find-widget">
                    <a href="#"><i class="material-icons mdi mdi-phone"></i>+ 917-720-8850</a>
                </div>
                <div class="find-widget">
                    <a href="#"><i class="material-icons mdi mdi-email-open mr-3"></i> info@fancyapple.com</a>
                </div>
                <div class="find-widget">
                    <a href="#"><i class="material-icons mdi mdi-clock"></i> Every day from 8 AM to 8 PM</a>
                </div>
              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>
      <!-- Contact Us Section End -->
<?php include('templates/footer.php');?>