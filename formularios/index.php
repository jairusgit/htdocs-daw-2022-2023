<!--
    action es la ruta a la que debe ir el formulario al ejecutarse (al hacer submit)
    si no indico el action, la ruta es este mismo archivo
    method indica si es GET (por defecto) o POST
-->
<form action="index.php" method="GET">
    Lista: <input type="text" name="lista"/>
    Ordenar por:
    <select name="orden">
        <option value="nombre">Nombre</option>
        <option value="ciudad">Ciudad</option>
        <option value="cp">Código Postal</option>
    </select>
    Sort order:
    <select name="direccion">
        <option value="asc">Ascendente</option>
        <option value="desc">Descendente</option>
    </select>
    <!-- el type submit envía el formulario al hacer clic -->
    <input type="submit" value="Ver" name="ver"/>
</form>

<h1>Valores escogidos GET</h1>
<!-- Muestro los valores escogidos (solo si está enviado el formulario) -->
Lista: <?php
$lista = filter_input(INPUT_GET,'lista',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo $lista ?: "Ninguna"; //Si $lista tiene valor, lo muestra y si no, pone "Ninguna"


?><br>
Orden: <?php echo isset($_GET['orden']) ? $_GET['orden'] : "Ninguno" ?><br>
Dirección: <?php echo isset($_GET['direccion']) ? $_GET['direccion'] : "Ninguna" ?><br><br>

<form action="index.php" method="POST">
    <input type="hidden" name="login" value="1"/>
    Usuario: <input type="text" name="usuario"/>
    Clave: <input type="password" name="clave"/>
    <input type="submit" value="Acceder" name="acceder"/>
</form>

<form action="index.php" method="POST">
    <p>Escoge los lenguajes de programación que dominas o pretendes dominar en los próximos 12 meses</p>
    <p>
        <label><input type="checkbox" name="lenguajes[]" value="PHP"/>PHP</label>
        <label><input type="checkbox" name="lenguajes[]" value="JavaScript"/>JavaScript</label>
        <label><input type="checkbox" name="lenguajes[]" value="Java"/>Java</label>
        <input type="submit" value="Enviar" name="encuesta"/>
    </p>
</form>

<h1>Valores escogidos POST</h1>
<!-- Muestro los valores escogidos (solo si está enviado el formulario) -->
Usuario: <?php echo isset($_POST['usuario']) ? $_POST['usuario'] : "Ninguno" ?><br>
Clave: <?php echo isset($_POST['clave']) ? $_POST['clave'] : "Ninguna" ?><br><br>

<a href="index.php"><button>Reset</button></a>

<br><br>

<h1>Subida de ficheros</h1>
<form enctype="multipart/form-data" action="index.php" method="POST">
    <input type="file" name="archivo"/>
    <input type="submit" value="Subir archivo" name="subir"/>
</form>
<?php
//Si pulsa el botón de subir archivo
if (isset($_POST['subir'])){
    $archivo_recibido = $_FILES['archivo']; //Asigno a la variable $archivo_recibido el array con los datos del archivo
    $directorio_subida = 'C:/xampp/htdocs/formularios/files/'; //Ruta a la carpeta donde subir el archivo
    $archivo_subido = $directorio_subida . basename($archivo_recibido['name']); //Ruta completa del archivo a subir

    //Si se ha subido un archivo y se ha movido a la carpeta correspondiente
    if (is_uploaded_file($archivo_recibido['tmp_name']) && move_uploaded_file($archivo_recibido['tmp_name'], $archivo_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
    } else {
        echo "Se ha producido un error al subir el archivo.\n";
    }
}

?>
