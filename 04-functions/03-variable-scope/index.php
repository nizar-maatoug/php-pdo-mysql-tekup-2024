<?php

// Global Scope
$name = 'Alice';

function sayHello() {
  // Local Scope
  global $name; // We can use the global keyword to access a global variable inside a function
  $name = 'Bob'; // Changing the value will only affect the local scope
  echo 'Hello ' . $name;
}

sayHello();

echo $name;

function sayGoodbye() {
  $names = ['John', 'Brad', 'Alice'];
  echo 'Goodbye ' . $names[1];
}

sayGoodbye();

echo $names[1]; // This will throw an error because $names is not defined in the global scope

