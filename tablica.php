<?php

// Program 1. Inicjowanie tablicy poprzez zastosowanie funkcji array(), bez określania indeksów (http://www.teacher.webd.pl/kurs_php/k_2_0_0.php)
$liczby=array(1, 2, 5, 1.25);
echo '$liczby[0] przechowuje wartość '.$liczby[0].'<br />';
echo '$liczby[1] przechowuje wartość '.$liczby[1].'<br />';
echo '$liczby[2] przechowuje wartość '.$liczby[2].'<br />';
echo '$liczby[3] przechowuje wartość '.$liczby[3].'<br />';
echo'<pre>';
print_r($liczby);
echo'</pre>';

// Program 2. Inicjowanie tablicy poprzez zastosowanie funkcji array(), z określeniem indeksów
$liczby=array(1, 20 => 2, 10 => 5, 1.25);
echo '$liczby[0] przechowuje wartość '.$liczby[0].'<br />';
echo '$liczby[20] przechowuje wartość '.$liczby[20].'<br />';
echo '$liczby[10] przechowuje wartość '.$liczby[10].'<br />';
echo '$liczby[21] przechowuje wartość '.$liczby[21].'<br />';
echo'<pre>';
print_r($liczby);
echo'</pre>';
echo '$liczby[5] przechowuje wartość '.$liczby[5];

// Program 3. Inicjowanie tablicy asocjacyjnej poprzez zastosowanie funkcji array()
$liczby=array('pierwsza'=>1,'dwudziesta'=>2,'dziesiata'=>5,'dwudziesta_pierwsza'=>1.25);
echo '$liczby['."'pierwsza'".'] przechowuje wartość '.$liczby['pierwsza'].'<br />';
echo '$liczby['."'dwudziesta'".'] przechowuje wartość '.$liczby['dwudziesta'].'<br />';
echo '$liczby['."'dziesiata'".'] przechowuje wartość '.$liczby['dziesiata'].'<br />';
echo '$liczby['."'dwudziesta_pierwsza'".'] przechowuje wartość '
.$liczby['dwudziesta_pierwsza'].'<br />';
echo'<pre>';
print_r($liczby);
echo'</pre>';

// Program 4. Inicjowanie tablicy bez określania indeksów
$liczby[]=1;
$liczby[]=2;
$liczby[]=5;
$liczby[]=1.25;
echo '$liczby[0] przechowuje wartość '.$liczby[0].'<br />';
echo '$liczby[1] przechowuje wartość '.$liczby[1].'<br />';
echo '$liczby[2] przechowuje wartość '.$liczby[2].'<br />';
echo '$liczby[3] przechowuje wartość '.$liczby[3].'<br />';
echo'<pre>';
print_r($liczby);
echo'</pre>';

// Program 5. Inicjowanie tablicy z określeniem indeksów
$liczby[]=1;
$liczby[20]=2;
$liczby[10]=5;
$liczby[]=1.25;
echo '$liczby[0] przechowuje wartość '.$liczby[0].'<br />';
echo '$liczby[20] przechowuje wartość '.$liczby[20].'<br />';
echo '$liczby[10] przechowuje wartość '.$liczby[10].'<br />';
echo '$liczby[21] przechowuje wartość '.$liczby[21].'<br />';
echo'<pre>';
print_r($liczby);
echo'</pre>';

// Program 6. Inicjowanie tablicy asocjacyjnej poprzez zastosowanie nawiasów kwadratowych
$liczby['pierwsza']=1;
$liczby['dwudziesta']=2;
$liczby['dziesiata']=5;
$liczby['dwudziesta_pierwsza']=1.25;
echo '$liczby['."'pierwsza'".'] przechowuje wartość '.$liczby['pierwsza'].'<br />';
echo '$liczby['."'dwudziesta'".'] przechowuje wartość '.$liczby['dwudziesta'].'<br />';
echo '$liczby['."'dziesiata'".'] przechowuje wartość '.$liczby['dziesiata'].'<br />';
echo '$liczby['."'dwudziesta_pierwsza'".'] przechowuje wartość '.$liczby['dwudziesta_pierwsza'].'<br />';
echo'<pre>';
print_r($liczby);
echo'</pre>';