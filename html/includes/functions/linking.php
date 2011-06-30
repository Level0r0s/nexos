<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/includes/functions/linking.php,v $
  $Revision: 9.36 $
  $Author: estlane $
  $Date: 2009/10/06 20:28:07 $
**********************************************/
function depricated_warning() {
	$backtrace = debug_backtrace();
	$callee = $backtrace[1];
	$function = $callee['function'];
	trigger_error("DEPRECATED call to <a href=\"http://dragonflycms.org/$function\">$function</a>() by {$callee['file']} on line {$callee['line']}.", E_USER_WARNING);
}

function getlink($url='', $UseLEO=true, $full=false)
{
	depricated_warning();
	return URL::index($url, $UseLEO, $full);
}

function adminlink($url='', $full=false)
{
	depricated_warning();
	return URL::admin($url, $full);
}

function encode_url($url)
{
	depricated_warning();
	return URL::encode($url);
}

function url_refresh($url='', $time=3)
{
	depricated_warning();
	URL::refresh($url, $time);
}

function url_redirect($url='', $redirect=false)
{
	depricated_warning();
	URL::redirect($url, $redirect);
}

function get_uri()
{
	depricated_warning();
	return URL::uri();
}

function get_fileinfo($url, $detectAnim=false, $getdata=false, $lastmodified=0)
{
	$rdf = parse_url($url);
	if (!isset($rdf['host'])) return false;
	if (!isset($rdf['path'])) $rdf['path'] = '/';
	if (!isset($rdf['port'])) $rdf['port'] = 80;
	if (!isset($rdf['query'])) $rdf['query'] = '';
	elseif ($rdf['query'] != '') $rdf['query'] = '?'.$rdf['query'];
	$file = array('size'=>0, 'type'=>'', 'date'=>0, 'animation'=>false, 'modified'=>true);
	if ($fp = fsockopen($rdf['host'], $rdf['port'], $errno, $errstr, 4)) {
		fputs($fp, 'GET '.$rdf['path'].$rdf['query']." HTTP/1.0\r\n");
		fputs($fp, 'User-Agent: Dragonfly File Reader ('.URL::index('credits', true, true).")\r\n");
		if ($lastmodified > 0) fputs($fp, 'If-Modified-Since: '.date('D, d M Y H:i:s \G\M\T', $lastmodified)."\r\n");
		if (GZIPSUPPORT) fputs($fp, "Accept-Encoding: gzip;q=0.9\r\n");
		fputs($fp, "HOST: $rdf[host]\r\n\r\n");
		$data = rtrim(fgets($fp, 300));
		preg_match('#.* ([0-9]+) (.*)#i', $data, $head);
		// 301 = Moved Permanently, 302 = Found, 307 = Temporary Redirect
		if (($head[1] >= 301 && $head[1] <= 303) || $head[1] == 307) {
			while (!empty($data)) {
				$data = rtrim(fgets($fp, 300)); // read lines
				if (false !== stripos($data, 'Location: ')) {
					$new_location = trim(str_ireplace('Location: ', '', $data));
					break;
				}
			}
			$head[2] .= ($head[1]==302) ? ' at' : ' to';
			fputs($fp,"Connection: close\r\n\r\n"); fclose($fp);
			trigger_error("$url $head[2] <b>$new_location</b>", E_USER_WARNING);
			return get_fileinfo($new_location, $detectAnim, $getdata);
		} elseif ($lastmodified > 0 && $head[1] == 304) {
			# file isn't modifed since $lastmodified
			$file['modified'] = false;
			fputs($fp,"Connection: close\r\n\r\n"); fclose($fp);
			return $file;
		} elseif ($head[1] != 200) {
			fputs($fp,"Connection: close\r\n\r\n"); fclose($fp);
			trigger_error($url."<br />$data", E_USER_WARNING);
			return false;
		}
		$file['utf8'] = $GZIP = false;
		// Read all headers
		while (!empty($data)) {
			$data = rtrim(fgets($fp, 300)); // read lines
			if (false !== stripos($data, 'Content-Length: ')) {
				$file['size'] = trim(str_ireplace('Content-Length: ', '', $data));
			}
			elseif (false !== stripos($data, 'Content-Type: ')) {
				$file['type'] = trim(str_ireplace('Content-Type: ', '', $data));
			}
			elseif (false !== stripos($data, 'Last-Modified: ')) {
				$file['date'] = trim(str_ireplace('Last-Modified: ', '', $data));
			}
			$GZIP = ($GZIP || 0 < preg_match('#Content-Encoding: (x-)?gzip#i', $data));
			$file['utf8'] = ($file['utf8'] || false !== stripos($data, 'charset=utf-8'));
		}

		$data = '';
		if ($getdata || ($detectAnim && false !== strpos($file['type'], 'image/'))) {
			while(!feof($fp)) {
				$data .= fread($fp, 1024); // read binary
			}
			if ($GZIP) { $data = gzinflate(substr($data,10,-4)); }
			if ($getdata) $file['data'] = $data;
			// Animation detection thanks to PerM
			if ($detectAnim && false !== strpos($file['type'], 'image/')) {
//				if (preg_match('/NETSCAPE2.0/', $data))
				$data = preg_split('/\x00[\x00-\xFF]\x00\x2C/', $data); // split GIF frames
				$file['animation'] = (count($data) > 2); // 1 = header, 2 = first/main frame
			}
		}
		fputs($fp,"Connection: close\r\n\r\n");
		fclose($fp);
	} else {
		trigger_error($errstr, E_USER_WARNING);
		return false;
	}
	return $file;
}

function get_rss($url)
{
	trigger_error('The function get_rss() is deprecated in Dragonfly. Please change your call to CPG_RSS::read()', E_USER_WARNING);
	require_once(CORE_PATH.'classes/rss.php');
	return CPG_RSS::read($url);
}
