<?php
session_start();

//Recupero variables de eliminación
$accion = filter_input(INPUT_GET, 'accion', FILTER_SANITIZE_SPECIAL_CHARS);
$indice = filter_input(INPUT_GET,'indice',FILTER_SANITIZE_NUMBER_INT);

if ($accion == 'eliminar' && $indice > -1){
    //Borro ese elemento del array
    unset($_SESSION['perros'][$indice]);
}

if ($accion == 'restaurar'){
    //Borro todo el array para que se vuelva a generar
    unset($_SESSION['perros']);
}

//Si no existe el arraya de perros en la sesión, lo creo
if (!isset($_SESSION['perros'])){

    $_SESSION['perros'] = [
        ['nombre' => 'Curro', 'raza' => 'Chucho', 'dueño' => 'Jairo', 'edad' => 10, 'imagen' => 'perro1.png'],
        ['nombre' => 'Toby', 'raza' => 'Pastor Alemán', 'dueño' => 'María', 'edad' => 5, 'imagen' => 'perro2.png'],
        ['nombre' => 'Chispa', 'raza' => 'Caniche', 'dueño' => 'Andrea', 'edad' => 3, 'imagen' => 'perro3.png'],
    ];

}

//Recupero variables de orden
$orden = filter_input(INPUT_GET, 'orden', FILTER_SANITIZE_SPECIAL_CHARS);
$direccion = filter_input(INPUT_GET, 'direccion', FILTER_SANITIZE_SPECIAL_CHARS);

if ($orden && $direccion){
    //Ordena array de perros por una calumna y una dirección dadas
    foreach ($_SESSION['perros'] as $key => $row){
        $array[$key] = $row[$orden]; //Obtengo array de la columna con los índices originales
    }
    $dir = ($direccion == 'ascendente') ? SORT_ASC : SORT_DESC; //Decido si la direccióne s ascendente o descendente
    array_multisort($array, $dir, $_SESSION['perros']); //Ordeno el array
}

?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Listado de perros</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Listado de perros</h1>
        <h2><a href="index.php">Resetear orden</a></h2>
        <h2><a href="index.php?accion=restaurar">Resetear sesión</a></h2>
        <ul class="titulo">
            <li>Imagen</li>
            <li>
                Nombre
                <a href="index.php?orden=nombre&direccion=ascendente">A</a>
                <a href="index.php?orden=nombre&direccion=descendente">D</a>
            </li>
            <li>Raza</li>
            <li>Dueño</li>
            <li>
                Edad
                <a href="index.php?orden=edad&direccion=ascendente">A</a>
                <a href="index.php?orden=edad&direccion=descendente">D</a>
            </li>
            <li>Acciones</li>
        </ul>
        <?php foreach ($_SESSION['perros'] as $indice => $perro){ ?>
            <ul>
                <li><img src="img/<?php echo $perro['imagen'] ?>" alt="Imagen de un perro"></li>
                <li><?php echo $perro['nombre'] ?></li>
                <li><?php echo $perro['raza'] ?></li>
                <li><?php echo $perro['dueño'] ?></li>
                <li><?php echo $perro['edad'] ?></li>
                <li>
                    <a href="ver.php?indice=<?php echo $indice ?>" target="_blank">Ver perro</a>
                    <a href="index.php?accion=eliminar&indice=<?php echo $indice ?>">Eliminar perro</a>
                </li>
            </ul>
        <?php } ?>
    </body>
</html>
