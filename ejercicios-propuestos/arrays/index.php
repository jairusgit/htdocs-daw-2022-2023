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

//Recorro el array de meses
foreach ($meses as $numMes => $nombreMes){
    //Recorro el array con los días que tiene ese mes
    for ($i = 1; $i <= $dias[$numMes]; $i++){
        $anyo[$numMes][$i] = $i." de ".$nombreMes;
    }
}

/*$array = [];
for ($i = 0; $i < 500; $i++){
    $array[$i] = $i;
}*/
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
        <p>
            <?php echo "Mi cumpleaños es el ". $anyo[6][15] ?>
        </p>
    </body>
</html>
