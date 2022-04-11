<?php session_start(); ?>
<?php  
    include("../utils/country_fee.php");
    if(isset($_SESSION['LOGGED_USER'])) {
        $LOGGED_USER = json_decode($_SESSION['LOGGED_USER'], true);
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./dist/image/logo.png">
    <title>PeaceRyde</title>
    <!-- Custom CSS -->
    <link href="./assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="./assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="./assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="./dist/css/style.min.css" rel="stylesheet">
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
.form-control::placeholder { 
  color: #555555;
}
.form-select
{
  color: #555555;
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

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <aside class="left-sidebar" data-sidebarbg="skin6" id="sidebar">
 
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <img src="./dist/image/logo.png" class="sidebar-image" style="border-radius: 50%; margin-left: 85px;">
                <!-- Sidebar navigation-->
                <div class="sidebarAccount">
                <h2>John Peter</h2>
                <p>Id: 123456789</p>
            </div>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li class="sidebar-item" active> <a class="sidebar-link" href="index.php" style="font-family: Rubik;"
                                aria-expanded="false"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 3.5C7.44374 3.5 6.89997 3.66495 6.43746 3.97399C5.97495 4.28303 5.61446 4.72229 5.40159 5.2362C5.18872 5.75012 5.13302 6.31562 5.24154 6.86119C5.35006 7.40676 5.61793 7.9079 6.01126 8.30124C6.4046 8.69457 6.90574 8.96244 7.45131 9.07096C7.99688 9.17948 8.56238 9.12378 9.0763 8.91091C9.59022 8.69804 10.0295 8.33755 10.3385 7.87504C10.6476 7.41253 10.8125 6.86876 10.8125 6.3125C10.8125 5.56658 10.5162 4.85121 9.98874 4.32376C9.46129 3.79632 8.74592 3.5 8 3.5ZM8 8C7.66625 8 7.33998 7.90103 7.06248 7.7156C6.78497 7.53018 6.56868 7.26663 6.44095 6.95828C6.31323 6.64993 6.27981 6.31063 6.34493 5.98329C6.41004 5.65594 6.57076 5.35526 6.80676 5.11926C7.04276 4.88326 7.34344 4.72254 7.67079 4.65742C7.99813 4.59231 8.33743 4.62573 8.64578 4.75345C8.95413 4.88118 9.21768 5.09747 9.40311 5.37498C9.58853 5.65248 9.6875 5.97874 9.6875 6.3125C9.68705 6.75992 9.50912 7.18888 9.19275 7.50525C8.87638 7.82162 8.44742 7.99955 8 8Z" fill="white"/>
                                    <path d="M8 0.125C6.44248 0.125 4.91992 0.586861 3.62489 1.45218C2.32985 2.31749 1.32049 3.5474 0.724452 4.98637C0.128412 6.42534 -0.0275391 8.00874 0.276319 9.53634C0.580178 11.0639 1.3302 12.4671 2.43154 13.5685C3.53288 14.6698 4.93607 15.4198 6.46367 15.7237C7.99127 16.0275 9.57467 15.8716 11.0136 15.2756C12.4526 14.6795 13.6825 13.6702 14.5478 12.3751C15.4131 11.0801 15.875 9.55753 15.875 8C15.8726 5.91215 15.0422 3.9105 13.5658 2.43417C12.0895 0.957832 10.0879 0.127382 8 0.125ZM4.625 13.8371V13.0625C4.62545 12.6151 4.80338 12.1861 5.11975 11.8698C5.43613 11.5534 5.86509 11.3754 6.3125 11.375H9.6875C10.1349 11.3754 10.5639 11.5534 10.8803 11.8698C11.1966 12.1861 11.3746 12.6151 11.375 13.0625V13.8371C10.3508 14.4351 9.18604 14.7503 8 14.7503C6.81396 14.7503 5.64922 14.4351 4.625 13.8371ZM12.4955 13.0209C12.4843 12.2831 12.1837 11.5792 11.6585 11.0609C11.1332 10.5426 10.4254 10.2514 9.6875 10.25H6.3125C5.57461 10.2514 4.86679 10.5426 4.34155 11.0609C3.81632 11.5792 3.51571 12.2831 3.5045 13.0209C2.48445 12.11 1.7651 10.9109 1.44172 9.58212C1.11834 8.25338 1.20618 6.85776 1.69361 5.58005C2.18104 4.30234 3.04506 3.20281 4.17128 2.42707C5.29749 1.65132 6.63276 1.23595 8.00028 1.23595C9.36781 1.23595 10.7031 1.65132 11.8293 2.42707C12.9555 3.20281 13.8195 4.30234 14.307 5.58005C14.7944 6.85776 14.8822 8.25338 14.5588 9.58212C14.2355 10.9109 13.5161 12.11 12.4961 13.0209H12.4955Z" fill="white"/>
                                    </svg>                                
                                    <span
                                    class="hide-menu" style="padding-left: 23px;">Account
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="trackprogress.html" style="font-family: Rubik;"
                                aria-expanded="false"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4013 14.75H10.5976L12.5 10.9453L14.4013 14.75ZM12.5 9.125C12.3955 9.12495 12.293 9.15403 12.2041 9.20898C12.1152 9.26392 12.0433 9.34256 11.9966 9.43606L9.18408 15.0611C9.14122 15.1468 9.12099 15.2422 9.12533 15.3379C9.12967 15.4337 9.15843 15.5268 9.20887 15.6084C9.25931 15.6899 9.32976 15.7572 9.41354 15.8039C9.49731 15.8506 9.59162 15.875 9.68752 15.875H15.3125C15.4054 15.875 15.4969 15.852 15.5787 15.8081C15.6605 15.7642 15.7302 15.7006 15.7815 15.6232C15.8328 15.5458 15.8642 15.4568 15.8727 15.3643C15.8813 15.2718 15.8668 15.1787 15.8306 15.0931L13.0035 9.43606C12.9567 9.34256 12.8849 9.26392 12.7959 9.20898C12.707 9.15403 12.6045 9.12495 12.5 9.125Z" fill="white"/>
                                    <path d="M9.54469 11.8249C8.79141 12.2311 7.95537 12.4601 7.10024 12.4943C6.24512 12.5286 5.39345 12.3672 4.6101 12.0226C3.82676 11.6779 3.13239 11.159 2.57989 10.5055C2.02738 9.85188 1.63131 9.08084 1.42184 8.25106C1.21236 7.42128 1.19501 6.55464 1.37109 5.71713C1.54718 4.87963 1.91206 4.09335 2.43796 3.41819C2.96385 2.74302 3.63689 2.19676 4.40581 1.82102C5.17472 1.44528 6.01925 1.24996 6.87506 1.24994V6.87494L10.3046 10.3045L10.9909 8.932C11.1303 8.65125 11.3456 8.41514 11.6123 8.25042C11.8791 8.08569 12.1866 7.99893 12.5001 7.99994H13.5238C13.7535 6.63677 13.5589 5.23593 12.9663 3.987C12.3737 2.73806 11.4117 1.70133 10.2106 1.01711C9.00938 0.332883 7.62698 0.0341965 6.25046 0.16147C4.87394 0.288744 3.56974 0.835832 2.51438 1.7287C1.45901 2.62156 0.703418 3.8171 0.349859 5.15352C-0.00370046 6.48993 0.0618417 7.90271 0.537615 9.20065C1.01339 10.4986 1.87642 11.619 3.00992 12.4104C4.14343 13.2017 5.49267 13.6257 6.87506 13.6249C7.52158 13.6242 8.1646 13.53 8.78419 13.3454L9.54469 11.8249Z" fill="white"/>
                                    </svg>
                                                                        
                                    <span
                                    class="hide-menu" style="padding-left: 23px;">Track Proccess</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"style="font-family: Rubik;"
                                        aria-expanded="false"><svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.802 10.7828C12.4221 10.7843 12.0541 10.9153 11.7586 11.154L10.552 10.4582V9.55486C10.9274 9.42217 11.2437 9.16107 11.4451 8.81771C11.6465 8.47436 11.7201 8.07085 11.6527 7.67851C11.5854 7.28617 11.3816 6.93025 11.0772 6.67367C10.7729 6.41709 10.3876 6.27637 9.98954 6.27637C9.59147 6.27637 9.20621 6.41709 8.90186 6.67367C8.59751 6.93025 8.39366 7.28617 8.32635 7.67851C8.25903 8.07085 8.33258 8.47436 8.534 8.81771C8.73542 9.16107 9.05173 9.42217 9.42704 9.55486V10.4582L8.22048 11.1552C7.92515 10.916 7.55709 10.7846 7.17704 10.7828C6.82445 10.7804 6.47986 10.8878 6.19105 11.0901C5.90224 11.2923 5.68353 11.5795 5.56524 11.9116C5.44695 12.2438 5.43496 12.6045 5.53091 12.9438C5.62687 13.2831 5.82603 13.5841 6.10076 13.8051C6.3755 14.0261 6.7122 14.1562 7.06416 14.1772C7.41613 14.1983 7.76593 14.1093 8.06504 13.9226C8.36415 13.7359 8.59775 13.4607 8.73345 13.1353C8.86915 12.8098 8.90022 12.4502 8.82235 12.1064L9.98954 11.4319L11.1567 12.1058C11.0815 12.4468 11.114 12.8028 11.2497 13.1245C11.3854 13.4463 11.6176 13.718 11.9143 13.9021C12.2111 14.0862 12.5576 14.1737 12.9062 14.1524C13.2547 14.1311 13.5881 14.0022 13.8602 13.7834C14.1324 13.5645 14.3299 13.2666 14.4255 12.9308C14.521 12.5949 14.51 12.2376 14.3939 11.9083C14.2777 11.579 14.0622 11.2938 13.7771 11.0922C13.4919 10.8906 13.1512 10.7825 12.802 10.7828ZM7.17704 13.0328C7.06579 13.0328 6.95704 12.9998 6.86453 12.938C6.77203 12.8762 6.69993 12.7883 6.65736 12.6856C6.61479 12.5828 6.60365 12.4697 6.62535 12.3606C6.64706 12.2514 6.70063 12.1512 6.7793 12.0725C6.85796 11.9939 6.95819 11.9403 7.0673 11.9186C7.17642 11.8969 7.28952 11.908 7.3923 11.9506C7.49509 11.9932 7.58294 12.0653 7.64475 12.1578C7.70655 12.2503 7.73954 12.359 7.73954 12.4703C7.73954 12.6195 7.68028 12.7626 7.57479 12.868C7.4693 12.9735 7.32623 13.0328 7.17704 13.0328ZM9.98954 7.40779C10.1008 7.40779 10.2095 7.44078 10.3021 7.50259C10.3946 7.5644 10.4667 7.65225 10.5092 7.75504C10.5518 7.85782 10.5629 7.97092 10.5412 8.08003C10.5195 8.18915 10.466 8.28938 10.3873 8.36804C10.3086 8.44671 10.2084 8.50028 10.0993 8.52199C9.99017 8.54369 9.87707 8.53255 9.77428 8.48998C9.6715 8.4474 9.58365 8.37531 9.52184 8.2828C9.46003 8.1903 9.42704 8.08155 9.42704 7.97029C9.42704 7.82111 9.48631 7.67804 9.59179 7.57255C9.69728 7.46706 9.84036 7.40779 9.98954 7.40779ZM12.802 13.0328C12.6908 13.0328 12.582 12.9998 12.4895 12.938C12.397 12.8762 12.3249 12.7883 12.2824 12.6856C12.2398 12.5828 12.2286 12.4697 12.2504 12.3606C12.2721 12.2514 12.3256 12.1512 12.4043 12.0725C12.483 11.9939 12.5832 11.9403 12.6923 11.9186C12.8014 11.8969 12.9145 11.908 13.0173 11.9506C13.1201 11.9932 13.2079 12.0653 13.2697 12.1578C13.3316 12.2503 13.3645 12.359 13.3645 12.4703C13.3645 12.6195 13.3053 12.7626 13.1998 12.868C13.0943 12.9735 12.9512 13.0328 12.802 13.0328Z" fill="white"/>
                                            <path d="M7.17773 16.9707C5.53726 16.9689 3.96448 16.3164 2.80448 15.1564C1.64449 13.9964 0.992021 12.4237 0.990234 10.7832V3.12305L7.17042 0.0292969L13.0542 2.97511L12.5507 3.98086L7.17042 1.28705L2.11523 3.8183V10.7832C2.11513 11.7234 2.37686 12.6451 2.87109 13.4449C3.36533 14.2447 4.07253 14.8911 4.91346 15.3116C5.75439 15.7322 6.69582 15.9102 7.63223 15.8258C8.56865 15.7414 9.46306 15.3979 10.2152 14.8337L10.8902 15.7332C9.82098 16.5398 8.51713 16.9744 7.17773 16.9707Z" fill="white"/>
                                            </svg><span
                                            class="hide-menu" style="padding-left: 23px;">Services </span></a>
                                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                        <li class="sidebar-item"><a href="service.html" class="sidebar-link"><span
                                                    class="hide-menu"> Visa Services
                                                </span></a>
                                        </li>
                                        <li class="sidebar-item"><a href="services.html" class="sidebar-link"><span
                                                    class="hide-menu"> Other Services
                                                </span></a>
                                        </li>
                                       
                                    </ul>
                                </li>

                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="document.html" style="font-family: Rubik;"
                            aria-expanded="false"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.4563 4.23125L7.51875 0.29375C7.40625 0.18125 7.29375 0.125 7.125 0.125H1.5C0.88125 0.125 0.375 0.63125 0.375 1.25V14.75C0.375 15.3687 0.88125 15.875 1.5 15.875H10.5C11.1187 15.875 11.625 15.3687 11.625 14.75V4.625C11.625 4.45625 11.5688 4.34375 11.4563 4.23125ZM7.125 1.475L10.275 4.625H7.125V1.475ZM10.5 14.75H1.5V1.25H6V4.625C6 5.24375 6.50625 5.75 7.125 5.75H10.5V14.75Z" fill="white"/>
                                <path d="M2.625 11.375H9.375V12.5H2.625V11.375Z" fill="white"/>
                                <path d="M2.625 8H9.375V9.125H2.625V8Z" fill="white"/>
                                </svg>
                                <span
                                class="hide-menu" style="padding-left: 23px;">My Documents
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="upload.html" style="font-family: Rubik;"
                            aria-expanded="false"><svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 9V13.5C0.5 14.0304 0.710714 14.5391 1.08579 14.9142C1.46086 15.2893 1.96957 15.5 2.5 15.5H12.5C13.0304 15.5 13.5391 15.2893 13.9142 14.9142C14.2893 14.5391 14.5 14.0304 14.5 13.5V9M11.5 4.5L7.522 0.5L3.5 4.5H11.5ZM7.522 0.521V12.5V0.521Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span
                                class="hide-menu" style="padding-left: 23px;">Upload Documents</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="account.html" style="font-family: Rubik;"
                            aria-expanded="false"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 8.991C18 4.0275 13.968 0 9 0C4.032 0 0 4.0275 0 8.991C0 11.7248 1.242 14.1885 3.186 15.8422C3.204 15.8602 3.222 15.8603 3.222 15.8783C3.384 16.0042 3.546 16.1302 3.726 16.2563C3.816 16.3102 3.888 16.3811 3.978 16.4531C5.46533 17.4615 7.22105 18.0004 9.018 18C10.815 18.0004 12.5707 17.4615 14.058 16.4531C14.148 16.3991 14.22 16.3283 14.31 16.2731C14.472 16.1483 14.652 16.0222 14.814 15.8962C14.832 15.8783 14.85 15.8782 14.85 15.8602C16.758 14.1874 18 11.7248 18 8.991ZM9 16.8671C7.308 16.8671 5.76 16.3271 4.482 15.4282C4.5 15.2842 4.536 15.1414 4.572 14.9974C4.67926 14.6071 4.83656 14.2324 5.04 13.8825C5.238 13.5405 5.472 13.2345 5.76 12.9645C6.03 12.6945 6.354 12.4436 6.678 12.2456C7.02 12.0476 7.38 11.9036 7.776 11.7956C8.17508 11.6881 8.58668 11.634 9 11.6348C10.227 11.6261 11.4089 12.0967 12.294 12.9465C12.708 13.3605 13.032 13.8465 13.266 14.4034C13.392 14.7274 13.482 15.0694 13.536 15.4282C12.2076 16.3622 10.6239 16.8646 9 16.8671ZM6.246 8.54212C6.0874 8.179 6.00764 7.78635 6.012 7.39012C6.012 6.99525 6.084 6.59925 6.246 6.23925C6.408 5.87925 6.624 5.55638 6.894 5.28638C7.164 5.01638 7.488 4.8015 7.848 4.6395C8.208 4.4775 8.604 4.4055 9 4.4055C9.414 4.4055 9.792 4.4775 10.152 4.6395C10.512 4.8015 10.836 5.0175 11.106 5.28638C11.376 5.55638 11.592 5.88037 11.754 6.23925C11.916 6.59925 11.988 6.99525 11.988 7.39012C11.988 7.80412 11.916 8.18213 11.754 8.541C11.5977 8.89567 11.3781 9.21894 11.106 9.495C10.8298 9.76668 10.5066 9.98587 10.152 10.1419C9.40818 10.4476 8.57382 10.4476 7.83 10.1419C7.47541 9.98587 7.15215 9.76668 6.876 9.495C6.60354 9.22296 6.3892 8.89839 6.246 8.541V8.54212ZM14.598 14.5114C14.598 14.4754 14.58 14.4574 14.58 14.4214C14.403 13.8582 14.142 13.325 13.806 12.8396C13.4697 12.3507 13.0563 11.9195 12.582 11.5627C12.2198 11.2903 11.8272 11.0607 11.412 10.8787C11.6009 10.7542 11.7759 10.6097 11.934 10.4479C12.2024 10.1829 12.438 9.88684 12.636 9.56588C13.0347 8.91091 13.2405 8.1568 13.23 7.39012C13.2356 6.82258 13.1253 6.25986 12.906 5.73637C12.6895 5.23197 12.3778 4.774 11.988 4.3875C11.5988 4.00503 11.1407 3.69966 10.638 3.4875C10.1136 3.26857 9.5502 3.15871 8.982 3.16462C8.41373 3.15907 7.85028 3.26931 7.326 3.48863C6.81891 3.70034 6.35975 4.01218 5.976 4.4055C5.59355 4.79429 5.28817 5.25197 5.076 5.75437C4.85668 6.27786 4.74643 6.84058 4.752 7.40812C4.752 7.80412 4.806 8.18213 4.914 8.541C5.022 8.919 5.166 9.261 5.364 9.58387C5.544 9.90788 5.796 10.1959 6.066 10.4659C6.228 10.6279 6.408 10.7708 6.606 10.8967C6.18956 11.0836 5.79681 11.3192 5.436 11.5988C4.968 11.9588 4.554 12.3896 4.212 12.8576C3.87254 13.341 3.61134 13.8748 3.438 14.4394C3.42 14.4754 3.42 14.5114 3.42 14.5294C1.998 13.0905 1.116 11.1488 1.116 8.991C1.116 4.6575 4.662 1.11487 9 1.11487C13.338 1.11487 16.884 4.6575 16.884 8.991C16.8816 11.061 16.0597 13.0458 14.598 14.5114Z" fill="white"/>
                                </svg><span class="hide-menu" style="padding-left: 23px;">My Account settings</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="banksetting.html" style="font-family: Rubik;"
                                aria-expanded="false"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.75 1.625V2.75H1.25V1.625H14.75ZM1.25 3.875H14.75V9.5H1.25V3.875ZM14.75 0.5H1.25C0.951631 0.5 0.665483 0.618527 0.454505 0.829505C0.243526 1.04048 0.125 1.32663 0.125 1.625V9.5C0.125 9.79837 0.243526 10.0845 0.454505 10.2955C0.665483 10.5065 0.951631 10.625 1.25 10.625H14.75C15.0484 10.625 15.3345 10.5065 15.5455 10.2955C15.7565 10.0845 15.875 9.79837 15.875 9.5V1.625C15.875 1.32663 15.7565 1.04048 15.5455 0.829505C15.3345 0.618527 15.0484 0.5 14.75 0.5ZM11.375 7.25H13.625V8.375H11.375V7.25Z" fill="white"/>
                                    </svg>
                                    <span
                                    class="hide-menu" style="padding-left: 23px;">My card and bank settings
                                </span></a>
                        </li>
                        <li class="list-divider"></li>
                        

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="help.html" style="font-family: Rubik;"
                                aria-expanded="false"><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0.0556641C6.41775 0.0556641 4.87103 0.550922 3.55544 1.47881C2.23985 2.4067 1.21447 3.72554 0.608967 5.26856C0.00346625 6.81158 -0.15496 8.50948 0.153721 10.1475C0.462403 11.7856 1.22433 13.2903 2.34315 14.4712C3.46197 15.6522 4.88743 16.4565 6.43928 16.7823C7.99113 17.1081 9.59966 16.9409 11.0615 16.3018C12.5233 15.6626 13.7727 14.5803 14.6518 13.1916C15.5308 11.8029 16 10.1703 16 8.50011C16 6.2605 15.1571 4.11263 13.6569 2.52898C12.1566 0.945344 10.1217 0.0556641 8 0.0556641ZM8 15.889C6.61553 15.889 5.26216 15.4556 4.11101 14.6437C2.95987 13.8318 2.06266 12.6779 1.53285 11.3277C1.00303 9.97757 0.86441 8.49191 1.13451 7.05861C1.4046 5.6253 2.07129 4.30873 3.05026 3.27538C4.02922 2.24202 5.2765 1.5383 6.63437 1.2532C7.99224 0.968093 9.39971 1.11442 10.6788 1.67367C11.9579 2.23291 13.0511 3.17997 13.8203 4.39506C14.5895 5.61016 15 7.03872 15 8.50011C15 10.4598 14.2625 12.3392 12.9498 13.7248C11.637 15.1105 9.85652 15.889 8 15.889Z" fill="white"/>
                                    <path d="M8.145 3.70756C7.60318 3.69811 7.06603 3.81474 6.57173 4.04917C6.07743 4.28359 5.63811 4.63006 5.285 5.06395C5.23594 5.11194 5.1965 5.16983 5.16902 5.2342C5.14154 5.29856 5.12657 5.36809 5.125 5.43867C5.12497 5.50379 5.13734 5.56825 5.16139 5.62822C5.18544 5.68819 5.22067 5.74243 5.26499 5.78774C5.30931 5.83304 5.3618 5.86847 5.41936 5.89191C5.47691 5.91536 5.53834 5.92635 5.6 5.92423C5.73209 5.92077 5.85839 5.86632 5.955 5.77117C6.22223 5.44062 6.55414 5.17509 6.92788 4.99288C7.30162 4.81066 7.70832 4.71607 8.12 4.71562C9.3 4.71562 10.035 5.51784 10.035 6.51534V6.54173C10.035 7.70812 9.155 8.35729 7.765 8.46812C7.70872 8.47041 7.65353 8.48523 7.60304 8.51159C7.55256 8.53796 7.50792 8.57528 7.47204 8.62112C7.43617 8.66696 7.40987 8.72028 7.39487 8.77759C7.37987 8.83489 7.37651 8.8949 7.385 8.95368V10.4051C7.39744 10.5357 7.45556 10.6568 7.54801 10.7446C7.64047 10.8324 7.76062 10.8807 7.885 10.8801H7.94C8.06376 10.8669 8.17844 10.8056 8.26165 10.708C8.34486 10.6104 8.39062 10.4836 8.39 10.3523V9.26506C9.89 9.0434 11.105 8.20951 11.105 6.4784V6.45201C11.09 4.86867 9.92 3.70756 8.145 3.70756Z" fill="white"/>
                                    <path d="M7.88965 13.4874C8.23483 13.4874 8.51465 13.192 8.51465 12.8277C8.51465 12.4633 8.23483 12.168 7.88965 12.168C7.54447 12.168 7.26465 12.4633 7.26465 12.8277C7.26465 13.192 7.54447 13.4874 7.88965 13.4874Z" fill="white"/>
                                    </svg>
                                    <span
                                    class="hide-menu"style="padding-left: 23px;">Help
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="chat.html"style="font-family: Rubik;"
                            aria-expanded="false"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.01275 13.1241C3.12952 13.2479 3.219 13.3973 3.27481 13.5617C3.33062 13.7261 3.35138 13.9015 3.33562 14.0753C3.25656 14.8799 3.10666 15.675 2.88787 16.4503C4.45725 16.0667 5.41575 15.6226 5.85113 15.3899C6.09807 15.2579 6.38245 15.2266 6.64987 15.302C7.41649 15.5177 8.20661 15.6263 9 15.625C13.4955 15.625 16.875 12.2917 16.875 8.5C16.875 4.7095 13.4955 1.375 9 1.375C4.5045 1.375 1.125 4.7095 1.125 8.5C1.125 10.2432 1.81912 11.8606 3.01275 13.1241ZM2.45812 17.7613C2.19158 17.8171 1.92416 17.8682 1.656 17.9145C1.431 17.9525 1.26 17.7055 1.34888 17.4846C1.44877 17.236 1.54032 16.9837 1.62337 16.7282L1.62675 16.7163C1.90575 15.8613 2.133 14.8781 2.21625 13.9625C0.835875 12.5019 0 10.59 0 8.5C0 3.90913 4.02975 0.1875 9 0.1875C13.9703 0.1875 18 3.90913 18 8.5C18 13.0909 13.9703 16.8125 9 16.8125C8.10861 16.8138 7.22091 16.6916 6.35962 16.4491C5.77462 16.7614 4.51575 17.3302 2.45812 17.7613Z" fill="white"/>
                                </svg>
                                <span
                                class="hide-menu"style="padding-left: 23px;">Chat
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="././contact.html" style="font-family: Rubik;"
                            aria-expanded="false"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3586 16.8934C13.1905 16.893 13.0229 16.8745 12.8586 16.8384C9.73196 16.1916 6.85145 14.6751 4.54864 12.4634C2.29498 10.2469 0.731939 7.42474 0.0486424 4.33844C-0.0319269 3.9538 -0.012152 3.55489 0.106065 3.1801C0.224281 2.80531 0.436961 2.46725 0.723642 2.19844L2.72364 0.273442C2.8258 0.176836 2.94717 0.102857 3.07985 0.056333C3.21253 0.00980932 3.35353 -0.00821314 3.49364 0.00344183C3.63892 0.0185983 3.77912 0.0653985 3.90438 0.140551C4.02963 0.215704 4.1369 0.317384 4.21864 0.438442L6.71864 4.13344C6.81239 4.27681 6.85765 4.44649 6.84775 4.61751C6.83785 4.78853 6.77331 4.95185 6.66364 5.08344L5.40864 6.58344C5.90847 7.68967 6.61631 8.68948 7.49364 9.52844C8.36529 10.3978 9.39556 11.092 10.5286 11.5734L12.0836 10.3384C12.2142 10.2352 12.3732 10.1742 12.5393 10.1635C12.7054 10.1528 12.8709 10.1929 13.0136 10.2784L16.7886 12.7184C16.9182 12.7958 17.0286 12.9015 17.1115 13.0275C17.1944 13.1536 17.2477 13.2968 17.2674 13.4463C17.2871 13.5959 17.2727 13.748 17.2253 13.8913C17.1779 14.0345 17.0987 14.1652 16.9936 14.2734L15.0436 16.2034C14.8221 16.4239 14.5592 16.5983 14.2701 16.7167C13.9809 16.8351 13.6711 16.8952 13.3586 16.8934ZM3.41364 0.993442L1.41364 2.91844C1.25237 3.06872 1.13299 3.25838 1.06724 3.46878C1.00148 3.67918 0.991631 3.90308 1.03864 4.11844C1.674 7.01451 3.1345 9.66459 5.24364 11.7484C7.41074 13.8292 10.1214 15.2556 13.0636 15.8634C13.2863 15.91 13.5171 15.9006 13.7353 15.836C13.9534 15.7714 14.1522 15.6537 14.3136 15.4934L16.2636 13.5634L12.6186 11.2084L10.9486 12.5384C10.8847 12.589 10.8094 12.6232 10.7292 12.6381C10.649 12.6529 10.5664 12.6479 10.4886 12.6234C9.10199 12.1125 7.84537 11.3015 6.80864 10.2484C5.73632 9.24705 4.90395 8.01645 4.37364 6.64844C4.35121 6.56562 4.35046 6.47843 4.37148 6.39524C4.39249 6.31205 4.43456 6.23567 4.49364 6.17344L5.84364 4.55844L3.41364 0.993442Z" fill="white"/>
                                </svg>
                                <span
                                class="hide-menu"style="padding-left: 23px;">Contact Us</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="review.html" style="font-family: Rubik;"
                            aria-expanded="false"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.72507 4.05507C6.77531 4.10924 6.81438 4.17277 6.84007 4.24204C6.86575 4.31131 6.87753 4.38496 6.87474 4.45878C6.87196 4.53261 6.85466 4.60516 6.82383 4.6723C6.793 4.73944 6.74925 4.79984 6.69507 4.85007L4.51407 6.87507L6.69507 8.90007C6.74924 8.9503 6.79299 9.01071 6.82381 9.07785C6.85464 9.14498 6.87194 9.21753 6.87472 9.29136C6.87751 9.36518 6.86573 9.43883 6.84005 9.5081C6.81437 9.57737 6.7753 9.6409 6.72507 9.69507C6.67484 9.74924 6.61443 9.79299 6.5473 9.82381C6.48016 9.85464 6.40761 9.87193 6.33379 9.87472C6.25996 9.87751 6.18632 9.86572 6.11705 9.84005C6.04778 9.81437 5.98424 9.7753 5.93007 9.72507L3.30507 7.28757C3.24828 7.23492 3.20297 7.1711 3.17198 7.10012C3.14099 7.02914 3.125 6.95252 3.125 6.87507C3.125 6.79762 3.14099 6.72101 3.17198 6.65002C3.20297 6.57904 3.24828 6.51523 3.30507 6.46257L5.93007 4.02507C5.98424 3.97483 6.04777 3.93576 6.11704 3.91008C6.18631 3.8844 6.25996 3.87261 6.33379 3.8754C6.40761 3.87819 6.48016 3.89549 6.5473 3.92632C6.61444 3.95714 6.67485 4.00089 6.72507 4.05507ZM9.30507 4.85007C9.19567 4.74863 9.13105 4.60788 9.12542 4.45878C9.1198 4.30969 9.17363 4.16447 9.27507 4.05507C9.37652 3.94567 9.51727 3.88105 9.66636 3.87542C9.81545 3.86979 9.96067 3.92363 10.0701 4.02507L12.6951 6.46257C12.7519 6.51523 12.7972 6.57904 12.8282 6.65002C12.8592 6.72101 12.8751 6.79762 12.8751 6.87507C12.8751 6.95252 12.8592 7.02914 12.8282 7.10012C12.7972 7.1711 12.7519 7.23492 12.6951 7.28757L10.0701 9.72507C9.96067 9.82652 9.81545 9.88035 9.66636 9.87472C9.51727 9.86909 9.37652 9.80447 9.27507 9.69507C9.17363 9.58567 9.1198 9.44045 9.12542 9.29136C9.13105 9.14227 9.19567 9.00152 9.30507 8.90007L11.4861 6.87507L9.30507 4.85007Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.125 2.1875C0.125 1.463 0.713 0.875 1.4375 0.875H14.5625C15.287 0.875 15.875 1.463 15.875 2.1875V11.5625C15.875 11.9106 15.7367 12.2444 15.4906 12.4906C15.2444 12.7367 14.9106 12.875 14.5625 12.875H7.295L4.61525 15.5547C4.46243 15.7075 4.26775 15.8115 4.05583 15.8536C3.84391 15.8958 3.62425 15.8741 3.42462 15.7915C3.225 15.7088 3.05436 15.5688 2.93428 15.3891C2.81421 15.2095 2.75008 14.9983 2.75 14.7822V12.875H1.4375C1.0894 12.875 0.755564 12.7367 0.509422 12.4906C0.263281 12.2444 0.125 11.9106 0.125 11.5625V2.1875ZM1.4375 2C1.38777 2 1.34008 2.01975 1.30492 2.05492C1.26975 2.09008 1.25 2.13777 1.25 2.1875V11.5625C1.25 11.666 1.334 11.75 1.4375 11.75H3.3125C3.46168 11.75 3.60476 11.8093 3.71025 11.9148C3.81574 12.0202 3.875 12.1633 3.875 12.3125V14.705L6.665 11.915C6.77039 11.8095 6.91337 11.7501 7.0625 11.75H14.5625C14.6122 11.75 14.6599 11.7302 14.6951 11.6951C14.7302 11.6599 14.75 11.6122 14.75 11.5625V2.1875C14.75 2.13777 14.7302 2.09008 14.6951 2.05492C14.6599 2.01975 14.6122 2 14.5625 2H1.4375Z" fill="white"/>
                                </svg>
                                <span
                                class="hide-menu"style="padding-left: 23px;">Leave a Review</span></a></li>
                        
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="login.html" style="font-family: Rubik;"
                        aria-expanded="false"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.6563 2.22852L11.0938 3.20164C12.2733 3.88268 13.1953 4.93392 13.7165 6.19232C14.2378 7.45072 14.3292 8.84595 13.9767 10.1616C13.6241 11.4773 12.8473 12.6399 11.7667 13.469C10.6861 14.2982 9.36208 14.7477 8 14.7477C6.63792 14.7477 5.3139 14.2982 4.23329 13.469C3.15268 12.6399 2.37587 11.4773 2.02334 10.1616C1.6708 8.84595 1.76225 7.45072 2.2835 6.19232C2.80474 4.93392 3.72666 3.88268 4.90625 3.20164L4.34375 2.22852C2.94968 3.03338 1.86015 4.27576 1.24413 5.76295C0.628116 7.25015 0.520041 8.89906 0.93667 10.4539C1.3533 12.0088 2.27135 13.3828 3.54844 14.3627C4.82552 15.3427 6.39027 15.8738 8 15.8738C9.60974 15.8738 11.1745 15.3427 12.4516 14.3627C13.7287 13.3828 14.6467 12.0088 15.0633 10.4539C15.48 8.89906 15.3719 7.25015 14.7559 5.76295C14.1399 4.27576 13.0503 3.03338 11.6563 2.22852Z" fill="white"/>
                            <path d="M7.4375 0.125H8.5625V8H7.4375V0.125Z" fill="white"/>
                            </svg>
                            <span
                            class="hide-menu"style="padding-left: 23px;">Logout</span></a></li>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br> 
                            <br>
                            <br>
                            <br>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px; width: 128px;">
                    <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps-scrollbar-y-rail" style="top: 0px; height: 268px; right: 3px;">
                    <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 39px;"></div>
                </div>
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper" id="main">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>           
                <div class="align-self-center">                       
                    <h3 class="page-title" style="font-family: Ubuntu;font-size: 30px;font-style: normal;font-family: Ubuntu;font-weight: 500;color:#0A0E69;padding-left:200px;">  Nigeria Business Visa on Arrival   </h3>  
                    <p style="padding-top: 30px;padding-left:304px;font-family: Ubuntu;font-size: 24px;font-style: normal;font-weight: 500; color:#0A0E69;">Fill the Form Below</p>   
                    <p style="font-family: Ubuntu;font-size: 18px;font-style: normal;font-weight: 400;padding-top:12px;padding-left:323px;color:#0A0E69;">Your personal details</p>                                          
                </div>
                <form action="../handlers/form_handler.php" method="post" data-form style="padding-left: 121px;">
                    <div class="form-body">
                        <select class="form-select" name="title" style="color: #5A5A5A;border: 1px solid #555555; width:586px; height: 44px; margin-top:47px"
                    aria-label="Default select example">
                    <option selected>Title</option>
                    <?php foreach($titles as $title): ?>
                        <option value="<?= $title ?>"><?= $title ?></option>
                    <?php endforeach; ?>
                  </select>
                  <p style="padding-top:19px; color: #C8730F;font-family: Ubuntu;
                  font-size: 13px;
                  font-style: normal;
                  font-weight: 400;
                 
                  ">Your name must be entered in English as it appears on your passport.</p>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input name="firstname" type="text" style="width:227px; height:43px;border:1px solid #555555;font-size: 13px;" class="form-control" placeholder="First Name (as on passport)">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input name="middlename" type="text" style="width:227px;height:43px;border:1px solid #555555;font-size: 13px;" class="form-control" placeholder="Middle Name (as on passport)">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="hidden" name="service" value="srvs-002">
                                    <input name="lastname" type="text" style="width:227px;height:43px;border:1px solid #555555;font-size: 13px;" class="form-control" placeholder="Last Name (as on passport)">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="dob"  style="width:227px; height:43px;border:1px solid #555555;font-size: 13px;" class="form-control" placeholder="Date of birth">
                                </div>
                            </div>
                            <div class="col-md-1">
                               
                            </div>
                            <div class="col-md-6">
                                <label>Gender</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" value="male" class="custom-control-input" id="customControlValidation2"
                                            name="gender">
                                        <label class="custom-control-label" for="customControlValidation2">Male</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" value="female" class="custom-control-input" id="customControlValidation3"
                                            name="gender">
                                        <label class="custom-control-label" for="customControlValidation3">Female</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input name="email" value="<?= $LOGGED_USER['email']; ?>"type="text" style="width:307px; height:43px;border:1px solid #555555;font-size: 13px;" class="form-control" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input name="passport" type="text" style="width:307px;height:43px;border:1px solid #555555;font-size: 13px;" class="form-control" placeholder="Passport No">
                                </div>
                            </div>                            
                        </div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-4">
                                <select class="form-select" name="countryCode" style="color: #5A5A5A;border: 1px solid #555555; width:303px; height: 44px;"
                                aria-label="Default select example">
                                <option selected>Country code</option>
                                <option value="+1">USA</option>
                                <option value="+234">Nigeria</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" name="nbv" value="">
                                    <input name="phone" type="text" style="width:307px;height:43px;border:1px solid #555555;font-size: 13px;" class="form-control" placeholder="Mobile number">
                                </div>
                            </div>                            
                        </div>
                        <p style="height: 16px;padding-top: 27px;font-family: Ubuntu;font-size: 14px;font-style: normal;font-weight: 400;">Please select below your Nationality (as on passport)</p>
                        <select name="country" class="form-select" style="border: 1px solid #555555; width:502px; height: 44px; margin-top:27px;color: #5A5A5A;"
                    aria-label="Default select example">
                    <option selected>Select Country</option>
                    <?php foreach ($country_fee as $key => $value): ?>
                        <option value="<?= $key ?>"><?= $key ?></option>
                    <?php endforeach; ?>
                  </select>
                    </div>
                    <div style="margin-top: 62px; margin-bottom: 204px;">
                        <button data-btn type="button" class="btn" style="background-color: #A0BD1C; width: 157px; height: 44px;font-family: Ubuntu;color:#ffffff;font-size: 14px;font-style: normal;font-weight: 400;">Proceed to Payment</button>
                    </div>
                  
                </form>
        </div>
 
    </div>
    <script>
        console.clear();
        const storedUser = localStorage.getItem("USER_REG");
        const form = document.querySelector("[data-form]")
        console.log({storedUser});
        
        if(storedUser) {
            const { email, dob, title, passport, gender, country, countryCode, firstname, middlename, lastname, service, phone} = JSON.parse(storedUser)

            form.elements.email.value = email
            form.elements.dob.value = dob
            form.elements.firstname.value = firstname
            form.elements.lastname.value = lastname
            form.elements.middlename.value = middlename
            form.elements.lastname.value = lastname
            form.elements.service.value = service
            form.elements.phone.value = phone
            form.elements.passport.value = passport
            Array.from(form.elements.title.children).filter(item => item.value == title )[0].selected = true
            Array.from(form.elements.country.children).filter(item => item.value == country )[0].selected = true
            Array.from(form.elements.countryCode.children).filter(item => item.value == countryCode )[0].selected = true
            Array.from(form.elements.gender).filter(item => item.value == gender )[0].checked = true
        }

        document.querySelector("[data-btn]")
            .addEventListener("click", () => {
                localStorage.removeItem("USER_REG")
                form.submit()
            })
    </script>
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