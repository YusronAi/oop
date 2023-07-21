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

class coba {
    public function test ( keyboard $ketik){
        $str = "$ketik->warna, $ketik->jumlah, $ketik->nama";
        return $str;
    }
}

$ketik = new keyboard("Hitam", 1, "Keyboard");

$test = new coba();
echo $test->test($ketik);