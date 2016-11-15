<?php

/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 11/3/16
 * Time: 10:42 PM
 */
class DatabaseAdaptor
{

    private $DB;

    public function __construct()
    {
        $db = 'mysql:host=localhost;dbname=quotes';
        $user = 'root';
        $password = 'root';

        try {
            $this->DB = new PDO($db, $user, $password);
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e;
            echo 'Error';
            exit();
        }
    }

    public function getQuotesAsArray()
    {
        $stmt = $this->DB->prepare("SELECT * FROM quotations ORDER BY vote DESC, date DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addQuote($quote, $author)
    {

//        $stmt = $this->DB->prepare("INSERT INTO quotations (quote, author,date) VALUES (?,?,?)");
//        $stmt->execute(array($quote, $author, time()));
        $stmt = $this->DB->prepare("INSERT INTO quotations (quote, author,date) VALUES (:quote,:author,now())");
        $stmt->bindParam('quote', $quote);
        $stmt->bindParam('author', $author);
        $stmt->execute();
    }

    public function updateQuoteUp($id)
    {
        $stmt = $this->DB->prepare("SELECT vote FROM quotations WHERE id=" . $id);
        $stmt->execute();
        $getVote = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = $this->DB->prepare("UPDATE quotations SET date=now(), vote=" . ($getVote['vote'] + 1) . " WHERE id=" . $id);
        $stmt->execute();
    }

    public function updateQuoteDown($id)
    {
        $stmt = $this->DB->prepare("SELECT vote FROM quotations WHERE id=" . $id);
        $stmt->execute();
        $getVote = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = $this->DB->prepare("UPDATE quotations SET date=now(), vote=" . ($getVote['vote'] - 1) . " WHERE id=" . $id);
        $stmt->execute();
    }

}

$myDatabaseAdaptor = new DatabaseAdaptor();
//$all = $myDatabaseAdaptor->getQuotesAsArray();
//foreach ($all as $record) {
//    echo $record['id'] . " " . $record['quote'].PHP_EOL;
//}

//$myDatabaseAdaptor->addQuote("a", "b");