<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/dutch_formal/errors.php,v $
  $Revision: 1.5 $
  $Author: nanocaiordo $
  $Date: 2010/02/22 11:01:59 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
$LNG = array(
'_SECURITY_STATUS' => array(
	301 => 'Permanent verplaatst',
	302 => 'Gevonden',
	303 => 'See Other',
	304 => 'Niet aangepast',

	400 => 'Slecht verzoekt',
	401 => 'Niet geauthoriseerd',
	402 => 'Betaling vereist',
	403 => 'Verboden',
	404 => 'Niet gevonden',

	500 => 'Interne Service Fout',
	503 => 'Service Niet beschikbaar',

	800 => 'Slechte IP',
	801 => 'Spam url in de referer kop',
	802 => 'Onbekende user-agent',
	803 => 'Flood Protectie'
),
'_SECURITY_MSG' => array(
	# Redirection
	301 => 'De URL die u gevraagd heeft, '.get_uri().', is permanent naar een nieuwe URL verplaatst en verzoeken voor deze pagina in de toekomst ZOUDEN de nieuwe URL moeten gebruiken.',
	302 => 'DE URL die u gevraagd heeft, '.get_uri().', is permanent naar een nieuwe URL verplaatst en verzoeken voor deze pagina in de toekomst ZOUDEN daar moeten blijven.',
	# Client Errors
	400 => 'The URL that you requested, '.get_uri().', was een slecht verzoek.',
	401 => 'The URL that you requested, '.get_uri().', vereist voorauthorisatie voor de toegang',
	402 => 'The URL that you requested, '.get_uri().', vereist betaling voor de toegang.',
	403 => 'Toegang tot de URL waarom u gevraagd heeft, '.get_uri().', is verboden.',
	404 => 'De URL die u gevraagd heeft, '.get_uri().', kan niet worden gevonden. Misschien heeft u de URL fout getypt of er is een kapotte link.<br /><br />De fout is door ons gelogd en het probleem zal worden opgelost als het een kapotte link is.',
	# Server Errors
	500 => 'De URL die u gevraagd heeft, '.get_uri().', heeft een server configuratie fout veroorzaakt. Het is mogelijk dat de reden voor deze fout opgelost is, wanneer u klaar bent met het lezen van deze tekst.<br /><br />De fout is door ons gelogd en het probleem zal geprobeerd worden op te lossen.',
	503 => 'De URL die u gevraagd heeft, '.get_uri().', is tijdelijk niet beschikbaar.',
	# Security Errors
	800 => 'U wordt niet toegelaten tot deze site vanwege een slecht ip.',
	801 => 'U wordt niet toegelaten tot deze site vanwege een spam url in de referer kop.',
	802 => 'U wordt niet toegelaten tot deze site vanwege een onbekende user-agent.',
	803 => 'U wordt niet toegelaten tot deze site vanwege het negeren van onze flood waarschuwingen.',

	'_FLOOD' => 'Het is u niet toegestaan om ons systeem te bestoken met verzoeken.\r\nU mag onze website weer bezoeken na %s seconden',
	'Last_warning' => '\r\nDit is uw laatste waarschuwing, de volgende keer wordt u de toegang permanent ontzegd!'
));
