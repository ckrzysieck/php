<?php

// dodać możliwość wykonywania w kalkulatorze opcję wykonywania operacji przez użycie np. "+", czyli 2 + 3, dla pozostałych operacji arytmetycznych, także

$nazwaProgramu = $argv[0];
$a = $argv[1];
$akcja = $argv[2];
$b = $argv[3];

// Kalkulator

if ('suma' == $akcja || '+' == $akcja) {
	echo $a + $b;
} else if ('iloczyn' == $akcja || '*' == $akcja) {
	echo $a * $b;
} else if ('minus' == $akcja || '-' == $akcja) {
	echo $a - $b;	
} else if ('iloraz' == $akcja || ':' == $akcja || '/' == $akcja) {
	if ($b == 0) {
		echo 'nie dziel przez zero';
	} else {
		echo $a / $b;
	}
} else if ('potega' == $akcja || '^' == $akcja) {
	$baza = $a;
	while ($b > 1) {
		$a = $a * $baza;
		$b = $b - 1;
		}
	echo $a;
} else {
	echo 'Operacja nie jest obsługiwana';
}
echo "\n";