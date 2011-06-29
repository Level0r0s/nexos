<?php
/*	MA CVS, Copyright (c) 2006 by DJMaze and Akamu. All rights reserved.

	Please read the included LICENSE.txt for the terms and
	conditions that govern your use of this software.

	$Revision: 1.1 $
*/
error_reporting(0);

include('config.php');

$file = isset($_GET['f'])?$_GET['f']:null; # file/dir
$urlcrumb = '/ <a href="'.$basehref.'">cvs</a>';

# check if cvs dir/file is valid else redirect
if (!empty($file)) {
	if (ereg('\.\.',$file)) $file = '';
	$crumbs = explode('/',$file);
	$count = count($crumbs);
	if (substr($file,-1) == '/') $count--;
	$file = '';
	for ($i=0; $i<$count; ++$i) {
		if (is_dir($cvsrep.$file.$crumbs[$i])) {
			$file .= $crumbs[$i].'/';
		} else if (!is_file($cvsrep.$file.$crumbs[$i].',v') || in_array($crumbs[$i],$conf['hidefiles'])) {
			header('Location: '.$basehref.$file);
			exit;
		} else {
			$file .= $crumbs[$i];
		}
		if ($i < $count-1) {
			$urlcrumb .= ' / <a href="'.$basehref.$file.'">'.$crumbs[$i].'</a>';
		} else {
			$urlcrumb .= ' / '.$crumbs[$i];
		}
	}
	if ($file != $_GET['f']) {
		header('Location: '.$basehref.$file);
		exit;
	}
}

# load engine
include('include/cvscmd.inc');
include('include/textutil.php');
if (!isset($conf['lang'])) $conf['lang'] = 'en_us';
include('lang/'.$conf['lang'].'.php');

$pagetitle = '/cvs/'.$file;
if (!isset($_GET['g'])) {
	include('header.php');
}

if (!empty($file) && substr($file,-1) != '/') {
	require('include/file.inc');
	go_file($file);
} else {
	require('include/browse.inc');
	go_browse($file);
}
?>
</div>
<?php
if (eregi('languages|l10n',$_SERVER['QUERY_STRING'])) {
	echo '<p>Language notes have been compilied by Akamu from <a href="http://www.ethnologue.com">ethnologue.com</a>';
}
?>
<br /><br /><div align="center" class="footmsg"><a href="/credits.html">Code Credits</a> - <a href="/privacy_policy.html">Privacy Policy</a></div>
</body></html>
