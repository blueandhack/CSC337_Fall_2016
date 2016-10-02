<!DOCTYPE html>
<html lang="en">
<?php
// Read data from input file and establish some local variables
// $movie could be tmnt, tmnt2, mortalkombat, princessbride (see the folders
// in this project), or a new one.
//
// These PHP variables can be used anywhere below in a PHP block.
//
include "functions.php";

$getForm = $_POST["file_name"];
if ($getForm == "") {
    $getForm = "princessbride";
}

$movie = "./" . $getForm;
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

<div class="form">
    <form action="overview.php" method="post">
        <div>
            <select name="file_name" size="3">
                <option value="matrix">Matrix</option>
                <option value="mortalkombat">Mortal Kombat</option>
                <option value="princessbride">Princess Bride</option>
                <option value="tmnt">TMNT</option>
                <option value="tmnt2">TMNT2</option>
            </select>
            <input type="submit" value="Get Movie Overview">
        </div>
    </form>
</div>

<div class="box">
    <div class="box-banner">
        <?php if ($infoTextFileName[2] < 60) { ?>
            <img src="images/rottenlarge.png" alt="Rotten"/>
            <span class="box-banner-text"><?php echo $infoTextFileName[2] ?>%</span>
        <?php } else { ?>
            <img src="images/freshlarge.png" alt="Fresh"/>
            <span class="box-banner-text"><?php echo $infoTextFileName[2] ?>%</span>
        <?php } ?>
    </div>

    <div class="poster">
        <img src="<?= $imageFileName ?>" alt="general overview"/>
    </div>


    <?php
    $content = scandir($movie);

    $left = "";
    $right = "";

    $flag = 1;

    foreach ($content as $name) {
        $pos = strpos($name, "review");
        if ($pos !== false) {
            if ($flag % 2 == 1) {
                $left = $left . oneReview($movie . "/" . $name);
            } else {
                $right = $right . oneReview($movie . "/" . $name);
            }
            $flag++;
        }
    }
    ?>

    <div class="review">
        <div class="column">
            <div class="review-left">
                <?php echo $left ?>
            </div>
        </div>
        <div class="column">
            <div class="review-right">
                <?php echo $right ?>
            </div>
        </div>
    </div>

    <div class="right-sidebar">
        <dl>
            <?php
            for ($line = 0; $line < count($overviewTextFileName); $line++) {
                $string = explode(":", $overviewTextFileName [$line]);
                print ("<dt>" . $string [0] . "</dt><dd>" . $string [1] . "</dd>");
            }
            ?>
        </dl>
    </div>

    <div class="footer">
        <p><?php echo "1-" . ($flag - 1) . " of " . ($flag - 1) ?></p>
    </div>
</div>

</body>
</html>