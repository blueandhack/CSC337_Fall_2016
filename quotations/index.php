<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 11/3/16
 * Time: 7:38 PM
 */
require_once './DataBaseAdaptor.php';

if ($_POST['quote'] != null) {
    $quote = $_POST['quote'];
    $author = $_POST['author'];
    $myDatabaseAdaptor->addQuote($quote, $author);
}

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
<button><a href="addQuote.html">Add Quote</a></button>
<?php
$all = $myDatabaseAdaptor->getQuotesAsArray();
foreach ($all as $record) {
    echo " <div class='box'><div class='quote'><div class='say'>\"" . $record['quote'] . "\"</div><br><div class='author'>- " . $record['author'] . "</div></div><div class='vote'> " . $record['vote'] . "</div></div>";
}
?>
</body>
</html>
