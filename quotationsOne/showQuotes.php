<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 11/3/16
 * Time: 7:38 PM
 */
require_once './DataBaseAdaptor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quotes</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<div class="header">
    <h1>Quotes</h1>
</div>
<form class="button-form" action="index.php" method="get">
    <input hidden name="mode" value="new">
    <button class="button">Add Quote</button>
</form>
<?php
$all = $myDatabaseAdaptor->getQuotesAsArray();


foreach ($all as $record) {
    echo " <div class='box'><div class='quote'><div class='say'>\"" . $record['quote'] . "\"</div><br><div class='author'> - " . $record['author'] . "</div></div><div class='vote'> " . $record['vote'] . "</div><div class='up-down'>"
        . "<form class='up' action='controller.php' method='post'><input hidden name='up' value='up'><input hidden name='id' value='" . $record['id'] . "'><button>&#x25B2;</button></form><br>"
        . "<form class='down' action='controller.php' method='post'><input hidden name='down' value='down'><input hidden name='id' value='" . $record['id'] . "'><button>&#x25BC;</button></form></div></div>";
}
?>
</body>
</html>
