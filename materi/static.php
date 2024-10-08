<?php

/* Keterangan
- class merupakan template dari sebuah object
- kita bisa mengakses propery dari method dalam konteks class (tanpa istansiasi)
*/


class ContohStatic
{
  public static $angka = 1;

  public static function halo()
  {
    return "Halo." . self::$angka++ . "kali.";
  }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";

echo ContohStatic::halo();

echo "<hr>";

/*
== fungsi dari static keyword ==
- Member-member (property dan method) yang terkait dengan class, bukan dengan object
- Nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
- dengan menggunakan static membuat kode seolah2 menjadi 'prosedural'
- Biasanya digunakan untuk membuat fungsi bantuan / helper karena tidak memerlukan instansiasi langsung saja panggil (property dan method)
- Atau biasa digunakan di class-class utility pada Framework (Codelgniter, Laravel, dll)
*/


// == class contoh yang di instansiasi ==
class Contoh1
{
  public $angka = 1;

  public function halo()
  {
    return "Halo" . $this->angka++ . " kali. <br>";
  }
}

$obj = new Contoh1;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();


echo "<br>";

// == class yang menggunakan static tanpa instansiasi

$obj2 = new Contoh1;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

echo "<hr>";

class Contoh2
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo" . self::$angka++ . " kali. <br>";
  }
}

$obj = new Contoh2;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<br>";

$obj2 = new Contoh2;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

 // hasil dari ini nilai 1 ini tidak di reset meskipun  kita instansiasi object baru