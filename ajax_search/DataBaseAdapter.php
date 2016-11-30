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
        $movieName = $movieName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE movies.name LIKE '" . $movieName . "' LIMIT 50");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByFirstName($firstName)
    {
        $firstName = $firstName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE actors.first_name LIKE '" . $firstName . "' LIMIT 50");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByLastName($lastName)
    {
        $lastName = $lastName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE actors.last_name LIKE '" . $lastName . "' LIMIT 50");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByMovieNameAndLastName($movieName, $lastName)
    {
        $movieName = $movieName . "%";
        $lastName = $lastName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE movies.name LIKE '" . $movieName . "' AND actors.last_name LIKE '" . $lastName . "' LIMIT 50");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByMovieNameAndFirstName($movieName, $firstName)
    {
        $movieName = $movieName . "%";
        $firstName = $firstName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE movies.name LIKE '" . $movieName . "' AND actors.first_name LIKE '" . $firstName . "' LIMIT 50");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByFirstNameAndLastName($firstName, $lastName)
    {
        $firstName = $firstName . "%";
        $lastName = $lastName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE actors.first_name LIKE '" . $firstName . "' AND actors.last_name LIKE '" . $lastName . "' LIMIT 50");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getMovieByMovieNameAndFirstNameAndLastName($movieName, $firstName, $lastName)
    {
        $movieName = $movieName . "%";
        $firstName = $firstName . "%";
        $lastName = $lastName . "%";

        // where the parameter is found as a substring, case insensitive
        $stmt = $this->DB->prepare("SELECT movies.name, actors.first_name, actors.last_name, movies.year FROM movies JOIN roles ON movies.id = roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE movies.name LIKE '" . $movieName . "' AND actors.first_name LIKE '" . $firstName . "' AND actors.last_name LIKE '" . $lastName . "' LIMIT 50");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

$movieTitles = new TitleDataBase ();
