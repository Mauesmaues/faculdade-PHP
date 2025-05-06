<?php
    session_start();
    $idUsuario = $_SESSION['id_usuario'] ?? null;

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        require "banco.php";
        $texto = $_POST['texto'] ?? null;

        if(empty($texto) || is_null($idUsuario)){
            echo "<br>..erro no texto";
        }else{
            $q = "INSERT INTO tarefas (id_usuario, texto) VALUES ('$idUsuario', '$texto')";
            $banco->query($q);
        }
    }

    header("Location: dashboard.php");
?>