<?php
    while($item = $resp->fetch_object()){
?>

    <li>
        <?=$item->texto?>
        <ul><a href='excluir-tarefa-get.php?id=$item->id'>[apagar]</a></ul>
        <ul><a href='editar.php?id=$item->id'>[editar]</a></ul>;
    </li>

<?php
    }
?>

<hr>

<form action="add-tarefa.php" method="post">
    Nova Tarefa <input type="text" name="texto" placeholder="Digite sua tarefa">
    <input type="submit" value="Adicionar">
</form>
