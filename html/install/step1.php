<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | step1.php - NexOS installation step 1 - 
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
if (!defined('INSTALL')) { exit; }

$passed = (PHPVERS >= 52);
$dirs = array(
	'config' => array('includes', 0),
	'cache' => array('cache', 1),
	'avatars' => array('uploads/avatars', 0),
	'albums' => array('modules/coppermine/albums', 0),
	'userpics' => array('modules/coppermine/albums/userpics', 0),
);
$tips = '';
foreach ($dirs as $key => $data) {
	$dirs[$key][2] = is_writeable(BASEDIR.$data[0]);
	if ($data[1] && !$dirs[$key][2]) { $passed = false; }
	$tips .= "maketip('$key','".$instlang["s1_$key"]."','".$instlang['s1_'.$key.'2']."');\n";
}

$gd = false;
if (extension_loaded('gd')) {
	if (function_exists('gd_info')) {
		$gd = gd_info();
		$gd = $gd['GD Version'];
	} else if (preg_match('/phpinfo/', ini_get('disable_functions'))) {
		$gd = 2;
	} else {
		ob_start();
		phpinfo(INFO_MODULES);
		$info = ob_get_contents();
		ob_end_clean();
		$info = stristr($info, 'gd version');
		preg_match('/\d/', $info, $match);
		$gd = $match[0];
	}
}
$gd = preg_replace('#bundled \((.*?) compatible\)#', '\\1', $gd);
$ini['register_globals'] = ini_get('register_globals');
$ini['magic_quotes'] = (PHPVERS < 60 ? get_magic_quotes_gpc() : false);
$ini['magic_quotes_sybase'] = (PHPVERS < 60 ? ini_get('magic_quotes_sybase') : false);
$ini['ini_set'] = (false === stripos(ini_get('disable_functions'), 'ini_set'));
$ini['LEO'] = (false !== stripos($_SERVER['SERVER_SOFTWARE'], 'Apache'));

$checks = array(
	'<img src="images/red.gif" alt="critical" title="critical" />',
	'<img src="images/orange.gif" alt="failed" title="failed" />',
	'<img src="images/green.gif" alt="ok" title="ok" />'
);

inst_header();
echo '<script language="JavaScript" type="text/javascript">
<!--'."
maketip('writeaccess','".$instlang['s1_directory_write']."','".$instlang['s1_directory_write2']."');
$tips".'// -->
</script>
<table>
	<tr>
	  <td colspan="5" nowrap="nowrap">
		'.$checks[2].' '.$instlang['s1_dot_ok'].' |
		'.$checks[1].' '.$instlang['s1_dot_failed'].' |
		'.$checks[0].' '.$instlang['s1_dot_critical'].'</td>
	</tr><tr>
	  <td colspan="5"><hr noshade="noshade" size="1" /></td>
	</tr><tr>
	  <th colspan="4" nowrap="nowrap">'.$instlang['s1_server_settings'].'</th>
	  <td></td>
	</tr><tr>
	  <td>'.$instlang['s1_setting'].'</td><td>'.$instlang['s1_preferred'].'</td><td>'.$instlang['s1_yours'].'</td>
	</tr><tr>
	  <td>PHP</td><td>5.2</td><td>'.phpversion().'</td>
	  <td align="center">'.$checks[((PHPVERS < 52) ? 0 : 2)].'</td>
	  <td>'/*.inst_help('php')*/.'</td>
	</tr><tr>
	  <td>GD</td><td>2.0</td><td>'.$gd.'</td>
	  <td align="center">'.$checks[((strpos($gd, '2.') === false)? 1 : 2)].'</td>
	  <td>'/*.inst_help('php')*/.'</td>
	</tr><tr>
	  <td>magic_quotes</td><td>'.$instlang['s1_off'].'</td><td>'.($ini['magic_quotes']?$instlang['s1_on']:$instlang['s1_off']).'</td>
	  <td align="center">'.$checks[($ini['magic_quotes'] ? 1 : 2)].'</td>
	  <td>'/*.inst_help('php')*/.'</td>
	</tr><tr>
	  <td>magic_quotes_sybase</td><td>'.$instlang['s1_off'].'</td><td>'.($ini['magic_quotes_sybase']?$instlang['s1_on']:$instlang['s1_off']).'</td>
	  <td align="center">'.$checks[($ini['magic_quotes_sybase'] ? 1 : 2)].'</td>
	  <td>'/*.inst_help('php')*/.'</td>
	</tr><tr>
	  <td>register_globals</td><td>'.$instlang['s1_off'].'</td><td>'.($ini['register_globals']?$instlang['s1_on']:$instlang['s1_off']).'</td>
	  <td align="center">'.$checks[($ini['register_globals'] ? 1 : 2)].'</td>
	  <td>'/*.inst_help('php')*/.'</td>
	</tr><tr>
	  <td>ini_set()</td><td>'.$instlang['s1_on'].'</td><td>'.($ini['ini_set']?$instlang['s1_on']:$instlang['s1_off']).'</td>
	  <td align="center">'.$checks[($ini['ini_set'] ? 2 : 1)].'</td>
	  <td>'/*.inst_help('php')*/.'</td>
	</tr><tr>
	  <td>'.$instlang['s1_leo_available'].'</td><td>'.$instlang['s1_yes'].'</td><td>'.($ini['LEO']?$instlang['s1_yes']:$instlang['s1_no']).'</td>
	  <td align="center">'.$checks[($ini['LEO'] ? 2 : 1)].'</td>
	  <td>'/*.inst_help('php')*/.'</td>
	</tr><tr>
	  <td colspan="5"><hr noshade="noshade" size="1" /></td>
	</tr><tr>
	  <th colspan="4" nowrap="nowrap">'.$instlang['s1_directory_write'].'</th>
	  <td>'.inst_help('writeaccess').'</td>
	</tr>';
foreach ($dirs as $key => $data) {
	$data[2] = ($data[2] ? 2 : ($data[1] ? 0 : 1));
	echo '<tr>
	  <td colspan="3">/'.$data[0].'/</td>
	  <td align="center">'.$checks[$data[2]].'</td>
	  <td>'.inst_help($key).'</td>
	</tr>';
}
?>
	<tr>
		<td colspan="5"><hr noshade="noshade" size="1" /></td>
	</tr>
</table>
<?php
if ($passed) {
	echo $instlang['s1_correct'].'<p align="center"><input type="hidden" name="step" value="'.(!empty($current_version) ? '3' : '2').'" />
	<input type="submit" value="'.$instlang['next'].'" class="formfield" /></p>';
} else {
	echo '<p style="color:#FF0000; font-style:bold">'.$instlang['s1_fixerrors'].'</p>';
}
