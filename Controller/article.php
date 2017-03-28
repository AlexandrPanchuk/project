<?php

$view = new Components\View();

$itemNews = new \Models\News\News;

$view->news = $itemNews->itemNews($_GET);
$view->display(__DIR__.'/../view/article.php');

