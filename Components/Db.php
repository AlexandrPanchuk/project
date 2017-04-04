<?php 

namespace Components;

use PDO;
// use Components\Singleton;

class Db {
	use Singleton;

	protected $config;
	protected $dbh;	

	protected function __construct() 
	{
		include 'config.php';
		$this->config = $db;

		try {
			$this->dbh = new PDO(
				'mysql:host='.$this->config['host'].';dbname='.$this->config['dbname'].';', 
				$this->config['name'], 
				$this->config['password'],
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
		} catch (\PDOException $ex) {
			throw new \Exceptions\Db("Ошибка с подключением к базе данных: ".$ex->getMessage());
			die();
		}
	}


	public function execute(string $sql, $parameters = []) 
	{
		$dbs = $this->dbh->prepare($sql);
		$return = $dbs->execute($parameters);
		$this->db = $dbs->fetchAll(); 
		return $return ;
	}

	public function resultExecute() 
	{
		return $this->db;

	}

	public function query($sql, $params, $class)
	{
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute($params);

		if (false !== $res)
		{
			return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
		} 

		return [];

	}

}