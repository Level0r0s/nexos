<?php
/*********************************************
  CPG-Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/Web_Links/modules/Web_Links/voteinclude.php,v $
  $Revision: 9.3 $
  $Author: phoenix $
  $Date: 2007/09/27 05:42:32 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

if (!Cache::array_load('weblinks_config')) {
    $result = $db->sql_query('SELECT * FROM '.$prefix.'_links_config', true);
    while ($row = $db->sql_fetchrow($result)) {
        $weblinks_config[$row['config_name']] = $row['config_value'];
    }
    Cache::array_save('weblinks_config');
    $db->sql_freeresult($result);
}
$useoutsidevoting = $weblinks_config['useoutsidevoting'];
$outsideweight = $weblinks_config['outsideweight'];
$anonweight = $weblinks_config['anonweight'];

$outsidevotes = 0;
$anonvotes = 0;
$outsidevoteval = 0;
$anonvoteval = 0;
$regvoteval = 0;
$truecomments = $totalvotesDB;
while(list($ratingDB, $ratinguserDB, $ratingcommentsDB)= $db->sql_fetchrow($voteresult)) {
    if ($ratingcommentsDB == '') {$truecomments--;}
    if ($ratinguserDB == $anonymous) {
        $anonvotes++;
        $anonvoteval += $ratingDB;
    }
    if ($useoutsidevoting == 1) {
        if ($ratinguserDB == 'outside') {
        	$outsidevotes++;
        	$outsidevoteval += $ratingDB;
    	}
    } else {
    	$outsidevotes = 0;
    }
    if ($ratinguserDB!=$anonymous && $ratinguserDB != 'outside') {
    	$regvoteval += $ratingDB;
    }
}
$regvotes = $totalvotesDB - $anonvotes - $outsidevotes;
if ($totalvotesDB == 0) {
    $finalrating = 0;
} elseif ($anonvotes == 0 && $regvotes == 0) {
    /* Figure Outside Only Vote */
    $finalrating = $outsidevoteval / $outsidevotes;
    $finalrating = number_format($finalrating, 4);
} elseif ($outsidevotes == 0 && $regvotes == 0) {
    /* Figure Anon Only Vote */
    $finalrating = $anonvoteval / $anonvotes;
    $finalrating = number_format($finalrating, 4);
} elseif ($outsidevotes == 0 && $anonvotes == 0) {
    /* Figure Reg Only Vote */
    $finalrating = $regvoteval / $regvotes;
    $finalrating = number_format($finalrating, 4);
} elseif ($regvotes == 0 && $useoutsidevoting == 1 && $outsidevotes != 0 && $anonvotes != 0 ) {
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
    /* Registered User vs. Anonymous vs. Outside User Weight Calutions */
    $impact = $anonweight;
    $outsideimpact = $outsideweight;
    if ($regvotes == 0) {
    	$regvotes = 0;
    } else {
    	$avgRU = $regvoteval / $regvotes;
    }
    if ($anonvotes == 0) {
    	$avgAU = 0;
    } else {
    	$avgAU = $anonvoteval / $anonvotes;
    }
    if ($outsidevotes == 0 ) {
    	$avgOU = 0;
    } else {
    	$avgOU = $outsidevoteval / $outsidevotes;
    }
    $impactRU = $regvotes;
    $impactAU = $anonvotes / $impact;
    $impactOU = $outsidevotes / $outsideimpact;
    $finalrating = (($avgRU * $impactRU) + ($avgAU * $impactAU) + ($avgOU * $impactOU)) / ($impactRU + $impactAU + $impactOU);
    $finalrating = number_format($finalrating, 4); 
}