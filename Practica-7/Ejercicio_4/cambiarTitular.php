<?php
    if(isset($_POST['titular'])){
        $noticia = $_POST['titular'];
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
        <a href="index.php">
            <button type="button">Cambiar Titular</button>
        </a>
    </footer>
</body>
</html>