<?php
    //Inicializo variables
    $errores = false;
    $errorNombre = "";

    //Compruebo si ha seteado el formulario
    if (isset($_GET['enviar'])){
        //Filtrado
        $nombre = filter_input(INPUT_GET,'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
        //Patrón de solo caracteres y guión TODO faltaría el espacio
        $pattern = "/[^A-Za-z-]/";
        //Validación
        if ($nombre == ""){
            $errorNombre = "El nombre no puede estar vacío. ";
            $errores = true;
        }
        if (preg_match($pattern,$nombre)){
            $errorNombre = "El nombre solo puede tener letras y el caracter -.";
            $errores = true;
        }
    }
?>
<style>
    .error{
        padding-left: 12px;
        color: red;
    }
</style>
<form>
    <label for="nombre">Nombre:</label>
    <span class="error"><?php echo $errorNombre ?></span>
    <br>
    <input type="text" name="nombre" id="nombre"/>
    <input type="submit" value="Enviar" name="enviar"/>
</form>
<?php if (isset($_GET['enviar']) && !$errores){ ?>
    <p>
        El nombre <?php echo $nombre ?> es correcto.
    </p>
<?php } ?>