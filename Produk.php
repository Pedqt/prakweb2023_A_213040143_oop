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

$produk3 = new Produk();
$produk3->judul = "Solo Leveling";
$produk3->penulis = "Jang Sung Rak";
$produk3->penerbit = "D&C Media";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Minecraft";
$produk4->penulis = "Marcus Alexej";
$produk4->penerbit = "Mojang";
$produk4->harga = 325000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();