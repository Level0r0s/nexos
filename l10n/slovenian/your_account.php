<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/slovenian/your_account.php,v $
  $Revision: 9.10 $
  $Author: nanocaiordo $
  $Date: 2006/02/12 14:44:17 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_MA_HIDDEN','Skrito');
define('_MA_VISIBLE','Vidno');
define('_MA_REQUIRED','Potrebno');
define('_MA_PROFILE_INFO','Informacija o profilu');
define('_MA_ADDITIONAL','Dodatna informacija');
define('_MA_REALNAME','Pravo ime');
define('_MA_FAKEMAIL','Lažni Email');
define('_MA_HOMEPAGE','Domača stran');
define('_MA_ICQ','ICQ številka');
define('_MA_AIM','AIM naslov');
define('_MA_YIM','Yahoo Messenger');
define('_MA_MSNM','MSN Messenger');
define('_MA_LOCATION','Lokacija');
define('_MA_OCCUPATION','Poklic');
define('_MA_INTERESTS','Interesi');
define('_MA_SIGNATURE','Podpis');
define('_MA_EXTRAINFO','Posebne informacije');
define('_MA_PREFERENCES','Možnosti');
define('_MA_TIMEZONE','Časovna cona');
define('_MA_DATEFORMAT','Format datuma');
define('_MA_RECEIVENEWSLETTER','Prejemanje novic');
define('_MA_SHOWEMAIL','Prikaži moj e-mail naslov');
define('_MA_SHOWONLINE','Prikaži moj on-line status');
define('_MA_ALLOWBBCODE','Vedno dovoli BBCode');
define('_MA_ALLOWHTML','Vedno dovoli HTML');
define('_MA_ALLOWSMILIES','Vedno omogoči smeškote');
define('_MA_NOTIFYREPLY','Obvesti me o odgovorih');
define('_MA_NOTIFYPM','Obvesti me o novih zasebnih sporočilih po e-mailu');
define('_MA_POPUPPM','Odpri okno ob novem zasebnem sporočilu');
define('_MA_ATTACHSIG','Vedno dodaj moj podpis');
define('_MA_PRIVATE','Zasebne informacije');
define('_MA_FIRSTNAME','Ime');
define('_MA_LASTNAME','Priimek');
define('_MA_GENDER','Spol');
define('_MALE','Moški');
define('_FEMALE','Ženski');
define('_MA_BIRTHDAY','Datum rojstva');
define('_MA_BIRTHDAYMSG','Izpolnite kot mesec/dan/leto');
define('_MA_TELEPHONE','Telefonska številka');
define('_MA_FAX','Številka faksa');
define('_OSC_NEWSLETTER','Prejemanje novic trgovine');
define('_OSC_NEWSLETTERMSG','To so posebna sporočila trgovine o novih artiklih in popustih');
define('_BOUNDREGISTRATION','S klikom na Registriraj potrdite, da sprejemate te pogoje.');
define('_MA_REGISTRATION','Določila sporazuma o registraciji');
define('_MA_AGREE_OVER_13','Strinjam se s tem pogoji in sem star-a <b>več kot</b> ali <b>točno 13</b> let');
define('_MA_AGREE_UNDER_13','Strinjam se s temi pogoji in sem star-a manj kot <b>under</b> 13 let');
define('_MA_DO_NOT_AGREE','Ne strinjam se s temi pogoji');
define('_MA_REGISTRATION_INFO','Informacije o registraciji');
define('_MA_ITEMS_REQUIRED','Polja, označena z *, so nujna, če ni drugače navedeno.');
define('_MA_PROFILE_INFO_NOTICE','Ta informacija bo vidna za javnost');
define('_USERNAME','Uporabniško ime');
define('_EMAILADDRESS','E-mail naslov');
define('_BLANKFORAUTO','Pustite prazno za avtomatski vnos svojega gesla');
define('_CONFIRMPASSWORD','Potrdite geslo');
define('_MA_SUBMIT','Submit');
define('_MA_FAKEMAILMSG','(Ta e-mail bo javen. Samo vtipkajte, kar želite, varno pred spamom)');
define('_MA_DATEFORMATMSG','The syntax used is identical to the PHP <a href="http://php.net/date">date()</a> function');
define('_MA_SIGNATUREMSG','This is a block of text that can be added to my posts<br />'.sprintf(_M_CHARS, 255));
define('_MA_NOTIFYREPLYMSG','Pošlje e-mail sporočilo, ko nekdo odgovori na temo, v katero ste pisali. To lahko spremenite ob vsakem pisanju prispevkov.');
define('_MA_POPUPPMMSG','Odpre novo okno, ki vas obvesti, da so prispela nova zasebna sporočila');
define('_ACTDISABLED','To funkcijo je <b>ONEMOGOČIL</b> admin teh spletnih strani.');
define('_USERFINALSTEP','Registracija uporabnika: zadnji korak');
define('_USERCHECKDATA','Prosimo, preverite naslednje informacije. Če je vse pravilno, lahko nadaljujete z registracijo tako, da kliknete gumb "Končaj", sicer pa "Nazaj" in spremenite, karkoli je potrebno.');
define('_YOURPASSWORD','Vaše geslo je');
define('_YOUWILLRECEIVE','Prejeli boste potrditev po e-mailu s povezavo na stran, ki jo morate obiskati, da aktivirate svoj račun v naslednjih 24 urah.');
define('_YOUWILLRECEIVE2','Prejeli boste e-mail z informacijami za prijavo.');
define('_WAITAPPROVAL','Administrator teh spletnih strani bo pregledal vašo prošnjo in vam poslal povezavo za aktiviranje, če boste sprejeti');
define('_FINISH','Končaj');
define('_YOUUSEDEMAIL','Vi ali nekdo drug je uporabil vaš e-mail naslov');
define('_TOREGISTER','za registracijo računa na');
define('_USERREGLOGIN','User Registration/Login');
define('_USERAPPLOGIN','Uporabniška prošnja/Prijava');
define('_ACCOUNTCREATED','Nov uporabniški račun ustvarjen!');
define('_YOUAREREGISTERED','Dobrodošli! Ste nov registriran član.');
define('_FINISHUSERCONF','Vaša prošnja za nov račun je v postopku. V naslednjih sekundah boste prejeli e-mail s povezavo za aktiviranje, ki jo morate obiskati v naslednjih 24 urah, da boste lahko aktivirali svoj račun.');
define('_FINISHUSERCONF2','Vaša prošnja za nov račun je obdelana. Zdaj se lahko ');
define('_FINISHUSERCONF3','prijavite tukaj');
define('_TOFINISHUSER','Da zaključite proces registracije, morate v naslednjih 24 urah obiskati naslednjo povezavo za aktiviranje svojega uporabniškega računa, sicer bo sistem samodejno izbrisal informacije in morali boste zaprositi ponovno:');
define('_ACTIVATIONSUB','Aktiviranje uporabniškega računa');
define('_REGISTRATIONSUB','Registracija uporabniškega računa');
define('_THANKSUSER','Zahvaljujemo se vam za registracijo na');
define('_FOLLOWINGMEM','Tole so informacije o članu:');
define('_TOAPPLY','za prošnjo za račun na');
define('_APPLICATIONSUB','Prošnja za uporabniški račun');
define('_YOUAREPENDING','Dobrodošli! Vaša prošnja za novo članstvo je v obdelavi. Administrator vam bo sporočil, ko bo vaša prošnja obdelana.');
define('_THANKSAPPL','Zahvaljujemo se vam za prošnjo na');
define('_MEMADD','Dodani član');
define('_MEMAPL','Zaprošeni član');
define('_ERRORINVEMAIL','NAPAKA: Neveljaven e-mail');
define('_NICK2SHORT','Vzdevek je prekratek. Biti mora dolg več kot 3 znake');
define('_SECCODEINCOR','Varnostna koda je nepravilna. Prosimo, vrnite se nazaj in jo vtipkajte točno tako, kot je napisana ...');
define('_ERROREMAILSPACES','NAPAKA: E-mail naslovi ne vsebujejo presledkov');
define('_ERRORINVNICK','NAPAKA: Napačen vzdevek');
define('_NICK2LONG','Vzdevek je predolg. Biti mora krajši od 26 znakov');
define('_NAMERESERVED','NAPAKA: To ime je rezervirano');
define('_NAMEDENIED','NAPAKA: To del vašega izbranega imena se ne sme uporabljati:');
define('_NICKNOSPACES','NAPAKA: V vzdevku ne sme biti presledkov');
define('_NICKTAKEN','NAPAKA: Vzdevek je že uporabljen');
define('_EMAILREGISTERED','NAPAKA: Ta e-mail naslov je že registriran');
define('_PASSDIFFERENT','Obe gesli sta različni. Biti morata enaki.');
define('_YOUPASSMUSTBE','Vaše geslo mora biti dolgo');
define('_CHARLONG','znakov');
define('_ACCOUNTRESERVED','Novi uporabniški račun rezerviran!');
define('_EMAILNOTUSABLE',' NAPAKA: E-mail naslov ni uporaben');
define('_ACTIVATIONYES','Aktivacija uporabnika');
define('_ACTMSG','Vaš račun je bil aktiviran. Prosimo, prijavite se preko <a href="getlink()">te povezave</a>, z uporabo uporabniškega imena in gesla, ki ste ju izbrali.');
define('_ACTIVATIONERROR','Napaka aktivacije uporabnika');
define('_ACTERROR1','Številka za preverjanje uporabnika je neveljavna.<br><br>Prosimo, prepričajte se, da ste kliknili na povezavo, ki ste jo prejeli po e-mailu, ali zaprosite za nov račun <a href="getlink()">tukaj</a>.');
define('_ACTERROR2','V bazi ni nobenega uporabnika s temi informacijami. <br><br>Lahko registrirate novega uporabnika od<a href="getlink()">tukaj</a>.');
define('_CURRENTPASSWORD','Trenutno geslo');
define('_CURRENTPASSWORDMSG','Potrditi morate svoje trenutno geslo, če ga hočete spremeniti ali spremeniti svoj e-mail naslov');
define('_NEWPASSWORD','Novo geslo');
define('_NEWPASSWORDMSG','Geslo morate vnesti samo, če ga želite spremeniti');
define('_CONFIRMPASSWORDMSG','Geslo morate potrditi samo, če ste ga zgoraj spremenili');
define('_SUREDELETE','Ali ste prepričani, da želite zbrisati svoj uporabniški račun?');
define('_CATEGORY_SELECT','Izberite kategorijo');
define('_SELECT_AVATAR','Izberite avatar');
define('_CANCEL_AVATAR','Prekličite avatar');
define('_THISISYOURPAGE','To je vaša osebna stran');
define('_PERSONALINFO','Osebni podatki');
define('_ABOUT_USER','Vse o ');
define('_CONTACTINFO','Kontaktne informacije');
define('_PM','Zasebno sporočilo');
define('_JOINED','Član od');
define('_RANK','Stopnja');
define('_LAST10BBTOPIC','Zadnjih 10 tem na forumu');
define('_LAST10BBTOPICS','Zadnjih 10 tem na forumu začetih od');
define('_LAST10COMMENT','Zadnjih 10 komentarjev');
define('_LAST10DOWNLOAD','Zadnjih 10 prenosov datotek');
define('_LAST10DOWNLOADS','Zadnjih 10 prenosov datotke od');
define('_LAST10SUBMISSION','Zadnjih 10 prispevanih novic');
define('_LAST10WEBLINK','Zadnjih 10 spletnih povezav');
define('_LAST10WEBLINKS','Zadnjih 10 spletnih povezav od');
define('_MEMBERGROUPS','Članstva v skupinah');
define('_AVATAR','Simbol');
define('_WEBSITE','Web stran');
define('_USERSTATUS','Trenutni status uporabnikov');
define('_ONLINE','Online');
define('_OFFLINE','Offline');
define('_NOTSUBSCRIBED','Niste naročeni na naše Novice');
define('_SUBSCRIBED','Naročeni ste na naše novice');
define('_MA_BROADCAST','Broadcast Public Message');
define('_BROADCASTTEXT','Od tu lahko pošljete <i>javno sporočilo</i> (največ 255 znakov). To sporočilo bo v naslednjih 10 minutah prikazano prijavljenim uporabnikom. Vsak uporabnik, ki bo prikavljen, bo videl vaše sporočilo samo enkrat v rdečem polju pod logotipom strani. Vsak uporabnik lahko deaktivira to možnost <a href="'.getlink('Your_Account&edit=prefs').'">tukaj</a>. Prosimo, ne zlorabljajte. HTML koda tukaj ni dovoljena.');
define('_BROADCASTSENT','Vaše javno sporočilo je bilo poslano.');
define('_BROADCASTNOTSENT','<b>NAPAKA:</b> Vaše javno sporočilo je prazno ali pa ste pred kratkim že poslali sporočilo. Za objavo drugega sporočila morate počakati okoli 10 minut.');
define('_RETURNPAGE','Vrnitev na osebno stran');
define('_MA_MYHEADLINES','Moji napisi');
define('_SELECTASITE','Izberite stran, s katere želite prebrati naslove:');
define('_SELECTASITE2','Izberite spletno stran');
define('_ORTYPEURL','Ali vtipkajte URL naslovov RSS/XML svoje najljubše strani:');
define('_MA_GO','Pojdi');
define('_HEADLINESFROM','Naslovi z');
define('_MA_READMYJOURNAL','Preberi moj blok');
define('_ACCDELETED','Račun je bil izbrisan');
define('_SERVERNOMAIL','Ta strežnik nima dostopa do pošte. Prosimo, obrnite se na administratorja za pomoč.');
define('_ACCSUSPENDED','Račun je bil začasno onemogočen');
define('_BESUREACT','Prepričajte se, da ste aktivirali svoj račun.');
define('_MEMDEL','Član izbrisan');
define('_YOUBAD','NAPAKA: Poskusili ste izvršiti nedovoljeno operacijo!');
define('_NOINFOFOR','Ni informacij za');
define('_SORRYNOUSERINFO','Član s tem vzdevkom ni bil najden');
define('_LOGININCOR','Napaka pri vstopu! Poizkusite ponovno...');
define('_UPDATEFAILED','Sprememba ni uspela. Prosimo, obvestite administratorja.');
define('_ACCTCHANGE','Spremeni Info');
define('_ACCTCOMMENTS','Komentarji Nastavitev');
define('_ACCTEXIT','Odjava Končaj');
define('_ACCTHOME','Spremeni Domov');
define('_ACCTJOURNAL','Vaši Dnevniki');
define('_ACCTTHEME','Izberite Temo');
define('_CHANGEHOME','Spremeni začetno stran');
define('_CHANGEYOURINFO','Spremenite svoje podatke');
define('_CONFIGCOMMENTS','Namestitev komentarjev');
define('_DELETEACCT','Zbriši Račun');
define('_LOGOUTEXIT','Izhod/Logout');
define('_MA_MESSAGES','Sporočila');
define('_RETURNACCOUNT','Vrnitev na uporabniško stran');
define('_SELECTTHETHEME','Izberi temo');
define('_DELETEREASON','Razlog za brisanje');
define('_SUSPENDREASON','Razlog za začasno onemogočenje');
define('_DENYREASON','Razlog za zavrnitev');
define('_CHECKNUM','Aktiviranje ##');
define('_REGDATE','Datum dodajanja');
define('_ACCTAPPROVE','Račun odobren');
define('_ACCTDELETE','Račun pobrisan');
define('_ACCTDENY','Račun ni odobren');
define('_ACCTREMOVE','Račun odstranjen');
define('_ACCTRESTORE','Račun ponovno vzpostavljen');
define('_ACCTSUSPEND','Račun začasno onemogočen');
define('_ACTIVEUSERS','Aktivni uporabniki');
define('_MA_ADDUSER','Dodaj novega uporabnika');
define('_MA_ADDUSERBUT','Dodaj uporabnika');
define('_MA_ALLOWUSERS','Dovoli drugim uporabnikom, da vidijo tvoj elektronski naslov');
define('_APPROVE','Odobri');
define('_APPROVEUSER','Odobri uporabnika');
define('_MA_DELETEUSER','Izbriši uporabnika');
define('_DELETEUSERS','Izbrisan uporabnik');
define('_DENY','Zavrni');
define('_DENYUSER','Zavrni uporabnika');
define('_DETUSER','Podrobnosti uporabnika');
define('_MA_EDITUSER','Uredi Uporabnika');
define('_MA_FORCHANGES','(le za vnašanje sprememb)');
define('_MA_FUNCTIONS','Funkcije');
define('_HASAPPROVE','je bil odobren.');
define('_HASDELETE','je bil izbrisan.');
define('_HASDENY','je bil zavrnjen.');
define('_HASREMOVE','je bil odstranjen.');
define('_HASRESTORE','je bil ponovno vzpostavljen.');
define('_HASSUSPEND','je bil začasno onemogočen.');
define('_MA_ID','ID');
define('_MA_MODIFY','Spremeni');
define('_MA_NAME','Ime');
define('_MA_NEWSLETTER','Časopis');
define('_MA_OPTION','Možnosti');
define('_OR','ali');
define('_MA_PERMISSIONS','Dovoljenja');
define('_PROMOTE','Povišaj');
define('_PROMOTEUSER','Povišaj uporabnika');
define('_REMOVE','Odstrani');
define('_REMOVEUSER','Odstrani uporabnika');
define('_MA_REQUIREDNOCHANGE','(zahtevano, kasneje ne bo možno spreminjati)');
define('_RESEND','Pošlji ponovno');
define('_RESENDMAIL','Ponovno pošlji e-mail za aktiviranje');
define('_RESTORE','Ponovno vzpostavi');
define('_RESTOREUSER','Ponovno vzpostavi uporabnika');
define('_MA_RETYPEPASSWD','Ponovno vtipkaj geslo');
define('_MA_SAVECHANGES','Shrani spremembe');
define('_SHOWMAIL','Prikaži e-mail');
define('_SORRYTO','Vaš račun na');
define('_SURE2APPROVE','Ali ste prepričani, da želite odobriti uporabnika');
define('_MA_SURE2DELETE','Ali ste prepričani, da želite izbrisati uporabnika');
define('_SURE2DENY','Ali ste prepričani, da želite zavrniti uporabnika');
define('_SURE2PROMOTE','Ali ste prepričani, da želite povišati uporabnika');
define('_SURE2REMOVE','Ali ste prepričani, da želite odstraniti uporabnika');
define('_SURE2RESEND','Ali ste prepričani, da želite ponovno poslati e-mai za aktiviranje');
define('_SURE2RESTORE','Ali ste prepričani, da želite ponovno poslati e-mai za aktiviranje');
define('_SURE2SUSPEND','Ali ste prepričani, da želite začasno onemogočiti uporabnika');
define('_SUSPEND','Začasno onemogoči');
define('_SUSPENDUSER','Začasno onemogoči uporabnika');
define('_SUSPENDUSERS','Začasno onemogočeni uporabniki');
define('_MA_USERADMIN','Administracija uporabnika');
define('_MA_USERID','ID Uporabnika');
define('_USERPROMOTED','Uporabnik je bil povišan v admin.');
define('_MA_USERUPDATE','Posodobi uporabnika');
define('_WAITINGUSER','Čakajoči uporabnik');
define('_WAITINGUSERS','Čakajoči uporabniki');
define('_MA_ARTICLES','Članki');
define('_MA_BBFORUM','Forum');
define('_MA_CONTENT','Vsebina');
define('_MA_DOWNLOAD','Downloadi');
define('_MA_ENCYCLOPEDIA','Enciklopedija');
define('_MA_FAQ','Pogosto zastavljena vprašanja');
define('_MA_REVIEWS','Pregledov');
define('_MA_SECTIONS','Sekcije');
define('_MA_SURVEYS','Ankete');
define('_MA_TOPICS','Teme');
define('_MA_WEBLINKS','Spletne povezave');
define('_ADDERROR','NAPAKA: Problem z bazo podatkov.');
define('_NAMEERROR','NAPAKA: To admin ime je že uporabljeno.');
define('_MA_NEEDTOCOMPLETE','Izpolniti morate vsa zahtevana polja');
define('_MA_PASSWDNOMATCH','Novo geslo se ne ujema. Pojdite nazaj in poskušajte ponovno.');
define('_MA_USERNOEXIST','Uporabnik ne obstaja!');
define('_USERLOGIN','Vstop za člane');
define('_REGNEWUSER','Registracija novega uporabnika');
define('_PASSWORDLOST','Ste pozabili/izgubili geslo?');
define('_NOPROBLEM',' Ni problem. Samo vpišite vzdevek in kliknite na Pošlji. Poslali vam bomo avtomatski e-mail s \'potrdilnim geslom\'. Tedaj morate ponovno vpisati vzdevek in potrdilno geslo, nakar boste prejeli novo geslo.');
define('_CONFIRMATIONCODE','Potrdilno geslo');
define('_SENDPASSWORD','Pošlji geslo');
define('_MA_YOUARELOGGEDOUT','Sedaj ste izpisani');
define('_USERACCOUNT','Uporabniški račun');
define('_HASTHISEMAIL','ima ta e-mail.');
define('_AWEBUSERFROM','uporabnik iz');
define('_HASREQUESTED','je pravkar dal zahtevo, da se mu pošlje geslo.');
define('_YOURNEWPASSWORD','Vaše novo geslo je:');
define('_YOUCANCHANGE','Lahko spremenite po vstopu/prijavi na');
define('_IFYOUDIDNOTASK','Če tega niste želeli, ne skrbite. Tega sporočila ne vidi nihče razen vas. Če je to napaka, samo lepo vstopite z novim geslom.');
define('_PASSWORD4','Geslo za');
define('_MAILED','Poslano na mail.');
define('_CODEREQUESTED','je pravkar poslal zahtevo za potrdilno geslo.');
define('_YOURCODEIS','Vaše potrdilno geslo je:');
define('_WITHTHISCODE','S tem geslom lahko izberete novo geslo na');
define('_IFYOUDIDNOTASK2','Če tega niste želeli, ne skrbite. Preprosto izbrišite e-mail sporočilo.');
define('_CODEFOR','Potrdilno geslo za');
define('_USERPASSWORD4','Uporabniško geslo za');
define('_255CHARMAX','(maks. 255 znakov. Podpis lahko vsebuje HTML oznake)');
define('_CANKNOWABOUT','(maks. 255 znakov. Napišite, kar želite, da drugi vedo o Vas)');
define('_SOMETHINGWRONG','Nekaj je zbrk***... ali tega prav tako ne marate kot jaz?');
define('_COMMENTSCONFIG','Konfiguracija komentarjev');
define('_DISPLAYMODE','Prikaži mod');
define('_NOCOMMENTS','Brez komentarja');
define('_NESTED','Vgnezdeno');
define('_FLAT','Plosko');
define('_THREAD','Nit');
define('_SORTORDER','Vrstni red sortiranja');
define('_OLDEST','Starejše');
define('_NEWEST','Novejše');
define('_HIGHEST','Z najvišjim rezultatom');
define('_THRESHOLD','Prag');
define('_COMMENTSWILLIGNORED','Komentarji z oceno, nižjo od te postavke, bodo ignorirani.');
define('_UNCUT','Neporezano in surovo');
define('_EVERYTHING','Skoraj vse');
define('_FILTERMOSTANON','Filtriraj večinoma anonimno');
define('_USCORE','Ocena');
define('_SCORENOTE','Anonimni začenjajo z oceno 0, člani z 1. Moderatori dodajajo ali odvzemajo ocene.');
define('_NOSCORES','Ne prikazuj ocen');
define('_HIDDESCORES','(Skrite ocene: še vedno so v veljavi, samo vidite jih ne.)');
define('_MAXCOMMENT','Maks. dolžina komentarja');
define('_TRUNCATES','Razstavljanje dolgih komentarjev in dodajanje povezave "Preberi več". Če se želite temu izogniti, vpišite zares veliko številko) ');
define('_BYTESNOTE','bytov (1024 bytov = 1K)');
define('_BROWSEUSERS','Brskaj po uporabnikih');
define('_SEARCHUSERS','Išči uporabnike');
define('_SENDPRIVATEMSG','Pošlji zasebno sporočilo na');
define('_THEME','Tema');
define('_MA_HOMECONFIG','Konfiguracija domače strani');
define('_MAX127','(maks. 127):');
define('_MESSAGEACTIVATE','Aktiviram objavljanje javnih sporočil?');
define('_ACTIVATEPERSONAL','Aktiviraj osebno kazalo');
define('_PERSONALMENUCONTENT','Vsebina zasebnega menija');
define('_CHECKTHISOPTION','(Označite to opcijo in naslednje besedilo se bo pojavilo na začetni strani)');

