<?php 

$home = new \Models\Home();

$view = new Components\View();
$view->text = $home->textIndex(); 

$news = \Models\Home::findAll();
$view->lastNews = $home->lastNews($news);


$view->display(__DIR__.'/../view/index.php');



