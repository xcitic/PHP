<?php

  // create an xslt transformer
  $processor = new XSLTProcessor();

  // load the xml file
  $xml = new DOMDocument();
  $xml->load('test3.xml');


  // load the xsl file
  $xsl = new DOMDocument();
  $xsl->load('input.xsl');


  $processor->importStyleSheet($xsl);
  echo $processor->transformToXML($xml);


  // garbage collect the processor
