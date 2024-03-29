<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | l10n.php - NexOS Administration Backend file                      |
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

if (!defined('ADMIN_PAGES')) { exit; }
if (!can_admin('l10n')) { die('Access Denied'); }

function del_folder($folder) {
	if (file_exists('language/'.$folder)) {
		$dir = dir('language/'.$folder);
		while ($file = $dir->read()) {
			if ($file != '.' && $file != '..') {
				if (is_dir('language/'.$folder.'/'.$file)) {
					del_folder($folder.'/'.$file);
				} else {
					if (!unlink('language/'.$folder.'/'.$file)) { cpg_error('Cannot remove file '.$file); }
				}
			}
		}
		$dir->close();
		if (!rmdir('language/'.$folder)) { cpg_error('Cannot remove folder language/'.$folder); }
	}
}
function get_lang_title($lang) {
	$title = ucfirst($lang);
	if (false !== strpos($lang, '_')) {
		$l_array = explode('_', $lang);
		$title = '';
		for ($i=0; $i<count($l_array); $i++) {
			$title .= ucfirst($l_array[$i]);
			if ($i < count($l_array)) { $title .= ' '; }
		}
	}
	return $title;
}

if (isset($_GET['def'])) {
	if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $_GET['def'])) { cpg_error('Invalid language'); }
	$db->sql_query("UPDATE ".$prefix."_config_custom SET cfg_value='".Fix_Quotes($_GET['def'])."' WHERE cfg_field='language' AND cfg_name='global' LIMIT 1");
	Cache::array_delete('MAIN_CFG');
	URL::redirect(URL::admin());
} elseif (isset($_GET['upd'])) {
	if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $_GET['upd'])) { cpg_error('Invalid title'); }
	require_once(CORE_PATH.'classes/cvs.php');
	if ($_GET['upd'] == 'all') {
		$langs = array();
		$dir = dir('language');
		while ($file = $dir->read()) {
			if ($file != 'CVS' && is_dir($file)) {
				$langs[$file][] = $file;
			}
		}
		$dir->close();
		ob_end_clean();
		$delay = 10; // 5 langs 50 seconds, we dont want to overload the main server!
		header('Content-Encoding: none');
		header('Content-Type: text/plain');
		echo "Update is running. Please be patient ... it will take around ".count($langs)*$delay." seconds\n";
		while (list($lang_title) = each($langs)) {
			echo "\n\n### Currently updating $lang_title ###\n";
			ob_flush();
			flush();
			sleep(intval($delay));
			$log = CVS::update('language/'.$lang_title);
			if (!isset($log['error'])) {
				echo CVS::formatlog($log);
			} else {
				cpg_error($log['error']);
			}
		}
		echo "\n\nLanguages pack updated to latest CVS files";
		exit;
	} else {
		$log = CVS::update('language/'.$_GET['upd']);
		if (!isset($log['error'])) {
			ob_end_clean();
			header('Content-Encoding: none');
			header('Content-Type: text/plain');
			echo CVS::formatlog($log);
			echo "\n\nLanguage pack updated to latest CVS files";
			exit;
		} else {
			cpg_error($log['error']);
		}
	}
} elseif (isset($_GET['del']) && !($CLASS['member']->demo && $_GET['del'] == $MAIN_CFG['global']['language'])) {	
	if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $_GET['del'])) { cpg_error('Invalid title'); }
	if (!is_dir('language/'.$_GET['del'])) { cpg_error('Language does not exist'); }
	if (isset($_POST['cancel'])) { URL::redirect(URL::admin()); }
	if (isset($_POST['confirm'])) {
		del_folder($_GET['del']);
		cpg_error(get_lang_title($_GET['del']).' language pack successfully deleted', _TB_INFO, URL::admin());
	}
	cpg_delete_msg(URL::admin('&amp;del='.$_GET['del']), 'Are you sure that you want to delete the '.get_lang_title($_GET['del']).' language pack?');
} elseif (isset($_POST['cvs_lang'])) {
	require_once(CORE_PATH.'classes/cvs.php');
	if (!preg_match('#^([a-zA-Z0-9_\-]+)$#', $_POST['cvs_lang'])) { cpg_error('Invalid title'); }
	$path = 'language/'.$_POST['cvs_lang'];
	if (!CVS::create($path, 'dragonflycms.org', '/cvs', 'l10n/'.$_POST['cvs_lang'], $_POST['cvs_uname'], $_POST['cvs_pass'])) {
		cpg_error('Error creating important CVS files and folders');
	} else {
		$log = CVS::update($path);
		if (!isset($log['error'])) {
			if (!isset($log['notes'])) {
				cpg_error(get_lang_title($_POST['cvs_lang']).' language pack successfully installed', _TB_INFO, URL::admin());
			}
			$log = nl2br(CVS::formatlog($log));
			cpg_error($log, _TB_INFO);
		}
		cpg_error($log['error']);
	}
} elseif (isset($_POST['save_cfg'])) {
	foreach ($MAIN_CFG['global'] as $key => $val) {
		if (isset($_POST[$key]) && in_array($key, array('multilingual', 'useflags'))) {
			$value = $_POST[$key];
			if ($value != $val) {
				$db->sql_query('UPDATE '.$prefix."_config_custom SET cfg_value='".Fix_Quotes($value)."' WHERE cfg_name='global' AND cfg_field='$key'");
			}
		}
	}
	Cache::array_delete('MAIN_CFG');
	URL::redirect(URL::admin('&cfg'));
} else {
	$pagetitle .= ' '._BC_DELIM.' Languages'.(isset($_GET['cfg']) ? ' '._BC_DELIM.' '._TB_CONFIG : '');
	require_once('header.php');
	GraphicAdmin('_AMENU1');
	OpenTable();
	if (isset($_GET['cfg'])) {
		echo '<span class="genmed"><strong>Dragonfly Language Pack Management</strong></span><br />
		<a href="'.URL::admin().'">Language Packs</a> | <strong>'._TB_CONFIG.'</strong> | <a href="'.URL::admin('&upd=all').'">'.sprintf(_UPGRADE,(_ALL.' '._LanguagesLANG)).'</a> <br /><br />
		<form action="'.URL::admin().'" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		<table border="0" width="40%" cellpadding="3" cellspacing="1" class="forumline">
		 <tr>
		   <td class="row1"><span class="genmed">'._ACTMULTILINGUAL.'</span></td>
		   <td class="row2">'.yesno_option('multilingual', $MAIN_CFG['global']['multilingual']).'</td>
		 </tr><tr>
		   <td class="row1"><span class="genmed">'._ACTUSEFLAGS.'</span></td>
		   <td class="row2">'.yesno_option('useflags', $MAIN_CFG['global']['useflags']).'</td>
		 </tr><tr>
		   <td align="center" class="catbottom" colspan="2"><input class="mainoption" type="submit" name="save_cfg" value="'._SAVECHANGES.'" /></td>
		 </tr>
		</table></form>';
	} else {
		$langs = array();
		$dir = dir('language');
		while ($file = $dir->read()) {
			if (is_dir('language/'.$file) && strlen($file) > 3) {
				$langs[$file][] = $file;
			}
		}
		$dir->close();
		
		echo '<span class="genmed"><strong>Dragonfly Language Pack Management</strong></span><br />
		<strong>Language Packs</strong> | <a href="'.URL::admin('&amp;cfg').'">'._TB_CONFIG.'</a> | <a href="'.URL::admin('&amp;upd=all').'">'.sprintf(_UPGRADE,(_ALL.' '._LanguagesLANG)).'</a><br /><br />
		<table border="0" cellspacing="0" width="50%">
		 <tr style="background:'.$bgcolor2.';">
		   <td><strong>'._LANGUAGE.'</strong></td>
		   <td align="center" style="width:15%;"><strong>Default</strong></td>
		   <td style="width:20%;"><strong>'._FUNCTIONS.'</strong></td>
		 </tr>';
		$bgcolor = $bgcolor3;
		while (list($lang_title) = each($langs)) {
			$bgcolor = ($bgcolor == '') ? ' bgcolor="'.$bgcolor3.'"' : '';
			$def_img = ($MAIN_CFG['global']['language'] == $lang_title) ? 'checked.gif' : 'unchecked.gif';
			$def_alt = ($MAIN_CFG['global']['language'] == $lang_title) ? _YES : _NO;
			echo '
		 <tr'.$bgcolor.'>
		   <td>'.(file_exists('images/language/flag-'.$lang_title.'.png') ? '<img src="images/language/flag-'.$lang_title.'.png" alt="'.get_lang_title($lang_title).'" title="'.get_lang_title($lang_title).'" />' : '').' '.(($lang_title == $currentlang) ? '<strong>'.get_lang_title($lang_title).'</strong>' : '<a href="'.URL::admin('&amp;newlang='.$lang_title).'">'.get_lang_title($lang_title).'</a>').'</td>
		   <td align="center">'.(($MAIN_CFG['global']['language'] != $lang_title) ? '<a href="'.URL::admin('&amp;def='.$lang_title).'"><img src="images/'.$def_img.'" alt="'.$def_alt.'" title="'.$def_alt.'" /></a>' : '<img src="images/'.$def_img.'" alt="'.$def_alt.'" title="'.$def_alt.'" />').'</td>
		   <td>'.(is_writable('language/'.$lang_title) ? '<a href="'.URL::admin('&amp;upd='.$lang_title).'">Update</a>'.(($lang_title != $MAIN_CFG['global']['language']) ? ' / <a href="'.URL::admin('&amp;del='.$lang_title).'">'._DELETE.'</a>' : '') : '&mdash;').'</td>
		 </tr>';
		}
		echo '</table><br /><a href="'.URL::index('CPGlang').'">You can help translate!</a><br /><br />';
		if (is_writable('language')) {
			echo open_form(URL::admin(), false, 'Install a new language pack from our CVS').'
			<label class="ulog" for="cvs_lang">'._LANGUAGE.'</label>
			 <input type="text" name="cvs_lang" id="cvs_lang" size="30" maxlength="255" /> <i>dutch, for example. All lowercase! <a href="http://dragonflycms.org/cvs/l10n/" target="_new">List of available languages</a></i><br />
			<label class="ulog" for="cvs_uname">Username</label>
			 <input type="text" name="cvs_uname" id="cvs_uname" size="30" value="anonymous" maxlength="255" /><br />
			<label class="ulog" for="cvs_pass">'._PASSWORD.'</label>
			 <input type="text" name="cvs_pass" id="cvs_pass" size="30" maxlength="255" /> <i>not required for anonymous</i><br /><br />
			<input type="submit" value="Install Pack" />'.
			close_form();
		} else {
			echo '<span class="genmed">Make the <strong>language/</strong> folder writable to download new language packs from our CVS</span>';
		}
	}
	CloseTable();
}
