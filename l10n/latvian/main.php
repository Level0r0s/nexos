<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/latvian/main.php,v $
  $Revision: 9.32 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:53 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','lv');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S) %Z');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Nākamā lapa');
define('_PREVIOUSPAGE','Iepriekšējā lapa');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Meklēt');
define('_LOGIN','Ieiet');
define('_WRITES','raksti');
define('_POSTEDON','Ievietoja');
define('_NICKNAME','Lietotāja vārds');
define('_PASSWORD','Parole');
define('_WELCOMETO','Esi sveicināts');
define('_EDIT','Rediģēt');
define('_DELETE','Dzēst');
define('_POSTEDBY','Ievietoja');
define('_READS','lasījumi');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Atgriezties</a>' : '<a href="javascript:history.go(-1)">Atgriezties</a>').' ]');
define('_COMMENTS','komentāri');
define('_PASTARTICLES','Iepriekšējie raksti');
define('_OLDERARTICLES','Vecākie raksti');
define('_BY','pēc');
define('_ON','uz');
define('_LOGOUT','Beigt darbu');
define('_WAITINGCONT','Gaidošais saturs');
define('_WREVIEWS','Gaidošie apskati');
define('_WLINKS','Gaidošās saites');
define('_ONEDAY','Vienu dienu, kā šodien...');
define('_ASREGISTERED','Tev vēl nav konta? Tu vari <a href="'.getlink('Your_Account&amp;file=register').'">izveidot tādu</a>. Kā reģistrētam lietotājam Tev būs jaunas priekšrocības - tēmu pārvaldnieks, komentāru pārvaldība un iespēja ievietot komentārus ar savu vārdu.');
define('_MENUFOR','Izvēlne priekš');
define('_NOBIGSTORY','Šodienas lielākā raksta vēl nav');
define('_BIGSTORY','Šodienas lasītākais raksts ir:');
define('_SURVEY','Aptauja');
define('_POLLS','Aptaujas');
define('_PCOMMENTS','Komentāri:');
define('_RESULTS','Rezultāti');
define('_HREADMORE','lasīt tālāk...');
define('_CURRENTLY','Pašlaik ir,');
define('_GUESTS','viesi(s) un');
define('_MEMBERS','lietotāji(s), kuri atrodas tiešaistē.');
define('_YOUARELOGGED','Tu esi autorizējies kā');
define('_YOUHAVE','Tev ir');
define('_PRIVATEMSG','privātā(s) ziņa(s)');
define('_YOUAREANON','Tu esi anonīms lietotājs. Tu vari reģistrēties bezmaksas, sekojot <a href="'.getlink('Your_Account&amp;file=register').'">šai</a> saitei');
define('_NOTE','Piezīme:');
define('_ADMIN','Administrators');
define('_WERECEIVED','Mēs esam saņēmuši');
define('_PAGESVIEWS','lapas apskatus kopš');
define('_TOPIC','Tēma');
define('_UDOWNLOADS','Lejupielādes');
define('_VOTE','Balsot');
define('_VOTES','Balsis');
define('_MVIEWADMIN','Redzams tikai administratoriem');
define('_MVIEWUSERS','Redzams tikai reģistrētiem lietotājiem');
define('_MVIEWANON','Redzams tikai anonīmiem lietotājiem');
define('_MVIEWALL','Redzams visiem lietotājiem');
define('_EXPIRELESSHOUR','Beidzas atrāk kā pēc stundas');
define('_EXPIREIN','Beidzas pēc');
define('_UNLIMITED','Neierobežots');
define('_HOURS','Stundas');
define('_RSSPROBLEM','Ir problēmas ar RSS barotni no šīs tīmekļa lapas');
define('_SELECTLANGUAGE','Izvēlies valodu');
define('_SELECTGUILANG','Izvēlies saskarnes valodu');
define('_NONE','Neviens');
define('_BLOCKPROBLEM','<center>Izskatās, ka ar šo bloku ir problēmas</center>');
define('_BLOCKPROBLEM2','<center>Šim blokam nav satura</center>');
define('_MODULENOTACTIVE','Atvaino, bet šis modulis ir neaktīvs');
define('_NOACTIVEMODULES','Neaktīvie moduļi');
define('_MODULENOEXIST','Atvaino, bet tā lapa %s neeksistē');
define('_FORADMINTESTS','(Administratora testiem)');
define('_BBFORUMS','Forums');
define('_ACCESSDENIED','Pieeja liegta');
define('_RESTRICTEDAREA','Tu mēģini ieiet neatļautā zonā');
define('_MODULEUSERS','Atvainojiet, bet mēs esam rezervējuši šo zonu tikai <i>reģistrētiem lietotājiem</i><br /><br />');
define('_MODULEUSERS2','Tu vari reģistrēties bezmaksas, sekojot <a href="'.getlink('Your_Account&amp;file=register').'">šai</a> saitei, tā nodrošinot sev pieeju šai lapas daļai.<br /><br />Paldies par sapratni');
define('_MODULESADMINS','Atvaino, bet mēs esam rezervējuši šo zonu tikai saita <i>administrātoriem</i><br /><br />Paldies par sapratni');
define('_MODULESGROUPS','grupas pieeja liegta');
define('_HOME','Galvenā lapa');
define('_HOMEPROBLEM','Izskatās, ka galvenā lapa ir pazudusi');
define('_ADDAHOME','Piešķirt jaunu noklusēto galvenās lapas moduli');
define('_HOMEPROBLEMUSER','Mums ir problēmas ar mūsu sistēmu<br />Lūdzu apmeklē to vēlreiz tuvākajā laikā');
define('_MORENEWS','Vairāk jaunumu sadaļā');
define('_ALLCATEGORIES','Visas kategorijas');
define('_SPAMGUARDPROTECTED','SpamGuard ir aizliedzis šā e-pasta nosūtīšanu');
define('_M_CHARS','Maksimums: %s simboli');

