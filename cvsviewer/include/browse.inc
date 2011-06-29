<?php
/*	MA CVS, Copyright (c) 2006 by DJMaze and Akamu. All rights reserved.

	Please read the included LICENSE.txt for the terms and
	conditions that govern your use of this software.

	$Revision: 1.2 $
*/
function listall($dir, &$dirs, &$files, &$totalsize)
{
	global $cvsrep, $conf;
	$totalsize=0;
	$folder = $cvsrep.$dir;
	$handle = opendir($folder);
	while ($file=readdir($handle))
	{
		if (is_dir($folder.$file) && !in_array($file,$conf['hidedirs']))
		{
			$dirs[] = $file;
		}
		else if (is_file($folder.$file) && substr($file,-2) == ',v' && !in_array($file,$conf['hidefiles']))
		{
			$fsize = filesize($folder.$file);
			$totalsize += $fsize;
			$file = substr($file,0,-2);
			$rev = CVSCmd::getRevision($dir.$file);
			$files['name'][] = $file;
			$files['ext'][] = strtolower(substr(strrchr($file, '.'), 1));
			$files['size'][] = $fsize;
			$files['rev'][]  = $rev['rev'];
			$files['auth'][] = $rev['auth'];
			$files['date'][]  = $rev['date'];
			$files['lines'][] = $rev['lines'];
			$files['comment'][]  = $rev['comment'];
		}
	}
	closedir($handle);
	sort($dirs);
}

function drawdirs($listing, $dir='')
{
	global $cvsrep, $basehref, $up_one_level, $file;
	$elements = count($listing);   
	$color = '';
	if (ereg('/',$dir))
	{
		$color = 'dir1';
		$dirlist = split('/',$dir);
		$dirs = count($dirlist);
		for ($i=0; $i<$dirs-2; $i++) { $link .= $dirlist[$i].'/'; }
		echo '<tr class="dir1"><td colspan="8">
		<img align="absmiddle" src="'.$basehref.'images/back.gif" border="0" alt=""> <a href="../" title="'.$up_one_level.'">..</a>
		</td></tr>';
	}
	include('dirdesc.inc');
	for ($i=0; $i<$elements; $i++)
	{
		$color=($color=='dir1')?'dir2':'dir1';
		if (isset($desc[$file.$listing[$i]])) {
			echo "<tr class=\"$color\"><td colspan=\"7\" valign=\"top\">";
			$dirdesc = '<td>'.$desc[$file.$listing[$i]].'</td>';
		} else {
			echo "<tr class=\"$color\"><td colspan=\"8\">";
			$dirdesc = '';
		}
		echo '<img align="absmiddle" src="'.$basehref.'images/dir.gif" border="0" alt="">
		<a href="'.$listing[$i].'/">'.$listing[$i]."</a>
		</td>$dirdesc</tr>";
	}
}

function drawfiles($listing, $dir='')
{
	global $cvsrep, $basehref;
	$elements = count($listing['name']);  
	$color = '';
	$rgb_file1 = 'file1';
	$rgb_file2 = 'file2';
	$rgb_tm1 = '#DD0000';
	$rgb_tm2 = '#DDA000';
	$rgb_tm3 = '#00BB00';
	$rgb_tm4 = '#000000';
	for ($i=0; $i<$elements; $i++)
	{
		$color=($color==$rgb_file1)?$rgb_file2:$rgb_file1;
		echo "<tr class=\"$color\" ><td>";
		# file name
		echo '<img align="absmiddle" src="'.$basehref.'images/'.imgtype($listing['name'][$i]).'" border="0" alt=""> ';
		echo '<a href="'.$listing['name'][$i].'">'.$listing['name'][$i].'</a>';
		# rev
		echo '</td><td nowrap="nowrap">'.$listing['rev'][$i].'</td>';
		# age
		$secs = time() - strtotime(str_replace("/","-",$listing['date'][$i]).($listing['date'][$i]>22?"":" UTC"));
		$tmcolor=$secs<3600*12?$rgb_tm1:($secs<3600*48?$rgb_tm2:($secs<3600*24*7?$rgb_tm3:$rgb_tm4));
		echo '<td nowrap="nowrap" align="right">'."<font color=$tmcolor>".textutil::timetoreadable($listing['date'][$i]).'</font></td>';
		# file size
		echo '</td><td nowrap="nowrap" align="right">'.textutil::formatsize($listing['size'][$i]).'</td>';
		# author
		echo '<td nowrap="nowrap">'.htmlspecialchars($listing['auth'][$i]).'</td>';
		# lines
		$temp = explode(' ',$listing['lines'][$i]);
		echo '</td><td nowrap="nowrap" align="right">'.$temp[0].'</td>';
		echo '</td><td nowrap="nowrap" align="right">'.$temp[1].'</td>';
		# last log
		echo '<td>';
		echo nl2br(htmlspecialchars($listing['comment'][$i]));
		echo "</td></tr>\n";
	}
}

