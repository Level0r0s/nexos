<?php
/***********************************************************
GameServers Version 2.0.2 for PHP-Nuke 7.5+
By Neil Myers http://www.voicesinmyhead.net
Powered by gameq by Tom Buskens http://gameq.sourceforge.net
Released under the GNU General Public License
************************************************************
Ported to CPG Dragonfly™ CMS by:
djdevon3, SCROFT, and DssTrainer

Special Thanks to DJMaze who showed us the meaning of;
give a man a fish, he will eat for a day...
Teach a man to fish, he will eat for life.
***********************************************************/
if (!defined('CPG_NUKE')) { exit; }
define("_GSVER","Game Servers 2.0.2");
define("_MINUTE","Minute");
define("_MINUTES","Minutes");
define("_BLOCKSW","Blocks +pic");
define("_GSALIST","Advanced List");
define("_GSSLIST","Simple List");
define("_GSILIST","List +Icon");
define("_REMSOURCE","Remote Source Link");
define("_GSSNUM","Servers Queried: ");
define("_GSADMIN","Admin");
define("_GSADMINC","Configure Module");
define("_GSEDIT","Edit this Server");
define("_GSACTIVE","Activate");
define("_GSDEACTIVE","Deactivate");
define("_DEACTIVATED","Deactivated");
define("_GSDEL","Delete");
define("_NOSERVERS","No Servers Configured");
define("_MODULENAME","Game Servers");
define("_GAMENAME","Game Name");
define("_ICON","Icon");
define("_SERVERNAME","Server Name");
define("_HOSTADDRESS","Host Address");
define("_MAPNAME","Current Map");
define("_MAP","Map");
define("_STATS","Statistics");
define("_MAPLIST","Map List");
define("_CAMPAIGN","Campaign");
define("_GAMETYPE","Game Type");
define("_PLAYERS","Players");
define("_PASSREQY","Required");
define("_PASSREQN","Not Required");
define("_GAMEMODE","Game mode");
define("_LOCALCHAR","Allow Local Characters");
define("_LEVELMINMAX","Level Range");
define("_PVP","Player vs Player");
define("_ONEPARTY","Only One Party");
define("_PAUSE","Player Pause");
define("_CHARNAME","Character Name");
define("_SVERSION","Server Version");
define("_LEGALCHAR","Enforce Legal Characters");
define("_ITEMRESTRICT","Item restriction");
define("_MODDETAILS","Module details for");
define("_PLAYERLIST","Playerlist");
define("_PLAYER","Player");
define("_CHAR","Character");
define("_LEVEL","Level");
define("_NOPLAYERS","There are no players online.");
define("_BADQUERY","The selected server did not return a readable response.");
define("_SERVERTYPE","Server Type");
define("_DEDICATED","Dedicated");
define("_NDEDICATED","Non-Dedicated");
define("_LINUX","Linux");
define("_WINDOWS","Windows");
define("_UNKNOWN","Unknown");
define("_MOD","Modified");
define("_GAMEDIR","Mod Folder");
define("_INFO","Information");
define("_TIME","Time");
define("_DEATHS","Deaths");
define("_MODDL","Mod Download Information");
define("_INVALID","The server id specified is invalid.");
define("_VEHICLEMODE","Vehicle Mode");
define("_PREMATCHWAIT","Pre-Match Wait Time");
define("_SPAWNTIME","Spawn Time");
define("_TEAMDAMAGE","Team Damage");
define("_CLASS","Class");
define("_ARTIFACT","Artifact");
define("_MOREINFO","More Info...");
define("_GSMAILSUB","A server has failed multiple queries and been deactivated at ");
define("_GSMAILMES1","The server titled '");
define("_GSMAILMES2","' has Failed to answer multiple queries and has been Auto-Deactived.");
define("_TIMELIMIT","Time Limit");
define("_MINPLAYERS","Minimum Players");
define("_BOTSKILL","Bot Skill Level");
define("_CHGLEVELS","Change Levels");
define("_ADMINNAME","Admin Name");
define("_MAXSCORE","Max. Score");
define("_MAXTEAMS","Max. Teams");
define("_BALTEAMS","Server Balance Teams");
define("_PBALTEAMS","Players Balance Teams");
define("_FF","Friendly Fire");
define("_VFF","Vehicle Friendly Fire");
define("_SFF","Soldier Friendly Fire");
define("_GAMESPEED","Game Speed");
define("_TRANSLOCATOR","Translocator");
define("_WEAPONSTAY","Weapon Stay");
define("_ADMININFO","Admin Info");
define("_LOCATION","Location");
define("_WWW","Website");
define("_CPU","CPU");
define("_MAXLIVES","Max. Lives");
define("_ALLOWANON","Allow Anonymous Players");
define("_TOURNAMENT","Tournament");
define("_GAMESTYLE","Game Style");
define("_PLAYERNAME","Player Name");
define("_BADCODE","ERROR: Invalid remote query code");
define("_GAMEFLAGS","Game Flags");
define("_HOSTEDBY","Game Hosted by");

