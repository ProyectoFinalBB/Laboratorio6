<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Laboratorio6/styles.css">
</head>
<body>

    <header>
       
        
        <?php 
        $name = $_SESSION['username'];
        echo "<h2> Hola $name </h2>" ; ?>
         <a href="logout.php">Cerrar Sesion</a>
         </header>
    

    
    
