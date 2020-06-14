<?php

require_once 'App/init.php';

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

//$produk1 = new Komik("Naruto", "Masasi Kishimoto", "shonen jump", 300000, 100);
//$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk($produk1);
//$cetakProduk->tambahProduk($produk2);
//echo $cetakProduk->cetak();
