<?php

class laptop {
    public $warna;
    public $ram;
    public $hardisk;
    protected $diskon;

    private $harga;

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

    public function infoLengkap (){
        return "{$this->warna}, {$this->ram}, {$this->hardisk}. Harga = {$this->harga}";
    }
}

class laptopGaming extends laptop {
    public $cpu;

    public function __construct($warna, $ram, $hardisk, $cpu, $harga)
    {
        parent::__construct($warna, $ram, $hardisk, $harga);
        $this->cpu = $cpu;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function infoLaptop () {
        $str = "Laptop Gaming : ". parent::infoLengkap() ." - {$this->cpu}";
        return $str;
    }
}

class laptopKantor extends laptop {
    public $mouse;

    public function __construct($warna, $ram, $hardisk, $mouse, $harga)
    {
        parent::__construct($warna, $ram, $hardisk, $harga);
        $this->mouse = $mouse;
        $this->harga = $harga;
    }

    public function infoLaptop (){
        $str = "Laptop Kantor : ". parent::infoLengkap() ." - {$this->mouse}";
        return $str;
    }
}

$gaming = new laptopGaming ("Merah", 4, "SSD", "Intel Core i9", 9000000);
$kantor = new laptopKantor ("Hitam", 8, "HDD", "Hadiah Mouse", 5000000);

echo $gaming->infoLaptop();
echo "</br>";
echo $kantor->infoLaptop();
echo "<hr>";

$gaming->setDiskon(50);
echo $gaming->infoHarga();