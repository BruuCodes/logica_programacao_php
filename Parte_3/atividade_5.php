<?php
    $peso = '';
    $altura = '';
    $resultado = '';

    if (isset($_POST["btnSomar"])) {
        $peso = $_POST['p1'];
        $altura = $_POST['a1'];

        if ($peso == '' || $altura == '') {
        } else {
            $resultado = $peso / ($altura * $altura);

            // if ($resultado  <= 20) {
            //     echo 'MAGRO';
            // } else if ($resultado  <= 25) {
            //     echo 'PESO IDEAL';
            // } else if ($resultado  <= 30) {
            //     echo 'SOBREPESO';
            // } else {
            //     echo 'OBESO';
            // }

            if ($resultado >= 0 && $resultado <= 20) {
                echo 'MAGRO';
            } else if ($resultado > 20 && $resultado <= 25) {
                echo 'PESO IDEAL';
            } else if ($resultado > 25 && $resultado <= 30) {
                echo 'SOBREPESO';
            } else {
                echo 'OBESO';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_5.php" method="POST">
        <label> Informe seu peso </label>
        <input type="text" name="p1" value="<?= $peso ?>">
        <br>
        <label> Informe sua altura </label>
        <input type="text" name="a1" value="<?= $altura ?>">
        <br>
        <button name="btnSomar"> Calcular </button>
    </form>
    <span>Resultado IMC </span>
    <input disabled value="<?= $resultado ?>">
</body>
</html>