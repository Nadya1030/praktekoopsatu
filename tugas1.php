<?php
class Mobil {
    // Property
    public $merk;
    public $warna;

    // Method
    public function jalan() {
        return "Mobil $this->merk berwarna $this->warna sedang berjalan...";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil();
$mobil1->merk = "Toyota";
$mobil1->warna = "Hitam";

echo $mobil1->jalan(); 
// Output: Mobil Toyota berwarna Hitam sedang berjalan...