// avatar
define('_AVATAR_FILESIZE','Velikost slike podobe mora biti manjša od %d KB');
define('_AVATAR_CONTROL','Kontrolna plošča avatarjev');
define('_AVATAR_INFO','Prikaže majhno sličico pod vašimi podatki v prispevkih. Hkrati je lahko prikazana samo ena sličica, ki ne sme biti širša od 80 pikslov, višja od 80 pikslov, datoteka pa ne sme biti večja od 6 kB');
define('_CURRENT_IMAGE','Trenutna slika');
define('_DELETE_IMAGE','Zbriši sliko');
define('_AVATAR_OFFSITE','Povezava na avatar izven teh strani');
define('_AVATAR_OFFSITEMSG','Vpišite URL lokacije, ki vsebuje avatar, s katerim želite vzpostaviti povezavo.');
define('_AVATAR_SELECT','Izberite avatar iz galerije');
define('_SHOW_GALLERY','Prikaži galerijo');
define('_AVATAR_UPLOAD','Naložite avatar s svojega računalnika');
define('_AVATAR_UPLOAD_URL','Avtar naloži z URL-ja');
define('_AVATAR_GALLERY','Galerija avatarjev');
define('_AVATAR_ERR_IMTYPE','The avatar filetype must be .jpg, .gif or .png currently it is: %s');
define('_AVATAR_ERR_SIZE','Slika je prevelika: %d x %d');
define('_AVATAR_ERR_URL','Povezava z URL-jem ni mogoča');
define('_AVATAR_ERR_DATA','Datoteka, ki ste jo podali nima nobenega podatka');

