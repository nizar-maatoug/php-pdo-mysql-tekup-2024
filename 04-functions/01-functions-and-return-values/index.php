<?php
// Simple Function
function sayHello() {
    echo 'Hello';
}

// Call the function
sayHello();
sayHello();
SayHello(); // Same as sayHello();

// Return a value
function sayGoodbye() {
    return 'Goodbye';
}

sayGoodbye(); // Nothing happens
echo sayGoodbye(); // Goodbye

// Store return value in a variable
$goodbye = sayGoodbye();
echo $goodbye;