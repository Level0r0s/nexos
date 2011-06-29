<?php
/***************************************************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  A highly modified version of PHP-Nuke 6.5
  which is Copyright (c) 2002 by Francisco Burzi
  http://phpnuke.org

  Under the GNU General Public License version 2

  Modifications Copyright of CPG Dev Team http://cpgnuke.com
  Last modification notes:
  UTF-8 encoding,
  $Id: lang_faq.php,v 1.1 2004/07/31 22:08:23 akamu Exp $ 
***************************************************************************/
/***************************************************************************
 *                            lang_faq.php [German]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/***************************************************************************
 * German Translation by:
 * Joel Ricardo Zick (Rici) webmaster@rpg-inn.de || http://www.sdc-forum.de
 * Assistance: Philipp Kordowich
 *
 * Release date: 2003-07-27
 ***************************************************************************/

// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Registrieren und Einloggen");
$faq[] = array("Warum kann ich mich nicht einloggen?", "Hast du dich registriert? Du musst dich erst registrieren, bevor du dich einloggen kannst. Wurdest du vom Board gebannt (in dem Fall erhälst du eine Nachricht)? Wenn dem so ist, solltest du den Webmaster oder den Forumsadministrator kontaktieren, um herauszufinden, warum. Falls du registriert und nicht gebannt bist und dich immer noch nicht einloggen kannst, dann überprüfe deinen Usernamen und das Passwort. Normalerweise liegt hier der Fehler, falls nicht, kontaktiere den Forumsadministrator, es könnten eine fehlerhafte Forumskonfiguration vorliegen.");
$faq[] = array("Warum muss ich mich überhaut registrieren?", "Es kann auch sein, dass du das gar nicht musst, das ist die Entscheidung des Administrators. Auf jeden Fall erhälst du nach der Registrierung zusätzliche Funktionen, die Gäste nicht haben, z.B. Avatare, Private Nachrichten, Eintritt in Usergruppen, usw. Es dauert nur wenige Augenblicke sich zu registrieren, du solltest es also tun.");
$faq[] = array("Warum logge ich mich automatisch aus?", "Solltest du die Funktion <i>Automatisch einloggen</i> beim Einloggen nicht aktiviert haben, bleibst du nur für eine gewisse Zeit eingeloggt. Dadurch wird der Mißbrauch deines Accounts verhindert. Um eingeloggt zu bleiben, wähle die entsprechende Option beim Einloggen. Dies ist nicht empfehlenswert, wenn du an einem fremden Rechner sitzt, z.B. in einer Bücherei oder Universität, im Internetcafé usw.");
$faq[] = array("Wie kann ich verhindern, dass man Name in der 'Wer ist online?'-Liste auftaucht?", "In deinem Profil findest du die Funktion <i>Onlinestatus verbergen</i>, und wenn du diese aktivierst, können dich nur noch Administratoren in der Liste sehen. Du zählst dann als versteckter User.");
$faq[] = array("Ich habe mein Passwort verloren!", "Kein Problem! Du kannst ein neues Passwort beantragen. Klicke dazu auf der Loginseite auf <u>Ich habe mein Passwort vergessen</u>, folge den Anweisungen und du solltest dich bald wieder anmelden können.");
$faq[] = array("Ich habe mich registriert, kann mich aber nicht einloggen!", "Überprüfe erst, ob du den richtigen Benutzernamen und/oder Passwort angegeben hast. Falls sie stimmen, gibt es zwei Möglichkeiten, was passiert ist: Wenn die COPPA Bestimmungen aktiviert sind und du die Option <u>Ich bin unter 12 Jahre alt</u> beim Registrieren gewählt hast, musst du den erhaltenen Anweisungen folgen. Falls dies nicht der Fall ist, braucht dein Account eine Aktivierung. Auf einigen Boards ist es der Fall, dass eine Registrierung immer erst aktiviert werden muss, bevor du dich einloggen kannst - entweder von dir selbst oder vom Administrator. Beim Registrieren wird dir gesagt, ob eine Aktivierung benötigt wird. Falls dir eine E-Mail zugesandt wurde, folge den enthaltenen Anweisungen, falls du diese E-Mail nicht erhalten hast, vergewissere dich, dass die E-Mail-Adresse korrekt war. Ein Grund für den Gebrauch der Account-Aktivierungen ist die Verhinderung eines Missbrauchs des Forums. Wenn du dir sicher bist, dass die angegebene E-Mail Adresse richtig ist, kontaktiere den Administrator.");
$faq[] = array("Ich habe mich vor einiger Zeit registriert, kann mich aber nicht mehr einloggen!", "Die Gründe dafür sind meistens, dass du entweder einen falschen Usernamen oder ein falsches Psswort eingegeben hast (überprüfe die E-Mail, die du vom Board geschickt bekommen hast) oder der Administrator hat deinen Account gelöscht. Falls letzteres der Fall ist, hast du vielleicht mit dem Account noch nichts gepostet? Es ist durchaus üblich, dass Foren regelmäßig User löschen, die nichts gepostet haben, um die Größe der Datenbank zu verringern. Versuche dich erneut zu registrieren und tauche wieder ein in die Welt der Diskussionen.");


