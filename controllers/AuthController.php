<?php
//requer o arquivo user que contém o model user com as fubções de manipulaão de dados de usuários
require_once 'models/user.php';
 
class AuthController
{
    //função responsável responsável para realizar login
    public function login()
    {
        //Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // obter os valores do fomrulário
            $email = $_POST['email'];
            $senha = $_POST['senha'];
 
            // chama o métdodo do model para encontrar usuário pelo email
            $user = User::findByEmail();
           
            if($user && password_verify($senha, $user['senha'])){ // Verifica se a senha corresponde a um hash
                session_start();
                // armazena na sessão o ID do usuário que está logado e seu perfil
                $_SESSION['usuario_id'] = $user ['id'];
            }
        }
    }
}
?>