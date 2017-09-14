<?php

// Pociąg z miejscowości A do B jedzie z prędkością v1, a wraca z miejscowości B do A z prędkością v2. Obliczyć średnią prędkość na całej trasie. Uwaga: Dane wejściowe będą tak dobrane, aby wynik był liczba całkowitą.

$pierwsza = $argv[1];
$druga = $argv[2];

if ($pierwsza > 0 and $druga > 0) {
	$srednia = ($pierwsza + $druga)/2;
	echo "Średnia prędkość wynosi $srednia \n";
	die;
}
echo "Wprowadź prędkość większą od 0 \n";