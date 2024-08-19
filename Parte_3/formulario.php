<?php

$campo1 = '';
$campo2 = '';
$campo3 = '';
$campo4 = '';
$campo5 = '';
$resultado = '';

if (isset($_POST['btnSomar'])) {
  $campo1 = $_POST['n1'];
  $campo2 = $_POST['n2'];
  $campo3 = $_POST['n3'];
  $campo4 = $_POST['n4'];
  $campo5 = $_POST['n5'];

  if ($campo1 == '' || $campo2 == '' || $campo3 == '' || $campo4 == '' || $campo5 == '') {
    echo 'Preencher todos os campos obrigatórios!';
  } else {
    $resultado = (($campo1 + $campo2) * 2) + $campo3 + $campo4 + $campo5;

    if ($resultado >= 100) {
      echo 'O resultado é maior que 100!';
    } else if ($resultado == 100) {
      echo 'O resultado é igual a 100!';
    } else {
      echo 'O resultado é menor que 100!';
    }
  }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade 1</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <form action="formulario.php" method="POST">
    <label> Campo 1: </label>
    <input type="number" name="n1" value="<?= $campo1 ?>">
    <br>
    <label> Campo 2:</label>
    <input type="number" name="n2" value="<?= $campo2 ?>">
    <br>
    <label> Campo 3: </label>
    <input type="number" name="n3" value="<?= $campo3 ?>">
    <br>
    <label> Campo 4: </label>
    <input type="number" name="n4" value="<?= $campo4 ?>">
    <br>
    <label> Campo 5: </label>
    <input type="number" name="n5" value="<?= $campo5 ?>">
    <br>
    <button name="btnSomar"> CALCULAR </button>
  </form>
  <span> Resultado Final:</span>
  <input disabled value="<?= $resultado ?>">
</body>

</html>