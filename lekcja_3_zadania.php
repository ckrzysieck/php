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


// $dlugosc = $argv[1];
// $szerokosc = $argv[2];
// $znak = $argv[3];

// for ($i=0; $i < $dlugosc; $i++) { 
// 	for ($j=1; $j < $szerokosc; $j++) {
// 		echo "$znak";
// 	}
// 	echo "$znak";
// 	echo "\n";
// }


// Zadanie 3. http://pl.spoj.com/problems/PRIME_T/ - liczby pierwsze, sprawdzić czy są podzielne, jeśli nie, to są liczbami pierwszymi

// $liczba = $argv[1];

// if ($liczba < 1) {
//          echo ("$liczba jest mniejsza niż 1, dlatego nie może być liczbą pierwszą \n");
//          die;
//      } elseif ($liczba == 1) {
//          echo ("1 nie jest liczbą pierwszą \n");
//          die;
//        } else {
//          for ($i = 2; $i < $liczba; $i++) {
//            if ($pierwsza) {
//              if ($liczba % $i == 0) {
//              }
//            }
//          }
//       }
//       if ($pierwsza) {
//         echo ("$liczba jest liczbą pierwszą \n");
//       } else {
//         echo ("$liczba nie jest liczbą pierwszą \n");
//       }