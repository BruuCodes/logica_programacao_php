<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $idade = trim($_POST['idade']);
        $repetir = $_POST['repetir'];

        if($nome == '' || $idade == '' || $repetir == ''){
            $msgError = ' <div style="color: #FF000; font-weight: bold;">Preencher o campo Primeiro Valor!</div>';
        }else{
            for($i=1; $i <= $repetir; $i++){
                echo 'Nome digitado: ' . $nome . ' e a idade desta pessoa é ' . $idade . '. O número digitado foi: ' . $repetir. ' - Repetição: ' . $i . '.<br>';
            } 
            echo '<hr>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_nome.php" method="POST">
        <label>Digite seu nome: </label>
        <input type="text" name="nome" value="<?=isset($nome) ? $nome : ''?>">
        <br>
        <label>Digite sua idade: </label>
        <input type="text" name="idade" value="<?=isset($idade) ? $idade : ''?>">
        <br>
        <label>Digite um número qualquer: </label>
        <input type="text" name="repetir" value="<?=isset($int) ? $repetir : ''?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?> </span>
</body>
</html>