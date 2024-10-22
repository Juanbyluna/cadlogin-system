<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <main>
    <h2>Login</h2>
        <form action="index.php?action=login" method="post">
            <section class="form-section">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="email">
 
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password">
            </section>
            <button class="btnLogin" name="btnLogin" type="submit">Login</button>
            <a href="index.php?action=registrer">Não possui cadastro? Cadastre-se</a>

        </form>
    </main>
   
</body>
</html>
