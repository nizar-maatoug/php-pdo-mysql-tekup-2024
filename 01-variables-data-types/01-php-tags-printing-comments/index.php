<?php
// This is a single-line comment
echo 'This is an echo statement';
echo '<br>';
print 'This is a print statement';
print '<br>';
// We can echo more than one string at a time by separating them with a comma
echo 'This is line 1', 'This is line 2';
echo '<br>';

/*
    This is a multi-line comment
    This is line 2
    This is line 3
  */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo 'Learn PHP From Scratch'; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= 'Learn PHP From Scratch' ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= 'Welcome to the course' ?></h2>
            <?= '<p>In this course, you will learn the fundamentals of the PHP language</p>' ?>
        </div>
    </div>
</body>

</html>