<?php  

    if(isset($_POST["apply"])) {
        $type = $_POST["type"];

        switch ($type) {
            case 'TWP':
                header("Location: ./NTWPForm.php");
                break;

            case 'NBV':
                header("Location: ./NBVForm.php");
                break;

            case 'NBI':
                header("Location: ./BIForm.php");
                break;
            
            default:
                break;
        }
    }

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

		<script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.3.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

			.new-section2__group.layout2 {
				position: relative;
				height: 800px;
			}
		</style>
	</head>


	<body class="body">
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


					<div class="">
						<div class="card" style="border-radius: 10px;
                border-color: transparent;
                width: 938px;
                margin: 32px 231px;">
							<div style="margin-top: 65px;">
								<h2 style="padding-left: 364px;font-family: 'Ubuntu';font-style: normal;font-weight: 500;font-size: 24px;color: #0A0E69;
                        ">Fill the form below</h2>
								<p style="
                        padding: 28px 332px 0px 334px;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;color: #0A0E69;
                        
                        ">It takes less than 5 minutes to do this</p>
							</div>
							<form method="post" action="">

								<p style="padding-top:48px; padding-left: 201px; color:  #000000;
                        font-family: Ubuntu;font-size: 14px;font-style: normal;font-weight: 400;">Which of our services are you applying For?</p>

								<div class="form-row" style="margin-left: 193px;">

									<div class="form-group" style="margin-right: 202px;">
										<select class="form-select" name="type" style="border: 1px solid #555555; width:502px;font-family:ubuntu;height: 44px; margin-top:27px" aria-label="Default select example">
											<option selected>Country</option>
											<option value="NBV">Nigeria Business Visa</option>
											<option value="TWP">Nigeria Temporary Work Permit</option>
											<option value="NBI">Nigeria Business Incorporation</option>
										</select>

									</div>
								</div>


								<div style="margin-left: 193px; margin-top:89px;margin-bottom:80px ;">
									<button type="submit" class="btn proceed">Next</button>
								</div>
							</form>
						</div>

					</div>

				</div>
			</section>

			<section class="new-section8__section8 layout">
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