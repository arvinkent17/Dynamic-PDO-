<?php
	require_once 'security.inc.php';
	/**
	 * Sample User Class
	 *
	 * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
	 * @since November 18, 2014
	 **/
	class User extends Database {
		/**
		 * Get List of Usernames 
		 *
		 * @return array of list
		 * @access public 
		 **/
		public function getUserList() {
			$this->executeMySQL('SELECT * FROM users');
			if ($this->rowCount() >= 1) {
				while ($dataRow = $this->rowFetch()) {
					$dataSet[] = $dataRow;
				}
				return $dataSet;
			}
			else {
				return null;
			}
		}

		/**
		 * Inserting Username and Password
		 *		 *
		 * @return boolean true or false
		 * @access public 
		 **/
		public function insertUser($username, $password) {
			$this->executeMySQL('INSERT INTO users (username, password) VALUES (?, ?)', array(protectData($username), protectData($password)));
			if ($this->isInserted()) {
				return true;
			}
			else {
				return false;
			}
		}
	}