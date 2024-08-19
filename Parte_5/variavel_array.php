<?php

    $cor = array();

    $cor[] = 'Azul';
    $cor[] = 'Amarelo';
    $cor[] = 'Roxa';
    $cor[] = 'Lilas';
    $cor[] = 'Vermelho';
    $cor[] = 'Vermelho escuro';
    $cor[] = 'Vermelho claro';

    echo 'TOTAL: ' . count($cor) . '<br>';

    for ($i = 0; $i < count($cor); $i++) {
        echo 'A cor armazenada é:' . $cor[$i] . '<br>';
    }