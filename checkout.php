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
                    $mainTitle='Checkout';
                    $Title='Home';
                    $Title2 = 'Checkout';
                ?>
                <?php include './partials/page-header.php'?>
  
                <!-- end page-title -->

                <!-- checkout-area start-->
                <div class="checkout-area ptb-120">
                    <div class="container">
                        <form>
                            <div class="caupon-area">
                                <div class="coupon-box">
                                    <p><i class="icon-icon-check"></i>Have a coupon? <span class="coupon-click">Click
                                            here to enter your code.</span></p>
                                </div>
                                <div class="coupon-form">
                                    <span>If you have coupon code,please apply it</span>
                                    <div class="input-wrap">
                                        <input type="password">
                                        <button>Apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-wrap">
                                <div class="row">
                                    <div class="col-lg-8 col-12">
                                        <div class="biling-item">
                                            <div class="ch-top-title">
                                                <h2>Billing Address</h2>
                                            </div>
                                            <div class="billing-adress">
                                                <div class="contact-form form-style">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-12">
                                                            <label>First name *</label>
                                                            <input type="text" placeholder="Your first name" id="fname1"
                                                                name="fname" required>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-12">
                                                            <label>Last name *</label>
                                                            <input type="text" placeholder="Last name" id="fname2"
                                                                name="fname" required>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label>Company name (optional)</label>
                                                            <input type="text" placeholder="Company name" id="cname"
                                                                name="cname">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <select name="address" id="Country" class="form-control">
                                                                <option disabled="" selected="">Country / Region *
                                                                </option>
                                                                <option>United States (USA)</option>
                                                                <option>South Africa</option>
                                                                <option>Australia</option>
                                                                <option>Srilanka</option>
                                                                <option>Pakisthan</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label>Steet address line 1*</label>
                                                            <input type="text" placeholder="Steet address line 1"
                                                                id="address" name="address">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <input type="text" placeholder="Steet address line 2"
                                                                id="address2" name="address2">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <select name="address" id="City" class="form-control">
                                                                <option disabled="" selected="">Town / City *</option>
                                                                <option>United States (USA)</option>
                                                                <option>South Africa</option>
                                                                <option>Australia</option>
                                                                <option>Srilanka</option>
                                                                <option>Pakisthan</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <select name="address" id="state" class="form-control">
                                                                <option disabled="" selected="">State *</option>
                                                                <option>United States (USA)</option>
                                                                <option>South Africa</option>
                                                                <option>Australia</option>
                                                                <option>Srilanka</option>
                                                                <option>Pakisthan</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-12">
                                                            <label>Zip/ Postal code *</label>
                                                            <input type="text" placeholder="Zip/ Postal code *"
                                                                id="Post2" name="Post">
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-12">
                                                            <label>Phone Number</label>
                                                            <input type="text" placeholder="Phone number" id="email2"
                                                                name="email">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <label>Email address *</label>
                                                            <input type="text" placeholder="Email Address*" id="email4"
                                                                name="email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ch-top-title">
                                                <h2>Additional information</h2>
                                            </div>
                                            <div class="note-area">
                                                <label>Order notes (optional)</label>
                                                <textarea name="massage"
                                                    placeholder="Note about your order, e.g spacial nots for delivery."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="checkout-order-area">
                                            <h3>Your Order</h3>
                                            <div class="oreder-item">
                                                <div class="title bg-title">
                                                    <h2>Products <span>Subtotal</span></h2>
                                                </div>
                                                <div class="oreder-product">
                                                    <div class="images">
                                                        <small>Barrel cactus</small>
                                                    </div>
                                                    <span>$50.00</span>
                                                </div>
                                                <div class="title s1">
                                                    <h2>Subtotal<span>$50.00</span></h2>
                                                </div>
                                                <div class="title s2">
                                                    <h2>Total<span>$55.00</span></h2>
                                                </div>
                                            </div>
                                            <div class="payment-option">
                                                <h3>Payment Method</h3>
                                                <div class="payment-select">
                                                    <ul>
                                                        <li class="addToggle">
                                                            <input id="add" type="radio" name="payment"
                                                                checked="checked" value="30">
                                                            <label for="add">Direct Bank Transfer</label>
                                                        </li>
                                                        <li class="removeToggle">
                                                            <input id="remove" type="radio" name="payment" value="30">
                                                            <label for="remove">Check payments</label>
                                                        </li>
                                                        <li class="getwayToggle">
                                                            <input id="getway" type="radio" name="payment" value="30">
                                                            <label for="getway">Cash on delivery</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="payment-bottom">
                                                    <p>We will use your personal information to manage your order, improve your website experience, and for other uses as detailed in our privacy policy.</p>
                                                    <div class="payment-btn">
                                                        <button class="ch-btn-style-2">Place Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- checkout-area end-->

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