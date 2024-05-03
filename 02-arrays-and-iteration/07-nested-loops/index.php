<?php
// for ($i = 0; $i < 5; $i++) {
//   for ($j = 0; $j < 5; $j++) {
//     echo $i . ' - ' . $j . '<br>';
//   }
// }

// $i = 0;

// while ($i < 5) {
//   $j = 0;

//   while ($j < 5) {
//     echo $i . ' - ' . $j . '<br>';
//     $j++;
//   }

//   $i++;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nested Loops & CSS Grid Example</title>
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: repeat(5, 50px);
      /* Create 5 columns, each 50px wide */
      grid-gap: 5px;
      /* Add some spacing between grid items */
    }

    .grid-item {
      width: 50px;
      height: 50px;
      background-color: lightblue;
      text-align: center;
      line-height: 50px;
    }
  </style>
</head>

<body>
  <div class="grid-container">
    <?php for ($i = 0; $i < 5; $i++) : ?>
      <?php for ($j = 0; $j < 5; $j++) : ?>
        <div class="grid-item">
          <?= $i . ' - ' . $j ?>
        </div>
      <?php endfor ?>
    <?php endfor ?>
  </div>
</body>

</html>