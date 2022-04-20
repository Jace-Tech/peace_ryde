<?php include("./inc/header.php"); ?>
<?php include("../models/Tracking.php"); ?>
<?php include("../models/UserService.php"); ?>
<?php include("../models/Service.php"); ?>

<?php
    $trackings = new Tracking($connect);
    $userServices = new UserService($connect);
    $services = new Service($connect);

    $tracks = $trackings->getUserTracking($USER_ID);

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

		<!-- Side Bar -->
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
                                ">My Progress</h3>

							</div>
						</div>
					</div>
					<div class="align-self-center">
						<div class="customize-input">
							<ol class="breadcrumb mb-2" style="margin-top: -50px;">
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/m_icon.png" width="20" height="19">&nbsp;&nbsp; Inbox</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/m_icon2.png" width="20" height="19">&nbsp;&nbsp; Send a message</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)"><img src="./dist/image/logout.png" width="20" height="19">&nbsp; &nbsp; Logout</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="card" style="width:925px;height:440px;background-color: #f7f7f7; margin-top: 68px; margin-left: 17px;">
				<table class="table table-borderless">
					<thead>
						<tr>
							<th scope="col" style="color:#A0BD1C;font-family: Ubuntu;padding-left:36px;font-size: 18px;font-style: normal;font-weight: 700;">Services</th>
							<th scope="col" style="color:#A0BD1C;font-family: Ubuntu;font-size: 18px;font-style: normal;font-weight: 700;">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php if(count($tracks) > 0): ?>
                            <?php foreach($tracks as $track): ?>
                                <tr>
                                    <th scope="row" style="padding-top:48px;padding-left:36px;color:#080C58;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 700;">
                                        <?= $services->getUserService($userServices->getService($USER_ID)); ?>
                                    </th>
                                    <td style="padding-top:48px;color:#080C58;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 500;">
                                        <?= $track['tracking']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
						<?php else: ?>
                            <tr>
                                <td colspan="2" class="py-5 text-muted text-center">No tracks found</td>
                            </tr>
						<?php endif; ?>
					</tbody>
				</table>
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