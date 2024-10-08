<?php

//cara pertama
define('NAMA', 'Dian Supriyadi');
echo NAMA;

echo "<br>";

//cara kedua
const UMUR = 32;
echo UMUR;

echo "<hr>";

/*
== perbedaan define() dan const akan terlihat padan OOP ==

define() hnya bisa digunakan di luar class sebgai constanta global
const bisa digunakan di dalam class

*/

class Coba
{
  const NAMA = 'Dian Supriyadi';
}

echo Coba::NAMA;

echo "<hr>";

/* Magic Constant

__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__

*/

echo __LINE__;
echo "<br>";

echo __FILE__;
echo "<br>";

function test()
{
  return __FUNCTION__;
}
echo test();
echo "<br>";

class Coba1
{
  public $kelas = __CLASS__;
}
$obj = new Coba1;
echo $obj->kelas;
echo "<br>";
