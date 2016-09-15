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
<img src="images/rancidbanner.png" alt="Rancid Tomatoes">

<img src="<?= $imageFileName ?>" alt="Overview image">

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

    <div class="review">
        <div class="column">
            <div class="review-left">
                <p class="review-box-section">
                    <img src="images/rotten.gif" alt="Rotten"/> <q>Ditching the
                        cheeky, self-aware wink that helped to excuse the concept's
                        inherent corniness, the movie attempts to look polished and
                        'cool,' but the been-there animation can't compete with the
                        then-cutting-edge puppetry of the 1990 live-action movie.</q>
                </p>

                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Peter Debruge <br/>
                    Variety
                </p>

                <p class="review-box-section">

                    <img src="images/fresh.gif" alt="Fresh"/> <q>TMNT is a fun,
                        action-filled adventure that will satisfy longtime fans and
                        generate a legion of new ones.</q>
                </p>

                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Todd Gilchrist <br/>
                    IGN Movies
                </p>

                <p class="review-box-section">

                    <img src="images/rotten.gif" alt="Rotten"/> <q>It stinks!</q>
                </p>

                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Jay Sherman<br/>
                    (unemployed)
                </p>

                <p class="review-box-section">

                    <img src="images/rotten.gif" alt="Rotten"/> <q>The rubber
                        suits are gone and they've been redone with fancy computer
                        technology, but that hasn't stopped them from becoming dull.</q>
                </p>

                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Joshua Tyler <br/>
                    CinemaBlend.com
                </p>

                <p class="review-box-section">

                    <img src="images/rotten.gif" alt="Rotten"/> <q> It takes
                        more than an awkward title attempting to sound cool to overcome
                        its mundane plot and silly dialogue.</q>
                </p>
                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Yujia Lin <br/>
                    University of Arizona
                </p>
            </div>
        </div>
        <div class="column">
            <div class="review-right">
                <p class="review-box-section">
                    <img src="images/rotten.gif" alt="Rotten"/> <q>The turtles
                        themselves may look prettier, but are no smarter; torn
                        irreparably from their countercultural roots, our superheroes on
                        the half shell have been firmly co-opted by the industry their
                        creators once sought to spoof.</q>
                </p>
                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Jeannette Catsoulis
                    <br/> New York Times
                </p>

                <p class="review-box-section">
                    <img src="images/rotten.gif" alt="Rotten"/> <q>Impersonally
                        animated and arbitrarily plotted, the story appears to have been
                        made up as the filmmakers went along.</q>
                </p>
                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Ed Gonzalez <br/>
                    Slant Magazine
                </p>
                <p class="review-box-section">
                    <img src="images/fresh.gif" alt="Fresh"/> <q>The striking
                        use of image and motion allows each sequence to leave an
                        impression. It's an accomplished restart to this franchise.</q>
                </p>

                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Mark Palermo <br/>
                    Coast (Halifax, Nova Scotia)
                </p>
                <p class="review-box-section">
                    <img src="images/rotten.gif" alt="Rotten"/> <q>The script
                        feels like it was computer generated. This mechanical
                        presentation lacks the cheesy charm of the three live action
                        films.</q>
                </p>

                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Steve Rhodes <br/>
                    Internet Reviews
                </p>
                <p class="review-box-section">

                    <img src="images/rotten.gif" alt="Rotten"/> <q>This mediocre
                        computer-generated action flick is packed full of monsters and
                        sword-fights, but the story-telling is about as deft as a turtle
                        turned on its back, struggling to get up but going nowhere fast.</q>
                </p>

                <p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> Yujia Lin <br/>
                    University of Arizona
                </p>
            </div>
        </div>
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