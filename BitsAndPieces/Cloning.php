<?php

abstract class Dog {
  public function __clone() {
    echo "In dog clone\n";
  }
}

class poddle extends dog {
  public $name;

  public function __clone() {
    echo "In poddle clone\n";
    parent::__clone();

  }
}


$poppy = new poddle();
$poppy->name = "Poppy";

$lui = clone $poppy;
