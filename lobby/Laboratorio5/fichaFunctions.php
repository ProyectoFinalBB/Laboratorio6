
<?php 

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
    $_SESSION['nombreEstudiante'] = $_POST['nombreEstudiante'];
    
    $_SESSION['localidad'] =$_POST['localidad'];
    $_SESSION['direccion'] = $_POST['direccion'];
    $_SESSION['telefono']= $_POST['telefono'];
    $_SESSION['email'] =$_POST['email'];
    $c1 = $_POST['c1'];
    $c2  = $_POST['c2'];
    $c3  = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5  = $_POST['c5'];
    $c6  = $_POST['c6'];
    $c7  = $_POST['c7'];
    $c8  = $_POST['c8'];
    $c9 = $_POST['c9'];
    $c10  = $_POST['c10'];

    

    $promedio = ($c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10)/10;
    $_SESSION['promedio'] = $promedio;
   
    if ($promedio < 4) {
        $_SESSION['SitAcademicca'] = "Examen Febrero";
    } else if ($promedio > 3 && $promedio < 8) {
        $_SESSION['SitAcademicca'] = "Examen Reglamentado";
    } else if ($promedio > 7 && $promedio < 13) {
        $_SESSION['SitAcademicca'] = "Exonerado";
    } else {
        $_SESSION['SitAcademicca'] = "Algo anda mal con tus calificaciones";
    }

    $ci = $_POST["cedula"];
    if (validarCI($ci)) {
        $_SESSION['cedula'] = $_POST['cedula'];
    } else {
        echo "<p>La cédula $ci no es válida.</p>";
        
    }


    $_SESSION['verificador'] = 1;
 header("location: \Laboratorio6\index.php");
}

function validarCI($ci) {
    // Verificar que la ci tenga 8 dígitos si o si:)
    if (strlen($ci) !== 8) {
        return false;
    }

    // sacar el número de la cédula
    $numero = "";
    for ($i = 0; $i < 7; $i++) {
        if ($ci[$i] < 1 || $ci[$i] > 9) {
            return false; 
        }
        $numero .= $ci[$i]; // agrega los números de la cédula a la variable numero uno x uno
    }
    $digito_verificador = $ci[7];

    
    $digito_verificador_esperado = calcularDigitoVerificador($numero);

   
    if ($digito_verificador == $digito_verificador_esperado) { // Compara el dígito verificador ingresado con el esperado
       
        return true; // si los dígitos verificadores son iguals entonces la cédula es valida
    } else {
        return false;
    }
}


function calcularDigitoVerificador($numero) {
   
    if (strlen($numero) !== 7) { // verificar que la cedula tenga 7 dígitos
        return false;
    }

    
    $multiplicadores = [2, 9, 8, 7, 6, 3, 4];// numeros que se multiplican para cada posicion 
    $suma = 0;

 
    for ($i = 0; $i < 7; $i++) {
        if ($numero[$i] < 0 || $numero[$i] > 9) {
            return false; // si encuentra un carácter que no es un numero tiene que retornar falso
        }
        $suma = $suma + ($numero[$i] * $multiplicadores[$i]);
    }


    $mayor_que_termina_en_0 = ceil($suma / 10) * 10; //ceil lo q hace es ponele 23.1 lo sube  a 24 directamente y multiplica x 10

    $digito_verificador = $mayor_que_termina_en_0 - $suma;

    return $digito_verificador;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['verificador'])) {

    if (isset($_POST['miBoton'])) {

if($_SESSION['verificador'] == 1){
    $_SESSION['verificador'] = 0;
    header("location: \Laboratorio6\index.php");

} else if ($_SESSION['verificador'] == 0){
    $_SESSION['verificador'] = 1;
    header("location: \Laboratorio6\index.php");
}
    }
}

?>