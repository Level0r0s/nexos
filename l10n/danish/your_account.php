<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/danish/your_account.php,v $
  $Revision: 9.9 $
  $Author: nanocaiordo $
  $Date: 2006/02/12 14:40:22 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_MA_HIDDEN','Skjult');
define('_MA_VISIBLE','Synlig');
define('_MA_REQUIRED','Påkrævet');
define('_MA_PROFILE_INFO','Profil information');
define('_MA_ADDITIONAL','Anden information');
define('_MA_REALNAME','Dit navn');
define('_MA_FAKEMAIL','Falsk e-mail');
define('_MA_HOMEPAGE','Dit websted');
define('_MA_ICQ','Dit ICQ #');
define('_MA_AIM','AIM adresse');
define('_MA_YIM','Din Yahoo Messenger');
define('_MA_MSNM','Din MSN Messenger email');
define('_MA_LOCATION','Din bopæl');
define('_MA_OCCUPATION','Beskæftigelse');
define('_MA_INTERESTS','Interesser');
define('_MA_SIGNATURE','Signatur');
define('_MA_EXTRAINFO','Ekstra information');
define('_MA_PREFERENCES','Indstillinger');
define('_MA_TIMEZONE','Tidszone');
define('_MA_DATEFORMAT','Dato format');
define('_MA_RECEIVENEWSLETTER','Modtage nyhedsbrev');
define('_MA_SHOWEMAIL','Vis min e-mail adresse');
define('_MA_SHOWONLINE','Vis min online status');
define('_MA_ALLOWBBCODE','Tillade altid BBCode');
define('_MA_ALLOWHTML','Tillade altid HTML');
define('_MA_ALLOWSMILIES','Smilies er altid aktiv');
define('_MA_NOTIFYREPLY','Giv mig besked via e-mail når nogen svarer på mine beskeder');
define('_MA_NOTIFYPM','Giv mig besked via e-mail når jeg får privat besked');
define('_MA_POPUPPM','Vis i nyt vindue når jeg modtager ny privat besked');
define('_MA_ATTACHSIG','Medtage altid min signatur');
define('_MA_PRIVATE','privat Information');
define('_MA_FIRSTNAME','Fornavn');
define('_MA_LASTNAME','Efternavn');
define('_MA_GENDER','køn');
define('_MALE','Mand');
define('_FEMALE','Kvinde');
define('_MA_BIRTHDAY','Fødselsdag');
define('_MA_BIRTHDAYMSG','Skriv som mnd/dag/år');
define('_MA_TELEPHONE','Telefon nummer');
define('_MA_FAX','Fax nummer');
define('_OSC_NEWSLETTER','Modtag nyhedsbrev fra butikken');
define('_OSC_NEWSLETTERMSG','Dette er en separat e-mail om nye varer og tilbud fra butikken');
define('_BOUNDREGISTRATION','Ved at klikke Registrer nedenunder godkender du disse betingelser.');
define('_MA_REGISTRATION','Registreringsbetingelser');
define('_MA_AGREE_OVER_13','Jeg godtager disse betingelser og jeg er <b>over</b> eller <b>akkurat 13</b>');
define('_MA_AGREE_UNDER_13','Jeg godtager disse betingelser og jeg er <b>under 13</b>');
define('_MA_DO_NOT_AGREE','Jeg godkender ikke disse betingelser');
define('_MA_REGISTRATION_INFO','Registreringsinformation');
define('_MA_ITEMS_REQUIRED','Felt markeret med * er obligatorisk.');
define('_MA_PROFILE_INFO_NOTICE','Denne information vil være synlig for alle');
define('_USERNAME','Brugernavn');
define('_EMAILADDRESS','E-mail adresse');
define('_BLANKFORAUTO','Lad stå tomt for auto-generering af kodeord');
define('_CONFIRMPASSWORD','Bekræft kodeord');
define('_MA_SUBMIT','OK');
define('_MA_FAKEMAILMSG','Denne email bliver offentliggjort.');
define('_MA_DATEFORMATMSG','Den brugte syntaks er identisk til PHP <a href="http://php.net/date">date()</a> funktion');
define('_MA_SIGNATUREMSG','Dette er en blok af tekst som kan bliver tilføjet til mine beskeder<br />'.sprintf(_M_CHARS, 255));
define('_MA_NOTIFYREPLYMSG','Sender en e-mail når nogen svarer på et emne som Du har skrevet i. Dette kan ændres når du skriver beskeder');
define('_MA_POPUPPMMSG','Vil åbne et nyt vindue for at informere dig når der kommer nye private beskeder');
define('_ACTDISABLED','Denne funktion er <b>Slået fra</b> af Administrator.');
define('_USERFINALSTEP','Ny bruger registrering: Sidste skridt');
define('_USERCHECKDATA','Vær venlig at tjekke følgende information. Hvis alt er korrekt kan du fortsætte med registreringen ved at klikke på "OK" knappen, hvis ikke gå tilbage for at ændre information.');
define('_YOURPASSWORD','Dit kodeord er');
define('_YOUWILLRECEIVE','Du vil modtage en e-mail med en link som du skal bruge for at aktivere kontoen. Dette skal gøres inden 24 timer.');
define('_YOUWILLRECEIVE2','Du vil modtage en e-mail om Log ind information.');
define('_WAITAPPROVAL','Administratoren vil modtage din ansøgning og sende dig et aktiveringslink hvis du bliver godkendt.');
define('_FINISH','Færdig');
define('_YOUUSEDEMAIL','Du eller nogen andre har brugt e-mail adressen');
define('_TOREGISTER','for at registrere en konto hos');
define('_USERREGLOGIN','Bruger Registrering/Logind');
define('_USERAPPLOGIN','Bruger Ansøgning/Logind');
define('_ACCOUNTCREATED','Ny brugerkonto er oprettet!');
define('_YOUAREREGISTERED','Velkommen! Du er nu registreret som bruger.');
define('_FINISHUSERCONF','Dit ønske om en ny konto er blevet behandlet. Du vil snart modtage en e-mail med et aktiveringslink som du skal bruge inden 24 timer for at aktivere din konto.');
define('_FINISHUSERCONF2','Dit ønske om en ny konto er blevet bearbejdet. Du kan nu ');
define('_FINISHUSERCONF3','log dig ind her');
define('_TOFINISHUSER','For at fuldføre registreringen skal du bruge dette link inden 24 timer for at aktivere din brugerkonto, ellers vil informationerne blive slettet af systemet og du skal igennem registreringen på ny:');
define('_ACTIVATIONSUB','Aktivering af brugerkonto');
define('_REGISTRATIONSUB','Registrering af konto');
define('_THANKSUSER','Tak fordi du registrerede dig hos os.');
define('_FOLLOWINGMEM','Følgende er din brugerinfo:');
define('_TOAPPLY','for at oprette en konto hos');
define('_APPLICATIONSUB','Brugerkonto ansøgning');
define('_YOUAREPENDING','Velkommen! Din ansøgning som ny bruger er under behandling. Administrator vil kontakte dig når ansøgningen er blevet behandlet.');
define('_THANKSAPPL','Tak for din ansøgning som bruger hos');
define('_MEMADD','bruger lagt til');
define('_MEMAPL','bruger anvendt');
define('_ERRORINVEMAIL','FEJL: Ugyldig e-mail adresse');
define('_NICK2SHORT','Aliaset er for kort. Det skal være på minimum 3 bogstaver');
define('_SECCODEINCOR','Sikkerhedskoden er forkert, gå venligst tilbage og skriv den præcis som den er vist...');
define('_ERROREMAILSPACES','FEJL: E-mail adresser kan ikke indeholder mellemrum');
define('_ERRORINVNICK','FEJL: Ugyldig Alias');
define('_NICK2LONG','Aliaset er for langt. Den kan ikke være længere en 26 bogstaver');
define('_NAMERESERVED','FEJL: Dette navn er reservert');
define('_NAMEDENIED','FEJL: Denne del af dit valgte brugernavn kan ikke bruges :');
define('_NICKNOSPACES','FEJL: Mellemrum i Aliaset er ikke tilladt');
define('_NICKTAKEN','FEJL: Aliaset er allerede i brug');
define('_EMAILREGISTERED','FEJL: E-mail adressen er allerede i brug');
define('_PASSDIFFERENT','De indtastede kodeord er ikke ens. De skal være identiske.');
define('_YOUPASSMUSTBE','Dit kodeord skal være');
define('_CHARLONG','bogstaver langt');
define('_ACCOUNTRESERVED','Ny brugerkonto reservert!');
define('_EMAILNOTUSABLE','FEJL: E-mail adressen er ikke brugbar');
define('_ACTIVATIONYES','Bruger aktivering');
define('_ACTMSG','Din konto er blevet aktiveret. log Venligst ind fra <a href="'.getlink().'">dette link</a> ved at bruge dit nye brugernavn og kodeord.');
define('_ACTIVATIONERROR','Fejl under aktivering af konto');
define('_ACTERROR1','Verificeringsnummeret er ugyldig.<br /><br />Sørg venligst for at du bruger det link som du modtog via E-mail eller opret en ny konto <a href="'.getlink().'">her</a>.');
define('_ACTERROR2','Det er ingen bruger i databasen med denne information.<br /><br />Du kan registrere en ny bruger <a href="'.getlink().'">her</a>.');
define('_CURRENTPASSWORD','Nuværende kodeord');
define('_CURRENTPASSWORDMSG','Du skal bekræfte dit nuværende kodeord hvis du ønsker at ændre det eller ændre din e-mail adresse');
define('_NEWPASSWORD','Nyt kodeord');
define('_NEWPASSWORDMSG','Du behøver kun at opgive kodeord hvis du skal ændre det');
define('_CONFIRMPASSWORDMSG','Du behøver kun at bekræfte dit kodeord hvis du ændret det ovenfor');
define('_SUREDELETE','Er du sikker på at du vil slette din konto?');
define('_CATEGORY_SELECT','Vælg kategori');
define('_SELECT_AVATAR','Vælg avatar');
define('_CANCEL_AVATAR','Afbryd avatar');
define('_THISISYOURPAGE','Dette er din personlige side');
define('_PERSONALINFO','Personlig information');
define('_ABOUT_USER','Alt om ');
define('_CONTACTINFO','Kontakt Information');
define('_PM','Privat besked');
define('_JOINED','Registret');
define('_RANK','brugerniveau');
define('_LAST10BBTOPIC','Sidste 10 Forum Emner');
define('_LAST10BBTOPICS','Sidste 10 Forum Emner startet af');
define('_LAST10COMMENT','Sidste 10 Kommentarer');
define('_LAST10DOWNLOAD','Sidste 10 Downloads');
define('_LAST10DOWNLOADS','Sidste 10 Downloads af');
define('_LAST10SUBMISSION','Sidste 10 Nyheder');
define('_LAST10WEBLINK','Sidste 10 Web Links');
define('_LAST10WEBLINKS','Sidste 10 Web Links af');
define('_MEMBERGROUPS','Gruppemedlemskab');
define('_AVATAR','Avatar');
define('_WEBSITE','websted');
define('_USERSTATUS','Aktuel brugerstatus');
define('_ONLINE','Logget på');
define('_OFFLINE','Logget ud');
define('_NOTSUBSCRIBED','Du abonnerer ikke på vores nyhedsbrev');
define('_SUBSCRIBED','Du abonnerer på vores nyhedsbrev');
define('_MA_BROADCAST','Send offentlig besked');
define('_BROADCASTTEXT','Du kan sende en <i>offentlig besked</i> herfra (maks 255 tegn). Denne besked bliver vist til alle brugere som er online i løbet af de næste 10 minutter. Brugere vil kun se din besked en gang, i en rød ramme under sidens logo. Alle brugere kan deaktivere dette <a href="\'.getlink("Your_Account&amp;op=edithome").\'">her</a>. Misbrug ikke dette. Ingen HTML-kode er tilladt.');
define('_BROADCASTSENT','Din offentlige besked er blevet sendt.');
define('_BROADCASTNOTSENT','<b>FEJL:</b> Din besked er tom eller du har netop sendt en anden. For at sende en ny besked skal du vente ca. 10 minutter.');
define('_RETURNPAGE','Tilbage til din personlige side');
define('_MA_MYHEADLINES','Mine Overskrifter');
define('_SELECTASITE','Vælg hvilken side du vil læse overskrifter fra:');
define('_SELECTASITE2','Vælg et websted');
define('_ORTYPEURL','Eller skriv URL til RSS/XML-filen her:');
define('_MA_GO','Send');
define('_HEADLINESFROM','Overskrifter fra');
define('_MA_READMYJOURNAL','Læs min dagbog');
define('_ACCDELETED','Konto er blevet slettet');
define('_SERVERNOMAIL','Denne server har ikke tilgang til e-mail. Venligst kontakt Administrator for assistance.');
define('_ACCSUSPENDED','Konto er blevet Suspenderet');
define('_BESUREACT','Vær sikker på at du har aktiveret din konto.');
define('_MEMDEL','bruger Slettet');
define('_YOUBAD','FEJL: Du har forsøgt på en ugyldig opperation!');
define('_NOINFOFOR','Det findes ingen information om');
define('_SORRYNOUSERINFO','Beklager, vi kan ikke finde information om dig');
define('_LOGININCOR','Fejl under logind! Prøv igen...');
define('_UPDATEFAILED','Kunne ikke opdatere informationen. Venligst kontakt administrator.');
define('_ACCTCHANGE','Ændre info');
define('_ACCTCOMMENTS','Kommentar opsætning');
define('_ACCTEXIT','Log ud/Afslut');
define('_ACCTHOME','Ændre hovedsiden');
define('_ACCTJOURNAL','Dine dagbøger');
define('_ACCTTHEME','Vælg tema');
define('_CHANGEHOME','Ændre Forsiden');
define('_CHANGEYOURINFO','Ændre din information');
define('_CONFIGCOMMENTS','Indstil kommentarer');
define('_DELETEACCT','Slet konto');
define('_LOGOUTEXIT','Log ud/Afslut');
define('_MA_MESSAGES','Beskeder');
define('_RETURNACCOUNT','Tilbage til din konto-side');
define('_SELECTTHETHEME','Vælg tema');
define('_DELETEREASON','Begrundelse for sletning');
define('_SUSPENDREASON','Begrundelse for suspendering');
define('_DENYREASON','Begrundelse for nægtet adgang');
define('_CHECKNUM','Aktivisering #');
define('_REGDATE','Dato lagt til');
define('_ACCTAPPROVE','Konto godkendt');
define('_ACCTDELETE','Konto slettet');
define('_ACCTDENY','Konto afslået');
define('_ACCTREMOVE','Kontofjernet');
define('_ACCTRESTORE','Konto genoprettet');
define('_ACCTSUSPEND','Konto suspenderet');
define('_ACTIVEUSERS','Aktive brugere');
define('_MA_ADDUSER','Tilføj ny bruger');
define('_MA_ADDUSERBUT','Tilføj bruger');
define('_MA_ALLOWUSERS','Tillade andre brugere at se min e-mail adresse');
define('_APPROVE','Godkende');
define('_APPROVEUSER','Godkende bruger');
define('_MA_DELETEUSER','Slet bruger');
define('_DELETEUSERS','Slettede brugere');
define('_DENY','Afslå');
define('_DENYUSER','Afslå bruger');
define('_DETUSER','Bruger detaljer');
define('_MA_EDITUSER','Rediger bruger');
define('_MA_FORCHANGES','(Kun til ændring)');
define('_MA_FUNCTIONS','Funktioner');
define('_HASAPPROVE','er blevet godkendt.');
define('_HASDELETE','er blevet slettet.');
define('_HASDENY','er blevet afslået.');
define('_HASREMOVE','er blevet fjernet.');
define('_HASRESTORE','er blevet genoprettet.');
define('_HASSUSPEND','er blevet suspenderet.');
define('_MA_ID','ID');
define('_MA_MODIFY','Ændre');
define('_MA_NAME','Navn');
define('_MA_NEWSLETTER','Nyhedsbrev');
define('_MA_OPTION','Valgfrit');
define('_OR','eller');
define('_MA_PERMISSIONS','Tilladelse');
define('_PROMOTE','Forfremme');
define('_PROMOTEUSER','Forfremme bruger');
define('_REMOVE','Fjerne');
define('_REMOVEUSER','Fjerne bruger');
define('_MA_REQUIREDNOCHANGE','(påkrævet, kan ikke ændres senere)');
define('_RESEND','Send på ny');
define('_RESENDMAIL','Send Aktivisering e-mailen på ny');
define('_RESTORE','Genopret');
define('_RESTOREUSER','Genopret bruger');
define('_MA_RETYPEPASSWD','Skriv kodeordet igen');
define('_MA_SAVECHANGES','Gem ændringer');
define('_SHOWMAIL','Vis e-mail');
define('_SORRYTO','Din konto hos');
define('_SURE2APPROVE','Er du sikker på at du vil godkende bruger');
define('_MA_SURE2DELETE','Er du sikker på at du vil slette bruger');
define('_SURE2DENY','Er du sikker på at du vil afslå bruger');
define('_SURE2PROMOTE','Er du sikker på at du vil forfremme bruger');
define('_SURE2REMOVE','Er du sikker på at du vil fjerne bruger');
define('_SURE2RESEND','Er du sikker på at du vil sende aktiverings e-mailen på ny');
define('_SURE2RESTORE','Er du sikker på at du vil genoprette bruger');
define('_SURE2SUSPEND','Er du sikker på at du vil suspendere bruger');
define('_SUSPEND','Suspendere');
define('_SUSPENDUSER','Suspendere bruger');
define('_SUSPENDUSERS','Suspenderet brugere');
define('_MA_USERADMIN','Brugers administration');
define('_MA_USERID','Bruger ID');
define('_USERPROMOTED','Bruger er blevet forfremmet til Admin.');
define('_MA_USERUPDATE','Opdater bruger');
define('_WAITINGUSER','Ventende bruger');
define('_WAITINGUSERS','Ventende brugere');
define('_MA_ARTICLES','Artikler');
define('_MA_BBFORUM','Forum');
define('_MA_CONTENT','Indhold');
define('_MA_DOWNLOAD','Downloads');
define('_MA_ENCYCLOPEDIA','Bibliotek');
define('_MA_FAQ','FAQ');
define('_MA_REVIEWS','Anmeldelser');
define('_MA_SECTIONS','Sektioner');
define('_MA_SURVEYS','Spørgeundersøgelser');
define('_MA_TOPICS','Emner');
define('_MA_WEBLINKS','Web Links');
define('_ADDERROR','FEJL: Der er problemer med databasen.');
define('_NAMEERROR','FEJL: Dette Adminnavn er allerede i brug.');
define('_MA_NEEDTOCOMPLETE','Du skal udfylde alle påkrævede felter');
define('_MA_PASSWDNOMATCH','Beklager, det nye kodeord stemte ikke overens. Gå tilbage og prøv igen');
define('_MA_USERNOEXIST','Bruger eksisterer ikke!');
define('_USERLOGIN','Log ind');
define('_REGNEWUSER','Registrer ny bruger');
define('_PASSWORDLOST','Mistet dit kodeord?');
define('_NOPROBLEM','For at opnå adgang til din brugerkonto skal du bare skrive dit brugernavn og klikke på \'\'Tilsend bekræftelseskode\'\'. Du vil herefter automatisk modtage en e-mail, på den e-mail adresse du tilmeldte dig med. Bekræftelseskode den skal du angive nedenfor sammen med dit brugernavn, hvorefter vi sender et nyt kodeord til dig. Derefter kan du logge dig ind og ændre kodeordet efter eget valg.');
define('_CONFIRMATIONCODE','Bekræftelseskode');
define('_SENDPASSWORD','Send kodeord');
define('_MA_YOUARELOGGEDOUT','Du er nu logget ud!');
define('_USERACCOUNT','Brugerkontoen');
define('_HASTHISEMAIL','har denne e-mail adresse tilknyttet.');
define('_AWEBUSERFROM','En bruger fra');
define('_HASREQUESTED','har forsøgt at få kodeordet sendt til dig.');
define('_YOURNEWPASSWORD','Dit nye kodeord er:');
define('_YOUCANCHANGE','Du kan ændre dette når du har logget dig ind');
define('_IFYOUDIDNOTASK','Hvis det ikke er dig, der har bedt om denne mail, så se venligst bort fra den. Hvis det var en fejl skal du bare logge ind med dit nye kodeord.');
define('_PASSWORD4','Kodeordet for');
define('_MAILED','er sendt.');
define('_CODEREQUESTED','har bestilt en bekræftelseskode for at ændre sit kodeord.');
define('_YOURCODEIS','Bekræftelseskoden er:');
define('_WITHTHISCODE','Med denne kode kan du få et nyt kodeord på');
define('_IFYOUDIDNOTASK2','Hvis det ikke er dig, der har bedt om denne mail, så se venligst bort fra den og slet e-mailen.');
define('_CODEFOR','Bekræftelseskode for');
define('_USERPASSWORD4','Kodeord for');
define('_255CHARMAX','(Maks 255 tegn. Skriv gerne din signatur med HTML-kode hvis du vil)');
define('_CANKNOWABOUT','(Maks 255 tegn. Skriv det du vil have andre skal vide om dig)');
define('_SOMETHINGWRONG','Der gik noget galt...beklager!');
define('_COMMENTSCONFIG','Indstillinger for kommentarer');
define('_DISPLAYMODE','Visningsmodus');
define('_NOCOMMENTS','Ingen kommentarer');
define('_NESTED','Nested');
define('_FLAT','Flat');
define('_THREAD','Trådet');
define('_SORTORDER','Sorteringsrækkefølge');
define('_OLDEST','Ældste først');
define('_NEWEST','Nyeste først');
define('_HIGHEST','Højeste points først');
define('_THRESHOLD','Tærskel');
define('_COMMENTSWILLIGNORED','Kommentarer med points lavere end dette vil ikke vises.');
define('_UNCUT','Uklippet og råt');
define('_EVERYTHING','Næsten alt');
define('_FILTERMOSTANON','Bort filtrer det meste som er anonymt');
define('_USCORE','Points');
define('_SCORENOTE','Gæste kommentarer begynder på 0 points, mens brugere begynder på 1. Moderatorer kan tilføje og trækker fra i points');
define('_NOSCORES','Vis Ikke points');
define('_HIDDESCORES','(Skjuler points stillingerne. De bruges fortsat, du ser dem bare ikke.)');
define('_MAXCOMMENT','Maksimal kommentarlængde');
define('_TRUNCATES','(Kutter kommentarerne ned og lægger en læs mere link til. Sæt tallet højt for at undgå dette.)');
define('_BYTESNOTE','bytes (1024 bytes = 1K)');
define('_BROWSEUSERS','gennemse brugere');
define('_SEARCHUSERS','Søg i brugere');
define('_SENDPRIVATEMSG','Send en privat besked til');
define('_THEME','Tema');
define('_MA_HOMECONFIG','Indstillinger for forsiden');
define('_MAX127','(maks. 127):');
define('_MESSAGEACTIVATE','Aktiver offentlige beskeder?');
define('_ACTIVATEPERSONAL','Aktiver din personlige menu');
define('_PERSONALMENUCONTENT','Indhold i personlig menu');
define('_CHECKTHISOPTION','(Tryk i denne boks hvis du vil ha at indholdet nedenfor skal vises på forsiden)');

