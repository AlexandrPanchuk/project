<?php

namespace Components;

/* Реализация интерфейса для того, что бы класс ввел себя как миссыв */

class Collection implements \ArrayAccess, \Iterator
{
	use TCollection;

}	