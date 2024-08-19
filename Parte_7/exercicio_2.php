<?php 

require_once 'Classe/Calculo.php';

$unidadeMedida = '';

if(isset($_POST['btnConverter'])){
    $unidadeMedida = $_POST['unidadeMedida'];
    $temperatura = $_POST['qtd'];

    $objDAO = new Calculo();
    $retorno = $objDAO->Conversor($unidadeMedida, $temperatura);

    if($retorno == 0){
        $msgError = '<div style="color: red; font-family: tahoma;">Preenher todos os Campos Obrigatórios!</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="exercicio_2.php" method="POST">
        <label> Selecione uma unidade de Medida:</label>
        <select name="unidadeMedida">
            <option value=""> Selecione</option>
            <option value="1" <? $unidadeMedida == 1 ? 'selected' : null ?> Celsius -> Fahrenheit</option>
            <option value="2" <? $unidadeMedida == 2 ? 'selected' : null ?> Fahrenheit -> Celsius </option>
        </select>
        <br>
        <label> Quantidade de temperatura:</label>
        <input type= "number" name="qtd" value="<?= isset($temperatura) ? $temperatura: ''?>">
        <br>
        <button name="btnConverter">Converter</button>
    </form>
    <span> Resultado da conversão: <?= isset($retorno) ? $retorno : ''?>°.</span>
</body>
</html>