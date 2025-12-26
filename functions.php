<?php

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




?>