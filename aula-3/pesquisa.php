<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Product</title>
</head>
<body>
    <p>
        <a href="index.php"><</a>
    </p>

    <h1>result search</h1>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        // recebe o nome do produto e o procura dentro de um array de produtos
        if(!empty($_GET['product'])){
            $product = $_GET['product'];

            //criar um array de produtos
            $products = [
                "Notebook",
                "Sabonete",
                "Coxinha",
                "Pano de prato",
                "Pato de borracha",
                "Jogo Mario",
                "Hot Wheels",
                "Celular",
                "Max-Steeal",
                "PS5",
                "Churrasqueira",
                "Vina"
            ];

            // echo "<pre>";
            // print_r($produtos);
            // echo "</pre>";
            $encontrado = false;
            foreach($products as $tempProduct){
                //str_contains(palhaeiro, agulha)
                if(str_contains($tempProduct, $product)){
                    echo "<h3>Produto encontrado: " . $tempProduct . "</h3>";
                    $encontrado = true;
                }
            }
            if(!$encontrado){
                echo "<h3>Produto não encontrado</h3>";
            }
            
        }else{
            echo "<p>Nenhum produto enviado!</p>";
        }

    }else{
        echo "<h3>Nenhuma pesquisa foi enviada</h3>";
    }
    ?>
</body>
</html>