/**************************
  ADMNINISTRATION SECTION
**************************/
// users_cfg.php
define('_USER_CONFIG','Konfiguracija Uporabnika');
define('_BROADCASTMSG','Activate Broadcast Messages?');
define('_MYHEADLINES','Moji naslovi');
define('_USERSHOMENUM','Dovoli uporabnikom spreminjati številko Novice v Domu?');
define('_PASSWDLEN','MIN dolina uporabnikega gesla');
define('_REQUIREADMIN','Potrebna odobritev admina');
define('_ACTALLOWREG','Dovoli registracijo uporabnika');
define('_ACTNOTIFYADD','Obvesti admina o registraciji uporabnika');
define('_ACTALLOWDELETE','Dovoli samo-brisanje uporabnika');
define('_ACTNOTIFYDELETE','Obvesti admina o brisanju uporabnika');
define('_ACTALLOWTHEME','Dovoli izbiro tem uporabnika');
define('_ACTALLOWMAIL','Dovoli spremembo e-maila uporabnika');
define('_USEACTIVATE','Uporabi e-mail aktiviranje');
define('_USEREGISTERMSG','Uporabi sporazum za registracijo');
define('_SENDWELCOMEPM','Pošlji dobrodošlico PS novim uporabnikom');
define('_WELCOMEPMBODY','Telo sporočila');
// fields

