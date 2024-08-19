<?php 

require_once 'Classe/Calculo.php';

$tarefa1 = '';
$tarefa2 = '';
$msgError = '';
$resultado = '';

if (isset($_POST['btnSomar'])){
    $tarefa1 = $_POST['tarefa1'];
    $tarefa2 = $_POST['tarefa2'];
   
    $tarefa = array();

    $tarefa[] = 'Arrumar a rotina';
    $tarefa[] = 'Tomar café';
    $tarefa[] = 'Limpar a casa';
    $tarefa[] = 'Tomar banho';
    $tarefa[] = 'Estudar';
    $tarefa[] = 'Ir trabalhar';
    $tarefa[] = 'Chegar em casa';
    $tarefa[] = 'Fazer janta';
    $tarefa[] = 'Tomar banho';
    $tarefa[] = 'Dormir';
    

    echo 'Resumo do dia! <br>';

    $objtarefa = new Calculo();
    $resultado = $objtarefa->GestordeTarefas($tarefa, $tarefa1, $tarefa2);
    
    if($tarefa1 == '' || $tarefa2 == ''){
        $msgError = '<strong>Preencher os campos obrigatórios!</strong>';
    } else if ($resultado >= 1 && $resultado <= 5) {
        echo  '<strong>O dia foi otimo! '.$resultado.' de tarefas !</strong> <br> <br>';
    }else if ($resultado >= 7){
        echo '<strong>O dia não foi muito bom. Você precisa realizar mais tarefas!</strong> <br> <br>';
    }else{
        for ($i = 0; $i < count($tarefa); $i++) {
          echo 'TAREFA REALIZADA:' . $tarefa[$i] . '<br>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tarefas</title>
</head>
<body>
        <form action="meuexemplo.php" method="POST">
        <span><?= isset($msgError) ? $msgError : '' ?></span>
            <label>Número de tarefas:</label>
            <input type="text" name="tarefa1" value="<?= $tarefa1 ?>">
            <br>
            <label>Tarefa concluídas:</label>
            <input type="text" name="tarefa2" value="<?= $tarefa2?>">
            <br>
            <button name='btnSomar'>SOMAR</button>
        </form>
        <span>Falta realizar:</span>
    <input disabled value="<?= $resultado ?>">
</body>

</html>