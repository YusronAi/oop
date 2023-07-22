<?php

// class iniStatic {
//     public static $air = 70;

//     public static function jernih (){
//         return "Sangat Jernih dengan air ". self::$air ."  Liter";
//     }
// }

// echo iniStatic::$air;
// echo "<br>";
// echo iniStatic::jernih();

class mouse {
    public $merk = "Mikuso";
    public static $jumlah = 1;

    public function merkMouse (){
        return "Ini adalah mouse ". $this->merk ." Berjumlah = ". self::$jumlah++;
    }
}

$mikuso1 = new mouse;
echo $mikuso1->merkMouse(). "<br>";
echo $mikuso1->merkMouse(). "<br>";
echo $mikuso1->merkMouse();
echo "<hr>";
$mikuso2 = new mouse;
echo $mikuso2->merkMouse(). "<br>";
echo $mikuso2->merkMouse(). "<br>";
echo $mikuso2->merkMouse(). "<br>";