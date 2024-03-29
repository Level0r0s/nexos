<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/german/your_account.php,v $
  $Revision: 9.13 $
  $Author: nanocaiordo $
  $Date: 2006/02/12 14:41:56 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_MA_HIDDEN','Unsichtbar');
define('_MA_VISIBLE','Sichtbar');
define('_MA_REQUIRED','(Erforderlich)');
define('_MA_PROFILE_INFO','Profil-Information');
define('_MA_ADDITIONAL','Zusätzliche Informationen');
define('_MA_REALNAME','Echter Name');
define('_MA_FAKEMAIL','Fake Email');
define('_MA_HOMEPAGE','Meine Homepage');
define('_MA_ICQ','ICQ Nummer');
define('_MA_AIM','AIM Adresse');
define('_MA_YIM','Yahoo Adresse');
define('_MA_MSNM','MSN Adresse');
define('_MA_LOCATION','Mein Ort');
define('_MA_OCCUPATION','Meine Beschäftigung');
define('_MA_INTERESTS','Meine Interessen');
define('_MA_SIGNATURE','Meine Signatur');
define('_MA_EXTRAINFO','Extra Informationen');
define('_MA_PREFERENCES','Einstellungen');
define('_MA_TIMEZONE','Zeitzone');
define('_MA_DATEFORMAT','Datumsformat');
define('_MA_RECEIVENEWSLETTER','Newsletter abonnieren');
define('_MA_SHOWEMAIL','Zeige meine Email-Adresse');
define('_MA_SHOWONLINE','Meinen Onlinestatus anzeigen');
define('_MA_ALLOWBBCODE','BBCode immer zulassen');
define('_MA_ALLOWHTML','HTML immer zulassen');
define('_MA_ALLOWSMILIES','Smilies immer zulassen');
define('_MA_NOTIFYREPLY','Bei Antworten per eMail benachrichtigen');
define('_MA_NOTIFYPM','Bei neuen privaten Nachrichten eMail senden');
define('_MA_POPUPPM','Bei neuen privaten Nachrichten Popup öffnen');
define('_MA_ATTACHSIG','Signatur immer anhängen');
define('_MA_PRIVATE','Persönliche Informationen');
define('_MA_FIRSTNAME','Vorname');
define('_MA_LASTNAME','Nachname');
define('_MA_GENDER','Geschlecht');
define('_MALE','Männlich');
define('_FEMALE','Weiblich');
define('_MA_BIRTHDAY','Geburtsdatum');
define('_MA_BIRTHDAYMSG','Eingeben im Format Monat/Tag/Jahr');
define('_MA_TELEPHONE','Telefonnummer');
define('_MA_FAX','Faxnummer');
define('_OSC_NEWSLETTER','Shop-Newsletter abonnieren');
define('_OSC_NEWSLETTERMSG','Dies ist ein separater Newsletter für Shop-Angebote');
define('_BOUNDREGISTRATION','By clicking Register below you agree to be bound by these conditions.');
define('_MA_REGISTRATION','Durch Klicken auf Registrieren erkennen Sie diese Bedingungen an.');
define('_MA_AGREE_OVER_13','Ich erkenne diese Bedingungen an und bin <b>über</b> oder <b>genau</b> 14 Jahre alt');
define('_MA_AGREE_UNDER_13','Ich erkenne diese Bedingungen an und bin <b>unter</b> 14 Jahre alt');
define('_MA_DO_NOT_AGREE','Ich erkenne diese Bedingungen nicht an');
define('_MA_REGISTRATION_INFO','Registrierungs-Informationen');
define('_MA_ITEMS_REQUIRED','Mit * gekennzeichnete Felder sind, wenn nicht anders angegeben, Pflichteingaben');
define('_MA_PROFILE_INFO_NOTICE','Diese Informationen werden veröffentlicht');
define('_USERNAME','Benutzername');
define('_EMAILADDRESS','Email Adresse');
define('_BLANKFORAUTO','Freilassen für automatisch erzeugtes Passwort');
define('_CONFIRMPASSWORD','Passwort bestätigen');
define('_MA_SUBMIT','Submit');
define('_MA_FAKEMAILMSG','Diese email Adresse wird allen Benutzern angezeigt');
define('_MA_DATEFORMATMSG','Die verwendete Syntax ist identisch mit der PHP <a href="http://php.net/date">date()</a>-Funktion');
define('_MA_SIGNATUREMSG','Dieser Text kann an meine Posts angehängt werden<br />'.sprintf(_M_CHARS, 255));
define('_MA_NOTIFYREPLYMSG','Eine eMail senden, sobald Antworten auf Beiträge eingehen, in denen Sie mitgewirkt haben? (Kann bei jedem Beitrag individuell gewählt werden)');
define('_MA_POPUPPMMSG','Ein Popup-Fenster bei neuen privaten Nachrichten öffnen?');
define('_ACTDISABLED','Diese Funktion wurde vom Administrator <b>DEAKTIVIERT</b>.');
define('_USERFINALSTEP','Registrierung: Letzter Schritt');
define('_USERCHECKDATA','Bitte prüfen Sie die folgenden Angaben. Ist alles korrekt, fahren Sie durch Klicken auf den "Fertig"-Knopf fort. Anderenfalls gehen Sie "Zurück" und ändern die betreffenden Informationen');
define('_YOURPASSWORD','Ihr Passwort lautet');
define('_YOUWILLRECEIVE','In Kürze erhalten Sie eine eMail mit dem Ihnen zugewiesenen Passwort. Sie können sich dann <a href="'.getlink("Your_Account").'">hier</a> anmelden.');
define('_YOUWILLRECEIVE2','Sie erhalten eine eMail mit Ihren Anmeldungs-Informationen.');
define('_WAITAPPROVAL','Der Administrator wird Ihre Registrierung prüfen und Sie ggf. per Mail über die Aktivierung informieren.');
define('_FINISH','Fertig');
define('_YOUUSEDEMAIL','Sie oder jemand anderes hat ihre Email-Adresse benutzt');
define('_TOREGISTER','um ein Benutzerkonto zu registrieren bei');
define('_USERREGLOGIN','Benutzer-Registrierung/Anmeldung');
define('_USERAPPLOGIN','Benutzer-Registrierungsantrag/Anmeldung');
define('_ACCOUNTCREATED','Neues Benutzerkonto erstellt!');
define('_YOUAREREGISTERED','Willkommen! Sie sind nun ein registriertes Mitglied.');
define('_FINISHUSERCONF','Ihr Antrag für ein Benutzerkonto ist eingegangen. Sie erhalten in Kürze eine Bestätigungsmail mit einem Aktivierungslink, den Sie in den nächsten 24 Stunden aufrufen müssen, um Ihre Anmeldung zu bestätigen');
define('_FINISHUSERCONF2','Ihr Antrag für ein Benutzerkonto ist eingegangen. Sie können sich jetzt');
define('_FINISHUSERCONF3','hier Anmelden');
define('_TOFINISHUSER','Um die Registrierung abzuschliessen, sollten Sie diesen Link in den nächsten 24 Stunden aufrufen, anderenfalls werden Ihre Daten automatisch vom System gelöscht und Sie müssen neu beantragen.');
define('_ACTIVATIONSUB','Benutzerkonto-Aktivierung');
define('_REGISTRATIONSUB','Benutzerkonto-Registrierung');
define('_THANKSUSER','Vielen Dank führ Ihre Registrierung bei');
define('_FOLLOWINGMEM','Nachfolgend Ihre Benutzer-Informationen:');
define('_TOAPPLY','zur Anmeldung eines Benutzerkontos bei');
define('_APPLICATIONSUB','Benutzer-Registrierungsantrag');
define('_YOUAREPENDING','Willkommen! Ihre Anmeldung muss erst von einem Administrator freigegeben werden. Sie erhalten dann ggf. eine Freischaltungsbestätigung.');
define('_THANKSAPPL','Vielen Dank, ');
define('_MEMADD','Benutzer hinzugefuegt');
define('_MEMAPL','Benutzerkonto beantragt');
define('_ERRORINVEMAIL','FEHLER: Ungültige Email-Adresse');
define('_NICK2SHORT','Benutzername zu kurz (Minimum 3 Zeichen');
define('_SECCODEINCOR','Sicherheitscode falsch, bitte überprüfen...');
define('_ERROREMAILSPACES','FEHLER: Email-Adressen können keine Leerzeichen enthaltens');
define('_ERRORINVNICK','Fehler: Ungültiger Benutzername');
define('_NICK2LONG','Benutzername ist zu lang (Maximal 26 Zeichen');
define('_NAMERESERVED','Fehler: Benutzername ist reserviert');
define('_NAMEDENIED','Fehler: Benutzername ist nicht erlaubt.');
define('_NICKNOSPACES','Fehler: Benutzername darf keine Leerzeichen enthalten');
define('_NICKTAKEN','Fehler: Benutzername ist schon vorhanden');
define('_EMAILREGISTERED','FEHLER: Es existiert bereits ein Benutzer mit dieser Email-Adresse');
define('_PASSDIFFERENT','Beide Passworte stimmen nicht überein.');
define('_YOUPASSMUSTBE','Ihr Passwort muss ');
define('_CHARLONG','Zeichen lang sein');
define('_ACCOUNTRESERVED','Neues Benutzerkonto reserviert!');
define('_EMAILNOTUSABLE','FEHLER: Ungültige Email-Adresse');
define('_ACTIVATIONYES','Benutzer-Aktivierung');
define('_ACTMSG','Ihr Benutzerkonto wurde aktiviert. Bitte melden Sie sich gleich <a href="getlink()">hier</a> an .(Benutzername und Passwort eingeben');
define('_ACTIVATIONERROR','Benutzer-Aktivierungsfehler');
define('_ACTERROR1','Ihr Aktivierungscode ist ungültig.<br /><br />Bitte überprüfen Sie den <a href="getlink()">Aktivierungslink</a> in der eMail.');
define('_ACTERROR2','Kein Eintrag in der Datenbank gefunden.<br /><br />Sie können sich <a href="getlink()">hier</a> neu registrieren.');
define('_CURRENTPASSWORD','Aktuelles Passwort');
define('_CURRENTPASSWORDMSG','Sie müssen Ihr aktuelles Passwort eingeben, wenn Sie Passwort oder eMailadresse ändern wollen');
define('_NEWPASSWORD','Neues Passwort');
define('_NEWPASSWORDMSG','Nur bei Änderungen notwendig');
define('_CONFIRMPASSWORDMSG','Nur bei Änderungen notwendig');
define('_SUREDELETE','Sind Sie sicher das Sie Ihr Benutzerkonto löschen wollen?');
define('_CATEGORY_SELECT','Kategorie auswählen');
define('_SELECT_AVATAR','Avatar auswählen');
define('_CANCEL_AVATAR','Abbrechen');
define('_THISISYOURPAGE','Dies ist Ihre persönliche Seite');
define('_PERSONALINFO','Persönliche Informationen');
define('_ABOUT_USER','Alles über ');
define('_CONTACTINFO','Kontakt-Informationen');
define('_PM','Private Nachricht');
define('_JOINED','Beitrittsdatum');
define('_RANK','Rang');
define('_LAST10BBTOPIC','die letzten 10 Foren-Themen');
define('_LAST10BBTOPICS','die letzten 10 Foren-Themen von');
define('_LAST10COMMENT','die letzten 10 Kommentare von');
define('_LAST10DOWNLOAD','die letzten 10 eingereichten Downloads');
define('_LAST10DOWNLOADS','die letzten 10 eingereichten Downloads von');
define('_LAST10SUBMISSION','die letzten 10 eingereichten Artikel');
define('_LAST10WEBLINK','die letzten 10 eingereichten Links');
define('_LAST10WEBLINKS','die letzten 10 eingereichten Links von');
define('_MEMBERGROUPS','Gruppenmitgliedschaft(en)');
define('_AVATAR','Bild (Avatar)');
define('_WEBSITE','Eigene Homepage');
define('_USERSTATUS','Eigener Benutzerstatus');
define('_ONLINE','Online');
define('_OFFLINE','Offline');
define('_NOTSUBSCRIBED','Sie sind nicht für unseren Newsletter eingetragen');
define('_SUBSCRIBED','Sie sind für unseren Newsletter eingetragen');
define('_MA_BROADCAST','Nachricht an alle Benutzer');
define('_BROADCASTTEXT','Sie können eine <i>öffentliche Durchsage</i> von hier aus senden (max. 255 Zeichen). Diese Durchsage erscheint innerhalb von 10 Minuten bei allen Benutzern, die gerade online sind. Jeder Benutzer wird diese Nachricht einmal innerhalb eines roten Balkens unterhalb des Seitenlogos sehen. Jeder Benutzer hat die Möglichkeit, dieses Feature <a href="'.getlink('Your_Account&amp;edit=prefs').'">hier</a> zu deaktivieren. Bitte nur wirklich Wichtiges über diese Funktion mitteilen! HTML ist hier nicht erlaubt.');
define('_BROADCASTSENT','Ihre Durchsage wurde gesendet.');
define('_BROADCASTNOTSENT','<b>Fehler:</b> Ihre Durchsage ist leer oder ist bereits gesendet worden. Um eine weitere Durchsage zu senden, müssen Sie mindestens 10 Minuten warten.');
define('_RETURNPAGE','Zurück zu Ihrer persönlichen Seite');
define('_MA_MYHEADLINES','My Headlines');
define('_SELECTASITE','Wählen Sie eine Seite aus, von der Sie die Überschriften lesen möchten:');
define('_SELECTASITE2','Wählen Sie eine Webseite');
define('_ORTYPEURL','oder geben Sie die URL der RSS/XML Datei Ihrer bevorzugten Seite ein:');
define('_MA_GO','los');
define('_HEADLINESFROM','Überschriften von');
define('_MA_READMYJOURNAL','lese mein Blog');
define('_ACCDELETED','Benutzerkonto wurde gelöscht');
define('_SERVERNOMAIL','Dieser Server bietet keine Maildienste. Bitte kontaktieren Sie den Administrator für Unterstützung.');
define('_ACCSUSPENDED','Benutzerkonto wurde gesperrt');
define('_BESUREACT','Bitte stellen Sie sicher, dass Sie Ihr Benutzerkonto aktiviert haben.');
define('_MEMDEL','Benutzer wurde gelöscht');
define('_YOUBAD','FEHLER: Sie haben versucht, eine verbotene Operation auszuführen!');
define('_NOINFOFOR','Es gibt keine Informationen zu');
define('_SORRYNOUSERINFO','Keine Benutzerinformationen gefunden');
define('_LOGININCOR','Anmeldung fehlerhaft! Bitte versuchen Sie es noch einmal...');
define('_UPDATEFAILED','Konnte Benutzerinformationen nicht aktualisieren. Bitte kontaktieren Sie den Administrator.');
define('_ACCTCHANGE','Profil');
define('_ACCTCOMMENTS','Kommentar- Einstellungen');
define('_ACCTEXIT','Abmelden');
define('_ACCTHOME','Startseite anpassen');
define('_ACCTJOURNAL','Ihr Tagebuch');
define('_ACCTTHEME','Seitendesign wählen');
define('_CHANGEHOME','Startseite anpassen');
define('_CHANGEYOURINFO','Ihre Informationen');
define('_CONFIGCOMMENTS','Kommentar-Ansicht');
define('_DELETEACCT','Benutzerkonto löschen');
define('_LOGOUTEXIT','Abmelden');
define('_MA_MESSAGES','Messages');
define('_RETURNACCOUNT','Zurück zu Ihrer persönlichen Seite');
define('_SELECTTHETHEME','Seitendesign');
define('_DELETEREASON','Löschungsgrund');
define('_SUSPENDREASON','Sperrungsgrund');
define('_DENYREASON','Ablehnungsgrund');
define('_CHECKNUM','Aktivierungscode');
define('_REGDATE','Beitrittsdatum');
define('_ACCTAPPROVE','Benutzerkonto freigegeben');
define('_ACCTDELETE','Benutzerkonto gelöscht');
define('_ACCTDENY','Benutzerkonto verweigert');
define('_ACCTREMOVE','Benutzerkonto entfernt');
define('_ACCTRESTORE','Benutzerkonto reaktiviert');
define('_ACCTSUSPEND','Benutzerkonto gesperrt');
define('_ACTIVEUSERS','Registrierte Benutzer');
define('_MA_ADDUSER','Neuen Benutzer hinzufügen');
define('_MA_ADDUSERBUT','Benutzer hinzufügen');
define('_MA_ALLOWUSERS','Andere Benutzer dürfen meine Email-Adresse sehen');
define('_APPROVE','Freigeben');
define('_APPROVEUSER','Benutzer freigeben');
define('_MA_DELETEUSER','Benutzer Löschen');
define('_DELETEUSERS','Benutzer löschen');
define('_DENY','Ablehnen');
define('_DENYUSER','Benutzer ablehnen');
define('_DETUSER','Benutzer-Details');
define('_MA_EDITUSER','Benutzer bearbeiten');
define('_MA_FORCHANGES','(Nur für Änderungen');
define('_MA_FUNCTIONS','Functions');
define('_HASAPPROVE','wurde freigegeben.');
define('_HASDELETE','wurde gelöscht.');
define('_HASDENY','wurde abgelehnt.');
define('_HASREMOVE','wurde entfernt.');
define('_HASRESTORE','wurde reaktiviert.');
define('_HASSUSPEND','wurde gesperrt.');
define('_MA_ID','ID');
define('_MA_MODIFY','Ändern');
define('_MA_NAME','Name');
define('_MA_NEWSLETTER','Newsletter');
define('_MA_OPTION','Option');
define('_OR','oder');
define('_MA_PERMISSIONS','Permissions');
define('_PROMOTE','Beförderung');
define('_PROMOTEUSER','Benutzer befördern');
define('_REMOVE','Entfernen');
define('_REMOVEUSER','Benutzer entfernen');
define('_MA_REQUIREDNOCHANGE','(erforderlich, kann später geändert werden)');
define('_RESEND','Erneut senden');
define('_RESENDMAIL','Aktivierungsmail versenden');
define('_RESTORE','Reaktivieren');
define('_RESTOREUSER','Benutzer reaktivieren');
define('_MA_RETYPEPASSWD','Password wiederholen');
define('_MA_SAVECHANGES','Änderungen speichern');
define('_SHOWMAIL','Zeige eMail');
define('_SORRYTO','Ihr Benutzerkonto bei');
define('_SURE2APPROVE','Benutzer wirklich freigeben:');
define('_MA_SURE2DELETE','Soll der Benutzer wirklich gelöscht werden');
define('_SURE2DENY','Benutzer wirklich ablehnen:');
define('_SURE2PROMOTE','Benutzer wirklich befördern:');
define('_SURE2REMOVE','Benutzer wirklich entfernen:');
define('_SURE2RESEND','Aktivierungsmail wirklich erneut senden:');
define('_SURE2RESTORE','Benutzer wirklich reaktivieren:');
define('_SURE2SUSPEND','Benutzer wirklich sperren:');
define('_SUSPEND','Sperren');
define('_SUSPENDUSER','Gesperrter Benutzer');
define('_SUSPENDUSERS','Gesperrte Benutzer');
define('_MA_USERADMIN','Benutzer Verwaltung');
define('_MA_USERID','Benutzer ID');
define('_USERPROMOTED','Benutzer wurde zum Administrator befördert.');
define('_MA_USERUPDATE','Benutzer aktualisieren');
define('_WAITINGUSER','Wartender Benutzer');
define('_WAITINGUSERS','Wartende Benutzer');
define('_MA_ARTICLES','Artikel');
define('_MA_BBFORUM','Forum');
define('_MA_CONTENT','Inhalt');
define('_MA_DOWNLOAD','Downloads');
define('_MA_ENCYCLOPEDIA','Enzyklopädie');
define('_MA_FAQ','FAQ');
define('_MA_REVIEWS','Berichte');
define('_MA_SECTIONS','Abschnitte');
define('_MA_SURVEYS','Umfragen');
define('_MA_TOPICS','Themen');
define('_MA_WEBLINKS','Web Links');
define('_ADDERROR','FEHLER: Es besteht ein Problem mit der Datenbank.');
define('_NAMEERROR','FEHLER: Administratorname bereits vorhanden.');
define('_MA_NEEDTOCOMPLETE','Sie müssen alle benötigten Felder ausfüllen');
define('_MA_PASSWDNOMATCH','Leider stimmen die Passwörter nicht nicht überein. Bitte geben Sie das Passwort erneut ein!');
define('_MA_USERNOEXIST','Der Benutzer Existiert nicht!');
define('_USERLOGIN','Benutzer-Anmeldung');
define('_REGNEWUSER','Neuen Benutzer registrieren');
define('_PASSWORDLOST','Passwort vergessen?');
define('_NOPROBLEM','Kein Problem. Geben Sie Ihren <b>Benutzernamen</b> ein und klicken Sie auf <b>"Passwort senden"</b>.<br />Sie erhalten einen <b>Bestätigungscode per eMail</b>.<br />Danach geben Sie auf diese Seite <b>Ihren Benutzernamen zusammenmit dem Bestätigungscode</b> ein.<br />Daraufhin wird Ihnen automatisch ein <b>neues Passwort per eMail</b> zugeschickt.');
define('_CONFIRMATIONCODE','<b>Bestätigungscode</b>');
define('_SENDPASSWORD','Passwort zusenden');
define('_MA_YOUARELOGGEDOUT','Sie sind jetzt abgemeldet.');
define('_USERACCOUNT','Das Benutzerkonto');
define('_HASTHISEMAIL','verwendet diese email Adresse.');
define('_AWEBUSERFROM','Ein Benutzer von');
define('_HASREQUESTED','hat gerade das Passwort angefordert..');
define('_YOURNEWPASSWORD','Ihr neues Passwort ist:');
define('_YOUCANCHANGE','Sie können es wieder ändern, nachdem Sie sich angemeldet haben.');
define('_IFYOUDIDNOTASK','Falls Sie kein neues Passwort beantragt haben, ist das kein Problem. Nur Sie erhalten diese Nachricht. Melden Sie sich einfach mit dem neuen Passwort an, danach können Sie es wieder ändern.');
define('_PASSWORD4','Passwort für');
define('_MAILED','gesendet.');
define('_CODEREQUESTED','hat gerade einen Bestätigungscode beantragt, um das Passwort zu ändern.');
define('_YOURCODEIS','Ihr Bestätigungscode lautet:');
define('_WITHTHISCODE','Mit diesem Code können Sie ein neues Passwort beantragen.');
define('_IFYOUDIDNOTASK2','Falls Sie diese eMail nicht angefordert haben, dann ignorieren Sie diese bitte einfach.');
define('_CODEFOR','Bestätigungscode für');
define('_USERPASSWORD4','Benutzer-Passwort für');
define('_255CHARMAX','(maximal 255 Zeichen. Fügen Sie hier die Signatur ein (HTML-Code möglich)');
define('_CANKNOWABOUT','(maximal 255 Zeichen. Nähere Angaben über Sie für andere Benutzer)');
define('_SOMETHINGWRONG','Es gibt ein Problem...');
define('_COMMENTSCONFIG','Kommentardarstellung konfigurieren');
define('_DISPLAYMODE','Darstellungsmodus');
define('_NOCOMMENTS','kein Kommentar');
define('_NESTED','verschachtelt');
define('_FLAT','flach');
define('_THREAD','Diskussionsfaden');
define('_SORTORDER','Sortieren nach');
define('_OLDEST','Alte zuerst');
define('_NEWEST','Neue zuerst');
define('_HIGHEST','Höchste Punktzahl zuerst');
define('_THRESHOLD','Grenze');
define('_COMMENTSWILLIGNORED','Kommentare, welche diese Grenze unterschreiten, werden nicht angezeigt.');
define('_UNCUT','Ursprünglich und ungekürzt');
define('_EVERYTHING','Fast alles');
define('_FILTERMOSTANON','die meisten anonymen Nutzer filtern');
define('_USCORE','Wertung');
define('_SCORENOTE','Anonyme Beiträge beginnen bei 0, von Benutzern erstellte Beiträge bei 1. Moderatoren können Punkte hinzufügen oder abziehen.');
define('_NOSCORES','Wertungen nicht anzeigen');
define('_HIDDESCORES','(Versteckte Wertung: Die Punkte sind wirksam, aber nicht sichtbar.)');
define('_MAXCOMMENT','Maximale Kommentarlänge');
define('_TRUNCATES','(Kürzt lange Kommentare und fügt einen "weiterlesen"-Link ein. Zum Ausschalten sehr hohe Zahl eingeben)');
define('_BYTESNOTE','bytes (1024 Byte = 1K)');
define('_BROWSEUSERS','Benutzerverzeichnis durchsuchen');
define('_SEARCHUSERS','Benutzer suchen');
define('_SENDPRIVATEMSG','Sende eine private Nachricht an');
define('_THEME','Theme');
define('_MA_HOMECONFIG','Homepage Konfiguration');
define('_MAX127','(max. 127):');
define('_MESSAGEACTIVATE','aktiviere öffentliche Durchsagen?');
define('_ACTIVATEPERSONAL','Persönliches Menü aktivieren.');
define('_PERSONALMENUCONTENT','Personal Menu Content');
define('_CHECKTHISOPTION','(Aktivieren Sie diese Option und der folgende Text wird auf Ihrer Startseite erscheinen.)');

