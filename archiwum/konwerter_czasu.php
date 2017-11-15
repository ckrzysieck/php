<?php

// konwerter jednostek czasu, przeliczający jednostki na godziny

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