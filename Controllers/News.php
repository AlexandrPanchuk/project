<?php

namespace Controllers;

class News 
{

	protected $view;

	public function __construct()
	{
		$this->view = new \Components\View();
	}


	public function action($action)
	{
		$methodName = 'action'.$action;
		
		$this->beforeAction();

		return $this->$methodName(); 
	}

	protected function beforeAction()
	{

		//echo "Счетчик";
	}

	protected function actionIndex()
	{
		$this->view->news = \Models\News\News::findAll(); 
		$this->news = \Models\News\News::findAll();
		$this->view->display(__DIR__.'/../view/news.php');
	}

	protected function actionOne()
	{
		$itemNews = new \Models\News\News;
		$this->view->news = $itemNews->itemNews($_GET);
		$this->view->display(__DIR__.'/../view/article.php');

	}





}