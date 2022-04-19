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
  box-shadow: 0 5px 10px 0 rgb(0,0,0,0.25);
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

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

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
                                ">Visa Services</h3>
                                
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
            <div class="containerques" style="margin-top: 83px;">
                <div class="question">
                  How do I verify my email?
                </div>
                <div class="answercont">
                  <div class="answer">
                    Click the link in the verification email from verify@codepen.io (be sure to check your spam folder or other email tabs if it's not in your inbox).
            
            Or, send an email with the subject "Verify" to verify@codepen.io from the email address you use for your CodePen account.<br><br>
            
            <a href="https://blog.codepen.io/documentation/features/email-verification/#how-do-i-verify-my-email-2">How to Verify Email Docs</a>
                  </div>
                </div>
              </div>
              
                <div class="containerques">
                <div class="question">
                  My Pen loads infinitely or crashes the browser.
                </div>
                <div class="answercont">
                  <div class="answer">
                    It's likely an infinite loop in JavaScript that we could not catch. To fix, add ?turn_off_js=true to the end of the URL (on any page, like the Pen or Project editor, your Profile page, or the Dashboard) to temporarily turn off JavaScript. When you're ready to run the JavaScript again, remove ?turn_off_js=true and refresh the page.<br><br>
            
            <a href="https://blog.codepen.io/documentation/features/turn-off-javascript-in-previews/">How to Disable JavaScript Docs</a>
                  </div>
                </div>
              </div>
              
                  <div class="containerques">
                <div class="question">
                  How do I contact the creator of a Pen?
                </div>
                <div class="answercont">
                  <div class="answer">
                    You can leave a comment on any public Pen. Click the "Comments" link in the Pen editor view, or visit the Details page.<br><br>
            
            <a href="https://blog.codepen.io/documentation/faq/how-do-i-contact-the-creator-of-a-pen/">How to Contact Creator of a Pen Docs</a>
                  </div>
                </div>
              </div>
             
              <div class="containerques">
                <div class="question">
                  What version of [library] does CodePen use?
                </div>
                <div class="answercont">
                  <div class="answer">
                    We have our current list of library versions <a href="https://codepen.io/versions">here</a>
               
                  </div>
                </div>
              </div>
              
              <div class="containerques">
                <div class="question">
                  What are forks?
                </div>
                <div class="answercont">
                  <div class="answer">
                    A fork is a complete copy of a Pen or Project that you can save to your own account and modify. Your forked copy comes with everything the original author wrote, including all of the code and any dependencies.<br><br>
            
            <a href="https://blog.codepen.io/documentation/features/forks/">Learn More About Forks</a>
                  </div>
                </div>
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
          document.getElementById("main").style.marginLeft= "0";
          
        }
        </script>
        <script>
            let question = document.querySelectorAll(".question");

question.forEach(question => {
  question.addEventListener("click", event => {
    const active = document.querySelector(".question.active");
    if(active && active !== question ) {
      active.classList.toggle("active");
      active.nextElementSibling.style.maxHeight = 0;
    }
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if(question.classList.contains("active")){
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  })
})

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