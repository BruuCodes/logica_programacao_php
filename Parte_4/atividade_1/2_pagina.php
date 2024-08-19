<?php
    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['peso']) && $_GET['peso'] != '' &&
        isset($_GET['altura']) && $_GET['altura'] != ''
    ){

        $nome = $_GET['nome'];
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
       
       $imc = round($peso / ($altura * $altura), 2);

       if ($imc >= 0 && $imc <= 20) {
            echo 'MAGRO<br>';
        } else if ($imc > 20 && $imc <= 25) {
            echo 'PESO IDEAL<br>';
        } else if ($imc > 25 && $imc <= 30) {
            echo 'SOBREPESO<br>';
        } else {
            echo 'OBESO<br>';
        }

    }else{
        header('location: 1_pagina.php');
        exit;
    }    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body>
    <label>Seu nome: <?= $nome ?></label> 
    <br>
    <label>Seu peso:<?= $peso ?></label>
    <br>
    <label>Sua altura:<?= $altura ?></label>
    <br>
    <span>Resultado IMC </span>
    <input disabled value="<?= $imc ?>">
</body>
</html>