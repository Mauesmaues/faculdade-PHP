<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - PHP</title>
</head>
<body>
    <h1>Aula 3 - Página Principal</h1>
    <?php
        //include e require: métodos php para incluir arquivos demtro de outros
        //include_once serve para incluir um arquivo apenas uma vez independente de quantas vezes for declarado
        include_once ('form_cadastro.php'); 

        require ('form_cadastro.php');

        require ('cadastro.php');

    ?>
</body>
</html>