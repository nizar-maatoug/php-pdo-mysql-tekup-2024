<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// String
$name = 'Brad Traversy';
$name2 = "John Doe";
var_dump($name); // Will show the value and type
echo '<br>';
echo getType($name); // Will just show string type
echo '<br>';

// Integer
$age = 35;
var_dump($age);
echo '<br>';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br>';

// Boolean
$is_loaded = true;
var_dump($is_loaded);
echo '<br>';

// Array
$friends = array('John', 'Jane', 'Jill');
var_dump($friends); // Will show the value and type for all elements
echo '<br>';
echo gettype($friends); // Will just show array type
echo '<br>';

// Object
$person = new stdClass();
var_dump($person);  // Will show the value and type for all elements
echo '<br>';
echo gettype($person); // Will just show object type
echo '<br>';

// Null
$car = null;
var_dump($car);
echo '<br>';

// Resource
// $file = fopen('sample.txt', 'r');
// echo gettype($file); // resource
// echo '<br>';
