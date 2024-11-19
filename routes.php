<?php 
//inclui arquivos de controlador necessarios para lidar com diferentes ações
 require 'controllers/AuthController.php'; //inclui o controlador de autentocação
 require 'controllers/UserController.php'; //inclui o controlador de usuários
 require 'controllers/DashboardController.php'; //inclui o controllador de dashboard

 // Cria instancias dos controladores para utilizar seus métodos 
 $authController = new AuthController(); //instancia controlador de autenticação
 $userController = new UserController(); //instancia controlador de dashboard
 $dashboardController = new DashboardController(); //instancia controlador de dashboard

 // Coleta a ação de URL, se não houver ação definida, usa 'login' como padrão
 $action = $_GET['action'] ?? 'login'; // usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente 

 switch ($action){
    case 'login':
        $authController->login(); //chama o método de login do controlador de autenticação[]
        break;
    case 'register':
        $userController->register();
        break;
    case 'dashboard':
        $dashboardController->index();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'list':
        $userController->list();
        break;
    case 'edit':
        $id =  $_GET['id'];
        $userController->edit($id);
        break;
    default:
        $authController->login();
        break;
 }
 
?>