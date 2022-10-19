<form method="post">
    <label style="width:100px;display:inline-block;">Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre de la empresa"><br><br>
    <label style="width:100px;display:inline-block;">Email: </label>
    <input type="email" name="email" placeholder="Email"><br><br>
    <label style="width:100px;display:inline-block;">Contraseña: </label>
    <input type="password" name="password" placeholder="Password"><br><br>
    <label style="width:100px;display:inline-block;">Sexo: </label>
    <input type="radio" value="Hombre" name="sexo"> Hombre
    <input type="radio" value="Mujer" name="sexo"> Mujer
    <input type="radio" value="Otros" name="sexo"> Otros<br><br>
    <label style="width:100px;display:inline-block;">Idiomas: </label>
    <input type="checkbox" name="idiomas[]" value="Español"> Español
    <input type="checkbox" name="idiomas[]" value="Inglés"> Inglés
    <input type="checkbox" name="idiomas[]" value="Francés"> Francés
    <input type="checkbox" name="idiomas[]" value="Alemán"> Alemán
    <input type="checkbox" name="idiomas[]" value="Italiano"> Italiano<br><br>
    <label style="width:100px;display:inline-block;">Otros idiomas: </label>
    <input type="text" name="otros" placeholder="Otros idiomas"><br><br>
    <input type="submit" name="enviar" value="Enviar" style="width: 273px">
</form>

<?php
    if (isset($_POST['enviar'])){
        $nombre = filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sexo = filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $array = $_POST['idiomas'];
        if (count($array) == 0) $idiomas = "Ninguno";
        else{
            $idiomas = "";
            foreach ($array as $idioma){
                $idiomas .= htmlspecialchars($idioma).", "; //Filtro de saneamiento para cada idioma
            }
            $diomas = substr($idiomas,0,-2); //Quito los dos últimos caracteres para evitar la , y el espacio
        }
        $otros = filter_input(INPUT_POST,'otros',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        //Texto para el fichero
        $texto = "Nombre: ".$nombre."\n";
        $texto .= "Email: ".$email."\n";
        $texto .= "Password: ".$password."\n";
        $texto .= "Sexo: ".$sexo."\n";
        $texto .= "Idiomas: ".$idiomas."\n";
        $texto .= "Otros idiomas: ".$otros."\n";

        //Escritura en fichero
        $fichero = fopen("datos.txt",'a');
        fwrite($fichero,$texto);
        fclose($fichero);
?>
        <h2>Datos recogidos</h2>
        <label style="width:100px;display:inline-block;">Nombre: </label> <?php echo $nombre ?><br>
        <label style="width:100px;display:inline-block;">Email: </label> <?php echo $email ?><br>
        <label style="width:100px;display:inline-block;">Password: </label> <?php echo $password ?><br>
        <label style="width:100px;display:inline-block;">Sexo: </label> <?php echo $sexo ?><br>
        <label style="width:100px;display:inline-block;">Idiomas: </label> <?php echo $idiomas ?><br>
        <label style="width:100px;display:inline-block;">Otros idiomas: </label> <?php echo $otros ?><br>
        <label style="width:100px;display:inline-block;">Descargar: </label>
        <a href="datos.txt" title="Descargar fichero" download>Enlace de descarga</a>

    <?php } ?>


