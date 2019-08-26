<?php

  require_once('3.Cards.php');



  foreach ($hands as $hand) {
    foreach ($hand as $card) {
      echo $card . "\n";
    }
  }

  for ($i=0; $i < 5; $i++) {
    if (isset($_POST['card'][$i])) {
      $hand[$i] = array_shift($deck);
    }
  }


?>
