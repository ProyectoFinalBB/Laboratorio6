<?php

// Función para calcular el dígito verificador de una CI uruguaya
function calcularDigitoVerificador($numero) {
    // Verifica que la CI tenga 7 dígitos
    if (strlen($numero) !== 7) {
        return false;
    }

    // Multiplicadores para cada posición
    $multiplicadores = [2, 9, 8, 7, 6, 3, 4];
    $suma = 0;

    // Suma de los productos de los dígitos por los multiplicadores
    for ($i = 0; $i < 7; $i++) {
        $suma += (int)$numero[$i] * $multiplicadores[$i];
    }

    // Cálculo del dígito verificador
    $resto = $suma % 10;
    if ($resto === 0) {
        return 0;
    } else {
        return 10 - $resto;
    }
}

// Función para validar si una CI uruguaya es válida
function validarCI($ci) {
    // Verifica que la CI tenga 8 dígitos
    if (strlen($ci) !== 8) {
        return false;
    }

    // Extrae el número y el dígito verificador
    $numero = "";
    for ($i = 0; $i < 7; $i++) {
        $numero .= $ci[$i];
    }
    $digito_verificador = (int)$ci[7];

    // Calcula el dígito verificador esperado
    $digito_verificador_esperado = calcularDigitoVerificador($numero);

    // Compara el dígito verificador ingresado con el esperado
    return $digito_verificador === $digito_verificador_esperado;
}

// Función para generar el dígito verificador de una CI uruguaya
function generarDigitoVerificador($numero) {
    // Calcula el dígito verificador
    return calcularDigitoVerificador($numero);
}

?>
