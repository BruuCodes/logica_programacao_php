<?php

    if(isset($_POST['btnCalcular'])){
        $tabuada = $_POST['tabuada'];

        if($tabuada == ''){
            $msgError = ' <div style="color: #FF000; font-weight: bold;">Preencher o campo Primeiro Valor!</div>'; 
        }else{
        
            for($i=0; $i <= 10; $i++){
                echo $tabuada . ' x ' . $i . ' = ' . ($tabuada * $i) . '<br>';

            }

            echo '<hr>';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <h1>TABUADA.</h1>
    <form action="atividade_4.php" method="POST">
        <label> Selecione a Tabuada desejada: </label>
        <select name="tabuada" style="text-align: center;">
            <option value="">Selecione</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
</body>

</html>