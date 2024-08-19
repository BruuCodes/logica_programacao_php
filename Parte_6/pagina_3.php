<?php
require_once 'funcao/functions.php';

if(isset($_POST['btnCalcular'])){
    $numero1 = $_POST['n1'];
    $numero2 = $_POST['n2'];
    $numero3 = $_POST['n3'];
    $numero4 = $_POST['n4'];
    $numero5 = $_POST['n5'];

    if(SomarNumeros($numero1, $numero2, $numero3, $numero4, $numero5) == 0){
        $msg ='Preencher todos os campos obrigatórios!';
    }else{
        $retorno = SomarNumeros($numero1, $numero2, $numero3, $numero4, $numero5);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msg) ? $msg : '' ?></span>
    <form action="pagina_3.php" method="POST">
        <label>Primeiro Número:</label>
        <input type="text" name="n1" value="<?= isset($numero1) ? $numero1 : '' ?>">
        <br>
        <label>Segundo Número:</label>
        <input type="text" name="n2" value="<?= isset($numero2) ? $numero2 : '' ?>">
        <br>
        <label>Terceiro Número:</label>
        <input type="text" name="n3" value="<?= isset($numero3) ? $numero3 : '' ?>">
        <br>
        <label>Quarto Número:</label>
        <input type="text" name="n4" value="<?= isset($numero4) ? $numero4 : '' ?>">
        <br>
        <label>Quinto Número:</label>
        <input type="text" name="n5" value="<?= isset($numero5) ? $numero5 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($retorno) ? $retorno : '' ?>">
</body>

</html>