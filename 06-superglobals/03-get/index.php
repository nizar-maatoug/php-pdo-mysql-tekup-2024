<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

// var_dump($_GET);

// Using isset() to check if a variable is set
if (isset($_GET['name'])) {
  echo $_GET['name'];
}

// Using the null coalescing operator
echo $_GET['name'] ?? '';
echo $_GET['name'] ?? 'Guest';

// Assigning a variable using isset and ternary
$name = isset($_GET['name']) ? $_GET['name'] : 'Guest';

// Using the null coalescing operator
$name = $_GET['name'] ?? 'Guest';
