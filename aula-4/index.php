<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutas = array("macã", "goiaba", "pera");

        $cidades = [
                "Curitiba", 
                "São Paula",
                "Porto Alegre",
                "Florianopolis"
        ];

        $quantidadeCidades = count($cidades);

        $quantidadeFrutas = count($frutas);

        echo"<p>Fruta salva na posição 1 do array 'frutas': " . $frutas[1] . "</p>";

        for($i = 0; $i < $quantidadeCidades; $i++){
            echo $cidades[$i] . "<br>";
        }

        foreach($cidades as $tempCidade){
            echo $tempCidade . "<br>";
        }

        $idade[] = 18;

        for($i = 6; $i < 20; $i++){
            $idade[] = $i;
        }

        foreach($idade as $tempIdades){
            echo $tempIdades . "<br>";
        }

        //Array associativox
        $cliente = [
                    "nome" => "Jason Sobreiro",
                    "idade" => 38,
                    "email" => "jasobreiro@up.edu.br"
                   ];

        //Foreach forma completa;
        echo "<h3>Mostrando valores do array 'cliente usando o FOREACH completo</h3>";

        foreach($cliente as $clienteTemp => $value){
            echo $clienteTemp  . ": " . $value . "<br>";

        }
    ?>
    
</body>
</html>