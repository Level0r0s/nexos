<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/german/downloads.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Der Download, den Sie haben wollten, existiert nicht!');
define('_CATEGORIES','Themen- Bereiche');
define('_LVOTES','Stimmen');
define('_TOTALVOTES','gesamte Stimmen:');
define('_THEREARE','Es gibt');
define('_NOMATCHES','Keine Treffer für diese Anfrage gefunden');
define('_SCOMMENTS','Kommentare');
define('_UNKNOWN','Unbekannt');
define('_AUTHORNAME','Name des Autors');
define('_AUTHOREMAIL','eMail des Autors');
define('_DOWNLOADNAME','Programname');
define('_ADDTHISFILE','Datei hinzufügen');
define('_INBYTES','in Bytes');
//define('_FILESIZE','Dateigrö&szlig;e');
//define('_VERSION','Version');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Homepage');
define('_DOWNLOADNOW','Datei herunterladen!');
define('_RATERESOURCE','Bewerten');
define('_FILEURL','Dateipfad');
define('_ADDDOWNLOAD','Download hinzufügen');
define('_DOWNLOADSMAIN','Download- Index');
define('_DOWNLOADCOMMENTS','Download- Kommentare');
define('_DOWNLOADSMAINCAT','Download- Hauptkategorien');
define('_ADDADOWNLOAD','Neuen Download hinzufügen');
define('_DSUBMITONCE','Bitte eine Datei nur einmal hinzufügen');
define('_DPOSTPENDING','Alle neuen Downloads müssen erst freigeschaltet werden.');
define('_RESSORTED','Dateien sind aktuell sortiert nach');
define('_DOWNLOADSNOTUSER1','Sie sind kein registrierter User, oder nicht eingeloggt.');
define('_DOWNLOADSNOTUSER2','Nur wenn Sie angemeldet sind, können Sie hier Dateien anbieten.');
define('_DOWNLOADSNOTUSER3','Ein angemeldeter User zu werden ist ein schneller und einfacher Vorgang.');
define('_DOWNLOADSNOTUSER4','Warum benötigen wir Ihre Registration, um Ihnen den Zugriff zu gewähren?');
define('_DOWNLOADSNOTUSER5','Nur so können wir Ihnen diesen Topinhalt anbieten,');
define('_DOWNLOADSNOTUSER6','Jede Datei wird von unserem Team überprüft und ggbf. freigeschaltet.');
define('_DOWNLOADSNOTUSER7','Wir hoffen, Ihnen nur wertvolle Informationen zu prÄsentieren.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">Mitglied werden</a>');
define('_DOWNLOADALREADYEXT','Fehler: Diese URL befindet sich bereits in der Datenbank!');
define('_DOWNLOADNOTITLE','Fehler: Sie müssen Ihrer Seite einen Namen geben!');
define('_DOWNLOADNOURL','Fehler: Sie müssen für Ihre Homepage eine URL angeben!');
define('_DOWNLOADNODESC','Fehler: Sie müssen eine Homepage- Beschreibung eingeben!');
define('_DOWNLOADRECEIVED','Wir haben Ihr Downloadangebot erhalten. Vielen Dank');
define('_NEWDOWNLOADS','Neue Downloads');
define('_TOTALNEWDOWNLOADS','Alle neuen Downloads');
define('_DTOTALFORLAST','Alle neuen Downloads der letzten');
define('_DBESTRATED','Bestbewertete Downloads');
define('_TRATEDDOWNLOADS','ingesamt bewertete Downloads');
define('_SORTDOWNLOADSBY','Sortiere Downloads nach');
define('_DCATNEWTODAY','Heute neue Downloads in diesem Bereich');
define('_DCATLAST3DAYS','Neue Downloads in diesem Bereich- letzte 3 Tage');
define('_DCATTHISWEEK','Neue Downloads in diesem Bereich- letzte 7 Tage');
define('_DDATE1','Datum (erst Alte)');
define('_DDATE2','Datum (erst Neue)');
define('_DOWNLOADS','Downloads');
define('_DOWNLOADPROFILE','Downloadprofil');
define('_DOWNLOADRATINGDET','Downloadbewertungs- Details');
define('_EDITTHISDOWNLOAD','Ändere diesen Download');
define('_DOWNLOADRATING','Download- Bewertung ');
define('_DOWNLOADVOTE','Bewerten!');
define('_DONLYREGUSERSMODIFY','Nur registrierte Benutzer können Download-Modifikationen vorschlagen. Bitte <a href="'.getlink("Your_Account").'">registrieren Sie sich oder loggen Sie sich ein</a>.');
define('_REQUESTDOWNLOADMOD','Vorgeschlagene Download- Änderungen');
define('_DOWNLOADID','Download ID');
define('_DLETSDECIDE','Eingaben von Teilnehmern wie Ihnen helfen anderen Teilnehmern, zu entscheiden, welche Downloads diese probieren sollten.');
define('_DRATENOTE4','Sie können sich eine <a href="'.getlink('Downloads&amp;d_op=TopRated').'>Liste der bestbewertesten Downloads</a> anzeigen lassen.');
define('_POPULAR','Beliebt');
define('_TOPRATED','Topbewertet');
define('_ADDITIONALDET','Weitere Details');
define('_EDITORREVIEW','Editor- Bewertung');
define('_REPORTBROKEN','Fehlerhaften Link melden');
define('_AND','und');
define('_INDB','in unserer Datenbank');
define('_INSTRUCTIONS','Anleitung');
define('_USERANDIP','Username und IP werden gespeichert, bitte missbrauchen Sie unser System nicht.');
define('_LDESCRIPTION','Beschreibung: (maximal 255 Zeichen)');
define('_CHECKFORIT','Sie brauchen uns keine eMail zu schreiben. Wir werden Ihren Vorschlag baldmöglichst überprüfen.');
define('_LASTWEEK','Letzte Woche');
define('_LAST30DAYS','Letzte 30 Tage');
define('_1WEEK','1 Woche');
define('_2WEEKS','2 Wochen');
define('_30DAYS','30 Tage');
define('_ADDEDON','Eingetragen am');
define('_RATING','Bewertung');
define('_DETAILS','Details');
define('_OF','von');
define('_TVOTESREQ','Minimal notwendige Stimmen');
define('_SHOWTOP','Zeige Top');
define('_MOSTPOPULAR','Beliebteste');
define('_OFALL','von allen');
define('_POPULARITY','Beliebtheit');
define('_SELECTPAGE','Seite auswÄhlen');
define('_MAIN','Start');
define('_NEWTODAY','Heute neu');
define('_NEWLAST3DAYS','In den letzten 3 Tagen neu');
define('_NEWTHISWEEK','Diese Woche neu');
define('_POPULARITY1','Beliebtheit (unbeliebteste oben)');
define('_POPULARITY2','Beliebtheit (beliebteste oben)');
define('_TITLEAZ','Name (A nach Z)');
define('_TITLEZA','Name (Z nach A)');
define('_RATING1','Bewertung (erst schlechtbewertete)');
define('_RATING2','Bewertung (erst gutbewertete)');
define('_SEARCHRESULTS4','Suche Ergebnisse für');
define('_USUBCATEGORIES','Unterkategorien');
define('_TRY2SEARCH','Versuche die Suche');
define('_INOTHERSENGINES','in anderen Suchmaschinen');
define('_EDITORIAL','Einleitung');
define('_EDITORIALBY','Einleitung von');
define('_NOEDITORIAL','Für diese Webseite ist bisher kein Editorial verfügbar');
define('_RATETHISSITE','Bewerten');
define('_ISTHISYOURSITE','Ist es von Ihnen?');
define('_ALLOWTORATE','Ermöglichen Sie ihren Besuchern das Bewerten Ihrer Seite!');
define('_OVERALLRATING','Ingesamt bewertet');
define('_TOTALOF','von insgesamt');
define('_USER','Leuten');
define('_USERAVGRATING','Durchschnittliche Bewertung');
define('_NUMRATINGS','# der Stimmen');
define('_REGISTEREDUSERS','Registrierte Nutzer');
define('_NUMBEROFRATINGS','Zahl der Stimmen');
define('_NOREGUSERSVOTES','Keine Stimmen von Mitgliedern');
define('_BREAKDOWNBYVAL','Breakdown der Stimmen');
define('_LTOTALVOTES','Stimmen- insgesamt');
define('_HIGHRATING','Höchste Bewertung');
define('_LOWRATING','Niedrigste Bewertung');
define('_NUMOFCOMMENTS','Kommentaranzahl');
define('_WEIGHNOTE','* Achtung: Diese Seite bewertet Stimmen von registrierten und unregistrierten Usern im VerhÄltnis');
define('_NOUNREGUSERSVOTES','Keine Stimmen von unregistrierten Teilnehmern');
define('_WEIGHOUTNOTE','* Achtung: Diese Seite bewertet interne zu externen Stimmen im VerhÄltnis');
define('_NOOUTSIDEVOTES','Keine Abstimmenden von Extern');
define('_OUTSIDEVOTERS','Extern abstimmenende');
define('_UNREGISTEREDUSERS','Unregistrierte Teilnehmer');
define('_PROMOTEYOURSITE','Bewerben Sie ihre Webseite');
define('_PROMOTE01','Vielleicht sind Sie ja an verschiedenen \'Bewerten Sie meine Webseite\'- Boxen interessiert, die wir anbieten? Diese erlauben Ihnen das platzieren eines Bildes (oder eines Abstimmformulars) direkt auf Ihrer Webseite, um die Anzahl der Stimmen, die Ihre Webseite hier bekommt, zu erhöhen. Bitte wÄhlen Sie aus einer der unten gegebenen Möglichkeiten eine für Ihre Webseite passende aus:');
define('_TEXTLINK','Textlink');
define('_PROMOTE02','Eine Möglichkeit, Bewertungen in unserem System von Ihrer Webseite zu erhalten, ist ein Textlink:');
define('_HTMLCODE1','Folgenden HTML- Code sollten Sie in diesem Fall auf Ihrer Webseite einfügen:');
define('_THENUMBER','Die Zahl');
define('_IDREFER','im Code entspricht Ihrer Seiten- ID in der $sitename Datenbank. Bitte achten Sie darauf, dass diese Nummer angegeben ist.');
define('_BUTTONLINK','Buttonlink');
define('_PROMOTE03','Falls Ihnen der Sinn nach etwas mehr als einem Textlink steht, ist es vielleicht ein Buttonlink, den Sie gerne möchten:');
define('_RATEIT','Bewerten Sie diese Seite!');
define('_HTMLCODE2','Folgenden HTML- Code müssen Sie für den Button auf Ihrer Seite einfügen:');
define('_REMOTEFORM','Externe Abstimmbox');
define('_PROMOTE04','Falls Sie zu betrügen versuchen, werden wir Ihren Link für immer von unserer Seite entfernen. Nachdem wir dieses gesagt haben- so könnte diese Box auf Ihrer Seite aussehen:');
define('_VOTE4THISSITE','Bewerten Sie diese Seite!');
define('_HTMLCODE3','Die Benutzung dieses Formulars erlaubt es Ihren Besuchern, direkt von Ihrer Seite aus abzustimmen. Wir erhalten diese Bewertung und fügen sie in unsere Datenbank ein. Das obige Beispiel ist deaktiviert, aber auf Ihrer Seite wird es funktionieren, wenn Sie den HTML- Code genau so dort einfügen. Hier nun der HTML- Code:');
define('_PROMOTE05','Vielen Dank! Und viel Erfolg bei der Linkbewertung!');
define('_THANKSBROKEN','Vielen Dank für Ihre Hilfe bei der Steigerung der Benutzbarkeit dieses Indexes.');
define('_SECURITYBROKEN','Aus Sicherheitsgründen wird Ihr Username und Ihre IP- Adresse zeitweilig gespeichert.');
define('_THANKSFORINFO','Vielen Dank für diese Information.');
define('_LOOKTOREQUEST','Wir werden uns Ihren Vorschlag baldmöglichst ansehen.');
define('_SENDREQUEST','Vorschlag senden');
define('_THANKSTOTAKETIME','Vielen Dank für die Zeit, die Sie zum Bewerten einer Webseite hier bei uns aufgebracht haben');
define('_RETURNTO','Zurück nach');
define('_RATENOTE1','Bitte stimmen Sie über einen Link nicht mehrmals ab.');
define('_RATENOTE2','Die Skala reicht von 1 - 10, wobei 1 die schlechteste und 10 die beste Bewertung ist.');
define('_RATENOTE3','Bitte sind Sie objektiv beim Abstimmen. Wenn jeder mit 1 oder 10 abstimmt, sind die Ergebnisse nicht sonderlich aussagekrÄftig.');
define('_RATENOTE5','Bitte bewerten Sie nicht Ihre eigene oder die Seite eines direkten Konkurenten, Sie wÄren ohnehin nicht objektiv.');
define('_YOUAREREGGED','Du bist registriert und angemeldet.');
define('_FEELFREE2ADD','Sind Sie so frei und geben Sie einen Kommentar ein.');
define('_YOUARENOTREGGED','Sie sind kein registriertes Mitglied oder aber nicht eingeloggt.');
define('_IFYOUWEREREG','Wenn Sie registriert sind, können Sie auf dieser Seite Kommentare eingeben.');
define('_MODIFY','Modifizieren');
define('_COMPLETEVOTE1','Ihre Abstimmung wird geschÄtzt.');
define('_COMPLETEVOTE2','Sie haben in den letzten $anonwaitdays Tagen schon einmal eine Stimme abgegeben.');
define('_COMPLETEVOTE3','Stimmen Sie bitte nur einmal ab.<br>Alle abgegebenen Stimmen werden geloggt und ausgewertet!.');
define('_COMPLETEVOTE4','Sie können nicht einen Link bewerten, den Sie selbst eingetragen haben.<br>Alle abgegebenen Stimmen werden geloggt und ausgewertet!.');
define('_COMPLETEVOTE5','Keine Bewertung ausgewÄhlt - Keine Stimme gezÄhlt');
define('_COMPLETEVOTE6','Nur eine Stimme pro IP-Adresse innerhalb von $outsidewaitdays Tagen erlaubt.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Übertragen Sie alle Downloads der Kategorie');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Kategorie löschen');
define('_DOWNLOADTITLE','Download Titel');
define('_DOWNLOADSINDB','Downloads in unserer Datenbank');
define('_DOWNLOADSWAITINGVAL','Downloads, die validiert werden müssen');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');
