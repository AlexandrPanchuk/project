<?php 

namespace Components;

use PDO;

class Db {

	protected $config;
	protected $dbh;	

	public function __construct() 
	{
		include 'config.php';
		$this->config = $db;

		$this->dbh = new PDO(
			'mysql:host='.$this->config['host'].';dbname='.$this->config['dbname'].';', 
			$this->config['name'], 
			$this->config['password'],
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
	}


	public function execute(string $sql) 
	{
		$dbs = $this->dbh->prepare($sql);
		$return = $dbs->execute();
		$this->db = $dbs->fetchAll(); 
		return $return ;
	}

	public function resultExecute() 
	{
		return $this->db;

	}

	public function query($sql, $class)
	{
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute();

		if (false !== $res)
		{
			return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
		} 

		return [];

	}
	
}