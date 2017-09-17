<?php

// Walidacja numeru REGON. REGON może być 9- lub 14-znakowy. Program ze strony http://www.designend.net/blog-webmastera,walidacja-danych-czesc-3

$regon = '931518897';

if(strlen($regon) == 9){
    $wagi = array(8, 9, 2, 3, 4, 5, 6, 7);
// wagi stosowane dla REGONów 9-znakowych
}elseif(strlen($regon) == 14){
    $wagi = array(2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8);
// wagi stosowane dla REGONów 14-znakowych
}else{
    return false;
}
$sum = 0;
for($i = 0;$i < count($wagi); $i++){
    $sum += $wagi[$i] * $regon[$i];
}
$int = $sum % 11;
// dzielnikiem dla sumy kontrolnej jest liczba 11
$checksum = ($int == 10) ? 0 : $int;
// jeśli liczba kontrolna wynosi 10, to sumą kontrolną jest zero
// w przeciwnym wypadku jest to ta sama liczba
if($checksum == $regon[count($wagi)]){
// jezeli suma kontrolna jest rowna przedostatniej cyfrze w numerze REGON
// to numerek jest poprawny
    echo "Numer REGON ($regon) jest prawidłowy\n";
    return true;
}
echo "Numer REGON ($regon) jest błędny\n";
return false;