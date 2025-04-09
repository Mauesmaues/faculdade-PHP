<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculos</h1>

    <?php

    if(!validar_form()){
        echo "Não cheguei via post";
        exit;
    }

    if(verificar_campos_em_branco()){
        echo "campos em branco";
        exit;
    }
    echo "cheguei via post";


    ?>
</body>
</html>