define('_SYS_MESSAGE','Sistēmas ziņa');
define('_SYS_MESSAGES','Sistēmas ziņas');
define('_SYS_MAINTENANCE','Tu darbojies apkopes režīmā');
define('_SYS_DEMO','Tu darbojies administrācijas demonstrācijas režīmā<br />Tu nevari izmainīt datubāzi<br /><a href="'.adminlink('logout').'">Gribu iziet!</a>');

define('_DATE','Datums');
define('_HOUR','Stunda');
define('_UMONTH','Mēnesis');
define('_YEAR','Gads');
define('_JANUARY','Janvāris');
define('_FEBRUARY','Februāris');
define('_MARCH','Marts');
define('_APRIL','Aprīlis');
define('_MAY','Maijs');
define('_JUNE','Jūnijs');
define('_JULY','Jūlijs');
define('_AUGUST','Augusts');
define('_SEPTEMBER','Septembris');
define('_OCTOBER','Oktobris');
define('_NOVEMBER','Novembris');
define('_DECEMBER','Decembris');

define('_MONDAY','Pirmdiena');
define('_TUESDAY','Otrdiena');
define('_WEDNESDAY','Trešdiena');
define('_THURSDAY','Ceturtdiena');
define('_FRIDAY','Piektdiena');
define('_SATURDAY','Sestdiena');
define('_SUNDAY','Svētdiens');
//three letter abbrev.
define('_ABR_MONDAY','Pir');
define('_ABR_TUESDAY','Otr');
define('_ABR_WEDNESDAY','Tre');
define('_ABR_THURSDAY','Cet');
define('_ABR_FRIDAY','Pie');
define('_ABR_SATURDAY','Ses');
define('_ABR_SUNDAY','Svē');

define('_BWEL','Esi sveicināts,');
define('_BPM','Privātās Ziņas');
define('_BUNREAD','Nelasīts');
define('_BREAD','Izlasīts');
define('_BMEMP','Reģistrētie lietotāji');
define('_BLATEST','Jaunākais');
define('_BTD','Šodien reģistrējās');
define('_BYD','Vakar reģistrējās');
define('_BOVER','Kopumā');
define('_BVISIT','Cilvēki tiešsaistē');
define('_BVIS','Apmeklētāji');
define('_BMEM','Reģistrētie lietotāji');
define('_BTT','Kopumā');
define('_BON','Tiešsaistē šobrīd');
define('_BREG','Jauns konts');
define('_BROADCAST','Nosūtīt publisko paziņojumu');
define('_BROADCASTFROM','Publisko paziņojumu nosūtīja');
define('_TURNOFFMSG','Deaktivizēt publiskos paziņojumus');
define('_JOURNAL','Emuāri');
define('_READMYJOURNAL','Lasīt manus emuārus');
define('_ADD','Pievienot');
define('_YES','Jā');
define('_NO','Nē');
define('_INVISIBLEMODULES','Neredzamie moduļi');
define('_ACTIVEBUTNOTSEE','(Aktīva, bet neredzama saite)');
define('_BOTS','Boti');

define('_UM','Dragonfly autjaunošanas monitors');
define('_UM_F','Kļūda, savienojoties ar atjaunošanas servisu. Lūdzu, mēģini nedaudz vēlāk.');
define('_UM_G','Tu lieto jaunāko Dragonfly versiju');
define('_UM_R','Lūdzu, <a href="%2$s" target="_blank">atjauno</a> Dragonfly %1$s');

define('_TEAM','Komanda');
define('_LINKAPPROVEDMSG','Apsveicam! Tevis pievienotā tīmekļa saite ir apstiprināta.');
define('_MODREQLINKS','Iesūtītās saites');
define('_BROKENLINKS','Nestrādājošās saites');
define('_MODREQDOWN','Iesūtītās lejupielādes');
define('_BROKENDOWN','Nestrādājošās lejupielādes');
define('_PAGEGENERATION','Lapas ielāde:');
define('_SECONDS','sekundes');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Lapas ielādes ilgums %1$s sekundes; %2$s DB vaicājumu ielādes ilgums %3$s sekundes');
define('_YOUHAVEONEMSG','Tev nav jaunu privāto ziņojumu');
define('_NEWPMSG','Jauni privātie ziņojumiNew Private Messages');
define('_CONTRIBUTEDBY','Iesūtīja');
define('_CHAT','Tērzēšana');
define('_REGISTERED','Reģistrētie');
define('_CHATGUESTS','Viesi');
define('_USERSTALKINGNOW','Šobrīd tērzējošo lietotāju skaits');
define('_ENTERTOCHAT','Ieiet tērzēšanas istabā');
define('_CHATROOMS','Pieejamās istabas');
define('_ALLTOPICS','Visas tēmas');
define('_ASSOTOPIC','Saistītās tēmas');
define('_HELLO','Sveiki');
define('_ALL','Visas');
define('_URL','URL');
define('_SUBJECT','Tēma');
define('_PREVIEW','Apskats');
define('_SEND','Nosūtīt');
define('_ANONYMOUS','Anonīms');
define('_BREADCRUMB', 'Breadcrumb Delimiter, atdala vārdus lapas nosaukumā');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');//''. is for cpglang
define('_RESET','Atiestatīt');
define('_AT','');
define('_LASTMSGS','Pēdējie %s foruma ziņojumi');
define('_LASTPOSTBY','Pēdējo ziņojumu iesūtīja %1$s %2$s, %3$s');
define('_PRINTER','Lapa izdrukai');

