<?php
    var_dump(value: $_GET);
    if (isset($_GET['submit']) == true) {
        $username = $_GET["username"];
        $water_temp = $_GET["water_temp"];
        $result;

        if ($water_temp < 0) {
            $result = "Ice";
        }
        elseif ($water_temp > 0 && $water_temp < 100) {
            $result = "Liquid";
        }
        elseif ($water_temp >= 100) {
           $result = "Gas";
        }
        else{
            $result = "Error, check your data";
        }
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
                    <button name="submit" id="submit" type="submit">Calculate the form of the water</button>
                </div>
            </form>
            <p><strong>Feladat megoldása: </strong></p>

            <p><?php echo isset($_GET["submit"]) ? "The water's state is {$result}." : "Nyomj rá a számolás gombra!"?></p>
        </div>
    </div>
</body>
</html>