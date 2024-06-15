<?php
function convertirBase($numero, $base_origen, $base_destino) {
    $bases = array();
    $bases['binario'] = 2;
    $bases['octal'] = 8;
    $bases['decimal'] = 10;
    $bases['hexadecimal'] = 16;

    if (isset($bases[$base_origen]) && isset($bases[$base_destino])) {
        $decimal = base_convert($numero, $bases[$base_origen], 10);
        return base_convert($decimal, 10, $bases[$base_destino]);
    } else {
        return "Bases no válidas";
    }
}

function calcularOperacion($numero1, $base_numero1, $operacion, $numero2, $base_numero2) {
    $bases = array();
    $bases['binario'] = 2;
    $bases['octal'] = 8;
    $bases['decimal'] = 10;
    $bases['hexadecimal'] = 16;

    if (!isset($bases[$base_numero1]) || !isset($bases[$base_numero2])) {
        return "Bases no válidas";
    }

    $decimal1 = base_convert($numero1, $bases[$base_numero1], 10);
    $decimal2 = base_convert($numero2, $bases[$base_numero2], 10);

    if ($operacion === 'suma') {
        $resultado_decimal = $decimal1 + $decimal2;
    } elseif ($operacion === 'resta') {
        $resultado_decimal = $decimal1 - $decimal2;
    } elseif ($operacion === 'multiplicacion') {
        $resultado_decimal = $decimal1 * $decimal2;
    } elseif ($operacion === 'division') {
        if ($decimal2 != 0) {
            $resultado_decimal = $decimal1 / $decimal2;
        } else {
            return "Error: División por cero";
        }
    } else {
        return "Operación no válida";
    }

    return base_convert($resultado_decimal, 10, $bases[$base_numero1]);
}
?>
