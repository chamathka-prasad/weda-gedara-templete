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
                    $mainTitle='Project Details';
                    $Title='Home';
                    $Title2 = 'Project Single';
                ?>
                <?php include './partials/page-header.php'?>
                <!-- end page-title -->

                <div class="service-single-page project-single ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <div class="service-details">
                                    <div class="details-img">
                                        <img src="assets/images/project-single/single.jpg" alt="">
                                    </div>
                                    <h2>Description for Our Project</h2>
                                    <p>Keeping your landscaping irrigated is critical to protecting your investment.
                                        Watering your property is essential if you want to appreciate its lushness and
                                        attractiveness. Our uthan irrigation professionals will carefully design your
                                        sprinkler system to guarantee that your grass or property receives the most
                                        coverage possible. If you've justfy finished landscaping or need to upgrade or
                                        replace your property's irrigation and drainage system, we can help Wel give you
                                        a free consultation with one of our landscape specialists to discuss installing
                                        a fresh new irrigation system to keep your lawn healthy or evaluating the
                                        replacement al the service everytime for your time.</p>
                                    <div class="details-text">
                                        <div class="details-items">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <img src="assets/images/service-single/gallery1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <img src="assets/images/service-single/gallery2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <p>Power of choice is untrammelled and when nothing prevents our being able to
                                            do what we like best, everytime pleasure is to be welcomed and every pain
                                            avoided. But in certain circumstances and owing to the claims ofer duty or
                                            the obligations of business it will frequently occur that pleasures have to
                                            be repudiated and annoyanc accepted. The wise man therefore always holds in
                                            these matters to this principle of selection.</p>

                                        <div class="process">
                                            <h3>Our Work Process</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totami rem aperiam, eaque ipsa quae
                                                ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicab Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                                quia doloconsectetur adipisci velit sed quia non numquam eius modi
                                                tempora incidunt.</p>
                                            <ul>
                                                <li>Fusce justo risus placerat in risus eget tincidunt consequat elit.
                                                </li>
                                                <li>Nunc fermentum sem sit amet dolor laoreet placerat.</li>
                                                <li>Nullam rhoncus dictum diam quis ultrices.</li>
                                                <li>Integer quis lorem est uspendisse eu augue porta ullamcorper dictum.
                                                </li>
                                                <li>Quisque tristique neque arcu ut venenatis felis malesuada et.</li>
                                            </ul>
                                        </div>
                                        <div class="process">
                                            <div class="contact-form-area home">
                                                <div class="contact-form-area-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12">
                                                            <div class="contact-top-title">
                                                                <h2>Lest's Discuss a Project?</h2>
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
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-sidebar">
                                    <div class="search-widget widget">
                                        <h3>Search Here</h3>
                                        <form>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Search Here">
                                                <button type="submit"><i class="ti-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="widget category-widget">
                                        <h3>Categories</h3>
                                        <ul>
                                            <li><a href="#">Land Cleaning</a></li>
                                            <li><a href="#">Garden Design</a></li>
                                            <li><a href="#">Soil Testing</a></li>
                                            <li><a href="#">Garden Watering</a></li>
                                            <li><a href="#">Land Plant</a></li>
                                            <li><a href="#">Gardening</a></li>
                                            <li><a href="#">Landscaping</a></li>
                                        </ul>
                                    </div>
                                    <div class="update-widget widget">
                                        <h3>News & Update</h3>
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="text" name="news" id="news" placeholder="Email Adress*"
                                                    required>
                                                <button type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
                            <div class="shape wow fadeInLeftSlow" data-wow-duration="1600ms"><img
                                    src="assets/images/cta/leaf.png" alt=""></div>
                            <div class="shape-2 wow fadeInRightSlow" data-wow-duration="1600ms"><img
                                    src="assets/images/cta/plane.png" alt=""></div>
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
