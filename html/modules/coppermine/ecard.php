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
  $Source: /cvs/html/modules/coppermine/ecard.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2010/10/04 11:38:05 $
****************************************************************************/
if (!defined('CPG_NUKE')) { die("You can't access this file directly..."); }

define('ECARDS_PHP', true);
require("modules/" . $module_name . "/include/load.inc");

if (!USER_CAN_SEND_ECARDS) cpg_die(_ERROR, ACCESS_DENIED, __FILE__, __LINE__);
// ecard security fix
// $max_anon_ecards = (!isset($_COOKIE['ecard'])?1:($_COOKIE['ecard']);
$max_anon_ecards = 1;
// if (!isset($_COOKIE['ecard'])){
if (($_COOKIE['ecard'] != 0) && (USER_ID != 1)) {
	setcookie('ecard', $max_anon_ecards, 0, $MAIN_CFG['cookie']['path'], $MAIN_CFG['cookie']['domain']); // time()+60*60*24
} 
// }
require_once("includes/nbbcode.php");

// init.inc $pid = intval($_GET['pid']);
// init.inc $album = $_GET['album'];
// init.inc $pos = intval($_GET['pos']);
$thisalbum= "a.aid = $album";
$sender_name = $_POST['sender_name'] ? $_POST['sender_name'] :  (isset($USER['name']) ? $USER['name'] : CPG_USERNAME);
$sender_email = $_POST['sender_email']? $_POST['sender_email'] : (isset($USER['email']) ? $USER['email'] : '');
$recipient_name = $_POST['recipient_name'];
$recipient_email = $_POST['recipient_email'];
$greetings = $_POST['greetings'];
$message = $_POST['message'];
$sender_email_warning = '';
$recipient_email_warning = '';

$result = $db->sql_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} ON visibility IN (0,".USER_IN_GROUPS.") WHERE pid='".$pid."' GROUP BY pid");
if (!$db->sql_numrows($result)) cpg_die(_ERROR, NON_EXIST_AP);
$row = $db->sql_fetchrow($result);
$thumb_pic_url = get_pic_url($row, 'thumb');
// Check supplied email address
$valid_email_pattern = "#^[_\.0-9a-z\-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,6}$#";
$valid_sender_email = preg_match($valid_email_pattern, $sender_email);
$valid_recipient_email = preg_match($valid_email_pattern, $recipient_email);
$invalid_email = '<font size="1">' . INVALID_EMAIL . '</font>';
if (!$valid_sender_email && count($_POST) > 0) $sender_email_warning = $invalid_email;
if (!$valid_recipient_email && count($_POST) > 0) $recipient_email_warning = $invalid_email;

// Create and send the e-card
if (count($_POST) > 0 && $valid_sender_email && $valid_recipient_email) {
	global $CONFIG;

// mailer
	require("includes/classes/phpmailer.php");
	$mail = new PHPMailer();
	$mail->SetLanguage();
	$mail->From	 = $sender_email;
	$mail->FromName = $sender_name;
	$mail->AddAddress($recipient_email,$recipient_name);
	$mail->Priority = 3;
	$mail->Encoding = "8bit";
	$mail->CharSet = CHARSET;
	$mail->Subject = sprintf(E_ECARD_TITLE, $sender_name);
	if($MAIN_CFG['email']['smtp_on']){
		$mail->IsSMTP();   // set mailer to use SMTP
		$mail->Host = $MAIN_CFG['email']['smtphost'];
		if ($MAIN_CFG['email']['smtp_auth']){
			$mail->SMTPAuth = true;	 // turn on SMTP authentication
			$mail->Username = $MAIN_CFG['email']['smtp_uname'];  // SMTP username
			$mail->Password = $MAIN_CFG['email']['smtp_pass']; // SMTP password
		}
	} else {
		$mail->IsMail();
	}


	//$gallery_dir
	$gallery_url_prefix = $CONFIG['ecards_more_pic_target'];

	if ($CONFIG['make_intermediate'] && max($row['pwidth'], $row['pheight']) > $CONFIG['picture_width']) {
		$n_picname = get_pic_url($row, 'normal');
		$image = $row['filepath'].$CONFIG['normal_pfx'].$row['filename'];
	} else {
		$n_picname = get_pic_url($row, 'fullsize');
		$image = $row['filepath'].$row['filename'];
	}
	if (!stristr($n_picname, 'http:')) $n_picname = $CONFIG['ecards_more_pic_target'] . "$n_picname";

	$data = array(
		'rn' => $_POST['recipient_name'],
		'sn' => $_POST['sender_name'],
		'se' => $_POST['sender_email'],
		'p' => $n_picname,
		'g' => $greetings,
		'm' => $message,
	);
	$encoded_data = urlencode(base64_encode(serialize($data)));
	$params = array('{LANG_DIR}' => CPG_TEXT_DIR,
		'{TITLE}' => sprintf(E_ECARD_TITLE, $sender_name),
		'{CHARSET}' =>  _CHARSET,
		'{VIEW_ECARD_TGT}' => URL::index("&amp;file=displayecard&amp;data=$encoded_data",false,1),
		'{VIEW_ECARD_LNK}' => VIEW_ECARD,
		'{PIC_URL}' => 'cid:the-image',
		'{IMG_PATH}' => $MAIN_CFG['global']['nukeurl'].'/'.$THEME_DIR.'/images/' ,
		'{GREETINGS}' => $greetings,
		'{MESSAGE}' => nl2br(set_smilies($message, $MAIN_CFG['global']['nukeurl'])),
		'{SENDER_EMAIL}' => $sender_email,
		'{SENDER_NAME}' => $sender_name,
		'{VIEW_MORE_TGT}' => URL::index("",1,1),
		'{VIEW_MORE_LNK}' => VIEW_MORE_PICS,
	);
	$message = template_eval($template_ecard, $params);

	$mail->IsHTML(true);
	$mail->AltBody = strip_tags($message);
	$mail->Body	= $message;
	$ext = strtolower(substr($row['filename'],-3));
	if ($ext == "gif") {
		$type = "image/gif";
	} else if ($ext == "png") {
		$type = "image/png";
	} else {
		$type = "image/jpeg";
	}
	if (!$mail->AddEmbeddedImage($image, "the-image", "ecard.$ext", "base64", $type)) {
		cpg_die(_ERROR, $mail->ErrorInfo, __FILE__, __LINE__);
	}
	if (!$mail->Send()) {
		cpg_die(_ERROR, $mail->ErrorInfo, __FILE__, __LINE__);
		//cpg_die(_ERROR, SEND_FAILED, __FILE__, __LINE__);
		
	}
	URL::refresh(URL::index("&file=displayimage&album=$album&pos=$pos"));
	pageheader(E_TITLE);
	msg_box(INFO, SEND_SUCCESS, CONTINU, URL::index("&file=displayimage&album=$album&pos=$pos"));
	pagefooter();
}

