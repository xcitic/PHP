<?php

if (123 == '123foo') {
  print 'true';
}

if(strval(0123 == '0123foo')) {
  print 'also true';
}


$test = intval(1230 == '1230foo');
$test2 = intval(123 == '123foo');
print $test;
print $test2;
