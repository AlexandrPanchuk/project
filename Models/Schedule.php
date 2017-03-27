<?php

namespace Models;

use Components\Db;

class Schedule {

	// вытянуть весь список расписания
	public function allList()
	{
		$dbh = new Db;
		$dbh->execute("SELECT * FROM schedule");
		return $dbh->resultExecute();
	} 



}