define('_CREDITS_TITLE','Komanda');
define('_CREDITS_PRODUCT','Produkts');
define('_CREDITS_DESC','Apraksts');
define('_CREDITS_AUTHORS','Autori');

define('_PP_TITLE','Privātuma politika');
define('_PP_MODIFY','Rediģēt šo ziņojumu');

define('_SENDERNAME','Sūtītāja vārds');
define('_SENDEREMAIL','Sūtītāja e-pasta adrese');
define('_RECIPIENTNAME','Saņēmēja vārds');
define('_RECIPIENTEMAIL','Saņēmēja e-pasta adrese');

define('_REASONS_0','Ir kā ir');
define('_REASONS_1','Beztēma');
define('_REASONS_2','Kaitinošs');
define('_REASONS_3','Trollis');
define('_REASONS_4','Liekvārdīgs');
define('_REASONS_5','Iedvesmojošs');
define('_REASONS_6','Interesants');
define('_REASONS_7','Informatīvs');
define('_REASONS_8','Smieklīgs');
define('_REASONS_9','Pārvērtēts');
define('_REASONS_10','Nenovērtēts');

/* My Account Tools Block */
define('_TB_BLOCK','Mana konta opcijas');
define('_TB_TASKS','Uzdevumi');
define('_TB_INFO','Informācija');
define('_TB_PROFILE_INFO','Mans publiskais profils');
define('_TB_EDIT_PROFILE','Mana profila informācija');
define('_TB_EDIT_REG','Manas reģistrācijas detaļas');
define('_TB_EDIT_PRIVATE','Mana personiskā informācija');
define('_TB_EDIT_AVATAR','Mans iemiesojums');
define('_TB_DELETE','Izdzēst manu kontu');
define('_TB_CONFIG','Pārvaldība');
define('_TB_EDIT_PREFS','Mani uzstādījumi');
define('_TB_EDIT_HOME','Manas galvenās lapas uzstādījumi');
define('_TB_EDIT_COMM','Manu komentāru uzstādījumi');
define('_TB_PERSONAL','Personisks');
define('_TB_PERSONAL_GALLERY','Mana galerija');
define('_TB_PERSONAL_JOURNAL','Mani emuāri');
define('_TB_PRIVMSGS','Privātie ziņojumi');
define('_TB_PRIVMSGS_INBOX','Iesūtne');
define('_TB_PRIVMSGS_OUTBOX','Izsūtne');
define('_TB_PRIVMSGS_SENTBOX','Nosūtne');
define('_TB_PRIVMSGS_SAVEBOX','Saglabāšana');
define('_TB_PRIVMSGS_SEND','Nosūtīt ziņojumu');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Lietotāja info');
define('_SECURITYCODE','Drošības kods');
define('_TYPESECCODE','Ievadi kodu');
define('_MEMBERSOPTIONS','Lietotājiem');
define('_READSEND','Lasīt savus privātos ziņojumus. Nosūtīt tos citiem.');
define('_INBOX','Iesūtne');
define('_NEW','Jauns');
define('_ACCOUNTOPTIONS','Mans konts. Atjaunot manus uzstādījumus un lasīt ziņojumus.');
define('_LOGOUTACCT','Beigt darbu, izejot no šī konta.');
define('_LOGOUTADMINACCT','Beigt darbu, izejot no administratora konta.');
define('_BLOGIN','Tavs konts');
define('_BFLOGIN','Mans profils');
define('_BHID','Slēpts');
define('_WHOWHERE','Kurš ir kur');
define('_STAFFONL','Personāls tiešsaistē');
define('_STAFFNONE','Personāla tiešsaistē šobrīd nav!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Sabiedrība');
define('_BlogsLANG','Emuāri');
define('_ContentLANG','Pamācības');
define('_coppermineLANG','Attēlu galerija');
define('_CPGlangLANG','Palīdzība tulkošanā');
define('_DownloadsLANG','Lejupielādes');
define('_EncyclopediaLANG','Enciklopēdija');
define('_ForumsLANG','Forums');
define('_ContactLANG','Kontakti');
define('_FAQLANG','BUJ');
define('_Members_ListLANG','Reģistrēto lietotāju saraksts');
define('_NewsLANG','Ziņas');
define('_ReviewsLANG','Apskati');
define('_SearchLANG','Meklēšana');
define('_StatisticsLANG','Statistika');
define('_Stories_ArchiveLANG','Rakstu arhīvs');
define('_Submit_NewsLANG','Iesūtīt ziņas');
define('_SurveysLANG','Aptaujas');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Tēmas');
define('_Private_MessagesLANG','Mani privātie ziņojumi');
define('_Tell_a_FriendLANG','Pastāsti draugam');
define('_Web_LinksLANG','Saites');
define('_Your_AccountLANG','Mans konts');
define('_CPG_EventsLANG','Kalendārds');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Komunikācija');
define('_FRIENDS','Draugi');
define('_STORE','Veikals');
define('_PRODUCTS','Produkti');
define('_DONATE','Norādīt');
define('_HELP','Palīdzība');
define('_GALLERIES','Galerijas');
define('_DOCS','Dokumetācija');
define('_RULES','Likumi un noteikumi');
define('_MENU','Galvenā izvēlne');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Tu <strong>esi</strong> pierakstījies<br />mūsu ziņām');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Tu <strong>neesi</strong> pierakstījies<br />mūsu ziņām');
define('_NEWSLETTERBLOCKREGISTER','Tev jābūt<br /><strong>reģistrētam lietotājam</strong>,<br />lai saņemtu mūsu ziņas');
define('_NEWSLETTERBLOCKSUBSCRIBE','Pierakstīties');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Atrakstīties');
define('_NEWSLETTERBLOCKREGISTERNOW','Reģistrēties!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Tev jānorāda vismaz viena saņēmēja e-pasta adrese.';
$PHPMAILER_LANG['mailer_not_supported'] = ' e-pasts netiek uzturēts.';
$PHPMAILER_LANG['execute'] = 'Nav iespējams izpildīt: ';
$PHPMAILER_LANG['instantiate'] = 'Nav iespējams izpildīt šo e-pasta funkciju.';
$PHPMAILER_LANG['authenticate'] = 'SMTP KĻŪDA: Nav iespējams veikt autorizāciju.';
$PHPMAILER_LANG['from_failed'] = 'Sekojoša No adrese ir atteikta: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP KĻŪDA: Sekojoši saņēmēji ir atteikti: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP KĻŪDA: Informācija nav pieņemta.';
$PHPMAILER_LANG['connect_host'] = 'SMTP KĻŪDA: Nav iespējams pieslēgties SMTP.';
$PHPMAILER_LANG['file_access'] = 'Nav iespējams piekļūt datnei: ';
$PHPMAILER_LANG['file_open'] = 'Datnes kļūda: Nav iespējams atvērt datni: ';
$PHPMAILER_LANG['encoding'] = 'Nepazīstams kodējums: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Saglabāt izmaiņas');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Valoda');
define('_FUNCTIONS','Funkcijas');
define('_SHOW','Parādīt');
define('_TO','Kam');
define('_DAY','Diena');
define('_LAST','Jaunākie');
define('_ACTIVE','Aktīvs');
define('_DEACTIVATE','Deaktivizēt');
define('_INACTIVE','Neaktīvs');
define('_ACTIVATE','Aktivizēt');
define('_ACTIVATE2','Aktivizēt?');
define('_VIEW','Redzams');
define('_VIEWPRIV','Rādīt šo');
define('_MVADMIN','Tikai administratoriem');
define('_MVUSERS','Tikai reģistrētiem lietotājiem');
define('_MVANON','Tikai anonīmiem lietotājiem');
define('_MVALL','Visiem apmeklētājiem');
define('_IMAGE','Attēls');
define('_GO','Aiziet!');
define('_OPTION','Opcijas');
define('_CATEGORY','Kategorija');
define('_SUBCATEGORY','Apakškategorija');
define('_ID','ID');
define('_EXPIRATION','Termiņš');
define('_DAYS','dienas');
define('_WARNING','Brīdinājums');
define('_POLLTITLE','Aptaujas nosaukums');
define('_POLLEACHFIELD','Lūdzu, ievadi katru pieejamo opciju savā laukā');
define('_ADDCATEGORY','Pievienot jaunu kategoriju');
define('_PAGEBREAK','Ja gribi sadalīt lapu, ieraksti <b>&lt;!--pagebreak--&gt;</b> vietā, kur vēlies veikt dalījumu.');
define('_SIGNATURE','Paraksts');
define('_DESCRIPTION','Apraksts');
define('_EDITCATEGORY','Rediģēt kategoriju');
define('_IN','');
define('_DESCRIPTION255','Apraksts: (Maksimālais garums - 255 simboli)');
define('_MODCATEGORY','Rediģēt kategoriju');
define('_SUBMITTER','Iesūtītājs');
define('_VISIT','Apmeklēt');
define('_EXTENDEDTEXT','Raksta turpinājums');
define('_CHECKCATEGORIES','Pārbaudīt kategorijas');
define('_INCLUDESUBCATEGORIES','(Ieskaitot apakškategorijas)');
define('_CHECKSUBCATEGORIES','Pārbaudīt apakškategorijas');
define('_VALIDATELINKS','Apstiprināt saites');
define('_FAILED','Atteikts!');
define('_BEPATIENT','(lūdzu, pacietību)');
define('_VALIDATINGCAT','Kategorijas (un visu apakškategoriju) apstiprināšana');
define('_VALIDATINGSUBCAT','Apakškategoriju apstiprināšana');
define('_OK','Labi!');
define('_CHECK','Pārbaudīt');
define('_IGNORE','Ignorēt');
define('_HITS','Klikšķi');
define('_FILESIZE', 'Datnes lielums');
define("_EZTHEREIS","Ir");
define("_EZSUBCAT","apakškategorijas");
define("_EZATTACHEDTOCAT","šajā kategorijā");
define("_EZBROKENLINKS","Nestrādājošas saites");
define("_DELEZLINKCATWARNING","BRĪDINĀJUMS: Vai patiešām vēlies izdzēst šo kategoriju.?<br /> Tu izdzēsīsi arī visas apakškategorijas un tām pievienotās saites!");

