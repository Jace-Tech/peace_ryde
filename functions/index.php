<?php 

function filter_field($input, $type = 'string')
{
    $filtered_input = null; 

    switch ($type) {
        case 'email':{
            $filtered_input = filter_var($input, FILTER_SANITIZE_EMAIL);
            break;
        }
        
        default:{
            $filtered_input = htmlspecialchars(trim($input));
            break;
        }
    }

    return $filtered_input;
}


function getGreeting()
{
    $hour = intval(date('H'));
    $greeting = "Morning";

    if($hour >= 16) $greeting = "Evening";
    if($hour >= 12) $greeting = "Afternoon";

    return $greeting;

}

function formatCountryArray($country) 
{
    $countries = json_decode($country, true);
    return join(" - ", $countries);
}

function getSubName($_name)
{
    $name = explode(" ", $_name);
    if(count($name) > 1){
        return substr($name[0], 0, 1) . substr($name[1], 0, 1);
    }

    return substr($name[0], 0, 1);
}

function getLinkColor ($link) 
{
    $route = $_SERVER['PHP_SELF'];

    if(strstr($route, $link)):
        ?>
            <script> 
                let page = "<?= $link ?>"
            </script>
        <?php
    endif;
}