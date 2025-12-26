<?php

$num = [1, 3, 5, 7, 9];
$num[5] = 11;
unset($num[2]);    // Delete variable
print_r($num);     # => 1 3 7 9 11
echo count($num);  # => 5


//indexed arrays

$cars = array("Toyota", "BMW", "Tesla");

echo $cars[2];


//Associative arrays

$age = array("Maxamed"=>"20", "Cali"=>"35", "Ismaaciil"=>"15");

echo $age['Ismaaciil'];

//Multidimentional arrays

$customersInfo = array(

    array("Maxamed", 20, "bixiyay"),
    array("Jaamac", 30, "la maqanyahay")

);

echo "Macmiilka magaciisu yahay: ".$customersInfo[1][0]." lacagta waa uu: ".$customersInfo[1][2];




?>