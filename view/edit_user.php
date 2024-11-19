<!DOCTYPE html>
<html lang="pt-br">
 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Usuário</title>
<<<<<<< HEAD
<link rel="stylesheet" href="CSS/edit.css">
=======
<link rel="stylesheet" href="css/edit.css">
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
</head>
 
<body class="edit-body">
<div class="edit-container">
<<<<<<< HEAD
    <h2>Editar Usuário</h2>
        <form method="post" action="index.php?action=edit&id=<?= $user['id']?>" class="edit-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $user['nome']?>" required>
 
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email']?>" required>
 
        <label for="perfil">Perfil:</label>
    <select name="perfil" id="perfil">
        <option value="admin" <?= $user['perfil'] == 'admin' ? 'selected' : ''?>>Admin</option>
        <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : ''?>>Gestor</option>
        <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : ''?>>Colaborador</option>
    </select>
 
            <button type="submit" class="btnregister">Salvar</button>
=======
<h2>Editar Usuário</h2>
<form method="post" action="" class="edit-form">
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="" required>
 
            <label for="email">Email:</label>
<input type="email" name="email" id="email" value="" required>
 
            <label for="perfil">Perfil:</label>
<select name="perfil" id="perfil">
<option value="">Admin</option>
<option value="" >Gestor</option>
<option value="" >Colaborador</option>
</select>
 
            <button type="submit" class="btn">Salvar</button>
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
</form>
<a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
</div>
</body>
 
</html>
<<<<<<< HEAD
 
 
=======
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
