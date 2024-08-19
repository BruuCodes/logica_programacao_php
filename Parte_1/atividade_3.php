<?php
    if(isset($_POST['btnEnviar'])){
        $nome = $_POST['nome_usuario'];
        $email = $_POST['email_usuario'];
        $assunto = $_POST['ass'];
        $msg = $_POST['msg'];

        echo 'Nome Digitado: ' . $nome . '.<br>E-mail: ' . $email . '.<br>Assunto: ' . $assunto . '.<br>Mensagem: ' . $msg . '.<hr>';

    }

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI',Tahoma, Gevena, Verdana, sans-serif;">
<form action="atividade_3.php" method="POST">
        <label> Digite seu nome:</label>
        <input type="nome" name="nome_usuario">
        <br>
        <label> Digite seu e-mail:</label>
        <input type="email" name="email_usuario">
        <br>
        <label>Digite um assunto:</label>
        <input type="assunto" name="ass">
        <br>
        <label> Dgite sua mensagem: </label>
        <br>
        <textarea name="msg" rows="6"></textarea>
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>