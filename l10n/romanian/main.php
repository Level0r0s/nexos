<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/romanian/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','ro');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %d %B %Y (%H:%M:%S) %Z');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Pagina următoare');
define('_PREVIOUSPAGE','Pagina anterioară');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Căutare');
define('_LOGIN','Login');
define('_WRITES','a scris');
define('_POSTEDON','Publicat pe data de ');
define('_NICKNAME','Utilizator');
define('_PASSWORD','Parola');
define('_WELCOMETO','Bine aţi venit la ');
define('_EDIT','Editaţi');
define('_DELETE','Ştergeţi');
define('_POSTEDBY','Trimis de');
define('_READS','citiri');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Înapoi</a>' : '<a href="javascript:history.go(-1)">Înapoi</a>').' ]');
define('_COMMENTS','comentarii');
define('_PASTARTICLES','Ultimele articole');
define('_OLDERARTICLES','articolele mai vechi');
define('_BY','de');
define('_ON','la');
define('_LOGOUT','Logout');
define('_WAITINGCONT','Conţinut în aşteptare');
define('_WREVIEWS','Review-uri în aşteptare');
define('_WLINKS','Linkuri în aşteptare');
define('_ONEDAY','O zi ca şi astăzi...');
define('_ASREGISTERED','Încă nu aveţi un cont? Puteţi <a href="\'.getlink("Your_Account&amp;file=register").\'">crea unul</a>. Ca şi utilizator înregistrat aveţi unele avantaje cum ar fi: manager de teme, configurarea comentariilor şi puteţi trimite comentarii cu numele de utilizator al Dvs.');
define('_MENUFOR','Meniu pentru');
define('_NOBIGSTORY','Încă nu există o povestire Importantă pentru astăzi.');
define('_BIGSTORY','Astăzi, cea mai citită povestire a fost:');
define('_SURVEY','Sondaj');
define('_POLLS','Chestionare');
define('_PCOMMENTS','Comentarii:');
define('_RESULTS','Rezultate');
define('_HREADMORE','citiţi mai mult');
define('_CURRENTLY','Momentan există,');
define('_GUESTS','vizitator(i) şi');
define('_MEMBERS','membru(i) online.');
define('_YOUARELOGGED','Sunteţi logat ca ');
define('_YOUHAVE','Aveţi');
define('_PRIVATEMSG','mesaj(e) privat(e).');
define('_YOUAREANON','Sunteţi utilizator anonim. Vă puteţi înregistra gratuit dând click <a href="\'.getlink("Your_Account&amp;file=register").\'">aici</a>');
define('_NOTE','Notiţă:');
define('_ADMIN','Administrator:');
define('_WERECEIVED','Am primit');
define('_PAGESVIEWS','vizite din ');
define('_TOPIC','Topic');
define('_UDOWNLOADS','Downloaduri');
define('_VOTE','Votaţi');
define('_VOTES','Voturi');
define('_MVIEWADMIN','Vizibil: Administratorilor');
define('_MVIEWUSERS','Vizibil: Utilizatorilor înregistraţi');
define('_MVIEWANON','Vizibil: Anonimilor');
define('_MVIEWALL','Vizibil: Tuturor vizitatorilor');
define('_EXPIRELESSHOUR','Expirare: În mai putin de 1 oră');
define('_EXPIREIN','Expirare în');
define('_UNLIMITED','Nelimitat');
define('_HOURS','ore');
define('_RSSPROBLEM','Momentan există o problemă cu titlurile din acest sit');
define('_SELECTLANGUAGE','Selectaţi Limba');
define('_SELECTGUILANG','Selectaţi Limba:');
define('_NONE','Nici unul');
define('_BLOCKPROBLEM','<center>Momentan există o problemă cu acest bloc.</center>');
define('_BLOCKPROBLEM2','<center>Momentan acest bloc nu are nici un conţinut.</center>');
define('_MODULENOTACTIVE','Ne pare rău, acest modul nu este activat!');
define('_NOACTIVEMODULES','Module inactive');
define('_MODULENOEXIST','Ne pare rău dar fişierul cerut, %s, se pare că nu există');
define('_FORADMINTESTS','(Pentru testare de către Administratori)');
define('_BBFORUMS','Forum');
define('_ACCESSDENIED','Acces restricţionat');
define('_RESTRICTEDAREA','Încercaţi să accesaţi o zona restricţionată.');
define('_MODULEUSERS','Ne pare rău dar această secţiune este <i>numai pentru utilizatorii înregistraţi.</i><br /><br />');
define('_MODULEUSERS2','Vă puteţi înregistra gratuit dând click <a href="\'.getlink("Your_Account&file=register").\'">aici</a>, apoi puteţi <br />accesa acesta secţiune fără restrictii. Vă mulţumim.<br /><br />');
define('_MODULESADMINS','Ne pare rău dar această secţiune a sitului nostru este <i>numai pentru Administratori.</i><br /><br />');
define('_MODULESGROUPS','este necesar un nivel de acces de group');
define('_HOME','Pagina principală');
define('_HOMEPROBLEM','Există o problemă mare: nu avem o Pagina principală!!!');
define('_ADDAHOME','Adăugaţi un modul în Pagina Dvs. principală');
define('_HOMEPROBLEMUSER','Momentan există o problemă în Pagina principală. Vă rugam reveniţi mai târziu.');
define('_MORENEWS','Mai mult în secţiunea Ştiri');
define('_ALLCATEGORIES','Toate categoriile');
define('_SPAMGUARDPROTECTED','SpamGuard a blocat acest mesaj la trimitere');
define('_M_CHARS','Maximum: %s caractere');

