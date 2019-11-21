<?php
$dingen = array();
$vrienden =  array();
$i = 1;
echo ("Hoeveel vrienden heb je  \n");
$amount = readline();
if (is_numeric($amount)) {
    echo (var_export($amount) . " Vrienden gaan hun dromen invullen \n");
} else {
    echo (var_export($amount) . " is geen getal, vul een getal in. \n");
    exit();
}
for($i = 1; $i <= $amount; $i++){
    echo "\n Wat is je naam? \n";
    $vrienden[] = readline();
    echo "What activity would you like to add? \n";
    $dingen[] = readline();
}
foreach($dingen as $key => $value){echo $vrienden[$key] . "'s droom is \n" . $value . "\n \n";}  
?>