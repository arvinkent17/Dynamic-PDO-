<?php
	/**
	 * Autoloading Classes
	 *
	 * @param string $class
	 * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
	 * @since November 18, 2014
	 */
	spl_autoload_register(function ($class) {
	    require_once $class . '.class.php';
	});
