<?php

// Polymorphism
// Polymorphism adalah kemampuan untuk menggunakan method yang sama dengan cara yang berbeda pada class yang berbeda.
// Dalam PHP, polymorphism dapat dicapai dengan menggunakan inheritance / overloading method dan overriding method.
class Vehicle
{
  private $name;
  // private $color; // Removed as it is not used

  function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  function greet()
  {
    return "Hello, I am a " . $this->name . ".";
  }
}

class Car extends Vehicle
{
  // 1. Overriding method greet
  function greet()
  {
    return "Hello, I am a car";
  }
}

$car = new Car("Mobil A", "Hitam");

echo $car->greet();

// ketika class memiliki method greet, maka yang akan dipanggil adalah method greet dari class anak
