<?php

$xml = simplexml_load_file('test2.xml');

echo "Direct method for xpath: \n";
$names = $xml->xpath('/employees/employee/name');
foreach($names as $name) {
  echo "Found name: $name \n";
}

echo "\n";

echo "Using indirect method for xpath: \n";
$employees = $xml->xpath('/employees/employee');
foreach($employees as $employee) {
  echo "Found name: $employee->name \n";
}

echo "\n";

echo "Using wildcard method: \n";
$names = $xml->xpath('//name');
foreach($names as $name) {
  echo "Found name: $name \n";
}
