<?php
if(isset($_POST['btn_mostrar'])){
    $nome = $_POST['nome_usuario'];
    $sobrenome = $_POST['sobrenome_usuario'];
    $Rua = $_POST['endereço'];
    $Bairro = $_POST['bairro'];
    $CEP = $_POST['cep_usuario'];
    
    echo 'Nome completo: <br> ' . $nome . ' ' . $sobrenome . ' <br> ' . $Rua . ' <br> ' . $Bairro . ' <br> ' . $CEP;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formulario.php" method="post">
        <label>Nome:</label>
        <input name="nome_usuario">
        <label> <br> Sobrenome: </label> 
        <input type="text" name="sobrenome_usuario">
        <label> <br> Rua:</label> 
        <input name="endereço">
        <label> <br> Bairro:</label> 
        <input name="bairro">
        <label> <br> CEP:</label> 
        <input name="cep_usuario"> 
        <button name="btn_mostrar"> Mostrar </button>
    </form>


</body>

</html>