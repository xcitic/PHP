<?php

/*
* This is the Singleton Pattern
* It is used to restrict the number of instances of a class to one,
* all other references will refer to the same instance.
* This pattern is very usefull for expensive operations which are often immutable
* a DB connection or API connection is a good use for this pattern.
* With a normal class you would create a new instance every time you assign a variable to the class, thus consume a lot more
* memory than needed, as the DB connection is unlikely to change.
*
* Let's go ahead and test out the singleton pattern for a DB connection.
* A singleton should have a private construct method instead of public
* this is to avoid the instanciation of the singleton and require it to be accessed through
* a static method
*
 */


class Singleton {

  private static $instance = null;


  private function __construct() {

  }

  public function getInstance() {
    if(!isset(self::$instance)) {
      self::$instance = new Singleton();
    }
    return self::$instance;
  }

}


$ob1 = Singleton::getInstance();
$ob2 = Singleton::getInstance();
$ob3 = Singleton::getInstance();

var_dump($ob1);
var_dump($ob2);
var_dump($ob3);


class StandardPattern {
  private static $standard = null;

  public function __construct() {

  }

  public function getInstance() {
    if(!isset(self::$standard)) {
      self::$standard = new StandardPattern();
    }
    return self::$standard;
  }
}

$c1 = StandardPattern::getInstance();
$c2 = StandardPattern::getInstance();
$c3 = StandardPattern::getInstance();

var_dump($c1);
var_dump($c2);
var_dump($c3);
