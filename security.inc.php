<?php
	/**
	 * Anti-XSS and Anti-HTML Injection
	 *
	 * @param string $data
	 * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
	 * @since November 18, 2014
	 * @return cleaned data
	 */
	function protectData($data) {
		if (urldecode($data) > 0) {
			$data = urldecode($data);
		}
		$data = strip_tags($data);
		$data = htmlspecialchars(trim($data));
		return $data;
	}