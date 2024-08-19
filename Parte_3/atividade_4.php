<?php
$nivel1 = '';
$nivel2 = '';
$nivel3 = '';
$nivel4 = '';
$nivel5 = '';
$salario_final = '';
$salario = '';
$aumento = '';

if (isset($_POST["btnSomar"])) {
    $salario = $_POST['s1'];
    $aumento = $_POST['a1'];

    if ($salario == '' || $aumento == '') {
        echo 'Preencher os campos obrigatórios';
    } else {
        $aumento = ($salario * $aumento) / 100;
        $salario_final = $salario + $aumento;

        if ($aumento >= 0 && $aumento <= 100) {
            echo 'Aumento salarial nível 1';
        } else if ($aumento >= 101 && $aumento <= 200) {
            echo 'Aumento salarial nível 2';
        } else if ($aumento >= 201 && $aumento <= 300) {
            echo 'Aumento salarial nível 3';
        } else if ($aumento >= 301 && $aumento <= 400) {
            echo 'Aumento salarial nível 4';
        } else {
            echo 'Aumento salarial nível 5';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_4.php" method="POST">
        <label> Informe seu salário </label>
        <input type="text" name="s1" value="<?= $salario ?>">
        <br>
        <label> Aumento Salarial </label>
        <input type="text" name="a1" value="<?= $aumento ?>">
        <br>
        <button name="btnSomar"> VERIFICAR </button>
    </form>
    <span> Total de Aumento:</span>
    <input disabled value="<?= $aumento ?>">
    <br>
    <span> Salário Final:</span>
    <input disabled value="<?= $salario_final ?>">
</body>

</html>