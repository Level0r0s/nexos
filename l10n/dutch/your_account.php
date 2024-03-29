<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/dutch/your_account.php,v $
  $Revision: 9.11 $
  $Author: nanocaiordo $
  $Date: 2006/06/23 10:52:16 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_MA_HIDDEN','Verborgen');
define('_MA_VISIBLE','Zichtbaar');
define('_MA_REQUIRED','Verplicht');
define('_MA_PROFILE_INFO','Profiel Informatie');
define('_MA_ADDITIONAL','Extra Informatie');
define('_MA_REALNAME','Echte Naam');
define('_MA_FAKEMAIL','Nep Email');
define('_MA_HOMEPAGE','Home Page');
define('_MA_ICQ','ICQ Nummer');
define('_MA_AIM','AIM Addres');
define('_MA_YIM','Yahoo Messenger');
define('_MA_MSNM','MSN Messenger');
define('_MA_LOCATION','Mijn Lokatie');
define('_MA_OCCUPATION','Mijn Beroep');
define('_MA_INTERESTS','Mijn Interesse');
define('_MA_SIGNATURE','Mijn Handtekening');
define('_MA_EXTRAINFO','Extra Informatie');
define('_MA_PREFERENCES','Opties');
define('_MA_TIMEZONE','Tijd Zone');
define('_MA_DATEFORMAT','Datum Formaat');
define('_MA_RECEIVENEWSLETTER','Nieuwsbrief Ontvangen');
define('_MA_SHOWEMAIL','Laat mijn email adres zien');
define('_MA_SHOWONLINE','Laat mijn online status zien');
define('_MA_ALLOWBBCODE','Sta BBCode Altijd Toe');
define('_MA_ALLOWHTML','Sta HTML Altijd Toe');
define('_MA_ALLOWSMILIES','Sta Smilies Altijd Toe');
define('_MA_NOTIFYREPLY','Breng me op de hoogte bij een reply');
define('_MA_NOTIFYPM','Breng me per email op de hoogte van een Prive Bericht');
define('_MA_POPUPPM','Pop Up Venster bij nieuw Prive Bericht');
define('_MA_ATTACHSIG','Geef Altijd Signature Weer');
define('_MA_PRIVATE','Prive Informatie');
define('_MA_FIRSTNAME','Voornaam');
define('_MA_LASTNAME','Achternaam');
define('_MA_GENDER','Geslacht');
define('_MALE','Man');
define('_FEMALE','Vrouw');
define('_MA_BIRTHDAY','Geboortedatum');
define('_MA_BIRTHDAYMSG','Vul in als maand/dag/jaar');
define('_MA_TELEPHONE','Telefoonnummer');
define('_MA_FAX','Faxnummer');
define('_OSC_NEWSLETTER','Winkel nieuwsbrief ontvangen');
define('_OSC_NEWSLETTERMSG','Dit is een apparte email over nieuwe shop artikelen');
define('_BOUNDREGISTRATION','Door op registreren te klikken stem je in met de registratie termen!');
define('_MA_REGISTRATION','Registratie Termen');
define('_MA_AGREE_OVER_13','Ik ga Akkoord met deze Termen en ben OUDER DAN of 13 jaar');
define('_MA_AGREE_UNDER_13','Ik ga Akkoord met deze Termen en ben JONGER dan 13 jaar');
define('_MA_DO_NOT_AGREE','Ik ga niet Akkoord met deze Termen');
define('_MA_REGISTRATION_INFO','Registratie Informatie');
define('_MA_ITEMS_REQUIRED','Items gemarkeerd met een * moeten worden ingevuld.');
define('_MA_PROFILE_INFO_NOTICE','Deze informatie kunnen andere ook zien');
define('_USERNAME','Gebruikersnaam');
define('_EMAILADDRESS','Email adres');
define('_BLANKFORAUTO','Bij leeg wachtwoord veld, word er 1 voor je verzonnen');
define('_CONFIRMPASSWORD','Bevestig wachtwoord');
define('_MA_SUBMIT','Verzend');
define('_MA_FAKEMAILMSG','(Deze Email word openbaar gemaakt, typ dus wat je wilt, tis SPAM-PROOF)');
define('_MA_DATEFORMATMSG','Dit formaat dat word gebruikt is gelijk aan de PHP <a href="http://php.net/date">date()</a> functie');
define('_MA_SIGNATUREMSG','This is a block of text that can be added to my posts<br />'.sprintf(_M_CHARS, 255));
define('_MA_NOTIFYREPLYMSG','Zend een email wanneer iemand een bericht post in een topic waar jij op reageerd. Dit kan altijd worden veranderd');
define('_MA_POPUPPMMSG','Opent een POPUP venster die meld dat u een nieuw privè bericht hebt!');
define('_ACTDISABLED','Deze functie is <b>UITGESCHAKELD</b> door de site admin.');
define('_USERFINALSTEP','Nieuwe gebruiker registratie: Laatste stap');
define('_USERCHECKDATA','controleer de volgende gegevens.<p>Als alles correct is, bewaar de registratie door op de "Voltooien"-knop te klikken, anders "Ga terug" en verbeter de gegevens waar nodig.');
define('_YOURPASSWORD','Je wachtwoord is');
define('_YOUWILLRECEIVE','Je ontvangt een bevestigings email met een link die je binnen 24 uur moet bezoeken, om je account te activeren');
define('_YOUWILLRECEIVE2','Je ontvangt een email met bevestigings informatie.');
define('_WAITAPPROVAL','De administrator zal je gegevens bekijken, er word een bevestiging gestuurd wanneer dit is voltooid.');
define('_FINISH','Voltooien');
define('_YOUUSEDEMAIL','U of iemand anders heeft uw E-mailadres gebruikt');
define('_TOREGISTER','om een account te registreren bij');
define('_USERREGLOGIN','Gebruiker registratie/login');
define('_USERAPPLOGIN','Gebruiker registratie/login');
define('_ACCOUNTCREATED','Nieuw gebruikers account gecreëerd!');
define('_YOUAREREGISTERED','De registratieprocedure is voltooid. U zult uw wachtwoord ontvangen op het door u opgegeven E-mailadres.');
define('_FINISHUSERCONF','Jou aanvraag voor een nieuwe account is klaar. ontvangt een bevestigings email met een link die je binnen 24 uur moet bezoeken, om je account te activeren');
define('_FINISHUSERCONF2','Jou aanvraag voor een nieuwe account is klaar. Je kunt nu ');
define('_FINISHUSERCONF3','login hier');
define('_TOFINISHUSER','Om de registratie te voltooien moet je de link binnen 24 uur bezoeken!');
define('_ACTIVATIONSUB','Nieuwe Gebruiker Account Registratie');
define('_REGISTRATIONSUB','Nieuw Gebruiker Account Registratie');
define('_THANKSUSER','Bedankt voor het registreren bij');
define('_FOLLOWINGMEM','Accountinfo:');
define('_TOAPPLY','om te bevestigen voor een account voor');
define('_APPLICATIONSUB','Nieuwe Gebruiker Account');
define('_YOUAREPENDING','Welkom! Je account word door de Administrator bekeken, er word een email gestuurd wanneer jouw account is bevestigd!');
define('_THANKSAPPL','Bedankt voor het registreren op');
define('_MEMADD','Lid toegevoegd');
define('_MEMAPL','Gebruiker Toegevoegd');
define('_ERRORINVEMAIL','FOUT: Ongeldig E-mailadres');
define('_NICK2SHORT','Nicknaam is te kort. Hij moet meer dan 3 tekens zijn');
define('_SECCODEINCOR','Veiligheidscode is niet juist, Ga AUB terug en type ze exact zoals ze u gegeven is...');
define('_ERROREMAILSPACES','FOUT: Een E-mailadres bevat geen spaties');
define('_ERRORINVNICK','FOUT: Ongeldige loginnaam');
define('_NICK2LONG','Loginnaam moet minder dan 25 karakters bevatten');
define('_NAMERESERVED','FOUT: Deze naam is reeds gereserveerd');
define('_NAMEDENIED','ERROR: Dit deel van je gebuikersnaam mag niet worden gebruikt :');
define('_NICKNOSPACES','FOUT: Een loginnaam mag geen spaties bevatten.');
define('_NICKTAKEN','FOUT: Loginnaam is al in gebruik');
define('_EMAILREGISTERED','FOUT: E-mailadres reeds geregistreerd');
define('_PASSDIFFERENT','Voer twee identieke wachtwoorden in.');
define('_YOUPASSMUSTBE','Je wachtwoord moet');
define('_CHARLONG','karakters lang zijn');
define('_ACCOUNTRESERVED','Nieuwe Gebruiker Account Gereserveerd!');
define('_EMAILNOTUSABLE','ERROR: Email adres is niet bruikbaar');
define('_ACTIVATIONYES','Nieuwe Gebruiker Activatie');
define('_ACTMSG','Je Account is Geactiveerd. Log nu in <a href="'.getlink("Your_Account").'">met deze link</a> met gebruik van je wachtwoord en gebruikersnaam.');
define('_ACTIVATIONERROR','Nieuwe Gebruiker Activatie Error');
define('_ACTERROR1','Nieuwe Gebruiker Controle Nummer is Verkeerd.<br /><br />Wees er zeker van dat deze klopt, log opnieuw in door <a href="'.getlink("Your_Account").'">hier te klikken</a>.');
define('_ACTERROR2','Er is geen gebruikersinformatie te vinden.<br /><br />Je kunt je registreren door <a href="'.getlink("Your_Account").'">hier te klikken</a>.');
define('_CURRENTPASSWORD','Huidig Wachtwoord');
define('_CURRENTPASSWORDMSG','Je moet je huidige wachtwoord bevestigen als u het wil wijzigen of uf email-adres wenst te veranderen');
define('_NEWPASSWORD','Nieuw Wachtwoord');
define('_NEWPASSWORDMSG','Als je een nieuw wachtwoord wilt, moet je hier het nieuwe wachtwoord invullen');
define('_CONFIRMPASSWORDMSG','Je hoeft alleen je wachtwoord te bevestigen als je bovenstaande veranderd');
define('_SUREDELETE','Weet je zeker dat je je account wilt verwijderen?');
define('_CATEGORY_SELECT','Selecteer categorie');
define('_SELECT_AVATAR','Selecteer avatar');
define('_CANCEL_AVATAR','Annuleer avatar');
define('_THISISYOURPAGE','Dit is uw persoonlijke pagina');
define('_PERSONALINFO','Persoonlijke informatie');
define('_ABOUT_USER','Alles Over ');
define('_CONTACTINFO','Contactgegevens');
define('_PM','Prive bericht');
define('_JOINED','Toegevoegd');
define('_RANK','Rank');
define('_LAST10BBTOPIC','Laatste 10 Forum Onderwerpen');
define('_LAST10BBTOPICS','Laatste 10 Forum Onderwerpen gestart door');
define('_LAST10COMMENT','Laatste 10 Commentaren');
define('_LAST10DOWNLOAD','Laatste 10 Downloads');
define('_LAST10DOWNLOADS','Laatste 10 Downloads door');
define('_LAST10SUBMISSION','Laatste 10 Nieuwsbijdragen');
define('_LAST10WEBLINK','Laatste 10 Web Links');
define('_LAST10WEBLINKS','Laatste 10 Web Links door');
define('_MEMBERGROUPS','Groep Lidmaatschappen');
define('_AVATAR','Avatar');
define('_WEBSITE','Website');
define('_USERSTATUS','Actuele gebruikerstatus');
define('_ONLINE','Online');
define('_OFFLINE','Offline');
define('_NOTSUBSCRIBED','U bent niet ingeschreven voor de nieuwsbrief');
define('_SUBSCRIBED','U bent ingeschreven voor onze nieuwsbrief');
define('_MA_BROADCAST','Verzend publiek bericht');
define('_BROADCASTTEXT','U kunt hier een <i>Publiek Bericht</i> verzenden (255 characters max). Dit bericht zal aan alle online gebruikers getoond worden gedurende de volgende 10 minuten. Elke online gebruiker zal uw bericht zien in een rode balk onder de logo van de website. Elke gebruiker kan deze mogelijkheid deactiveren vanaf <a href="'.getlink('Your_Account&amp;edit=prefs').'">hier</a>. Misbruik dit niet a.u.b. HTML code is hierbij niet toegestaan.');
define('_BROADCASTSENT','Uw Publiek Bericht is verzonden.');
define('_BROADCASTNOTSENT','<b>FOUT:</b> Uw Publiek Bericht is leeg of u verzond reeds kort een bericht. Om een ander bericht te kunnen verzenden dient u wel 10 minuten te wachten.');
define('_RETURNPAGE','Terugkeren naar uw persoonlijke pagina');
define('_MA_MYHEADLINES','Mijn Hoofdtitels');
define('_SELECTASITE','Selecteer det site waarvan u de hoofdlijnen wilt lezen:');
define('_SELECTASITE2','Selecteer een Web Site');
define('_ORTYPEURL','Of typ de hoofdlijnen RSS/XML url van uw verkozen site:');
define('_MA_GO','Go');
define('_HEADLINESFROM','Hoofdlijnen van');
define('_MA_READMYJOURNAL','Lees Mijn Blog');
define('_ACCDELETED','Account is verwijderd');
define('_SERVERNOMAIL','Deze server kan geen mail versturen. Neem contact op met de Administrator.');
define('_ACCSUSPENDED','Account is Vergrendeld');
define('_BESUREACT','Wees er zeker van dat je je account hebt geactiveerd.');
define('_MEMDEL','Lid verwijderd');
define('_YOUBAD','ERROR: Je probeerde een ongeldige actie!');
define('_NOINFOFOR','Er is geen info beschikbaar voor');
define('_SORRYNOUSERINFO','Sorry, er werd geen overeenkomende gebruikersinfo gevonden');
define('_LOGININCOR','Login fout! Probeer opnieuw...');
define('_UPDATEFAILED','Gebruikersinfo is niet bijgewerkt. Neem a.u.b. contact met de beheerder.');
define('_ACCTCHANGE','Verander Info');
define('_ACCTCOMMENTS','Commentaar Setup');
define('_ACCTEXIT','Loguit Exit');
define('_ACCTHOME','Wijzig Home');
define('_ACCTJOURNAL','Jouw Dagboek');
define('_ACCTTHEME','Kies Thema');
define('_CHANGEHOME','Verander home');
define('_CHANGEYOURINFO','Verander uw instellingen');
define('_CONFIGCOMMENTS','Wijzig opmerkingen');
define('_DELETEACCT','Verwijder Account');
define('_LOGOUTEXIT','Afmelden');
define('_MA_MESSAGES','Messages');
define('_RETURNACCOUNT','Terugkeren naar Uw Profiel Pagina');
define('_SELECTTHETHEME','Selecteer thema');
define('_DELETEREASON','Reden voor Verwijderen');
define('_SUSPENDREASON','Reden voor Vergrendeling');
define('_DENYREASON','Reden voor Negeren');
define('_CHECKNUM','Activatie #');
define('_REGDATE','Datum Toegevoegd');
define('_ACCTAPPROVE','Account Goedgekeurd');
define('_ACCTDELETE','Account Verwijderd');
define('_ACCTDENY','Account Genegeerd');
define('_ACCTREMOVE','Account Verwijderd');
define('_ACCTRESTORE','Account Hersteld');
define('_ACCTSUSPEND','Account Vergrendeld');
define('_ACTIVEUSERS','Actieve Gebruikers');
define('_MA_ADDUSER','Voeg een nieuwe gebruiker toe');
define('_MA_ADDUSERBUT','Voeg Gebruiker toe');
define('_MA_ALLOWUSERS','Sta andere gebruikers toe mijn email adres te zien');
define('_APPROVE','Aanvaard');
define('_APPROVEUSER','Aanvaard Gebruiker');
define('_MA_DELETEUSER','Verwijder Gebruiker');
define('_DELETEUSERS','Verwijderde Gebruikers');
define('_DENY','Weiger');
define('_DENYUSER','Weiger Gebruiker');
define('_DETUSER','Gebruiker Details');
define('_MA_EDITUSER','Bewerk Gebruiker');
define('_MA_FORCHANGES','(Alleen Voor Wijzigingen)');
define('_MA_FUNCTIONS','Functies');
define('_HASAPPROVE','is goedgekeurd.');
define('_HASDELETE','is verwijderd.');
define('_HASDENY','is genegeerd.');
define('_HASREMOVE','is verwijderd.');
define('_HASRESTORE','is teruggeplaatst.');
define('_HASSUSPEND','is vergrendeld.');
define('_MA_ID','ID');
define('_MA_MODIFY','Wijzig');
define('_MA_NAME','Naam');
define('_MA_NEWSLETTER','Nieuwsbrief');
define('_MA_OPTION','Optie');
define('_OR','of');
define('_MA_PERMISSIONS','Permissies');
define('_PROMOTE','Promoot');
define('_PROMOTEUSER','Promote Gebruiker');
define('_REMOVE','Verwijder');
define('_REMOVEUSER','Verwijder Gebruiker');
define('_MA_REQUIREDNOCHANGE','(Verplicht, kan achteraf niet gewijzigd worden)');
define('_RESEND','Opnieuw');
define('_RESENDMAIL','Zend Activatie Email Opnieuw');
define('_RESTORE','Herstel');
define('_RESTOREUSER','Herstel Gebruiker');
define('_MA_RETYPEPASSWD','Hertyp Wachtwoord');
define('_MA_SAVECHANGES','Bewaar veranderingen');
define('_SHOWMAIL','Laat Email Zien');
define('_SORRYTO','Je Account op');
define('_SURE2APPROVE','Weet je zeker dat je de gebruiker wilt goedkeuren');
define('_MA_SURE2DELETE','Weet je zeker dat je verwijderd gebruiker');
define('_SURE2DENY','Weet je zeker dat je de gebruiker wilt negeren');
define('_SURE2PROMOTE','Weet je zeker dat je de gebruiker wilt promoten');
define('_SURE2REMOVE','Weet je zeker dat je de gebruiker wilt verwijderen');
define('_SURE2RESEND','Weet je zeker dat je de gebruiker opnieuw de activatie email wilt sturen');
define('_SURE2RESTORE','Weet je zeker dat je de gebruiker wilt terughalen');
define('_SURE2SUSPEND','Weet je zeker dat je de gebruiker wilt vergrendelen');
define('_SUSPEND','Vergrendel');
define('_SUSPENDUSER','Vergrendel User');
define('_SUSPENDUSERS','Vergrendelde Users');
define('_MA_USERADMIN','Gebruikers Administratie');
define('_MA_USERID','Gebruiker ID');
define('_USERPROMOTED','Gebruiker is gepromoot tot admin.');
define('_MA_USERUPDATE','Gebruiker Updaten (bijwerken)');
define('_WAITINGUSER','Wachtende Gebruiker');
define('_WAITINGUSERS','Wachtende Gebruikers');
define('_MA_ARTICLES','Artikelen');
define('_MA_BBFORUM','Forum');
define('_MA_CONTENT','Inhoud');
define('_MA_DOWNLOAD','Downloads');
define('_MA_ENCYCLOPEDIA','Encyclopedie');
define('_MA_FAQ','FAQ');
define('_MA_REVIEWS','Besprekingen');
define('_MA_SECTIONS','Secties');
define('_MA_SURVEYS','Enquetes');
define('_MA_TOPICS','Onderwerpen');
define('_MA_WEBLINKS','Web Links');
define('_ADDERROR','ERROR: Er was een probleem met de database.');
define('_NAMEERROR','ERROR: Deze Admin naam is al gebruikt.');
define('_MA_NEEDTOCOMPLETE','Je hoeft niet alle velden in te vullen');
define('_MA_PASSWDNOMATCH','Sorrie, de nieuwe wachtwoorden komen niet overeen. Probeer opnieuw!');
define('_MA_USERNOEXIST','Gebruiker bestaat niet!');
define('_USERLOGIN','Gebruikerlogin');
define('_REGNEWUSER','Registratie nieuwe gebruiker');
define('_PASSWORDLOST','Wachtwoord vergeten?');
define('_NOPROBLEM','Geen probleem. Voer uw loginnaam en klik op Verzend. Er wordt dan een E-mail naar U verstuurt met daarin uw bevestigingscode. Na ontvangst moet U uw loginnaam en uw bevestigingscode opnieuw invoeren. Hierna krijgt u een nieuw wachtwoord gemaild.');
define('_CONFIRMATIONCODE','Bevestigingscode');
define('_SENDPASSWORD','Stuur wachtwoord');
define('_MA_YOUARELOGGEDOUT','U bent nu uitgelogd!');
define('_USERACCOUNT','Dit gebruikersaccount');
define('_HASTHISEMAIL','heeft dit E-mailadres reeds geregistreerd.');
define('_AWEBUSERFROM','Een webgebruiker van');
define('_HASREQUESTED','heeft verzoek ingediend om het wachtwoord te mailen.');
define('_YOURNEWPASSWORD','Uw nieuwe wachtwoord is:');
define('_YOUCANCHANGE','U kunt dit wijzigen nadat u weer heeft inlogd bij');
define('_IFYOUDIDNOTASK','Als u dit niet heeft aangevraagd, maakt u zich dan geen zorgen. Als er sprake is van een fout, log dan gewoon in met uw nieuwe wachtwoord.');
define('_PASSWORD4','Wachtwoord voor');
define('_MAILED','Gemaild.');
define('_CODEREQUESTED','heeft net een bevestigingscode verzocht om het wachtwoord te wijzigen.');
define('_YOURCODEIS','Uw bevestigingscode is:');
define('_WITHTHISCODE','Met deze code kunt u een nieuw wachtwoord opgeven bij');
define('_IFYOUDIDNOTASK2','Als u dit niet hebt aangevraagd, maakt u zich dan geen zorgen. U kunt deze E-mail verwijderen.');
define('_CODEFOR','Bevestigingscode voor');
define('_USERPASSWORD4','Gebruikerswachtwoord voor');
define('_255CHARMAX','(max. 255 karakters. Tik uw handtekening met behulp van HTML-tags)');
define('_CANKNOWABOUT','(max. 255 karakters. Tik wat anderen over u mogen weten)');
define('_SOMETHINGWRONG','Er is iets misgegaan.');
define('_COMMENTSCONFIG','Opmerkingenconfiguratie');
define('_DISPLAYMODE','Weergavemode');
define('_NOCOMMENTS','Geen opmerkingen');
define('_NESTED','Genest');
define('_FLAT','Plat');
define('_THREAD','Draad');
define('_SORTORDER','Sorteer volgorde');
define('_OLDEST','Oudste eerst');
define('_NEWEST','Nieuwste eerst');
define('_HIGHEST','Meest gelezen eerst');
define('_THRESHOLD','Limiet');
define('_COMMENTSWILLIGNORED','Opmerkingen met een lagere score dan deze waarde worden genegeerd.');
define('_UNCUT','Ongewijzigd en onveranderd');
define('_EVERYTHING','Vrijwel alles');
define('_FILTERMOSTANON','Filter meeste Anonomien');
define('_USCORE','Score');
define('_SCORENOTE','Anonieme-inzendingen beginnen bij 0, leden-inzendingen beginnen bij 1. Moderators tellen punten bij en trekken punten af.');
define('_NOSCORES','Scores niet weergeven');
define('_HIDDESCORES','(Verborgen scores: Ze worden wel toegepast, maar niet weergegeven.)');
define('_MAXCOMMENT','Max. lengte opmerkingen');
define('_TRUNCATES','(Lange opmerkingen worden ingekort, een link <i>meer lezen</i> wordt toegevoegd. Voer een zeer grote waarde in om deze functie uit te schakelen.)');
define('_BYTESNOTE','bytes (1024 bytes = 1K)');
define('_BROWSEUSERS','Toon gebruikers');
define('_SEARCHUSERS','Doorzoek gebruikers');
define('_SENDPRIVATEMSG','Zend een prive bericht naar');
define('_THEME','Thema');
define('_MA_HOMECONFIG','Homepagina Configuratie');
define('_MAX127','(max. 127):');
define('_MESSAGEACTIVATE','Activeer Verzenden Publieke Berichten?');
define('_ACTIVATEPERSONAL','Activeer persoonlijk menu');
define('_PERSONALMENUCONTENT','Persoonlijk Menu Inhoud');
define('_CHECKTHISOPTION','(Vink nu deze optie aan. De volgende tekst verschijnt in Home)');

