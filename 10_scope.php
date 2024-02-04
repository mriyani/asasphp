<?php

// Variable scope
$x = 10; // local variable

function showX() {
    $x = 20; // defined later after error prompted
    echo $x;
}

showX();
// this will prompt an error as the variable $x is defined outside of the function scope
echo "<br>";
echo $x."<br>";

// Globals
// user defined/ declared a variable as global
$y = 100;

function showY() {
    global $y; // declare a global variable to access the value of the same variable name defined outside of the function
    echo $y;
}

showY();
echo "<br>";


?>
