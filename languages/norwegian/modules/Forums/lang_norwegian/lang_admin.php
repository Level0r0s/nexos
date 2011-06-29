<?php

/***************************************************************************
 *                            lang_admin.php [Norwegian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.2 2004/10/02 04:27:08 pitcher Exp $
 *
 ****************************************************************************/

$lang['General'] = "Generell Admin.";
$lang['Users'] = "Bruker Admin.";
$lang['Groups'] = "Gruppe Admin.";
$lang['Forums'] = "Forum Admin.";
$lang['Styles'] = "Stil Admin.";

$lang['Configuration'] = "Konfigurasjon";
$lang['Permissions'] = "Rettigheter";
$lang['Manage'] = "Administrer";
$lang['Disallow'] = "Forby Brukernavn";
$lang['Prune'] = "Sletting";
$lang['Mass_Email'] = "Gruppe Epost";
$lang['Ranks'] = "Rangering";
$lang['Smilies'] = "Smil";
$lang['Ban_Management'] = "Utesteng Oversikt";
$lang['Word_Censor'] = "Sensurer Ord";
$lang['Export'] = "Eksporter";
$lang['Create_new'] = "Opprett Emne";
$lang['Add_new'] = "Legg til";
$lang['Backup_DB'] = "Database Backup";
$lang['Restore_DB'] = "Gjennopprett Databasen";


//
// Index
//
$lang['Admin'] = "Administrasjon";
$lang['Not_admin'] = "Du har ikke rettigheter til å administrere dette forumet";
$lang['Welcome_phpBB'] = "Velkommen til phpBB";
$lang['Admin_intro'] = "Takk for at du valgte phpBB. På denne siden finner du enkel statestikk for ditt forum. Du kommer tilbake til denne siden ved å klikke på <u>Admin Hovedsiden</u> i venstre ramme. Klikk på phpBB logoen hvis du ønsker å gå til forumets hovedside. Resten av linkene i venstre ramme leder til de forskjellige kontroll funksjonene for forumet. Hvert enkelt kontrollpanel har forklaringer for hvordan det skal brukes.";
$lang['Main_index'] = "Forum Hovedsiden";
$lang['Forum_stats'] = "Forum Statistikk";
$lang['Admin_Index'] = "Admin Hovedsiden";
$lang['Preview_forum'] = "Forhåndsvis Forumet";

$lang['Click_return_admin_index'] = "Klikk %sHer%s for å returnere til Admin Hovedsiden";

$lang['Statistic'] = "Statistikk";
$lang['Number_posts'] = "Antall Innlegg";
$lang['Posts_per_day'] = "Innlegg pr. Dag";
$lang['Number_topics'] = "Antall Emner";
$lang['Topics_per_day'] = "Emner pr. Dag";
$lang['Number_users'] = "Antall Brukere";
$lang['Users_per_day'] = "Brukere pr. Dag";
$lang['Board_started'] = "Forum Opprettet";
$lang['Avatar_dir_size'] = "Avatar Katalog Størrelse";
$lang['Database_size'] = "Database Størrelse";
$lang['Gzip_compression'] ="Gzip Kompresjon";
$lang['Not_available'] = "Ikke Tilgjengelig";

$lang['ON'] = "På"; // This is for GZip compression
$lang['OFF'] = "Av";


//
// DB Utils
//
$lang['Database_Utilities'] = "Database Verktøy";

$lang['Restore'] = "Gjennopprett";
$lang['Backup'] = "Backup";
$lang['Restore_explain'] = "Her kan du gjenopprette alle phpBB tabellene fra en lagret backup fil. Dersom serveren din støtter det kan du laste opp en gzip komprimert fil og den vil automatisk bli pakket ut. <b>ADVARSEL</b> Dette vil overskrive alle eksisterende data! Gjenopprettelsen kan ta lang tid, ikke gå vekk fra denne siden før gjenopprettingen er fullført.";
$lang['Backup_explain'] = "Her kan du ta backup av phpBB relaterte data. Hvis du ønsker å ta backup av ekstra tabeller i samme database kan du gjøre det ved å skrive inn navnene, komma separert, i feltet Tilleggs-Tabeller. Dersom serveren din har støtte for det kan du også gzip komprimere filen før du laster den ned.";

$lang['Backup_options'] = "Backup Valg";
$lang['Start_backup'] = "Start Backup";
$lang['Full_backup'] = "Komplett Backup";
$lang['Structure_backup'] = "Struktur Backup";
$lang['Data_backup'] = "Data Backup";
$lang['Additional_tables'] = "Tilleggs-Tabeller";
$lang['Gzip_compress'] = "Gzip Komprimer Filen";
$lang['Select_file'] = "Velg en Fil";
$lang['Start_Restore'] = "Start Gjennoppretting";

$lang['Restore_success'] = "Databasen er gjennopprettet.<br /><br />Forumet er nå gjennopprettet slik det var når backup'en ble tatt.";
$lang['Backup_download'] = "Nedlastningen begynner, vent til den begynner.";
$lang['Backups_not_supported'] = "Beklager, database backup er ikke tilgjengelig for din database på dette tidspunktet";

$lang['Restore_Error_uploading'] = "Det oppstod en feil under opplastningen av filen";
$lang['Restore_Error_filename'] = "Det er et problem med filnavnet, prøv en annen fil";
$lang['Restore_Error_decompress'] = "Serveren kan ikke pakke ut filen, last opp en ren-tekst versjon av filen.";
$lang['Restore_Error_no_file'] = "Det ble ikke lastet opp noen fil";


//
// Auth pages
//
$lang['Select_a_User'] = "Velg Medlem";
$lang['Select_a_Group'] = "Velg Gruppe";
$lang['Select_a_Forum'] = "Velg Forum";
$lang['Auth_Control_User'] = "Medlems-Rettigheter Kontrollpanel";
$lang['Auth_Control_Group'] = "Gruppe-Rettigheter Kontrollpanel";
$lang['Auth_Control_Forum'] = "Forum-Rettigheter Kontrollpanel";
$lang['Look_up_User'] = "Finn Medlem";
$lang['Look_up_Group'] = "Finn Gruppe";
$lang['Look_up_Forum'] = "Finn Forum";

$lang['Group_auth_explain'] = "Her kan du forandre rettigheter og moderator status som er deligert til den enkelte bruker gruppen. Husk at selv om du forandrer gruppe rettigheter vil enkeltbruker rettigheter fortsatt tillate brukeren tilgang til forumene, etc. Du vil bli varslet hvis dette er tilfelle.";
$lang['User_auth_explain'] = "Her kan du forandre rettigheter og moderator status som er deligert til den enkelte bruker gruppen. Husk at selv om du forandrer gruppe rettigheter vil enkeltbruker rettigheter fortsatt tillate brukeren tilgang til forumene, etc. Du vil bli varslet hvis dette er tilfelle.";
$lang['Forum_auth_explain'] = "Her kan du forandre rettighetsnivåer for hvert enkelt forum. Du vil ha en enkel og en mer avansert måte å gjøre dette på, avansert tilbyr større kontroll for hver enkelt forum operasjon. Husk at hvis du forandrer rettighetsnivået til et forum, vil dette påvirke hvilke brukere som kan utføre ulike operasjoner i det.";

$lang['Simple_mode'] = "Enkel Modus";
$lang['Advanced_mode'] = "Avansert Modus";
$lang['Moderator_status'] = "Moderator Status";

$lang['Allowed_Access'] = "Tillat Tilgang";
$lang['Disallowed_Access'] = "Nekt Tilgang";
$lang['Is_Moderator'] = "Er Moderator";
$lang['Not_Moderator'] = "Er ikke Moderator";

$lang['Conflict_warning'] = "Autorisasjons-Konflikt Advarsel";
$lang['Conflict_access_userauth'] = "Denne brukeren har fortsatt tilgangsrettigheter til dette forumet via gruppe medlemsskap. Du vil kanskje forandre på grupperettighetene eller slette denne brukergruppen for å sikre deg at de ikke har tilgangsrettigheter. Gruppens rettigheter (og forumene involvert) vises nedenfor.";
$lang['Conflict_mod_userauth'] = "Denne brukeren har fortsatt moderator rettigheter til dette forumet via gruppe medlemsskap. Du vil kanskje forandre på grupperettighetene eller slette denne brukergruppen for å sikre deg at de ikke har moderator rettigheter. Gruppens rettigheter (og forumene involvert) vises nedenfor.";

