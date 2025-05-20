<?php
    while($item = $resp->fetch_object()){
?>

    <li>
        <?=$item->texto?>;
        <ul><a href='?p=apagar/<?$tarefa->id?>'>[apagar]</a></ul>
        <ul><a href='?p=editar/<?$tarefa->id?>'>[editar]</a></ul>;
    </li>

<?php
    }
?>

<hr>

<form action="add-tarefa.php" method="post">
    Nova Tarefa <input type="text" name="texto" placeholder="Digite sua tarefa">
    <input type="submit" value="Adicionar">
</form>
