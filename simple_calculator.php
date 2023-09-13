<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="./css files/simpleCal.css">
    <style>
        <?php include ".//css/conceptual2.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <p>SIMPLE CALCULATOR</p><hr><br><br>

            <input type="number" placeholder="Enter first number" name="num1"><br><br>
            <input type="number" placeholder="Enter second number" name="num2"><br><br>
            <select name="calculation" id="">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="mul">Multiplication</option>
                <option value="div">Division</option>
            </select><br>
            <br>
            <button type="submit">Calculate</button><br><br>
        </form>

        <div name="result">

            <?php


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                $calculation = $_POST["calculation"];

                switch ($calculation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "Result: The sum is $result";
                        break;

                    case "sub":
                        $result = $num1 - $num2;
                        echo "Result: Subtraction is $result";
                        break;

                    case "mul":
                        $result = $num1 * $num2;
                        echo "Result: Multiplication is $result";
                        break;


                    case "div":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: Division is $result";
                        } else
                            echo "Cannot calculate";
                        break;
                }
            }

            ?>
        </div>



    </div>
</body>

</html>