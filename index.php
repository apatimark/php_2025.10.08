<?php
    var_dump(value: $_GET);
    $username = $_GET["username"];
    $water_temp = $_GET["water_temp"];
    $result;


    switch ($water_temp) {
        case $water_temp <= 0:
            $result = "Ice";
            break;
        case $water_temp > 0 && $water_temp < 100:
            $result = "Liquid";
            break;
        case $water_temp >= 100:
            $result = "Gas";
            break;
        
        default:
            $result = "Error, check your data";
            break;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halmazállapot és név</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>My First Excercise</h1>
            <p>The first excersie's description</p>
            <form action="#" method="GET">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
                <div class="form-group">
                    <label for="water_temp">Water Temperature</label>
                    <input type="number" name="water_temp" id="water_temp">
                </div>
                <div class="button-container">
                    <button>Calculate the form of the water</button>
                </div>
            </form>
            <p><strong>Feladat megoldása: </strong></p>
            <p><?php echo "The water's state is {$result}."?></p>
        </div>
    </div>
</body>
</html>