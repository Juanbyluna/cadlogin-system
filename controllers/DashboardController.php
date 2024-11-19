<?php

class DashboardController
{
    // Inicia uma sessão para verificar se o usuário está autenticado
    public function index() {
        session_start();

        if (!isset($_SESSION["id"])) {
        if (!isset($_SESSION["id"])) {
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: index.php");
            exit;  // Garante que o script seja interrompido após o redirecionameto
        }
        }
        // Se o usuário estiver autenticado, será incluída a View "dashboard.php" que exibe o painel de controle da aplicação
        include "view/dashboard.php";
<<<<<<< HEAD
=======
        include "view/dashboard.php";
        include "views/dashboard.php";
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
    }
}
}
?>