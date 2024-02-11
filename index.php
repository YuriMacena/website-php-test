<?php
    $pags = ['Home'=>'Minha página home aqui!', 'Sobre'=>'Estou na página sobre', 'Contato'=>''];

    $pags['Contato'] = '<form><input type="text" placeholder="Seu nome..." /></form>';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Dinâmico</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header{
            background-color: #FFBF00;
            padding: 10px 10px;
            text-align: center;
        }

        a{
            display: inline-block;
            margin: 0 10px;
            color: white;
            font-size: 15px;
            font-family: Verdana;
        }
    </style>
</head>
<body>
    <header>
        <?php
            foreach ($pags as $key => $value){
                echo '<a href="?page='.$key.'">'.$key.'</a>';
            }
        ?>
    </header>
    <section>
        <h1><?php
            $pag1 = (isset($_GET['page']) ? $_GET['page'] : 'home');

            print $pag1;
        ?></h1>
    </section>
</body>
</html>