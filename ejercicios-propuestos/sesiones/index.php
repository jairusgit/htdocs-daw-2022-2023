<?php
//header("Location: https://jairogarciarincon.com");

//Setear una cookie por un día
//setcookie("nombre", "Jairo", time() + 10); //Almacena la cookie 1 día
//echo $_COOKIE['nombre'];

//Inicializo sesión
session_start();

//Almaceno un dato de sesión
$_SESSION['valor'] = "Un valor";

//Muestro el dato de ssión
echo $_SESSION['valor'];