<?php

// program oblicza największy wspólny dzielnik liczb a i b

$a = $argv [1];
$b = $argv [2];

if ($a==$b) {
	echo "Największy wspólny dzielnik to: $a";
	} 	
	elseif ($a < 1 or $b < 1) {
	echo "Podaj liczby naturalne";
	}
	while ($a != $b) {
		if ($a < $b) { // sprawdzamy, czy liczba b jest większa
			$nwd = $a; $a = $b; $b = $nwd;
	}
	$a = $a - $b; // odejmujemy do momentu od siebie dwie liczby, do momentu aż różnica nie będzie równa zero
}
echo "Największy wspólny dzielnik to: $a";


// for ($i=1; $i < $a; $i++) { 
// 	$dzielnik_a = $a / $i;
// 	echo $dzielnik_a;
// 	echo "\n";
// }

// for ($i=1; $i < $a; $i++) { 
// 	$dzielnik_a = $a / $i;
// 	echo $dzielnik_a;
// 	echo "\n";
// }