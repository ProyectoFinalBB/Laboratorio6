<?php 
if (!defined('MY_APP')) {
    die('No direct access allowed.');
}
?>
<?php

function generarTablaMultiplicar($numero) {
    $tabla = "";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        $tabla .= "$numero x $i = $resultado <br>";
    }
    return $tabla;
}

function verificarGanador($numerosUsuario, $numerosAleatorios) {
    $aciertos = array_intersect($numerosUsuario, $numerosAleatorios);
    $cantidadAciertos = count($aciertos);

    if ($cantidadAciertos == 5) {
        return "¡Felicidades! Ha ganado el Pozo de Oro al acertar los 5 números.";
    } else {
        return "Lo sentimos, no ha ganado en esta ocasión. Aciertos: $cantidadAciertos";
    }
}

function calcularProbabilidad() {
    $totalNumeros = 48;
    $numerosCorrectos = 5;

    $combinacionesPosibles = combinatoria($totalNumeros, $numerosCorrectos);

    $probabilidad = 1 / $combinacionesPosibles;

    return $probabilidad;
}

function factorial($n) {
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function combinatoria($n, $k) {
    return factorial($n) / (factorial($k) * factorial($n - $k));
}

?>
