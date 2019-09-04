<?php
/**
 * Closure::call
 *
 */

class Test
{
  private $foo = "bar \n";
}


// here is a closure.
// The thing here is that the $this keyword does not exists since there is no instanciated object to bind to
$getTestCallback = function() {
  return $this->foo;
};

// In PHP5 we would have to bind it to the class to get the execution context of the class,
// and thus get access to the $this keyword in the scope of the class.
$binding = $getTestCallback->bindTo(new Test, 'Test');
print $binding();

print gettype($binding);

// In PHP7 this has been simplified by addind a call method to the closure type.
// This makes it possible to bind to the execution context with a simple call:
print $getTestCallback->call(new Test);


// This means that closures makes it easier to access a certain execution context and
// access the properties and methods as if inside the scope of the class
