<?php
        session_start();
        $idUsuario = $_SESSION['id_usuario'] ?? null;
    
        if($_SERVER["REQUEST_METHOD"] === "POST"){
    
            require "banco.php";
            $tarefa_id = $_POST['tarefa'] ?? null;
    
            if(empty($tarefa_id)){
                echo "<br>..erro no id";
            }else{
                $q = "DELETE FROM tarefas WHERE id = '$tarefa_id';";
                $banco->query($q);
            }
        }
    
        header("Location: dashboard.php");

?>