<?php

require_once "../calc.php";

function test($firstNumber, $secondNumber, $operator) {
    $result = calc($firstNumber, $secondNumber, $operator);
    echo "calc($firstNumber, $secondNumber, $operator) = " . $result . PHP_EOL;
}

// Testes
test('10', '10', '+');
test('10', '10', '-');
test('10', '10', '*');
test('10',  '5', '/');
test('10',  '0', '/');
test('ab', '10', '+');
test('10', 'ab', '+');
test('',   '10', '+');
test('10',   '', '+');
test(' ',   ' ', '+');

echo "Teste finalizado!" . PHP_EOL;