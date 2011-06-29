<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/danish/bbcode.php,v $
  $Revision: 9.9 $
  $Author: lexsus $
  $Date: 2007/03/04 18:13:40 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $smilies_close, $smilies_more, $smilies_desc, $color_desc, $font_desc, $bbcode_common;

$smilies_close = 'Luk vindue';
$smilies_more = 'Flere smiles';

$smilies_desc = array(
        'Exclamation' => 'Udråb',
        'Question' => 'Spørgsmål',
        'Very Happy' => 'Meget glad',
        'Smile' => 'Smil',
        'Sad' => 'Trist',
        'Surprised' => 'Overrasket',
        'Shocked' => 'Chokeret',
        'Confused' => 'Forvirret',
        'Cool' => 'Sejt',
        'Laughing' => 'Griner',
        'Mad' => 'Sur',
        'Razz' => 'Drille',
        'Embarassed' => 'Genert',
        'Crying or Very sad' => 'Græder eller meget trist',
        'Evil or Very Mad' => 'Ond eller meget sur',
        'Twisted Evil' => 'Lusket ond',
        'Rolling Eyes' => 'Ruller med øjne',
        'Wink' => 'Vinker',
        'Idea' => 'God ide',
        'Arrow' => 'Pil',
        'Neutral' => 'Neutral',
        'Mr. Green' => 'Hr. Grøn',
);

$color_desc = array(
    'color' => 'Font Farve',
    'Default' => 'Standard',
    'Dark Red' => 'Mørke Rød',
    'Red' => 'Rød',
    'Orange' => 'Orange',
    'Brown' => 'Brun',
    'Yellow' => 'Gul',
    'Green' => 'Grøn',
    'Olive' => 'Oliven',
    'Cyan' => 'Cyan',
    'Blue' => 'Blå',
    'Dark Blue' => 'Mørke Blå',
    'Indigo' => 'Indigo',
    'Violet' => 'Violet',
    'White' => 'Hvid',
    'Black' => 'Sort',
);

$font_desc = array(
    'size' => 'Font størrelse',
    'Tiny' => 'Ekstra Lille',
    'Small' => 'Lille',
    'Normal' => 'Normal',
    'Large' => 'Stor',
    'Huge' => 'Ekstra Stor'
);

$bbcode_common = array(
	'Tip'		=> 'Tip: Styles can be applied quickly to selected text',
	'Wrote'     => 'Skrev', #no capitals letters here: \\1 wrote
	'bold'      => array('Fed:','[b]fed[/b]'),
	'italic'    => array('Kursiv:','[i]Kursiv[/i]'),
	'underline' => array('Understregning:','[u]understregning[/u]'),
	'fc'        => array('Skriftfarve:','[color=red]tekst[/color] Du kan bruge HTML color=#FF0000'),
	'fs'        => array('Skriftstørrelse:','[size=9]Meget lille[/size]'),
	'ft'        => array('Skrifttype:','[font=Andalus]tekst[/font]'),
	'ltr'       => array('Venstre til Højre:','Lad indholdet i beskedboksen gå fra venstre til højre'),
	'rtl'       => array('Højre til Venstre:','Lad indholdet i beskedboksen gå fra højre til venstre'),
	'url'       => array(_URL.':','[url=Page URL]Sidenavn[/url]'),
	'mail'      => array(_EMAIL.':','[email]Email Her[/email]'),
	'justify'   => array('Justering:','[align=justify]Justeret tekst[/align]'),
	'center'    => array('Centreret:','[align=center]Centreret Tekst[/align]'),
	'left'      => array('Venstre:','[align=left]Juster teksten til venstre[/align]'),
	'right'     => array('Højre:','[align=right]Juster teksten til højre[/align]'),
	'img'       => array(_IMAGE.':','[img]http://image path[/img]'),
	'flash'     => array('Indsæt flash:','[flash width=# height=#]flash URL[/flash]'),
	'video'     => array('Indsæt video:','[video width=# height=#]fil URL[/video]'),
	'quote'     => array('citere:','[quote]citere Tekst[/quote]'),
	'code'      => array('Kode:','[code]Kode[/code]'),
	'php'       => array('PHP:','[php]PHP Kode[/php]'),
	'hr'        => array('Horisontal Linje:','Horisontal Linje [hr]'),
	'marqd'     => array('Rullende tekst nedover:','[marq=down]tekst[/marq]'),
	'marqu'     => array('Rullende tekst opover:','[marq=up]tekst[/marq]'),
	'marql'     => array('Rullende tekst mod venstre:','[marq=left]tekst[/marq]'),
	'marqr'     => array('Rullende tekst mod højre:','[marq=right]tekst[/marq]'),        
);