$lang['Conflict_access_groupauth'] = "Følgende bruker (eller brukere) har fortsatt tilgangsrettigheter til dette forumet via deres bruker rettighets innstillinger. Du vil kanskje forandre bruker rettighetene for å sikre deg at de ikke har tilgangsrettigheter. Brukerens rettigheter (og forumene involvert) vises nedenfor.";
$lang['Conflict_mod_groupauth'] = "Følgende bruker (eller brukere) har fortsatt moderator rettigheter til dette forumet via deres bruker rettighets innstillinger. Du vil kanskje forandre bruker rettighetene for å sikre deg at de ikke har moderator rettigheter. Brukerens rettigheter (og forumene involvert) vises nedenfor.";

$lang['Public'] = "Offentlig";
$lang['Private'] = "Privat";
$lang['Registered'] = "Registrert";
$lang['Administrators'] = "Administratorer";
$lang['Hidden'] = "Skjult";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "ALLE";
$lang['Forum_REG'] = "REG";
$lang['Forum_PRIVATE'] = "PRIVAT";
$lang['Forum_MOD'] = "MOD";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Vis";
$lang['Read'] = "Lese";
$lang['Post'] = "Poste";
$lang['Reply'] = "Svare";
$lang['Edit'] = "Endre";
$lang['Delete'] = "Slette";
$lang['Sticky'] = "Prioritet";
$lang['Announce'] = "Annonsering";
$lang['Vote'] = "Stemme";
$lang['Pollcreate'] = "Lage Avstemning";

$lang['Permissions'] = "Rettigheter";
$lang['Simple_Permission'] = "Enkle Rettigheter";

$lang['User_Level'] = "Rettighetsnivå";
$lang['Auth_User'] = "Medlem";
$lang['Auth_Admin'] = "Administrator";
$lang['Group_memberships'] = "Medlem av gruppe(ne)";
$lang['Usergroup_members'] = "Denne gruppen har følgende medlemmer*";

$lang['Forum_auth_updated'] = "Forum rettighetene er oppdatert";
$lang['User_auth_updated'] = "Medlems rettighetene er oppdatert";
$lang['Group_auth_updated'] = "Gruppe rettighetene er oppdatert";

$lang['Auth_updated'] = "Rettighetene er oppdatert";
$lang['Click_return_userauth'] = "Klikk %sHer%s for å gå tilbake til Medlemsrettighetene";
$lang['Click_return_groupauth'] = "Klikk %sHer%s for å gå tilbake til Grupperettighetene";
$lang['Click_return_forumauth'] = "Klikk %sHer%s for å gå tilbake til Forumrettighetene";


//
// Banning
//
$lang['Ban_control'] = "Utestengelse";
$lang['Ban_explain'] = "Her kan du kontrollere utestengelse av brukere. Du kan oppnå dette ved å utestenge enten eller begge av en spesifisert bruker eller en individuell rekke av IP adresser eller domene adresser. Disse metodene utelukker en bruker i å nå hovedsiden til forumet ditt. For å utestenge en bruker i å registrere seg under et annet brukernavn kan du også spesifisere en utestengt epost adresse. Husk at utestengelse av en epost adresse alene ikke vil forhindre brukeren i å logge seg på eller skrive innlegg i forumet ditt, du burde bruke en av de to første metodene for å oppnå dette.";
$lang['Ban_explain_warn'] = "Husk at ved å skrive inn en rekke av IP adresser resulterer i at alle adressene mellom start og slutt vil bli ført opp i utestengt listen. Forsøk vil bli gjort for å minimere antallet av adresser som blir lagret i databasen ved å introdusere wildcards automatisk der hvor det passer. Hvis du virkelig må skrive inn en rekke med adresser, prøv å lag den minst mulig eller med fordel skriv inn spesifiserte adresser.";

$lang['Select_username'] = "Velg Medlem";
$lang['Select_ip'] = "Velg IP";
$lang['Select_email'] = "Velg Epost Adresse";

$lang['Ban_username'] = "Utesteng en eller flere brukernavn";
$lang['Ban_username_explain'] = "Du kan utestenge en eller flere brukernavn vha. riktig mus og tastatur kombinasjon.";

$lang['Ban_IP'] = "Utesteng en eller flere IP adresser eller domener";
$lang['IP_hostname'] = "IP adresse eller domener";
$lang['Ban_IP_explain'] = "Du kan angi flere IP adresser eller domener ved å skille dem med komma (,). Du kan også angi en hel IP serie ved bruke bindestrek (-) mellom første og siste IP adresse, og du kan bruke wildcard (*).";

$lang['Ban_email'] = "Utesteng en eller flere epost adresser";
$lang['Ban_email_explain'] = "Du kan angi flere epost adresser ved å skille dem med komma (,), og du kan bruke wildcard (*) f.eks. *@hotmail.com";

$lang['Unban_username'] = "Opphev utestengelsen for en eller flere brukernavn";
$lang['Unban_username_explain'] = "Du kan oppheve utestengelsen for flere brukernavn samtidig ved å bruke passende kombinasjon av musepeker og tastatur for din datamaskin og nettleser";

$lang['Unban_IP'] = "Opphev utestengelsen for en eller flere IP adresser";
$lang['Unban_IP_explain'] = "Du kan oppheve utestengelsen for flere IP adresser samtidig ved å bruke passende kombinasjon av musepeker og tastatur for din datamaskin og nettleser";

$lang['Unban_email'] = "Opphev utestengelsen for en eller flere epost adresser";
$lang['Unban_email_explain'] = "Du kan oppheve utestengelsen for flere epost adresser samtidig ved å bruke passende kombinasjon av musepeker og tastatur for din datamaskin og nettleser";

$lang['No_banned_users'] = "Ingen utestengte brukernavn";
$lang['No_banned_ip'] = "Ingen utestengte IP adresser";
$lang['No_banned_email'] = "Ingen utestengte epost adresser";

$lang['Ban_update_sucessful'] = "Utestengt listen er oppdatert";
$lang['Click_return_banadmin'] = "Klikk %sHer%s for å returnere til Utesteng Oversikt";


//
// Configuration
//
$lang['General_Config'] = "Generell Konfigurasjon";
$lang['Config_explain'] = "Feltene under vil tillate deg i å tilpasse alle de generelle konfigurasjons mulighetene. For Bruker og Forum konfigurasjon bruk relaterte linker i den venstre rammen.";

$lang['Click_return_config'] = "Klikk %sHer%s for å returnere til Generell Konfigurasjon";

$lang['General_settings'] = "Generelle Forum Innstillinger";
$lang['Server_name'] = "Domene navn";
$lang['Server_name_explain'] = "Domene navnet dette forumet ligger under.";
$lang['Script_path'] = "Sti";
$lang['Script_path_explain'] = "Sti, relativ i forhold til domenet, til phpBB2 katalogen.";
$lang['Server_port'] = "Server Port";
$lang['Server_port_explain'] = "Porten servern kjører på, du skal bare endre denne dersom serveren kjører på en annen port.";
//$lang['Site_name'] = "Nettsidens Navn";
//$lang['Site_desc'] = "Beskrivelse av Nettsiden";
//$lang['Board_disable'] = "Slå Av Forumet";
//$lang['Board_disable_explain'] = "Dette vil gjøre forumet utilgjengelig for brukerne. Ikke logg ut når du slår av forumet, du vil ikke kunne logge inn igjen!";
//$lang['Acct_activation'] = "Aktiver Konto Aktivering";
//$lang['Acc_None'] = "Ingen"; // These three entries are the type of activation
//$lang['Acc_User'] = "Bruker";
//$lang['Acc_Admin'] = "Administrator";

