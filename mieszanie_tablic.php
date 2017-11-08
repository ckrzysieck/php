<?php

include_once 'lib/debug.php';

function mieszanie_tablic($tablica) {
	// $tablica = range(0,19);
	$tablica_rezultat = [];
	$ilosc = count($tablica);
	$tablica_pomocnicza = [];
	while ($ilosc != 0) {
		$tablica_pomocnicza[]=false;
		$ilosc--;
	}
	$ilosc = count($tablica);
	while ($ilosc != 0) {
		$losowy_klucz = rand(0,count($tablica)-1);
		if ($tablica_pomocnicza[$losowy_klucz] == false) {
			$tablica_rezultat[$ilosc-1] = $tablica[$losowy_klucz];
			$tablica_pomocnicza[$losowy_klucz] = true;
			$ilosc--;
			// print_r($tablica_rezultat);
			// print_r($tablica_pomocnicza);
			// sleep(2);
		}
	}
	// sort($tablica);
	// print_r($tablica);
	// print_r($tablica_rezultat);
	return $tablica_rezultat;
}

$naszatab = range(0,1045000);

// $naszatab = [
// 	1, 4, 6, 7, 9
// ];
$start = microtime(true);
debug_memory();
debug_time($start);
$naszatab = mieszanie_tablic($naszatab);
// shuffle($naszatab);
debug_memory();
debug_time($start);
// $naszatab[] = 0;

// print_r($naszatab);





