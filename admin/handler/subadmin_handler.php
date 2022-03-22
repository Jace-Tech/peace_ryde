<?php 

require("../addons/crsf_auth.php");
require_once("../../db/config.php");
require_once("../../functions/index.php");
require_once("../../models/Admin.php");

$admin = new Admin($connect);

if(isset($_POST['addAdmin'])){
    $name = filter_field($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $country = filter_var_array($_POST['country'], FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $services = filter_field($_POST['service']);
    $admin_id = $admin->generate_id();

    $user = [
        'name' => $name,
        'countries' => $country,
        'services' => $services,
        'password' => $password,
        'admin_id' => $admin_id,
        'status' => "active",
        'type' => "LOW",
        'email' => $email
    ];

    $admin_result = $admin->addAdmin($user);

    if($admin_result) {
        $subadmin = $admin->addSubAdmin($user);

        if($subadmin) {
            $alert = [
                'alert_type' => 'success',
                'alert_message' => "Admin Created Successfully"
            ];

            session_start();
            $_SESSION['alert'] = json_encode($alert);
            header('Location: ../subadmins.php');
        }
    }

}

if(isset($_POST['deleteAdmin'])){
    $admin_id = $_POST['admin'];
    $result = $admin->deleteAdmin($admin_id);

    if(!$result){
        $alert = [
            'alert_message' => "Something went wrong. Please try again",
            'alert_type' => 'error'
        ];

        session_start();
        $_SESSION['alert'] = json_encode($alert);

        header('Location: ../subadmins.php');
    }
    
    $alert = [
        'alert_message' => "Admin deleted successfully",
        'alert_type' => 'success'
    ];

    session_start();
    $_SESSION['alert'] = json_encode($alert);

    header('Location: ../subadmins.php');
}