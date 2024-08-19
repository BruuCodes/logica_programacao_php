<?php 
$inicio = '';
$meio = '';
$fim = ''; 


if(isset($_POST['btn_verificar'])){
    
    $inicio = $_POST['inicio'];
    $meio = $_POST['meio'];
    $fim = $_POST['fim'];

    if(trim($inicio) == '') {
        echo 'Preencher o campo Ínicio';
    } else if(trim($meio) == ''){
        echo 'Preencher o campo Meio';
    } else if(trim($fim) == ''){
        echo 'Preencher o campo Fim';
    }else {

        if ($inicio <= $meio && $meio <= $fim) {
            echo 'O número ' . $meio . ' está entre ' . $inicio . ' e ' . $fim;
        } else{
            echo 'O número ' . $meio . ' NÂO está entre ' .  $inicio . ' e ' . $fim;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="operadores_intervalo.php">
        <label> INICIO </label>
        <input type="text" name="inicio" value="<?=$inicio?>">

        <label> MEIO </label>
        <input type="text" name="meio" value="<?=$meio?>">

        <label> FINAL </label>
        <input type="text" name="fim" value="<?=$fim?>">


        <button name="btn_verificar"> Verificar </button>
    </form>

</body>

</html>