<?php

namespace Models\News;

use Models\Model;
use Components\Db;

class News extends Model {
	const TABLE = 'news';

	public function itemNews($id)
	{
		if (!empty($id))
		{
			$db = new Db;
			$data = $db->query("SELECT * FROM news WHERE id = ".$id['news']." ", self::CLASS);
			if (!empty($data))
			{
				return $data;
			}
			return [];

		}
	}

}