<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/norwegian/errors.php,v $
  $Revision: 1.4 $
  $Author: nanocaiordo $
  $Date: 2010/02/22 11:02:58 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
$LNG = array(
'_SECURITY_STATUS' => array(
	301 => 'Forespurt objekt flyttet permanent',
	302 => 'Forespurt objekt funnet',
	303 => 'Se Andre',
	304 => 'Forespurt objekt er ikke modifisert',

	400 => 'Forespurt melding ikke forstått av server',
	401 => 'Forespurt objekt er uautorisert',
	402 => 'Betaling Nødvendig',
	403 => 'Forespurt objekt er forbudt',
	404 => 'Forespurt objekt er ikke funnet',

	500 => 'Intern Server Feil',
	503 => 'Service Utilgjengelig',

	800 => 'Ugyldig IP',
	801 => 'Spam url i henvisningstittel',
	802 => 'Ukjent bruker-agent',
	803 => 'Flom beskyttelse'
),
'_SECURITY_MSG' => array(
	# Redirection
	301 => 'URL\'en som du forespurte, '.get_uri().', har blitt flyttet permanent til en ny adresse og alle fremtidige referanser til denne siden bør bruke den nye adressen.',
	302 => 'URL\'en som du forespurte, '.get_uri().', har blitt intill vidre blitt flyttet til en annen adresse og alle fremtidige referanser til denne siden bør holdes inntakt.',
	# Client Errors
	400 => 'URL\'en som du forespurte, '.get_uri().', var en uforstått forespørsel.',
	401 => 'URL\'en som du forespurte, '.get_uri().', krever forhåndsautorisering for å få tilgang.',
	402 => 'URL\'en som du forespurte, '.get_uri().', krever betaling for å få tilgang.',
	403 => 'Tilgang til URL\'en som du forespurte, '.get_uri().', er avslått.',
	404 => 'URL\'en som du forespurte, '.get_uri().', kunne ikke bli funnet. Kansje du skrev URL\'en feil eller vi har en ødelagt link.<br /><br />Vi har logget feilen og vi vil rette feilen, hvis det er en ødelagt link.',
	# Server Errors
	500 => 'URL\'en som du forespurte, '.get_uri().', resulterte i en server konfigurasjonsfeil. Det er mulig årsaken som forårsaket dette vil bli borte når du har lest dette ferdig.<br /><br />Vi har logget denne feilen og vi vil rette feilen.',
	503 => 'URL\'en som du forespurte, '.get_uri().', er midlertidig utilgjengelig.',
	# Security Errors
	800 => 'Du har blitt utestengt fra denne siten grunnet ugyldig ip.',
	801 => 'Du har blitt utestengt fra denne siten grunnet en spam url i henvisningstittelen.',
	802 => 'Du har blitt utestengt fra denne siten grunnet ukjent bruker-agent.',
	803 => 'Du har blitt utestengt fra denne siten grunnet at du har ignorert vår anti-flom varsel.',

	'_FLOOD' => 'Du har ikke lov til å oversvømme vårt system.\r\nDu kan igjen se vår website etter %s sekunder',
	'Last_warning' => '\r\nDette er din siste advarsel, neste gang vil du bli utestengt!'
));
