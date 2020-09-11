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

echo "Nama: $Kucing->nama";

