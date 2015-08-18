<?php

namespace Homeiumbrella\Typhoon\Storage\Session;

interface StorageInterface {
	/**
	 * Initialize storage data
	 *
	 * @param array $data        	
	 * @return $this
	 */
	public function init(array $data);
	/**
	 * Get current storage namespace
	 *
	 * @return string
	 *
	 */
	public function getNamespace();
}