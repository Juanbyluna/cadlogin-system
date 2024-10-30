<?php

class DashboardController
{
    // Inicia uma sessão para verificar se o usuário está autenticado
    public function index() {
        session_start();

<<<<<<< HEAD
        if (!isset($_SESSION["id"])) {
=======
<<<<<<< HEAD
        if (!isset($_SESSION["id"])) {
=======
        if (!isset($_SESSION["usuario_id"])) {
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
            header("Location: index.php");
            exit;  // Garante que o script seja interrompido após o redirecionameto
        }

        // Se o usuário estiver autenticado, será incluída a View "dashboard.php" que exibe o painel de controle da aplicação
<<<<<<< HEAD
        include "view/dashboard.php";
=======
<<<<<<< HEAD
        include "view/dashboard.php";
=======
        include "views/dashboard.php";
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
    }
}

?>