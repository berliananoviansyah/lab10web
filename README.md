|  Berliana Noviansyah  |      312010373     |
|-----------------------|--------------------|
|    Pemrograman Web    |      TI.20.A1      |
|     Pertemuan 11      |    Praktikum 10    |


# Praktikum 10 Pertemuan 11


## 1). Menjalankan Xampp Server

Langkah pertama yang harus dilakukan adalah menjalankan apache dan mysql pada aplikasi Xampp server.



## 2). Membuat Folder Baru

Lalu buatlah folder baru didalam folder *lab10web* dengan nama *lab10_php_oop*. Kemudian jalankan pada localhost dengan mengakses http://localhost/lab10web/lab10_php_oop/



## 3) Membuat File

Setelahnya, buatlah file baru dengan nama *mobil.php* di dalam folder lab10_php_oop. Lalu buat codingan sebagai berikut dan jalankan pada localhostnya:


```php
<?php
/** Program sderhana pendefinisian class dan pemanggilan class. **/

class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Baby Blue";
        $this->merk = "Gucci";
        $this->harga = "20000000";
    }

    public function gantiWarna ($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    public function tampilWarna ()
    {
        echo "Warna Mobilnya : " . $this->warna;
    }
}

# membuat objek mobil
$a = new Mobil();
$b = new Mobil();

# memanggil objek
echo "<b>Mobil Pertama</b><br>";
$a->tampilWarna();
echo "<br><i>Mobil pertama ganti warna</i><br>";
$a->gantiWarna("Red");
$a->tampilWarna();

# memanggil objek
echo "<br><b>Mobil Kedua</b><br>";
$b->gantiWarna("grey");
$b->tampilWarna();

?>
```



## 4). Membuat File Form

