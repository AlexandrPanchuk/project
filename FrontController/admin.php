<?php


$shedule = new Models\Schedule;


$view = new Components\View();
$view->scheduleList = $shedule->allList();

$scheduleAdd = new Models\ScheduleMethods;
$scheduleAdd->addItem();
$scheduleAdd->dellItem();
$scheduleAdd->changeTextMainPage();


$home = new \Models\Home();
$text = $home->textIndex();
$view->assign('text', $text);


$view->display(__DIR__.'/../view/admin.php');