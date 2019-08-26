#!/usr/bin/php
<?php
  print "$argc arguments were passed. The order of them are: \n";

  for ($i = 0; $i <= $argc -1; ++$i) {
    print "$i: $argv[$i]\n";
  }

?>
