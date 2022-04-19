<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<!--  This source code is exported from pxCode, you can get more document from https://www.pxcode.io  -->

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon.png">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
		<!-- Latest compiled and minified CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&family=Ubuntu:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">

		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />

		<link rel="stylesheet" type="text/css" href="css/New.css" />
		<link rel="stylesheet" type="text/css" href="css/responsive.css" />

		<script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.3.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/sweetalert.js"></script>
		<style>
			.button {
				width: 68px;
				height: 28px;
				padding-top: 3px;
				margin-top: 12px;
				background: #a0bd1c;
				border-radius: 6px;
				font-size: 14.5px;
				;
				font-weight: 300;
				font-style: normal;
				color: #FBFCFB;
				font-family: Ubuntu;
				text-align: center;
				padding-right: 60px;

			}

			.button2 {
				background-color: #FBFCFB;
				width: 89px;
				height: 36px;
				left: 1042px;
				margin-top: 15px;
				border: 1px solid #a0bd1c;
				padding-top: 10px;
				font-family: 'Ubuntu';
				font-style: normal;
				font-weight: 300;
				font-size: 14.5px;
				line-height: 16px;
				margin-left: -52.5px;
				color: #a0bd1c;
			}

			.button2:hover {
				background-color: #a0bd1c;
				color: white;
			}

			.button:hover {
				background-color: #FBFCFB;
				border: 1px solid #a0bd1c;
				color: #a0bd1c;
			}

			.bg-nav {
				background-color: #FBFCFB;
			}

			.shadow {
				box-shadow: 0 .6rem 1rem rgba(0, 0, 0, .05) !important
			}

			.center {
				margin: auto;
				width: 60%;
				padding: 10px;
			}

			.span::before {
				content: " \A";
				white-space: pre;
			}

			.navbar-brand {
				padding-top: 0px;
			}

			.navbar {
				padding-top: 0px;
			}
		</style>
	</head>


	<body class="body">
		<main class="new new-main layout">
			<?php include("./inc/alert.php"); ?>
			<!-- ======= section1 ======= -->
			<section class="new-section1__section1 layout">
				<div class="fixed-top">
					<div class="new-section1__block21 layout">
						<div class="new-section1__flex1 layout">
							<div class="new-section1__text-body8-box layout">
								<div class="new-section1__text-body8">
									<span><b class="free">FREE </b></span><span class="new-section1__text-body8-span2 text business">Business
										Name Availability Search</span>
								</div>
							</div>
							<div class="new-section1__flex1-spacer"></div>
							<div class="new-section1__flex1-item">
								<input type="text" class="form-control form" placeholder=" search business name here">
							</div>
							<div class="new-section1__flex1-spacer1"></div>
							<div class="new-section1__flex1-item1">
								<div class="">
									<button class="btn buttons">SEARCH</button>

								</div>
							</div>
							<div class="new-section1__flex1-spacer2"></div>

							<a href="+1 (708) 318-0273" class="phone">+1 (708) 318-0273</a>
						</div>
					</div>

					<nav class="navbar navbar-expand-sm bg-nav shadow navbar-light height">

						<div class="container-fluid">
							<a class="navbar-brand brand" href="index.php"><img src="assets/logo.png" class="logoimg" width="164"></a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="collapsibleNavbar">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link nav link" href="index.php" style="color: #000000; margin-left:40px; margin-top: 19px;font-family: Ubuntu;
                  font-style: normal;
                  font-weight: 400;
                  font-size: 14.5px;
                  line-height: 16px;">Home</a>
									</li>
									<li class=" nav-item dropdown">
										<a class="nav-link link dropdown-toggle nav link" href="#" role="button" data-bs-toggle="dropdown" style="color: #000000; margin-left:41px; margin-top: 19px;font-family: Ubuntu;
                  font-style: normal;
                  font-weight: 400;
                  font-size: 14.5px;
                  line-height: 16px;">Visa
											Services</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="NBV.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Business Visa
													on
													Arrival</a></li>
											<li><a class=" dropdown-item" href="NTWP.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Temporary Work Permit
													Approval</a></li>
											<li><a class=" dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Tourist Visa</a></li>
											<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Business Visa
													Extension</a></li>
											<li><a class=" dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Subject To
													Regularization (STR)</a></li>
											<li><a class=" dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Permit to Land
													Immgration
													Approval For<span class="span"> Marine Vessels Foreign Crew</span></a></li>

										</ul>
									</li>
									<li class=" nav-item dropdown">
										<a class="nav-link link dropdown-toggle nav" href="#" role="button" data-bs-toggle="dropdown" style="color: #000000; margin-left:41px; margin-top: 19px;font-family: Ubuntu;
                  font-style: normal;
                  font-weight: 400;
                  font-size: 14.5px;
                  line-height: 16px;">Services</a>
										<ul class="dropdown-menu" style="width: 900px;">
											<div class="row">
												<div class="col-md-4">
													<li><a class="dropdown-item" href="NBI.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
															Business Incorporation</a>
													</li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Hotel Bookings</a>
													</li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Real Estate
															Cosultancy and Advisory</a></li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Legal Advisory
															and Consultation</a>
													</li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Africa travels
															& tours</a></li>
												</div>
												<div class="col-md-4">
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
															Immigration
															Consultancy</a></li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigerian Custom
															Consultancy</a>
													</li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
															Immigration Meet and
															Greet</a></li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
															Protocol Services</a></li>
												</div>
												<div class="col-md-4">
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
															Transfers</a></li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Vehicle Rentals</a>
													</li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Armed Security
															Escort
															Services</a>
													</li>
													<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria COVID 19
															Payment Services</a></li>
												</div>
											</div>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link link" href="contact.php" style="width: 100%; color: #000000;margin-left:41px; margin-top: 19px;font-family: Ubuntu;
                  font-style: normal;
                  font-weight: 400;
                  font-size: 14.5px;
                  line-height: 16px;">Contact Us</a>
									</li>
									<li class=" nav-item">
										<a class="nav-link link" href="about.php" style="width: 100%;color: #000000;margin-left:41px; margin-top: 19px;font-family: Ubuntu;
                  font-style: normal;
                  font-weight: 400;
                  font-size: 14.5px;
                  line-height: 16px;">About Us</a>
									</li>


									<li class="nav-item apply" style="margin-left: 118px;">
										<a href="apply.php" class="btn button btn-outline-light" type="button" style=" margin-right: 93px;
                  width: 89px;
                  margin-top: 15px;
                  height: 36px;
                  padding-left: 26px;padding-top: 5px;">Apply</a>
										<a href="signin.php" class="btn button2 sign" type="button">Sign In</a>
									</li>

									<li class=" nav-item dropdown lang" style="margin-left: 40px;">
										<a class="nav-link dropdown-toggle nav" href="#" role="button" data-bs-toggle="dropdown" style="color: #150423;">
											<img src="assets/image_2022-02-27_16-21-31.png" width="17" style="margin-top:-4px;font-size: 14.5px;">&nbsp;<span>English |</span></a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="NBV.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
												</a></li>
											<li><a class=" dropdown-item" href="NTWP.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
											</li>
											<li><a class=" dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
											</li>
											<li><a class="dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
											</li>
											<li><a class=" dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
											</li>
											<li><a class=" dropdown-item" href="#" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
											</li>

										</ul>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>

				<section class=" new-section1__group layout2">
					<div style="background-image: url(assets/bg.png);background-size: contain; background-repeat: no-repeat;" class="new-section1__cover-block layout">
						<h4 class="new-section1__highlights5-box layout">
							<pre class="new-section1__highlights5 shop">
              Your One-stop shop for </pre>
						</h4>
						<h1 class="bannertext new-section1__hero-title2 layout ">
							Nigeria Visa and <br>Business Incorporation
						</h1>
						<h2 class="new-section1__medium-title layout made">
							Made easy, fast and convenient!
						</h2>
						<div class="new-section1__block11 layout applys">
							<a href="" class="btn applybtn">Apply NOW</a>

							<!-- <h5 class="new-section1__highlights1 layout">Apply NOW</h5> -->
						</div>
					</div>

				</section>

			</section>
			<comment content="======= End section1 =======" break="true"></comment><!-- ======= section2 ======= -->
			<section class="new-section2__section2 layout">
				<div class="new-section2__flex layout row">
					<div class="new-section2__flex-spacer"></div>
					<div class="new-section2__flex-item col-md-4 col-sm-4 col-lg-4">
						<div class="new-section2__block12 layout">
							<div class="new-section2__flex6 layout">
								<h5 class="new-section2__highlights6 layout">
									Nigeria business Visa On Arrival
								</h5>
								<div style=" border-top: 1px solid #000080; height: 1px; margin-top: 10px; margin-bottom: 25px;"></div>
								<!-- <hr style="border: 1px solid #060a5c; "> -->
								<div style="display: flex;
              justify-content: center;">
									<img src="assets/Passport.png" width="139">
								</div>

								<div class="new-section2__paragraph-body1-box layout">
									<pre class="new-section2__paragraph-body1">
