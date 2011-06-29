<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/czech/news.php,v $
  $Revision: 9.6 $
  $Author: estlane $
  $Date: 2009/02/26 16:57:12 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
#define('_PRINTER','Vytisknout stránku');
define('_FRIEND','Poslat tento článek známým');
define('_YOURNAME','Vae jméno');
define('_RELATED','Příbuzné odkazy');
define('_MOREABOUT','Více o');
define('_NEWSBY','Novinky od');
define('_MOSTREAD','Nejčtenějí článka o');
define('_READMORE','Více...');
define('_BYTESMORE','bytů');
define('_COMMENTSQ','komentáře?');
define('_COMMENT','komentář');
define('_CONFIGURE','Nastavení');
define('_LOGINCREATE','Přihlásit/Vytvořit účet');
define('_THRESHOLD','Práhy');
define('_NOCOMMENTS','Bez komentáře');
define('_NESTED','Vkládané');
define('_FLAT','Patra');
define('_THREAD','Strom');
define('_OLDEST','Nejdříve starí');
define('_NEWEST','Nejdříve novějí');
define('_HIGHEST','Nejdříve s nejvyím skóre');
define('_COMMENTSWARNING','Za obsah komentáře zodpovídá jeho autor.');
define('_SCORE','Skóre:');
define('_USERINFO','O uivateli');
define('_READREST','Přečíst zbytek komentáře...');
define('_REPLY','Odpovědět');
define('_REPLYMAIN','Poslat komentář');
define('_NOSUBJECT','Chybí předmět');
define('_NOANONCOMMENTS','Není povoleno posílat komentáře anonymně, prosím <a href="'.getlink('Your_Account&amp;file=register').'">registrijte se</a>');
define('_PARENT','Nadřazený');
define('_ROOT','Hlavní');
define('_UCOMMENT','Komentář');
define('_ALLOWEDHTML','Povolit HTML:');
define('_POSTANON','Poslat anonymně');
define('_EXTRANS','Extrans (html tagy do textu)');
define('_HTMLFORMATED','HTML formátování');
define('_PLAINTEXT','Prostý text');
define('_ONN','na...');
define('_COMMENTREPLY','Komentář');
define('_COMREPLYPRE','Prohlédnout komentář');
define('_NOTRIGHT','S touto funkcí není něco v pořádku.');
define('_SENDAMSG','Poslat zprávu');
define('_YOUSENDSTORY','Polete tento článek');
define('_TOAFRIEND','těmto známým:');
define('_FYOURNAME','Vae jméno:');
define('_FYOUREMAIL','Vá e-mail:');
define('_FFRIENDNAME','Adresátovo jméno(v 5.pádě):');
define('_FFRIENDEMAIL','Adresátův e-mail:');
define('_INTERESTING','Zajímavé články na');
define('_YOURFRIEND','Vá přítel');
define('_CONSIDERED','se domnívá, e by vás mohl tento článek zajímat a rozhodl se vám ho poslat.');
define('_FDATE','Datum:');
define('_FTOPIC','Téma:');
define('_YOUCANREAD','Dalí zajímavé články si můete přečíst na');
define('_FSTORY','článek');
define('_HASSENT','byl odeslán');
define('_THANKS','Díky!');
define('_RECOMMEND','Doporučte tuto stránku známým');
define('_PDATE','Datum:');
define('_PTOPIC','Téma:');
define('_COMESFROM','Tento článek najdete na');
define('_THEURL','Adresa tohoto článku je:');
define('_NEWUSER','Nový uivatel');
define('_OPTIONS','Monosti');
define('_REFRESH','Obnovit');
define('_NOCOMMENTSACT','Sorry, Comments are not available for this article.');
define('_ARTICLEPOLL','Article\'s Poll');
define('_RATEARTICLE','Article Rating');
define('_RATETHISARTICLE','Please take a second and vote for this article:');
define('_CASTMYVOTE','Cast my Vote!');
define('_AVERAGESCORE','Average Score');
define('_BAD','Bad');
define('_REGULAR','Regular');
define('_GOOD','Good');
define('_VERYGOOD','Very Good');
define('_EXCELLENT','Excellent');
define('_ARTICLERATING','Article Rating');
define('_THANKSVOTEARTICLE','Thanks for voting for this article!');
define('_ALREADYVOTEDARTICLE','Sorry, you already voted for this article recently!');
define('_BACKTOARTICLEPAGE','Back to Article\'s Page');
define('_DIDNTRATE','You didn\'t select any score for the article!');
define('_NOINFO4TOPIC','Sorry, there isn\'t information for the selected topic.');
define('_GOTONEWSINDEX','Go to News Index');
define('_SELECTNEWTOPIC','Select a New Topic');
define('_GOTOHOME','Go to Home');
define('_SEARCHONTOPIC','Search on This Topic');
define('_SEARCHDIS','Search Discussion');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ARTICLEADMIN','Articles/Stories');
define('_ADDARTICLE','Add New Article');
define('_EDITARTICLE','Edit Article');
define('_USERPROFILE','User Profile');
define('_EMAILUSER','Email User');
define('_SENDPM','Send Private Message');
define('_SELECTTOPIC','Select Topic');
define('_PUBLISHINHOME','Publish in home?');
define('_ACTIVATECOMMENTS','Activate comments for this story?');
define('_DISPLAY_ORDER','Display Order');
define('_NORMAL','Normal');
define('_TOP_MOST','Top Most');
define('_STORYTEXT','Story Text');
define('_ARESUREURL','(Are you sure you included a URL? Did you test it for typos?)');
define('_NOTES','Notes');
define('_PROGRAMSTORY','Do you want to schedule this story to be published at a later date?');
define('_NOWIS','It is currently');
define('_HAS','has');
define('_DELETESTORY','Delete Story');
define('_PREVIEWSTORY','Preview Story');
define('_POSTSTORY','Post Story');
define('_CATEGORIESADMIN','Categories');
define('_CATEGORYADD','Add a New Category');
define('_CATEGORYNAME','Category Name');
define('_ASELECTCATEGORY','Select Category');
define('_NOARTCATEDIT','You can\'t edit <i>Articles</i> Category');
define('_DELETECATEGORY','Delete Category');
define('_SELECTCATDEL','Select a Category to Delete');
define('_CATDELETED','Category Deleted!');
define('_NOTAUTHORIZED1','You aren\'t authorized to touch this Article!');
define('_NOTAUTHORIZED2','You can\'t edit and/or delete articles that you haven\'t published');
define('_REMOVESTORY','Are you sure that you want to remove Story ID #');
define('_AUTOSTORYEDIT','Edit Automated Story');
define('_CHNGPROGRAMSTORY','Select new date for this Story:');
define('_GOTOADMIN','Go to Admin Section');
define('_ALLSTORIES','ALL stories under');
define('_STORIESINSIDE','stories inside');
define('_DELCATWARNING1','You can Delete this Category and ALL its stories and comments');
define('_DELCATWARNING2','or you can Move ALL the stories to a New Category.');
define('_DELCATWARNING3','What do you want to do?');
define('_YESDEL','Yes! Delete ALL!');
define('_NOMOVE','No! Move my Stories');
define('_MOVESTORIES','Move Stories to a New Category');
define('_MOVEDONE','Congratulations! The move has been completed!');
define('_WILLBEMOVED','will be moved.');
define('_SUBMISSIONSADMIN','Stories Submissions');
define('_NEWSUBMISSIONS','New Stories Submissions');
define('_NOSUBMISSIONS','No New Submissions');
define('_ATTACHAPOLL','Attach a Poll to this article');
define('_LEAVEBLANKTONOTATTACH','(Leave blank to post the article without any attached Poll)<br/>(NOTE: Scheduled articles cannot have attached polls)');

define('_CATADDED','New Category Added!');
