<?php session_start(); ?>
<?php
	include("./db/config.php");
	include("./models/Service.php");
	include("./models/UserService.php");

    if (!isset($_SESSION["PRICE"])) header("Location: ./index.php");
	$userServices = new UserService($connect); 
	$services = new Service($connect);

	$userId = $_SESSION["REG_NO"];
	$service = $userServices->getService($userId);

	$service_name = $services->getUserService($service['service_id'])['service'];

	$PRICE = json_decode($_SESSION["PRICE"], true);

?>


<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<title>payment</title>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&family=Ubuntu:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/New.css" />

		<script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.3.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
			.form-group {
				padding: 5px;
				width: 50%;
			}

			.form-control::placeholder {
				color: #555555;
			}

			.form-group input {
				width: 100%;
			}

			.proceed {
				background-color: #A0BD1C;
				font-family: Ubuntu;
				font-size: 16px;
				width: 384px;
				font-style: normal;
				font-weight: 400;
				color: #ffffff;
				border: 1px solid #A0BD1C;

				margin-bottom: 58px;
			}
		</style>
	</head>

	<body style="background-color: #1161D9; overflow-x: hidden;">
		<div class="row">
			<?php if($service['service_id'] === "srvs-002"): ?>
				<div class="col-md-5">
					<img src="Dashboard/dist/image/logo.png" style="border-radius: 50%; margin-left: 36px; margin-top: 28px;">

					<h2 style="font-family: Rubik; font-size: 30px; font-weight: 700; color:#F1F5F6; text-align: left; padding-left: 186px; padding-top: 86px; ">Payment</h2>
					<div class="row" style="margin-left: 186px; margin-top: 14px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Services</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;">Price($)</p>
						</div>
					</div>
					<div style="margin-left: 186px; margin-top: 26px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px;"></div>

					<div class="row" style="margin-left: 186px; margin-top: 15px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						"><?= $service_name; ?></p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= "" ?> </p>
						</div>
					</div>

					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						"> Immigration and agency processing fee</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['Immgration'], 2); ?></p>
						</div>
					</div>

					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Visa fee</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['visa'], 2); ?></p>
						</div>
					</div>


					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Admin/portal fee</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['admin'], 2); ?></p>
						</div>
					</div>

					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Biometric</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['bio'], 2); ?></p>
						</div>
					</div>

					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">VAT</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['vat'], 2); ?></p>
						</div>
					</div>


					<div style="margin-left: 186px; margin-top: 47px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px;"></div>
					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Total</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"><?= round($PRICE['total_price'], 2); ?></p>
						</div>
					</div>
					<div style="margin-left: 186px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px; margin-top: 17px;"></div>
					<div style="margin-left: 186px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px; margin-top: 6px;"></div>
				</div>
			<?php elseif($service['service_id'] === "srvs-001"): ?>
				<div class="col-md-5">
					<img src="Dashboard/dist/image/logo.png" style="border-radius: 50%; margin-left: 36px; margin-top: 28px;">

					<h2 style="font-family: Rubik; font-size: 30px; font-weight: 700; color:#F1F5F6; text-align: left; padding-left: 186px; padding-top: 86px; ">Payment</h2>
					<div class="row" style="margin-left: 186px; margin-top: 14px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Services</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;">Price($)</p>
						</div>
					</div>
					<div style="margin-left: 186px; margin-top: 26px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px;"></div>
					<div class="row" style="margin-left: 186px; margin-top: 15px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						"><?= "Nigeria Temporary Work Permit (TWP)" ?></p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= "" ?> </p>
						</div>
					</div>

					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Approval processing fee</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['approval'], 2); ?></p>
						</div>
					</div>

					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">VAT</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['tax'], 2); ?></p>
						</div>
					</div>
					<div style="margin-left: 186px; margin-top: 47px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px;"></div>
					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Total</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"><?= round($PRICE['total'], 2); ?></p>
						</div>
					</div>
					<div style="margin-left: 186px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px; margin-top: 17px;"></div>
					<div style="margin-left: 186px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px; margin-top: 6px;"></div>
				</div>
			<?php else: ?>
				<div class="col-md-5">
					<img src="Dashboard/dist/image/logo.png" style="border-radius: 50%; margin-left: 36px; margin-top: 28px;">

					<h2 style="font-family: Rubik; font-size: 30px; font-weight: 700; color:#F1F5F6; text-align: left; padding-left: 186px; padding-top: 86px; ">Payment</h2>
					<div class="row" style="margin-left: 186px; margin-top: 14px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Services</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;">Price($)</p>
						</div>
					</div>
					<div style="margin-left: 186px; margin-top: 26px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px;"></div>
					<div class="row" style="margin-left: 186px; margin-top: 15px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						"><?= "Nigeria Business Incorporation" ?></p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= "" ?> </p>
						</div>
					</div>

					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Business incorporation processing fee</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['price'], 2); ?></p>
						</div>
					</div>

					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">VAT</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"> <?= round($PRICE['tax'], 2); ?></p>
						</div>
					</div>
					<div style="margin-left: 186px; margin-top: 47px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px;"></div>
					<div class="row" style="margin-left: 186px; margin-top: 17px;">
						<div class="col-md-8">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						color:#F1F5F6;
						">Total</p>
						</div>
						<div class="col-md-4">
							<p style="font-family: Ubuntu;
						font-size: 18px;
						font-weight: 700;
						padding-left: 200px;
						color:#F1F5F6;"><?= round($PRICE['total'], 2); ?></p>
						</div>
					</div>
					<div style="margin-left: 186px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px; margin-top: 17px;"></div>
					<div style="margin-left: 186px; color: #F1F5F6; border: 1px solid #F1F5F6; width: 526px; margin-top: 6px;"></div>
				</div>
			<?php endif; ?>
			
			<div class="col-md-6">
				<form method="post" action="./handlers/payment.php"class="card" style="width: 502px; height: 653px; margin-top: 52px; background-color: #ffffff; margin-left: 200px;">
					<div style="margin-top: 31px;">
						<h2 style="font-family: Ubuntu;
                    font-size: 30px;
                    font-weight: 500;
                    text-align: center;
                    color:#000000; margin-left: 57px; margin-right: 78px;                                
                    ">Payment Information</h2>
						<div style=" margin-top: 20px;">
							<p style="font-family: Ubuntu;
                        font-size: 14px;
                        font-weight: 500;
                        color:#000000;margin-left: 95px;
                        ">Payment Options</p>
						</div>
						<div style="margin-top: 20px; margin-left: 57px;">
							<input type="radio" value="paypal" name="payment_option" style="width: 21px; height: 21px; margin-top: 8px;"> PayPal <br>

							<input type="radio" value="card" name="payment_option" style="width: 21px; height: 21px; margin-top: 8px;">Credit/ Debit Card <span style="font-size: 12px; color: #C8730F;">(Master card, Visa card,American express card, etc)</span> <br>
							<input type="radio" checked="checked" value="paystack" name="payment_option" style="width: 21px; height: 21px; margin-top: 8px;"> Paystack <br>
							<input type="radio" value="flutter" name="payment_option" style="width: 21px; height: 21px; margin-top: 8px;"> Flutter Wave <br>
							<p style="font-family: Ubuntu;
                        padding-top: 26px;
                                    font-size: 14px;
                                    font-weight: 400; color: #000000;
                             
                                    ">Name of card</p>
							<input type="text" name="card_name" class="form-control" style="border: 1px solid #555555;height: 44px; width:384px; margin-top:7px" placeholder="John Doe">

							<p style="font-family: Ubuntu;
                        padding-top: 6px;
                                    font-size: 14px;
                                    font-weight: 400; color: #000000;
                             
                                    ">Card Number</p>
							<input type="text"  name="card_no" class="form-control" style="border: 1px solid #555555;height: 44px; width:384px; margin-top:7px" placeholder="000 000 000 000 000">

							<div class="row">
								<div class="col-md-4" style="margin-top: 6px;">
									<div class="form-group">
										<p style="font-family: Ubuntu;
                                    font-size: 14px;
                                    font-weight: 400; color: #000000;
                             
                                    ">Expiry</p>
										<input  name="card_expiry" type="text" style="width:185px;margin-top: 3px;color: #5A5A5A; height:43px;border:1px solid #555555;font-size: 14px; font-family: ubuntu; font-weight: 400;" class="form-control" placeholder="DD/ MM/ YY">
									</div>
								</div>
								<div class="col-md-1">

								</div>
								<div class="col-md-4" style="margin-top: 6px;">
									<div class="form-group">
										<p style="font-family: Ubuntu;
                                    font-size: 14px;
                                    font-weight: 400; color: #000000;
                             
                                    ">CVV</p>
										<input type="text" name="card_cvv" style="width:185px;margin-top: 3px;color: #5A5A5A;height:43px;border:1px solid #555555;font-size: 14px; font-family: ubuntu; font-weight: 400;" class="form-control" placeholder="123">
									</div>
								</div>
							</div>

						</div>
						<div style="margin-left: 57px; margin-top:26px;margin-bottom:85px ;">
							<button type="submit" name="pay" class="btn proceed">Pay</button>
						</div>

					</div>
				</form>
			</div>

		</div>
	</body>

</html>