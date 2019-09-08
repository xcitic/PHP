<?php

  // create an expat parser
  $parser = xml_parser_create();

  ## Define the start element callback method
  function startElement($parser, string $el_name, array $attributes) {
    $line = xml_get_current_line_number($parser);
    $attribute_type = $attributes["TYPE"];

    switch ($attribute_type) {
      case "programming":
        print "Programming headline found on line $line \n";
        break;
      case "sci-fi":
        print "Sci-fi headline found on line $line \n";
        break;
    }
  }


  ## Define the end element callback method
  function endElement($parser, string $el_name) {
    print "Closed element $el_name.\n";
  }

  // Bind callback methods to the expat parser.
  xml_set_element_handler($parser, 'startElement', 'endElement');


  ## Define the character data callback method
  function charData($parser, string $chardata) {
    $line = xml_get_current_line_number($parser);
    $chardata = trim($chardata);
    if ($chardata == "") { return; }

    print "Char data found on line number: $line. \n The data found: $chardata \n";
  }

  // Bind character callback method
  xml_set_character_data_handler($parser, 'charData');

  require('1.1_reading_in_XML_file.php');


  // Unset the parser --> garbage collect
  xml_parser_free($parser);



?>
