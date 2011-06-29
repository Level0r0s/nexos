<?php
/*********************************************
  Dragonfly CMS, Copyright (c) 2004 by CPGNuke Dev Team
  http://dragonflycms.org
  Released under GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/classes/client.php,v $
  $Revision: 1.1 $
  $Author: nanocaiordo $
  $Date: 2011/04/09 07:11:53 $
**********************************************/

abstract class Client
{

	public static $os;
	public static $bot;
	public static $name;
	public static $engine;
	public static $version = 0;
	public static $engineV = 0;
	public static $isMobile = false;

	protected static $ua = '';

	private static $extras = false;

	public static function init()
	{
		self::$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
		if ( !empty($_SESSION['CLIENT']['name']) ) {
			self::$name = $_SESSION['CLIENT']['name'];
			self::$version = (int) $_SESSION['CLIENT']['version'];
			return;
		}

		/*
		 * maemo, epiphany, flock and galeon have "firefox" in their UA
		 * chimera is an on old name of camino
		 * cheshire, midori, omniweb, shiira and sunrise have "safari" in their UA
		 * We don't detect MyIE2, AOL and America Online branded versions of MSIE
		 * Sylera is a Japanese Gecko based browser
		 */
		if (preg_match('#(crazy|maxthon|avant|webtv|ubvision|slimbrowser|slimbrowser)#', self::$ua, $match)
		|| preg_match('#(elinks|opera|shiira|devontech|ibrowse|icab|conkeror|chimera|classilla|gnuzilla)#', self::$ua, $match)
		|| preg_match('#(maemo|epiphany|flock|galeon|cheshire|midori|omniweb|swiftfox|iceweasel|swiftweasel)#', self::$ua, $match)
		|| preg_match('#(konqueror|voyager|links|lynx|w3m|dillo|netscape|thunderbird|camino|seamonkey|linspire|multizilla|k\-meleon|kazehakase|minimo)#', self::$ua, $match)
		|| preg_match('#(chrome|safari|firefox)/([0-9]+(\.[0-9]+)?)#', self::$ua, $match)
		|| preg_match('#(msie) (1?[0-9](\.[0-9])?)#', self::$ua, $match)
		|| preg_match('#(webwasher)#', self::$ua, $match))
		{
			if ('ubvision' === $match[1]) { $match[1] = 'ultrabrowser'; }
			self::$name = $match[1];
			if (isset($match[2])) { self::$version = intval($match[2]); }
			if (('opera' === self::$name || 'safari' === self::$name) && preg_match('#version/([0-9]+(\.[0-9]+)?)#', self::$ua, $match)) {
				self::$version = floatval($match[1]);
			}
		}
		/*
		 * firebird and phoenix are old names for firefox
		 * bonecho, granparadiso, minefield are develop names for firefox
		 */
		else if (preg_match('#(firebird|phoenix|bonecho|granparadiso|minefield|shiretoko)[\/ ]([0-9]+(\.[0-9]+)?)#', self::$ua)) {
			self::$name = 'firefox';
		}
		else if (preg_match('#^mozilla/5.+gecko/200#', self::$ua)) {
			self::$name = 'mozilla';
		}
		$_SESSION['CLIENT']['name'] = self::$name;
		$_SESSION['CLIENT']['version'] = self::$version;
	}

	public static function extras()
	{
		if ( self::$extras ) { return; }
		self::$extras = true;
		self::os();
		self::engine();
		self::isMobile();
	}

	protected static function os()
	{
		if (preg_match('#(win|mac|linux|bsd|sunos|syllable|irix|beos|os/2|aix|amiga|symbian|react|blackberry|iphone|javafx|palm|nintendo|playstation)#', self::$ua, $match)) {
			self::$os = ('win' === $match[1]) ? 'windows' : $match[1];
		}
	}

