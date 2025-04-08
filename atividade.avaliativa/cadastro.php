<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="styleSheet" href="cadastro.css">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $dados = $_POST;

        foreach($dados as $dadoTemp){
            echo $dadoTemp . "<br>";
        }

         $consumoDiario = ($dados['consumo'] / 1000) * $dados['numHoras'];
         echo "Consumo diário do aparelho: " . number_format($consumoDiario, 2, '.', '') . "<br>";

         $consumoMensal = $consumoDiario * $dados['numDias'];
         echo "Consumo mensal do aparelho: " . $consumoMensal . "<br>";

         $consumoReais = $consumoMensal * $dados['valorHora'];
         echo "Consumo do aparelho em R$: R$" . number_format($consumoReais, 2, '.', '') . "<br>";

         if($consumoReais <= 5){

            echo "Consumo baixo";
    
        }elseif($consumoReais <= 10){
    
            echo "Consumo moderado";
    
        }else{
            
            echo "Consumo elevado";
        }

    }else{
        echo "nenhum dado recebido";
    }

    ?>
    
</body>
</html>