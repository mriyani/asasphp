<?php

    // Variable
    
    //PHP supports the following data types:
    
    // String 
    // $nama = "Ali";
    // $nama = 'Amni';
    // var_dump($nama);
    
    //Integer => Whole numbers
    // $nombor = 5;
    // var_dump($nombor);
    
    // Float (floating point numbers - also called double)
    // $perpuluhan = 1.2;
    // var_dump($perpuluhan);
    
    // Boolean => 0,1; True,False
    // $x = 1;
    // $y = 1;
    // var_dump($x == $y);

    $a_bool = true;   // a bool
    $a_str  = "foo";  // a string
    $a_str2 = 'foo';  // a string
    $an_int = 12;     // an int

    var_dump($a_bool);
    var_dump($a_str);

    // If this is an integer, increment it by four
    if (is_int($an_int)) {
        $an_int += 4;
    }
    var_dump($an_int);

    // Array => 
    $animals = ['ayam','itik', 'kucing', 'kuda', 7];
    print_r($animals);
    echo '<br>';
    var_dump($animals);

    // NULL
    $x = "Hello Mike";
    $x = null;
    var_dump($x);
    
    $x = 5;
    var_dump($x);
    
    $x = "Hello";
    var_dump($x);
    
    // Object
    
    // Resource 
    
?>