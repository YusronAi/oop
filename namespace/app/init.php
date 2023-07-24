<?php

// require_once "laptop/infoLp.php";
// require_once "laptop/laptop.php";
// require_once "laptop/laptopGaming.php";
// require_once "laptop/laptopKantor.php";

spl_autoload_register(function ($class){
    require_once "laptop/". $class . ".php";
});