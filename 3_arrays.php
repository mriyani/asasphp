<?php
// Arrays

// 1. Indexed arrays
$cars = ['Volvo', 'Proton', 'Mercedes', 'Produa', 'Toyota'];
var_dump($cars);

echo $cars[2];

$cars[3] = "Ford";

var_dump($cars);
echo $cars[3];
echo '<br>';
echo '<br>';

// 2. Associative arrays

// Key : value pair
$kereta = ["brand" => "Produa", "model" => "Bezza", "year" => 2020];

var_dump($kereta);
echo "<br>";

echo $kereta['model'];
echo "<br>";
echo "Tahun keluaran lama:";
echo $kereta['year'];
echo "<br>";

$kereta['year'] = 2022;
echo "Tahun keluaran baharu:";
echo$kereta['year'];
echo "<br>";
echo "<=====================================>";
echo "<br>";
echo "<br>";

$users = [
    ['name' => 'John', 'phone' => '012-3334444', 'sex' => 'male'], ['name' => 'Sofia', 'phone' => '011-2937854', 'sex' => 'female']
];

foreach ($users as $user) {
    // logic here with $id and $name
    echo "User's name: $user[name], Phone: $user[phone] and Jantina: $user[sex]<br>";
}



?>