$lang['Abilities_settings'] = "Bruker og Forum Enkle Innstillinger";
$lang['Max_poll_options'] = "Maksimalt Antall Valg På Avstemninger.";
$lang['Flood_Interval'] = "Oversvøm Intervall";
$lang['Flood_Interval_explain'] = "Antall sekunder en bruker må vente mellom innlegg";
$lang['Board_email_form'] = "Bruker Epost via Forumet";
$lang['Board_email_form_explain'] = "Brukere sender epost til hverandre via dette forumet";
$lang['Topics_per_page'] = "Emner pr Side";
$lang['Posts_per_page'] = "Innlegg pr Side";
$lang['Hot_threshold'] = "Antall svar for at emnene skal bli \"populære\"";
$lang['Default_style'] = "Standard Stil";
$lang['Override_style'] = "Overstyr Brukernes Valg av Stil";
$lang['Override_style_explain'] = "Overstyrer brukernes egne valg av stil, og viser forumene med standard stilen.";
//$lang['Default_language'] = "Standard Språk";
$lang['Date_format'] = "Dato Format";
$lang['System_timezone'] = "Systemets Tidssone";
$lang['Enable_gzip'] = "Aktivèr GZip Komprimering";
$lang['Enable_prune'] = "Aktivèr Forum Sletting";
$lang['Allow_HTML'] = "Tillat HTML";
$lang['Allow_BBCode'] = "Tillat BBCode";
$lang['Allowed_tags'] = "Lovlige HTML Tagger";
$lang['Allowed_tags_explain'] = "Skill tagger med komma";
$lang['Allow_smilies'] = "Tillat Smil";
//$lang['Smilies_path'] = "Sti til Smil-Katalogen";
//$lang['Smilies_path_explain'] = "Sti under phpBB rot katalogen, f.eks. images/smiles (eller images/smil)";
$lang['Allow_sig'] = "Tillat Signaturer";
$lang['Max_sig_length'] = "Maksimal Signatur Lengde";
$lang['Max_sig_length_explain'] = "Maksimalt antall tegn i brukernes signaturer.";
$lang['Allow_name_change'] = "Tillat Endringer i Brukernavn";

$lang['Avatar_settings'] = "Avatar Innstillinger";
$lang['Allow_local'] = "Aktivèr Avatar Galleri";
$lang['Allow_remote'] = "Tillat Eksterne Avatars";
$lang['Allow_remote_explain'] = "Avatars linket fra en annen nettside";
$lang['Allow_upload'] = "Tillat Opplasting av Avatar";
$lang['Max_filesize'] = "Maksimal Avatar Filstørrelse";
$lang['Max_filesize_explain'] = "For opplastede avatar filer";
$lang['Max_avatar_size'] = "Maksimal Avatar Størrelse";
$lang['Max_avatar_size_explain'] = "(Høyde x Bredde i piksler)";
$lang['Avatar_storage_path'] = "Avatar Lagrings Sti";
$lang['Avatar_storage_path_explain'] = "Sti under phpBB rot katalogen, f.eks.  images/avatars";
$lang['Avatar_gallery_path'] = "Avatar Galleri Sti";
$lang['Avatar_gallery_path_explain'] = "Sti under phpBB rot katalogen, for forumets egne avatars, f.eks. images/avatars/gallery";

$lang['COPPA_settings'] = "COPPA Innstillinger";
$lang['COPPA_fax'] = "COPPA Faksnummer";
$lang['COPPA_mail'] = "COPPA Postadresse";
$lang['COPPA_mail_explain'] = "Dette er postadressen som foreldre sender COPPA registreringsskjemaet til.";

$lang['Email_settings'] = "Epost Innstillinger";
$lang['Admin_email'] = "Administrator Epost Adresse";
$lang['Email_sig'] = "Epost Signatur";
$lang['Email_sig_explain'] = "Denne signaturen blir lagt på all epost som sendes fra forumet.";
$lang['Use_SMTP'] = "Bruk en SMTP Server";
$lang['Use_SMTP_explain'] = "Marker Ja hvis du ønsker eller må sende epost via en SMTP server isteden for den lokale epostfunksjonaliteten.";
$lang['SMTP_server'] = "SMTP Server Adresse";
$lang['SMTP_username'] = "SMTP Brukernavn";
$lang['SMTP_username_explain'] = "Brukernavn fylles ut bare dersom SMTP serveren krever det.";
$lang['SMTP_password'] = "SMTP Passord";
$lang['SMTP_password_explain'] = "Passord fylles ut bare dersom SMTP serveren krever det.";

$lang['Disable_privmsg'] = "Private Meldinger";
$lang['Inbox_limits'] = "Maks Meldinger i Innboks";
$lang['Sentbox_limits'] = "Maks Meldinger i Sendte Meldinger";
$lang['Savebox_limits'] = "Maks Meldinger i Lagrede Meldinger";

$lang['Cookie_settings'] = "Cookie Innstillinger";
$lang['Cookie_settings_explain'] = "Disse kontrollerer hvordan cookien som blir sendt til nettlesere blir definert. I de fleste tilfeller vil standard innstillingene være tilsrekkelig. Hvis du trenger å forandre disse gjør det med forsiktighet, feilaktige innstillinger kan forhindre brukere i å logge inn.";
$lang['Cookie_name'] = "Cookie Navn";
$lang['Cookie_domain'] = "Cookie Domene";
$lang['Cookie_path'] = "Cookie Sti";
$lang['Session_length'] = "Session Tid [ sekunder ]";
$lang['Cookie_secure'] = "Cookie Sikker [ https ]";


//
// Forum Management
//
$lang['Forum_admin'] = "Forum Administrasjon";
$lang['Forum_admin_explain'] = "Fra dette panelet kan du opprette, slette, endre, flytte og resynkronisere kategorier og forumer";
$lang['Edit_forum'] = "Endre Forum";
$lang['Create_forum'] = "Opprett Nytt Forum";
$lang['Create_category'] = "Opprett Ny Kategori";
$lang['Remove'] = "Slett";
$lang['Action'] = "Utfør";
$lang['Update_order'] = "Oppdater Rekkefølge";
$lang['Config_updated'] = "Forum konfigurasjonen er nå oppdatert";
$lang['Edit'] = "Endre";
$lang['Delete'] = "Slett";
$lang['Move_up'] = "Flytt Opp";
$lang['Move_down'] = "Flytt Ned";
$lang['Resync'] = "Synkroniser";
$lang['No_mode'] = "Ingen modus var satt";
$lang['Forum_edit_delete_explain'] = "Feltene under vil tillate deg å konfigurere generelle forum valg. For Bruker og Forum konfigurasjon bruk relaterte linker i rammen til venstre";

$lang['Move_contents'] = "Flytt Alt Innhold";
$lang['Forum_delete'] = "Slett Forum";
$lang['Forum_delete_explain'] = "Feltene under vil tillate deg å slette et forum (eller kategori) og velge hvor du ønsker å plassere alle emnene (eller forumene) det inneholdt.";

$lang['Forum_settings'] = "Generalle Forum-Innstillinger";
$lang['Forum_name'] = "Forum Navn";
$lang['Forum_desc'] = "Beskrivelse";
$lang['Forum_status'] = "Forum Status";
$lang['Forum_pruning'] = "Auto-Sletting";

$lang['prune_freq'] = 'Sjekk for emne alder hver';
$lang['prune_days'] = "Slett emner som ikke har blitt svart i";
$lang['Set_prune_data'] = "Du har aktivert auto-sletting for dette forumet men har ikke satt en frekvens eller antall dager til å slette. Vennligst returner og gjør så";

$lang['Move_and_Delete'] = "Flytt og Slett";

$lang['Delete_all_posts'] = "Slett alle meldinger";
$lang['Nowhere_to_move'] = "Ingen steder å flytte til";

$lang['Edit_Category'] = "Endre Kategori";
$lang['Edit_Category_explain'] = "Her kan du endre kategorienes navn.";

$lang['Forums_updated'] = "Forum og kategori informasjonen er oppdatert";

$lang['Must_delete_forums'] = "Du må slette alle forumene før du kan slette denne kategorien";

$lang['Click_return_forumadmin'] = "Klikk %sHer%s for å gå tilbake til Forum Administrasjon";


//
// Smiley Management
//
$lang['smiley_title'] = "Smil Kontrollpanel";
$lang['smile_desc'] = "Her kan du opprette, slette og endre smil som brukerne dine kan bruke i deres innlegg og private meldinger.";

$lang['smiley_config'] = "Smil Konfigurasjon";
$lang['smiley_code'] = "Smil Kode";
$lang['smiley_url'] = "Smil Bildefil";
$lang['smiley_emot'] = "Smil Følelse";
$lang['smile_add'] = "Legg til Nytt Smil";
$lang['Smile'] = "Smil";
$lang['Emotion'] = "Følelse";