// avatar
define('_AVATAR_FILESIZE','Avatar biledet skal være mindre en %d KB');
define('_AVATAR_CONTROL','Avatar kontrolpanel');
define('_AVATAR_INFO','Viser et lille bilde ved dine detaljer i beskeder. Kun et bilde kan vises af gangen, bredden kan ikke overstige '.$MAIN_CFG['avatar']['max_width'].' pixels, højden kan ikke overstige '.$MAIN_CFG['avatar']['max_height'].' pixels, og filstørrelsen kan ikke overstige '.intval($MAIN_CFG['avatar']['filesize']/1024).' KB.');
define('_CURRENT_IMAGE','Nuværende billede');
define('_DELETE_IMAGE','Slet billede');
define('_AVATAR_OFFSITE','Link til avatar fra et andet websted');
define('_AVATAR_OFFSITEMSG','Skriv URL\'en hvor avatarbiledet befinder sig som du vil linke til.');
define('_AVATAR_SELECT','Vælg avatar fra galleriet');
define('_SHOW_GALLERY','Vis galleriet');
define('_AVATAR_UPLOAD','Upload avatar fra din computer');
define('_AVATAR_UPLOAD_URL','Upload avatar fra en URL');
define('_AVATAR_GALLERY','Avatar galleri');
define('_AVATAR_ERR_IMTYPE','Avatar filetypen skal være .jpg, .gif eller .png. Nu er det: %s');
define('_AVATAR_ERR_SIZE','Biledet er for stort: %d x %d');
define('_AVATAR_ERR_URL','Kunne ikke opnå kontakt med den URL du opgav');
define('_AVATAR_ERR_DATA','Filen fra URL\'en du opgav indholder ingen data');

