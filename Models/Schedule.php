<?php

namespace Models;

use Components\Db;

class Schedule {

	// вытянуть весь список расписания
	public function allList()
	{
		$dbh = Db::instance();	
		$dbh->execute("SELECT * FROM schedule");
		return $dbh->resultExecute();
	} 



}
