<?php
/*
Fizzbuzz Challenge:
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. Remember, you can use the modulus operator to check if a number is divisible by another number.
*/

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0) { // could also use ($i % 15 === 0)
      echo 'FizzBuzz';
  } elseif ($i % 3 === 0) {
      echo 'Fizz';
  } elseif ($i % 5 === 0) {
      echo 'Buzz';
  } else {
      echo $i;
  }

  echo '<br>';
}