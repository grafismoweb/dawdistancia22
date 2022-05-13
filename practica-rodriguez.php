<?php

////////////////////////////////////////
//  tarea dawdistancia22 actualizada  //
////////////////////////////////////////

/**
 * Este archivo forma parte de la Tarea 5 de DAW.
 * @author María Teresa Rodríguez García.
 * @version 1.0
 */

/**
 * Funcion que saluda al desarrollador.
 * @internal Solo visible en la documentación para desarrolladores.
 */
function holaMundo(){
    return '¡¡¡Hola Mundo!!!';
}

/**
 * Función que suma 1 al número que se le pasa por parámetro.
 * @param int $numero El número al que se le va a sumar 1.
 * @return int $resultado El número pasado por parámetro incrementado en 1.
 */
function suma1($numero) {
    $resultado = ++$numero;
    return $resultado;
}

/**
 * Función que crea y retorna una cadena de caracteres saludando al nombre pasado por parámetro.
 * @param string $nombre Tu nombre.
 * @return string $resultado Cadena de caracteres formada por el hola nombre y el nombre pasado por parámetro.
 */
function holaNombre($nombre) {
    $resultado = "¡¡¡Hola $nombre!!!";
    return $resultado;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="María Teresa Rodríguez García">
        <title>Tarea 5 de DAW</title>
    </head>
    <body>
        <?php
        echo '<h3>Resultado de la función "holaNombre" pasándole mi nombre por parámetro:</h3>';
        echo '<h1>'.holaNombre ('Teresa').'</h1>'; // LLamada a la función.
        echo '<h3>Resultado de la función "suma1" pasándole el nº 10 por parámetro:</h3>';
        echo '<h1>'. suma1(10).'</h1>'; // LLamada a la función.
        ?>
    </body>
</html>
