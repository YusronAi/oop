<?php

class laptopGaming extends laptop  implements infoLp {
    public $cpu;

    public function __construct($warna, $ram, $hardisk, $cpu, $harga)
    {
        parent::__construct($warna, $ram, $hardisk, $harga);
        $this->cpu = $cpu;
    }

    public function info ()
        {
            return "{$this->warna}, {$this->ram}, {$this->hardisk}. Harga = {$this->harga}";
        }

    public function infoLaptop () {
        $str = "Laptop Gaming : ". $this->info() ." - {$this->cpu} <br>";
        return $str;
    }
}