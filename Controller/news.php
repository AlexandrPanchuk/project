<?php

$view = new Components\View();
$view->news = Models\News\News::findAll(); 

// $authors = Models\Author::findAll();
$news = Models\News\News::findAll();


$view->display(__DIR__.'/../view/news.php');
