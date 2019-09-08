<?php

  $xml = simplexml_load_file('test2.xml');
  echo "Before transformation: \n";

  echo $xml->asXML();

  $xml->employee[1]->age = 70;

  $employees = $xml->xpath('//employee[name="Anthony Clarke"]');
  $employees[0]->title = "CEO - Boss mann";

  echo "\n After transformation: \n";
  echo $xml->asXML();
