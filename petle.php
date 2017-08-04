<?php

// program pętle - wypisanie w konsoli dupy od 1 do 10

// pętla for
/*for ($i=1; $i < 11; $i++) { 
	echo "dupa $i";
	echo "\n";
}*/
/*$i=0;

// pętla while
while ($i < 10) {
	$i++;
	echo "dupa $i";
	echo "\n";
}*/

// pętla do while
/*$i=0;
do {
	$i++;
	echo "dupa $i";
	echo "\n";
} while ( $i < 10);*/

// $tablica = [
// 	'du1' => 'dupa1',
// 	'du2' => 'dupa2',
// 	'du3' => 'dupa3',
// 	'du4' => 'dupa4',
// 	'du5' => 'dupa5',
// 	'du6' => 'dupa6',
// 	'du7' => 'dupa7',
// 	'du8' => 'dupa8',
// 	'du9' => 'dupa9',
// 	'du10' => 'dupa10',
// ];

// foreach ($tablica as $key => $value) {
// 	echo $tablica[$key] . "\n";

// 	// echo $value . "\n";
// }


/*$tablica = [
	'pa1' => 'du',
	'pa2' => 'du',
	'pa3' => 'du',
	'pa4' => 'du',
	'pa5' => 'du',
	'pa6' => 'du',
	'pa7' => 'du',
	'pa8' => 'du',
	'pa9' => 'du',
	'pa10' => 'du',
]; 
$a=0;
// 
foreach ($tablica as $value) {
	echo $value . 'pa' . ++$a . "\n";
}	
*/
// w pętli for wypisać 3 ostatnie elementy

// $tablica = [
// 	'dupa1',
// 	'dupa2',
// 	'dupa3',
// 	'dupa4',
// 	'dupa5',
// 	'dupa6',
// 	'dupa7',
// 	'dupa8',
// 	'dupa9',
// 	'dupa10',
// ];

// //gvhihvybh

// for ($i=7; $i < 10; $i++) { 
//  	echo $tablica[$i] . "\n";
//  } 

 // liczby przechowywane w tablicy

$tablica = range(0, 15, 1);

// $tablica = [
// '0',
// '1',
// '2',
// '3',
// '4',
// '5',
// '6',
// '7',
// '8',
// '9',
// '10',
// '11',
// '12',
// '13',
// '14',
// '15',
// ];
 
// foreach ($tablica as $key => $value) {
//  	echo $value . "\n";
//  }


// funkcja count() liczy elementy tablicy
// mam tablicę od 0 do 100 | fiz / biz


$tablica = range(1, 100, 1);

for ($i = 0; $i < count($tablica); $i++) {
	if ($tablica[$i]%3 == 0) {
		echo "fiz";
	}  
	if ($tablica[$i]%5 == 0) {
		echo "biz";
	} 
	if ($tablica[$i]%3 == 0 and $tablica[$i]%5 == 0) {
		break;
	}
	echo "\n";
}

// Zadanie 1. Przerobić na foreach zadanie powyżej
// Zadanie 2. Generował figurę w konsolii (długość x szerokość) ma rysować "x" ma być z opcją wyboru znaku do rysowania
// Zadanie 3. http://pl.spoj.com/problems/PRIME_T/