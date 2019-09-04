<?php
/**
 * Anonymous classes
 */
declare(strict_types=1);

$variable = new class {
  public function greet() {
    return "Hey there \n";
  }
};

var_dump($variable,$variable->greet());

print $variable->greet();


$bot = new class {
  private $name;
  private $iq;

  public function setName(string $name) : void {
      $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setIQ(int $iq) {
    $this->iq = $iq;
  }

  public function getIQ() {
    return $this->iq;
  }

};

$bot->setName('Kalixi');

try {
  $bot->setIQ("250");
} catch (TypeError $e) {
  print 'Wrong type passed '.$e->getMessage();
  print "\n";
}



$botName = $bot->getName();
$botIQ = $bot->getIQ();

print "The bots name is: ".$botName."\n"."The bots IQ is: ".$botIQ."\n";
