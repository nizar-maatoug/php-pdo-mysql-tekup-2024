<?php

// Regular named function
function add($a, $b)
{
  return $a + $b;
}

// One line arrow function
$add = fn ($a, $b) => $a + $b;

// Can not do this:
// $add = fn ($a, $b) => {
//   return $a + $b;
// };


echo add(1, 2);
echo '<br>';
echo $add(1, 2);

// Arrow functions for callbacks
$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);

// print_r($squaredNumbers);
