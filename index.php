<?php 

session_start();


if (isset($_SESSION['username'])) {

    include("header.php");
    include("lobby/lobby.php");
    include("footer.php");
} else {
    include("login.php");
}





?>