$faq[] = array("--","Benutzerangaben und Einstellungen");
$faq[] = array("Wie ändere ich meine Einstellungen?", "Deine Einstellungen (sofern du registriert bist) werden in der Datenbank gespeichert. Klicke auf den <u>Profil</u>-Link, um sie zu ändern (wird normalerweise am oberen Bildschirmrand angezeigt, hängt aber vom Style ab). Damit kannst du deine Einstellungen ändern");
$faq[] = array("Die Zeiten stimmen nicht!", "Die Zeiten stimmen höchstwahrscheinlich schon, vermutlich hast du einfach die Zeitzone nicht richtig eingestellt. Falls dem so ist, solltest du die Einstellungen deines Profils überprüfen, um die Zeitzone, die für dich zutreffend ist, zu wählen. Bitte beachte, dass du die Zeitzone nur wechseln kannst, wenn du ein registriertes Mitglied bist. Falls du also noch nicht registriert bist, wäre das vielleicht ein guter Grund dazu.");
$faq[] = array("Ich habe die Zeitzone gewechselt und die Zeit ist immer noch falsch!", "Wenn du dir sicher bist, die richtige Zeitzone gewählt zu haben und die Zeiten immer noch nicht stimmen, kann es daran liegen, dass das System auf Sommerzeit steht. Das Board ist nicht dazu geschaffen worden, zwischen Winter- und Sommerzeit zu wechseln, weswegen es im Sommer zu einer Stunde Differenz zwischen deiner gewählten und der Boardzeit kommen kann.");
$faq[] = array("Meine Sprache ist nicht verfügbar!", "Der wahrscheinlichste Grund dafür ist, dass der Administrator die Sprache nicht installiert hat oder das Board wurde noch nicht in deine Sprache übersetzt. Versuche, den Board-Administrator davon zu überzeugen, dein Sprachfile zu installieren oder, fall es nicht existiert, kannst du auch gerne selber eine Übersetzung schreiben. Weitere Informationen erhälst du auf der phpBB Group Website (Der Link ist am Ende jeder Seite)");
$faq[] = array("Wie kann ich ein Bild unter meinem Benutzernamen anzeigen?", "Es könenn sich zwei Bilder unter dem Benutzernamen befinden. Das erste gehört zu deinem Rang, z.B. Punkte oder Sterne, die anzeigen, wie viele Beiträge du geschrieben hast oder welchen Status du im Forum hast. Darunter befindet sich meist ein größeres Bild, Avatar genannt. Dies ist normalerweise ein Einzelstück und an den Benutzer gebunden. Es liegt am Administrator, ob er Avatare erlaubt und ob die Benutzer wählen dürfen, wie sie ihren Avatar zugänglich machen. Wenn du keine Avatare benutzen kannst, ist das eine Entscheidung des Administrators. Du solltest ihn nach dem Grund fragen (Er wird bestimmt einen guten haben).");
$faq[] = array("Wie kann ich meinen Rang ändern?", "Normalerweise kannst du nicht direkt den Wortlaut des Ranges ändern (Ränge erscheinen unter deinem Benutzernamen in Themen und in deinem Profil, abhängig davon, welchen Style du benutzt). Die meisten Boards benutzen Ränge, um anzuzeigen, wie viele Beiträge geschrieben wurden und bestimmte Benutzer, z.B. Moderatoren oder Administratoren, könnten einen speziellen Rang haben. Bitte belästige das Forum nicht mit unnötigen Beiträgen, nur um deinen Rang zu erhöhen, sonst wirst du auf einen Moderator oder Administrator treffen, der deinen Rang einfach wieder senkt.");
$faq[] = array("Wenn ich auf den E-Mail-Link eines Benutzers klicke, werde ich dazu aufgefordert, mich einzuloggen!", "Nur registrierte Benutzer können über das Forum E-Mails verschicken (falls der Administrator diese Funktion zulässt). Damit sollen obszöne Mails von unbekannten Benutzern unterbunden werden.");