$lang['Select_pak'] = "Velg pakke (.pak) fil";
$lang['replace_existing'] = "Erstatt eksisterende smil";
$lang['keep_existing'] = "Behold eksisterende smil";
$lang['smiley_import_inst'] = "Du burde pakke ut smil pakken (zip) for så å laste opp alle filene til den passende smil (smiles) katalogen for innstallasjon. Deretter velg korrekt informasjon i feltene under for å importere smil pakken.";
$lang['smiley_import'] = "Importer Smil Pakke";
$lang['choose_smile_pak'] = "Velg Smil-pakke .pak fil";
$lang['import'] = "Importer Smil";
$lang['smile_conflicts'] = "Hva burde gjøres hvis det blir konflikter";
$lang['del_existing_smileys'] = "Slett eksisterende smil før import";
$lang['import_smile_pack'] = "Importer Smil Pakke";
$lang['export_smile_pack'] = "Lag Smil Pakke";
$lang['export_smiles'] = "For å lage en smil pakke fra dine eksisterende installerte smil, klikk %sHer%s for å laste ned smiles.pak filen. Navngi denne filen etter ønske men husk å beholde .pak endelsen. Deretter lag en zip fil som inneholder alle smil bildene pluss denne .pak konfigurasjons filen.";

$lang['smiley_add_success'] = "Smilet er nå lagret";
$lang['smiley_edit_success'] = "Smilet er nå oppdatert";
$lang['smiley_import_success'] = "Smil Pakken er nå importert!";
$lang['smiley_del_success'] = "Smilet er nå slettet";
$lang['Click_return_smileadmin'] = "Klikk %sHer%s for å returnere til Smil Administrasjon";


//
// User Management
//
$lang['User_admin'] = "Bruker Administrasjon";
$lang['User_admin_explain'] = "Her kan du forandre dine brukeres informasjon og noen spesifike valg. For å endre brukernes rettigheter vennligst bruk bruker og gruppe rettighets systemet.";

$lang['Look_up_user'] = "Vis Bruker";

$lang['Admin_user_fail'] = "Kunne ikke oppdatere brukerens profil.";
$lang['Admin_user_updated'] = "Brukerens profil er nå oppdatert.";
$lang['Click_return_useradmin'] = "Klikk %sHer%s for å returnere til Bruker Administrasjon";

$lang['User_delete'] = "Slett denne brukeren";
$lang['User_delete_explain'] = "Klikk her for å slette denne brukeren, dette kan ikke omgjøres.";
$lang['User_deleted'] = "Brukeren er slettet.";

$lang['User_status'] = "Brukeren er aktiv";
$lang['User_allowpm'] = "Kan Sende Private Meldinger";
$lang['User_allowavatar'] = "Kan Vise Avatar";

$lang['Admin_avatar_explain'] = "Her kan du se og slette brukerens avatar";

$lang['User_special'] = "Spesielle Kun-Admin Felt";
$lang['User_special_explain'] = "Disse feltene kan ikke endres av brukerne. Her kan du sette deres status og andre valg som ikke blir gitt til brukere.";


//
// Group Management
//
$lang['Group_administration'] = "Gruppe Administrasjon";
$lang['Group_admin_explain'] = "Fra dette panelet kan du administrere alle dine brukergrupper, du kan; slette, opprette og endre eksisterende grupper. Du kan velge moderatorer, åpne/stenge gruppe status og sette gruppenavn og beskrivelse.";
$lang['Error_updating_groups'] = "Det oppstod en feil med oppdateringen av gruppene";
$lang['Updated_group'] = "Gruppen er nå oppdatert";
$lang['Added_new_group'] = "En ny gruppe er nå opprettet";
$lang['Deleted_group'] = "Gruppen er nå slettet";
$lang['New_group'] = "Opprett en Ny Gruppe";
$lang['Edit_group'] = "Endre Gruppe";
$lang['group_name'] = "Gruppe Navn";
$lang['group_description'] = "Gruppe Beskrivelse";
$lang['group_moderator'] = "Gruppe Moderator";
$lang['group_status'] = "Gruppe Status";
$lang['group_open'] = "Åpen Gruppe";
$lang['group_closed'] = "Lukket Gruppe";
$lang['group_hidden'] = "Skjult Gruppe";
$lang['group_delete'] = "Slett Gruppen";
$lang['group_delete_check'] = "Slett denne gruppen";
$lang['submit_group_changes'] = "OK";
$lang['reset_group_changes'] = "Angre";
$lang['No_group_name'] = "Du må spesifisere et navn for denne gruppen";
$lang['No_group_moderator'] = "Du må spesifisere en moderator for denne gruppen";
$lang['No_group_mode'] = "Du må spesifisere om gruppen skal være åpen eller stengt";
$lang['delete_group_moderator'] = "Slett den gamle gruppe moderatoren?";
$lang['delete_moderator_explain'] = "Hvis du forandrer gruppe moderatoren, merk denne boksen for å slette den gamle moderatoren fra gruppen. Ellers, ikke merk den, og brukeren vil bli et vanlig medlem av gruppen.";
$lang['Click_return_groupsadmin'] = "Klikk %sHer%s for å returnere til Gruppe Administrasjon.";
$lang['Select_group'] = "Velg Gruppe";
$lang['Look_up_group'] = "Finn Gruppe";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Forum Sletting";
$lang['Forum_Prune_explain'] = "Dette vil slette alle emner hvor det ikke har blitt postet innlegg innen det antall dager som du velger. Hvis du ikke skriver inn et nummer så vil alle emnene bli slettet. Det vil ikke slette emner som inneholder aktive avstemninger eller annonseringer. Disse emnene må du slette manuelt.";
$lang['Do_Prune'] = "Utfør Slettingen";
$lang['All_Forums'] = "Alle Forumene";
$lang['Prune_topics_not_posted'] = "Slett emner uten innlegg i dette antall dager";
$lang['Topics_pruned'] = "Emnene er slettet";
$lang['Posts_pruned'] = "Innleggene er slettet";
$lang['Prune_success'] = "Slettingen er gjennomført";


//
// Word censor
//
$lang['Words_title'] = "Ord Sensur Administrasjon";
$lang['Words_explain'] = "Fra dette kontrollpanelet kan du opprette, endre og slette ord som vil bli automatisk sensurert i forumene dine. I tillegg vil folk ikke kunne registrere seg med brukernavn som inneholder disse ordene. Wildcards (*) blir akseptert i ord feltet, f.eks. *ord* vil passe til bordet, ord* vil passe til ordet, *ord vil passe til bord.";
$lang['Word'] = "Ord";
$lang['Edit_word_censor'] = "Ord Sensur";
$lang['Replacement'] = "Erstattning";
$lang['Add_new_word'] = "Legg til et Nytt Ord";
$lang['Update_word'] = "Oppdater Sensurlisten";

$lang['Must_enter_word'] = "Du må skrive inn et ord som dets erstattning";
$lang['No_word_selected'] = "Ingen ord er valgt for erstattning";

$lang['Word_updated'] = "Den valgte ord erstattningen er nå oppdatert";
$lang['Word_added'] = "Den valgte ord erstattningen er nå opprettet";
$lang['Word_removed'] = "Den valgte ord erstattningen er nå slettet";

$lang['Click_return_wordadmin'] = "Klikk %sHer%s for å returnere til Ord Sensur Administrasjon";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Her kan du sende en epost melding til enten alle dine brukere, eller alle brukerne i en gruppe. For å gjøre dette, vil en epost bli sendt ut til administratorens epost adresse, med en blind carbon kopi som blir sendt til alle mottakerene. Hvis du sender en epost til en stor gruppe av mennesker vennligst ha tålmodighet etter at du har trykket send, og ikke stopp siden mens den jobber. Det er normalt ved gruppe epost at det tar lang tid, du vil bli varslet når sendingen er fullført.";
$lang['Compose'] = "Ny Melding";

$lang['Recipients'] = "Mottakere";
$lang['All_users'] = "Alle Brukere";

$lang['Email_successfull'] = "Meldingen er sendt";
$lang['Click_return_massemail'] = "Klikk %sHer%s for å returnere til Gruppe Epost siden";


//
// Ranks admin
//
$lang['Ranks_title'] = "Rang Administrasjon";
$lang['Ranks_explain'] = "Ved å bruke feltene under kan du opprette, endre, se og slette rangeringer. Du kan også opprette unike rangeringer som kan bli lagt til en bruker via bruker administrasjonen";