define('_SYS_MESSAGE','Mesaj sistem');
define('_SYS_MESSAGES','Mesaje sistem');
define('_SYS_MAINTENANCE','Acum situl este în modul Mentenanţă');
define('_SYS_DEMO','Acum situl este în modul administrare-demo<br/>Nu puteţi face nici o schimbare în baza de date<br /><a href="'.adminlink('logout').'">Deconectaţi-mă!</a>');

define('_DATE','data');
define('_HOUR','ora');
define('_UMONTH','luna');
define('_YEAR','anul');
define('_JANUARY','Ianuarie');
define('_FEBRUARY','Februarie');
define('_MARCH','Martie');
define('_APRIL','Aprilie');
define('_MAY','Mai');
define('_JUNE','Iunie');
define('_JULY','Iulie');
define('_AUGUST','August');
define('_SEPTEMBER','Septembrie');
define('_OCTOBER','Octombrie');
define('_NOVEMBER','Noiembrie');
define('_DECEMBER','Decembrie');

define('_MONDAY','Luni');
define('_TUESDAY','Marţi');
define('_WEDNESDAY','Miercuri');
define('_THURSDAY','Joi');
define('_FRIDAY','Vineri');
define('_SATURDAY','Sâmbătă');
define('_SUNDAY','Duminică');

define('_ABR_MONDAY','Luni');
define('_ABR_TUESDAY','Marţi');
define('_ABR_WEDNESDAY','Miercuri');
define('_ABR_THURSDAY','Joi');
define('_ABR_FRIDAY','Vineri');
define('_ABR_SATURDAY','Sâmbătă');
define('_ABR_SUNDAY','Duminică');

define('_BWEL','Bine aţi venit');
define('_BPM','Mesaje private');
define('_BUNREAD','Necitit');
define('_BREAD','Citit');
define('_BMEMP','Membrii');
define('_BLATEST','Ultimul');
define('_BTD','Noi astăzi');
define('_BYD','Noi ieri');
define('_BOVER','Global');
define('_BVISIT','Oameni Online');
define('_BVIS','Vizitatori');
define('_BMEM','Membrii');
define('_BTT','Total');
define('_BON','Online acum');
define('_BREG','Înregistrare');
define('_BROADCAST','Transmiteţi mesaj public');
define('_BROADCASTFROM','Mesaj public de la ');
define('_TURNOFFMSG','Opriţi Mesajele publice');
define('_JOURNAL','Jurnal');
define('_READMYJOURNAL','Citiţi Jurnal meu');
define('_ADD','Adăugaţi');
define('_YES','Da');
define('_NO','Nu');
define('_INVISIBLEMODULES','Module invizibile');
define('_ACTIVEBUTNOTSEE','(Linkuri active dar invizibile)');
define('_BOTS','Bots');

define('_UM','Monitor update Dragonfly');
define('_UM_F','Nu s-a putut face contactul cu serviciul de update. Vă rugăm să încercaţi mai târziu.');
define('_UM_G','Folosiţi ultima versiune de Dragonfly');
define('_UM_R','Vă rugăm să faceţi un <a href="%2$s" target="_blank">upgrade</a> la Dragonfly %1$s');

define('_TEAM','Echipa');
define('_LINKAPPROVEDMSG','Felicitări! Linkul pe care l-aţi trimis în baza noastră de date a fost aprobat chiar acum.');
define('_MODREQLINKS','Mod. Linkuri');
define('_BROKENLINKS','Linkuri defecte');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Downloaduri defecte');
define('_PAGEGENERATION','Generarea paginii s-a făcut în:');
define('_SECONDS','secunde');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Generarea paginii s-a făcut în %1$s secunde şi s-au executat %2$s query-uri în %3$s secunde');
define('_YOUHAVEONEMSG','Aveţi un mesaj privat nou');
define('_NEWPMSG','Mesaje private noi');
define('_CONTRIBUTEDBY','Cu contribuţia lui ');
define('_CHAT','Chat');
define('_REGISTERED','Înregistrat');
define('_CHATGUESTS','Oaspeţi');
define('_USERSTALKINGNOW','Utilizatori care sunt pe chat acum');
define('_ENTERTOCHAT','Intraţi pe Chat');
define('_CHATROOMS','Camere disponibile');
define('_ALLTOPICS','Toate topicurile');
define('_ASSOTOPIC','Topicuri asociate');
define('_HELLO','Salut ');
define('_ALL','Toţi');
define('_URL','URL');
define('_SUBJECT','Subiect');
define('_PREVIEW','Previzualizare');
define('_SEND','Trimiteţi');
define('_ANONYMOUS','Anonymous');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reset');

