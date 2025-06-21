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
                    $mainTitle='Projects';
                    $Title='Home';
                    $Title2 = 'Projects';
                ?>
                <?php include './partials/page-header.php'?>
                
                <!-- end page-title -->

                <!-- start of ch-project-area  -->
                <section class="ch-project-area style-2 ptb-120 mt-0">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="ch-top-title-s2">
                                    <span>Latest Projects</span>
                                    <h2 class="site-split-text ch-split-in-up">Check out our latest Project Details</h2>
                                </div>
                            </div>
                        </div>
                        <div class="project-wrap">
                            <div class="project-active owl-carousel">
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