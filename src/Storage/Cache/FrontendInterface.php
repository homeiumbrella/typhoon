<?php
namespace Homeiumbrella\Typhoon\Storage\Cache;

interface FrontendInterface
{
	public function load($identifier);
	
	public function save($identifier);
	
	public function remove($identifier);
}