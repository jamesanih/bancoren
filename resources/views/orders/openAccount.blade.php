@extends('layouts.welcome')

@section('title')

@endsection

@section('contents')
 <script src="{{URL::to('vendor/jquery.2.2.3.min.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function(){
        $("#msg").hide();
		$("#btn").click(function(){
            $("#msg").show();
			var fname = $("#fname").val();
            var surname = $("#surname").val();
            var other_name = $("#other_name").val();
            var maiden_name = $("#maiden_name").val();
            var gender = $("#gender").val();
            var date_of_birth = $("#date_of_birth").val();
            var occupation  =$("#occupation").val();
            var email = $("#email").val();
            var nationality = $("#nationality").val();
            var location = $("#location").val();
            var contact = $("#contact").val();
            var contact2 = $("#contact2").val();
            var account_type = $("#account_type").val();
            var personal_id = $("#personal_id").val();
            var valid_date = $("#valid_date").val();
            var token = $("#token").val();


           $.ajax({
               type: "post",
               data: "fname="+ fname + "&surname="+ surname + "&other_name="+ other_name + "&maiden_name="+maiden_name+
                        "&gender="+ gender + "&date_of_birth="+ date_of_birth + "&occupation="+ occupation + "&email="+ email + 
                        "&nationality="+ nationality + "&location="+ location + "&contact="+ contact + "&contact2="+ contact2 +
                        "&account_type=" + account_type + "&personal_id="+ personal_id + "&valid_date=" + valid_date + "&_token="+token,

                url: "<?php echo url('/user/createaccount')?>",
                success:function(response){
                    
                     $('#msg').html(response.message);
                     
          				$('#msg').fadeOut(2000);
                }
           })

           //$("#smallModal").modal('show');
		})
	})
</script>

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
                        <div class="logo float-left"><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo/logo2.png')}}" alt="Logo"></a></div>

                        <!-- ============================ Theme Menu ========================= -->
                        
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
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                   
                                </li>                                
                                <li class="nav-item dot-fix">
                                    <a class="nav-link" href="contact-us.html">Contact us</a>
                                </li>
                                <li class="nav-item search-button"><button class="search b-p-bg-color" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></button></li>
                              </ul>
                            </div>
                        </nav>
                                                        
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
                                <h1 class="wow fadeInUp animated"><h1>Online Account Opening Request <br>For $0.00</h1></h1>
                                <p class="wow fadeInUp animated" data-wow-delay="0.2s">Opening a Zenith bank account is easier than ever before, simply fill in your details below and visit the nearest Zenith Bank branch at your convenience with the required documentation to get your account activated.</p>
                                <a href="service-v1.html" class="button-one wow fadeInLeft animated" data-wow-delay="0.3s">See services</a>
                                <a href="{{route('openaccount')}}" class="button-two wow fadeInRight animated" data-wow-delay="0.3s">Get An Account</a>
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

               
            </div> <!-- /.home-two-banner -->


            
            <div class="work-progress">
                <div class="container">
                	<div class="content-wrapper">
                		
                			<div class="row">
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>FIRST NAME*</label>
                					<input type="text" name="fname" class="form-control" required="true" id="fname">
                				</div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>SURNAME*</label>
                					<input type="text" name="surname" class="form-control" required="true" id="surname">
                				</div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>OTHER NAMES*</label>
                					<input type="text" name="other_name" class="form-control" required="true" id="other_name">
                				</div>
                			</div>

                			<div class="row">
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>MAIDEN NAME*</label>
                					<input type="text" name="maiden_name" class="form-control" required="true" id="maiden_name">
                				</div>
                				
                			</div>
                    <div id="msg" class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4 class="alert-heading">
                    </div>
                			<br><br>
                			<div class="row">
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>GENDER</label>
                					<select class="form-control" name="gender" id="gender">
										<option value="">-- SELECT --</option>
										<option value="male">MALE</option>
										<option value="female">FEMALE</option>
										
									</select>
                				</div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>DATE OF BIRTH*</label>
                					<input type="text" name="date_of_birth" class="form-control" required="true" placeholder="DD-MMM-YYYY" id="date_of_birth">
                				</div>


                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>OCCUPATION</label>
                					<select class="form-control" name="occupation" id="occupation">
										<option value="">-- SELECT --</option>
										<option value="accountant">ACCOUNTANT</option>
										<option value="administrator">ADMINISTRATOR</option>
										<option value="advertising">ADVERTISING & MARKETING</option>
										<option value="student">STUDENT</option>
										
									</select>
                				</div>
                				
                			</div>
                			<br><br>

                				<div class="row">
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>Email*</label>
                					<input type="email" name="fname" class="form-control" required="true" id="email">
                				</div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>NATIONALITY*</label>
                					<input type="text" name="nationality" class="form-control" required="true" id="nationality">
                				</div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>LOCATION*</label>
                					<textarea class="form-control" name="location" id="location"></textarea>
                				</div>
                			</div>

                			<div class="row">
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>CONTACT*</label>
                					<input type="text" name="contact" class="form-control" required="true" id="contact">
                				</div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>CONTACT 2*</label>
                					<input type="text" name="contact2" class="form-control" required="true" id="contact2">
                				</div>
                				
                			</div>
                			<br><br>
                           
                			<div class="row">
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>ACCOUNT TYPE</label>
                					<select class="form-control" name="account_type" id="account_type">
										<option value="">-- SELECT --</option>
										<option value="SAVINGS">INSTANCE SAVINGS AC</option>
										<option value="CURRENT">INSTANCE CURRENT AC</option>
										<option value="CHILDREN">INSTANCE CHILDREN AC</option>
										
									</select>
                				</div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>PERSONAL ID*</label>
                					<select class="form-control" name="personal_id" id="personal_id">
										<option value="">-- SELECT --</option>
										<option value="VOTER ID">VOTER ID</option>
										<option value="NATIONAL ID">NATIONAL ID</option>
										<option value="STUDENT ID">STUDENT ID</option>
										
									</select>
                				</div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					<label>VALID DATE*</label>
                					<input type="text" name="valid_date" class="form-control" required="true" placeholder="DD-MMM-YYYY" id="valid_date">
                				</div>
                			</div>

                			<input type="hidden" value="{{csrf_token()}}" id="token">


                			<br><br>

                			<div class="row">
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                					
                					<input type="submit" name="submit" class="btn btn-primary" id="btn">
                				</div>
                				
                			</div>


                		
                	</div>
                		
                	
                   
                </div> <!-- /.container -->
            </div> <!-- /.work-progress -->


           
           


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
                                <div class="logo"><a href="index.html"><img src="{{URL::to('images/logo/logo3.png')}}" alt="Logo"></a></div>
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


            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

@endsection