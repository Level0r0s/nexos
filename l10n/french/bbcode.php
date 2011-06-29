<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/french/bbcode.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/06/23 14:15:48 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $smilies_close, $smilies_more, $smilies_desc, $color_desc, $font_desc, $bbcode_common;

$smilies_close = 'Close Window';
$smilies_more = 'More smilies';

$smilies_desc = array(
    'Exclamation' => 'Exclamation',
    'Question' => 'Question',
    'Very Happy' => 'Très heureux',
    'Smile' => 'Souris',
    'Sad' => 'Malheureux',
    'Surprised' => 'Surpris',
    'Shocked' => 'Choqué',
    'Confused' => 'Troublé',
    'Cool' => 'Cool',
    'Laughing' => 'Riant',
    'Mad' => 'Pas Content',
    'Razz' => 'Razz',
    'Embarassed' => 'Embarassé',
    'Crying or Very sad' => 'Pleurant ou Très Malheureux',
    'Evil or Very Mad' => 'Diabolique ou Vraiment pas Content',
    'Twisted Evil' => 'Demoniaque',
    'Rolling Eyes' => 'Roulant les yeux',
    'Wink' => 'Clin d\'oeil',
    'Idea' => 'Idée',
    'Arrow' => 'Flèche',
    'Neutral' => 'Neutre',
    'Mr. Green' => 'Mr. Vert',
);

$color_desc = array(
    'color' => 'Couleur des Caractères',
    'Default' => 'Défault',
    'Dark Red' => 'Rouge foncé',
    'Red' => 'Rouge',
    'Orange' => 'Orange',
    'Brown' => 'Marron',
    'Yellow' => 'Jaune',
    'Green' => 'Vert',
    'Olive' => 'Olive',
    'Cyan' => 'Cyan',
    'Blue' => 'Bleue',
    'Dark Blue' => 'Bleue Foncé',
    'Indigo' => 'Indigo',
    'Violet' => 'Violet',
    'White' => 'Blanc',
    'Black' => 'Noir',
);

$font_desc = array(
    'size' => 'Font size',
    'Tiny' => 'Tiny',
    'Small' => 'Small',
    'Normal' => 'Normal',
    'Large' => 'Large',
    'Huge' => 'Huge'
);

$bbcode_common = array(
	'Tip'		=> 'Tip: Styles can be applied quickly to selected text',
	'Wrote'     => 'écrit', #no capitals letters here: \\1 wrote
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