define('_LASTMSGS','Ultimele %s mesaje din forum');
define('_LASTPOSTBY','Ultimul mesaj de către %1$s în %2$s pe %3$s');
define('_PRINTER','Pagina formată prntru tipărire');

define('_CREDITS_TITLE','Credite');
define('_CREDITS_PRODUCT','Produs');
define('_CREDITS_DESC','Descriere');
define('_CREDITS_AUTHORS','Autor(i)');

define('_PP_TITLE','Privacy Policy');
define('_PP_MODIFY','Schimbaţi acest mesaj');

define('_SENDEREMAIL','Expeditorul e-mailului');
define('_SENDERNAME','Numele expeditorului');
define('_RECIPIENTNAME','Numele destinatarului');
define('_RECIPIENTEMAIL','Adresa e-mail a destinatarului');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesant');
define('_REASONS_7','Informativ');
define('_REASONS_8','Haios');
define('_REASONS_9','Supraapreciat');
define('_REASONS_10','Subapreciat');

/* My Account Tools Block */
define('_TB_BLOCK','Utilitare Contul Meu');
define('_TB_TASKS','Sarcini');
define('_TB_INFO','Informaţii');
define('_TB_PROFILE_INFO','Profilul meu public');
define('_TB_EDIT_PROFILE','Informaţiile profilului meu');
define('_TB_EDIT_REG','Detaliile mele de la înregistrare');
define('_TB_EDIT_PRIVATE','Informaţiile mele private');
define('_TB_EDIT_AVATAR','Avatarul meu');
define('_TB_DELETE','Ştergeţi contul meu');
define('_TB_CONFIG','Configuraţie');
define('_TB_EDIT_PREFS','Preferinţele mele');
define('_TB_EDIT_HOME','Setările mele pentru pagina principală');
define('_TB_EDIT_COMM','Setările pentru comentariile mele');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','Galeria mea');
define('_TB_PERSONAL_JOURNAL','Blog-ul meu');
define('_TB_PRIVMSGS','Mesaje private');
define('_TB_PRIVMSGS_INBOX','Cutia cu mesaje primite');
define('_TB_PRIVMSGS_OUTBOX','Cutia cu mesaje în curs de trimitere');
define('_TB_PRIVMSGS_SENTBOX','Cutia cu mesaje trimise');
define('_TB_PRIVMSGS_SAVEBOX','Cutia cu mesaje salvate');
define('_TB_PRIVMSGS_SEND','Trimiteţi mesajul');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Informaţii utilizatori');
define('_SECURITYCODE','Cod de securitate');
define('_TYPESECCODE','Introduceţi codul');
define('_MEMBERSOPTIONS','Opţiuni Membrii');
define('_READSEND','Citiţi-vă mesaje private. Trimiteţi mesaje altora.');
define('_INBOX','Inbox');
define('_NEW','Nou');
define('_ACCOUNTOPTIONS','Contul Dvs. Schimbati-vă opţiunile şi citiţi-vă mesajele.');
define('_LOGOUTACCT','Logout din acest cont.');
define('_LOGOUTADMINACCT','Logout din contul de admin.');
define('_BLOGIN','Contul Dvs.');
define('_BFLOGIN','Profil pentru Forum');
define('_BHID','Ascuns');
define('_WHOWHERE','Cine? Unde este?');
define('_STAFFONL','Administratori Online');
define('_STAFFNONE','Nici un administrator nu este online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Comunitate');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Conţinut');
define('_coppermineLANG','Galerie foto');
define('_CPGlangLANG','Traducere CPG');
define('_DownloadsLANG','Download');
define('_EncyclopediaLANG','Enciclopedie');
define('_ForumsLANG','Forum');
define('_ContactLANG','Contactaţi-ne');
define('_FAQLANG','IF - Întrebări Frecvente - Ajutor');
define('_Members_ListLANG','Lista membrilor');
define('_NewsLANG','Ştiri');
define('_ReviewsLANG','Review-uri');
define('_SearchLANG','Căutare');
define('_StatisticsLANG','Statistici');
define('_Stories_ArchiveLANG','Arhiva de povestiri');
define('_Submit_NewsLANG','Trimiteţi ştiri');
define('_SurveysLANG','Sondaje');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Topicuri');
define('_Private_MessagesLANG','Mesajele mele private');
define('_Tell_a_FriendLANG','Recomandaţi-ne');
define('_Web_LinksLANG','Linkuri');
define('_Your_AccountLANG','Contul Dvs.');
define('_CPG_EventsLANG','Calendar');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Comunicare');
define('_FRIENDS','Prieteni');
define('_STORE','Magazin');
define('_PRODUCTS','Produse');
define('_DONATE','Donaţi');
define('_HELP','Ajutor');
define('_GALLERIES','Galerii');
define('_DOCS','Documentaţie');
define('_RULES','Reguli & regulamente');
define('_MENU','Meniu principal');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Dvs. <strong>sunteţi</strong> înscris la rubrica de <br />scrisori de înştiinţare cu noutăţi');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Dvs. <strong>nu sunteţi</strong> înscris la rubrica de <br />scrisori de înştiinţare cu noutăţi');
define('_NEWSLETTERBLOCKREGISTER','Trebuie să fiţi <br/><strong>utilizator înregistrat</strong><br />pentru a primii scrisori de înştiinţare cu noutăţi de la noi');
define('_NEWSLETTERBLOCKSUBSCRIBE','Înscrieţi-vă');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Dezabonaţi-vă');
define('_NEWSLETTERBLOCKREGISTERNOW','Înregistraţi-vă acum!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Trebuie să furnizaţi cel puţin o adresă de e-mail unde se va trimite mesajul.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer nu este suportat.';
$PHPMAILER_LANG['execute'] = 'Nu s-a putut exectuta: ';
$PHPMAILER_LANG['instantiate'] = 'Nu s-a putut iniţia funcţia mail.';
$PHPMAILER_LANG['authenticate'] = 'Eroare SMTP: Nu s-a putut face autentificarea.';
$PHPMAILER_LANG['from_failed'] = 'Adresa următoare DE LA a fost defectă: ';
$PHPMAILER_LANG['recipients_failed'] = 'Eroare SMTP: Următoarele adrese de e-amil de expediere  nu au fost corecte: ';
$PHPMAILER_LANG['data_not_accepted'] = 'Eroare SMTP: Datele nu au fost acceptate.';
$PHPMAILER_LANG['connect_host'] = 'Eroare SMTP: Nu s-a putut face conectare la hostul SMTP.';
$PHPMAILER_LANG['file_access'] = 'Nu s-a putut accesa fişierul: ';
$PHPMAILER_LANG['file_open'] = 'Eroare fişier: Nu s-a putut deschide fişierul: ';
$PHPMAILER_LANG['encoding'] = 'Encodare necunoscută: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Salvaţi schimbările');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Limba');
define('_FUNCTIONS','Funcţii');
define('_SHOW','Arătaţi');
define('_TO','La');
define('_DAY','ziua');
define('_LAST','Ultimul(a) ');
define('_ACTIVE','Activ');
define('_DEACTIVATE','Dezactivaţi');
define('_INACTIVE','Dezactivat');
define('_ACTIVATE','Activaţi');
define('_ACTIVATE2','Activaţi?');
define('_VIEW','Vizibil');
define('_VIEWPRIV','Vizibil ?');
define('_MVADMIN','Numai administratorilor');
define('_MVUSERS','Numai utilizatorilor înregistraţi');
define('_MVANON','Utilizatorilor anonimi (neînregistraţi)');
define('_MVALL','Tuturor vizitatorilor');
define('_IMAGE','Imagine');
define('_GO','Go!');
define('_OPTION','Opţiuni');
define('_CATEGORY','Categorii');
define('_SUBCATEGORY','Sub-Category');
define('_ID','ID');
define('_EXPIRATION','Expiră la');
define('_DAYS','zile');
define('_WARNING','Atenţiune');
define('_POLLTITLE','Titlul chestionarului');
define('_POLLEACHFIELD','Vă rugăm introduceţi fiecare opţiune disponibilă în câte un singur câmp');
define('_ADDCATEGORY','Adăugaţi o categorie nouă');
define('_PAGEBREAK','Dacă doriţi pagini multiple puteţi scrie <b>&lt;!--pagebreak--&gt;</b> unde doriţi să apară întreruperea.');
define('_SIGNATURE','Semnătura');
define('_DESCRIPTION','Descriere');
define('_EDITCATEGORY','Editaţi Categorie');
define('_IN','în');
define('_DESCRIPTION255','Descriere: (maxim 255 caractere)');
define('_MODCATEGORY','Modificaţi o categorie');
define('_SUBMITTER','Expeditor');
define('_VISIT','Vizitaţi');
define('_EXTENDEDTEXT','urmare');
define('_CHECKCATEGORIES','Verificaţi categoriile');
define('_INCLUDESUBCATEGORIES','(includeti sub-categorii)');
define('_CHECKSUBCATEGORIES','Verificaţi sub-categoriile');
define('_VALIDATELINKS','Validaţi linkurile');
define('_FAILED','Eroare!');
define('_BEPATIENT','(Vă rugăm aveţi rabdare)');
define('_VALIDATINGCAT','Se validează categoria (şi toate subcategoriile sale)');
define('_VALIDATINGSUBCAT','Se valideaza sub-categoria');
define('_OK','Ok!');
define('_CHECK','Verificaţi');
define('_IGNORE','Ignoraţi');
define('_HITS','Accesări');
define('_FILESIZE', 'Mărimea fişierului');
define("_EZTHEREIS","Există");
define("_EZSUBCAT","sub-categorii");
define("_EZATTACHEDTOCAT","în cadrul acestei categorii");
define("_EZBROKENLINKS","Linkuri defecte");
define("_DELEZLINKCATWARNING","ATENŢIUNE : Sunteţi sigur că doriţi să ştegeţi această categorie?<br /> Prin asta veţi şterge toate subcategoriile aferente precum şi linkurile ataşate!");

