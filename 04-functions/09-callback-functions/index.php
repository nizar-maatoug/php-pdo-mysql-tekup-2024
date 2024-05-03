<?php

$numbers = [1, 2, 3, 4, 5];

// Define a callback function to square a number
$square = function ($number) {
  return $number * $number;
};

// Use array_map() with the callback function to square each number
$squaredNumbers = array_map(function ($number) {
  return $number * $number;
}, $numbers);

print_r($squaredNumbers);

// Custom function that takes in a callback
function applyCallback($callback, $value)
{
  return $callback($value);
}

// Define a callback function to double a number
$double = function ($number) {
  return $number * 2;
};

// Use our custom function to apply the callback
$result = applyCallback($double, 5); // Result: 10