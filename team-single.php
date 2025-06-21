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
                    $mainTitle='Tean Details';
                    $Title='Home';
                    $Title2 = 'Team';
                ?>
                <?php include './partials/page-header.php'?>

                <!-- end page-title -->

                <!-- start of team-area -->
                <div class="team-single-page">
                    <!-- start of team-single-section -->
                    <section class="team-single-section ptb-120">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-4">
                                    <div class="single-img middle-shade">
                                        <img src="assets/images/team/team-single.jpg" alt="">
                                    </div>
                                    <div class="single-info-items">
                                        <h3>Personal info</h3>
                                        <ul>
                                            <li><span><i class="icon-email-1"></i> Email</span> Yourfavouritmail@gmail.com</li>
                                            <li><span><i class="icon-pin"></i> Location</span> 6391 Elgin St. Celina, Delaware 10299</li>
                                            <li><span><i class="icon-call-2"></i> Phone</span> (406) 555-0120 <br> www.yourwebsite.com</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single-content">
                                        <div class="content-top">
                                            <h2>Chriastion pershion</h2>
                                            <span>Expert Garden Cleaner</span>
                                        </div>
                                        <p>Eros justo, posuere loborti viverra laoreet matti ullamcorper posuere Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum ullamcorper vi laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra</p>
                                        <p>Eros justo, posuere loborti viverra laoreet matti ullamcorper posuere vi Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum ullamcorper vi laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra.Eros justo, posuere loborti viverra</p>

                                        <div class="progress-area">
                                            <h3>Professional skills</h3>
                                            <div class="progress-wrap">
                                                <div class="progress-single">
                                                    <h5 class="progress-title">Consultancy</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                                            data-wow-delay=".3s" role="progressbar" style="width: 50%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span class="progress-number">50%</span>
                                                </div>
                                                <div class="progress-single">
                                                    <h5 class="progress-title">Digital Marketer</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                                            data-wow-delay=".3s" role="progressbar" style="width: 90%"
                                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span class="progress-number">90%</span>
                                                </div>
                                                <div class="progress-single">
                                                    <h5 class="progress-title">Content Management</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                                            data-wow-delay=".3s" role="progressbar" style="width: 70%"
                                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span class="progress-number">70%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end of team-single-area  -->
                </div>
                <!-- end of team-area  -->

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