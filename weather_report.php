<?php
$temperature = 32;

$result = ($temperature <= 0 ? "Temperature : $temperature"."<br>"."It's freezing!" : (($temperature > 0 && $temperature <= 15) ? "Temperature : $temperature"."<br>"."It's cool." : (($temperature > 15) ? "Temperature : $temperature"."<br>"."It's warm." : "Invalid temperature")));
echo $result;
