<?php

class Fruit
{
  private $name;
  private $color;

  function introduce()
  {
    return $this->name . " . " . $this->color;
  }

  // 1. membuat method untuk mengakses property
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }

  function set_color($color)
  {
    $this->color = $color;
  }
  function get_color()
  {
    return $this->color;
  }
}

// Ini object-nya
$apple = new Fruit();

// 2. Assign property
$apple->set_name("Apel ");
$apple->set_color("Merah");

// 3. Akses method
echo $apple->get_name(); // 3. akses menggunakan method set_name 
echo $apple->get_color();

// Error,karena property name dan color bersifat private
// echo $apple->name; 

// class = Fruit
// object = $apple
// property = $name, $color
// method = introduce

// tujuan encapsulation adalah untuk menyembunyikan data dari akses langsung
// Encapsulation menutupi property agar tidak bisa diakses langsung dari luar class
