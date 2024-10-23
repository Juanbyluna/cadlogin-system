<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
<<<<<<< HEAD:view/register.php
    <link rel="stylesheet" href="./style.css">

=======
    <link rel="stylesheet" href="style.css">
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659:view/registrer.php

</head>
<body>
    <div>
        <h2>Cadastro de Usuário</h2>
        <form method="post" action="index.php?action=register">
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" required>

             <label for="">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
<<<<<<< HEAD:view/register.php
            <button class="btnregister" type="submit">Cadastrar</button>
       <br><br>
            <a href="index.php?action=login">já possui conta? Ir para o Login</a>
=======
            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">já possui conta? Ir para o Login</a>
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659:view/registrer.php
    </div>
    </form>
</body>
</html>