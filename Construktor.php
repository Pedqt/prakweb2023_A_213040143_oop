<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Solo Leveling", "Jang Sung Rak", "D&C Media", 30000);
$produk2 = new Produk("Minecraft", "Marcus Alexej", "Mojang", 325000);
$produk3 = new Produk("Dragon Ball");
$produk4 = new Produk("Naruto");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";
var_dump($produk3);