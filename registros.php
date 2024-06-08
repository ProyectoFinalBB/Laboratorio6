<?php 


  
session_start();
$usuarios = ["Alex", "Joaco", "Candela", "Lucas"];
$contraseña = ["a123", "j123", "c123" ,"l123"];



// Comprobar si se ha enviado el formulario mediante el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Usar el operador de fusión nula para verificar si las claves existen en el array $_POST
    $user = $_POST['user'] ;
    $password = $_POST['password'] ;

    if ($user && $password) {
        for ($i = 0; $i< count($usuarios); $i++) {
            if ($user === $usuarios[$i] && $password === $contraseña[$i]) {
           
                $_SESSION['username'] = $user;
                $_SESSION['password'] = $password;
                header("Location: index.php");
               
            }
         
        } 
        echo "Lo que ingresaste es invalido<br>";
        echo "Usuario: " . $user . "<br>";
        echo "Contraseña: " . $password;
    } else {

        echo "Por favor, proporciona tanto el nombre de usuario como la contraseña.";
    }
} else {
    echo "No se ha enviado ningún dato.";
}



?>