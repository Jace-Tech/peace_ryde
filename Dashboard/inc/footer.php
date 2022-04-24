<style>
	.star-rating {
		line-height: 32px;
		font-size: 1.25em;
	}

	.star-rating .fa-star-o {
		color: #FFCE31;
	}

	.fa-star:before {
		content: "\f005";
		color: #FFCE31;
	}


	/* The popup chat - hidden by default */
	.chat-popup {
		display: none;
		position: fixed;
		bottom: 0;
		right: 15px;
		border: 3px solid #f1f1f1;
		z-index: 9;
	}


	.wrapper {
		height: 400px;
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 50px;
	}

	.mainchat {
		background-color: #eee;
		width: 350px;
		position: relative;
		border-radius: 8px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		padding: 6px 0px 0px 0px
	}

	.scroll {
		overflow-y: scroll;
		scroll-behavior: smooth;
		height: 325px
	}

	.img9 {
		border-radius: 50%;
		background-color: #66BB6A
	}

	.name {
		font-size: 12px
	}

	.msg {
		background-color: #fff;
		font-size: 11px;
		padding: 5px;
		border-radius: 5px;
		font-weight: 500;
		color: #3e3c3c
	}

	.between {
		font-size: 8px;
		font-weight: 500;
		color: #a09e9e
	}

	.navbars {
		border-bottom-left-radius: 8px;
		border-bottom-right-radius: 8px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
	}

	.form-controls {
		font-size: 12px;
		font-weight: 400;
		width: 230px;
		height: 40px;
		border: none
	}

	.avatar {
		display: flex;
		align-items: center;
		justify-content: center;
		width: 80px;
		height: 80px;
		border-radius: 50%;
		font-size: 1.5rem;
		background-color: #fff !important;
		color: #555;
	}



	.form-controls:focus {
		box-shadow: none !important;
		overflow: hidden;
		border: none
	}

	.icon1 {
		color: #7C4DFF !important;
		font-size: 18px !important;
		cursor: pointer
	}

	.icon2 {
		color: #512DA8 !important;
		font-size: 18px !important;
		position: relative;
		left: 8px;
		padding: 0px;
		cursor: pointer
	}

	.icondiv {
		border-radius: 50%;
		width: 15px;
		height: 15px;
		padding: 2px;
		position: relative;
		bottom: 1px
	}
</style>

<?php
include("../models/Message.php");
$messages = new Message($connect);

$USER_MESSAGES = $messages->get_conversation($USER_ID, "MAIN_ADMIN");

?>

<button id="top" style="cursor: pointer;
    bottom: 50px;
    height: 40px;
    background-color: #A0BD1C;
    border-radius: 50%;
    border:1px solid #A0BD1C;
    position: fixed;
    right: 50px;
    z-index: 5;" class="btn btn-sm btn-primary" onclick="openForm()">
	<svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M23.0605 22.3053C22.0791 21.7249 21.3271 20.8247 20.9305 19.7557L20.9196 19.721C20.8828 19.6201 20.8812 19.5097 20.9152 19.4078C20.9491 19.3058 21.0166 19.2184 21.1067 19.1598L21.1087 19.1588C23.6682 17.305 25.3171 14.3298 25.33 10.9685V10.9666C25.33 4.91615 19.6597 0 12.665 0C5.67035 0.0633448 0 4.97752 0 10.9636C0 17.011 5.67035 21.9262 12.665 21.9262L12.8115 21.9272C13.6963 21.9272 14.5604 21.8342 15.3938 21.659L15.3126 21.6728C15.4 21.644 15.4937 21.6406 15.5829 21.663C15.6721 21.6855 15.7531 21.7328 15.8164 21.7995C17.7877 23.0053 20.0383 23.6786 22.3478 23.7533L22.3706 23.7543C22.4959 23.7698 22.623 23.7586 22.7437 23.7215C22.8643 23.6845 22.9758 23.6223 23.0707 23.5391C23.1657 23.4559 23.242 23.3536 23.2946 23.2389C23.3473 23.1242 23.3751 22.9996 23.3762 22.8734C23.5029 22.6824 23.2485 22.4923 23.0595 22.3053H23.0605ZM19.6567 21.2977C19.6932 21.3292 19.7162 21.3735 19.721 21.4214V21.4224C19.7191 21.4554 19.7052 21.4865 19.6818 21.5099C19.6585 21.5333 19.6273 21.5472 19.5943 21.5491C18.251 21.174 16.9996 20.5258 15.9184 19.6448L15.9362 19.6597C15.8511 19.5832 15.747 19.5311 15.6349 19.5088C15.5227 19.4865 15.4066 19.4949 15.2988 19.533L15.3037 19.532C14.438 19.7376 13.5518 19.8438 12.662 19.8487H12.6571C6.79868 19.8487 2.07157 15.9441 2.07157 11.0883C2.07157 6.23253 6.79868 2.32792 12.6571 2.32792C18.5155 2.32792 23.2436 6.23253 23.2436 11.0883C23.2029 12.5193 22.79 13.9149 22.0456 15.1376C21.3012 16.3604 20.251 17.368 18.9985 18.0612L18.9559 18.083C18.8513 18.1394 18.7621 18.2206 18.696 18.3195C18.6299 18.4183 18.589 18.5318 18.5769 18.6501V18.6531C18.7286 19.6132 19.1006 20.5251 19.6636 21.3175L19.6507 21.2977H19.6567ZM19.5943 13.5469V13.536C19.5945 13.4708 19.5817 13.4063 19.5568 13.3461C19.532 13.2859 19.4955 13.2311 19.4494 13.1851C19.4033 13.139 19.3486 13.1025 19.2884 13.0776C19.2282 13.0527 19.1636 13.04 19.0985 13.0401H19.0915C18.9741 13.0426 18.8616 13.0876 18.7748 13.1668C17.1053 14.5567 15.0006 15.3158 12.8283 15.3116L12.6561 15.3096H12.665C10.4355 15.2983 8.27519 14.5341 6.53441 13.1411L6.55421 13.1569C6.46243 13.0881 6.35428 13.0444 6.24045 13.0302H6.23748C6.16588 13.0314 6.09532 13.0476 6.03031 13.0776C5.9653 13.1077 5.90728 13.151 5.85996 13.2047C5.81263 13.2585 5.77705 13.3215 5.75548 13.3898C5.7339 13.4581 5.72682 13.5301 5.73468 13.6013V13.5993C5.74107 13.7186 5.77238 13.8351 5.82659 13.9415C5.8808 14.0479 5.95671 14.1417 6.04943 14.2169L6.05141 14.2179C6.83748 15.1651 7.82269 15.9272 8.9369 16.4502C10.0511 16.9732 11.2669 17.2441 12.4977 17.2436L12.6739 17.2417H12.665H12.7293C13.9944 17.2876 15.2523 17.0332 16.4002 16.4994C17.548 15.9656 18.553 15.1675 19.333 14.1704L19.3459 14.1526C19.4092 13.9626 19.5953 13.7092 19.5953 13.5192L19.5943 13.5469Z" fill="#F1F5F6" />
	</svg>
