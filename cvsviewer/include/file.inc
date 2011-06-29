<?php
/*	MA CVS, Copyright (c) 2006 by DJMaze and Akamu. All rights reserved.

	Please read the included LICENSE.txt for the terms and
	conditions that govern your use of this software.

	$Revision: 1.2 $
*/
function revinfo($file, $rev, $rev1='')
{
	global $LNG;
	printf($LNG['name']."\n", htmlspecialchars($file));
	$info = CVSCmd::getRevision($file, $rev);
	printf('<br />'.$LNG['rev'], $rev1.(($rev1!='')?' => ':'').$rev);
	printf($LNG['date'], htmlspecialchars(textutil::timetoreadable($info['date'],true)));
	printf($LNG['auth']."<br />\n", htmlspecialchars($info['auth']));
	if (isset($info['lines'])&&($info['lines']!='+0 -0')) {
		printf($LNG['line'].'<br />', $info['lines']);
	}
	printf("\n".$LNG['comment'], nl2br(htmlspecialchars($info['comment'])));
	echo "<hr noshade />\n";
}

function fileheader($file)
{
	global $LNG;
	printf($LNG['name']."\n", htmlspecialchars($file));
	$info = CVSCmd::getHeader($file);
	printf('<br />'.$LNG['rev'], $info['head']);
	echo '<br />'.$info['revisions'].'<br />';
	printf("\n".$LNG['comment'], nl2br(htmlspecialchars($info['comment'])));
	echo "<hr noshade />\n";
}

