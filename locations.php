<?php include('templates/header.php');?>
      <!-- Page Titile Area -->
      <section class="page-title-section section-padding">
        <div class="page-title-slider owl-Carousel">
          <div class="page-title-slider-item">
            <img src="assets/images/locations.jpg" alt="">
            <div class="page-title-slider-content">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="title-center">
                              <div class="title-middle">
                                  <div class="page-title">Our Locations</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Titile Area End -->
      <!-- Contact Us Section -->
    <section class="section-padding section-dark">
      <div class="container">
        <div class="row gg-pricing-table icon-table">
          <div class="col-lg-4 wow fadeInUp animated" data-wow-delay=".3s">
            <div class="single-pricing-table index text-center clearfix">
                <!-- Heading -->
                <div class="pricing-table-heading">
                    <div class="locations-img">
                        <img src="assets/images/map.jpg" alt="" class="center-block img-fluid">
                    </div>
                    <h2>Manhattan</h2>
                    <div>Our meeting points on Manhattan</div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp animated" data-wow-delay=".3s">
            <div class="single-pricing-table index text-center clearfix">
                <!-- Heading -->
                <div class="pricing-table-heading">
                    <div class="locations-img">
                        <img src="assets/images/central-park.jpg" alt="" class="center-block img-fluid">
                    </div>
                    <h2>Central Park Location</h2>
                    <div>
                      <div>870 7th Avenue, NY 10019</div>
                      <div>+1-917-720-8850</div>
                      <div>April, 1th - October, 31th: 8am - 8pm</div>
                      <div>November, 1st - March, 31th: 9am - 5pm</div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp animated" data-wow-delay=".3s">
            <div class="single-pricing-table index text-center clearfix">
                <!-- Heading -->
                <div class="pricing-table-heading">
                    <div class="locations-img">
                        <img src="assets/images/brooklyn-bridge.jpg" alt="" class="center-block img-fluid">
                    </div>
                    <h2>Brooklyn Bridge Location</h2>
                    <div>
                      <div>1 East Broadway, NY 10038</div>
                      <div>+1-917-720-8850</div>
                      <div>April, 1th - October, 31th: 9am - 6pm</div>
                      <div>November, 1st - March, 31th: 9am - 5pm</div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="Material-contact-section section-padding">
      <div class="container">
          <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
              <h1 class="section-title">Feel free to contact us</h1>
            </div>
          </div>
          <div class="row">
              <!-- contact form -->
              <div class="col-md-12 wow animated fadeInRight" data-wow-delay=".2s">
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
                          <div class="form-group label-floating">
                            <label class="control-label" for="phone">Phone</label>
                            <input class="form-control" id="phone" type="text" name="phone" required data-error="Please enter your Phone">
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