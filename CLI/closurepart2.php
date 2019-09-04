<?php



$test = new  class {

  private $benchmark;

  public function setBenchmark($func) {
    $this->benchmark = $func;
  }

  public function run() {
    call($this->benchmark);
  }

};

$var =
 'for($i=0; $i<100; $i++) {
  echo $i;
}';

function forBasic(int $n) {
  for($i=0; $i<$n; $i++) {
   echo $i;
 }
}


$n = 100;
// call_user_func('forBasic', $n);

$functionToCall = 'forBasic';

$functionToCall($n);
