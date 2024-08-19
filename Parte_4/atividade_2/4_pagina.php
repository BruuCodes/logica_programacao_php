<?php
    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['valor']) && $_GET['valor'] != '' &&
        isset($_GET['sigla1']) && $_GET['sigla1'] != '' &&
        isset($_GET['sigla2']) && $_GET['sigla2'] != ''
    ){
        $nome = $_GET['nome'];
        $valor  = $_GET['valor'];
        $sigla1 = $_GET['sigla1'];
        $sigla2 = $_GET['sigla2'];

        // $resultado;
        // $sigla1;
        // $sigla2;
        $ganho = 3;
        $perca = 5;

        // $resultado = $sigla1 / 100 * $ganho;
        // echo 'O ganho com o valor porcentagem';

        // $resultado = ($sigla2 * $perca) / 100;
        // echo 'A perca com o valor da porcentagem';

        if($sigla1 == 'G' || $sigla1 == 'g'){
            $resultado = $valor + (($valor * $ganho) / 100);
        }else if($sigla1 == 'P' || $sigla1 == 'p'){
            $resultado = $valor - (($valor * $perca) / 100);
        }
    }else{
        header('location: 3_pagina.php');
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

<body style="font-family: 'Segoe UI', Tahama, Geneva, Verdana, sans-serif;">
    <h4 style="margin: 0px;"> Operação de Ganho (G - g): 3% - Operação de Perda (P - p): 5%. </h4>
    <span><b>Nome do cliente:</b> <?= isset($nome) ?$nome : ''?>.</span>
    <br>
    <span><b>Valor em dinhero:</b> R$ <?= isset($valor) ?  number_format($valor, 2,',','.') : ''?>.</span>
    <br>
    <span><b>Operação Escolhida:</b> <?= isset($sigla1) ?$sigla1 : ''?>.</span>
    <br>
    <span><b>Banco Escolhido:</b> <?= isset($sigla2) ?$sigla2 : ''?>.</span>
    <br>
    <span><b>Resultado Final da Operação:</b> R$
        <?= isset($resultado) ? number_format($resultado, 2,',','.') : ''?>.</span>
</body>

</html>