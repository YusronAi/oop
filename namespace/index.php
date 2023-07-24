<?php

require_once "app/init.php";

$gaming = new laptopGaming ("Merah", 4, "SSD", "Intel Core i9", 9000000);
$kantor = new laptopKantor ("Hitam", 8, "HDD", "Hadiah Mouse", 5000000);

echo $gaming->infoLaptop();
echo $kantor->infoLaptop();

echo "<hr>";
new coba();