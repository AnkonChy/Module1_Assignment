<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
    <link rel="stylesheet" href="./css files/temp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <label>Enter temperature </label>
            <input type="number" name="temperature"><br><br>
            <label for="">Select conversion</label>
            <select name="conversion" id="">
                <option value="ctof">Celsius to Fahrenheit</option>
                <option value="ftoc">Fahrenheit to celsius</option>
            </select><br><br>
            <button type="submit">Convert</button><br><br>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperature = $_POST["temperature"];
                $conversion = $_POST["conversion"];


                switch ($conversion) {
                    case "ctof":
                        $result = ($temperature * 9 / 5) + 32;
                        echo "Result: " . number_format($result, 2) . "°F";
                        break;

                    case "ftoc":
                        $result = ($temperature - 32) * 5 / 9;
                        echo "Result: " . number_format($result, 2) . "°C";
                        break;
                }
            }
            ?>
        </div>
    </div>

</body>

</html>