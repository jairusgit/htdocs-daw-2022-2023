<h1>Mi primera página en PHP</h1>
<!-- Esto es un comentario de HTML -->
<?php
# Esto también es un comentario
//Esto es un comentario de una línea
/*
 * Esto es uno de varias líneas
 */
$nombre = "Jairo";
$numero = 7;
$enlace = "https://www.google.es";
$texto = "Enlace a Google";

?>

<strong><?php echo "Me llamo $nombre y mi número es el $numero" ?></strong><br>
<strong><?php echo 'Me llamo '.$nombre.' y mi número es el '.$numero ?></strong><br>
<a href="https://www.google.es" target="_blank">Enlace a Google</a><br>
<a href="<?php echo $enlace ?>" target="_blank"><?php echo $texto ?></a>


<?php

$num1 = 1;
$num2 = 2;

if ($num1 > $num2){
    echo "1 es mayor 2";
}
else if ($num1 < $num2){
    echo "2 es mayor que 1";
}
else{
    echo "Los dos números son iguales";
}

if ($num1 > $num2) echo "1 es mayor 2";
else if ($num1 < $num2) echo "2 es mayor que 1";
else echo "Los dos números son iguales";
echo ($num1 > $num2) ? "1 es mayor 2" : ($num1 < $num2 ? "2 es mayor que 1" : "Los dos números son iguales");

$fecha_de_nacimiento = ""; //snake
$fechaDeNacimiento = ""; //camel case

$num3 = 3;
$num4 = 4;

?>
<p>¿Es 3 mayor que 4?</p>
<?php
    if ($num3 > $num4){
        echo "Si";
    }
    else{
        echo "No";
    }

echo ($num3 > $num4) ? "Si" : "No";

$diaSemana = 5;
switch ($diaSemana){
    case 1: echo "Hoy es lunes";
            break;
    //Etc, etc hasta el domingo
    case 7: echo "Hoy es domingo";
            break;
    default: echo "No es un día válido";
}

$nombre = "Jairo";
$miNombre = $nombre ?: "Sin nombre";
echo "Mi nombre es: $miNombre";

$nombre = false;
$miNombre = $nombre2 ?? "Sin nombre";
echo "Mi nombre es: $miNombre";

$i = 0;
while ($i < 10){
    echo ++$i;
}

for ($i = 0; $i < 10; $i++):
    echo $i;
endfor;

//Es un array de 3 elementos, cuyos índices van 0, 1 y 2
$frutas = array('peras','manzanas','uvas');
echo $frutas[1]."<br>"; // manzanas

//Es otro array de 3 elementos, cuyos índices van 0, 1 y 2
$verduras = ['judías','lechugas','tomates'];
echo $verduras[2]; //tomates

//Días de semana del 0 al 6
$dias = ['L','M','X','J','V','S','D'];
echo $dias[3]; //J

//Días de semana del 1 al 7
$diasDesde1 = [1 => 'L','M','X','J','V','S','D'];
echo $diasDesde1[3]; //X

for ($i = 0; $i < count($dias); $i++){
    echo $dias[$i]; //LMXJVSD
}

foreach ($dias as $dia){
    echo $dia; //LMXJVSD
}

foreach ($dias as $indice => $dia){
    echo "$indice:$dia-"; //0:L-1:M-2:X- etc.
}

//FUNCIONES

function diHola(){

    echo "Hola desde la función";

}


diHola();

function diAlgo($algo){
    echo $algo;
}
diAlgo("Hola de nuevo");

function multiplicaPorDos($numero){
    return $numero * 2;
}

$resultado = multiplicaPorDos(7); //14

echo "<br><br>";

function devuelveNombreCompleto($nombre,$apellido1,$apellido2=null){
    if ($apellido2){
        echo "Tu nombre es $nombre y tus apellidos son $apellido1 $apellido2";
    }
    else{
        echo "Tu nombre es $nombre y tu apellido es $apellido1";
    }
}

devuelveNombreCompleto("Jairo","García","Rincón");
echo "<br><br>";
devuelveNombreCompleto("Jairo","García");
echo "<br><br>";

//Ámbito de variables
$var1 = 1;

function devuelveVariable(){
    global $var2;
    $var2 = 5;
}
