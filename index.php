<?php
include 'functions/utility-functions.php';
include 'functions/names-functions.php';

$fileName = 'names-short-list.txt';
$fullNames = load_full_names($fileName);

$firstNames = load_first_names($fullNames);
$lastNames = load_last_names($fullNames);
$topTenLasts = topTenLast($validLastNames);
$topTenFirsts = topTenFirst($validFirstNames);

  // Get valid names
for($i = 0; $i < sizeof($fullNames); $i++) {
  //Put first and last together without comma test for alpha-only
  if(ctype_alpha($lastNames[$i].$firstNames[$i])) {
    $validFirstNames[$i] = $firstNames[$i];
    $validLastNames[$i] = $lastNames[$i];
    $validFullNames[$i] = $validLastNames[$i] . ", " . $validFirstNames[$i];
  }
}



//Display results

echo '<h1>Names - Results</h1>';

echo '<h2>All Names</h2>';
echo "<p>There are " . sizeof($fullNames) . " total names</p>";
echo '<ul style="list-style-type:none">';
  foreach($fullNames as $fullName) {
    echo "<li>$fullName</li>";
  }
echo "</ul>";

echo '<h2>All Valid Names</h2>';
echo "<p>There are " . sizeof($validFullNames) . " valid names</p>";
echo '<ul style="list-style-type:none">';
  foreach($validFullNames as $validFullName) {
    echo "<li>$validFullName</li>";
  }
echo "</ul>";

echo '<h2>Unique Names</h2>';
$uniqueValidNames = (array_unique($validFullNames));
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique names</p>");
echo '<ul style="list-style-type:none")';
  foreach($uniqueValidNames as $uniqueValidName) {
    echo"<li>$uniqueValidName</li>";
  }
echo "</ul>";

echo '<h2>Unique Last Names</h2>';
$uniqueLastNames = (array_unique($validLastNames));
echo ("<p>There are " . sizeof($validLastNames) . " Unique Last names</p>");
echo '<ul style="list-style-type:none">';
  foreach($uniqueLastNames as $uniqueLastName) {
    echo"<li>$uniqueLastName</li>";
  }
echo "</ul>";

echo '<h2>Unique First Names</h2>';
$uniqueFirstNames = (array_unique($validFirstNames));
echo ("<p>There are " . sizeof($validFirstNames) . " Unique First names</p>");
echo '<ul style="list-style-type:none">';
  foreach($uniqueFirstNames as $uniqueFirstName) {
    echo"<li>$uniqueFirstName</li>";
  }
echo "</ul>";

echo '<h2>Top 10 Common Last Names</h2>';
echo '<ul style="list-style-type:none">';
  foreach($topTenLasts as $topTenLast) {
    echo"<li>$topTenLast</li>";
  }
  echo "</ul>";

echo '<h2>Top 10 Common First Names</h2>';
echo '<ul style="list-style-type:none">';
  foreach($topTenFirsts as $topTenFirst) {
    echo"<li>$topTenFirst</li>";
  }
  echo "</ul>";

echo '<h2>25 Specially Unique Names</h2>';
echo '<ul style="list-style-type:none">';
  foreach($topTenFirsts as $topTenFirst) {
    echo"<li>$topTenFirst</li>";
  }
  echo "</ul>";

echo '<h2>Specially Unique Names</h2>';
echo '<h2>Modified Names</h2>';


?>
    

