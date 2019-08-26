#!/usr/bin/php
<?php

  if ($argc < 3) {
    print "Usage: phpcli2.php [where clause] [match clause] \n\n";
    exit;
  }

  $whereclause = filter_var($argv[1], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
  $matchclause = filter_var($argv[2], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);

  $db = mysqli_connect("localhost", "phpuser");

  $result = mysqli_query($db, "SELECT Name, Age, Job, Pay FROM staff WHERE $whereclause = '$matchclause'");
  $nummatch = mysqli_num_rows($result);

  if (!$nummatch) {
    print "No rows matched! \n\n";
    exit;
  }

  print "Found $nummatch rows: \n\n";
  while ($row = mysqli_fetch_assoc($result)) {
    extract($row);
    $Pay = '$' . number_format($Pay);
    print "Name: $name\n";
  }

?>
