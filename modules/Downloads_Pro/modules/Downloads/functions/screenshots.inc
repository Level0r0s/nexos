<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/functions/screenshots.inc,v $
  $Revision: 1.8 $
  $Author: phoenix $
  $Date: 2010/11/08 03:05:51 $
******************************************************/

abstract class DL_Image
{

	private static function check($url, &$warnings, &$errors, $update=false)
	{
		global $db, $dl_prefix;
		if (!$update) {
			if ($row = $db->sql_ufetchrow("SELECT did FROM ".$dl_prefix."_screenshots 
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
		$fields['uploaded'] = 0;
		if (ereg('://', $url)) {
			$dl_info = get_fileinfo($url);
			if (!isset($dl_info['size'])) {
				$warnings[] = sprintf(_DLP_FAIL2GETINFO, $url);
			}
		} else {
			if (ereg('\.\.', $url) || preg_match("/[\\:*?\"<>|]/i", $url)) {
				$warnings[] = sprintf(_DLP_INVALIDFNAME, $url);
			} elseif (!file_exists($url)) {
				$warnings[] = sprintf(_DLP_FAIL2GETINFO, $url);
			}
		}
		return $fields;
	}

	public static function add($dl_id, &$warnings, &$errors, $pad=null)
	{
		global $db, $dl_prefix, $dl_config, $module_name, $userinfo, $MAIN_CFG;
		if (isset($_FILES['upload_image']) && is_uploaded_file($_FILES['upload_image']['tmp_name'])) {
			if (!$dl_config['upl_image'] && !can_admin($module_name)) { die('Screenshot uploading has been disabled'); }
			$extensions = split(' ', $dl_config['ext_image']);
			$file_name = strtolower(trim($_FILES['upload_image']['name']));
			$extension = substr(strrchr($file_name, '.'), 1);
			$mimetype = $_FILES['upload_image']['type'];
			$filesize = $_FILES['upload_image']['size'];
			if ($filesize > $dl_config['size_image']) {
				$warnings[] = sprintf(_DLP_FILETOOBIG, notate_size($dl_config['size_image']));
			} elseif ($filesize < 1) {
				$warnings[] = _DLP_FILETOOSMALL;
			}
			if (preg_match('#[\\/:*?\"<>|]#', $file_name)) { $warnings[] = sprintf(_DLP_INVALIDFNAME, $file_name); }
			if (!in_array($extension, $extensions)) { $warnings[] = _DLP_EXTFORBIDDEN; }
//			$thumb_name = $dl_config['path_image'].'/thumb_'.$userinfo['user_id']."_$file_name";
			$file_name = $dl_config['path_image'].'/'.$userinfo['user_id']."_$file_name";
			$thumb_name = preg_replace('#\.'.$extension.'$#', "_thumb.$extension", $file_name);
			if (file_exists($file_name) || file_exists($thumb_name)) {
				if ($row = $db->sql_ufetchrow("SELECT did FROM ".$dl_prefix."_screenshots 
						WHERE url LIKE '%$file_name%'", SQL_NUM)) {
					$errors[] = sprintf(_DLP_FILEASSOC, URL::index('&amp;file=details&amp;id='.$row[0]));
				} else {
					$errors[] = _DLP_FILEEXISTS;
				}
			}
			if (empty($warnings) && empty($errors)) {
				require_once('includes/classes/cpg_file.php');
				if (CPG_File::move_upload($_FILES['upload_image'], $file_name)) {
					$imginfo = getimagesize($file_name);
					if (is_bool($imginfo) || empty($imginfo)) {
						$errors[] = _DLP_INVALIDFILE;
					} else {
						$MAIN_CFG['imaging']['type'] = 'gd2';
						require_once('includes/imaging/imaging.inc');
						$extension = image_type_to_extension($imginfo[2], false);
						$extensions = split(' ', $dl_config['ext_image']);
						if (!in_array($extension, $extensions)) {
							$warnings[] = _DLP_EXTFORBIDDEN;
						}
					}
					if (empty($warnings) && empty($errors)) {
						$ratio = max((max($imginfo[0], $imginfo[1]) / $dl_config['dimension_thumb']), 1.0);
						$t_info[0] = ceil($imginfo[0] / $ratio);
						$t_info[1] = ceil($imginfo[1] / $ratio);
						$ratio = max((max($imginfo[0], $imginfo[1]) / $dl_config['dimension']), 1.0);
						$f_info[0] = ceil($imginfo[0] / $ratio);
						$f_info[1] = ceil($imginfo[1] / $ratio);
						$t_info['quality'] = $f_info['quality'] = $dl_config['quality'];
						if ($dl_config['watermark']) {
							$t_info['watermark']['text'] = $f_info['watermark']['text'] = $MAIN_CFG['server']['domain'];
						} else {
							$t_info['watermark'] = $f_info['watermark'] = false;
						}
						if (!Graphic::resize($file_name, $t_info, $thumb_name, $imginfo)) {
							$errors[] = _DLP_FILEERROR;
						}
						if (!Graphic::resize($file_name, $f_info, $file_name, $imginfo)) {
							$errors[] = _DLP_FILEERROR;
						} else {
							$fields['url']      = $file_name;
							$fields['uploaded'] = 1;
						}
					}
					if (!empty($warnings) || !empty($errors)) { unlink($file_name); }
				} else { $warnings[] = _DLP_FILEERROR; }
			}
		} elseif (!empty($_POST['image']) || !empty($pad)) {
			$fields = self::check((empty($_POST['image']) ? $pad : $_POST['image']), $warnings, $errors);
		}
		if (empty($warnings) && empty($errors) && isset($fields)) {
			$db->sql_query("INSERT INTO ".$dl_prefix."_screenshots
			(did, url, uploaded)
			VALUES ($dl_id, '"
				.Fix_Quotes($fields['url'])."', "
				.intval($fields['uploaded']).")");
			return true;
		}
		return false;
	}

	public static function update($image_id, $dl_id, $new_url, &$warnings, &$errors)
	{
		global $db, $dl_prefix;
		$image_id = intval($image_id);
		if ($image = $db->sql_ufetchrow("SELECT * FROM ".$dl_prefix."_screenshots 
				WHERE id=$image_id", SQL_ASSOC)) {
			$same_url = ($new_url == $image['url']);
			if ($image['did'] == $dl_id && (!$same_url || !$image['uploaded'])) {
				$fields = self::check($new_url, $warnings, $errors, $same_url);
				if (empty($warnings) && empty($errors)) {
					$db->sql_query("UPDATE ".$dl_prefix."_screenshots 
						SET url='".Fix_Quotes($new_url)."', uploaded='0' 
						WHERE id=$image_id");
					if (!$same_url && $image['uploaded']) {
						unlink($image['url']);
						$extension = substr(strrchr(basename($image['url']), '.'), 1);
						$thumb = preg_replace('#\.'.$extension.'$#', "_thumb.$extension", $image['url']);
						unlink($thumb);
					}
				}
			}
		}
	}

	public static function delete($image_id, $dl_id)
	{
		global $db, $dl_prefix;
		$result = $db->sql_query('SELECT id, did, uploaded, url 
			FROM '.$dl_prefix.'_screenshots 
			WHERE '.(($image_id == 'all') ? 'did='.intval($dl_id) : 'id='.intval($image_id)));
		while ($image = $db->sql_fetchrow($result, SQL_ASSOC)) {
			if ($image['did'] == $dl_id) {
				$db->sql_query("DELETE FROM ".$dl_prefix."_screenshots 
					WHERE id=".intval($image['id']));
				if ($image['uploaded']) {
					unlink($image['url']);
					$extension = substr(strrchr(basename($image['url']), '.'), 1);
					$thumb = preg_replace('#\.'.$extension.'$#', "_thumb.$extension", $image['url']);
					unlink($thumb);
				}
			}
		}
	}

	public static function output_list($dl_id, $default)
	{
		global $db, $dl_prefix, $cpgtpl, $dl_config, $module_name;
		if (!$dl_config['upl_image'] && !can_admin($module_name)) return 0;
		$a = 0;
		$result = $db->sql_uquery("SELECT * FROM ".$dl_prefix."_screenshots 
			WHERE did=$dl_id 
			ORDER BY url");
		while ($image = $db->sql_fetchrow($result, SQL_ASSOC)) {
			$a++;
			$cpgtpl->assign_block_vars('dl_image', array(
				'NUM' => $a,
				'ID'  => $image['id'],
				'URL' => $image['url'],
				'VALID' => (!ereg('://', $image['url']) && file_exists($image['url'])),
				'SELECT' => ($image['id'] == $default || ($a == 1 && !$default)) ? 'checked="checked"' : ''
			));
		}
		return $a;
	}

}
