<?php

$a = 1;
$b = 2;

function Sum() {
  GLOBAL $a, $b;
  $b = $a + $b;
}

echo 'Preset: '.$b;
Sum();
echo 'After Set: '.$b;
