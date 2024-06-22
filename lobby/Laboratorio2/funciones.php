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


function calcularProbabilidad($cantidad_juegos) {
    // Número total de posibles jugadas en el 5 de Oro
    $posibles_jugadas = 1712304;

    // Verificar si la cantidad de juegos es mayor que las posibles jugadas
    if ($cantidad_juegos > $posibles_jugadas) {
        return "No está permitido jugar más que las jugadas totales posibles.";
    }

    // Si se juegan todas las posibles jugadas, la probabilidad de ganar al menos una vez es 1
    if ($cantidad_juegos == $posibles_jugadas) {
        return 1;
    }

    // Probabilidad de ganar en una sola jugada
    $probabilidad_unica = 1 / $posibles_jugadas;

    // Probabilidad de no ganar en todas las jugadas
    $no_ganar_todas = pow(1 - $probabilidad_unica, $cantidad_juegos);

    // Probabilidad de ganar al menos una vez en $cantidad_juegos jugadas
    $probabilidad = 1 - $no_ganar_todas;

    $probabilidadFormateada = number_format($probabilidad, 10);

    return $probabilidadFormateada;
   

}
 
   


function factorial($n) {
    $resultado = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

function combinatoria($n, $k) {
    return factorial($n) / (factorial($k) * factorial($n - $k));
}
?>
