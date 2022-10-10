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
echo count($c)."<br>";

$nombres = ["Jairo","Marcos","Mario"];

//Bucle for
for ($i = 0; $i < count($nombres); $i++){
    echo $nombres[$i]."<br>";
}

//Bucle foreach
foreach ($nombres as $nombre){
    echo $nombre."<br>";
}

foreach ($nombres as $indice => $nombre){
    echo $indice.": ".$nombre."<br>";
}

//Ordenación

/********************  ORDENACIÓN CON SORT ***************************/
$a = array ('a' => 'textoc', 'b' => 'textoa', 'c' => 'textob');

sort($a);
var_dump($a);

/*El resultado será:
  array(3) {
  [0] => string(6) "textoa"
  [1]=> string(6) "textob"
  [2]=> string(6) "textoc"
  }
*/

/********************  ORDENACIÓN CON ASORT ***************************/
$a = array ('a' => 'textoc', 'b' => 'textoa', 'c' => 'textob');

asort($a);
var_dump($a);

/*El resultado será:
  array(3) {
  ['b'] => string(6) "textoa"
  ['c']=> string(6) "textob"
  ['a']=> string(6) "textoc"
  }
*/

/********************  ORDENACIÓN CON   MULTISORT ***************************/

//Array asociativo de Personas
$personas = [
    [
        'nombre' => 'Jairo',
        'apellido' => 'García',
        'edad' => 47
    ],
    [
        'nombre' => 'Juan',
        'apellido' => 'Palomo',
        'edad' => 22
    ],
    [
        'nombre' => 'Luís',
        'apellido' => 'Andrade',
        'edad' => 54
    ],
    [
        'nombre' => 'Alberto',
        'apellido' => 'Pérez',
        'edad' => 18
    ],
    [
        'nombre' => 'Miguel',
        'apellido' => 'Yuste',
        'edad' => 36
    ]
];

//Ordena array de personas por nombre ascendente
foreach ($personas as $key => $row){
    $nombres[$key] = $row['nombre']; //Obtengo array de nombres con los índices originales
}
array_multisort($nombres, SORT_ASC, $personas);
imprimeArray($personas);

//Ordena array de personas por apellido ascendente
foreach ($personas as $key => $row){
    $apellidos[$key] = $row['apellido']; //Obtengo array de apellidos con los índices originales
}
array_multisort($apellidos, SORT_ASC, $personas);
imprimeArray($personas);

//Ordena array de personas por edad descendente
foreach ($personas as $key => $row){
    $edades[$key] = $row['edad']; //Obtengo array de edades con los índices originales
}
array_multisort($edades, SORT_DESC, $personas);
imprimeArray($personas);