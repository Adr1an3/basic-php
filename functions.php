<?php

declare(strict_types=1);
?>

<!DOCTYPE html>

<html lang='en-au'>

<head>
  <meta charset=utf-8>
  <title>Functions</title>
  <style>
    body {
      background-color: #131313;
      color: dodgerblue;
    }

    code {
      color: #555;
    }
  </style>
</head>

<body>
  <h1>Functions</h1>
  <?php
  # Defining a function
  function writeMessage()
  {
    echo "Welcome to PHP functions";
  }

  function addNumbers(float $num1, float $num2) # Pass by value
  {
    $sum = $num1 + $num2;
    # $num2 = $num2 + 1;
    echo "The sum of $num1 and $num2 is: $sum";
  }

  $num = 32;

  function changeNumber(int &$num) # Pass by reference
  {
    # $num = $num + 10;
    $num += 10;
  }
  changeNumber($num);

  function returnProduct(int $num1, int $num2): int
  {
    $prod = $num1 * $num2;
    return $prod;
  }
  $return_value = returnProduct(12, 6);

  ?>
  <p><?= writeMessage() ?></p>
  <p><?= addNumbers(8, 56) ?></p>
  <p><?= addNumbers($num, 8) ?></p>
  <p><?= addNumbers(1.3, 3.3) ?></p>
  <p><?= $num ?></p>
  <p><?= $return_value ?></p>
  <p><?= returnProduct(4, 8) ?></p>
</body>

</html>