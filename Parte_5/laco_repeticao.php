<?php 

    $total = 100;

    if(isset($_POST['btnVer'])){
        $total = $_POST['qtd'];

        echo 'INICÍO DO LAÇO DE REPETIÇÃO<br><br>';

        for($i=0; $i<$total; $i++){
            echo 'valor da variável $i - ' . $i . '<br>';
        }
        
        echo '<br><br>FIM DA REPETIÇÃO';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Laço de Repetição</title>
</head>
<body>
    <form method="POST" action="laco_repeticao.php">
        <label>Informe a quantidade de vezes de repetição</label>
        <input type="text" name="qtd" value="<?= $total ?>">
        <button name="btnVer"> Ver resultado </button>
    </form>
</body>
</html>