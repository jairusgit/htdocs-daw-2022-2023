<?php
    //Mensaje inicial
    $mensaje = "Yo soy nones y tú eres pares, escribe o pulsa un número del 1 al 5 a ver quién gana";
    //Valor inicial
    $partida = false;
    //Clase inicial
    $clase = "";
    //Si el usuario ha pulsado algún botón o ha escrito un número del 1 al 5, hay partida
    if (isset($_GET['numero']) && $_GET['numero'] >= 1 && $_GET['numero'] <= 5){
        //Hay partida
        $partida = true;
        //Recojo el numero escogido por el usuario
        $numeroUsuario = $_GET['numero'];
        //Obtengo el número de la máquina (aleatorio entre 1 y 5)
        $numeroMaquina = rand(1,5);
        //Mensaje inicial
        $mensaje = "Has escogido $numeroUsuario y la máquina ha escogido $numeroMaquina. ";
        //Calculo quién ha ganado
        $mensaje .= (($numeroUsuario + $numeroMaquina) % 2 == 0) ? "Has ganado" : "Has perdido";
        //Asigno la clase correspondiente
        $clase = (($numeroUsuario + $numeroMaquina) % 2 == 0) ? "ganar" : "perder";
        /*if (($numeroUsuario + $numeroMaquina) % 2 == 0){ //Si es par
            $mensaje .= "Has ganado";
        }
        else{
            $mensaje .= "Has perdido";
        }*/
    }
?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio propuesto 1</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body class="<?php echo $clase ?>">
        <h1>Ejercicio propuesto 1</h1>
        <p>
            Desarrolla un juego web para jugar a pares o nones contra el ordenador con las siguientes especificaciones:
        </p>
        <ol>
            <li>Tú serás pares y debes poder elegir del 1 al 5 en cada tirada</li>
            <li>La máquina será nones y elegirá un número del 1 al 5 en cada tirada</li>
            <li>Un texto debe mostrar el número que tú elegiste, el que eligió la máquina y quién ha ganado.</li>
            <li>PLUS: Modifica ahora el juego para que el usuario pueda elegir si es pares o nones.</li>
        </ol>
        <hr>
        <h2>Bienvenido al juego de pares o nones</h2>
        <p><?php echo $mensaje ?></p>

        <?php if (!$partida){ ?>
            <!-- Formulario para los botones -->
            <form method="get" action="index.php">
                <input type="submit" name="numero" value="1">
                <input type="submit" name="numero" value="2">
                <input type="submit" name="numero" value="3">
                <input type="submit" name="numero" value="4">
                <input type="submit" name="numero" value="5">
            </form>
            <!-- Formulario para el input number -->
            <form method="get" action="index.php">
                <div>
                    <p>Escribe un número del 1 al 5 y pulsa Enviar:</p>
                    <input type="number" min="1" max="5" step="1" name="numero">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        <?php } else { ?>
            <a href="index.php">Pulsa aquí para volver a jugar</a>
        <?php } ?>
    </body>
</html>