$lang['Add_new_rank'] = "Opprett Ny Rang";

$lang['Rank_title'] = "Rang Tittel";
$lang['Rank_special'] = "Sett som Spesiell Rang";
$lang['Rank_minimum'] = "Minimum Innlegg";
$lang['Rank_maximum'] = "Maksimum Innlegg";
$lang['Rank_image'] = "Rang Bilde (Relativ til phpBB2 rot sti)";
$lang['Rank_image_explain'] = "Bruk denne til å definere et lite bilde assosiert til rangen";

$lang['Must_select_rank'] = "Du må velge en rang";
$lang['No_assigned_rank'] = "Ingen spesiell rang er tildelt";

$lang['Rank_updated'] = "Rangen er nå oppdatert";
$lang['Rank_added'] = "Rangen er nå opprettet";
$lang['Rank_removed'] = "Rangen er nå slettet";

$lang['Click_return_rankadmin'] = "Klikk %sHer%s for å returnere til Rang Administrasjon";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Forby Brukernavn Administrasjon";
$lang['Disallow_explain'] = "Her kan du forby uønskede brukernavn, hvis et navn er i bruk må du slette det før du kan forby det.";

$lang['Delete_disallow'] = "Slett";
$lang['Delete_disallow_title'] = "Slett et Forbudt Brukernavn";
$lang['Delete_disallow_explain'] = "Du kan fjerne et forbudt brukernavn ved å velge brukernavnet fra denne listen og trykke slett";

$lang['Add_disallow'] = "Legg Til";
$lang['Add_disallow_title'] = "Forby et Brukernavn";
$lang['Add_disallow_explain'] = "Du kan forby et brukernavn ved å bruke wildcard tegnet * til å passe alle tegn";

$lang['No_disallowed'] = "Det er ingen forbudte brukernavn";

$lang['Disallowed_deleted'] = "Brukernavnet er slettet fra listen over forbudte brukernavn";
$lang['Disallow_successful'] = "Brukernavnet er lagt til listen over forbudte brukernavn";
$lang['Disallowed_already'] = "Navnet du skrev inn kunne ikke bli forbudt. Enten eksisterer navnet allerede i listen, navnet eksisterer i ord sensur listen, eller det finnes et likt brukernavn";

$lang['Click_return_disallowadmin'] = "Klikk %sHer%s for å returnere til Forby Brukernavn Administrasjon";


//
// Styles Admin
//
$lang['Styles_admin'] = "Stil Administrasjon";
$lang['Styles_explain'] = "Her kan du opprette, slette og endre stiler (templates og emne) som er tilgjengelig for dine brukere";
$lang['Styles_addnew_explain'] = "Listen nedenfor inneholder alle emnene som er tilgjengelig for eksisterende templates som du har. Oppføringene i denne listen har enda ikke blitt installert i phpBB databasen. For å innstallere et emne klikk på installer linken ved siden av en oppføring";

$lang['Select_template'] = "Velg en Template";

$lang['Style'] = "Stil";
$lang['Template'] = "Template";
$lang['Install'] = "Installer";
$lang['Download'] = "Last Ned";

$lang['Edit_theme'] = "Endre Emne";
$lang['Edit_theme_explain'] = "Nedenfor kan du endre innstillingene for det valgte emnet";

$lang['Create_theme'] = "Opprett Emne";
$lang['Create_theme_explain'] = "Nedenfor kan du opprette et nytt emne for en valgt template. Når du skriver inn farger (bruk hexadesimaler) må du ikke inkludere det første tegnet #, m.a.o. CCCCCC er lov, #CCCCCC er ikke lov.";

$lang['Export_themes'] = "Eksporter Emne";
$lang['Export_explain'] = "Her kan du eksportere emnets data for en valgt template. Velg templaten fra listen under og scriptet vil lage emne konfigurasjonsfilen og prøve å lagre den i den valgte template katalogen. Hvis den ikke klarer å lagre filen selv vil den gi deg muligheten til å laste den ned. For at scriptet skal kunne lagre filen må du gi skriverettigheter til serveren for den valgte katalogen. For mer informasjon om dette se i phpBB 2 bruker guiden.";

$lang['Theme_installed'] = "Det valgte emnet er installert";
$lang['Style_removed'] = "Den valgte stilen er blitt slettet fra databasen. For å slette denne stilen fullstendig må du slette den fra templates katalogen.";
$lang['Theme_info_saved'] = "Emne informasjonen for den valgte templaten er blitt lagret. Du burde nå endre tilbake rettighetene for theme_info.cfg (og den valgte template katalogen) til read-only";
$lang['Theme_updated'] = "Det valgte emnet er blitt oppdatert. Du burde nå eksportere de nye emne innstillingene";
$lang['Theme_created'] = "Emnet er opprettet. Du burde nå eksportere emnet til emne konfigurasjonsfilen for lagring eller til bruk andre steder";

$lang['Confirm_delete_style'] = "Er du sikker på at du ønsker å slette denne stilen?";

$lang['Download_theme_cfg'] = "Eksportøren kunne ikke skrive emne informasjonsfilen. Klikk på knappen under for å laste ned denne filen. Når du har lastet ned filen kan du overføre den til katalogen som inneholder template filene. Du kan deretter pakke filene for distribusjon eller bruke dem andre steder hvis du ønsker.";
$lang['No_themes'] = "Templaten du valgte har ingen emne knyttet til seg. For å lage et nytt emne klikk på Opprett Emne i rammen til venstre";
$lang['No_template_dir'] = "Kunne ikke åpne template katalogen. Den kan være ulesbar for serveren eller at den ikke eksisterer";
$lang['Cannot_remove_style'] = "Du kan ikke flytte den valgte stilen fordi den er satt som standard i forumet. Du kan endre standard stilen og prøve igjen.";
$lang['Style_exists'] = "Stil navnet som du valgte finnes allerede, vennligst gå tilbake og velg et annet navn.";

$lang['Click_return_styleadmin'] = "Klikk %sHer%s for å gå tilbake til Stil Administrasjonen";

$lang['Theme_settings'] = "Emne Innstillinger";
$lang['Theme_element'] = "Emne Elementer";
$lang['Simple_name'] = "Enkelt Navn";
$lang['Value'] = "Verdi";
$lang['Save_Settings'] = "Lagre Innstillinger";

$lang['Stylesheet'] = "CSS Stylesheet";
$lang['Background_image'] = "Background Image";
$lang['Background_color'] = "Background Color";
$lang['Theme_name'] = "Emne Navn";
$lang['Link_color'] = "Link Color";
$lang['Text_color'] = "Text Color";
$lang['VLink_color'] = "Visited Link Color";
$lang['ALink_color'] = "Active Link Color";
$lang['HLink_color'] = "Hover Link Color";
$lang['Tr_color1'] = "Table Row Color 1";
$lang['Tr_color2'] = "Table Row Color 2";
$lang['Tr_color3'] = "Table Row Color 3";
$lang['Tr_class1'] = "Table Row Class 1";
$lang['Tr_class2'] = "Table Row Class 2";
$lang['Tr_class3'] = "Table Row Class 3";
$lang['Th_color1'] = "Table Header Color 1";
$lang['Th_color2'] = "Table Header Color 2";
$lang['Th_color3'] = "Table Header Color 3";
$lang['Th_class1'] = "Table Header Class 1";
$lang['Th_class2'] = "Table Header Class 2";
$lang['Th_class3'] = "Table Header Class 3";
$lang['Td_color1'] = "Table Cell Color 1";
$lang['Td_color2'] = "Table Cell Color 2";
$lang['Td_color3'] = "Table Cell Color 3";
$lang['Td_class1'] = "Table Cell Class 1";
$lang['Td_class2'] = "Table Cell Class 2";
$lang['Td_class3'] = "Table Cell Class 3";
$lang['fontface1'] = "Font Face 1";
$lang['fontface2'] = "Font Face 2";
$lang['fontface3'] = "Font Face 3";
$lang['fontsize1'] = "Font Size 1";
$lang['fontsize2'] = "Font Size 2";
$lang['fontsize3'] = "Font Size 3";
$lang['fontcolor1'] = "Font Color 1";
$lang['fontcolor2'] = "Font Color 2";
$lang['fontcolor3'] = "Font Color 3";
$lang['span_class1'] = "Span Class 1";
$lang['span_class2'] = "Span Class 2";
$lang['span_class3'] = "Span Class 3";
$lang['img_poll_size'] = "Avstemning Bilde Størrelse [px]";
$lang['img_pm_size'] = "Privat Melding Status Størrelse [px]";