/**************************
  ADMNINISTRATION SECTION
**************************/
// users_cfg.php
define('_USER_CONFIG','Bruger indstillinger');
define('_BROADCASTMSG','Aktiver udsendelse af beskeder?');
define('_MYHEADLINES','Aktiver overskrift læser?');
define('_USERSHOMENUM','Lad brugere ændre antallet af nyheder på forsiden?');
define('_PASSWDLEN','Minimum længde på brugerkodeord');
define('_REQUIREADMIN','Kræver Admin godkendelse:');
define('_ACTALLOWREG','Tillad bruger registrering:');
define('_ACTNOTIFYADD','Giv Admin besked ved bruger registrering:');
define('_ACTALLOWDELETE','Tillad bruger at slette sin konto:');
define('_ACTNOTIFYDELETE','Giv Admin besked når bruger sletter sin konto:');
define('_ACTALLOWTHEME','Tillad bruger at ændre tema:');
define('_ACTALLOWMAIL','Tillad bruger at ændre e-mail adresse:');
define('_USEACTIVATE','Bruge e-mail aktivering? ');
define('_USEREGISTERMSG','Brug registrerings godkendelse?');
define('_SENDWELCOMEPM','Send velkomst PM til nye brugere');
define('_WELCOMEPMBODY','Besked body');
// fields

