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

echo "\n";
unset($employees);

echo "Wildcard matching by name 'Laura Pollard': \n";
$employees = $xml->xpath('//employee[name="Laura Pollard"]');
foreach($employees as $employee) {
  echo "Found $employee->name \n";
}

echo "\n";

echo "Strict Matching By name 'Laura Pollard': \n";
$employees = $xml->xpath('/employees/employee[name="Laura Pollard"]');
foreach($employees as $employee) {
  echo "Found $employee->name \n";
}

echo "\n";

echo "Wildcard matching employees younger than 50: \n";
$employees = $xml->xpath('//employee[age<50]');
foreach($employees as $employee) {
  echo "$employee->name is under 50 years \n";
}

echo "\n";

echo "Strict matching employees older than 50: \n";
$employees = $xml->xpath('/employees/employee[age>50]');
foreach($employees as $employee) {
  echo "$employee->name is over 50 years \n";
}

echo "\n";

echo "Matching more elements using OR | \n";
$results = $xml->xpath('//employee/title|//employee/age');
foreach($results as $result) {
  echo "Found $result \n";
}

echo "\n";

echo "Using OR with wildcard and matching: \n";
$names = $xml->xpath('//employee[age>=50]/name|//employee[age<50]/name');
foreach($names as $name) {
  echo "Found $name \n";
}
