<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dragonfly: <?php echo $pagetitle; ?></title>
<META NAME="DESCRIPTION" CONTENT="Dragonfly CMS CVS" />
<META NAME="KEYWORDS" CONTENT="CPG-Nuke, Dragonfly, CVS, source, download, repository, update, fix, fixes" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="EXPIRES" CONTENT="0" />
<meta name="RESOURCE-TYPE" content="DOCUMENT" />
<meta name="DISTRIBUTION" content="GLOBAL" />
<meta name="AUTHOR" content="DJ Maze and Akamu" />
<meta name="COPYRIGHT" content="Copyright (c) 2004-2006 by Dragonfly CMS" />
<meta name="ROBOTS" content="index, follow" />
<meta name="RATING" content="GENERAL" />
<meta name="GENERATOR" content="Dragonfly CMS - Copyright(c) 2004-2006 by http://dragonflycms.org" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/themes/default/style/style.css" type="text/css" />
<link rel="stylesheet" href="/themes/w3c.css" type="text/css" />
<link href="<?php echo $basehref; ?>style.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#E5E5E5" text="#000000" link="#006699" vlink="#5493B4">
<table class="headtable">
  <tr><td><table class="head">
    <tr>
      <td width="212" align="left"><a href="/index.php"><img src="/images/logo.gif" border="0" alt="Dragonfly CMS logo" /></a></td>
      <td width="100%" align="center">
      <span style="color: #FFFFFF;">Server sponsored and hosted by</span><br />
      <a href="http://dedicatednow.com/" target="_blank"><img src="/images/banners/dednow.gif" alt="DedicatedNOW" border="0" /></a>
      </td>
      <td width="212" align="right"><img src="<?php echo $basehref; ?>images/cvslogo.gif" alt="CVS logo" /></td>
      <td width="33">&nbsp;</td>
    </tr>
  </table></td></tr>
  <tr><td class="headmenu">.:: <a href="/">Home</a>
        :: <a href="/Docs.html">Dev. Resources</a>
        :: <a href="/Forums.html">Forums</a>
        ::.
  </td></tr>
</table>
<table class="forumline" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
  <tr><th class="thHead">Dragonfly CMS CVS Repository</th></tr>
  <tr><td class="cat">&nbsp;Location: <b><?php echo $urlcrumb; ?></b></td></tr>
</table>
<div class="table1">
This is a web interface to the Dragonfly CMS CVS tree. You can browse the file hierarchy by picking directories. If you pick a file, you will see the revision history for that file.<br/>
Selecting a revision number will show that revision of the file. There are links at each revision to display diffs, annotate and download.<br/>
<strong>Note:</strong> Info about CVS and our commits can be found at our <a href="/Forums/viewforum/f=28.html">CVS Info Forum</a>
<?php
if (eregi('(languages|l10n)',$_SERVER['QUERY_STRING'])) {
 echo '<p>To download a full language pack, please use our free anonymous cvs, more information in our forums...</p>';
}?>
</div>
<div class="table1">
