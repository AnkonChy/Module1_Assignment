<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="./css files/grade.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <label for="">Test score 1</label>
            <input type="number" name="tscore1"><br><br>
            <label for="">Test score 2</label>
            <input type="number" name="tscore2"><br><br>
            <label for="">Test score 3</label>
            <input type="number" name="tscore3"><br><br>
            <button type="submit">Check result</button><br><br>
        </form>


        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $tscore1 = $_POST['tscore1'];
                $tscore2 = $_POST['tscore2'];
                $tscore3 = $_POST['tscore3'];

                $avg = ($tscore1 + $tscore2 + $tscore3) / 3;

                $status = ($avg >= 80 && $avg != 100)?"Average is : {$avg} <br><br>"."Grade : A":(($avg >=70 && $avg <80 && $avg !=100)?"Average is :{$avg} <br><br>"."Grade : B":(($avg >=60 && $avg <70 && $avg !=100)?"Average is :{$avg} <br><br>"."Grade : C":(($avg >=50 && $avg <60 && $avg !=100)?"Average is :{$avg} <br><br>"."Grade : D":"Average is : {$avg} <br><br>"."Grade : F")));
                echo $status;


                    // if ($avg >= 80 && $avg != 100) {
                //     echo "Average is : {$avg}" . "<br>";
                //     echo "Grade : A";
                // } elseif ($avg >= 70 && $avg < 80 && $avg != 100) {
                //     echo "Average is : {$avg}" . "<br>";
                //     echo "Grade : B";
                // } elseif ($avg >= 60 && $avg < 70 && $avg != 100) {
                //     echo "Average is : {$avg}" . "<br>";
                //     echo "Grade : C";
                // } elseif ($avg >= 50 && $avg < 60 && $avg != 100) {
                //     echo "Average is : {$avg}" . "<br>";
                //     echo "Grade : D";
                // } else {
                //     echo "Average is : {$avg}" . "<br>";
                //     echo "Grade : F";
                // }
            }
            ?>
        </div>
    </div>



</body>

</html>