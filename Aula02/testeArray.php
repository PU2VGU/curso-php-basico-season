<?php

$numbersA = ['one', 'two', 'tree'];

echo $numbersA[2];

echo "<br>";

$numbersB = ['one' => 1, 'two' => 2, 'tree' => 3];

echo $numbersB['one'];

echo "<br>";

$numbersC = ['brasil' => ['verde', 'amarelo', 'azul'],
             'eua'    => ['branco', 'azul', 'vermelho']];

$X = $numbersC['eua'];

echo "<br>";

print_r($X);

echo "<br>";

echo $X[1];
