<?php 

$home = new \Models\Home();
$text = $home->textIndex();

$view = new Components\View();
$view->assign('index', $text);

$news = \Models\Home::findAll();

$lastNews = $home->lastNews($news);
$view->assign('last_news', $lastNews);


$view->display(__DIR__.'/../view/index.php');



