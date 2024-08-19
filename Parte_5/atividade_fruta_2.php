<?php

    if(isset($_POST['btnEnviar'])){
        $fruta1 = trim($_POST['fruta1']);
        $fruta2 = trim($_POST['fruta2']);
        $fruta3 = trim($_POST['fruta3']);
        $fruta4 = trim($_POST['fruta4']);
        $fruta5 = trim($_POST['fruta5']);
    
        if($fruta1 == '' || $fruta2 == '' || $fruta3 == '' || $fruta4 == '' || $fruta5 == ''){
            $msgError = ' <div style="color: #FF000; font-weight: bold;">Preencher o campo Primeiro Valor!</div>';
        }else{

            $frutas = array();

            $frutas[] = $fruta1; // Posição 0!
            $frutas[] = $fruta2; // Posição 1!
            $frutas[] = $fruta3; // Posição 2!
            $frutas[] = $fruta4; // Posição 3!
            $frutas[] = $fruta5; // Posição 4!

            for($i=0; $i < count($frutas); $i++){
        echo 'A fruta guardada na posição ' . $i . ' é: ' . $frutas[$i] . '.<br>';
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
    <title>Atividade 2 t</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_fruta_2.php" method="POST"> 
        <label> Digite a primeira fruta: </label>
        <input type="text" name="fruta1" value="<?= isset($fruta1) ? $fruta1 : '' ?>">
        <br>
        <label> Digite a segunda fruta: </label>
        <input type="text" name="fruta2" value="<?= isset($fruta2) ? $fruta2 : '' ?>">
        <br>
        <label> Digite a terceira fruta: </label>
        <input type="text" name="fruta3" value="<?= isset($fruta3) ? $fruta3 : '' ?>">
        <br>
        <label> Digite a quarta fruta: </label>
        <input type="text" name="fruta4" value="<?= isset($fruta4) ? $fruta4 : '' ?>">
        <br>
        <label> Digite a quinta fruta: </label>
        <input type="text" name="fruta5" value="<?= isset($fruta5) ? $fruta5 : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>