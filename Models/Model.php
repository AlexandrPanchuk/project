<?php

namespace Models;

use Components\Db; 


abstract class Model {

	const TABLE = '';

	public static function findAll()
	{
		$db = Db::instance();
		return $db->query('SELECT * FROM '. static::TABLE, static::CLASS);
	}

}