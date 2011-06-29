<?php
/*	MA CVS, Copyright (c) 2006 by DJMaze and Akamu. All rights reserved.

	Please read the included LICENSE.txt for the terms and
	conditions that govern your use of this software.

	$Revision: 1.1 $
*/

function rrevcmp($a, $b) {
	return strnatcmp($b, $a);
}

class CVSCmd
{
	function getHeader(&$file)
	{
		global $conf, $cvsrep;
		if (is_array($file)) {
			$log =& $file;
		} else {
			# -h header only
			# -t header+description only
			$f = escapeshellcmd($file);
			$cmd = $conf['cvs_cmd']." -Q -d \"$cvsrep\" rlog -t \"$f\" 2>&1";
			exec($cmd,$log);
			if (!empty($log[0])) die(print_r($log));
			else array_shift($log);
		}
		if (empty($log)) return null;
		$header = NULL;

		# retrieve head info
		# [8] => keyword substitution: kv cederqvist chapter 12
		while ($line = array_shift($log)) {
			if (ereg('^([^:]+): *(.*)$', $line, $regs)) {
				if ($regs[1] == 'RCS file') {
					$header['RCS'] = $regs[2];   # => RCS file: /cvs/html/index.php,v
				} elseif ($regs[1] == 'head') {
					$header['head'] = $regs[2];   # => head: 8.15
				} elseif ($regs[1] == 'branch') {
					$header['branch'] = $regs[2]; # => branch:
				} elseif ($regs[1] == 'locks') {
					$header['locks'] = $regs[2];  # => locks: strict
				} elseif ($regs[1] == 'access list') {
					$header['access'] = $regs[2]; # => access list:
				} elseif ($regs[1] == 'symbolic names') {
					# => symbolic names:
					# => cpg83-AfterSept11: 1.25.0.2
					while (ereg("^\t([^:]*): (.*)$", $log[0], $regs)) {
						$header['tags'][$regs[1]] = $regs[2];
						array_shift($log);
					}
				} elseif ($regs[1] == 'total revisions') {
					$header['revisions'] = 'total revisions: '.$regs[2]; # => total revisions: 56;	selected revisions: 56
				} elseif ($regs[1] == 'description') {
					# [10] => description:
					# [11] => ----------------------------
					while (!empty($log) && !ereg('^(-+|=+)$', $log[0])) {
						$header['description'] .= ereg_replace("\n$", ' ', $log[0]);
						array_shift($log);
					}
				}
			} elseif (ereg('^(-+|=+)$', $line)) {
				return $header;
			}
		}
		return $header;
	}

	function getRevisions($file, $rev='')
	{
	# -rX   or -rX.X.X   select branch
	# -rX.X or -rX.X.X.X select file
/*
-N no tags ('symbolic names')
-r
	rev1:rev2 Revisions rev1 to rev2 (which must be on the same branch).
	rev1::rev2 The same, but excluding rev1.

	:rev
	::rev Revisions from the beginning of the branch up to and including rev.

	rev: Revisions starting with rev to the end of the branch containing rev.
	rev:: Revisions starting just after rev to the end of the branch containing rev.

	branch An argument that is a branch means all revisions on that branch. like:  -r8.0.0
	branch1:branch2
	branch1::branch2 A range of branches means all revisions on the branches in that range.
	branch. The latest revision in branch.
*/
		global $conf, $cvsrep;
		$f = escapeshellcmd($file);
		if ($rev == 'all') {
			$revision = '';
		} elseif ($rev == 'latest') {
			$revision = '-r';
		} elseif ($rev != '') {
			$revision = '-r'.escapeshellcmd($rev);
		} else {
			$revision = '-b'; # latest branch (8.x)
		}
		$cmd = $conf['cvs_cmd']." -Q -d \"$cvsrep\" rlog $revision -N \"$f\"";
		exec($cmd,$log);
		if (!empty($log[0])) die(print_r($log));
		else array_shift($log); # remove empty line

		$info = NULL;

		# get head info
		$info['head'] = CVSCmd::getHeader($log);
		# remove head info
//		while (!ereg('^-+$', $log[0]) && !empty($log)) { array_shift($log); }
//		array_shift($log);

		$i = 0;
		$lines = count($log);
		# retrieve log (commit) info
		while ($i < $lines) {
			# pick revision number
			# => revision 8.14
			if (!ereg('^revision *([0-9.]+)$', $log[$i], $regs)) break;
			$rev = $regs[1];
			$info[$rev]['rev'] = $regs[1];
			$i++;
			# pick IDs
			# => date: 2004/10/25 01:53:31;  author: djmaze;  state: Exp;  lines: +3 -3
			if (ereg('^date: ([0-9/-]+ [0-9:]+[^;]*);.* author: ([^;]+);.*$', $log[$i], $regs)) {
				$info[$rev]['date'] = $regs[1];
				$info[$rev]['auth'] = $regs[2];
			}
			if (ereg('lines: ([^;]+)', $log[$i], $regs)) {
				$info[$rev]['lines'] = $regs[1];
			}
			$i++;

			# pick branch
			# => branches:  8.0.0;
			$info[$rev]['branches'] = array();
			while ($i < $lines && ereg('^branches: *([0-9.]+)', $log[$i], $regs)) {
				foreach (split(';', $regs[1]) as $branch) {
					$info[$rev]['branches'][] = trim($branch);
				}
				$i++;
			}

			# pick comment lines
			$info[$rev]['comment'] = '';
			while ($i < $lines && !ereg('^(-+|=+)$', $log[$i]) )
				$info[$rev]['comment'] .= $log[$i++] . "\n";
			$i++;
		}
		# sort log entries
		uksort($info, 'rrevcmp');
		return $info;
	}

