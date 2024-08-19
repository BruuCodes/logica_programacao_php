<?php
    if(isset($_POST['btnEnviar'])){
        $numero = trim($_POST['numero']);

        if($numero == ''){
            $msgError = ' <div style="color: #FF000; font-weight: bold;">Preencher o campo Primeiro Valor!</div>';
        }else{
            echo 'INÍCIO DP LAÇO DE REPETIÇÃO! =================================<br>';

            for($i=1; $i <= $numero; $i++){
                echo 'O valor digitado foi: ' . $numero . '.Posição Renderizada: ' . $i . '.<br>';
            }

            echo 'FIM DA REPETIÇÃO! ======================================<hr>';

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <label>Digite um número qualquer </label>
        <input type="number" name ="numero" value="<?= isset($numero) ? $numero : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>