<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - exemplo 01</title>
</head>
<body>
    <h2><a href="index.php"><</a></h2>
    <h1>Exemplo 01</h1>
    <p>Informe um valor inteiro entre 1 e 100 para verificar se ele é par ou impar</p>
    <form action="exemplo01.php" method="post">
        <p>
        <label for="valor">Insira um valor entre 1 e 100</label>
        <input type="text" name="valor" min="1" max="100" required>
        </p>
        <p>
        <button type="submit">Verificar</button>
        <input type="submit" value="Verificar">
        </p>
    </form>
    <?php
        // a variavel $valor ira receber o campo do formulario com o nome valor
        //enviado pelo pelo formulario pelo method post
        $valor = $_POST['valor'];
        if($valor % 2 == 0){
            echo "O valor é par!";
        }else{
            echo "O valor é impar!";
        }
    ?>
</body>
</html>