// avatar
define('_AVATAR_FILESIZE','Avatar moet kleiner zijn dan %d KB');
define('_AVATAR_CONTROL','Avatar controle paneel');
define('_AVATAR_INFO','Laat een klein fototje zien links van je post. Er kan maar 1 foto worden geplaatst die niet groter is dan 80 pixels, bij 80 pixels, en niet groter is dan 6 KB.');
define('_CURRENT_IMAGE','Huidige Foto');
define('_DELETE_IMAGE','Verwijder Foto');
define('_AVATAR_OFFSITE','Link naar buitenstaande-site Avatar');
define('_AVATAR_OFFSITEMSG','Voer de URL in waar jou avatar staat.');
define('_AVATAR_SELECT','Selecteer Avatar uit Galerij');
define('_SHOW_GALLERY','Bekijk galerij');
define('_AVATAR_UPLOAD','Upload Avatar van je PC');
define('_AVATAR_UPLOAD_URL','Upload Avatar van URL');
define('_AVATAR_GALLERY','Avatar galerij');
define('_AVATAR_ERR_IMTYPE','De avatar moet .jpg, .gif of .png zijn nu is dit: %s');
define('_AVATAR_ERR_SIZE','Avatar is te groot: %d x %d');
define('_AVATAR_ERR_URL','Plaatje op aangegeven URL kan niet worden gevonden!');
define('_AVATAR_ERR_DATA','Het plaatje van de URL bevat geen data');

