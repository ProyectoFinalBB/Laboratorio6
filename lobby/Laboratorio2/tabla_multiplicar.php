<?php require_once "funciones.php"; ?>

<h2>Tablas de multiplicar</h2>
<form action="" method="post">
    <label for="numero">Ingrese un número del 1 al 10:</label>
    <input type="number" name="numero" min="1" max="10" required>
    <button type="submit" name="mostrar_tabla">Mostrar tabla</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mostrar_tabla"])) {
    $numero = $_POST["numero"];
    echo "<h3>Tabla de multiplicar del $numero:</h3>";
    echo generarTablaMultiplicar($numero);
}
?>
