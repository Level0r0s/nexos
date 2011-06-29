<?php
/*********************************************
  Copyright (c) 2011 by DragonflyCMS
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/spam.php,v $
  $Revision: 1.2 $
  $Author: nanocaiordo $
  $Date: 2011/04/17 06:55:18 $
**********************************************/

/**
* title: Spam class
* requires: NET class
*/

abstract class SPAM extends SplFileObject
{
	
	/* enable logging */
	const LOG = true;

	/* specify the file to log to, full or relative path */
	const LOG_TO_FILE = 'spam.log';

	/* maximum number of http and ftp urls allowed in the text */
	const URL_N = 3;
	
	/* time format used in logs */
	const DATE_FORMAT = 'D M d, Y g:i a';
	
	/* enable if the software used it is not fully PHP5 aware */
	const TIMEZONE_SET = true;
	
	/* UTC/GMT by default */
	const TIMEZONE = 'UTC';
	
	/* dictionary word list */
	const DICTIONARY = 'viagra|dexasone|loxitane|aciphexz|vibramycin|amoxocillin|nasonex|cephalexin|hot|porno|viagra|sex';
	
	/** matches commonly used ANSI patterns and replace them */
	private static $pattern = array(
		'a' => array('@',
		'<!-.*?->' => '',
		'[aigrv]' => 'viagra'
		
	);
	/**
	 * return: bool|string. LOG=true: log to file and return True on succes, False on failure. LOG=false: client IPv4 or IPv6, False on failure
	 */
	public static function exists($text)
	{
		$text = mb_tolower($text);
		if (self::TIMEZONE_SET) {
			date_default_timezone_set(self::TIMEZONE);
		}
		//preg_replace(array_keys(self::$pattern), array_values(self::pattern), $text)
		if (preg_match('#('.self::DICTIONARY.')#i', $text)
			|| self::URL_N < preg_match_all('#(ht|f)tp#i', $text, $match))
		{
			//trigger_error('Spam detected within the text', E_USER_NOTICE);
			if (self::LOG) {
				$file = new SplFileObject(self::LOG_TO_FILE, 'ab');
				$file->fwrite(date(self::DATE_FORMAT). ' ' .inet_ntop(Net::get_ip()). "\n" .$text. "\n");
				return true;
			}
			else { return inet_ntop(Net::get_ip()); }
		}
		return false;
	}
	
	private static function mb_toenglish(&$text)
	{
		
	}
}