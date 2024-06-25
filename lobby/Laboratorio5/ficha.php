
<?php 
if (!defined('MY_APP')) {
    die('No podes estar acá :(');
}
?>


<div class="contenC fichaDIV">
    <form class="fichaForm" action="\Laboratorio6\lobby\Laboratorio5\fichaFunctions.php" method="post">
        <label >Nombre Completo:</label>
        <input type="text" name="nombreEstudiante" required>
        
        <label >Cédula de Identidad:</label>
        <input class="cedulaClass" type="number" name="cedula" required>
        
        <label >Localidad:</label>
        <input type="text" name="localidad" required>
        
        <label >Dirección:</label>
        <input type="text" name="direccion" required>
        
        <label >Teléfono:</label>
        <input type="text" name="telefono" required>
        
        <label >Email:</label>
        <input type="email" name="email" required>
        
        <label >Calificaciones</label>
        <div class="calificacionesDIV">
        <input type="number" name="c1" min="1" max="12" step="1" required>
            <input type="number" name="c2" min="1" max="12" step="1" required>
            <input type="number" name="c3" min="1" max="12" step="1" required>
            <input type="number" name="c4" min="1" max="12" step="1" required>
            <input type="number" name="c5" min="1" max="12" step="1" required>
            <input type="number" name="c6" min="1" max="12" step="1" required>
            <input type="number" name="c7" min="1" max="12" step="1" required>
            <input type="number" name="c8" min="1" max="12" step="1" required>
            <input type="number" name="c9" min="1" max="12" step="1" required>
            <input type="number" name="c10" min="1" max="12" step="1" required>
        </div>
        <input type="submit" value="Enviar" name="enviar"> 
    </form>

</div>


