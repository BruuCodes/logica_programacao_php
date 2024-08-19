<?php

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['valor1']);   
        $valor2 = trim($_POST['valor2']);  
        $valor3 = trim($_POST['valor3']);
        $valor4 = trim($_POST['valor4']);
        $valor5 = trim($_POST['valor5']);
          
        if($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == ''){
            $msgError = '<div style = "color: red; font-family: tahoma;"> Prencher todos os campos Obrigatórios! </div><hr>';
        }else{
            header("location: 6_pagina.php?valor1=$valor1&valor2=$valor2&valor3=$valor3&valor4=$valor4&valor5=$valor5");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="5_pagina.php" method="POST">
        <label>Primeiro valor:</label>
        <input type="text" name="valor1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Segundo valor:</label>
        <input type="text" name="valor2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Terceiro valor:</label>
        <input type="text" name="valor3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <label>Quarto valor:</label>
        <input type="text" name="valor4" value="<?= isset($valor4) ? $valor4 : '' ?>">
        <br>
        <label>Quinto valor:</label>
        <input type="text" name="valor5" value="<?= isset($valor5) ? $valor5 : '' ?>">
        <br>
        <button name="btnCalcular"> CALCULAR </button>
    </form>
</body>
</html>