<?php
#
# Testing out using xrange as a generator
# this should signifiantly reduce the memory usage
# compared to the regular use of range.
# The test is as follows:
# You have a dataset of 1 000 000 integers that you should
# iterate over and print back the current value as the
# pointer moves through the dataset.
#

## First let's test it using range(0,999999) and a foreach loop

$time_start = microtime(true);
$mem_start = memory_get_usage();
$dataset = range(0,999999);
$mem_dataset = memory_get_usage();

echo "\n";
echo 'Memory usage before range(): '.$mem_start;
echo "\n";
echo 'Memory usage after range(0,999999): '.$mem_dataset;

# return instead of echo.
foreach($dataset as $v) {
  $v;
}

$mem_foreach = memory_get_usage();
$time_range = microtime(true) - $time_start;
echo "\n";
echo 'Memory usage after foreachloop: '.$mem_foreach;
echo "\n";
echo 'Total time with range() and foreach: '.$time_range;

unset($dataset);

$mem_unset = memory_get_usage();
echo "\n";
echo "Memory usage after unset(): ".$mem_unset;
echo "\n";

$time_xstart = microtime(true);
function xrange(int $start, int $limit) {
  for($i = $start; $i <= $limit; $i++) {
    yield $i;
  }
}

$mem_xrange = memory_get_usage();

foreach(xrange(0, 999999) as $number) {
  $number;
}

$mem_xforeach = memory_get_usage();
$time_xrange = microtime(true) - $time_xstart;

echo "\n Memory after xrange function: ".$mem_xrange;
echo "\n Memory after xforeach: ".$mem_xforeach;
echo "\n Time used xforeach: ".$time_xrange;

## WOW!! Results are massive in terms of memory usage.


$mem_diff = ($mem_xforeach - $mem_foreach);
$mem_pdiff = round(($mem_diff / $mem_xforeach) *100,2);
echo "\n";
if($mem_pdiff > 0) {
  echo 'Memory usage with generator: Generator uses '.$mem_pdiff.'% more memory compared to other structure.';
} else {
  echo 'Memory usage with generator: Generator uses '.$mem_pdiff.'% less memory compared to other structure.';
}

$time_diff = $time_xrange - $time_range;
$time_pdiff = round(($time_diff / $time_xrange) *100, 2);
echo "\n";
if($time_diff > 0) {
  echo 'CPU Execution time: Generator uses '.$time_pdiff.'% more time to execute';
} else {
  echo 'CPU Execution time: Generator uses '.$time_pdiff.'% less time to execute';
}
echo "\n";
