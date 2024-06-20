<?php 


if (isset($_SESSION['ficha']) == 0) {
    include("imprimirFicha.php");
} else {
    include("ficha.php");
}

    





?>

