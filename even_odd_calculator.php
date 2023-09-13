<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <link rel="stylesheet" href="./css files/evenOdd.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="">Enter any number</label><br><br>
            <input type="number" name="number"><br><br>
            <button type="submit">Check</button><br><br>
        </form>

      <div class="result">
        <?php
         if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number=$_POST["number"];

            if($number%2==0){
                echo "{$number} is a even number";
            }else{
                echo "{$number} is a odd number";
            }
         }
        ?>
      </div>
    </div>
</body>
</html>