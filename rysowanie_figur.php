<?php

// Generowanie figury z konsolii (długość x szerokość) ma rysować "x" ma być z opcją wyboru znaku do rysowania

$dlugosc = $argv[1];
$szerokosc = $argv[2];
$znak = $argv[3];

for ($i=0; $i < $dlugosc; $i++) { 
	for ($j=1; $j < $szerokosc; $j++) {
		echo "$znak";
	}
	echo "$znak";
	echo "\n";
}