Temporary Residence Visas allow individuals reside in Nigeria for a period not exceeding two years. Visas and their brief descriptions are listed below. To view more information on each visa class  validity, etc.)</pre>
								</div>
								<div class="new-section2__block13 layout">
									<a href="./NBVForm.php" class="btn" style="font-family: Ubuntu;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 16px;
                color: #FBFCFB;">Apply</a>
								</div>
							</div>
						</div>
					</div>
					<div class="new-section2__flex-spacer1"></div>
					<div class="new-section2__flex-item col-md-4 col-sm-4 col-lg-4">
						<div class="new-section2__block12 layout">
							<div class="new-section2__flex6 layout">
								<h5 class="new-section2__highlights6 layout">
									Nigeria Temporary Work Permit ( TWP)
								</h5>
								<div style=" border-top: 1px solid #060a5c; height: 1px; margin-top: 10px; margin-bottom: 25px;"></div>
								<!-- <hr style="border: 1px solid #060a5c; "> -->
								<div style="display: flex;
              justify-content: center;">
									<img src="assets/twp.png" width="139">
								</div>

								<div class="new-section2__paragraph-body1-box layout">
									<pre class="new-section2__paragraph-body1">
Temporary Residence Visas allow individuals reside in Nigeria for a period not exceeding two years. Visas and their brief descriptions are listed below. To view more information on each visa class  validity, etc.)</pre>
								</div>
								<div class="new-section2__block13 layout">
									<a href="./NTWPForm.php" class="btn" style="font-family: Ubuntu;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 16px;
                color: #FBFCFB;">Apply</a>
								</div>
							</div>
						</div>
					</div>
					<div class="new-section2__flex-spacer1"></div>
					<div class="new-section2__flex-item col-md-4 col-sm-4 col-lg-4">
						<div class="new-section2__block12 layout">
							<div class="new-section2__flex6 layout">
								<h5 class="new-section2__highlights6 layout">
									Nigeria Business Incorporation
								</h5>
								<div style=" border-top: 1px solid #060a5c; height: 1px; margin-top: 10px; margin-bottom: 25px;"></div>
								<!-- <hr style="border: 1px solid #060a5c; "> -->
								<div style="display: flex;
              justify-content: center;">
									<img src="assets/nbi.png" width="139" height="112">
								</div>

								<div class="new-section2__paragraph-body1-box layout">
									<pre class="new-section2__paragraph-body1">
