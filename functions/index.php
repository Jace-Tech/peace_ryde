<?php 

require_once("../utils/country_fee.php");

function get_visa_price($country) {
    global $country_fee;

    if($country){
        return $country_fee[strtolower($country)];
    }
    return null;
}

function get_total_price($country) {
    $FREE_BIOMETRIC = ['usa'];
    $visa_price = get_visa_price($country);
    
    if(!$visa_price) return;
    
    $fees_total = 0;
    
    if(array_search($country, $FREE_BIOMETRIC)){
        $fees_total = $visa_price + ADMIN_PORTAL_FEE + IMMIGRATION_FEE;
    }
    else{
        $fees_total = $visa_price + BIOMETRICS_FEE + ADMIN_PORTAL_FEE + IMMIGRATION_FEE;
    }
    
    $taxes = ($fees_total * (VAT + TAX_US)) / 100;
    $total_price = $fees_total + $taxes;
    
    return $total_price;
}


