<?php

// class parent
class Produk
{
  private $judul, $penulis, $penerbit, $harga;

  protected $diskon = 0; // bisa di akses di class child 

  // method konstruktor (__construct)
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }


  //contoh method setter berguna untuk sebuah validasi
  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function setHarga($harga)
  {
    $this->harga = $harga;
  }


  // contoh method getter
  public function getJudul()
  {
    return $this->judul;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }



  public function getLabel()
  {
    return "$this->penulis,  $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}



//class child Komik
class Komik extends Produk
{
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}



//class child Game
class Game extends Produk
{
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}


//class cetak
class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Komik("Naruto", "Masasi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// contoh mendiskon harga produk Game
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<br>";

// contoh mendiskon harga produk Komik
// $produk1->setDiskon(0); // perintah ini tidak akan bisa karena claas Komik tidak di kasih function Diskon
echo $produk1->getHarga();
echo "<hr>";
/*
== keterangan ==

public -> bisa di akses di manapun meski di luar class
protected -> hanya bisa di akses oleh class berikut turunanya (parent class and child class)
privat -> hanya bisa di akses oleh class itu saja (didalam class itu saja)

*/

$produk1->setJudul("Judul Baru"); // pemanggilan setter
echo $produk1->getJudul(); // pemanggilan getter

echo "<br>";

$produk2->setPenulis("Dian Supriyadi");
echo $produk2->getPenulis();
