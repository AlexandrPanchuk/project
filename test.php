<?php

// запись свойств на лету (__set, __get)
// в tamplate использовать обьект (пример: $this->users as $user |||  echo $user->name)
$view = new Application\View;
$view->users = \Application\Models\User::findAll();
$view->display(__DIR__.'/Application/templates/index.php');