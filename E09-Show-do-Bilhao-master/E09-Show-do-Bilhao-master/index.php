<?php
    include "questions.inc.php";    
    session_start();

    if(!isset($_SESSION["username"])){
        if (!isset($_POST["login"])){
            header('location: login.php');
            exit();
        }
        setcookie("username", $_POST["login"]);
        $_SESSION["username"] = $_POST["login"];
    }
    if(!isset($_POST["id"])){
        $id = 1;
    }
    else {
        $id = $_POST["id"];
    }

    if($id == $lastIndex){
        header("Location: win.php");
    }
    if($id != 1){
        if($answers[$id - 1] != $_POST["alternative"]){
            header("Location: defeat.php");
        } 
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Show da Barbie </title>
<body>
    <main>
        <h1> Show da Barbie </h1>   

        <h3> Nome do Jogador: <?= $_SESSION["username"]?></h3>

        <form action="index.php" method="post">
            <h4> <?= $questions[$id] ?> </h4>
            <div>
                <input type="radio" id="alternative-1" name="alternative" value ="<?= $alternatives[$id][0]?>">
                <label for="alternative-1"> <?= $alternatives[$id][0]?> </label><br>

                <input type="radio" id="alternative-2" name="alternative" value ="<?= $alternatives[$id][1]?>">
                <label for="alternative-2"> <?= $alternatives[$id][1]?> </label><br>

                <input type="radio" id="alternative-3" name="alternative" value ="<?= $alternatives[$id][2]?>">
                <label for="alternative-3"> <?= $alternatives[$id][2]?> </label><br>

                <input type="radio" id="alternative-4" name="alternative" value ="<?= $alternatives[$id][3]?>">
                <label for="alternative-4"> <?= $alternatives[$id][3]?> </label><br>
            </div>

            <input hidden name="id" value="<?= $id + 1?>">

            <br>
            <input type="submit" value="Enviar">
        </form>

        <br>
        <a href="logout.php"><button value="Sair"> Sair</button></a>

    </main>

</body>
</html>