<?php 

// kalkulator ma reagować na więcej słów (skróty suma, sum, sumowanie)
// wykorzystać funkcję in_array () - dokumentacja na stronie php 
// stworzyć osobny plik php, który będzie konwerterem (osobne narzędzie), ma zamieniać jednostki związane z długością (metry na kilomentry) i czasem (sekundy na minuty / dni na lata)
// ma uruchamiać się z konsoli
// dodać możliwość wykonywania w kalkulatorze opcję wykonywania operacji przez użycie np. "+", czyli 2 + 3

$a = $argv[1];
$jednostka = $argv[2];

// konwerter jednostek długości 

// switch ($jednostka) {
// 	case 'cm':
// 		$wynik = $a / 100;
// 		echo "$wynik metr(ów)";
// 		break;	
// 	case 'm':
// 		$wynik = $a;
// 		echo "$wynik metr(ów)";
// 		break;	
// 	case 'km':
// 		$wynik = $a * 1000;
// 		echo "$wynik metr(ów)";
// 		break;	
// 	default:
// 		echo 'Użyto nieprawidłowych jednostek długości. Użyj cm - dla centymetrów, km - dla kilometrów';
// 		break;
// }
// echo "\n";

// konwerter jednostek czasu, przeliczający jednostki na godziny

switch ($jednostka) {
	case 's':
		$wynik = $a / 3600;
		echo "$wynik godziny";
		break;	
	case 'm':
		$wynik = $a / 60;
		echo "$wynik godziny";
		break;	
	case 'g':
		$wynik = $a;
		echo "$wynik godziny";
		break;	
	default:
		echo 'Użyto nieprawidłowych jednostek czasu. Użyj [s]: dla sekund, [m]: dla minut';
		break;
}
echo "\n";