<form action="" method="post">
    Usuario: <input type="text" name="usuario">
    Senha: <input type="text" name="senha">
    <input type="submit" value="Fazer Login">
</form>

<?php
    session_start();


    if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo "<br>...fazendo login";

        $usuario_formulario = $_POST['usuario'] ?? null;
        $senha_formulario = $_POST['senha'] ?? null;

        if(empty($usuario_formulario) || empty($senha_formulario)){
            echo "<br>..erro no usuario ou senha";
        }else{
            echo "<br>..procurando no banco...";

            require_once "banco.php";
            // fazerLogin($usuario_formulario, $senha_formulario);
            if(fazerLogin($usuario_formulario, $senha_formulario)){
               // echo "sucesso";
               header("Location: dashboard.php");
            }else{
                echo "erro x.X";
            }
            
        }


    }else{
        echo "<br>Fazer Login...";
    }

?>