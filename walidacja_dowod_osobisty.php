<?php

// Walidacja numeru dowodu osobistego. Program ze strony http://www.designend.net/blog-webmastera,walidacja-danych-czesc-2

$numer = 'ALV171717';
$letters = array('A'=>10,'B'=>11,'C'=>12,'D'=>13,'E'=>14,'F'=>15,'G'=>16,
                 'H'=>17,'I'=>18,'J'=>19,'K'=>20,'L'=>21,'M'=>22,'N'=>23,
                 'O'=>24,'P'=>25,'Q'=>26,'R'=>27,'S'=>28,'T'=>29,'U'=>30,
                 'V'=>31,'W'=>32,'X'=>33,'Y'=>34,'Z'=>35);

$numer = strtoupper(preg_replace("/[^A-Za-z0-9]/","",$numer)); 
//usuwamy wszystkie zbedne znaczki
if(strlen($numer) != 9){ 
//jesli dlugosc numeru dowodu jest rozna od wymaganych 9 znakow, funkcja zwraca false
    return false;
}
for($i = 0; $i < 3; $i++){ 
//kolejno sprawdzamy pierwsze trzy znaki
    if(!in_array($numer[$i],array_keys($letters))){ 
//jesli nie ma ktoregos w tablicy reprezentantow literowych, funkcja zwraca false
        return false;
    }
}
for($i = 3; $i < 9; $i++){ 
//dalej sprawdzamy, czy pozostale znaki sa numeryczne
    if(!is_numeric($numer[$i])){
        return false; 
//jesli ktorys nie jest cyfra, funkcja zwraca false
    }
}
$weights = array(7, 3, 1, 0, 7, 3, 1, 7, 3); 
//tablica wag poszczegolnych znakow
$sum = 0; //zerujemy sume kontrolna 
for($i = 0; $i < 3; $i++){ 
//dla 3 liter tworzymy sume kontrolna bedaca mnoznikami kolejnych indeksow wag i reprezentantow liczbowych dla tych liter
    $sum += $weights[$i] * $letters[$numer[$i]];
}
for($i = 4; $i < 9; $i++){ 
//kontynuujemy tworzenie sumy kontrolnej poprzez wymnozenie wag spod indeksow 4+ oraz wartosci numeru dowodu osobistego (cyfry 5-9)
    $sum += $weights[$i] * $numer[$i];
}
$int = $sum % 10; 
//z sumy kontrolnej bierzemy reszte z dzielenia przez 10 (operacja modulo)
$checksum = ($int == 10) ? 0 : $int; 
//jezeli otrzymujemy liczbe 10, za sume kontrolna przyjmujemy wartosc 0 (zero), w przeciwnym przypadku, otrzymana reszte z dzielenia
if ($checksum == $numer[3]){
	echo "Numer dowodu osobistego ($numer) jest prawidłowy\n";
    return true; 
//i wreszcie spradzamy - jesli otrzymana suma kontrolna jest rowna cyfrze kontrolnej w numerze (znak nr 4) to walidacja powiodla sie
}
echo "Numer dowodu osobistego ($numer) jest błędny\n";
return false;