<?php

namespace Components;

class MultiException extends \Exception implements \ArrayAccess, \Iterator
{
	use TCollection;
}