<?php

class laptop {
    public $warna;
    public $ram;
    public $hardisk;

    public function __construct($warna, $ram, $hardisk)
    {
        $this->warna = $warna;
        $this->ram = $ram;
        $this->hardisk = $hardisk;
    }

    public function infoLengkap (){
        return "{$this->warna}, {$this->ram}, {$this->hardisk}";
    }
}

class laptopGaming extends laptop {
    public $cpu;
    public function __construct($warna, $ram, $hardisk, $cpu)
    {
        parent::__construct($warna, $ram, $hardisk);
        $this->cpu = $cpu;
    }

    public function infoLaptop () {
        $str = "Laptop Gaming : ". parent::infoLengkap() ." - {$this->cpu}";
        return $str;
    }
}

class laptopKantor extends laptop {
    public $mouse;

    public function __construct($warna, $ram, $hardisk, $mouse)
    {
        parent::__construct($warna, $ram, $hardisk);
        $this->mouse = $mouse;
    }

    public function infoLaptop (){
        $str = "Laptop Kantor : ". parent::infoLengkap() ." - {$this->mouse}";
        return $str;
    }
}

$gaming = new laptopGaming ("Merah", 4, "SSD", "Intel Core i9",);
$kantor = new laptopKantor ("Hitam", 8, "HDD", "Hadiah Mouse");

echo $gaming->infoLaptop();
echo "</br>";
echo $kantor->infoLaptop();