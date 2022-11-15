<?php
session_start();

//Recojo el índice del perro
$indice = filter_input(INPUT_GET,'indice',FILTER_SANITIZE_NUMBER_INT);

//Si hay índice, muestro el perro
if ($indice > -1){
    echo "El nombre del perro es ". $_SESSION['perros'][$indice]['nombre'];
}
