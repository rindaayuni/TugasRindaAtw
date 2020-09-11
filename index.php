<?php
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
echo "suara: $kucing->suara";
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