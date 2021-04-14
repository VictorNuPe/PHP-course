<?php

// Váriaveis em PHP são dinâmicas

// Variable types
/*
    String
    Integer
    Float/Double
    Boolean
    Null
    Array
    Object
    Resource
 */

// Declare variables
$name = 'Victor';
$age = 19;
$isMale = true;
$isFemale = false;
$height = 1.73;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>'; // O "." é usado para concatenação
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($name, $age, $salary, $height);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); //true
is_double($height); //true

// Check if variable is defined
isset($name); //true
isset($address); //false

// Constants
define('PI', 3.14);
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';

// END
