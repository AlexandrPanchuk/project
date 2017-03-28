<?php

$view = new Components\View();
// $view->assign('news', $allNews);

$view->news = Models\News\News::findAll(); 

$view->display(__DIR__.'/../view/news.php');
