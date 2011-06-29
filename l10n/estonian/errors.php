<?php
/*********************************************
  CPG Dragonflyâ„¢ CMS
  ********************************************
  Copyright Â© 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/estonian/errors.php,v $
  $Revision: 1.5 $
  $Author: nanocaiordo $
  $Date: 2010/02/22 11:01:59 $
Encoding test: n-array summation âˆ‘ latin ae w/ acute Ç½
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
$LNG = array(
'_SECURITY_STATUS' => array(
	301 => 'Püsivalt liigutatud',
	302 => 'Leitud',
	303 => 'Vaata teisi',
	304 => 'Muutmata',

	400 => 'Halb päring',
	401 => 'Volitamata',
	402 => 'Nõutud makse',
	403 => 'Keelatud',
	404 => 'Ei leidnud',

	500 => 'Serverisisene viga',
	503 => 'Teenus kättesaamatu',

	800 => 'Halb IP',
	801 => 'Spämm aadress osutatu päises',
	802 => 'Tundmatu kasutaja-agent',
	803 => 'Mitmepäringu kaitse'
),
'_SECURITY_MSG' => array(
	# Redirection
	301 => 'Nõutud aadress, '.get_uri().', on püsivalt liigutatud uuele aadressile ja ükskõik millised tulevikus viited sellele leheküljele PEAKS kasutama uut aadressi.',
	302 => 'Nõutud aadress, '.get_uri().', on ajutiselt liigutatud uuele aadressile ja ükskõik millised tulevikus viited sellele leheküljele PEAKS jääma samaks.',
	# Client Errors
	400 => 'Nõutud aadress, '.get_uri().', oli halb päring.',
	401 => 'Nõutud aadress, '.get_uri().', nõuab ligipääsuks eelvolitamist.',
	402 => 'Nõutud aadress, '.get_uri().', nõuab ligipääsuks makset.',
	403 => 'Ligipääs nõutud aadressile, '.get_uri().', on keelatud.',
	404 => 'Nõutud aadressi, '.get_uri().', ei leitud. Võib-olla sa kas kirjutasid aadressi valesti või on meil vigane viit.<br /><br />Me logisime selle veateate ning parandame probleemi, juhul kui see on vigane viide.',
	# Server Errors
	500 => 'Nõutud aadress, '.get_uri().', tekitas vea serveri seadistuses. Võimalik et probleemi tekitav tingimus kaob ajal mil sa lõpetad selle lugemise siin.<br /><br />Me logisime selle veateate ning parandame probleemi.',
	503 => 'Nõutud aadress, '.get_uri().', on ajutiselt kättesaamatu.',
	# Security Errors
	800 => 'Sul on keelatud siia saidile sisenemast halva IP tõttu.',
	801 => 'Sul on keelatud siia saidile sisenemast päises  oleva spämmi aadressi tõttu.',
	802 => 'Sul on keelatud siia saidile sisenemast tundmatu kasutaja-agendi tõttu.',
	803 => 'Sul on keelatud siia saidile sisenemast meie mitmepäringu vastase hoiatuste eiramise eest.',

	'_FLOOD' => 'Sul ei ole lubatud meie süsteemi liiga paljude päringutega tüüdata.\r\nSa võid meie veebilehte uuesti pärast %s-t sekundit vaadata',
	'Last_warning' => '\r\nSee on meie viimane hoiatus, järgmine kord ei saa sa siia saidile enam siseneda!'
));
