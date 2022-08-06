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
				<div class="new-section1__block21 layout">
				<div class="new-section1__flex1 layout laptop">
					<div class="new-section1__text-body8-box layout">
					<div class="new-section1__text-body8">
						<span><b class="free">FREE </b></span><span class="new-section1__text-body8-span2 text business">Business
						Name Availability Search</span>
					</div>
					</div>
					<div class="new-section1__flex1-spacer"></div>
					<div class="new-section1__flex1-item">
					<input type="text" class="form-control form" placeholder=" search business name here">
					<button class="btn hiddenbutton">SEARCH</button>
					<a href="+1 (302) 703-9867" class="hiddenphone ">+1 (302) 703-9867</a>
					</div>
					<div class="new-section1__flex1-spacer1"></div>
					<div class="new-section1__flex1-item1">
					<div class="">
						<button class="btn buttons btnsearch">SEARCH</button>

					</div>
					</div>
					<div class="new-section1__flex1-spacer2"></div>

					<a href="+1 (302) 703-9867" class="phone">+1 (302) 703-9867</a>
				</div>
				<div class="mobile">
					<div class="">
					<span><b class="free">FREE </b></span><span class="new-section1__text-body8-span2 text business">Business
						Name Availability Search</span>
					</div>
					<div class="row fsm">
					<div class="column fsm1">
						<input type="text" class="form-control formobile" placeholder=" search business name here">
					</div>
					<div class="column sbutton fsm2">
						<button class="btn hiddenbutton">SEARCH</button>
					</div>
					<div class="column call fsm3">
						<a href="+1 (302) 703-9867" class="mobphone">+1 (302) 703-9867</a>
					</div>
					</div>
				</div>
				</div> 

				<nav class="navbar navbar-expand-lg bg-nav shadow navbar-light height" style="padding-bottom: 0px;">
				<div class="container-fluid cf cfheight">
					<a class="navbar-brand brand" href="Index.html"><img src="assets/logo.png" class="logoimg" width="164"></a>
					<div class=" nav-item dropdown mobilelang">
					<a class="nav-link dropdown-toggle nav english" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"
						>
						<svg width="20" height="20" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M0.083313 7.00004C0.083313 3.45612 2.95606 0.583374 6.49998 0.583374C10.0439 0.583374 12.9166 3.45612 12.9166 7.00004C12.9166 10.544 10.0439 13.4167 6.49998 13.4167C2.95606 13.4167 0.083313 10.544 0.083313 7.00004ZM6.49998 1.75004C3.6004 1.75004 1.24998 4.10046 1.24998 7.00004C1.24998 9.89962 3.6004 12.25 6.49998 12.25C9.39956 12.25 11.75 9.89962 11.75 7.00004C11.75 4.10046 9.39956 1.75004 6.49998 1.75004Z" fill="#080C58"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M6.73049 0.731373C6.98705 0.536518 7.35299 0.586539 7.54785 0.843098L7.0833 1.19591C7.54785 0.843098 7.54771 0.842914 7.54785 0.843098L7.54843 0.843869L7.54917 0.844854L7.55114 0.847464L7.55693 0.855236L7.5757 0.880901C7.5913 0.902475 7.61293 0.932948 7.63972 0.972048C7.69328 1.05023 7.76758 1.16303 7.85561 1.30828C8.03155 1.59859 8.26313 2.01976 8.49387 2.55432C8.95493 3.62243 9.41664 5.15269 9.41664 7.00008C9.41664 8.84747 8.95493 10.3777 8.49387 11.4458C8.26313 11.9804 8.03155 12.4016 7.85561 12.6919C7.76758 12.8371 7.69328 12.9499 7.63972 13.0281C7.61293 13.0672 7.5913 13.0977 7.5757 13.1193L7.55693 13.1449L7.55114 13.1527L7.54917 13.1553L7.54843 13.1563C7.54829 13.1565 7.54785 13.1571 7.0833 12.8042L7.54785 13.1571C7.35299 13.4136 6.98705 13.4636 6.73049 13.2688C6.47424 13.0742 6.42403 12.7089 6.61805 12.4524C6.61811 12.4523 6.61847 12.4518 6.61853 12.4517C6.61861 12.4516 6.61845 12.4518 6.61853 12.4517L6.61971 12.4501L6.63021 12.4358C6.64025 12.4219 6.65622 12.3994 6.67728 12.3687C6.71942 12.3072 6.78185 12.2126 6.85788 12.0872C7.01006 11.8361 7.21598 11.4625 7.42274 10.9835C7.83668 10.0245 8.24997 8.65269 8.24997 7.00008C8.24997 5.34747 7.83668 3.97565 7.42274 3.01668C7.21598 2.5377 7.01006 2.16407 6.85788 1.91297C6.78185 1.78752 6.71942 1.69296 6.67728 1.63147C6.65622 1.60073 6.64025 1.57828 6.63021 1.56439L6.61971 1.55003L6.61853 1.54842C6.42395 1.29188 6.47403 0.92615 6.73049 0.731373Z" fill="#080C58"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M6.38192 1.54777C6.57592 1.29125 6.5257 0.925984 6.26946 0.731373L6.38192 1.54777ZM5.91665 1.19591L5.45211 0.843098C5.64696 0.586539 6.0129 0.536518 6.26946 0.731373M5.91665 1.19591C5.45211 0.843098 5.45197 0.843272 5.45183 0.843456L5.45152 0.843868L5.45078 0.844853L5.44881 0.847464L5.44302 0.855236L5.42425 0.880901C5.40865 0.902475 5.38702 0.932948 5.36023 0.972048C5.30667 1.05023 5.23238 1.16303 5.14434 1.30828C4.9684 1.59859 4.73682 2.01976 4.50608 2.55432C4.04502 3.62243 3.58331 5.15269 3.58331 7.00008C3.58331 8.84747 4.04502 10.3777 4.50608 11.4458C4.73682 11.9804 4.9684 12.4016 5.14434 12.6919C5.23238 12.8371 5.30667 12.9499 5.36023 13.0281C5.38702 13.0672 5.40865 13.0977 5.42425 13.1193L5.44302 13.1449L5.44881 13.1527L5.45078 13.1553L5.45152 13.1563L5.45183 13.1567C5.45197 13.1569 5.45211 13.1571 5.91665 12.8042L5.45211 13.1571C5.64696 13.4136 6.0129 13.4636 6.26946 13.2688C6.52588 13.074 6.57599 12.7084 6.38152 12.4519L6.38142 12.4517L6.38119 12.4514" fill="#080C58"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M0.450806 9.04171C0.450806 8.71954 0.711973 8.45837 1.03414 8.45837H11.9658C12.288 8.45837 12.5491 8.71954 12.5491 9.04171C12.5491 9.36387 12.288 9.62504 11.9658 9.62504H1.03414C0.711973 9.62504 0.450806 9.36387 0.450806 9.04171Z" fill="#080C58"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M0.450806 4.95833C0.450806 4.63617 0.711973 4.375 1.03414 4.375H11.9658C12.288 4.375 12.5491 4.63617 12.5491 4.95833C12.5491 5.2805 12.288 5.54167 11.9658 5.54167H1.03414C0.711973 5.54167 0.450806 5.2805 0.450806 4.95833Z" fill="#080C58"/>
						</svg>
						&nbsp;<span>English |</span></a>
					<ul class="dropdown-menu collapse" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="NBV.html"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
						</a></li>
						<li><a class=" dropdown-item" href="NTWP.html"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>
						<li><a class=" dropdown-item" href="#"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>
						<li><a class="dropdown-item" href="#"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>
						<li><a class=" dropdown-item" href="#"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>
						<li><a class=" dropdown-item" href="#"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>

					</ul>
					</div>
					<li>
					<img src="assets/flag2.png" class="flag">
					</li>
					<button class="navbar-toggler collapsebtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
					<svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 10px;
					margin-top: 10px;">
					<rect y="6" width="19" height="3" fill="#A0BD1C"/>
					<rect y="12" width="19" height="3" fill="#A0BD1C"/>
					<rect width="19" height="3" fill="#A0BD1C"/>
					</svg>
					
					<!-- <span class="navbar-toggler-icon"></span> -->
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
						<a class="nav-link nav link home" href="Index.php">Home</a>
						</li>
						<li class="nav-item dropdown">
						<a class="nav-link link services" href="sbform.php"> Services</a>
						</li>
						<li class=" nav-item">
						<a class="nav-link link home" href="leaders.php">Leadership</a>
						</li>

						<li class=" nav-item">
						<a class="nav-link link contact" href="about.php">About Us</a>
						</li>
						<li class="nav-item apply ml-118">
						<a href="SBForm.php" class="btn button btn-outline-light appbtn" type="button" style="">Apply</a>
						<?php if(!isset($_SESSION['LOGGED_USER'])): ?>
						<a href="signin.php" class="btn button2 sign" type="button">Sign In</a>
						<?php else: ?>
						<a href="./Dashboard/index.php" class="btn button2 sign" type="button">Dashboard</a>
						<?php endif; ?>
					</li>
					
						<!-- <li class="nav-item apply ml-118">
						<a href="SBForm.php" class="btn button btn-outline-light appbtn" type="button">Apply</a>
						<a href="signin.php" class="btn button2 sign" type="button">Sign In</a>
						</li> -->
					
					<li class=" nav-item dropdown lang">
						<a class="nav-link dropdown-toggle nav english" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"
						>
						<img src="assets/image_2022-02-27_16-21-31.png" width="17" style="margin-top:-4px;font-size: 14px;">&nbsp;<span>English |</span></a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="NBV.html"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
							</a></li>
						<li><a class=" dropdown-item" href="NTWP.html"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>
						<li><a class=" dropdown-item" href="#"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>
						<li><a class="dropdown-item" href="#"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>
						<li><a class=" dropdown-item" href="#"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>
						<li><a class=" dropdown-item" href="#"
							style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria</a>
						</li>

						</ul>
					</li>
					<li>
						<img src="assets/flag2.png" class="laptopflag">
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