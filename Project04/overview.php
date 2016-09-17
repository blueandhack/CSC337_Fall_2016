<!DOCTYPE html>
<html>
<?php
// Read data from input file and establish some local variables
// $movie could be tmnt, tmnt2, mortalkombat, princessbride (see the folders
// in this project), or a new one.
//
// These PHP variables can be used anywhere below in a PHP block.
//
$movie = "./" . $_GET["film"];
$imageFileName = $movie . "/overview.png";
$infoTextFileName = file($movie . "/info.txt");
$overviewTextFileName = file($movie . "/overview.txt");
?>
<head>
    <title><?php print($infoTextFileName[0]) ?></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="movies.css">
</head>
<body>


<div class="banner">
    <img src="images/rancidbanner.png" alt="Rancid Tomatoes">
</div>

<h1><?php print($infoTextFileName[0]) ?> (<?php echo $infoTextFileName[1] ?>)</h1>

<div class="box">
    <div class="box-banner">
        <?php if ($infoTextFileName[2] < 60) { ?>
            <img src="images/rottenlarge.png" alt="Rotten"/>
        <?php } else { ?>
            <img src="images/freshlarge.png" alt="Rotten"/>
        <?php } ?>
        <div class="box-banner-text"><?php echo $infoTextFileName[2] ?>%</div>
    </div>

    <div class="poster">
        <img src="<?= $imageFileName ?>" alt="general overview"/>
    </div>


    <div class="right-sidebar">
        <dl>
            <?php
            for ($line = 0; $line < count($overviewTextFileName); $line++) {
                $string = explode(":", $overviewTextFileName[$line]);
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