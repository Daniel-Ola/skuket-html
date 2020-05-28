<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>SPARKER | Premium directory and listings template by Ansonika.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
		
	<div id="page">
		


	<header class="header menu_fixed">
		<div id="logo" style="height: 35px; width: 165px;">
			<a href="/" title="Skuket">
				<!-- <strong class="btn">Skuket</strong> -->
				<img src="assets/images/skuket_logo.png" style="width: 100%; object-fit: contain;" alt="" class="logo_normal">
				<img src="assets/images/skuket_logo.png" style="width: 100%; object-fit: contain;" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="account.html" class="btn_add">Add Listing</a></li>
			<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
			<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="/">Home</a></span></li>
				<li><span><a href="#0">Categories</a></span>
					<ul>
						<li>
							<span><a href="categories.php">Vehicle</a></span>
							<ul>
									<li><a href="subcat.php">Car</a></li>
									<li><a href="subcat.php">Bus</a></li>
							</ul>
						</li>
						<li>
							<span><a href="#0">Services</a></span>
							<ul>
								<li><a href="row-listings-filterscol-search-aside.html">Barbing</a></li>
								<li><a href="row-listings-filterstop-search-aside.html">Laundry</a></li>
								<li><a href="row-listings-filterscol.html">Cleaning</a></li>
							</ul>
						</li>
						<li><a href="listing-map.html">Another Category</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Pages</a></span>
					<ul>
						<li><a href="admin_section/index.html">Admin section</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="account.html">Account</a></li>
						<li><a href="help.html">Help Section</a></li>
						<li><a href="faq.html">Faq Section</a></li>
						<li><a href="wishlist.html">Wishlist page</a></li>
						<li><a href="contacts.html">Contacts</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="media-gallery.html">Media gallery</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Extra</a></span>
					<ul>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Go Premium</a></span></li>
			</ul>
		</nav>
	</header>
	<!-- /header -->
	
	<main>
		<section class="hero_single version_4">
			<div class="wrapper">
				<div class="container">
					<h3>Find what you need!</h3>
					<p>Discover amazing products and services in your campus</p>
					<form method="post" action="grid-listings-filterscol.html">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="What are you looking for...">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Where">
									<datalist id="">
										
									</datalist>
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide">
									<option>All Categories</option>	
									<option>Grocery</option>
									<option>Car</option>
									<option>Restaurants</option>
								</select>
							</div>
							<div class="col-lg-2">
								<input type="submit" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
					<ul class="counter">
						<li><strong>256,020</strong> Campuses</li>
						<li><strong>150,543</strong> Active users</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- /hero_single -->	

		<!-- /container -->
		
		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Featured Products</h2>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="row justify-content-center">
				<?php
					for ($i=0; $i < 12; $i++) { 
		0		?>
					<div class="col-lg-3 col-md-6">
						<a href="details.php" class="box_cat_home px-0 pt-0">
							<!-- <i class="icon_menu-circle_alt"></i> -->
							<img src="assets/images/product.jpg" class="img-fluid" alt="">
							<h6 class="mt-1 text-left pl-1">Product Name</h6>
							<p class="text-left pl-1 mb-0">#20,000</p>
							<ul>
								<li style="width: 90%;">
									<span class="float-left"><strong>Lautech</strong>Ogbomoso</span>
									<span class="float-right" data-toggle="tooltip" data-placement="top" title="Add to wish list">Add</span>
								</li>
							</ul>
						</a>
					</div>
				<?php
						# code...
					}
				?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->	
		</div>
		<!-- /bg_color_1 -->
		
		<div class="call_section image_bg">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>How it Works</h2>
						<p>Follow this easy steps and get your desired products at ease.</p>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="box_how wow">
								<i class="pe-7s-search"></i>
								<h3>Search Products</h3>
								<p>Search products based on their common names and or location. Distance is not a barrier</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>View Product Info</h3>
								<p>Check if the product satifies your need and budget. It's simple just click any product you like we'll handle the rest</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Act Fast</h3>
								<p>Yeah, that's it, act fast, contact your seller before someone else does.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box_how">
								<i class="pe-7s-magic-wand"></i>
								<h3>Have fun</h3>
								<p>Have fun with your product and don't forget to rate your seller and refer a friend</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="register.html" class="btn_1 rounded">Register Now</a></p>
				</div>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->

	<footer class="plus_border" style="background-color: #E6EAF3;">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_1">
						<ul class="links">
							<li><a href="#0">About us</a></li>
							<li><a href="#0">Faq</a></li>
							<li><a href="#0">Help</a></li>
							<li><a href="#0">My account</a></li>
							<li><a href="#0">Create account</a></li>
							<li><a href="#0">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_2">Categories</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_2">
						<ul class="links">
							<li><a href="#0">Shops</a></li>
							<li><a href="#0">Hotels</a></li>
							<li><a href="#0">Restaurants</a></li>
							<li><a href="#0">Bars</a></li>
							<li><a href="#0">Events</a></li>
							<li><a href="#0">Fitness</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_3">Contacts</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_3">
						<ul class="contacts">
							<li><i class="ti-home"></i>Skuket Plaza <br>Lagos - Nigeria</li>
							<li><i class="ti-headphone-alt"></i>+39 06 97240120</li>
							<li><i class="ti-email"></i><a href="#0">info@sparker.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<input type="submit" value="Submit" id="submit-newsletter">
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><i class="ti-facebook"></i></a></li>
								<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="#0"><i class="ti-google"></i></a></li>
								<li><a href="#0"><i class="ti-pinterest"></i></a></li>
								<li><a href="#0"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2018 Sparker</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

</body>
</html>