// index.php
define('_DEFHOMEMODULE','Modulul Pagina principală implicită');
define('_MODULEINHOME','Modul încărcat în pagina principală:');
define('_CHANGE','Schimbaţi');
define('_WHOSONLINE','Cine-i online');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','Notepad-ul a fost blocat<br />Numai administratorul prncipal(superuser) poate să-l deblocheze');
define('_NP_SAVE','Salvaţi notiţele');
define('_NP_UNLOCK','Deblocaţi Notepad-ul');
define('_NP_LOCK','Blocaţi Notepad-ul');
// news
define('_STICKY','Articole sticky');
define('_ARTICLEUP','Articol în SUS');
define('_ARTICLEDOWN','Articol în JOS');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Articole programate');
define('_STORYID','ID-ul povestirii');
define('_CURRENTPOLL','Chestionarul curent');

// admin.php
define('_ADMINISTRATION','Administrare');
define('_NOADMINYET','Nu există încă conturi Administrator, trebuie să creaţi un cont Super User:');
define('_CREATEUSERDATA','Vreţi să creaţi un utilizator normal cu aceleaşi date?');
define('_ADMINLOGIN','Login în sistemul de administrare');
define('_ADMINID','ID-ul administratorului');
define('_EMAIL','E-mail');
define('_SUBMIT','Trimiteţi');
define('_YOUARELOGGEDOUT','Aţi fost deconectat!');
define('_PASSWDNOMATCH','Ne pare rău, parola nouă nu se potriveste. Întoarceti-vă şi încercaţi încă o data');
define('_LOGIN_REMEMBERME','Reţineţi-mă?');
define('_ADMINMENU_LOGOUT','Logout meniu de administrare');
define('_PASSWORD_MALFORMED','Vă rugăm să introduceţi cel puţin o cifră, o literă mare şi o literă mică în parola Dvs.');

