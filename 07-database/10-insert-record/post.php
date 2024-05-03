<?php
require_once 'database.php';

// Get id from query string
$id = $_GET['id'] ?? null;

// If id is null, redirect to index.php
if (!$id) {
  header('Location: index.php');
  exit;
}

// SELECT statement with placeholder for id
$sql = 'SELECT * FROM posts WHERE id = :id';

// Prepare the SELECT statement
$stmt = $pdo->prepare($sql);

// Params for prepared statement
$params = ['id' => $id];

// Execute the statement
$stmt->execute($params);

// Fetch the post from the database
$post = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $post['title'] ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $post['title']; ?></h2>
          <p class="text-gray-700 text-lg mt-2 mb-5"><?= $post['body']; ?></p>
          <a href="index.php">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>