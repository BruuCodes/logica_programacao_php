<?php

    // O comando de concatenar (Ponto . ) sempre vai estar junto com as vaariaveis.
    // Dentro das ASPAS SIMPLES sempre ficaram os textos e comandos HTML como as TAGS.

    if(isset($_POST['btnEnviar'])){
        $comida = $_POST['refeicao'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $ingredientes = $_POST['ingredientes'];

        echo 'Escolha uma refeição: ' . $comida . '.<br>Descrição: ' . $descricao . '.<br>Preço: R$ ' . $valor . '.<br>Ingredientes: ' . $ingredientes . '.<hr>';

        echo 'Escolha uma ' . $comida . ' e a ' . $descricao . ' o R$ ' . $valor . ' e os ' . $ingredientes .  ' o serão apresentados.<hr>';

    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refeiçaõ</title>
</head>

<body style="font-family: 'Segoe UI' , Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label>Nome do prato:</label>
        <input type="text" name="refeicao">
        <br>
        <label>Descrição do prato:</label>
        <input type="text" name="descricao">
        <br>
        <label>Valor:</label>
        <input type="text" name="valor">
        <br>
        <label>Ingredientes:</label>
        <input type="text" name="ingredientes">
        <br>
        <button name="btnEnviar"> ENVIAR </button>
    </form>

</body>

</html>