<?php
require_once './DataBaseAdapter.php';

$movie_name = $_GET['movie_name'];
$last_name = $_GET['last_name'];
$first_name = $_GET['first_name'];
if ($movie_name != "" && $last_name == "" && $first_name == "") {
    $array = $movieTitles->getMovieByMovieName($movie_name);
    header('Content-Type: application/json');
    echo json_encode($array);
}


