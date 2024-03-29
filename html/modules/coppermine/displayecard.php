<?php 
/***************************************************************************
   Coppermine 1.3.1 for CPG-Dragonfly™
  **************************************************************************
   Port Copyright (c) 2004-2005 CPG Dev Team
   http://dragonflycms.com/
  **************************************************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  **************************************************************************
  Last modification notes:
  $Source: /cvs/html/modules/coppermine/displayecard.php,v $
  $Revision: 9.1 $
  $Author: nanocaiordo $
  $Date: 2008/07/31 14:11:20 $
****************************************************************************/
if (!defined('CPG_NUKE')) { exit; }

define('DISPLAYECARD_PHP', true);
require("modules/" . $module_name . "/include/load.inc");

require_once('includes/nbbcode.php');
//require($CPG_M_DIR . '/include/smilies.inc.php');

if (!isset($_GET['data'])) cpg_die(_CRITICAL_ERROR, PARAM_MISSING, __FILE__, __LINE__);

$data = array();
$data = unserialize(base64_decode($_GET['data']));
if (!is_array($data)) {
    cpg_die(_CRITICAL_ERROR, 'ECARD_LINK_CORRUPT', __FILE__, __LINE__);
} 
// Remove HTML tags as we can't trust what we receive
foreach($data as $key => $value) $data[$key] = htmlprepare($value);
// Load template parameters
$path  = $MAIN_CFG['server']['domain'].$MAIN_CFG['server']['path'];
$host = ($_SERVER['SERVER_PORT'] != 443 ? 'http' : 'https') . '://'.$path;
//$link = $CONFIG['ecards_more_pic_target'] . $CPG_M_URL;
$link = URL::index($module_name,1,1);
$params = array('{LANG_DIR}' => CPG_TEXT_DIR,
    '{BASE}' => $host,
    '{TITLE}' => sprintf(E_ECARD_TITLE, $data['sn']),
    '{CHARSET}' => $CONFIG['charset'] == 'language file' ? _CHARSET : $CONFIG['charset'],
    '{VIEW_ECARD_TGT}' => '',
    '{VIEW_ECARD_LNK}' => '',
    '{PIC_URL}' => $data['p'],
    '{IMG_PATH}' => $THEME_DIR.'/images/' ,
    '{GREETINGS}' => $data['g'],
    '{MESSAGE}' => nl2br(set_smilies($data['m'])),
    '{SENDER_EMAIL}' => $data['se'],
    '{SENDER_NAME}' => $data['sn'],
    '{VIEW_MORE_TGT}' => $link,
    '{VIEW_MORE_LNK}' => VIEW_MORE_PICS,
    );
// Parse template
echo template_eval($template_ecard, $params);