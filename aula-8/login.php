<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="login.php">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario">
    <label for="senha">Senha:</label>
    <input type="text" name="senha" id="senha">
    <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){

    $banco = new mysqli("localhost:3307", "root", "", "php-segunda-noite");

    $dados = $_POST;
    $usuarioLogado = null;
    $usuario = $dados["usuario"];
    $qUsuario = "SELECT * FROM usuarios WHERE usuario= '$usuario'";
    $resp = $banco->query($qUsuario);
    $user = $resp->fetch_object();

    if($dados["usuario"] == $user->usuario && $dados["senha"] == $user->senha){
           $usuarioLogado = $user->usuario;
     }

    if(!$usuarioLogado){
        echo "<br> usuario ou senha incorretos!";
    }else{
        echo "<br> Usuario: " . $usuarioLogado . " logado!";
    }
    
}else{
    echo "Fazer Login...";
}

?>