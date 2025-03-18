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
            if(!empty($_POST['name']) && !empty($_POST['fone']) && !empty($_POST['address'] && !empty($_POST['email']))){
                echo "Nome: " . $_POST['name'] . "<br>";
                echo "Fone: " . $_POST['fone'] . "<br>";
                echo "Endereço: " . $_POST['address'] . "<br>";
                echo "E-mail: " . $_POST['email'] . "br";
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