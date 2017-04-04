<?php

namespace Components;

trait TCollection 
{
	protected $data = [];

	/*
	* Существуют ли в обьекте елемент с заданым ключем 
	*/
	public function offsetExists($offset)
	{
		return array_key_exists($offset, $this->data);
	}

	/*
	* Получения значения по ключу
	*/
	public function offsetGet($offset)
	{
		return $this->data[$offset];
	}

	
	public function offsetSet($offset, $value)
	{
		if ('' = $offset)  {
			$this->data[] = $value;
		} else {
			$this->data[$offset] = $value;
		}
	}

	public function offsetUnset($offset)
	{
		unset($this->data[$offset]);
	}	

	/*--------- ITERATOR ---------*/
	/* дает возможность двигаться по обьекту(массиву) с помощью foreach */

	/* 
	* Возвращает текущий элемент 
	*/
	public function current()
	{
		return current($this->data);
	}


	/* 
	* Возвращает следующий элемент 
	*/
	public function next()
	{
		next($this->data); 
	}


	/* 
	* Возвращает ключ текущего элемента 
	*/
	public function key()
	{
		return key($this->data);
	}


	/*
	* что бы current не возвращал false	
	*/
	public function valid()
	{
		return false !== current($this->data);
	}

	/*
	* Указатель на самое начало массива
	*/
	public function rewind()
	{
		reset($this->data);
	}




}