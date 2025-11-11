<?php

$x=20;
function myFucntion(){
    echo $GLOBALS ['x'];
}

myFucntion();

echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME']
?>