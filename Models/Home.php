<?php

namespace Models;

use Components\Db;

class Home {
	
	// получаем текст с главно страницы
	public function textIndex() 
	{
		$dbh = new Db;
		$dbh->execute("SELECT * FROM seotext WHERE page = 'index.php' ");

		$text =  $dbh->resultExecute();
		return $text;
	}	

}