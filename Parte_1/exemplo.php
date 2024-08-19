<?php

    // if: SE.
    // else if: OUSE / SE NÃO.
    // else: OU.
    // isset: EXISTIR.
    // POST: Envio oculto dos dados.
    // GET: Envio de dados pela URL.

    if(isset($_POST['btnEnviar'])){
        $pessoa = $_POST['people'];
        $time = $_POST['idade'];

        // Este comando Nativo do PHP, serve para imprimir conteúdos na Tela para o Usuário!
        echo 'Meu nome é ' . $pessoa . ', e tenho ' . $time . ' anos de idade.<hr>';

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="people">
        <br>
        <label>Digite sua Idade:</label>
        <input type="number" name="idade">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>