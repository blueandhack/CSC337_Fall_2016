<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 10/1/16
 * Time: 3:33 PM
 */

function oneReview($filename)
{
    $result = "";
    $lines = file($filename);

    $img = "";
    $alt = "";
    if (rtrim($lines[1]) === "ROTTEN") {
        $img = "rotten.gif";
        $alt = "Rotten";
    } else {
        $img = "fresh.gif";
        $alt = "Fresh";
    }

    $result = $result . '<p class="review-box-section"><img src="images/' . $img . '" alt="' . $alt . '"/> <q>' . $lines[0] . '</q></p><p class="review-people">
                    <img src="images/critic.gif" alt="Critic"/> ' . $lines[2] . ' <br/> ' . $lines[3] . '</p>';

    return $result;
}
?>