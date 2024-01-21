<?php

// Operators

// 1. Arithmetic Operators
    // + addition,
    echo "Addition<br><br>";
    echo 1 + 1;
    echo "<br>";
    echo "<br>";
    
    // addition, operasi tambah
    $x = 10;
    $y = 6;
    echo "Operasi arithmetic bagi nilai X = $x, Y= $y;";
    echo "<br>";
    echo "<br>";
    echo "Hasil tambah X;$x dengan Y;$y = ";
    echo $x + $y;
    echo "<br>";
    echo "<br>";
    
    // - subtraction, operasi tolak
    echo "Hasil tolak X;$x dengan Y;$y = ";
    echo $x - $y;
    echo "<br>";
    echo "<br>";
    
    // * multiplication, operasi darab
    echo "Hasil darab X;$x dengan Y;$y = ";
    echo $x * $y;
    echo "<br>";
    echo "<br>";
    
    // / division, operasi bahagi
    echo "Hasil bahagi X;$x dengan Y;$y = ";
    echo $x / $y;
    echo "<br>";
    echo "<br>";
    
    // % modulus, kiraan baki bagi hasil bahagi sesuatu nombor
    echo "Baki X;$x bahagi Y;$y = ";
    echo $x % $y;
    echo "<br>";
    echo "<br>";

    // ** exponentiation, kiraan kuasa
    echo "Hasil 3 dikuasakan dengan 3 ialah = ";
    echo 3**3;
    echo "<br>";
    echo "<br>";


// 2. Assignment Operators
echo "Assignment Operators<br><br>";
$a = 20;
$b = $a;
$c = $b;

echo "Nilai \$a=$a, \$b=\$a dan \$c=\$b<br>";
echo "Maka nilai \$a=$a, \$b=$a dan \$c=$b";
echo "<br>";
echo "<br>";

// 3. Penambahan berulang
echo "Increment Operators<br>";
$d = 7;
$d += 1;
// $d = $d + 1
echo "Nilai X terkini \$d = 7; \$d += 1 ialah: ";
echo $d;
echo "<br>";
echo "<br>";


// 4. Comparison Operators
echo "Comparison Operators<br><br>";
$d = 100;
$e = "100";
// Equality: Returns true if $x and $y have the same key/value pairs
echo "Adakah nilai \$d = 100 dan \$e = \"100\" adalah sama?<br>";
var_dump($d == $e);
echo "<br>";

// Identity: Returns true if $x and $y have the same key/value pairs in the same order and of the same types
echo "Adakah nilai dan jenis data \$d = 100 dan \$e = \"100\" adalah sama?<br>";
var_dump($d === $e);


// 4. Increment / Decrement Operators

$x = 10;  
// echo ++$x;
echo "<br>";
echo $x++, " <= is previous X value, but new X value is $x";
echo "<br>";
echo "<br>";


?>