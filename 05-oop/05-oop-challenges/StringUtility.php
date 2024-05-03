<?php

class StringUtility
{
  public static function shout($string)
  {
    return strtoupper($string) . '!';
  }

  public static function whisper($string)
  {
    return strtolower($string) . '.';
  }

  public static function repeat($string, $times = 2)
  {
    return str_repeat($string, $times);
  }
}

echo StringUtility::shout('Hello World');

echo StringUtility::whisper('Hello World');

echo StringUtility::repeat('Hello World');
