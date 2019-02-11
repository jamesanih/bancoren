@extends('layouts.welcome')

@section('contents')

<div class="search-box tran5s" id="searchWrapper">
            <div class="container">
                <form action="#">
                    <div id="close-button" class="tran3s"></div>
                    <div class="input-wrapper">
                        <input type="text" placeholder="Search....">
                        <button class="tran3s"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div> <!-- /.search-box -->

        <div class="main-page-wrapper">

            <!-- ===================================================
                Loading Transition
            ==================================================== -->
           <!--  <div id="loader-wrapper">
                <div id="loader"></div>
            </div> -->




            <!-- 
            =============================================
                Theme Header
            ============================================== 
            -->
            <header class="theme-menu-wrapper fixed-header-two">
                <div class="container">
                    <div class="main-header-menu-wrapper nav-color-white clearfix">
                        <!-- Logo -->
                        <div class="logo float-left"><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo/bancoren_logo.jpg')}}" alt="Logo"></a></div>

                        <!-- ============================ Theme Menu ========================= -->
                        @if(Auth::guest())
                        <nav class="navbar-expand-lg float-right navbar-light" id="mega-menu-wrapper">
                            <button class="navbar-toggler float-right clearfix" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="flaticon-menu-options"></i>
                            </button>
                            <div class="collapse navbar-collapse clearfix" id="navbarNav">
                              <ul class="navbar-nav nav">
                                <li class="nav-item active ">
                                    <a class="nav-link" href="{{URL::to('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About us</a>
            
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('openaccount')}}">Open Account</a>
            
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                   
                                </li>                                
                                <li class="nav-item dot-fix">
                                    <a class="nav-link" href="contact-us.html">Contact us</a>
                                </li>
                                <li class="nav-item search-button"><button class="search b-p-bg-color" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></button></li>
                              </ul>
                            </div>
                        </nav>
                        @else
                        <nav class="navbar-expand-lg float-right navbar-light" id="mega-menu-wrapper">
                            <button class="navbar-toggler float-right clearfix" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="flaticon-menu-options"></i>
                            </button>
                            <div class="collapse navbar-collapse clearfix" id="navbarNav">
                              <ul class="navbar-nav nav">
                                <li class="nav-item active ">
                                    <a class="nav-link" href="{{URL::to('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About us</a>
            
                                </li>
                                @if(Auth::user()->status == "SuperAdmin")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('dashboard')}}">{{Auth::user()->fname}}</a>
                                   
                                </li>
                                @endif
                                @if(Auth::user()->status == "admin")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('dashboard')}}">{{Auth::user()->fname}}</a>
                                   
                                </li>
                                @endif
                                @if(Auth::user()->status == "staff")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('profile')}}">{{Auth::user()->fname}}</a>
                                   
                                </li>
                                @endif
                                @if(Auth::user()->status == "customer")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/accountdetails')}}">{{Auth::user()->fname}}</a>
                                   
                                </li>
                                @endif

                                

                                <li class="nav-item dot-fix">
                                    <a class="nav-link" href="contact-us.html">Contact us</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.logout')}}">Logout</a>
                                    
                                </li>
                                <li class="nav-item search-button"><button class="search b-p-bg-color" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></button></li>
                              </ul>
                            </div>
                        </nav>
                        @endif 
                    </div> <!-- /.main-header-menu-wrapper -->
                </div> <!-- /.container -->
            </header> <!-- /.theme-menu-wrapper -->

            
            <!-- 
            =============================================
                Theme Main Banner
            ============================================== 
            -->
            <div class="home-two-banner">
                <div id="theme-main-banner" class="banner-two">
                    <div data-src="{{URL::to('images/home/slide-4.jpg')}}">
                        <div class="camera_caption">
                            <div class="container">
                                <h1 class="wow fadeInUp animated"><h1>Personal Bank Loan <br>From $12,500</h1></h1>
                                <p class="wow fadeInUp animated" data-wow-delay="0.2s">We have wide rang of loans ection for our customer & it’s start <br> low to high with low interest.</p>
                                <a href="service-v1.html" class="button-one wow fadeInLeft animated" data-wow-delay="0.3s">See services</a>
                                <a href="#" class="button-two wow fadeInRight animated" data-wow-delay="0.3s">Get a Quote</a>
                            </div> <!-- /.container -->
                        </div> <!-- /.camera_caption -->
                    </div>
                    <div data-src="{{URL::to('images/home/slide-2.jpg')}}">
                        <div class="camera_caption">
                            <div class="container">
                                <h1 class="wow fadeInUp animated"><h1>Personal Bank Loan <br>From $12,500</h1></h1>
                                <p class="wow fadeInUp animated" data-wow-delay="0.2s">We have wide rang of loans ection for our customer & it’s start <br> low to high with low interest.</p>
                                <a href="service-v1.html" class="button-one wow fadeInLeft animated" data-wow-delay="0.3s">See services</a>
                                <a href="#" class="button-two wow fadeInRight animated" data-wow-delay="0.3s">Get a Quote</a>
                            </div> <!-- /.container -->
                        </div> <!-- /.camera_caption -->
                    </div>
                    <div data-src="{{URL::to('images/home/slide-3.jpg')}}">
                        <div class="camera_caption">
                            <div class="container">
                                <h1 class="wow fadeInUp animated"><h1>Personal Bank Loan <br>From $12,500</h1></h1>
                                <p class="wow fadeInUp animated" data-wow-delay="0.2s">We have wide rang of loans ection for our customer & it’s start <br> low to high with low interest.</p>
                                <a href="service-v1.html" class="button-one wow fadeInLeft animated" data-wow-delay="0.3s">See services</a>
                                <a href="#" class="button-two wow fadeInRight animated" data-wow-delay="0.3s">Get a Quote</a>
                            </div> <!-- /.container -->
                        </div> <!-- /.camera_caption -->
                    </div>
                </div> <!-- /#theme-main-banner -->

                <div class="get-loan-form wow fadeInUp" data-wow-delay="0.2s">
                    <div class="clearfix">
                        <form action="#">
                            <h3>Get Your loan</h3>
                            <input type="text" placeholder="AMOUNT OF MONEY ($)">
                            <input type="text" placeholder="HOW LONG FOR?">
                            <input type="text" placeholder="Installment amount">
                            <input type="submit" value="GET YOUR LOAN NOW!">
                        </form>
                    </div> <!-- /.clearfix -->
                </div> <!-- /.get-loan-form -->
            </div> <!-- /.home-two-banner -->


            <!-- 
            =============================================
                Our Service
            ============================================== 
            -->
            <div class="our-service">
                <div class="container">
                    <div class="theme-title text-center">
                        <h2>We’re here to help you when you need <br>your financial support</h2>
                        <p>We provides high street and mortgages, savings accounts, credit cards & loans</p>
                    </div> <!-- /.theme-title -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="single-service">
                                <div class="icon"><img src="{{URL::to('images/icon/7.png')}}" alt=""></div>
                                <div class="text">
                                    <h4><a href="service-details.html">Lowest Interest in Business loan</a></h4>
                                    <div class="interest">9.60%</div>
                                    <p>Lowest Interest</p>
                                </div> <!-- /.text -->
                            </div> <!-- /.single-service -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-3 col-6">
                            <div class="single-service">
                                <div class="icon"><img src="URL::to{{('images/icon/8.png')}}" alt=""></div>
                                <div class="text">
                                    <h4><a href="service-details.html">Easy Personal Loan by Anyone</a></h4>
                                    <div class="interest">11.30%</div>
                                    <p>Lowest Interest</p>
                                </div> <!-- /.text -->
                            </div> <!-- /.single-service -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-3 col-6">
                            <div class="single-service">
                                <div class="icon"><img src="{{URL::to('images/icon/9.png')}}" alt=""></div>
                                <div class="text">
                                    <h4><a href="service-details.html">Credit &amp; Debit Card with 0 interest</a></h4>
                                    <div class="interest">7.55%</div>
                                    <p>Lowest Interest</p>
                                </div> <!-- /.text -->
                            </div> <!-- /.single-service -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-3 col-6">
                            <div class="single-service">
                                <div class="icon"><img src="{{URL::to('images/icon/10.png')}}" alt=""></div>
                                <div class="text">
                                    <h4><a href="service-details.html">New &amp; Recondition Car laon </a></h4>
                                    <div class="interest">10.66%</div>
                                    <p>Lowest Interest</p>
                                </div> <!-- /.text -->
                            </div> <!-- /.single-service -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.our-service -->


            <!-- 
            =============================================
                Feature Banner
            ============================================== 
            -->
            <div class="feature-banner bg-two">
                <div class="opacity overlay-two">
                    <div class="container">
                        <div class="theme-title">
                            <h2>We’re all about helping you reach your next <br>financial goal and loan help.</h2>
                        </div> <!-- /.theme-title -->
                        <div class="row">
                            <div class="col-sm-4 col-12">
                                <div class="single-box">
                                    <h2 class="number"><span class="timer" data-from="0" data-to="15000" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
                                    <p>Customers Empowered <br>$5 billion+</p>
                                </div> <!-- /.single-box -->
                            </div>  <!-- /.col- -->
                            <div class="col-sm-4 col-12">
                                <div class="single-box">
                                    <h2 class="number"><span class="timer" data-from="0" data-to="120" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
                                    <p>Times International <br>Award Winner</p>
                                </div> <!-- /.single-box -->
                            </div>  <!-- /.col- -->
                            <div class="col-sm-4 col-12">
                                <div class="single-box">
                                    <h2 class="number"><span class="timer" data-from="0" data-to="37500" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
                                    <p>Completed Projects <br>$18 billion+</p>
                                </div> <!-- /.single-box -->
                            </div>  <!-- /.col- -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div> <!-- /.opacity -->
            </div> <!-- /.feature-banner -->


            <!-- 
            =============================================
                Work Progress
            ============================================== 
            -->
            <div class="work-progress">
                <div class="container">
                    <div class="theme-title text-center">
                        <h2>Fast &amp; Easy Application Process.</h2>
                        <p>See how you will get the loan step by step easily</p>
                    </div> <!-- /.theme-title -->
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-sm-4 col-12">
                                <div class="single-figure">
                                    <div class="count">01</div>
                                    <h4><a href="#">Apply Bank Loan</a></h4>
                                    <p>First we will apply for a loan with  your needs and amount.</p>
                                </div> <!-- /.single-figure -->
                            </div> <!-- /.col- -->
                            <div class="col-sm-4 col-12">
                                <div class="single-figure">
                                    <div class="count">02</div>
                                    <h4><a href="#">Review Loan</a></h4>
                                    <p>After apply bank loan they will review their requirments</p>
                                </div> <!-- /.single-figure -->
                            </div> <!-- /.col- -->
                            <div class="col-sm-4 col-12">
                                <div class="single-figure">
                                    <div class="count">03</div>
                                    <h4><a href="#">Approve Bank Loan</a></h4>
                                    <p>After completed the review bank will approve the loan.</p>
                                </div> <!-- /.single-figure -->
                            </div> <!-- /.col- -->
                        </div> <!-- /.row -->
                    </div> <!-- /.wrapper -->
                </div> <!-- /.container -->
            </div> <!-- /.work-progress -->


            <!--
            =====================================================
                Testimonial Slider
            =====================================================
            -->
            <div class="testimonial-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-12 offset-xl-4 wow fadeInUp">
                            <div class="theme-title">
                                <h6>Testimonials</h6>
                                <h2>Check what people say <br>About us!</h2>
                            </div> <!-- /.theme-title-one -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <div class="main-bg-wrapper">
                    <div class="overlay">
                        <div id="watch-video">
                            <h6>Watch</h6>
                            <h4>Intro Video</h4>
                            <a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;amshowinfo=0" class="tran3s"><i class="flaticon-play-button"></i></a>
                        </div>
                        <div class="main-slider-wrapper">
                            <div class="testimonial-slider">
                                <div class="item">
                                    <i class="flaticon-close"></i>
                                    <p>“Excepteur sint occaecat cupida non at proident, sunt culp officia deserun moll anim est laborum. Sed perspi!</p>
                                    <div class="clearfix">
                                        <img src="images/home/a-1.jpg" alt="" class="float-left">
                                        <div class="name float-left">
                                            <h6>Rashed Ka.</h6>
                                            <span>Berlin</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="flaticon-close"></i>
                                    <p>“Excepteur sint occaecat cupida non at proident, sunt culp officia deserun moll anim est laborum. Sed perspi!</p>
                                    <div class="clearfix">
                                        <img src="images/home/a-1.jpg" alt="" class="float-left">
                                        <div class="name float-left">
                                            <h6>Zubayer Hasan</h6>
                                            <span>Berlin</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="flaticon-close"></i>
                                    <p>“Excepteur sint occaecat cupida non at proident, sunt culp officia deserun moll anim est laborum. Sed perspi!</p>
                                    <div class="clearfix">
                                        <img src="images/home/a-1.jpg" alt="" class="float-left">
                                        <div class="name float-left">
                                            <h6>Foqrul Munna</h6>
                                            <span>Berlin</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.testimonial-slider -->
                        </div> <!-- /.main-slider-wrapper -->
                    </div>
                </div> <!-- /.main-bg-wrapper -->
            </div> <!-- /.testimonial-section -->


            <!--
            =====================================================
                Loan Section
            =====================================================
            -->
            <div class="loan-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="loan-calculation-wrapper">
                                <div class="theme-title">
                                    <h2>Check loan status, interest &amp; Installment.</h2>
                                    <p>Cum sociis natoque penatibus et magnis parturient. Pro vel nibh et elit mollis commodo et nec augue tristique sed</p>
                                </div> <!-- /.theme-title -->
                                <div class="loan-filter-form">
                                    <label>Loan Amount</label>
                                    <div class="price-ranger">
                                        <div class="ranger-min-max-block">
                                            <ul class="clearfix">
                                                <li class="float-left"><input type="text" class="min" readonly> </li>
                                                <li class="float-left">To</li>
                                                <li class="float-left"><input type="text" class="max" readonly></li>
                                                <li class="float-right">$35,600</li>
                                            </ul>
                                        </div>
                                        <div id="slider-range"></div>
                                    </div> <!-- /price-ranger -->
                                    <label>Select Installment Months</label>
                                    <ul class="duration-filter clearfix">
                                        <li class="float-left">
                                            <select class="theme-selectpicker">
                                              <option>18</option>
                                              <option>20</option>
                                              <option>22</option>
                                            </select>
                                        </li>
                                        <li class="float-right">18 Months / 7.60% <span>APR</span></li>
                                    </ul>
                                </div> <!-- /.loan-filter-form -->
                            </div> <!-- /.loan-calculation-wrapper -->
                        </div> <!-- /.col- -->

                        <div class="col-lg-5 col-12">
                            <div class="loan-confirm-form">
                                <h6>Total Amount</h6>
                                <h2>$37,500</h2>
                                <ul class="clearfix">
                                    <li class="float-left">
                                        <h6>Installment</h6>
                                        <h3>$2750</h3>
                                    </li>
                                    <li class="float-right">
                                        <h6>Interest Rate</h6>
                                        <h3>7.21%</h3>
                                    </li>
                                </ul>
                                <button class="tran3s apply-button">APPLY FOR LOAN</button>
                            </div> <!-- /.loan-confirm-form -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.loan-section -->


            <!--
            =====================================================
                Why Choose Us
            =====================================================
            -->
            <div class="why-choose-us style-two">
                <div class="container">
                    <div class="theme-title text-center">
                        <h2>Why We’re Different</h2>
                        <p>Cum sociis natoque penatibus et magnis parturient. Pro vel nibh et elit</p>
                    </div> <!-- /.theme-title -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-block">
                                <div class="icon"><i class="flaticon-piggy-bank"></i></div>
                                <h4><a href="#">Low Interest</a></h4>
                                <p>Cum sociis natoq magnis partuent. Pro vel nibh et elit mollis </p>
                                <a href="#">Check Interest</a>
                            </div> <!-- /.single-block -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-block">
                                <div class="icon"><i class="flaticon-pie-chart"></i></div>
                                <h4><a href="#">Fast Loan Process</a></h4>
                                <p>Cum sociis natoq magnis partuent. Pro vel nibh et elit mollis </p>
                                <a href="#">Time Duration</a>
                            </div> <!-- /.single-block -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-block">
                                <div class="icon"><i class="flaticon-credit-card"></i></div>
                                <h4><a href="#">No Hidden Fees</a></h4>
                                <p>Cum sociis natoq magnis partuent. Pro vel nibh et elit mollis </p>
                                <a href="#">Check All Fees</a>
                            </div> <!-- /.single-block -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.why-choose-us -->


            <!--
            =====================================================
                Latest Update
            =====================================================
            -->
            <div class="latest-update">
                <div class="container">
                    <div class="theme-title">
                        <h2>Check what happen inside <br>our company.</h2>
                        <a href="blog-grid.html">GO TO NEWS</a>
                    </div> <!-- /.theme-title -->

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-4 col-12">
                            <div class="single-update-post">
                                <div class="count">01</div>
                                <h4><a href="blog-details.html">The Advantages Minimal Repair Technique.</a></h4>
                                <p>September 13, 2017</p>
                            </div> <!-- /.single-update-post -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 col-md-6 col-sm-4 col-12">
                            <div class="single-update-post">
                                <div class="count">02</div>
                                <h4><a href="blog-details.html">Effective Ways To Quit Smoking Fast.</a></h4>
                                <p>October 27, 2017</p>
                            </div> <!-- /.single-update-post -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 d-md-none d-lg-block col-sm-4 col-12">
                            <div class="single-update-post">
                                <div class="count">03</div>
                                <h4><a href="blog-details.html">How To Stop Living Your Life On Autopilot</a></h4>
                                <p>August 15, 2017</p>
                            </div> <!-- /.single-update-post -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.latest-update -->


            <!--
            =====================================================
                Footer
            =====================================================
            -->
            <footer class="theme-footer">
                <div class="container">
                    <div class="content-wrapper">
                        <h2>Subscirbe  Our Newslatter!!</h2>
                        <form action="#" class="subscribe-form">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-12">
                                    <input type="text" placeholder="Full Name*">
                                </div>
                                <div class="col-lg-5 col-md-6 col-12">
                                    <input type="email" placeholder="Email Address*">
                                </div>
                                <div class="col-lg-2 col-12">
                                    <input type="submit" value="SIGN UP NOW">
                                </div>
                            </div> <!-- /.row -->
                        </form> <!-- /.subscribe-form -->

                        <div class="footer-bottom-wrapper row">
                            <div class="col-lg-3 col-sm-6 col-12 footer-logo">
                                <div class="logo"><a href="index.html"><img src="{{URL::to('images/logo/bancoren_logo.jpg')}}" alt="Logo"></a></div>
                                <a href="#" class="mail-address">bloanco@gmail.com</a>
                                <a href="#" class="phone-number">202. 277. 3894</a>
                            </div> <!-- /.footer-logo -->
                            <div class="col-lg-3 col-sm-6 col-12 footer-list">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">How it Works</a></li>
                                    <li><a href="#">Guarantee</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Report Bug</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> <!-- /.footer-list -->
                            <div class="col-lg-3 col-sm-6 col-12 footer-list">
                                <h4>About Us</h4>
                                <ul>
                                    <li><a href="about-us.html">About Singleton</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="blog-grid.html">Blog</a></li>
                                </ul>
                            </div> <!-- /.footer-list -->
                            <div class="col-lg-3 col-sm-6 col-12 footer-list">
                                <h4>Become A Member</h4>
                                <ul>
                                    <li><a href="#">Contributor</a></li>
                                    <li><a href="#">Union Member</a></li>
                                    <li><a href="#">Processing</a></li>
                                    <li><a href="#">Legal Action</a></li>
                                </ul>
                            </div> <!-- /.footer-list -->
                        </div> <!-- /.footer-bottom-wrapper -->

                        <div class="copyright-wrapper row">
                            <div class="col-md-6 col-sm-8 col-12">
                                <p>© 2017 <a href="#">CreativeGigs.</a> All rights reserved</p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- /.copyright-wrapper -->
                    </div>
                </div> <!-- /.container -->
            </footer> <!-- /.theme-footer -->
            

            

            <!-- Scroll Top Button -->
            <button class="scroll-top tran3s">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </button>

@endsection