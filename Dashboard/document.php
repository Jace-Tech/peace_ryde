<?php include("./inc/header.php"); ?>
<?php include("../models/Upload.php"); ?>
<?php include("../models/Service.php"); ?>

<?php  
	$uploads = new Upload($connect);
	$userServices = new Service($connect);

	$usersUpload = $uploads->getUserUploads($USER_ID);
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

	.question {
		font-family: Ubuntu;
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		padding: 20px 80px 20px 20px;
		position: relative;
		display: flex;
		align-items: center;
		cursor: pointer;
	}

	.question::after {
		content: "\002B";
		font-size: 2.2rem;
		position: absolute;
		right: 20px;
		transition: 0.2s;
	}

	.question.active::after {
		transform: rotate(45deg);
	}

	.answercont {
		max-height: 0;
		overflow: hidden;
		transition: 0.3s;
	}

	.answer {
		padding: 0 20px 20px;
		line-height: 1.5rem;
	}

	.containerques {
		background-color: white;
		color: #0A0E69;
		border-radius: 10px;
		width: 622px;
		margin: 20px 0;
		margin-left: 43px;

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
							<div class="">
								<h3 class="page-title text-truncate mb-1" style="font-family: Ubuntu;
                                font-size: 30px;
                                font-style: normal;
                                color:#0F1377;
                                padding-top:20px;padding-left:51px
                                ">My Document</h3>

							</div>
						</div>
					</div>
					<div class="align-self-center">
						<div class="customize-input">
							<ol class="breadcrumb mb-2" style="margin-top: -50px;margin-left: 628px;">
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/m_icon.png" width="20" height="19">&nbsp;&nbsp; Inbox</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/m_icon2.png" width="20" height="19">&nbsp;&nbsp; Send a message</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/logout.png" width="20" height="19">&nbsp; &nbsp; Logout</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>


			<div class="containerques" style="margin-top: 96px;">
				<div class="question">
					My Uploads
				</div>
				<div class="answercont">
					<div class="answer">
						<table class="table table-borderless">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col" style="color:#000000;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($usersUpload)): ?>
									<?php foreach($usersUpload as $upload): ?>
										<?php if($upload['service'] !== "PROFILE"): ?>
											<tr>
												<th scope="row" style="padding-top:48px;padding-left:36px;color:#5A5A5A;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;">
													<?= $userServices->getUserService($upload['service_id'])['service']; ?>
												</th>
												<td style="padding-top:48px;"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9 0.625C7.26942 0.625 5.57769 1.08686 4.13876 1.95218C2.69983 2.81749 1.57832 4.0474 0.916058 5.48637C0.253791 6.92534 0.080512 8.50874 0.418133 10.0363C0.755753 11.5639 1.58911 12.9671 2.81282 14.0685C4.03653 15.1698 5.59563 15.9198 7.29296 16.2237C8.9903 16.5275 10.7496 16.3716 12.3485 15.7756C13.9473 15.1795 15.3139 14.1702 16.2754 12.8751C17.2368 11.5801 17.75 10.0575 17.75 8.5C17.75 6.41142 16.8281 4.40838 15.1872 2.93153C13.5462 1.45469 11.3206 0.625 9 0.625ZM9 15.25C7.51664 15.25 6.0666 14.8541 4.83323 14.1124C3.59986 13.3707 2.63856 12.3165 2.07091 11.0831C1.50325 9.84971 1.35473 8.49251 1.64411 7.18314C1.9335 5.87377 2.64781 4.67103 3.6967 3.72703C4.7456 2.78302 6.08197 2.14015 7.53683 1.8797C8.99168 1.61925 10.4997 1.75292 11.8701 2.26381C13.2406 2.7747 14.4119 3.63987 15.236 4.7499C16.0601 5.85993 16.5 7.16498 16.5 8.5C16.5 10.2902 15.7098 12.0071 14.3033 13.273C12.8968 14.5388 10.9891 15.25 9 15.25Z" fill="#5A5A5A" />
														<path d="M8.375 4H9.625V10.1875H8.375V4Z" fill="#5A5A5A" />
														<path d="M9 11.875C8.81458 11.875 8.63332 11.9245 8.47915 12.0172C8.32498 12.1099 8.20482 12.2417 8.13386 12.3959C8.06291 12.55 8.04434 12.7197 8.08051 12.8834C8.11669 13.047 8.20598 13.1974 8.33709 13.3154C8.4682 13.4334 8.63525 13.5137 8.8171 13.5463C8.99896 13.5788 9.18746 13.5621 9.35877 13.4983C9.53007 13.4344 9.67649 13.3263 9.7795 13.1875C9.88252 13.0488 9.9375 12.8856 9.9375 12.7187C9.9375 12.495 9.83873 12.2804 9.66291 12.1221C9.4871 11.9639 9.24864 11.875 9 11.875Z" fill="#5A5A5A" />
													</svg>
													<span style="color:#5A5A5A;font-family: Ubuntu;padding-left:16px;font-size: 16px;font-style: normal;font-weight: 500;">Uploaded</span>
												</td>
											</tr>
										<?php endif; ?>
									<?php endforeach; ?>
								<?php else: ?>
									<tr>
										<td class="text-gray-500 py-8 text-center">No uploads found</td> 
									</tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!-- <div class="containerques" style="margin-bottom: 500px;">
				<div class="question">
					Business Visa on Arrival Upload
				</div>
				<div class="answercont">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col" style="color:#000000;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;">Status</th>

							</tr>
						</thead>
						<tbody>

							<tr>
								<th scope="row" style="padding-top:48px;padding-left:36px;color:#5A5A5A;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;">Lorem</th>
								<td style="padding-top:48px;"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9 0.625C7.26942 0.625 5.57769 1.08686 4.13876 1.95218C2.69983 2.81749 1.57832 4.0474 0.916058 5.48637C0.253791 6.92534 0.080512 8.50874 0.418133 10.0363C0.755753 11.5639 1.58911 12.9671 2.81282 14.0685C4.03653 15.1698 5.59563 15.9198 7.29296 16.2237C8.9903 16.5275 10.7496 16.3716 12.3485 15.7756C13.9473 15.1795 15.3139 14.1702 16.2754 12.8751C17.2368 11.5801 17.75 10.0575 17.75 8.5C17.75 6.41142 16.8281 4.40838 15.1872 2.93153C13.5462 1.45469 11.3206 0.625 9 0.625ZM9 15.25C7.51664 15.25 6.0666 14.8541 4.83323 14.1124C3.59986 13.3707 2.63856 12.3165 2.07091 11.0831C1.50325 9.84971 1.35473 8.49251 1.64411 7.18314C1.9335 5.87377 2.64781 4.67103 3.6967 3.72703C4.7456 2.78302 6.08197 2.14015 7.53683 1.8797C8.99168 1.61925 10.4997 1.75292 11.8701 2.26381C13.2406 2.7747 14.4119 3.63987 15.236 4.7499C16.0601 5.85993 16.5 7.16498 16.5 8.5C16.5 10.2902 15.7098 12.0071 14.3033 13.273C12.8968 14.5388 10.9891 15.25 9 15.25Z" fill="#5A5A5A" />
										<path d="M8.375 4H9.625V10.1875H8.375V4Z" fill="#5A5A5A" />
										<path d="M9 11.875C8.81458 11.875 8.63332 11.9245 8.47915 12.0172C8.32498 12.1099 8.20482 12.2417 8.13386 12.3959C8.06291 12.55 8.04434 12.7197 8.08051 12.8834C8.11669 13.047 8.20598 13.1974 8.33709 13.3154C8.4682 13.4334 8.63525 13.5137 8.8171 13.5463C8.99896 13.5788 9.18746 13.5621 9.35877 13.4983C9.53007 13.4344 9.67649 13.3263 9.7795 13.1875C9.88252 13.0488 9.9375 12.8856 9.9375 12.7187C9.9375 12.495 9.83873 12.2804 9.66291 12.1221C9.4871 11.9639 9.24864 11.875 9 11.875Z" fill="#5A5A5A" />
									</svg>
									<span style="color:#5A5A5A;font-family: Ubuntu;padding-left:16px;font-size: 16px;font-style: normal;font-weight: 500;">Awaiting uploads</span>
								</td>
							</tr>
							<tr>
								<th scope="row" style="padding-top:48px;padding-left:36px;color:#5A5A5A;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;">Lorem</th>
								<td style="padding-top:48px;"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9 0.625C7.26942 0.625 5.57769 1.08686 4.13876 1.95218C2.69983 2.81749 1.57832 4.0474 0.916058 5.48637C0.253791 6.92534 0.080512 8.50874 0.418133 10.0363C0.755753 11.5639 1.58911 12.9671 2.81282 14.0685C4.03653 15.1698 5.59563 15.9198 7.29296 16.2237C8.9903 16.5275 10.7496 16.3716 12.3485 15.7756C13.9473 15.1795 15.3139 14.1702 16.2754 12.8751C17.2368 11.5801 17.75 10.0575 17.75 8.5C17.75 6.41142 16.8281 4.40838 15.1872 2.93153C13.5462 1.45469 11.3206 0.625 9 0.625ZM9 15.25C7.51664 15.25 6.0666 14.8541 4.83323 14.1124C3.59986 13.3707 2.63856 12.3165 2.07091 11.0831C1.50325 9.84971 1.35473 8.49251 1.64411 7.18314C1.9335 5.87377 2.64781 4.67103 3.6967 3.72703C4.7456 2.78302 6.08197 2.14015 7.53683 1.8797C8.99168 1.61925 10.4997 1.75292 11.8701 2.26381C13.2406 2.7747 14.4119 3.63987 15.236 4.7499C16.0601 5.85993 16.5 7.16498 16.5 8.5C16.5 10.2902 15.7098 12.0071 14.3033 13.273C12.8968 14.5388 10.9891 15.25 9 15.25Z" fill="#5A5A5A" />
										<path d="M8.375 4H9.625V10.1875H8.375V4Z" fill="#5A5A5A" />
										<path d="M9 11.875C8.81458 11.875 8.63332 11.9245 8.47915 12.0172C8.32498 12.1099 8.20482 12.2417 8.13386 12.3959C8.06291 12.55 8.04434 12.7197 8.08051 12.8834C8.11669 13.047 8.20598 13.1974 8.33709 13.3154C8.4682 13.4334 8.63525 13.5137 8.8171 13.5463C8.99896 13.5788 9.18746 13.5621 9.35877 13.4983C9.53007 13.4344 9.67649 13.3263 9.7795 13.1875C9.88252 13.0488 9.9375 12.8856 9.9375 12.7187C9.9375 12.495 9.83873 12.2804 9.66291 12.1221C9.4871 11.9639 9.24864 11.875 9 11.875Z" fill="#5A5A5A" />
									</svg>
									<span style="color:#5A5A5A;font-family: Ubuntu;padding-left:16px;font-size: 16px;font-style: normal;font-weight: 500;">Awaiting uploads</span>
								</td>
							</tr>
							<tr>
								<th scope="row" style="padding-top:48px;padding-left:36px;color:#5A5A5A;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;">Lorem</th>
								<td style="padding-top:48px;"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9 0.625C7.26942 0.625 5.57769 1.08686 4.13876 1.95218C2.69983 2.81749 1.57832 4.0474 0.916058 5.48637C0.253791 6.92534 0.080512 8.50874 0.418133 10.0363C0.755753 11.5639 1.58911 12.9671 2.81282 14.0685C4.03653 15.1698 5.59563 15.9198 7.29296 16.2237C8.9903 16.5275 10.7496 16.3716 12.3485 15.7756C13.9473 15.1795 15.3139 14.1702 16.2754 12.8751C17.2368 11.5801 17.75 10.0575 17.75 8.5C17.75 6.41142 16.8281 4.40838 15.1872 2.93153C13.5462 1.45469 11.3206 0.625 9 0.625ZM9 15.25C7.51664 15.25 6.0666 14.8541 4.83323 14.1124C3.59986 13.3707 2.63856 12.3165 2.07091 11.0831C1.50325 9.84971 1.35473 8.49251 1.64411 7.18314C1.9335 5.87377 2.64781 4.67103 3.6967 3.72703C4.7456 2.78302 6.08197 2.14015 7.53683 1.8797C8.99168 1.61925 10.4997 1.75292 11.8701 2.26381C13.2406 2.7747 14.4119 3.63987 15.236 4.7499C16.0601 5.85993 16.5 7.16498 16.5 8.5C16.5 10.2902 15.7098 12.0071 14.3033 13.273C12.8968 14.5388 10.9891 15.25 9 15.25Z" fill="#5A5A5A" />
										<path d="M8.375 4H9.625V10.1875H8.375V4Z" fill="#5A5A5A" />
										<path d="M9 11.875C8.81458 11.875 8.63332 11.9245 8.47915 12.0172C8.32498 12.1099 8.20482 12.2417 8.13386 12.3959C8.06291 12.55 8.04434 12.7197 8.08051 12.8834C8.11669 13.047 8.20598 13.1974 8.33709 13.3154C8.4682 13.4334 8.63525 13.5137 8.8171 13.5463C8.99896 13.5788 9.18746 13.5621 9.35877 13.4983C9.53007 13.4344 9.67649 13.3263 9.7795 13.1875C9.88252 13.0488 9.9375 12.8856 9.9375 12.7187C9.9375 12.495 9.83873 12.2804 9.66291 12.1221C9.4871 11.9639 9.24864 11.875 9 11.875Z" fill="#5A5A5A" />
									</svg>
									<span style="color:#5A5A5A;font-family: Ubuntu;padding-left:16px;font-size: 16px;font-style: normal;font-weight: 500;">Awaiting uploads</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> -->

            <?php include("./inc/footer.php"); ?>

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
	<script>
		let question = document.querySelectorAll(".question");

		question.forEach(question => {
			question.addEventListener("click", event => {
				const active = document.querySelector(".question.active");
				if (active && active !== question) {
					active.classList.toggle("active");
					active.nextElementSibling.style.maxHeight = 0;
				}
				question.classList.toggle("active");
				const answer = question.nextElementSibling;
				if (question.classList.contains("active")) {
					answer.style.maxHeight = answer.scrollHeight + "px";
				} else {
					answer.style.maxHeight = 0;
				}
			})
		})
	</script>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
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