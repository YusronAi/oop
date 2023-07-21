<?php

class laptop {
    public $warna;
    public $ram;
    public $hardisk;
    public $cpu;
    public $mouse;

    public function __construct($warna, $ram, $hardisk, $cpu, $mouse)
    {
        $this->warna = $warna;
        $this->ram = $ram;
        $this->hardisk = $hardisk;
        $this->cpu = $cpu;
        $this->mouse = $mouse;
    }

    public function getinfo (){
        return "{$this->warna}, {$this->ram}, {$this->hardisk}";
    }
}

class laptopGaming extends laptop {
    public function infoLaptop () {
        $str = "Laptop Gaming : {$this->getinfo()} - {$this->cpu}";
        return $str;
    }
}

$gaming = new laptopGaming ("merah", 4, "SSD", "Intel Core i9", "");

echo $gaming->infoLaptop();