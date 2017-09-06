<?php 

$a = $argv[1];
$jednostka = $argv[2];
$zamien = $argv[3];

// konwerter jednostek długości uruchamiany z konsolii, zamienia jednostki, centymetry na metry oraz kilometry na metry

switch ($jednostka) {
	case 'cm':
		$wynik = $a / 100;
		echo "$wynik metr(ów)";
		break;	
	case 'm':
		$wynik = $a;
		echo "$wynik metr(ów)";
		break;	
	case 'km':
		$wynik = $a * 1000;
		echo "$wynik metr(ów)";
		break;	
	default:
		echo 'Użyto nieprawidłowych jednostek długości. Użyj cm - dla centymetrów, km - dla kilometrów';
		break;
}
echo "\n";