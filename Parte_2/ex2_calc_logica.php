<?php
    $numero1 = '';
    $numero2 = '';
    $numero3 = '';
    $numero4 = '';
    $numero5 = '';
    $soma = '';
    $multiplicacao = '';
    $divisao = '';
    $resultado = '';


    if(isset($_POST['btnCalcular'])){

        $numero1 = trim($_POST['v11']);
        $numero2 = trim($_POST['v12']);
        $numero3 = trim($_POST['v13']);
        $numero4 = trim($_POST['v14']);
        $numero5 = trim($_POST['v15']);

        // Forma menos indicada para resolver o exercício:

        $soma = $numero1 + $numero2 + $numero3;
        $multiplicacao = $numero4 + $numero5;
        $divisao = $soma / $multiplicacao;

        // Forma correta de resolver o exercício:

        $resultado = ($numero1 + $numero2 + $numero3) / ($numero4 * $numero5);

    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <form action="ex2_calc_logica.php" method="POST">
        <label> Primeiro Valor: </label>
        <input type="text" name="v11" value="<?= $numero1 ?>">
        <br>
        <label> Segunda Valor: </label>
        <input type="text" name="v12" value="<?= $numero2 ?>">
        <br>
        <label> Terça Valor: </label>
        <input type="text" name="v13" value="<?= $numero3 ?>">
        <br>
        <label> Quarta Valor: </label>
        <input type="text" name="v14" value="<?= $numero4 ?>">
        <br>
        <label> Quinta Valor: </label>
        <input type="text" name="v15" value="<?= $numero5 ?>">
        <br>
        <button name="btnCalcular"> CALCULAR</button>
    </form>
    <span> Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">

</body>

</html>