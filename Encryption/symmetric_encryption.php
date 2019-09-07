<?php
## Using mcrypt to create a symmetric encryption key
## mcrypt is depricated in PHP 7
## use libsodium instead


srand((double)microtime()*1000000 );
   $td = mcrypt_module_open(MCRYPT_RIJNDAEL_256, '', MCRYPT_MODE_CFB, '');
   $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
   $ks = mcrypt_enc_get_key_size($td);
   $key = substr(sha1('Your Secret Key Here'), 0, $ks);

   mcrypt_generic_init($td, $key, $iv);
   $ciphertext = mcrypt_generic($td, 'This is very important data');
   mcrypt_generic_deinit($td);
   mcrypt_module_close($td);

   print $iv . "\n";
   print trim($ciphertext) . "\n";
