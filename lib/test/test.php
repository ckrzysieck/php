<?php

include_once 'test2.php';

// funkcja - parametr string ma wartość domyślną 'xxx'

function test($string = 'xxx') {
	echo "otrzymałem następujący ciąg znaków: $string \n";
}