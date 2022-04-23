<?php 

session_start();

include("../../db/config.php");
include("../../models/Upload.php");

$uploads = new Upload($connect);

$LOGGED_USER = json_decode($_SESSION['LOGGED_USER'], true);
$USER_ID = $LOGGED_USER['user_id'];


if(isset($_POST['update'])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    $file = $_FILES['image'];
    $upload_res = $uploads->uploadFile($file, "./pic/");

    extract($POST);

    if($upload_res['status'] == 'success') {
        $upload_res = $uploads->uploadToDB($USER_ID, $upload_res['file_name'], 'PROFILE');
        if($upload_res['status'] == 'success') {
            $query = "UPDATE `users` SET `firstname` = ?, `lastname` = ?, `email` = ?, `password` = ? WHERE `user_id` = ?";
            $result = $connect->prepare($query);
            $result->execute([$firstname, $lastname, $email, md5($password), $USER_ID]);

            if($result) {
                $alert = [
                    'message' => "User Updated Successfully",
                    'status' => 'success'
                ];
                $_SESSION['ALERT'] = json_encode($alert);

                header("Location: ../account.php");               
            }
            else {
                $alert = [
                    'message' => "Something went wrong, please try again.",
                    'status' => 'error'
                ];
                $_SESSION['ALERT'] = json_encode($alert);

                header("Location: ../account.php");
            }
        }
        else {
            $alert = [
                'alert_message' => "File upload failed.",
                'alert_type' => 'error'
            ];
            $_SESSION['ALERT'] = json_encode($alert);

            header("Location: ../account.php");
        }
    }
    else {
        $alert = [
            'alert_message' => "File upload failed.",
            'alert_type' => 'error'
        ];
        $_SESSION['ALERT'] = json_encode($alert);

        header("Location: ../account.php");
    }
}