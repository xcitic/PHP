<?php

class person {
  public $firstName = 'Sam';
  public $lastName = 'TheMan';
  private $socialID = '12345';
  public $age = 28;

  public function output() {
    foreach($this as $var => $value) {
      echo "$var is $value\n";
    }
  }
}


$sam = new person();
foreach($sam as $var => $value) {
  echo "$var is $value\n";
}
$sam->output();
