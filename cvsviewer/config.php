<?php
/*	MA CVS, Copyright (c) 2006 by DJMaze and Akamu. All rights reserved.

	Please read the included LICENSE.txt for the terms and
	conditions that govern your use of this software.

	$Revision: 1.1 $
*/

$cvsrep = '/cvs/';   # the repository directory
$basehref = '/cvs/'; # http base url

$conf['lang']   = 'en_us';
$conf['bin']    = 'tar|gz|tgz';
$conf['plain']  = 'htm|html|txt';
$conf['script'] = 'php';
$conf['images'] = 'gif|jpg|jpeg|png|ico';
$conf['hidedirs'] = array('.','..','tmp','CVSROOT','CVS','Attic');
$conf['hidefiles'] = array('.bashrc','.bash_profile','.bash_logout','.owner','.perms');
$conf['cvs_cmd'] = 'cvs -n';
