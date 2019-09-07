<?php

abstract class dog {
  protected function bark() {
    print 'Woof';
  }
}

class pitbull extends dog {
  public function getClose() {
    $this->bark();
  }
}

$poppy = new pitbull();
$poppy->getClose();
