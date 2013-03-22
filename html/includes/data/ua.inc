<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |
  +-------------------------------------------------------------------+
*/
if (!defined('CPG_NUKE')) exit();

	/**
	 * The following data is mainly used for statistic only.
	 * It may be also used for CSS and Javascript contests.
	 * However use Poodle framework for a definitive engine layout's version and capability
	 */

	/**
	 * @var string lowercase User Agent ID
	 */
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	/**
	 * @var array $agent temporary holds all of the User Agent ID's data
	 */
$agent = array('ua' => null, 'ua_v' => 0, 'engine' => null, 'engine_v' => 0, 'os' => null, 'is_mobile' => false);
	/**
	 * Searching for the layout engine used by the client
	 */
if (preg_match('#(apachebench|dillo|gecko|khtml|presto|trident|up\.browser|webkit|libwww|java)[\/ ]([0-9]+(\.[0-9]+)?)#', $ua, $match)
	|| preg_match('#(msie|opera)[\/ ]([0-9]+(\.[0-9]+)?)#', $ua, $match)) {
		/*
		 * IE9 and IE8 includes Trident version in their UA so we only look for empty ones
		 * IE8 in compatibility mode identify itself as IE7 but leaves trident/4.0 in the UA
		 */
	if ('msie' === $match[1] || ('trident' === $match[1] && false !== strpos($ua, 'msie 7'))) {
		$agent['engine'] = 'trident';
		$agent['engine_v'] = 3;
	}
	else {
		if ('opera' == $match[1]) { $match[1] = 'presto'; }
		$agent['engine'] = $match[1];
		$agent['engine_v'] = floatval($match[2]);
	}
}
	/*
	 * maemo, epiphany, flock and galeon have "firefox" in their UA
	 * chimera is an on old name of camino
	 * cheshire, midori, omniweb, shiira and sunrise have "safari" in their UA
	 * We don't detect MyIE2, AOL and America Online branded versions of MSIE
	 * Sylera is a Japanese Gecko based browser
	 */

	/**
	 * Searching for the client name
	 */
if (preg_match('#(crazy|maxthon|avant|webtv|ubvision|slimbrowser|slimbrowser)#', $ua, $match)
 || preg_match('#(elinks|opera|shiira|devontech|ibrowse|icab|conkeror|chimera|classilla|gnuzilla)#', $ua, $match)
 || preg_match('#(maemo|epiphany|flock|galeon|cheshire|midori|omniweb|swiftfox|iceweasel|swiftweasel)#', $ua, $match)
 || preg_match('#(konqueror|voyager|links|lynx|w3m|dillo|netscape|thunderbird|camino|seamonkey|linspire|multizilla|k\-meleon|kazehakase|minimo)#', $ua, $match)
 || preg_match('#(chrome|safari|firefox)/([0-9]+(\.[0-9]+)?)#', $ua, $match)
 || preg_match('#(msie) (1?[0-9](\.[0-9])?)#', $ua, $match)
 || preg_match('#(webwasher)#', $ua, $match))
{
	if ('ubvision' === $match[1]) { $match[1] = 'ultrabrowser'; }
	$agent['ua'] = $match[1];
	if (isset($match[2])) { $agent['ua_v'] = intval($match[2]); }
	if (('opera' === $agent['ua'] || 'safari' === $agent['ua']) && preg_match('#version/([0-9]+(\.[0-9]+)?)#', $ua, $match)) {
		$agent['ua_v'] = floatval($match[1]);
	}
}
	/*
	 * firebird and phoenix are old names for firefox
	 * bonecho, granparadiso, minefield are develop names for firefox
	 */
else if (preg_match('#(firebird|phoenix|bonecho|granparadiso|minefield|shiretoko)[\/ ]([0-9]+(\.[0-9]+)?)#', $ua)) {
	$agent['ua'] = 'firefox';
}
else if (preg_match('#^mozilla/5.+gecko/200#', $ua)) {
	$agent['ua'] = 'mozilla';
}
	/**
	 * Searching for the operative system used by the client
	 */
if (preg_match('#(win|mac|linux|bsd|sunos|syllable|irix|beos|os/2|aix|amiga|symbian|react|blackberry|iphone|javafx|palm|nintendo|playstation)#', $ua, $match)) {
	$agent['os'] = ('win' === $match[1]) ? 'windows' : $match[1];
}

	/**
	 * We also would like to know if the requests are coming from a mobile device
	 */
$agent['is_mobile'] = !empty($_SERVER['HTTP_X_OPERAMINI_PHONE'])
	|| false !== strpos(strtolower($_SERVER['HTTP_ACCEPT']), '/vnd.wap.') // xhtml+xml | wml
	|| false !== strpos($ua, 'maemo')
	|| false !== strpos($ua, 'armv7l')
	|| false !== strpos($ua, 'symbian')
	|| false !== strpos($ua, 'windows ce')
	|| false !== strpos($ua, 'mobile')
	|| false !== strpos($ua, 'epoc')
	|| false !== strpos($ua, 'opera mini')
	|| false !== strpos($ua, 'opera mobi')
	|| false !== strpos($ua, 'minimo')
	|| false !== strpos($ua, 'nitro')
	|| false !== strpos($ua, 'j2me')
	|| false !== strpos($ua, 'midp-')
	|| false !== strpos($ua, 'cldc-')
	|| false !== strpos($ua, 'netfront')
	|| false !== strpos($ua, 'mot')
	|| false !== strpos($ua, 'up.browser')
	|| false !== strpos($ua, 'up.link')
	|| false !== strpos($ua, 'sony')
	|| false !== strpos($ua, 'nokia')
	|| false !== strpos($ua, 'samsung')
	|| false !== strpos($ua, 'audiovox')
	|| false !== strpos($ua, 'blackberry')
	|| false !== strpos($ua, 'ericsson')
	|| false !== strpos($ua, 'panasonic')
	|| false !== strpos($ua, 'philips')
	|| false !== strpos($ua, 'sanyo')
	|| false !== strpos($ua, 'sharp')
	|| false !== strpos($ua, 'sie-')
	|| false !== strpos($ua, 'portalmmm')
	|| false !== strpos($ua, 'blazer')
	|| false !== strpos($ua, 'avantgo')
	|| false !== strpos($ua, 'danger')
	|| false !== strpos($ua, 'palm')
	|| false !== strpos($ua, 'series60')
	|| false !== strpos($ua, 'palmsource')
	|| false !== strpos($ua, 'pocketpc')
	|| false !== strpos($ua, 'smartphone')
	|| false !== strpos($ua, 'rover')
	|| false !== strpos($ua, 'ipaq')
	|| false !== strpos($ua, 'au-mic')
	|| false !== strpos($ua, 'alcatel')
	|| false !== strpos($ua, 'ericy')
	|| false !== strpos($ua, 'vodafone/')
	|| false !== strpos($ua, 'wap1.')
	|| false !== strpos($ua, 'wap2.')
	|| false !== strpos($ua, 'portable')
;

/**
 * If we didn't detect a browser, then we check for a bot
 */
if (empty($agent['ua'])) {
	if     ( $tmp = Security::detectBot() ) { $agent = $tmp; }
	elseif ( $MAIN_CFG['_security']['uas']) { $agent = false; }
	else {
		$agent['ua'] = 'Other';
		$agent['os'] = empty($agent['os']) ? 'Other' : $agent['os']; 
	}
}
return $agent;
