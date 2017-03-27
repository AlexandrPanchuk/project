<?php


$allNews = Models\News\News::findAll();

$view = new Components\View();

$view->assign('news', $allNews);



$view->display(__DIR__.'/../view/news.php');
