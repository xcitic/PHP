#!/usr/bin/php
<?php

  // Get UNIX millisecond time stamp. TRUE condition = get as float value instead of string.
  $startTime = microtime(TRUE);

  // Input from terminal, default 10 000
  $timesToRoll = $argv[1] ?? 10000;


  // Roll the dice
  function roll() {
    return mt_rand(1,6);
  }

  $results = [];
  // Get the results from dice rolling
  for ($i = 0; $i < $timesToRoll; $i++)
  {
      $value = roll();
      $results[] += $value;
  }


  // Calculate the sum and count
  $sum = array_sum($results);
  $count = count($results);

  // Calculate the average
  $average = $sum / $count;


  // Return message to user
  print "The average over #$timesToRoll dice throws equals $average \n";
  // Return time spent on calculating to user
  $endTime = microtime(TRUE);
  $timeSpent = $endTime - $startTime;
  print "The time spent on this program was: $timeSpent \n";


  ?>
