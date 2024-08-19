<?php

    require_once 'Classe/Calculo.php';

    $litros = '';
    $res = '';

    if(isset($_POST['btnSomar'])){
        $combustivel = $_POST['tipoGas'];
        $litros = trim($_POST['litros']);
      
        $objcalculo = new Calculo();
        $res = $objcalculo->SomarLitros($combustivel, $litros);

        if($res == 0){
            echo '<strong>Preencher todos os campos obrigatórios! </strong>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 1</title>
</head>
<body>
    <form action="exercicio_1.php" method="POST">
        <label>Selecione o Combustível:</label>
        <select name="tipoGas">
            <option value="">Selecione</option>
            <option value="1">Etanol</option>
            <option value="2">Gasolina</option>
        </select>
        <br>
        <label>Litros</label>
        <input type="text" name="litros" value="<?= $litros ?>">
        <br>
        <button name='btnSomar'>SOMAR</button>
    </form>
    <span>VALOR TOTAL</span>
    <input disabled value="<?= $res ?>">
</body>
</html>