function go_browse($file)
{
	global $LNG;
	$sort = isset($_GET['s'])?$_GET['s']:null; # s=int file/age/size
	$totalsize = 0;
	$dirs = $files = array();

	listall($file, $dirs, $files, $totalsize);

	if (count($files['name']) > 0) {
		if ($sort == 0 && !isset($_SERVER['WINDIR'])) {
			array_multisort($files['name'],$files['ext'],$files['rev'],$files['auth'],$files['date'],$files['size'],$files['lines'],$files['comment']);
		} else if ($sort == 1) {
			array_multisort($files['ext'],$files['name'],$files['rev'],$files['auth'],$files['date'],$files['size'],$files['lines'],$files['comment']);
			$sort = 0;
		} else if ($sort == 2) {
			array_multisort($files['date'],SORT_DESC,$files['name'],$files['ext'],$files['rev'],$files['auth'],$files['size'],$files['lines'],$files['comment']);
		} else if ($sort==3) {
			array_multisort($files['size'],SORT_DESC,$files['name'],$files['ext'],$files['rev'],$files['auth'],$files['date'],$files['lines'],$files['comment']);
		}
	}
?>
	<table width="100%" border="0" cellspacing="1" cellpadding="0">
	<tr bgcolor="#E0E0E0" align="center">
<?php
	for ($i=0; $i<8; ++$i)
	{
		if ($i==$sort) {
			echo '<td bgcolor="#80F0F0"'.(($i==0)?' width="150"':'').'>'.$LNG['browse_headers'][$i];
		} else if ($i==0||$i==2||$i==3) {
			echo '<td'.(($i==0)?' width="150"':'').'><a href="?s='.$i.'">'.$LNG['browse_headers'][$i].'</a>';
		} else if ($i == 7) {
			echo '<td width="60%">'.$LNG['browse_headers'][$i];
		} else {
			echo '<td>'.$LNG['browse_headers'][$i];
		}
		echo '</td>';
	}
	echo "</tr>\n";
	drawdirs($dirs, $file);
	drawfiles($files, $file);
	# output stats
	global $dir_total_info, $dir_num_info, $dir_has_file, $file_num_info;
	if (count($dirs) || count($files)) {
		echo '<tr><td colspan="8"><br/></td></tr>
		<tr><td colspan="8" class="filebox">
		<center>'.$dir_total_info;
		if (count($dirs)) {
			printf($dir_num_info,count($dirs));
			if (count($files['name'])) echo $dir_has_file;
		}
		if (count($files['name'])) {
			printf($file_num_info,count($files['name']));
			echo '(<b>'.textutil::formatsize($totalsize).'</b>)';
		}
		echo '</center></td></tr>';
	}
	echo '</table>';
}

function imgtype($file)
{
	$ext = strtolower(substr(strrchr($file, '.'), 1));
	switch ($ext) {
		case 'gif':
		case 'png':
		case 'jpg':
		case 'jpeg':
		case 'ico':
			return 'type_image.gif';
		case 'htm':
		case 'html':
		case 'xhtml':
			return 'type_html.gif';
		case 'php':
		case 'inc':
			return 'type_php.gif';
		case 'htc':
		case 'css':
		case 'js':
			return 'type_script.gif';
		case 'htaccess':
			return 'type_apache.gif';
	}
	return 'file.gif';
}