// admins.php
define('_AUTHORSADMIN','Administrare Autori');
define('_NAME','Nume');
define('_REQUIRED','(obligatoriu)');
define('_MODIFYINFO','Modificaţi informaţiile');
define('_DELAUTHOR','Ştergeţi autorul');
define('_ADDAUTHOR','Adăugaţi un administrator nou');
define('_PERMISSIONS','Permisiuni');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','ATENŢIUNE: Dacă bifaţi Super User, userul respectiv va avea acces total!');
define('_ADDAUTHOR2','Adăugaţi administrator');
define('_RETYPEPASSWD','Introduceţi parola încă odată');
define('_FORCHANGES','(Numai pentru schimbări)');
define('_COMPLETEFIELDS','Trebuie să completaţi toate câmpurile obligatorii');
define('_CREATIONERROR','Eroare la creare autor');
define('_AUTHORDEL','Ştergeţi autor');
define('_PUBLISHEDSTORIES','Acest administrator are povestiri publicate');
define('_SELECTNEWADMIN','Vă rugăm selectaţi un nou administrator pentru a le re-atribui');
define('_GODNOTDEL','*(contul GOD nu poate fi şters)');
define('_MAINACCOUNT','Administrator God*');
define('_USERS','Utilizatori');

// banners.php
define('_BANNERSADMIN','Administrare Bannere');
define('_DELETEBANNER','Ştergeţi bannerul');
define('_SURETODELBANNER','Sunteţi sigur că doriţi ştergerea acestui banner?');
define('_EDITBANNER','Editare Banner');

