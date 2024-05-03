<?php
$output = null;

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];

// Accessing elements
$output = $fruits[0][0];
$output = $fruits[1][0];


// Multidimensional Associative Arrays
$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 'secret'],
  ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => 'secret'],
  ['name' => 'Jane', 'email' => 'jane@gmail.com', 'password' => 'secret']
];

// Access email for the first user
$output = $users[0]['email'];

// Add a new user
$users[] = ['name' => 'Alex', 'email' => 'alex@gmail.com', 'password' => 'secret'];

// Remove the last user
array_pop($users);

// Remove the first user
array_shift($users);

// Remove a specific user
unset($users[1]);

// Count users/elements
$output = count($users) . ' users in the array';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <h2 class="text-2xl font-semibold mb-4">Output:</h2>
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
      <h2 class="text-xl font-semibold my-4">Users Array:</h2>
      <pre><?php print_r($users); ?></pre>
    </div>
  </div>
</body>

</html>