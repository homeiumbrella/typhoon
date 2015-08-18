<?php

namespace Homeiumbrella\Typhoon\Storage\Session\Config;

interface ConfigInterface {
	/**
	 * Set array of options
	 *
	 * @param array $options        	
	 * @return $this
	 *
	 */
	public function setOptions($options);
	/**
	 * Get all options set
	 *
	 * @return array
	 *
	 */
	public function getOptions();
}