<?php

    if(isset($_POST['btnEnviar'])){
        $nome = $_POST['emprersa'];
        $site = $_POST['site'];
        $facebook = $_POST['face'];
        $instagram = $_POST['insta'];
        $obs = $_POST['desc']; 

        echo 'Nome da Empresa: ' . $nome . '.<br>site: ' . $site . '<br>Facebook: ' . $facebook . '.<br>Instagram: ' . $instagram . '.<br>Descrição: ' . $obs . '.<hr>';

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style= "font-family: 'Segoe UI',Tahoma, Gevena, Verdana, sans-serif;">
    <form action ="atividade_2.php" method="POST">
        <label> Digite o nome da empresa:</label>
        <input type ="text" name= "empresa">
        <br>
        <label> Site:</label>
        <input type ="text" name= "site">
        <br>
        <label>Facebook:</label>
        <input type ="url" name= "face">
        <br>
        <label> Instagram:</label>
        <input type ="url" name= "insta">
        <br>
        <label> Descrição da empresa:</label>
        <input type ="text" name= "desc">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>