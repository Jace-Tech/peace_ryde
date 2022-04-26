<?php include("../db/config.php"); ?>
<?php include("../models/User.php"); ?>
<?php include("../models/UserService.php"); ?>
<?php include("../functions/index.php") ?>

<?php  
    session_start();
     if(!isset($_SESSION["LOGGED_USER"])) header("Location: ../signin.php");

     if(isset($_SESSION["REG_MODE"])) {
        if($_SESSION["REG_MODE"] == "TWP") {
            header("Location: ./NTWPDASHFORM.php");
        }

        if($_SESSION["REG_MODE"] == "BVA") {
            header("Location: ./NBVADASHFORM.php");
        }
    }
?>


<?php  
    $users = new User($connect);
    $LOGGED_USER = json_decode($_SESSION['LOGGED_USER'], true);
    $USER_ID = $LOGGED_USER['user_id'];

    $USER = $users->get_user($USER_ID);
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
    <script src="../js/sweetalert.js"></script>
    <link href="./assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="./assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="./assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/sweetalert.js"></script>
    <link href="./dist/css/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>