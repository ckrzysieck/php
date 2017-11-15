<?php

// Kalkulator podstawowy: sumowanie, odejmowanie, iloraz, iloczyn, potęgowanie

function kalkulator_podstawowy()
{
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
		case '^':
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
	echo "\n";
}


// Kalkulator rozbudowany: sumowanie, odejmowanie, iloraz, iloczyn, potęgowanie, pierwiastkowanie
function kalkulator_rozbudowany()
{
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
}


// Pociąg z miejscowości A do B jedzie z prędkością v1, a wraca z miejscowości B do A z prędkością v2. Obliczyć średnią prędkość na całej trasie. Uwaga: Dane wejściowe będą tak dobrane, aby wynik był liczba całkowitą.
function srednia_predkosc()
{
	if ($pierwsza > 0 and $druga > 0) {
		$srednia = ($pierwsza + $druga)/2;
		echo "Średnia prędkość wynosi $srednia \n";
		die;
	}
	echo "Wprowadź prędkość większą od 0 \n";
}