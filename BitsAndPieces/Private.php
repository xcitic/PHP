<?php

## Assigns the variable as a public variable in
## the instanciated class. The private variable is "hidden" to
## the child class, so it makes it's own variable with the same name
## but public access type.

## Somethings to note:
## If you recreate a public function that has the same name as
## a protected function in the parent class.
## then you call the public function in the child to access the parent method
## you end up in an INFINITE LOOP, no warning...
## To avoid this fuckup --> you can use the final keyword as
## final protected function xxx() ...
## Then you'll get an method override error saying that you can't override final method
## which is better than inifinite loop scenario *..*

class dog {
  private $name;

  protected function getName() {
    return $this->name;
  }

  final protected function setName(string $name) {
    $this->name = $name;
  }
}

class pitbull extends dog {

  public function name(string $name) {
    $this->setName($name);
  }

  public function bark() {
    print 'Woff woff, says ' . $this->getName();
  }

}

$poppy = new pitbull();
$poppy->name('Pit');
// $name = $poppy->name;
// print_r($name);
// print_r($poppy);
$poppy->bark();
