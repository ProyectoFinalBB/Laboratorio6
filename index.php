<?php 


session_start();
// Para la Seguridad

define('MY_APP', true);
if (isset($_SESSION['username'])) {
   
    include("header.php");
    include("lobby/lobby.php");
    include("footer.php");
 
} else {
    include("login.php");
}





?>

