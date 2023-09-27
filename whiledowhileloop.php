<?php

declare(strict_types=1);
?>

<!DOCTYPE html>

<html>

<head>
  <meta charset='utf-8'>
  <title>While & Do While Loops</title>
  <style>
    body {
      background-color: #131313;
      color: blueviolet;
    }
  </style>
</head>

<body>
  <h1>While & Do While Loops</h1>

  <h2>While Loop</h2>
  <?php
  # Pre Condition
  $x = 1;
  while ($x < 5) {
    echo "<p>$x</p>";
    $x++;
  }
  $grade = 1;
  while ($grade < 4) {
    echo "<p>I am less than 4</p>";
    $grade++;
  }
  echo "$grade";
  ?>

  <h2>Do While Loop</h2>
  <?php
  # Post Condition
  do {
    echo "<p>$x</p>";
    $x--;
  } while ($x > 0);

  $grade = 4;
  do {
    echo "<p>I'm a do while loop $grade</p>";
    $grade--;
  } while ($grade > 1);
  echo "Exit Loop: $grade";
  ?>
</body>

</html>