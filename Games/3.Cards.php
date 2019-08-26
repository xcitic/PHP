#!/usr/bin/php

<?php

  // Defining the suits
  $suits = array(
    "Spades", "Hearts", "Clubs", "Diamonds"
  );

  // Defining the faces
  $faces = array(
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Jack", "Queen", "King", "Ace"
  );

  // Creating and populating the deck
  $deck = array();
  foreach ($suits as $suit) {
    foreach ($faces as $face) {
      $deck[] = array("face" => $face, "suit" => $suit);
    }
  }

  // Should return 52 cards
  echo count($deck) . " cards in the deck";

  // Mix it up
  shuffle($deck);

  // Pick out a card
  $card = array_shift($deck);
  echo "\n" . "You picked: " . $card['face'] . ' of ' . $card['suit'] . "\n";

  // Returns the cards left in the deck
  echo count($deck) . " cards in the deck";


  $hands = array(1 => array(), 2 => array());

  for ($i = 0; $i < 5; $i++) {
    $hands[1][] = implode(" of ", array_shift($deck));
    $hands[2][] = implode(" of ", array_shift($deck));
  }

  foreach ($hands[1] as $card) {
    echo $card . "\n";
  }

?>
