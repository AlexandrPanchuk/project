<?php

namespace Models\News;

use Models\Model;
use Components\Db;
use Components\Singleton;

class News extends Model {
	const TABLE = 'news';

	public function itemNews($id)
	{
		if (!empty($id))
		{
			// $db = new Db;
			$db = Db::instance();
			$data = $db->query("SELECT * FROM news WHERE id = ".$id['news']." ", self::CLASS);
			if (!empty($data))
			{
				return $data;
			}
			return [];

		}
	}

}