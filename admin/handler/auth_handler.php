<?php 
require("../addons/crsf_auth.php");

require("../../functions/index.php");
require("../../db/config.php");
require("../../models/Admin.php");
require("../../setup.php");

$admin_model = new Admin($connect);
extract($SET_UP);

if(isset($_POST['register'])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $name = filter_field($_POST['name']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user = [
        'email' => $email,
        'name' => $name,
        'password' => $password,
        'type' => 'HIGH'
    ];

    $response = $admin_model->addAdmin($user);

    if($response){
        $alert = [
            'alert_message' => "Registeration Successful",
            'alert_type' => 'success'
        ];

        $subject = "REGISTRATION";
        $message = "<h2>Hi $name,</h2>";
        $message .= "<p>You've been successfully added as a sub admin at $APP_NAME</p>";
        $message .= "<p>Your default password is $password </p>";

        sendMail($subject, $message, $EMAIL_ADDRESS, $email);

        session_start();
        $_SESSION['alert'] = json_encode($alert);
        header('location: ../index.php');
    }
    else{
        $alert = [
            'alert_message' => "Something went wrong, please try again.",
            'alert_type' => 'error'
        ];
        session_start();
        $_SESSION['alert'] = json_encode($alert);
        header('location: ../signup.php');
    }
}

if(isset($_POST['login'])) {
    // print_r($_POST);
    extract($_POST);

    $credientials = [
        'email' => $email,
        'password' => $password
    ];

    $response = $admin_model->loginAdmin($credientials);
    extract($response);

    if($status !== 'success'){
        $alert = [
            'alert_message' => "Incorrect Login Credientials",
            'alert_type' => 'error'
        ];

        session_start();
        $_SESSION['alert'] = json_encode($alert);
        
        header('Location: ../index.php');
        exit();
    }

    $alert = [
        'alert_message' => $message,
        'alert_type' => 'success'
    ];

    $time = time() + getWeekTime(1);
    $token = "tok-" . rand(10000000, 1000000000);

    setcookie("LOGGED_USER", json_encode($user), $time, '/');
    setcookie("CRSF_TOKEN", $token, $time, '/');

    session_start();
    $_SESSION['alert'] = json_encode($alert);
    header('Location: ../dashboard.php');
}