	protected static function engine()
	{
		if (preg_match('#(apachebench|dillo|gecko|khtml|presto|trident|up\.browser|webkit|libwww|java)[\/ ]([0-9]+(\.[0-9]+)?)#', self::$ua, $match)
		|| preg_match('#(msie|opera)[\/ ]([0-9]+(\.[0-9]+)?)#', self::$ua, $match)) {
			/*
			 * IE9 and IE8 includes Trident version in their UA so we only look for empty ones
			 * IE8 in compatibility mode identify itself as IE7 but leaves trident/4.0 in the UA
			 */
			if ('msie' === $match[1] || ('trident' === $match[1] && false !== strpos(self::$ua, 'msie 7'))) {
				self::$engine = 'trident';
				self::$engineV = 3;
			} else {
				if ('opera' == $match[1]) { $match[1] = 'presto'; }
				self::$engine = $match[1];
				self::$engineV = floatval($match[2]);
			}
		}
	}

	protected static function isMobile()
	{
		self::$isMobile = !empty($_SERVER['HTTP_X_OPERAMINI_PHONE'])
		|| false !== strpos(strtolower($_SERVER['HTTP_ACCEPT']), '/vnd.wap.') // xhtml+xml | wml
		|| false !== strpos(self::$ua, 'maemo')
		|| false !== strpos(self::$ua, 'armv7l')
		|| false !== strpos(self::$ua, 'symbian')
		|| false !== strpos(self::$ua, 'windows ce')
		|| false !== strpos(self::$ua, 'mobile')
		|| false !== strpos(self::$ua, 'epoc')
		|| false !== strpos(self::$ua, 'opera mini')
		|| false !== strpos(self::$ua, 'opera mobi')
		|| false !== strpos(self::$ua, 'minimo')
		|| false !== strpos(self::$ua, 'nitro')
		|| false !== strpos(self::$ua, 'j2me')
		|| false !== strpos(self::$ua, 'midp-')
		|| false !== strpos(self::$ua, 'cldc-')
		|| false !== strpos(self::$ua, 'netfront')
		|| false !== strpos(self::$ua, 'mot')
		|| false !== strpos(self::$ua, 'up.browser')
		|| false !== strpos(self::$ua, 'up.link')
		|| false !== strpos(self::$ua, 'sony')
		|| false !== strpos(self::$ua, 'nokia')
		|| false !== strpos(self::$ua, 'samsung')
		|| false !== strpos(self::$ua, 'audiovox')
		|| false !== strpos(self::$ua, 'blackberry')
		|| false !== strpos(self::$ua, 'ericsson')
		|| false !== strpos(self::$ua, 'panasonic')
		|| false !== strpos(self::$ua, 'philips')
		|| false !== strpos(self::$ua, 'sanyo')
		|| false !== strpos(self::$ua, 'sharp')
		|| false !== strpos(self::$ua, 'sie-')
		|| false !== strpos(self::$ua, 'portalmmm')
		|| false !== strpos(self::$ua, 'blazer')
		|| false !== strpos(self::$ua, 'avantgo')
		|| false !== strpos(self::$ua, 'danger')
		|| false !== strpos(self::$ua, 'palm')
		|| false !== strpos(self::$ua, 'series60')
		|| false !== strpos(self::$ua, 'palmsource')
		|| false !== strpos(self::$ua, 'pocketpc')
		|| false !== strpos(self::$ua, 'smartphone')
		|| false !== strpos(self::$ua, 'rover')
		|| false !== strpos(self::$ua, 'ipaq')
		|| false !== strpos(self::$ua, 'au-mic')
		|| false !== strpos(self::$ua, 'alcatel')
		|| false !== strpos(self::$ua, 'ericy')
		|| false !== strpos(self::$ua, 'vodafone/')
		|| false !== strpos(self::$ua, 'wap1.')
		|| false !== strpos(self::$ua, 'wap2.')
		|| false !== strpos(self::$ua, 'portable');
	}

}
Client::init();
