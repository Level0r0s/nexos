<?php
/**********************************************************************
GameServers Version 2.0.2 for PHP-Nuke 7.5+
By Neil Myers http://www.voicesinmyhead.net
Powered by gameq by Tom Buskens http://gameq.sourceforge.net
Released under the GNU General Public License
***********************************************************************
Ported to CPG Dragonfly™ CMS by:
djdevon3, SCROFT, and DssTrainer

Special Thanks to "CPG-Nuke Dev Team" at dragonflycms.org,
dedicatednow.com who sponsors or CVS space, and DJMaze for teaching us;
give a man a fish, he will eat for a day...
Teach a man to fish, he will eat for life.
**********************************************************************/
if (can_admin('GameServers')) {
    $menuitems['_AMENU9']['GameServers']['URL'] = adminlink('GameServers');
    $menuitems['_AMENU9']['GameServers']['IMG'] = 'gameservers.gif';
}
?>