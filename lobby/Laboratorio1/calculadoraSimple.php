<?php 
if (!defined('MY_APP')) {
    die('No direct access allowed.');
}
?>
<!-- calculadoraSimple.php -->
<h2>Calculadora Simple</h2>
<form action="" method="post">
    <label for="numero1_simple">Número 1:</label>
    <input type="text" name="numero1_simple" id="numero1_simple"><br>
    <label for="numero2_simple">Número 2:</label>
    <input type="text" name="numero2_simple" id="numero2_simple"><br>
    <input type="submit" value="Calcular Simple">
</form>

<?php
calcularSimple();
?>
