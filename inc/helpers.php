<?php

function getPropertyType($type)
{
	if($type == 1)
	{
		return 'Flat';
	} else if($type == 2)
	{
		return 'Shop';
	} else if($type == 3)
	{
		return 'Plot';
	}
}