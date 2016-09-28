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

$testGrade = round((40 / 100 * $testTotal), 1);
$projectGrade = round((60 / 100 * $projectTotal), 1);

echo "Tests are 40% of " . round($testTotal, 1) . ", which is " . $testGrade . "<br>";
echo "Projects are 60% of " . round($projectTotal, 1) . ", which is " . $projectGrade . "<br>";
echo "<br>Course grade: " . ($testGrade + $projectGrade);

?>