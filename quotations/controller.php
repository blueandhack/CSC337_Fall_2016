<?php
// This file contains a bridge between the view and the model and redirects back to the proper page
// with after processing whatever form this codew absorbs. This is the C in MVC, the Controller.
//
// Authors: Rick Mercer and Hassanain Jamal
// 
// TODO: Add control the new expected behavior to
// register
// log in
// flag one quote
// unflag all quotes
// log out
//
require_once './DataBaseAdaptor.php';

session_start();

if (isset ($_POST ['author']) && isset ($_POST ['quote'])) {
    // add a quote
    $author = $_POST ['author'];
    $quote = $_POST ['quote'];
    $myDatabaseFunctions->addNewQuote($quote, $author);
    header("Location: ./index.php?mode=showQuotes");
} elseif (isset ($_POST ['action']) && isset ($_POST ['ID'])) {
    $action = $_POST ['action'];
    $ID = $_POST ['ID'];
    // increase
    if ($action === 'increase') {
        $myDatabaseFunctions->raiseRating($ID);
    }
    // decrease
    if ($action === 'decrease') {
        $myDatabaseFunctions->lowerRating($ID);
    }
    // flag
    if ($action === 'flag') {
        $myDatabaseFunctions->flag($ID);
    }

    header("Location: ./index.php?mode=showQuotes");
} elseif (isset ($_POST ['action']) && isset ($_POST ['username']) && isset ($_POST ['password'])) {
    $action = $_POST ['action'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // register
    if ($action === 'register') {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if ($myDatabaseFunctions->addNewUser($username, $password) == 1) {
//            $_SESSION['user'] = $username;
            header("Location: ./index.php?mode=showQuotes");
        } else {
            $_SESSION['registerError'] = "<div class='info'>The username already taken, please change the username</div>";
            header("Location: ./index.php?mode=register");
        }

    }
    // login
    if ($action === 'login') {
        if ($myDatabaseFunctions->checkUser($username, $password) == 1) {
            $_SESSION['user'] = $username;
            header("Location: ./index.php?mode=showQuotes");
        } else {
            $_SESSION['loginError'] = "<div class='info'>Invalid Username/Password</div>";
            header("Location: ./index.php?mode=login");
        }
    }

} elseif (isset ($_POST ['action'])) {
    // unflag all quotes
    $action = $_POST ['action'];
    if ($action === 'unFlag') {
        $myDatabaseFunctions->unFlagAll();
    }
    if ($action === 'logout') {
        session_destroy();
    }
    header("Location: ./index.php?mode=showQuotes");
}