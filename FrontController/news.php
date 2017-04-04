<?php

$controller = new \Controllers\News;

$action = $_GET['action'] ?: 'Index';

$controller->action($action);

