<?php

## Testing out how to use worker to handle tasks
## using multiple threads
##
##


class Task extends Threaded {
  private $v;

  public function __construct(int $i) {
    $this->v = $i;
  }

  public function run() {
    // delay execution for 1 second
    usleep(100000);
    echo "Task $this->value\n";
  }
}


$worker1 = new Worker();
$worker1->start();
//
// $worker2 = new Worker();
// $worker2->start();
//
//
// $pool = new Pool();

for ($i = 0; $i < 20; ++$i) {
  $worker1->stack(new Task($i));
}

while($worker1->collect());

$worker1->shutdown();
