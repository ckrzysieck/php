<?php

// funkcja count() liczy elementy tablicy
// mam tablicę od 0 do 100 | fiz / biz
// $tablica = range(1, 100, 1);

// for ($i = 0; $i < count($tablica); $i++) {
// 	if ($tablica[$i]%3 == 0) {
// 		echo "fiz";
// 	}  
// 	if ($tablica[$i]%5 == 0) {
// 		echo "biz";
// 	} 
// 	if ($tablica[$i]%3 == 0 and $tablica[$i]%5 == 0) {
// 		break;
// 	}
// 	echo "\n";
// }

// Zadanie 1. Przerobić na foreach zadanie powyżej - fizbiz

// $tablica = range(1, 100, 1);

// foreach ($tablica as $key => $value) {
//  	if ($tablica[$value]%3 == 0) {
//  		echo "fiz";
//  	}  
//  	if ($tablica[$value]%5 == 0) {
//  		echo "biz";
//  	} 
//  	if ($tablica[$value]%3 == 0 and $tablica[$value]%5 == 0) {
//  		break;
//  	}
//  	echo "\n";
//  }

// Zadanie 2. Generowanie figury z konsolii (długość x szerokość) ma rysować "x" ma być z opcją wyboru znaku do rysowania

// // Zadanie 3. http://pl.spoj.com/problems/PRIME_T/ - liczby pierwsze, sprawdzić czy są podzielne, jeśli nie, to są liczbami pierwszymi