<?php

class Produk
{
  public
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;


  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penulis;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
  public function getInfoLengkap()
  {
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
    $str = "{$this->tipe} : {$this->judul} | {$this->getInfoLengkap()} (Rp. {$this->harga}) ";
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}
$produk1 = new Produk("Naruto", "Masasi Kishimoto", "shonen jump", 300000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

//Komik : Masasi Kishimoto, Masasi Kishimoto
//Game : Neil Druckman, Neil Druckman
//Naruto | Masasi Kishimoto, Masasi Kishimoto (Rp. 300000)

// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 25000) ~ 50 Jam.
