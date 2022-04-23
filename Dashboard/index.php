<?php include("./inc/header.php"); ?>

<style>
	.left-sidebar a:hover {
		color: #f1f1f1;
	}

	.left-sidebar .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
	}

	#main {
		transition: margin-left .5s;
		padding: 16px;
	}
</style>
</head>

<body>
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>

	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

		<header class="topbar" data-navbarbg="skin6">

		</header>
		<?php include("./inc/sidebar.php"); ?>
		<div class="page-wrapper" id="main">
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
			<div class="page-breadcrumb">
				<div class="row">
					<div class="align-self-center">
						<div class="row">
							<div class=" ">
								<img src="./dist/image/account.png" class="account-img">
							</div>
							<div class="">
								<h3 class="page-title text-truncate mb-1 account
                                ">My Account</h3>
								<p style="padding-top: 1px;font-family: Ubuntu;
                                font-size: 16px;
                                font-style: normal;
                                font-weight: 400;
                                padding-left: 30px;
                                color: #0F1377;
                                ">John Peter</p>
							</div>
						</div>
					</div>
					<div class="align-self-center">
						<div class="customize-input">
							<ol class="breadcrumb mb-2">
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/m_icon.png" width="20" height="19">&nbsp;&nbsp; Inbox</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/m_icon2.png" width="20" height="19">&nbsp;&nbsp; Send a message</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/logout.png" width="20" height="19">&nbsp; &nbsp; Logout</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-xl-12 col-sm-12">
					<p class="example">
						<a href="document.php"><svg width="20" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M19.0938 7.71875L12.5313 1.15625C12.3438 0.96875 12.1562 0.875 11.875 0.875H2.5C1.46875 0.875 0.625 1.71875 0.625 2.75V25.25C0.625 26.2812 1.46875 27.125 2.5 27.125H17.5C18.5312 27.125 19.375 26.2812 19.375 25.25V8.375C19.375 8.09375 19.2812 7.90625 19.0938 7.71875ZM11.875 3.125L17.125 8.375H11.875V3.125ZM17.5 25.25H2.5V2.75H10V8.375C10 9.40625 10.8438 10.25 11.875 10.25H17.5V25.25Z" fill="#0A0E69" />
								<path d="M4.375 19.625H15.625V21.5H4.375V19.625Z" fill="#0A0E69" />
								<path d="M4.375 14H15.625V15.875H4.375V14Z" fill="#0A0E69" />
							</svg>
							<span>My Document</span></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-xl-12 col-sm-12">
					<p class="example">
						<a href="bank.php"><svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M25.25 2.375V4.25H2.75V2.375H25.25ZM2.75 6.125H25.25V15.5H2.75V6.125ZM25.25 0.5H2.75C2.25272 0.5 1.77581 0.697544 1.42417 1.04918C1.07254 1.40081 0.875 1.87772 0.875 2.375V15.5C0.875 15.9973 1.07254 16.4742 1.42417 16.8258C1.77581 17.1775 2.25272 17.375 2.75 17.375H25.25C25.7473 17.375 26.2242 17.1775 26.5758 16.8258C26.9275 16.4742 27.125 15.9973 27.125 15.5V2.375C27.125 1.87772 26.9275 1.40081 26.5758 1.04918C26.2242 0.697544 25.7473 0.5 25.25 0.5ZM19.625 11.75H23.375V13.625H19.625V11.75Z" fill="#0A0E69" />
							</svg>
							<span>My Card and Bank Setting</span></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-xl-12 col-sm-12">
					<p class="example">
						<a href="././contact.php"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.1925 6.80028L7.9638 1.91903C7.4763 1.35653 6.58255 1.35903 6.0163 1.92653L2.5388 5.41028C1.5038 6.44653 1.20755 7.98528 1.8063 9.21903C5.38332 16.6252 11.3564 22.6066 18.7575 26.194C19.99 26.7928 21.5275 26.4965 22.5625 25.4603L26.0725 21.944C26.6413 21.3753 26.6425 20.4765 26.075 19.989L21.175 15.7828C20.6625 15.3428 19.8663 15.4003 19.3525 15.9153L17.6475 17.6228C17.5603 17.7143 17.4454 17.7746 17.3205 17.7944C17.1956 17.8143 17.0677 17.7926 16.9563 17.7328C14.1694 16.1279 11.8575 13.8131 10.2563 11.024C10.1963 10.9125 10.1746 10.7843 10.1945 10.6592C10.2144 10.5341 10.2747 10.419 10.3663 10.3315L12.0663 8.63028C12.5813 8.11278 12.6375 7.31278 12.1925 6.79903V6.80028Z" stroke="#0A0E69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<span>Contact Us</span></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-xl-12 col-sm-12">
					<p class="example">
						<a href="account.php"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M30 14.985C30 6.7125 23.28 0 15 0C6.72 0 0 6.7125 0 14.985C0 19.5413 2.07 23.6475 5.31 26.4037C5.34 26.4338 5.37 26.4338 5.37 26.4638C5.64 26.6737 5.91 26.8837 6.21 27.0938C6.36 27.1838 6.48 27.3019 6.63 27.4219C9.10888 29.1026 12.0351 30.0007 15.03 30C18.0249 30.0007 20.9511 29.1026 23.43 27.4219C23.58 27.3319 23.7 27.2138 23.85 27.1219C24.12 26.9137 24.42 26.7038 24.69 26.4937C24.72 26.4638 24.75 26.4637 24.75 26.4338C27.93 23.6456 30 19.5413 30 14.985ZM15 28.1119C12.18 28.1119 9.6 27.2119 7.47 25.7137C7.5 25.4737 7.56 25.2356 7.62 24.9956C7.79876 24.3452 8.06094 23.7206 8.4 23.1375C8.73 22.5675 9.12 22.0575 9.6 21.6075C10.05 21.1575 10.59 20.7394 11.13 20.4094C11.7 20.0794 12.3 19.8394 12.96 19.6594C13.6251 19.4801 14.3111 19.3899 15 19.3913C17.045 19.3768 19.0148 20.1612 20.49 21.5775C21.18 22.2675 21.72 23.0775 22.11 24.0056C22.32 24.5456 22.47 25.1156 22.56 25.7137C20.346 27.2703 17.7064 28.1076 15 28.1119ZM10.41 14.2369C10.1457 13.6317 10.0127 12.9773 10.02 12.3169C10.02 11.6587 10.14 10.9987 10.41 10.3988C10.68 9.79875 11.04 9.26062 11.49 8.81063C11.94 8.36062 12.48 8.0025 13.08 7.7325C13.68 7.4625 14.34 7.3425 15 7.3425C15.69 7.3425 16.32 7.4625 16.92 7.7325C17.52 8.0025 18.06 8.3625 18.51 8.81063C18.96 9.26062 19.32 9.80062 19.59 10.3988C19.86 10.9987 19.98 11.6587 19.98 12.3169C19.98 13.0069 19.86 13.6369 19.59 14.235C19.3294 14.8261 18.9635 15.3649 18.51 15.825C18.0497 16.2778 17.511 16.6431 16.92 16.9031C15.6803 17.4126 14.2897 17.4126 13.05 16.9031C12.459 16.6431 11.9203 16.2778 11.46 15.825C11.0059 15.3716 10.6487 14.8307 10.41 14.235V14.2369ZM24.33 24.1856C24.33 24.1256 24.3 24.0956 24.3 24.0356C24.0049 23.097 23.5701 22.2083 23.01 21.3994C22.4494 20.5845 21.7605 19.8658 20.97 19.2712C20.3663 18.8171 19.7119 18.4345 19.02 18.1313C19.3348 17.9236 19.6264 17.6828 19.89 17.4131C20.3373 16.9716 20.7301 16.4781 21.06 15.9431C21.7244 14.8515 22.0676 13.5947 22.05 12.3169C22.0593 11.371 21.8755 10.4331 21.51 9.56063C21.1491 8.71995 20.6296 7.95667 19.98 7.3125C19.3313 6.67506 18.5679 6.16611 17.73 5.8125C16.8561 5.44761 15.917 5.26452 14.97 5.27437C14.0229 5.26511 13.0838 5.44885 12.21 5.81437C11.3649 6.16723 10.5996 6.68697 9.96 7.3425C9.32258 7.99048 8.81361 8.75329 8.46 9.59062C8.09447 10.4631 7.91072 11.401 7.92 12.3469C7.92 13.0069 8.01 13.6369 8.19 14.235C8.37 14.865 8.61 15.435 8.94 15.9731C9.24 16.5131 9.66 16.9931 10.11 17.4431C10.38 17.7131 10.68 17.9513 11.01 18.1612C10.3159 18.4726 9.66135 18.8654 9.06 19.3313C8.28 19.9313 7.59 20.6494 7.02 21.4294C6.45424 22.2349 6.0189 23.1246 5.73 24.0656C5.7 24.1256 5.7 24.1856 5.7 24.2156C3.33 21.8175 1.86 18.5812 1.86 14.985C1.86 7.7625 7.77 1.85812 15 1.85812C22.23 1.85812 28.14 7.7625 28.14 14.985C28.1361 18.4349 26.7662 21.7429 24.33 24.1856Z" fill="#0A0E69" />
							</svg>
							<span>My Account Settings</span>
                        </a>
                    </p>
				</div>
			</div>
			<div class="row">
				<form action="./handler/logout_handler.php" method="post" class="col-md-7 col-xl-12 col-sm-12">
					<p class="example">
						<button name="logout">
							<svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.625 27.125H13.875C14.3721 27.1245 14.8488 26.9268 15.2003 26.5753C15.5518 26.2238 15.7495 25.7471 15.75 25.25V22.4375H13.875V25.25H2.625V2.75H13.875V5.5625H15.75V2.75C15.7495 2.25287 15.5518 1.77625 15.2003 1.42472C14.8488 1.0732 14.3721 0.875496 13.875 0.875H2.625C2.12787 0.875496 1.65125 1.0732 1.29972 1.42472C0.9482 1.77625 0.750496 2.25287 0.75 2.75V25.25C0.750496 25.7471 0.9482 26.2238 1.29972 26.5753C1.65125 26.9268 2.12787 27.1245 2.625 27.125Z" fill="#ED2727" />
								<path d="M16.2994 18.2994L19.6613 14.9375H6.375V13.0625H19.6613L16.2994 9.70062L17.625 8.375L23.25 14L17.625 19.625L16.2994 18.2994Z" fill="#ED2727" />
							</svg>
							<span style="color: #ED2727;">Logout</span>
						</button>
					</p>
				</form>
			</div>



			<!-- <footer class="footer text-center text-muted">
                All Rights Reserved by t</a>.
            </footer> -->

		</div>

	</div>
	<script>
		function openNav() {
			document.getElementById("sidebar").style.width = "260px";
			document.getElementById("main").style.marginLeft = "260px";
		}

		function closeNav() {
			document.getElementById("sidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";

		}
	</script>
	<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="./assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="./assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- apps -->
	<!-- apps -->
	<script src="./dist/js/app-style-switcher.js"></script>
	<script src="./dist/js/feather.min.js"></script>
	<script src="./assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
	<script src="./dist/js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="./dist/js/custom.min.js"></script>
	<!--This page JavaScript -->
	<script src="./assets/extra-libs/c3/d3.min.js"></script>
	<script src="./assets/extra-libs/c3/c3.min.js"></script>
	<script src="./assets/libs/chartist/dist/chartist.min.js"></script>
	<script src="./assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
	<script src="./assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="./assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
	<script src="./dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>