//
// Install Process
//
$lang['Welcome_install'] = "Velkommen til phpBB 2 Installasjon";
$lang['Initial_config'] = "Standard Konfigurasjon";
$lang['DB_config'] = "Database Konfigurasjon";
$lang['Admin_config'] = "Admin Konfigurasjon";
$lang['continue_upgrade'] = "Når du har lastet ned din config fil til din lokale maskin kan du trykke på \"Fortsett Oppgradering\" knappen nedenfor for å fortsette oppgraderings prosessen. Vennligst vent med å laste opp config filen til oppgraderings prosessen er fullført.";
$lang['upgrade_submit'] = "Fortsett Oppgradering";

$lang['Installer_Error'] = "En feil har oppstått under installasjonen";
$lang['Previous_Install'] = "En tidligere installasjon har blitt oppdaget";
$lang['Install_db_error'] = "En feil har oppstått under oppdateringen av databasen";

$lang['Re_install'] = "Din tidligere installasjon er fortsatt aktiv. <br /><br />Hvis du vil re-installere phpBB 2 må du trykke på Ja knappen under. Vennligst vær oppmerksom på at hvis du gjør dette så vil alle eksisterende data bli slettet, ingen backups vil bli laget! Administrator brukernavnet og passordet som du har brukt for å logge deg inn på forumet vil bli laget på nytt etter re-installasjonen, ingen andre innstillinger vil bli beholdt. <br /><br />Tenk godt igjennom det før du trykker Ja!";

$lang['Inst_Step_0'] = "Takk for at du valgte phpBB 2. For å avslutte installasjonen vennligst fyll ut detaljene som blir etterspurt nedenfor. Vennligst noter at databasen som du installerer inn på må allerede eksistere. Hvis du installerer inn på en database som bruker ODBC, f.eks. MS Access må du først lage en DSN før du fortsetter.";

$lang['Start_Install'] = "Start Installasjon";
$lang['Finish_Install'] = "Fullfør Installasjon";

$lang['Default_lang'] = "Standard Forum Språk";
$lang['DB_Host'] = "Database Servernavn / db_host";
$lang['DB_Name'] = "Ditt Databasenavn / db_navn";
$lang['Database'] = "Din Database";
$lang['Install_lang'] = "Velg Installasjonsspråk";
$lang['dbms'] = "Database Type";
$lang['Table_Prefix'] = "Prefix for Database Tabellene";
$lang['Admin_Username'] = "Administrator Brukernavn";
$lang['Admin_Password'] = "Administrator Passord";
$lang['Admin_Password_confirm'] = "Administrator Passord [ Bekreft ]";

$lang['Inst_Step_2'] = "Ditt admin brukernavn er blitt laget. På dette tidspunktet er den grunnleggene installasjonen fullført. Du vil nå bli overført til en side hvor du kan administrere din nye installasjon. Vennligst sjekk Generell Konfigurasjon detaljene og gjør de nødvendige forandringene. Takk for at du valgte phpBB 2.";

$lang['Unwriteable_config'] = "Din config fil er uskrivbar. En kopi av config filen vil bli lastet ned til deg når du trykker på knappen under. Du må laste opp denne filen til den samme katalogen som phpBB 2. Når dette er gjort logger du deg inn som administrator ved å bruke brukernavnet og passordet som du oppgav tidligere under intallasjonen og besøk administrasjonspanelet (en link vil vises nederst på alle sidene når du har logget inn) for å sjekke den generelle konfigurasjonen. Takk for at du valgte phpBB 2.";
$lang['Download_config'] = "Last ned Config";

$lang['ftp_choose'] = "Velg Nedlastings Metode";
$lang['ftp_option'] = "<br />Siden FTP extensions er aktivert i denne versionen av PHP kan du bli gitt muligheten for først å automatisk prøve å ftp'e filen til rett sted.";
$lang['ftp_instructs'] = "Du har valgt å automatisk ftp'e filen til kontoen som inneholder phpBB 2. Vennligst skriv inn informasjonen nedenfor for å benytte deg av denne prosessen. Husk at FTP stien skal være den eksakte stien til din phpBB 2 installasjon akkurat som om du benytter ditt vanlige FTP program.";
$lang['ftp_info'] = "Skriv inn din FTP informasjon";
$lang['Attempt_ftp'] = "Overfør config.php til serveren vha. FTP";
$lang['Send_file'] = "Send config.php til meg, slik at jeg kan laste den opp manuelt vha. FTP";
$lang['ftp_path'] = "FTP sti til phpBB 2";
$lang['ftp_username'] = "Ditt FTP Brukernavn";
$lang['ftp_password'] = "Ditt FTP Passord";
$lang['Transfer_config'] = "Start Overførsel";
$lang['NoFTP_config'] = "Det gikk ikke å overføre config.php vha. FTP. Vennligst last ned config.php og FTP den til serveren manuelt."; 


$lang['Install'] = "Installer";
$lang['Upgrade'] = "Oppgrader";

$lang['Install_Method'] = "Velg Installasjons Metode";

$lang['Install_No_Ext'] = "PHP konfigurasjonen på din server støtter ikke den databasen du har valgt";

$lang['Install_No_PCRE'] = "phpBB2 krever at PHP er konfigurert med \"Perl Compatible Regular Expressions Module for PHP\", det tyder på at PHP på din server ikke er konfigurert med støtte for denne modulen.";

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Kontrollpanel';
$lang['Shadow_attachments'] = 'Skyggevedlegg';
$lang['Forbidden_extensions'] = 'Forbudte Filendelser';
$lang['Extension_control'] = 'Filendelsekontroll';
$lang['Extension_group_manage'] = 'Filendelse Gruppekontroll';
$lang['Special_categories'] = 'Spesial Kategorier';
$lang['Sync_attachments'] = 'Synkronisere Vedlegg';
$lang['Quota_limits'] = 'Kvote Begrensninger';

// Attachments -> Management
$lang['Attach_settings'] = 'Vedlegg Instillinger';
$lang['Manage_attachments_explain'] = 'Her kan du stille inn hovedinnstillingene for vedlegg. Hvis du trykker Test Instillinger knappen, vil systemet teste innstillingene slik at du kan være sikker på at alt virker som det skal. Hvis du har problemer med å laste opp filer, vennligst kjør denne testen, for å få en detaljert beskrivelse om hva feilen kan være.';
$lang['Attach_filesize_settings'] = 'Instillinger for filstørrelse i Vedlegg';
$lang['Attach_number_settings'] = 'Instillinger for Antall Vedlegg';
$lang['Attach_options_settings'] = 'Vedleggsvalg';

$lang['Upload_directory'] = 'Opplastingsfolder';
$lang['Upload_directory_explain'] = 'Skriv inn den relative stien fra din phpBB2 installasjon til folderen for opplasting av vedlegg. F.eks, skriv \'files\' hvis din phpBB2 Installasjon er under http://www.yourdomain.com/phpBB2 og opplastingsfolderen er under http://www.yourdomain.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Posteringsikon for vedlegg';
$lang['Attach_img_path_explain'] = 'Dette bildet vises vedsiden av vedleggslinken i meldinger. La feltet stå tomt hvis du ikke vil ha et ikon. Denne innstillingen vil bli overkjørt av Filendelsegruppe innstillingne.';
$lang['Attach_topic_icon'] = 'Emne ikon for vedlegg';
$lang['Attach_topic_icon_explain'] = 'Dette bildet vil bli vist før emne med posteringer med vedlegg. La feltet stå tomt hvis du ikke ønsker noen ikon.';
$lang['Attach_display_order'] = 'Visningsrekkefølge for Vedlegg';
$lang['Attach_display_order_explain'] = 'Her kan du velge å vise vedlegg i Meldinger/PMs i synkende (Nyeste vedlegg først) eller stigende Filtid rekkefølge (Eldste vedlegg først).';
$lang['Show_apcp'] = 'Vise det nye posterings kontrollpanelet';
$lang['Show_apcp_explain'] = 'Velg om du vil vise det nye posterings kontrollpanelet (ja) eller den gamle metoden med 2 bokser for postering av vedleggsfiler og edititering av posterte vedlegg (nei) på posteringssiden. Å forlklare hvordan det ser ut er vanskelig, derfor er det best at du prøver deg frem.';

