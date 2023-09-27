<?php

declare(strict_types=1);

$title = "Arrays";
?>

<?php include 'includes/header.php'; ?>

<?php
# Variable
$number = 13;

# Indexed Array
$values = [8, 16, 32, 64, 128];
$values_ = array(7, 14, 21, 28, 35, 42, 49, 56, 63, 70, 77, 84);
echo $number;
echo "<p>$values[0]</p>";
echo "<p>$values_[5]</p>";

$size = count($values_);
?>

<?php for ($i = 0; $i < 5; $i++) { ?>
  <p><?= $values[$i]; ?></p>
  <p><?= 7 * $i ?></p>
<?php } ?>

<p>Array length is: <?= count($values) ?></p>
<p><?= $size ?></p>

<?php for ($i = 1; $i <  13; $i++) {
  echo 7 * $i;
  echo "<br/>";
} ?>

<?php
for ($i = 0; $i < $size; $i++) {
  echo $values_[$i];
}

foreach ($values as $vals) {
  echo "<p><sup>$vals</sup></p>";
}
?>
<?php include 'includes/footer.php' ?>