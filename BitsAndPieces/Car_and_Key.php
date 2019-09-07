<?php


class Car {
  public $make;
  private $key;
  private $locked;
  private $carID;

  public function __construct(int $key = null) {
    $this->key = $this->generateKey('sha512', 512);
    $this->locked = true;
    $this->carID = $this->generateKey('sha512', 512);
  }

  public function setMake(string $make) : void {
    $this->make = $make;
  }

  public function getMake() : string {
    return $this->make;
  }

  protected function getCarID() : string {
    return $this->carID;
  }

  protected function getKey() : string {
    return $this->key;
  }

  protected function changeKey(string $key) : void {
    $this->key = $key;
  }

  protected function open(string $key) : string {
    if(isset($this->key) && $this->key === $key) {
      $key = $this->key;
      $unlock = (bool)$this->unlock($key);
      if ($unlock === false) {
        return 'Wrong key';
      }
      else {
        return 'Unlocked';
      }
    }
     return 'Error';
  }

  protected function close(string $key) : string {
    if(isset($this->key) && $this->key === $key) {
      $key = $this->key;
      // hmm
      $lock = (bool)$this->lock($key);
      if ($lock === false) {
        echo 'Wrong key';
      } else {
        echo 'Locked';
      }
    }
    return 'Error';
  }

  private function unlock(string $key) : bool {
    if ($key === $this->key) {
      $this->locked = false;
      return true;
    }
    return false;
  }

  private function lock(string $key) : bool {
    if ($key === $this->key) {
      $this->locked = true;
      return true;
    }
    return false;
  }


  protected function generateKey(string $algo, int $byteSize = 512) : string {
    $randomBytes = random_bytes($byteSize);
    $hashed = hash($algo, $randomBytes);
    return $hashed;
  }

}


class CarKey extends Car {
  private $carKeyID;
  private $key;

  public function __construct() {
    parent::__construct();
    $this->key = $this->getKey();
    $this->carKeyID = $this->generateCarKeyID();
  }

  public function carID() : string {
    return $this->getCarID();
  }

  public function getcarKeyID() : string {
    return $this->carKeyID;
  }

  public function locking() : string {
    return $this->close($this->key);
  }

  public function opening() : string {
    return $this->open($this->key);
  }

  private function generateCarKeyID() : string {
    return $this->generateKey('sha512', 128);
  }

}

$carKey = new CarKey();
$unlock = $carKey->opening();
echo $unlock;

$locked = $carKey->locking();
echo $locked;


?>
