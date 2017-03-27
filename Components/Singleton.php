<?php

namespace Components;

trait Singleton 
{

	protected static $instance;

	protected function __construct()
	{

	}

	public static function instance()
	{
		if (null === static::$instance)
		{
			static::$instance = new static;
		}

	 	return new static::$instance;
	}
}