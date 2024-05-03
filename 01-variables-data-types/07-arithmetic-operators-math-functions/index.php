 <?php
    $output = null;

    /*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

    $num1 = 20;
    $num2 = 10;

    // Basic arithmetic
    $output = "$num1 + $num2 = " . $num1 + $num2;
    $output = "$num1 - $num2 = " . $num1 - $num2;
    $output = "$num1 * $num2 = " . $num1 * $num2;
    $output = "$num1 / $num2 = " . $num1 / $num2;
    $output = "$num1 % $num2 = " . $num1 % $num2;

    // Appending Assignment Operator
    $num3 = 10;
    $num3 += 20; // $num3 = $num3 + 20;
    $num3 -= 5;
    $num3 *= 2;
    $num3 /= 2;

    $output = $num3;

    // rand() - Generates a random number
    $output = rand();
    $output = rand(1, 10);

     // round() - Rounds a floating-point number
    $output = round(4.5);

    // ciel() - Rounds a number up to the nearest integer
    $output = ceil(4.3);

    // floor() - Rounds a number down to the nearest integer
    $output = floor(4.7);

    // sqrt() - Returns the square root of a number
    $output = sqrt(64);

    // pi() - Returns the value of PI
    $output = pi();

    // abs() - Returns the absolute (positive) value of a number
    $output = abs(-4.7);

    // sqrt() - Returns the square root of a number
    $output = sqrt(64);

    // max() - Returns the highest value in a list or array of arguments
    $output = max(1, 2, 3);

    // min() - Returns the lowest value in a list or array of arguments
    $output = min([1, 2, 3]);

    // number_format() - Formats a number with grouped thousands
    number_format(1234567.891234, 2, '.', ',');


    // For more - https://www.php.net/manual/en/ref.math.php
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
             <p class="text-xl"><?= $output ?></p>
         </div>
     </div>
 </body>

 </html>