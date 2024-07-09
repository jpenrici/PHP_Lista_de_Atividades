<?php

define('ERROR', 'Erro!'); // constante

function calc($first, $second, $oper) {
    $result = 0;

    if (empty($first) || empty($second)) {
        return ERROR;
    }

    if (!is_numeric($first) || !is_numeric($second)) {
        return ERROR;
    }

    switch ($oper) {
        case '+':
            $result = $first + $second;
            break;
        case '-':
            $result = $first - $second;
            break;
        case '*':
            $result = $first * $second;
            break;
        case '/':
            if ($second == 0) {
                $result = ERROR;
            } else {
                $result = $first / $second;
            }
            break;                                                
        
        default:
            $result = "";
            break;
    }

    return $result;
}
