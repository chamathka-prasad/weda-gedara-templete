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
                    $mainTitle='Pricing';
                    $Title='Home';
                    $Title2 = 'Pricing';
                ?>
                <?php include './partials/page-header.php'?>
               
                <!-- end page-title -->

                <!-- start of pricing-section -->
                <div class="pricing-section ptb-120">
                    <div class="container">
                        <div class="pricing-items">
                            <div class="row justify-content-center">
                                <div class="col col-lg-6 col-md-12 col-12">
                                    <div class="ch-top-title-s2">
                                        <span>Check Our Price</span>
                                        <h2 class="site-split-text ch-split-in-up">Good Price for Garden cleaning </h2>
                                        <p>Save <small>30%</small> on the yearly Packages</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-4 col-md-6 col-12">
                                        <div class="pricing-item wow fadeInUp"
                                            data-wow-duration="1200ms">
                                            <div class="pricing-item-inner"
                                                style="background: url(./assets/images/pricing-bg.jpg) no-repeat center top; background-size: cover;">
                                                <div class="price-wrap">
                                                    <div class="price-plan">
                                                        <span>Basic Plan</span>
                                                        <p>Enjoy a pleasure that has annoying.</p>
                                                    </div>
                                                    <div class="prices">
                                                        <h3>$49<span>/ MONTLY</span></h3>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>Seasonal Planting service for garden</li>
                                                    <li>Fall Cleanup and irritation plan</li>
                                                    <li>Plant Selection for the field plan</li>
                                                    <li>Water Features for grow tree</li>
                                                </ul>
                                                <a href="pricing.php">CHOOSE PLAN</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4 col-md-6 col-12">
                                        <div class="pricing-item wow fadeInUp"
                                            data-wow-duration="1400ms">
                                            <div class="pricing-item-inner"
                                                style="background: url(./assets/images/pricing-bg.jpg) no-repeat center top; background-size: cover;">
                                                <div class="price-wrap">
                                                    <div class="price-plan">
                                                        <span>Gold Plan</span>
                                                        <p>Holds in these matters this principle.</p>
                                                    </div>
                                                    <div class="prices">
                                                        <h3>$99<span>/ MONTLY</span></h3>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>Seasonal Planting service for garden</li>
                                                    <li>Fall Cleanup and irritation plan</li>
                                                    <li>Plant Selection for the field plan</li>
                                                    <li>Water Features for grow tree</li>
                                                </ul>
                                                <a href="pricing.php">CHOOSE PLAN</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4 col-md-6 col-12">
                                        <div class="pricing-item wow fadeInUp"
                                            data-wow-duration="1600ms">
                                            <div class="pricing-item-inner"
                                                style="background: url(./assets/images/pricing-bg.jpg) no-repeat center top; background-size: cover;">
                                                <div class="price-wrap">
                                                    <div class="price-plan">
                                                        <span>Premium Plan</span>
                                                        <p>Enjoy a pleasure that has annoying.</p>
                                                    </div>
                                                    <div class="prices">
                                                        <h3>$300<span>/ YEARLY</span></h3>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>Seasonal Planting service for garden</li>
                                                    <li>Fall Cleanup and irritation plan</li>
                                                    <li>Plant Selection for the field plan</li>
                                                    <li>Water Features for grow tree</li>
                                                </ul>
                                                <a href="pricing.php">CHOOSE PLAN</a>
                                                <div class="badge">
                                                    <span>Most Popular</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-shape"><img src="assets/images/pricing-shape.png" alt=""></div>
                </div>
                <!-- end of pricing-section -->

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