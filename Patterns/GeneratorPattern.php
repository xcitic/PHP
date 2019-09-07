<?php
## Testing out generator patterns
## Through perf testing I found the generator pattern
## consumes less than 80x memory compared to using
## range(0, 999999).
## This is because the generator generates each number as the loop works
## through it, and the number variable is reassaign / garbage collected as soon as the loop has
## continued to the next number
##
## However the processing time increases by between 40% - 50%
## which is a substansial increase. I assume that is due to the
## nature of the generator which requires more cpu commands
## thus larger Stack, leading to more time spent computing
## as oppossed to assigning memory space to hold variables.


function xrange(int $start, int $limit) {
  for($i = $start; $i <= $limit; $i++) {
    yield $i;
  }
}


foreach(xrange(0, 999999) as $number) {
  echo $number;
}