// avatar
define('_AVATAR_SETTINGS','Avatar indstillinger');
define('_AV_ALLOW_LOCAL','Aktiver galleri avatars');
define('_AV_ALLOW_REMOTE','Aktiver fjern avatars');
define('_AV_ALLOW_REMOTE_INFO','Avatars linket fra andre websteder');
define('_AV_ALLOW_UPLOAD','Aktiver avatar uploading');
define('_AV_MAX_FILESIZE','Maks. avatar fil størrelse');
define('_AV_MAX_FILESIZE_INFO','For uploaded avatar filer');
define('_AV_MAX_AVATAR_SIZE','Maks. avatar dimensioner');
define('_AV_MAX_AVATAR_SIZE_INFO','(højde x bredde i pixels)');
define('_AV_AVATAR_STORAGE_PATH','Avatar gemme Sti');
define('_AV_AVATAR_STORAGE_PATH_INFO','Sti under din CPG-Nuke hoved folder, f.eks. uploads/avatars');
define('_AV_AVATAR_GALLERY_PATH','Avatar galleri sti');
define('_AV_AVATAR_GALLERY_PATH_INFO','Sti under din CPG-Nuke hoved folder for "pre-loaded" bilder, f.eks. images/avatars');
define('_AV_DEFAULT','Standard avatar image');
define('_AV_DEFAULT_INFO','Relativ til Avatar Galleri Sti');
define('_AV_ALLOW_ANIMATED','Tillade animeret avatarer');

// users.php
define('_USERADMIN','Bruger administration');
define('_ADDUSER','Tilføj en ny bruger');
define('_EDITUSER','Rediger bruger');
define('_SELECTAUSER','Vælg en Bruger');
define('_MA_PRIVILEGES','Privilegere');
define('_ICQ','ICQ nummer');
define('_AIM','AIM adresse');
define('_YIM','YIM messenger');
define('_MSNM','MSN messenger');
define('_LOCATION','Geografisk sted');
define('_OCCUPATION','Beskæftigelse');
define('_INTERESTS','Interesser');
define('_EXTRAINFO','Ekstra informationer');
define('_USERID','Bruger ID');
define('_SURE2DELETE','Er du sikker på at du vil slette brugeren');
