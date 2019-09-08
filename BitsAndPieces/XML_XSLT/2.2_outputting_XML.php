<?php

  $xml = simplexml_load_file('test2.xml');
  $xml->employee[1]->age = 70;
  echo $xml->asXML();
