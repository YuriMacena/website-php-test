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

        section{
            max-width: 960px;
            margin: 20px auto;
            padding: 0 2%;
            font-family: Arial;
        }

        h1{
            background-color: #DE3163;
            color: white;
            padding: 8px 10px;
            text-align: center;
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
            
            if(!array_key_exists($pag1, $pags)){
                $pag1 = 'home';
            }

            echo $pag1;
        ?></h1>
        <p><?php
            print $pags[$pag1];
        ?></p>
    </section>
</body>
</html>