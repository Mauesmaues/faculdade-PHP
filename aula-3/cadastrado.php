<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente cadastrado</title>
</head>
<body>
    <p><a href="index.php"><</a></p>
   
    <h1>Cliente Cadastrado</h1>

    <?php
        // verificar se a página recebeu dados enviados via POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // receber dados e mostrar na tela
            $dados = $_POST;
            if(!empty($dados['name']) && !empty($dados['fone']) && !empty($dados['address'] && !empty($dados['email']))){
                echo "Nome: " . $dados['name'] . "<br>";
                echo "Fone: " . $dados['fone'] . "<br>";
                echo "Endereço: " . $dados['address'] . "<br>";
                echo "E-mail: " . $dados['email'] . "<br>";
            }else{
                echo "<h3>Algum  foi campo enviado sem dado!</h3>";
            }
            // echo "<pre>";
            // var_dump($_POST);
            // echo "</pre>";
        }else{
            // mostrar uma mensagem de erro
            echo "<h3>ATENÇÂO: Nenhum dado de cliente foi enviado!</h3>";
        }
    ?>
    
</body>
</html>