<?php

// Liczby pierwsze. Program do sprawdzania, czy liczba jest podana liczba jest liczbą pierwszą.

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

// Liczby pierwsze. Program do wypisywania po kolei liczby pierwszych do wartości 10000.

for ($liczba=0; $liczba < 10000; $liczba++) {  
  if ($liczba < 1) {
  // sprawdzam, czy liczba jest mniejsza niż 1, jeśli tak, to nie może być liczbą pierwszą
    } elseif ($liczba == 1) {
  // sprawdzam, czy liczba równa się 1, jeśli tak, to nie może być liczbą pierwszą
      } else {
        $pierwsza = True;
        for ($i = 2; $i < $liczba; $i++) {
          if ($pierwsza) {
            if ($liczba % $i == 0) {
              $pierwsza = False;
            }
          }
        }
      }
      if ($pierwsza) {
        echo ("$liczba jest liczbą pierwszą \n");
      } 
  }