// avatar
define('_AVATAR_SETTINGS','Konfiguracija avtarja');
define('_AV_ALLOW_LOCAL','Omogoči avtarje iz galerije');
define('_AV_ALLOW_REMOTE','Omogoči oddaljene avtarje');
define('_AV_ALLOW_REMOTE_INFO','Avatars linked to from another website');
define('_AV_ALLOW_UPLOAD','Omogoči nalaganje avtarja');
define('_AV_MAX_FILESIZE','Maksimalna velikost podobe');
define('_AV_MAX_FILESIZE_INFO','Za naložene datoteke podob');
define('_AV_MAX_AVATAR_SIZE','Maksimalna velikost podob');
define('_AV_MAX_AVATAR_SIZE_INFO','(Višina x Širina v pixlih)');
define('_AV_AVATAR_STORAGE_PATH','Naslov podobe datoteke');
define('_AV_AVATAR_STORAGE_PATH_INFO','Naslov pod rootom CPG-Nuke-a, npr. uploads/avatars');
define('_AV_AVATAR_GALLERY_PATH','Nasov Galerije Podob');
define('_AV_AVATAR_GALLERY_PATH_INFO','Path under your CPG-Nuke root dir for pre-loaded images, e.g. images/avatars');
define('_AV_DEFAULT','Default avatar image');
define('_AV_DEFAULT_INFO','Relative to your Avatar Gallery Path');
define('_AV_ALLOW_ANIMATED','Dovoli animirane podobe');

// users.php
define('_USERADMIN','Uporabnikova administracija');
define('_ADDUSER','Dodaj novega uporabnika');
define('_EDITUSER','Uredi uporabnika');
define('_SELECTAUSER','Izberi uporabnika');
define('_MA_PRIVILEGES','Dovoljenja');
define('_ICQ','ICQ tevilka');
define('_AIM','AIM tevilka');
define('_YIM','YIM tevilka');
define('_MSNM','MSNM tevilka');
define('_LOCATION','Država');
define('_OCCUPATION','Poklic');
define('_INTERESTS','Interesi');
define('_EXTRAINFO','Dodatne informacije');
define('_USERID','ID uporabnika');
define('_SURE2DELETE','Ali ste prepričani, da želite pobrisati uporabnika');