$lang['Max_filesize_attach'] = 'Filstørrelse';
$lang['Max_filesize_attach_explain'] = 'Maks filstørrelse for vedlegg. 0 = \'ubegrenset\'. Denne innstillingen kan ikke overskride dine Server konfigurasjon. F.eks, hvis din php konfigurasjon bare tilater maks 2MB, kan ikke denne innstillingen overskride dette.';
$lang['Attach_quota'] = 'Vedleggskvote';
$lang['Attach_quota_explain'] = 'Maks diskplass ALLE vedlegg tilsammen skal bruke. 0 = \'ubegrenset\'.';
$lang['Max_filesize_pm'] = 'Maks Filstørrelse i Private Meldinger';
$lang['Max_filesize_pm_explain'] = 'Maks diskplass hver bruker kan bruke i Private Meldinger. 0 = \'ubegrenset\'.';
$lang['Default_quota_limit'] = 'Standard Kvote Begrensning';
$lang['Default_quota_limit_explain'] = 'Her kan du sette standard kvote begrensning som vil bli automatisk tildelt nye brukere og brukere som ikke har noe definert kvote begrensning. Valget \'Ingen Kvotebegrensning\' er for å ikke bruke kvotebegrensninger, istedenfor bruker standard innstillingene du har satt i dette panelet.';

$lang['Max_attachments'] = 'Maks Antall av Vedlegg';
$lang['Max_attachments_explain'] = 'Maks antall vedlegg tilatt i en melding.';
$lang['Max_attachments_pm'] = 'Maks antall vedlegg tilatt i Private Meldinger';
$lang['Max_attachments_pm_explain'] = 'Definer maks antall av vedlegg som er tilatt å legge ved i en privat melding.';

$lang['Disable_mod'] = 'Slå av Vedlegg';
$lang['Disable_mod_explain'] = 'Dette valget er i hovedsak her for å teste nye emner, den slår av alle vedleggsfunksjoner på boardet untatt i admin panelet.';
$lang['PM_Attachments'] = 'Tilate Vedlegg i Private Meldinger';
$lang['PM_Attachments_explain'] = 'Tilater vedlegg i Private Meldinger.';
$lang['Ftp_upload'] = 'Slå på FTP Opplasting';
$lang['Ftp_upload_explain'] = 'Slår på/av FTP opplastingfunksjonen. Hvis du setter den til ja, må du skrive inn FTP innstillingene og opplastingsfolderen vil ikke mer være i bruk.';
$lang['Attachment_topic_review'] = 'Vil du vise vedlegg i forhåndsvisningsvinduet?';
$lang['Attachment_topic_review_explain'] = 'Hvis du velger ja, alle vedlegg vil bli vist i forhåndsvisningsvinduet når du poster et svar.';

$lang['Ftp_server'] = 'FTP Opplastingsserver';
$lang['Ftp_server_explain'] = 'Her kan du skrive inn IP-Adressen eller FTP-Hostname på Serveren brukt for opplasting av filer. Hvis du lar feltet stå tomt, vil Serveren på din phpBB2 Board bli brukt. Vennligst mer at det ikke er tilatt å legge til ftp:// eller noe annet til adressen, kun ftp.foo.com eller, som er endel raskere, kun IP Adressen.';

$lang['Attach_ftp_path'] = 'FTP Sti til opplastingsfolderen';
$lang['Attach_ftp_path_explain'] = 'Folderen hvor dine vedlegg vil bli lagret. Denne folderen trengs ikke å være chmodded. Vennligst ikke skriv inn din IP eller FTP-Adresse her, dette feltet er kun for FTP stien.<br />F.eks: /home/web/uploads';
$lang['Ftp_download_path'] = 'Nedlastingslink til FTP Stien';
$lang['Ftp_download_path_explain'] = 'Skriv inn URL\'en til FTP stien, hvor dine vedlegg blir lagret.<br />Hvis du bruker en annen FTP server, vennligst skriv inn den komplette URL\'en. F.eks: http://www.mystorage.com/phpBB2/upload.<br />Hvis du bruker localhost for å lagre dine filer, kan du skrive inn kun den relative stien til phpBB2 folderen. F.eks: \'upload\'.<br /> La feltet stå tomt, hvis FTP stien ikke er tilgjengelig fra Internett. Med dette feltet stående tomt kan du ikke bruke den fysiske nedlastingsmetoden.';
$lang['Ftp_passive_mode'] = 'Slå på FTP Passive Mode';
$lang['Ftp_passive_mode_explain'] = 'Noen FTP servere krever Passive Mode, hvis du ikke kan nå din FTP prøv å sette Passive Mode på.';

$lang['No_ftp_extensions_installed'] = 'Du kan ikke bruke FTP opplastingsmetode, fordi FTP tilegget er ikke lagt inn i din PHP installasjon.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Her kan du slette vedleggsdata fra posteringer hvor filene mangler, og slette filer som ikke lenger tilhører noen vedlegg. Du kan laste ned eller se på en fil hvis du klikker på den; hvis det ikke er noen link, finnes ikke filen på serveren.';
$lang['Shadow_attachments_file_explain'] = 'Slette alle vedleggsfiler som eksisterer på serveren men som ikke tilhører noen vedlegg på boardet.';
$lang['Shadow_attachments_row_explain'] = 'Slette alle vedlegg der filene mangler.';
$lang['Empty_file_entry'] = 'Ingen filer';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Småbilder resatt for vedlegg: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Vedleggsynkroniseringen er ferdig.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Håntere Filendelser';
$lang['Manage_extensions_explain'] = 'Her kan du håntere dine filendelser. Hvis du vil tilate/ikke tilate en filendelse, vennligst bruk Filendelsegruppe hånteringen.';
$lang['Explanation'] = 'Forklaring';
$lang['Extension_group'] = 'Filendelsegruppe';
$lang['Invalid_extension'] = 'Ugyldig Filendelse';
$lang['Extension_exist'] = 'Filendelsen %s eksisterer allerede'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Filendelsen %s er forbudt, du kan ikke legge til denne i tilatte filendelser'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Håndtering av Filendelsegrupper';
$lang['Manage_extension_groups_explain'] = 'Her kan du legge til, slette og endre dine Filendelsegrupper, du kan slå av Filendelsegrupper, legge til en spesial kategori til dem, forandre nedlastingsprosedyren og du kan definere en opplastings ikon som vil bli vist før et vedlegg som tilhører gruppen.';
$lang['Special_category'] = 'Spesial Kategori';
$lang['Category_images'] = 'Bilder';
$lang['Category_stream_files'] = 'Streame Filer';
$lang['Category_swf_files'] = 'Flash Filer';
$lang['Allowed'] = 'Tilatt';
$lang['Allowed_forums'] = 'Tilatte Forumer';
$lang['Ext_group_permissions'] = 'Gruppe Adgang';
$lang['Download_mode'] = 'Nedlastingsmodus';
$lang['Upload_icon'] = 'Opplastingikon';
$lang['Max_groups_filesize'] = 'Maks Filstørrelse';
$lang['Extension_group_exist'] = 'Filendelsegruppen %s eksisterer allerede'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Håntere Spesial Kategorier';
$lang['Manage_categories_explain'] = 'Her kan du konfigurere Spesial Kategorier. Du kan sette opp Spesial parametere og forhold for Spesial Kategorier tilhørende en Filendelsegruppe.';
$lang['Settings_cat_images'] = 'Instillinger for Spesial Kategori: Bilder';
$lang['Settings_cat_streams'] = 'Instillinger for Spesial Kategori: Streame Filer';
$lang['Settings_cat_flash'] = 'Instillinger for Spesial Kategori: Flash Filer';
$lang['Display_inlined'] = 'Vise Bilder';
$lang['Display_inlined_explain'] = 'Velg om du vil vise bildene direkte i meldingen (ja) eller vise bildet som en link (nei)?';
$lang['Max_image_size'] = 'Maks Bildestørrelse';
$lang['Max_image_size_explain'] = 'Her kan du definere maks tilatt bildestørrelse som kan bli lagt til et vedlegg (Bredde x Høyde i piksler).<br />Hvis det blir satt til 0x0, vil dette bli avslått. Med noen bilder vil ikke dette virke grunnet begrensninger i PHP.';
$lang['Image_link_size'] = 'Bilde link størrelser';
$lang['Image_link_size_explain'] = 'Hvis bildet er større en det du setter her vil bildet bli vist med en link istedenfor å vise bildet i meldingen.';
$lang['Assigned_group'] = 'Tillagt Gruppe';

