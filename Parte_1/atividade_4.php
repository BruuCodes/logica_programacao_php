<?php
    if(isset($_POST['btnEnviar'])){
        $dia = $_POST['dia'];
        $mes = $_POST['mes1'];
        $mesSelect = $_POST['mes2'];
        $ano = $_POST['ano'];

        echo $dia . '/' . $mes . '/' . $ano . '<br>';
        echo 'Londrina, dia ' . $dia . ' , ' . $mesSelect . ' de ' . $ano . '.<hr>';

    }
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body style= "font-family: 'Segoe UI',Tahoma, Gevena, Verdana, sans-serif;"> 
    <form action="atividade_4.php" method="POST">
        <label>Dia:</label>
        <input type="number" name="dia">
        <br>
        <label>Mês:</label>
        <input type="number" name="mes1">
        <br>
        <label>Mês:</label>
        <select name="mes2">
            <option value="">Selecione</option>
            <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Março">Março</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Junho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
        </select>    
        <br>
        <label> Ano:</label>
        <input type="number" name="ano">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>   
</body>
</html>