<?php

namespace Models;

use Components\Db;

class ScheduleMethods {

	protected $dbh;

	public function __construct()
	{
		$this->dbh = Db::instance();
	}

	public function addItem() 
	{
		$dbh = $this->dbh;

		if (!empty($_POST['from']))
		{
			foreach ($_POST as $indexKey => $valueOption) 
			{
				if ($valueOption == '')
					$sql_error = 'Запись невозможна!';
			} 

			if (!isset($sql_error))
			{
				$dbh->execute("INSERT INTO schedule (`from`, `to`, `time`, `date`, `number`)
	    		   VALUES ('".$_POST['from']."', '".$_POST['to']."', '".$_POST['time']."', '".$_POST['date']."', '".$_POST['number']."') ");
			
				return header('Location: http://'.$_SERVER['HTTP_HOST'].'/admin/admin.php');
			} 
			else {
				return $sql_error;
			}
		}
	}

	public function dellItem()
	{
		$dbh = $this->dbh;

		if (isset($_POST['delete']))
		{
			$id = $_POST['delete'];
			$dbh->execute("DELETE FROM schedule WHERE id = '".$id."' ");
			return header('Location: http://'.$_SERVER['HTTP_HOST'].'/admin/admin.php');
		}
	}	


	public function changeTextMainPage()
	{
		if (!empty($_POST['changetext']))
		{
			$changeText = $_POST['changetext'];
			$this->dbh->execute("UPDATE seotext SET text = '".$changeText."' WHERE page='index.php' ");
			return header('Location: http://'.$_SERVER['HTTP_HOST'].'/admin/admin.php');
		}
	}



}