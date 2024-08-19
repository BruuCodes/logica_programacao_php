<?php
require_once 'Classe/Calculo.php';

$quantidade = '';
$ganho = '';
$lucro = '';
$perda = '';
$resultado = '';

if (isset($_POST['btnSomar'])) {

    $quantidade = $_POST['n1'];
    $ganho = $_POST['n2'];
    $lucro = $_POST['n3'];
    $perda = $_POST['n4'];
    

    $objcalculo = new Calculo();
    $resultado = $objcalculo->CalcularSalario($quantidade, $ganho, $lucro, $perda);

    if($resultado == 0){
        $msgError = '<strong>Preencher todos os campos obrigatórios! </strong>';
    }
    
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="exercicio_3.php" method="POST">
        <label>Quantidade de meses trabalhados:</label>
        <input type="text" name="n1" value="<?= $quantidade ?>">
        <br>
        <label>Ganho médio mensal:</label>
        <input type="text" name="n2" value="<?= $ganho ?>">
        <br>
        <label>Percentual (%) de Lucro Total:</label>
        <input type="text" name="n3" value="<?= $lucro ?>">
        <br>
        <label> Percentual (%) de Perda Total: </label>
        <input type="text" name="n4" value="<?= $perda ?>">
        <br>
        <button name=btnSomar>SOMAR</button>

    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">
</body>

</html>