<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comparison Tool</title>
  <link rel="stylesheet" href=".//css files/comparison.css">
</head>

<body>

  <div class="container">
    <p>COMPARISON TOOL</p>
    <hr><br><br><br>
    <form action="" method="post">
      <label for="">Enter first number</label><br>
      <input type="number" name="num1"><br><br>
      <label for="">Enter second number</label><br>
      <input type="number" name="num2"><br><br>
      <button type="submit">Check</button><br><br>
    </form>

    <div class="result">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = ($num1 > $num2) ? "{$num1} is large number" : (($num2 > $num1) ? "{$num2} is large number" : "Both are equal number");
        echo $result;
      }
      ?>
    </div>
  </div>
</body>

</html>