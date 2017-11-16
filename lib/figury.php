<?php

// Generowanie figury (długość x szerokość)

// $dlugosc = $argv[1];
// $szerokosc = $argv[2];
// $znak = $argv[3];

function rysowanie_figury()
for ($i=0; $i < $dlugosc; $i++) { 
	for ($j=1; $j < $szerokosc; $j++) {
		echo "$znak";
	}
	echo "$znak";
	echo "\n";
}