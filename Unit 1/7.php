<!-- 7. Create two functions in PHP, parameterized and non parameterized for implementing
string concatenation operation. -->


<?php

function a(){
    $a="Hii";
    $b="Everybody";
    $r=$a .$b;
    echo "Non-Parameterized Concatenation: " . $r . "<br>";
}

function b($a,$b){
    $r= $a ." ". $b;
    echo "Parameterized Concatenation: " . $r . "<br>";
}

a();
b("Good","Morning");

?>