<?php

class keyboard {
    public $warna;
    public $jumlah;
    public $nama;

    public function __construct($warna, $jumlah, $nama)
    {
        $this->warna = $warna;
        $this->jumlah = $jumlah;
        $this->nama = $nama;
    }

    public function getLabel (){
        return "$this->warna";
    }
}

$ketik = new keyboard("Hitam", 1, "Keyboard");

echo $ketik->getLabel();
echo "<br>";
var_dump($ketik);