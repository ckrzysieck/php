<?php

// http://pl.spoj.com/problems/PRIME_T/ - liczby pierwsze, sprawdzić czy są podzielne, jeśli nie, to są liczbami pierwszymi

$liczba = $argv[1];

if ($liczba < 1) {
         echo ("$liczba jest mniejsza niż 1, dlatego nie może być liczbą pierwszą \n");
         die;
     } elseif ($liczba == 1) {
         echo ("1 nie jest liczbą pierwszą \n");
         die;
       } else {
         for ($i = 2; $i < $liczba; $i++) {
           if ($pierwsza) {
             if ($liczba % $i == 0) {
             }
           }
         }
      }
      if ($pierwsza) {
        echo ("$liczba jest liczbą pierwszą \n");
      } else {
        echo ("$liczba nie jest liczbą pierwszą \n");
      }