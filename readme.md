Tentu! Ini penjelasan **kegunaan/fungsi** dari masing-masing konsep OOP berdasarkan file yang kamu sebutkan:

---

### 1. **constructor.php**  
**Topik:** Constructor  
**Fungsi/Kegunaan:**
- **Constructor** adalah **method khusus** yang otomatis dipanggil saat sebuah **objek dibuat** dari class.
- Digunakan untuk **menginisialisasi properti** (atribut) objek saat pertama kali dibuat, tanpa perlu memanggil method tambahan.
- Membantu membuat **objek lebih siap pakai** setelah diciptakan.

**Contoh singkat:**
```php
class Mobil {
    public $merk;

    public function __construct($merk) {
        $this->merk = $merk;
    }
}

$mobilBaru = new Mobil("Toyota");
echo $mobilBaru->merk; // Output: Toyota
```

---

### 2. **dasar.php**  
**Topik:** OOP Dasar  
**Fungsi/Kegunaan:**
- Mengenalkan **konsep dasar OOP**: Class, Object, Property, dan Method.
- **Class** = cetakan / blueprint objek.
- **Object** = hasil nyata dari sebuah class.
- **Property** = atribut / data di dalam object.
- **Method** = fungsi di dalam class.

**Contoh singkat:**
```php
class Hewan {
    public $nama;

    public function suara() {
        return "Suara hewan";
    }
}

$kucing = new Hewan();
$kucing->nama = "Kucing";
echo $kucing->suara(); // Output: Suara hewan
```

---

### 3. **encapsulation.php**  
**Topik:** Encapsulation  
**Fungsi/Kegunaan:**
- Menyembunyikan **data internal** dari luar class (pakai `private` atau `protected`).
- Memberikan **kontrol akses** melalui **getter** dan **setter**.
- Membuat kode lebih **aman** dan **terstruktur**.

**Contoh singkat:**
```php
class AkunBank {
    private $saldo = 0;

    public function setSaldo($jumlah) {
        if ($jumlah > 0) {
            $this->saldo = $jumlah;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$akun = new AkunBank();
$akun->setSaldo(5000);
echo $akun->getSaldo(); // Output: 5000
```

---

### 4. **polymorphism.php**  
**Topik:** Polymorphism  
**Fungsi/Kegunaan:**
- Membuat **method yang sama** memiliki **perilaku berbeda** tergantung object/class yang memanggilnya.
- Membantu membuat kode lebih **fleksibel** dan **mudah dikembangkan**.

**Contoh singkat:**
```php
class Hewan {
    public function suara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {
    public function suara() {
        return "Guk guk!";
    }
}

class Kucing extends Hewan {
    public function suara() {
        return "Meong!";
    }
}

$hewan1 = new Anjing();
$hewan2 = new Kucing();

echo $hewan1->suara(); // Output: Guk guk!
echo $hewan2->suara(); // Output: Meong!
```

---

### 5. **warisan.php**  
**Topik:** Inheritance (Pewarisan)  
**Fungsi/Kegunaan:**
- **Class anak** dapat **mewarisi** properti dan method dari **class induk**.
- Mengurangi **duplikasi kode**.
- Memudahkan **perluasan fungsionalitas** tanpa harus mengubah class induk.

**Contoh singkat:**
```php
class Kendaraan {
    public $roda = 4;
}

class Mobil extends Kendaraan {
    public $merk = "Toyota";
}

$sedan = new Mobil();
echo $sedan->roda; // Output: 4
echo $sedan->merk; // Output: Toyota
```

---

**Kesimpulan singkat:**
| File             | Fungsi Utama                        |
|------------------|-------------------------------------|
| constructor.php  | Menginisialisasi data saat objek dibuat |
| dasar.php        | Memahami dasar OOP: class, object, method |
| encapsulation.php| Melindungi data dari akses bebas |
| polymorphism.php | Membuat method yang bisa berbeda tergantung objek |
| warisan.php      | Mewarisi atribut dan fungsi dari class lain |

---

