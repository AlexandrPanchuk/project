<?php

namespace Models;

use Components\Db;
use Models\Model;

class Home extends Model {
	
	const TABLE = 'news';	
		
	// получаем текст с главно страницы
	public function textIndex() 
	{
		// $dbh = new Db;
		$dbh = Db::instance();
		$dbh->execute("SELECT * FROM seotext WHERE page = 'index.php' ");

		$text =  $dbh->resultExecute();
		return $text;
	}


	// последних 3 новости
	public function lastNews(array $news)
	{
	    if (!empty($news)) {
	    	return $lastNews = array_slice($news, -3);
	    }
	    return [];
	}



}