// blocks.php
define('_BLOCKSADMIN','Administrare Blocuri');
define('_CENTER','Centru');
define('_CENTERUP','Centrat sus');
define('_CENTERDOWN','Centrat jos');
define('_BLOCKFILE','(Blocati fişierul)');
define('_BLOCKFILE2','FIŞIER');
define('_BLOCKSYSTEM','SISTEM');
define('_ADDNEWBLOCK','Adăugaţi un bloc nou');
define('_RSSFILE','URL-ul RSS/RDF al fişierului');
define('_ONLYHEADLINES','(doar pentru titluri)');
define('_REFRESHTIME','Timpul de actualizare');
define('_CREATEBLOCK','Creaţi un bloc');
define('_EDITBLOCK','Editaţi blocul');
define('_BLOCK','Bloc');
define('_SAVEBLOCK','Salvaţi blocul');
define('_BLOCKACTIVATION','Activaţi blocul');
define('_BLOCKPREVIEW','Aceasta este o previzualizare pentru Bloc');
define('_WANT2ACTIVATE','Doriţi să activaţi acest bloc?');
define('_ARESUREDELBLOCK','Sunteţi sigur că doriţi să ştergeţi acest bloc');
define('_BLOCKUP','Bloc SUS');
define('_BLOCKDOWN','Bloc JOS');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Titlu');
define('_POSITION','Poziţie');
define('_WEIGHT','Vertical');
define('_STATUS','Stare');
define('_LEFTBLOCK','Blocul din stânga');
define('_LEFT','Stânga');
define('_RIGHTBLOCK','Blocul din dreapta');
define('_RIGHT','Dreapta');
define('_TYPE','Tip');
define('_CUSTOM','Personalizat');
define('_FILENAME','Numele fişierului');
define('_FILEINCLUDE','(Selectaţi un bloc pentru a fi inclus. Toate celelalte câmpuri vor fi ignorate)');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Ştergeţi comentarii');
define('_SURETODELCOMMENTS','Sunteţi sigur că doriţi ştergerea comentariilor selectate şi a răspunsurilor aferente?');

// database.php
define('_SAVEDATABASE','Backup baza de date');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Stare actuala');
define('_ACTIVATEPAGE','Activaţi această pagina?');

// history.php
define('_EPHEMADMIN','Administrare temporare');
define('_ADDEPHEM','Adăugaţi a temporar nou');
define('_EPHEMDESC','Descriere temporar');
define('_EPHEMMAINT','Administrare Temporare(Editare/Stergere):');
define('_EPHEMEDIT','Editaţi Temporare');
define('_EPHEMDELETE','Ştergeţi intrarea');

// headlines.php
define('_RSSFAIL','Există o problemă cu RSS file URL');
define('_RSSTRYAGAIN','Vă rugăm verificaţi URL-ul şi fiserul CSS, apoi încercaţi din nou.');
define('_RSSCONTENT','(conţinut RSS/RDF)');
define('_IFRSSWARNING','Dacă completaţi URL-ul conţinutul pe care l-aţi scris nu va fi afişat!');
define('_SETUPHEADLINES','(Selectaţi Personalizat şi scrieţi URL-ul sau pur şi simplu selectaţi un site din lista pentru a obţine titlurile ştirilor)');
define('_HEADLINESADMIN','Administrare Tiluri');
define('_ADDHEADLINE','Adăugaţi un titlu');
define('_EDITHEADLINE','Editaţi titlul');
define('_SURE2DELHEADLINE','ATENŢIUNE: Sunteţi sigur că vreţi să ştergeţi acest titlu?');

// messages.php
define('_MESSAGESADMIN','Administare Mesaje');
define('_MESSAGETITLE','Titlu');
define('_MESSAGECONTENT','Conţinut');
define('_ALLMESSAGES','Mesaj general');
define('_EDITMSG','Editaţi mesajul');
define('_ADDMSG','Adăugaţi mesaj');
define('_REMOVEMSG','Sunteţi sigur că doriţi ştergerea acestui mesaj? ');
define('_CHANGEDATE','Schimbaţi data de start la data de azi?');
define('_IFYOUACTIVE','Dacă activaţi acest mesaj acum, data de start va fi setată la cea de azi');

