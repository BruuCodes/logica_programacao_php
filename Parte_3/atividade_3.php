<?php

    $nota_1 = '';
    $nota_2 = '';
    $nota_3 = '';
    $nota_4 = '';
    $resultado = '';

    if (isset($_POST["btnSomar"])) {
        $nota_1 = $_POST ['nota1'];
        $nota_2 = $_POST ['nota2'];
        $nota_3 = $_POST ['nota3'];
        $nota_4 = $_POST ['nota4'];

        if ($nota_1 == ''|| $nota_2 == ''|| $nota_3 == '' || $nota_4 == ''){
            echo 'Preencher os campos obrigatórios!';
        } else {
            $resultado = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;

            if($resultado >= 0 && $resultado < 39){
                echo 'REPROVADO';
            }else if($resultado >= 40 && $resultado < 59){
                echo 'EXAME';
            }else{
                echo 'APROVADO';
            }
        }
    }
?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3 </title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <label> Digite sua nota </label>
        <input type="text" name="nota1" value="<?= $nota_1 ?>">
        <br>
        <label> Digite sua nota </label>
        <input type="text" name="nota2" value="<?= $nota_2 ?>">
        <br>
        <label> Digite sua nota </label>
        <input type="text" name="nota3" value="<?= $nota_3 ?>">
        <br>
        <label> Digite sua nota </label>
        <input type="text" name="nota4" value="<?= $nota_4 ?>">
        <br>
        <button name="btnSomar">SOMAR </button>
    </form>
    <span> Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">  
</body>

</html>