define("_DM","DeathMatch");
define("_DOM","Domination");
define("_CTF","Capture The Flag");
define("_AS","Assualt");
define("_VS"," Vs. ");
define("_ARENA","Arena");
define("_RABBIT","Rabbit");
define("_FUEL","Fuel");

define("_PING","Ping");
define("_FRAGS","Frags");
define("_SCORE","Score");
define("_RACE","Race");
define("_MUTATORS","Mutators");
define("_FRAGLIMIT","Frag Limit");
define("_CAPLIMIT","Flag Capture Limit");
define("_POINTLIMIT","Point Limit");
define("_ALLOWDOWNLOADS","Allow Downloads");
define("_PUNKBUSTER","Punkbuster");
define("_TEAM0SCORE","Team 0 Score");
define("_TEAM1SCORE","Team 1 Score");
define("_MISSIONTIME","Mission Time");
define("_TKPENALTY","Team Kill Penalty");
define("_BROUNDS","Between Round Time");
define("_TERRORIST","Terrorists");
define("_BOMBTIME","Bomb Time");
define("_MAPTIME","Map Time");
define("_RADAR","Radar");
define("_CURRENTROUND","Current Round");
define("_NUMTEAMS","Number of Teams");
define("_NUMROUNDS","Number of Rounds");
define("_OFFICIAL","Official Server");
define("_GAMESPERMAP","Games per Map");
define("_POINTSKILL","Points per kill");
define("_POINTSWIN","Points needed to win");
define("_POINTSDEATH","Point lost by dying");
define("_POWERUPS","Powerups");
define("_TIMELEFT","Time Left");
define("_TEAMPLAY","Team Play");
define("_DOWNLOADS","Downloads");
define("_SIZE","Size");
define("_OPTIONS","Options");
define("_INSTAGIB","Insta-Gib");
define("_INFAMMO","Infinite Ammo");
define("_HEALTH","Heath");
define("_INTAUGS","Initial Augmentations");
define("_AUGSPER","Augmentations Per Kill");
define("_SKILLSA","Available Skills");
define("_SKLLPER","Skills Per Kill");
define("_MOTD","Message of the Day");
define("_RSARMPATCH","Arm Patches");
define("_ASEJOIN","Join Server useing All-Seeing Eye http://www.udpsoft.com/eye2");

//UT2K4 RPG MOD STUFF
define("_2K4RPGVERSION","UT2004RPG Version");
define("_2K4RPGSTARTLV","Starting Level");
define("_2K4RPGSPPLEVL","Stat Points Per Level");
define("_2K4RPGAVGLEVL","Current Avg. Level");
define("_2K4RPGHIGHLEV","Highest Level Player");
define("_2K4RPGMAGWEAP","Magic Weapon Chance");
define("_2K4RPGMAGSTRT","Magical Starting Weapons");
define("_2K4RPGRTIFCTS","Artifacts");

