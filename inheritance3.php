<?php
class produk{
	public $namaBarang,
	   $merk, 
	   $harga,
	   $ukuransepatu,
	   $warna;

	public function getCetak(){
		return "$this->merk, (Rp $this->harga)";
	}
	public function __construct($namaBarang="nama barang",$merk="merk",$harga=0, $ukuransepatu="ukuran sepatu", $warna="warna"){
	$this->namaBarang =$namaBarang;
	$this->merk=$merk;
	$this->harga=$harga;
	$this->ukuransepatu=$ukuransepatu;
	$this->warna=$warna;
 	}

	public function cetakInfo(){
		$str="{$this->namaBarang}, {$this->getCetak()}";
		return $str;
		}
	}
	class sepatu extends produk{
		public function cetakInfo(){
			$str="Sepatu: {$this->namaBarang}, {$this->getcetak()} | Ukuran sepatu: {$this->ukuransepatu}";
			return $str;
		}
	}
	class tas extends produk{
		public function cetakInfo(){
			$str="Tas: {$this->namaBarang}, {$this->getcetak()} | warna: {$this->warna}";
			return $str;
		}
	}
$produk1 = new sepatu("Sepatu", "Converse", 550000, "39", "Hitam");
$produk2 = new tas("Tas", "Dior", 2300000, "-", "Abu-abu");

echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";

?>