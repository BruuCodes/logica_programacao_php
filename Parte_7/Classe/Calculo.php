<?php

class Calculo
{
    public function SomarNumeros($n1, $n2, $n3)
    {

        $soma = $n1 + $n2 + $n3;

        return $soma;
    }

    public function SomarLitros($tipoGas, $litros)
    {
        if ($tipoGas == '' || $litros == '') {
            return  0;
        } else {
            if ($tipoGas == 1) {
                $status = $this->Etanol($litros);
            } else if ($tipoGas == 2) {
                $status = $this->Gasolina($litros);
            }
            return $status;
        }
    }

    private function Etanol($litros)
    {
        $etanol = $litros * 4.19;
        return $etanol;
    }

    private function Gasolina($litros)
    {
        $gasolina = $litros * 5.20;
        return $gasolina;
    }

    public function Conversor($tipo, $temperetura)
    {
        if ($tipo == '' || $temperetura == '') {
            return 0;
        } else {
            if ($tipo == 1) {
                $msg = $this->Celsius($temperetura);
            } else if ($tipo == 2) {
                $msg = $this->Fahrenheit($temperetura);
            }
            return $msg;
        }
    }

    private function Celsius($temperetura)
    {
        $celsius = round((($temperetura * 9 / 5) + 32), 2);
        return $celsius;
    }

    private function Fahrenheit($temperetura)
    {
        $fahrenheit = round((($temperetura - 32) * 5 / 9), 2);
        return $fahrenheit;
    }

    public function CalcularSalario($meses, $salario, $lucro, $perda)
    {
        if ($meses == ''  || $salario == '' || $lucro == '' || $perda == '') {
            return 0;
        } else {
            $ganhos = $meses * $salario;
            $totalLucro = ($ganhos * $lucro) / 100;
            $totalPerda = ($ganhos * $perda) / 100;

            $resultado = ($ganhos + $totalLucro) - $totalPerda;
            return number_format($resultado, 2, ',', '.');
        }
    }
    public function GestordeTarefas($tarefa, $tarefa1, $tarefa2)
    {

        if ($tarefa1 == '' || $tarefa2 == '') {
            return 0;
        } else {
            $resultado =  $tarefa1 - $tarefa2;
            return $resultado;
            
        }
    }
}
