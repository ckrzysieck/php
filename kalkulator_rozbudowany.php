<?php

// Kalkulator liczący operacje arytmetyczne: sumowanie, odejmowanie, mnożenie, dzielenie, pierwiastkowanie

$nazwaProgramu = $argv[0];
$a = $argv[1];
$akcja = $argv[2];
$b = $argv[3];
$suma = ['+','plus','suma','dodawanie','dodaj'];
$roznica = ['-','minus','roznica','różnica','odejmowanie','odejmij'];
$iloczyn = ['*','iloczyn','razy','pomnoz','pomnóż','mnozenie','mnożenie'];
$iloraz = ['/',':','iloraz','dzielenie','podziel','dziel'];
$potega = ['^','potega','potęga','potegowanie','potęgowanie'];
$pierwiastek = ['$','p','pier','sqrt','pierwiastek','pierwiastkowanie'];

if (in_array($akcja, $suma)) {
	echo $a + $b;
} else if (in_array($akcja, $roznica)) {
	echo $a - $b;
} else if (in_array($akcja, $iloczyn)) {
	echo $a * $b;	
} else if (in_array($akcja, $iloraz)) {
	if ($b == 0) {
		echo 'Nie dziel przez zero';
	} else {
		echo $a / $b;
	}
} else if (in_array($akcja, $potega)) {
	$baza = $a;
	while ($b > 1) {
		$a = $a * $baza;
		$b = $b - 1;
		}
	echo $a;
} else if (in_array($akcja, $pierwiastek)) {
	if ($b == 2) {
		echo sqrt($a);
	} else {
	echo 'Pierwiastek kwadratowy nie może zostać obliczony, pamiętaj by użyć drugiego stopnia: 2';
	}
} else {
	echo 'Operacja nie jest obsługiwana.';
}
echo "\n";