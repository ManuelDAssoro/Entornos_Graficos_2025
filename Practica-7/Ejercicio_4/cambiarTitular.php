<?php
    if(isset($_POST['titular'])){
        $noticia = $_POST['titular'];
        setcookie("noticiaActual",$noticia,time()+(60*60*24*30));

    }elseif(isset($_COOKIE["noticiaActual"])){
        $noticia = $_COOKIE["noticiaActual"];
    }

    if (isset($_POST['clearCookie'])) {
        setcookie("noticiaActual", "", time() - 3600); 
        header("Location: index.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>El Diario</h1>
    </header>
    <main>
        <h1>
            <?php
            echo "Noticia " ;
            echo $noticia;
            ?>
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nisi id libero tincidunt tincidunt. Nullam vehicula, justo a tincidunt fermentum, eros lorem tincidunt libero, nec tincidunt ligula lorem non nisi.</p>
    </main>
    <footer>
        <form action="cambiarTitular.php" method="POST">
            <button type="submit" name="clearCookie">Cambiar Titular</button>
        </form>
    </footer>
</body>
</html>