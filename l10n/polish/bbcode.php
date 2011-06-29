<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/polish/bbcode.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/05/14 01:16:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $smilies_close, $smilies_more, $smilies_desc, $color_desc, $font_desc, $bbcode_common;

$smilies_close = 'Zamknij okno';
$smilies_more = 'Więcej buziek';

$smilies_desc = array(
    'Exclamation' => 'Wykrzyknik',
    'Question' => 'Pytanie',
    'Very Happy' => 'Bardzo szczęśliwy',
    'Smile' => 'Uśmiech',
    'Sad' => 'Smutny',
    'Surprised' => 'Zdziwiony',
    'Shocked' => 'Wstrząśnięty',
    'Confused' => 'Zakłopotany',
    'Cool' => 'Fajny',
    'Laughing' => 'Wesoły',
    'Mad' => 'Wściekły',
    'Razz' => 'Drwiący',
    'Embarassed' => 'Zawstydzony',
    'Crying or Very sad' => 'Płaczący lub bardzo smutny',
    'Evil or Very Mad' => 'Bardzo wściekły',
    'Twisted Evil' => 'Rozsierdzony',
    'Rolling Eyes' => 'Przewracający oczami',
    'Wink' => 'Puszczający oczko',
    'Idea' => 'Pomysł',
    'Arrow' => 'Strzałka',
    'Neutral' => 'Obojętny',
    'Mr. Green' => 'Mr. Green',
);

$color_desc = array(
    'color' => 'Kolor czcionki',
    'Default' => 'domyślny',
    'Dark Red' => 'ciemnoczerwony',
    'Red' => 'czerwony',
    'Orange' => 'pomarańczowy',
    'Brown' => 'brązowy',
    'Yellow' => 'żółty',
    'Green' => 'zielony',
    'Olive' => 'oliwkowy',
    'Cyan' => 'turkusowy',
    'Blue' => 'niebieski',
    'Dark Blue' => 'ciemnoniebieski',
    'Indigo' => 'indygo',
    'Violet' => 'fioletowy',
    'White' => 'biały',
    'Black' => 'czarny',
);

$font_desc = array(
    'size' => 'Wielkość czcionki',
    'Tiny' => 'drobna',
    'Small' => 'mała',
    'Normal' => 'normalna',
    'Large' => 'duża',
    'Huge' => 'bardzo duża'
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
