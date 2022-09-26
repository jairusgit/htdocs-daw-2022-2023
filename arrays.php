<?php
$a = array (10, 20, 30); //$a[0] = 10
$a[] = 40; //Índice 3


$a = array ('a' => 10, 'b' => 20, 'cee' => 30); //$a['b'] = 20;
$a[] = 40; //Índice 0


$a = array (5 => 1, 3 => 2, 1 => 3); //$a[3] = 2
$a[] = 7; //Ìndice 6

$b = [7,3,4];

//Función que imprime un array
function imprimeArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}



$c = array ('a' => 10, 'b' => 20, 'cee' => 30);
imprimeArray($c);