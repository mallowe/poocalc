<html>
<head>
<title>Poopcalculator Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css"></head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160696137-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-160696137-1');
    </script>
<?php

//Global variables

$sheets_per_roll = 71;
$number_of_rolls = $_GET["number_of_rolls"];
$sheets_per_poop = 8;
$poops_per_day = $_GET["poops_per_day"];
$people_in_house = $_GET["people_in_house"];

//Global functions

function householdPoos(){
    global $sheets_per_roll, $number_of_rolls, $total_sheets, $sheets_per_poop, $total_poops, $poops_per_day, $daily_poops, $people_in_house;
    $total_sheets = 0;
    $total_poops = 0;
    $daily_poops = 0;
    $days_left = 0;
    $total_sheets = $sheets_per_roll * $number_of_rolls;
    $total_poops = $total_sheets / $sheets_per_poop;
    $daily_poops = $total_poops / $poops_per_day;
    $days_left = $daily_poops / $people_in_house;
    echo (round($days_left));
}

?>
<body>
<div class="container">
    </div class="row">
        <div class="col bg-info text-uppercase">
        <h1>Coronavirus poopcalulator</h1>
        </div>
            <p>You will run out of loo rolls in: <h2><?php householdPoos();?></h2>days time</p>
    </div>
</div>

    </body>
</html>
