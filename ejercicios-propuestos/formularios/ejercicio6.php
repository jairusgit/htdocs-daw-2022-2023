<form enctype="multipart/form-data" method="POST">
    <input type="file" name="imagen" accept="image/*"/>
    <input type="submit" value="Subir imagen" name="subir"/>
</form>
<?php
//Si pulsa el botón de subir archivo
if (isset($_POST['subir'])){
    $imagen_recibida = $_FILES['imagen']; //Asigno a la variable $archivo_recibido el array con los datos del archivo
    $mime = mime_content_type($imagen_recibida['tmp_name']);
    //Compruebo que es una imagen (si los 5 primeros caracteres son "image")
    if (substr($mime,0,5) == "image"){
        $directorio_subida = 'C:/xampp/htdocs/ejercicios-propuestos/formularios/img/'; //Ruta a la carpeta donde subir el archivo
        $nombre = "imagen-".random_int(10000,99999);
        $extension = pathinfo($imagen_recibida['name'], PATHINFO_EXTENSION);

        $archivo_subido = $directorio_subida.$nombre.".".$extension; //Ruta completa del archivo a subir

        //Si se ha subido un archivo y se ha movido a la carpeta correspondiente
        if (is_uploaded_file($imagen_recibida['tmp_name']) && move_uploaded_file($imagen_recibida['tmp_name'], $archivo_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "Se ha producido un error al subir el archivo.\n";
        }
    }
    else echo "El fichero no es una imagen";


}

?>
