<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/romanian/bbcode.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/05/14 01:16:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $smilies_close, $smilies_more, $smilies_desc, $color_desc, $font_desc, $bbcode_common;

$smilies_close = 'Închideţi fereastra';
$smilies_more = 'Mai multe smilies';

$smilies_desc = array(
    'Exclamation' => 'Exclamaţie',
    'Question' => 'Întrebare',
    'Very Happy' => 'Foarte fericit',
    'Smile' => 'Zâmbitor',
    'Sad' => 'Trist',
    'Surprised' => 'Surprins',
    'Shocked' => 'Şocat',
    'Confused' => 'Nedumerit',
    'Cool' => 'Mişto',
    'Laughing' => 'Râzând',
    'Mad' => 'Nervos',
    'Razz' => 'Razz',
    'Embarassed' => 'Ruşinat',
    'Crying or Very sad' => 'Plângând sau foarte trist',
    'Evil or Very Mad' => 'Răutacios sau foarte nervos',
    'Twisted Evil' => 'Nebun răutăcios',
    'Rolling Eyes' => 'Ochi rotitori',
    'Wink' => 'Trage cu ochiul',
    'Idea' => 'Ide',
    'Arrow' => 'Săgeată',
    'Neutral' => 'Neutru',
    'Mr. Green' => 'Mr. Green',
);

$color_desc = array(
    'color' => 'Font color',
    'Default' => 'Default',
    'Dark Red' => 'Roşu închis',
    'Red' => 'Roşu',
    'Orange' => 'Portocaliu',
    'Brown' => 'Maro',
    'Yellow' => 'Galben',
    'Green' => 'Verde',
    'Olive' => 'Oliv',
    'Cyan' => 'Cyan',
    'Blue' => 'Albastru',
    'Dark Blue' => 'Albastru închis',
    'Indigo' => 'Indigo',
    'Violet' => 'Violet',
    'White' => 'Alb',
    'Black' => 'Negru',
);

$font_desc = array(
    'size' => 'Mărimea fontului',
    'Tiny' => 'Foarte mic',
    'Small' => 'Mic',
    'Normal' => 'Normal',
    'Large' => 'Mare',
    'Huge' => 'Foarte mare'
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
