<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 11/3/16
 * Time: 7:38 PM
 */

if (isset ($_GET ['mode'])) {
    if ($_GET ['mode'] === 'new')
        require_once("./addQuote.html");
} else { // default
    require_once("./showQuotes.php");
}