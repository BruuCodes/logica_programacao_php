<?php
$nome = '';
$valor = '';
$sigla1 = '';
$sigla2 = '';

if (isset($_POST['btnEnviar'])){
    $nome = trim($_POST['nome']);
    $valor = trim($_POST['valor']);
    $sigla1 = trim($_POST['sigla1']);
    $sigla2 = trim($_POST['sigla2']);

        if(trim($nome) == ''){
            echo 'Preencher o campo obrigatório!';
        }else if(trim($valor) == ''){
            echo 'Preencher o campo obrigatório!';
        }else if(trim($sigla1) == ''){
            echo 'Preencher o campo obrigatório!';
        }else if($sigla1 != 'G' && $sigla1 != 'g' && $sigla1 != 'P' && $sigla1 != 'p'){
            echo 'Digite a Sigla da Operação Correta (G - P).';
        }else if($sigla2 != 'SA' && $sigla2 != 'sa' && $sigla2 != 'IT' && $sigla2 != 'it' && $sigla2 != 'SI' && $sigla2 != 'si'){
            echo 'Digite a Sigla do Banco Correto (SA - IT - SI).';
        }else {
            header("location: 4_pagina.php?nome=$nome&valor=$valor&sigla1=$sigla1&sigla2=$sigla2");
            exit;
        }

    }
?>
<!DOCTYPE html>
<html lang="pt,br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <form action="3_pagina.php" method="POST">
        <label> Nome: </label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <br>
        <label> Valor do investimento: </label>
        <input type="text" name="valor" value="<?= $valor ?>">
        <p>
            <label> Tipo da Operação: </label>
            <br>
            <strong>"Ganho de 3%" - SIGLA "G".</strong>
            <br>
            <strong>"Perca de 5%" - SIGLA "P".</strong>
            <br>
            <label> Digite a sigla: </label>
            <input type="text" name="sigla1" value="<?= $sigla1 ?>">
        </p>
        <p>
            <label>E as opções de escolha do banco serão:</label>
            <br>
            <strong>"Santander" - SIGLA "SA".</strong>
            <br>
            <strong>"Itau" - SIGLA "IT".</strong>
            <br>
            <strong>"Sicredi" - SIGLA "SI".</strong>
            <br>
            <label>Digite a sigla: </label>
            <input type="text" name="sigla2" value="<?= $sigla2 ?>">
        </p>
        <button name="btnEnviar">Ver resultado</button>
    </form>

</body>

</html>