<?php 

session_start();


if (isset($_SESSION['username'])) {

    include("ficha.php");
} else {
    include("login.php");
}





?>