// index.php
define('_DEFHOMEMODULE','Noklusētais galvenās lapas modulis');
define('_MODULEINHOME','Modulis lapā ielādēts:');
define('_CHANGE','Mainīt');
define('_WHOSONLINE','Kas ir tiešsaistē');
define('_NP_ADMIN','Piezīmes');
define('_NP_LOCKED','Piezīmes ir bloķētas<br />Tikai galvenais administrators var to atbloķēt');
define('_NP_SAVE','Saglabāt piezīmes');
define('_NP_UNLOCK','Atbloķēt piezīmes');
define('_NP_LOCK','Bloķēt piezīmes');
// news
define('_STICKY','Lipīgie raksti');
define('_ARTICLEUP','Pārvietot rakstu uz augšu');
define('_ARTICLEDOWN','Pārvietot rakstu uz leju');
define('_UNSTICK','Noņemt lipīgumu');
define('_STICK','Lipīgs');
define('_AUTOMATEDARTICLES','Ieplānotie raksti');
define('_STORYID','Raksta ID');
define('_CURRENTPOLL','Pašreizējā aptauja');

// admin.php
define('_ADMINISTRATION','Pārvaldība');
define('_NOADMINYET','Pagaidām nav neviena administratora, turpiniet, lai izveidotu administratora kontu...');
define('_CREATEUSERDATA','Vai vēlies izveidot arī parastu lietotāju ar tādu pašu informāciju?');
define('_ADMINLOGIN','Autorizēties kā administratoram');
define('_ADMINID','Lietotāja vārds');
define('_EMAIL','E-pasta adrese');
define('_SUBMIT','Apstiprināt');
define('_YOUARELOGGEDOUT','Tu esi veiksmīgi izgājis no sistēmas');
define('_PASSWDNOMATCH','Paroles nesakrīt. Lūdzu, dodies atpakaļ un ievadi tās vēlreiz.');
define('_LOGIN_REMEMBERME','Atceries mani?');
define('_ADMINMENU_LOGOUT','Beigt darbu kā administratoram');
define('_PASSWORD_MALFORMED','Parolē ir jābūt vismaz vienam ciparam, vismaz vienam lielajam burtam un vismaz vienam mazajam burtam');

