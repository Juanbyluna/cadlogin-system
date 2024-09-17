<?php

class UserController{

    public function register(){
        // Verifica se a requisição HTTP é do tipo POST (se o formulário foi enviado)
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //    Coleta os dados enviados e organiza em um array
     $data = [
        'nome'  => $_POST['nome']
        'email' => $_POST['email']
        'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // Criptografa a senha
        'perfil'=> $_POST['perfil']
        ];
        // Chama o método create do model User para criar o novo usuário no BD
        user::create($data);
        header('location: index.php');

    }else{
        include 'views/registrer.php';
    }
    }
    }


?>