<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/italian/bbcode.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/06/03 10:26:25 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $smilies_close, $smilies_more, $smilies_desc, $color_desc, $font_desc, $bbcode_common;

$smilies_close = 'Chiudi la Finestra';
$smilies_more = 'Altre Faccine';

$smilies_desc = array(
    'Exclamation' => 'Esclamazione',
    'Question' => 'Dubbioso',
    'Very Happy' => 'Felicissimo',
    'Smile' => 'Sorridente',
    'Sad' => 'Triste',
    'Surprised' => 'Sorpreso',
    'Shocked' => 'Shoccato',
    'Confused' => 'Confuso',
    'Cool' => 'Interessante',
    'Laughing' => 'Ridendo',
    'Mad' => 'Matto',
    'Razz' => 'Razz',
    'Embarassed' => 'Imbarazzato',
    'Crying or Very sad' => 'Piangi o Molto Triste',
    'Evil or Very Mad' => 'Indiavolato o Arrabbiatissimo',
    'Twisted Evil' => 'Indiavolato Nero',
    'Rolling Eyes' => 'Occhi fuori orbita',
    'Wink' => 'Occhiolino',
    'Idea' => 'Idea',
    'Arrow' => 'Freccia',
    'Neutral' => 'Neutro',
    'Mr. Green' => 'Mr. Green',
);

$color_desc = array(
    'color' => 'Colore del testo',
    'Default' => 'Predefinito',
    'Dark Red' => 'Rosso Scuro',
    'Red' => 'Rosso',
    'Orange' => 'Arancione',
    'Brown' => 'Marrone',
    'Yellow' => 'Giallo',
    'Green' => 'Verde',
    'Olive' => 'Verde Oliva',
    'Cyan' => 'Cyan',
    'Blue' => 'Blù',
    'Dark Blue' => 'Blù Scuro',
    'Indigo' => 'Indigo',
    'Violet' => 'Viola',
    'White' => 'Bianco',
    'Black' => 'Nero',
);

$font_desc = array(
    'size' => 'Grandezza del testo',
    'Tiny' => 'Sottile',
    'Small' => 'Piccolo',
    'Normal' => 'Normale',
    'Large' => 'Grosso',
    'Huge' => 'Grossissimo'
);

$bbcode_common = array(
	'Tip'		=> 'Consiglio: Stili sono applicabili velocemente sul testo selezionato',
	'Wrote'     => 'ha scritto', #no capitals letters here: \\1 wrote
	'bold'      => array('Grassetto','[b]grassetto[/b]'),
	'italic'    => array('Corsivo:','[i]corsivo[/i]'),
	'underline' => array('Sottolineato:','[u]sottolineato[/u]'),
	'fc'        => array('Colore del testo:','[color=red]testo[/color] Puoi anche usare i colori HTML color=#FF0000'),
	'fs'        => array('Grandezza del testo:','[size=9]piccolissimo[/size]'),
	'ft'        => array('Stile del testo:','[font=Andalus]testo[/font]'),
	'ltr'       => array('da Sinistra a Destra','direzione del testo da Sinistra verso Destra'),
	'rtl'       => array('da Destra a Sinistra','direzione del testo da Destra verso Sinistra'),
	'url'       => array(_URL,'[url='._URL.' della pagina]nome pagina[/url]'),
	'mail'      => array(_EMAIL,'[email]Nome email[/email]'),
	'justify'   => array('Giustifica','[align=justify]testo qui[/align]'),
	'center'    => array('Centrale','[align=center]testo qui[/align]'),
	'left'      => array('Sinistra','[align=left]testo qui[/align]'),
	'right'     => array('Destro','[align=right]testo qui[/align]'),
	'img'       => array(_IMAGE,'[img]http://percorso immagine[/img]'),
	'flash'     => array('Inserisci un file flash','[flash width=# height=#]'._URL.' flash[/flash]'),
	'video'     => array('Inserisci un file video','[video width=# height=#]'._URL.' video[/video]'),
	'quote'     => array('Citazione','[quote]testo[/quote]'),
	'code'      => array('Codice','[code]codice[/code]'),
	'php'       => array('PHP','[php]codice PHP[/php]'),
	'hr'        => array('Linea Orizzontale','[hr]'),
	'marqd'     => array('Il testo scorre in basso','[marq=down]testo[/marq]'),
	'marqu'     => array('Il testo scorre in alto','[marq=up]testo[/marq]'),
	'marql'     => array('Il testo scorre a sinistra','[marq=left]testo[/marq]'),
	'marqr'     => array('Il testo scorre a destra','[marq=right]testo[/marq]'),
);