// admins.php
define('_AUTHORSADMIN','Administratora pārvaldība');
define('_NAME','Vārds');
define('_REQUIRED','(nepieciešams)');
define('_MODIFYINFO','Rediģēt informāciju');
define('_DELAUTHOR','Izdzēst administratoru');
define('_ADDAUTHOR','Pievienot jaunu administratoru');
define('_PERMISSIONS','Atļaujas');
define('_SUPERUSER','Super-lietotājs');
define('_SUPERWARNING','Brīdinājums: Ja ir iespējots Super-lietotājs, tad administratoram tiks iedotas pilnīgi visas atļaujas');
define('_ADDAUTHOR2','Pievienot administratoru');
define('_RETYPEPASSWD','Ievadi paroli vēlreiz');
define('_FORCHANGES','(Tikai izmaiņu gadījumos)');
define('_COMPLETEFIELDS','Tev jāaizpilda visi nepieciešamie lauki');
define('_CREATIONERROR','Jauna administratora izveidošana ir atteikta');
define('_AUTHORDEL','Izdzēst administratoru');
define('_PUBLISHEDSTORIES','Šis administrators ir publicējis rakstus');
define('_SELECTNEWADMIN','Lūdzu, izvēlies kādu no esošajiem administratoriem, kuram piesaistīt rakstu');
define('_GODNOTDEL','Super-lietotājs nevar tikt izdzēsts!');
define('_MAINACCOUNT','Super-lietotājs *');
define('_USERS','Lietotājs');

// banners.php
define('_BANNERSADMIN','Reklāmkarogu pārvaldība');
define('_DELETEBANNER','Izdzēst reklāmkarogu');
define('_SURETODELBANNER','Vai patiešām vēlies dzēst reklāmkarogu?');
define('_EDITBANNER','Rediģēt reklāmkarogu');

// blocks.php
define('_BLOCKSADMIN','Bloku pārvaldība');
define('_CENTER','Centrs');
define('_CENTERUP','Centrs augšā');
define('_CENTERDOWN','Centrs lejā');
define('_BLOCKFILE','(bloka datne)');
define('_BLOCKFILE2','Datne');
define('_BLOCKSYSTEM','Sistēma');
define('_ADDNEWBLOCK','Pievienot jaunu bloku');
define('_RSSFILE','RSS/RDF datnes URL');
define('_ONLYHEADLINES','(Tikai RSS)');
define('_REFRESHTIME','Atsvaidzinšānas laiks');
define('_CREATEBLOCK','Izveidot bloku');
define('_EDITBLOCK','Rediģēt bloku');
define('_BLOCK','Bloks');
define('_SAVEBLOCK','Saglabāt bloku');
define('_BLOCKACTIVATION','Bloka aktivizēšana');
define('_BLOCKPREVIEW','Šis ir priekšskatījums');
define('_WANT2ACTIVATE','Vai Tu vēlies aktivizēt bloku?');
define('_ARESUREDELBLOCK','Vai Tu patiešām vēlies pārvietot');
define('_BLOCKUP','Pārvietot bloku augstāk');
define('_BLOCKDOWN','Pārvietot bloku zemāk');
define('_BLOCKTOP','Pārvietot bloku uz augšu');
define('_BLOCKBOTTOM','Pārvietot bloku uz leju');
define('_TITLE','Nosaukums');
define('_POSITION','Atrašanās vieta');
define('_WEIGHT','Ietekme');
define('_STATUS','Statuss');
define('_LEFTBLOCK','Kreisais bloks');
define('_LEFT','Pa kreisi');
define('_RIGHTBLOCK','Labais bloks');
define('_RIGHT','Pa labi');
define('_TYPE','Tips');
define('_CUSTOM','Pielāgots');
define('_FILENAME','Datnes nosaukums');
define('_FILEINCLUDE','Ja Tu izmanto šo opciju, ignorē satura un atsvaidzināšanas laika laukus');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Izdzēst komentārus');
define('_SURETODELCOMMENTS','Vai Tu patiešām vēlies izdzēst iezīmētos komentārus ar tiem pievienotajām atbildēm?');

