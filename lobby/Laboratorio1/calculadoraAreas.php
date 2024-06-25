<?php 
if (!defined('MY_APP')) {
    die('No podes estar acá :(');
}
?>
<!-- calculadoraAreas.php -->
<h2>Calculadora de Áreas</h2>
<form action="" method="post">
    <label for="figura">Selecciona la figura:</label>
    <select name="figura" id="figura">
        <option value="cuadrado">Cuadrado</option>
        <option value="circulo">Círculo</option>
        <option value="triangulo">Triángulo</option>
        <option value="rectangulo">Rectángulo</option>
    </select><br>
    <label for="valor1">Valor 1:</label>
    <input type="text" name="valor1_area" id="valor1_area"><br>
    <label for="valor2">Valor 2:</label>
    <input type="text" name="valor2_area" id="valor2_area"><br>
    <input type="submit" value="Calcular Área">
</form>

<?php 

figuras();
?>
