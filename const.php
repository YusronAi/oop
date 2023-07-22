<?php

// Define berbeda dengan const jika pada OOP
define("NAMA", "Yusron Aminullah");
// Ini contoh const
const NAME = "Yusron";


class person {
    const NAMA = "Yusron Aminullah";
}

echo person::NAMA. "<br>";

// Magic Constant
// __LINE__
//__FILE__
//__DIR__
//__FUNCTION__
//__CLASS__
//__TRAIT__
//__METHOD__
//__NAMESPACE__

// echo __LINE__;
// echo __DIR__;

?>