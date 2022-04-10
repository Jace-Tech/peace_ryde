<?php 
session_start();

include("../db/config.php");
include("../models/User.php");
include("../utils/country_fee.php");

$users = new User($connect);

if(isset($_POST['twp_no'])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    extract($POST);

    // Generate users option
    $user = [
        "firstname" => $firstname,
        "title" => $title,
        "email" => $email,
        "lastname" => $lastname,
        "gender" => $gender,
        "middle_name" => $middlename,
        "dob" => $dob,
        "country" => $country,
        "serviceId" => $service,
        "passport" => $passport,
        "phone" => $country_code . $phone
    ];

    // Add to database
    $result = $users->add_new_user($user);

    // Generate a session with user ID
    $_SESSION['REG_NO'] = $result;

    // Get TWP Calculations
    $fees = get_total_price($country);
    $_SESSION["PRICE"] = json_encode($fees);

    // Redirect to payment page
    header('Location: ../payment.php');
    
}