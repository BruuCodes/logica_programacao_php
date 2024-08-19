<?php
$numero_1 = '';
$numero_2 = '';
$resultado = '';
    if(isset($_POST['btnSomar'])){

        $numero_1 = ltrim(rtrim($_POST['pValor']));
        $nuemero_2 = trim($_POST['sValor']);

        echo 'Resultado da operação: ' . $resultado = $numero_1 + $nuemero_2;

        $resultado = $numero_1 + $nuemero_2;
    }



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exemplo.php" method="POST">
        <label> Digite o primeiro valor:</label>
        <input type="text" name="pValor" value="<?= $numero_1 ?>">
        <br>
        <label> Digite o segundo valor:</label>
        <input type="text" name="sValor" value="<?= $numero_2 ?>">
        <br>
        <button name="btnSomar">SOMAR</button>

    </form>
    <span> Resultado Final:</span>
    <input disable value="<?= $resultado ?>">


</body>

</html>