$faq[] = array("--","Beiträge schreiben");
$faq[] = array("Wie schreibe ich ein Thema in ein Forum?", "Ganz einfach, klicke einfach auf den entsprechenden Button auf der Forums- oder Beitragsseite. Es kann sein, dass du dich erst registrieren musst, bevor du eine Nachricht schreiben kannst - deine verfügbaren Aktionen werden am Ende der Seite aufgelistet (die <i>Du kannst neue Themen erstellen, Du kannst an Umfragen teilnehmen, usw.</i>-Liste)");
$faq[] = array("Wie editiere oder lösche ich einen Beitrag?", "Sofern du nicht der Boardadministrator oder der Forumsmoderator bist, kannst du nur deine eigenen Beiträge löschen oder editieren. Du kannst einen Beitrag editieren (eventuell nur für eine gewisse Zeit) indem du auf den <i>Editieren</i>-Button des jeweiligen Beitrages klickst. Sollte jemand bereits auf den Beitrag geantwortet haben, wirst du einen kleinen Text unterhalb des Beitrags lesen können, der anzeigt, wie oft der Text bearbeitet wurde. Er wird nur erscheinen, wenn jemand geantwortet hat, ferner wird er nicht erscheinen, falls ein Moderator oder Administrator den Beitrag editiert hat (Sie sollten eine Nachricht hinterlassen, warum sie den Beitrag editierten). Beachte, dass normale Benutzer keine Beiträge löschen können, wenn schon jemand auf sie geantwortet hat.");
$faq[] = array("Wie kann ich eine Signatur anhängen?", "Um eine Signatur an einen Beitrag anzuhängen, musst du erst eine im Profil erstellen. Wenn du eine erstellt hast, aktiviere die <i>Signatur anhängen</i>-Funktion während der Beitragserstellung. Du kannst auch eine Standardsignatur an alle Beiträge anhängen, indem du im Profil die entsprechende Option anwählst (du kannst das Anfügen einer Signatur immer noch verhindern, indem du die Signaturoption beim Beitragssschreiben abschaltest)");
$faq[] = array("Wie erstelle ich eine Umfrage?", "Eine Umfrage zu erstellen ist recht einfach: Wenn du ein neues Thema erstellst, (oder den ersten Beitrag eines Themas editierst, sofern du die Erlaubnis dazu hast) solltest du die <i>Umfrage hinzufügen</i>-Option unterhalb der Textbox sehen (falls du sie nicht sehen kannst, hast du möglicherweise nicht die erforderlichen Rechte). Du solltest einen Titel für deine Umfrage angeben und mindestens eine Antwortmöglichkeit (um eine Antwort anzugeben, klicke auf die <i>Antwort hinzufügen</i>-Schaltfläche. Du kannst auch ein Zeitlimit für die Umfrage setzen, 0 ist eine unbegrenzt dauernde Umfrage. Es gibt eine automatische Grenze bei der Anzahl an Antwortoptionen, diese legt der Administrator fest.");
$faq[] = array("Wie editiere oder lösche ich eine Umfrage?", "Genau wie mit den Beiträgen, können Umfrage nur vom Verfasser, Forumsmoderator oder Administrator editiert oder gelöscht werden. Um eine Umfrage zu editieren, editiere den ersten Beitrag im Thema (die Umfrage ist immer damit verbunden). Wenn noch niemand bei der Umfrage mitgestimmt hat, können User die Umfrage editieren oder löschen , falls jedoch schon jemand mitgestimmt hat, können sie nur Moderatoren oder Administratoren löschen oder editieren. Damit soll verhindert werden, dass Personen ihre Umfragen beeinflussen, indem sie die Antworten verändern.");
$faq[] = array("Warum kann ich ein Forum nicht betreten?", "Manche Foren können nur von bestimmten Benutzern oder Gruppen betreten werden. Um dort hineinzugelangen, Beiträge zu lesen oder zu schreiben usw., könntest du eine spezielle Erlaubnis brauchen. Nur der Forumsmoderator und der Boardadministrator können dir die Zugangsrechte dafür geben, du solltest sie um Zugang bitten, sofern du einen berechtigten Grund dafür hast.");
$faq[] = array("Warum kann ich bei Abstimmungen nicht mitmachen?", "Nur registrierte Benutzer könen an Umfragen teilnehmen. Dadurch wird eine Beeinflussung des Ergebnisses verhindert. Falls du dich registriert hast und immer noch nicht mitstimmen kannst, hast du vermutlich nicht die erforderlichen Rechte dazu.");


