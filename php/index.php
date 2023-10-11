<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>04 Laboratory Exercise 1</title>
</head>

<body>
  <?php
    $number = 40;

    echo "<h1>Odd or Even Number Checker</h1>";

    if($number % 2 == 0) {
      echo "<h2>" . $number . " is an Even number! </h2>";
    } else {
      echo "<h2>" . $number . " is an Odd number! </h2>";
    }
  ?>
</body>

</html>