<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2009 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/modules/Your_Account/userinfo.php,v $
  $Revision: 9.53 $
  $Author: phoenix $
  $Date: 2010/11/12 04:29:57 $
**********************************************/
if (!defined('CPG_NUKE')) { exit; }

function userinfo($username) {
  global $db, $prefix, $user_prefix, $currentlang, $pagetitle, $MAIN_CFG, $CPG_SESS, $CLASS, $cpgtpl;

  $owninfo = (is_user() && ($username == is_user() || strtolower($username) == strtolower($CLASS['member']->members[is_user()]['username'])));
  if ($owninfo) {
    $userinfo =& $CLASS['member']->members[is_user()];
    global $Blocks;
    $block = array(
      'bid' => 10000,
      'view' => 1,
      'side' => 'l',
      'title' => _TB_BLOCK,
      'content' => member_block()
    );
    $Blocks->custom($block);
    $block = NULL;
  } else if (/*!SEARCHBOT &&*/ !is_user() && $username != 'Anonymous') {
    URL::redirect(URL::index('&amp;profile=Anonymous'));
  } else if (!($userinfo = getusrdata($username)) || $userinfo['user_level'] < 1) {
    require_once('header.php');
    OpenTable();
    echo _NOINFOFOR.' <strong>'.htmlspecialchars($username).'</strong>';
    if (!$userinfo) { echo '<br /><br /><em>'._MA_USERNOEXIST.'</em>'; }
    elseif ($userinfo['user_level'] == 0) { echo '<br /><br /><em>'._ACCSUSPENDED.'</em>'; }
    elseif ($userinfo['user_level'] == -1) { echo '<br /><br /><em>'._ACCDELETED.'</em>'; }
    CloseTable();
    return;
  }
  $username = $userinfo['username'];
  $imgpath = 'themes/'.$CPG_SESS['theme'].'/images/forums/lang_';
  $imgpath .= (file_exists($imgpath.$currentlang.'/icon_email.gif') ? $currentlang : 'english');

  if ($owninfo) {
    $pagetitle .= ' '._BC_DELIM.' '.$username.', '._THISISYOURPAGE;
  } else {
    $pagetitle .= ' '._BC_DELIM.' '._PERSONALINFO.' '._BC_DELIM.' '.$username;
  }
  require_once('header.php');
  require_once(CORE_PATH.'nbbcode.php');

  if ($userinfo['user_avatar_type'] == 1) {
    $avatar = $MAIN_CFG['avatar']['path'].'/'.$userinfo['user_avatar'];
  } else if ($userinfo['user_avatar_type'] == 2) {
    $avatar = $userinfo['user_avatar'];
  } else if ($userinfo['user_avatar_type'] == 3 && !empty($userinfo['user_avatar'])) {
    $avatar = $MAIN_CFG['avatar']['gallery_path'].'/'.$userinfo['user_avatar'];
  } else {
    $avatar = $MAIN_CFG['avatar']['gallery_path'].'/'.$MAIN_CFG['avatar']['default'];
  }
  if ($avatar) {
    $avatar = '<img src="'.$avatar.'" alt="" />';
  }
  if ($userinfo['user_website']) {
    if (false === strpos($userinfo['user_website'], '://')) { $userinfo['user_website'] = "http://$userinfo[user_website]"; }
  }
  if (!preg_match('#^(http[s]?\:\/\/)?([a-z0-9\-\.]+)?[a-z0-9\-]+\.[a-z]{2,4}$#i', $userinfo['user_website'])) {
    $userinfo['user_website'] = '';
  }

  if ($userinfo['user_rank']) {
    $sql = 'rank_id = '.$userinfo['user_rank'].' AND rank_special = 1';
  } else {
    $sql = 'rank_min <= '.intval($userinfo['user_posts']).' AND rank_special = 0 ORDER BY rank_min DESC';
  }
  list($poster_rank, $rank_image) = $db->sql_ufetchrow('SELECT rank_title, rank_image FROM '.$prefix.'_bbranks WHERE '.$sql, SQL_NUM);



  $poster_rank = ($rank_image) ? '<img src="'.$rank_image.'" alt="'.$poster_rank.'" title="'.$poster_rank.'" />' : $poster_rank;

  if (can_admin('members')||$owninfo){
    $result = $db->sql_query("SELECT field, langdef, type FROM ".$user_prefix."_users_fields WHERE section = 2 OR section = 3");
  } else {
    $result = $db->sql_query("SELECT field, langdef, type FROM ".$user_prefix."_users_fields WHERE section = 2");
  }
  if ($db->sql_numrows($result) > 0) {
    while ($row = $db->sql_fetchrow($result)) {
      if ($row['type'] == 1) {
        $value = $userinfo[$row['field']] ? _YES : _NO;
      } else {
        $value = $userinfo[$row['field']];
      }
      if (defined($row['langdef'])) $row['langdef'] = constant($row['langdef']);

      $cpgtpl->assign_block_vars('custom_field', array(
        'NAME'  => $row['langdef'],
        'VALUE' => $value
      ));
    }
  }

  $blog_url = 0;
  if (is_active('Blogs')) {
    list($num_blogs) = $db->sql_ufetchrow("SELECT COUNT(*) FROM ".$prefix."_blogs 
		WHERE aid='$username' AND private=0");
    if ($num_blogs > 0) {
      $blog_url = 1;
    }
  }

  $show_email = 0;
  if (($userinfo['user_viewemail'] && is_user()) || $owninfo || (is_admin() && !($CLASS['member']->demo))) { $email = $userinfo['user_email']; }
  else if ($userinfo['femail']) { $email = $userinfo['femail']; }
  if (isset($email) && Security::check_email($email)) {
    $email = 'mailto:'.$email;
    if (!$owninfo && is_user()) {
      define('IN_PHPBB', true);
      define('PHPBB_INSTALLED', true);
      $phpbb_root_path = "./modules/Forums/";
      require_once($phpbb_root_path.'common.php');
		global $board_config;
      if ($board_config['board_email_form']) $email = URL::index('Forums&amp;file=profile&amp;mode=email&amp;u='.$userinfo['user_id']);
    }
    $show_email = 1;
  }
  $show_pm = 0;
  if (!$owninfo && is_user() && is_active('Private_Messages')) {
    $show_pm = 1;
  }

  $show_gallery = 0;
  if (is_active('coppermine')) {
    $user_gallery = 10000+$userinfo['user_id'];
    $ugall_result = $db->sql_query("SELECT p.pid FROM ".$prefix."_cpg_pictures AS p, ".$prefix."_cpg_albums AS a WHERE a.aid = p.aid AND a.category = $user_gallery");
     if ($db->sql_numrows($ugall_result)>0) {
      $show_gallery = 1;
    }
  }


  $cpgtpl->assign_vars(array(
    'ABOUT_USER'        => _ABOUT_USER.$username,
    'AVATAR'            => $avatar,
    'JOINED_DATE'       => formatDateTime($userinfo['user_regdate'], _DATESTRING3),
    'USER_RANK'         => $poster_rank,
    'USER_LOCATION'     => decode_bb_all($userinfo['user_from']),
    'USER_WEBSITE'      => $userinfo['user_website'],
    'USER_OCCUPATION'   => decode_bb_all($userinfo['user_occ']),
    'USER_INTERESTS'    => decode_bb_all($userinfo['user_interests']),
    'USER_SIGNATURE'    => $userinfo['user_sig']? decode_bb_all($userinfo['user_sig'], 1, false) : false,
    'USER_EXTRA_INFO'   => $userinfo['bio']? decode_bb_all($userinfo['bio'], 1, false) : false,
    'BLOG_URL'          => $blog_url? URL::index('Blogs&amp;mode=user&amp;nick='.$username) : false,
    'EMAIL_ADDRESS'     => $show_email? $email : false,
    'IMG_PATH'          => $imgpath,
    'U_PM'              => $show_pm? URL::index("Private_Messages&amp;mode=post&amp;u=$userinfo[user_id]") : false,
    'USER_MSNM'         => $userinfo['user_msnm'],
    'USER_YIM'          => $userinfo['user_yim'],
    'USER_AIM'          => $userinfo['user_aim'],
    'USER_ICQ'          => $userinfo['user_icq'],
    'USER_SKYPE'        => $userinfo['user_skype'],
    'USER_GALLERY'      => $show_gallery? URL::index('coppermine&amp;cat='.(10000+$userinfo['user_id'])) : false,
    'OWN_OR_CAN_ADMIN'  => $owninfo || can_admin('members'),
    'OWN_INFO'          => $owninfo,
    'SUBSCRIBED'        => $userinfo['newsletter'],
    'CAN_ADMIN_MEMBERS' => can_admin('members'),
    'U_EDIT_USER'       => URL::admin('users&amp;mode=edit&amp;edit=profile&amp;id='.$userinfo['user_id']),
    'U_SUSPEND_USER'    => URL::admin('users&amp;mode=edit&amp;edit=admin&amp;id='.$userinfo['user_id']),
    'HEADLINES_ALLOWED' => $owninfo && $MAIN_CFG['member']['my_headlines'],
    'URL_URI'           => URL::uri(),
    'SHOW_RSS'          => false
  ));


  if ($owninfo && $MAIN_CFG['member']['my_headlines']) {

    $hid = isset($_POST['hid']) ? intval($_POST['hid']) : 0;
    $url = isset($_POST['url']) ? $_POST['url'] : '';

    $sql4 = 'SELECT hid, sitename FROM '.$prefix.'_headlines ORDER BY sitename';
    $headl = $db->sql_query($sql4);

    while (list($nhid, $hsitename) = $db->sql_fetchrow($headl)) {
      $sel = ($hid == $nhid ) ? ' selected="selected"' : '';
      $cpgtpl->assign_block_vars('feed_option', array(
        'VALUE'     => $nhid,
        'SELECTED'  => $sel,
        'NAME'      => $hsitename
      ));
    }

    if ($hid > 0 || ($hid == 0 && strlen($url) > 10)) {
      if ($hid > 0) {
        $sql5 = 'SELECT sitename, headlinesurl FROM '.$prefix."_headlines WHERE hid='$hid'";
        $result5 = $db->sql_query($sql5);
        list($title, $url) = $db->sql_fetchrow($result5);
        $siteurl = str_ireplace('http://', '', $url);
        $siteurl = explode('/', $siteurl);
      } else {
        if (false === strpos($url, '://')) { $url = 'http://'.$url; }
        $siteurl = str_ireplace('http://', '', $url);
        $siteurl = explode('/', $siteurl);
        $title = 'http://'.$siteurl[0];
      }
      include_once(CORE_PATH.'classes/rss.php');
      $content = CPG_RSS::display($url);

      $cpgtpl->assign_vars(array(
        'SHOW_RSS'      => true,
        'RSS_CONTENT'   => $content,
        'RSS_URL'       => $siteurl[0],
        'RSS_TITLE'     => $title
      ));
    }

  }

  $cpgtpl->set_handle('userinfo', 'your_account/userinfo.html');
  $cpgtpl->display('userinfo');

  $blocksdir = dir('modules/Your_Account/blocks');
  while ($func=$blocksdir->read()) {
    if (substr($func, -3) == 'php') {
      $blockslist[] = $func;
    }
  }
  closedir($blocksdir->handle);
  natcasesort($blockslist);
  for ($i=0; $i < sizeof($blockslist); $i++) {
    require_once('modules/Your_Account/blocks/'.$blockslist[$i]);
  }
}