$faq[] = array("--","Was man in und mit Beiträgen tun kann");
$faq[] = array("Was ist BBCode?", "BBCode ist eine spezielle Abart von HTML. Ob du BBCode benutzen kannst, wird vom Administrator festgelegt. Du kannst es auch in einzelnen Beiträgen deaktivieren. BBCode selber ist HTML sehr ähnlich, die Tags sind von den Klammern [ und ] umschlossen und bietet dir große Kontrolle darüber, was und wie etwas angezeigt wird. Für weitere Informationen über den BBCode solltest du dir die Anleitung anschauen, die du von der Beitrag schreiben-Seite aus erreichen kannst.");
$faq[] = array("Darf ich HTML benutzen?", "Das hängt davon ab, ob es vom Administrator erlaubt wurde. Falls du es nicht darfst, wirst du nachher nur ein Klammer-Wirrwarr wieder finden. Dies ist eine <i>Sicherung</i>, um Leute davon abzuhalten, das Forum mit unnötigen Tags zu überschwemmen, die das Layout zerstören oder andere Störungen hervorrufen könnten. Falls HTML aktiviert wurde, kannst du es immer noch manuell für jeden Beitrag deaktivieren, indem du beim Schreiben die entsprechende Option aktivierst.");
$faq[] = array("Was sind Smilies?", "Smilies sind kleine Bilder, die benutzt werden können, um Gefühle auszudrücken. Es werden nur kurze Codes benötigt, z.B. zeigt :) Freude und :( Traurigkeit an. Die komplette Liste der Smilies kann auf der Beitrag schreiben-Seite gesehen werden. Übertreibe es nicht mit Smilies, es kann schnell passieren, dass ein Beitrag dadurch völlig unübersichtlich wird. Ein Moderator könnte sich entschließen, den Beitrag zu bearbeiten oder sogar komplett zu löschen.");
$faq[] = array("Darf ich Bilder einfügen?", "Bilder können in der Tat im Beitrag angezeigt werden. Auf jeden Fall gibt es noch keine Möglichkeit, Bilder direkt auf das Board hochzuladen.  Deshalb musst du zu einem bestehehden Bild verlinken, welches sich auf einem für die Öffentlichkeit zugänglichen Server befindet. Z.B. http://www.meineseite.de/meinbild.gif. Du kannst weder zu Bildern linken, die sich auf deiner Festplatte befinden (außer es handelt sich um einen öffentlich verfügbaren Server) noch zu Bildern, die einen speziellen Zugang brauchen, um sie anzuzeigen (z.B. E-Mail-Konten, Passwort-geschützte Seiten usw). Um das Bild anzuzeigen, benutze entweder den BB-Code [img] oder nutze HMTL (sofern erlaubt).");
$faq[] = array("Was sind Ankündigungen?", "Ankündigungen beinhalten meistens wichtige Informationen und du solltest sie so früh wie möglich lesen. Ankündigungen erscheinen immer am Anfang des jeweiligen Forums. Ob du eine Ankündigung machen kannst oder nicht hängt davon ab, was für Befugnisse dazu eingerichtet wurden. Diese legt der Board-Administrator fest.");
$faq[] = array("Was sind Wichtige Themen?", "Wichtige Themen erscheinen unterhalb der Ankündigungen in der Forumsansicht. Sie enthalten auch meistens wichtige Informationen, die du gelesen haben solltest. Genau wie mit den Ankündigungen entscheidet auch bei den Wichtigen Themen der Administrator, wer sie erstellen darf und wer nicht.");
$faq[] = array("Was sind geschlossene Themen?", "Themen werden entweder vom Forumsmoderator oder dem Board-Administrator geschlossen. Man kann auf geschlossene Beiträge nicht antworten und falls eine Umfrage angefügt wurde, wird diese damit auch beendet. Es gibt verschiedene Gründe, warum ein Thema geschlossen wird.");


