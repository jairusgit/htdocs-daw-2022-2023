<h1>Ejercicio 10</h1>
<p>Genera un formulario sencillo que recoja tu nombre, lo almacene en sesión y, al abrir otro archivo php
    mediante un enlace, muestre tu nombre recuperando dicha variable.</p>

<form>
    Nombre: <input type="text" name="nombre" placeholder="Introduce tu nombre">
    <input type="submit" name="guardar" value="Guardar en sesión">
</form>

<?php
    session_start();
    if (isset($_GET['guardar'])){
        $_SESSION['nombre'] = filter_input(INPUT_GET,'nombre',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
?>
<a href="ejercicio10-solucion.php" target="_blank">PIncha AQUÍ para ver el resultado</a>
