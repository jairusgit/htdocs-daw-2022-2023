<h1>Ejercicio 1</h1>
<p>
    Muestra por pantalla el texto: El comando c:\*.* no es correcto y en mi reloj son la 12 "o'clock".
</p>
<hr>

<?php
//Javi
echo "el comando c:\   \x2a.\x2a no es correcto y en mi reloj son las 12\"o 'clock\" ";

?>
<h1>Ejercicio 2</h1>
<p>
    Escribe tu nombre completo y dos apellidos en una línea.
    En la siguiente, sustituye las vocales e,i,o por los números 3,1,0, respectivamente. Si hay alguna 's',
    sustitúyela por el número '5'.
</p>
<hr>
<?php
//Edu
echo "Eduardo Aroca <br>";
$letras = ['e' => '3', 'E' => '3','i'=> '1','o'=>'0'];
echo strtr("Eduardo Aroca <br><br>", $letras);

?>
<h1>Ejercicio 3</h1>
<p>
    Escribe tu nombre completo y dos apellidos en una línea. En la siguiente, sustituye todas tildes y diéresis (si las hay) por su correspondiente vocal sin tilde ni diéresis. Si alguna 'ñ', sustitúyela por una 'n'.
</p>
<hr>
<?php
//cesar
echo " Cesar Esteban García";
$tildes = ['í' => 'i','ñ' => 'n'];
echo strtr("Cesar Estebañ García", $tildes);
?>
?>
<h1>Ejercicio 4</h1>
<p>
    Escribe una función que transforme una frase a mayúsculas
</p>
<hr>
<?php
//mateo
echo strtoupper("esto es una frase");
?>
?>
<h1>Ejercicio 5</h1>
<p>
    Escribe una función que transforme una frase a minúsculas
</p>
<hr>
<?php
//marta
$str="MUESTRA EL MENSAJE EN MINUSCULAS";
$str= strtolower($str);
echo $str;
?>
?>
<h1>Ejercicio 6</h1>
<p>
    a. Escribe una función que transforme la primera letra de una frase a mayúsculas.
    b. Modifica la anterior para que transforme la primera letra de la frase a minúsculas
</p>
<hr>
<?php
//Ivan
echo ucfirst("hola soy ivan");
echo lcfirst("Hola soy ivan");
?>

<h1>Ejercicio 7</h1>
<p>
    Escribe una función que transforme la primera letra de cada palabra de una frase a mayúsculas
</p>
<hr>
<?php
//Bachir
$frase = "desarrolo de aplicaciones web en entorno web";
echo ucwords($frase);
?>
<h1>Ejercicio 8</h1>
<p>
    Escribe una función que convierta el string 15061974 en 15/06/1974
</p>
<?php
//Pablo
echo "El número original es: ".$numero = 15061978;

$String1 = substr($numero, 0, 2);
$String2 = substr($numero, 2, 2);
$String3 = substr($numero, 4);
$fecha = $String1."/".$String2."/".$String3;

echo "<br>";

echo "La fecha a quedado de la siguiente manera: ".$fecha;
?>
<hr>
<h1>Ejercicio 9</h1>
<p>
    Escribe una función que extraiga el nombre del fichero de una ruta (Ejemplo,
    'http://www.jairogarciarincon.com/carpeta1/index.php' debe devolver 'index.php'.
</p>
<?php
//cARlOS
print_r(pathinfo("http://www.jairogarciarincon.com/carpeta1/index.php",PATHINFO_BASENAME));

$url = "http://www.jairogarciarincon.com/carpeta1/index.php";
$posicionBarra = strrpos($url,"/");
echo substr($url,$posicionBarra+1, strlen($url) - $posicionBarra);
?>
<hr>
<h1>Ejercicio 10</h1>
<p>
    Escribe una función que extraiga el nombre de usuario de una dirección de email
    (Ejemplo jairo@garciarincon.com debe devolver jairo)
</p>
<?php

$email = "jairo@garciarincon.com";
$posicionArroba = strpos($email,"@");
echo substr($email,0,$posicionArroba);
?>
<hr>
<h1>Ejercicio 11</h1>
<p>
    Escribe una función que devuelva la letra o número siguiente al introducido (Ejemplo, si la muestra es 'a',
    debe devolver 'b'. Si la muestra es '4', debe devolver '5').
</p>
<?php
    function siguiente($valor){
        $letras = range('a','z');
        $numeros = range(0,9);
        //Si está en el array de letras, devuelvo la siguiente
        if (in_array($valor,$letras) !== false){
            $i = array_search($valor,$letras);
            //Si el índice es el de la z, le digo que me devuelvo el de la a
            if ($i == count($letras) -1) return $letras[0];
            else return $letras[$i+1];
        }
        //Si está en el array de números, devuelvo el siguiente
        if (in_array($valor,$numeros) !== false){
            $i = array_search($valor,$numeros);
            //Si el índice es el del 9, le digo que me devuelvo el del 0
            if ($i == count($numeros) -1) return $numeros[0];
            else return $numeros[$i+1];
        }
        //Si no está en ninguno de los dos, devulevo un error
        return "Error";
    }

    echo siguiente('z');
?>

<hr>
<h1>Ejercicio 12</h1>
<p>
    Escribe una función que devuelva la primera palabra de una frase.
</p>
<?php
    //Con strings, sería idéntico al de la arroba
    //Con arrays
    $frase = "Mañana es festivo";
    //Array de palabras de la frase
    $palabras = explode(" ", $frase);
    echo $palabras[0];
?>
