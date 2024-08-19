<?php

    $mes_1 = '';
    $mes_2 = '';
    $mes_3 = '';
    $mes_4 = '';
    $mes_5 = '';
    $mes_6 = '';
    $mes_7 = '';
    $mes_8 = '';
    $mes_9 = '';
    $mes_10 = '';
    $mes_11 = '';
    $mes_12 ='';
    $percames_1 = '';
    $percames_2 = '';
    $percames_3 = '';
    $percames_4 = '';
    $percames_5 = '';
    $percames_6 = '';
    $percames_7 = '';
    $percames_8 = '';
    $percames_9 = '';
    $percames_10 = '';
    $percames_11 = '';
    $percames_12 ='';

    $totalDeGanhos = '';
    $totalDePerdas = '';
    $lucroRealAnual = '';
    $lucroRealMes1 = '';
    $lucroRealMes2 = '';
    $lucroRealMes3 = '';
    $lucroRealMes4 = '';
    $lucroRealMes5 = '';
    $lucroRealMes6 = '';
    $lucroRealMes7 = '';
    $lucroRealMes8 = '';
    $lucroRealMes9 = '';
    $lucroRealMes10 = '';
    $lucroRealMes11 = '';
    $lucroRealMes12 = '';

    if(isset($_POST['btnSomar'])){
        $mes_1 = trim($_POST['mes1']);
        $mes_2 = trim($_POST['mes2']);
        $mes_3 = trim($_POST['mes3']);
        $mes_4 = trim($_POST['mes4']);
        $mes_5 = trim($_POST['mes5']);
        $mes_6 = trim($_POST['mes6']);
        $mes_7 = trim($_POST['mes7']);
        $mes_8 = trim($_POST['mes8']);
        $mes_9 = trim($_POST['mes9']);
        $mes_10 = trim($_POST['mes10']);
        $mes_11 = trim($_POST['mes11']);
        $mes_12 = trim($_POST['mes12']);
        $percames_1 = trim($_POST['percames1']);
        $percames_2 = trim($_POST['percames2']);
        $percames_3 = trim($_POST['percames3']);
        $percames_4 = trim($_POST['percames4']);
        $percames_5 = trim($_POST['percames5']);
        $percames_6 = trim($_POST['percames6']);
        $percames_7 = trim($_POST['percames7']);
        $percames_8 = trim($_POST['percames8']);
        $percames_9 = trim($_POST['percames9']);
        $percames_10 = trim($_POST['percames10']);
        $percames_11 = trim($_POST['percames11']);
        $percames_12 = trim($_POST['percames12']);

        $totalDeGanhos = $mes_1 + $mes_2 + $mes_3 + $mes_4 + $mes_5 + $mes_6 + $mes_7 + $mes_8 + $mes_9 + $mes_10 + $mes_11 + $mes_12;
        $totalDePerdas = $percames_1 + $percames_2 + $percames_3 + $percames_4 + $percames_5 + $percames_6 + $percames_7 + $percames_8 + $percames_9 + $percames_10 + $percames_11 + $percames_12;
        $lucroRealAnual = $totalDeGanhos - $totalDePerdas;

        $lucroRealMes1 = $mes_1 - $percames_1;
        $lucroRealMes2 = $mes_2 - $percames_2;
        $lucroRealMes3 = $mes_3 - $percames_3;
        $lucroRealMes4 = $mes_4 - $percames_4;
        $lucroRealMes5 = $mes_5 - $percames_5;
        $lucroRealMes6 = $mes_6 - $percames_6;
        $lucroRealMes7 = $mes_7 - $percames_7;
        $lucroRealMes8 = $mes_8 - $percames_8;
        $lucroRealMes9 = $mes_9 - $percames_9;
        $lucroRealMes10 = $mes_10 - $percames_10;
        $lucroRealMes11 = $mes_11 - $percames_11;
        $lucroRealMes12 = $mes_12 - $percames_12;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>

<body>
    <form action="resposta_exer_3.php" method="POST">
        <label> Digite ganho mês de Janeiro :</label>
        <input type="text" name="mes1" value="<?= $mes_1 ?>">
        <br>
        <label> Digite ganho mês de Fevereiro:</label>
        <input type="text" name="mes2" value="<?= $mes_2 ?>">
        <br>
        <label> Digite ganho mês de Março:</label>
        <input type="text" name="mes3" value="<?= $mes_3 ?>">
        <br>
        <label> Digite ganho mês de Abril:</label>
        <input type="text" name="mes4" value="<?= $mes_4 ?>">
        <br>
        <label> Digite ganho mês de Maio :</label>
        <input type="text" name="mes5" value="<?= $mes_5 ?>">
        <br>
        <label> Digite ganho mês de Junho:</label>
        <input type="text" name="mes6" value="<?= $mes_6?>">
        <br>
        <label> Digite ganho mês de Julho:</label>
        <input type="text" name="mes7" value="<?= $mes_7?>">
        <br>
        <label> Digite ganho mês de Agosto:</label>
        <input type="text" name="mes8" value="<?= $mes_8 ?>">
        <br>
        <label> Digite ganho mês de Setembro:</label>
        <input type="text" name="mes9" value="<?= $mes_9 ?>">
        <br>
        <label> Digite ganho mês de Outubro:</label>
        <input type="text" name="mes10" value="<?= $mes_10 ?>">
        <br>
        <label> Digite ganho mês de Novembro:</label>
        <input type="text" name="mes11" value="<?= $mes_11 ?>">
        <br>
        <label> Digite ganho mês de Dezembro:</label>
        <input type="text" name="mes12" value="<?= $mes_12 ?>">
        <br>
        <action="ex3_calc_logica.php" method="POST">
        <label> Perca no mês de Janeiro :</label>
        <input type="text" name="percames1" value="<?= $percames_1 ?>">
        <br>
        <label> Perca no mês de Fevereiro:</label>
        <input type="text" name="percames2" value="<?= $percames_2 ?>">
        <br>
        <label> Perca no mês de Março:</label>
        <input type="text" name="percames3" value="<?= $percames_3 ?>">
        <br>
        <label> Perca no mês de Abril:</label>
        <input type="text" name="percames4" value="<?= $percames_4 ?>">
        <br>
        <label> Perca no mês de Maio :</label>
        <input type="text" name="percames5" value="<?= $percames_5 ?>">
        <br>
        <label> Perca no mês de Junho:</label>
        <input type="text" name="percames6" value="<?= $percames_6?>">
        <br>
        <label> Perca no mês de Julho:</label>
        <input type="text" name="percames7" value="<?= $percames_7?>">
        <br>
        <label> Perca no mês de Agosto:</label>
        <input type="text" name="percames8" value="<?= $percames_8 ?>">
        <br>
        <label> Perca no mês de Setembro:</label>
        <input type="text" name="percames9" value="<?= $percames_9 ?>">
        <br>
        <label> Perca no mês de Outubro:</label>
        <input type="text" name="percames10" value="<?= $percames_10 ?>">
        <br>
        <label> Perca no mês de Novembro:</label>
        <input type="text" name="percames11" value="<?= $percames_11 ?>">
        <br>
        <label> Perca no mês de Dezembro:</label>
        <input type="text" name="percames12" value="<?= $percames_12 ?>">
        <br>
        <button name="btnSomar">CALCULAR</button>
    </form>
    <!-- 
        Relatório:
        - Calcular a soma total de ganhos!
        - Calcular a soma total de perdas!
        - Calcular o lucro real anual!
        - Calcular o lucro real mensal (Individual)!
        wmbarrostiprofalisson@gmail.com
     -->

    <br>
    <span>Total de Ganhos:</span>
    <input disabled value="<?= $totalDeGanhos ?>">
    <br>
    <span>Total de Perdas:</span>
    <input disabled value="<?= $totalDePerdas ?>">
    <br>
    <span>Lucro Real Anual:</span>
    <input disabled value="<?= $lucroRealAnual ?>">
    <br>
    <span>Lucro Real de Janeiro:</span>
    <input disabled value="<?= $lucroRealMes1 ?>">
    <br>
    <span>Lucro Real de Fevereiro:</span>
    <input disabled value="<?= $lucroRealMes2 ?>">
    <br>
    <span>Lucro Real de Março:</span>
    <input disabled value="<?= $lucroRealMes3 ?>">
    <br>
    <span>Lucro Real de Abril:</span>
    <input disabled value="<?= $lucroRealMes4 ?>">
    <br>
    <span>Lucro Real de Maio:</span>
    <input disabled value="<?= $lucroRealMes5 ?>">
    <br>
    <span>Lucro Real de Junho:</span>
    <input disabled value="<?= $lucroRealMes6 ?>">
    <br>
    <span>Lucro Real de Julho:</span>
    <input disabled value="<?= $lucroRealMes7 ?>">
    <br>
    <span>Lucro Real de Agosto:</span>
    <input disabled value="<?= $lucroRealMes8 ?>">
    <br>
    <span>Lucro Real de Setembro:</span>
    <input disabled value="<?= $lucroRealMes9 ?>">
    <br>
    <span>Lucro Real de Outubro:</span>
    <input disabled value="<?= $lucroRealMes10 ?>">
    <br>
    <span>Lucro Real de Novembro:</span>
    <input disabled value="<?= $lucroRealMes11 ?>">
    <br>
    <span>Lucro Real de Dezembro:</span>
    <input disabled value="<?= $lucroRealMes12 ?>">
</body>
</html>