/**************************
  ADMNINISTRATION SECTION
**************************/
// users_cfg.php
define('_USER_CONFIG','Leden configuratie');
define('_BROADCASTMSG','Zet Broadcast Berichten aan?');
define('_MYHEADLINES','Mijn Hoofdlijnen');
define('_USERSHOMENUM','Let users change News number in Home?');
define('_PASSWDLEN','Minimum wachtwoord lengte');
define('_REQUIREADMIN','Heeft Admin Goedkeuring Nodig:');
define('_ACTALLOWREG','Sta de Registratie van de Gebruiker toe:');
define('_ACTNOTIFYADD','Deel Admin van de Registratie van de Gebruiker mee:');
define('_ACTALLOWDELETE','Sta Eigen Account Opzegging toe:');
define('_ACTNOTIFYDELETE','Deel Admin Account Opzeggingen mee:');
define('_ACTALLOWTHEME','Sta Gebruiker Theme Selectie Toe:');
define('_ACTALLOWMAIL','Sta Gebruiker Email Verandering Toe:');
define('_USEACTIVATE','Gebruik Email Activatie?');
define('_USEREGISTERMSG','Gebruik registratie instemmingen');
define('_SENDWELCOMEPM','Zend welkom PB naar nieuwe users');
define('_WELCOMEPMBODY','Berichten deel');
// fields

