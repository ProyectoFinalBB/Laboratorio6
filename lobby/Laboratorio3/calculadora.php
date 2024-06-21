<?php 
if (!defined('MY_APP')) {
    die('No direct access allowed.');
}
?>
<?php require_once "funciones.php"; ?>

<h2>Calculadora de Bases Numéricas</h2>
<form action="" method="post">

    <label for="numero1">Primer número:</label>
    <input type="text" name="numero1" required>
    <label for="base_numero1">Base:</label>
    <select name="base_numero1">
        <option value="binario">Binario</option>
        <option value="octal">Octal</option>
        <option value="decimal">Decimal</option>
        <option value="hexadecimal">Hexadecimal</option>
    </select>
    <label for="operacion">Operación:</label>
    <select name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>
    <label for="numero2">Segundo número:</label>
    <input type="text" name="numero2" required>
    <label for="base_numero2">Base:</label>
    <select name="base_numero2">
        <option value="binario">Binario</option>
        <option value="octal">Octal</option>
        <option value="decimal">Decimal</option>
        <option value="hexadecimal">Hexadecimal</option>
    </select>
    <label for="base_resultado">Base de resultado: </label>
    <select name="base_resultado">
        <option value="binario">Binario</option>
        <option value="octal">Octal</option>
        <option value="decimal">Decimal</option>
        <option value="hexadecimal">Hexadecimal</option>
    </select>
    <button type="submit" name="calcular">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
    $numero1 = $_POST["numero1"];
    $base_numero1 = $_POST["base_numero1"];
    $operacion = $_POST["operacion"];
    $numero2 = $_POST["numero2"];
    $base_numero2 = $_POST["base_numero2"];
    $base_resultado = $_POST["base_resultado"];
    
    $resultado = calcularOperacion($numero1, $base_numero1, $operacion, $numero2, $base_numero2, $base_resultado);
    echo "<p>El resultado de la operación en base $base_resultado es: $resultado</p>";
}
?>
