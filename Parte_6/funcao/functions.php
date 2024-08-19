<?php

// strlen: comando nativo do php, que conta quantos caracteries existem em uma variavel ou parametro!

function ValidarNome($nome)
{
    if (strlen($nome) < 3) 
    {
        return 1;
    }
}

function ValidarDescricao($descriacao)
{
    if (strlen($descriacao) < 50) 
    {
        return 2;
    }
}

function ValidarSenha($senha)
{
    if (strlen($senha) < 6 || strlen($senha) > 8) 
    {
        return 3;
    }
}

function VerificarSenhas($senha, $repSenha)
{
    if ($senha != $repSenha) 
    {
        return 4;
    }
}

function CalcularSalario($dinheiro, $aumento)
{
    if ($dinheiro == '' || $aumento == '') 
    {
        return 0;
    } 
    else 
    {
        $calculo = $dinheiro + (($dinheiro * $aumento) / 100);

        return $calculo;
    }
}

function SomarNumeros($n1, $n2, $n3, $n4, $n5)
{

    if ($n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '') 
    {
        return 0;
    } 
    else 
    {
        $calculo = $n1 + $n2 + $n3 + ($n4 * $n5);
        return $calculo;
    }
}

function Somarmeses($janeiro, $fevereiro,  $marco, $abril, $maio, $junho, $julho, $agosto, $setembro, $outubro, $novembro, $dezembro)
{

    if ($janeiro == '' || $fevereiro == '' || $marco == '' || $abril == '' || $maio == '' || $junho == '' || $julho == '' || $agosto == '' || $setembro == '' || $outubro == '' || $novembro == '' || $dezembro == '') 
    {
        return 0;
    } 
    else 
    {
        $resultado = $janeiro + $fevereiro + $marco + $abril + $maio + $junho + $julho + $agosto + $setembro + $outubro + $novembro + $dezembro;
        return $resultado;
    }
}

function SomarCompra($valor, $quantidade)
{
    if ($valor == '' || $quantidade == '') 
    {
        return 0;
    } 
    else 
    {
        $calculo = $quantidade * $valor;
        return $calculo;
    }
}

function SomarValorFinal($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $valor10)
{
    if ($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == '' || $valor6 == '' || $valor7 == '' || $valor8 == '' || $valor9 == '' || $valor10 == '') 
    {
        return 0;
    } 
    else 
    {
        $calculo = ($valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7 + $valor8 + $valor9) / $valor10;
        return $calculo;
    }
}

