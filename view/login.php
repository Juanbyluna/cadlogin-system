<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
 
    <div>
    <h2>Login</h2>
        <form action="index.php?action=login" method="post">
            <section class="form-section">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="email">
 
                <label for="password">Password</label>
                <input type="password" name="senha" placeholder="password">
            </section>
            <button class="btnLogin" name="btnLogin" type="submit">Login</button>
<br><br>
   
        <a href="index.php?action=register">Não possui cadastro? Cadastre-se</a>
</div>
    </form>
</body>
</html>
