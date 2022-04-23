<?php include("./inc/header.php"); ?>

<?php  


?>

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

	.image-upload-two {
		grid-area: img-u-two;
		display: flex;

	}

	.center {
		display: inline;
		margin: 3px;
	}

	.form-input {
		width: 100px;
		padding: 3px;
		background: #fff;

	}

	.form-input input {
		display: none;
	}

	.form-input label {
		display: block;
		width: 100px;
		height: auto;
		max-height: 100px;
		border-radius: 10px;
		cursor: pointer;
	}

	.form-input img {
		width: 166px;
		height: 166px;
		margin: 2px;

	}

	.imgRemove {
		position: relative;
		bottom: 114px;
		left: 68%;
		background-color: transparent;
		border: none;
		font-size: 30px;
		outline: none;
	}

	.imgRemove::after {
		content: ' \21BA';
		color: #fff;
		font-weight: 900;
		border-radius: 8px;
		cursor: pointer;
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
			<form action="./handler/account_handler.php" method="post" enctype="multipart/form-data" class="page-breadcrumb">
				<div class="row">
					<div class="align-self-center">
						<div class="row">
							<div class="">
								<h3 class="page-title text-truncate mb-1" style="font-family: Ubuntu;
                                font-size: 30px;
                                font-style: normal;
                                color:#0F1377;
                                padding-top:20px;padding-left:51px
                                ">My Profile</h3>
							</div>
						</div>
					</div>

					<div class="align-self-center">
						<div class="customize-input" style="margin-left: 317px;margin-top: -40px;">
							<div class="image-upload-two">
								<div class="center">
									<div class="form-input">
										<label for="file-ip-2">
											<!-- <svg width="168" height="168" id="file-ip-2-preview" viewBox="0 0 168 168" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7043 128.64C74.2252 124.474 93.8627 124.832 122.421 128.786C124.489 129.086 126.379 130.124 127.741 131.709C129.104 133.293 129.847 135.317 129.833 137.407C129.833 139.407 129.146 141.349 127.904 142.865C125.74 145.51 123.523 148.11 121.254 150.665H132.258C132.95 149.84 133.646 148.999 134.35 148.145C136.822 145.114 138.17 141.322 138.167 137.411C138.167 128.974 132.008 121.703 123.563 120.536C94.3293 116.49 73.896 116.103 44.5002 120.399C35.9668 121.645 29.8335 129.028 29.8335 137.524C29.8335 141.295 31.0627 145.024 33.3918 148.045C34.0793 148.936 34.7585 149.811 35.4335 150.67H46.171C44.0603 148.143 42.0015 145.573 39.996 142.961C38.8042 141.398 38.1612 139.485 38.1668 137.52C38.1668 133.032 41.3918 129.27 45.7043 128.64ZM84.0002 88.1654C87.2832 88.1654 90.5341 87.5187 93.5672 86.2624C96.6004 85.006 99.3564 83.1645 101.678 80.843C103.999 78.5216 105.841 75.7656 107.097 72.7325C108.354 69.6993 109 66.4484 109 63.1654C109 59.8823 108.354 56.6314 107.097 53.5983C105.841 50.5651 103.999 47.8092 101.678 45.4877C99.3564 43.1662 96.6004 41.3247 93.5672 40.0684C90.5341 38.812 87.2832 38.1654 84.0002 38.1654C77.3697 38.1654 71.0109 40.7993 66.3225 45.4877C61.6341 50.1761 59.0002 56.535 59.0002 63.1654C59.0002 69.7958 61.6341 76.1546 66.3225 80.843C71.0109 85.5315 77.3697 88.1654 84.0002 88.1654ZM84.0002 96.4987C92.8407 96.4987 101.319 92.9868 107.57 86.7356C113.822 80.4844 117.333 72.0059 117.333 63.1654C117.333 54.3248 113.822 45.8464 107.57 39.5951C101.319 33.3439 92.8407 29.832 84.0002 29.832C75.1596 29.832 66.6811 33.3439 60.4299 39.5951C54.1787 45.8464 50.6668 54.3248 50.6668 63.1654C50.6668 72.0059 54.1787 80.4844 60.4299 86.7356C66.6811 92.9868 75.1596 96.4987 84.0002 96.4987Z" fill="#080C58"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M84.0001 158.999C125.421 158.999 159 125.42 159 83.9994C159 42.5785 125.421 8.99935 84.0001 8.99935C42.5793 8.99935 9.00008 42.5785 9.00008 83.9994C9.00008 125.42 42.5793 158.999 84.0001 158.999ZM84.0001 167.333C130.025 167.333 167.333 130.024 167.333 83.9994C167.333 37.9744 130.025 0.666016 84.0001 0.666016C37.9751 0.666016 0.666748 37.9744 0.666748 83.9994C0.666748 130.024 37.9751 167.333 84.0001 167.333Z" fill="#080C58"/>
                                            </svg>  -->
											<img id="file-ip-2-preview" src="./dist/image/account.png" width="166" height="166">
											<button type="button" class="imgRemove" onclick="myImgRemove(2)"></button>
										</label>
										<input type="file" name="image" id="file-ip-2" accept="image/*" onchange="showPreview(event, 2);">
									</div>

								</div>

							</div>
							<p class="small" style="padding-top:66px;font-family: Ubuntu;
                            font-size: 13px;
                            padding-left: 10px;
                            font-style: normal;
                            font-weight: 400;
                            color:#1161D9;
                            ">Click here to upload picture</p>
						</div>
					</div>
				</div>
				<div>
					<div class="form-row" style="margin-left: 160px; margin-top:46px">
						<div class="form-group">
							<p style="font-family: Rubik;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 400;
                        color:#000000
                        ">First Name</p>
							<input type="text" name="firstname" class="form-control" value="<?= $USER['firstname'] ?>" style="border:1px solid #E9EDF0; font-family: ubuntu; margin-top: 21px; height: 59px;
                        width: 630px;                    
                        background: #E9EDF0;
                        color: #444649;
                        border-radius: 6px;
                        padding: 20px;
                        " placeholder="John">
						</div>
						<div class="form-group">
							<p style="font-family: Rubik;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 400;
                        color:#000000
                        ">Last Name</p>
							<input type="text" name="lastname" class="form-control" value="<?= $USER['lastname'] ?>" style="border:1px solid #E9EDF0; font-family: ubuntu; margin-top: 21px; height: 59px;
                        width: 630px;                    
                        background: #E9EDF0;
                        color: #444649;
                        border-radius: 6px;
                        padding: 20px;
                        " placeholder="Joe">
						</div>
						<div class="form-group">
							<p style="font-family: Rubik;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 400;
                        color:#000000
                        ">Mobile Number</p>
							<input type="text" name="phone" value="<?= $USER['phone'] ?>" class="form-control" style="border:1px solid #E9EDF0; font-family: ubuntu; margin-top: 21px; height: 59px;
                        width: 630px;                    
                        background: #E9EDF0;
                        color: #444649;
                        border-radius: 6px;
                        padding: 20px;
                        " placeholder="123-45-67-89">
						</div>
						<div class="form-group">
							<p style="font-family: Rubik;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 400;
                        color:#000000
                        ">Email Address</p>
							<input type="text" name="email" value="<?= $USER['email'] ?>" class="form-control"  style="border:1px solid #E9EDF0; font-family: ubuntu; margin-top: 21px; height: 59px;
                        width: 630px;                    
                        background: #E9EDF0;
                        color: #444649;
                        border-radius: 6px;
                        padding: 20px;
                        " placeholder="example@gmail.com">
						</div>
						<div class="form-group">
							<p style="font-family: Rubik;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 400;
                        color:#000000
                        ">Password</p>
							<input type="password" name="password" class="form-control" style="border:1px solid #E9EDF0; font-family: ubuntu; margin-top: 21px; height: 59px;
                        width: 630px;                    
                        background: #E9EDF0;
                        color: #444649;
                        border-radius: 6px;
                        padding: 20px;
                        " placeholder="********************">
						</div>

						<div style="margin-top:49px">
							<button type="submit" name="update" style="height: 60px;
								width: 587px;                            
								border-radius: 10px;
								padding: 20px;
								color: #fff;
								margin-bottom: 347px;
								background-color: #1161D9;
                            " class="btn btn-button">Update Profile</button>
						</div>
				</div>
			</div>

			<div>

			</div>



			<!-- <footer class="footer text-center text-muted">
                All Rights Reserved by t</a>.
            </footer> -->

		</form>

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
	<script>
		var number = 1;
		do {
			function showPreview(event, number) {
				if (event.target.files.length > 0) {
					let src = URL.createObjectURL(event.target.files[0]);
					let preview = document.getElementById("file-ip-" + number + "-preview");
					preview.src = src;
					preview.style.display = "block";
				}
			}

			function myImgRemove(number) {
				document.getElementById("file-ip-" + number + "-preview").src = "./dist/image/account.png";
				document.getElementById("file-ip-" + number).value = null;
			}
			number++;
		}
		while (number < 5);
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