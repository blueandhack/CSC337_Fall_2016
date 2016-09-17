<!DOCTYPE html>
<html>
<head>
    <title>Part 1</title>
    <meta charset="utf-8"/>
</head>
<?php
// Read data from input file and establish some local variables 
// $movie could be tmnt, tmnt2, mortalkombat, princessbride (see the folders
// in this project), or a new one.
//
// These PHP variables can be used anywhere below in a PHP block.
//
$movie = "princessbride";
$imageFileName = $movie . "/overview.png";
$infoTextFileName = $movie . "/info.txt";
$overviewTextFileName = $movie . "/overview.txt";
?>
<body>


<div class="banner">
    <img src="images/rancidbanner.png" alt="Rancid Tomatoes">
</div>

<h1><?php $infoTextFileName[0] ?> (<?php $infoTextFileName[1] ?>)</h1>

<div class="box">
    <div class="box-banner">
        <img src="images/rottenlarge.png" alt="Rotten"/>
        <div class="box-banner-text"><?php $infoTextFileName[2] ?>%</div>
    </div>

    <div class="poster">
        <img src="<?= $imageFileName ?>" alt="general overview"/>
    </div>


    <div class="right-sidebar">
        <dl>
            <?php
            for ($line = 0; $line < count($overviewTextFileName); $line++) {
                $string = explode(":", $overviewTextFileName);
                print ("<dt>" . $string[0] . "</dt><dd>" . $string[1] . "</dd>");
            }
            ?>
        </dl>
    </div>
    <div class="footer">
        <p>(1-10) of 88</p>
    </div>
</div>

</body>
</html>