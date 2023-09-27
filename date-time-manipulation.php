<?php

declare(strict_types=1);
?>

<!DOCTYPE html>

<html lang='en-au'>

<head>
  <meta charset='utf-8'>
  <title>Date & Time Manipulation</title>
  <style>
    body {
      background-color: #131313;
      color: aqua;
    }

    code {
      color: #555;
    }
  </style>
</head>

<body>
  <h1>Date & Time Manipulation</h1>

  <?php
  $date_now = getdate();

  echo "Today's Date ";
  echo $date_now['mday'] . "<sup>th</sup> " . $date_now['mon'] . "<sup>th</sup> " . $date_now['year'];
  echo "<p><code>\$date = getdate(); \$date['mday']; \$date['mon']; \$date['year'];</code></p>";

  echo time();
  echo "<p><code>time();</code></p>";

  echo date("d/m/y G.i:s", time());
  echo "<p><code>date('d/m/y G.i:s', time());</code></p>";

  echo date("j F Y, g.i a", time());
  echo "<p><code>date('j F Y, g.i a', time());</code></p>"
  ?>
</body>

</html>