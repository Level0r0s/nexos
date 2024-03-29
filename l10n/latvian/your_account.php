<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/latvian/your_account.php,v $
  $Revision: 9.9 $
  $Author: nanocaiordo $
  $Date: 2006/02/12 14:44:02 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_MA_HIDDEN','Slēpts');
define('_MA_VISIBLE','Redzams');
define('_MA_REQUIRED','Nepieciešams');
define('_MA_PROFILE_INFO','Profila infomācija');
define('_MA_ADDITIONAL','Papildus informācija');
define('_MA_REALNAME','Vārds, uzvārds');
define('_MA_FAKEMAIL','Redzamais e-pasts');
define('_MA_HOMEPAGE','Mājas lapas adrese');
define('_MA_ICQ','ICQ numurs');
define('_MA_AIM','AIM adreses');
define('_MA_YIM','Yahoo! ziņotājs');
define('_MA_MSNM','MSN ziņotājs');
define('_MA_LOCATION','Dzīvesvieta');
define('_MA_OCCUPATION','Nodarbošanās');
define('_MA_INTERESTS','Intereses');
define('_MA_SIGNATURE','Paraksts');
define('_MA_EXTRAINFO','Papildus informācija');
define('_MA_PREFERENCES','Uzstādījumi');
define('_MA_TIMEZONE','Laika josla');
define('_MA_DATEFORMAT','Datuma formāts');
define('_MA_RECEIVENEWSLETTER','Jaunumu saņemšana');
define('_MA_SHOWEMAIL','Rādīt manu e-pasta adresi');
define('_MA_SHOWONLINE','Rādīt manu tiešsaistes statusu');
define('_MA_ALLOWBBCODE','Vienmēr atļaut BBCode');
define('_MA_ALLOWHTML','Vienmēr atļaut HTML');
define('_MA_ALLOWSMILIES','Vienmēr rādīt emocijas');
define('_MA_NOTIFYREPLY','Ziņot par atbildēm');
define('_MA_NOTIFYPM','Ziņot par jaunajām privātajām ziņām caur e-pastu');
define('_MA_POPUPPM','Jaunas privātās ziņas parādīt jaunā logā');
define('_MA_ATTACHSIG','Vienmēr pievienot manu parakstu');
define('_MA_PRIVATE','Privātā informācija');
define('_MA_FIRSTNAME','Vārds');
define('_MA_LASTNAME','Uzvārds');
define('_MA_GENDER','Dzimums');
define('_MALE','Vīrietis');
define('_FEMALE','Sieviete');
define('_MA_BIRTHDAY','Dzimšanas datums');
define('_MA_BIRTHDAYMSG','Datuma forma - mēnesis/diena/gads');
define('_MA_TELEPHONE','Tālruņa numurs');
define('_MA_FAX','Faksa numurs');
define('_OSC_NEWSLETTER','Saņemt veikala jaunākās ziņas');
define('_OSC_NEWSLETTERMSG','Atsevišķs e-pasts par veikala jaunākajām precēm un atlaidēm');
define('_BOUNDREGISTRATION','Nospiežot pogu Reģistrēties, Tu piekrīti ievērot šos nosacījumus!');
define('_MA_REGISTRATION','Reģistrēšanās nosacījumi');
define('_MA_AGREE_OVER_13','Es piekrītu šiem nosacījumiem un esmu vismaz 13 gadus vecs');
define('_MA_AGREE_UNDER_13','Es piekrītu šiem nosacījumiem un esmu vecumā līdz 13 gadiem');
define('_MA_DO_NOT_AGREE','Es nepiekrītu šiem nosacījumiem');
define('_MA_REGISTRATION_INFO','Reģistrācijas informācja');
define('_MA_ITEMS_REQUIRED','Ar * iezīmētie lauki jāaizpilda obligāti.');
define('_MA_PROFILE_INFO_NOTICE','Šī informācija būs publiski redzama');
define('_USERNAME','Lietotāja vārds');
define('_EMAILADDRESS','E-pasta adrese');
define('_BLANKFORAUTO','Atstājot lauku tukšu, parole tiks automātiski uzģenerēta');
define('_CONFIRMPASSWORD','Paroles apstiprināšana');
define('_MA_SUBMIT','Apstiprināt');
define('_MA_FAKEMAILMSG','Šī e-pasta adrese būs redzama visiem lietotājiem');
define('_MA_DATEFORMATMSG','Tiek lietota PHP funkcijas <a href="http://php.net/date">date()</a> sintakse');
define('_MA_SIGNATUREMSG','Šī informācija tiks pievienota katram manam ziņojumam<br />'.sprintf(_M_CHARS, 255));
define('_MA_NOTIFYREPLYMSG','Tiks nosūtīts e-pasts, ja kāds ierakstīs atbildes ziņojumu tēmā, kurā Tu esi ierakstījis ziņojumu. Šo uzstādījumu var mainīt neatkarīgi no tā, kad esi ierakstījis ziņojumu');
define('_MA_POPUPPMMSG','Tiks atvērts jauns logs, ja Tev tiks nosūtīta jauna privātā ziņa');
define('_ACTDISABLED','Šo funkciju var <b>DEAKTIVIZĒT</b> lapas administrators');
define('_USERFINALSTEP','Lietotāja reģistrācijas pēdējais solis');
define('_USERCHECKDATA','lūdzu pārbaudiet sekojošu informāciju. Ja tā ir pareiza, tad Tu drīksti pabeigt reģistrēšanās procesu, nospiežot pogu "Beigt", savādāk spied pogu "Atpakaļ" un izdari nepieciešamās izmaiņas.');
define('_YOURPASSWORD','Tava parole ir:');
define('_YOUWILLRECEIVE','Tu saņemsi e-pasta ziņojumu ar apstiprinājuma saiti, kura Tev jāaktivizē tuvāko 24 stundu laikā');
define('_YOUWILLRECEIVE2','Tu saņemsi e-pasta ziņojumu ar sava lietotāja konta informāciju.');
define('_WAITAPPROVAL','Lapas administrators izskatīs Tavu pieprasījumu un nosūtīs Tev e-pasta ziņojumu, ja Tavs pieprasījums tiks apstiprināts.');
define('_FINISH','Beigt');
define('_YOUUSEDEMAIL','Tu vai kāds cits jau lieto šo e-pasta adresi');
define('_TOREGISTER','reģistrēt kontu');
define('_USERREGLOGIN','Lietotāja reģistrācija/autorizācija');
define('_USERAPPLOGIN','Lietotāja apllikācija/autorizācija');
define('_ACCOUNTCREATED','Jauns lietotāja konts ir izveidots!');
define('_YOUAREREGISTERED','Esi sveicināts! Tagad Tu esi reģistrēts lietotājs');
define('_FINISHUSERCONF','Tavs pieprasījums izveidot jaunu lietotāja kontu tiek apstrādāts<br />Tūlīt Tu saņemsi e-pasta ziņojumu ar apstiprinājuma saiti, kura Tev jāaktivizē tuvāko 24 stundu laikā');
define('_FINISHUSERCONF2','Tavs pieprasījums izveidot jaunu lietotāja kontu ir apstrādāts. Tagad Tu vari');
define('_FINISHUSERCONF3','autorizēties šeit');
define('_TOFINISHUSER','Lai beigtu reģistrācijas procesu, Tev ir jāaktivizē šī saite tuvāko 24 stundu laikā. Savādāk Tevis nosūtītā informācija tiks izdzēsta un vajadzēs to ievadīt vēlreiz');
define('_ACTIVATIONSUB','Lietotāja konta aktivizēšana');
define('_REGISTRATIONSUB','Lietotāja konta reģistrācija');
define('_THANKSUSER','Paldies Tev, ka reģistrējies');
define('_FOLLOWINGMEM','Šī ir Tava reģistrētā lietotāja informācija:');
define('_TOAPPLY','lai pieteiktos kontam');
define('_APPLICATIONSUB','Lietotāja konta pieteikums');
define('_YOUAREPENDING','Esi sveicināts! Tavs reģistrācijas pieteikums tiek apstrādāts. Lapas administrators ar Tevi sazināsies, kad pieteikums tiks apstiprināts.');
define('_THANKSAPPL','Paldies par pieteikšanos');
define('_MEMADD','Reģistrētais lietotājs pievienots');
define('_MEMAPL','Reģistrētais lietotājs pieteicies');
define('_ERRORINVEMAIL','KĻŪDA: Nepareiza e-pasta adrese');
define('_NICK2SHORT','Lietotāja vārds ir par īsu. Tam jābūt vismaz 3 simbolus garam');
define('_SECCODEINCOR','Drošības kods ir nepareizs. Lūdzu atgriezies atpakaļ un ievadi to pareizi...');
define('_ERROREMAILSPACES','KĻŪDA: E-pasta adreses nedrīkst saturēt atstarpes simbolus');
define('_ERRORINVNICK','KĻŪDA: Nepareizs lietotāja vārds');
define('_NICK2LONG','Lietotāja vārds ir pārāk garš. Tam jābūt līdz 26 simbolus garam');
define('_NAMERESERVED','KĻŪDA: Šis vārds ir rezervēts');
define('_NAMEDENIED','KĻŪDA: Šī daļa no Tevis izvēlētā lietotāja vārda var būt nelietojama :');
define('_NICKNOSPACES','KĻŪDA: Lietotāja vārds nedrīkst saturēt atstarpes simbolus');
define('_NICKTAKEN','KĻŪDA: Šāds lietotāja vārds jau eksistē');
define('_EMAILREGISTERED','KĻŪDA: Šāda e-pasta adrese jau ir reģistrēta');
define('_PASSDIFFERENT','Ievadītās paroles nesakrīt.');
define('_YOUPASSMUSTBE','Tavai parolei jābūt');
define('_CHARLONG','simbolu garumā');
define('_ACCOUNTRESERVED','Jauna lietotāja konts ir rezervēts!');
define('_EMAILNOTUSABLE','KĻŪDA: E-pasta adrese nav lietojama');
define('_ACTIVATIONYES','Lietotāja aktivizēšana');
define('_ACTMSG','Tavs konts ir aktivizēts. Lūdzu autorizējies, lietojot <a href="'.getlink().'">šo saiti</a> un ievadot Tev piešķirto lietotāja vārdu un paroli');
define('_ACTIVATIONERROR','Kļūda aktivizējot lietotāju');
define('_ACTERROR1','Lietotāja apstiprināšanas kods ir nepareizs.<br /><br />Lūdzu pārliecinies, ka lietoji e-pasta ziņojumā saņemto apstiprinājuma saiti, vai arī piesakies jaunam lietotāja kontam <a href="'.getlink().'">šeit</a>.');
define('_ACTERROR2','Nav atrodams lietotājs ar šādu informāciju.<br /><br />Tu vari reģistrēties, izmantojot <a href="'.getlink().'">šo saiti</a>.');
define('_CURRENTPASSWORD','Esošā parole');
define('_CURRENTPASSWORDMSG','Tev jāapstiprina esošā parole, ja vēlies mainīt paroli vai e-pasta adresi');
define('_NEWPASSWORD','Jaunā parole');
define('_NEWPASSWORDMSG','Tev tikai jāievada jaunā parole, ja vēlies to nomainīt');
define('_CONFIRMPASSWORDMSG','Tev tikai jāapstiprina sava parole, ja Tu to augstāk nomainīji');
define('_SUREDELETE','Vai patiešām vēlies dzēst savu kontu?');
define('_CATEGORY_SELECT','Izvēlies kategoriju');
define('_SELECT_AVATAR','Izvēlies savu iemiesojumu');
define('_CANCEL_AVATAR','Atcel savu iemiesojumu');
define('_THISISYOURPAGE','Šī ir Tava privātā lapa');
define('_PERSONALINFO','Privātā informācija');
define('_ABOUT_USER','Viss par ');
define('_CONTACTINFO','Kontaktinformācija');
define('_PM','Privātā ziņa');
define('_JOINED','Pievienojies');
define('_RANK','Rangs');
define('_LAST10BBTOPIC','Pēdējās 10 foruma tēmas');
define('_LAST10BBTOPICS','Pēdējās 10 foruma tēmas, kuras aizsāka');
define('_LAST10COMMENT','Pēdējie 10 komentāri');
define('_LAST10DOWNLOAD','Pēdējās 10 lejupielādes');
define('_LAST10DOWNLOADS','Pēdējās 10 lejuplādes, kuras veica');
define('_LAST10SUBMISSION','Pēdējie 10 ziņu apstiprinājumi');
define('_LAST10WEBLINK','Pēdējās 10 tīmekļa saites');
define('_LAST10WEBLINKS','Pēdējās 10 tīmekļa saites, kuras pievienoja');
define('_MEMBERGROUPS','Reģistrēto lietotāju grupas');
define('_AVATAR','Iemiesojums');
define('_WEBSITE','Tīmekļa lapa');
define('_USERSTATUS','Lietotāja statuss');
define('_ONLINE','IR tiešsaistē');
define('_OFFLINE','NAV tiešsaistē');
define('_NOTSUBSCRIBED','Tu neesi pierakstījies uz mūsu jaunumiem');
define('_SUBSCRIBED','Tu esi pierakstījies uz mūsu jaunumiem');
define('_MA_BROADCAST','Nosūtīt publisku ziņojumu');
define('_BROADCASTTEXT','Tu vari nosūtīt <i>publisko ziņojumu</i> no šejienes (ziņojuma maksimālais garums - 255 simboli). Šis ziņojums būs redzams visiem tiešsaistē esošajiem lietotājiem turpmākās 10 minūtes. Jebkurš lietotājs redzēs šo ziņojumu vienreiz sarkanā krāsā zem lapas zīmola. Jebkurš lietotājs var atslēgt šo iespēju, izmantojot <a href="'.getlink("Your_Account&amp;op=edithome").'">šo saiti</a>. Lūdzu, neesiet uzmācīgi! HTML kods nav atļauts.');
define('_BROADCASTSENT','Tava publiskā ziņa ir nosūtīta.');
define('_BROADCASTNOTSENT','<b>KĻŪDA:</b> Tavs publiskais ziņojums vai nu ir tukšs, vai arī Tu nesen to esi nosūtījis. Lai varētu nosūtīt nākamo publisko ziņojumu, uzgaidi aptuveni 10 minūtes');
define('_RETURNPAGE','Atgriezties uz savu privāto lapu');
define('_MA_MYHEADLINES','Mani virsraksti');
define('_SELECTASITE','Norādi tīmekļa lapu, no kuras vēlies lasīt virsrakstus:');
define('_SELECTASITE2','Izvēlies tīmekļa lapu');
define('_ORTYPEURL','Vai arī ievadi url adresi sevis izvēlētai RSS/XML virsrakstu tīmekļa lapai:');
define('_MA_GO','Aiziet');
define('_HEADLINESFROM','Virsraksti no');
define('_MA_READMYJOURNAL','Lasīt manus memuārus');
define('_ACCDELETED','Konts ir izdzēsts');
define('_SERVERNOMAIL','Šim serverim nav pievienotas e-pasta funkcijas. Lūdzu sazinies ar lapas administratoru.');
define('_ACCSUSPENDED','Konts ir iesaldēts');
define('_BESUREACT','Pārliecinies, vai esi aktivizējis savu kontu!');
define('_MEMDEL','Reģistrētais lietotājs ir izdzēsts');
define('_YOUBAD','KĻŪDA: Tu mēģināji izdarīt neatļautu darbību!');
define('_NOINFOFOR','Nav pieejamas informācijas par');
define('_SORRYNOUSERINFO','Piedod, bet netika atrasta ar šo lietotāju saistīta informācija');
define('_LOGININCOR','Kļūda autorizējoties! Lūdzu mēģini vēlreiz...');
define('_UPDATEFAILED','Nav iespējams atjaunot informāciju par lietotāju. Lūdzu sazinies ar lapas administratoru!');
define('_ACCTCHANGE','Mainīt informāciju');
define('_ACCTCOMMENTS','Komentāru iestatījumi');
define('_ACCTEXIT','Beigt darbu');
define('_ACCTHOME','Mainīt galveno lapu');
define('_ACCTJOURNAL','Tavi memuāri');
define('_ACCTTHEME','Izvēlies apdari');
define('_CHANGEHOME','Tava galvenā lapa');
define('_CHANGEYOURINFO','Tava informācija');
define('_CONFIGCOMMENTS','Komentāri');
define('_DELETEACCT','Dzēst kontu');
define('_LOGOUTEXIT','Beigt darbu');
define('_MA_MESSAGES','Ziņojumi');
define('_RETURNACCOUNT','Atgriezties uz Tava konta lapu');
define('_SELECTTHETHEME','Apdares');
define('_DELETEREASON','Dzēšanas iemesls');
define('_SUSPENDREASON','Iesaldēšanas iemesls');
define('_DENYREASON','Atteikuma iemesls');
define('_CHECKNUM','Aktivizācija #');
define('_REGDATE','Datums pievienots');
define('_ACCTAPPROVE','Konts akceptēts');
define('_ACCTDELETE','Konts izdzēsts');
define('_ACCTDENY','Konts aizliegts');
define('_ACCTREMOVE','Konts pārvietots');
define('_ACCTRESTORE','Konts atjaunots');
define('_ACCTSUSPEND','Konts iesaldēts');
define('_ACTIVEUSERS','Aktīvie lietotāji');
define('_MA_ADDUSER','Pievienot jaunu lietotāju');
define('_MA_ADDUSERBUT','Pievienot lietotāju');
define('_MA_ALLOWUSERS','Atļaut citiem redzēt manu e-pasta adresi');
define('_APPROVE','Akceptēt');
define('_APPROVEUSER','Akceptēt lietotāju');
define('_MA_DELETEUSER','Izdzēst lietotāju');
define('_DELETEUSERS','Izdzēstie lietotāji');
define('_DENY','Noraidīt');
define('_DENYUSER','Noraidīt lietotāju');
define('_DETUSER','Lietotāja īpašības');
define('_MA_EDITUSER','Rediģēt lietotāju');
define('_MA_FORCHANGES','(Tikai izmaiņām)');
define('_MA_FUNCTIONS','Funkcijas');
define('_HASAPPROVE','ir apstiprināts.');
define('_HASDELETE','ir izdzēsts.');
define('_HASDENY','ir noraidīts.');
define('_HASREMOVE','ir pārvietots.');
define('_HASRESTORE','ir atjaunots.');
define('_HASSUSPEND','ir iesaldēts.');
define('_MA_ID','ID');
define('_MA_MODIFY','Rediģēt');
define('_MA_NAME','Vārds');
define('_MA_NEWSLETTER','Jaunumi');
define('_MA_OPTION','Opcijas');
define('_OR','vai');
define('_MA_PERMISSIONS','Atļaujas');
define('_PROMOTE','Paaugstināt');
define('_PROMOTEUSER','Paaugstināt lietotāju');
define('_REMOVE','Pārvietot');
define('_REMOVEUSER','Pārvietot lietotāju');
define('_MA_REQUIREDNOCHANGE','(nepieciešams, vēlāk nevarēs mainīt)');
define('_RESEND','Izsūtīt atkārtoti');
define('_RESENDMAIL','Izsūtīt atkārtoti aktivizācijas e-pasta ziņojumu');
define('_RESTORE','Atjaunot');
define('_RESTOREUSER','Atjaunot lietotāju');
define('_MA_RETYPEPASSWD','Ievadīt paroli vēlreiz');
define('_MA_SAVECHANGES','Saglabāt izmaiņas');
define('_SHOWMAIL','Parādīt e-pastu');
define('_SORRYTO','Tavs konts');
define('_SURE2APPROVE','Vai esi pārliecināts, ka vēlies apstiprināt lietotāju');
define('_MA_SURE2DELETE','Vai esi pārliecināts, ka vēlies izdzēst lietotāju');
define('_SURE2DENY','Vai esi pārliecināts, ka vēlies noraidīt lietotāju');
define('_SURE2PROMOTE','Vai esi pārliecināts, ka vēlies paaugstināt lietotāju');
define('_SURE2REMOVE','Vai esi pārliecināts, ka vēlies pārvietot lietotāju');
define('_SURE2RESEND','Vai esi pārliecināts, ka vēlies atkārtoti nosūtīt aktivizācijas e-pasta ziņojumu');
define('_SURE2RESTORE','Vai esi pārliecināts, ka vēlies atjaunot lietotāju');
define('_SURE2SUSPEND','Vai esi pārliecināts, ka vēlies iesaldēt lietotāju');
define('_SUSPEND','Iesaldēt');
define('_SUSPENDUSER','Iesaldēt lietotāju');
define('_SUSPENDUSERS','Iesaldētie lietotāji');
define('_MA_USERADMIN','Lietotāju pārvaldība');
define('_MA_USERID','Lietotāja ID');
define('_USERPROMOTED','Lietotājs ir paaugstināts par administratoru.');
define('_MA_USERUPDATE','Atjaunot lietotāju');
define('_WAITINGUSER','Gaidošais lietotājs');
define('_WAITINGUSERS','Apstiprinājumu gaidošie lietotāji');
define('_MA_ARTICLES','Raksti');
define('_MA_BBFORUM','Forums');
define('_MA_CONTENT','Saturs');
define('_MA_DOWNLOAD','Lejupielāde');
define('_MA_ENCYCLOPEDIA','Enciklopēdija');
define('_MA_FAQ','BUJ');
define('_MA_REVIEWS','Pirmsskatījums');
define('_MA_SECTIONS','Sadaļas');
define('_MA_SURVEYS','Aptaujas');
define('_MA_TOPICS','Tēmas');
define('_MA_WEBLINKS','Tīmekļa saites');
define('_ADDERROR','KĻŪDA: Ir problēmas ar datu bāzi.');
define('_NAMEERROR','KĻŪDA: Šis administratora vārds jau tiek lietots.');
define('_MA_NEEDTOCOMPLETE','Tev jāaizpilda visi nepieciešamie lauki');
define('_MA_PASSWDNOMATCH','Piedod, bet jaunās paroles nesakrīt. Atgriezies atpakaļ un mēģini vēlreiz');
define('_MA_USERNOEXIST','Šāds lietotājs neeksistē!');
define('_USERLOGIN','Lietotāja autorizācija');
define('_REGNEWUSER','Jauna lietotāja reģistrācija');
define('_PASSWORDLOST','Aizmirsi savu paroli?');
define('_NOPROBLEM','Ievadi tikai savu lietotāja vārdu un nospied nosūtīšanas pogu. Mēs aizsūtīsim apstiprinājuma e-pasta ziņojumu uz e-pasta adresi, kura ir mūsu rīcībā. Tad Tev vajadzēs vēlreiz ievadīt savu lietotāja vārdu. Tad mēs nosūtīsim apstiprinājuma kodu un uzģenerēsim jaunu paroli Tavam kontam');
define('_CONFIRMATIONCODE','Apstiprinājuma kods');
define('_SENDPASSWORD','Nosūtīt paroli');
define('_MA_YOUARELOGGEDOUT','Tu esi veiksmīgi izgājis ārā no sistēmas!');
define('_USERACCOUNT','Lietotāja konts');
define('_HASTHISEMAIL','šī e-pasta adrese ir asociēta ar to.');
define('_AWEBUSERFROM','Tīmekļa lietotājs no');
define('_HASREQUESTED','tikko pieprasīja jaunu paroli šim kontam');
define('_YOURNEWPASSWORD','Tava jaunā parole ir:');
define('_YOUCANCHANGE','To Tu vari mainīt, autorizējoties');
define('_IFYOUDIDNOTASK','Ja Tu neesi pieprasījis šādu informāciju, nesatraucies! Ja šī ir kļūda, vienkārši autorizējies sistēmā ar jauno paroli.');
define('_PASSWORD4','Parole paredzēta');
define('_MAILED','Nosūtīts.');
define('_CODEREQUESTED','tikko pieprasīja apstiprinājuma kodu, lai nomainītu paroli.');
define('_YOURCODEIS','Tavs apstiprinājums kods ir:');
define('_WITHTHISCODE','Ar šo kodu Tu tagad vari nomainīt jauno paroli');
define('_IFYOUDIDNOTASK2','Ja Tu neesi pieprasījis šādu informāciju, nesatraucies! Vienkārši izdzēs šo e-pasta ziņojumu!');
define('_CODEFOR','Apstiprinājuma kods lietotājam');
define('_USERPASSWORD4','Parole lietotājam');
define('_255CHARMAX','(maksimālais garums - 255 simboli. Ievadi savu parakstu, izmantojot HTML kodu)');
define('_CANKNOWABOUT','(maksimālais garums - 255 simboli. Uzraksti, kas citiem būtu jāzina par tevi)');
define('_SOMETHINGWRONG','Kaut kas nojuka... Vai Tev jau tas nav apnicis?');
define('_COMMENTSCONFIG','Komentāru iestatījumi');
define('_DISPLAYMODE','Attēlošanas režīms');
define('_NOCOMMENTS','Komentāru nav');
define('_NESTED','Ligzdots');
define('_FLAT','Plakans');
define('_THREAD','Pavediens');
define('_SORTORDER','Kārtošanas kārtība');
define('_OLDEST','Sākot ar vecāko');
define('_NEWEST','Sākot ar jaunāko');
define('_HIGHEST','Sākot ar lielāko punktu skaitu');
define('_THRESHOLD','Slieksnis');
define('_COMMENTSWILLIGNORED','Komentārs novērtēts vēl zemāk nekā, ja tas vienkārši tiktu ignorēts');
define('_UNCUT','Pirmatnējie');
define('_EVERYTHING','Gandrīz viss');
define('_FILTERMOSTANON','Atlasīt visanonīmākos');
define('_USCORE','Punkti');
define('_SCORENOTE','Anonīmies ziņojumi sākas ar 0, reģistrēto lietotāju ziņojumi sākas ar 1<br />Lapas uzraugi var mainīt punktu skaitu');
define('_NOSCORES','Paslēpt punktus');
define('_HIDDESCORES','(Paslēpt punktus: Tie vēl joprojām ir, Tu tikai viņus neredzi.)');
define('_MAXCOMMENT','Komentāra maksimālais garums');
define('_TRUNCATES','(Saīsina pārāk garus komentārus, pievieno saiti Lasīt vairāk. Uzstādi ļoti lielu, lai deaktivizētu)');
define('_BYTESNOTE','baiti (1024 baiti = 1 kilobaits)');
define('_BROWSEUSERS','Skatīt lietotājus');
define('_SEARCHUSERS','Meklēt lietotājus');
define('_SENDPRIVATEMSG','Nosūtīt privāto ziņu lietotājam');
define('_THEME','Apdare');
define('_MA_HOMECONFIG','Galvenās lapas pārvaldība');
define('_MAX127','(maksimums - 127):');
define('_MESSAGEACTIVATE','Aktivizēt publisko ziņojumu nosūtīšanu?');
define('_ACTIVATEPERSONAL','Aktivizēt privāto izvēlni');
define('_PERSONALMENUCONTENT','Privātās izvēlnes saturs');
define('_CHECKTHISOPTION','(Iespējo šo opciju un Tavā galvenajā lapā parādīsies sekojošs teksts)');

