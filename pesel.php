<?php

// Pesel. Sprawdzenie, czy podana liczba 11-cyfrowa jest poprawnym PESELem. http://pl.spoj.com/problems/JPESEL/

$pesel = 44051401458;


echo "$pesel[0] \n";









// Aby sprawdzić czy dany PESEL jest prawidłowy należy wykonać następujące działania:
// Pierwszą cyfrę mnożymy przez 1,
// drugą cyfrę mnożymy przez 3,
// trzecią cyfrę mnożymy przez 7,
// czwarta cyfrę mnożymy przez 9,
// piątą cyfrę mnożymy przez 1,
// szóstą cyfrę mnożymy przez 3,
// siódmą cyfrę mnożymy przez 7,
// ósmą cyfrę mnożymy przez 9,
// dziewiątą cyfrę mnożymy przez 1,
// dziesiątą cyfrę mnożymy przez 3,
// jedenastą cyfrę mnożymy przez 1.
// Tak uzyskane 11 iloczynów dodajemy do siebie. Jeśli ostatnia cyfra tej sumy jest zerem to podany PESEL jest prawidłowy.