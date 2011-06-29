<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/estonian/bbcode.php,v $
  $Revision: 9.11 $
  $Author: estlane $
  $Date: 2009/02/25 14:36:37 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $smilies_close, $smilies_more, $smilies_desc, $color_desc, $font_desc, $bbcode_common;

$smilies_close = 'Sulge aken';
$smilies_more = 'Rohkem smailisid';

$smilies_desc = array(
    'Exclamation'        => 'Hüüatus',
    'Question'           => 'Küsimus',
    'Very Happy'         => 'Väga õnnelik',
    'Smile'              => 'Naeratus',
    'Sad'                => 'Kurb',
    'Surprised'          => 'Üllatunud',
    'Shocked'            => 'Šokeeritud',
    'Confused'           => 'Segaduses',
    'Cool'               => 'Lahe',
    'Laughing'           => 'Naerev',
    'Mad'                => 'Hull',
    'Razz'               => 'Tuhin',
    'Embarassed'         => 'Häbenev',
    'Crying or Very sad' => 'Nuttev või väga kurb',
    'Evil or Very Mad'   => 'Kuri või väga hull',
    'Twisted Evil'       => 'Pöördes kurjus',
    'Rolling Eyes'       => 'Pöörlevad silmad',
    'Wink'               => 'Silmapilgutus',
    'Idea'               => 'Idee',
    'Arrow'              => 'Nool',
    'Neutral'            => 'Erapooletu',
    'Mr. Green'          => 'Hr Roheline',
);

$color_desc = array(
    'color'     => 'Kirja värv',
    'Default'   => 'Vaikimisi',
    'Dark Red'  => 'Tumepunane',
    'Red'       => 'Punane',
    'Orange'    => 'Oranž',
    'Brown'     => 'Pruun',
    'Yellow'    => 'Kollane',
    'Green'     => 'Roheline',
    'Olive'     => 'Oliiv',
    'Cyan'      => 'Tsüaan',
    'Blue'      => 'Sinine',
    'Dark Blue' => 'Tumesinine',
    'Indigo'    => 'Kahjasinine',
    'Violet'    => 'Violetne',
    'White'     => 'Valge',
    'Black'     => 'Must',
);

$font_desc = array(
    'size'   => 'Kirja suurus',
    'Tiny'   => 'Imepisike',
    'Small'  => 'Väike',
    'Normal' => 'Tavaline',
    'Large'  => 'Suur',
    'Huge'   => 'Hiigelsuur'
);

$bbcode_common = array(
   'Tip'       => 'Vihje: Stiile saab ületõmmatud tekstile kiiresti lisada',
   'Wrote'     => 'kirjutas', #no capitals letters here: \\1 wrote
   'bold'      => array('Rasvane:','[b]rasvane[/b]'),
   'italic'    => array('Kaldkiri:','[i]kaldkiri[/i]'),
   'underline' => array('Allajoonitud:','[u]allajoonitud[/u]'),
   'fc'        => array('Kirja värv:','[color=red]tekst[/color] Sa saad kasutada ka HTML värvi color=#FF0000'),
   'fs'        => array('Kirja suurus:','[size=9]Väga väike[/size]'),
   'ft'        => array('Kirjatüüp:','[font=Andalus]tekst[/font]'),
   'ltr'       => array('Vasakult paremale:','Joonda tekstikast vasakult paremale'),
   'rtl'       => array('Paremalt vasakule:','Joonda tekstikast paremalt vasakule'),
   'url'       => array(_URL.':','[url=Lehe URL]Lehekülje nimi[/url]'),
   'mail'      => array(_EMAIL.':','[email]E-mail siia[/email]'),
   'justify'   => array('Joonda:','[align=justify]Äärest äärde joondatud tekst[/align]'),
   'center'    => array('Keskel:','[align=center]Keskele paigutatud tekst[/align]'),
   'left'      => array('Vasakul:','[align=left]Vasakule paigutatud tekst[/align]'),
   'right'     => array('Paremal:','[align=right]Paremale paigutatud tekst[/align]'),
   'img'       => array(_IMAGE.':','[img]http://pildi_asukoht[/img]'),
   'flash'     => array('Sisesta flash fail:','[flash width=# height=#]flashi URL[/flash]'),
   'video'     => array('Sisesta video fail:','[video width=# height=#]faili URL[/video]'),
   'quote'     => array('Tsitaat:','[quote]Tsiteeritud tekst[/quote]'),
   'code'      => array('Kood:','[code]Kood[/code]'),
   'php'       => array('PHP:','[php]PHP kood[/php]'),
   'hr'        => array('Horisontaalne joon:','Horisontaalne joon [hr]'),
   'marqd'     => array('Liiguta teksti alla:','[marq=down]tekst[/marq]'),
   'marqu'     => array('Liiguta teksti üles:','[marq=up]tekst[/marq]'),
   'marql'     => array('Liiguta teksti vasakule:','[marq=left]tekst[/marq]'),
   'marqr'     => array('Liiguta teksti paremale:','[marq=right]tekst[/marq]'),
);
