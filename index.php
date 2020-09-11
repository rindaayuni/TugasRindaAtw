<?php
echo "Animal <hr>";
class Kucing{
public $nama, $jumlah_kaki, $bisa_terbang,
		$suara;

}

$Kucing = new Kucing;
$Kucing->nama = "Omeng";
$Kucing->jumlah_kaki = "4";
$Kucing->bisa_terbang ="tidak";
$Kucing->suara = "meong";

echo "Kucing <br>";
echo "Nama: $Kucing->nama";
echo "<br>";
echo "jumlah kaki: $Kucing->jumlah_kaki";
echo "<br>";
echo "bisa terbang: $Kucing->bisa_terbang";
echo "<br>";
echo "suara: $Kucing->suara";
echo "<hr>";

class Angsa{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$Angsa = new Angsa;
$Angsa->nama= "Soang";
$Angsa->jumlah_kaki= "2";
$Angsa->bisa_terbang= "tidak";
$Angsa->suara= "kwaak";

echo "Angsa <br>";
echo "Nama: $Angsa->nama";
echo "<br>";
echo "Jumlah kaki $Angsa->jumlah_kaki";
echo "<br>";
echo "Bisa_terbang $Angsa->bisa_terbang";
echo "<br>";
echo "Suara $Angsa->suara";
echo "<hr>";

class Elang{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$Elang = new Elang;
$Elang->nama = "Fiacra";
$Elang->jumlah_kaki ="2";
$Elang->bisa_terbang ="iya";
$Elang->suara = "miiip";

echo "Elang <br>";
echo "Nama: $Elang->nama";
echo "<br>";
echo "jumlah_kaki: $Elang->jumlah_kaki";
echo "<br>";
echo "bisa_terbang: $Elang->bisa_terbang";
echo "<br>";
echo "suara: $Elang->suara";
echo "<hr>";

class Anjing{
	public $nama, $jumlah_kaki, $bisa_terbang,  $suara;
}

$Anjing = new Anjing;
$Anjing->nama = "papoy";
$Anjing->jumlah_kaki = "4";
$Anjing->bisa_terbang = "tidak";
$Anjing->suara = "Guk Guk";

echo "Anjing <br>";
echo "Nama: $Anjing->nama";
echo "<br>";
echo "jumlah_kaki: $Anjing->jumlah_kaki";
echo "<br>";
echo "bisa_terbang: $Anjing->bisa_terbang";
echo "<br>";
echo "suara: $Anjing->suara";
echo "<hr>";





