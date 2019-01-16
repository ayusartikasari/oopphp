<?php 

require_once 'App/Init.php';

$produk1 = new Komik("Doraemon", "Nobuyuki Fujimoto", "Shogakukan", 25000, 100);
$produk2 = new Game("PUBG MOBILE", "@PUBGMOBILE", "PUBG Corporation", 435000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();