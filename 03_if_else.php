<?php
//  Even or Odd
    $num=11;
    if($num%2==0){
        echo "Even\n";
    }else echo "Odd\n";


    $grade=50;
    if($grade>=80 && $grade<= 100){
        echo "A+\n";
    }else if($grade>= 70&& $grade< 80){
        echo "A\n";
    }else if($grade>= 60 && $grade<70){
        echo "A-\n";
    }else{
        echo "Fail\n";
    }
?>