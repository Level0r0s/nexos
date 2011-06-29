<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/danish/errors.php,v $
  $Revision: 1.4 $
  $Author: nanocaiordo $
  $Date: 2010/02/22 11:01:59 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
$LNG = array(
'_SECURITY_STATUS' => array(
	301 => 'flyttet permanent',
	302 => 'Fundet',
	303 => 'Se andre',
	304 => 'Ikke modificeret',

	400 => 'Forkert forespørgsel',
	401 => 'Uautoriseret',
	402 => 'Betaling Nødvendig',
	403 => 'Forbudt',
	404 => 'Ikke fundet',

	500 => 'Intern Server Fejl',
	503 => 'Service Utilgængelig',

	800 => 'Ugyldig IP',
	801 => 'Spam url i henvisningstitel',
	802 => 'Ukendt bruger-agent',
	803 => 'Flood beskyttelse'
),
'_SECURITY_MSG' => array(
	# Redirection
	301 => 'URL\'en som du forespurgte, '.get_uri().', er flyttet permanent til en ny adresse og alle fremtidige henvisning til denne siden bør bruge den nye adresse.',
	302 => 'URL\'en som du forespurgte, '.get_uri().', er indtil videre flyttet til en anden adresse og alle fremtidige henvisninger til denne siden bør holdes intakt.',
	# Client Errors
	400 => 'URL\'en som du forespurgte, '.get_uri().', Forespørgslen er ukorrekt.',
	401 => 'URL\'en som du forespurgte, '.get_uri().', Klienten har ikke de krævede privilegier til at få adgang til siden.',
	402 => 'URL\'en som du forespurgte, '.get_uri().', kræver betaling for at få adgang til.',
	403 => 'Adgang til URL\'en som du forespurte, '.get_uri().', Forespørgslen er forbudt. Du har måske brug for at registrere dig på sitet før du får tilladelse til at komme ind.',
	404 => 'URL\'en som du forespurgte, '.get_uri().', Den efterspurgte ressource findes ikke længere eller er blevet flyttet, eller også kan adressen være fejlskrevet.',
	# Server Errors
	500 => 'URL\'en som du forespurgte, '.get_uri().', Serveren kunne ikke bearbejde forespørgslen.',
	503 => 'URL\'en som du forespurgte, '.get_uri().', Serveren brugte for lang tid til at svare og forbindelsen lavede time-out.',
	# Security Errors
	800 => 'Du er bandlyst fra dette site grunden ugyldig ip.',
	801 => 'Du er bandlyst fra dette site grunden Spam url i henvisningstitel.',
	802 => 'Du er bandlyst fra dette site grunden Ukendt bruger-agent.',
	803 => 'Du er bandlyst fra dette site grunden at du har ignoreret vort anti-flood advarsel.',

	'_FLOOD' => 'Du har ikke lov til at oversvømme vort system.\r\nDu kan igen se vores website efter %s sekunder',
	'Last_warning' => '\r\nDette er din sidste advarsel, næste gang vil du blive bandlyst!'
));
