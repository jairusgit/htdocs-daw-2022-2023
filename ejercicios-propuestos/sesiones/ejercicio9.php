<h1>Ejercicio 9</h1>
<p>Añade un formulario sencillo que permita borrar la cookie y recargar la página.</p>

<?php
//Si quiere borrar la cookie (ha pulsado el botón)
if (isset($_GET['borrar'])){
    //Borrar la cookie
    setcookie("micookie","",-1);
    //Recargar la página
    header("Location:ejercicio9.php");
}

//Si no existe la cookie, la creo
if (!isset($_COOKIE['micookie'])){
    //Setear una cookie por un día
    setcookie("micookie", "Hola, soy tu cookie amiga por 1 día", time() + 24*60*60); //Almacena la cookie 1 día
}
//Si existe, muestro el formulario
else{
    echo "La cookie ya existe. Pulsa en el botón para borrarla y crearla de nuevo.";
?>
    <form>
        <input type="submit" name="borrar" value="Borrar Cookie">
    </form>
<?php } ?>


<p>Por favor <a href="ejercicio9.php">RECARGA LA PÁGINA HACIENDO CLIC AQUÍ</a></p>

