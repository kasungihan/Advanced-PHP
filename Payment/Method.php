<?php

abstract class Method
{
  public $name;
  public function __construct($name)
  {
    $this->name = $name;
  }

  //abstract public function sound();
  //abstract public function eat($name, $color);
  abstract public function pay($amount);
}
