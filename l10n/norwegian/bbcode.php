<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/norwegian/bbcode.php,v $
  $Revision: 9.9 $
  $Author: nanocaiordo $
  $Date: 2006/05/14 01:16:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $smilies_close, $smilies_more, $smilies_desc, $color_desc, $font_desc, $bbcode_common;

$smilies_close = 'Lukk Vindu';
$smilies_more = 'Flere smilefjes';

$smilies_desc = array(
    'Exclamation' => 'Utrop',
    'Question' => 'Spørsmål',
    'Very Happy' => 'Veldig Glad',
    'Smile' => 'Smil',
    'Sad' => 'Trist',
    'Surprised' => 'Overrasket',
    'Shocked' => 'Sjokkert',
    'Confused' => 'Forvirret',
    'Cool' => 'Kuul',
    'Laughing' => 'Ler',
    'Mad' => 'Sint',
    'Razz' => 'Rekke tunge',
    'Embarassed' => 'Rødmer',
    'Crying or Very sad' => 'Gråter eller Veldig trist',
    'Evil or Very Mad' => 'Onskapsfull eller Veldig Sint',
    'Twisted Evil' => 'Veldig Onskapsfull',
    'Rolling Eyes' => 'Rullende Øyne',
    'Wink' => 'Vink',
    'Idea' => 'Idé',
    'Arrow' => 'Pil',
    'Neutral' => 'Nøytral',
    'Mr. Green' => 'Mr. Grønn',
);

$color_desc = array(
    'color' => 'Skriftfarge',
    'Default' => 'Standard',
    'Dark Red' => 'Mørk Rød',
    'Red' => 'Rød',
    'Orange' => 'Orange',
    'Brown' => 'Brun',
    'Yellow' => 'Gul',
    'Green' => 'Grønn',
    'Olive' => 'Oliven',
    'Cyan' => 'Turkis',
    'Blue' => 'Blå',
    'Dark Blue' => 'Mørk Blå',
    'Indigo' => 'Indigo',
    'Violet' => 'Fiolet',
    'White' => 'Hvit',
    'Black' => 'Sort',
);

$font_desc = array(
    'size' => 'Skriftstørrelse',
    'Tiny' => 'Ekstra Liten',
    'Small' => 'Liten',
    'Normal' => 'Normal',
    'Large' => 'Stor',
    'Huge' => 'Ekstra Stor'
);

$bbcode_common = array(
	'Tip'		=> 'Tip: Styles can be applied quickly to selected text',
	'Wrote'     => 'skrevet', #no capitals letters here: \\1 wrote
	'bold'      => array('Fet:','[b]Fet[/b]'),
	'italic'    => array('Kursiv:','[i]kursiv[/i]'),
	'underline' => array('Underlinje:','[u]underlinje[/u]'),
	'fc'        => array('Skriftfarge:','[color=red]tekst[/color] Du kan bruke HTML color=#FF0000'),
	'fs'        => array('Skriftstørrelse:','[size=9]Veldig Liten[/size]'),
	'ft'        => array('Skrifttype:','[font=Andalus]tekst[/font]'),
	'ltr'       => array('Venstre til Høyre:','Lar innholdet i meldingsboksen gå fra venstre til høyre'),
	'rtl'       => array('Høyre til Venstre:','Lar innholdet i meldingsboksen gå fra høyre til venstre'),
	'url'       => array(_URL.':','[url=Page URL]Sidenavn[/url]'),
	'mail'      => array(_EMAIL.':','[email]e-post her[/email]'),
	'justify'   => array('Justering:','[align=justify]Justert tekst[/align]'),
	'center'    => array('Midtstilt:','[align=center]Midtstilt tekst[/align]'),
	'left'      => array('Venstre:','[align=left]Venstre justert tekst[/align]'),
	'right'     => array('Høyre:','[align=right]Høyre justert tekst[/align]'),
	'img'       => array(_IMAGE.':','[img]http://bildesti[/img]'),
	'flash'     => array('Sett inn flash:','[flash width=# height=#]flash URL[/flash]'),
	'video'     => array('Sett inn video:','[video width=# height=#]fil-URL[/video]'),
	'quote'     => array('Sitere:','[quote]Sitert tekst[/quote]'),
	'code'      => array('Kode:','[code]Kode[/code]'),
	'php'       => array('PHP:','[php]PHP-Kode[/php]'),
	'hr'        => array('Horisontal Linje:','Horisontal Linje [hr]'),
	'marqd'     => array('Rullende tekst nedover:','[marq=down]tekst[/marq]'),
	'marqu'     => array('Rullende tekst oppover:','[marq=up]tekst[/marq]'),
	'marql'     => array('Rullende tekst mot venstre:','[marq=left]tekst[/marq]'),
	'marqr'     => array('Rullende tekst mot høyre:','[marq=right]tekst[/marq]'),
);
