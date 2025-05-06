<?php
    $banco = new mysqli("localhost:3307", "root", "", "php-segunda-noite");
    
    function fazerLogin($usuario, $senha){
        global $banco;

        $q = "SELECT * FROM usuarios WHERE usuario='$usuario'";
        $resp = $banco->query($q);

        if($resp->num_rows === 0){
            echo "nenhum usuario";
        }else{
            echo "usuario encontrado";

            $obj_usuario = $resp->fetch_object();

            if($senha === $obj_usuario->senha){
                $_SESSION['usuario'] = $usuario;
                $_SESSION['id_usuario'] = $obj_usuario->id;
                return true;
            }else{
                return false;
            }
        }

    }

?>