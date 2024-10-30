<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">
</head>
 

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil'] ?>!</h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil'] ?>.</p>
        
            <?php if ($_SESSION['perfil'] == 'admin'): ?>
                <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        
            <?php elseif ($_SESSION['perfil'] == 'gestor'): ?>
                <!-- Gestor pode gerenciar usuários (apenas editar) -->
                <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
                <p>Área exclusiva do Gestor.</p>
            <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
            <?php endif; ?>
        
            <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn">Logout</a>
<<<<<<< HEAD
=======
=======
<body class="<?php $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, Usuario!</h1>
        <p>Esta é a visão do perfil PERFIL.</p>
        <?php if ($_SESSION['perfil'] == 'admin'): ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
 
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
 
            <p>Área exclusiva do Colaborador.</p>
 
        <br><br><br><br>
        <!-- Link para logout -->
        <a href="" class="btn">Logout</a>
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
    </div>
</body>
 
</html>