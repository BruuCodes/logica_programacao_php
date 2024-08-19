<?php

require_once './funcao/functions.php';

if (isset($_POST['btnEnviar'])) {
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['desc']);
    $senha = trim($_POST['senha']);
    $repSenha = trim($_POST['repSenha']);


    if (ValidarNome($nome) == 1) {
        echo 'O NOME deve conter no mínimo 3 caracteres!';
    } else if (ValidarDescricao($descricao) == 2) {
        echo 'A DESCRIÇÃO deve conter no mínimo 50 caracteres!';
    } else if (ValidarSenha($senha) == 3) {
        echo 'A SENHA deve conter entre 6 e 8 caracteres!';
    } else if (VerificarSenhas($senha, $repSenha) == 4) {
        echo 'AS SENHAS devem ser iguais!';
    } else {
        echo 'Formulário preenchido com sucesso!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="pagina_1.php" method="POST">
        <label>Digite seu Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite uma Descriação: </label>
        <input type="text" name="desc" value="<?= isset($descriacao) ? $descriacao : '' ?>">
        <br>
        <label>Digite uma Senha: </label>
        <input type="password" name="senha" value="<?= isset($Senha) ? $senha : '' ?>">
        <br>
        <label>Digite novamente seu Senha: </label>
        <input type="password" name="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

</body>

</html>