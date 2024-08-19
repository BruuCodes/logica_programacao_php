<?php

    $valor_1 = '';
    $valor_2 = '';
    $valor_3 = '';
    $resultado = '';

    if (isset($_POST['btnSomar'])) {
        $valor_1 = $_POST['v1'];
        $valor_2 = $_POST['v2'];
        $valor_3 = $_POST['v3'];

        if ($valor_1 == '' || $valor_2 == '' || $valor_3 == '') {
            echo 'Preencher os campos obrigatórios!';
        } else {
            $resultado = $valor_2 / 2;

            if ($resultado >= $valor_1 && $resultado <= $valor_3) {
                echo 'o número está entre o número valor1 e valor3.';
            } else {
                echo 'O numero não está entre o valor 1 e valor 3';
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form action="atividade_2.php" method="POST">
        <label>Campo_1</label>
        <input type="text" name="v1" value="<?= $valor_1 ?>">
        <br>
        <label>Campo_2</label>
        <input type="text" name="v2" value="<?= $valor_2 ?>">
        <br>
        <label>Campo_3</label>
        <input type="text" name="v3" value="<?= $valor_3 ?>">
        <br>
        <button name="btnSomar"> CALCULAR </button>
    </form>
    <span> Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">
</body>
</html>