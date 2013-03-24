<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | nexos_page.php - NexOS page header/footer file                    |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      | 
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |  
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |  
  +-------------------------------------------------------------------+
*/


function nexos_header($nexosinfo) {
	global $BASEHREF;
	return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>'.
(!defined('INSTALL') ? "\r\n<base href=\"$BASEHREF\"  />": '').'
<title>'.$nexosinfo.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex" />
<meta name="robots" content="noarchive" />
<link rel="stylesheet" href="../includes/css/nexos.css" type="text/css" />
</head>'.
(defined('INSTALL') ? "\r\n<body background=\"images\bg.jpg\"><center>": "\r\n<body><center>").'
<table class="table1"><tr><td>
  <table class="head">
  <tr>
    <td width="212" align="left"><img src="images/logo.gif" border="0" alt="NexOS CMS" title="NexOS CMS" /></td>
    <td align="center" class="header">'.$nexosinfo.'</td>
  </tr>
  </table>
  <table class="table1"><tr><td align="center">
';
}

function nexos_footer() {
	$goback = (isset($_SESSION['SECURITY']['flood_count']) && $_SESSION['SECURITY']['flood_count'] > 2) ? '' : (defined('_GOBACK') ? _GOBACK : '[ <a href="javascript:history.go(-1)"><strong>Go Back</strong></a> ]');
	return '<br /><br />'.$goback.'
  </td></tr></table>
</td></tr></table>
</center></body></html>';
}