// avatar
define('_AVATAR_FILESIZE','The avatar image file size must be less than %d KB');
define('_AVATAR_CONTROL','Avatar control panel');
define('_AVATAR_INFO','Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than '.$MAIN_CFG['avatar']['max_width'].' pixels, the height no greater than '.$MAIN_CFG['avatar']['max_height'].' pixels, and the file size no more than '.intval($MAIN_CFG['avatar']['filesize']/1024).' KB.');
define('_CURRENT_IMAGE','Current Image');
define('_DELETE_IMAGE','Delete Image');
define('_AVATAR_OFFSITE','Link to off-site Avatar');
define('_AVATAR_OFFSITEMSG','Enter the URL of the location containing the Avatar image you wish to link to.');
define('_AVATAR_SELECT','Select Avatar from gallery');
define('_SHOW_GALLERY','Show gallery');
define('_AVATAR_UPLOAD','Upload Avatar from your machine');
define('_AVATAR_UPLOAD_URL','Upload Avatar from a URL');
define('_AVATAR_GALLERY','Avatar gallery');
define('_AVATAR_ERR_IMTYPE','The avatar filetype must be .jpg, .gif or .png currently it is: %s');
define('_AVATAR_ERR_SIZE','Image is too large: %d x %d');
define('_AVATAR_ERR_URL','A connection could not be made to the URL you gave');
define('_AVATAR_ERR_DATA','The file at the URL you gave contains no data');

