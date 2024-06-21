<?php 
if (!defined('MY_APP')) {
    die('No direct access allowed.');
}
?>
<?php require_once "funciones.php"; ?>

<h2>Conversor de Bases Numéricas</h2>
<form action="" method="post">
    <label for="numero">Ingrese el número:</label>
    <input type="text" name="numero" required>
    <label for="base_origen">Base de origen:</label>
    
    <select name="base_origen">
        <option value="binario">Binario</option>
        <option value="octal">Octal</option>
        <option value="decimal">Decimal</option>
        <option value="hexadecimal">Hexadecimal</option>
    </select>

 

    <label for="base_resultado">Base de resultado:</label>
    <select name="base_resultado">
        <option value="binario">Binario</option>
        <option value="octal">Octal</option>
        <option value="decimal">Decimal</option>
        <option value="hexadecimal">Hexadecimal</option>
    </select>

    <button type="submit" name="convertir">Convertir</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["convertir"])) {
    $numero = $_POST["numero"];
    $base_origen = $_POST["base_origen"];

    $base_resultado = $_POST["base_resultado"]; // Agregado
    
    $resultado = convertirBase($numero, $base_origen, $base_resultado); // Modificado
    echo "<p>El resultado de la conversión es: $resultado</p>";
}
?>
