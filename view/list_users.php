<<<<<<< HEAD
<?php
session_start();
if(isset($_SESSION['perfil'])):
?>


=======
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->
</head>
 
<<<<<<< HEAD
<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
=======
<body class=""> <!-- Define a classe com base no perfil do usuário -->
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
<<<<<<< HEAD
                <?php
                foreach($users as $user):
                ?>
 
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['nome']?></td>
                    <td><?= $user['email']?></td>
                    <td><?= $user['perfil']?></td>
                    <td>
                        <?php 
                        if($_SESSION['perfil'] == 'admin' || $_SESSION ['perfil'] == 'gestor'): 
                         ?>   
                         <a href="">Editar</a> 
                         <?php endif; ?>   
                         <?php 
                        if($_SESSION['perfil'] == 'admin'): 
                         ?>   
                         <a href="">Excluir</a>
                         <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
=======
 
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
 
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
            </tbody>
        </table>
 
        <a href="" class="btn">Voltar ao Dashboard</a>
    </div>
</body>
<<<<<<< HEAD
</html>

<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar esta página</p>
<?php endif; ?>
=======
 
</html>
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
