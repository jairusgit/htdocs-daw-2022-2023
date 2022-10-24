<h1>Ejercicio 8</h1>
<p>Genera un script con una cookie llamada micookie y con el texto Hola, soy tu cookie amiga por 1 día
    que dure exactamente 1 día, de modo que al arrancar el script se cree y te diga que recargues la
    página y que al recargar o si cierras el navegador y lo vuelves a abrir te diga que ya existe.
</p>

<?php
//Si no existe la cookie, la creo
if (!isset($_COOKIE['micookie'])){
    //Setear una cookie por un día
    setcookie("micookie", "Hola, soy tu cookie amiga por 1 día", time() + 24*60*60); //Almacena la cookie 1 día
}
?>

<p>Por favor <a href="ejercicio8.php">RECARGA LA PÁGINA HACIENDO CLIC AQUÍ</a></p>

<?php
    if (isset($_COOKIE['micookie'])){
        echo "La cookie ya existe";
    }
?>
