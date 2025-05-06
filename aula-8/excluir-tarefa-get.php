<?php
    if($server['REQUEST_METHOD'] === "GET"){
        require "banco.php";

        $idTarefa = $_GET['id'] ?? null;

        if(!is_null($idTarefa)){
            $q = "DELETE FROM tarefas WHERE id = '$idTarefa';";
            $banco->query($q);
        }
    }

    header("Location: dashboard.php");
?>