<?php
declare(strict_types=1);


function addInt(int $a, int $b) : int {
  return $a + $b;
}

function addFloat(float $a, float $b) : float {
  return $a + $b;
}

function println($in) {
  echo $in."\n";
}


try {
  println(addFloat(1.0006,"2.244444"));
} catch (TypeError $e) {
  echo "Type error \n".$e->getMessage();
}

println(addInt(3,4));


// Spaceship operator
// Combined comparison operator
// Less than, equal to or greater than
println(10 <=> 100);
// left less than right, return -1
// left equal right, return 0
// left greater than right, return 1


// Null coalace operator
// Sets the variable to either $a or the default
// if $a is null, then default value, else $a
$a = 'Yo';
$name = $a ?? 'Hey there';
print $name."\n";
