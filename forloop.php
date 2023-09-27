<?php

declare(strict_types=1);

$title = "For Loops";
?>

<?php include 'includes/header.php'; ?>

<?php
# For Loops

for ($count = 1; $count < 6; $count++) {
  echo "<p>Loop : $count</p>";
}

for ($i = 1; $i < 4; $i++) {
  echo "<p>$i<p/>";
}

for ($i = 5; $i > 0; $i--) {
  echo "<p>$i</p>";
}

for ($i = 1; $i < 6; $i++) {
  if ($i === 3) {
    echo "<p>Welcome to PHP Loops $i</p>";
    break;
  }
}

?>

<?php include 'includes/footer.php'; ?>