$lang['Image_create_thumbnail'] = 'Lage Småbilder';
$lang['Image_create_thumbnail_explain'] = 'Alltid lage Småbilder. Dette valget overstyrer nesten alle innstillinger i Spesial Kategorien, untatt maks bildestørrelse. Med dette valget på vil et lite bilde bli vist i meldingen og brukeren kan klikke på det for å vise bildet i full størrelse.<br />Vennligst merk at dette kreves at Imagick er installert, hvis den ikke er installert eller om du har Safe-Mode på vil GD-biblioteket i PHP bli brukt. Hvis bildet ikke kan hånteres av PHP, vil denne innstillingen bli hoppet over av systemet.';
$lang['Image_min_thumb_filesize'] = 'Minste Småbilde Filstørrelse';
$lang['Image_min_thumb_filesize_explain'] = 'Hvis et bilde er mindre en definert filstørrelse, vil ingen småbilde bli laget, fordi det er lite nok.';
$lang['Image_imagick_path'] = 'Imagick Program (Komplett Sti)';
$lang['Image_imagick_path_explain'] = 'Skriv inn stien til programmet imagick, normalt /usr/bin/convert (i windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Søk Imagick';

$lang['Use_gd2'] = 'Bruke GD2 Biblioteket';
$lang['Use_gd2_explain'] = 'PHP har mulighet til å bli kompilert med GD1 eller GD2 biblioteket for bildemanupulering. For å lage Småbildene korrekt uten bruk av imagemagick kan vi bruke to forsjellige metoder, basert på dine valg her. Hvis dine småbilder er av dårlig kvalitet eller ser rare ut, prøv å forandre denne innstillingen.';
$lang['Attachment_version'] = 'Attachment Mod Versjon %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Håntere Forbudte Filendelser';
$lang['Manage_forbidden_extensions_explain'] = 'Her kan du legge til eller slette forbudte filendelser. Filendelsene php, php3 and php4 er satt opp som forbudt som standard for sikkerhetens skyld, du kan ikke slette dem.';
$lang['Forbidden_extension_exist'] = 'Den forbudte filendelsen %s eksisterer allerede'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'Filendelsen %s er definert i dine tilatte filendelser, vennligst slett den der før du legger den til her.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Filendelse Gruppe Adgang -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Her kan du sette tilgangen for den valgte Filendelsegruppe. Som standard er Filendelsegruppene for alle forumer at bruker har mulighet til å legge til vedlegg. Bare legg til de forumer du vil Filendelsegruppen du vil være tilatt her, standard verdien ALLE FORUMER vil forsvinne når du legger til Forumer til listen. Du har mulighet til å sette tilbake til ALLE FORUMER når du vil. Hvis du legger til et nytt forum på ditt board og tilgangen er satt til ALLE FORUMER vil ingenting bli forandret. Men hvis du har forandret og slått av tilgangen i noen forumer, må du kontrollere her og legge inn det nye forumet du har lagt til. Det er lett å gjøre dette automatisk, men dette vil føre til at du må editere en haug med filer, derfor har jeg valgt denne måten det er nå. Vennligst merk at alle dine forumer vil bli listet her.';
$lang['Note_admin_empty_group_permissions'] = 'MERK:<br />I listen under er forumer som dine brukere har som normalt tilgang til å legge til vedlegg, men siden ingen Filendelsegruppe er tilatt, vil dine brukere ikke kunne legge til vedlegg. Hvis de prøver, vil de få en feilmelding. Kansje du vil sette tilgangen \'Poste Filer\' til ADMIN i disse forumene.<br /><br />';
$lang['Add_forums'] = 'Legg til Forum';
$lang['Add_selected'] = 'Legg til Valgte';
$lang['Perm_all_forums'] = 'ALLE FORUMER';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Håntere Vedleggskvote Begrensninger';
$lang['Manage_quotas_explain'] = 'Her kan du legge til/slette/forandre Kvote Begrensninger. Du har mulighet til å legge disse kvote begrensningene til brukere og grupper senere. For å legge til Kvote Begrensning til en bruker, må du gå til Brukere->Håntering, velg brukeren og du vil finne valget i bunn. For å legge til Kvote Begrensning til en gruppe, gå til Grupper->Håntering, velg gruppen for å forandre den, og du vil se konfigurasjon innstillingene. Hvis du vil se hvilke brukere og grupper som er lagt til en spesifik Kvote Begrensning, Klikk på \'Vis\' på venstre side av Kvote Beskrivelsen.';
$lang['Assigned_users'] = 'Brukere som er lagt til';
$lang['Assigned_groups'] = 'Grupper som er lagt til';
$lang['Quota_limit_exist'] = 'Kvote Begrensningen %s eksisterer allerede.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Filvedlegg Kontrollpanel';
$lang['Control_panel_explain'] = 'Her kan du se og håntere alle vedlegg basert på Bruker, Vedlegg, Visninger etc...';
$lang['File_comment_cp'] = 'Filkommentar';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Bruk * for å søke på deler av et ord';
$lang['Size_smaller_than'] = 'Vedleggstørrelse mindre en (bytes)';
$lang['Size_greater_than'] = 'Vedleggstørrelse større en (bytes)';
$lang['Count_smaller_than'] = 'Nedlastingsantall mindre en';
$lang['Count_greater_than'] = 'Nedlastingsantall større en';
$lang['More_days_old'] = 'Mere en så mange dager gammelt';
$lang['No_attach_search_match'] = 'Ingen vedlegg funnet for din søkekriteria';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Antall Vedlegg';
$lang['Total_filesize'] = 'Totalt Filstørrelse';
$lang['Number_posts_attach'] = 'Antall posteringer med vedlegg';
$lang['Number_topics_attach'] = 'Antall emner med vedlegg';
$lang['Number_users_attach'] = 'Antall Brukere som har lagt til vedlegg';
$lang['Number_pms_attach'] = 'Totalt antall vedlegg i Private Meldinger';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Vedleggsstatistikk for %s'; // replace %s with username
$lang['Size_in_kb'] = 'Størrelse (KB)';
$lang['Downloads'] = 'Nedlastninger';
$lang['Post_time'] = 'Postet';
$lang['Posted_in_topic'] = 'Postet i Emne';
$lang['Submit_changes'] = 'Lagre Forandringene';

// Sort Types
$lang['Sort_Attachments'] = 'Vedlegg';
$lang['Sort_Size'] = 'Størrelse';
$lang['Sort_Filename'] = 'Filnavn';
$lang['Sort_Comment'] = 'Kommentar';
$lang['Sort_Extension'] = 'Filendelse';
$lang['Sort_Downloads'] = 'Nedlastninger';
$lang['Sort_Posttime'] = 'Postet';
$lang['Sort_Posts'] = 'Posteringer';

// View Types
$lang['View_Statistic'] = 'Statistikker';
$lang['View_Search'] = 'Søk';
$lang['View_Username'] = 'Brukernavn';
$lang['View_Attachments'] = 'Vedlegg';

// Successfully updated
$lang['Attach_config_updated'] = 'Vedleggskonfigurasjonen ble velykket oppdatert';
$lang['Click_return_attach_config'] = 'Klikk %sHer%s for å gå tilbake til Vedleggskonfigurasjonen';
$lang['Test_settings_successful'] = 'Testen er ferdig, konfigurasjonen ser ut til å være i orden.';

// Some basic definitions
$lang['Attachments'] = 'Vedlegg';
$lang['Attachment'] = 'Vedlegg';
$lang['Extensions'] = 'Filendelser';
$lang['Extension'] = 'Filendelse';

// Auth pages
$lang['Auth_attach'] = 'Postere Filer';
$lang['Auth_download'] = 'Laste ned Filer';

//
// That's all Folks!
// -------------------------------------------------

?>
