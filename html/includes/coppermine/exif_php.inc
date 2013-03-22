<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
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
/***************************************************************************  
   Coppermine 1.3.1 for CPG-Dragonfly™
  **************************************************************************
   Port Copyright (c) 2004-2005 CPG Dev Team
   http://dragonflycms.com/
  **************************************************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify       
   it under the terms of the GNU General Public License as published by       
   the Free Software Foundation; either version 2 of the License, or          
   (at your option) any later version.                                        
  **************************************************************************  
  Last modification notes:
  $Source: /cvs/html/includes/coppermine/exif_php.inc,v $
  $Revision: 10.0 $
  $Author: djmaze $
  $Date: 2010/11/05 01:03:18 $
****************************************************************************/
if (!defined('CPG_NUKE')) { die("You can't access this file directly..."); }
define("EXIF_CACHE_FILE", "exif.dat");

function exif_parse_fracval($val, &$num, &$den)
{
    $num = intval(strtok($val, "/"));
    $den = intval(strtok("/"));
} 

function exif_load_from_cache($filepath)
{
    $dir = dirname($filepath);
    $file = basename($filepath);

    if (!is_readable($dir . "/" . EXIF_CACHE_FILE)) return false;

    $exifDataArray = unserialize(fread(fopen($dir . "/" . EXIF_CACHE_FILE, 'rb'), filesize($dir . "/" . EXIF_CACHE_FILE)));

    return $exifDataArray[$file];
} 

function exif_save_to_cache($exifData, $filepath)
{
    $dir = dirname($filepath);
    $file = basename($filepath);

    if (!is_writable($dir)) return false;

    if (is_readable($dir . "/" . EXIF_CACHE_FILE))
        $exifDataArray = unserialize(fread(fopen($dir . "/" . EXIF_CACHE_FILE, 'rb'), filesize($dir . "/" . EXIF_CACHE_FILE)));

    $exifDataArray[$file] = $exifData;

    fwrite(fopen($dir . "/" . EXIF_CACHE_FILE, 'wb'), serialize($exifDataArray));
} 

function exif_parse_file($filename)
{
    if (!is_readable($filename)) return false;
    $size = getimagesize($filename);
    if ($size[2] != 2) return false; // Not a JPEG file
    $exif = exif_read_data($filename, 0, true);
    if (!$exif) return false;

    $exifParsed = array();

    $Make = isset($exif['IFD0']['Make']);
    $Model = isset($exif['IFD0']['Model']);
    if (isset($exif['IFD0']['Make']) && isset($exif['IFD0']['Model']))
        $exifParsed['Camera'] = $exif['IFD0']['Make'] . " - " . $exif['IFD0']['Model'];

    if (isset($exif['EXIF']['DateTimeDigitized']))
        $exifParsed['DateTaken'] = $exif['EXIF']['DateTimeDigitized'];

    if (isset($exif['EXIF']['FNumber'])) {
        exif_parse_fracval($exif['EXIF']['FNumber'], $num, $den);
        $exifParsed['Aperture'] = "f/" . $num / ($den ? $den : 1);
    } elseif (isset($exif['COMPUTED']['ApertureFNumber']))
        $exifParsed['Aperture'] = $exif['COMPUTED']['ApertureFNumber'];

    if (isset($exif['COMPUTED']['ExposureTime']))
        $exifParsed['ExposureTime'] = $exif['COMPUTED']['ExposureTime'];
    elseif (isset($exif['EXIF']['ExposureTime'])) {
        exif_parse_fracval($exif['EXIF']['ExposureTime'], $num, $den);
        $exTime = $num / ($den ? $den : 1);
        if ($exTime <= 0.5)
            $exifParsed['ExposureTime'] = sprintf("%0.3f s (1/%d)", $exTime, 1 / $exTime);
        else
            $exifParsed['ExposureTime'] = sprintf("%3.2f s", $exTime);
    } 

    if (isset($exif['EXIF']['FocalLength'])) {
        exif_parse_fracval($exif['EXIF']['FocalLength'], $num, $den);
        $exifParsed['FocalLength'] = sprintf("%d mm", $num / ($den ? $den : 1));
    } 

    if (isset($exif['COMMENT'])) {
        $exifParsed['Comment'] = '';
        foreach ($exif['COMMENT'] as $comment)
        $exifParsed['Comment'] .= ($exifParsed['Comment'] ? '<br />' : '') . $comment;
    } 

    return $exifParsed;
}