</button>
<div class="chat-popup" id="myForm">
	<div class="form-container">
		<div class="wrapper">
			<div class="mainchat">
				<button type="button" class="btn cancel" style="margin-left: 280px;" onclick="closeForm()">X</button>
				<div class="px-2 scroll">
                    <?php if(count($USER_MESSAGES)): ?>
                        <?php foreach($USER_MESSAGES as $message): ?>
                            <!--   SENDER  -->
							<?php if($message['sender_id'] == $USER_ID): ?>
								<!-- USER -->
								<div class="d-flex align-items-center text-right justify-content-end ">
									<div class="pr-2"> <span class="name"><?= $USER['firstname'] . ' ' . $USER['lastname']; ?></span>
										<p class="msg"><?= $message['message']; ?></p>
									</div>
									<div>
										<div class="avater">
											<?= getSubName($USER['firstname'] . ' ' . $USER['lastname']); ?>
										</div>
									</div>
								</div>
							<?php else: ?>
								<div class="d-flex align-items-center">
									<div class="text-left pr-1">
										<div class="avater">
											<?= "A"; ?>
										</div>
									</div>
									<div class="pr-2 pl-1"> <span class="name">Admin</span>
										<p class="msg"><?= $message['message'] ?>.</p>
									</div>
								</div>
							<?php endif; ?>
                            
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted text-center">No messages yet</p>
                    <?php endif; ?>

				</div>
				<form action="./handler/message_handler.php" method="post" class="navbars bg-white navbar-expand-sm d-flex justify-content-between">
					<input type="text" name="message" class="form-controls" placeholder="Type a message...">
					<input type="hidden" name="sender" value="<?= $USER_ID ?>">
					<input type="hidden" name="reciever" value="<?= "MAIN_ADMIN" ?>">
					<button name="send" style="border: none; background: transparent;" class=" d-flex justify-content-end align-content-center text-center ml-2">
						<svg width="33" height="35" viewBox="0 0 33 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M32.4419 20.4722C32.5822 19.2858 32.0534 18.1264 31.0686 17.4434L8.12261 1.50404C7.09665 0.772938 5.80289 0.713532 4.70133 1.30734C3.57966 1.91099 2.86538 3.55356 3.029 4.81133L4.30132 14.5749C4.43205 15.5761 5.23388 16.3557 6.23997 16.4571L19.7964 17.8394C20.4918 17.8985 20.9955 18.5204 20.9086 19.213C20.8348 19.8949 20.222 20.3912 19.5266 20.3321L5.95836 18.9379C4.95253 18.8342 4.00153 19.4326 3.65928 20.3856L0.300426 29.7007C-0.10413 30.8007 0.103129 31.9631 0.816651 32.8442C0.900595 32.9479 0.995031 33.0645 1.09201 33.1576C2.04085 34.0627 3.38245 34.3065 4.60167 33.8126L30.4291 23.1319C31.5361 22.6861 32.3016 21.6586 32.4419 20.4722Z" fill="#1161D9" />
						</svg>
					</button>
				</form>
			</div>
		</div>

	</div>
</div>