<?php

// Here are the rules for creating new PHP functions:

// Function names must start with a letter or an underscore.
// Function names cannot contain spaces.
// Function names are not case-sensitive.
// Function names cannot be the same as reserved keywords.
// Function names should be descriptive and reflect what the function does.
// Function arguments are optional, but if you do define arguments, they must be declared in the function definition. Arguments can be passed to functions by value or by reference.

// Function bodies can contain any valid PHP code, including other functions. Functions can also return values.

// Here is an example of a valid PHP function:


function calculateAge($sanadkaDhalashada)
{
    $sanadkaLagujiro=date('Y');
    $age=$sanadkaLagujiro-$sanadkaDhalashada;

    return $age;
}

$magacaArdayga="Xaliima Faarax";
$sanadkaDhalashada=1987;
$dada=calculateAge($sanadkaDhalashada);

echo $dada;


function add($num1, $num2 = 1) {
    return $num1 + $num2;
}
function mul($num1, $num2 = 1) {
    return $num1 * $num2;
}
echo add(10, 20); 
echo mul(10, 5); 


// defecult paremeter 
function coffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
# => Making a cup of cappuccino.
echo coffee();



// arrow functions
$y = 1;
$fn1 = fn($x) => $x + $y;

// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
echo $fn1(5);   # => 6
echo $fn2(5);   # => 6


function bar(): iterable {
    return [1, 2, 3];
}
function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}
foreach (bar() as $value) {
    echo $value;   # => 123
}

?>