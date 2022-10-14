<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Cadastro </title>
</head>
<body>
    <main>

        <h1> Cadastro </h1>
        <img src="imagens/login.png" alt="">
        <form action="testCadastro.php" method="post">
            <div>
                <label for="name"> Nome:</label>
                <input id="name" type="text" name="name" required><br>

                <label for="password"> Senha: </label>
                <input id="password" type="password" name="password" required><br>

                <label for="email"> Email: </label>
                <input id="email" type="email" name="email" required><br>

                <label for="login"> Nome de Usuário: </label>
                <input id="login" type="text" name="login" required><br>
            </div>
            <input type="submit" value="Submit" class="botao">
        </form>
        

    </main>
    <footer>
        <p>Já possui cadastro? <a href="login.php">Fazer login</a></p>
    </footer>
</body>
</html>