<?php



// while loop 
$i = 1;
# => 12345
while ($i <= 5) {
    echo $i++;
}


// do while loop 
$i = 1;
# => 12345
do {
    echo $i++;
} while ($i <= 5);



// for loop
# => 123
for ($i = 1; $i <= 5; $i++) {
    if ($i === 4) {
        // break;
        // continue;
    }
    echo $i;
}



for ($i=0; $i < 1001; $i++)
{
    echo $i . '<br>';
    
}

//while loop
$i=0;
while ($i <= 10) {
    
    echo $i.'<br>';
    $i++;
}

$fruits = ['apple','banana','orange'];

foreach ($fruits as $fruit ) {
    echo 'waxaa kujira: '.$fruit.'<br>';
}



?>