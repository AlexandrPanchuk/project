<?php

namespace Components;

class View {
		
	public $name;	
	public $value;

	public function assign(string $name, array $value) 
	{

		$this->name = $name;
		$this->value = $value;

		$this->val[$this->name] = $value;

		$tmp = $value;
	}


	public function display($template) 
	{
		if (file_exists($template))
		{

			$data = $this->val;		
			include $template;
		}
	}




}