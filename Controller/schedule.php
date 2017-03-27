<?php


$shedule = new Models\Schedule;
$_temp = $shedule->allList();

$view = new Components\View();
$view->assign('schedule' ,$_temp);

$view->display(__DIR__.'/../view/shedule.php');