/**************************
  ADMNINISTRATION SECTION
**************************/
// users_cfg.php
define('_USER_CONFIG','Member Configuration');
define('_BROADCASTMSG','Activate Broadcast Messages?');
define('_MYHEADLINES','Activate Headlines Reader?');
define('_USERSHOMENUM','Let users change News number in Home?');
define('_PASSWDLEN','Minimum users password length');
define('_REQUIREADMIN','Require Admin Approval');
define('_ACTALLOWREG','Allow User Registration');
define('_ACTNOTIFYADD','Notify Admin of User Registration');
define('_ACTALLOWDELETE','Allow User self-deletion');
define('_ACTNOTIFYDELETE','Notify Admin of User Deletion');
define('_ACTALLOWTHEME','Allow User Theme Selection');
define('_ACTALLOWMAIL','Allow User Email Change');
define('_USEACTIVATE','Use email Activation');
define('_USEREGISTERMSG','Use Registration Agreement');
define('_SENDWELCOMEPM','Send welcome PM to new users');
define('_WELCOMEPMBODY','Message Body');
// fields

// avatar
define('_AVATAR_SETTINGS','Avatar Configuration');
define('_AV_ALLOW_LOCAL','Enable gallery avatars');
define('_AV_ALLOW_REMOTE','Enable remote avatars');
define('_AV_ALLOW_REMOTE_INFO','Avatars linked to from another website');
define('_AV_ALLOW_UPLOAD','Enable avatar uploading');
define('_AV_MAX_FILESIZE','Maximum Avatar File Size');
define('_AV_MAX_FILESIZE_INFO','For uploaded avatar files');
define('_AV_MAX_AVATAR_SIZE','Maximum Avatar Dimensions');
define('_AV_MAX_AVATAR_SIZE_INFO','(Height x Width in pixels)');
define('_AV_AVATAR_STORAGE_PATH','Avatar Upload Path');
define('_AV_AVATAR_STORAGE_PATH_INFO','Path under your CPG-Nuke root dir, e.g. uploads/avatars');
define('_AV_AVATAR_GALLERY_PATH','Avatar Gallery Path');
define('_AV_AVATAR_GALLERY_PATH_INFO','Path under your CPG-Nuke root dir for pre-loaded images, e.g. images/avatars');
define('_AV_DEFAULT','Default avatar image');
define('_AV_DEFAULT_INFO','Relative to your Avatar Gallery Path');
define('_AV_ALLOW_ANIMATED','Allow animated avatars');

// users.php
define('_USERADMIN','Users Administration');
define('_ADDUSER','Add a New User');
define('_EDITUSER','Edit User');
define('_SELECTAUSER','Select a User');
define('_MA_PRIVILEGES','Privileges');
define('_ICQ','ICQ Number');
define('_AIM','AIM screen name');
define('_YIM','Yahoo! ID');
define('_MSNM','MSNM Screen Name');
define('_LOCATION','Location');
define('_OCCUPATION','Occupation');
define('_INTERESTS','Interests');
define('_EXTRAINFO','Extra Info');
define('_USERID','User ID');
define('_SURE2DELETE','Are you sure you want to delete user');
