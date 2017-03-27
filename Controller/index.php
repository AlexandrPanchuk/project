<?php 

$home = new \Models\Home();
$text = $home->textIndex();


$view = new Components\View();
$view->assign('index', $text);
$view->display(__DIR__.'/../view/index.php');
