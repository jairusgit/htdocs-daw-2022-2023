<?php
session_start();
//Si existe la variable, muestro su valor
if (isset($_SESSION['nombre'])){
    echo "El valor de nombre es ".$_SESSION['nombre'];
}
//Si no existe, lo digo
else{
    echo "La variable nombre no existe en la sesión";
}
