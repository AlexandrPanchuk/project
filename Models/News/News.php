<?php

namespace Models\News;

use Models\Model;
use Models\Author;
use Components\Db;
use Components\Singleton;

class News extends Model {
	const TABLE = 'news';

	public $title;
	public $lead;
	public $author_id;
	
	/*
	* lazy load
	* делаем запрос к базе на получение связанной модели	
	* тогда, когда они нужны
	*/
	public function __get($k)
	{
		switch ($k) {
			case 'author':
				return Author::findById($this->author_id);		
				break;
			default:
				return NULL;
		}
	}

	public function __isset($k)
	{
		switch ($k) {
			case 'author':
				return !empty($this->author_id);
			default:
				return false;
		}
	}

	/*
	* Метод возвращает новость
	* return array Массив со значениями принадлежащими к одной новости
	*/
	public function itemNews($id)
	{
		if (!empty($id))
		{
			$db = Db::instance();
			$data = $db->query("SELECT * FROM news WHERE id = ".$id['news']." ",[], self::CLASS);
			if (!empty($data))
			{
				return $data;
			}
			return [];

		}
	}







}