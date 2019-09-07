<?php


function dosomething() {
  return 'Foo';
}

function dosomethingelse() {
  return ' . Peace Out!';
}


$start = microtime(true);
echo "Hey", dosomething(), " bar", dosomethingelse();
echo "\n";
echo 'It took: ', microtime(true) - $start;

$arr = range(0,999999);

echo "\n";
echo "Using Mem: ". round(memory_get_usage() / 1024,2) ." KB";
echo "\n";

$start2 = microtime(true);
echo "Hey".dosomething()." bar".dosomethingelse();
echo "\n";
echo 'It took: ', microtime(true) - $start2;
