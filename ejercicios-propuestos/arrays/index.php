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

//Array para el ejercicio 3 */
$ejercicio3 = [];
for ($i = 0; $i <= 100; $i++){
    $ejercicio3[$i] = $i;
}
$indice1 = rand(0,100); //Entero aleatorio entre 0 y 100 incluidos
$indice2 = rand(0,100);
$indice3 = rand(0,100);

$num1 = $ejercicio3[$indice1];
$num2 = $ejercicio3[$indice2];
$num3 = $ejercicio3[$indice3];

$media = ($num1 + $num2 + $num3) / 3;

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
        <hr>
        <h1>Ejercicio propuesto 2</h1>
        <p>
            Crea una función que muestre en pantalla una tabla con el contenido del array superglobal de PHP $_SERVER,
            incluyendo el significado de cada índice.
        </p>
        <hr>
        <table>
            <tr>
                <th>Índice</th>
                <th>Valor</th>
            </tr>
            <?php foreach ($_SERVER as $indice => $valor){ ?>
                <tr>
                    <td><?php echo $indice ?></td>
                    <td><?php echo $valor ?></td>
                </tr>
            <?php } ?>
        </table>
        <hr>
        <hr>
        <h1>Ejercicio propuesto 3</h1>
        <p>
            Crea una función que, dado un array de enteros de 0 a 100, extraiga 3 elementos al azar y devuelva la media
            de ellos en formato "La media de num1, num2 y num3 es resultado".
        </p>
        <hr>
        <p>
            <?php echo "La media de $num1, $num2 y $num3 es $media" ?>
        </p>
    </body>
</html>
