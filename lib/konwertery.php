<?php

// Konwerter jednostek czasu - przelicza jednostki czasu na godziny
function time_converter()
{
	switch ($jednostka) {
		case 's':
			if ('s' == $zamien) {
				echo "$a w sekundach";
				break;
			}
			if ('m'  == $zamien) {
				$wynik = $a / 60;
				echo "$wynik w minutach";
				break;
			}
			if ('g'  == $zamien) {
				$wynik = $a / 3600;
				echo "$wynik w godzinach";
				break;	
			}
		case 'm':
			if ('s' == $zamien) {
				$wynik = $a * 60;
				echo "$wynik w sekundach";
				break;
			}
			if ('m'  == $zamien) {
				echo "$a w minutach";
				break;
			}
			if ('g'  == $zamien) {
				$wynik = $a / 60;
				echo "$wynik w godzinach";
				break;	
			}
		case 'g':
			if ('s' == $zamien) {
				$wynik = $a * 3600;
				echo "$wynik w sekundach";
				break;
			}
			if ('m'  == $zamien) {
				$wynik = $a * 60;
				echo "$wynik w minutach";
				break;
			}
			if ('g'  == $zamien) {
				echo "$a w godzinach";
				break;	
			}
		default:
			echo 'Użyto nieprawidłowych jednostek czasu. Użyj [s]: dla sekund, [m]: dla minut, [g]: dla godzin';
			break;
	}
	echo "\n";	
}


// Konwerter jednostek długości - zamienia jednostki, centymetry na metry oraz kilometry na metry
function lenght_converter()
{
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
}