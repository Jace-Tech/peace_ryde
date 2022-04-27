<?php 
	session_start();
	if(!isset($_SESSION["LOGGED_USER"])) header("Location: ./signin.php");
?>

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

		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />

		<link rel="stylesheet" type="text/css" href="css/New.css" />
		<link rel="stylesheet" type="text/css" href="css/Laptops.css" />

		<script src="js/main.js"></script>
		<script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.3.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
			fieldset,
			label {
				margin: 0;
				padding: 0;
			}

			h1 {
				font-size: 1.5em;
				margin: 10px;
			}

			/****** Style Star Rating Widget *****/

			.rating {
				border: none;

			}

			.rating>input {
				display: none;
			}

			.rating>label:before {
				margin: 13px 5px 13px 13px;
				font-size: 1.25em;
				font-family: FontAwesome;
				display: inline-block;
				content: "\f005";
			}

			.rating>.half:before {
				content: "\f089";
				position: absolute;
			}

			.rating>label {

				float: right;
			}

			/***** CSS Magic to Highlight Stars on Hover *****/

			.rating>input:checked~label,
			/* show gold star when clicked */
			.rating:not(:checked)>label:hover,
			/* hover current star */
			.rating:not(:checked)>label:hover~label {
				color: #FFD700;
			}

			/* hover previous stars in list */

			.rating>input:checked+label:hover,
			/* hover current star when changing rating */
			.rating>input:checked~label:hover,
			.rating>label:hover~input:checked~label,
			/* lighten current selection */
			.rating>input:checked~label:hover~label {
				color: #FFED85;
			}
		</style>
	</head>


	<body>
		<main class="new new-main layout">
			<!-- ======= section1 ======= -->
			<?php include("./inc/alert.php"); ?>
			<section class="new-section1__section1 layout">
				<div class="fixed-top">
					<div class="new-section1__block21 layout" style="height: 54px;">
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

					<nav class="navbar navbar-expand-sm bg-nav shadow navbar-light height" style="padding-bottom: 0px; height: 90px;">
						<div class="container-fluid cf" style="height: 100px;">
							<a class="navbar-brand brand" href="Index.php"><img src="assets/logo.png" class="logoimg" width="164"></a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="collapsibleNavbar">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link nav link home" href="Index.php">Home</a>
									</li>
									<li class=" nav-item dropdown">
										<a class="nav-link link dropdown-toggle nav link visa" href="#" role="button" data-bs-toggle="dropdown">Visa
											Services</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="NBV.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Business Visa
													on
													Arrival</a></li>
											<li><a class=" dropdown-item" href="NTWP.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Temporary Work Permit
													Approval</a></li>
											<li><a class=" dropdown-item" href="VSBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Tourist Visa</a></li>
											<li><a class="dropdown-item" href="VSBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Business Visa
													Extension</a></li>
											<li><a class=" dropdown-item" href="VSBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Subject To
													Regularization (STR)</a></li>
											<li><a class=" dropdown-item" href="VSBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Permit to Land
													Immgration
													Approval For<span class="span"> Marine Vessels Foreign Crew</span></a></li>

										</ul>
									</li>
									<li class=" nav-item dropdown">
										<a class="nav-link link dropdown-toggle nav services" href="#" role="button" data-bs-toggle="dropdown">Services</a>
										<ul class="dropdown-menu" style="width: 900px;">
											<div class="row">
												<div class="col-md-4">
													<li><a class="dropdown-item" href="NBI.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
															Business Incorporation</a>
													</li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Hotel Bookings</a>
													</li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Real Estate
															Cosultancy and Advisory</a></li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Legal Advisory
															and Consultation</a>
													</li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Africa travels
															& tours</a></li>
												</div>
												<div class="col-md-4">
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
															Immigration
															Consultancy</a></li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigerian Custom
															Consultancy</a>
													</li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
															Immigration Meet and
															Greet</a></li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
															Protocol Services</a></li>
												</div>
												<div class="col-md-4">
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
															Transfers</a></li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Vehicle Rentals</a>
													</li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Armed Security
															Escort
															Services</a>
													</li>
													<li><a class="dropdown-item" href="SBForm.php" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria COVID 19
															Payment Services</a></li>
												</div>
											</div>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link link contact" href="contact.php">Contact Us</a>
									</li>
									<li class=" nav-item">
										<a class="nav-link link about" href="about.php">About Us</a>
									</li>


									<li class="nav-item apply ml-118">
										<a href="apply.php" class="btn button btn-outline-light appbtn" type="button" style="">Apply</a>
										<a href="signin.php" class="btn button2 sign" type="button">Sign In</a>
									</li>

									<li class=" nav-item dropdown lang">
										<a class="nav-link dropdown-toggle nav" href="#" role="button" data-bs-toggle="dropdown" style="color: #150423; font-family: 'Ubuntu';font-size: 14px;">
											<img src="assets/image_2022-02-27_16-21-31.png" width="17" style="margin-top:-4px;font-size: 14px;">&nbsp;<span>English |</span></a>
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
			</section>

			<section class=" new-section2__group layout2 aboutpageheight" style="background-color: #f8f6f6;">
				<div class="container new-section1__cover-block layout" style="margin-top: 74px;">
					<form action="./handlers/review_handler.php" method="post" class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="card" style="width: 393px;">
								<p style="font-family: Ubuntu;
                          font-size: 18px;
                          font-weight: 400;
                          line-height: 24px;
                          letter-spacing: 0em;
                          text-align: left;
                          padding-left:99px;
                          padding-top: 29px;
                          ">Rate Your Experience</p>
								<fieldset class="rating">
									<input type="radio" required id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars" style="margin-right: 110px;"></label>
									<input type="radio" required id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
									<input type="radio" required id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" required id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
									<input type="radio" required id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" required id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
									<input type="radio" required id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" required id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
									<input type="radio" required id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
									<input type="radio" required id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
								<p style="font-family: Ubuntu;
                        font-size: 18px;
                        font-weight: 400;
                        line-height: 24px;
                        letter-spacing: 0em;
                        text-align: left;
                        padding-left:79px;
                        padding-top: 29px;
                        ">Tell us about your expeience</p>
							<textarea required style="width: 337px; height: 184px; margin-left: 28px; margin-top:26px;font-family: Ubuntu; font-size: 13px; font-weight: 400; line-height: 24px; letter-spacing: 0em; text-align: left; color: #888888;border: 1px solid #555555;" name="review" placeholder="This is where you write your review.explain what happend, keep your feedback honest, helpfyl, and constructive"></textarea>
						<div class="mt-4 p-4 text-right">
                         <button name="add" type="submit" class="btn btn-block border-0 sma" style="background-color: #a0bd1c;">Post review</button>
                       </div>
						</div>
						<div class="col-md-4"></div>
					</form>

				</div>
			</section>


			<section class="new-section8__section8 layout">
				<div class="new-section8__block19 layout">
					<div class="new-section8__flex23 layout">
						<div class="new-section8__flex24 layout">
							<div class="">
								<div class="row">
									<div class="col-md-2 col-sm-6 col-xs-6">
										<div class="new-section8__block20 layout">
											<img src="assets/logo.png" width="164" class="footerlogo">
											<ul>
												<li class="lg-li"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M10.7 8C10.7 6.5 9.5 5.3 8 5.3C6.5 5.3 5.3 6.5 5.3 8C5.3 9.5 6.5 10.7 8 10.7C9.5 10.7 10.7 9.5 10.7 8ZM12.1 8C12.1 10.3 10.3 12.1 8 12.1C5.7 12.1 3.9 10.3 3.9 8C3.9 5.7 5.7 3.9 8 3.9C10.3 3.9 12.1 5.7 12.1 8ZM13.2 3.7C13.2 4.3 12.8 4.7 12.2 4.7C11.6 4.7 11.2 4.3 11.2 3.7C11.2 3.1 11.6 2.7 12.2 2.7C12.8 2.7 13.2 3.2 13.2 3.7ZM8 1.4C6.8 1.4 4.3 1.3 3.3 1.7C2.6 2 2 2.6 1.8 3.3C1.4 4.3 1.5 6.8 1.5 8C1.5 9.2 1.4 11.7 1.8 12.7C2 13.4 2.6 14 3.3 14.2C4.3 14.6 6.9 14.5 8 14.5C9.1 14.5 11.7 14.6 12.7 14.2C13.4 13.9 13.9 13.4 14.2 12.7C14.6 11.6 14.5 9.1 14.5 8C14.5 6.9 14.6 4.3 14.2 3.3C14 2.6 13.4 2 12.7 1.8C11.7 1.3 9.2 1.4 8 1.4ZM16 8V11.3C16 12.5 15.6 13.7 14.7 14.7C13.8 15.6 12.6 16 11.3 16H4.7C3.5 16 2.3 15.6 1.3 14.7C0.5 13.8 0 12.6 0 11.3V8V4.7C0 3.4 0.5 2.2 1.3 1.3C2.3 0.5 3.5 0 4.7 0H11.3C12.5 0 13.7 0.4 14.7 1.3C15.5 2.2 16 3.4 16 4.7V8Z" fill="#080C58" />
													</svg>
													&nbsp; Instagram
												</li>

												<li class="lg-li"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 0.5C3.865 0.5 0.5 3.865 0.5 8C0.5 12.135 3.865 15.5 8 15.5C12.135 15.5 15.5 12.135 15.5 8C15.5 3.865 12.135 0.5 8 0.5ZM8 1.75C11.4594 1.75 14.25 4.54063 14.25 8C14.2515 9.49623 13.715 10.9431 12.7383 12.0766C11.7617 13.2101 10.41 13.9547 8.93 14.1744V9.8225H10.71L10.9894 8.01438H8.93V7.02688C8.93 6.27688 9.17688 5.61 9.87875 5.61H11.0069V4.0325C10.8088 4.00563 10.3894 3.9475 9.59688 3.9475C7.94187 3.9475 6.97187 4.82125 6.97187 6.8125V8.01438H5.27063V9.8225H6.97187V14.1588C5.51234 13.9185 4.18577 13.1672 3.22918 12.039C2.27259 10.9108 1.74831 9.47917 1.75 8C1.75 4.54063 4.54063 1.75 8 1.75Z" fill="#080C58" />
													</svg>
													&nbsp; Facebook
												</li>

												<li class="lg-li"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9 15.6665C10.7681 15.6665 12.4638 14.9641 13.714 13.7139C14.9643 12.4636 15.6667 10.7679 15.6667 8.99984C15.6667 7.23173 14.9643 5.53604 13.714 4.28579C12.4638 3.03555 10.7681 2.33317 9 2.33317C7.23189 2.33317 5.5362 3.03555 4.28595 4.28579C3.03571 5.53604 2.33333 7.23173 2.33333 8.99984C2.33333 10.7679 3.03571 12.4636 4.28595 13.7139C5.5362 14.9641 7.23189 15.6665 9 15.6665ZM9 17.3332C4.3975 17.3332 0.666664 13.6023 0.666664 8.99984C0.666664 4.39734 4.3975 0.666504 9 0.666504C13.6025 0.666504 17.3333 4.39734 17.3333 8.99984C17.3333 13.6023 13.6025 17.3332 9 17.3332Z" fill="#080C58" />
														<path d="M13.1667 6.45568C12.86 6.58901 12.5308 6.68068 12.185 6.72068C12.5383 6.51235 12.8083 6.18235 12.9367 5.78985C12.6 5.98607 12.2326 6.12411 11.85 6.19818C11.6891 6.02949 11.4954 5.89535 11.281 5.80394C11.0665 5.71254 10.8356 5.66578 10.6025 5.66651C9.65833 5.66651 8.89333 6.42068 8.89333 7.34985C8.89333 7.48151 8.90833 7.60985 8.9375 7.73318C8.26027 7.70102 7.59718 7.52805 6.99054 7.2253C6.38389 6.92255 5.84702 6.49668 5.41416 5.97485C5.26213 6.23076 5.18209 6.52301 5.1825 6.82068C5.1825 7.40401 5.48499 7.92068 5.94333 8.22151C5.67203 8.213 5.40655 8.14078 5.16833 8.01068V8.03151C5.1709 8.42273 5.30899 8.80096 5.55909 9.10181C5.80919 9.40265 6.15583 9.60752 6.54 9.68151C6.28779 9.7482 6.0239 9.75788 5.7675 9.70985C5.87927 10.0464 6.09306 10.3398 6.37918 10.5493C6.66531 10.7588 7.00956 10.8741 7.36416 10.879C6.7558 11.3478 6.00886 11.6011 5.24083 11.599C5.10333 11.599 4.96749 11.5907 4.83333 11.5757C5.61705 12.0718 6.5258 12.3345 7.45333 12.3332C10.5983 12.3332 12.3175 9.76818 12.3175 7.54318L12.3117 7.32485C12.6469 7.08925 12.9366 6.79475 13.1667 6.45568Z" fill="#080C58" />
													</svg>
													&nbsp; Twitter</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 div2">
										<h3 class="new-section8__highlights8 layout footh3">
											VISA SERVICES
										</h3>
										<ul>
											<li class="new-section8__text-body5 layout fs-13">Nigeria Business Visa on
												Arrival</li>
											<li class="new-section8__text-body5 layout fs-13">Nigeria
												Temporary Work Permit
												Approval</li>
											<li class="new-section8__text-body5 layout fs-13">Nigeria
												Tourist Visa</li>
											<li class="new-section8__text-body5 layout fs-13">Nigeria
												Business Visa
												Extension</li>
											<li class="new-section8__text-body5 layout fs-13">Nigeria
												Subject To
												Regularization (STR)</li>
											<li class="new-section8__text-body5 layout fs-13">Permit to Land
												Immgration Approval For Marine Vessels Foreign Crew</li>

										</ul>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 div3">
										<h3 class="new-section8__highlights8 layout footh3">
											OTHER SERVICES
										</h3>
										<ul>
											<li class="new-section8__text-body5 layout fs-13">Nigeria
												Business Incorporation
											</li>
											<li class="new-section8__text-body5 layout fs-13">Hotel Bookings
											</li>
											<li class="new-section8__text-body5 layout fs-13">Real Estate
												Cosultancy and
												Advisory</li>
											<li class="new-section8__text-body5 layout fs-13">Legal Advisory
												and Consultation
											</li>
											<li class="new-section8__text-body5 layout fs-13">Africa travels
												& tours</li>
											<li class="new-section8__text-body5 layout fs-13">Nigerian
												Immigration
												Consultancy</li>
											<li class="new-section8__text-body5 layout fs-13">Nigeria Custom
												Consultancy
											</li>
											<li class="new-section8__text-body5 layout fs-13">Airport
												Immigration Meet and
												Greet</li>
											<li class="new-section8__text-body5 layout fs-13">Airport
												Protocol Services</li>
											<li class="new-section8__text-body5 layout fs-13">Airport
												Transfers</li>
											<li class="new-section8__text-body5 layout fs-13">Vehicle Rentals
											</li>
											<li class="new-section8__text-body5 layout fs-13">Armed Security
												Escort Services
											</li>
											<li class="new-section8__text-body5 layout fs-13">Nigeria COVID
												19 Payment
												Services</li>
										</ul>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-6 div4">
										<div class="row">
											<div class="col-md-5 col-sm-6 col-xs-6">
												<h3 class="new-section8__highlights8 layout footh3">
													SUPPORT
												</h3>
												<ul>
													<li class="new-section8__text-body5 layout fs-13">Apply</li>
													<li class="new-section8__text-body5 layout fs-13">Help</li>
													<li class="new-section8__text-body5 layout fs-13">Contact Us
													</li>
												</ul>
											</div>
											<div class="col-md-7 col-sm-6 col-xs-6 company">
												<h3 class="new-section8__highlights8 layout footh3">
													COMPANY
												</h3>
												<ul>
													<li class="new-section8__text-body5 layout fs-13"><a class="fs-13" href="about.php" style=" text-decoration: none;">About us</a>
													</li>
													<li class="new-section8__text-body5 layout fs-13"><a class="fs-13" href="pp.php" style=" text-decoration: none;">Privacy &Cookie Policy</a>
													</li>
													<li class="new-section8__text-body5 layout fs-13" 0><a href="t&c.php" class="fs-13" style=" text-decoration: none;">Terms And
															Condition</a></li>
													<li class="new-section8__text-body5 layout fs-13">Refund
														Policy</li>
												</ul>
											</div>
										</div>
										<br>
										<br>
										<div class="row">
											<h3 class="new-section8__highlights8 layout footh3">
												CORPORATE CONTACT DETAILS
											</h3>
											<ul>
												<li class="new-section8__text-body5 layout fs-13">441 Granville
													Avenenue
													Hillside Illinois 60152</li>
												<li class="new-section8__text-body5 layout fs-13">+1 (708)
													318-0273
												</li>
												<li class="corp layout fs-13 ">
													info@peacerydeafrica.com</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="lastfooter">
						<div class="row lastfooterrow">
							<div class="col-md-3 col-sm-12 col-xs-12">
								<p><a class="locaddress" href="Index.php"> &copy; &nbsp;
										2022 PeaceRydeAfrica LLC</a></p>
							</div>
							<div class="col-md-5 col-sm-12 col-xs-12">
								<p class="shorttest">PeaceRyde LLC is Registered with the state of Delaware USA
									under the File Number 654846</p>
							</div>
							<div class="col-md-2">
								<p style="margin-top: -2px;"><a class="privacy" href="pp.php">Privacy and Cookie
										Policy</a></p>
							</div>
							<div class="col-md-2">
								<p><a class="tc" href="t&c.php">Terms & Conditions</a></p>
							</div>
						</div>
					</div>

			</section>
			<!-- ======= End section8 ======= -->

		</main>
		<script type="text/javascript">
			AOS.init();
		</script>
	</body>

</html>