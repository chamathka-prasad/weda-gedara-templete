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
                    $mainTitle='Error 404';
                    $Title='Home';
                    $Title2 = 'Error 404';
                ?>
                <?php include './partials/page-header.php'?>
                
                <!-- end page-title -->

                <!-- start opps-404-section -->
                <section class="opps-404-section ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <div class="content clearfix">
                                    <div class="error">
                                        <img src="assets/images/404.png" alt>
                                    </div>
                                    <div class="opps-message">
                                        <h3>Oops! Page Not Found</h3>
                                        <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                                        <a href="index.php" class="ch-btn-style-2">Back to home</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </section>
                <!-- end opps-404-section -->

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