// database.php
define('_SAVEDATABASE','Dublējums');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Pašreizējais statussCurrent Status');
define('_ACTIVATEPAGE','Aktivizēt šo lapu?');

// history.php
define('_EPHEMADMIN','Šī diena pagātnē');
define('_ADDEPHEM','Pievienot jaunu ierakstu');
define('_EPHEMDESC','Ievadi aprakstu');
define('_EPHEMMAINT','Meklēšana');
define('_EPHEMEDIT','Rediģēt ierakstu');
define('_EPHEMDELETE','Izdzēst ierakstu');

// headlines.php
define('_RSSFAIL','Šķiet, ka ir dažas problēmas ar URL adresi šai RSS barotnei');
define('_RSSTRYAGAIN','Lūdzu, pārbaudi URL adresi un RSS nosaukumu un mēģini vēlreiz');
define('_RSSCONTENT','(RSS/RDF saturs)');
define('_IFRSSWARNING','Ja Tu izmanto URL, Tevis ierakstītais saturs tiks ignorēts');
define('_SETUPHEADLINES','Izvēlies \'Pielāgots\' un ievadi URL adresi RSS barotnei, vai arī vienkārši izvēlies tīmekļa lapu no saraksta');
define('_HEADLINESADMIN','RSS pārvaldība');
define('_ADDHEADLINE','Pievienot RSS');
define('_EDITHEADLINE','Rediģēt RSS');
define('_SURE2DELHEADLINE','Vai patiešām vēlies izdzēst šo RSS barotni?');

// messages.php
define('_MESSAGESADMIN','Ziņojumu pārvaldība');
define('_MESSAGETITLE','Nosaukums');
define('_MESSAGECONTENT','Saturs');
define('_ALLMESSAGES','Pārskatīt ziņojumus');
define('_EDITMSG','Rediģēt ziņojumu');
define('_ADDMSG','Pievienot ziņojumu');
define('_REMOVEMSG','Vai Tu patiešām vēlies izdzēst šo ziņojumu?');
define('_CHANGEDATE','Pārstatīt sākuma datumu uz šīs dienas datumu?');
define('_IFYOUACTIVE','Ja Tu aktivizēsi šo ziņojumu šobrīd, tad par sākuma datumu tiks uzstādīts šīs dienas datums');

// modules.php
define('_MODULESADMIN','Moduļu pārvaldība');
define('_HOMECONFIG','Galvenās lapas pārvaldība');
define('_MODULESADDONS','Moduļi un spraudņi');
define('_INHOME','Uzstādīts ka galvenais modulis');
define('_MODULEHOMENOTE','<strong>.: Svarīga informācija :.</strong><br />Mapē /modules/ ievietotie modeļi automātiski tiks pievienoti sistēmai<br />Izdzēšot moduli no šīs mapes, tas automātiski tiks izdzēsts arī no sistēmas<br /><br />Modulis, kurš redzams treknrakstā, ir uzstādīts kā galvenais modulis<br />Šo moduli nevar deaktivizēt vai aizliegt atsevišķiem lietotājiem');
define('_PUTINHOME','Uzstādīt par galveno');
define('_SURETOCHANGEMOD','Vai Tu patiešām vēlies mainīt galveno lapu no');
define('_NOTINMENU','[ <strong>&middot;</strong> ] apzīmē moduli kā neredzamu moduļu blokā');
define('_SHOWINMENU','Redzams izvēlnē?');
define('_CUSTOMTITLE','Pielāgots nosaukums');
define('_MODULEEDIT','Moduļu rediģēšana');
define('_VERSION','Versija');
define('_UPGRADE','Atjaunināt uz %s');
define('_DBSIZE','DB lielums');
define('_CVS_EXPLAIN','Šķiet, ka šim modulim ir CVS mape. CVS - Concurrent Versioning System.<br />Ar CVS palīdzību ir iespējams ļoti viegli iegūt datņu pēdējos atjauninājumus.<br /><b>BET</b> pēdējai datnes versijai, tā kā tā nav oficiāli izlaista versija, var būt kļūdas.<br />Ja PHP Tev nav bieds, vari atjaunināt datnes, izmantojot zemāk esošo saiti.<br />Neaizmirsti pirms tam gan izveidot dublējumu!!!');
define('_CVS_UPDATE','Atjaunināt CVS datnes');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','No');
define('_STAFF','Personāls');
define('_NL_RECIPS','Saņēmēji');
define('_SUBSCRIBEDUSERS','Pierakstījušies reģistrētie lietotāji');
define('_NL_ALLUSERS','Visi reģistrētie lietotāji');
define('_NL_ADMINS','Administratori');
define('_NL_REGARDS','Ar laba vēlējumiem šai un turpmākajām dienām');
define('_DISCARD','Atcelt');
define('_REVIEWTEXT','Lūdzu, pārskati sevis uzrakstīto ziņojumu un pārbaudi pareizrakstību');
define('_MANYUSERSNOTE','Jo vairāk lietotājiem paredzēta šis ziņojums, jo vairāk laika prasīs tā nosūtīšana.<br />Lūdzu, pacietību!');
define('_NL_NOUSERS','Grupā, kurai vēlies nosūtīt ziņojumu, nav lietotāju<br />Lūdzu, atgriezies un izvēlies citu grupu');
define('_NUSERWILLRECEIVE','lietotāji saņems šo ziņojumu');
define('_NLUNSUBSCRIBE',"Mēs Tev nosūtījām ziņojumu, jo esi pierakstījies to saņemšanai no mūsu tīmekļa resursa\n\nJa vēlies atrakstīties no ziņojumu saņemšanas, vari to izdarīt jebkurā laikā <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">šeit</a>.\n\nJa vēlies atbalstīt un palīdzēt šī tīmekļa resursa personalām, sūti e-pasta ziņojumu <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">lapas administratoram</a>");
define('_NEWSLETTERSENT','Ziņōjums ir nosūtīts');

