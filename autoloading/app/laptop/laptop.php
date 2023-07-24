<?php

abstract class laptop {
    protected $warna,
            $ram,
            $hardisk,
            $harga,
            $diskon = 0;

    public function __construct($warna, $ram, $hardisk, $harga)
    {
        $this->warna = $warna;
        $this->ram = $ram;
        $this->hardisk = $hardisk;
        $this->harga = $harga;
    }

    public function infoHarga (){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    abstract public function info();

    public function setWarna ($warna){
        $this->warna = $warna;
    } 

    public function getWarna (){
        return $this->warna;
    }

    public function setRam ($ram){
        $this->ram = $ram;
    }

    public function getRam (){
        return $this->ram;
    }

    public function setHardisk ($hardisk){
        $this->warna = $hardisk;
    }

    public function getHardisk (){
        return $this->hardisk;
    }

    public function setHarga ($harga){
        $this->warna = $harga;
    }

    public function getHarga (){
        return $this->harga;
    }

    public function setDiskon ($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon (){
        return $this->diskon;
}
}