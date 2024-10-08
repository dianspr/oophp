<?php

// require_once 'App/Produk/CetakInfoProduk.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Produk.php';

require_once 'App/init.php';


// $produk1 = new Komik("Naruto", "Masasi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Drucmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

// alias
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();
