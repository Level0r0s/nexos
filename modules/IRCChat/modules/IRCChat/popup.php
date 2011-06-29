<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/modules/IRCChat/modules/IRCChat/popup.php,v $
  $Revision: 9.1 $
  $Author: djmaze $
  $Date: 2005/01/13 04:02:52 $

***********************************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $BASEHREF;
$nick = is_user() ? $userinfo['username'] : 'Guest';
$iname = is_user() ? 'CPG Member' : 'CPG Guest';
if (isset($_GET['host'])) {
    $server = $_GET['host'];
} else {
    $result = $db->sql_query('SELECT server FROM '.$prefix.'_ircservers WHERE server_id=\''.$MAIN_CFG['IRCChat']['network'].'\'');
    list($server) = $db->sql_fetchrow($result);
    $db->sql_freeresult($result);
}

echo '<html>
<head>
<base href="'.$BASEHREF.'" />
<title>CPG-Nuke IRC</title>
<script>
function SetIcon(Text) {
  document.applet.setFieldText(document.applet.getFieldText()+Text);
  document.applet.requestSourceFocus();
}
</script>
</head>
<body>
<applet name="applet" code=IRCApplet.class archive="irc.jar,pixx.jar" codebase="modules/'.$module_name.'/" width="640" height="400">
<param name="CABINETS" value="irc.cab,securedirc.cab,pixx.cab">
<param name="nick" value="'.$nick.'">
<param name="alternatenick" value="'.$nick.'???">
<param name="name" value="'.$iname.'">
<param name="host" value="'.$server.'">
<param name="gui" value="pixx">
';
if (is_admin()) {
    echo '<param name="plugin1" value="config.Config">';
}
echo '
<param name="quitmessage" value="'.addslashes($MAIN_CFG['IRCChat']['quitmessage']).'">
<param name="asl" value="true">
<param name="useinfo" value="true">

<param name="command1" value="/join #'.$MAIN_CFG['IRCChat']['channel'].'">

<param name="style:bitmapsmileys" value="true">
  <param name="style:smiley1" value=":) img/sourire.gif">
  <param name="style:smiley2" value=":D img/content.gif">
  <param name="style:smiley3" value=":O img/OH-2.gif">
  <param name="style:smiley4" value=":P img/langue.gif">
  <param name="style:smiley5" value=";) img/clin-oeuil.gif">
  <param name="style:smiley6" value=":( img/triste.gif">
  <param name="style:smiley7" value=":| img/OH-3.gif">
  <param name="style:smiley8" value=":\'( img/pleure.gif">
  <param name="style:smiley9" value=":$ img/rouge.gif">
  <param name="style:smiley10" value="8) img/cool.gif">
  <param name="style:smiley11" value=":@ img/enerve2.gif">
  <param name="style:smiley12" value=":S img/roll-eyes.gif">
  <param name="style:smiley13" value=":banana smiley/banana.gif">
  <param name="style:smiley14" value=":band smiley/emband.gif">
  <param name="style:smiley15" value="Radio_Gets_Wild smiley/frog.gif">
  <param name="style:smiley16" value="Dee smiley/grouphug.gif">
  <param name="style:smiley17" value="WiseCat smiley/catfleas.gif">
  <param name="style:smiley18" value=":smoke smiley/smokin.gif">
  <param name="style:smiley19" value=":elephant smiley/elefant.gif">
  <param name="style:smiley20" value=":shit smiley/shit.gif">
  <param name="style:smiley22" value=":? smiley/confused.gif">
  <param name="style:smiley23" value="Kenooo smiley/smokin.gif">
  <param name="style:smiley24" value="*** smiley/new.gif">
  <param name="style:smiley25" value="Rocking_Dave smiley/cool.gif">
  <param name="style:smiley26" value="DJMaze smiley/bandit.gif">
  <param name="style:smiley27" value="DJH smiley/beer.gif">
  <param name="style:smiley28" value=":welcome smiley/welcome.gif">
  <param name="style:smiley29" value="Chewwy smiley/blob.gif">
  <param name="style:smiley30" value="Gaz smiley/guitarist.gif">
  <param name="style:smiley31" value="Wizz smiley/patty.gif">
  <param name="style:smiley32" value="Tracy smiley/smiley05_phone.gif">
  <param name="style:smiley33" value="Metalmike smiley/tiere075.gif">

<param name="style:backgroundimage" value="true">
<param name="style:backgroundimage1" value="all all 0 background.gif">
<param name="style:sourcefontrule1" value="all all Serif 12">
<param name="style:floatingasl" value="true">

<param name="pixx:timestamp" value="true">
<param name="pixx:highlight" value="true">
<param name="pixx:highlightnick" value="true">
<param name="pixx:nickfield" value="true">
<param name="pixx:styleselector" value="true">
<param name="pixx:setfontonstyle" value="true">
</applet><br/>
<a href="javascript:SetIcon(\':)\')"><img src="modules/'.$module_name.'/img/sourire.gif" border="0" alt="smile" text=":)" /></a>
<a href="javascript:SetIcon(\':D\')"><img src="modules/'.$module_name.'/img/content.gif" border="0" /></a>
<a href="javascript:SetIcon(\':O\')"><img src="modules/'.$module_name.'/img/OH-2.gif" border="0" /></a>
<a href="javascript:SetIcon(\':P\')"><img src="modules/'.$module_name.'/img/langue.gif" border="0" /></a>
<a href="javascript:SetIcon(\';)\')"><img src="modules/'.$module_name.'/img/clin-oeuil.gif" border="0" /></a>
<a href="javascript:SetIcon(\':(\')"><img src="modules/'.$module_name.'/img/triste.gif" border="0" /></a>
<a href="javascript:SetIcon(\':|\')"><img src="modules/'.$module_name.'/img/OH-3.gif" border="0" /></a>
<a href="javascript:SetIcon(\''.":\'(".'\')"><img src="modules/'.$module_name.'/img/pleure.gif" border="0" /></a>
<a href="javascript:SetIcon(\':$\')"><img src="modules/'.$module_name.'/img/rouge.gif" border="0" /></a>
<a href="javascript:SetIcon(\'8)\')"><img src="modules/'.$module_name.'/img/cool.gif" border="0" /></a>
<a href="javascript:SetIcon(\':@\')"><img src="modules/'.$module_name.'/img/enerve2.gif" border="0" /></a>
<a href="javascript:SetIcon(\':S\')"><img src="modules/'.$module_name.'/img/roll-eyes.gif" border="0" /></a>
<a href="javascript:SetIcon(\':?\')"><img src="modules/'.$module_name.'/smiley/confused.gif" border="0" /></a>
<a href="javascript:SetIcon(\':smoke\')"><img src="modules/'.$module_name.'/smiley/smokin.gif" border="0" /></a>
<a href="javascript:SetIcon(\':sleepy\')"><img src="modules/'.$module_name.'/smiley/sleepy.gif" border="0" /></a>
<a href="javascript:SetIcon(\':banana\')"><img src="modules/'.$module_name.'/smiley/banana.gif" border="0" /></a>
<a href="javascript:SetIcon(\':band\')"><img src="modules/'.$module_name.'/smiley/emband.gif" border="0" /></a>
<a href="javascript:SetIcon(\':elephant\')"><img src="modules/'.$module_name.'/smiley/elefant.gif" border="0" /></a>
</body>
</html>';