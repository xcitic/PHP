<?php
## Cloning creates a copy of the content of the class
## but the handle is different. (ie, there not in the same memory location)
## == evalutes to true since the contents of the two classes being compared are the same.
## === evaluates to false since the object's handle is not the same.


class foo {
  public function __construct() {
    $this->myself = $this;
  }
}


$wom = new foo();
$bat = clone $wom;

print (int)($wom == $bat) . "\n";
print (int)($wom === $bat) . "\n";
