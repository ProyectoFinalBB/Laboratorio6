<?php require_once "funciones.php"; ?>

<h2>Calculadora de Factoriales</h2>
<form action="" method="post">
    <label for="numero">Ingrese un número:</label>
    <input type="number" name="numero" required>
    <button type="submit" name="calcular_factorial">Calcular factorial</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"]) && $_POST["numero"] != "") {
    $numero = $_POST["numero"];
    $factorial = factorial($numero);
    echo "<h3>El factorial de $numero es: $factorial</h3>";
}


?>