function go_file($file)
{
	global $cvsrep, $basehref, $conf, $LNG;

	if (is_file($cvsrep.$file.',v'))
	{
		# default = file revisions log
		if (isset($_GET['d']))	    # diff		d=this-other
		{
			$revs = explode('-', $_GET['d']);
			revinfo($file, $revs[0], $revs[1]);
			$type = explode('.', $file);
			$type = strtolower(array_pop($type));
			if (eregi($conf['images'], $type)) {
				echo '<table border="1"><tr>
				<th>'.$revs[1].'</th><th>'.$revs[0].'</th>
			</tr><tr>
				<td><img src="'.$basehref.$file."?g=$revs[1]\"></td><td><img src=\"".$basehref.$file."?g=$revs[0]\"></td>
			</tr></table>";
			} else {
				echo CVSCmd::Diff($file, $revs[0], $revs[1]);
			}
		}
		else if (isset($_GET['a'])) # annotate	a=revision
		{
			revinfo($file, $_GET['a']);
			CVSCmd::Annotate($file, $_GET['a']);
		}
		else if (isset($_GET['v'])) # view		v=revision
		{
			$rev = $_GET['v'];
			revinfo($file, $rev);
			$type = explode('.', $file);
			$type = strtolower(array_pop($type));
			if (eregi($conf['images'], $type)) {
				echo '<center><img src="'.$basehref.$file."?g=$rev\"></center>";
			} else {
				$info = CVSCmd::Checkout($file, $rev, $count);
				if (ereg('.php$|.inc$', $file)) $info = highlight_string($info, true);
				else $info = '<code>'.nl2br(ereg_replace("\t", '&nbsp; &nbsp; ', ereg_replace('  ', '&nbsp; ', htmlspecialchars($info,ENT_NOQUOTES,'UTF-8')))).'</code>';
//				else $info = nl2br(htmlspecialchars($info,ENT_NOQUOTES,'UTF-8'));
				echo '<table border="0"><tr><td align="right" bgcolor="#CCCCCC">';
				for ($i=1; $i<=$count; $i++) {
					echo "<a name=\"$i\" href=\"#$i\">$i</a><br />";
				}
				echo '</td><td valign="top" nowrap="nowrap">'.$info.'</td></tr></table>';
			}
		}
		else if (isset($_GET['g'])) # download	g=revision
		{
			$type = explode('.', $file);
			$type = strtolower(array_pop($type));
			$binary = false;
			if (ereg($conf['images'], $type)) {
				$binary = true;
				if ($type == 'jpg') $type = 'jpeg';
				$type = 'image/'.$type;
			} else if (ereg($conf['bin'], $type)) {
				$type = 'application/octet-stream';
			} else {
				$type = 'text/plain';
			}
			header("Content-type: $type");
			header('Content-Disposition: attachment; filename='.basename($file));
			echo CVSCmd::Checkout($file, $_GET['g'], $count, $binary);
			exit;
		}
		else if (isset($_GET['history'])) # history	h=*
		{
			fileheader($file);
			$info = CVSCmd::History($file);
			echo '<table  class="forumline" cellspacing="1" width="100%">';
			foreach ($info as $rev => $i)
			{
				echo '<tr><td><a href="'.$basehref.$file."?v=$rev\"><b>$rev</b></a></td>";
				echo "<td>". htmlspecialchars($i['author']). '</td><td>';
				printf($LNG['date'],htmlspecialchars(textutil::timetoreadable($i['date'],true)));
				echo '</td><td><a href="'.$basehref.$file."?v=$rev\">view</a> | ";
				echo '<a href="'.$basehref.$file."?a=$rev\">annotate</a> | ";
				echo '<a href="'.$basehref.$file."?g=$rev\">download</a></td></tr>\n";
			}
			echo "</table>\n";
		}
		else
		{
			$branch = (isset($_GET['b']) ? $_GET['b'] : '');
			$info = CVSCmd::getRevisions($file, $branch);
			$head = array_shift($info);
			$j=1;
			$revs=array_keys($info);
			$rgb_h1="filehead";
			$rgb_h2="filehead";
			$rgb_cmt="#E0E0E0";
			$rgb_none="#FFFFFF";
			echo $head['revisions'];
			echo '<table  class="forumline" cellspacing="1" width="100%">';
			foreach ($info as $rev => $i)
			{
				echo "<tr class=\"filehead\"><td width=\"30%\">";
				echo '<a href="'.$basehref.$file."?v=$rev\" class=\"filehead\"><b>$rev</b></a>";
				echo " by <b>". htmlspecialchars($i['auth']). '</b></td><td align="right">';
				echo '<a href="'.$basehref.$file."?v=$rev\" class=\"filehead\">view</a> | ";
				echo '<a href="'.$basehref.$file."?a=$rev\" class=\"filehead\">annotate</a> | ";
				echo '<a href="'.$basehref.$file."?g=$rev\" class=\"filehead\">download</a></td>\n</tr>";
				echo "<tr bgcolor=\"$rgb_cmt\"><td valign=\"top\" class=\"filebox\">";
				echo htmlspecialchars($i['date']);
				printf($LNG['date'],htmlspecialchars(textutil::timetoreadable($i['date'])));
				echo '<br/>';
				if (isset($i['lines'])&&($i['lines']!="+0 -0"))
				{
					printf($LNG['line'].'<br />', $i['lines']);
					if (isset($revs[$j])) {
						printf('<a href="'.$basehref.'%s?d=%s-%s">'.$LNG['diff'].'</a><br />', $file, urlencode($rev), urlencode($revs[$j]), $revs[$j]);
					}
				}
				if (!empty($i['branches'])) {
					$branches = array();
					foreach ($i['branches'] as $branch) {
						$branches[] = '<a href="'.$basehref.$file."?b=$branch\">$branch</a>";
					}
					echo '<br />Branches: '.implode(', ', $branches);
					unset($branches);
				}
				$j++;
				echo '<br/></td><td valign="top" class="filebox">';
				echo nl2br(htmlspecialchars($i['comment']));
				echo '<br/></td></tr>';
				if ($rev != '1.1') echo '<tr><td><br/></td></tr>';
			}
			echo "</table>\n";
		}
	}
} 
