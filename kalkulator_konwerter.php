<?php 

// kalkulator ma reagować na więcej słów (skróty suma, sum, sumowanie)
// wykorzystać funkcję in_array () - dokumentacja na stronie php 
// stworzyć osobny plik php, który będzie konwerterem (osobne narzędzie), ma zamieniać jednostki związane z długością (metry na kilomentry) i czasem (sekundy na minuty / dni na lata)
// ma uruchamiać się z konsoli
// dodać możliwość wykonywania w kalkulatorze opcję wykonywania operacji przez użycie np. "+", czyli 2 + 3

$a = $argv[2];
$b = $argv[3];




$akcja = array("Mac", "NT", "Irix", "Linux");
if (in_array("suma", $os)) {
    echo $a + $b;
}
if (in_array("mac", $os)) {
    echo "Znaleziono mac";
}
