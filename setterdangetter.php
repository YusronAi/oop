<?php

class laptop {
    private $warna,
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

    public function infoLengkap (){
        return "{$this->warna}, {$this->ram}, {$this->hardisk}. Harga = {$this->harga}";
    }

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

class laptopGaming extends laptop {
    public $cpu;

    public function __construct($warna, $ram, $hardisk, $cpu, $harga)
    {
        parent::__construct($warna, $ram, $hardisk, $harga);
        $this->cpu = $cpu;
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
echo "<hr>";
$gaming->setWarna("Hitam");
echo $gaming->getWarna();
echo "<br>";
$gaming->setRam(12);
echo $gaming->getRam();
echo "<br>";
$gaming->setDiskon(25);
echo $gaming->getDiskon();