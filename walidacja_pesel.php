<?php

// Pesel. Sprawdzenie, czy podana liczba 11-cyfrowa jest poprawnym PESELem. http://pl.spoj.com/problems/JPESEL/

$pesel = "4405140145";

// Przerobiony kod ze strony http://phpedia.pl/wiki/Walidacja_numeru_PESEL

if (!preg_match('/^[0-9]{11}$/',$pesel)) {	//sprawdzamy, czy dane wejściowe są jedenastoznakową liczbą
	echo "Podany ciąg ($pesel) nie ma 11 cyfr. To nie jest numer PESEL.\n";
	return false;
}
$waga = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3); // tutaj mamy kolejne wagi pierwszych dziesięciu cyfr
$suma = 0;
for ($j = 0; $j < 10; $j++) {
	$suma += $waga[$j] * $pesel[$j]; // mnożymy każdy ze znaków przez wagę i sumujemy wszystko
}
$int = 10 - $suma % 10;
$checksum = ($int == 10)?0:$int; // jeśli różnica z dzielenia sumy kontrolnej jest równa liczbie '10', za wartość uznajemy zero (0)
if ($checksum == $pesel[10]) { // sprawdzamy czy taka sama suma kontrolna jest w ciągu
	echo "Numer PESEL ($pesel) jest prawidłowy\n";
	return true;
}
echo "Numer PESEL ($pesel) jest błędny\n";
return false;