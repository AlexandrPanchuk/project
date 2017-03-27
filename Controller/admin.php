<?php


$shedule = new Models\Schedule;
$_temp = $shedule->allList();

$view = new Components\View();
$view->assign('schedule' ,$_temp);


$scheduleAdd = new Models\ScheduleMethods;
$scheduleAdd->addItem();
$scheduleAdd->dellItem();
$scheduleAdd->changeTextMainPage();


$home = new \Models\Home();
$text = $home->textIndex();
$view->assign('text', $text);


$view->display(__DIR__.'/../view/admin.php');