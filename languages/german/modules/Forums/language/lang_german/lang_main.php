<?php

/***************************************************************************
 *                            lang_main.php [German]
 *                              -------------------
 *     begin                : Sun May 19 2002
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
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd.m.Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategorie';
$lang['Topic'] = 'Thema';
$lang['Topics'] = 'Themen';
$lang['Replies'] = 'Antworten';
$lang['Views'] = 'Aufrufe';
$lang['Post'] = 'Beitrag';
$lang['Posts'] = 'Beiträge';
$lang['Points'] = 'Punkte';
$lang['Pgroup'] = 'Gruppe';
$lang['Posted'] = 'Verfasst am';
$lang['Username'] = 'Benutzername';
$lang['Password'] = 'Passwort';
$lang['Email'] = 'E-Mail';
$lang['Poster'] = 'Poster';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Zeit';
$lang['Hours'] = 'Stunden';
$lang['Message'] = 'Nachricht';

$lang['1_Day'] = '1 Tag';
$lang['7_Days'] = '7 Tage';
$lang['2_Weeks'] = '2 Wochen';
$lang['1_Month'] = '1 Monat';
$lang['3_Months'] = '3 Monate';
$lang['6_Months'] = '6 Monate';
$lang['1_Year'] = '1 Jahr';

$lang['Go'] = 'Go';
$lang['Jump_to'] = 'Gehe zu';
$lang['Submit'] = 'Absenden';
$lang['Reset'] = 'Zurücksetzen';
$lang['Cancel'] = 'Abbrechen';
$lang['Preview'] = 'Vorschau';
$lang['Confirm'] = 'Bestätigen';
$lang['Spellcheck'] = 'Rechtschreibprüfung';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nein';
$lang['Enabled'] = 'Aktiviert';
$lang['Disabled'] = 'Deaktiviert';
$lang['Error'] = 'Fehler';

$lang['Next'] = 'Weiter';
$lang['Previous'] = 'Zurück';
$lang['Goto_page'] = 'Gehe zu Seite';
$lang['Joined'] = 'Dabei seit';
$lang['IP_Address'] = 'IP-Adresse';

$lang['Select_forum'] = 'Forum auswählen';
$lang['View_latest_post'] = 'Letzten Beitrag anzeigen';
$lang['View_newest_post'] = 'Neuesten Beitrag anzeigen';
$lang['Page_of'] = 'Seite <b>%d</b> von <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ-Nummer';
$lang['AIM'] = 'AIM-Name';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Foren-Übersicht';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Neues Thema eröffnen';
$lang['Reply_to_topic'] = 'Neue Antwort erstellen';
$lang['Reply_with_quote'] = 'Antworten mit Zitat';

$lang['Click_return_topic'] = '%sHier klicken%s, um zum Thema zurückzukehren'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '%sHier klicken%s, um es noch einmal zu versuchen';
$lang['Click_return_forum'] = '%sHier klicken%s, um zum Forum zurückzukehren';
$lang['Click_view_message'] = '%sHier klicken%s, um deine Nachricht anzuzeigen';
$lang['Click_return_modcp'] = '%sHier klicken%s, um zur Moderatorenkontrolle zurückzukehren';
$lang['Click_return_group'] = '%sHier klicken%s, um zur Gruppeninfo zurückzukehren';

$lang['Admin_panel'] = 'Administrations-Bereich';

$lang['Board_disable'] = 'Sorry, aber dieses Board ist im Moment nicht verfügbar. Probier es bitte später wieder.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Registrierte Benutzer:';
$lang['Browsing_forum'] = 'Benutzer in diesem Forum:';
$lang['Online_users_zero_total'] = 'Insgesamt sind <b>0</b> Benutzer online: ';
$lang['Online_users_total'] = 'Insgesamt sind <b>%d</b> Benutzer online: ';
$lang['Online_user_total'] = 'Insgesamt ist <b>ein</b> Benutzer online: ';
$lang['Reg_users_zero_total'] = 'Kein registrierter, ';
$lang['Reg_users_total'] = '%d registrierte, ';
$lang['Reg_user_total'] = 'Ein registrierter, ';
$lang['Hidden_users_zero_total'] = 'kein versteckter und ';
$lang['Hidden_users_total'] = '%d versteckte und ';
$lang['Hidden_user_total'] = 'ein versteckter und ';
$lang['Guest_users_zero_total'] = 'kein Gast.';
$lang['Guest_users_total'] = '%d Gäste.';
$lang['Guest_user_total'] = 'ein Gast.';
$lang['Record_online_users'] = 'Der Rekord liegt bei <b>%s</b> Benutzern am %s.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = 'Dein letzter Besuch war am: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Aktuelles Datum und Uhrzeit: %s'; // %s replaced by time

$lang['Search_new'] = 'Beiträge seit dem letzten Besuch anzeigen';
$lang['Search_your_posts'] = 'Eigene Beiträge anzeigen';
$lang['Search_unanswered'] = 'Unbeantwortete Beiträge anzeigen';

$lang['Register'] = 'Registrieren';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profil bearbeiten';
$lang['Search'] = 'Suchen';
$lang['Memberlist'] = 'Mitgliederliste';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'BBCode-Hilfe';
$lang['Usergroups'] = 'Benutzergruppen';
$lang['Last_Post'] = 'Letzter&nbsp;Beitrag';
$lang['Moderator'] = '<b>Moderator</b>';
$lang['Moderators'] = '<b>Moderatoren</b>';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Meine Benutzer haben <b>noch keine</b> Beiträge geschrieben.'; // Number of posts
$lang['Posted_articles_total'] = 'Meine Benutzer haben insgesamt <b>%d</b> Beiträge geschrieben.'; // Number of posts
$lang['Posted_article_total'] = 'Meine Benutzer haben <b>einen</b> Beitrag geschrieben.'; // Number of posts
$lang['Registered_users_zero_total'] = 'Ich habe <b>keine</b> registrierten Benutzer.'; // # registered users
$lang['Registered_users_total'] = 'Ich habe <b>%d</b> registrierte Benutzer.'; // # registered users
$lang['Registered_user_total'] = 'Ich habe <b>einen</b> registrierten Benutzer.'; // # registered users
$lang['Newest_user'] = 'Das neueste Mitglied ist <b>%s%s%s</b>.'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Keine neuen Beiträge seit Deinem letzten Besuch';
$lang['No_new_posts'] = 'Keine neuen Beiträge';
$lang['New_posts'] = 'Neue Beiträge';
$lang['New_post'] = 'Neuer Beitrag';
$lang['No_new_posts_hot'] = 'Keine neuen Beiträge [ Top-Thema ]';
$lang['New_posts_hot'] = 'Neue Beiträge [ Top-Thema ]';
$lang['No_new_posts_locked'] = 'Keine neuen Beiträge [ Gesperrt ]';
$lang['New_posts_locked'] = 'Neue Beiträge [ Gesperrt ]';
$lang['Forum_is_locked'] = 'Forum ist gesperrt';


//
// Login
//
$lang['Enter_password'] = 'Gib bitte Deinen Benutzernamen und Dein Passwort ein, um Dich einzuloggen!';
$lang['Login'] = 'Login';
$lang['Logout'] = 'Logout';

$lang['Forgotten_password'] = 'Ich habe mein Passwort vergessen!';

$lang['Log_me_in'] = 'Bei jedem Besuch automatisch einloggen';

$lang['Error_login'] = 'Du hast einen falschen oder inaktiven Benutzernamen oder ein falsches Passwort eingegeben.';


//
// Index page
//
$lang['Index'] = 'Index';
$lang['No_Posts'] = 'Keine Beiträge';
$lang['No_forums'] = 'Dieses Board hat keine Foren.';

$lang['Private_Message'] = 'Private Nachricht';
$lang['Private_Messages'] = 'Private Nachrichten';
$lang['Who_is_Online'] = 'Wer ist online?';

$lang['Mark_all_forums'] = 'Alle Foren als gelesen markieren';
$lang['Forums_marked_read'] = 'Alle Foren wurden als gelesen markiert.';


//
// Viewforum
//
$lang['View_forum'] = 'Forum anzeigen';

$lang['Forum_not_exist'] = 'Das ausgewählte Forum existiert nicht.';
$lang['Reached_on_error'] = 'Fehler auf dieser Seite!';

$lang['Display_topics'] = 'Siehe Beiträge der letzten';
$lang['All_Topics'] = 'Alle Themen anzeigen';

$lang['Topic_Announcement'] = '<b>Ankündigungen:</b>';
$lang['Topic_Sticky'] = '<b>Wichtig:</b>';
$lang['Topic_Moved'] = '<b>Verschoben:</b>';
$lang['Topic_Poll'] = '<b>[Umfrage]</b>';

$lang['Mark_all_topics'] = 'Alle Themen als gelesen markieren';
$lang['Topics_marked_read'] = 'Alle Themen wurden als gelesen markiert.';

$lang['Rules_post_can'] = 'Du <b>kannst</b> Beiträge in dieses Forum schreiben.';
$lang['Rules_post_cannot'] = 'Du <b>kannst keine</b> Beiträge in dieses Forum schreiben.';
$lang['Rules_reply_can'] = 'Du <b>kannst</b> auf Beiträge in diesem Forum antworten.';
$lang['Rules_reply_cannot'] = 'Du <b>kannst</b> auf Beiträge in diesem Forum <b>nicht</b> antworten.';
$lang['Rules_edit_can'] = 'Du <b>kannst</b> deine Beiträge in diesem Forum bearbeiten.';
$lang['Rules_edit_cannot'] = 'Du <b>kannst</b> deine Beiträge in diesem Forum <b>nicht</b> bearbeiten.';
$lang['Rules_delete_can'] = 'Du <b>kannst</b> deine Beiträge in diesem Forum löschen.';
$lang['Rules_delete_cannot'] = 'Du <b>kannst</b> deine Beiträge in diesem Forum <b>nicht</b> löschen.';
$lang['Rules_vote_can'] = 'Du <b>kannst</b> an Umfragen in diesem Forum mitmachen.';
$lang['Rules_vote_cannot'] = 'Du <b>kannst</b> an Umfragen in diesem Forum <b>nicht</b> mitmachen.';
$lang['Rules_moderate'] = 'Du <b>kannst</b> %sdieses Forum moderieren%s.'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'In diesem Forum sind keine Beiträge vorhanden.<br />Klicke auf <b>Neues Thema</b>, um den ersten Beitrag zu erstellen.';


//
// Viewtopic
//
$lang['View_topic'] = 'Thema anzeigen';

$lang['Guest'] = 'Gast';
$lang['Post_subject'] = 'Titel';
$lang['View_next_topic'] = 'Nächstes Thema anzeigen';
$lang['View_previous_topic'] = 'Vorheriges Thema anzeigen';
$lang['Submit_vote'] = 'Stimme absenden';
$lang['View_results'] = 'Ergebnis anzeigen';

$lang['No_newer_topics'] = 'Es gibt keine neueren Themen in diesem Forum.';
$lang['No_older_topics'] = 'Es gibt keine älteren Themen in diesem Forum.';
$lang['Topic_post_not_exist'] = 'Das gewählte Thema oder der Beitrag existiert nicht.';
$lang['No_posts_topic'] = 'Es existieren keine Beiträge zu diesem Thema.';

$lang['Display_posts'] = 'Beiträge der letzten Zeit anzeigen';
$lang['All_Posts'] = 'Alle Beiträge';
$lang['Newest_First'] = 'Die neusten zuerst';
$lang['Oldest_First'] = 'Die ältesten zuerst';

$lang['Back_to_top'] = 'Nach oben';

$lang['Read_profile'] = 'Benutzer-Profile anzeigen';
$lang['Send_email'] = 'E-Mail an diesen Benutzer senden';
$lang['Visit_website'] = 'Website dieses Benutzers besuchen';
$lang['Visit_nickpage'] = 'Nickpage dieses Benutzers besuchen';
$lang['ICQ_status'] = 'ICQ-Status';
$lang['Edit_delete_post'] = 'Beitrag bearbeiten oder löschen';
$lang['View_IP'] = 'IP-Adresse zeigen';
$lang['Delete_post'] = 'Beitrag löschen';

$lang['wrote'] = 'hat folgendes geschrieben'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Zitat'; // comes before bbcode quote output.
$lang['Code'] = 'Code'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Zuletzt bearbeitet von %s am %s, insgesamt einmal bearbeitet'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Zuletzt bearbeitet von %s am %s, insgesamt %d-mal bearbeitet'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Thema sperren';
$lang['Unlock_topic'] = 'Thema entsperren';
$lang['Move_topic'] = 'Thema verschieben';
$lang['Delete_topic'] = 'Thema löschen';
$lang['Split_topic'] = 'Thema teilen';

$lang['Stop_watching_topic'] = 'Bei Antworten zu diesem Thema nicht mehr benachrichtigen';
$lang['Start_watching_topic'] = 'Bei Antworten zu diesem Thema benachrichtigen';
$lang['No_longer_watching'] = 'Das Thema wird nicht mehr von Dir beobachtet.';
$lang['You_are_watching'] = 'Du beobachtest nun das Thema.';

$lang['Total_votes'] = 'Stimmen insgesamt';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Nachrichtentext';
$lang['Topic_review'] = 'Thema-Überblick';

$lang['No_post_mode'] = 'Kein Eintrags-Modus ausgewählt'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Neues Thema schreiben';
$lang['Post_a_reply'] = 'Antwort schreiben';
$lang['Post_topic_as'] = 'Thema schreiben als';
$lang['Edit_Post'] = 'Beitrag editieren';
$lang['Options'] = 'Optionen';

$lang['Post_Announcement'] = 'Ankündigung';
$lang['Post_Sticky'] = 'Wichtig';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Sicher, dass dieser Beitrag gelöscht werden soll?';
$lang['Confirm_delete_poll'] = 'Sicher, dass diese Umfrage gelöscht werden soll?';

$lang['Flood_Error'] = 'Du kannst einen Beitrag nicht so schnell nach deinem letzten absenden, bitte warte einen Augenblick.';
$lang['Empty_subject'] = 'Bei einem neuen Thema musst du einen Titel angeben.';
$lang['Empty_message'] = 'Du musst zu deinem Beitrag einen Text eingeben.';
$lang['Forum_locked'] = 'Dieses Forum ist gesperrt, du kannst keine Beiträge editieren, schreiben oder beantworten.';
$lang['Topic_locked'] = 'Dieses Thema ist gesperrt, du kannst keine Beiträge editieren oder beantworten.';
$lang['No_post_id'] = 'Du musst einen Beitrag zum editieren auswählen.';
$lang['No_topic_id'] = 'Du musst ein Thema für deine Antwort auswählen.';
$lang['No_valid_mode'] = 'Du kannst nur Beiträge schreiben, bearbeiten, beantworten und zitieren. Versuch es noch einmal.';
$lang['No_such_post'] = 'Es existiert kein solcher Beitrag. Versuch es noch einmal.';
$lang['Edit_own_posts'] = 'Du kannst nur deine eigenen Beiträge bearbeiten.';
$lang['Delete_own_posts'] = 'Du kannst nur deine eigenen Beiträge löschen.';
$lang['Cannot_delete_replied'] = 'Du kannst keine Beiträge löschen, die schon beantwortet wurden.';
$lang['Cannot_delete_poll'] = 'Du kannst keine aktiven Umfrage löschen.';
$lang['Empty_poll_title'] = 'Du musst einen Titel für die Umfrage eingeben.';
$lang['To_few_poll_options'] = 'Du musst mindestens zwei Antworten für die Umfrage angeben.';
$lang['To_many_poll_options'] = 'Du hast zu viele Antworten für die Umfrage angegeben';
$lang['Post_has_no_poll'] = 'Dieser Beitrag hat keine Umfrage.';
$lang['Already_voted'] = 'Du hast an dieser Umfrage schon teilgenommen.';
$lang['No_vote_option'] = 'Du musst eine Auswahl treffen, um abzustimmen.';

$lang['Add_poll'] = 'Umfrage hinzufügen';
$lang['Add_poll_explain'] = 'Wenn du keine Umfrage zum Thema hinzufügen willst, lass die Felder leer.';
$lang['Poll_question'] = 'Frage';
$lang['Poll_option'] = 'Antwort';
$lang['Add_option'] = 'Antwort hinzufügen';
$lang['Update'] = 'Aktualisieren';
$lang['Delete'] = 'Löschen';
$lang['Poll_for'] = 'Dauer der Umfrage:';
$lang['Days'] = 'Tage'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Gib 0 ein oder lass dieses Feld leer, um die Umfrage auf unbeschränkte Zeit durchzuführen ]';
$lang['Delete_poll'] = 'Umfrage löschen';

$lang['Disable_HTML_post'] = 'HTML in diesem Beitrag deaktivieren';
$lang['Disable_BBCode_post'] = 'BBCode in diesem Beitrag deaktivieren';
$lang['Disable_Smilies_post'] = 'Smilies in diesem Beitrag deaktivieren';

$lang['HTML_is_ON'] = 'HTML ist <u>an</u>';
$lang['HTML_is_OFF'] = 'HTML ist <u>aus</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s ist <u>an</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s ist <u>aus</u>';
$lang['Smilies_are_ON'] = 'Smilies sind <u>an</u>';
$lang['Smilies_are_OFF'] = 'Smilies sind <u>aus</u>';

$lang['Attach_signature'] = 'Signatur anhängen (Signatur kann im Profil geändert werden)';
$lang['Notify'] = 'Benachrichtigt mich, wenn eine Antwort geschrieben wurde';
$lang['Delete_post'] = 'Diesen Beitrag löschen';

$lang['Stored'] = 'Deine Nachricht wurde erfolgreich eingetragen.';
$lang['Deleted'] = 'Deine Nachricht wurde erfolgreich gelöscht.';
$lang['Poll_delete'] = 'Deine Umfrage wurde erfolgreich gelöscht.';
$lang['Vote_cast'] = 'Deine Stimme wurde gezählt.';

$lang['Topic_reply_notification'] = 'Benachrichtigen bei Antworten';

$lang['bbcode_b_help'] = 'Text in fett: [b]Text[/b] (alt+b)';
$lang['bbcode_i_help'] = 'Text in kursiv: [i]Text[/i] (alt+i)';
$lang['bbcode_u_help'] = 'Unterstrichener Text: [u]Text[/u] (alt+u)';
$lang['bbcode_q_help'] = 'Zitat: [quote]Text[/quote] (alt+q)';
$lang['bbcode_c_help'] = 'Code anzeigen: [code]Code[/code] (alt+c)';
$lang['bbcode_l_help'] = 'Liste: [list]Text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Geordnete Liste: [list=]Text[/list] (alt+o)';
$lang['bbcode_p_help'] = 'Bild einfügen: [img]http://URL_des_Bildes[/img] (alt+p)';
$lang['bbcode_w_help'] = 'URL einfügen: [url]http://URL[/url] oder [url=http://url]URL Text[/url] (alt+w)';
$lang['bbcode_a_help'] = 'Alle offenen BBCodes schließen';
$lang['bbcode_s_help'] = 'Schriftfarbe: [color=red]Text[/color] Tipp: Du kannst ebenfalls color=#FF0000 benutzen';
$lang['bbcode_f_help'] = 'Schriftgröße: [size=x-small]Kleiner Text[/size]';

$lang['Emoticons'] = 'Smilies';
$lang['More_emoticons'] = 'Weitere Smilies ansehen';

$lang['Font_color'] = 'Schriftfarbe';
$lang['color_default'] = 'Standard';
$lang['color_dark_red'] = 'Dunkelrot';
$lang['color_red'] = 'Rot';
$lang['color_orange'] = 'Orange';
$lang['color_brown'] = 'Braun';
$lang['color_yellow'] = 'Gelb';
$lang['color_green'] = 'Grün';
$lang['color_olive'] = 'Oliv';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Blau';
$lang['color_dark_blue'] = 'Dunkelblau';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violett';
$lang['color_white'] = 'Weiß';
$lang['color_black'] = 'Schwarz';

$lang['Font_size'] = 'Schriftgröße';
$lang['font_tiny'] = 'Winzig';
$lang['font_small'] = 'Klein';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Groß';
$lang['font_huge'] = 'Riesig';

$lang['Close_Tags'] = 'Tags schließen';
$lang['Styles_tip'] = 'Tipp: Styles können schnell zum markierten Text hinzugefügt werden.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Private Nachrichten';

$lang['Login_check_pm'] = 'Einloggen, um private Nachrichten zu lesen';
$lang['New_pms'] = 'Du hast %d neue Nachrichten'; // You have 2 new messages
$lang['New_pm'] = 'Du hast 1 neue Nachricht'; // You have 1 new message
$lang['No_new_pm'] = 'Du hast keine neuen Nachrichten';
$lang['Unread_pms'] = 'Du hast %d ungelesene Nachrichten';
$lang['Unread_pm'] = 'Du hast 1 ungelesene Nachricht';
$lang['No_unread_pm'] = 'Du hast keine ungelesenen Nachrichten';
$lang['You_new_pm'] = 'Eine neue private Nachricht befindet sich in deinem Posteingang';
$lang['You_new_pms'] = 'Es befinden sich neue private Nachrichten in deinem Posteingang';
$lang['You_no_new_pm'] = 'Es sind keine neuen privaten Nachrichten vorhanden';

$lang['Unread_message'] = 'Ungelesene Nachricht';
$lang['Read_message'] = 'Gelesene Nachricht';

$lang['Read_pm'] = 'Nachricht lesen';
$lang['Post_new_pm'] = 'Nachricht schreiben';
$lang['Post_reply_pm'] = 'Auf Nachricht antworten';
$lang['Post_quote_pm'] = 'Nachricht zitieren';
$lang['Edit_pm'] = 'Nachricht bearbeiten';

$lang['Inbox'] = 'Posteingang';
$lang['Outbox'] = 'Postausgang';
$lang['Savebox'] = 'Archiv';
$lang['Sentbox'] = 'Gesendete Nachrichten';
$lang['Flag'] = 'Flag';
$lang['Subject'] = 'Titel';
$lang['From'] = 'Von';
$lang['To'] = 'An';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Markiert';
$lang['Sent'] = 'Gesendet';
$lang['Saved'] = 'Gespeichert';
$lang['Delete_marked'] = 'Markierte löschen';
$lang['Delete_all'] = 'Alle löschen';
$lang['Save_marked'] = 'Markierte speichern';
$lang['Save_message'] = 'Nachricht speichern';
$lang['Delete_message'] = 'Nachricht löschen';

$lang['Display_messages'] = 'Nachrichten anzeigen der letzten'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Alle Nachrichten';

$lang['No_messages_folder'] = 'Es sind keine weiteren Nachrichten in diesem Ordner.';

$lang['PM_disabled'] = 'Private Nachrichten wurden in diesem Board deaktiviert.';
$lang['Cannot_send_privmsg'] = 'Der Administrator hat private Nachrichten für dich gesperrt.';
$lang['No_to_user'] = 'Du musst einen Benutzernamen angeben, um diese Nachricht zu senden.';
$lang['No_such_user'] = 'Es existiert kein Benutzer mit diesem Namen.';

$lang['Disable_HTML_pm'] = 'HTML in dieser Nachricht deaktivieren';
$lang['Disable_BBCode_pm'] = 'BBCode in dieser Nachricht deaktivieren';
$lang['Disable_Smilies_pm'] = 'Smilies in dieser Nachricht deaktivieren';

$lang['Message_sent'] = 'Deine Nachricht wurde gesendet.';

$lang['Click_return_inbox'] = 'Klick %shier%s um zum Posteingang zurückzukehren';
$lang['Click_return_index'] = 'Klick %shier%s um zum Index zurückzukehren';

$lang['Send_a_new_message'] = 'Neue Nachricht senden';
$lang['Send_a_reply'] = 'Auf private Nachricht antworten';
$lang['Edit_message'] = 'Private Nachricht bearbeiten';

$lang['Notification_subject'] = 'Eine neue private Nachricht ist eingetroffen!';

$lang['Find_username'] = 'Benutzernamen finden';
$lang['Find'] = 'Finden';
$lang['No_match'] = 'Keine Ergebnisse gefunden.';

$lang['No_post_id'] = 'Es wurde keine Beitrags-ID angegeben.';
$lang['No_such_folder'] = 'Es existiert kein solcher Ordner.';
$lang['No_folder'] = 'Kein Ordner ausgewählt';

$lang['Mark_all'] = 'Alle markieren';
$lang['Unmark_all'] = 'Markierungen aufheben';

$lang['Confirm_delete_pm'] = 'Diese Nachricht wirklich löschen?';
$lang['Confirm_delete_pms'] = 'Diese Nachrichten wirklich löschen?';

$lang['Inbox_size'] = 'Dein Posteingang ist zu %d%% voll'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Deine gesendeten Nachrichten sind zu %d%% voll';
$lang['Savebox_size'] = 'Dein Archiv ist zu %d%% voll';

$lang['Click_view_privmsg'] = 'Klick %shier%s, um deinen Posteingang aufzurufen';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profil anzeigen : %s'; // %s is username 
$lang['About_user'] = 'Alles über %s';

$lang['Preferences'] = 'Einstellungen';
$lang['Items_required'] = 'Mit * markierte Felder sind erforderlich';
$lang['Registration_info'] = 'Registrierungs-Informationen';
$lang['Profile_info'] = 'Profil-Informationen';
$lang['Profile_info_warn'] = 'Diese Informationen sind öffentlich abrufbar!';
$lang['Avatar_panel'] = 'Avatar-Steuerung';
$lang['Avatar_gallery'] = 'Avatar-Galerie';

$lang['Website'] = 'Website';
$lang['Nickpage'] = 'Nickpage';
$lang['Location'] = 'Wohnort';
$lang['Contact'] = 'Kontakt';
$lang['Email_address'] = 'E-Mail-Adresse';
$lang['Email'] = 'E-Mail';
$lang['Send_private_message'] = 'Private Nachricht senden';
$lang['Hidden_email'] = '[ Versteckt ]';
$lang['Search_user_posts'] = 'Nachrichten von diesem Benutzer anzeigen';
$lang['Interests'] = 'Interessen';
$lang['Occupation'] = 'Beruf';
$lang['Poster_rank'] = 'Rang';

$lang['Total_posts'] = 'Beiträge insgesamt';
$lang['User_post_pct_stats'] = '%.2f%% aller Beiträge'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f Beiträge pro Tag'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Alle Beiträge von %s anzeigen'; // Find all posts by username

$lang['No_user_id_specified'] = 'Dieser Benutzer existiert nicht.';
$lang['Wrong_Profile'] = 'Du kannst nur dein eigenes Profil bearbeiten.';

$lang['Only_one_avatar'] = 'Es kann nur ein Avatar ausgewählt werden';
$lang['File_no_data'] = 'Die angegebene Datei enthält keine Daten';
$lang['No_connection_URL'] = 'Es konnte keine Verbindung zur angegebenen Datei hergestellt werden';
$lang['Incomplete_URL'] = 'Die angegebene URL ist unvollständig';
$lang['Wrong_remote_avatar_format'] = 'Das Format des Avatars ist nicht gültig';
$lang['No_send_account_inactive'] = 'Sorry, aber ein neues Passwort kann im Moment nicht gesendet werden, da dein Account derzeit noch inaktiv ist. Bitte kontaktiere den Administrator für weitere Informationen.';

$lang['Always_smile'] = 'Smilies immer aktivieren';
$lang['Always_html'] = 'HTML immer aktivieren';
$lang['Always_bbcode'] = 'BBCode immer aktivieren';
$lang['Always_add_sig'] = 'Signatur immer anhängen';
$lang['Always_notify'] = 'Bei Antworten immer benachrichtigen';
$lang['Always_notify_explain'] = 'Sendet dir eine E-Mail, wenn jemand auf einen deiner Beiträge antwortet. Kann für jeden Beitrag geändert werden.';

$lang['Board_style'] = 'Board-Style';
$lang['Board_lang'] = 'Board-Sprache';
$lang['No_themes'] = 'Keine Themes in der Datenbank';
$lang['Timezone'] = 'Zeitzone';
$lang['Date_format'] = 'Datums-Format';
$lang['Date_format_explain'] = 'Die Syntax ist identisch mit der PHP-Funktion <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>';
$lang['Signature'] = 'Signatur';
$lang['Signature_explain'] = 'Dies ist ein Text, der an jeden Beitrag von dir angehängt werden kann. Es besteht eine Limit von %d Buchstaben.';
$lang['Public_view_email'] = 'Zeige meine E-Mail-Adresse immer an';
$lang['Always_show'] = 'Immer anzeigen';

$lang['Current_password'] = 'Altes Passwort';
$lang['New_password'] = 'Neues Passwort';
$lang['Confirm_password'] = 'Passwort bestätigen';
$lang['Confirm_password_explain'] = 'Du musst dein Passwort angeben, wenn du dein Passwort oder deine Mailadresse ändern möchtest.';
$lang['password_if_changed'] = 'Du musst nur dann ein neues Passwort angeben, wenn du es ändern willst';
$lang['password_confirm_if_changed'] = 'Du musst dein neues Passwort bestätigen, wenn du es ändern willst';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Zeigt eine kleine Grafik neben deinen Details zu jedem deiner Beiträge an. Es kann immer nur ein Avatar angezeigt werden, seine Breite darf nicht grösser als %d Pixel sein, die Höhe nicht grösser als %d  Pixel, und die Dateigrösse darf maximal %d KB betragen.';
$lang['Upload_Avatar_file'] = 'Avatar von deinem Computer hochladen';
$lang['Upload_Avatar_URL'] = 'Avatar von URL hochladen';
$lang['Upload_Avatar_URL_explain'] = 'Gib die URL des gewünschten Avatars an, dieser wird dann kopiert';
$lang['Pick_local_Avatar'] = 'Avatar aus der Galerie auswählen';
$lang['Link_remote_Avatar'] = 'Zu einem externen Avatar linken';
$lang['Link_remote_Avatar_explain'] = 'Gib die URL des Avatars ein, der gelinkt werden soll';
$lang['Avatar_URL'] = 'URL des Avatars';
$lang['Select_from_gallery'] = 'Avatar aus der Galerie auswählen';
$lang['View_avatar_gallery'] = 'Galerie anzeigen';

$lang['Select_avatar'] = 'Avatar auswählen';
$lang['Return_profile'] = 'Avatar abbrechen';
$lang['Select_category'] = 'Kategorie auswählen';

$lang['Delete_Image'] = 'Bild löschen';
$lang['Current_Image'] = 'Aktuelles Bild';

$lang['Notify_on_privmsg'] = 'Bei neuen Privaten Nachrichten benachrichtigen';
$lang['Popup_on_privmsg'] = 'PopUp-Fenster bei neuen Privaten Nachrichten';
$lang['Popup_on_privmsg_explain'] = 'Einige Templates öffnen neue Fenster, um dich über neue private Nachrichten zu benachrichtigen.';
$lang['Hide_user'] = 'Online-Status verstecken';

$lang['Profile_updated'] = 'Dein Profil wurde aktualisiert';
$lang['Profile_updated_inactive'] = 'Dein Profil wurde aktualisiert. Du hast jedoch wesentliche Details geändert, weswegen dein Account jetzt inaktiv ist. Du wurdest per Mail darüber informiert, wie du deinen Account reaktivieren kannst. Falls eine Aktivierung durch den Administrator erforderlich ist, warte bitte, bis die Reaktivierung stattgefunden hat.';

$lang['Password_mismatch'] = 'Du musst zweimal das gleiche Passwort eingeben.';
$lang['Current_password_mismatch'] = 'Das aktuelle Passwort stimmt nicht mit dem in der Datenbank überein.';
$lang['Password_long'] = 'Dein Passwort darf nicht länger als 32 Zeichen sein.';
$lang['Password_short'] = 'Dein Passwort darf nicht kürzer als 5 Zeichen sein.';
$lang['Too_many_registers'] = 'Du hast zu oft versucht, dich zu registrieren. Bitte versuche es später erneut.';
$lang['Username_taken'] = 'Der gewünschte Benutzername ist leider bereits belegt.';
$lang['Username_invalid'] = 'Der gewünschte Benutzername enthält ein ungültiges Sonderzeichen (z.B. \').';
$lang['Username_disallowed'] = 'Der gewünschte Benutzername wurde vom Administrator gesperrt.';
$lang['Email_taken'] = 'Die angegebene Mailadresse wird bereits von einem anderen Benutzer verwendet.';
$lang['Email_banned'] = 'Die angegebene Mailadresse wurde vom Administrator gesperrt.';
$lang['Email_invalid'] = 'Die angegebene Mailadresse ist ungültig.';
$lang['Signature_too_long'] = 'Deine Signatur ist zu lang.';
$lang['Fields_empty'] = 'Du musst alle benötigten Felder ausfüllen.';
$lang['Avatar_filetype'] = 'Der Avatar muss im GIF-, JPG- oder PNG-Format sein.';
$lang['Avatar_filesize'] = 'Die Dateigrösse muss kleiner als %d kB sein.'; // followed by xx kB, xx being the size
$lang['Avatar_imagesize'] = 'Der Avatar muss weniger als %d Pixel breit und %d Pixel hoch sein.';

$lang['Welcome_subject'] = 'Willkommen auf %s';
$lang['New_account_subject'] = 'Neuer Benutzeraccount';
$lang['Account_activated_subject'] = 'Account aktiviert';

$lang['Account_added'] = 'Danke für die Registrierung, dein Account wurde erstellt. Du kannst dich jetzt mit deinem Benutzernamen und deinem Passwort einloggen.';
$lang['Account_inactive'] = 'Dein Account wurde erstellt. Dieses Forum benötigt aber eine Aktivierung, daher wurde ein Activation-Key an deine E-Mail-Adresse gesendet. Bitte überprüfe deine Mailbox für weitere Informationen.';
$lang['Account_inactive_admin'] = 'Dein Account wurde erstellt. Dieser muss noch durch den Administrator freigeschaltet werden. Du wirst benachrichtigt, wenn dies geschehen ist.';
$lang['Account_active'] = 'Dein Account wurde aktiviert. Danke für die Registrierung.';
$lang['Account_active_admin'] = 'Dein Account wurde jetzt aktiviert.';
$lang['Reactivate'] = 'Account wieder aktivieren!';
$lang['Already_activated'] = 'Dein Account ist bereits aktiv';
$lang['COPPA'] = 'Dein Account wurde erstellt, muss aber zuerst überprüft werden. Mehr Details dazu wurden dir per E-Mail gesendet.';

$lang['Registration'] = 'Einverständniserklärung';
$lang['Reg_agreement'] = 'Die Administratoren und Moderatoren dieses Forums bemühen sich, Beiträge mit fragwürdigem Inhalt so schnell wie möglich zu bearbeiten oder ganz zu löschen, aber es ist nicht möglich, jede einzelne Nachricht zu überprüfen. Du bestätigst mit Absenden dieser Einverständniserklärung, dass du akzeptierst, dass jeder Beitrag in diesem Forum die Meinung des Urhebers wiedergibt und dass die Administratoren, Moderatoren und Betreiber dieses Forums nur für ihre eigenen Beiträge verantwortlich sind.<br /><br />Du verpflichtest dich, 敫椀渀攀 戀攀氀攀椀搀椀最攀渀搀攀渀Ⰰ 漀戀猀稀渀攀渀Ⰰ 瘀甀氀最爀攀渀Ⰰ 瘀攀爀氀攀甀洀搀攀渀搀攀渀Ⰰ 最攀眀愀氀琀瘀攀爀栀攀爀爀氀椀挀栀攀渀搀攀渀 漀搀攀爀 愀甀猀 愀渀搀攀爀攀渀 䜀爀ﰀ渀搀攀渀 猀琀爀愀昀戀愀爀攀渀 䤀渀栀愀氀琀攀 椀渀 搀椀攀猀攀洀 䘀漀爀甀洀 稀甀 瘀攀爀昀昀攀渀琀氀椀挀栀攀渀⸀ 嘀攀爀猀琀���攀 最攀最攀渀 搀椀攀猀攀 刀攀最攀氀 昀ﰀ栀爀攀渀 稀甀 猀漀昀漀爀琀椀最攀爀 甀渀搀 瀀攀爀洀愀渀攀渀琀攀爀 匀瀀攀爀爀甀渀最Ⰰ 眀椀爀 戀攀栀愀氀琀攀渀 甀渀猀 瘀漀爀 嘀攀爀戀椀渀搀甀渀最猀搀愀琀攀渀 甀⸀⸀ 愀渀 搀椀攀 猀琀爀愀昀瘀攀爀昀漀氀最攀渀搀攀渀 䈀攀栀爀搀攀渀 眀攀椀琀攀爀稀甀最攀戀攀渀⸀ 䐀甀 爀甀洀猀琀 搀攀渀 䈀攀琀爀攀椀戀攀爀渀Ⰰ 䄀搀洀椀渀椀猀琀爀愀琀漀爀攀渀 甀渀搀 䴀漀搀攀爀愀琀漀爀攀渀 搀椀攀猀攀猀 䘀漀爀甀洀猀 搀愀猀 刀攀挀栀琀 攀椀渀Ⰰ 䈀攀椀琀爀最攀 渀愀挀栀 攀椀最攀渀攀洀 䔀爀洀攀猀猀攀渀 稀甀 攀渀琀昀攀爀渀攀渀Ⰰ 稀甀 戀攀愀爀戀攀椀琀攀渀Ⰰ 稀甀 瘀攀爀猀挀栀椀攀戀攀渀 漀搀攀爀 稀甀 猀瀀攀爀爀攀渀⸀ 䐀甀 猀琀椀洀洀猀琀 稀甀Ⰰ 搀愀猀猀 搀椀攀 椀洀 刀愀栀洀攀渀 搀攀爀 刀攀最椀猀琀爀椀攀爀甀渀最 攀爀栀漀戀攀渀攀渀 䐀愀琀攀渀 椀渀 攀椀渀攀爀 䐀愀琀攀渀戀愀渀欀 最攀猀瀀攀椀挀栀攀爀琀 眀攀爀搀攀渀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀䐀椀攀猀攀猀 匀礀猀琀攀洀  rwendet Cookies, um Informationen auf deinem Computer zu speichern. Diese Cookies enthalten keine der oben angegebenen Informationen, sondern dienen ausschließlich deinem Komfort. Deine Mail-Adresse wird nur zur Bestätigung der Registrierung und ggf. zum Versand eines neuen Passwortes verwandt.<br /><br />Durch das Abschließen der Registrierung stimmst du diesen Nutzungsbedingungen zu.';

$lang['Agree_under_13'] = 'Ich bin mit den Konditionen dieses Forums einverstanden und <b>unter</b> 12 Jahre alt.';
$lang['Agree_over_13'] = 'Ich bin mit den Konditionen dieses Forums einverstanden und <b>über</b> oder <b>exakt</b> 12 Jahre alt.';
$lang['Agree_not'] = 'Ich bin mit den Konditionen nicht einverstanden.';

$lang['Wrong_activation'] = 'Der Aktivierungsschlüssel aus dem Link stimmt nicht mit dem in der Datenbank überein. Bitte überprüfe die URL und versuche es erneut.';
$lang['Send_password'] = 'Schickt mir ein neues Passwort.';
$lang['Password_updated'] = 'Ein neues Passwort wurde erstellt, es wurde eine E-Mail mit weiteren Anweisungen verschickt.';
$lang['No_email_match'] = 'Die angegebene E-Mail-Adresse stimmt nicht mit dem Benutzernamenüberein.';
$lang['New_password_activation'] = 'Aktivierung des neuen Passwortes';
$lang['Password_activated'] = 'Dein Account wurde wieder aktiviert. Um dich einzuloggen, benutze das Passwort, welches du per E-Mail erhalten hast.';

$lang['Send_email_msg'] = 'E-Mail senden';
$lang['No_user_specified'] = 'Es wurde kein Benutzer ausgewählt';
$lang['User_prevent_email'] = 'Dieser Benutzer hat den E-Mail-Empfang deaktiviert. Bitte versuche es mit einer privaten Nachricht.';
$lang['User_not_exist'] = 'Dieser Benutzer existiert nicht.';
$lang['CC_email'] = 'Eine Kopie dieser E-Mail an dich senden';
$lang['Email_message_desc'] = 'Diese Nachricht wird als Text versendet, verwende bitte deshalb kein HTML oder BBCode. Als Antwort-Adresse der E-Mail wird deine Adresse angegeben.';
$lang['Flood_email_limit'] = 'Im Moment kannst du keine weiteren E-Mails versenden. Versuch es später noch einmal.';
$lang['Recipient'] = 'Empfänger';
$lang['Email_sent'] = 'E-Mail wurde gesendet';
$lang['Send_email'] = 'E-Mail senden';
$lang['Empty_subject_email'] = 'Du musst einen Titel für diese E-Mail angeben.';
$lang['Empty_message_email'] = 'Du musst einen Text zur E-Mail angeben.';


// 
// Visual confirmation system strings 
// 
$lang['Confirm_code_wrong'] = 'Der eingegebene Bestätigungs-Code war nicht richtig'; 
$lang['Too_many_registers'] = 'Du hast die zulässige Zahl von Registrierungs-Versuchen für diese Sitzung überschritten. Bitte versuche es später erneut.'; 
$lang['Confirm_code_impaired'] = 'Wenn du optisch beeinträchtigt bist oder aus einem anderen Grund den Code nicht lesen kannst, kontaktiere bitte den %sAdministrator%s für Hilfe.'; 
$lang['Confirm_code'] = 'Bestätigungs-Code'; 
$lang['Confirm_code_explain'] = 'Gebe den Code exakt so ein, wie du ihn siehst. Der Code unterscheidet zwischen Groß- und Kleinschreibung, die Null hat im Inneren einen schrägen Strich.'; 



//
// Memberslist
//
$lang['Select_sort_method'] = 'Sortierungs-Methode auswählen';
$lang['Sort'] = 'Sortieren';
$lang['Sort_Top_Ten'] = 'Top-Ten-Autoren';
$lang['Sort_Joined'] = 'Beitrittsdatum';
$lang['Sort_Username'] = 'Benutzername';
$lang['Sort_Location'] = 'Ort';
$lang['Sort_Posts'] = 'Beiträge total';
$lang['Sort Points'] = 'Punkte';
$lang['Sort_Email'] = 'E-Mail';
$lang['Sort_Website'] = 'Website';
$lang['Sort_Ascending'] = 'Aufsteigend';
$lang['Sort_Descending'] = 'Absteigend';
$lang['Order'] = 'Ordnung';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Gruppen-Kontrolle';
$lang['Group_member_details'] = 'Details zur Gruppen-Mitgliedschaft';
$lang['Group_member_join'] = 'Gruppe beitreten';

$lang['Group_Information'] = 'Information';
$lang['Group_name'] = 'Name';
$lang['Group_description'] = 'Beschreibung';
$lang['Group_membership'] = 'Gruppen-Mitgliedschaft';
$lang['Group_Members'] = 'Gruppen-Mitglieder';
$lang['Group_Moderator'] = 'Gruppen-Moderatoren';
$lang['Pending_members'] = 'Wartende Mitglieder';

$lang['Group_type'] = 'Gruppentyp';
$lang['Group_open'] = 'Offene Gruppe';
$lang['Group_closed'] = 'Geschlossene Gruppe';
$lang['Group_hidden'] = 'Versteckte Gruppe';

$lang['Current_memberships'] = 'Aktuelle Mitgliedschaften';
$lang['Non_member_groups'] = 'Gruppen ohne deine Mitgliedschaft';
$lang['Memberships_pending'] = 'Warten auf Mitgliedschaft';

$lang['No_groups_exist'] = 'Es existieren keine Gruppen';
$lang['Group_not_exist'] = 'Diese Gruppe existiert nicht';

$lang['Join_group'] = 'Gruppe beitreten';
$lang['No_group_members'] = 'Diese Gruppe hat keine Mitglieder.';
$lang['Group_hidden_members'] = 'Diese Gruppe ist versteckt, du kannst keine Mitgliedschaften anzeigen.';
$lang['No_pending_group_members'] = 'Diese Gruppe hat keine wartenden Mitglieder.';
$lang['Group_joined'] = 'Du wurdest erfolgreich bei dieser Gruppe angemeldet.<br />Du wirst benachrichtigt, wenn der Gruppenmoderator deine Mitgliedschaft akzeptiert hat.';
$lang['Group_request'] = 'Eine Anfrage zum Beitritt in diese Gruppe wurde erstellt.';
$lang['Group_approved'] = 'Deine Anfrage wurde akzeptiert.';
$lang['Group_added'] = 'Du bist dieser Gruppe beigetreten.';
$lang['Already_member_group'] = 'Du bist bereits Mitglied dieser Gruppe.';
$lang['User_is_member_group'] = 'Dieser Benutzer ist bereits ein Mitglied dieser Gruppe.';
$lang['Group_type_updated'] = 'Gruppentyp wurde erfolgreich aktualisiert.';

$lang['Could_not_add_user'] = 'Die gewählte Gruppe existiert nicht.';
$lang['Could_not_anon_user'] = 'Ein anonymer Benutzer kann kein Gruppenmitglied werden.';

$lang['Confirm_unsub'] = 'Bist du sicher, dass du die Mitgliedschaft in dieser Gruppe beenden möchtest?';
$lang['Confirm_unsub_pending'] = 'Deine Anmeldung bei der Gruppe wurde noch nicht bestätigt, möchtest du wirklich austreten?';

$lang['Unsub_success'] = 'Du wurdest aus dieser Gruppe abgemeldet.';

$lang['Approve_selected'] = 'Akzeptierte ausgewählt';
$lang['Deny_selected'] = 'Gewählte löschen';
$lang['Not_logged_in'] = 'Du musst eingeloggt sein, um einer Gruppe beizutreten.';
$lang['Remove_selected'] = 'Ausgewählte entfernen';
$lang['Add_member'] = 'Mitglied hinzufügen';
$lang['Not_group_moderator'] = 'Du bist nicht der Gruppenmoderator, daher kannst du diese Aktion nicht durchführen.';

$lang['Login_to_join'] = 'Einloggen, um Gruppe zu managen';
$lang['This_open_group'] = 'Dies ist eine offene Gruppe. Klicke, um eine Mitgliedschaft zu beantragen.';
$lang['This_closed_group'] = 'Dies ist eine geschlossene Gruppe, keine weiteren Mitglieder werden akzeptiert.';
$lang['This_hidden_group'] = 'Dies ist eine versteckte Gruppe, automatische Anmeldungen werden nicht akzeptiert.';
$lang['Member_this_group'] = 'Du bist ein Mitglied dieser Gruppe.';
$lang['Pending_this_group'] = 'Du wartest auf eine Mitgliedschaft in dieser Gruppe.';
$lang['Are_group_moderator'] = 'Du bist der Moderator dieser Gruppe.';
$lang['None'] = 'Keine';

$lang['Subscribe'] = 'Anmelden';
$lang['Unsubscribe'] = 'Abmelden';
$lang['View_Information'] = 'Information anzeigen';


//
// Search
//
$lang['Search_query'] = 'Suchabfrage';
$lang['Search_options'] = 'Suchoptionen';

$lang['Search_keywords'] = 'Nach Begriffen suchen';
$lang['Search_keywords_explain'] = 'Du kannst <u>AND</u> benutzen, um Wörter zu definieren, die vorkommen müssen, <u>OR</u> kannst du benutzen für Wörter, die im Resultat sein können und <u>NOT</u> für Wörter, die im Ergebnis nicht vorkommen sollen. Das *-Zeichen kannst du als Platzhalter benutzen.';
$lang['Search_author'] = 'Nach Autor suchen';
$lang['Search_author_explain'] = 'Benutze das *-Zeichen als Platzhalter';

$lang['Search_for_any'] = 'Nach irgendeinem Wort suchen';
$lang['Search_for_all'] = 'Nach allen Wörtern suchen';
$lang['Search_title_msg'] = 'Titel und Text durchsuchen';
$lang['Search_msg_only'] = 'Nur Nachrichtentext durchsuchen';

$lang['Return_first'] = 'Die ersten '; // followed by xxx characters in a select box
$lang['characters_posts'] = 'Zeichen des Beitrags anzeigen';

$lang['Search_previous'] = 'Durchsuchen'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sortieren nach';
$lang['Sort_Time'] = 'Zeit';
$lang['Sort_Post_Subject'] = 'Titel des Beitrags';
$lang['Sort_Topic_Title'] = 'Titel des Themas';
$lang['Sort_Author'] = 'Autor';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Ergebnis anzeigen als';
$lang['All_available'] = 'Alle';
$lang['No_searchable_forums'] = 'Du hast nicht die Berechtigung, dieses Forum zu durchsuchen.';

$lang['No_search_match'] = 'Keine Beiträge entsprechen deinen Kriterien.';
$lang['Found_search_match'] = 'Die Suche hat %d Ergebnis ergeben.'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Die Suche hat %d Ergebnisse ergeben.'; // eg. Search found 24 matches

$lang['Close_window'] = 'Fenster schliessen';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays 
$lang['Sorry_auth_announce'] = 'Ankündigungen können in diesem Forum nur von %s erstellt werden.';
$lang['Sorry_auth_sticky'] = 'Wichtige Nachrichten können in diesem Forum nur von %s erstellt werden.';
$lang['Sorry_auth_read'] = 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu lesen.';
$lang['Sorry_auth_post'] = 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu erstellen.';
$lang['Sorry_auth_reply'] = 'Nur %s haben die Berechtigung, in diesem Forum auf Beiträge zu antworten.';
$lang['Sorry_auth_edit'] = 'Nur %s haben die Berechtigung, in diesem Forum Beiträge zu bearbeiten.';
$lang['Sorry_auth_delete'] = 'nur %s haben die Berechtigung, in diesem Forum Beiträge zu löschen.';
$lang['Sorry_auth_vote'] = 'In diesem Forum können sich nur %s an Abstimmungen beteiligen.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonyme Benutzer</b>';
$lang['Auth_Registered_Users'] = '<b>registrierte Benutzer</b>';
$lang['Auth_Users_granted_access'] = '<b>Benutzer mit speziellen Rechten</b>';
$lang['Auth_Moderators'] = '<b>Moderatoren</b>';
$lang['Auth_Administrators'] = '<b>Administratoren</b>';

$lang['Not_Moderator'] = 'Du bist nicht Moderator dieses Forums.';
$lang['Not_Authorised'] = 'Nicht berechtigt';

$lang['You_been_banned'] = 'Du wurdest von diesem Forum verbannt.<br />Kontaktiere den Administrator, um mehr Informationen zu erhalten.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Es sind kein registrierter und '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Es sind %d registrierte und ';
$lang['Reg_user_online'] = 'Es ist ein registrierter und '; // There are 5 Registered and
$lang['Hidden_users_zero_online'] = 'kein versteckter Benutzer online.'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d versteckte Benutzer online.'; // 6 Hidden users online
$lang['Hidden_user_online'] = 'ein versteckter Benutzer online.'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Es sind %d Gäste online.';
$lang['Guest_users_zero_online'] = 'Es sind keine Gäste online.'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Es ist ein Gast online.';
$lang['No_users_browsing'] = 'Im Moment sind keine Benutzer im Forum.';

$lang['Online_explain'] = 'Diese Daten zeigen an, wer in den letzten 5 Minuten online war.';

$lang['Forum_Location'] = 'Welche Seite';
$lang['Last_updated'] = 'Zuletzt aktualisiert';

$lang['Forum_index'] = 'Forum-Index';
$lang['Logging_on'] = 'Einloggen';
$lang['Posting_message'] = 'Nachricht schreiben';
$lang['Searching_forums'] = 'Foren durchsuchen';
$lang['Viewing_profile'] = 'Profil anzeigen';
$lang['Viewing_online'] = 'Anzeigen, wer online ist';
$lang['Viewing_member_list'] = 'Mitgliederliste anzeigen';
$lang['Viewing_priv_msgs'] = 'Private Nachrichten anzeigen';
$lang['Viewing_FAQ'] = 'FAQ anzeigen';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderator Control Panel';
$lang['Mod_CP_explain'] = 'Mit dem unteren Menü kannst du mehrere Moderatoren-Operationen gleichzeitig ausführen. Du kannst Beiträge öffnen, schließen, löschen oder verschieben.';

$lang['Select'] = 'Auswählen';
$lang['Delete'] = 'Löschen';
$lang['Move'] = 'Verschieben';
$lang['Lock'] = 'Sperren';
$lang['Unlock'] = 'Entsperren';

$lang['Topics_Removed'] = 'Die gewählten Themen wurden erfolgreich gelöscht.';
$lang['Topics_Locked'] = 'Die gewählten Themen wurden erfolgreich gesperrt.';
$lang['Topics_Moved'] = 'Die gewählten Themen wurden verschoben.';
$lang['Topics_Unlocked'] = 'Die gewählten Themen wurden entsperrt.';
$lang['No_Topics_Moved'] = 'Es wurden keine Themen verschoben.';

$lang['Confirm_delete_topic'] = 'Bist du sicher, dass die gewählten Themen entfernt werden sollen?';
$lang['Confirm_lock_topic'] = 'Bist du sicher, dass die gewählten Themen gesperrt werden sollen?';
$lang['Confirm_unlock_topic'] = 'Bist du sicher, dass die gewählten Themen entsperrt werden sollen?';
$lang['Confirm_move_topic'] = 'Bist du sicher, dass die gewählten Themen verschoben werden sollen?';

$lang['Move_to_forum'] = 'Verschieben nach';
$lang['Leave_shadow_topic'] = 'Shadow Topic im alten Forum lassen';

$lang['Split_Topic'] = 'Split Topic Control Panel';
$lang['Split_Topic_explain'] = 'Mit den Eingabefeldern unten kannst du ein Thema in zwei teilen, in dem du entweder die Beiträge manuell auswählst oder ab einem gewählten Beitrag teilst';
$lang['Split_title'] = 'Titel des neuen Themas';
$lang['Split_forum'] = 'Forum des neuen Themas';
$lang['Split_posts'] = 'Gewählte Beiträge teilen';
$lang['Split_after'] = 'Von gewähltem Beitrag teilen';
$lang['Topic_split'] = 'Das gewählte Thema wurde erfolgreich geteilt';

$lang['Too_many_error'] = 'Du hast zu viele Beiträge gewählt. Du kannst nur einen Beitrag auswählen, nach dem geteilt werden soll!';

$lang['None_selected'] = 'Du hast keine Themen ausgewählt, auf die diese Aktion ausgeführt werden soll. Bitte wähle mindestens eins aus.';
$lang['New_forum'] = 'Neues Forum';

$lang['This_posts_IP'] = 'IP-Adresse für diesen Beitrag';
$lang['Other_IP_this_user'] = 'Andere IP-Adressen, von denen dieser Benutzer geschrieben hat';
$lang['Users_this_IP'] = 'Beiträge von dieser IP-Adresse';
$lang['IP_info'] = 'IP-Information';
$lang['Lookup_IP'] = 'IP nachschlagen';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Alle Zeiten sind %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Stunden';
$lang['-11'] = 'GMT - 11 Stunden';
$lang['-10'] = 'GMT - 10 Stunden';
$lang['-9'] = 'GMT - 9 Stunden';
$lang['-8'] = 'GMT - 8 Stunden';
$lang['-7'] = 'GMT - 7 Stunden';
$lang['-6'] = 'GMT - 6 Stunden';
$lang['-5'] = 'GMT - 5 Stunden';
$lang['-4'] = 'GMT - 4 Stunden';
$lang['-3.5'] = 'GMT - 3.5 Stunden';
$lang['-3'] = 'GMT - 3 Stunden';
$lang['-2'] = 'GMT - 2 Stunden';
$lang['-1'] = 'GMT - 1 Stunden';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Stunde';
$lang['2'] = 'GMT + 2 Stunden';
$lang['3'] = 'GMT + 3 Stunden';
$lang['3.5'] = 'GMT + 3.5 Stunden';
$lang['4'] = 'GMT + 4 Stunden';
$lang['4.5'] = 'GMT + 4.5 Stunden';
$lang['5'] = 'GMT + 5 Stunden';
$lang['5.5'] = 'GMT + 5.5 Stunden';
$lang['6'] = 'GMT + 6 Stunden';
$lang['6.5'] = 'GMT + 6.5 Stunden';
$lang['7'] = 'GMT + 7 Stunden';
$lang['8'] = 'GMT + 8 Stunden';
$lang['9'] = 'GMT + 9 Stunden';
$lang['9.5'] = 'GMT + 9.5 Stunden';
$lang['10'] = 'GMT + 10 Stunden';
$lang['11'] = 'GMT + 11 Stunden';
$lang['12'] = 'GMT + 12 Stunden';
$lang['13'] = 'GMT + 13 Stunden';

// These are displayed in the timezone select box 
$lang['tz']['-12'] = 'GMT - 12 Stunden';
$lang['tz']['-11'] = 'GMT - 11 Stunden';
$lang['tz']['-10'] = 'GMT - 10 Stunden';
$lang['tz']['-9'] = 'GMT - 9 Stunden';
$lang['tz']['-8'] = 'GMT - 8 Stunden';
$lang['tz']['-7'] = 'GMT - 7 Stunden';
$lang['tz']['-6'] = 'GMT - 6 Stunden';
$lang['tz']['-5'] = 'GMT - 5 Stunden';
$lang['tz']['-4'] = 'GMT - 4 Stunden';
$lang['tz']['-3.5'] = 'GMT - 3.5 Stunden';
$lang['tz']['-3'] = 'GMT - 3 Stunden';
$lang['tz']['-2'] = 'GMT - 2 Stunden';
$lang['tz']['-1'] = 'GMT - 1 Stunden';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Stunde';
$lang['tz']['2'] = 'GMT + 2 Stunden';
$lang['tz']['3'] = 'GMT + 3 Stunden';
$lang['tz']['3.5'] = 'GMT + 3.5 Stunden';
$lang['tz']['4'] = 'GMT + 4 Stunden';
$lang['tz']['4.5'] = 'GMT + 4.5 Stunden';
$lang['tz']['5'] = 'GMT + 5 Stunden';
$lang['tz']['5.5'] = 'GMT + 5.5 Stunden';
$lang['tz']['6'] = 'GMT + 6 Stunden';
$lang['tz']['6.5'] = 'GMT + 6.5 Stunden';
$lang['tz']['7'] = 'GMT + 7 Stunden';
$lang['tz']['8'] = 'GMT + 8 Stunden';
$lang['tz']['9'] = 'GMT + 9 Stunden';
$lang['tz']['9.5'] = 'GMT + 9.5 Stunden';
$lang['tz']['10'] = 'GMT + 10 Stunden';
$lang['tz']['11'] = 'GMT + 11 Stunden';
$lang['tz']['12'] = 'GMT + 12 Stunden';
$lang['tz']['13'] = 'GMT + 13 Stunden';

$lang['datetime']['Sunday'] = 'Sonntag';
$lang['datetime']['Monday'] = 'Montag';
$lang['datetime']['Tuesday'] = 'Dienstag';
$lang['datetime']['Wednesday'] = 'Mittwoch';
$lang['datetime']['Thursday'] = 'Donnerstag';
$lang['datetime']['Friday'] = 'Freitag';
$lang['datetime']['Saturday'] = 'Samstag';
$lang['datetime']['Sun'] = 'So';
$lang['datetime']['Mon'] = 'Mo';
$lang['datetime']['Tue'] = 'Di';
$lang['datetime']['Wed'] = 'Mi';
$lang['datetime']['Thu'] = 'Do';
$lang['datetime']['Fri'] = 'Fr';
$lang['datetime']['Sat'] = 'Sa';
$lang['datetime']['January'] = 'Januar';
$lang['datetime']['February'] = 'Februar';
$lang['datetime']['March'] = 'März';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['June'] = 'Juni';
$lang['datetime']['July'] = 'Juli';
$lang['datetime']['August'] = 'August';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'Oktober';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'Dezember';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'März';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dez';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Information';
$lang['Critical_Information'] = 'Kritische Information';

$lang['General_Error'] = 'Allgemeiner Fehler';
$lang['Critical_Error'] = 'Kritischer Fehler';
$lang['An_error_occured'] = 'Ein Fehler ist aufgetreten.';
$lang['A_critical_error'] = 'Ein kritischer Fehler ist aufgetreten.';

//
// That's all Folks!
// -------------------------------------------------

?>瑝瑴' 