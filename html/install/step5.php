<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |  
  +-------------------------------------------------------------------+
  | step5.php - NexOS installation step 5 - Build super admin         |
  |-----------------End Installation Routine--------------------------|
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
require_once(CORE_PATH.'classes/time.php');
global $db, $prefix, $user_prefix;

# Pick a timezone
$tz_select = '<select name="timezone" class="formfield">';
foreach ($l10n_gmt_regions as $gmt => $info) {
	$sel = ($gmt == 0) ? ' selected="selected"' : '';
	$tz_select .= '<option value="'.$gmt.'"'.$sel.'>'.$info.'</option>';
}
$tz_select .= '</select>';

if ($db->sql_count($prefix.'_admins') < 1) {
	if (!isset($_POST['pwd'])) {
		inst_header();
		echo '<script language="JavaScript" type="text/javascript">
<!--'."
maketip('nickname','"._NICKNAME."','".$instlang['s3_nick2']."');
maketip('email','"._EMAIL."','".$instlang['s3_email2']."');
maketip('password','"._PASSWORD."','".$instlang['s3_pass2']."');
maketip('timezone','".$instlang['s3_timezone']."','".$instlang['s3_timezone2']."');
".'// -->
</script>
'._NOADMINYET.'<br />'.$instlang['s3_warning'].'<br /><br />'
		.'<table border="0">'
		.'<tr><td>'._NICKNAME.'</td><td><input type="text" name="name" size="30" maxlength="25" class="formfield" /> '.inst_help('nickname').'</td></tr>'
		.'<tr><td>'._EMAIL.'</td><td><input type="text" name="email" size="30" maxlength="255" class="formfield" /> '.inst_help('email').'</td></tr>'
		.'<tr><td>'._PASSWORD.'</td><td><input type="password" name="pwd" size="20" class="formfield" /> '.inst_help('password').'</td></tr>'
		.'<tr><td>'.$instlang['s3_timezone'].'</td><td>'.$tz_select.' '.inst_help('timezone').'</td></tr>'
		.'<tr><td colspan="2">'._CREATEUSERDATA.' <input type="radio" name="user_new" value="1" checked="checked" />'._YES.'&nbsp;&nbsp;<input type="radio" name="user_new" value="0" />'._NO.'<br /><br />'
		.'<input type="hidden" name="step" value="5" /><input type="submit" value="'._SUBMIT.'" class="formfield" />'
		.'</td></tr></table>';
	} else if (preg_match('#[0-9]#', $_POST['pwd']) && preg_match('#[a-z]#', $_POST['pwd']) && preg_match('#[A-Z]#', $_POST['pwd'])) {
		$cookie = unserialize(base64_decode($_COOKIE['installtest']));
		$pwd = md5($_POST['pwd']);
		$name = $_POST['name'];
		$email = $_POST['email'];
		$timezone = $_POST['timezone'];
		$db->sql_query("INSERT INTO ".$prefix."_admins (aid, email, pwd, radminsuper) VALUES ('$name', '$email', '$pwd', '1')");
		if ($_POST['user_new'] == 1) {
			$user_regdate = time();
			$db->sql_query("INSERT INTO ".$user_prefix."_users (username, user_email, user_avatar, user_regdate, user_password, theme, commentmax, user_level, user_lang, user_dateformat, user_timezone) VALUES ('$name','$email','gallery/blank.gif','$user_regdate','$pwd','','4096', '2', 'english','D M d, Y g:i a', '$timezone')");
			setcookie(trim($cookie['membercookie']), base64_encode("2:0:$pwd"), 0, trim($cookie['cookiepath']),trim($cookie['cookiedom'])); //, int secure
		}
		setcookie(trim($cookie['admincookie']), base64_encode("1:$pwd:0"), 0, trim($cookie['cookiepath']),trim($cookie['cookiedom'])); //, int secure
		setcookie('installtest','',-1,trim($cookie['cookiepath']),trim($cookie['cookiedom'])); //, int secure
		$images[3] = 'checked';
		inst_header();
		echo $instlang['s3_finnish'];
	} else {
		inst_header();
		echo '<script language="JavaScript" type="text/javascript">
<!--'."
maketip('timezone','".$instlang['s3_timezone']."','".$instlang['s3_timezone2']."');
".'// -->
</script>
<b>'._ERROR.': '.$instlang['s3_warning'].'</b><br /><br />'
		."<table border=\"0\">"
		."<tr><td>"._NICKNAME."</td><td><input type=\"text\" name=\"name\" size=\"30\" maxlength=\"25\" value=\"$name\" class=\"formfield\" /></td></tr>"
		."<tr><td>"._EMAIL."</td><td><input type=\"text\" name=\"email\" size=\"30\" maxlength=\"255\" value=\"$email\" class=\"formfield\" /></td></tr>"
		."<tr><td>"._PASSWORD."</td><td><input type=\"password\" name=\"pwd\" size=\"20\" class=\"formfield\" /></td></tr>"
		.'<tr><td>Timezone</td><td>'.$tz_select.'</td></tr>'
		.'<tr><td colspan="2">'._CREATEUSERDATA.'  <input type="radio" name="user_new" value="1" checked="checked" />'._YES.'&nbsp;&nbsp;<input type="radio" name="user_new" value="0" />'._NO.'<br /><br />'
		.'<input type="hidden" name="step" value="5" /><input type="submit" value="'._SUBMIT.'" class="formfield" />'
		.'</td></tr></table>';
  }
}
