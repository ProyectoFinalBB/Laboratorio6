<?php 
if (!defined('MY_APP')) {
    die('No direct access allowed.');
}
?>
<!-- calculadoraProf.php -->
<h2>Calculadora de Potencia, Raíz Cuadrada y Bhaskara</h2>
<form action="" method="post">
    <label for="operacion">Operación:</label>
    <select name="operacion" id="operacion">
        <option value="potencia">Potencia</option>
        <option value="raiz">Raíz Cuadrada</option>
        <option value="bhaskara">Bhaskara</option>
    </select><br>
    <label for="valor1">Valor 1:</label>
    <input type="text" name="a" id="valor1"><br>
    <label for="valor2">Valor 2:</label>
    <input type="text" name="b" id="valor2"><br>
    <label for="valor3">Valor 3:</label>
    <input type="text" name="c" id="valor3"><br>
    <input type="submit" value="Calcular">
</form>

<?php

calcular();
?>
