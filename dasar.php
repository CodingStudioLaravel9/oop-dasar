<?php

class Fruit
{
  public $name;
  public $color;

  function introduce()
  {
    return $this->name . " . " . $this->color;
  }
}

// Ini object-nya
$apple = new Fruit();
// / Set property
$apple->name = "Apel";
$apple->color = "Merah";

// Akses method
echo $apple->introduce();

// class = Fruit
// object = $apple
// property = $name, $color
// method = introduce
