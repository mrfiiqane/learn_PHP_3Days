<?php

// variables in PHP
$boolean1 = true;
$boolean2 = false;

$int = 12;
$float = 3.1415926;
unset($float);  // Delete variable

$str1 = "How are you?";
$str2 = 'Fine, thanks';

$customerName="Maxamed maxamuud";
$customerPhone=123456;
echo $customerPhone;


// string in php
$greeting = "Hello, $customerName"; // double quotes allow variable interpolation

$url = "sourcecode.zip";
echo "I'm learning PHP at $url";

$customerName="Cali Nuur maxamed";
$customerPhone=434356;




// Concatenate strings
echo "I'm learning PHP at " . $url;

$hello = "Hello, ";
$hello .= "World!";
echo $hello;   # => Hello, World!

const MY_CONST = "hello";

echo MY_CONST;   # => hello

# => MY_CONST is: hello
echo 'MY_CONST is: ' . MY_CONST;


?>