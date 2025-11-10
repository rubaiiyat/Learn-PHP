<?php
$name="John";
$age=30;
echo "Name: ". $name."\n"."Age: ".$age."\n";

$firstName="Jane";
$lastName="Doe";
echo "Full Name: ".$firstName." ".$lastName."\n";

$num1=30;
$num2=30;

echo $num1+$num2."\n";

// Floating point number
$pi=3.14;
echo number_format($pi*5,5)."\n";

// Boolean
$isStudent=false;
if($isStudent){
    echo "He is a student"."\n";
} else {
    echo "He is not a student"."\n";
}

// Check Type
$pi2=3.14;
echo gettype($pi2)."\n";


// Type Casting
$sub1="50";
$sub2="40";
$total=intval($sub1)+intval($sub2);
echo $total."\n";
?>


