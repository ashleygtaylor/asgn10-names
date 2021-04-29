<?php

function load_full_names($fileName) {
  $lineNumber = 0;

  //Load the array
  $FH = fopen("$fileName", "r");
  $nextName = fgets($FH);

  while(!feof($FH)) {
    if($lineNumber % 2 == 0) {
      $fullNames[] = trim(substr($nextName, 0, strpos($nextName, " --")));
    }

    $lineNumber++;
    $nextName = fgets($FH);
  }
  return $fullNames;
}

function load_first_names($fullNames) {
  //Get all first names
  foreach($fullNames as $fullName) {
    $startHere = strpos($fullName, ",") + 1;
    $firstNames[] = trim(substr($fullName, $startHere));
  }
  return $firstNames;
}

function load_last_names($fullNames) {
  //Get all last names
  foreach ($fullNames as $fullName) {
    $stopHere = strpos($fullName, ",");
    $lastNames[] = substr($fullName, 0, $stopHere);
  }
  return $lastNames;
}

function topTenLast($validLastNames) {
  foreach ($validLastNames as $validLastName) {
    $countedLastNames = array_count_values($validLastName);
    arsort($countedLastNames);
    $topTenLasts = array_slice($countedLastNames, 0, 9);
  }
  return $topTenLasts;
}

function topTenFirst($validFirstNames) {
  foreach ($validFirstNames as $validFirstName) {
    $countedFirstNames = array_count_values($validFirstName);
    arsort($countedFirstNames);
    $topTenFirsts = array_slice($countedFirstNames, 0, 9);
  }
  return $topTenFirsts;
}

  

