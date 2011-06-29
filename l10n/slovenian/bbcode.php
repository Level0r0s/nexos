<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/slovenian/bbcode.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/05/14 01:16:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $smilies_close, $smilies_more, $smilies_desc, $color_desc, $font_desc, $bbcode_common;

$smilies_close = 'Zapri okno';
$smilies_more = 'Več smeškov';

$smilies_desc = array(
    'Exclamation' => 'Exclamation',
    'Question' => 'Question',
    'Very Happy' => 'Zelo vesel',
    'Smile' => 'Smej se',
    'Sad' => 'Jezen',
    'Surprised' => 'Presenečen',
    'Shocked' => 'Šokiran',
    'Confused' => 'Confused',
    'Cool' => 'Kool',
    'Laughing' => 'Nasmejan',
    'Mad' => 'Mad',
    'Razz' => 'Razz',
    'Embarassed' => 'Embarassed',
    'Crying or Very sad' => 'Joče ali zelo žalosten',
    'Evil or Very Mad' => 'Evil or Very Mad',
    'Twisted Evil' => 'Twisted Evil',
    'Rolling Eyes' => 'Zavija oči',
    'Wink' => 'Wink',
    'Idea' => 'Ideja',
    'Arrow' => 'Puščica',
    'Neutral' => 'Nevtralen',
    'Mr. Green' => 'G. Zelen',
);

$color_desc = array(
    'color' => 'Barva pisave',
    'Default' => 'Privzeto',
    'Dark Red' => 'Temno Rdeče',
    'Red' => 'Rdeče',
    'Orange' => 'Oranžno',
    'Brown' => 'Rjavo',
    'Yellow' => 'Rumeno',
    'Green' => 'Zeleno',
    'Olive' => 'Olivno zeleno',
    'Cyan' => 'Cyan',
    'Blue' => 'Modro',
    'Dark Blue' => 'Temno modro',
    'Indigo' => 'Indigo',
    'Violet' => 'Vijolično',
    'White' => 'Belo',
    'Black' => 'Črno',
);

$font_desc = array(
    'size' => 'Velikost pisave',
    'Tiny' => 'Ozko',
    'Small' => 'Majhno',
    'Normal' => 'Normalno',
    'Large' => 'Debelo',
    'Huge' => 'Veliko'
);

$bbcode_common = array(
	'Tip'		=> 'Tip: Styles can be applied quickly to selected text',
	'Wrote'     => 'wrote', #no capitals letters here: \\1 wrote
	'bold'      => array('Bold:','[b]bold[/b]'),
	'italic'    => array('Italic:','[i]italic[/i]'),
	'underline' => array('Underline:','[u]underline[/u]'),
	'fc'        => array('Font Color:','[color=red]text[/color] You can use HTML color=#FF0000'),
	'fs'        => array('Font Size:','[size=9]Very Small[/size]'),
	'ft'        => array('Font type:','[font=Andalus]text[/font]'),
	'ltr'       => array('Left to Right:','Make message box align from Left to Right'),
	'rtl'       => array('Right to Left:','Make message box align from Right to Left'),
	'url'       => array(_URL.':','[url=Page URL]Page name[/url]'),
	'mail'      => array(_EMAIL.':','[email]Email Here[/email]'),
	'justify'   => array('Justify:','[align=justify]Justified Text[/align]'),
	'center'    => array('Center:','[align=center]Center Aligned Text[/align]'),
	'left'      => array('Left:','[align=left]Left Aligned Text[/align]'),
	'right'     => array('Right:','[align=right]Right Aligned Text[/align]'),
	'img'       => array(_IMAGE.':','[img]http://image path[/img]'),
	'flash'     => array('Insert flash file:','[flash width=# height=#]flash URL[/flash]'),
	'video'     => array('Insert video file:','[video width=# height=#]file URL[/video]'),
	'quote'     => array('Quote:','[quote]Quoted Text[/quote]'),
	'code'      => array('Code:','[code]Code[/code]'),
	'php'       => array('PHP:','[php]PHP Code[/php]'),
	'hr'        => array('Horizontal Rule:','Horizontal Rule [hr]'),
	'marqd'     => array('Marque text to down:','[marq=down]text[/marq]'),
	'marqu'     => array('Marque text to up:','[marq=up]text[/marq]'),
	'marql'     => array('Marque text to left:','[marq=left]text[/marq]'),
	'marqr'     => array('Marque text to right:','[marq=right]text[/marq]'),        
);
