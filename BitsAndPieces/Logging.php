<?php

class Log {
  private $fileOpen = false;
  private $file;
  public $count;


  public function __construct() {
    $this->file = $this->openLog();
  }

  public function __destruct() {
      $this->saveAndExit();
  }


  private function openLog() {
      $f = fopen('log.txt', 'a+');
      return $f;
  }


  public function write(string $text) : void {
    fwrite($this->file, $text);
    $this->count++;
  }

  public function read() : string {
    $content = file_get_contents('log.txt');
    return $content;
  }

  private function saveAndExit() {
    fclose($this->file);
  }

  public function __sleep() {
    $this->saveAndExit();
    return array_keys(get_object_vars($this));
  }

  public function __wakeup() {
    $this->openLog();
  }

}


$log = new Log();
$time = date('Y-m-d H:i:s');
$text = $time . ": This is an entry in the log \n";
$log->write($text);
$readback = $log->read();


var_dump($log);
echo "\n";

var_dump($readback);
echo "\n";


//
// $safelog = urlencode(serialize($log));
// var_dump($safelog);
// echo "\n";
