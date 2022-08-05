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
		<script src="./js/sweetalert.js"></script>
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
										<?php if(!isset($_SESSION['LOGGED_USER'])): ?>
											<a href="signin.php" class="btn button2 sign" type="button">Sign In</a>
										<?php else: ?>
											<a href="./Dashboard/index.php" class="btn button2 sign" type="button">Dashboard</a>
										<?php endif; ?>
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
                            <div class="card makereviewcard">
                                <p class="makereviewp">Rate Your Experience</p>
                                <fieldset class="rating">
                                    <input
                                        type="radio"
                                        id="star5"
                                        name="rating"
                                        value="5"
                                    >
                                    <label
                                        class="full"
                                        for="star5"
                                        title="Awesome - 5 stars"
                                        style="margin-right: 110px;"
                                    ></label>
                                    <input
                                        type="radio"
                                        id="star4half"
                                        name="rating"
                                        value="4 and a half"
                                    >
                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input
                                        type="radio"
                                        id="star4"
                                        name="rating"
                                        value="4"
                                    >
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input
                                        type="radio"
                                        id="star3half"
                                        name="rating"
                                        value="3 and a half"
                                    >
                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input
                                        type="radio"
                                        id="star3"
                                        name="rating"
                                        value="3"
                                    >
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input
                                        type="radio"
                                        id="star2half"
                                        name="rating"
                                        value="2 and a half"
                                    >
                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input
                                        type="radio"
                                        id="star2"
                                        name="rating"
                                        value="2"
                                    >
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input
                                        type="radio"
                                        id="star1half"
                                        name="rating"
                                        value="1 and a half"
                                    >
                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input
                                        type="radio"
                                        id="star1"
                                        name="rating"
                                        value="1"
                                    >
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input
                                        type="radio"
                                        id="starhalf"
                                        name="rating"
                                        value="half"
                                    >
                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                                <p class="reviewfieldsetp">Tell us about your expeience</p>
                                <textarea class="reviewtextarea" placeholder="This is where you write your review.explain what happend, keep your feedback honest, helpfyl, and constructive"></textarea>
                                <nav class=" bg-white navbar-expand-sm d-flex justify-content-between">
                                    <input
                                        type="text number"
                                        name="text"
                                        class="form-controls"
                                        style="width: 319px; margin-left: 22px; margin-top: 34px; margin-bottom: 38px; border: 1px solid #555555;"
                                        placeholder="Type a message..."
                                    >
                                    <div class=" d-flex justify-content-end align-content-center text-center ml-2">
                                        <svg
                                            width="39"
                                            height="41"
                                            viewBox="0 0 39 41"
                                            fill="none"
                                            style="margin-top: 34px;
                                margin-right: 12px;"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <rect width="39" height="40.8342" fill="#888888"/>
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M24.0375 10.5121C24.3298 10.1842 24.726 10 25.1392 10C25.5523 10 25.9486 10.1842 26.2408 10.5121L28.5439 13.0981C28.8359 13.4263 29 13.8712 29 14.3351C29 14.799 28.8359 15.244 28.5439 15.5721L26.0565 18.3651L26.0458 18.3781L16.4025 28.7131C16.2264 28.9022 16.0131 29.0423 15.78 29.1221L10.8613 30.8021C10.7456 30.8414 10.6226 30.8447 10.5054 30.8117C10.3881 30.7787 10.2811 30.7105 10.1956 30.6146C10.1102 30.5186 10.0495 30.3984 10.0201 30.2668C9.99067 30.1352 9.99361 29.997 10.0286 29.8671L11.5186 24.3671C11.5967 24.0792 11.7396 23.8189 11.9336 23.6111L21.5555 13.2981L24.0375 10.5121ZM22.0114 14.8831L12.8562 24.6961C12.8284 24.7258 12.8078 24.763 12.7965 24.8041L11.6708 28.9581L15.3908 27.6871C15.4242 27.6756 15.4547 27.6554 15.4799 27.6281L24.6289 17.8221L22.0106 14.8831H22.0114ZM25.5845 16.7751L27.5999 14.5131C27.6206 14.4899 27.6371 14.4623 27.6483 14.4319C27.6595 14.4016 27.6653 14.369 27.6653 14.3361C27.6653 14.3032 27.6595 14.2707 27.6483 14.2403C27.6371 14.2099 27.6206 14.1823 27.5999 14.1591L25.2968 11.5731C25.2761 11.5498 25.2516 11.5314 25.2245 11.5188C25.1975 11.5062 25.1685 11.4997 25.1392 11.4997C25.1099 11.4997 25.0809 11.5062 25.0539 11.5188C25.0268 11.5314 25.0022 11.5498 24.9816 11.5731L22.9671 13.8351L25.5845 16.7751Z"
                                                fill="#D5CDCD"
                                            />
                                        </svg>
                                    </div>
                                </nav>
                                <label for="" style="margin-left: 20px;">Upload Video Review(optional)</label>
                                <input
                                    id="file-input"
                                    type="file"
                                    accept="video/*"
                                    style="margin-left: 20px;margin-bottom:50px"
                                >
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </form>

				</div>
			</section>
			<!-- ======= End section8 ======= -->

		</main>
		<script type="text/javascript">
			AOS.init();
		</script>


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

				<?php $_SESSION["REG_MODE"] = "BI"; ?>

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