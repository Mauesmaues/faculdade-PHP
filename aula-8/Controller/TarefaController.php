<?php
    class TarefasController{
        static function index(){
                require_once("banco.php");
    
            session_start();
            $idUsuario = $_SESSION['id_usuario'] ?? null;
            $usuario = $_SESSION['usuario'] ?? null;

            if(empty($idUsuario) || empty($usuario)){
                echo "Você não está logado!";
                header("Location: login.php");
            }

            $resp = $banco->query("SELECT * FROM tarefas WHERE id_usuario='$idUsuario'");
            echo "<h1>Bem-vindo, $usuario</h1>";
            echo "<h2>Suas tarefas:</h2>";
            include __DIR__ . "/../View/dashboard.php";
        }

        static function addTarefa(){

            include __DIR__ . "";
        }

        static function editarTarefa($id){

        }

        static function atualizarTarefa(){

        }

        static function apagarTarefa(){

        }
    }


?>