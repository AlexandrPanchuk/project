<?php
include __DIR__.'/view/header.php';
include __DIR__.'/Components/Route.php';
include __DIR__.'/autoload.php';


$route = new Route();
$route->actionIndex($_SERVER['REQUEST_URI']);
