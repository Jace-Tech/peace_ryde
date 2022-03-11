<?php

if(isset($_POST['logout'])){
    $time = time() - strtotime('1 week');

    setcookie("LOGGED_USER", "jdhdsdvjdsbv", $time, '/');

    $alert = [
        'alert_message' => "Logged out successfully",
        'alert_type' => 'success'
    ];
    $_SESSION['alert'] = json_encode($alert);
    header('location: ../index.php');
}