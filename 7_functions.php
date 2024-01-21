<?php

// Function
    // 1. Block of statements, can be used repeatedly
    // 2. Will not execute automatically when a page loads
    // 3. Will be executed by a call to the function

    // Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.

    // 1. Call Function

    // example: 1
    function myMessage () {
        echo "My first function. FUYYOOO!!!<br><br>";
    }

    myMessage();

    // 2. Function Arguments

    // example: 2
    function myName($fname,$mname,$lname) {
        echo "Nama saya ialah  $lname $mname $fname<br>";
    }

    myName('Iron','', 'Man');
    myName('John','', 'Smith');
    myName('Fatiha','', 'Borhan');
    myName('Fatiha','Binti', 'Borhan');

    // 3. Function Arguments with default value

    // example: 3
    function printName($fname = "Hensome",$lname = "Sangat") {
        echo "<br>Nama saya ialah  $fname $lname<br>";
    }

    printName();
    printName('Ali'); // Call function with parameter
    printName('John','Smith'); // Call function with parameters

    // 4. Function - returning value
    
    // example: 4
    function tambah($x,$y) {
        $htambah = $x + $y;
        return $htambah;
    }
    
    echo "<br>Hasil 5 + 10 = " . tambah(5,10) . "<br>";
    echo "Hasil 20 + 20 = " . tambah(20,20) . "<br>";