// referers.php
define('_WHOLINKS','Kurš izmanto saites uz mūsu tīmekļa resursu?');
define('_DELETEREFERERS','Izdzēst atsauces');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Kājene');
define('_DEBUG', 'Atkļūdot');
define('_SITECONFIG','Tīmekļa lapas pārvaldnība');
define('_GENSITEINFO','Tīmekļa lapas pamatinformācija');
define('_SITENAME','Tīmekļa lapas nosaukums');
define('_SITEURL','Tīmekļa lapas URL adrese');
define('_SITELOGO','Datnes nosaukums tīmekļa lapas zīmolam (glabājas /images)');
define('_SITESLOGAN','Tīmekļa lapas sauklis');
define('_STARTDATE','Kad tīmekļa lapa tikai izveidota');
define('_ADMINEMAIL','Administratora e-pasta adrese');
define('_ITEMSTOP','Vienumu skaits Top moduļa rangā');
define('_STORIESHOME','Rakstu skaits galvenajā ziņu lapā');
define('_OLDSTORIES','Rakstu skaits rakstu arhīva lapā');
define('_ALLOWANONPOST','Atļaut nereģistrētiem lietotājiem iesūtīt rakstus');
define('_DEFAULTTHEME','Tīmekļa lapas noklusētā tēma');
define('_SHOWSEC','Rādīt drošības kodu');
define('_TOOLTIPS','Rādīt rīku aprakstus');
define('_UM_TOGGLE','Aktivizēt atjaunināšanas uzraudzību');
define('_UM_EXPLAIN','Tiks parādīta sekojoša informācija: Dragonfly versija, kura tiek izmantota, un īpašie paziņojumi šīs versijas lietotājiem. Vienīgā informācija, kas tiek aizsūtīta Dragonfly izstrādātājiem ir Dragonfly versija. Pieprasītā informācija netiek uzglabāta Dragonfly serveros.');
// maintenance
define('_MAINTENANCE','Uzturēšana');
define('_MESSAGE','Paziņojums');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Valodas sistēma');
define('_SELLANGUAGE','Tīmekļa lapas noklusētā valoda');
define('_LOCALEFORMAT','Vietējā laika formāts');
define('_ACTMULTILINGUAL','Aktivizēt daudz-valodu iespējas');
define('_ACTUSEFLAGS','Lietot mazos karodziņus valodas atpazīšanai');
// banners
define('_BANNERSOPT','Reklāmkarogu sistēma');
define('_ACTBANNERS','Aktivizēt reklāmkarogu sistēmu?');
// footer
define('_FOOTERMSG','Lapas kājene (vēlams)');
define('_FOOTERLINE1','Kājenes pirmā rindiņa');
define('_FOOTERLINE2','Kājenes otrā rindiņa');
define('_FOOTERLINE3','Kājenes trešā rindiņa');
// backend
define('_BACKENDCONF','RSS barotne');
define('_BACKENDTITLE','Barotnes nosaukums');
define('_BACKENDLANG','Barotnes valoda');
// mail stories
define('_MAIL2ADMIN','Neizlemto ziņu apstiprinājumi');
define('_NOTIFYSUBMISSION','Atgādināt administratoram par neizlamtajām ziņām?');
define('_EMAIL2SENDMSG','Saņēmēja e-pasta adrese');
define('_EMAILSUBJECT','Tēma e-pasta ziņojumam');
define('_EMAILMSG','E-pasta ziņojuma teksts');
define('_EMAILFROM','Nosūtītaja e-pasta adrese');
// comments
define('_COMMENTSOPT','Komentāru sistēma');
define('_COMMENTSLIMIT','Saīsināt komentārus pēc __ simboliem');
define('_COMMENTSMOD','Atļaut komentāru rediģēšanu?');
define('_MODADMIN','Jā, administratoriem');
define('_MODUSERS','Jā, lietotājiem');
define('_NOMOD','Nē, neatļaut rediģēšanu');
// adminmenu
define('_GRAPHICOPT','Pārvaldības izvēlnes izkārtojums');
define('_BOTH','Abi');
define('_GRAPHICAL','Grafisks');
define('_SIDEBLOCK','Malu bloki');
// miscellaneous
define('_MISCOPT','Dažādi');
define('_ACTIVATEHTTPREF','Aktivizēt autorizēšanos HTTP atsaucēm?');
define('_MAXREF','Atsauču ierobežojošais skaits');
define('_COMMENTSPOLLS','Aktivizēt komentāru sistēmu aptaujās?');
define('_COMMENTSARTICLES','Aktivizēt komentāru sistēmu jaunajiem rakstiem?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Cenzēšanas sistēma');
define('_CENSORMODE','Saskanības režīms');
define('_NOFILTERING','Bez filtrēšanas');
define('_EXACTMATCH','Tieša saskanība');
define('_MATCHBEG','Saskanība ar teksta sākumu');
define('_MATCHANY','Saskanība tekstā');
define('_CENSORREPLACE','Aizliegto vārdu nomaiņa');
// email
define('_EMAILOPTIONS','E-pasta sistēma');
define('_ALLOW_HTML_EMAIL','Atļaut lietot HTML e-pastu ziņojumos?');
define('_USE_SMTP','Lietot SMTP serverus kā pretējos PHP e-pastu sistemām');
define('_SMTP_HOST','SMTP adrese (smtp.example.com)');
define('_USE_SMTP_AUTH','Vai serverim nepieciešama SMTP autorizācija?');
define('_SMTP_USER_NAME','SMTP lietotāja vārds');
define('_SMTP_USER_PASS','SMTP parole');

