<?php

namespace Components;

class View {
		
	public $name;	
	public $value;

	/* запись свойств на лету */
	protected $data = [];

	public function __set($k, $v)
	{
		$this->data[$k] = $v;	
	}

	public function __get($k)
	{
		return $this->data[$k]; 
	}

	public function __isset($k) 
    {
        return isset($this->data[$k]);
    }
	/* !запись свойств на лету */




	/*
	* method
	* @deprecated
	*/
	public function assign(string $name, array $value) 
	{

		$this->name = $name;
		$this->value = $value;

		$this->val[$this->name] = $value;

		$tmp = $value;
	}

	public function render ($template)
	{
		ob_start();

		foreach ($this->data as $prop => $value) 
		{
			$$prop = $value;
		}

		include $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}


	public function display($template) 
	{
		echo $this->render($template);
	}

	public function generate_h1($html)
	{

	}




}