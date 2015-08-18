<?php
namespace Homeiumbrella\Typhoon\Models;

use Cartalyst\Sentry\Groups\Eloquent\Group as SentryGroup;
class Group extends SentryGroup{

	/**
	 *
	 * @var string
	 */
	protected $table = 'groups';
	
	
	/**
	 *
	 * @var string
	 */
	public static $name = 'groups';
	
}