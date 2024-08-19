<?php

  $resultado = '';
  $primeiroaumento = '';
  $segundodaumento = '';
  $totaldeaumento = '';
  $salario = '';

  if(isset($_POST["btnSomar"])){
    $salario = trim($_POST['s1']);

    if($salario == ''){
      echo 'Preencher todos os campos obrigatórios!';
    }else{
      $primeiroaumento = ($salario * 15) / 100;
      $segundodaumento = ($salario * 18) / 100;
      $totaldeaumento = $primeiroaumento + $segundodaumento;
      $resultado = $salario + $totaldeaumento;

      if($totaldeaumento <= 0){
        echo 'Não houve aumento';
      }else if($totaldeaumento <= 100){
        echo 'Aumento RUIM';
      }else if ($totaldeaumento > 100 && $totaldeaumento <= 200){
        echo 'Aumento RAZOAVEL!';
      }else if ($totaldeaumento > 200 && $totaldeaumento <= 300){
        echo 'Aumento BOM';
      }else if ($totaldeaumento > 300 && $totaldeaumento <= 400){
        echo 'Aumento ÓTIMO!';
      }else{
        echo 'Aumento EXCELENTE!';
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_6</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <form action = "atividade_6.php" method="POST">
    <label> Informe seu salario </label>
        <input type="text" name="s1" value="<?= $salario ?>">
        <br>
        <button name="btnSomar"> Calcular </button>6
  </form>  
  <br>
  <span> Resultado Final </span>
  <input disabled value ="<?= $resultado ?>"> 
  <br> 
  <span> Resultado do primeiro aumento </span>
  <input disabled value ="<?= $primeiroaumento ?>"> 
  <br> 
  <span> Resultado do segundo aumento </span>
  <input disabled value ="<?= $segundodaumento ?>"> 
  <br> 
  <span> Total de aumento </span>
  <input disabled value ="<?= $totaldeaumento ?>"> 
  <br> 
</body>
</html>