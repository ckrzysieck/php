<?php

 // Twoim zadaniem jest dla zadanego wyrazu, który wymyśliła Kasia, podanie skróconej wersji tego wyrazu. Jeśli miała zamiar napisać więcej niż dwie takie same literki obok siebie w wyrazie, to teraz napisze literkę a następnie liczbę, określającą ilość wystąpień tej literki.  http://pl.spoj.com/problems/FLAMASTE/

 $wyraz = 'ABBCCCDDDDEEEEEFGGHIIJKKKL';




foreach (count_chars($wyraz, 1) as $i => $val) {
   echo chr($i) . "$val";
}
echo "\n";