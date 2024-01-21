<?php

// Loops @ Pengulangan

//1. Loops => used to execute the same block of code again and again, as long as a certain condition is true.

    //1.1 While => loop executes a block of code as long as the specified condition is true

    echo "While<br><br>";
    // example: 1
    $i = 1;
    while ($i < 6){
        echo "Nilai \$i ialah: $i<br>";
        $i++;
    }
    echo "<br>";
    // 1.2 For => loop is used when you know how many times the script should run.

    /*
    for (expression1, expression2, expression3) {
        code block
    }
    */

    echo "For<br><br>";
    //example: 2
    for ($i = 0; $i < 10; $i++) {
        echo "The number is : $i";
        echo "<br><br>";
    }

//2. Foreach => Loops through a block of code for each element in an array or each property in an object.

    echo "Foreach<br><br>";
    // example: 3
    $colors = ["red", "green", "blue", "yellow"];

    foreach ($colors as $x) {
    echo "$x <br>";
    }

