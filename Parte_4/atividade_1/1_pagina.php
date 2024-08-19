<?php
    $nome = '';
    $peso = '';
    $altura = '';

    if (isset($_POST['btnSomar'])){
        $nome = trim($_POST['nome']);
        $peso = trim($_POST['peso']);
        $altura = trim($_POST['altura']);


        if(trim($nome) == ''){
            echo 'Prencher o compo obrigatório!';
        }
        else if(trim($peso) == ''){
            echo 'Preencher o campo obrigatório!';
        }
        else if(trim($altura) == ''){
            echo 'Preencher o campo obrigatório!';
        }
        else{
            header("location: 2_pagina.php?nome=$nome&peso=$peso&altura=$altura");
            exit;
        }    
    }
    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 9</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="1_pagina.php" method="POST">
        <label> Seu nome </label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <label> Seu peso </label>
        <input type="text" name="peso" value="<?= $peso ?>">
        <label> Sua altura </label>
        <input type="text" name="altura" value="<?= $altura ?>">
        <button name="btnSomar"> Calcular </button>
    </form>
</body>
</html>