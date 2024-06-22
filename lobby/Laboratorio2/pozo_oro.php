<?php require_once "funciones.php"; ?>

<h2>Pozo de Oro</h2>

<form action="" method="post">
    <label for="cantidad_juegos">Cantidad de veces a jugar:</label>
    <input type="number" name="cantidad_juegos" min="1" value="1" required>
    <button type="submit" name="verificar">Verificar</button>
</form>

<?php
if (isset($_POST["verificar"])) {
    if (isset($_POST["cantidad_juegos"])) {
        $cantidad_juegos = intval($_POST["cantidad_juegos"]);
    } else {
        $cantidad_juegos = 1;
    }

    echo "<p>La probabilidad de ganar es: " . calcularProbabilidad($cantidad_juegos) . "</p>";
}
?>