// cpg_adminmenu.php
define('_ADMINMENU','Pārvaldības izvēlne');
define('_ADMINLOGOUT','Beigt darbu');
define('_AMENU0','System');
define('_AMENU1','Pamatinformācija');
define('_AMENU2','Reģistrētie lietotāji');
define('_AMENU3','Ziņojumi');
define('_AMENU4','Forums');
define('_AMENU5','Informatīvie');
define('_AMENU6','Sasaistītie');
define('_AMENU7','Komercija');
define('_AMENU8','Multivide');
define('_AMENU9','Moduļi');
define('_BMENU1','Palīdzība');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Galvenie uzstādījumi');
define('_DATABASE','Datubāze');
define('_BLOCKS','Bloki');
define('_MODULES','Moduļi');
define('_EDITADMINS','Administratori');
define('_MESSAGES','Paziņojumi');
define('_BANNERS','Reklāmkarogi');
define('_HTTPREFERERS','HTTP atsauces');
define('_EDITUSERS','Reģistrētie lietotāji');
define('_USERSCONFIG','Reģistrēto lietotāju konfigurācija');
define('_NEWSLETTER','Ziņu vēstule');
define('_SUBMISSIONS','Apstiprinājumi');
define('_ADDSTORY','Pievienot rakstu');
define('_TOPICS','Tēmas');
define('_ADMPOLLS','Aptaujas');
define('_EPHEMERIDS','Šī diena vēsturē');
define('_REVIEWS','Apskati');
define('_ENCYCLOPEDIA','Enciklopēdija');
define('_SURVEYS','Aptaujas');
define('_SECTIONS','Sekcijas');
define('_ARTICLES','Raksti');
define('_FAQ','BUJ');
define('_DOWNLOAD','Lejupielādes');
define('_WEBLINKS','Tīmekļa saites');
define('_CONTENT','Pamācības');
define('_SYSINFO','System Info');
define('_REPORTABUG','Kļūdu ziņojumi');
//coppermine admin
define('_W_INSTALL','Kuru instalāciju?');
define('_W_PAGE','Kuru lapu?');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protection');
define('_EMAIL_DOMAINS','E-Mail Domains');
define('_FLOODING','Flooding');
define('_UUA','Unknown User-Agents');
define('_FLOODING_TIP','Flooding: Delay<br /><em>timing between each warning</em>');
define('_BAN_TIP','Flooding: Ban Duration<br /><em>how long the ban will last for</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>clean ban after duration time expires</em>');
define('_FOREVER','forever');
define('_REMOVE_SELECTED','Remove selected');

//errors for cpg_error
define('_ERROR','KĻŪDA');
define('_SEC_ERROR','Drošības kļūda');
define('_ERROR_NOT_SET','%s nav noteikts');
define('_ERROR_NO_POST','Ziņojumu saņemšana no ārpuses ir aizliegta...');
define('_ERROR_NO_GET','GET pieprasījumi šai funkcijai nav atļauti...');
define('_ERROR_BAD_CHAR','%s pieprasījumā iekļautie simboli ir aizliegti...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Tu mēģināji piekļūt šai lapai, izmantojot kļūdainu saiti... Atgriezies atpkaļ un mēģini vēlreiz...');
define('_ERROR_NONE_TO_DISPLAY','Nav parādāmu %s');
define('_ERROR_DELETE_CONF','Vai Tu patiešām vēlies dzēst %s?');
define('_ERROR_NO_EXIST','%s neeksistē');
define('_ERROR_ALREADYEXIST','%s jau eksistē');
define('_TASK_COMPLETED','Operācija pabeigta!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
