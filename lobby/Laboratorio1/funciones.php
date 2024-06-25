<?php 
if (!defined('MY_APP')) {
    die('No podes estar acá :(');
}
?>
<?php 
function figuras() {
    
    if ($_POST && isset($_POST['figura'])) {
        $figura = $_POST['figura'];
        $valor1 = $_POST['valor1_area'];
        $valor2 = $_POST['valor2_area'];


        if ($figura == "cuadrado") {
         $area = cuadrado($valor1);
            resultado($area);
        } elseif ($figura == "circulo"){
            $area = circulo($valor1);
            resultado($area);
        } elseif ($figura == "triangulo") {
          $area = triangulo($valor1, $valor2);
          resultado($area);
        } elseif ($figura == "rectangulo") {
         $area = rectangulo($valor1, $valor2);
          resultado($area);
        } 
  
       
    } 
   
}

function resultado ($area) {
    echo "<div class='resultado'><p>El resultado es $area<p></div>";
    
}
function cuadrado($lado) {
    if ($lado) {
        return $lado * $lado;
    } else {
        return 'Ingrese el valor del lado';
    }
}

function circulo($radio) {
    if ($radio) {
        return M_PI * pow($radio, 2);
    } else {
        return 'Ingrese el valor del radio';
    }
}

function triangulo($base, $altura) {
    if ($base && $altura) {
        return ($base * $altura) / 2;
    } else {
        return 'Ingrese el valor de la base y la altura';
    }
}

function rectangulo($base, $altura) {
    if ($base && $altura) {
        return $base * $altura;
    } else {
        return 'Ingrese el valor de la base y la altura';
    }
}

//funciones de calculadora Prof 

// Funciones para calculadora profesional

function calcular () {
   
    if ($_POST && isset($_POST['operacion'])) {
      
        $resultado = "";
        $operacion = $_POST['operacion'];
        
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c =  $_POST['c'];

        if ($operacion == "potencia"){
          
            $resultado = potencia($a, $b);
            echo "<div class='resultado'> El resultado es: $resultado </div>";
        } elseif ($operacion == "bhaskara"){
            $TEXTO = "";
           $TEXTO = bhaskara($a, $b, $c);
           echo "<div class='resultado'>$TEXTO</div>";
           
        }elseif ($operacion == "raiz"){
            $resultado = raizCuadrada($a);
            echo "<div class='resultado'> El resultado es: $resultado </div>";
        }
    
    } 


}

function bhaskara($a, $b, $c) {
    // Verifica si se han proporcionado los tres coeficientes
    if ($a !== null && $b !== null && $c !== null) {
        // Calcula el discriminante
        $discriminante = ($b ** 2) - (4 * $a * $c);

        // Si el discriminante es negativo, las raíces son números complejos
        if ($discriminante < 0) {
            return "Las raíces son números complejos.";
        }

        // Calcula las raíces
        $raizDiscriminante = sqrt($discriminante);
        $x1 = (-$b + $raizDiscriminante) / (2 * $a);
        $x2 = (-$b - $raizDiscriminante) / (2 * $a);

        // Retorna las raíces como un texto formateado
        return "Las raíces son: x1 = $x1, x2 = $x2";
    } else {
        return "Debes rellenar los tres coeficientes.";
    }
}

   



function potencia ($a, $b) {

    if ($a && $b) {
        return pow($a, $b);
    } else {
        return 'Ingrese dato A y dato B ';
    }
 
}
 
function raizCuadrada ($a) {
   
    if ($a) {
        return sqrt($a);;
    } else {
        return 'Ingrese el valor';
    }
}



// Calculadora simple 

function calcularSimple() {

    if ($_POST && isset($_POST['numero1_simple']) && isset($_POST['numero2_simple'])  ) {
        $num1 = $_POST['numero1_simple'] ;
        $num2 = $_POST['numero2_simple'];

        if ($num1 && $num2) {
            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multiplicacion = $num1 * $num2;
            $division = ($num2 != 0) ? $num1 / $num2 : 'Error: División por cero';
    
            echo  '<div class="resultado">';
            echo '<h3>Resultados:</h3>';
            echo "La suma de $num1 + $num2 es = $suma <br>";
            echo"La resta de $num1 - $num2 es = $resta <br>";
            echo"La multiplicación de $num1 x $num2 es = $multiplicacion <br>";
            echo "La división de $num1 / $num2 es = $division <br>";
            echo '</div>';
    
            
        } else {
            return '<div class="resultado"><p>Es necesario ingresar dos numeros</p></div>';
        }
    }

}


?>