$faq[] = array("--","Benutzerebenen und Gruppen");
$faq[] = array("Was sind Administratoren?", "Administratoren haben die höchste Kontrollebene im gesamten Forum. Sie haben das Recht, jede Forumsaktion zu unterbinden und spezielle Aktionen durchzuführen, wie die Vergabe von Befugnissen, das Bannen von Benutzern, Benutzergruppen erstellen, Moderatoren ernennen usw. Sie haben außerdem in jedem Forum die vollen Moderatorenrechte.");
$faq[] = array("Was sind Moderatoren?", "Moderatoren sind Personen (oder Gruppen) die auf das tägliche Geschehen in dem jeweiligen Forum achten. Sie haben die Möglichkeit, Beiträge zu editieren und zu löschen, Themen zu schließen, öffnen, verschieben oder löschen. Moderatoren haben die Aufgabe, die Leute davon abzuhalten, unpassende Themen in einen Beitrag zu schreiben oder sonstigen Blödsinn in das Forum zu setzen.");
$faq[] = array("Was sind Benutzergruppen?", "In Benutzergruppen werden einige Benutzer vom Administrator zusammengefasst. Jeder Benutzer kann zu mehreren Gruppen gehören und jeder Gruppe können spezielle Zugangsrechte erteilt werden. So ist es für den Administrator einfacher, mehrere Benutzer zu Moderatoren eines bestimmten Forums zu erklären, ihnen Rechte für ein privates Forum zu geben und so weiter.");
$faq[] = array("Wie kann ich einer Benutzergruppe beitreten?", "Um einer Benutzergruppe beizutreten, klicke auf den Benutzergruppen-Link im Menü, du erhälst dann einen Überblick über alle Benutzergruppen. Nicht alle Gruppen haben <i>offenen Zugang</i>, manche sind geschlossen und andere könnten versteckt sein. Falls die Gruppe Mitglieder zulässt, kannst du um Einlass in die Gruppe bitten, indem du auf den Beitreten-Button klickst. Der Gruppenmoderaotr muss noch seine Zustimmung geben, eventuell gibt es Rückfragen, warum du der Gruppe beitreten möchtest. Bitte nerve die Gruppenmoderatoren nicht, nur weil sie dich nicht in die Gruppe aufnehmen wollen, sie werden ihre Gründe haben.");
$faq[] = array("Wie werde ich ein Gruppenmoderator?", "Benutzergruppen werden vom Board-Administrator erstellt, er bestimmt ebenfalls den Moderator. Falls du daran interessiert bist, eine Benutzergruppe zu erstellen, solltest du zuerst den Administrator kontaktieren, zum Beispiel mit einer Privaten Nachricht.");


