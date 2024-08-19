<?php
$nome = '';
$valor1 = '';
$valor2 = '';
$resultado = '';

if (isset($_POST['btnSomar'])) {
    $nome = trim($_POST['nome']);
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    
    if ($nome == '' || $valor1 == '' || $valor2 == '') {
        echo 'Preencher todos os campos obrigatórios!';
    } else {
        $resultado = $valor1 + $valor2;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wi,dth=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo.php" method="POST">
        <label> Digite seu nome </label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <br>
        <label> Primeiro Valor: </label>
        <input type="number" name="valor1" value="<?= $valor1 ?>">
        <br>
        <label> Segundo Valor: </label>
        <input type="number" name="valor2" value="<?= $valor2 ?>">
        <br>
        <button name="btnSomar">Somar</button>
    </form>

    <span> Nome do usuário: <?= $nome ?> </span>
    <br>
    <span> Resultado da Soma: </span>
    <input disabled value="<?= $resultado ?>">

</body>

</html>