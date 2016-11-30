<?php

class TitleDataBase
{
    private $DB;

    public function __construct()
    {
        $db = 'mysql:dbname=imdb;charset=utf8;host=localhost';
        $user = 'root';
        $password = 'root';

        try {
            $this->DB = new PDO ($db, $user, $password);
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo('Error establishing Connection');
            exit ();
        }
    }

    public function getMovieByMovieName($movieName)
    {
        // Need the "%" symbols to allow like something like a search like *1952*
        $movieName = $movieName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE movies.name LIKE '" . $movieName . "'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByFirstName($input)
    {
        // Need the "%" symbols to allow like something like a search like *1952*
        $input = $input . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE actors.first_name LIKE '" . $input . "'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByLastName($input)
    {
        // Need the "%" symbols to allow like something like a search like *1952*
        $input = $input . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE actors.last_name LIKE '" . $input . "'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByMovieNameAndLastName($movieName, $lastName)
    {
        // Need the "%" symbols to allow like something like a search like *1952*
        $movieName = $movieName . "%";
        $lastName = $lastName . "%";
        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE movies.name LIKE '" . $movieName . "' ,actors.last_name LIKE '" . $lastName . "'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByMovieNameAndFirstName($movieName, $firstName)
    {
        // Need the "%" symbols to allow like something like a search like *1952*
        $movieName = $movieName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE movies.name LIKE '" . $movieName . "' ,actors.first_name LIKE '" . $firstName . "'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByFirstNameAndLastName($firstName, $lastName)
    {
        // Need the "%" symbols to allow like something like a search like *1952*
        $firstName = $firstName . "%";
        $lastName = $lastName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE actors.first_name LIKE '" . $firstName . "' ,actors.last_name LIKE '" . $lastName . "'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByMovieNameAndFirstNameAndLastName($movieName, $firstName, $lastName)
    {
        // Need the "%" symbols to allow like something like a search like *1952*
        $firstName = $firstName . "%";
        $lastName = $lastName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE movies.name LIKE '" . $movieName . "' , actors.first_name LIKE '" . $firstName . "' ,actors.last_name LIKE '" . $lastName . "'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

$movieTitles = new TitleDataBase ();