// avatar
define('_AVATAR_FILESIZE','Die Avatarbilddatei muß kleiner als %d KB sein');
define('_AVATAR_CONTROL','Avatar-Manager');
define('_AVATAR_INFO','max 80 x 80 pixel, < 6 KB.');
define('_CURRENT_IMAGE','Aktuelles Bild (Avatar)');
define('_DELETE_IMAGE','Bild (Avatar) löschen');
define('_AVATAR_OFFSITE','Link zu externem Avatar');
define('_AVATAR_OFFSITEMSG','Bitte Link für Avatar angeben.');
define('_AVATAR_SELECT','Avatar aus der Galerie wählen (ggf. vorher Änderungen speichern!)');
define('_SHOW_GALLERY','Zeige Galerie');
define('_AVATAR_UPLOAD','Avatar hochladen');
define('_AVATAR_UPLOAD_URL','Avatar von URL hochladen');
define('_AVATAR_GALLERY','Avatar-Galerie');
define('_AVATAR_ERR_IMTYPE','Der Avatar darf nur vom typ .jpg, .gif oder .png sein, momentan ist es %s');
define('_AVATAR_ERR_SIZE','Bild ist zu groß: %d x %d');
define('_AVATAR_ERR_URL','Zu der angegebenen URL konnte keine Verbindung erstellt werden');
define('_AVATAR_ERR_DATA','Die Datei an der angegebenen URL enthielt keine Daten');

