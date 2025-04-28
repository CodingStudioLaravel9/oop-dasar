<!-- langsung buat aja sebuah kelas baru langsung kita kasih properti misalkan mungkin sama aja dengan yang tadi ada name sama ada color kemudian kita bisa langsung buat kontraktor control name color kemudian kita sign this color sama dengan dollar nah jika sudah kita bisa tambahin sebuah function yang namanya itu nah function ini akan ngeretan dimana hello Nah kita bisa langsung membuat sebuah kelas

baru yang akan melakukan warisan mobil Nah untuk melakukan warisan kita cukupin tambah tambah kata kunci extend dan nama kelas yang akan kita nah seperti ini nah jika sudah seperti ini maka mobil ini akan otomatis yaitu mewariskan semua properti dan metode dari ini kita langsung Coba aja kita buat ini sebuah objek baru misalkan dollar sama dengan new car terus kita langsung coba objek baru ya misalkan namanya kita langsung aja mobilnya Mobil A terus warnanya itu hitam nah terus kita langsung ke terus jangan lupa di print dengan Eko -->

<?php

// inheritance

// 1. membuat class induk
class Vehicle
{
  private $name;
  private $color;

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

// 2. membuat class anak
class Car extends Vehicle {}

// 3. membuat objek dari class anak
$car = new Car("Mobil A", "Hitam");

// 4. akses method dari class induk
echo $car->greet(); // Hello, I am a vehicle.

// apapun yang ada di class induk bisa diakses di class anak.
// tujuan inheritance adalah untuk mewarisi property dan method dari class induk ke class anak, jika tidak ada constructor di class anak, maka constructor di class induk yang akan dipanggil
