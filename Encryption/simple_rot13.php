<?php

  $string = "Encryption using rot13 \n";
  $encrypted = str_rot13($string);
  $decrypted = str_rot13($encrypted);
  print 'Encrypted: '.$encrypted;
  print 'Decrypted: '.$decrypted;

?>
