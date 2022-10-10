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
        <hr>
        <h1>Ejercicio propuesto 4</h1>
        <p>
            Crea un array asociativo con los nombres y números de los meses del año e imprímelo. A continuación,
            ordénalo de forma ascendente respetando los índices según el tamaño del texto.
        </p>
        <hr>
        <p>
            <?php
                //Array original
                $meses = [1 => 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
                imprimeArray($meses);

                //Array ordenado de forma ascendente y respetando índices
                asort($meses);
                imprimeArray($meses);
            ?>
        </p>
        <hr>
        <h1>Ejercicio propuesto 5</h1>
        <p>
            Modifica el ejemplo anterior para que el orden sea descendente.
        </p>
        <hr>
        <p>
            <?php
            //Array ordenado de forma descendente y respetando índices
            arsort($meses);
            imprimeArray($meses);
            ?>
        </p>
        <hr>
        <h1>Ejercicio propuesto 6</h1>
        <p>
            Crea un array asociativo de al menos 10 productos con nombre, precio y tipo de iva (1, 2, 3 ó 4).
            Crea un array de ivas con los tipos de iva como índices y el porcentaje de iva como valores
            (0, 0.04, 0.1 y 0.21). Recorre el array de productos y muestra en pantalla el listado de productos,
            su precio sin iva, el tipo de iva y su precio con iva.
        </p>
        <hr>
        <p>
            <?php
            //Array de productos
            $productos = [
                ['nombre' => 'Leche', 'precioBruto' => 0.75, 'tipoIva' => 2],
                ['nombre' => 'Manzanas', 'precioBruto' => 1.75, 'tipoIva' => 1],
                ['nombre' => 'Cerveza', 'precioBruto' => 0.32, 'tipoIva' => 4],
                ['nombre' => 'Galletas', 'precioBruto' => 1.23, 'tipoIva' => 2],
                ['nombre' => 'Carne', 'precioBruto' => 15.23, 'tipoIva' => 1],
                ['nombre' => 'Pescado', 'precioBruto' => 43.12, 'tipoIva' => 3],
                ['nombre' => 'Café', 'precioBruto' => 2.25, 'tipoIva' => 4],
                ['nombre' => 'Magdalenas', 'precioBruto' => 1.33, 'tipoIva' => 1],
                ['nombre' => 'Lejía', 'precioBruto' => 0.27, 'tipoIva' => 3],
            ];
            //Array de ivas
            $ivas = [ 1 => 0, 0.04, 0.1, 0.21];
            ?>
        </p>
        <table class="productos">
            <tr>
                <th class="left">Id</th>
                <th class="left">Nombre</th>
                <th class="right">Precio sin IVA</th>
                <th class="right">Tipo de IVA</th>
                <th class="right">Precio con IVA</th>
            </tr>
            <?php foreach ($productos as $indice => $producto){ ?>
                <tr>
                    <td class="left"><?php echo $indice ?></td>
                    <td class="left"><?php echo $producto['nombre'] ?></td>
                    <td class="right"><?php echo $producto['precioBruto'] ?>€</td>
                    <td class="right"><?php echo $ivas[$producto['tipoIva']] * 100 ?>%</td>
                    <td class="right"><?php echo $producto['precioBruto'] * (1 + $ivas[$producto['tipoIva']]) ?>€</td>
                </tr>
            <?php } ?>
        </table>
        <h1>Ejercicio propuesto 7</h1>
        <p>
            Modifica el ejercicio anterior para que muestre los productos ordenados por nombre.
        </p>
        <?php
            //Ordena array de productos por nombre ascendente
            foreach ($productos as $key => $row){
                $nombres[$key] = $row['nombre']; //Obtengo array de nombres con los índices originales
            }
            array_multisort($nombres, SORT_ASC, $productos);
        ?>
        <hr>
        <table class="productos">
            <tr>
                <th class="left">Id</th>
                <th class="left">Nombre</th>
                <th class="right">Precio sin IVA</th>
                <th class="right">Tipo de IVA</th>
                <th class="right">Precio con IVA</th>
            </tr>
            <?php foreach ($productos as $indice => $producto){ ?>
                <tr>
                    <td class="left"><?php echo $indice ?></td>
                    <td class="left"><?php echo $producto['nombre'] ?></td>
                    <td class="right"><?php echo $producto['precioBruto'] ?>€</td>
                    <td class="right"><?php echo $ivas[$producto['tipoIva']] * 100 ?>%</td>
                    <td class="right"><?php echo $producto['precioBruto'] * (1 + $ivas[$producto['tipoIva']]) ?>€</td>
                </tr>
            <?php } ?>
        </table>
        <h1>Ejercicio propuesto 8</h1>
        <p>
            Modifica el ejercicio anterior para que muestre los productos ordenados por su precio con iva.
        </p>
        <?php
        //Recorro y añado a cada producto un nuevo índice que incluya su precio con IVA
        foreach ($productos as $indice => $producto){
            $productos[$indice]['precioIva'] = $producto['precioBruto'] * (1 + $ivas[$producto['tipoIva']]);
        }

        //Ordena array de productos por precio iva ascendente
        foreach ($productos as $key => $row){
            $preciosIva[$key] = $row['precioIva']; //Obtengo array de precios con los índices originales
        }
        array_multisort($preciosIva, SORT_ASC, $productos);
        ?>
        <hr>
        <table class="productos">
            <tr>
                <th class="left">Id</th>
                <th class="left">Nombre</th>
                <th class="right">Precio sin IVA</th>
                <th class="right">Tipo de IVA</th>
                <th class="right">Precio con IVA</th>
            </tr>
            <?php foreach ($productos as $indice => $producto){ ?>
                <tr>
                    <td class="left"><?php echo $indice ?></td>
                    <td class="left"><?php echo $producto['nombre'] ?></td>
                    <td class="right"><?php echo $producto['precioBruto'] ?>€</td>
                    <td class="right"><?php echo $ivas[$producto['tipoIva']] * 100 ?>%</td>
                    <td class="right"><?php echo $producto['precioIva'] ?>€</td>
                </tr>
            <?php } ?>
        </table>
        <h1>Ejercicio propuesto 9</h1>
        <p>
            Desarrolla un juego web que, a partir de una baraja española de mus (esto es, sin 8, 9 y 10) permita:
        </p>
        <ol>
            <li>Mostrar una carta de un palo al azar</li>
            <li>Mostrar una mano de mus de dos jugadores (4 cartas del as al rey para cada uno al azar sin que se repitan)</li>
            <li>Mostrar una mano de las anteriores y comprobar quién se llevaría el “juego” (si lo llevan).</li>
        </ol>
        <?php
            //As y Dos valen 1
            //Sota, Caballo, Rey y Tres valen 10
            //Cuatro, Cinco, Seis y Siete, valen, 4, 5, 6 y 7, respectivamente
            //Para el juego, se cuenta el valor de las 4 cartas de cada jugador y se decide quién gana según
            //el siguiente orden: 31, 32, 40, 37, 36, 35, 34 y 33
            $baraja = [];
            $palos = ['oros','copas','espadas','bastos'];
            $nombres = ['As','Dos','Tres','Cuatro','Cinco','Seis','Siete','Sota','Caballo','Rey'];
            $valores = [1, 1, 10, 4, 5, 6, 7, 10, 10, 10];
            //Recorro los palos
            foreach ($palos as $palo){
                //Recorro los nombres
                foreach ($nombres as $i => $nombre){
                    //Creo la carta con su nombre completo y su valor
                    $carta = [
                            'nombre' => $nombre. " de ".$palo,
                            'valor' => $valores[$i]
                    ];
                    //$baraja[] = $carta; //Añado la carta al array (opción 1)
                    array_push($baraja,$carta); //Añado la carta al array (opción 2)
                }
            }
            //1. Escojo una carta al azar
            $aleatoria = array_rand($baraja,1); //Me devuelve el índice aleatorio
            imprimeArray($baraja[$aleatoria]);
            //2. Mostrar las manos de mus
            shuffle($baraja); //Barajeo las cartas
            //Recorro para sacar 4 cartas para cada jugador
            $mano1 = [];
            $mano2 = [];
            for ($i = 0; $i < 4; $i++){
                $mano1[] = array_shift($baraja);
                $mano2[] = array_shift($baraja);
            }
            imprimeArray($mano1);
            imprimeArray($mano2);
            echo "Cartas restantes: ".count($baraja)."<br>"; //Cuenta las cartas que quedan en la baraja
            $juego1 = 0;
            $juego2 = 0;
            //Contabilizo el juego de cada uno sumando los valores de las cartas
            foreach ($mano1 as $carta){
                $juego1 += $carta['valor'];
            }
            foreach ($mano2 as $carta){
                $juego2 += $carta['valor'];
            }
            echo "Juego mano 1: ".$juego1."<br>";
            echo "Juego mano 2: ".$juego2."<br>";
            //Array de valores del juego (gana el de índice más bajo)
            $juego = [31,32,40,37,36,35,34,33];
            //Índices del array juego para cada mano
            $valor1 = array_search($juego1,$juego); //Devuelve el índice de $juego o false si no lo encuentra
            $valor2 = array_search($juego2,$juego); //Devuelve el índice de $juego o false si no lo encuentra
            //Decido quién gana
            if ($valor1 === false && $valor2 === false){
                echo "Ninguno tiene juego";
            }
            else if ($valor1 === false){
                echo "Gana Mano 2";
            }
            else if ($valor2 === false){
                echo "Gana Mano 1";
            }
            else if ($valor1 <= $valor2){ //Si son iguales, gana la primera mano
                echo "Gana Mano 1";
            }
            else{
                echo "Gana Mano 2";
            }
        ?>
    </body>
</html>
