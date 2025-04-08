<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para cadastro</title>
    <link rel="styleSheet" href="./style.css">
</head>
<body>
    <form action="cadastro.php" method="post">

        <label for="nome">Nome do aparelho: </label>
        <input type="text" name="nome" placeholder="Ex: secador" required>
        <br>

        <label for="consumo">Consumo máximo em watts:</label>
        <input type="text" name="consumo" placeholder="Ex: 64" required>
        <br>

        <label for="numHoras">Numero de horas que o aparelho é ligado por dia:</label>
        <input type="number" name="numHoras" placeholder="Ex: 24" required>
        <br>

        <label for="numDias">Numero de dias que o pararelho ficará ligado no mês</label>
        <input type="number" name="numDias" placeholder="Ex: 29" required>
        <br>

        <label for="valorHora">Valor do kilowatt-hora:</label>
        <input type="text" name="valorHora" placeholder="Ex: 24.50">
        <br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>