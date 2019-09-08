<?php

  // create an expat parser instance
  $parser = xml_parser_create();

  ## Define the start element callback method
  function startElement(object $parser, string $el_name, array $attributes) {
    print "Opened element $el_name - has " . count($attributes) . " parameters.<br />";
  }


  ## Define the end element callback method
  function endElement(object $parser, string $el_name) {
    print "Closed element $el_name.<br />";
  }


  ## Define the character data callback method
  function charData(object $parser, string $chardata) {
    print "Parsed character data = $chardata </br>";
  }

  // Bind callback methods to the expat parser.
  xml_set_element_handler($parser, 'startElement', 'endElement');
  xml_set_character_data_handler($parser, 'charData');


  // Unset the parser --> garbage collect
  xml_parser_free($parser);



?>
