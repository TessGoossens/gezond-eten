<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>

<?php

$lengte = $_POST["height"];
$gewicht = $_POST["weight"];


$BMI = 0;

$BMI = round($gewicht / (($lengte/100) * ($lengte/100)));
?>

<div id="container">
        <div id="header">
            <div id="img">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Logo_ministerie_OCW.svg" width="500" height="333">
            </div>
           
            <h2>Gezond eten op school Het Ministerie van onderwijs</h2>
        </div>

    <div class="flexbox-container">
            <div class="flexbox-item flexbox-item-1">
                <div id="navcalc">
                    <br><br><br><br><br>
                    <h2>
                    <a href="http://localhost/project/websitegezondeten/Website/">home</a>
                    <br>
                    <a href="http://localhost/project/websitegezondeten/Website/recepten.html">Recepten</a>
                    <br>
                    <a href="http://localhost/project/websitegezondeten/Website/BMIform.php">BMI berekenen</a>
                    <br>
                    <br>
                    <br>
                    </h2>
                </div>
            </div>
            <div class="flexbox-item flexbox-item-2">
                <div class="uitkomst">
                    <?php
                     echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
                     echo "Lengte : $lengte in cm <br>";
                     echo "Gewicht : $gewicht in kg <br>";
                     echo "BMI : $BMI <br>";
                     echo "<br><br><br>";
                     echo "Minder dan 18,5 Ondergewicht. <br>";
                     echo "Tussen 18,5 en 25 Goed gewicht. <br>";
                     echo "Tussen 25 en 27 Licht overgewicht. <br>";
                     echo "Tussen 27 en 30 Matig overgewicht. <br>";
                     echo "Tussen 30 en 40 Ernstig overgewicht. <br>";
                     echo "Meer dan 40 Gevaarlijk overgewicht.<br><br><br><br>";
                    ?>
                </div>
            </div>
    </div>
        <div id="footer">
            Gemaakt door: Tess Goossens
        </div>
</div>

</html>
<?php


