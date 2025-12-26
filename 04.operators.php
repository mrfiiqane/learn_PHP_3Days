<?php

$x = 1;
$y = 2;

$sum = $x + $y;
echo $sum;   # => 3
echo "\n";

$num1=10;

$num2=7;

$operator='-';

if ($operator=='+') {
    $sum=$num1+$num2;
 }elseif ($operator=='-') {
     $sum=$num1-$num2;
 }elseif ($operator=='*') {
     $sum=$num1*$num2;
 }else{
     $sum=$num1/$num2;
 }

echo $sum;

$iskuDarid=$num1+$num2;

$KalaJarid=$num1-$num2;

$iskuDhufasho=$num1*$num2;

$iskuQeybin=$num1/$num2;

echo $iskuDarid;
echo "<br>";
echo $KalaJarid;
echo "<br>";
echo $iskuDhufasho;
echo "<br>";
echo $iskuQeybin;








?>