//UT2K4 MONSTER INV STUFF
define("_2K4SMPVERSION","Satore Monster Pack Version");
define("_2K4SMPINIWAVE","Initial Wave");
define("_2K4SMPFINWAVE","Final Wave");
define("_2K4SMPIRONMAN","Ironman Mode");
define("_2K4SMPAMLEVEL","Auto Adjust Monster Level");
define("_2K4SMPMADJUST","Monster Adjustment Factor");

//UT2K4 RED ORCHESTRA
define("_2K4ROVERSION","Red Orchestra Version");
define("_2K4ROFFDAMLIMIT","Friendly Damage Limit");
define("_2K4ROFFKILLIMIT","Friendly Kill Limit");
define("_2K4ROFFPUNISH","Friendly Kill Punishment");

//UT2K4 DEATHBALL
define("_2K4DBVOLLEYGOALS","Only Volley Goals");
define("_2K4DBLONGSHOTS","Long Shots");
define("_2K4DBIMPEDEBALL","Impede Ballcarrier");
define("_2K4DBGOALLIMIT","Goal Limit");
define("_2K4DBOVERTIME","Overtime Time");
define("_2K4DBENDGAME","Endgame Type");
define("_2K4DB2GOALSWIN","Need 2 Goals Lead for Win");
define("_2K4DBSHORTRESET","Short Reset");
define("_2K4DBMAXHOLD","Keeper Max Hold Time");
define("_2K4DBSELFGOAL","Max. Selfgoals");

//UT2K4 ALIENSWARM
define("_2K4AOVERSION","AlienSwarm Version");
define("_2K4AOINBREIF","In Briefing");
define("_2K4AOMIDGAME","Midgame Joins");
define("_2K4AOCAMPAIGN","Campaign Game");

//UT2K4 MISC STUFF
define("_2K4LINKSETUP","Link Setup");
define("_2K4ENDDELAY","End Time Delay");
define("_2K4BRTLOC","Ball Drains Translocator");
define("_2K4WEBSCOREBOARD","Web Scoreboard");
define("_2K4RLIMIT","Round Limit");
define("_2K4RTLIMIT","Round Time Limit");
define("_2K4RTDELAY","Reset Time Delay");
define("_2K4RFREQ","Reinforcements Freq");
define("_2K4PRACTICE","Practice Time Limit");
define("_2K4FULLAMMO","Full Ammo");
define("_2K4PICKUPS","Allow Pickups");
define("_2K4ADRENAL","Allow Adrenaline");
define("_2K4SWEAPONS","Allow SuperWeapons");
define("_2K4FRESPAWN","Force Respawn");
define("_2K4H4KILLS","Health For Kills");
define("_2K4CAMPERA","Camper Alarm");
define("_2K4CAMPERR","Camper Rewarn Interval");
define("_2K4CAMPERT","Idle Time Before Camping Alarm");
define("_2K4BFEEDER","Bottom Feeder");


//varibles in AA im unsure about
define("_ENEMY","enemy?");
define("_KIA","kai?");
define("_ROE","roe?");
define("_HONOR","honor?");
define("_GOAL","goal?");
define("_LEADER","leader?");

// for Starsiege [RA] Butterbean
define("_TDM","Team DeathMatch");
define("_FVEH","Factory Vehicle");
define("_TL","Tech Limit");
define("_SL","Spawn Limit");
define("_ATM","Allow Techmix");
define("_CL","Combat Limit");
define("_ML","Mass Limit");
define("_DIP","Drop in Progress.");
define("_GIP","Game in Progress.");

//Navigation
define("_ADDSERVER","Add server");
define("_SERVERLIST","Server list");
define("_GSCONFIG","Configure");
define("_GSMAINT","Maintenance");

//General
define("_GSUPDATE","Update server");
define("_ENABLED","Enabled");
define("_DISABLED","Disabled");

//Status changes
define("_GSREACTIVATE","Are you sure you want to reactivate this server and clear the failure times from the database?");
define("_REACTNOCLEAR","Just Reactivate server (server may be auto-deactivated again)");