// avatar
define('_AVATAR_SETTINGS','Avatar Configuratie');
define('_AV_ALLOW_LOCAL','Zet Gallery avatar aan');
define('_AV_ALLOW_REMOTE','Zet remote avatars aan');
define('_AV_ALLOW_REMOTE_INFO','Avatars van een andere website');
define('_AV_ALLOW_UPLOAD','Zet avatar uploaden aan');
define('_AV_MAX_FILESIZE','Max avatar grootte');
define('_AV_MAX_FILESIZE_INFO','Voor het uploaden van avatars');
define('_AV_MAX_AVATAR_SIZE','Max Avatar grootte');
define('_AV_MAX_AVATAR_SIZE_INFO','(Hoogte x Breedte in pixels)');
define('_AV_AVATAR_STORAGE_PATH','Avatar Upload Pad');
define('_AV_AVATAR_STORAGE_PATH_INFO','Pad van je CPG-Nuke root dir naar avatar, v.b. uploads/avatars');
define('_AV_AVATAR_GALLERY_PATH','Avatar Gallery Pad');
define('_AV_AVATAR_GALLERY_PATH_INFO','Pad van je CPG-Nuke root dir naar avatar b.v. images/avatars');
define('_AV_DEFAULT','Standaard avatar plaatje');
define('_AV_DEFAULT_INFO','Relatief t.o.v. jouw Avatar Galerij Pad');
define('_AV_ALLOW_ANIMATED','Geanimeerde avatars toestaan');

// users.php
define('_USERADMIN','Gebruikers Administratie');
define('_ADDUSER','Voeg een nieuwe gebruiker toe');
define('_EDITUSER','Gebruiker bewerken');
define('_SELECTAUSER','Selecteer een gebruiker');
define('_MA_PRIVILEGES','Privileges');
define('_ICQ','ICQ Nummer');
define('_AIM','AIM scherm naam');
define('_YIM','Yahoo! ID');
define('_MSNM','MSNM Scherm naam');
define('_LOCATION','Locatie');
define('_OCCUPATION','Beroep');
define('_INTERESTS','Hobby\'s');
define('_EXTRAINFO','Extra Info');
define('_USERID','Gebruikers ID');
define('_SURE2DELETE','Weet je zeker dat je de gebruiker wilt verwijderen');
