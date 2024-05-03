<?php
// Setting environment variables:
putenv('DB_HOST=localhost');
putenv('DB_USER=john');

// Getting environment variables:
$host = getenv('DB_HOST');
$user = getenv('DB_USER');

// Getting all environment variables:
$env = getenv();

// Using $_GLOBALS
function test()
{
  $foo = "local variable";

  echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
  echo '$foo in current scope: ' . $foo . "<br>";
}

$foo = "Example content";
test();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">System Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">DB Host:</strong>
        <?= $host ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">DB User:</strong>
        <?= $user ?>
      </div>

    </div>
</body>

</html>