<?php  

/**
 *  NULL -> FREE
 */

 define("ADMIN_PORTAL_FEE", 30);
 define("BIOMETRICS_FEE", 90);
 define("IMMIGRATION_FEE", 200);
 define("VAT", 7.5);
 define("TAX_US", 1.9914);

$country_fee = [
    'afghanistan' => null,
    'albania' => 60,
    'algeria' => 50,
    'andorra' => 68,
    'angola' => 2,
    'antigua and barbuda' => 148,
    'argentina' => 60,
    'armenia' => 60,
    'australia' => 141,
    'austria' => 88,
    'azerbaijan' => 78,
    'bahamas' => 19,
    'bahrain' => 45,
    'bangladesh' => 253,
    'barbados' => null,
    'belarus' => 68,
    'belgium' => 88,
    'belize' => 200,
    'benin' => 0,
    'bhutan' => 68,
    'bolivia' => 2,
    'bosnia and herzegovina' => 50,
    'botswana' => 114,
    'brazil' => 20,
    'brunei' => 45,
    'bulgaria' => 50,
    'burkina faso ' => 0,
    'burundi' => 100,
    'cambodia' => 68,
    'cameroon' => 3,
    'canada' => 75,
    'cape verde' => 0,
    'central african republic' => 67,
    'chad' => 3,
    'chile' => 200,
    'china' => 64,
    'colombia' => 3,
    'comoros' => 20,
    'congo' => 111,
];


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
    
    return [
        'total_price' => $total_price,
        'taxes' => $taxes,
        'fees_total' => $fees_total
    ];
}