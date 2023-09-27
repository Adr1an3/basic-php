<?php

declare(strict_types=1);

$phrase1 = "Student who came late";
$phrase2 = "in class, stand with Rock";
$first_name = "jessie";
$full_name = "jessie lincoln";
?>

<!DOCTYPE html>

<html lang='en-au'>

<head>
  <meta charset='utf-8'>
  <title>String Manipulation</title>
  <style>
    ::selection {
      color: tomato;
      background-color: #555;
      ;
    }

    body {
      background-color: #131313;
      color: mediumspringgreen;
    }

    code {
      color: #555;
    }
  </style>
</head>

<body>
  <h1>String Manipulation</h1>
  <p><?php echo $phrase1 . ", named Tiffany " . $phrase2 ?></p>
  <p><?= "<code>ucfirst('str')</code> : " . ucfirst($first_name) ?></p>
  <p><?= "<code>ucwords('str')</code> : " . ucwords($full_name) ?></p>
  <p><?= "<code>strtoupper('str')</code> : " . strtoupper($full_name) ?></p>
  <p><?= "<code>strtolower('str)</code> : " . strtolower("THIS WAS UPPER CASE") ?></p>
  <p><code>str_repeat("str", "int")</code> : <?= str_repeat("Nevada ", 5)  ?></p>
  <p><?= "Repeat String : " . str_repeat("Fox ", 3) . " Bear" ?></p>
  <p><?= "<code>strtoupper(str_repeat('str', 'int'))</code> : " . strtoupper(str_repeat("Frog ", 6)) ?></p>
  <p><code>substr("str", "int", "?int")</code> : <?= substr($full_name, 0, 6) ?></p>
  <p><code>ucfirst(substr('str', 'int', '?int'))</code> : <?= ucfirst(substr($full_name, 7)) ?></p>
  <p><code>strpos('str')</code> : <?= strpos("Haystack", "stack") ?></p>
  <p><code>strpos('str')</code> : <?= strpos("Haystack", "Flower") ?></p>
  <p><code>strchr('str', 'str', bool)</code> : <?= strchr($first_name, "s", true) ?></p>
  <p><code>strchr('str', 'str', bool)</code> : <?= strchr($first_name, 's', false) ?></p>
  <p><code>strchr('str', 'str')</code> : <?= strchr("Welcome", "c", true) ?></p>
  <p><code>strlen('str')</code> : <?= strlen($full_name) ?></p>
  <p><code>trim('str')</code> : <?= trim("  Welcome  ") ?></p>
  <p><code>ltrim('str')</code> : <?= ltrim("  to the family  ", "t") ?></p>
  <p><code>rtrim('str')</code> : <?= rtrim("  Son", "n") ?></p>
  <p><?= trim("$164.69", "$") ?></p>
  <p><code>str_replace("str", "str", "str", "int")</code> : <?= str_replace("stand", "sit", $phrase2) ?></p>
  <p><?= str_replace("welcome", "here, here", "Welcome, welcome") ?></p>
  <p><?= $phrase2 ?></p>
</body>

</html>