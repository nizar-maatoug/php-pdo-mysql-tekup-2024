<?php

class MathUtility
{
  public static $pi = 3.14159;

  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

echo MathUtility::$pi . '<br>';
echo MathUtility::add(1, 2, 3, 4, 5) . '<br>';
