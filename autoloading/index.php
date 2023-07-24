<?php

require_once "app/init.php";

// $gaming = new laptopGaming ("Merah", 4, "SSD", "Intel Core i9", 9000000);
// $kantor = new laptopKantor ("Hitam", 8, "HDD", "Hadiah Mouse", 5000000);

// echo $gaming->infoLaptop();
// echo $kantor->infoLaptop();

use app\laptop\user as LaptopUser;
use app\tablet\user as TabletUser;

new LaptopUser();
echo "<br>";
new TabletUser();