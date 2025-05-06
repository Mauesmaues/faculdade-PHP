<?php

    require_once("banco.php");
    
    session_start();
    $idUsuario = $_SESSION['id_usuario'] ?? null;
    $usuario = $_SESSION['usuario'] ?? null;

    if(empty($idUsuario) || empty($usuario)){
        echo "Você não está logado!";
        header("Location: login.php");
    }
    echo "<h1>Bem-vindo, $usuario</h1>";
    echo "<h2>Suas tarefas:</h2>";

    $resp = $banco->query("SELECT * FROM tarefas WHERE id_usuario='$idUsuario'");

    $button = '<form action="excluir-tarefa.php" method="post">
                <input type="hidden" name="tarefa" value="$item->id">
                <input type="submit" value="Excluir"></form>';

    while($item = $resp->fetch_object()){
    echo "<br> - " . $item->texto . "-> <a href='excluir-tarefa-get.php?id='$item->id''>apagar</a>" ;

    }

?>

<hr>

<form action="add-tarefa.php" method="post">
    Nova Tarefa <input type="text" name="texto" placeholder="Digite sua tarefa">
    <input type="submit" value="Adicionar">
</form>
