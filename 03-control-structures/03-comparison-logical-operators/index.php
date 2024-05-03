<?php

/*
| Comparison Operators
| Operator | Description              |
| -------- | ------------------------ |
| ==       | Equal to                 |
| ===      | Identical to             |
| !=       | Not equal to             |
| <>       | Not equal to             |
| !==      | Not identical to         |
| <        | Less than                |
| >        | Greater than             |
| <=       | Less than or equal to    |
| >=       | Greater than or equal to |
*/

$x = 10;
$y = '10';

var_dump($x == $y); // true

var_dump($x === $y); // false

var_dump($x != $y); // false

var_dump($x <> $y); // false

var_dump($x !== $y); // true

var_dump($x < $y); // false

var_dump($x > $y); // false

var_dump($x <= $y); // true

var_dump($x >= $y); // true


/*
| Logical Operators
| Operator | Description            |
| -------- | ---------------------- |
| and      | True if both are true  |
| &&       | True if both are true  |
| or       | True if either is true |
| ||       | True if either is true |
| xor      | True if one is true    |
| !        | True if it is not true |
*/

$a = 10;
$b = 20;

var_dump($a == 10 and $b == 20); // true

var_dump($a == 10 or $b == 20); // true

var_dump($a == 10 xor $b == 20); // false

var_dump($a == 10 && $b == 20); // true

var_dump($a == 10 || $b == 20); // true

var_dump(!($x == 5)); // true
