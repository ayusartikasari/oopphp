<?php 

class Produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;

	       public function getLabel() {
	       	return "$this->penulis, $this->penerbit";
	       }

 }

 // $produk1 = new Produk();
 // $produk1->judul = "Doraemon";
 // var_dump($produk1);

 // $produk2 = new Produk();
 // $produk2->judul = "PUG MOBILE";
 // $produk2->tambahProperty = "Hhehehe";
 // var_dump($produk2);

 $produk3 = new Produk();
 $produk3->judul = "Doraemon";
 $produk3->penulis = "Nobuyuki Fujimoto";
 $produk3->penerbit = "Shogakukan ";
 $produk3->harga = 25000;

$produk4 = new Produk();
$produk4->judul = "PUBG MOBILE";
$produk4->penulis = "@PUBGMOBILE";
$produk4->penerbit = "PUBG Corporation";
$produk4->harga = 435000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();