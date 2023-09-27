<!DOCTYPE html>

<html lang="en-au">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Basic PHP - <?= $title ?></title>
  <style>
    body {
      background-color: #131313;
      color: crimson;
    }

    a:link,
    a:visited {
      color: #555;
    }

    .nav-link:hover {
      color: mediumspringgreen;
    }
  </style>
</head>

<body>
  <!-- Basic HTML -->
  <div class="container">
    <h1 class="text-center">Welcome to PHP</h1>

    <h2>Follow each link to the page example</h2>
    <ul class="nav">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="array.php">Simple Array & Printouts</a></li>
      <li class="nav-item"><a class="nav-link" href="forloop.php">Simple For Loop</a></li>
      <li class="nav-item"><a class="nav-link" href="whiledowhileloop.php">Simple While & Do While Loops</a></li>
      <li class="nav-item"><a class="nav-link" href="ifstatement.php">Simple If Statement</a></li>
      <li class="nav-item"><a class="nav-link" href="switchstatement.php">Simple Switch Statement</a></li>
      <li class="nav-item"><a class="nav-link" href="string-manipulation.php">String Manipulation</a></li>
      <li class="nav-item"><a class="nav-link" href="date-time-manipulation.php">Date & Time Manipulation</a></li>
      <li class="nav-item"><a class="nav-link" href="functions.php">Functions</a></li>
    </ul>

    <h1><?= $title ?></h1>