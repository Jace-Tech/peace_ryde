<?php session_start(); ?>
<?php include("./utils/country_fee.php"); ?>

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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/New.css" />
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&family=Ubuntu:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
		<script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.3.js"></script>
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

			.buttons {
				width: 68px;
				height: 28px;
				padding-top: 3px;
				margin-top: 12px;
				background: #a0bd1c;
				border-radius: 6px;
				font-size: 13px;
				;
				font-weight: 300;
				font-style: normal;
				color: #FBFCFB;
				font-family: Ubuntu;
				text-align: center;
				padding-right: 60px;
			}

			.buttons:hov {
				color: white;
			}

			.button2 {
				background-color: #FBFCFB;
				width: 89px;
				height: 36px;
				left: 1042px;
				margin-top: 15px;
				border: 1px solid #a0bd1c;
				padding-top: 5px;
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

			.applybtn {
				padding-left: 30.5px;
				font-weight: 300;
				padding-top: 13px;
				padding-bottom: 13px;
				padding-right: 30.5px;
				color: #ffffff;
				font-family: ubuntu;
				font-size: 16px;
			}

			.applybtn:hover {

				color: #ffffff;

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

			.some-class {
				float: left;
				clear: none;
			}

			label {
				float: left;
				clear: none;
				display: block;
				padding: 0px 0.5rem 0px 8px;
			}

			input[type=radio],
			input.radio {
				float: left;
				clear: none;
				margin: 2px 0 0 2px;
			}


			.span::before {
				content: " \A";
				white-space: pre;
			}

			.navbar-brand {
				padding-top: 0px;
			}

			.form-row {
				display: flex;
			}

			input[type=radio],
			input.radio {
				float: left;
				clear: none;
				margin: 6px 0 0 2px;
				border-color: #A0BD1C;
			}

			.form-group {
				padding: 5px;
				width: 50%;
			}

			.form-group input {
				width: 100%;
			}

			.proceed {

				background-color: #C9DA7A;
				font-family: Ubuntu;
				font-size: 14px;
				font-style: normal;
				font-weight: 400;
				color: #ffffff;

			}

			.form-select {
				color: #555555;
			}


			.new-section2__group.layout2 {
				position: relative;
				height: 1600px;
			}
		</style>
	</head>


	<body style="overflow-x: hidden;">
		<main class="new new-main layout">
			<!-- ======= section1 ======= -->
			<section class="new-section1__section1 layout">
				<div class="fixed-top">
					<div class="new-section1__block21 layout">
						<div class="new-section1__flex1 layout">
							<div class="new-section1__text-body8-box layout">
								<div class="new-section1__text-body8">
									<span><b style="font-weight: 500;margin-left: 587px;
                      margin-top: 18px;
                      font-family: Ubuntu;
                      font-style: normal;
                      color: #ffffff;">FREE </b></span><span class="new-section1__text-body8-span2 text" style="font-weight: 300;">Business
										Name Availability Search</span>
								</div>
							</div>
							<div class="new-section1__flex1-spacer"></div>
							<div class="new-section1__flex1-item">
								<input type="text" class="form-control" style="width: 230px;
                  height: 28px;
                  left: 874px;
                  margin-top: 10px;
                  background: #F1F5F6;
                  text-align: center;
                  border-radius: 6px;
                  color:#15042336;
    ;
                  font-family: Ubuntu;
                  font-size: 14px;
                  line-height: 16px;
                  text-transform: lowercase;
                  color: rgba(21, 4, 35, 0.21);" placeholder=" search business name here">
							</div>
							<div class="new-section1__flex1-spacer1"></div>
							<div class="new-section1__flex1-item1">
								<div class="">
									<button class="btn buttons">SEARCH</button>

								</div>
							</div>
							<div class="new-section1__flex1-spacer2"></div>

							<a href="+1 (708) 318-0273" style="color: white;
                padding-top: 18px;
                width: 120px;
                height: 16px;
                left: 1208px;
                font-family: 'Ubuntu';
                font-style: normal;
                font-weight: 300;
                font-size: 14px;
                line-height: 16px;
                text-decoration-line: none;
                color: #FFFFFF;">+1 (708) 318-0273</a>
						</div>
					</div>

					<nav class="navbar navbar-expand-sm bg-nav shadow navbar-light height">

						<div class="container-fluid">
							<a class="navbar-brand brand" href="index.php"><img src="assets/logo.png" width="164" style="margin-left: 51px; margin-top: 28px;"></a>
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
											<li><a class="dropdown-item" href="NBV.html" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
													Business Visa
													on
													Arrival</a></li>
											<li><a class=" dropdown-item" href="NTWP.html" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
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
													<li><a class="dropdown-item" href="NBI.html" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
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
										<a class="nav-link link" href="contact.html" style="width: 100%; color: #000000;margin-left:41px; margin-top: 19px;font-family: Ubuntu;
                      font-style: normal;
                      font-weight: 400;
                      font-size: 14.5px;
                      line-height: 16px;">Contact Us</a>
									</li>
									<li class=" nav-item">
										<a class="nav-link link" href="about.html" style="width: 100%;color: #000000;margin-left:41px; margin-top: 19px;font-family: Ubuntu;
                      font-style: normal;
                      font-weight: 400;
                      font-size: 14.5px;
                      line-height: 16px;">About Us</a>
									</li>


									<li class="nav-item apply" style="margin-left: 118px;">
										<button class="btn button btn-outline-light" type="button" style=" margin-right: 93px;
                      width: 89px;
                      margin-top: 15px;
                      height: 36px;
                      padding-left: 26px;padding-top: 5px;">Apply</button>
										<button class="btn button2 sign" type="button">Sign In</button>
									</li>

									<li class=" nav-item dropdown lang" style="margin-left: 40px;">
										<a class="nav-link dropdown-toggle nav" href="#" role="button" data-bs-toggle="dropdown" style="color: #150423;">
											<img src="assets/image_2022-02-27_16-21-31.png" width="17" style="margin-top:-4px;font-size: 14.5px;">&nbsp;<span>English |</span></a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="NBV.html" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
												</a></li>
											<li><a class=" dropdown-item" href="NTWP.html" style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
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
								<!-- <div class="d-flex">
    
                    <button class="btn button" type="button" style="margin-right: 50px;">Apply</button>
                    <button class="btn button2 mr-10" type="button">Sign In</button>
                    <span></span>
                    <a class="nav-link" href="#" style="color: black; padding-right: 20px;">English</a>
                  </div> -->
							</div>
						</div>
					</nav>
				</div>
			</section>
			<section class=" new-section2__group layout2" style="background-color: #f8f6f6;">
				<div class="new-section1__cover-block layout">
					<h2 style="
                 font-family: Rubik;
                 font-size: 35px;
                 font-style: normal;
                 font-weight: 500;                 
                 padding-left: 610px;
                 padding-top: 62px;
                 color:#000080;
                 "> Welcome!</h2>
					<p style="height: 113px;
                 color:#000080;
                 padding-left: 339px;
                 padding-top: 52px;
                 font-family: ubuntu;
                 font-size: 18px;
                 font-weight: 300;
                 ">The first step in applying for a <span style="font-size: 20px; font-weight: 500;">Nigeria Temporary Work Permit</span> is to fill the form below.<br>
						<span>It takes less than 5 minutes to do this. After you submit your application, you can<br></span>
						<span> move on to the next step to make payment</span>.
					</p>
					<div style="margin:74px 251px 166px 251px; width: 938px;">
						<div class="card" style="border:1px solid #ffffff; height: 999px;">
							<div style="margin-top: 47px;">
								<h2 style="padding-left: 364px;font-family: 'Ubuntu';font-style: normal;font-weight: 500;font-size: 24px;color: #0A0E69;
                            ">Fill the form below</h2>
								<p style="
                            padding: 28px 373px 0px 390px;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;color: #0A0E69;
                            
                            ">Your personal details</p>
							</div>
							<div>
								<form data-form action="./handlers/form_handler.php" method="post">
									<select required class="form-select" name="title" style="border: 1px solid #555555; width:352px; margin-left:116px; margin-top:72px" aria-label="Default select example">
										<option selected>Title</option>
										<?php foreach ($titles as $title) : ?>
											<option value="<?= $title ?>">
												<?= $title ?>
											</option>
										<?php endforeach; ?>
									</select>
									<p style="padding-top:19px; padding-left: 116px; color: #C8730F;font-family: Ubuntu; font-size: 13px; font-style: normal; font-weight: 400; ">Your name must be entered in English as it appears on your passport.</p>

									<div class="form-row" style="margin-left: 116px;">
										<div class="form-group">
											<input required type="text" name="firstname" class="form-control" style="border:1px solid #555555; font-family: ubuntu; margin-top: 27px;height: 44px; width:227px;" placeholder="First Name">
										</div>
										<div class="form-group">
											<input required type="text" name="middlename" class="form-control" style="border:1px solid #555555; font-family: ubuntu; margin-top: 27px;height: 44px; width:227px; " placeholder="Middle Name">
										</div>
										<div class="form-group" style="margin-right: 117px;">
											<input required type="text" name="lastname" class="form-control" style="border:1px solid #555555; font-family: ubuntu; margin-top: 27px;height: 44px; width:227px;" placeholder="Last Name">
										</div>
									</div>

									<div class="form-row" style="margin-left: 116px;">
										<div class="form-group">
											<input required type="date" name="dob" class="form-control" style="border:1px solid #555555; font-family: ubuntu; margin-top: 25px;height: 44px; width:227px;" placeholder="DD/MM/YY">
										</div>
										<div class="col-md-12" style="margin-top: 25px;">
											<label style="padding-left: 78px;">Gender</label>
											<br>
											<div class="form-check form-check-inline" style="margin-left: 48px;">
												<div class="custom-control custom-radio">
													<label class="custom-control-label" for="customControlValidation2">Male</label>
													<input type="radio" class="custom-control-input" value="male" id="customControlValidation2" name="gender">
												</div>
											</div>
											<div class="form-check form-check-inline" style="margin-left: -20px;">
												<div class="custom-control custom-radio">
													<label class="custom-control-label" for="customControlValidation3">Female</label>
													<input type="radio" class="custom-control-input" value="female" id="customControlValidation3" name="gender">
												</div>
											</div>
										</div>

									</div>

									<div class="form-row" style="margin-left: 116px;">
										<div class="form-group">
											<input required type="text" class="form-control" name="email" style="border:1px solid #555555; font-family: ubuntu; margin-top: 27px;height: 44px; width:303px;" placeholder="Email address">
										</div>

										<div class="form-group" style="margin-right: 202px;">
											<input required type="text" name="passport" class="form-control" style="border:1px solid #555555; font-family: ubuntu; margin-top: 27px;height: 44px; width:303px;" placeholder="Passport No">
										</div>
									</div>
									<div class="form-row" style="margin-left: 116px;">
										<div class="form-group">
											<select required class="form-select" name="country_code" style="border: 1px solid #555555; height: 44px;margin-top: 27px; width:303px;font-family: ubuntu;" aria-label="Default select example">
												<option selected> Country Code</option>
												<option value="+1"> USA </option>
												<option value="+234"> Nigeria </option>
											</select>
											<input type="hidden" name="service" value="srvs-001">
										</div>

										<div class="form-group" style="margin-right: 202px;">
											<input required type="tel" name="phone" class="form-control" style="border:1px solid #555555; font-family: ubuntu; margin-top: 27px;height: 44px; width:303px;" placeholder="Mobile number">
										</div>
									</div>
									<p style="padding-left: 116px; padding-top: 27px;font-family: Ubuntu;font-size: 14px;font-style: normal;font-weight: 400;">Please select below your Nationality (as on passport)</p>
									<select required class="form-select" name="country" style="border: 1px solid #555555; height: 44px;margin-left:116px;margin-top: 27px; width:502px;font-family: ubuntu;" aria-label="Default select example">
										<option selected>Country </option>
										<?php foreach ($country_fee as $key => $value) : ?>
											<option value="<?= $key ?>"><?= $key ?></option>
										<?php endforeach; ?>
									</select>
									<div style="margin-left: 116px; margin-top: 27px;">
										<label>Are you a returning customer ? (do you have an account with us on this website)</label>
										<br>
										<div class="form-check form-check-inline" style="padding-left: 0px; padding-top: 3px;">
											<div class="custom-control custom-radio">
												<label class="custom-control-label" for="customControlValidation2">No</label>
												<input type="radio" checked class="custom-control-input" value="0" id="customControlValidation2" name="radio-stacked">
											</div>
										</div>
										<div class="form-check form-check-inline">
											<div class="custom-control custom-radio">
												<label class="custom-control-label" for="customControlValidation3">Yes</label>
												<input type="radio" class="custom-control-input" value="1" onclick="onYes()" id="customControlValidation3" name="radio-stacked">
											</div>
										</div>
									</div>
									<div style="margin-left: 116px; margin-top:52px">
										<button type="submit" name="twp" class="btn proceed">Proceed to payment</button>
									</div>
									</form>
							</div>
						</div>
					</div>

				</div>
			</section>

			<comment content="======= End section7 =======" break="true"></comment><!-- ======= section8 ======= -->
			<!-- ======= End section8 ======= -->

			</main>
		<script type="text/javascript">
			AOS.init();
		</script>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="./handlers/login.php">
							<div class="form-row">
								<div class="form-group">
									<input type="text" name="email" class="form-control" style="border: 1px solid #1161D9; width:470px;font-family:ubuntu;height: 44px; margin-top:27px;  color: #1161D9;" placeholder="Email" />

									<input type="text" name="password" class="form-control" style="border: 1px solid #1161D9; width:470px;font-family:ubuntu;height: 44px; margin-top:27px; color: #1161D9;" placeholder="Password" />
								</div>
							</div>
							<button type="submit" name="login" class="btn btn-secondary" style="margin-left: 400; background-color: #1161D9; color:#ffffff">SIGN IN</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

					</div>
				</div>
			</div>
		</div>

		<script>
			function onYes() {
				$('#exampleModal').modal('show');

				const form = $('[data-form]')[0].elements

				const country = form.country.value
				const countryCode = form.country_code.value
				const dob = form.dob.value
				const email = form.email.value
				const firstname = form.firstname.value
				const lastname = form.lastname.value
				const middlename = form.middlename.value
				const phone = form.phone.value
				const title = form.title.value
				const service = form.service.value
				const passport = form.passport.value
				const gender = Array.from(form.gender).filter(item => item.checked == true)[0].value

				<?php $_SESSION["REG_MODE"] = "BVA"; ?>

				const data = {
					country,
					countryCode,
					dob,
					email,
					firstname,
					lastname,
					middlename,
					phone,
					title,
					service,
					passport,
					gender
				}

				localStorage.setItem('USER_REG', JSON.stringify(data))
			}
		</script>
	</body>

</html>