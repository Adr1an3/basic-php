<?php
$title = "Welcome";
?>

<?php require 'includes/header.php'; ?>

<p>Hello HTML</p>
<br />
<!-- Printing to HTML using echo -->
<?php
echo "Hello PHP";
echo "<br />";
echo "Second Line";
?>

<?php
$name = "Abraham Lincoln";
echo "<br />";
echo $name;
echo "<h2>$name: Vampire Hunter</h2>";
echo '<p>My name is ' . $name . '</p>';
echo '<p>' . $name . ' stars as ' . $name . ' in ' . $name . ': Vampire Hunter</p>';

$rating = "R18+";
echo '<p>Rating: ' . $rating . '</p>';

$user_rating = 7.7;
?>

<p>User Rating: <?php echo $user_rating ?></p>

<button class="btn btn-outline-warning mb-3">Button</button>
<button class="btn btn-outline-success mb-3">Button</button>
<button class="btn btn-outline-light mb-3">Button</button>

<?php require 'includes/footer.php' ?>