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
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
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
  <link rel="stylesheet" type="text/css" href="css/Laptops.css" />


  <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.3.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
    
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
                  <a class="nav-link link dropdown-toggle nav link visa" href="#" role="button" data-bs-toggle="dropdown"
                  >Visa
                    Services</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="NBV.php"
                        style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
                        Business Visa
                        on
                        Arrival</a></li>
                    <li><a class=" dropdown-item" href="NTWP.php"
                        style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
                        Temporary Work Permit
                        Approval</a></li>
                    <li><a class=" dropdown-item" href="VSBForm.php"
                        style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
                        Tourist Visa</a></li>
                    <li><a class="dropdown-item" href="VSBForm.php"
                        style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
                        Business Visa
                        Extension</a></li>
                    <li><a class=" dropdown-item" href="VSBForm.php"
                        style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
                        Subject To
                        Regularization (STR)</a></li>
                    <li><a class=" dropdown-item" href="VSBForm.php"
                        style="color: black; font-size: 15px; padding-bottom: 10px;">Permit to Land
                        Immgration
                        Approval For<span class="span"> Marine Vessels Foreign Crew</span></a></li>

                  </ul>
                </li>
                <li class=" nav-item dropdown">
                  <a class="nav-link link dropdown-toggle nav services" href="#" role="button" data-bs-toggle="dropdown"
                  >Services</a>
                  <ul class="dropdown-menu" style="width: 900px;">
                    <div class="row">
                      <div class="col-md-4">
                        <li><a class="dropdown-item" href="NBI.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
                            Business Incorporation</a>
                        </li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Hotel Bookings</a>
                        </li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Real Estate
                            Cosultancy and Advisory</a></li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Legal Advisory
                            and Consultation</a>
                        </li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Africa travels
                            & tours</a></li>
                      </div>
                      <div class="col-md-4">
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
                            Immigration
                            Consultancy</a></li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Nigerian Custom
                            Consultancy</a>
                        </li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
                            Immigration Meet and
                            Greet</a></li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
                            Protocol Services</a></li>
                      </div>
                      <div class="col-md-4">
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Airport
                            Transfers</a></li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Vehicle Rentals</a>
                        </li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Armed Security
                            Escort
                            Services</a>
                        </li>
                        <li><a class="dropdown-item" href="SBForm.php"
                            style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria COVID 19
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
                  <a href="signin.php" class="btn button2 sign" type="button">Sign In</a>
                </li>
              
              <li class=" nav-item dropdown lang">
                <a class="nav-link dropdown-toggle nav" href="#" role="button" data-bs-toggle="dropdown"
                  style="color: #150423; font-family: 'Ubuntu';font-size: 14px;">
                  <img src="assets/image_2022-02-27_16-21-31.png" width="17" style="margin-top:-4px;font-size: 14px;">&nbsp;<span>English |</span></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="NBV.php"
                      style="color: black; font-size: 15px; padding-bottom: 10px;">Nigeria
                    </a></li>
                  <li><a class=" dropdown-item" href="NTWP.php"
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
            </ul>
            </div>
          </div>
        </nav>
      </div>

      </section>
      <section class=" new-section2__group layout2" style="background-color: #f8f6f6;">
        <div class="new-section1__cover-block layout">

          
            <div class="">
                <div class="card applycard">
                    <div style="margin-top: 65px;">
                        <h2 style="padding-left: 364px;font-family: 'Ubuntu';font-style: normal;font-weight: 500;font-size: 24px;color: #0A0E69;
                        ">Fill the form below</h2>
                        <p style="
                        padding: 28px 332px 0px 334px;font-family: Ubuntu;font-size: 16px;font-style: normal;font-weight: 400;color: #0A0E69;
                        
                        ">It takes less than 5 minutes to do this</p>
                    </div>

					<form method="POST" action="">

						<p style="padding-top:48px; padding-left: 201px; color:  #000000;
				font-family: Ubuntu;font-size: 14px;font-style: normal;font-weight: 400;">Which of our services are you applying For?</p>

						<div class="form-row" style="margin-left: 193px;">

							<div class="form-group" style="margin-right: 202px;">
								<select class="form-select" name="type" style="border: 1px solid #555555; width:502px;font-family:ubuntu;height: 44px; margin-top:27px" aria-label="Default select example">
									<option selected>Choose Service</option>
									<option value="NBV">Nigeria Business Visa</option>
									<option value="TWP">Nigeria Temporary Work Permit</option>
									<option value="NBI">Nigeria Business Incorporation</option>
								</select>
							</div>
						</div>


						<div style="margin-left: 193px; margin-top:89px;margin-bottom:80px ;">
							<button name="apply" type="submit" class="btn proceed">Next</button>
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
    var html = element.html();
    element.addClass("ms-animated");
    $({
      countNum: element.html()
    }).animate({
      countNum: maxval
    }, {
      //duration 5 seconds
      duration: 1000,
      easing: 'linear',
      step: function() {
        element.html(Math.floor(this.countNum) + html);
      },
      complete: function() {
        element.html(this.countNum + html);
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
