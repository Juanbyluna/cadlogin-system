<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
<?php
session_start();
if(isset($_SESSION['perfil'])):
?>


<<<<<<< HEAD
=======
=======
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
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
<<<<<<< HEAD
<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
=======
<body class=""> <!-- Define a classe com base no perfil do usuário -->
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
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
=======
<<<<<<< HEAD
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
                <?php
                foreach($users as $user):
                ?>
 
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['nome']?></td>
                    <td><?= $user['email']?></td>
                    <td><?= $user['perfil']?></td>
                    <td>
<<<<<<< HEAD
                    <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                        <a href="index.php?action=edit?id=<?= $user['id'] ?>" class="btn">Editar</a>
                        <?php endif; ?>
                        <!-- Permitir que apenas admin exclua -->
                        <?php if ($_SESSION['perfil'] == 'admin'): ?>
                        <a href="index.php?action=delete&id=<?= $user['id'] ?>" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
=======
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
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
            </tbody>
        </table>
 
        <a href="" class="btn">Voltar ao Dashboard</a>
    </div>
</body>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
</html>

<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar esta página</p>
<<<<<<< HEAD
<?php endif; ?>
=======
<?php endif; ?>
=======
 
</html>
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