	function getRevision($file, $rev = '')
	{
		if ($rev == '') $rev = 'latest';
		$log = CVSCmd::getRevisions($file, $rev);
		array_shift($log);
		return array_shift($log);
	}

	function Checkout($file, $rev = '', &$count, $binary=false)
	{
		global $conf, $cvsrep;
		$file = escapeshellcmd($file);
		if ($rev != '') $rev = '-r '.escapeshellcmd($rev);
		$cmd = $conf['cvs_cmd']." -Q -d \"$cvsrep\" checkout $rev -p \"$file\"";
		if ($binary) {
			# load binary file
			if (!($RCS = popen("$cmd 2>&1", 'r'))) { return 'error'; }
			$lns = '';
			while ($ln = fread($RCS, 4096)) { $lns .= $ln; }
			fclose($RCS);
			return $lns;
		} else {
			exec($cmd,$lines);
			$count = count($lines);
			return implode("\n",$lines);
		}
	}

	function Diff($file, $rev, $rev1)
	{
		global $conf, $cvsrep;
		$file = escapeshellcmd($file);
		$rev = '-r '.escapeshellcmd($rev1).' -r '.escapeshellcmd($rev);
		$cmd = $conf['cvs_cmd']." -Q -d \"$cvsrep\" rdiff  -u $rev \"$file\"";
		exec($cmd, $lines);
		$return = '<pre>';
		for ($i=2;$i<count($lines);$i++) {
			$return .= '<div class="';
			if ($lines[$i][0] == '+') $return .= 'addl">';
			else if ($lines[$i][0] == '-') $return .= 'subl">';
			else if ($lines[$i][0] == '@') $return .= 'hunk">';
			else $return .= 'ctxt">';
			$return .= htmlspecialchars($lines[$i]);
			$return .= "\n</div>";
		}
		return $return.'</pre>';
	}

	# 2004-3-11 13:20 add by CZR
	function Annotate($file, $rev = '')
	{
		global $conf, $cvsrep;
		$topr = $rev[0];
		$file = escapeshellcmd($file);
		if ($rev != '') $rev = "-r $rev";
		$cmd = $conf['cvs_cmd']." -Q -d \"$cvsrep\" rannotate $rev \"$file\"";
		exec($cmd,$lines);

		foreach ($lines as $line) {
			# 1.1 (djmaze 15-Apr-04): <?php
			if (preg_match('/([\d\.]+)\s+\((.+)\s+(\d+-\w+-\d+)\):.(.*)$/', $line.' ', $regs)) {
				$entry['rev']	= $regs[1];
				$entry['author'] = $regs[2];
				$entry['date']   = $regs[3];
				$entry['line']   = $regs[4];
				$entries[] = $entry;
				$revs[($regs[1][0])][$regs[1]] = '';
			}
		}
		foreach ($revs as $trev => $vals) {
			uksort($vals, 'strnatcmp');
			$count = count($vals);
			$i = 0;
			foreach ($vals as $rev => $val) {
				$clr = dechex(255/$count*($count-$i));
				if ($rev[0] == $topr) {
					$colors[$rev] = $clr.'FF'.$clr; # white -> green
				} else {
					$clr1 = dechex(165+(80/$count*($count-$i)));
					$colors[$rev] = 'FF'.$clr1.$clr; # white -> orange
				}
				$i++;
			}
		}
		echo '<br />
<table width="100%" cellspacing="0" cellpadding="2" border="0" class="annotate-back">
 <tr class="annotate-header">
  <th align="right">#</th>
  <th align="left">Author</th>
  <th align="left">Rev</th>
  <th align="left">Line</th>
 </tr>';
		foreach ($entries as $lineno => $line) {
			echo '
 <tr>
  <td align="right" class="item1">'.($lineno+1).'</td>
  <td class="annotate-author">'.$line['author'].'</td>
  <td class="annotate-rev"><a href="'.$line['rev'].'">'.$line['rev'].'</a></td>
  <td bgcolor="#'.$colors[$line['rev']].'" nowrap="nowrap">
   <tt>'.((trim($line['line']) != '') ? htmlentities($line['line']) : '&nbsp').'</tt>
  </td>
 </tr>';
		}
		echo '</table>';
	}

	function History($file)
	{
		global $conf, $cvsrep;
		$file = escapeshellcmd($file);
		$cmd = $conf['cvs_cmd']." -Q -d \"$cvsrep\" history -a -c \"$file\" 2>&1";
		exec($cmd, $lines);
		$entries = array();
		foreach ($lines as $line) {
			# A 2004-09-14 17:41 +0000 djmaze 1.1	 modules.php documentation/phpnuke == <remote>
			if (preg_match('/([A-Z])\s+([0-9-]+ [0-9:]+ [0-9\+]+)\s+(.+)\s+([\d\.]+)\s+(.*)$/', $line, $regs)) {
				$entry['rev']	= $regs[4];
				$entry['author'] = $regs[3];
				$entry['date']   = $regs[2];
				$entries[$regs[4]] = $entry;
			}
		}
		uksort($entries, 'rrevcmp');
		return $entries;
	}

}
