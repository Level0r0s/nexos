<?php
/*	MA CVS, Copyright (c) 2006 by DJMaze and Akamu. All rights reserved.

	Please read the included LICENSE.txt for the terms and
	conditions that govern your use of this software.

	$Revision: 1.1 $
*/

class textutil
{
	function timetoreadable($date, $long = false)
	{
		$secs = time() - strtotime(str_replace('/','-',$date)).(strlen($date)>22?'':' UTC');
		if ($long) return textutil::formattime('%y %m %w %d %h %i %s', $secs);
		return textutil::formattime('%x',$secs);
	}

	function formatsize($size)
	{
		$sizename = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
		$i = floor(log($size, 1024));
		return round($size/pow(1024, $i), 2).' '.$sizename[$i];
	}

	function formattime($format, $secs)
	{
		global $LNG;

		$desc = array(31536000 => 'year',
				2628000 => 'month',
				604800 => 'week',
				86400 => 'day',
				3600 => 'hour',
				60 => 'minute',
				1 => 'second');
		foreach ($desc as $k => $s) {
			$rest = floor($secs/$k);
			if ($rest > 0) { $secs -= ($rest*$k); }
			$$s=$rest;
		}

		if ($year>0) {
			$format = str_replace('%y', $year.$LNG['year'][intval($year==1)], $format);
			$format = str_replace('%x', $year.$LNG['year'][intval($year==1)], $format);
		}
		$format = str_replace('%y','', $format);
		if ($month>0) {
			$format = str_replace('%m', $month.$LNG['month'][intval($year==1)], $format);
			$format = str_replace('%x', $month.$LNG['month'][intval($year==1)], $format);
		}
		$format = str_replace('%m','', $format);
		if ($week>0) {
			$format = str_replace('%w', $week.$LNG['week'][intval($year==1)], $format);
			$format = str_replace('%x', $week.$LNG['week'][intval($year==1)], $format);
		}
		$format = str_replace('%w','', $format);
		if ($day>0) {
			$format = str_replace('%d', $day.$LNG['day'][intval($year==1)], $format);
			$format = str_replace('%x', $day.$LNG['day'][intval($year==1)], $format);
		}
		$format = str_replace('%d','', $format);
		if ($hour>0) {
			$format = str_replace('%h', $hour.$LNG['hour'][intval($year==1)], $format);
			$format = str_replace('%x', $hour.$LNG['hour'][intval($year==1)], $format);
		}
		$format = str_replace('%h','', $format);
		if ($minute>0) {
			$format = str_replace('%i', $minute.$LNG['minute'][intval($year==1)], $format);
			$format = str_replace('%x', $minute.$LNG['minute'][intval($year==1)], $format);
		}
		$format = str_replace('%i','', $format);
		if ($second>0) {
			$format = str_replace('%s', $second.$LNG['second'][intval($year==1)], $format);
			$format = str_replace('%x', $second.$LNG['second'][intval($year==1)], $format);
		}
		$format = str_replace('%s','', $format);
		return trim(str_replace('%x','', $format));
	}
}
