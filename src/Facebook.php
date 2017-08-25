<?php

namespace Infonesy;

class Facebook extends \B2\Obj
{
	function infonesy_uuid()
	{
		return 'facebook.' . $this->id();
	}
}
