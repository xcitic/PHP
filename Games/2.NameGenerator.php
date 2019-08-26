#!/usr/bin/php

<?php

  $numberOfNames = $argv[1] ?? 1;

  $femaleFirst = array(
    "Annette",
    "Karoline",
    "Henriette",
    "Susanne",
    "Elisabeth"
  );

  // $femaleFirst = explode('\n', file_get_contents('2.Input.txt'));
  //
  // foreach ($femaleFirst as $name) {
  //   echo $name;
  // }

  $lastName = array(
    "Goldberg",
    "Sandberg",
    "Karolinski",
    "Pavinski",
    "Lazreg"
  );

  shuffle($femaleFirst);
  shuffle($lastName);

  for ($i = 0; $i < $numberOfNames; ++$i) {
    print $femaleFirst[$i] . ' ' . $lastName[$i] . "\n";
  }


?>
