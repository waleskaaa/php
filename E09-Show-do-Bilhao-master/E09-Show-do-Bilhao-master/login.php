<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Login </title>
</head>
<body>
    <main>

        <h1> Login </h1>
        <img src="imagens/login.png" alt="">
        <form action="index.php" method="post">
        
            <div>

                <label for="login"> Nome de Usuário: </label>
                <input id="login" type="text" name="login" required><br>

                <label for="password"> Senha: </label>
                <input id="password" type="password" name="password" required><br>

            </div>
            <input type="submit" value="Submit" class="botao">
        </form>

       

    </main>

    <footer class="login_footer">
        <a href="cadastro.php" >Fazer cadastro</a>
    </footer>
       
</body>
</html>