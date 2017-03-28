<?php

namespace Models;

use Components\Db;
use Models\Model;

class Home extends Model {
	
	const TABLE = 'news';	

	/*
	* lazy load
	* делаем запрос к базе на получение связанной модели	
	* тогда, когда они нужны
	*/

	/*
	* Примечание: используется еще в Models\News\News.php
	* можно сделать для него трейт
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
	*  получаем текст с главно страницы
	*/
	public function textIndex() 
	{
		// $dbh = new Db;
		$dbh = Db::instance();
		$dbh->execute("SELECT * FROM seotext WHERE page = 'index.php' ");

		$text =  $dbh->resultExecute();
		return $text;
	}

	/*
	* последних 3 новости
	*/
	public function lastNews(array $news)
	{
	    if (!empty($news)) {
	    	return $lastNews = array_slice($news, -3);
	    }
	    return [];
	}



}