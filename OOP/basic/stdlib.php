<?php


  // Old style autoload --> depreciated since 7.2 because only one autoloader can be running, and thus clashes with other 3rd party libraries autoloaders.
  // function __autoload($class) {
  //   include("$class.php");
  // }

  // New style autoload, allows several autoloaders to be registered running in a round-robin style.
  // Declarative version
  /**
    * function autoload($class){
    * include("$class.php");
    * }
    * spl_autoload_register('autoload');
  **/

  // new style autoload
  // Anonymous Func Version
  spl_autoload_register(function ($class) {
    include("$class.php");
  });


  function initialize_site(csite $site) {
    $site->addHeader("header.php");
    $site->addFooter("footer.php");
  }
  
?>
