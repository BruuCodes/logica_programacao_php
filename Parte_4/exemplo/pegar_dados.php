<?php

    $nome = '';
    $sobrenome = '';

    if (isset($_POST['btnSomar'])){
        $nome = trim($_POST['nome']);
        $sobrenome = trim($_POST['sobrenome']);

        if(trim($nome) == ''){
            echo 'Prencher o compo obrigatório!';
        }
        else if(trim($sobrenome) == ''){
            echo 'Preencher o campo obrigatório!';
        }
        else{
            header("location: mostrar_dados.php?nome=$nome&sobrenome=$sobrenome");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="pegar_dados.php" method="POST">
        <label> Nome </label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <label> Sobrenome </label>
        <input type="text" name="sobrenome" value="<?= $sobrenome ?>">
        <button name="btnSomar">Enviar</button>
    </form>
</body>
</html>