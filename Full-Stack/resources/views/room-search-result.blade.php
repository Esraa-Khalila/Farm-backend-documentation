<!DOCTYPE html>
<html lang="en">

@include('layouts.Navbar')

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-10">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Room Search Result</h2>
                        </div>
                        <span class="arrow-blink">
                            <i class="la la-arrow-down"></i>
                        </span>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-30px">
                    <div class="filter-bar d-flex align-items-center justify-content-between">
                        <div class="filter-bar-filter d-flex flex-wrap align-items-center">
                            <div class="filter-option mr-5">
                                <h3 class="title font-size-16">Result</h3>
                            </div>
                            <div class="filter-option mr-5">
                                <h3 class="title font-size-16"><i class="la la-clock-o mr-1"></i>Date: <span class="text-color ml-2">04/28/2020 - 05/3/2020</span></h3>
                            </div>
                            <div class="filter-option mr-5">
                                <h3 class="title font-size-16"><i class="la la-user mr-1"></i>Adults: <span class="text-color ml-2">1</span></h3>
                            </div>
                             <div class="filter-option mr-5">
                                <h3 class="title font-size-16"><i class="la la-user mr-1"></i>Children: <span class="text-color ml-2">1</span></h3>
                            </div>
                        </div><!-- end filter-bar-filter -->
                        <div class="btn-box">
                            <a href="#" class="theme-btn theme-btn-transparent" data-toggle="modal" data-target="#modifyPopupForm">Modify</a>
                        </div><!-- end btn-box -->
                    </div><!-- end filter-bar -->
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card-item room-card">
                    <div class="card-img-carousel carousel-action carousel--action">
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img5.jpg" alt="hotel-img">
                            </a>
                        </div>
                         <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img29.jpg" alt="hotel-img">
                            </a>
                        </div>
                         <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img30.jpg" alt="hotel-img">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-price pb-2">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$88.00</span>
                            </p>
                        </div>
                        <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Room</a></h3>
                        <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                        <div class="card-attributes pt-3 pb-4">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
                <div class="card-item room-card">
                    <div class="card-img-carousel carousel-action carousel--action">
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img31.jpg" alt="hotel-img">
                            </a>
                        </div>
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img32.jpg" alt="hotel-img">
                            </a>
                        </div>
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img33.jpg" alt="hotel-img">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-price pb-2">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$45.00</span>
                            </p>
                        </div>
                        <h3 class="card-title font-size-26"><a href="room-details.html">Standard 2 Bed Male Dorm</a></h3>
                        <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                        <div class="card-attributes pt-3 pb-4">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
                <div class="card-item room-card">
                    <div class="card-img-carousel carousel-action carousel--action">
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img33.jpg" alt="hotel-img">
                            </a>
                        </div>
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img32.jpg" alt="hotel-img">
                            </a>
                        </div>
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img31.jpg" alt="hotel-img">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-price pb-2">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$145.00</span>
                            </p>
                        </div>
                        <h3 class="card-title font-size-26"><a href="room-details.html">Deluxe King Bed Private</a></h3>
                        <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                        <div class="card-attributes pt-3 pb-4">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
                <div class="card-item room-card">
                    <div class="card-img-carousel carousel-action carousel--action">
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img32.jpg" alt="hotel-img">
                            </a>
                        </div>
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img33.jpg" alt="hotel-img">
                            </a>
                        </div>
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img31.jpg" alt="hotel-img">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-price pb-2">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$145.00</span>
                            </p>
                        </div>
                        <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Suite</a></h3>
                        <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                        <div class="card-attributes pt-3 pb-4">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
                <div class="card-item room-card">
                    <div class="card-img-carousel carousel-action carousel--action">
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img31.jpg" alt="hotel-img">
                            </a>
                        </div>
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img32.jpg" alt="hotel-img">
                            </a>
                        </div>
                        <div class="card-img">
                            <a href="room-details.html" class="d-block">
                                <img src="images/img33.jpg" alt="hotel-img">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-price pb-2">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$145.00</span>
                            </p>
                        </div>
                        <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                        <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                        <div class="card-attributes pt-3 pb-4">
                            <ul class="d-flex align-items-center">
                                <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar single-content-sidebar mt-0 mb-0" id="sidebar">
                    <div class="sidebar-widget single-content-widget">
                        <h3 class="title stroke-shape">Check Availability</h3>
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text">Check-in</label>
                                    <div class="form-group">
                                        <span class="la la-calendar form-icon"></span>
                                        <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                    </div>
                                </div>
                                 <div class="input-box">
                                    <label class="label-text">Check-out</label>
                                    <div class="form-group">
                                        <span class="la la-calendar form-icon"></span>
                                        <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label class="label-text">Rooms</label>
                                    <div class="form-group">
                                        <div class="select-contain w-auto">
                                            <select class="select-contain-select">
                                                <option value="0">Select Rooms</option>
                                                <option value="1" selected>1 Room</option>
                                                <option value="2">2 Rooms</option>
                                                <option value="3">3 Rooms</option>
                                                <option value="4">4 Rooms</option>
                                                <option value="5">5 Rooms</option>
                                                <option value="6">6 Rooms</option>
                                                <option value="7">7 Rooms</option>
                                                <option value="8">8 Rooms</option>
                                                <option value="9">9 Rooms</option>
                                                <option value="10">10 Rooms</option>
                                                <option value="11">11 Rooms</option>
                                                <option value="12">12 Rooms</option>
                                                <option value="13">13 Rooms</option>
                                                <option value="14">14 Rooms</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label class="label-text">Guests</label>
                                    <div class="form-group">
                                        <div class="dropdown dropdown-contain">
                                            <a class="dropdown-toggle dropdown-btn" href="#" data-toggle="dropdown">
                                                <span>Total Guests <span class="qtyTotal guestTotal">0</span></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                <div class="dropdown-item">
                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                        <label>Adults</label>
                                                        <div class="qtyBtn d-flex align-items-center">
                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                            <input type="text" name="qtyInput" value="0">
                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end dropdown-item -->
                                                <div class="dropdown-item">
                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                        <label>Children <span>2-12 years old</span></label>
                                                        <div class="qtyBtn d-flex align-items-center">
                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                            <input type="text" name="qtyInput" value="0">
                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end dropdown-item -->
                                                 <div class="dropdown-item">
                                                     <div class="qty-box d-flex align-items-center justify-content-between">
                                                         <label>Infants <span>0-2 years old</span></label>
                                                         <div class="qtyBtn d-flex align-items-center">
                                                             <div class="qtyDec"><i class="la la-minus"></i></div>
                                                             <input type="text" name="qtyInput" value="0">
                                                             <div class="qtyInc"><i class="la la-plus"></i></div>
                                                         </div>
                                                     </div><!-- end qty-box -->
                                                </div><!-- end dropdown-item -->
                                            </div>
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                                <div class="btn-box pt-2">
                                    <a href="#" class="theme-btn text-center w-100">Check Availability</a>
                                </div>
                            </form>
                        </div>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-4 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 5 of 124 Rooms</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area info-bg padding-top-90px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                        <i class="la la-phone"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Need Help? Contact us</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                        <i class="la la-money"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Payments</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                        <i class="la la-times"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Cancel Policy</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="sec__desc text-white-50 pb-1">Newsletter sign up</p>
                    <h2 class="sec__title font-size-30 text-white">Subscribe to Get Special Offers</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index.html" class="foot__logo"><img src="images/logo.png" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p>
                    <ul class="list-items pt-3">
                        <li>3015 Grand Ave, Coconut Grove,<br> Cerrick Way, FL 12345</li>
                        <li>+123-456-789</li>
                        <li><a href="#">trizen@yourwebsite.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                    <ul class="list-items list--items">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="blog-grid.html">News</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Services</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Trizen.com Rewards</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">List My Hotel</a></li>
                        <li><a href="#">All Hotels</a></li>
                        <li><a href="#">TV Ads</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">USA Vacation Packages</a></li>
                        <li><a href="#">USA Flights</a></li>
                        <li><a href="#">USA Hotels</a></li>
                        <li><a href="#">USA Car Hire</a></li>
                        <li><a href="#">Create an Account</a></li>
                        <li><a href="#">Trizen Reviews</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block mt-4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Trizen 2020. Made with
                        <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                    <h3 class="title font-size-15 pr-2">We Accept</h3>
                    <img src="images/payment-img.png" alt="">
                </div><!-- end copy-right-content -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="modifyPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle3">Book Your Stay</h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Check in</label>
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                 <div class="col-lg-6 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Check out</label>
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Adults</label>
                                        <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="0">Select Adult</option>
                                                    <option value="1" selected>1 Adult</option>
                                                    <option value="2">2 Adults</option>
                                                    <option value="3">3 Adults</option>
                                                    <option value="4">4 Adults</option>
                                                    <option value="5">5 Adults</option>
                                                    <option value="6">6 Adults</option>
                                                    <option value="7">7 Adults</option>
                                                    <option value="8">8 Adults</option>
                                                    <option value="9">9 Adults</option>
                                                    <option value="10">10 Adults</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Children</label>
                                        <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="0">Select Children</option>
                                                    <option value="1" selected>1 Children</option>
                                                    <option value="2">2 Children</option>
                                                    <option value="3">3 Children</option>
                                                    <option value="4">4 Children</option>
                                                    <option value="5">5 Children</option>
                                                    <option value="6">6 Children</option>
                                                    <option value="7">7 Children</option>
                                                    <option value="8">8 Children</option>
                                                    <option value="9">9 Children</option>
                                                    <option value="10">10 Children</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="btn-box pt-3">
                                        <button type="button" class="theme-btn w-100">Check Availability</button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/quantity-input.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/room-search-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jun 2022 09:48:15 GMT -->
</html>