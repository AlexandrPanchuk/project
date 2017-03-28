<?php

namespace Models\News;

use Models\Model;
use Components\Db;
use Components\Singleton;

class News extends Model {
	const TABLE = 'news';

	/*
	* Метод возвращает новость
	* return array Массив со значениями принадлежащими к одной новости
	*/
	public function itemNews($id)
	{
		if (!empty($id))
		{
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