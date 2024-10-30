<?php
<<<<<<< HEAD
//requer o arquivo user que contém o model user com as funções de manipulação de dados de usuários
=======
<<<<<<< HEAD
//requer o arquivo user que contém o model user com as funções de manipulação de dados de usuários
=======
//requer o arquivo user que contém o model user com as fubções de manipulaão de dados de usuários
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
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
<<<<<<< HEAD
            $user = User::findByEmail($email);

=======
<<<<<<< HEAD
            $user = User::findByEmail($email);

=======
            $user = User::findByEmail();
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
           
            if($user && password_verify($senha, $user['senha'])){ // Verifica se a senha corresponde a um hash
                session_start();
                // armazena na sessão o ID do usuário que está logado e seu perfil
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
                $_SESSION['id']     = $user['id'];
                $_SESSION['perfil'] = $user['perfil'];
               
                header('Location: index.php?action=dashboard');
            }else{
                echo "Email ou senha incorretos!";
            }
        }else{
            include 'view/login.php';
        }
    }
    // função responsável por fazer o logout (encerrar a sessão do usuario)
    public function logout(){
        // inciar sessão para destruí-la
        session_start();
        // destroi todas as informações da sessão
        session_destroy();
        // redireciona o usuário para a página inicial
        header('Location: index.php');
    }
}
<<<<<<< HEAD
?>
=======
?>
=======
                $_SESSION['usuario_id'] = $user ['id'];
                $_SESSION['perfil'] = $user['perfil'];
                
                header('Location: index.php?action=dashboard');
          }else{
            echo "Email ou senha incorretos";
          }
        }else{
            include 'view/login.php';
        }
    }
}
?>
 
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
