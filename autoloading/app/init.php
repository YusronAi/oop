<?php

// require_once "laptop/infoLp.php";
// require_once "laptop/laptop.php";
// require_once "laptop/laptopGaming.php";
// require_once "laptop/laptopKantor.php";
// require_once "laptop/user.php";
// require_once "tablet/user.php";


spl_autoload_register(function ($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once "laptop/". $class . ".php";
});


spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once "tablet/". $class . ".php";
});