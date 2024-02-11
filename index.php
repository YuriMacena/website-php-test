<?php
    $pags = ['home'=>'Minha página home aqui!', 'about'=>'Estou na página sobre', 'contact'=>''];

    $pags['contact'] = '<form><input type="text" placeholder="Seu nome..." /></form>';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Dinâmico</title>
</head>
<body>
    <?php
        echo $pags['contact'];
    ?>
</body>
</html>