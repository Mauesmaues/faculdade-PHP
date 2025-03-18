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
        if(!empty($_POST['valor'])){
        // a variavel $valor ira receber o campo do formulario com o nome valor
        //enviado pelo pelo formulario pelo method post
        $valor = $_POST['valor'];
        if($valor % 2 == 0){
            echo "O valor é par!";
        }else{
            echo "O valor é impar!";
        }
    }
    ?>
    <!-- Escreva um algoritmo que leia um número digitado pelo usuário e mostre a mensagem
    Número maior do que 10!”, caso este número seja maior, ou “Número menor ou igual a 10!”,
    caso este número seja menor ou igual -->
    <h1>Exercicio 1</h1>
    <p>Digite um numero inteiro</p>
    <form action="exercicio01.php" method="post">
        <p>
        <label for="maiorOuMenor">Digite um valor</label>
        <input type="text" name="maiorOuMenor" min="1" max="100" required>
        </p>
        <p>
        <button type="submit">Verificar</button>
        <input type="submit" value="Verificar">
        </p>
        <?php
        if(empty($_POST['maiorOuMenor'])){
            if(empty($_POST['maiorOuMenor']) < 10){
                echo "Numero menor que 10!";
            }else{
                echo "Numero maior que 10";
            }
        }
        ?>
</body>
</html>