// modules.php
define('_MODULESADMIN','Administrare module');
define('_HOMECONFIG','Configurarea paginii principale');
define('_MODULESADDONS','Module şi Addon-uri');
define('_INHOME','În pagina PRINCIPALĂ');
define('_MODULEHOMENOTE','<b>-= ATENŢIUNE =-</b><br />Modulul îngroşat reprezintă modulul care este în pagina principală.<br />Nu puteţi dezactiva sau restricţiona acest modul din moment ce este cel implicit!<br />Dacă ştergeţi directorul modului veti primi o eroare în pagina principală.<br />De asemenea, acest modul a fost înlocuit cu linkul <i>Pagina principală</i> în blocul modulelor.');
define('_PUTINHOME','Puneţi-l în pagina principală');
define('_SURETOCHANGEMOD','sunteti sigur că vreţi să schimbati pagina Dvs. principală de la');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] înseamnă că este un modul al carui nume şi link nu va fi vizibil în blocul modulelor');
define('_SHOWINMENU','Vizibil în blocul modulelor?');
define('_CUSTOMTITLE','Titlu personalizat');
define('_MODULEEDIT','Editare module');
define('_VERSION','Versiunea');
define('_UPGRADE','Upgrade la %s');
define('_DBSIZE','Mărimea DB');
define('_CVS_EXPLAIN','Prin intermediul CVS puteţi primii ultimele modificări de fişiere foarte simplu.<br /><b>DAR</b> ultima versiune ale unui fişier poate să conţină şi buguri din moment ce nu este o versiune oficială.<br />Dacă nu sunteţi familiarizat cu PHP puteţi face un update de fişiere dând click pe linkul de mai jos.<br />Nu uitaţi să faceţi un back-up mai întâi!!!');
define('_CVS_UPDATE','Update fişiere prin CVS');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','De la');
define('_STAFF','echipa de administratori a sitului');
define('_NL_RECIPS','Destinatari');
define('_SUBSCRIBEDUSERS','Utilizatori înscrişi');
define('_NL_ALLUSERS','Toţi membrii');
define('_NL_ADMINS','Administratori');
define('_NL_REGARDS','Salutări');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Vă rugăm să reveniţi şi să verificaţi textul Dvs.:');
define('_MANYUSERSNOTE','ATENŢIUNE! Acest text va fi primit de către mai mulţi utilizatori. Asteptaţi până când script-ul finalizează operaţia. Acest lucru poate dura câteva minute!');
define('_NL_NOUSERS','Grupul selectat pentru a primii această scrisoare nu are nici un utilizator<br />Vă rugăm întoarceţi-vă şi selectaţi un alt grup');
define('_NUSERWILLRECEIVE','Utilizatorii vor primii această scrisoare.');
define('_NLUNSUBSCRIBE',"Am trimis acest mesaj Dvs. deoarece aţi optat pentru primirea de scrisori de înştiinţare cu noutăţi de pe situl nostru\n\nPuteţi alege în orice moment să nu mai primiţi astfel de scrisori urmând linkul <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">acesta</a>\n\nDacă doriţi asistenţă în continuare, vă rugăm să trimiteţi e-mail la <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">administratorul nostru</a>");
define('_NEWSLETTERSENT','Scrisoarea a fost trimisă.');

// referers.php
define('_WHOLINKS','Cine se leagă de situl nostru?');
define('_DELETEREFERERS','Ştergeţi referenti');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Depanare');
define('_SITECONFIG','Configuraţia sitului');
define('_GENSITEINFO','Informaţii generale despre sit');
define('_SITENAME','Numele sitului');
define('_SITEURL','URL-ul sitului');
define('_SITELOGO','Logo-ul sitului ');
define('_SITESLOGAN','Sloganul sitului');
define('_STARTDATE','Data de start a sitului');
define('_ADMINEMAIL','E-mailul administratorului');
define('_ITEMSTOP','Numărul de articole pe pagina Top');
define('_STORIESHOME','Numărul de povestiri din pagina principală');
define('_OLDSTORIES','Poveştiri în blocul articolelor vechi');
define('_ALLOWANONPOST','Permiteţi anonimilor să scrie mesaje publice?');
define('_DEFAULTTHEME','Tema grafică implicită pentru situl Dvs.');
define('_SHOWSEC','Arătaţi codul de securitate');
define('_TOOLTIPS','Arătaţi tooltips în câmpurile corespunzătoare');
define('_UM_TOGGLE','Activaţi monitorul de detectare a unui update nou disponibil');
define('_UM_EXPLAIN','Acesta va găsii două informaţii de pe situl nostru, dragonflycms.org: versiunea curentă a Dragonfly şi dacă există există vreun mesaj semnificativ specific versiunii Dvs. de dragonfly. Singura dată trimisă către situl nostru este versiunea Dragonfly a sitului Dvs. Noi <strong>nu</strong> înregistrăm aceste cereri făcute către serverul nostru.');
// maintenance
define('_MAINTENANCE','Modul ÎN CONSTRUCŢIE a sitului');
define('_MESSAGE','Mesaj');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Opţiuni mulţi-limbă');
define('_SELLANGUAGE','Selectaţi limba pentru situl Dvs.');
define('_LOCALEFORMAT','Formatul local pentru timp');
define('_ACTMULTILINGUAL','Doriţi să activaţi caracteristicile mulţi-limbă? ');
define('_ACTUSEFLAGS','Afişaţi steguleţele în loc de listă? ');
// banners
define('_BANNERSOPT','Opţiuni Bannere');
define('_ACTBANNERS','Doriţi activarea bannerele în situl Dvs.?');
// footer
define('_FOOTERMSG','Mesajele din partea de jos a paginii');
define('_FOOTERLINE1','Rândul 1 din partea de jos a paginii');
define('_FOOTERLINE2','Rândul 2 din partea de jos a paginii');
define('_FOOTERLINE3','Rândul 3 din partea de jos a paginii');
// backend
define('_BACKENDCONF','Configuraţie Backend');
define('_BACKENDTITLE','Titlul Backend');
define('_BACKENDLANG','Limba Backend');
// mail stories
define('_MAIL2ADMIN','Trimiteţi prin e-mail povestiri noi administratorului');
define('_NOTIFYSUBMISSION','Doriţi anunţarea de noi trimiteri prin e-mail?');
define('_EMAIL2SENDMSG','Adresa de e-mail la care se va trimite mesajul');
define('_EMAILSUBJECT','Subiectul e-mail-ului');
define('_EMAILMSG','Trimiteţi prin e-mail mesajul');
define('_EMAILFROM','Contul de e-mail (de la)');
// comments
define('_COMMENTSOPT','Opţiuni comentarii');
define('_COMMENTSLIMIT','Limitarea comentariului, în bytes');
define('_COMMENTSMOD','Moderare Comentarii');
define('_MODADMIN','Moderare de catre administrator');
define('_MODUSERS','Moderare de catre utilizatori');
define('_NOMOD','Fără moderare');
// adminmenu
define('_GRAPHICOPT','Opţiuni grapice');
define('_BOTH','Ambele');
define('_GRAPHICAL','Grafic');
define('_SIDEBLOCK','Bloc lateral');
// miscellaneous
define('_MISCOPT','Opţiuni Diverse');
define('_ACTIVATEHTTPREF','Activaţi referenţii HTTP?');
define('_MAXREF','Câţi referenţi doriţi, maxim?');
define('_COMMENTSPOLLS','Doriţi activarea comentariilor în chestionare?');
define('_COMMENTSARTICLES','Doriţi să activaţi comentariile în articole?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Opţiuni cenzurare');
define('_CENSORMODE','Modul cenzurare');
define('_NOFILTERING','Fără filtrare');
define('_EXACTMATCH','Potrivire exactă');
define('_MATCHBEG','Care se potrivesc la începutul cuvântului');
define('_MATCHANY','Care se potrivesc oriunde în text');
define('_CENSORREPLACE','Înlocuiţi cuvintele cenzurate cu:');
// email
define('_EMAILOPTIONS','Opţiuni pentru e-mail din modulul Contact şi Scrisori de înştiinţare cu noutăţi');
define('_ALLOW_HTML_EMAIL','Permiteţi e-mail html');
define('_USE_SMTP','Utilizaţi SMTP pentru e-mail în loc de php');
define('_SMTP_HOST','Adresa host-ului smtp (smtp.example.com)');
define('_USE_SMTP_AUTH','Serverul necesită autorizare SMTP');
define('_SMTP_USER_NAME','Numele utilizatorului pentru SMTP');
define('_SMTP_USER_PASS','Parola utilizatorului pentru SMTP');

