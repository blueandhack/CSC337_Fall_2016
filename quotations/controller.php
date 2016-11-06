<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 11/4/16
 * Time: 3:37 PM
 */


require_once "./DatabaseAdaptor.php";

if (isset($_POST['add'])) {
    $myDatabaseAdaptor->addQuote($_POST['quote'], $_POST['author']);
}

if (isset($_POST['up'])) {
    $id = $_POST['id'];
    $myDatabaseAdaptor->updateQuoteUp($id);
}

if (isset($_POST['down'])) {
    $id = $_POST['id'];
    $myDatabaseAdaptor->updateQuoteDown($id);
}

header("Location: index.php");