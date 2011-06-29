<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/functions/mirrors.inc,v $
  $Revision: 1.12 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/

abstract class DL_Mirror
{

	protected static function check($url, &$warnings, &$errors, $update=false)
	{
		global $db, $dl_prefix;
		if (!$update) {
			if ($row = $db->sql_ufetchrow("SELECT did FROM ".$dl_prefix."_mirrors 
					WHERE url='".Fix_Quotes($url)."'", SQL_NUM)) {
				if ($row[0] == -is_user()) {
					$warnings[] = _DLP_FILEINLIST;
				} elseif ($row[0] < 1) {
					$errors[] = _DLP_FILEEXISTS;
				} else {
					$errors[] = sprintf(_DLP_FILEASSOC, URL::index('&amp;file=details&amp;id='.$row[0]));
				}
			}
		}
		$fields['url']      = $url;
		$fields['filename'] = '';
		$fields['uploaded'] = 0;
		if (ereg('://', $url)) {
			$dl_info = get_fileinfo($url);
			if (!isset($dl_info['size'])) {
				$warnings[] = sprintf(_DLP_FAIL2GETINFO, $url);
			} else if (preg_match('#[xhtml]+$#i', $dl_info['type'])) {
				$warnings[] = sprintf(_DLP_ISWEBSITE, $url);
			} else {
				$fields['filesize'] = $dl_info['size'];
				$fields['md5']      = false;
			}
		} else {
			if (ereg('\.\.', $url) || preg_match("/[\\:*?\"<>|]/i", $url)) {
				$warnings[] = sprintf(_DLP_INVALIDFNAME, $url);
			} elseif (!file_exists($url)) {
				$warnings[] = sprintf(_DLP_FAIL2GETINFO, $url);
			} else {
				$fields['filesize'] = filesize($url);
				$fields['md5']      = md5_file($url);
				clearstatcache();
			}
		}
		return $fields;
	}

	public static function add($dl_id, &$warnings, &$errors, $pad=null, $active=1)
	{
		global $db, $dl_prefix, $dl_config, $module_name, $userinfo;
		if (isset($_FILES['upload_file']) && is_uploaded_file($_FILES['upload_file']['tmp_name'])) {
			if (!$dl_config['upl_file'] && !can_admin($module_name)) { die('File uploading has been disabled'); }
			$extensions = split(' ', $dl_config['ext_file']);
			$file_name = trim($_FILES['upload_file']['name']);
			$extension = strtolower(substr(strrchr($file_name, '.'), 1));
			$mimetype = $_FILES['upload_file']['type'];
			$filesize = $_FILES['upload_file']['size'];
			if ($filesize > $dl_config['size_file']) {
				$warnings[] = sprintf(_DLP_FILETOOBIG, notate_size($dl_config['size_file']));
			} elseif ($filesize < 1) {
				$warnings[] = _DLP_FILETOOSMALL;
			}
			if (preg_match('#[\\/:]#', $file_name)) { $warnings[] = sprintf(_DLP_INVALIDFNAME, $file_name); }
			if (!in_array($extension, $extensions)) { $warnings[] = _DLP_EXTFORBIDDEN; }
			# Force 'view source' routine for php files
			if ($extension == 'php') { $file_name .= 's'; }
			$file_name = $dl_config['path_file'].'/'.$userinfo['user_id']."_$file_name";
			if (file_exists($file_name)) {
				if ($row = $db->sql_ufetchrow("SELECT did FROM ".$dl_prefix."_mirrors 
						WHERE url LIKE '%$file_name%'", SQL_NUM)) {
					$errors[] = sprintf(_DLP_FILEASSOC, URL::index('&amp;file=details&amp;id='.$row[0]));
				} else {
					$errors[] = _DLP_FILEEXISTS;
				}
			}
			if (empty($warnings) && empty($errors)) {
				require_once('includes/classes/cpg_file.php');
				if (CPG_File::move_upload($_FILES['upload_file'], $file_name)) {
					$fields['url']      = $file_name;
					$fields['filename'] = trim($_FILES['upload_file']['name']);
					$fields['filesize'] = filesize($file_name);
					$fields['md5']      = md5_file($file_name);
					$fields['uploaded'] = 1;
				} else { $warnings[] = _DLP_FILEERROR; }
			}
		} elseif (!empty($_POST['mirror']) || !empty($pad)) {
			$fields = self::check((empty($_POST['mirror']) ? $pad : $_POST['mirror']), $warnings, $errors);
			if (isset($_POST['md5']) && $dl_config['md5_remote']) {
				$fields['md5'] = $_POST['md5'];
			} else {
				$fields['md5'] = 'N/A';
			}
		}
		if (empty($warnings) && empty($errors) && isset($fields)) {
			$db->sql_query("INSERT INTO ".$dl_prefix."_mirrors 
				(did, uid, url, filename, md5, filesize, uploaded, active) 
				VALUES 
				($dl_id, '"
				.intval($userinfo['user_id'])."', '"
				.Fix_Quotes($fields['url'])."', '"
				.Fix_Quotes($fields['filename'])."', '"
				.Fix_Quotes($fields['md5'])."', "
				.intval($fields['filesize']).", "
				.intval($fields['uploaded']).", "
				.intval($active).")");
			return true;
		}
		return false;
	}

	public static function update($mirror_id, $dl_id, $new_url, &$warnings, &$errors)
	{
		global $db, $dl_prefix;
		$mirror_id = intval($mirror_id);
		if ($mirror = $db->sql_ufetchrow("SELECT did, uploaded, url FROM ".$dl_prefix."_mirrors 
				WHERE id=$mirror_id", SQL_ASSOC)) {
			$same_url = ($new_url == $mirror['url']);
			if ($mirror['did'] == $dl_id && (!$same_url || !$mirror['uploaded'])) {
				$fields = self::check($new_url, $warnings, $errors, $same_url);
				if (empty($warnings) && empty($errors)) {
					$db->sql_query("UPDATE ".$dl_prefix."_mirrors SET url='".Fix_Quotes($new_url)
						."', filename='"
						."', filesize='".intval($fields['filesize'])
						.($fields['md5'] ? "', md5='".Fix_Quotes($fields['md5']) : '')
						."', uploaded='0'"
						." WHERE id=$mirror_id");
					if (!$same_url && $mirror['uploaded']) { unlink($mirror['url']); }
				}
			}
		}
	}

	public static function delete($mirror_id, $dl_id)
	{
		global $db, $dl_prefix;
		$result = $db->sql_uquery('SELECT id, did, uploaded, url FROM '.$dl_prefix.'_mirrors WHERE '
			.(($mirror_id == 'all') ? 'did='.intval($dl_id) : 'id='.intval($mirror_id)));
		while ($mirror = $db->sql_fetchrow($result, SQL_ASSOC)) {
			if ($mirror['did'] == $dl_id) {
				$db->sql_query("DELETE FROM ".$dl_prefix."_mirrors 
					WHERE id=".intval($mirror['id']));
				if ($mirror['uploaded']) { unlink($mirror['url']); }
			}
		}
	}

	public static function output_list($dl_id, $uid=false)
	{
		global $db, $dl_prefix, $cpgtpl;
		$result = $db->sql_uquery("SELECT id, url, active FROM ".$dl_prefix."_mirrors 
			WHERE did=$dl_id".($uid ? " AND uid=$uid" : '')." 
			ORDER BY url");
		$a = 0;
		while ($mirror = $db->sql_fetchrow($result, SQL_ASSOC)) {
			$cpgtpl->assign_block_vars('dl_mirror', array(
				'NUM'       => ++$a,
				'ID'        => $mirror['id'],
				'URL'       => $mirror['url'],
				'VALID'     => true,
				'MD5_FORM'  => URL::index('&amp;md5='.$mirror['id'], false, true),
				'PEND_FORM' => URL::index('&amp;pmir='.$mirror['id'], false, true),
				'PENDING'   => ($mirror['active'] ? false : true)
			));
		}
		return $a;
	}

}
