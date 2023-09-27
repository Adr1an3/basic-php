<?php

declare(strict_types=1);

$title = "Switch";

include 'includes/header.php';

$grade = "B";

switch ($grade) {
  case $grade === "A" || $grade === "A++":
    echo "<h2>You're a SUPERSTAR 💫<h2/>";
    break;
  case "B":
    echo "<h2 style='color: goldenrod'>You did well 🦉</h2>";
    break;
  case "C":
    echo "<h2 style='color:darkorange' >Maximum OVERDRIVE 🪵</h2>";
    break;
  default:
    echo "<h2 style='color:red'>Error</h2>";
};

include 'includes/footer.php';
