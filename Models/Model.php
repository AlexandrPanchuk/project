<?php

namespace Models;

use Components\Db; 


abstract class Model {

	const TABLE = '';

	public static function findAll()
	{
		$db = new Db;
		return $db->query('SELECT * FROM '. static::TABLE, static::CLASS);
	}

}