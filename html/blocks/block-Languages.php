<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright � 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Languages.php - NexOS Administration Backend file           |
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

if (!defined('CPG_NUKE')) { exit; }

// useflags is set in configuration
global $useflags, $currentlang, $mainindex, $adminindex, $MAIN_CFG, $BASEHREF;

if (!$MAIN_CFG['global']['multilingual']) {
	$content = 'ERROR';
	return trigger_error('Multilingual is off', E_USER_WARNING);
}

$langsel = array(
	'afrikaans' => 'Afrikaans',
	'albanian'	=> 'Shqip',
	'arabic'	=> 'عربي',
	'basque'	=> 'Basque',
	'bosanski'	=> 'Bosanski',
	'brazilian' => 'Brazilian Português',
	'bulgarian' => 'Български',
	'castellano' => 'Castellano',
	'czech'		=> 'Český',
	'danish'	=> 'Dansk',
	'desi'		=> 'Desi',
	'dutch'		=> 'Nederlands',
	'english'	=> 'English',
	'estonian'	=> 'Eesti',
	'farsi'		=> 'پارسى',
	'finnish'	=> 'Suomi',
	'french'	=> 'Français',
	'galego'	=> 'Galego',
	'german'	=> 'Deutsch',
	'greek'		=> 'Ελληνικά',
	'hindi'		=> 'हिंदी', 
	'hungarian'	 => 'Magyarul',
	'icelandic'	 => 'Íslenska',
	'indonesian' => 'Bahasa Indonesia',
	'italian'	 => 'Italiano',
	'japanese'	 => '日本語',
	'korean'	 => '한국어',
	'kurdish'	 => 'Kurdî',
	'latvian'	 => 'Latvisks',
	'lithuanian' => 'Lietuvių',
	'macedonian' => 'македонски',
	'melayu'	 => 'Melay',
	'norwegian'	 => 'Norsk',
	'polish'	 => 'Polski',
	'portuguese' => 'Português',
	'romanian'	 => 'Româneste',
	'russian'	 => 'РУССКИЙ',
	'serbian'	 => 'Srpski',
	'slovak'	 => 'Slovenský',
	'slovenian'	 => 'Slovenščina',
	'spanish'	 => 'Español',
	'swahili'	 => 'Kiswahili',
	'swedish'	 => 'Svensk',
	'thai'		 => 'ไทย',
	'turkish'	 => 'Türkçe',
	'uighur'	 => 'Uyghurche',
	'ukrainian'	 => 'Українська',
	'vietnamese' => 'Tiếng Việt',
);

$qs = defined('ADMIN_PAGES') ? "$adminindex?" : '&amp;';
foreach($_GET as $var => $value) {
	if ($var != 'newlang' && $var != 'name' && !($var == 'file' && $value == 'index')) {
		$qs .= htmlspecialchars($var).'='.htmlspecialchars($value).'&amp;';
	}
}
$qs .= 'newlang=';
/*
$self = (defined('ADMIN_PAGES')) ? $adminindex : $mainindex;

$qs = '?';
foreach($_GET as $var => $value) {
	if ($var != 'newlang') {
		$qs .= htmlspecialchars($var).'='.htmlspecialchars($value).'&amp;';
	}
}
*/
$langlist = lang_selectbox('', '', false, true);

$menulist = '';
//$content = '<div style="text-align:center;">'._SELECTGUILANG.'<br /><br />';
if ($useflags) {
	for ($i = 0; $i < sizeof($langlist); $i++) {
		if ($langlist[$i]!='') {
			$imge = 'images/language/flag-'.$langlist[$i].'.png';
			$altlang = (isset($langsel[$langlist[$i]]) ? $langsel[$langlist[$i]] : $langlist[$i]);
			if (defined('ADMIN_PAGES')) {
				$content .= '<a href="'.$qs.$langlist[$i].'">';
			} elseif (!isset($_GET['name']) && !isset($_POST['name'])) {
				$content .= '<a href="'.$mainindex."?newlang=$langlist[$i]\">";
			} else {
				$content .= '<a href="'.URL::index($qs.$langlist[$i]).'">';
			}
			// akamu fix for broken images if lang doesn't have flag
			if (file_exists($imge)){
				$content .= "<img src=\"$imge\" align=\"middle\" alt=\"$altlang\" title=\"$altlang\" style=\"border:0; padding-right:3px; padding-bottom:3px;\" />";
			} else {
				$content .= $altlang;
			}
			$content .= '</a> ';
		}
	}
} else {
	$content = '<form title="This option will change the language of this website" action="" method="get"><div>
	<select name="newlanguage" onchange="top.location.href=\''.$BASEHREF.'\'+this.options[this.selectedIndex].value">';
	for ($i=0; $i < sizeof($langlist); $i++) {
		if ($langlist[$i]!='') {
			if (defined('ADMIN_PAGES')) {
				$content .= '<option value="'.$qs.$langlist[$i].'"';
			} elseif (!isset($_GET['name']) && !isset($_POST['name'])) {
				$content .= '<option value="'.$mainindex."?newlang=$langlist[$i]\"";
			} else {
				$content .= '<option value="'.URL::index($qs.$langlist[$i]).'"';
			}
			if ($langlist[$i]==$currentlang) $content .= ' selected="selected"';
			$content .= '>'.(isset($langsel[$langlist[$i]]) ? $langsel[$langlist[$i]] : $langlist[$i])."</option>\n";
		}
	}
	$content .= '</select></div></form>';
}
//$content .= '</div>';
unset($langsel);
