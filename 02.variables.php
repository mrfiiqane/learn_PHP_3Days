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

// Concatenate strings
echo "I'm learning PHP at " . $url;

$hello = "Hello, ";
$hello .= "World!";
echo $hello;   # => Hello, World!



?>