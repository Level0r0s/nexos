<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Downloads/modules/Downloads/voteinclude.php,v $
  $Revision: 9.2 $
  $Author: djmaze $
  $Date: 2005/04/03 22:35:16 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }

require("modules/$module_name/d_config.php");

$outsidevotes = $anonvotes = $outsidevoteval = $anonvoteval = $regvoteval = 0;
$truecomments = $totalvotesDB;
while(list($ratingDB, $ratinguserDB, $ratingcommentsDB)=$db->sql_fetchrow($voteresult)) {
	if ($ratingcommentsDB=="") $truecomments--;
	if ($ratinguserDB==$anonymous) {
		$anonvotes++;
		$anonvoteval += $ratingDB;
	}
	if ($useoutsidevoting == 1) {
		if ($ratinguserDB=='outside') {
			$outsidevotes++;
			$outsidevoteval += $ratingDB;
		}
	} else {
		$outsidevotes = 0;
	}
	if ($ratinguserDB!=$anonymous && $ratinguserDB!="outside") {
		$regvoteval += $ratingDB;
	}
}
$regvotes = $totalvotesDB - $anonvotes - $outsidevotes;
if ($totalvotesDB == 0) {
	$finalrating = 0;
} else if ($anonvotes == 0 && $regvotes == 0) {
	/* Figure Outside Only Vote */
	$finalrating = $outsidevoteval / $outsidevotes;
	$finalrating = number_format($finalrating, 4);
} else if ($outsidevotes == 0 && $regvotes == 0) {
	/* Figure Anon Only Vote */
	$finalrating = $anonvoteval / $anonvotes;
	$finalrating = number_format($finalrating, 4);
} else if ($outsidevotes == 0 && $anonvotes == 0) {
	/* Figure Reg Only Vote */
	$finalrating = $regvoteval / $regvotes;
	$finalrating = number_format($finalrating, 4);
} else if ($regvotes == 0 && $useoutsidevoting == 1 && $outsidevotes != 0 && $anonvotes != 0 ) {
	/* Figure Reg and Anon Mix */
	$avgAU = $anonvoteval / $anonvotes;
	$avgOU = $outsidevoteval / $outsidevotes;
	if ($anonweight > $outsideweight ) {
		/* Anon is 'standard weight' */
		$newimpact = $anonweight / $outsideweight;
		$impactAU = $anonvotes;
		$impactOU = $outsidevotes / $newimpact;
		$finalrating = ((($avgOU * $impactOU) + ($avgAU * $impactAU)) / ($impactAU + $impactOU));
		$finalrating = number_format($finalrating, 4);
	} else {
		/* Outside is 'standard weight' */
		$newimpact = $outsideweight / $anonweight;
		$impactOU = $outsidevotes;
		$impactAU = $anonvotes / $newimpact;
		$finalrating = ((($avgOU * $impactOU) + ($avgAU * $impactAU)) / ($impactAU + $impactOU));
		$finalrating = number_format($finalrating, 4);
	}
} else {
	$avgOU = $avgAU = $regvotes = 0;
	/* Registered User vs. Anonymous vs. Outside User Weight Calutions */
	$impact = $anonweight;
	$outsideimpact = $outsideweight;
	if ($regvotes > 0) {
		$avgRU = $regvoteval / $regvotes;
	}
	if ($anonvotes > 0) {
		$avgAU = $anonvoteval / $anonvotes;
	}
	if ($outsidevotes > 0 ) {
		$avgOU = $outsidevoteval / $outsidevotes;
	}
	$impactRU = $regvotes;
	$impactAU = $anonvotes / $impact;
	$impactOU = $outsidevotes / $outsideimpact;
	$finalrating = (($avgRU * $impactRU) + ($avgAU * $impactAU) + ($avgOU * $impactOU)) / ($impactRU + $impactAU + $impactOU);
	$finalrating = number_format($finalrating, 4);
}
