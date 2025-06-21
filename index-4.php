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
                <?php include './partials/header-four.php'?>
                <!-- end of header -->
                <!-- start of dc-hero-area -->
                <section class="dc-hero-area dc-hero-area-style-4"
                    style="background: url(assets/images/hero/hero-5.jpg) no-repeat center top; background-size: cover;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col col-lg-7 col-md-12 col-12">
                                <div class="hero-content wow fadeInLeftSlow" data-wow-duration="1200ms">
                                    <div class="hero-top-title">
                                        <div class="hero-top-title-inner"><i><img src="assets/images/icon/tea-leaf2.png"
                                                    alt=""></i><span>BOOK FOR YOUR SERVICES WITH 25% OFF</span></div>
                                    </div>
                                    <div class="hero-title">
                                        <h2>Transforms Your Ideal Garden with Plant Supply Services.</h2>
                                    </div>
                                    <p>With every single one of our clients, we bring forth a deep passion for creative problem solving — which is what sets us apart.</p>
                                    <div class="btns">
                                        <a href="#" class="ch-btn-style-1">OUR SERVICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="contact-form-area home wow fadeInRightSlow" data-wow-duration="1200ms">
                                    <div class="shape"><img src="assets/images/faq/top-shape.png" alt=""></div>
                                    <div class="contact-form-area-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <div class="contact-top-title">
                                                    <h2>Ask Question?</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="post" class="contact-activation" id="contact-form-mejor"
                                            novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-md-12 col-12 form-field">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name" autocomplete="name">
                                                </div>
                                                <div class="col-md-6 col-12 form-field">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email">
                                                </div>
                                                <div class="col-md-6 col-12 form-field">
                                                    <input type="text" class="form-control" name="phone" id="phone"
                                                        placeholder="Phone">
                                                </div>
                                                <div class="col-md-12 col-12 form-field">
                                                    <textarea name="message" id="message"
                                                        placeholder="Message"></textarea>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="submit-area">
                                                        <button type="submit" class="ch-btn-style-2"><span>BOOKING NOW</span></button>
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
                    </div>
                    <div class="left-shape"><img src="assets/images/hero/tools.png" alt=""></div>
                </section>
                <!-- end of dc-hero-area slider -->

                <!-- start of product-area -->
                <div class="product-area ptb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-7 col-12">
                                <div class="ch-top-title-s2">
                                    <span>Our Products</span>
                                    <h2 class="site-split-text ch-split-in-up">Check Out Now Our Latest Product</h2>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="row">
                                <div class="col col-lg-3 col-sm-6 col-12">
                                    <div class="product-item wow fadeInUp" data-wow-duration="1000ms">
                                        <div class="product-img">
                                            <img src="assets/images/product/product1.jpg" alt="">
                                            <div class="product-cart">
                                                <a href="cart.php" class="ch-btn-style-2">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <ul>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                            </ul>
                                            <h3><a href="product-single.php">Garden Gloves</a></h3>
                                            <span>$10.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-sm-6 col-12">
                                    <div class="product-item wow fadeInUp" data-wow-duration="1200ms">
                                        <div class="product-img">
                                            <img src="assets/images/product/product2.jpg" alt="">
                                            <div class="product-cart">
                                                <a href="cart.php" class="ch-btn-style-2">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <ul>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                            </ul>
                                            <h3><a href="product-single.php">Garden Hose</a></h3>
                                            <span>$20.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-sm-6 col-12">
                                    <div class="product-item wow fadeInUp" data-wow-duration="1400ms">
                                        <div class="product-img">
                                            <img src="assets/images/product/product3.jpg" alt="">
                                            <div class="product-cart">
                                                <a href="cart.php" class="ch-btn-style-2">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <ul>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                            </ul>
                                            <h3><a href="product-single.php">Watering Can</a></h3>
                                            <span>$30.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-sm-6 col-12">
                                    <div class="product-item wow fadeInUp" data-wow-duration="1600ms">
                                        <div class="product-img">
                                            <img src="assets/images/product/product4.jpg" alt="">
                                            <div class="product-cart">
                                                <a href="cart.php" class="ch-btn-style-2">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <ul>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                            </ul>
                                            <h3><a href="product-single.php">Hedge Shears</a></h3>
                                            <span>$25.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of product-area  -->

                <!-- start of about-area -->
                <section class="about-area style-4 ptb-120 pt-0">
                    <div class="container">
                        <div class="about-wrap">
                            <div class="row">
                                <div class="col col-lg-6 col-md-12 col-12">
                                    <div class="about-left-item  wow fadeInLeftSlow" data-wow-duration="1400ms">
                                        <div class="left-img-wrap">
                                            <div class="left-img-1">
                                                <img src="assets/images/about/about6.jpg" alt="">
                                            </div>
                                            <div class="inner-img left-to-right-shade">
                                                <img src="assets/images/about/about7.jpg" alt="">
                                            </div>
                                            <div class="exprience-wrap">
                                                <div class="icon">
                                                    <i class="icon-badge2"></i>
                                                </div>
                                                <div class="text">
                                                    <h3><span class="odometer" data-count="04">00</span>K+</h3>
                                                    <small>Years of Experience</small>
                                                </div>
                                            </div>
                                            <div class="dots"><img src="assets/images/about/dots.png" alt=""></div>
                                            <div class="arrow"><img src="assets/images/about/arrow.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-12 col-12">
                                    <div class="about-right-item wow fadeInRightSlow" data-wow-duration="1400ms">
                                        <div class="about-right-text">
                                            <span>About Company</span>
                                            <h2 class="site-split-text ch-split-in-right">Welcome to Experience
                                                Garden Cleaning.</h2>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae</p>

                                            <div class="about-features-wrap">
                                                <div class="row">
                                                    <div class="col-lg-7 col-sm-6 col-12">
                                                        <div class="about-features-item">
                                                            <ul>
                                                                <li>Tools for gardening</li>
                                                                <li>Shaping outdoor</li>
                                                                <li>Irrigating plants with water</li>
                                                                <li>Indigenous flora</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6 col-12">
                                                        <div class="about-features-right">
                                                            <div class="about-features-inner">
                                                                <small>We’re</small>
                                                                <h3>20+</h3>
                                                                <p>Years Of Experience</p>
                                                            </div>
                                                            <div class="shape-1">
                                                                <img src="assets/images/about/shape-1.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="about-bottom">
                                                    <div class="ab-btn">
                                                        <a href="about.php" class="ch-btn-style-1">LEARN MORE</a>
                                                    </div>
                                                    <div class="author-wrap">
                                                        <div class="author-img">
                                                            <img src="assets/images/about/author.png" alt="">
                                                        </div>
                                                        <div class="author-text">
                                                            <h4>Jon Martin</h4>
                                                            <small>Co Founder</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of about-area  -->
                <!-- start of ch-project-area  -->
                <section class="ch-project-area style-3 ptb-120"  style="background: url(assets/images/project/bg.jpg) no-repeat center top; background-size: cover;">
                   <div class="left-bg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-12">
                                <div class="ch-top-title">
                                    <span>Our Latest Services</span>
                                    <h2 class="site-split-text ch-split-in-right">Take a look Recent Projects that 
                                        People Always love.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="project-wrap">
                            <div class="project-active-s2 owl-carousel">
                                <div class="project-item wow fadeInUp" data-wow-duration="1000ms">
                                    <div class="project-item-inner">
                                        <div class="project-img middle-shade">
                                            <img src="assets/images/project/project-1.jpg" alt="">
                                        </div>
                                        <div class="project-text">
                                            <span>Cutting</span>
                                            <h2>Garden Care</h2>
                                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item wow fadeInUp" data-wow-duration="1200ms">
                                    <div class="project-item-inner">
                                        <div class="project-img middle-shade">
                                            <img src="assets/images/project/project-2.jpg" alt="">
                                        </div>
                                        <div class="project-text">
                                            <span>Gardening</span>
                                            <h2>Garden Maintain</h2>
                                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item wow fadeInUp" data-wow-duration="1400ms">
                                    <div class="project-item-inner">
                                        <div class="project-img middle-shade">
                                            <img src="assets/images/project/project-3.jpg" alt="">
                                        </div>
                                        <div class="project-text">
                                            <span>Water</span>
                                            <h2>Landscaping</h2>
                                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item wow fadeInUp" data-wow-duration="1600ms">
                                    <div class="project-item-inner">
                                        <div class="project-img middle-shade">
                                            <img src="assets/images/project/project-4.jpg" alt="">
                                        </div>
                                        <div class="project-text">
                                            <span>Plantation</span>
                                            <h2>Tree Plant</h2>
                                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item wow fadeInUp" data-wow-duration="1000ms">
                                    <div class="project-item-inner">
                                        <div class="project-img middle-shade">
                                            <img src="assets/images/project/project-5.jpg" alt="">
                                        </div>
                                        <div class="project-text">
                                            <span>Cleaning</span>
                                            <h2>Water Plant</h2>
                                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of ch-project-area  -->
                <!-- start of ch-choose-area -->
                <section class="ch-choose-area-s3 ptb-120">
                    <div class="container">
                        <div class="ch-choose-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="ch-choose-img-wrap">
                                        <div class="choose-img-left wow fadeInLeft" data-wow-duration="1200ms">
                                            <img src="assets/images/choose/img-1.jpg" alt="">
                                        </div>
                                        <div class="choose-img-right">
                                            <div class="c-img wow fadeInUp" data-wow-duration="1200ms">
                                                <img src="assets/images/choose/man2.png" alt="">
                                            </div>
                                            <div class="rotate-text-wrap wow zoomIn" data-wow-duration="1200ms">
                                                <div class="rotate-text text-roted">
                                                    <svg width="120" height="120">
                                                        <path fill="white"
                                                            d="M0,60a60,60 0 1,0 120,0a60,60 0 1,0 -120,0" />
                                                        <path fill="none" id="innerCircle"
                                                            d="M6,60a54,54 0 1,0 108,0a54,54 0 1,0 -108,0" />
                                                        <text>
                                                            <textPath xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#innerCircle" class="qr--label">
                                                                Garden Clean Company
                                                            </textPath>
                                                        </text>
                                                    </svg>
                                                </div>
                                                <div class="icon"><img src="assets/images/choose/icon.png" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="choose-right-wrap">
                                        <div class="ch-top-title">
                                            <span>Why Choose Us</span>
                                            <h2 class="site-split-text ch-split-in-right">See Why We are the best
                                                company.
                                            </h2>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit ultrices luctus
                                            iaculis
                                            placerat gravida ultricies, litora vel ante rutrum sollicitudin. Quis
                                            placerat
                                            parturient tincidunt praesent luctus nisl nascetur nibh fames neque eget
                                            velit a litora, lacinia curabitur porta ligula at aptent torquent curae
                                            consequat facilisi nam imperdiet. </p>

                                        <div class="choose-bottom">
                                            <div class="ab-btn">
                                                <a href="contact.php" class="ch-btn-style-2">CONTACT US</a>
                                            </div>
                                            <div class="author-wrap">
                                                <a href="tel:068889789876" class="call-btn">
                                                    <small>
                                                        <i class="icon-call"></i>
                                                    </small>
                                                    <p>
                                                        <b>Free Consultation</b>
                                                        <strong>(88) 98-00-6802</strong>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-1"><img src="assets/images/choose/shape-3.png" alt=""></div>
                    <div class="shape-2"><img src="assets/images/choose/shape-4.png" alt=""></div>
                </section>
                <!-- end of ch-choose-area  -->

                <!-- start of video-area -->
                <div class="video-area style-3"
                    style="background: url(assets/images/vedio-bg2.jpg) no-repeat center top; background-size: cover;">
                    <div class="container">
                        <div class="video-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="video-right-img">
                                        <div class="v-btn">
                                            <a href="https://www.youtube.com/embed/A6rRn9jN-bw" data-type="iframe"
                                                class="open-video">Play</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of video-area  -->

                <!--Start testimonial-section-->
                <section class="testimonial-section ptb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="ch-top-title-s2">
                                    <span>Our Testimonials</span>
                                    <h2 class="site-split-text ch-split-in-up">What Our Customers Are Saying About Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="testimonial-items testimonial-active owl-carousel">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-inner">
                                        <div class="testimonial-text">
                                            <ul class="ratting">
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                            </ul>
                                            <p>We believe in four pillars of influence that drive our growth. This is
                                                ingrained in everything we do We use</p>
                                            <div class="info-text-bio">
                                                <h4>Cameron Williamson</h4>
                                                <span>President of Sales</span>
                                            </div>
                                        </div>
                                        <div class="info-img">
                                            <img src="assets/images/testimonial/img-1.jpg" alt="">
                                            <div class="quote"><i class="icon-quote-right-1"></i></div>
                                            <div class="t-shape"><img src="assets/images/testimonial/shape.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item-inner">
                                        <div class="testimonial-text">
                                            <ul class="ratting">
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                                <li><i class="icon-star"></i></li>
                                            </ul>
                                            <p>We believe in four pillars of influence that drive our growth. This is
                                                ingrained in everything we do We use</p>
                                            <div class="info-text-bio">
                                                <h4>Leslie Alexander</h4>
                                                <span>Medical Assistant</span>
                                            </div>
                                        </div>
                                        <div class="info-img">
                                            <img src="assets/images/testimonial/img-2.jpg" alt="">
                                            <div class="quote"><i class="icon-quote-right-1"></i></div>
                                            <div class="t-shape"><img src="assets/images/testimonial/shape.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-1"><img src="assets/images/testimonial/shape2.png" alt=""></div>
                    <div class="shape-2"><img src="assets/images/testimonial/shape3.png" alt=""></div>
                </section>
                <!--End testimonial-section-->

                <!-- start faq-section -->
                <div class="faq-section style-2">
                    <div class="faq-top-bg"
                        style="background: url(assets/images/faq/faq-bg2.jpg) no-repeat center top;">
                    </div>
                    <div class="container">
                        <div class="faq-wrap">
                            <div class="row">
                                <div class="col col-lg-5 col-12">
                                    <div class="faq-info">
                                        <h3>Landscaping Services Are Often Considered</h3>

                                        <div class="faq-info-item">
                                            <div class="icon"><i class="icon-ready-stock-1"></i></div>
                                            <div class="text">
                                                <h4>Tools Order</h4>
                                                <p>We offer end-to-end logistics tailored for specific markets</p>
                                            </div>
                                        </div>
                                        <div class="faq-info-item">
                                            <div class="icon"><i class="icon-home"></i></div>
                                            <div class="text">
                                                <h4>Gardening and Cleaning</h4>
                                                <p>We offer end-to-end logistics tailored for specific markets</p>
                                            </div>
                                        </div>
                                        <div class="faq-info-item">
                                            <div class="icon"><i class="icon-handshake"></i></div>
                                            <div class="text">
                                                <h4>Custom Booking</h4>
                                                <p>We offer end-to-end logistics tailored for specific markets</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-7 col-12">
                                    <div class="faq-section-left">
                                        <div class="ch-top-title">
                                            <span>FAQ’S</span>
                                            <h2>Frequently asked
                                                Questions</h2>
                                        </div>
                                        <p>With over four decades of experience providing solutions to large-scale enterprises throughout the globe, we offer end-to-end.</p>
                                        <div class="faq-item">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h3 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            What options for plans are available?
                                                        </button>
                                                    </h3>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit condimentum cubilia eget, feugiat felis sociis ad augue senectus ligula.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h3 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            How much watering is needed for plants?
                                                        </button>
                                                    </h3>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit condimentum cubilia eget, feugiat felis sociis ad augue senectus ligula.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h3 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            What should I provide for the landscape?
                                                        </button>
                                                    </h3>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit condimentum cubilia eget, feugiat felis sociis ad augue senectus ligula.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container -->
                    <div class="left-man wow fadeInLeft" data-wow-duration="1600ms"><img
                            src="assets/images/faq/left-man.png" alt=""></div>
                </div>
                <!-- end faq-section -->

                <!--Start brand-section-->
                <div class="brand-section style-3">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="brand-slider owl-carousel">
                                    <div class="brand-item"><i><img src="assets/images/brand/brand-1.png" alt=""></i>
                                    </div>
                                    <div class="brand-item"><i><img src="assets/images/brand/brand-2.png" alt=""></i>
                                    </div>
                                    <div class="brand-item"><i><img src="assets/images/brand/brand-3.png" alt=""></i>
                                    </div>
                                    <div class="brand-item"><i><img src="assets/images/brand/brand-4.png" alt=""></i>
                                    </div>
                                    <div class="brand-item"><i><img src="assets/images/brand/brand-5.png" alt=""></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End brand-section-->

                <!-- start ch-blog-area -->
                <section class="ch-blog-area ptb-120">
                    <div class="container">
                        <div class="ch-top-title-s2">
                            <span>FROM THE BLOG</span>
                            <h2 class="site-split-text ch-split-in-up">News & Articles</h2>
                        </div>
                        <div class="blog-items">
                            <div class="row">
                                <div class="col col-lg-4 col-md-6 col-12">
                                    <div class="blog-item wow fadeInUp" data-wow-duration="1200ms">
                                        <div class="blog-img middle-shade">
                                            <img src="assets/images/blog/blog-1.jpg" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-top">
                                                <ul>
                                                    <li><i class="icon-user"></i> By admin</li>
                                                    <li><i class="icon-price-tag-1"></i> Gardening</li>
                                                </ul>
                                                <div class="date"><span>12 OCT</span></div>
                                            </div>
                                            <h2><a href="blog-single.php">Selecting Plant Species garden to Conserve
                                                    Water</a></h2>
                                            <div class="blog-bottom-btn">
                                                <a href="blog-single.php" class="ch-btn-style-1">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4 col-md-6 col-12">
                                    <div class="blog-item wow fadeInUp" data-wow-duration="1400ms">
                                        <div class="blog-img middle-shade">
                                            <img src="assets/images/blog/blog-2.jpg" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-top">
                                                <ul>
                                                    <li><i class="icon-user"></i> By admin</li>
                                                    <li><i class="icon-price-tag-1"></i> Harvesting</li>
                                                </ul>
                                                <div class="date"><span>20 OCT</span></div>
                                            </div>
                                            <h2><a href="blog-single.php">Choosing plant species for water in
                                                    gardens.</a></h2>
                                            <div class="blog-bottom-btn">
                                                <a href="blog-single.php" class="ch-btn-style-1">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4 col-md-6 col-12">
                                    <div class="blog-item wow fadeInUp" data-wow-duration="1600ms">
                                        <div class="blog-img middle-shade">
                                            <img src="assets/images/blog/blog-3.jpg" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-top">
                                                <ul>
                                                    <li><i class="icon-user"></i> By admin</li>
                                                    <li><i class="icon-price-tag-1"></i> Gardening</li>
                                                </ul>
                                                <div class="date"><span>10 OCT</span></div>
                                            </div>
                                            <h2><a href="blog-single.php">Opting for plant species for the water
                                                    gardens.</a></h2>
                                            <div class="blog-bottom-btn">
                                                <a href="blog-single.php" class="ch-btn-style-1">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container -->
                </section>
                <!-- end ch-blog-area -->

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