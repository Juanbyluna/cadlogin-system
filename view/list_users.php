<<<<<<< HEAD
=======

>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
<?php

session_start();
if (isset($_SESSION["perfil"])):

?>

<<<<<<< HEAD
=======

>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style><?php include "style.css" ?></style>
</head>
<<<<<<< HEAD
<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
    <main>
        <h2>Lista de Usuários<br><br></h2>
        <table class="users">
=======
 
<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
<body class=""> <!-- Define a classe com base no perfil do usuário -->
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
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
                <?php foreach($users as $user): ?>
=======

        
                <?php
                foreach($users as $user):
                ?>
 
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
                <tr>
                    <td><?= $user["id"] ?></td>
                    <td><?= $user["nome"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["perfil"] ?></td>
                    <td>
<<<<<<< HEAD
                        <?php if ($_SESSION["perfil"] == "admin" || $_SESSION["perfil"] == "gestor"): ?>
                            <a href="index.php?action=edit&id=<?= $user["id"] ?>" class="edit">Editar</a>
                        <?php endif; ?>
                        <?php if ($_SESSION["perfil"] == "admin"): ?>
                            <a href="index.php?action=delete&id=<?= $user["id"] ?>" class="delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
=======
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
 
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
 
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
            </tbody>
        </table>
        <p align="center"><br><br><a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a></p>
    </main>
</body>
</html>

<?php else: ?>
<<<<<<< HEAD
    <p>Erro: Você não tem permissão para visualizar essa página</p>
<?php endif; ?>
=======
    <p>Erro: Você não tem permissão para visualizar esta página</p>
<?php endif; ?>
<?php endif; ?>

 
</html>
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