/**************************
  ADMNINISTRATION SECTION
**************************/
// users_cfg.php
define('_USER_CONFIG','Benutzer Konfiguration');
define('_BROADCASTMSG','&quot;Nachrichten an alle Benutzer&quot; aktivieren?');
define('_MYHEADLINES','Ihre Überschriften');
define('_USERSHOMENUM','Dürfen Benutzer die Anzahl der News auf ihrer Startseite ändern?');
define('_PASSWDLEN','Minimale Passwort-Länge');
define('_REQUIREADMIN','Admin-Freigabe erforderlich');
define('_ACTALLOWREG','Registrierung ohne Freigabe erlauben');
define('_ACTNOTIFYADD','Admin bei Registrierung benachrichtigen');
define('_ACTALLOWDELETE','Benutzer Kontolöschung erlauben');
define('_ACTNOTIFYDELETE','Admin bei Löschung benachrichtigen');
define('_ACTALLOWTHEME','Benutzer Themeauswahl erlauben');
define('_ACTALLOWMAIL','Benutzer eMail-Änderung erlauben');
define('_USEACTIVATE','Aktivierungsmail verwenden');
define('_USEREGISTERMSG','Registrierungsvereinbarung anzeigen');
define('_SENDWELCOMEPM','Sende eine Willkommens PM zu einem neuen Benutzer');
define('_WELCOMEPMBODY','Nachrichtentext');
// fields

