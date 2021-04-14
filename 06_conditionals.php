<?php

$age = 0;
$salary = 300000;

// Sample if
if ($age < 18) {
    echo 'You are underaged in Brazil!';
}

// Without circle braces
if ($age === 20) echo "You are an adult!";

// Sample if-else
if ($age < 18) {
    echo 'You are underaged in Brazil!';
} else {
    echo 'You are not underaged in Brazil!';
}

// if AND
if ($age > 20 && $salary === 30000) {
    echo 'Do something with your money';
}

// if OR
if ($age > 20 || $salary === 30000) {
    echo 'Do something with your life';
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary(irá setar o valor de myAge para 18 caso a variável age não exista)
$myAge = $age ?: 18;
echo'<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
// $myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';
// switch
$userRole = 'admin';

switch ($variable) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Value not recognized';
        break;
}