//Server list tab
define("_GSKEY","Status Key:");
define("_GSTATG","Server is Activated and has recorded no failures. Click to Deactivate");
define("_GSTATY","Server is Activated but has recorded failures. Click to Deactivate");
define("_GSTATX","Server has been Auto Deactivated due to too many failures. Click for Options");
define("_GSTATD","Server is Deactivated. Click to Activate");
define("_GSIDNUM","ID#");
define("_GSNAME","Server name");
define("_GSENGINE","Engine");
define("_GSGAME","Icon");
define("_GSPORT","Port");
define("_GSADDRESS","Address");

//Add/Edit/Delete Server
define("_GSCOMPLETE","<b>Configuration updated</b>");
define("_GSDBERR","<b>ERROR: Configuration not updated</b>");
define("_GSINCOMPLETE","Some required data was not entered.<br>Please check your input and try again.");
define("_GSDELETE","WARNING: Are you sure you want to delete this server?");
define("_UPDATECONFIG","Update configuration");
define("_GSFAILA","Auto-deactivation on fail");

//Configuration tab
define("_GSLISTCHG","Allow users to change list type");
define("_GSSTYPE","Simple Types Only");
define("_GSATYPE","All Types ");
define("_GSADVTYPE","Default List Type");
define("_GSLIST","Advanced");
define("_GSLISTI","Advanced +Icon");
define("_GSSSLIST","Simple +Icon");
define("_GSBLOCK2","2 Blocks per row");
define("_GSBLOCK3","3 Blocks per row");
define("_GSBLOCK4","4 Blocks per row");
define("_GSBLOCK2M","2 Blocks per row +Map Picture");
define("_GSBLOCK3M","3 Blocks per row +Map Picture");
define("_GSBLOCK4M","4 Blocks per row +Map Picture");
define("_GSEMAIL","Notify e-mail");
define("_INLIST","In list");
define("_INBLOCK","In block");
define("_GSLISTICON","Show icon");
define("_GSLISTNAME","Show server title when advanced listing is enabled");
define("_GSCACHETIME","How long should stats be cached?");
define("_GSMINUTES","Minutes");
define("_GSHOURS","Hours");
define("_GSDEBUG","Debug Mode (Admins only)");
define("_GSTAGS","Color tags in player and server names");
define("_GSDOWNLOADS","Downloads list");
define("_GSREM","Relocate GameQ to remote server");
define("_GSREMEX","See readme.htm for more info");
define("_GSREMPATH","Path");
define("_GSREMCODE","Querycode");
define("_GSFAIL","Deactivate a server if it fails ");
define("_GSFAILT","Times within");
define("_GSFAILTIMES","Times that server failed<sup>*</sup>");
define("_GSFAILTIMESEX","<sup>*</sup> The server may have failed more times before it was deactivated, the times listed are only the times that where current at the time of deactivation.");

//Maintenance tab
define("_CLEARF","Clear Fails");
define("_CLEARS","Clear Stats");
define("_ACTIVA","Activate all");
define("_DACTVA","Deactivate all");
define("_IMPORT","Import");
define("_EXPORT","Export");
define("_IMPORTED"," Servers Imported");
define("_RDACT","Remove Deactivated");
define("_RIACT","Remove Inactive");
define("_CLEARFEX1","This Option will clear all fails for this server.");
define("_CLEARFEX","This Option will clear all fails for all servers but will not reactivate servers that were automatically deactivated.");
define("_CLEARSEX","This Option will clear all cached statistics for all servers. This will increase serverlist page render times but can be usefull for troubleshooting");
define("_ACTIVAEX","This Option will Activate all servers in the list including servers that were automatically deactivated.");
define("_DACTVAEX","This Option will Deactivate all servers in the list.");
define("_IMPORTEX","This Option allows you to import csv data from another install of "._GSVER);
define("_EXPORTEX","This Option allows you to export csv data to another install of "._GSVER);
define("_RDACTEX","This Option will Remove all Deactivated servers from the list.");
define("_RIACTEX","This Option will Remove all Inactive servers from the list.");
define("_GSDELEX","This Option will Remove all database entries for "._GSVER);
define("_YOUSURE","Are you Sure you want to proceed?");

?>