<?php
declare(strict_types=1); // strict requirement

// Example 1
function getSum(int $a, int $b) : int {
  return $a + $b;
}

echo getSum(5, 10), '<br>';

// Example 2
function greeting(string $name) : string {
  return "Hello $name";
} 

echo greeting("John");


// Void return
function greeting2(string $name): void
{
  echo 'Hello ' . $name;
}

greeting2();

// https://www.php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration