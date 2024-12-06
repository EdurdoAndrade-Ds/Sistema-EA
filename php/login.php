<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Tela de Login</title>
</head>
<body>
    <a href="../home.php">Voltar</a>
    <div class="div-login">
        <h1>Login</h1>
        <form action="./protect.php" method="POST">

            <input type="text" name="email" placeholder="Email">
            <br>
            <br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Logar">
        </form>
    </div>
</body>
</html>