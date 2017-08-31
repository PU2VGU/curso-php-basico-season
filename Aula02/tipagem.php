<?php


$verdade = true;
$inteiro = (int) $verdade;

Echo "O valor convertido é $inteiro <br>";

$A = "5";

$B = (int) $A;

echo gettype($B);

$C = "30";
$D = settype($C, "integer");

echo "<br>";
echo gettype($A);

echo "<br>";
echo gettype($B);


