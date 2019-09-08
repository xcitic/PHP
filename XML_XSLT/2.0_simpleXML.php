<?php
##
## SimpleXML


// Read a whole xml file
$employees = simplexml_load_file('test2.xml');


// Read XML from a string variable
// simplexml_load_string($employees);

var_dump($employees);

$first = $employees->employee[0];
var_dump($first);

$names = array();
$count = count($employees->employee);
echo "Employees: $count \n";

foreach($employees->employee as $employee) {
  $names[] = $employee->name;
  $ages[] = $employee->age;
  echo "$employee->name is $employee->title at age $employee->age\n";
}

echo 'Names: ';
var_dump($names);
