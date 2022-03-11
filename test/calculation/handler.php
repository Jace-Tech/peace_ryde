<?php 

// require_once("../../utils/country_fee.php");
require_once("../../functions.php");

if(isset($_POST['submit'])){
    $country = $_POST['country'];

    $result = get_total_price($country);

    print_r($result);
}