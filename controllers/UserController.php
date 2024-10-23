<?php

class UserController{

    public function register(){
        // Verifica se a requisição HTTP é do tipo POST (se o formulário foi enviado)
<<<<<<< HEAD
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //    Coleta os dados enviados e organiza em um array
        $data = [
            'nome'  => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // Criptografa a senha
            'perfil'=> $_POST['perfil']
        ];
            // Chama o método create do model User para criar o novo usuário no BD
            User::create($data);
            header('location: index.php');
        }else{
            include 'view/register.php';
        }
=======
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //    Coleta os dados enviados e organiza em um array
     $data = [
        'nome'  => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // Criptografa a senha
        'perfil'=> $_POST['perfil']
        ];
        // Chama o método create do model User para criar o novo usuário no BD
        user::create($data);
        header('location: index.php');
    }else{
        include 'views/registrer.php';
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
    }
    //Função para listar todos os usuários
    public function list(){
        $users = User::all();  
        include 'view/list_users.php';
    } 
}
?>