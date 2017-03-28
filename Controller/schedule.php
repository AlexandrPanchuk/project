<?php

$shedule = new Models\Schedule;

$view = new Components\View();
$view->schedule =  $shedule->allList();

$view->display(__DIR__.'/../view/shedule.php');
