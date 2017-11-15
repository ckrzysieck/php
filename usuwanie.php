<?php


function usun($tablica, $klucz)
{
	unset ($tablica[$klucz]);
	return $tablica;
}


$tab = [
	1, 2, 3, 4, 5, 'a', 'b', 'c',
];

print_r($tab);
echo "\n";
usun($tab, 0);
usun($tab, 1);
usun($tab, 2);

print_r($tab);
echo "\n";


// print_r($tab);
// echo "\n";