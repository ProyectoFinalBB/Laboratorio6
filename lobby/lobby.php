
<body>
        <form method="POST" action="" class="headnav">
            <button type="submit" name="pagina" value="pagina1">Página 1</button>
            <button type="submit" name="pagina" value="pagina2">Página 2</button>
            <button type="submit" name="pagina" value="pagina3">Página 3</button>
            <button type="submit" name="pagina" value="pagina4">Página 4</button>
            <button type="submit" name="pagina" value="pagina5">Página 5</button>
        </form>


<main>
<?php
if (isset($_POST['pagina'])) {
    $_SESSION['pagina'] = $_POST['pagina'];
}

$pagina = $_SESSION['pagina'];
    if (isset($pagina)) {
        switch ($pagina) {
            case 'pagina1':
                include 'Laboratorio1/inicio_lab1.php';
                break;
            case 'pagina2':
                include 'Laboratorio2/inicio_lab2.php';
                break;
            case 'pagina3':
                include 'Laboratorio3/inicio_lab3.php';
                break;
            case 'pagina4':
                include 'Laboratorio4/inicio_lab4.php';
                break;
            case 'pagina5':
                include 'Laboratorio5/inicio_lab5.php';
                break;
            default:
                echo '<p>Selecciona una página 1.</p>';
                break;
        }
    } else {
        echo '<p>Selecciona una página 2.</p>';
    }
    ?>
</main>

