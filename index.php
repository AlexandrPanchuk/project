<?php
include __DIR__.'/view/header.php';
include __DIR__.'/Components/Route.php';
include __DIR__.'/autoload.php';


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$route = new Route();

try {
	$route->actionIndex($_SERVER['REQUEST_URI']);	
} catch ( \Exceptions\Core $e) {
	echo $e->getMessage() ;
} catch ( \Exceptions\Db $e) {
	echo $e->getMessage();
}