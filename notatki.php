<?php

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

// //Ciągi znaków
// $a = 'napis'; 

// //Liczby całkowite
// $b = 10; 

// //Liczby zmiennoprzecinkowe
// $c = 10.5; 
// $c = .5; 

// //Wyświetlanie zmiennych
// echo $zmienna;
// //Nowa linia
// echo "\n";
// //Łączenie dwóch zmiennych
// echo $b . 5;
// //Reszta z dzielenia
// echo $b % 5;
// echo "\n";
// echo $b + 5;
// echo "\n";
// echo $b - 5;
// echo "\n";
// echo $b * 5;
// echo "\n";
// echo $b / 5;
// echo "\n";

// Nowa linia rozumiana wyłącznie w przeglądarce
// echo <pre>;
// echo </pre>;

// echo "Operator '%': 18 % 5 = " . 18 % 5;

//Na null można pracować, na Void nie. Oba są traktowane jako "nic". Void to większe "nic".
// $a = void;
$a = null;
$bool = false;
$bool = true;

// Przypisywanie zmiennej tablic
$tab = [20, 2, 'znaki', $a];
$tab = [
    'wiek' => 20, 
    'wiek' => 2, 
    'wzrost' => 'znaki', 
    $a,
];

/*
$tab[] = 20;
$tab[] = 2;
$tab[] = 'znaki';
$tab[] = $a;

echo $tab[5];

$tab[3] = 55;

$tab[55] = 155;
$tab['imie'] = 'Krzysiek';
$tab['nazwisko'] = 'Jurkiewicz';
$tab['hobby'] = [];
$tab['hobby'][] = 'rower';
*/

// Wypisuje, wyświetla zmienne tablic na ekran (podobnie jak echo)
print_r($tab);

// Usuwanie zmiennej a
unset($a);