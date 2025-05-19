<?php
    $pagina = $_GET('p') ?? null;
    var_dump($pagina);

    require "Controller/HomeController.php";
    require "Controller/TarefaController.php";

    if($pagina == 'login'){
        HomeController::login();
    }

    else if($pagina == 'dashboard'){
        TarefasController::index();
    }
    
    else{
        HomeController::index();
    }

?>