// cpg_adminmenu.php
define('_ADMINMENU','Meniul de administrare');
define('_ADMINLOGOUT','Logout');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Membrii');
define('_AMENU3','Mesaje');
define('_AMENU4','Forumuri');
define('_AMENU5','Informativ');
define('_AMENU6','Legături spre situl nostru');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Module');
define('_BMENU1','Ajutor');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Preferinţe');
define('_DATABASE','Baza de date');
define('_BLOCKS','Blocuri');
define('_MODULES','Module');
define('_EDITADMINS','Administratori');
define('_MESSAGES','Mesaje');
define('_BANNERS','Bannere');
define('_HTTPREFERERS','Referenţi HTTP');
define('_EDITUSERS','Utilizatori');
define('_USERSCONFIG','Config membrii');
define('_NEWSLETTER','Scrisori');
define('_SUBMISSIONS','Trimiteri');
define('_ADDSTORY','Adăugaţi o povestire');
define('_TOPICS','Topicuri');
define('_ADMPOLLS','Sondaje/Chestionare');
define('_EPHEMERIDS','Temporare');
define('_REVIEWS','Review-uri');
define('_ENCYCLOPEDIA','Enciclopedia');
define('_SURVEYS','Sondaje');
define('_SECTIONS','Secţiuni');
define('_ARTICLES','Articole');
define('_FAQ','IF');
define('_DOWNLOAD','Download');
define('_WEBLINKS','Linkuri');
define('_CONTENT','Conţinut');
define('_SYSINFO','System Info');
define('_REPORTABUG','Raportaţi un bug');
//coppermine admin
define('_W_INSTALL','Care instalare?');
define('_W_PAGE','Care pagină?');
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
define('_ERROR','EROARE');
define('_SEC_ERROR','Eroare de securitate');
define('_ERROR_NOT_SET','%s nu a fost trimis');
define('_ERROR_NO_POST','Postarea de pe alt host este interzisă...');
define('_ERROR_NO_GET','Cererile GET nu sunt permise pentru această funcţie...');
define('_ERROR_BAD_CHAR','Caracterul pe care l-aţi inclus în cererea %s a Dvs. este interzis...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Aţi încercat să accesaţi această pagină printr-un link necorespunzător...');
define('_ERROR_NONE_TO_DISPLAY','Nu sunt %s de afişat');
define('_ERROR_DELETE_CONF','Sunteţi sigur că doriţi să ştergeţi %s?');
define('_ERROR_NO_EXIST','%s nu există');
define('_ERROR_ALREADYEXIST','%s există deja');
define('_TASK_COMPLETED','Operaţiunea a fost încheiată!');
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
