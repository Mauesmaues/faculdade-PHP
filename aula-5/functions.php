<?php
    function validar_form(){

        return $_SERVER['REQUEST_METHOD'] == "POST";

    }

    function verificar_campos_em_branco(){

        return empty($_POST['valor1']) || empty($_POST['valor2']);
        
    }
?>