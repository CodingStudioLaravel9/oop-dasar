<!-- konstraktor sendiri adalah sebuah special function yang digunakan untuk menginisialisasi sebuah properti dari sebuah objek pada saat objek itu dibuat jadi misalkan kita ingin melakukan segment color itu membayangkan misalkan properti dari Float ini memiliki 10 Apakah kita harus melakukan 10 kali itu cukup ribet Nah jadi ada yang namanya itu pembuat nah cara membuat itu cukup mudah kalian tinggal buat sebuah
function dengan kata kunci yang sama persist yaitu underscore underscore Construct  -->
<?php
class Fruit
{
  private $name;
  private $color;
  private $price;

  // 1. membuat function constructor, masukkan property yang ingin diinisialisasi
  function __construct($name, $color, $price)
  {
    // 2. assign property
    $this->name = $name;
    $this->color = $color;
    $this->price = $price;
  }

  function introduce()
  {
    return $this->name . " - " . $this->color . " - " . $this->price;
  }

  // constructor bisa tanpa set dan get
}

// 3. akses constructor menggunakan property yg sudah diinisialisasi
$apple = new Fruit("Apel", "Merah", 10000);
// 4. akses method
echo $apple->introduce();
?>