$faq[] = array("--","Private Nachrichten");
$faq[] = array("Ich kann keine Privaten Nachrichten verschicken!", "Es gibt drei mögliche Gründe dafür: Du bist nicht registriert bzw. eingeloggt, der Board-Administrator hat das Private Nachrichten-System für das gesamte Board abgeschaltet oder der Administrator hat dir das Schreiben von PMs untersagt. Falls das letzte zutreffen sollte, solltest du ihn fragen, warum.");
$faq[] = array("Ich erhalte dauernd ungewollte PMs!", "Es wird bald ein Ignorieren-System für das Private Nachrichten-System geben. Im Moment musst du, falls du ununterbrochen unerwünschte Nachrichten von einer Person erhälst, den Administrator informieren. Er kann das Versenden von PMs durch den jeweiligen Benutzer unterbinden.");
$faq[] = array("Ich habe eine Spam- oder perverse E-Mail von jemandem auf diesem Board erhalten!", "Das E-Mail-System dieses Boards enthält Sicherheitsvorkehrungen, um solche Aktionen eines Benutzers zu verhindern. Du solltest dem Board-Administrator eine Kopie der erhaltenen E-Mail schicken, wichtig dabei ist, dass die Kopfzeilen angefügt bleiben (die Details über den Benutzer, der die E-Mail schickte). Erst dann kann er handeln.");

//
// DIE DREI UNTEN STEHENDEN FRAGEN DER FAQ SOLLEN UNÜBERSETZT BLEIBEN, DA ES SICH UM INTERNATIONALES RECHT HANDELT - LASST DIE DREI EINTRÄGE BITTE ENGLISCH!
//
$faq[] = array("--","phpBB 2 Issues (Informationen zu phpBB 2)");
$faq[] = array("Who wrote this bulletin board?", "This software (in its unmodified form) is produced, released and is copyright  <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. It is made available under the GNU General Public Licence and may be freely distributed, see link for more details");
$faq[] = array("Wer hat dieses Forum entwickelt?", "Diese Software (in ihrer unveränderten Form) ist produziert, herausgegeben und unterliegt dem Copyright  <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Es wird veröffentlicht unter GNU General Public Licence und darf frei weitergegeben werden, siehe Link für nähere Informationen.");
$faq[] = array("Why isn't X feature available?", "This software was written by and licensed through phpBB Group. If you believe a feature needs to be added then please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the Group uses sourceforge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.");
$faq[] = array("Warum ist die Funktion X nicht verfügbar?", "Diese Software wurde von der phpBB Group entwickelt und lizenziert. Solltest Du eine Funktion vermissen, besuche bitte die phpbb.com Webseite und schau dort zu diesem Thema. Bitte schreibe keine Funktionswünsche in das Board auf phpbb.com, die Gruppe nutzt sourceforge zur Planung neuer Funktionen. Bitte lies die Foren und schau nach wie, wenn überhaupt, wir eventuell schon über die Funktion denken und folge der dort beschriebenen Prozedur.");
$faq[] = array("Who do I contact about abusive and/or legal matters related to this board?", "You should contact the administrator of this board. If you cannot find who this you should first contact one of the forum moderators and ask them who you should in turn contact. If still get no response you should contact the owner of the domain (do a whois lookup) or, if this is running on a free service (e.g. yahoo, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that phpBB Group has absolutely no control and cannot in any way be held liable over how, where or by whom this board is used. It is absolutely pointless contacting phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter not directly related to the phpbb.com website or the discrete software of phpBB itself. If you do email phpBB Group about any third party use of this software then you should expect a terse response or no response at all.");
$faq[] = array("Wen kontaktiere ich im Falle des Mißbrauchs und/oder rechtlichen Angelegenheiten?", "Du solltest den Administrator dieses Boards kontaktieren. Wenn Du nicht herausfinden kannst wer das ist, frage zunächst einen der Moderatoren des Boards, wer zu kontaktieren ist. Wenn Du immer noch keine Antwort erhältst, kontaktiere den Besitzer der Domain (über whois Suche) oder, wenn das Board auf einem freien Service läuft (z.B. yahoo, free.fr, f2s.com, etc.), die Betreiber oder die Mißbrauchsabteilung dieses Services. Bitte beachte, daß die phpBB Group keinerlei Kontrolle darüber hat wie, wo oder von wem das Board eingesetzt wird und daher dafür nicht haftbar gemacht werden kann.");

//
// This ends the FAQ entries
//

?>