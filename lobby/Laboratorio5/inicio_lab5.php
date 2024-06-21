<form method="post" action="\Laboratorio6\lobby\Laboratorio5\fichaFunctions.php">
        <button type="submit" name="miBoton">Ficha</button>
    </form>

<?php 


if (isset($_SESSION['verificador']) && $_SESSION['verificador'] == 1) {
    include("imprimirFicha.php");
  
} else if (isset($_SESSION['verificador']) && $_SESSION['verificador'] == 0){
    include("ficha.php");
} else {
    include("ficha.php");
    $_SESSION['verificador'] = 0;
}

    





?>

