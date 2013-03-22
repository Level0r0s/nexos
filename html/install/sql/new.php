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
*/
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2007 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/install/sql/new.php,v $
  $Revision: 10.3 $
  $Author: djmaze $
  $Date: 2010/11/11 22:26:47 $
**********************************************/
if (!defined('INSTALL')) { exit; }

# insert default table data
$installer->add_query('INSERT', 'blocks', "1, 'file', '_MENU', '', '', 'l', 1, 1, 0, '', '', 'block-CPG_Main_Menu.php', 0, ''");
$installer->add_query('INSERT', 'blocks', "2, 'file', '_USER_INFO', '', '', 'l', 2, 1, 0, '', '', 'block-User_Info.php', 0, ''");
$installer->add_query('INSERT', 'blocks', "3, 'admin', '_ADMIN', '<img title=\"\" alt=\"\" src=\"images/arrow.gif\" /> <a href=\"{$adminindex}\">Administration</a><br /><img title=\"\" alt=\"\" border=\"0\" src=\"images/arrow.gif\" /> <a href=\"{$adminindex}?op=blocks\">Blocks Admin</a><br /><img title=\"\" alt=\"\" src=\"images/arrow.gif\" /> <a href=\"{$adminindex}?op=modules\">Modules Admin</a><br /><img title=\"\" alt=\"\" src=\"images/arrow.gif\" /> <a href=\"{$adminindex}?op=Forums\">Forum Admin</a><br /><img title=\"\" alt=\"\" src=\"images/arrow.gif\" /> <a href=\"{$adminindex}?op=Surveys&amp;mode=add\">New Survey</a><br /><img title=\"\" alt=\"\" src=\"images/arrow.gif\" /> <a href=\"{$adminindex}?op=News&amp;mode=add\">New Story</a>', '', 'l', 3, 1, 0, '', '', '', 2, ''");
$installer->add_query('INSERT', 'blocks', "4, 'file', 'Coppermine Stats', '', '', 'l', '4', '1', '0', '', '', 'block-CPG_Stats.php', '0', ''");
$installer->add_query('INSERT', 'blocks', "5, 'file', '_SELECTLANGUAGE', '', '', 'r', 1, 1, 0, '', '', 'block-Languages.php', 0, ''");
$installer->add_query('INSERT', 'blocks', "6, 'userbox', 'User\'s Custom Box', '', '', 'r', 2, 1, 0, '', '', '', 1, ''");
$installer->add_query('INSERT', 'blocks', "7, 'custom', 'All About Blocks', '[align=left]This is an example of a [b]block[/b]. Three different types of blocks exist in Dragonfly™: HTML, System, and File\r\n\r\nThis block is an example of an [b]HTML[/b] block. These blocks can be edited through the administration menu, under the Blocks option\r\n\r\nBlocks that are called through the /blocks folder are known as [b]File[/b] blocks. These blocks must be placed within this folder under a filename similar to block-*.php\r\n\r\nFinally, blocks that cannot be edited through the administration menu or through a file are known as [b]System[/b] blocks. By default, only two System blocks exist: \"Administration\" and \"User\'s Custom Box\"[/align]', '', 'l', 4, 1, 0, '', '', '', 0, ''");
$installer->add_query('INSERT', 'blocks', "8, 'custom', 'Button Links', '[align=center][url=http://dragonflycms.org][img]images/buttons/dragonfly_80x15.gif[/img][/url]\r\n\r\n[url=rss/news.php][img]images/buttons/xml_80x15.png[/img][/url]\r\n\r\n[url=http://jigsaw.w3.org/css-validator][img]images/valid_css.png[/img][/url]\r\n\r\n[url=http://validator.w3.org/check?uri=referer][img]images/valid_xhtml.png[/img][/url][/align]', '', 'r', 5, 1, 0, '', '', '', 0, ''");
$installer->add_query('INSERT', 'blocks', "9, 'file', '_SURVEY', '', '', 'r', 3, 1, 0, '', '', 'block-Survey.php', 0, ''");

$installer->add_query('INSERT', 'message', "1, 'Welcome to Dragonfly!', '[align=center]Thanks for downloading Dragonfly ".CPG_NUKE.". We hope you enjoy your new website!\r\n\r\nThis message can be removed easily through the [url={$adminindex}]administration menu[/url].[/align]', ".time().", 0, 1, 0, ''");

$installer->add_query('INSERT', 'stories', "1, 0, 'Dragonfly CMS Team', 'Welcome to Dragonfly CMS', ".time().", '[url=http://dragonflycms.org]Dragonfly CMS[/url] is a powerful CMS which delivers the features and bug fixes that you really need. Using Dragonfly, you will enjoy enhanced speed, security, and multiple integrated features. You\'ll instantly fall in love with its sleek interface, carefully designed modules, fast page loads, and high standards for security.\r\n\r\nThere are two flavors of Dragonfly ready for immediate deployment&mdash;the stable build and the CVS build. We recommend the stable build for production websites, but if you\'re feeling bold, try the CVS build, our latest and potentially greatest work. However, it could be unstable and may contain bugs. More information on our CVS can be found [url=http://dragonflycms.org/Wiki/id=40.html]here[/url].\r\n\r\nWe wish you luck with your new website, and thanks for joining our global community.\r\n\r\n[url=http://dragonflycms.org/Wiki/id=22.html]Dragonfly CMS Team[/url]', '', 0, 0, 1, 'Dragonfly CMS Team', '', 1, '', 0, 0, 0, 0, 0, '', 0");

$installer->add_query('INSERT', 'topics', "1, 'dragonfly.gif', 'Dragonfly™', 0");

$installer->add_query('INSERT', 'poll_desc', "1, 'My Dragonfly™ installation was...', ".time().", 0, '', 0, 0, 0");
$installer->add_query('INSERT', 'poll_data', "1, 'Straight-forward and simple', 0, 1");
$installer->add_query('INSERT', 'poll_data', "1, 'So easy even you could do it!', 0, 2");
$installer->add_query('INSERT', 'poll_data', "1, 'Confusing, but I made it!', 0, 3");
$installer->add_query('INSERT', 'poll_data', "1, 'My server had compatibility issues', 0, 4");
$installer->add_query('INSERT', 'poll_data', "1, 'I had to ask my friend to help me', 0, 5");
$installer->add_query('INSERT', 'poll_data', "1, 'My dog ate the docs', 0, 6");

$installer->add_query('UPDATE', 'config_custom', "cfg_value='".date('F j, Y')."' WHERE cfg_name='global' AND cfg_field='startdate'");
$installer->add_query('UPDATE', 'cpg_installs', "prefix=REPLACE(prefix,'\$prefix.','{$prefix}')");
$installer->add_query('UPDATE', 'modules_cat', "link='{$mainindex}' WHERE name='_HOME'");
