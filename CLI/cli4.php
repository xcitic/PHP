#!/usr/bin/php
<?php

  fputs(STDOUT, "\n Hey man whats your name? ");

  $sometext = strtolower(trim(fgets(STDIN, 256)));
  $sometext = ucfirst($sometext);
  fputs(STDERR, "Your name is: $sometext \n\n");

  ?>
