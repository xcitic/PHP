<?php


  $file = 'test.xml';
  if (!file_exists($file)) {
    print "Error loading XML file. Make sure the file exists and you have read access to it. \n";
    exit;
  } else {
    print "XML file loaded successfully! Getting ready to do some par'gic' with it. \n";
  }

  $data = file_get_contents($file);

  if(!xml_parse($parser, $data, true)) {
    print "Parse Error! \n";
    printf("Error report was %s", xml_error_string(xml_get_error_code($parser)));
  } else {
    print "Parsing complete \n";
  }
