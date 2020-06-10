<?php

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}
$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masasi kishimoto";
$produk3->penerbit = "shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "GAme : " . $produk4->getLabel();


//$produk1 = new Produk();
//$produk1->judul = "naruto";
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2->judul = "uncharted";
//$produk2->tambahProperty = "hahaha";
//var_dump($produk2);
