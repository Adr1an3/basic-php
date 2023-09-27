<?php

declare(strict_types=1);
?>

<!DOCTYPE html>

<html lang="en-au">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='x-ua-compatible' content='ie-edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>PHP &dash; If Statements</title>
  <style>
    body {
      background-color: #131313;
      color: crimson;
    }
  </style>
</head>

<body>
  <?php
  echo '<h2>If Statement</h2>';

  $grade = 80;
  # == === > < >= <=
  if ($grade >= 50) {
    echo "<h3 style='color: yellowgreen;'>Pass</h3>";
  } else {
    echo "<h3 style='color: darkred;'>Failed</h3>";
  }

  $grade = "A";

  if ($grade === "A" || $grade === "A+") {
    echo "<h3 style='color:goldenrod;'>You're a SUPERSTAR! 💫</h3>";
  } elseif ($grade === "B") {
    echo "<h3 style='color:yellowgreen;'>Well Done ✔️</h3>";
  } else {
    echo "<h3 style='color:darkred;'>You have failed 🗑️</h3>";
  }
  ?>

</body>

</html>