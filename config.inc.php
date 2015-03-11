<?php
	/**
	 * CONFIGURATION 
	 * 
	 * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
	 * @copyright 2014
	 */
	# DEFAULT TIMEZONE
	ini_set('date.timezone', 'Asia/Manila');
	# DIRECTORY SEPARATOR
	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
	# DIRECTORY PATH
	defined('BASE_URI') ? null : define('BASE_URI', dirname(dirname(__FILE__)).DS);
	# SERVER HOST NAME
	defined("SERVER_HOST") ? null : define("SERVER_HOST", "HOST NAME HERE");
	# SERVER USERNAME
	defined("SERVER_USERNAME") ? null : define("SERVER_USERNAME", "USERNAME HERE");
	# SERVER PASSWORD
	defined("SERVER_PASSWORD") ? null : define("SERVER_PASSWORD", "PASSWORD HERE");
	# DATABASE NAME
	defined("DATABASE_NAME") ? null : define("DATABASE_NAME", "DATABASE NAME HERE");
