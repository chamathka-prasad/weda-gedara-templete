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
                    $mainTitle='Product Single';
                    $Title='Home';
                    $Title2 = 'Shop';
                ?>
                <?php include './partials/page-header.php'?>
                <!-- end page-title -->

                <div class="shop-page">
                    <!-- start dc-product-details-section -->
                    <section class="dc-product-details-section section-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="dc-product-single-slider">
                                        <div class="slider-for">
                                            <div><img src="assets/images/shop-single/img-1.jpg" alt></div>
                                            <div><img src="assets/images/shop-single/img-2.jpg" alt></div>
                                        </div>
                                        <div class="slider-nav">
                                            <div><img src="assets/images/shop-single/thumb/img-1.jpg" alt></div>
                                            <div><img src="assets/images/shop-single/thumb/img-2.jpg" alt></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-md-6">
                                    <div class="product-details">
                                        <h2>Flower Tob</h2>
                                        <div class="price">
                                            <span class="current">$45.00</span>
                                            <span class="old">$55.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <span>(5 Customer review)</span>
                                        </div>
                                        <p>Sed perspiciatis unde omniste natus voluptatem accusantie doloremque
                                            laudantium totam aperiam eaque quae inven tore veritatis et quasi architecto
                                            beatae vitae dicta. Desires to obtain pain of itself, because it is pain, but occasionally circumstances.</p>
                                        <div class="pro-single-btn">
                                            <b>Quantity : </b>
                                            <div class="quantity cart-plus-minus">
                                                <input type="text" value="1">
                                            </div>
                                            <a href="#" class="ch-btn-style-2">Add to cart</a>
                                            <a href="wishlist.php"><i class="icon icon-heart"></i></a>
                                        </div>
                                        <div class="stock">
                                            <ul>
                                                <li>In stock</li>
                                                <li>SKU: 218967</li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <ul>
                                                <li><b>Categories:</b></li>
                                                <li>Garden, Landscaping</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="product-tab-area">
                                <ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="descripton-tab" data-bs-toggle="pill"
                                            data-bs-target="#descripton" type="button" role="tab" aria-controls="descripton"
                                            aria-selected="true">descripton</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="Review-tab" data-bs-toggle="pill" data-bs-target="#Review"
                                            type="button" role="tab" aria-controls="Review" aria-selected="false">Review</button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="descripton" role="tabpanel"
                                        aria-labelledby="descripton-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="Descriptions-item">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                            illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                            odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                            voluptatem sequi nesciunt. Neque porro quisquam.Sed ut perspiciatis unde
                                                            omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                                            quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                            magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                                            quisquam </p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Review" role="tabpanel" aria-labelledby="Review-tab">
                                        <div class="container">
                                            <div class="comments-area">
                                                <div class="comments-section">
                                                    <h3 class="comments-title">2 Comments</h3>
                                                    <ol class="comments">
                                                        <li class="comment even thread-even depth-1" id="comment-1">
                                                            <div id="div-comment-1">
                                                                <div class="comment-theme">
                                                                    <div class="comment-image"><img
                                                                            src="assets/images/blog-single/author1.png" alt>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-main-area">
                                                                    <div class="comment-wrapper">
                                                                        <div class="comments-meta">
                                                                            <h4>Stanio lainto <span
                                                                                    class="comments-date">September 16,
                                                                                    2024</span></h4>
                                                                        </div>
                                                                        <div class="comment-area">
                                                                            <p>Ished fact that a reader will be distrol acted
                                                                                bioii the.ished fact that a reader will be
                                                                                distrol acted laoreet Aliquam fact that a reader
                                                                                will be distrol acted Aliquam eros justo.</p>
                                                                            <div class="comments-reply">
                                                                                <a class="comment-reply-link"
                                                                                    href="#"><span>Reply</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
        
                                                        <li class="comment">
                                                            <div>
                                                                <div class="comment-theme">
                                                                    <div class="comment-image"><img
                                                                            src="assets/images/blog-single/author2.png" alt>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-main-area">
                                                                    <div class="comment-wrapper">
                                                                        <div class="comments-meta">
                                                                            <h4>Court Henry <span
                                                                                    class="comments-date">September 16,
                                                                                    2023</span></h4>
                                                                        </div>
                                                                        <div class="comment-area">
                                                                            <p>Ished fact that a reader will be distrol acted
                                                                                bioii the.ished fact that a reader will be
                                                                                distrol acted laoreet Aliquam fact that a reader
                                                                                will be distrol acted Aliquam eros justo.</p>
                                                                            <div class="comments-reply">
                                                                                <a class="comment-reply-link"
                                                                                    href="#"><span>Reply</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div> <!-- end comments-section -->
                                            </div> <!-- end comments-area -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end of container -->
                    </section>
                    <!-- end of dc-product-details-section -->
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