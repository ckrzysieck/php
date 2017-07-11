<?php

// [x] suma
// [] mnożył
// [] odejmował
// [] dzielenie
// [] potęgowanie

// Zmienna systemowa "$argv", w której można umieścić parametry w konsoli
// print_r($argv);

$nazwaProgramu = $argv[0];
$akcja = $argv[2];
$a = $argv[1];
$b = $argv[3];

// Kalkulator 
switch ($akcja) {
	case 'suma':
		echo $a + $b;
		break;
	case 'odejmowanie':
		echo $a - $b;
		break;
	case 'iloraz':
		if ($b == 0) {
			echo 'nie dziel przez zero';
			break;
		}
		echo $a / $b;
		break;
	case 'iloczyn':
		echo $a * $b;
		break;
	case 'potegowanie':
		$baza = $a;
		while ($b > 1) {
			$a = $a * $baza;
			$b = $b - 1;
		}
		echo $a;
		break;
	default:
		echo 'błąd, musisz wykupić lincencje:)';
		break;
}

/*
if (2 == 7) {
	echo "prawda";
} else {
	echo "nie prawda";
}
*/

/*
// Kalkulator
if ('suma' == $akcja) {
	echo $a + $b;
} else if ('iloczyn' == $akcja) {
	echo $a * $b;
} else if ('minus' == $akcja) {
	echo $a - $b;	
} else if ('iloraz' == $akcja) {
	if ($b == 0) {
		echo 'nie dziel przez zero';
	} else {
		echo $a / $b;
	}
} else if ('potęga' == $akcja) {
	echo 'operacja dostępna wkrótce';	
} else {
	echo 'operacja nie jest obsługiwana';
}
echo "\n";
*/

/*
// Operatory logiczne / porównania

2 == 3  // false - sprawdzenie
2 === 3 // false - bardzo dokładne sprawdzenie, sprawdzany jest też typ wartości

2 <= 3  // true
2 >= 3  // false

2 < 3   // true
2 > 3   // false
|| - or     // warunek lub
&& - and     // warunek oraz / i
++
--
*=
+=
-=
%=

*=  //

*/

//die('Wykup pełną wersję');