<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 9/26/16
 * Time: 3:16 PM
 */
$tests = explode(",", $_POST['tests']);
$projects = explode(",", $_POST['projects']);

$testsScores = array();

for ($i = 0; $i < count($tests); $i++) {
    $testsScores[] = $tests[$i];
}

$testTotal = 0;

for ($i = 0; $i < count($testsScores); $i++) {
    $testTotal += (float)$testsScores[$i];
}

$testTotal = $testTotal / count($testsScores);

// ----

$projectsScores = array();

for ($i = 0; $i < count($projects); $i++) {
    $projectsScores[] = $projects[$i];
}

$projectTotal = 0;

for ($i = 0; $i < count($projectsScores); $i++) {
    $projectTotal += (float)$projectsScores[$i];
}

$projectTotal = $projectTotal / count($projectsScores);

echo "Tests are 40% of " . round($testTotal, 1) . ", which is " . round((40 * $testTotal / 100), 1) . "<br>";
echo "Projects are 60% of " . round($projectTotal, 1) . ", which is " . round((60 * $projectTotal / 100), 1) . "<br>";