<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Purchase Receipt</title>
</head>
<body>
<?php
date_default_timezone_set('America/Phoenix');
$receiptDate = date("d-M-Y");
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$size = $_POST['size'];
$number = $_POST['number'];
$value = 0;
$total = 0;
if ($size == 'small') {
    $value = 2.00;
    $total = $value * $number;
} else if ($size = 'medium') {
    $value = 2.65;
    $total = $value * $number;
} else {
    $value = 2.99;
    $total = $value * $number;
}

?>
<fieldset class="receipt-background">
    <h1>Receipt</h1>
    <p>
        Purchase date:<?php echo $receiptDate; ?><br>
        Purchase <?php echo $number ?> item(s) of size '<?php echo $size ?>' at <?php echo $value ?> ecah<br>
        Total Cost: <?php echo $total ?><br>
    </p>

    <fieldset>
        <legend>Ship to</legend>
        <?php
        echo $firstName . " " . $lastName . "<br>" . $city . ", " . $state . "<br>" . $zip;
        ?>
    </fieldset>

</fieldset>
</body>
</html>
