
<?php

function declararBases() {
    $bases = array();
    $bases['binario'] = 2;
    $bases['octal'] = 8;
    $bases['decimal'] = 10;
    $bases['hexadecimal'] = 16;
    return $bases;
}

function validarBinario($numero) {
  
    for ($i = 0; $i < strlen($numero); $i++) {
      
        if ($numero[$i] !== '0' && $numero[$i] !== '1') {
        
            return false;
        }
    }

    return true;
}



function validarOctal($numero) {
    
    for ($i = 0; $i < strlen($numero); $i++) {
      
        if ($numero[$i] < '0' || $numero[$i] > '7') {
           
            return false;
        }
    }
  
    return true;
}


function validarDecimal($numero) {

    for ($i = 0; $i < strlen($numero); $i++) {
       
        if ($numero[$i] < '0' || $numero[$i] > '9') {
            
            return false;
        }
    }
    
    return true;
}

function validarHexadecimal($numero) {
    
    $numero = strtoupper($numero);
   
    for ($i = 0; $i < strlen($numero); $i++) {
        // Verifica si el carácter actual no está en el rango '0'-'9' ni en el rango 'A'-'F' es lo mismo que en los otros pero con letras tmb porque el hexadecimal es asi
        if (($numero[$i] < '0' || $numero[$i] > '9') && ($numero[$i] < 'A' || $numero[$i] > 'F')) {
            
            return false;
        }
    }
    
    return true;
}


function validarEntrada($numero, $base) {
    switch ($base) {
        case 'binario':
            return validarBinario($numero);
        case 'octal':
            return validarOctal($numero);
        case 'decimal':
            return validarDecimal($numero);
        case 'hexadecimal':
            return validarHexadecimal($numero);
        default:
            return false;
    }
}

function convertirBase($numero, $base_origen, $base_destino) {
    $bases = declararBases();

    if (!validarEntrada($numero, $base_origen)) {
        return "numero no valido para $base_origen";
    }

    if (isset($bases[$base_origen]) && isset($bases[$base_destino])) {
        $decimal = base_convert($numero, $bases[$base_origen], 10);
        return base_convert($decimal, 10, $bases[$base_destino]);
    } else {
        return "Bases no válidas";
    }
}
function calcularOperacion($numero1, $base_numero1, $operacion, $numero2, $base_numero2, $base_resultado) {
    $bases = declararBases();

    if (!validarEntrada($numero1, $base_numero1) || !validarEntrada($numero2, $base_numero2)) {
        return "numero no válido ";
    }

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

    return base_convert($resultado_decimal, 10, $bases[$base_resultado]);
}

?>
