<?php

// Jualan Produk
// Komik
// Game

// visibility (public, protected, private)
// method function juga punya visibility


class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  // method
  public function getLabel()
  {
    return "$this->penulis,  $this->penerbit";

    /* contoh
    public function sayHello()
    {
      return "Hello World!";
    } */
  }
}

/*
// hasil judul bisa di timpa dari property

$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->tambahProperty = "hahaha";
var_dump($produk2);
*/

// cara menulis property
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masasi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Drucmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;



/* contoh memanggil method function tampil ke layar

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();
*/

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
