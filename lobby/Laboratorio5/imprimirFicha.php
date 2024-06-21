<?php 
if (!defined('MY_APP')) {
    die('No direct access allowed.');
}
?>
<?php 


    
    if (isset($_SESSION['cedula'])) {
      $nombreEstudiante =  $_SESSION['nombreEstudiante'];
      $cedula =  $_SESSION['cedula'];
      $localidad =  $_SESSION['localidad'];
      $direccion =  $_SESSION['direccion'];
      $telefono =  $_SESSION['telefono'];
      $email =  $_SESSION['email'];
      $promedio =  $_SESSION['promedio'];
      $sitCalificaciones = $_SESSION['SitAcademicca'];
        echo "<div class='printFichaDiv'>";

        echo "<h1 class='printFichah1'> Ficha </h1>";

        echo "<h2>Nombre: $nombreEstudiante  </h2>";
        echo "<h2>Cedula: $cedula  </h2>";
        echo "<h2>Localidad: $localidad</h2>";
        echo "<h2>Direccion: $direccion</h2>";
        echo "<h2>Telefono: $telefono</h2>";
        echo "<h2>Email:  $email </h2>";
        echo "<h2>Promedio de Calificaciones: $promedio</h2>";
        echo "<h2> $sitCalificaciones </h2>";
      
        echo "</div>";
    
       
    
    
    } else {
        echo "<div class='printFichaDiv'>";
        echo "<h1 class='printFicha'> No has creado ninguna ficha </h1>";
        echo "<h2>Si tu ficha no se imprime, comprueba que los datos ingresados son correctos</h2>";
        echo "</div>";
    }
    ?>
