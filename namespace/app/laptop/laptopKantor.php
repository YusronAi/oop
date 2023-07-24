<?php

class laptopKantor extends laptop implements infoLp {
    public $mouse;

    public function __construct($warna, $ram, $hardisk, $mouse, $harga)
    {
        parent::__construct($warna, $ram, $hardisk, $harga);
        $this->mouse = $mouse;
        $this->harga = $harga;
    }

    public function info ()
    {
        return "{$this->warna}, {$this->ram}, {$this->hardisk}. Harga = {$this->harga}";
    }

    public function infoLaptop (){
        $str = "Laptop Kantor : ". $this->info() ." - {$this->mouse}";
        return $str;
    }
}