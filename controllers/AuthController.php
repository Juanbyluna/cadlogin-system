<?php  
 
// Requer o arquivo user que contém o model user com as funções de manipulação de dados de usuários
require_once 'models/user.php';
 
class AuthController
{
    //Função resposável processo de login
    public function login()
    {
        // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Obter os valores do formulário
            $email = $_POST['email'];
            $senha = $_POST['senha'];
 
            //Chama o método do model para encontrar o usuário pelo email
            $user = User::findByEmail($email);
<<<<<<< HEAD
 
            if($user && password_verify($senha, $user['senha'])){// Verifica se a senha corresponde a um hash
                session_start();    // Armazenamento na sessão o ID do usuário que está logado e seu perfil
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil']     = $user['perfil'];
 
                header('Location:index.php?action=dashboard');
            }else{
                echo "email do ou senha incorretos";
            }
 
          }else{
            include 'view/login.php';
          }
    }
    //função resonsavel por fazer o logout (encerrar a sessão do usuário)
    public function logout() {
        // iniciar sessão para destruí-lá
        session_start();
        // Destroi todas as informações da sessão
        session_destroy();
        // Redireciona o usuário para a página incial
        header('Location:index.php');
    }
}
 
=======
 
            if($user && password_verify($senha, $user['senha'])){// Verifica se a senha corresponde a um hash
                session_start();    // Armazenamento na sessão o ID do usuário que está logado e seu perfil
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil']     = $user['perfil'];
 
                header('Location: index.php?action=dashboard');
            }else{
                echo "email do ou senha incorretos";
            }
 
          }else{
            include 'views/login.php';
          }
    }
    //função resonsavel por fazer o logout (encerrar a sessão do usuário)
    public function logout() {
        // iniciar sessão para destruí-lá
        session_start();
        // Destroi todas as informações da sessão
        session_destroy();
        // Redireciona o usuário para a página incial
        header('Location: index.php');
    }
}
 
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
?>