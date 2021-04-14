<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'Hello! I am Victor';
}

hello();

// Function with argument
function hellow($name)
{
    echo "Hello! I am $name";
}

hello('Victor');

// Create sum of two functions

// Create function to sum all numbers using ...$nums
function sum(...$nums)
{
    $sum = 0;

    foreach ($nums as $n) {
        $sum += $n;
    }
    return $sum;
}
echo sum(1, 2, 3, 4, 5, 6);

// Arrow functions
function sums(...$nums)
{
    array_reduce($nums, fn($carry, $n) => $carry + $n);
}


echo sum(1, 2, 3, 4, 5, 6);