// avatar
define('_AVATAR_SETTINGS','Avataor Konfiguration');
define('_AV_ALLOW_LOCAL','Lokale (Gallerie) Avatare aktivieren');
define('_AV_ALLOW_REMOTE','Externe Avatare aktivieren');
define('_AV_ALLOW_REMOTE_INFO','(Es wird auf ein Bild von einer anderen Seite gelinkt)');
define('_AV_ALLOW_UPLOAD','Avatar-Upload aktivieren');
define('_AV_MAX_FILESIZE','maximale Avatar Dateigröße');
define('_AV_MAX_FILESIZE_INFO','für hochgeladene Avatare');
define('_AV_MAX_AVATAR_SIZE','Maximale Avatar-Maße');
define('_AV_MAX_AVATAR_SIZE_INFO','(Höhe x Breite in Pixeln)');
define('_AV_AVATAR_STORAGE_PATH','Avatar-Upload Verzeichniss');
define('_AV_AVATAR_STORAGE_PATH_INFO','Pfad unter ihrem CPG-Nuke Verzeichniss, z.B. uploads/avatars');
define('_AV_AVATAR_GALLERY_PATH','Gallerie-Verzeichniss');
define('_AV_AVATAR_GALLERY_PATH_INFO','Path under your CPG-Nuke root dir for pre-loaded images, e.g. images/avatars');
define('_AV_DEFAULT','Standartavatar');
define('_AV_DEFAULT_INFO','Relativ zu ihrem Gallerie-Verzeichniss');
define('_AV_ALLOW_ANIMATED','Animierte Avatare zulassen');

// users.php
define('_USERADMIN','Benutzerverwaltung');
define('_ADDUSER','Einen neuen Benutzer anlegen');
define('_EDITUSER','Benutzer bearbeiten');
define('_SELECTAUSER','Benutzer auswählen');
define('_MA_PRIVILEGES','Rechte');
define('_ICQ','ICQ Nummer');
define('_AIM','AIM screen name');
define('_YIM','Yahoo! ID');
define('_MSNM','MSN-Kennung');
define('_LOCATION','Ort');
define('_OCCUPATION','Tätigkeit');
define('_INTERESTS','Interessen');
define('_EXTRAINFO','Extra Info');
define('_USERID','Benutzer-ID');
define('_SURE2DELETE','Benutzer wirklich löschen:');
