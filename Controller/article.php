<?php

$view = new Components\View();

$itemNews = new \Models\News\News;

$news = $itemNews->itemNews($_GET);

$view->assign('itemNews', $news);

$view->display(__DIR__.'/../view/article.php');

