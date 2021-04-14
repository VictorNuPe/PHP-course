<?php

// Create array
$fruits = ['Banana', 'Apple', 'Orange'];

// Print the whole array
echo'<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1] . '<br>';

// Set element by indextt
$fruits[0] = 'Limon';

echo'<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); // true
isset($fruits[3]); // false

// Append element
echo'<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits) . '<br>';

// Add element at the end of the array
array_push($fruits, 'foo');
echo'<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo'<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
echo array_unshift($fruits, 'bar');
echo'<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($fruits);
echo'<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "Banana,Apple,Peach";
echo'<pre>';
var_dump(explode(",", $string));
echo '</pre>';

// Combine array elements into string
implode("&", $fruits);

// Check if element exist in the array
echo'<pre>';
var_dump(in_array('Mango', $fruits));
echo '</pre>';

// Search element index in the array
echo'<pre>';
var_dump(array_search('Apple', $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
echo'<pre>';
var_dump(array_merge($vegetables, $fruits));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// Sorting of array (Reverse order also)
echo'<pre>';
var_dump($fruits);
echo '</pre>';

sort($fruits);

echo'<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Victor',
    'surname' => 'Nunes',
    'age' => 19,
    'hobbies' => ['Tennis', 'Video Games']
];

var_dump($person);

// Get element by key
echo $person['name'] . '<br>';

// Set element by key
$person['channel'] = 'Travessuras do Vitão';
echo'<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
$person['address'] ??= 'unknown';
echo'<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array
echo'<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo'<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);
echo'<pre>';
var_dump($person);
echo '</pre>';

asort($person);
echo'<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0] . " in stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . " in stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . " in stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . " in stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
