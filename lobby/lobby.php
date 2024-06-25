<?php 
if (!defined('MY_APP')) {
    die('No direct access allowed.');
}
?>

        <form method="POST" action="" class="headnav" id="lobbyForm">
            <button type="submit" name="pagina" value="pagina1">Laboratorio 1</button>
            <button type="submit" name="pagina" value="pagina2">Laboratorio 2</button>
            <button type="submit" name="pagina" value="pagina3">Laboratorio 3</button>
            <button type="submit" name="pagina" value="pagina4">Laboratorio 4</button>
            <button type="submit" name="pagina" value="pagina5">Laboratorio 5</button>
        </form>
   


<main>
<?php




if (isset($_POST['pagina'])) {
    $_SESSION['pagina'] = $_POST['pagina'];
    header("Location: " . $_SERVER['PHP_SELF']);
   }


    if (isset($_SESSION['pagina'])) {
        switch ($_SESSION['pagina']) {
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
            include 'Laboratorio1/inicio_lab1.php';
                break;
        }
    } else {
        include 'Laboratorio1/inicio_lab1.php';
    }
    ?>
</main>

