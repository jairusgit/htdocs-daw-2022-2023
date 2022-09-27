<?php
//Función que imprime un array
function imprimeArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

//Arrays de partida
$meses = [1 => 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
$dias = [1 => 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$anyo = [];

?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicios arrays</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Ejercicio propuesto 1</h1>
        <p>
            Desarrolla un array multidimensional que incluya todos los días del año de modo que se pueda acceder a
            cada elemento en la forma $array[6][15] y un echo devuelva "15 de Junio".
        </p>
        <hr>
    </body>
</html>
