<?php
namespace Homeiumbrella\Typhoon\Models;

use Cartalyst\Sentry\Users\Eloquent\User as SentryUser;
class User extends SentryUser{
	
	
	/**
	 * 
	 * @var string
	 */
	protected $table = 'users';
	
	/**
	 * 
	 * @var string
	 */
	public static $name = 'users';
	
}