Temporary Residence Visas allow individuals reside in Nigeria for a period not exceeding two years. Visas and their brief descriptions are listed below. To view more information on each visa class  validity, etc.)</pre>
								</div>
								<div class="new-section2__block13 layout">
									<a href="./BIForm.php" class="btn" style="font-family: Ubuntu;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 16px;
                color: #FBFCFB;">Apply</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<comment content="======= End section2 =======" break="true"></comment><!-- ======= section3 ======= -->
			<section class="new-section3__section3 layout row">
				<div class="col-md-12">
					<div class="new-section3__group layout " style="background-color: white;">
						<!-- <div class="new-section3__box3 layout"></div> -->
						<div class="new-section3__block2 layout">
							<div class="new-section3__block2-spacer"></div>
							<div class="width">
								<div class="row">
									<div class="col-md-3 col-xs-3 col-sm-3">
										<div class="new-section3__block2-item">
											<div class="new-section3__block3 layout">
												<div class="new-section3__block3-item">
													<div style="background-image: url(assets/nationality.png); background-repeat: no-repeat;" class="new-section3__icon4 layout">
													</div>
												</div>
												<div class="new-section3__block3-spacer"></div>
												<div class="new-section3__block3-item1">
													<div class="new-section3__flex9 layout">
														<h5 class="new-section3__highlights2 layout">
															Nationality
														</h5>
														<select class="form-select" style="border: 1px solid transparent; padding: 0; font-weight: 600;" aria-label="Default select example">
															<option selected>Please Select</option>
															<option value="1">One</option>
															<option value="2">Two</option>
															<option value="3">Three</option>
														</select>

													</div>
												</div>

											</div>
										</div>
									</div>

									<div class="col-md-3 col-xs-3 col-sm-3 ml-80">
										<div class="new-section3__block2-item1">
											<div class="new-section3__block5 layout">
												<div class="new-section3__block5-item">
													<div style="background-image: url(assets/location.png); background-repeat: no-repeat;" class="new-section3__icon4 layout">
													</div>
												</div>
												<div class="new-section3__block5-spacer"></div>
												<div class="new-section3__block5-item1">
													<div class="new-section3__flex10 layout">
														<h5 class="new-section3__highlights2 layout1">
															Current Location
														</h5>
														<select class="form-select" style="border: 1px solid transparent; padding: 0;font-weight: 600;" aria-label="Default select example">
															<option selected>Please Select</option>
															<option value="1">One</option>
															<option value="2">Two</option>
															<option value="3">Three</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-3 col-xs-3 col-sm-3 ml-80">
										<div class="new-section3__block2-item2">
											<div class="new-section3__block7 layout">
												<div class="new-section3__block5-item">
													<div style="background-image: url(assets/purpose.png); background-repeat: no-repeat;" class="new-section3__icon4 layout">
													</div>
												</div>
												<div class="new-section3__block7-spacer"></div>
												<div class="new-section3__block7-item1">
													<div class="new-section3__flex9 layout">
														<h5 class="new-section3__highlights2 layout2">Purpose</h5>
														<h5 class="new-section3__highlights31-box layout1">
															<select class="form-select" style="border: 1px solid transparent; padding: 0;font-weight: 600;" aria-label="Default select example">
																<option selected>Please Select</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
															</select>
														</h5>
													</div>
												</div>

											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="row ">
								<button class="btn blue">
									<div class="row">
										<div class="col-md-9">
											<h4 class="new-section3__highlights4 layout">Get started</h4>
										</div>
										<div class="col-md-3"> <img src="assets/arrow.png" style="margin-top: 10px;
                    margin-right: 50px;"></div>
									</div>

								</button>
							</div>

						</div>
					</div>
				</div>

			</section>
			<comment content="======= End section3 =======" break="true"></comment><!-- ======= section4 ======= -->

			<section class="">
				<div class="p-2" style="background-color: #1161D9;">

					<h1 style="font-size: 2rem; text-align: center; color: white; padding-top:90px; font:400 53px/1.16 " Rubik", Helvetica, Arial, serif">
						How does the Visa Process work?
					</h1>
					<h4 style=" text-align: center; color: white; font-family: rubik; padding-top: 13px; font-size: 16px; font-weight: 300;" class="">
						Only 5 simple steps to process your Nigeria Visa
					</h4>
					<div class="container-fluid" style="margin-bottom: 137px">
						<ul class="list-group list-group-horizontal ">
							<li class="mt-5">
								<div>
									<img src="assets/1.png" class="img1" width="113">

									<h1 class="img1h1">
										1</h1>

									<h4 class="img1h4">
										<span id="content1">Fill
											Online</span><span id="content2">application form</span>

								</div>
							</li>
							<li class="mt-5">
								<div>
									<img src="assets/2.png" width="113" class="img2">

									<h1 class="img2h1">
										2
									</h1>

									<h4 class="mt-2 img2h4">Make
										Payment</h4>
								</div>
							</li>
							<li class="mt-5">
								<div class="">
									<img src="assets/3.png" width="113" class="img3">

									<h1 class="img3h1">
										3
									</h1>

									<h4 class="mt-2 img3h4">
										Upload
										relevant documents</h4>
								</div>
							</li>
							<li class="mt-5">
								<div>
									<img src="assets/4.png" width="113" class="img4">

									<h1 class="img4h1">
										4
									</h1>

									<h4 class="mt-2 img4h4">
										Track
										Progress</h4>
								</div>
							</li>.
							<li class="mt-5 img5">
								<div>
									<img src="assets/5.png" width="113" class="img56">
									<h1 class="img5h1">
										5
									</h1>

									<h4 class="mt-2 img5h4">Get
										your Visa</h4>
								</div>
							</li>
						</ul>
					</div>

				</div>

			</section>
			<comment content="======= End section4 =======" break="true"></comment><!-- ======= section5 ======= -->
			<section class="new-section5__section5 layout">
				<h1 class="new-section5__hero-title1 layout hands">
					You are in the right hands
				</h1>
				<div class="new-section5__flex3 layout flexd">

					<div class="">
						<div class="new-section5__flex3-item">
							<div class="new-section5__content-box1 layout cardwidth" style="height: 354px;">
								<img src="assets/800.png" width="84" class="cardimg">
								<h1 class="new-section5__hero-title4 layout cardh1" data-max="800">+</h1>
								<h5 class="new-section5__highlights1 layout cardh5">
									We have processed over 800 Nigeria Business Visas
								</h5>
							</div>
						</div>
					</div>
					<div class="new-section5__flex3-spacer"></div>
					<div class="">
						<div class="new-section5__flex3-item">
							<div class="new-section5__content-box1 layout cardwidth" style="height: 354px;">
								<img src="assets/1000.png" width="84" class="cardimg">
								<h1 class="new-section5__hero-title4 layout cardh1" data-max="1000">+</h1>
								<h5 class="new-section5__highlights1 layout cardh5">
									We have processed over 1000 Temporary Work Permits
								</h5>
							</div>
						</div>
					</div>
					<div class="new-section5__flex3-spacer"></div>
					<div class="">
						<div class="new-section5__flex3-item">
							<div class="new-section5__content-box1 layout cardwidth" style="height: 354px;">
								<img src="assets/200.png" width="84" class="cardimg">
								<h1 class="new-section5__hero-title4 layout cardh1" data-max="200">+</h1>
								<h5 class="new-section5__highlights1 layout cardh5">
									We have Incorperated over 200 Nigeria Businesses
								</h5>
							</div>
						</div>
					</div>
				</div>
			</section>
			<comment content="======= End section5 =======" break="true"></comment><!-- ======= section6 ======= -->
			<section class="new-section6__section6 layout">
				<div class="new-section6__flex4 layout">
					<h1 class="new-section6__hero-title1 layout" style="    width: 671px;
        height: 41px;
        font-family: Rubik;
        font-style: normal;
        font-weight: normal;
        font-size: 35px;
        line-height: 41px;
        color: #060a5c;">
						What our customers have to say about us
					</h1>
					<div class="new-section6__flex17 layout">
						<div class="new-section6__flex17-item">
							<img src="assets/567e56d659b95feb61c2ad9900beb3a7.png" width="50" class="rounded-circle">
						</div>
						<div class="new-section6__flex17-spacer"></div>
						<div class="new-section6__flex17-item">
							<img src="assets/567e56d659b95feb61c2ad9900beb3a7.png" width="50" class="rounded-circle">
						</div>
						<div class="new-section6__flex17-spacer"></div>
						<div class="new-section6__flex17-item">
							<img src="assets/567e56d659b95feb61c2ad9900beb3a7.png" width="50" class="rounded-circle">
						</div>
					</div>

					<div class="new-section6__flex18 layout">
						<div class="new-section6__flex18-item">
							<div class="new-section6__text-body layout">
								<p style="font-family: Ubuntu;
              font-style: normal;
              font-weight: 600;
              font-size: 13px;
              line-height: 16px;              
              letter-spacing: 0.0015em;  
              margin-left: -15px;           
              color: #000080;">Mary James</p>
							</div>
						</div>
						<div class="new-section6__flex18-spacer"></div>
						<div class="new-section6__flex18-item">
							<div class="new-section6__text-body layout">
								<p style="font-family: Ubuntu;
              font-style: normal;
              font-weight: 600;
              
              font-size: 13px;
              line-height: 16px;              
              letter-spacing: 0.0015em;
              
              color: #000080;">Mary James</p>
							</div>
						</div>
						<div class="new-section6__flex18-spacer"></div>
						<div class="new-section6__flex18-item">
							<div class="new-section6__text-body layout">
								<p style="font-family: Ubuntu;
              font-style: normal;
              font-weight: 600;
              font-size: 13px;
              line-height: 16px;              
              letter-spacing: 0.0015em;
              margin-right: -17px;
              color: #000080;">Mary James</p>
							</div>
						</div>
					</div>
					<!-- <div class="new-section6__flex19 layout">
          <div class="new-section6__flex18-item">
            <ul>
              <li><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 12.3916L11.4583 14.4833C12.0917 14.8666 12.8667 14.3 12.7 13.5833L11.7833 9.64997L14.8417 6.99997C15.4 6.51663 15.1 5.59997 14.3667 5.54164L10.3417 5.19997L8.76667 1.4833C8.48334 0.808301 7.51667 0.808301 7.23333 1.4833L5.65833 5.19164L1.63333 5.5333C0.9 5.59163 0.599999 6.5083 1.15833 6.99163L4.21667 9.64163L3.3 13.575C3.13333 14.2916 3.90833 14.8583 4.54167 14.475L8 12.3916Z" fill="#FFCE31"/>
                </svg></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            
              
                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 12.3916L11.4583 14.4833C12.0917 14.8666 12.8667 14.3 12.7 13.5833L11.7833 9.64997L14.8417 6.99997C15.4 6.51663 15.1 5.59997 14.3667 5.54164L10.3417 5.19997L8.76667 1.4833C8.48334 0.808301 7.51667 0.808301 7.23333 1.4833L5.65833 5.19164L1.63333 5.5333C0.9 5.59163 0.599999 6.5083 1.15833 6.99163L4.21667 9.64163L3.3 13.575C3.13333 14.2916 3.90833 14.8583 4.54167 14.475L8 12.3916Z" fill="#FFCE31"/>
                  </svg>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 12.3916L11.4583 14.4833C12.0917 14.8666 12.8667 14.3 12.7 13.5833L11.7833 9.64997L14.8417 6.99997C15.4 6.51663 15.1 5.59997 14.3667 5.54164L10.3417 5.19997L8.76667 1.4833C8.48334 0.808301 7.51667 0.808301 7.23333 1.4833L5.65833 5.19164L1.63333 5.5333C0.9 5.59163 0.599999 6.5083 1.15833 6.99163L4.21667 9.64163L3.3 13.575C3.13333 14.2916 3.90833 14.8583 4.54167 14.475L8 12.3916Z" fill="#FFCE31"/>
                    </svg>
                                                      
          </div>
        </div> -->
					<div class="new-section6__flex20 layout">
						<div class="new-section6__flex20-item">
							<div class="new-section6__paragraph-body-box layout">
								<pre class="new-section6__paragraph-body" style="width: 181px;
              height: 32px;
             
              top: 3178px;
              font-family: Ubuntu;
              font-style: normal;
              font-weight: normal;
              font-size: 14px;
              line-height: 16px;
              letter-spacing: 0.0015em;
              
              color: #000080;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </pre>
							</div>
						</div>
						<div class="new-section6__flex20-spacer"></div>
						<div class="new-section6__flex20-item">
							<div class="new-section6__paragraph-body1-box layout">
								<pre class="new-section6__paragraph-body" style="width: 181px;
              height: 32px;
             
              top: 3178px;
              font-family: Ubuntu;
              font-style: normal;
              font-weight: normal;
              font-size: 14px;
              line-height: 16px;
              letter-spacing: 0.0015em;
              
              color: #000080;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </pre>
							</div>
						</div>
						<div class="new-section6__flex20-spacer"></div>
						<div class="new-section6__flex20-item">
							<div class="new-section6__paragraph-body1-box layout">
								<pre class="new-section6__paragraph-body" style="width: 181px;
              height: 32px;
              margin-right: -103px;
              top: 3178px;
              font-family: Ubuntu;
              font-style: normal;
              font-weight: normal;
              font-size: 14px;
              line-height: 16px;
              letter-spacing: 0.0015em;
              
              color: #000080;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </pre>
							</div>
						</div>
					</div>
					<div class="new-section6__block10 layout">
						<div class="new-section6__text-body1 layout">See More Reviews</div>
					</div>
				</div>
			</section>
			<comment content="======= End section6 =======" break="true"></comment><!-- ======= section7 ======= -->
			<section class="new-section7__section7 layout">
				<div class="new-section7__group layout">
					<div class="new-section7__box8 layout"></div>
					<div class="new-section7__flex5 layout">
						<div class="new-section7__flex5-item">
							<div class="new-section7__cover-group layout">
								<div style="background-image:url(assets/smbg.png)" class="new-section7__cover1 layout">
								</div>
								<div class="new-section7__box9 layout"></div>
							</div>
						</div>
						<div class="new-section7__flex5-spacer"></div>
						<div class="new-section7__flex5-item1">
							<div class="new-section7__flex21 layout">
								<h3 class="new-section7__subtitle1 layout">
									Never miss an offer
								</h3>
								<div class="new-section7__text-body3 layout">
									Subscribe and be the first to receive our exclusive offers.
								</div>
								<div class="new-section7__flex22 layout">
									<div class="new-section7__flex22-item">
										<div class="new-section7__block15 layout">
											<input type="email" class="form-control" placeholder="email address" style="font-family: ubuntu;">
										</div>
									</div>
									<div class="new-section7__flex22-item">
										<div class="new-section7__block16 layout">
											<input type="text" class="form-control" placeholder="country" style="font-family: ubuntu;">
										</div>
									</div>
								</div>
								<div class="new-section7__block14 layout">
									<button class="btn" style="background: #0C65EB;
                color: white;
                text-align: center;
                font-family: 'Ubuntu';
                padding: 5px;
                height: 41px;
                ">subscribe</button>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<comment content="======= End section7 =======" break="true"></comment><!-- ======= section8 ======= -->
			<section class="new-section8__section8 layout">
				<div class="new-section8__block19 layout">
					<div class="new-section8__flex23 layout">
						<div class="new-section8__flex24 layout">
							<div class="">
								<div class="row">
									<div class="col-md-2">
										<div class="new-section8__block20 layout">
											<img src="assets/logo.png" width="164" style="margin-left: 61px;margin-top: -20px;">

											<ul>
												<li style="font-size: 13px;color: #000080;margin-left: 100px;margin-top: 21px;"><img src="assets/instagram.png" width="16">&nbsp; Instagram
												</li>

												<li style="font-size: 13px;color: #000080;margin-left: 100px;margin-top: 31px;"><img src="assets/facebook.png" width="16">&nbsp; Facebook
												</li>

												<li style="font-size: 13px;color: #000080;margin-left: 100px;margin-top: 31px;"><img src="assets/twitter.png" width="16">&nbsp; Twitter</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3" style="padding-left: 80px;">
										<h3 class="new-section8__highlights8 layout">
											VISA SERVICES
										</h3>
										<ul>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;
                    ">Nigeria Business Visa on
												Arrival</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Nigeria
												Temporary Work Permit
												Approval</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Nigeria
												Tourist Visa</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Nigeria
												Business Visa
												Extension</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Nigeria
												Subject To
												Regularization (STR)</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Permit to Land
												Immgration Approval For Marine Vessels Foreign Crew</li>

										</ul>
									</div>
									<div class="col-md-3" style="padding-left: 93px;">
										<h5 class="new-section8__highlights8 layout">
											OTHER SERVICES
										</h5>
										<ul>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Nigeria
												Business Incorporation
											</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Hotel Bookings
											</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Real Estate
												Cosultancy and
												Advisory</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Legal Advisory
												and Consultation
											</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Africa travels
												& tours</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Nigerian
												Immigration
												Consultancy</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Nigeria Custom
												Consultancy
											</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Airport
												Immigration Meet and
												Greet</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Airport
												Protocol Services</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Airport
												Transfers</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Vehicle Rentals
											</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Armed Security
												Escort Services
											</li>
											<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Nigeria COVID
												19 Payment
												Services</li>
										</ul>
									</div>
									<div class="col-md-4" style="padding-left: 75px;">
										<div class="row">
											<div class="col-md-5">
												<h5 class="new-section8__highlights8 layout">
													SUPPORT
												</h5>
												<ul>
													<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Apply</li>
													<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Help</li>
													<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Contact Us
													</li>
												</ul>
											</div>
											<div class="col-md-7">
												<h5 class="new-section8__highlights8 layout">
													COMPANY
												</h5>
												<ul>
													<li class="new-section8__text-body5 layout"><a href="about.php" style="font-size: 13px; color: #000080; text-decoration: none;">About us</a>
													</li>
													<li class="new-section8__text-body5 layout"><a href="pp.php" style="font-size: 13px; color: #000080; text-decoration: none;">Privacy &Cookie Policy</a>
													</li>
													<li class="new-section8__text-body5 layout" 0><a href="t&c.php" style="font-size: 13px; color: #000080; text-decoration: none;">Terms And
															Condition</a></li>
													<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">Refund
														Policy</li>
												</ul>
											</div>
										</div>
										<br>
										<br>
										<div class="row">
											<h5 class="new-section8__highlights8 layout">
												CORPORATE CONTACT DETAILS
											</h5>
											<ul>
												<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">441 Granville
													Avenenue
													Hillside Illinois 60152</li>
												<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">+1 (708)
													318-0273
												</li>
												<li class="new-section8__text-body5 layout" style="font-size: 13px; color: #000080;">
													info@peacerydeafrica.com</li>

											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="">

							</div>

						</div>
					</div>
					<hr>
					<div style="padding-left: 104px; padding-right: 170px;">
						<div class="row" style="padding-top: 18px; padding-bottom: 18px;">
							<div class="col-md-3">
								<p><a href="index.php" style="font-size: 14px; color: #000080; text-decoration: none; margin-top: -2px;"> &copy; &nbsp;
										2022 PeaceRydeAfrica LLC</a></p>
							</div>
							<div class="col-md-5">
								<p style="font-size: 14px; color: #000080;">PeaceRyde LLC is Registered with the state of Delaware USA<br>
									under the File Number 654846</p>
							</div>
							<div class="col-md-2">
								<p style="margin-top: -2px;"><a href="pp.php" style="font-size: 14px; color: #000080; text-decoration: none;">Privacy and Cookie
										Policy</a></p>
							</div>
							<div class="col-md-2">
								<p style="font-size: 14px; margin-left: 37px; color: #000080;">Terms & Conditions</p>
							</div>
						</div>
					</div>

			</section>
			<!-- ======= End section8 ======= -->

		</main>
		<script>
			function inVisible(element) {
				//Checking if the element is
				//visible in the viewport
				var WindowTop = $(window).scrollTop();
				var WindowBottom = WindowTop + $(window).height();
				var ElementTop = element.offset().top;
				var ElementBottom = ElementTop + element.height();
				//animating the element if it is
				//visible in the viewport
				if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
					animate(element);
			}

			function animate(element) {
				//Animating the element if not animated before
				if (!element.hasClass('ms-animated')) {
					var maxval = element.data('max');
					var html = element.php();
					element.addClass("ms-animated");
					$({
						countNum: element.php()
					}).animate({
						countNum: maxval
					}, {
						//duration 5 seconds
						duration: 1000,
						easing: 'linear',
						step: function() {
							element.php(Math.floor(this.countNum) + html);
						},
						complete: function() {
							element.php(this.countNum + html);
						}
					});
				}

			}

			//When the document is ready
			$(function() {
				//This is triggered when the
				//user scrolls the page
				$(window).scroll(function() {
					//Checking if each items to animate are 
					//visible in the viewport
					$("h1[data-max]").each(function() {
						inVisible($(this));
					});
				})
			});
		</script>
		<script type="text/javascript">
			AOS.init();
		</script>
	</body>

</html>