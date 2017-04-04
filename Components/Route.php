<?php 


class Route {

	public $uri;

	public function actionIndex(string $uri) {

		// контроллер по умолчаню
		$controller_name = 'index.php';

		$expUri = explode('/', $uri);

		// имя контроллера 
		if (!empty($expUri[2])) 
		{
			$controller_name = $expUri[2];
		}

		// создаем путь к кнотроллеру
		$controller_name = __DIR__.'/../FrontController/'.$controller_name;

		if (strpos($controller_name, '?') !== false)
		{
			$controller_name = preg_replace('/\?.*/s', '', $controller_name);
		}

		if (file_exists($controller_name)) 
		{
			include $controller_name;
		} 
		else 
		{
			/*
			* Исключение ловим в индексе /index.php	
			*/
			$ex = new \Exceptions\Core('Страница не найдена!');
			throw $ex;
		}	
		
	}

	function ErrorPage()
	{
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
	    header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'view/404.php');
	}

}






