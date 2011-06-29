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
  UTF-8 encoding
  $Id: lang_admin.php,v 1.1 2004/07/31 22:08:23 akamu Exp $ 
***************************************************************************/

/***************************************************************************
 *                            lang_admin.php [German]
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
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Allgemeines';
$lang['Users'] = 'Benutzer';
$lang['Groups'] = 'Gruppen';
$lang['Forums'] = 'Forum';
$lang['Styles'] = 'Styles/Themes';

$lang['Configuration'] = 'Konfiguration';
$lang['Permissions'] = 'Berechtigungen';
$lang['Manage'] = 'Einstellungen';
$lang['Disallow'] = 'Benutzernamen verbieten';
$lang['Prune'] = 'Autom. Löschen';
$lang['Mass_Email'] = 'Massen-E-Mail versenden';
$lang['Ranks'] = 'Ränge';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Bannen';
$lang['Word_Censor'] = 'Wortzensur';
$lang['Export'] = 'Exportieren';
$lang['Create_new'] = 'Erstellen';
$lang['Add_new'] = 'Hinzufügen';
$lang['Backup_DB'] = 'Datenbank-Backup';
$lang['Restore_DB'] = 'Datenbank wiederherstellen';


//
// Index
//
$lang['Admin'] = 'Administration';
$lang['Not_admin'] = 'Du hast keine Administrator-Rechte';
$lang['Welcome_phpBB'] = 'Willkommen bei phpBB';
$lang['Admin_intro'] = '';
$lang['Main_index'] = 'Forum Index';
$lang['Forum_stats'] = 'Forum Statistiken';
$lang['Admin_Index'] = 'Admin Index';
$lang['Preview_forum'] = 'Forumsvorschau';

$lang['Click_return_admin_index'] = 'Klicke %shier%s, um zum Admin Index zurückzukehren';

$lang['Statistic'] = 'Statistik';
$lang['Value'] = 'Wert';
$lang['Number_posts'] = 'Anzahl der Beiträge';
$lang['Posts_per_day'] = 'Beiträge pro Tag';
$lang['Number_topics'] = 'Anzahl der Themen';
$lang['Topics_per_day'] = 'Themen pro Tag';
$lang['Number_users'] = 'Anzahl der Benutzer';
$lang['Users_per_day'] = 'Benutzer pro Tag';
$lang['Board_started'] = 'Board startete am';
$lang['Avatar_dir_size'] = 'Größe des Avatarordners';
$lang['Database_size'] = 'Datenbankgröße';
$lang['Gzip_compression'] ='GZip-Kompression';
$lang['Not_available'] = 'Nicht verfügbar';

$lang['ON'] = 'Aktiv'; // This is for GZip compression
$lang['OFF'] = 'Inaktiv';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Datenbankfunktionen';

$lang['Restore'] = 'Wiederherstellen';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Hiermit werden alle phpBB Tabellen aus einer Datei wiederhergestellt. Falls es dein Server unterstützt, kannst du auch einen GZip-komprimierten Text hochladen - er wird automatisch dekomprimiert! <b>ACHTUNG</b>: Es werden alle existierenden Daten überschrieben. Der Vorgang wird einige Zeit dauern, bitte verlasse diese Seite nicht, bis er abgeschlossen wurde.';
$lang['Backup_explain'] = 'Hier kannst du alle phpBB-Tabellen abspeichern. Solltest du noch weitere, eigene Tabellen in der selben Datenbank wie die phpBB-Tabellen haben, die auch gespeichert werden sollen, gib ihre Namen in der \'Zusätzliche Tabellen\'-Textbox an (getrennt mit Kommata). Sollte dein Server es unterstützen, kannst du die Datei(en) auch mit GZip komprimieren, bevor du sie runterlädst.';

$lang['Backup_options'] = 'Backup-Optionen';
$lang['Start_backup'] = 'Backup beginnen';
$lang['Full_backup'] = 'Vollständiges Backup';
$lang['Structure_backup'] = 'Nur-Struktur-Backup';
$lang['Data_backup'] = 'Nur-Daten-Backup';
$lang['Additional_tables'] = 'Zusätzliche Tabellen';
$lang['Gzip_compress'] = 'GZip-Komprimierungs Datei';
$lang['Select_file'] = 'Wähle eine Datei';
$lang['Start_Restore'] = 'Wiederherstellung beginnen';

$lang['Restore_success'] = 'Die Datenbank wurde wieder hergestellt.<br /><br />Dein Board sollte jetzt wieder den Stand des Backups haben.';
$lang['Backup_download'] = 'Dein Download wird in Kürze beginnen - bitte etwas Geduld';
$lang['Backups_not_supported'] = 'Fehler: Dein Datenbanksystem unterstützt Datenbank-Backups nicht!';

$lang['Restore_Error_uploading'] = 'Fehler beim Hochladen der Backup-Datei';
$lang['Restore_Error_filename'] = 'Probleme mit dem Dateinamen, probiere einen anderen';
$lang['Restore_Error_decompress'] = 'Die GZip-Version kann nicht dekomprimiert werden, nutze bitte eine Nur-Text-Datei';
$lang['Restore_Error_no_file'] = 'Es wurde keine Datei hochgeladen';


//
// Auth pages
//
$lang['Select_a_User'] = 'Wähle einen Benutzer';
$lang['Select_a_Group'] = 'Wähle eine Gruppe';
$lang['Select_a_Forum'] = 'Wähle ein Forum';
$lang['Auth_Control_User'] = 'Benutzerbefugniskontrolle';
$lang['Auth_Control_Group'] = 'Gruppenbefugniskontrolle';
$lang['Auth_Control_Forum'] = 'Forenzugangskontrolle';
$lang['Look_up_User'] = 'Benutzer auswählen';
$lang['Look_up_Group'] = 'Gruppe auswählen';
$lang['Look_up_Forum'] = 'Forum auswählen';

$lang['Group_auth_explain'] = 'Du kannst hier die Berechtigungen und den Moderator-Status für jede Gruppe einstellen. Vergiss nicht, dass einzelne Benutzerberechtigungen immer noch gültig sind, wenn du die Gruppenberechtigungen änderst (z.B. Zugang zu Foren u.ä.). Sollte dies der Fall sein, wirst du darüber informiert.';
$lang['User_auth_explain'] = 'Du kannst hier die Berechtigungen und den Moderator-Status für jeden einzelnen Benutzer einstellen. Vergiss nicht, dass Gruppenberechtigungen immer noch gültig sind, wenn du die Benutzerberechtigungen änderst (z.B. Zugang zu Foren u.ä.). Sollte dies der Fall sein, wirst du darüber informiert.';
$lang['Forum_auth_explain'] = 'Du kannst hier die Zugangsebenen für jedes Forum bestimmen. Es gibt eine einfache und eine fortgeschrittene Methode, dies zu tun. Bei der fortgeschrittenen Methode hast du eine bessere Kontrolle über jedes Forum. Bedenke, dass das Ändern der Zugangsebene beeinflusst, welche Benutzer welche Aktionen im Forum durchführen können.';

$lang['Simple_mode'] = 'Einfache Methode';
$lang['Advanced_mode'] = 'Fortgeschrittene Methode';
$lang['Moderator_status'] = 'Moderatorenstatus';

$lang['Allowed_Access'] = 'Zugang gestattet';
$lang['Disallowed_Access'] = 'Zugang verwehrt';
$lang['Is_Moderator'] = 'ist hier Moderator';
$lang['Not_Moderator'] = 'ist hier kein Moderator';

$lang['Conflict_warning'] = 'Warnung: Authorisationskonflikt';
$lang['Conflict_access_userauth'] = 'Der Benutzer hat auf Grund seiner Gruppenmitgliedschaft immer noch Rechte in diesem Forum. Vielleicht solltest du die Gruppenrechte ändern oder den Benutzer komplett aus der Benutzergruppe entfernen. Die Gruppen mit Rechten (und die dazugehörigen Foren) stehen unten.';
$lang['Conflict_mod_userauth'] = 'Der Benutzer hat immer noch Moderatorenrechte in diesem Forum. Vielleicht solltest du die Gruppenrechte ändern oder den Benutzer komplett aus der Benutzergruppe entfernen. Die Gruppen mit Rechten (und die dazugehörigen Foren) stehen unten.';

$lang['Conflict_access_groupauth'] = 'Der oder die folgenden Benutzer haben auf Grund ihrer Benutzereinstellungen immer noch das Zugangsrecht zu diesem Forum. Vielleicht solltest du diese Einstellungen ändern, um dem Benutzer komplett den Zugang zu verweigern. Die Benutzer mit Rechten (und die dazugehörigen Foren) stehen unten.';
$lang['Conflict_mod_groupauth'] = 'Der oder die folgenden Benutzer haben auf Grund ihrer Benutzereinstellungen immer noch Moderatorenrechte in diesem Forum. Vielleicht solltest du diese Einstellungen ändern, um dem Benutzer komplett die Rechte zu nehmen. Die Benutzer mit Rechten (und die dazugehörigen Foren) stehen unten.';

$lang['Public'] = 'Öffentlich';
$lang['Private'] = 'Privat';
$lang['Registered'] = 'Mitglieder';
$lang['Administrators'] = 'Administratoren';
$lang['Hidden'] = 'Verborgen';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'Alle';
$lang['Forum_REG'] = 'Reg';
$lang['Forum_PRIVATE'] = 'Privat';
$lang['Forum_MOD'] = 'Mods';
$lang['Forum_ADMIN'] = 'Admin';

$lang['View'] = 'Ansicht';
$lang['Read'] = 'Lesen';
$lang['Post'] = 'Posten';
$lang['Reply'] = 'Antworten';
$lang['Edit'] = 'Editieren';
$lang['Delete'] = 'Löschen';
$lang['Sticky'] = 'Wichtig';
$lang['Announce'] = 'Ankündigung';
$lang['Vote'] = 'Umfrage';
$lang['Pollcreate'] = 'Umfrage erstellen';

$lang['Permissions'] = 'Berechtigungen';
$lang['Simple_Permission'] = 'Einfache Berechtigungen';

$lang['User_Level'] = 'Benutzerebene';
$lang['Auth_User'] = 'Benutzer';
$lang['Auth_Admin'] = 'Administrator';
$lang['Group_memberships'] = 'Benutzergruppenmitglieder';
$lang['Usergroup_members'] = 'Diese Gruppe hat die folgenden Mitglieder';

$lang['Forum_auth_updated'] = 'Forumsberechtigungen aktualisert';
$lang['User_auth_updated'] = 'Benutzerberechtigungen aktualisiert';
$lang['Group_auth_updated'] = 'Gruppenberechtigungen aktualisiert';

$lang['Auth_updated'] = 'Berechtigungen wurden aktualisiert';
$lang['Click_return_userauth'] = 'Klicke %shier%s, um zu den Benutzerrechten zurückzukehren';
$lang['Click_return_groupauth'] = 'Klicke %shier%s, um zu den Gruppenrechten zurückzukehren';
$lang['Click_return_forumauth'] = 'Klicke %shier%s, um zu den Forenberechtigungen zurückzukehren';


//
// Banning
//
$lang['Ban_control'] = 'Sperren';
$lang['Ban_explain'] = 'Hier kannst du Benutzer bannen. Du kannst entweder einen bestimmten User, eine IP-Adresse oder einen Hostnamen sperren. Durch diese Methode kann der Benutzer die Startseite des Forums nicht aufrufen. Um den Benutzer daran zu hindern, sich unter einem anderen Namen anzumelden, kannst du auch bestimmte E-Mail-Adressen sperren. Eine E-Mail-Sperre verhindert nur das Registrieren, nicht das Posten eines Benutzers!';
$lang['Ban_explain_warn'] = 'Bitte beachte, dass, wenn du mehrere IP-Adressen eingibst, alle Adressen zwischen dem Anfang und dem Ende der Sperrliste hinzugefügt werden. Versuche die Anzahl der Adressen klein zu halten, indem du Wildcards einsetzt, wo es möglich ist. Am besten ist es, eine konkrete IP-Adresse anzugeben.';

$lang['Select_username'] = 'Wähle einen Benutzernamen';
$lang['Select_ip'] = 'Wähle eine IP-Adresse';
$lang['Select_email'] = 'Wähle eine E-Mail-Adresse';

$lang['Ban_username'] = 'Einen oder mehrere Benutzer bannen';
$lang['Ban_username_explain'] = 'Mit einer Kombination aus Tastatur und Maus kannst du auch mehrere Benutzer auf einmal bannen';

$lang['Ban_IP'] = 'Eine(n) oder mehrere IP-Adressen/Hostnamen bannen';
$lang['IP_hostname'] = 'IP-Adressen oder Hostname';
$lang['Ban_IP_explain'] = 'Um mehrere verschiedene IP-Adressen oder Hostnamen anzugeben, trenne sie mit Kommata voneinander. Um einen Bereich von IP-Adressen anzugeben, trenne den Anfang und das Ende mit einem Bindestrich (-), benutze * als Platzhalter';

$lang['Ban_email'] = 'Eine oder mehrere E-Mail Adressen bannen';
$lang['Ban_email_explain'] = 'Um mehrere verschiedene E-Mail Adressen anzugeben, trenne sie mit Kommata voneinander. Für einen allgmeinen Benutzernamen benutze ein * (z.B. *@hotmail.de)';

$lang['Unban_username'] = 'Einen oder mehrere Benutzer entsperren';
$lang['Unban_username_explain'] = 'Mit einer Kombination aus Tastatur und Maus kannst du auch mehrere Benutzer auf einmal entsperren';

$lang['Unban_IP'] = 'Eine oder mehrere IP-Adressen entsperren';
$lang['Unban_IP_explain'] = 'Mit einer Kombination aus Tastatur und Maus kannst du auch mehrere IP-Adressen auf einmal entsperren';

$lang['Unban_email'] = 'Eine oder mehrere E-Mail Adressen entsperren';
$lang['Unban_email_explain'] = 'Mit einer Kombination aus Tastatur und Maus kannst du auch mehrere E-Mail Adressen auf einmal entsperren';

$lang['No_banned_users'] = 'Keine gesperrten Benutzernamen';
$lang['No_banned_ip'] = 'Keine gebannten IP-Adressen';
$lang['No_banned_email'] = 'Keine gebannten E-Mail Adressen';

$lang['Ban_update_sucessful'] = 'Die Banliste wurde aktualisiert';
$lang['Click_return_banadmin'] = 'Klicke %shier%s, um zur Sperr-Kontrolle zurückzukehren';


//
// Configuration
//
$lang['General_Config'] = 'Allgemeine Konfiguration';
$lang['Config_explain'] = 'Hier kannst du die allgemeinen Einstellungen deines Forums ändern. Für Benutzer- und Foreneinstellungen nutze bitte die Links auf der linken Seite.';

$lang['Click_return_config'] = 'Klicke %shier%s, um zur allgemeinen Konfiguration zurückzukehren';

$lang['General_settings'] = 'Allgemeine Boardeinstellungen';
$lang['Server_name'] = 'Domainname';
$lang['Server_name_explain'] = 'Der Name der Domain, auf der das Board läuft';
$lang['Script_path'] = 'Scriptpfad';
$lang['Script_path_explain'] = 'Der Pfad zu phpBB2, relativ zum Domainnamen';
$lang['Server_port'] = 'Server Port';
$lang['Server_port_explain'] = 'Der Port, unter dem dein Server läuft, normalerweise 80. Ändere dies nur, wenn es ein anderer ist';
$lang['Site_name'] = 'Name der Seite';
$lang['Site_desc'] = 'Beschreibung der Seite';
$lang['Board_disable'] = 'Board deaktivieren';
$lang['Board_disable_explain'] = 'Hiermit sperrst du das Forum für alle Benutzer. Administratoren können auf den Administrations-Bereich zugreifen, wenn das Forum gesperrt ist.';
$lang['Acct_activation'] = 'Account-Freischaltung aktivieren';
$lang['Acc_None'] = 'Keine'; // These three entries are the type of activation
$lang['Acc_User'] = 'Per E-Mail';
$lang['Acc_Admin'] = 'Durch den Admin';

$lang['Abilities_settings'] = 'Standard Benutzer- und Foreneinstellungen';
$lang['Max_poll_options'] = 'Maximale Anzahl der Umfrageoptionen';
$lang['Flood_Interval'] = 'Flood-Intervall';
$lang['Flood_Interval_explain'] = 'Anzahl der Sekunden, die ein Benutzer warten muss, bevor er einen neuen Beitrag schreiben kann';
$lang['Board_email_form'] = 'Benutzer E-Mails per Board';
$lang['Board_email_form_explain'] = 'Deine Benutzer können sich über das Board E-Mails schreiben';
$lang['Topics_per_page'] = 'Themen pro Seite';
$lang['Posts_per_page'] = 'Beiträge pro Seite';
$lang['Hot_threshold'] = 'Beiträge, die ein Thema braucht, um ein \'Hot Topic\' zu werden';
$lang['Default_style'] = 'Standard-Style';
$lang['Override_style'] = 'Style überschreiben';
$lang['Override_style_explain'] = 'Vom Benutzer gewähltes Style überschreiben';
$lang['Default_language'] = 'Standard-Sprache';
$lang['Date_format'] = 'Datumsformat';
$lang['System_timezone'] = 'Zeitzone';
$lang['Enable_gzip'] = 'GZip-Komprimierung aktivieren';
$lang['Enable_prune'] = 'Forumspruning aktivieren';
$lang['Allow_HTML'] = 'HTML erlauben';
$lang['Allow_BBCode'] = 'BBCode erlauben';
$lang['Allowed_tags'] = 'Erlaubte HTML-Tags';
$lang['Allowed_tags_explain'] = 'Trenne die Tags mit Kommata';
$lang['Allow_smilies'] = 'Smilies erlauben';
$lang['Smilies_path'] = 'Speicherort für Smilies';
$lang['Smilies_path_explain'] = 'Der Pfad in deinem phpBB-Verzeichnis, in dem die Smilies liegen (z.B. images/smiles)';
$lang['Allow_sig'] = 'Signaturen erlauben';
$lang['Max_sig_length'] = 'Maximale Signaturlänge';
$lang['Max_sig_length_explain'] = 'Die maximale Anzahl an Zeichen, die ein Benutzer in seiner Signatur nutzen darf';
$lang['Allow_name_change'] = 'Namenswechsel erlauben';

$lang['Avatar_settings'] = 'Avatareinstellungen';
$lang['Allow_local'] = 'Galerieavatare erlauben';
$lang['Allow_remote'] = 'Avatarremote erlauben';
$lang['Allow_remote_explain'] = 'Avatare, die von einer anderen Site verlinkt werden';
$lang['Allow_upload'] = 'Hochladen von Avataren erlauben';
$lang['Max_filesize'] = 'Maximale Größe';
$lang['Max_filesize_explain'] = 'Für hochgeladene Avatare';
$lang['Max_avatar_size'] = 'Maximale Abmessungen des Avatars';
$lang['Max_avatar_size_explain'] = '(Höhe x Breite in Pixel)';
$lang['Avatar_storage_path'] = 'Avatar Speicherpfad';
$lang['Avatar_storage_path_explain'] = 'Der Pfad in deinem phpBB-Verzeichnis, in dem die Avatare liegen (z.B. images/avatars)';
$lang['Avatar_gallery_path'] = 'Avatar Galeriepfad';
$lang['Avatar_gallery_path_explain'] = 'Der Pfad in deinem phpBB-Verzeichnis, in dem die Galerie-Avatare liegen (z.B. images/avatars/gallery)';

$lang['COPPA_settings'] = 'COPPA Einstellungen';
$lang['COPPA_fax'] = 'COPPA Fax Nummer';
$lang['COPPA_mail'] = 'COPPA E-Mail Adresse';
$lang['COPPA_mail_explain'] = 'Zu dieser E-Mail Adresse schicken die Eltern die COPPA Einverständniserklärung';

$lang['Email_settings'] = 'E-Mail Einstellungen';
$lang['Admin_email'] = 'E-Mail Adresse des Administrators';
$lang['Email_sig'] = 'E-Mail Signatur';
$lang['Email_sig_explain'] = 'Diese Signatur wird an alle E-Mails des Administrators angehängt';
$lang['Use_SMTP'] = 'Nutze einen SMTP Server zum Mailen';
$lang['Use_SMTP_explain'] = 'Wähle \'Ja\', wenn du möchtest, dass deine E-Mails über einen SMTP-Server gesendet werden';
$lang['SMTP_server'] = 'SMTP-Server Addresse';
$lang['SMTP_username'] = 'SMTP Benutzername';
$lang['SMTP_username_explain'] = 'Gib nur dann einen Benutzernamen an, wenn der SMTP-Server dies benötigt';
$lang['SMTP_password'] = 'SMTP Passwort';
$lang['SMTP_password_explain'] = 'Gib nur dann ein Passwort an, wenn der SMTP-Server dies benötigt';

$lang['Disable_privmsg'] = 'Private Nachrichten';
$lang['Inbox_limits'] = 'Maximale Nachrichten im Eingang';
$lang['Sentbox_limits'] = 'Maximale Nachrichten im Ausgang';
$lang['Savebox_limits'] = 'Maximale Anzahl gespeicherter Nachrichten';

$lang['Cookie_settings'] = 'Cookie Einstellungen';
$lang['Cookie_settings_explain'] = 'Hier kannst du einstellen, was für Cookies zum Browser gesendet werden. Meistens stimmen die Standardeinstellungen. Solltest du sie ändern müssen, tue es mit Bedacht, ansonsten kann sich niemand mehr im Forum einloggen.';
$lang['Cookie_domain'] = 'Cookie-Domain';
$lang['Cookie_name'] = 'Cookie-Name';
$lang['Cookie_path'] = 'Cookie-Pfad';
$lang['Cookie_secure'] = 'Sicherers Cookie';
$lang['Cookie_secure_explain'] = 'Falls dein Server auf SSL läuft, aktiviere diese Funktion, ansonsten lass sie deaktiviert';
$lang['Session_length'] = 'Sessionlänge [ Sekunden ]';

// Visual Confirmation 
$lang['Visual_confirm'] = 'Aktiviere visuelle Bestätigung'; 
$lang['Visual_confirm_explain'] = 'Benutzer müssen bei der Registrierung einen durch ein Bild vorgegeben Schlüssel eingeben.';

//
// Forum Management
//
$lang['Forum_admin'] = 'Forum Administration';
$lang['Forum_admin_explain'] = 'Hier kannst du Kategorien und Foren hinzufügen, löschen, bearbeiten und neu anordnen.';
$lang['Edit_forum'] = 'Forum bearbeiten';
$lang['Create_forum'] = 'Neues Forum erstellen';
$lang['Create_category'] = 'Neue Kategorie erstellen';
$lang['Remove'] = 'Entfernen';
$lang['Action'] = 'Aktion';
$lang['Update_order'] = 'Reihenfolge ändern';
$lang['Config_updated'] = 'Forumskonfiguration geändert';
$lang['Edit'] = 'Bearbeiten';
$lang['Delete'] = 'Löschen';
$lang['Move_up'] = 'Nach oben';
$lang['Move_down'] = 'Nach unten';
$lang['Resync'] = 'Resync';
$lang['No_mode'] = 'Kein Modus ausgewählt';
$lang['Forum_edit_delete_explain'] = 'Hier kannst du alle allgemeinen Boardeinstellungen anpassen. Zur Benutzer- und Forenkonfiguration benutze bitte die entsprechenden Links auf der linken Seite';

$lang['Move_contents'] = 'Alle Inhalte verschieben';
$lang['Forum_delete'] = 'Forum löschen';
$lang['Forum_delete_explain'] = 'Hier kannst du ein Forum oder eine Kategorie löschen und entscheiden, wohin die enthaltenen Themen oder Foren verschoben werden sollen.';

$lang['Status_locked'] = 'Gesperrt';
$lang['Status_unlocked'] = 'Entsperrt';
$lang['Forum_settings'] = 'Allgemeine Foreneinstellungen';
$lang['Forum_name'] = 'Forumsname';
$lang['Forum_desc'] = 'Beschreibung';
$lang['Forum_status'] = 'Forumsstatus';
$lang['Forum_pruning'] = 'Automatisches Pruning';

$lang['prune_freq'] = 'Überprüfe das Themenalter alle';
$lang['prune_days'] = 'Entferne Themen, in denen nichts mehr geschrieben wurde seit';
$lang['Set_prune_data'] = 'Du hast das automatische Pruning für dieses Forum aktiviert, aber weder ein Intervall noch eine Anzahl an Tagen angegeben.';

$lang['Move_and_Delete'] = 'Verschieben und Löschen';

$lang['Delete_all_posts'] = 'Alle Beiträge löschen';
$lang['Nowhere_to_move'] = 'Kein Ziel zum Verschieben';

$lang['Edit_Category'] = 'Kategorie editieren';
$lang['Edit_Category_explain'] = 'Hier kannst du den Namen einer Kategorie ändern';

$lang['Forums_updated'] = 'Forums- und Kategorieninformationen wurden geändert';

$lang['Must_delete_forums'] = 'Du musst erst alle Foren löschen, bevor du diese Kategorie löschen kannst';

$lang['Click_return_forumadmin'] = 'Klicke %shier%s, um zur Forumsadministration zurückzukehren';


//
// Smiley Management
//
$lang['smiley_title'] = 'Smiley-Bearbeitung';
$lang['smile_desc'] = 'Hier kannst du die Smilies, die die Benutzer in ihren Beiträgen und Privaten Nachrichten einfügen können, hinzufügen, löschen oder bearbeiten.';

$lang['smiley_config'] = 'Smiley-Konfiguration';
$lang['smiley_code'] = 'Smiley Code';
$lang['smiley_url'] = 'Smiley Bilddatei';
$lang['smiley_emot'] = 'Smiley Beschreibung';
$lang['smile_add'] = 'Einen neuen Smiley hinzufügen';
$lang['Smile'] = 'Smiley';
$lang['Emotion'] = 'Beschreibung';

$lang['Select_pak'] = 'Wähle Paketdatei (.pak)';
$lang['replace_existing'] = 'Aktuelle Smilies überschreiben';
$lang['keep_existing'] = 'Aktuelle Smilies behalten';
$lang['smiley_import_inst'] = 'Du solltest das Smiley-Paket entzippen und alle Dateien ins jeweilige Smiley-Verzeichnis hochladen. Wähle dann die korrekten Angaben, um das Paket zu installieren.';
$lang['smiley_import'] = 'Smiley-Paketimport';
$lang['choose_smile_pak'] = 'Wähle ein Smiley-Paket (.pak)';
$lang['import'] = 'Smilies importieren';
$lang['smile_conflicts'] = ' Was tun, wenn Konflikte auftreten?';
$lang['del_existing_smileys'] = 'Aktuelle Smilies vor dem Import löschen';
$lang['import_smile_pack'] = 'Smiley-Paket importieren';
$lang['export_smile_pack'] = 'Smiley-Paket erstellen';
$lang['export_smiles'] = 'Um aus deinen jetzigen Smilies ein Paket zu erstellen, klicke %shier%s, um das Paket herunterzuladen. Achte darauf, die .pak-Erweiterung am Ende beizubehalten. Erstelle dann eine Zip-Datei mit allen benutzten Smilies und der .pak-Datei.';

$lang['smiley_add_success'] = 'Der Smiley wurde hinzugefügt';
$lang['smiley_edit_success'] = 'Der Smiley wurde geändert';
$lang['smiley_import_success'] = 'Das Smiley-Paket wurde installiert';
$lang['smiley_del_success'] = 'Der Smiley wurde gelöscht';
$lang['Click_return_smileadmin'] = 'Klicke %shier%s, um zur Smiley-Verwaltung zurückzukehren';


//
// User Management
//
$lang['User_admin'] = 'Benutzer-Administration';
$lang['User_admin_explain'] = 'Hier kannst du die Daten und Optionen eines Nutzers ändern. Um die Berechtigungen eines Benutzers zu ändern, benutze bitte die Benutzer- und Gruppenkontrolle.';

$lang['Look_up_user'] = 'Benutzer auswählen';

$lang['Admin_user_fail'] = 'Benutzerprofil konnte nicht geändert werden';
$lang['Admin_user_updated'] = 'Benutzerprofil geändert';
$lang['Click_return_useradmin'] = 'Klicke %shier%s, um zur Benutzeradministration zurückzukehren';

$lang['User_delete'] = 'Diesen Benutzer löschen';
$lang['User_delete_explain'] = 'Klicke hier, um den Benutzer zu löschen - diese Aktion kann nicht rückgängig gemacht werden.';
$lang['User_deleted'] = 'Benutzer wurde gelöscht';

$lang['User_status'] = 'Benutzer ist aktiv';
$lang['User_allowpm'] = 'Darf Private Nachrichten verschicken';
$lang['User_allowavatar'] = 'Darf einen Avatar benutzen';

$lang['Admin_avatar_explain'] = 'Hier kannst du den Avatar des Benutzers ansehen und löschen';

$lang['User_special'] = 'Spezielle Optionen (nur für Administratoren)';
$lang['User_special_explain'] = 'Diese Optionen könnten nicht von den Benutzern geändert werden. Du kannst hier ihren Status und andere Optionen festlegen, die den Benutzern nicht zur Verfügung stehen.';


//
// Group Management
//
$lang['Group_administration'] = 'Gruppenadministration';
$lang['Group_admin_explain'] = 'Hier kannst du die Benutzergruppen deines Forum überwachen. Du kannst bestehende Gruppen löschen oder editieren oder neue anlegen. Ebenso kannst du Gruppenleiter wählen, den Gruppenstatus auf offen/geschlossen ändern und den Gruppennamen bzw. die Gruppenbeschreibung ändern';
$lang['Error_updating_groups'] = 'Fehler beim Aktualisieren der Gruppe';
$lang['Updated_group'] = 'Die Gruppe wurde abgeändert';
$lang['Added_new_group'] = 'Die Gruppe wurde hinzugefügt';
$lang['Deleted_group'] = 'Die Gruppe wurde gelöscht';
$lang['New_group'] = 'Neue Gruppe erstellen';
$lang['Edit_group'] = 'Gruppe bearbeiten';
$lang['group_name'] = 'Gruppenname';
$lang['group_description'] = 'Gruppenbeschreibung';
$lang['group_moderator'] = 'Gruppenleiter';
$lang['group_status'] = 'Gruppenstatus';
$lang['group_open'] = 'Offene Gruppe';
$lang['group_closed'] = 'Geschlossene Gruppe';
$lang['group_hidden'] = 'Verborgene Gruppe';
$lang['group_delete'] = 'Gelöschte Gruppe';
$lang['group_delete_check'] = 'Diese Gruppe löschen';
$lang['submit_group_changes'] = 'Änderungen übernehmen';
$lang['reset_group_changes'] = 'Reset';
$lang['No_group_name'] = 'Bitte gib einen Gruppennamen an';
$lang['No_group_moderator'] = 'Bitte gib einen Gruppenleiter an';
$lang['No_group_mode'] = 'Du musst einen Status für diese Gruppe angeben (offen/geschlossen)';
$lang['No_group_action'] = 'Es wurde keine Aktion ausgewählt';
$lang['delete_group_moderator'] = 'Alten Gruppenleiter entfernen?';
$lang['delete_moderator_explain'] = 'Wenn du den Gruppenleiter wechseln möchtest, wähle die entsprechende Option, um den alten Leiter zu entfernen. Ansonsten wähle die Option nicht und der Benutzer wird ein reguläres Mitglied der Gruppe.';
$lang['Click_return_groupsadmin'] = 'Klicke %shier%s, um zur Gruppenadministration zurückzukehren.';
$lang['Select_group'] = 'Gruppe wählen';
$lang['Look_up_group'] = 'Gruppe finden';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Forum Prune';
$lang['Forum_Prune_explain'] = 'Du kannst angeben, dass alle Themen, in denen seit einer gewissen Zeit nichts gepostet wurde, gelöscht werden. Solltest du keine Zahl angeben, werden alle Themen gelöscht. Laufende Umfragen und Ankündigungen sind davon nicht betroffen. Diese Themen müssen manuell entfernt werden.';
$lang['Do_Prune'] = 'Prune einetzen';
$lang['All_Forums'] = 'Alle Foren';
$lang['Prune_topics_not_posted'] = 'Prune Themen, in denen es keine Antworten gab';
$lang['Topics_pruned'] = 'Prune-Themen';
$lang['Posts_pruned'] = 'Prune-Beiträge';
$lang['Prune_success'] = 'Das Prunen des Forums wurde aktiviert';


//
// Word censor
//
$lang['Words_title'] = 'Wortzensur';
$lang['Words_explain'] = 'Hier kannst du Wörter bestimmen, die automatisch aus den Beiträgen zensiert werden. Außerdem kann kein Benutzer einen Namen wählen, in dem diese Wörter vorkommen. Du kannst ein * als Platzhalter im Word-Feld verwenden. Beispiel: Fisch* entfernt Wörter wie Fischbesteck, Fischfang usw., *Fisch entfernt Backfisch, Stockfisch usw.';
$lang['Word'] = 'Wort';
$lang['Edit_word_censor'] = 'Wortzensur ändern';
$lang['Replacement'] = 'Ersatz';
$lang['Add_new_word'] = 'Neues Wort hinzufügen';
$lang['Update_word'] = 'Zensur aktualisieren';

$lang['Must_enter_word'] = 'Ein Wort und ein entsprechender Ersatz sind nötig';
$lang['No_word_selected'] = 'Kein Wort zum Editieren ausgewählt';

$lang['Word_updated'] = 'Die Wortzensur wurde aktualisiert';
$lang['Word_added'] = 'Die Wortzensur wurde eingerichtet';
$lang['Word_removed'] = 'Die Wortzensur wurde entfernt';

$lang['Click_return_wordadmin'] = 'Klicke %shier%s, um zur Wortzensur-Administration zurückzukehren';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Hier kannst du entweder allen Mitgliedern oder einer bestimmten Gruppe eine Nachricht schicken. Diese Nachricht wird an das Postfach des Administrators geschickt und anonym (BCC) an alle Empfänger. Solltest du einer großen Gruppe eine Mail schicken, habe etwas Geduld und brich den Vorgang nicht ab. Es ist völlig normal, dass der Vorgang länger dauert und du erhältst eine Rückmeldung, wenn das Skript beendet ist';
$lang['Compose'] = 'Erstellen';

$lang['Recipients'] = 'Empfänger';
$lang['All_users'] = 'Alle Benutzer';

$lang['Email_successfull'] = 'Die Nachricht wurde gesendet';
$lang['Click_return_massemail'] = 'Klicke %shier%s, um zur Massen E-Mail zurückzukehren';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rank-Administration';
$lang['Ranks_explain'] = 'Hier kannst du Ränge hinzufügen, editieren, anschauen und löschen. Du kannst ebenfalls eigene Ränge erstellen, die du per Benutzeradministration an spezielle Benutzer vergibst.';

$lang['Add_new_rank'] = 'Neuen Rang anlegen';

$lang['Rank_title'] = 'Rankname';
$lang['Rank_special'] = 'Spezialrang';
$lang['Rank_minimum'] = 'Minimum-Beiträge';
$lang['Rank_maximum'] = 'Maximum-Beiträge';
$lang['Rank_image'] = 'Bild zum Rang (relativ zum Forenpfad)';
$lang['Rank_image_explain'] = 'Du kannst hier ein Bild bestimmen, dass dem jeweiligen Rang zugeordnet ist';

$lang['Must_select_rank'] = 'Wähle einen Rang aus';
$lang['No_assigned_rank'] = 'Kein Spezialrang vergeben';

$lang['Rank_updated'] = 'Die Ranginformationen wurden aktualisiert';
$lang['Rank_added'] = 'Der Rang wurde hinzugefügt';
$lang['Rank_removed'] = 'Der Rang wurde gelöscht';
$lang['No_update_ranks'] = 'Der Rang wurde erfolgreich gelöscht. Allerdings wurden Benutzer, denen dieser Rang zugeordnet war, nicht aktualisiert. Du musst den Rang bei diesen Benutzern manuell aktualisieren';

$lang['Click_return_rankadmin'] = 'Klicke %shier%s, um zur Rank Administration zurückzukehren';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Verbot von Benutzernamen';
$lang['Disallow_explain'] = 'Hier kannst du Benutzernamen überwachen, die nicht genutzt werden dürfen. Du kannst einen Stern (*) als Platzhalter setzen. Beachte, dass du den jeweiligen Benutzer zuerst löschen musst, wenn du einen bereits vergebenen Benutzernamen wählst.';

$lang['Delete_disallow'] = 'Löschen';
$lang['Delete_disallow_title'] = 'Einen verbotenen Namen entfernen';
$lang['Delete_disallow_explain'] = 'Du kannst einen verbotenen Namen entfernen, indem du den Namen aus der Liste auswählst und Abschicken anklickst';

$lang['Add_disallow'] = 'Hinzufügen';
$lang['Add_disallow_title'] = 'Einen verbotenen Namen hinzufügen';
$lang['Add_disallow_explain'] = 'Du kannst ein * benutzen, um jegliche Benutzernamen zu verbieten';

$lang['No_disallowed'] = 'Keine verbotenen Benutzernamen';

$lang['Disallowed_deleted'] = 'Der verbotene Benutzername ist nun wieder gestattet';
$lang['Disallow_successful'] = 'Der verbotene Benutzername wurde hinzugefügt';
$lang['Disallowed_already'] = 'Der angebene Benuztername kann nicht verboten werden. Er existiert entweder schon oder stimmt mit einem existierenden überein.';

$lang['Click_return_disallowadmin'] = 'Klicke %shier%s, um zum Verbot der Benutzernamen zurückzukehren';


/യ਀⼀⼀ 匀琀礀氀攀猀 䄀搀洀椀渀ഀ਀⼀⼀ഀ਀␀氀愀渀最嬀✀匀琀礀氀攀猀开愀搀洀椀渀✀崀 㴀 ✀匀琀礀氀攀猀 䄀搀洀椀渀椀猀琀爀愀琀椀漀渀✀㬀ഀ਀␀氀愀渀最嬀✀匀琀礀氀攀猀开攀砀瀀氀愀椀渀✀崀 㴀 ✀䠀椀攀爀 欀愀渀渀猀琀 搀甀 匀琀礀氀攀猀 ⠀吀攀洀瀀氀愀琀攀猀 甀渀搀 吀栀攀洀攀猀⤀ 栀椀渀稀甀昀ﰀ最攀渀Ⰰ 氀猀挀栀攀渀 甀渀搀 ﰀ戀攀爀眀愀挀栀攀渀⸀✀㬀ഀ਀␀氀愀渀最嬀✀匀琀礀氀攀猀开愀搀搀渀攀眀开攀砀瀀氀愀椀渀✀崀 㴀 ✀䤀渀 搀攀爀 昀漀氀最攀渀搀攀渀 䰀椀猀琀攀 猀椀渀搀 愀氀氀攀 昀ﰀ爀 搀椀攀猀攀猀 吀攀洀瀀氀愀琀攀 瘀攀爀昀ﰀ最戀愀爀攀渀 吀栀攀洀攀猀 愀甀昀最攀昀ﰀ栀爀琀⸀ 䐀椀攀 椀渀 搀攀爀 䰀椀猀琀攀 愀甀昀最攀昀ﰀ栀爀琀攀渀 伀戀樀攀欀琀攀 眀甀爀搀攀渀 搀攀爀 䐀愀琀攀渀戀愀渀欀 渀漀挀栀 渀椀挀栀琀 稀甀最攀昀ﰀ最琀⸀ 唀洀 攀椀渀 吀栀攀洀攀 稀甀 椀渀猀琀愀氀氀椀攀爀攀渀Ⰰ 欀氀椀挀欀攀 攀椀渀昀愀挀栀 愀甀昀 搀攀渀 䤀渀猀琀愀氀氀椀攀爀攀渀ⴀ䰀椀渀欀 渀攀戀攀渀 攀椀渀攀洀 䔀椀渀琀爀愀最✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀匀攀氀攀挀琀开琀攀洀瀀氀愀琀攀✀崀 㴀 ✀圀栀氀攀 攀椀渀 吀攀洀瀀氀愀琀攀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀匀琀礀氀攀✀崀 㴀 ✀匀琀礀氀攀✀㬀ഀ਀␀氀愀渀最嬀✀吀攀洀瀀氀愀琀攀✀崀 㴀 ✀吀攀洀瀀氀愀琀攀✀㬀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀愀氀氀✀崀 㴀 ✀䤀渀猀琀愀氀氀椀攀爀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀䐀漀眀渀氀漀愀搀✀崀 㴀 ✀刀甀渀琀攀爀氀愀搀攀渀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䔀搀椀琀开琀栀攀洀攀✀崀 㴀 ✀吀栀攀洀攀 攀搀椀琀椀攀爀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀䔀搀椀琀开琀栀攀洀攀开攀砀瀀氀愀椀渀✀崀 㴀 ✀䠀椀攀爀 欀愀渀渀猀琀 搀甀 搀椀攀 䔀椀渀猀琀攀氀氀甀渀最攀渀 昀ﰀ爀 搀愀猀 最攀眀栀氀琀攀 吀栀攀洀攀 渀搀攀爀渀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䌀爀攀愀琀攀开琀栀攀洀攀✀崀 㴀 ✀吀栀攀洀攀 攀爀猀琀攀氀氀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀䌀爀攀愀琀攀开琀栀攀洀攀开攀砀瀀氀愀椀渀✀崀 㴀 ✀䠀椀攀爀 欀愀渀渀猀琀 搀甀 攀椀渀 渀攀甀攀猀 吀栀攀洀攀 昀ﰀ爀 搀愀猀 最攀眀栀氀琀攀 吀攀洀瀀氀愀琀攀 攀爀猀琀攀氀氀攀渀⸀ 圀攀渀渀 搀甀 䘀愀爀戀攀渀 攀椀渀最椀戀猀琀 ⠀昀ﰀ爀 搀椀攀 搀甀 䠀攀砀搀攀稀椀洀愀氀稀愀栀氀攀渀 渀甀琀稀攀渀 猀漀氀氀琀攀猀琀⤀Ⰰ 搀愀爀昀猀琀 搀甀 搀愀猀 ⌀ 渀椀挀栀琀 洀椀琀 愀渀最攀戀攀渀 ⴀ 䌀䌀䌀䌀䌀䌀 椀猀琀 稀⸀䈀⸀ 欀漀爀爀攀欀琀Ⰰ ⌀䌀䌀䌀䌀䌀䌀 渀椀挀栀琀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䔀砀瀀漀爀琀开琀栀攀洀攀猀✀崀 㴀 ✀吀栀攀洀攀 攀砀瀀漀爀琀椀攀爀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀䔀砀瀀漀爀琀开攀砀瀀氀愀椀渀✀崀 㴀 ✀䠀椀攀爀 欀愀渀渀猀琀 搀甀 搀椀攀 吀栀攀洀攀搀愀琀攀渀 昀ﰀ爀 攀椀渀 攀椀渀 戀攀猀琀椀洀洀琀攀猀 吀攀洀瀀氀愀琀攀 攀砀瀀漀爀琀椀攀爀攀渀⸀ 圀栀氀攀 搀愀猀 吀攀洀瀀氀愀琀攀 愀甀猀 搀攀爀 甀渀琀攀爀攀渀 䰀椀猀琀攀 甀渀搀 搀愀猀 匀挀爀椀瀀琀 眀椀爀搀 搀椀攀 吀栀攀洀攀欀漀渀昀椀最甀爀愀琀椀漀渀猀搀愀琀攀椀 攀爀猀琀攀氀氀攀渀 甀渀搀 瘀攀爀猀甀挀栀攀渀Ⰰ 猀椀攀 椀渀 搀攀渀 吀攀洀瀀氀愀琀攀猀漀爀搀渀攀爀 稀甀 猀瀀攀椀挀栀攀爀渀⸀ 䘀愀氀氀猀 攀猀 搀椀攀 䐀愀琀攀椀 渀椀挀栀琀 猀攀氀戀猀琀 猀瀀攀椀挀栀攀爀渀 欀愀渀渀Ⰰ 欀愀渀渀猀琀 搀甀 猀椀攀 爀甀渀琀攀爀氀愀搀攀渀⸀ 唀洀 搀攀洀 匀欀爀椀瀀琀 搀愀猀 匀挀栀爀攀椀戀攀渀 搀攀爀 䐀愀琀攀椀 稀甀 攀爀洀最氀椀挀栀攀渀Ⰰ 洀甀猀猀琀 搀甀 搀攀洀 最攀眀栀氀琀攀渀 吀攀洀瀀氀愀琀攀漀爀搀渀攀爀 匀挀栀爀攀椀戀爀攀挀栀琀攀 最攀眀栀爀攀渀⸀ 䘀ﰀ爀 眀攀椀琀攀爀攀 䤀渀昀漀爀洀愀琀椀漀渀攀渀 猀椀攀栀攀 搀攀渀 瀀栀瀀䈀䈀㈀ 䈀攀渀甀琀稀攀爀最甀椀搀攀⸀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀吀栀攀洀攀开椀渀猀琀愀氀氀攀搀✀崀 㴀 ✀䐀愀猀 最攀眀栀氀琀攀 吀栀攀洀攀 眀甀爀搀攀 椀渀猀琀愀氀氀椀攀爀琀✀㬀ഀ਀␀氀愀渀最嬀✀匀琀礀氀攀开爀攀洀漀瘀攀搀✀崀 㴀 ✀䐀攀爀 最攀眀栀氀琀攀 匀琀礀氀攀 眀甀爀搀攀 愀甀猀 搀攀爀 䐀愀琀攀渀戀愀渀欀 攀渀琀昀攀爀渀琀⸀ 唀洀 搀攀渀 匀琀礀氀攀 瘀氀氀椀最 瘀漀洀 匀礀猀琀攀洀 稀甀 攀渀琀昀攀爀渀攀渀Ⰰ 洀甀猀猀琀 搀甀 攀猀 愀甀猀 搀攀椀渀攀洀 吀攀洀瀀氀愀琀攀猀ⴀ伀爀搀渀攀爀 氀猀挀栀攀渀⸀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀攀洀攀开椀渀昀漀开猀愀瘀攀搀✀崀 㴀 ✀䐀椀攀 吀栀攀洀攀椀渀昀漀爀洀愀琀椀漀渀攀渀 昀ﰀ爀 搀愀猀 最攀眀栀氀琀攀 吀攀洀瀀氀愀琀攀 眀甀爀搀攀渀 最攀猀瀀攀椀挀栀攀爀琀⸀ 䐀甀 猀漀氀氀琀攀猀琀 樀攀琀稀琀 搀椀攀 䔀爀氀愀甀戀渀椀猀 搀攀爀 琀栀攀洀攀开椀渀昀漀⸀挀昀最 ⠀甀渀搀 攀瘀攀渀琀甀攀氀氀攀爀 嘀攀爀稀攀椀挀栀渀椀猀猀攀⤀ 愀甀昀 一甀爀ⴀ䰀攀猀攀渀 稀甀爀ﰀ挀欀 猀琀攀氀氀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀攀洀攀开甀瀀搀愀琀攀搀✀崀 㴀 ✀䐀愀猀 最攀眀栀氀琀攀 吀栀攀洀攀 眀甀爀搀攀 愀欀琀甀愀氀椀猀椀攀爀琀⸀ 䐀甀 猀漀氀氀琀攀猀琀 搀椀攀 渀攀甀攀渀 吀栀攀洀攀攀椀渀猀琀攀氀氀甀渀最攀渀 樀攀琀稀琀 攀砀瀀漀爀琀椀攀爀攀渀⸀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀攀洀攀开挀爀攀愀琀攀搀✀崀 㴀 ✀吀栀攀洀攀 攀爀猀琀攀氀氀琀⸀ 䐀甀 猀漀氀氀琀攀猀琀 搀愀猀 吀栀攀洀攀 樀攀琀稀琀 椀渀 搀椀攀 吀栀攀洀攀欀漀渀昀椀最甀爀愀琀椀漀渀 攀砀瀀漀爀琀椀攀爀攀渀Ⰰ 搀愀洀椀琀 攀猀 渀椀挀栀琀 瘀攀爀氀漀爀攀渀 最攀栀琀 漀搀攀爀 搀甀 攀猀 眀漀 愀渀搀攀爀猀 攀椀渀猀攀琀稀攀渀 欀愀渀渀猀琀⸀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䌀漀渀昀椀爀洀开搀攀氀攀琀攀开猀琀礀氀攀✀崀 㴀 ✀䐀椀攀猀攀渀 匀琀礀氀攀 眀椀爀欀氀椀挀栀 氀猀挀栀攀渀㼀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䐀漀眀渀氀漀愀搀开琀栀攀洀攀开挀昀最✀崀 㴀 ✀䐀攀爀 䔀砀瀀漀爀琀攀爀 欀漀渀渀琀攀 渀椀挀栀琀 椀渀 搀椀攀 吀栀攀洀攀椀渀昀漀爀洀愀琀椀漀渀猀搀愀琀攀椀 猀挀栀爀攀椀戀攀渀⸀ 䬀氀椀挀欀攀 愀甀昀 搀攀渀 甀渀琀攀爀攀渀 䬀渀漀瀀昀Ⰰ 甀洀 搀椀攀 䐀愀琀攀椀 瀀攀爀 䈀爀漀眀猀攀爀 爀甀渀琀攀爀稀甀氀愀搀攀渀⸀ 䠀愀猀琀 搀甀 猀椀攀 爀甀渀琀攀爀最攀氀愀搀攀渀Ⰰ 欀愀渀渀猀琀 搀甀 猀椀攀 椀渀 搀攀椀渀攀渀 伀爀搀渀攀爀 洀椀琀 搀攀渀 吀攀洀瀀氀愀琀攀渀搀愀琀攀椀攀渀 欀漀瀀椀攀爀攀渀⸀ 匀挀栀氀椀攀���氀椀挀栀 欀愀渀渀猀琀 搀甀 搀椀攀 䐀愀琀攀椀攀渀 稀甀 攀椀渀攀洀 倀愀欀攀琀 稀甀猀愀洀洀攀渀猀挀栀氀椀攀���攀渀⸀✀㬀ഀ਀␀氀愀渀最嬀✀一漀开琀栀攀洀攀猀✀崀 㴀 ✀䐀愀猀 最攀眀栀氀琀攀 吀攀洀瀀氀愀琀攀 栀愀琀 欀攀椀渀攀 瘀攀爀昀ﰀ最戀愀爀攀渀 吀栀攀洀攀猀⸀ 唀洀 攀椀渀 渀攀甀攀猀 吀栀攀洀攀 稀甀 攀爀猀琀攀氀氀攀渀Ⰰ 欀氀椀挀欀攀 愀甀昀 搀攀渀 吀栀攀洀攀 攀爀猀琀攀氀氀攀渀ⴀ䰀椀渀欀 愀甀昀 搀攀爀 氀椀渀欀攀渀 匀攀椀琀攀✀㬀ഀ਀␀氀愀渀最嬀✀一漀开琀攀洀瀀氀愀琀攀开搀椀爀✀崀 㴀 ✀䬀漀渀渀琀攀 搀愀猀 吀攀洀瀀氀愀琀攀ⴀ嘀攀爀稀攀椀挀栀渀椀猀 渀椀挀栀琀 昀昀渀攀渀⸀ 䔀猀 椀猀琀 攀瘀攀渀琀甀攀氀氀 甀渀氀攀猀戀愀爀 漀搀攀爀 攀砀椀猀琀椀攀爀琀 渀椀挀栀琀 ⠀洀攀栀爀⤀⸀✀㬀ഀ਀␀氀愀渀最嬀✀䌀愀渀渀漀琀开爀攀洀漀瘀攀开猀琀礀氀攀✀崀 㴀 ✀䐀甀 欀愀渀渀猀琀 搀攀渀 最攀眀栀氀琀攀渀 匀琀礀氀攀 渀椀挀栀琀 攀渀琀昀攀爀渀攀渀Ⰰ 搀愀 攀爀 稀甀洀 䘀漀爀甀洀猀猀琀愀渀搀愀爀搀 最攀栀爀琀⸀ 䐀甀 欀愀渀渀猀琀 樀攀搀漀挀栀 攀椀渀攀渀 愀渀搀攀爀攀渀 䘀漀爀甀洀猀猀琀愀渀搀愀爀搀 眀栀氀攀渀 甀渀搀 攀猀 攀爀渀攀甀琀 瘀攀爀猀甀挀栀攀渀⸀✀㬀ഀ਀␀氀愀渀最嬀✀匀琀礀氀攀开攀砀椀猀琀猀✀崀 㴀 ✀䐀攀爀 最攀眀栀氀琀攀 匀琀礀氀攀渀愀洀攀 攀砀椀猀琀椀攀爀琀 戀攀爀攀椀琀猀Ⰰ 戀椀琀琀攀 最攀栀攀 稀甀爀ﰀ挀欀 甀渀搀 眀栀氀攀 攀椀渀攀渀 愀渀搀攀爀攀渀 一愀洀攀渀⸀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䌀氀椀挀欀开爀攀琀甀爀渀开猀琀礀氀攀愀搀洀椀渀✀崀 㴀 ✀䬀氀椀挀欀攀 ─猀栀椀攀爀─猀Ⰰ 甀洀 稀甀爀 匀琀礀氀攀猀 䄀搀洀椀渀椀猀琀爀愀琀椀漀渀 稀甀爀ﰀ挀欀稀甀欀攀栀爀攀渀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀吀栀攀洀攀开猀攀琀琀椀渀最猀✀崀 㴀 ✀吀栀攀洀攀 䔀椀渀猀琀攀氀氀甀渀最攀渀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀攀洀攀开攀氀攀洀攀渀琀✀崀 㴀 ✀吀栀攀洀攀 䔀氀攀洀攀渀琀✀㬀ഀ਀␀氀愀渀最嬀✀匀椀洀瀀氀攀开渀愀洀攀✀崀 㴀 ✀䔀椀渀昀愀挀栀攀爀 一愀洀攀✀㬀ഀ਀␀氀愀渀最嬀✀嘀愀氀甀攀✀崀 㴀 ✀圀攀爀琀✀㬀ഀ਀␀氀愀渀最嬀✀匀愀瘀攀开匀攀琀琀椀渀最猀✀崀 㴀 ✀䔀椀渀猀琀攀氀氀甀渀最攀渀 ﰀ戀攀爀渀攀栀洀攀渀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀匀琀礀氀攀猀栀攀攀琀✀崀 㴀 ✀䌀匀匀 匀琀礀氀攀猀栀攀攀琀✀㬀ഀ਀␀氀愀渀最嬀✀䈀愀挀欀最爀漀甀渀搀开椀洀愀最攀✀崀 㴀 ✀䠀椀渀琀攀爀最爀甀渀搀戀椀氀搀✀㬀ഀ਀␀氀愀渀最嬀✀䈀愀挀欀最爀漀甀渀搀开挀漀氀漀爀✀崀 㴀 ✀䠀椀渀琀攀爀最爀甀渀搀昀愀爀戀攀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀攀洀攀开渀愀洀攀✀崀 㴀 ✀吀栀攀洀攀渀愀洀攀✀㬀ഀ਀␀氀愀渀最嬀✀吀攀砀琀开挀漀氀漀爀✀崀 㴀 ✀吀攀砀琀昀愀爀戀攀✀㬀ഀ਀␀氀愀渀最嬀✀䰀椀渀欀开挀漀氀漀爀✀崀 㴀 ✀䰀椀渀欀昀愀爀戀攀✀㬀ഀ਀␀氀愀渀最嬀✀嘀䰀椀渀欀开挀漀氀漀爀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 最攀猀攀栀攀渀攀爀 䰀椀渀欀✀㬀ഀ਀␀氀愀渀最嬀✀䄀䰀椀渀欀开挀漀氀漀爀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 愀欀琀椀瘀攀爀 䰀椀渀欀✀㬀ഀ਀␀氀愀渀最嬀✀䠀䰀椀渀欀开挀漀氀漀爀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 最攀眀栀氀琀攀爀 䰀椀渀欀✀㬀ഀ਀␀氀愀渀最嬀✀吀爀开挀漀氀漀爀㄀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀爀攀椀栀攀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀吀爀开挀漀氀漀爀㈀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀爀攀椀栀攀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀吀爀开挀漀氀漀爀㌀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀爀攀椀栀攀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀吀爀开挀氀愀猀猀㄀✀崀 㴀 ✀吀愀戀攀氀氀攀渀爀攀椀栀攀 䬀氀愀猀猀攀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀吀爀开挀氀愀猀猀㈀✀崀 㴀 ✀吀愀戀攀氀氀攀渀爀攀椀栀攀 䬀氀愀猀猀攀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀吀爀开挀氀愀猀猀㌀✀崀 㴀 ✀吀愀戀攀氀氀攀渀爀攀椀栀攀 䬀氀愀猀猀攀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀开挀漀氀漀爀㄀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀欀漀瀀昀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀开挀漀氀漀爀㈀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀欀漀瀀昀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀开挀漀氀漀爀㌀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀欀漀瀀昀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀开挀氀愀猀猀㄀✀崀 㴀 ✀吀愀戀攀氀氀攀渀欀漀瀀昀 䬀氀愀猀猀攀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀开挀氀愀猀猀㈀✀崀 㴀 ✀吀愀戀攀氀氀攀渀欀漀瀀昀 䬀氀愀猀猀攀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀吀栀开挀氀愀猀猀㌀✀崀 㴀 ✀吀愀戀攀氀氀攀渀欀漀瀀昀 䬀氀愀猀猀攀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀吀搀开挀漀氀漀爀㄀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀稀攀氀氀攀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀吀搀开挀漀氀漀爀㈀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀稀攀氀氀攀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀吀搀开挀漀氀漀爀㌀✀崀 㴀 ✀䘀愀爀戀攀 昀ﰀ爀 吀愀戀攀氀氀攀渀稀攀氀氀攀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀吀搀开挀氀愀猀猀㄀✀崀 㴀 ✀吀愀戀攀氀氀攀渀稀攀氀氀攀 䬀氀愀猀猀攀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀吀搀开挀氀愀猀猀㈀✀崀 㴀 ✀吀愀戀攀氀氀攀渀稀攀氀氀攀 䬀氀愀猀猀攀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀吀搀开挀氀愀猀猀㌀✀崀 㴀 ✀吀愀戀攀氀氀攀渀稀攀氀氀攀 䬀氀愀猀猀攀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀昀愀挀攀㄀✀崀 㴀 ✀匀挀栀爀椀昀琀愀爀琀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀昀愀挀攀㈀✀崀 㴀 ✀匀挀栀爀椀昀琀愀爀琀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀昀愀挀攀㌀✀崀 㴀 ✀匀挀栀爀椀昀琀愀爀琀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀猀椀稀攀㄀✀崀 㴀 ✀匀挀栀爀椀昀琀最爀猀猀攀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀猀椀稀攀㈀✀崀 㴀 ✀匀挀栀爀椀昀琀最爀猀猀攀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀猀椀稀攀㌀✀崀 㴀 ✀匀挀栀爀椀昀琀最爀猀猀攀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀挀漀氀漀爀㄀✀崀 㴀 ✀匀挀栀爀椀昀琀昀愀爀戀攀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀挀漀氀漀爀㈀✀崀 㴀 ✀匀挀栀爀椀昀琀昀愀爀戀攀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀昀漀渀琀挀漀氀漀爀㌀✀崀 㴀 ✀匀挀栀爀椀昀琀昀愀爀戀攀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀猀瀀愀渀开挀氀愀猀猀㄀✀崀 㴀 ✀䄀戀猀琀愀渀搀 䬀氀愀猀猀攀 ㄀✀㬀ഀ਀␀氀愀渀最嬀✀猀瀀愀渀开挀氀愀猀猀㈀✀崀 㴀 ✀䄀戀猀琀愀渀搀 䬀氀愀猀猀攀 ㈀✀㬀ഀ਀␀氀愀渀最嬀✀猀瀀愀渀开挀氀愀猀猀㌀✀崀 㴀 ✀䄀戀猀琀愀渀搀 䬀氀愀猀猀攀 ㌀✀㬀ഀ਀␀氀愀渀最嬀✀椀洀最开瀀漀氀氀开猀椀稀攀✀崀 㴀 ✀唀洀昀爀愀最攀渀ⴀ匀礀洀戀漀氀最爀���攀 嬀瀀砀崀✀㬀ഀ਀␀氀愀渀最嬀✀椀洀最开瀀洀开猀椀稀攀✀崀 㴀 ✀倀爀椀瘀愀琀攀 一愀挀栀爀椀挀栀琀攀渀ⴀ匀琀愀琀甀猀猀礀洀戀漀氀最爀���攀 嬀瀀砀崀✀㬀ഀ਀ഀ਀ഀ਀⼀⼀ഀ਀⼀⼀ 䤀渀猀琀愀氀氀 倀爀漀挀攀猀猀ഀ਀⼀⼀ഀ਀␀氀愀渀最嬀✀圀攀氀挀漀洀攀开椀渀猀琀愀氀氀✀崀 㴀 ✀圀椀氀氀欀漀洀洀攀渀 戀攀椀 搀攀爀 瀀栀瀀䈀䈀㈀ⴀ䤀渀猀琀愀氀氀愀琀椀漀渀✀㬀ഀ਀␀氀愀渀最嬀✀䤀渀椀琀椀愀氀开挀漀渀昀椀最✀崀 㴀 ✀䜀爀甀渀搀攀椀渀猀琀攀氀氀甀渀最攀渀✀㬀ഀ਀␀氀愀渀最嬀✀䐀䈀开挀漀渀昀椀最✀崀 㴀 ✀䐀愀琀攀渀戀愀渀欀欀漀渀昀椀最甀爀愀琀椀漀渀✀㬀ഀ਀␀氀愀渀最嬀✀䄀搀洀椀渀开挀漀渀昀椀最✀崀 㴀 ✀䄀搀洀椀渀椀猀琀爀愀琀漀爀欀漀渀昀椀最甀爀愀琀椀漀渀✀㬀ഀ਀␀氀愀渀最嬀✀挀漀渀琀椀渀甀攀开甀瀀最爀愀搀攀✀崀 㴀 ✀匀漀戀愀氀搀 搀甀 搀椀攀 䬀漀渀昀椀最甀爀愀琀椀漀渀猀搀愀琀攀椀 愀甀昀 搀攀椀渀攀渀 刀攀挀栀渀攀爀 栀攀爀甀渀琀攀爀最攀氀愀搀攀渀 栀愀猀琀Ⰰ 欀愀渀渀猀琀 搀甀 搀椀攀 匀挀栀愀氀琀昀氀挀栀攀 尀✀唀瀀最爀愀搀攀 昀漀爀琀猀攀琀稀攀渀尀✀ 戀攀琀琀椀最攀渀Ⰰ 甀洀 洀椀琀 搀攀洀 唀瀀最爀愀搀攀ⴀ倀爀漀稀攀猀猀 昀漀爀琀稀甀昀愀栀爀攀渀⸀ 䈀椀琀琀攀 眀愀爀琀攀 洀椀琀 搀攀洀 䠀漀挀栀氀愀搀攀渀 搀攀爀 䬀漀渀昀椀最甀爀愀琀椀漀渀猀搀愀琀攀椀Ⰰ 戀椀猀 搀攀爀 唀瀀最爀愀搀攀ⴀ倀爀漀稀攀猀猀 戀攀攀渀搀攀琀 椀猀琀⸀✀㬀ഀ਀␀氀愀渀最嬀✀甀瀀最爀愀搀攀开猀甀戀洀椀琀✀崀 㴀 ✀唀瀀最爀愀搀攀 昀漀爀琀猀攀琀稀攀渀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀愀氀氀攀爀开䔀爀爀漀爀✀崀 㴀 ✀圀栀爀攀渀搀 搀攀爀 䤀渀猀琀愀氀氀愀琀椀漀渀 琀爀愀琀 攀椀渀 䘀攀栀氀攀爀 愀甀昀✀㬀ഀ਀␀氀愀渀最嬀✀倀爀攀瘀椀漀甀猀开䤀渀猀琀愀氀氀✀崀 㴀 ✀䔀椀渀攀 瘀漀爀栀攀爀椀最攀 䤀渀猀琀愀氀氀愀琀椀漀渀 眀甀爀搀攀 攀渀琀搀攀挀欀琀✀㬀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀愀氀氀开搀戀开攀爀爀漀爀✀崀 㴀 ✀䈀攀椀洀 唀瀀搀愀琀攀 搀攀爀 䐀愀琀攀渀戀愀渀欀 琀爀愀琀 攀椀渀 䘀攀栀氀攀爀 愀甀昀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀刀攀开椀渀猀琀愀氀氀✀崀 㴀 ✀䐀攀椀渀攀 瘀漀爀栀攀爀椀最攀 䤀渀猀琀愀氀氀愀琀椀漀渀 椀猀琀 渀漀挀栀 愀欀琀椀瘀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀䘀愀氀氀猀 䐀甀 瀀栀瀀䈀䈀㈀ 渀攀甀 椀渀猀琀愀氀氀椀攀爀攀渀 洀挀栀琀攀猀琀Ⰰ 愀欀琀椀瘀椀攀爀攀 搀攀渀 甀渀琀攀渀 猀琀攀栀攀渀搀攀渀 䨀愀ⴀ䬀渀漀瀀昀⸀ 䈀攀愀挀栀琀攀 樀攀搀漀挀栀Ⰰ 搀愀猀猀 搀椀攀猀攀爀 嘀漀爀最愀渀最 猀洀琀氀椀挀栀攀 攀砀椀猀琀椀攀爀攀渀搀攀渀 䐀愀琀攀渀 稀攀爀猀琀爀攀渀 眀椀爀搀 甀渀搀 欀攀椀渀攀 匀椀挀栀攀爀甀渀最攀渀 最攀洀愀挀栀琀 眀攀爀搀攀渀⸀ 䐀攀爀 䄀搀洀椀渀椀猀琀爀愀琀漀爀ⴀ䈀攀渀甀琀稀攀爀渀愀洀攀 甀渀搀 搀愀猀 倀愀猀猀眀漀爀琀Ⰰ 搀愀猀 搀甀 戀攀渀甀琀稀琀 栀愀猀琀Ⰰ 甀洀 搀椀挀栀 椀洀 䈀漀愀爀搀 攀椀渀稀甀氀漀最最攀渀Ⰰ 眀攀爀搀攀渀 渀愀挀栀 搀攀爀 一攀甀椀渀猀琀愀氀氀愀琀椀漀渀 攀爀渀攀甀琀 攀爀猀琀攀氀氀琀⸀ 䔀猀 戀氀攀椀戀攀渀 猀漀渀猀琀 欀攀椀渀攀 䔀椀渀猀琀攀氀氀甀渀最攀渀 稀甀爀ﰀ挀欀⸀㰀戀爀 ⼀㸀㰀戀爀 ⼀㸀���戀攀爀氀攀最攀 攀猀 搀椀爀 最甀琀Ⰰ 戀攀瘀漀爀 搀甀 愀甀昀 䨀愀 欀氀椀挀欀猀琀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀开匀琀攀瀀开　✀崀 㴀 ✀䐀愀渀欀攀Ⰰ 搀愀猀猀 搀甀 搀椀挀栀 昀ﰀ爀 瀀栀瀀䈀䈀 ㈀ 攀渀琀猀挀栀椀攀搀攀渀 栀愀猀琀⸀ 唀洀 搀椀攀 䤀渀猀琀愀氀氀愀琀椀漀渀 愀戀稀甀猀挀栀氀椀攀���攀渀Ⰰ 最椀戀 戀椀琀琀攀 搀椀攀 甀渀琀攀渀 最攀昀漀爀搀攀爀琀攀渀 䐀愀琀攀渀 攀椀渀⸀ 䈀攀愀挀栀琀攀Ⰰ 搀愀猀猀 搀椀攀 䐀愀琀攀渀戀愀渀欀Ⰰ 椀渀 眀攀氀挀栀攀 搀甀 椀渀猀琀愀氀氀椀攀爀猀琀Ⰰ 戀攀爀攀椀琀猀 瘀漀爀栀愀渀搀攀渀 猀攀椀攀渀 猀漀氀氀琀攀⸀ 匀漀氀氀琀攀猀琀 搀甀 椀渀 攀椀渀攀 䐀愀琀攀渀戀愀渀欀 椀渀猀琀愀氀氀椀攀爀攀渀Ⰰ 搀椀攀 伀䐀䈀䌀 渀甀琀稀琀Ⰰ 稀⸀䈀⸀ 䴀匀 䄀挀挀攀猀猀Ⰰ 猀漀氀氀琀攀猀琀 搀甀 攀爀猀琀 攀椀渀攀渀 䐀匀一 昀ﰀ爀 猀椀攀 攀爀猀琀攀氀氀攀渀Ⰰ 戀攀瘀漀爀 搀甀 昀漀爀琀昀栀爀猀琀⸀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀匀琀愀爀琀开䤀渀猀琀愀氀氀✀崀 㴀 ✀䤀渀猀琀愀氀氀愀琀椀漀渀 戀攀最椀渀渀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀䘀椀渀椀猀栀开䤀渀猀琀愀氀氀✀崀 㴀 ✀䤀渀猀琀愀氀氀愀琀椀漀渀 愀戀猀挀栀氀椀攀���攀渀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䐀攀昀愀甀氀琀开氀愀渀最✀崀 㴀 ✀匀琀愀渀搀愀爀搀猀瀀爀愀挀栀攀✀㬀ഀ਀␀氀愀渀最嬀✀䐀䈀开䠀漀猀琀✀崀 㴀 ✀䐀愀琀攀渀戀愀渀欀㨀 䠀漀猀琀 ⼀ 䐀匀一✀㬀ഀ਀␀氀愀渀最嬀✀䐀䈀开一愀洀攀✀崀 㴀 ✀一愀洀攀 搀攀爀 䐀愀琀攀渀戀愀渀欀✀㬀ഀ਀␀氀愀渀最嬀✀䐀䈀开唀猀攀爀渀愀洀攀✀崀 㴀 ✀䐀愀琀攀渀戀愀渀欀 䈀攀渀甀琀稀攀爀渀愀洀攀✀㬀ഀ਀␀氀愀渀最嬀✀䐀䈀开倀愀猀猀眀漀爀搀✀崀 㴀 ✀䐀愀琀攀渀戀愀渀欀 倀愀猀猀眀漀爀琀✀㬀ഀ਀␀氀愀渀最嬀✀䐀愀琀愀戀愀猀攀✀崀 㴀 ✀䐀攀椀渀攀 䐀愀琀攀渀戀愀渀欀✀㬀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀愀氀氀开氀愀渀最✀崀 㴀 ✀圀栀氀攀 匀瀀爀愀挀栀攀 昀ﰀ爀 搀椀攀 䤀渀猀琀愀氀氀愀琀椀漀渀✀㬀ഀ਀␀氀愀渀最嬀✀搀戀洀猀✀崀 㴀 ✀䐀愀琀攀渀戀愀渀欀琀礀瀀✀㬀ഀ਀␀氀愀渀最嬀✀吀愀戀氀攀开倀爀攀昀椀砀✀崀 㴀 ✀倀爀攀昀椀砀 昀ﰀ爀 搀椀攀 吀愀戀攀氀氀攀渀 椀渀 搀攀爀 䐀愀琀攀渀戀愀渀欀✀㬀ഀ਀␀氀愀渀最嬀✀䄀搀洀椀渀开唀猀攀爀渀愀洀攀✀崀 㴀 ✀䄀搀洀椀渀椀猀琀爀愀琀漀爀 䈀攀渀甀琀稀攀爀渀愀洀攀✀㬀ഀ਀␀氀愀渀最嬀✀䄀搀洀椀渀开倀愀猀猀眀漀爀搀✀崀 㴀 ✀䄀搀洀椀渀椀猀琀爀愀琀漀爀 倀愀猀猀眀漀爀琀✀㬀ഀ਀␀氀愀渀最嬀✀䄀搀洀椀渀开倀愀猀猀眀漀爀搀开挀漀渀昀椀爀洀✀崀 㴀 ✀䄀搀洀椀渀椀猀琀爀愀琀漀爀 倀愀猀猀眀漀爀琀 嬀 䈀攀猀琀琀椀最甀渀最 崀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀开匀琀攀瀀开㈀✀崀 㴀 ✀䐀攀椀渀 䄀搀洀椀渀椀猀琀爀愀琀漀爀ⴀ䈀攀渀甀琀稀攀爀渀愀洀攀 眀甀爀搀攀 攀爀猀琀攀氀氀琀⸀ 䐀攀椀渀攀 䤀渀猀琀愀氀氀愀琀椀漀渀 椀猀琀 渀甀渀 欀漀洀瀀氀攀琀琀⸀ 䐀甀 眀椀爀猀琀 樀攀琀稀琀 愀甀昀 攀椀渀攀 匀攀椀琀攀 最攀昀ﰀ栀爀琀Ⰰ 眀漀 搀甀 搀攀椀渀 渀攀甀攀猀 䈀漀愀爀搀 搀攀椀渀攀渀 䈀攀搀ﰀ爀昀渀椀猀猀攀渀 愀渀瀀愀猀猀攀渀 欀愀渀渀猀琀⸀ ���戀攀爀瀀爀ﰀ昀攀 愀洀 戀攀猀琀攀渀 最氀攀椀挀栀 搀椀攀 䄀氀氀最攀洀攀椀渀攀 䬀漀渀昀椀最甀爀愀琀椀漀渀 甀渀搀 洀愀挀栀攀 攀瘀攀渀琀甀攀氀氀 渀琀椀最攀 쐀渀搀攀爀甀渀最攀渀⸀ 䐀愀渀欀攀Ⰰ 搀愀猀猀 搀甀 搀椀挀栀 昀ﰀ爀 瀀栀瀀䈀䈀 ㈀ 攀渀琀猀挀栀椀攀搀攀渀 栀愀猀琀⸀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀唀渀眀爀椀琀攀愀戀氀攀开挀漀渀昀椀最✀崀 㴀 ✀䴀漀洀攀渀琀愀渀 椀猀琀 搀攀椀渀攀 䬀漀渀昀椀最甀爀愀琀椀漀渀猀搀愀琀攀椀 渀椀挀栀琀 戀攀猀挀栀爀攀椀戀戀愀爀⸀ 䐀甀 欀愀渀渀猀琀 搀椀爀 攀椀渀攀 䬀漀瀀椀攀 搀攀爀 䐀愀琀攀椀 爀甀渀琀攀爀氀愀搀攀渀Ⰰ 眀攀渀渀 搀甀 愀甀昀 搀攀渀 攀渀琀猀瀀爀攀挀栀攀渀搀攀渀 䰀椀渀欀 甀渀琀攀渀 欀氀椀挀欀猀琀⸀ 䐀甀 猀漀氀氀琀攀猀琀 搀椀攀猀攀 䐀愀琀攀椀 椀渀猀 猀攀氀戀攀 嘀攀爀稀攀椀挀栀渀椀猀 眀椀攀 瀀栀瀀䈀䈀㈀ 栀漀挀栀氀愀搀攀渀⸀ 圀攀渀渀 搀椀攀猀 最攀琀愀渀 椀猀琀Ⰰ 猀漀氀氀琀攀猀琀 搀甀 搀椀挀栀 洀椀琀 搀攀椀渀攀洀 䄀搀洀椀渀椀猀琀爀愀琀漀爀ⴀ䈀攀渀甀琀稀攀爀渀愀洀攀渀 甀渀搀 倀愀猀猀眀漀爀琀Ⰰ 搀椀攀 搀甀 愀甀昀 搀攀爀 氀攀琀稀琀攀渀 匀攀椀琀攀 愀渀最攀最攀戀攀渀 栀愀猀琀Ⰰ 攀椀渀氀漀最最攀渀 甀渀搀 搀攀渀 䄀搀洀椀渀椀猀琀爀愀琀椀漀渀猀戀攀爀攀椀挀栀 戀攀琀爀攀琀攀渀Ⰰ 甀洀 搀椀攀 愀氀氀最攀洀攀椀渀攀渀 䔀椀渀猀琀攀氀氀甀渀最攀渀 稀甀 瀀爀ﰀ昀攀渀⸀ 䔀椀渀攀渀 攀渀琀猀瀀爀攀挀栀攀渀搀攀渀 䰀椀渀欀 昀椀渀搀攀猀琀 搀甀 愀洀 䔀渀搀攀 樀攀搀攀爀 匀攀椀琀攀 搀攀椀渀攀猀 䘀漀爀甀洀猀⸀ 䐀愀渀欀攀Ⰰ 搀愀猀猀 搀甀 搀椀挀栀 昀ﰀ爀 瀀栀瀀䈀䈀 ㈀ 攀渀琀猀挀栀椀搀攀渀 栀愀猀琀⸀✀㬀ഀ਀␀氀愀渀最嬀✀䐀漀眀渀氀漀愀搀开挀漀渀昀椀最✀崀 㴀 ✀䬀漀渀昀椀最甀爀愀琀椀漀渀猀搀愀琀攀椀 栀攀爀甀渀琀攀爀氀愀搀攀渀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀昀琀瀀开挀栀漀漀猀攀✀崀 㴀 ✀圀栀氀攀 䐀漀眀渀氀漀愀搀洀攀琀栀漀搀攀✀㬀ഀ਀␀氀愀渀最嬀✀昀琀瀀开漀瀀琀椀漀渀✀崀 㴀 ✀㰀戀爀 ⼀㸀䐀愀 䘀吀倀 䔀爀眀攀椀琀攀爀甀渀最攀渀 椀渀 搀椀攀猀攀爀 嘀攀爀猀椀漀渀 瘀漀渀 倀䠀倀 愀欀琀椀瘀椀攀爀琀 猀椀渀搀Ⰰ 欀渀渀琀攀猀琀 搀甀 搀椀攀 䴀最氀椀挀栀欀攀椀琀 栀愀戀攀渀Ⰰ 搀椀攀 䬀漀渀昀椀最甀爀愀琀椀漀渀猀搀愀琀攀椀 愀甀琀漀洀愀琀椀猀挀栀 瀀攀爀 䘀吀倀 瘀漀爀 伀爀琀 稀甀 渀搀攀爀渀⸀✀㬀ഀ਀␀氀愀渀最嬀✀昀琀瀀开椀渀猀琀爀甀挀琀猀✀崀 㴀 ✀䐀甀 栀愀猀琀 搀椀挀栀 搀愀稀甀 攀渀琀猀挀栀椀攀搀攀渀Ⰰ 搀椀攀 䐀愀琀攀椀 愀甀琀漀洀愀琀椀猀挀栀 甀渀搀 瘀漀爀 伀爀琀 稀甀 渀搀攀爀渀⸀ 䈀椀琀琀攀 最椀戀 搀椀攀 甀渀琀攀渀 最攀昀漀爀搀攀爀琀攀渀 䤀渀昀漀爀洀愀琀椀漀渀攀渀 愀渀Ⰰ 甀洀 搀攀渀 倀爀漀稀攀猀猀 稀甀 猀琀愀爀琀攀渀⸀ 䈀攀愀挀栀琀攀Ⰰ 搀愀猀猀 搀攀爀 䘀吀倀ⴀ倀昀愀搀 搀攀爀 攀砀愀欀琀攀 倀昀愀搀 稀甀 搀攀椀渀攀洀 瀀栀瀀䈀䈀㈀ⴀ伀爀搀渀攀爀 猀攀椀渀 洀甀猀猀⸀✀㬀ഀ਀␀氀愀渀最嬀✀昀琀瀀开椀渀昀漀✀崀 㴀 ✀䔀椀渀最愀戀攀 搀攀爀 䘀吀倀 䤀渀昀漀爀洀愀琀椀漀渀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀䄀琀琀攀洀瀀琀开昀琀瀀✀崀 㴀 ✀䐀椀攀 䬀漀渀昀椀最甀爀愀琀椀漀渀猀搀愀琀攀椀 瘀漀爀 伀爀琀 甀洀猀挀栀爀攀椀戀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀匀攀渀搀开昀椀氀攀✀崀 㴀 ✀䤀挀栀 洀挀栀琀攀Ⰰ 搀愀猀猀 洀椀爀 搀椀攀 䐀愀琀攀椀 最攀猀挀栀椀挀欀琀 眀椀爀搀⸀ 䤀挀栀 眀攀爀搀攀 猀椀攀 洀愀渀甀攀氀氀 栀漀挀栀氀愀搀攀渀⸀✀㬀ഀ਀␀氀愀渀最嬀✀昀琀瀀开瀀愀琀栀✀崀 㴀 ✀䘀吀倀ⴀ倀昀愀搀 稀甀洀 瀀栀瀀䈀䈀㈀✀㬀ഀ਀␀氀愀渀最嬀✀昀琀瀀开甀猀攀爀渀愀洀攀✀崀 㴀 ✀䐀攀椀渀 䘀吀倀 䈀攀渀甀琀稀攀爀渀愀洀攀✀㬀ഀ਀␀氀愀渀最嬀✀昀琀瀀开瀀愀猀猀眀漀爀搀✀崀 㴀 ✀䐀攀椀渀 䘀吀倀 倀愀猀猀眀漀爀琀✀㬀ഀ਀␀氀愀渀最嬀✀吀爀愀渀猀昀攀爀开挀漀渀昀椀最✀崀 㴀 ✀吀爀愀渀猀昀攀爀 戀攀最椀渀渀攀渀✀㬀ഀ਀␀氀愀渀最嬀✀一漀䘀吀倀开挀漀渀昀椀最✀崀 㴀 ✀䐀攀爀 嘀攀爀猀甀挀栀Ⰰ 搀椀攀 䬀漀渀昀椀最甀爀愀琀椀漀渀猀搀愀琀攀椀 瘀漀爀 伀爀琀 甀洀稀甀猀挀栀爀攀椀戀攀渀Ⰰ 猀挀栀攀椀琀攀爀琀攀⸀ 䈀椀琀琀攀 氀愀搀攀 搀椀攀 䐀愀琀攀椀 爀甀渀琀攀爀 甀渀搀 氀愀搀攀 猀椀攀 洀愀渀甀攀氀氀 栀漀挀栀⸀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀愀氀氀✀崀 㴀 ✀䤀渀猀琀愀氀氀愀琀椀漀渀✀㬀ഀ਀␀氀愀渀最嬀✀唀瀀最爀愀搀攀✀崀 㴀 ✀唀瀀最爀愀搀攀✀㬀ഀ਀ഀ਀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀愀氀氀开䴀攀琀栀漀搀✀崀 㴀 ✀圀栀氀攀 攀椀渀攀 䤀渀猀琀愀氀氀愀琀椀漀渀猀ⴀ䴀攀琀栀漀搀攀 愀甀猀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀愀氀氀开一漀开䔀砀琀✀崀 㴀 ✀䐀椀攀 倀䠀倀ⴀ䬀漀渀昀椀最甀爀愀琀椀漀渀 愀甀昀 搀攀椀渀攀洀 匀攀爀瘀攀爀 甀渀琀攀爀猀琀ﰀ琀稀琀 渀椀挀栀琀 搀攀渀 最攀眀栀氀琀攀渀 䐀愀琀攀渀戀愀渀欀ⴀ吀礀瀀✀㬀ഀ਀ഀ਀␀氀愀渀最嬀✀䤀渀猀琀愀氀氀开一漀开倀䌀刀䔀✀崀 㴀 ✀瀀栀瀀䈀䈀 ㈀ 戀攀渀琀椀最琀 搀愀猀 倀攀爀氀ⴀ䌀漀洀瀀愀琀椀戀氀攀 刀攀最甀氀愀爀 䔀砀瀀爀攀猀猀椀漀渀猀 䴀漀搀甀氀攀 昀ﰀ爀 倀䠀倀Ⰰ 眀愀猀 瘀漀渀 搀攀椀渀攀爀 倀䠀倀ⴀ䬀漀渀昀椀最甀爀愀琀椀漀渀 愀渀猀挀栀攀椀渀攀渀搀 渀椀挀栀琀 甀渀琀攀爀猀琀ﰀ琀稀琀 眀椀爀搀⸀✀㬀ഀ਀ഀ਀⼀⼀ 吀栀愀琀✀猀 愀氀氀 䘀漀氀欀猀℀ഀ਀⼀⼀ 一愀 䜀漀琀琀 猀攀椀 䐀愀渀欀℀ഀ਀⼀⼀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀഀ਀ഀ਀㼀㸀嘀