<?php
$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

// count
$output = count($ids);

// sort
sort($ids);
sort($users);

// rsort
rsort($ids);
rsort($users);

// array_push
array_push($ids, 100);
array_push($users, 'user4');

// array_pop
array_pop($ids);
array_pop($users);

// array_shift
array_shift($ids);
array_shift($users);

// array_unshift
array_unshift($ids, 100);
array_unshift($users, 'user3');

// array_slice
$ids2 = array_slice($ids, 2, 3);
// var_dump($ids2);

// array_splice
array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'New User');

// array_sum
$output = 'Sum of IDs: ' . array_sum($ids);

// array_search
$output = 'User 2 is at index: ' . array_search('user2', $users);

array_push($users, 'user3');
// in_array
$output = 'User 3 Exists: ' . in_array('user3', $users);

// explode
$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);
// var_dump($tagsArr);

// implode
$output = implode(', ', $users);

// PHP documentation](https://www.php.net/manual/en/ref.array.php).
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
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
      <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
      <p>
      <pre>
          <?php print_r($ids); ?>
        </pre>
      </p>
      <h2 class="text-xl font-semibold my-4">Users Array:</h2>
      <p>
      <pre>
          <?php print_r($users); ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>