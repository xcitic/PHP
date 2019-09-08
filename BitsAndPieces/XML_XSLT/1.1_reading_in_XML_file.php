<?php


  $file = 'test.xml';
  if (!file_exists($file)) {
    print "Error loading XML file. Make sure the file exists and you have read access to it. \n";
    exit;
  } else {
    print "XML file loaded successfully! Getting ready to do some par'gic' with it. \n";
  }

  $data = file_get_contents($file);

  if(!xml_parse($parse, $data, true)) {
    print "Parse Error! \n";
  } else {
    print "Parsing complete \n";
  }
