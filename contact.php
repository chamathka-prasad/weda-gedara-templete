<!DOCTYPE html>
<html lang="en">
<?php $title='Gerdnx - Gardening And Landscaping PHP Template'?>
<?php include './partials/head.php'?>
<body>

    <!-- start page-wrap -->
    <div class="page-wrap">
        <!-- start preloader -->
        <?php include './partials/preloader.php'?>
        <!-- end preloader -->
        <div id="smooth-page-wrapper">
            <div id="smooth-page-content">
                <?php include './partials/header-two.php'?>
                <!-- end of header -->
                <!-- start page-title -->
                <?php 
                    $mainTitle='Contact Us';
                    $Title='Home';
                    $Title2 = 'Contact Us';
                ?>
                <?php include './partials/page-header.php'?>
               
                <!-- end page-title -->

                <!-- start faq-section -->
                <div class="contact-page ptb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="ch-top-title-s2">
                                    <span>Contact</span>
                                    <h2>Get in Touch</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="icon-pin"></i>
                                        </div>
                                        <div class="info-text">
                                            <h3>Address</h3>
                                            <p>Dhaka 102,  8000 sent behaibior utl 1216, road 45 house of street</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="icon-call-2"></i>
                                        </div>
                                        <div class="info-text">
                                            <h3>Lets Talk us</h3>
                                            <p>Phone number: +32566 - 800 - 890 <br>
                                                Fax: 1234 -58963 - 007 </p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="icon-email-1"></i>
                                        </div>
                                        <div class="info-text">
                                            <h3>Address</h3>
                                            <p>Dhaka 102,  8000 sent behaibior utl 1216, road 45 house of street</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="process">
                                    <div class="contact-form-area home">
                                        <div class="contact-form-area-inner">
                                            <form method="post" class="contact-activation" id="contact-form-mejor"
                                                novalidate="novalidate">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 form-field">
                                                        <input type="text" class="form-control" name="name" id="name"
                                                            placeholder="Your Name*" autocomplete="name">
                                                    </div>
                                                    <div class="col-md-6 col-12 form-field">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Your Email*">
                                                    </div>
                                                    <div class="col-md-6 col-12 form-field">
                                                        <input type="text" class="form-control" name="phone" id="phone"
                                                            placeholder="Phone number*">
                                                    </div>
                                                    <div class="col-md-6 col-12 form-field">
                                                        <input type="text" class="form-control" name="website" id="website"
                                                            placeholder="Your website*">
                                                    </div>
                                                    <div class="col-md-12 col-12 form-field">
                                                        <textarea name="message" id="message"
                                                            placeholder="Write your Message here*"></textarea>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="submit-area">
                                                            <button type="submit" class="ch-btn-style-2"><span>Submit Now</span></button>
                                                            <div id="loader">
                                                                <i class="ti-reload"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix error-handling-messages">
                                                    <div id="success">Thank you! Massage Sended</div>
                                                    <div id="error"> Error occurred while sending email. Please try again
                                                        later. </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-2">
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map ptb-120 pb-0">
                        <iframe
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
                <!-- end faq-section -->

                <!-- start ch-cta-area -->
                <section class="ch-cta-area">
                    <div class="container">
                        <div class="cta-items">
                            <div class="cta-text">
                                <h2>We Care Your Garden Landscaping</h2>
                            </div>
                            <div class="cta-img wow fadeInUp" data-wow-duration="1600ms">
                                <img src="assets/images/cta/woman.png" alt="">
                            </div>
                            <div class="cta-btn">
                                <a href="#" class="ch-btn-style-3">CONTACT US</a>
                            </div>
                            <div class="shape wow fadeInLeftSlow" data-wow-duration="1600ms"><img src="assets/images/cta/leaf.png" alt=""></div>
                            <div class="shape-2 wow fadeInRightSlow" data-wow-duration="1600ms"><img src="assets/images/cta/plane.png" alt=""></div>
                        </div>
                    </div> <!-- end container -->
                </section>
                <!-- end ch-cta-area -->

                
                <!-- start of footer-section -->
                <?php include './partials/footer.php'?>
                <!-- end of site-footer-section -->
            </div>
        </div>

        <!-- header-search area start here -->    
         <?php include './partials/header-search-form.php'?>
        <!-- header-search area start here -->    

       <!-- mouse area start here -->    
        <?php include './partials/mouse.php'?>
        <!-- mouse area end here -->

    </div>
    <!-- end of page-wrap -->

    <!-- All JavaScript files Here
    ********************************************* -->
    <!-- jquery Plugins -->
    <?php include './partials/script.php'?>
</body>

</html>