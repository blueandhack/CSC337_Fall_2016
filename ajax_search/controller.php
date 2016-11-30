<?php
require_once './DataBaseAdapter.php';

$movie_name = $_GET['movie_name'];
$last_name = $_GET['last_name'];
$first_name = $_GET['first_name'];
if ($movie_name != "" && $first_name == "" && $last_name == "") {
    $array = $movieTitles->getMovieByMovieName($movie_name);
    header('Content-Type: application/json');
    echo json_encode($array);
} else if ($movie_name == "" && $first_name != "" && $last_name == "") {
    $array = $movieTitles->getMovieByFirstName($first_name);
    header('Content-Type: application/json');
    echo json_encode($array);
} else if ($movie_name == "" && $first_name == "" && $last_name != "") {
    $array = $movieTitles->getMovieByLastName($last_name);
    header('Content-Type: application/json');
    echo json_encode($array);
} else if ($movie_name == "" && $first_name != "" && $last_name != "") {
    $array = $movieTitles->getMovieByFirstNameAndLastName($first_name, $last_name);
    header('Content-Type: application/json');
    echo json_encode($array);
} else if ($movie_name != "" && $first_name == "" && $last_name != "") {
    $array = $movieTitles->getMovieByMovieNameAndLastName($movie_name, $last_name);
    header('Content-Type: application/json');
    echo json_encode($array);
} else if ($movie_name != "" && $first_name != "" && $last_name == "") {
    $array = $movieTitles->getMovieByMovieNameAndFirstName($movie_name, $first_name);
    header('Content-Type: application/json');
    echo json_encode($array);
} else if ($movie_name != "" && $first_name != "" && $last_name != "") {
    $array = $movieTitles->getMovieByMovieNameAndFirstNameAndLastName($movie_name, $first_name, $last_name);
    header('Content-Type: application/json');
    echo json_encode($array);
}
