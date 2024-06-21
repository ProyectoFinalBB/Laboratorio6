<?php 
if (!defined('MY_APP')) {
    die('No direct access allowed.');
}
?>
<?php require_once "funciones.php"; ?>

<h2>Pozo de Oro</h2>
<p>Ingrese 5 números entre el 01 y el 48:</p>
<form action="" method="post">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<input type='number' name='numero$i' min='1' max='48' required> ";
    }
    ?>
    <button type="submit" name="verificar">Verificar</button>
</form>

<?php
if (isset($_POST["verificar"])) {
    $numerosUsuario = [];
    $numeros_validos = true;
    for ($i = 1; $i <= 5; $i++) {
        if (isset($_POST["numero$i"])) {
            $numero = $_POST["numero$i"];
            if ($numero >= 1 && $numero <= 48) {
                $numerosUsuario[] = $numero;
            } else {
                echo "<p>Por favor, ingrese números válidos entre 1 y 48.</p>";
                $numeros_validos = false;
                break;
            }
        } else {
            echo "<p>Por favor, ingrese todos los números del 01 al 48.</p>";
            $numeros_validos = false;
            break;
        }
    }

    if ($numeros_validos && count($numerosUsuario) == 5) {
        $numerosAleatorios = [];
        for ($i = 0; $i < 5; $i++) {
            $numerosAleatorios[] = rand(1, 48);
        }

        echo "<p>Los números del sorteo son: " . implode(", ", $numerosAleatorios) . "</p>";
        echo "<p>" . verificarGanador($numerosUsuario, $numerosAleatorios) . "</p>";
        echo "<p>La probabilidad de ganar es: " . calcularProbabilidad() . "</p>";
    }
}
?>
