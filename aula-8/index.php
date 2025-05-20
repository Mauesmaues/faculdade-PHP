<?php
    $pagina = $_GET['p'] ?? null;
    var_dump($pagina);

    $url = explode('/', $pagina);

    require "Controller/HomeController.php";
    require "Controller/TarefaController.php";

    match($url[0]){
        "login" => HomeController::login(),
        "dashboard" => TarefasController::index(),
        "apagar" => TarefasController::apagarTarefa($url[1]),
        default => HomeController::index(),

    };


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