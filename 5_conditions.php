<?php

// Loops @ Pengulangan
echo "Loops<br><br>";

// 1. if => statement executes some code if one condition is true.

    /*

    if (condition) {
        code to be executed if condition is true;
    }

    */

    echo "If<br><br>";
    //example: 1.1
    $menu = "ayam goreng";

    if ($menu == 'ayam goreng') 
    {
        echo "Menu kegemaran saya ialah $menu<br><br>";
    }

    //example: 1.2
    $nombor = 100;

    if ($nombor == 100)
    {
        echo "Nombor yang diberikan adalah $nombor <br><br>";
    }

    // example: 1.3
    $t = 10;

    if ($t < 20)
    {
        echo "Nilai \$t=$t adalah kurang daripada 20<br><br>";
    }

    //example: 1.4
    $a = 5;
    $b = 15;

    if ($a > 5 || $b < 20 )
    {
        echo "Nilai $a > 5, tetapi $b < 20<br><br>";
    }

    
    // 2. if...else => statement executes some code if a condition is true and another code if that condition is false.
    
    /*
    
    if (condition) {
        code to be executed if condition is true;
    } else {
        code to be executed if condition is false;
    }
    
    */
    
    
    echo "If..else..<br><br>";
    // example: 2.1
    $x = 'a';  
    $y = 50;
    // Check if both x and y condition values are same with the above variables value
    if ($x == 'a' AND $y == 50) {
        echo "Ya, nilai X dan Y adalah 'Betul'!";
    } else {
        echo "Tidak, nilai X dan Y adalah 'Salah!'";
    }
    echo "<br>";
    echo "<br>";


    //example: 2.2
    $username = 'ema';
    $password = '12';

    if ($username == 'ema' && $password == '123') 
    {
        echo "Username =>'$username'<= adalah betul";
    } else 
    {
        echo "Username or Password is incorrect!<br><br>";
    }


// 3. if...elseif..else => statement - executes different codes for more than two conditions.

    /*

    if (condition) {
        code to be executed if this condition is true;
    } elseif (condition) {
        code to be executed if first condition is false and this condition is true;
    } else {
        code to be executed if all conditions are false;
    }

    */

    echo "If..elseif..else..<br><br>";
    //example: 3.1
    $x = 10;
    
    if ($x < 20) 
    {
        echo "Nilai $x adalah < 20<br><br>";
    } elseif ($x == 20) {
        echo "Nilai $x adalah = 20<br><br>";
    } else {
        echo "Nilai $x adalah > 20<br><br>";
    }


//4. Switch => Use the switch statement to select one of many blocks of code to be executed
    /* 
    switch (expression) {
        case label1:
          code block
          break;
        case label2:
          code block;
          break;
        case label3:
          code block
          break;
        default:
          code block
      }
    */

    echo "Switch<br><br>";
    // example: 4.1
    $favcolors = 'black';

    switch ($favcolors) {

        case 'blue':
            echo "My fav color is Blue<br><br>";
            break;
        case 'pink':
            echo "My fav color is Pink<br><br>";
            break;
        case 'red':
            echo "My fav color is Red<br><br>";
            break;
        default:
            echo "My fav color is not in the list<br><br>";
    }

    // example: to show the list of the colors from the $colors array 
    $colors = ["red", "green", "blue", "yellow"];

    foreach ($colors as $x) {
    echo "$x <br>";
    }

