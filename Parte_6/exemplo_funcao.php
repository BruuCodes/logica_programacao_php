<?php


require_once 'funcao/calculo.php';

$n1 = '';
$n2 = '';
$resultado = '';

if (isset($_POST['btnSomar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if (trim($n1) == '') {
        echo 'Preencher o campo Número 1';
    } else if (trim($n2) == '') {
        echo 'Preencher o campo Número 2';
    } else {
        $resultado = Somar($n1, $n2);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo função</title>
</head>

<body>
    <form method="post" action="exemplo_funcao.php">
        <label>Número 1:</label>
        <input name="n1" value="<?= $n1 ?>">
        <label>Número 2:</label>
        <input name="n2" value="<?= $n2 ?>">
        <button name="btnSomar">Somar</button>
    </form>
    <span> Resultado Final </span>
    <input disabled value="<?= $resultado ?>">

</body>

</html>