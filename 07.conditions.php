<?php

$a = 10;
$b = 20;

if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}


$x = 0;
switch ($x) {
    case '0':
        print "it's zero";
        break;
    case 'two':
    case 'three':
        // do something
        break;
    default:
        // do something
}


# => Does
print (false ? 'Not' : 'Does');

$x = false;
# => Does
print($x ?: 'Does');

$a = null;
$b = 'Does print';
# => a is unset
echo $a ?? 'a is unset';
# => print
echo $b ?? 'b is unset';



$statusCode = 500;
$message = match($statusCode) {
  200, 300 => null,
  400 => 'not found',
  500 => 'server error',
  default => 'known status code',
};
echo $message; # => server error


$age = 20;

$result = match (true) {
    $age >= 65 => 'senior',
    $age >= 25 => 'adult',
    $age >= 18 => 'young adult',
    default => 'kid',
};

echo $result; # => young adult



$studentName="Maxamed Cali";
$studentFee=200;
$paymentStatus=true;

if($paymentStatus==false)

    {
        echo $studentName . " Lacagtii fee-ga ee ahayd ". $studentFee . " Muusan bixin";
    }
    else
    {
        echo $studentName."Ardaygaasi lacagtii wuu bixiyay"; 
    }

?>