pageheader(E_TITLE);
starttable("100%");
echo '
<form method="post" name="post" action="'.URL::index("&amp;file=ecard&amp;album=$album&amp;pid=$pid&amp;pos=$pos").'" enctype="multipart/form-data" accept-charset="utf-8">
<tr>
	<td colspan="3" class="tableh1"><h2>'.E_TITLE.'</h2></td>
</tr><tr>
	<td class="tableh2" colspan="2"><b>'.FROM.'</b></td>
	<td rowspan="6" align="center" valign="top" class="tableb">
		<img src="'.$thumb_pic_url.'" alt="" vspace="8" border="0" class="image" /><br />
	</td>
</tr><tr>
	<td class="tableb" valign="top" width="40%">'._YOUR_NAME.'<br /></td>
	<td valign="top" class="tableb" width="60%">
		<input type="text" class="textinput" name="sender_name" value="'.$sender_name.'" style="width: 100%;" /><br />
	</td>
</tr><tr>
	<td class="tableb" valign="top" width="40%">'.YOUR_EMAIL.'<br /></td>
	<td valign="top" class="tableb" width="60%">
		<input type="text" class="textinput" name="sender_email" value="'.$sender_email.'" style="width: 100%;" /><br />
		'.$sender_email_warning.'
	</td>
</tr><tr>
	<td class="tableh2" colspan="2"><b>'.TO,'</b></td>
</tr><tr>
	<td class="tableb" valign="top" width="40%">'.RCPT_NAME.'<br /></td>
	<td valign="top" class="tableb" width="60%">
		<input type="text" class="textinput" name="recipient_name" value="'.$recipient_name.'" style="width: 100%;" /><br />
	</td>
</tr><tr>
	<td class="tableb" valign="top" width="40%">'.RCPT_EMAIL.'<br /></td>
	<td valign="top" class="tableb" width="60%">
		<input type="text" class="textinput" name="recipient_email" value="'.$recipient_email.'" style="width: 100%;" /><br />
		'.$recipient_email_warning.'
	</td>
</tr><tr>
	<td class="tableh2" colspan="3"><b>'.GREETINGS.'</b></td>
</tr><tr>
	<td class="tableb" colspan="3">
		<input type="text" class="textinput" name="greetings" value="'.$greetings.'" style="width: 100%;" /><br />
	</td>
</tr><tr>
	<td class="tableh2" colspan="3"><b>'.MESSAGE.'</b></td>
</tr><tr>
	<td class="tableb" colspan="3" valign="top"><br />
		<textarea name="message" class="textinput" rows="8" cols="40" wrap="virtual" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" style="width: 100%;">'.$message.'</textarea><br /><br />
	</td>
</tr><tr>
	<td class="tableb" colspan="3" valign="top">'.smilies_table('onerow', 'message', 'post').'</td>
</tr><tr>
	<td colspan="3" align="center" class="tablef"><input type="submit" class="button" value="'.E_TITLE.'" /></td>
</tr>
</form>';

endtable();
pagefooter();
