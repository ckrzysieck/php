<?php

// Program zliczacz liter. Wprowadź słowo lub zdanie, a program ma obliczyć ile razy dana litera została użyta w tekście

$tekst = $argv [1];

foreach (count_chars($tekst, 1) as $i => $val) {
   echo "Znak " . "\"" , chr($i) , "\" " . "- ilość wystąpień: $val \n";
}