<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        require "banco.php";

        $idTarefa = $_POST['id'] ?? null;
        $tarefaTexto = $_POST['texto'];
        $idUsuario = $_POST['id-usuario'] ?? null;

        if(!is_null($idTarefa)){
            $q = "UPDATE tarefas SET texto ='$tarefaTexto', id_usuario='$idUsuario' WHERE tarefas . id = '$idTarefa'";
            $banco->query($q);
        }
    }

    header("Location: dashboard.php");
?>