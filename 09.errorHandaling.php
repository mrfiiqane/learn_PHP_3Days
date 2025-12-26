<?php

// isset test for error handling
$studentName=null;
$studenPhone=123;

if (!isset($studentName)) {

    echo "fadlan geli magaca ardayga";
    
}elseif(!isset($studenPhone)){

    echo "Fadlan geli nambarka ardayga";

}else{

    echo "waad wada buuxisay";

}


// error handling with try catch finally
try {
    // Do something
} catch (Exception $e) {
    // Handle exception
} finally {
    echo "Always print!";
}


// exception
$nullableValue = null;

try {
	$value = $nullableValue ?? throw new InvalidArgumentException();
} catch (InvalidArgumentException) { // Variable is optional
    // Handle my exception
    echo "print me!";
}


?>