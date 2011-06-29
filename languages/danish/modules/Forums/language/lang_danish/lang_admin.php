<?php

/***************************************************************************
 *                            lang_admin.php [Danish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.3 2004/10/10 13:02:20 lexsus Exp $
 *
 ****************************************************************************/
$lang['General'] = "Generel Administrator";
$lang['Users'] = "Bruger Administrator";
$lang['Groups'] = "Gruppe Administrator";
$lang['Forums'] = "Forum Administrator";
$lang['Styles'] = "Layout Administrator";

$lang['Configuration'] = "Konfiguration";
$lang['Permissions'] = "Tilladelser";
$lang['Manage'] = "Redigering";
$lang['Disallow'] = "Forbyd bestemte navne";
$lang['Prune'] = "Beskær";
$lang['Mass_Email'] = "Gruppe email";
$lang['Ranks'] = "Rang";
$lang['Smilies'] = "Smilies";
$lang['Ban_Management'] = "Forbyd Kontrol";
$lang['Word_Censor'] = "Ordcensurerer";
$lang['Export'] = "Eksportér";
$lang['Create_new'] = "Opret";
$lang['Add_new'] = "Tilføj";
$lang['Backup_DB'] = "Backup Database";
$lang['Restore_DB'] = "Genopret Database";


//
// Index
//
$lang['Admin'] = "Administration";
$lang['Not_admin'] = "Du er ikke autoriseret til at redigere dette forum";
$lang['Welcome_phpBB'] = "Velkommen til phpBB";
$lang['Admin_intro'] = "Tak fordi du valgte phpBB som dit forum. Denne skærm vil give dig et hurtigt overblik over alle de forskellige statistikker, der er tilgængelige om dit forum. Du kan komme tilbage til denne side ved at klikke på <u>Administrationsindeks</u> linket i venstre side. For at vende tilbage til dit forums indeksside skal du klikke på phpBB logoet, der også befinder sig i venstre side. De andre links i venstre side lader dig kontrollere og redigere hver eneste aspekt af dit forum, hver enkelt side indeholder instruktioner om, hvordan du bruger de forskellige værktøjer.";
$lang['Main_index'] = "Forumindeks";
$lang['Forum_stats'] = "Forum Statistikker";
$lang['Admin_Index'] = "Administrationsindeks";
$lang['Preview_forum'] = "Smugkig på forummet";

$lang['Click_return_admin_index'] = "Klik %sHer%s for at vende tilbage til Administrationsindekset";

$lang['Statistic'] = "Statistikker";
$lang['Value'] = 'Value';
$lang['Number_posts'] = "Antal indlæg";
$lang['Posts_per_day'] = "Indlæg pr. dag";
$lang['Number_topics'] = "Antal emner";
$lang['Topics_per_day'] = "Emner pr. dag";
$lang['Number_users'] = "Antal brugere";
$lang['Users_per_day'] = "Brugere pr. dag";
$lang['Board_started'] = "Forum oprettelse";
$lang['Avatar_dir_size'] = "Avatar-bibliotekets størrelse";
$lang['Database_size'] = "Database-størrelse";
$lang['Gzip_compression'] ="Gzip komprimering";
$lang['Not_available'] = "Ikke tilgængelig";

$lang['ON'] = "Slået til"; // Dette er for GZip komprimering
$lang['OFF'] = "Slået fra"; 


//
// DB Utils
//
$lang['Database_Utilities'] = "Database-værktøjer";

$lang['Restore'] = "Genopret";
$lang['Backup'] = "Backup";
$lang['Restore_explain'] = "Dette vil genoprette alle phpBB tabeller fra en gemt fil. Hvis din server understøtter det, kan du uploade en gzip komprimeret tekstfil og så bliver den automatisk dekomprimeret. <b>ADVARSEL</b> Dette vil overskrive alle eksisterende data. Genoprettelsen kan tage lang tid at udføre, forlad venligst ikke denne side før den er fuldført.";
$lang['Backup_explain'] = "Her kan du lave en backup, af alle dine data, der relaterer til phpBB. Hvis du har andre tabeller i din database, som du også ønsker, at lave en backup af, skal du indtaste deres navne adskilt af kommaer i Yderligere Tabeller feltet nedenunder. Hvis din server understøtter det, kan du gzip komprimere filen før du downloader den for at reducere dens størrrelse.";

$lang['Backup_options'] = "Backup muligheder";
$lang['Start_backup'] = "Start backup";
$lang['Full_backup'] = "Fuld backup";
$lang['Structure_backup'] = "Kun Struktur backup";
$lang['Data_backup'] = "Kun Data backup";
$lang['Additional_tables'] = "Yderligere Tabeller";
$lang['Gzip_compress'] = "Gzip komprimér fil";
$lang['Select_file'] = "Vælg en fil";
$lang['Start_Restore'] = "Start Genopret";

$lang['Restore_success'] = "Databasen er blevet korrekt genoprettet.<br /><br />Dit forum skulle nu være i den tilstand, det var, da backuppen blev foretaget";
$lang['Backup_download'] = "Din download vil begynde om kort tid, vent venligst til den begynder";
$lang['Backups_not_supported'] = "Desværre, backups af databaser fra dit database-system understøttes på nuværende tidspunkt ikke";

$lang['Restore_Error_uploading'] = "Der skete en fejl under uploading af backup-filen";
$lang['Restore_Error_filename'] = "Der er et problem med filens navn, prøv venligst med en alternativ fil";
$lang['Restore_Error_decompress'] = "Gzip-filen kan ikke dekomprimeres, upload venligst en ren tekstversion";
$lang['Restore_Error_no_file'] = "Ingen fil blev uploaded";


//
// Auth pages
//
$lang['Select_a_User'] = "Vælg en Bruger";
$lang['Select_a_Group'] = "Vælg en Gruppe";
$lang['Select_a_Forum'] = "Vælg et Forum";
$lang['Auth_Control_User'] = "Brugerrettigheder kontrolside"; 
$lang['Auth_Control_Group'] = "Grupperettigheder kontrolside"; 
$lang['Auth_Control_Forum'] = "Forumrettigheder kontrolside"; 
$lang['Look_up_User'] = "Slå Brugeren op"; 
$lang['Look_up_Group'] = "Slå Gruppen op"; 
$lang['Look_up_Forum'] = "Vis forum"; 

$lang['Group_auth_explain'] = "Her kan du ændre rettighederne og redaktørstatussen, tilskrevet til hver enkelt brugergruppe. Glem ikke når du ændrer grupperettigheder, at individuelle brugerrettigheder måske stadig tillader, at brugeren har adgang til forummerne, etc. Du bliver advaret, hvis dette er tilfældet.";
$lang['User_auth_explain'] = "Her kan du ændre rettighederne og redaktørstatussen, tilskrevet til hver enkelt bruger. Glem ikke når du ændrer brugerrettigheder, at grupperettigheder måske stadig tillader, at brugeren har adgang til forummerne, etc. Du bliver advaret, hvis dette er tilfældet.";
$lang['Forum_auth_explain'] = "Her kan du ændre autoriseringsniveauer for de enkelte forummer. Du har både en simpel og avanceret metode til rådighed. Den avancerede metode tillader større kontrol af hvert enkelt forum. Husk, at når du ændrer forummernes autoriseringsniveauerne, påvirker det hvilke brugere, der kan udføre de forskellige ting i dem.";

$lang['Simple_mode'] = "Simpel Metode";
$lang['Advanced_mode'] = "Avanceret Metode";
$lang['Moderator_status'] = "Redaktør status";

$lang['Allowed_Access'] = "Tilladt Adgang";
$lang['Disallowed_Access'] = "Nægtet Adgang";
$lang['Is_Moderator'] = "Er Redaktør";
$lang['Not_Moderator'] = "Er ikke Redaktør";

$lang['Conflict_warning'] = "Advarsel om Autoriseringskonflikt";
$lang['Conflict_access_userauth'] = "Denne bruger har stadig adgangsrettigheder til dette forum via et gruppemedlemsskab. Du skal nok ændre gruppens rettigheder eller fjerne denne bruger fra gruppen, for at forhindre, at de har adgangsrettigheder. Gruppens rettigheder (og forummerne involveret) er nævnt nedenunder.";
$lang['Conflict_mod_userauth'] = "Denne bruger har stadig redaktørrettigheder til dette forum via et gruppemedlemsskab. Du skal nok ændre gruppens rettigheder eller fjerne denne bruger fra gruppen, for at forhindre, at de har redaktørrettigheder. Gruppens rettigheder (og forummerne involveret) er nævnt nedenunder.";

$lang['Conflict_access_groupauth'] = "Den følgende bruger (eller brugere) har stadig adgangsrettigheder til dette forum via deres brugerrettigheder. Du skal nok brugerrettighederne for at forhindre dem i, at have adgangsrettigheder. Brugernes rettigheder (og forummerne involveret) er nævnt nedenunder.";
$lang['Conflict_mod_groupauth'] = "Den følgende bruger (eller brugere) har stadig redaktørrettigheder til dette forum via deres brugerrettigheder. Du skal nok brugerrettighederne for at forhindre dem i, at have redaktørrettigheder. Brugernes rettigheder (og forummerne involveret) er nævnt nedenunder.";

$lang['Public'] = "Offentlig";
$lang['Private'] = "Privat";
$lang['Registered'] = "Registeret";
$lang['Administrators'] = "Administratorer";
$lang['Hidden'] = "Skjult";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "ALLE";
$lang['Forum_REG'] = "REGISTRERET";
$lang['Forum_PRIVATE'] = "PRIVAT";
$lang['Forum_MOD'] = "REDAKTØR";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Se";
$lang['Read'] = "Læse";
$lang['Post'] = "Indlæg";
$lang['Reply'] = "Svar";
$lang['Edit'] = "Ændre";
$lang['Delete'] = "Slet";
$lang['Sticky'] = "Opslag";
$lang['Announce'] = "Bekendtgøre"; 
$lang['Vote'] = "Stem";
$lang['Pollcreate'] = "Opret afstemning";

$lang['Permissions'] = "Rettigheder";
$lang['Simple_Permission'] = "Simpel Rettighed";

$lang['User_Level'] = "Brugerniveau"; 
$lang['Auth_User'] = "Bruger";
$lang['Auth_Admin'] = "Administrator";
$lang['Group_memberships'] = "Medlemsskaber til brugergrupper";
$lang['Usergroup_members'] = "Denne gruppe har følgende medlemmer";

$lang['Forum_auth_updated'] = "Forumrettigheder opdateret";
$lang['User_auth_updated'] = "Brugerrettigheder opdateret";
$lang['Group_auth_updated'] = "Grupperettigheder opdateret";

$lang['Auth_updated'] = "Rettigheder er blevet opdateret";
$lang['Click_return_userauth'] = "Klik %sHer%s for at vende tilbage til Brugerrettigheder";
$lang['Click_return_groupauth'] = "Klik %sHer%s for at vende tilbage til Grupperettigheder";
$lang['Click_return_forumauth'] = "Klik %sHer%s for at vende tilbage til Forumrettigheder";


//
// Banning
//
$lang['Ban_control'] = "Kontrollering af bandlysninger";
$lang['Ban_explain'] = "Her kan du kontrollere bandlysning af brugere. Du kan opnå dette, ved enten at bandlyse en specifik bruger, en eller flere IP adresser eller domainnavne. Disse metoder forhindrer en bruger i overhovedet at få adgang til dit forums indexside. For at forhindre, at en bruger registrerer sig under en andet brugernavn, kan du også bandlyse en email adresse. Husk, bandlysning af en email adresse vil ikke forhindre den bruger i at logge på eller komme med nye indlæg på dit forum, du skal bruge en af de førstnævnte metoder for, at forhindre dette.";
$lang['Ban_explain_warn'] = "Bemærk venligst, at hvis du indtaster en række IP adresser vil dette resultere i, at alle adresserne mellem start og slut bliver tilføjet listen over bandlyste IP adresser. Forsøg på, at minimere antallet af adresser tilføjet til databasen, vil blive foretaget ved automatisk at introducere jokere, når det er passende. Hvis du virkelig vil indtaste en række adresser, så prøv at minimere rækken eller endnu bedre, indtast specifikke adresser.";

$lang['Select_username'] = "Vælg et Brugernavn";
$lang['Select_ip'] = "Vælg en IP Adresse";
$lang['Select_email'] = "Vælg en Email Adresse";

$lang['Ban_username'] = "Bandlys en eller flere specifikke brugere";
$lang['Ban_username_explain'] = 'Du kan bandlyse flere brugere på en gang ved at bruge den rette kombination af mus og tastatur for din computer og browser';

$lang['Ban_IP'] = "Bandlys en eller flere IP-adresser eller domænenavne";
$lang['IP_hostname'] = "IP-adresser eller domænenavne";
$lang['Ban_IP_explain'] = "For at angive flere IP adresser eller domænenavne skal du adskille dem med kommaer. For at angive en række IP adresser skal du adskille starten og slutningen med en bindestreg (-), for at angive en joker skal du bruge *";

$lang['Ban_email'] = "Bandlys en eller flere adresser";
$lang['Ban_email_explain'] = "For at angive flere email adresser skal du adskille dem med kommaer. For at angive en joker skal du bruge *, for eksempel *@hotmail.com";

$lang['Unban_username'] = "Ophæv bandlysning på en eller flere brugere";
$lang['Unban_username_explain'] = "Du kan ophæve bandlysning af flere brugere på en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.";

$lang['Unban_IP'] = "Ophæv bandlysning på en eller flere IP adresser";
$lang['Unban_IP_explain'] = "Du kan ophæve bandlysning på en eller flere IP adresser på en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.";

$lang['Unban_email'] = "Ophæv bandlysning på en eller flere email adresser.";
$lang['Unban_email_explain'] = "Du kan ophæve bandlysning på flere email adresser på en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.";

$lang['No_banned_users'] = "Ingen bandlyste brugernavne";
$lang['No_banned_ip'] = "Ingen bandlyste IP adresser";
$lang['No_banned_email'] = "Ingen bandlyste email adresser";

$lang['Ban_update_sucessful'] = "Listen med oplysningerne om bandlysninger er korrekt opdateret.";
$lang['Click_return_banadmin'] = "Klik %sHer%s for at vende tilbage til Kontrollering af bandlysninger";


//
// Configuration
//
$lang['General_Config'] = "Generel Konfiguration";
$lang['Config_explain'] = "Nedenstående skema giver dig mulighed for, at tilpasse alle de generelle forumindstillinger. For Bruger og Forumindstilninger, brug de relaterende links i venstre side.";

$lang['Click_return_config'] = "Klik %sHer%s for at vende tilbage til Generel Konfiguration";

$lang['General_settings'] = "Generelle forumindstillinger";
$lang['Server_name'] = "Domænenavn";
$lang['Server_name_explain'] = "Domænet dette forum ligger på";
$lang['Script_path'] = "Script Adresse";
$lang['Script_path_explain'] = "Adressen til phpBB2 på domænenavnet";
$lang['Server_port'] = "Server Port";
$lang['Server_port_explain'] = "Porten hvorpå din server kører. Det er normalt 80, ændre kun hvis nødvendigt";
//$lang['Site_name'] = "Sidens navn";
//$lang['Site_desc'] = "Beskrivelse af siden";
//$lang['Board_disable'] = "Slå forummet fra";
//$lang['Board_disable_explain'] = "Dette vil gøre forummet utilgængeligt for brugere. Du må ikke logge ud, når du har slået forummet fra. Du vil ikke kunne logge på igen!";
//$lang['Acct_activation'] = "Aktivering af Konto";
//$lang['Acc_None'] = "Ingen"; // These three entries are the type of activation
//$lang['Acc_User'] = "Bruger";
//$lang['Acc_Admin'] = "Administrator";

$lang['Abilities_settings'] = "Generelle Bruger- og Forumindstillinger";
$lang['Max_poll_options'] = "Maximum antal afstemningsmuligheder";
$lang['Flood_Interval'] = "Sekunder mellem indlæg";
$lang['Flood_Interval_explain'] = "Antal sekunder en bruger skal vente, før et nyt indlæg kan skrives."; 
$lang['Board_email_form'] = "Bruger-email via forum";
$lang['Board_email_form_explain'] = "Brugere kan sende hinanden email via dette forum";
$lang['Topics_per_page'] = "Emner pr. side";
$lang['Posts_per_page'] = "Indlæg pr. side";
$lang['Hot_threshold'] = "Indlæg for populære emner";
$lang['Default_style'] = "Standard layout";
$lang['Override_style'] = "Overskriv brugers valg";
$lang['Override_style_explain'] = "Erstatter brugernes valg med det, der er standard";
//$lang['Default_language'] = "Standard Sprog";
$lang['Date_format'] = "Dato Format";
$lang['System_timezone'] = "Tidszone";
$lang['Enable_gzip'] = "Slå GZip Komprimering til";
$lang['Enable_prune'] = "Slå Forumbeskæring til";
$lang['Allow_HTML'] = "Tillad HTML";
$lang['Allow_BBCode'] = "Tillad BBCode";
$lang['Allowed_tags'] = "Tilladte HTML kommandoer (tags)";
$lang['Allowed_tags_explain'] = "Adskil kommandoer med kommaer";
$lang['Allow_smilies'] = "Tillad Smilies";
//$lang['Smilies_path'] = "Adressen hvor dine Smilies opbevares";
//$lang['Smilies_path_explain'] = "Adressen under din phpBB folder, f.eks. images/smilies";
$lang['Allow_sig'] = "Tillad Underskrifter";
$lang['Max_sig_length'] = "Maksimal lændge på underskrifter";
$lang['Max_sig_length_explain'] = "Maksimale antal tegn i brugernes underskrifter";
$lang['Allow_name_change'] = "Tillad, at brugerne kan ændre brugernavn";

$lang['COPPA_settings'] = "COPPA Indstillinger";
$lang['COPPA_fax'] = "COPPA Fax Nummer";
$lang['COPPA_mail'] = "COPPA Adresse";
$lang['COPPA_mail_explain'] = "Dette er adressen, hvortil forældre vil sende COPPA blanketterne";

$lang['Disable_privmsg'] = "Private Beskeder";
$lang['Inbox_limits'] = "Maksimale antal indlæg i Indbakke";
$lang['Sentbox_limits'] = "Maksimale antal indlæg i Sendt-bakken";
$lang['Savebox_limits'] = "Maksimale antal indlæg i Gemt-bakken";

// Visual Confirmation
$lang['Visual_confirm'] = 'Enable Visual Confirmation';
$lang['Visual_confirm_explain'] = 'Requires users enter a code defined by an image when registering.';

//
// Forum Management
//
$lang['Forum_admin'] = "Forum Administration";
$lang['Forum_admin_explain'] = "Fra denne kan du tilføje, slette, ændre, omorganisere og gensynkronisere kategorier og forummer.";
$lang['Edit_forum'] = "Ændre forum";
$lang['Create_forum'] = "Opret nyt forum";
$lang['Create_category'] = "Opret ny kategori";
$lang['Remove'] = "Fjern";
$lang['Action'] = "Udfør";
$lang['Update_order'] = "Opdatér sortering";
$lang['Config_updated'] = "Forum Konfiguration Korrekt Opdateret";
$lang['Edit'] = "Ændre";
$lang['Delete'] = "Slet";
$lang['Move_up'] = "Ryk op";
$lang['Move_down'] = "Ryk ned";
$lang['Resync'] = "Re-synkronisér";
$lang['No_mode'] = "Ingen memode blev valgt";
$lang['Forum_edit_delete_explain'] = "Skemaet nedenfor gør at du kan tilpasse alle de generelle forumindstillinger. For Bruger og det enkelte Forums indstillinger skal du bruge linkene til venstre.";

$lang['Move_contents'] = "Flyt alt indhold";
$lang['Forum_delete'] = "Slet Forum";
$lang['Forum_delete_explain'] = "Skemaet nedenfor lader dig slette et forum (eller en kategori) og bestemme, hvor du vil placere alle emner (eller fora) det/den indeholdt.";

$lang['Status_locked'] = 'Låst';
$lang['Status_unlocked'] = 'Låst op';
$lang['Forum_settings'] = "Generelle Forum Indstillinger";
$lang['Forum_name'] = "Forummets navn";
$lang['Forum_desc'] = "Beskrivelse";
$lang['Forum_status'] = "Forum status";
$lang['Forum_pruning'] = "Automatisk sletning";

$lang['prune_freq'] = 'Tjek for emners alder hver';
$lang['prune_days'] = "Fjern emner, der ikke er blevet skrevet indlæg til i";
$lang['Set_prune_data'] = "Du har slået automatisk sletning til for dette forum, men du indtastede ikke et antal dage, hvorefter emner skal slettes. Gå venligst tilbage og gør dette.";

$lang['Move_and_Delete'] = "Flyt og Slet";

$lang['Delete_all_posts'] = "Slet alle indlæg";
$lang['Nowhere_to_move'] = "Ingen steder at flytte til";

$lang['Edit_Category'] = "Ændre Kategori";
$lang['Edit_Category_explain'] = "Brug dette skema til at ændre navnet på en kategori.";

$lang['Forums_updated'] = "Forum- og Kategoriinformation korrekt opdateret";

$lang['Must_delete_forums'] = "Du skal slette alle fora, før du kan slette denne kategori";

$lang['Click_return_forumadmin'] = "Klik %sHer%s for at vende tilbage til Forum Administration";


//
// Smiley Management
//
$lang['smiley_title'] = "Smiles Værktøjer";
$lang['smile_desc'] = "Fra denne side, kan du tilføje, slette og ændre de smileys dine brugere kan bruge i deres indlæg og private beskeder.";

$lang['smiley_config'] = "Smiley Indstillinger";
$lang['smiley_code'] = "Smiley Kode";
$lang['smiley_url'] = "Smiley Billede Fil";
$lang['smiley_emot'] = "Smiley Udtryk";
$lang['smile_add'] = "Tilføj en ny Smiley";
$lang['Smile'] = "Smil";
$lang['Emotion'] = "Udtryk";

$lang['Select_pak'] = "Vælg Pakkefil (.pak)";
$lang['replace_existing'] = "Erstat eksisterende Smiley";
$lang['keep_existing'] = "Behold eksisterende Smiley";
$lang['smiley_import_inst'] = "Du skal pakke zipfilen ud og uploade alle filerne til den pågældende Smiley-folder i din installation.  Vælg herefter de korrekte oplysninger på dette skema for at importere smileypakken.";
$lang['smiley_import'] = "Smiley-pakke-import";
$lang['choose_smile_pak'] = "Vælg en Smileypakke-fil (.pak)";
$lang['import'] = "Importér Smileys";
$lang['smile_conflicts'] = "Hvad skal gøres i tilfælde af konflikter";
$lang['del_existing_smileys'] = "Slet eksisterende smileys inden importering";
$lang['import_smile_pack'] = "Importér Smiley-pakke";
$lang['export_smile_pack'] = "Opret Smiley-pakke";
$lang['export_smiles'] = "For at oprette en smiley-pakke med dine nuværende installerede smileys, klik %sHer%s for at downloade smiles.pak filen. Giv den et passende navn og sørg for at den beholder .pak efternavnet. Lav så en zipfil der indeholder alle smiley-billederne plus denne .pak konfigurationsfil.";

$lang['smiley_add_success'] = "Smileyen blev korrekt tilføjet";
$lang['smiley_edit_success'] = "Smileyen blev korrekt opdateret";
$lang['smiley_import_success'] = "Smiley-pakken blev korrekt importeret!";
$lang['smiley_del_success'] = "Smileyen blev korrekt fjernet";
$lang['Click_return_smileadmin'] = "Klik %sHer%s for at vende tilbage til Smiley Administration";


//
// User Management
//
$lang['User_admin'] = "Bruger Administration";
$lang['User_admin_explain'] = "Her kan du ændre dine brugeres informationer og specifikke indstillinger. For at ændre brugernes rettigheder, brug venligst bruger- og gruppe-indstillingssystemet.";

$lang['Look_up_user'] = "Slå bruger op";

$lang['Admin_user_fail'] = "Brugerens profil kunne ikke opdaters.";
$lang['Admin_user_updated'] = "Brugerens profil blev korrekt opdateret.";
$lang['Click_return_useradmin'] = "Klik %sHer%s for at vende tilbage til Bruger Administration";

$lang['User_delete'] = "Slet denne bruger";
$lang['User_delete_explain'] = "Klik her for at slette denne bruger. Det er permenent.";
$lang['User_deleted'] = "Brugeren blev korrekt slettet.";

$lang['User_status'] = "Brugeren er aktiv";
$lang['User_allowpm'] = "Kan sende Private Beskeder";
$lang['User_allowavatar'] = "Kan vise en avatar";

$lang['Admin_avatar_explain'] = "Her kan du se og slette brugerens nuværende avatar.";

$lang['User_special'] = "Specialle kun-administrator felter";
$lang['User_special_explain'] = "Disse felter kan ikke ændres af brugerne. Her kan du bestemme deres status og ændre indstillinger, de ikke har adgang til.";


//
// Group Management
//
$lang['Group_administration'] = "Gruppe Administration";
$lang['Group_admin_explain'] = "Fra dette panel kan du administere alle dine brugergrupper, du kan; slette, oprette og ændre eksisterende grupper. Du kan vælge redaktører, slå grupper til og fra og bestemme gruppens navn og beskrivelse";
$lang['Error_updating_groups'] = "Der opstod en fejl under opdateringen af grupperne";
$lang['Updated_group'] = "Gruppen blev korrekt opdateret";
$lang['Added_new_group'] = "Den nye gruppe blev korrekt oprettet";
$lang['Deleted_group'] = "Gruppen blev korrekt slettet";
$lang['New_group'] = "Opret en ny gruppe";
$lang['Edit_group'] = "Ændre gruppe";
$lang['group_name'] = "Gruppens navn";
$lang['group_description'] = "Gruppens beskrivelse";
$lang['group_moderator'] = "Grupperedaktør";
$lang['group_status'] = "Gruppestatus";
$lang['group_open'] = "Åben gruppe";
$lang['group_closed'] = "Lukket gruppe";
$lang['group_hidden'] = "Skjult gruppe";
$lang['group_delete'] = "Slet gruppe";
$lang['group_delete_check'] = "Slet denne gruppe";
$lang['submit_group_changes'] = "Tilføj ændringer";
$lang['reset_group_changes'] = "Nulstil ændringer";
$lang['No_group_name'] = "Du skal vælge et navn til denne gruppe";
$lang['No_group_moderator'] = "Du skal vælge en redaktør til denne gruppe";
$lang['No_group_mode'] = "Du skal vælge en status for denne gruppe, åben eller lukket";
$lang['No_group_action'] = 'Ingen status er angivet';
$lang['delete_group_moderator'] = "Slet den gamle grupperedaktør?";
$lang['delete_moderator_explain'] = "Hvis du ændrer grupperedaktøren, sæt kryds i dette felt for at slette den gamle redaktør fra gruppen. Hvis du ikke sætter kryds, bliver brugeren et normalt medlem af gruppen.";
$lang['Click_return_groupsadmin'] = "Klik %sHer%s for at vende tilbage til Gruppe Administration.";
$lang['Select_group'] = "Vælg en gruppe";
$lang['Look_up_group'] = "Vis Gruppe";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Forum Beskæring";
$lang['Forum_Prune_explain'] = "Dette vil slette enhvert emne, som der ikke er skrevet indlæg til, i det antal dage du vælger. Hvis du ikke indtaster et nummer, bliver alle emner slettet. Emner, hvor der stadig er åbne afstemninger, vil ikke blive slettet, ligesom Annonceringer heller ikke slettes. Du skal slette disse emner manuelt.";
$lang['Do_Prune'] = "Udfør beskæring";
$lang['All_Forums'] = "Alle Fora";
$lang['Prune_topics_not_posted'] = "Slet emner uden nye indlæg i";
$lang['Topics_pruned'] = "Emner slettet";
$lang['Posts_pruned'] = "Indlæg slettet";
$lang['Prune_success'] = "Vellykket beskæring af fora";


//
// Word censor
//
$lang['Words_title'] = "Censurering af ord";
$lang['Words_explain'] = "Fra denne side kan du tilføje, ændre og fjerne ord, der automatisk censureres i dine fora. Folk kan heller ikke registrere med et brugernavn, der indeholder disse ord. Jokere (*) kan bruges i ordfelterne, f.eks. *test* vil matche utestet, test* vil matche tester, *test ville matche utest.";
$lang['Word'] = "Ord";
$lang['Edit_word_censor'] = "Ændre ordcensurér";
$lang['Replacement'] = "Erstatning";
$lang['Add_new_word'] = "Tilføj nyt ord";
$lang['Update_word'] = "Opdatér ordcensurér";

$lang['Must_enter_word'] = "Du skal indtaste et ord og det ords erstatning";
$lang['No_word_selected'] = "Intet ord er valgt til ændring";

$lang['Word_updated'] = "Den valgte ordcensur blev korrekt opdateret";
$lang['Word_added'] = "Ordcensuren blev korrekt tilføjet";
$lang['Word_removed'] = "Den valgte ordcensur blev korrekt fjernet";

$lang['Click_return_wordadmin'] = "Klik %sHer%s for at vende tilbage til Censurering af ord";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Her kan du sende email til alle dine brugere eller alle brugere i en specifik gruppe. For at gøre dette, bliver en email sent til alle de administrative email adresser angivet og en kopi sendes til alle modtagere. Hvis du emailer en stor gruppe mennesker, skal du være tålmodig efter, at du har sendt emailen og stop ikke siden, når den er halvvejs. Det er normalt, at det tager lang tid, du får at vide, når emailen er færdigsendt.";
$lang['Compose'] = "Skriv"; 

$lang['Recipients'] = "Modtagere"; 
$lang['All_users'] = "Alle Brugere";

$lang['Email_successfull'] = "Din besked er afsendt";
$lang['Click_return_massemail'] = "Klik %sHer%s for at vende tilbage til Gruppe email";


//
// Ranks admin
//
$lang['Ranks_title'] = "Rang-administration";
$lang['Ranks_explain'] = "Ved at bruge denne side kan du tilføje, ændre, se og slette rang-niveauer. Du kan også oprettte specifikke niveauer, som kan gives til en bruger gennem brugerværktøjerne.";

$lang['Add_new_rank'] = "Tilføj ny rang";

$lang['Rank_title'] = "Rangtitel";
$lang['Rank_special'] = "Lav til Speciel Rang";
$lang['Rank_minimum'] = "Minimum Indlæg";
$lang['Rank_maximum'] = "Maksimum Indlæg";
$lang['Rank_image'] = "Rang-billede (Relativt ift. phpBB2 hovedfolderen)";
$lang['Rank_image_explain'] = "Bestem her, om et lille billede skal bruges sammen med rangen.";

$lang['Must_select_rank'] = "Du skal vælge en rang";
$lang['No_assigned_rank'] = "Ingen speciel rang tilvalgt";

$lang['Rank_updated'] = "Rangen blev korrekt opdateret";
$lang['Rank_added'] = "Rangen blev korrekt tilføjet";
$lang['Rank_removed'] = "Rangen blev korrekt slettet";
$lang['No_update_ranks'] = 'The rank was successfully deleted. However, user accounts using this rank were not updated.  You will need to manually reset the rank on these accounts';

$lang['Click_return_rankadmin'] = "Klik %sHer%s for at vende tilbage til Niveau Administration";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Forbyd Brugernavn Værktøjer";
$lang['Disallow_explain'] = "Her kan du kontrollere, hvilke brugernavne der er tilladt. Forbudte brugernavne må indeholde en joker, betegnet som et *. Bemærk venligst, at du ikke kan forbyde et brugernavn, der allerede er registreret, du skal først slette det navn og så forbyde det.";

$lang['Delete_disallow'] = "Slet";
$lang['Delete_disallow_title'] = "Fjern et forbudt brugernavn";
$lang['Delete_disallow_explain'] = "Du kan fjerne et forbudt brugernavn ved at vælge brugernavnet fra denne liste og trykke på knappen";

$lang['Add_disallow'] = "Tilføj";
$lang['Add_disallow_title'] = "Tilføj et forbudt brugernavn";
$lang['Add_disallow_explain'] = "Du kan forbyde et brugernavn ved at bruge jokeren * istedet for et tegn";

$lang['No_disallowed'] = "Ingen forbudte brugernavne";

$lang['Disallowed_deleted'] = "Det forbudte brugernavn blev succesfuldt fjernet";
$lang['Disallow_successful'] = "Det forbudte brugernavn blev korrekt tilføjet";
$lang['Disallowed_already'] = "Navnet du indtastede kunne ikke forbydes. Enten eksisterer det allerede i listen, eksisterer i ordcensureringslisten, eller en bruger har det brugernavn";

$lang['Click_return_disallowadmin'] = "Klik %sHer%s for at vende tilbage til Forbyd Brugernavn Værktøjer";


//
// Styles Admin
//
$lang['Styles_admin'] = "Layout Administration";
$lang['Styles_explain'] = "Ved brug af disse værktøjer kan du tilføje, fjerne og ændre layouts (formskemaer og design), der er tilgængelige for dine brugere";
$lang['Styles_addnew_explain'] = "Den følgende liste indeholder alle de designs, der er tilgængelige for de formskemaer, du har. Navnene på listen er endnu ikke installeret i phpBB databasen. For at installere skal du bare klikke på installér linket ved siden af navnet";

$lang['Select_template'] = "Vælg et formskema";

$lang['Style'] = "Layout";
$lang['Template'] = "Formskema";
$lang['Install'] = "Installér";
$lang['Download'] = "Download";

$lang['Edit_theme'] = "Ændre Design";
$lang['Edit_theme_explain'] = "I skemaet nedenunder kan du ændre indstillingerne for det valgte design";

$lang['Create_theme'] = "Opret Design";
$lang['Create_theme_explain'] = "Brug skemaet nedenunder for at oprette et nyt design til det valgte formskema. Når du indtaster farver (for hvilket du skal bruge hexadecimal systemet) skal du ikke bruge # tegnet, f.eks. CCCCCC er brugbart, #CCCCCC er ikke";

$lang['Export_themes'] = "Eksportér Designs";
$lang['Export_explain'] = "I dette panel kan du eksportere design-dataen for et valgt formskema. Vælg formskemaet fra listen nedenunder og databasen vil skabe design konfigurationsfilen og forsøge at gemme den i det valgte formskemas bibliotek. Hvis den ikke kan gemme filen, vil du få muligheden for, at downloade den. For at databasen kan gemme filen, skal du give den lov til at gemme i biblioteket for det valgte formskema. For mere information om dette, se phpBB2 Brugerguiden.";

$lang['Theme_installed'] = "Det valgte design blev korrekt installeret.";
$lang['Style_removed'] = "Det valgte design blev korrekt fjernet fra databasen. For permanent at fjerne dette design fra dit system, skal du slette designet fra dit formskema bibliotek.";
$lang['Theme_info_saved'] = "Design informationen for det valgte formskema er blevet gemt. Du skal nu give rettighederne tilbage i theme_info.cfg filen (og hvis du ønsker, sætte det valgte formskema bibliotek) til læs-kun (read-only)";
$lang['Theme_updated'] = "Det valgte design er opdateret. Du skal nu eksportere de nye design indstillinger";
$lang['Theme_created'] = "Design oprettet. Du skal nu eksportere designet og design konfigurationsfilen som backup eller brug andensteds.";

$lang['Confirm_delete_style'] = "Er du sikker på, at du vil slette dette layout";

$lang['Download_theme_cfg'] = "Databasen kunne ikke skrive til design informationsfilen. Klik på knappen nedenunder for at downloade filen. Når den er downloadet skal du uploade den i det bibliotek, der indeholder formskema filerne. Du kan så pakke filerne til distribution eller brug andensteds, hvis du ønsker.";
$lang['No_themes'] = "Formskemaet du valgte, har ingen designs. For at oprette et nyt design skal du klikke på Opret Nyt Design i venstre side";
$lang['No_template_dir'] = "Formskema biblioteket kunne ikke åbnes. Det er muligvis ikke læseligt af serveren eller også eksisterer det ikke.";
$lang['Cannot_remove_style'] = "Du kan ikke fjerne layoutet eftersom det på nuværende tidspunkt er det layout, der er standard for forummet. Ændre standardlayoutet og prøv igen.";
$lang['Style_exists'] = "Det valgte layout navn eksisterer allerede, gå venligst tilbage og vælg et andet.";

$lang['Click_return_styleadmin'] = "Klik %sHer%s for at vende tilbage til Layout Administration";

$lang['Theme_settings'] = "Design indstillinger";
$lang['Theme_element'] = "Design Element";
$lang['Simple_name'] = "Simpelt Navn";
$lang['Value'] = "Værdi";
$lang['Save_Settings'] = "Gem Indstillinger";

$lang['Stylesheet'] = "CSS Stylesheet";
$lang['Background_image'] = "Baggrundsbillede";
$lang['Background_color'] = "Baggrundsfarve";
$lang['Theme_name'] = "Design Navn";
$lang['Link_color'] = "Linkfarve";
$lang['Text_color'] = "Tekstfarve";
$lang['VLink_color'] = "Besøgt Linkfarve";
$lang['ALink_color'] = "Aktiv Linkfarve";
$lang['HLink_color'] = "Svæver Linkfarve";
$lang['Tr_color1'] = "Tabelrække Farve 1";
$lang['Tr_color2'] = "Tabelrække Farve 2";
$lang['Tr_color3'] = "Tabelrække Farve 3";
$lang['Tr_class1'] = "Tabelrække Klasse 1";
$lang['Tr_class2'] = "Tabelrække Klasse 2";
$lang['Tr_class3'] = "Tabelrække Klasse 3";
$lang['Th_color1'] = "Tabeltop Farve 1";
$lang['Th_color2'] = "Tabeltop Farve 2";
$lang['Th_color3'] = "Tabeltop Farve 3";
$lang['Th_class1'] = "Tabeltop Klasse 1";
$lang['Th_class2'] = "Tabeltop Klasse 2";
$lang['Th_class3'] = "Tabeltop Klasse 3";
$lang['Td_color1'] = "Tabelcelle Farve 1";
$lang['Td_color2'] = "Tabelcelle Farve 2";
$lang['Td_color3'] = "Tabelcelle Farve 3";
$lang['Td_class1'] = "Tabelcelle Klasse 1";
$lang['Td_class2'] = "Tabelcelle Klasse 2";
$lang['Td_class3'] = "Tabelcelle Klasse 3";
$lang['fontface1'] = "Skrifttype 1";
$lang['fontface2'] = "Skrifttype 2";
$lang['fontface3'] = "Skrifttype 3";
$lang['fontsize1'] = "Skriftstørrelse 1";
$lang['fontsize2'] = "Skriftstørrelse 2";
$lang['fontsize3'] = "Skriftstørrelse 3";
$lang['fontcolor1'] = "Skriftfarve 1";
$lang['fontcolor2'] = "Skriftfarve 2";
$lang['fontcolor3'] = "Skriftfarve 3";
$lang['span_class1'] = "Span Klasse 1";
$lang['span_class2'] = "Span Klasse 2";
$lang['span_class3'] = "Span Klasse 3";
$lang['img_poll_size'] = "Afstemningsbillede Størrelse [px]";
$lang['img_pm_size'] = "Private Beskeder Status Størrelse [px]";


//
// Install Process
//
$lang['Welcome_install'] = "Velkommen til phpBB 2 Installationen";
$lang['Initial_config'] = "Generel Konfiguration";
$lang['DB_config'] = "Database Konfiguration";
$lang['Admin_config'] = "Administrator Konfiguration";
$lang['continue_upgrade'] = "Når du har downloadet din config fil til din harddisk, kan du\"Fortsæt Opgradering\" knap nedenunder for at for at fortsætte opgraderingen. Vent venligst med at uploade config filen indtil opgraderingen er færdig.";
$lang['upgrade_submit'] = "Fortsæt Opgradering";

$lang['Installer_Error'] = "En fejl opstod under installationen";
$lang['Previous_Install'] = "En tidligere installation er fundet";
$lang['Install_db_error'] = "En fejl opstod under forsøget på at opgradere databasen";

$lang['Re_install'] = "Din tidligere installation er stadig aktiv. <br /><br />Hvis du vil geninstallere phpBB 2 skal du klikke på Ja knappen nedenunder. Bemærk venligst, at hvis du gør det, vil det slette alle eksisterende data. Ingen backups vil blive lavet! Det administrator brugernavn og kodeord du har brugt til at logge på forummet, vil blive genskabt efter geninstallationen. Ingen andre indstillinger bliver gemt. <br /><br />Tænk dig om inden du trykker Ja!";

$lang['Inst_Step_0'] = "Tak fordi du valgte phpBB 2. For at færdiggøre installationen skal du indtaste de relevante oplysninger nedenunder. Bemærk venligst, at den database du installer i, skal allerede være oprettet. Hvis du installerer en database, der bruger ODBC, f.eks. MS Access skal du oprette en DSN for den inden du fortsætter.";

$lang['Start_Install'] = "Start Installation";
$lang['Finish_Install'] = "Færdiggør Installation";

$lang['Default_lang'] = "Standardsproget på forummet";
$lang['DB_Host'] = "Database Server Hostname / DSN";
$lang['DB_Name'] = "Navnet på din Database";
$lang['DB_Username'] = 'Database Brugernavn';
$lang['DB_Password'] = 'Database Kodeord';
$lang['Database'] = "Din Database";
$lang['Install_lang'] = "Vælg Sprog for Installationen";
$lang['dbms'] = "Database Type";
$lang['Table_Prefix'] = "Fornavn for tabeller i databasen";
$lang['Admin_Username'] = "Administrator Brugernavn";
$lang['Admin_Password'] = "Administrator Kodeord";
$lang['Admin_Password_confirm'] = "Administrator Kodeord [ Bekræft ]";

$lang['Inst_Step_2'] = "Dit administrator brugernavn er oprettet.  På nuværende tidspunkt er den basale installation færdig. Du bliver nu sendt videre til en side, hvor du kan administrere din nye installation. Tjek venligst de Generelle Konfigurations indstillinger og lav de ønskede ændringer. Tak fordi du valgte phpBB 2.";

$lang['Unwriteable_config'] = "Der kan i øjeblikket ikke skrives til din config fil. En kopi af config filen vil blive downloadet til dig, når du trykker på knappen nedenunder. Du skal uploade denne fil til det samme bibliotek, som phpBB 2. Når dette er gjort, skal du logge på, med dit administrator navn og kodeord du valgte på det forrige skema, og gå ind på administrator kontrol centeret (et link vil være tilgængeligt nederst på hver side, når først du er logget på) for at tjekke den genrelle konfiguration. Tak fordi du valgte phpBB 2.";
$lang['Download_config'] = "Download Config";

$lang['ftp_choose'] = "Vælg Download Metode";
$lang['ftp_option'] = "<br />Eftersom FTP udvidelser er tilgængelige i denne version af PHP kan du også først prøve automatisk at uploade config filen til det rette bibliotek.";
$lang['ftp_instructs'] = "Du har valgt automatisk at uploade filen til det bibliotek, der indeholder phpBB 2.  Indtast venligst de krævede oplysninger nedenunder, så den automatiske uploading kan foretages. Bemærk at FTP adressen skal være den nøjagtige adresse via FTP til din phpBB2 installation, som hvis du brugte en FTP klient til at uploade filen.";
$lang['ftp_info'] = "Indtast din FTP Information";
$lang['Attempt_ftp'] = "Forsøg at uploade config filen til det passende bibliotek";
$lang['Send_file'] = "Bare send filen til mig og så uploader jeg den manuelt";
$lang['ftp_path'] = "FTP adresse til phpBB 2";
$lang['ftp_username'] = "Dit FTP Brugernavn";
$lang['ftp_password'] = "Dit FTP Kodeord";
$lang['Transfer_config'] = "Start Upload";
$lang['NoFTP_config'] = "Forsøget på automatisk at uploade config filen slog fejl. Download venligst filen og upload den manuelt.";

$lang['Install'] = "Installér";
$lang['Upgrade'] = "Upgradér";


$lang['Install_Method'] = "Vælg installationsmetode";

$lang['Install_No_Ext'] = "PHP Konfigurationen på din server understøtter ikke den type af database, som du har valgt"; 

$lang['Install_No_PCRE'] = "PhpBB2 Kræver Perl-Compatible Regular Expressions Modulet til php, hvilket din php konfiguration ikke lader til at understøtte!"; 

$lang['ropm_quick_reply'] = 'PM Quick Reply';
$lang['enable_ropm_quick_reply'] = "Enable PM Quick Reply";
$lang['ropm_quick_reply_bbc'] = "Enable BBCode-Buttons";

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Kontrolpanel';
$lang['Shadow_attachments'] = 'Skyggevedhæft';
$lang['Forbidden_extensions'] = 'Forbudte Filendelser';
$lang['Extension_control'] = 'Filendelsekontrol';
$lang['Extension_group_manage'] = 'Filendelse Gruppekontrol';
$lang['Special_categories'] = 'Speciel Kategorier';
$lang['Sync_attachments'] = 'Synkronisere Vedhæft';
$lang['Quota_limits'] = 'Kvote begrænsninger';

// Attachments -> Management
$lang['Attach_settings'] = 'Vedhæft Indstillinger';
$lang['Manage_attachments_explain'] = 'Her kan du indstille hovedindstillingerne for vedhæft. Hvis du trykker Test Indstillinger knappen, vil systemet teste indstillingerne så at du kan være sikker på at alt virker som det skal. Hvis du har problemer med at uploade filer, kør venligst denne test, for at få en detaljeret beskrivelse om hvad fejlen kan være.';
$lang['Attach_filesize_settings'] = 'Indstillinger for filstørrelse i Vedhæft';
$lang['Attach_number_settings'] = 'Indstillinger for Antal Vedhæft';
$lang['Attach_options_settings'] = 'Vedhæftsvalg';

$lang['Upload_directory'] = 'Uploadsfolder';
$lang['Upload_directory_explain'] = 'Skriv den relative sti fra din phpBB2 installation til folderen for upload af vedhæft. F.eks, skriv \'files\' hvis din phpBB2 Installation er under http://www.yourdomain.com/phpBB2 og uploadsfolderen er under http://www.yourdomain.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Posteringsikon for vedhæft';
$lang['Attach_img_path_explain'] = 'Dette billede vises ved siden af vedhæfteslinket i beskeder. Lad feltet stå tomt hvis du ikke vil have et ikon. Denne indstilling vil blive overkørt af Filendelsegruppe indstillingerne.';
$lang['Attach_topic_icon'] = 'Emne ikon for vedhæft';
$lang['Attach_topic_icon_explain'] = 'Dette billede vil blive vist før emne med posteringer med vedhæft. Lad feltet stå tomt hvis du ikke ønsker noget ikon.';
$lang['Attach_display_order'] = 'Visningsrækkefølge for Vedhæft';
$lang['Attach_display_order_explain'] = 'Her kan du vælge at vise vedhæft i Beskeder/PMs i synkende (Nyeste vedhæft først) eller stigende Filtid rækkefølge (Ældste vedhæft først).';
$lang['Show_apcp'] = 'Vis det nye posterings kontrolpanel';
$lang['Show_apcp_explain'] = 'Vælg om du vil vise det nye posterings kontrolpanel (ja) eller den gamle metode med 2 bokse for postering af vedhæftninger og editering af posteret vedhæft (nej) på posteringssiden. For at forklare hvordan det ser ud er vanskelig, derfor er det bedst at du prøver dig frem.';

$lang['Max_filesize_attach'] = 'Filstørrelse';
$lang['Max_filesize_attach_explain'] = 'Maks. filstørrelse for vedhæft. 0 = \'ubegrænset\'. Denne indstilling kan ikke overskride din Server konfiguration. F. eks, hvis din php konfiguration kun tillader maks. 2MB, kan denne indstilling ikke overskride dette.';
$lang['Attach_quota'] = 'vedhæftnings kvote';
$lang['Attach_quota_explain'] = 'Maks. diskplads ALLE vedhæftninger tilsammen skal bruge. 0 = \'ubegrænset\'.';
$lang['Max_filesize_pm'] = 'Maks. Filstørrelse i Private Beskeder';
$lang['Max_filesize_pm_explain'] = 'Maks. diskplads hver bruger kan bruge i Private Beskeder. 0 = \'ubegrænset\'.';
$lang['Default_quota_limit'] = 'Standard Kvote Begrænsning';
$lang['Default_quota_limit_explain'] = 'Her kan du sætte standard kvote begrænsning som automatisk vil blive tildelt nye brugere og brugere som ikke har nogen defineret kvote begrænsning. 
Valget \'Ingen Kvote begrænsning\' er for ikke at bruge kvote begrænsninger, istedenfor bruger standard indstillingerne du har sat i dette panel.';

$lang['Max_attachments'] = 'Maks. Antal af Vedhæftninger';
$lang['Max_attachments_explain'] = 'Maks. antal vedhæft tilladt i en besked.';
$lang['Max_attachments_pm'] = 'Maks antal vedhæft tilladt i Private Beskeder';
$lang['Max_attachments_pm_explain'] = 'Definer maks. antal af vedhæft som er tilladt at lægge ved i en privat besked.';

$lang['Disable_mod'] = 'slå vedhæft fra';
$lang['Disable_mod_explain'] = 'Dette valg er i hovedsagen her for at teste nye temaer, den slår  alle vedhæftnings funktioner på bordet fra, undtagen i admin panelet.';
$lang['PM_Attachments'] = 'Tilladte vedhæft i Private Beskeder';
$lang['PM_Attachments_explain'] = 'Tillader vedhæft i Private Beskeder.';
$lang['Ftp_upload'] = 'Slå FTP Upload til';
$lang['Ftp_upload_explain'] = 'Slår FTP uploads funktion til/fra. Hvis du sætter den til ja, skal du skrive FTP indstillingerne og uploadsfolderen vil ikke mere være i brug.';
$lang['Attachment_topic_review'] = 'Vil du vise vedhæft i forhåndsvisningsvinduet?';
$lang['Attachment_topic_review_explain'] = 'Hvis du vælger ja, vil alle vedhæft blive vist i forhåndsvisningsvinduet når du poster et svar.';

$lang['Ftp_server'] = 'FTP Uploadsserver';
$lang['Ftp_server_explain'] = 'Her kan du skrive IP-Adressen eller FTP-Hostname på Serveren som bruges for upload af filer. Hvis du lader feltet stå tomt, vil Serveren på din phpBB2 Board blive brugt. Det ikke er tilladt at bruge ftp:// eller noget andet til adressen, kun ftp.foo.com eller IP Adressen.';

$lang['Attach_ftp_path'] = 'FTP Sti til uploadsfolderen';
$lang['Attach_ftp_path_explain'] = 'Folderen hvor dine vedhæftninger vil blive gemt. Denne folder syntes ikke at være chmodded. Skriv venligst ikke din IP eller FTP-Adresse her, dette felt er kun for FTP stien.<br />F.eks: /home/web/uploads';
$lang['Ftp_download_path'] = 'Downloadslink til FTP Stien';
$lang['Ftp_download_path_explain'] = 'Skriv URL\'en til FTP stien, hvor dine vedhæft skal gemmes.<br />Hvis du bruger en anden FTP server, skriv da venligst den komplette URL\'en. F.eks: http://www.mystorage.com/phpBB2/upload.<br />Hvis du bruger localhost til at gemme dine filer, kan du skrive den relative sti til phpBB2 folderen. F.eks: \'upload\'.<br /> Lad feltet stå tomt, hvis FTP stien ikke er tilgængelig fra Internettet. Med dette felt stående tomt kan du ikke bruge den fysiske downloads metoden.';
$lang['Ftp_passive_mode'] = 'Slå FTP Passive Mode til';
$lang['Ftp_passive_mode_explain'] = 'Nogle FTP servere kræver Passive Mode, hvis du ikke kan nå din FTP prøv at sætte Passive Mode til.';

$lang['No_ftp_extensions_installed'] = 'Du kan ikke bruge FTP uploads metode, fordi FTP tilegnet er ikke lagt ind i din PHP installation.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Her kan du slette vedhæfts data fra posteringer hvor filene mangler, og slette filer som ikke længer tilhører nogen vedhæft. Du kan downloade eller se på en fil hvis du klikker på den; hvis der ikke er noget link, findes filen ikke på serveren.';
$lang['Shadow_attachments_file_explain'] = 'Slet alle vedhæftsfiler som eksisterer på serveren men som ikke tilhører nogen vedhæft på boardet.';
$lang['Shadow_attachments_row_explain'] = 'Slet alle vedhæft hvor filene mangler.';
$lang['Empty_file_entry'] = 'Ingen filer';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Små billeder nulstillede for vedhæft: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Vedhæft synkroniseringen er færdig.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Håndtere Filendelser';
$lang['Manage_extensions_explain'] = 'Her kan du håndtere dine filendelser. Hvis du vil tillade/ikke tillade en filendelse, brug venligst Filendelsegruppe håndteringen.';
$lang['Explanation'] = 'Forklaring';
$lang['Extension_group'] = 'Filendelsegruppe';
$lang['Invalid_extension'] = 'Ugyldig Filendelse';
$lang['Extension_exist'] = 'Filendelsen %s eksisterer allerede'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Filendelsen %s er forbudt, du kan ikke tilføje denne i tilladte filendelser'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Håndtering af Filendelsegrupper';
$lang['Manage_extension_groups_explain'] = 'Her kan du tilføje, slette og ændre dine Filendelsegrupper, du kan slå Filendelsegrupper fra, tilføje en speciel kategori til dem, ændre downloads proceduren og du kan definere en uploads ikon som vil blive vist før et vedhæft som tilhører gruppen.';
$lang['Special_category'] = 'speciel Kategori';
$lang['Category_images'] = 'Billeder';
$lang['Category_stream_files'] = 'Streame Filer';
$lang['Category_swf_files'] = 'Flash Filer';
$lang['Allowed'] = 'Tilladt';
$lang['Allowed_forums'] = 'tilladte Forumer';
$lang['Ext_group_permissions'] = 'Gruppe Adgang';
$lang['Download_mode'] = 'Downloadsmodus';
$lang['Upload_icon'] = 'Uploadikon';
$lang['Max_groups_filesize'] = 'Maks. Filstørrelse';
$lang['Extension_group_exist'] = 'Filendelsegruppen %s eksisterer allerede'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Håndtere speciel Kategorier';
$lang['Manage_categories_explain'] = 'Her kan du konfigurere speciel Kategorier. Du kan opsætte speciel parameter og forhold for speciel Kategorier tilhørende en Filendelsegruppe.';
$lang['Settings_cat_images'] = 'Indstillinger for speciel Kategori: Billeder';
$lang['Settings_cat_streams'] = 'Indstillinger for speciel Kategori: Streame Filer';
$lang['Settings_cat_flash'] = 'Indstillinger for speciel Kategori: Flash Filer';
$lang['Display_inlined'] = 'Vise Billeder';
$lang['Display_inlined_explain'] = 'Vælg om du vil vise billederne direkte i beskeden (ja) eller vise billedet som et link (nej)?';
$lang['Max_image_size'] = 'Maks. Billedestørrelse';
$lang['Max_image_size_explain'] = 'Her kan du definere maks. tilladt billede størrelse som kan blive tilføjet et vedhæft (Bredde x Højde i piksler).<br />Hvis det bliver sat til 0x0, vil dette blive afslået. Med nogle billeder vil ikke dette virke grundet begrænsninger i PHP.';
$lang['Image_link_size'] = 'Billede link størrelser';
$lang['Image_link_size_explain'] = 'Hvis billedet er større en det du sætter her vil billedet blive vist med et link i stedet for at vise billedet i beskeden.';
$lang['Assigned_group'] = 'Tilladt Gruppe';

$lang['Image_create_thumbnail'] = 'Gem Små billeder';
$lang['Image_create_thumbnail_explain'] = 'Gem altid små billeder. Dette valg overstyrer næsten alle indstillinger i Speciel Kategorien, undtagen maks. Billede størrelse. Med dette valg vil et lille billede blive vist i beskeden og brugeren kan klikke på det for at vise billedet i fuld størrelse.<br />Bemærk venligst at dette kræver at Imagick er installeret, hvis den ikke er installeret eller om du har Safe-Mode til, vil GD-biblioteket i PHP blive brugt. Hvis billedet ikke kan håndteres af PHP, vil denne indstilling blive hoppet over af systemet.';
$lang['Image_min_thumb_filesize'] = 'Mindste Småbillede Filstørrelse';
$lang['Image_min_thumb_filesize_explain'] = 'Hvis et billede er mindre en defineret filstørrelse, vil ingen småbillede blive gemt, fordi det er lile nok.';
$lang['Image_imagick_path'] = 'Imagick Program (Komplet Sti)';
$lang['Image_imagick_path_explain'] = 'Skriv stien til programmet imagick, normalt /usr/bin/convert (i windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Søg Imagick';

$lang['Use_gd2'] = 'Bruge GD2 Biblioteket';
$lang['Use_gd2_explain'] = 'PHP har mulighed til at blive kompilet med GD1 eller GD2 biblioteket for billede manipulering. For at gemme Små billederne korrekt uden brug af imagemagick kan vi bruge to forskellige metoder, baseret på dine valg her. Hvis dine små billeder er af dårlig kvalitet eller ser rare ud, prøv at ændre denne indstilling.';
$lang['Attachment_version'] = 'Attachment Mod Vertion %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Håndtere Forbudte Filendelser';
$lang['Manage_forbidden_extensions_explain'] = 'Her kan du tilføje eller slette forbudte filendelser. Filendelserne php, php3 og php4 er sat op som forbudt som standard for sikkerhedens skyld, du kan ikke slette dem.';
$lang['Forbidden_extension_exist'] = 'Den forbudte filendelsen %s eksisterer allerede'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'Filendelsen %s er defineret i dine tilladte filendelser, slet den venligst der før du tilføjer den her.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Filendelse Gruppe Adgang -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Here you are able to restrict the selected Extension Group to Forums of your choice (defined in the Allowed Forums Box). The Default is to allow Extension Groups to all Forums the User is able to Attach Files into (the normal way the Attachment Mod did it since the beginning). Just add those Forums you want the Extension Group (the Extensions within this Group) to be allowed there, the default ALL FORUMS will disappear when you add Forums to the List. You are able to re-add ALL FORUMS at any given Time. If you add a Forum to your Board and the Permission is set to ALL FORUMS nothing will change. But if you have changed and restricted the access to certain Forums, you have to check back here to add your newly created Forum. It is easy to do this automatically, but this will force you to edit a bunch of Files, therefore i have chosen the way it is now. Please keep in mind, that all of your Forums will be listed here.';
$lang['Note_admin_empty_group_permissions'] = 'BEMÆRK:<br />I listen under er forumer som dine brugere har normalt adgang til at tilføje vedhæft, men siden ingen Filendelsegruppe er tilladt, vil dine brugere ikke kunne tilføje vedhæft. Hvis de prøver, vil de få en fejlmelding. Måske vil du sætte adgangen \'Poste Filer\' til ADMIN i disse forumer.<br /><br />';
$lang['Add_forums'] = 'Tilføj Forum';
$lang['Add_selected'] = 'Tilføj Valgte';
$lang['Perm_all_forums'] = 'ALLE FORUMER';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Håndtere Vedhæftskvote Begrænsninger';
$lang['Manage_quotas_explain'] = 'Her kan du tilføje/slette/ændre Kvote Begrænsninger. Du har mulighed for at lægge disse Kvote begrænsninger til brugere og grupper senere. For at tilføje Kvote Begrænsning til en bruger, skal du gå til Brugere->Håndtering, vælg brugeren og du finder valget i bunden. For at tilføje Kvote Begrænsning til en gruppe, gå til Grupper->Håndtering, vælg gruppen for at ændre den, og du kan se konfiguration indstillingerne. Hvis du vil se hvilke brugere og grupper som er lagt til en specifik Kvote Begrænsning, Klik på \'Vis\' på venstre side af Kvote Beskrivelsen.';
$lang['Assigned_users'] = 'Brugere som er tilføjet';
$lang['Assigned_groups'] = 'Grupper som er tilføjet';
$lang['Quota_limit_exist'] = 'Kvote Begrænsningen %s eksisterer allerede.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Filhedhæft Kontrolpanel';
$lang['Control_panel_explain'] = 'Her kan du se og håndtere alle vedhæft baseret på Bruger, Vedhæft, Visninger etc...';
$lang['File_comment_cp'] = 'Filkommentar';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Brug * for at søge på dele af et ord';
$lang['Size_smaller_than'] = 'vedhæftsstørrelse mindre end (bytes)';
$lang['Size_greater_than'] = 'vedhæftsstørrelse større end (bytes)';
$lang['Count_smaller_than'] = 'Downloadsantal mindre end';
$lang['Count_greater_than'] = 'Downloadsantal større end';
$lang['More_days_old'] = 'Mere end så mange dager gammelt';
$lang['No_attach_search_match'] = 'Ingen vedhæft fundet for din søgening';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Antal Vedhæft';
$lang['Total_filesize'] = 'Totalt Filstørrelse';
$lang['Number_posts_attach'] = 'Antal posteringer med vedhæft';
$lang['Number_topics_attach'] = 'Antal emner med vedhæft';
$lang['Number_users_attach'] = 'Antal Brugere som har tilføjet vedhæft';
$lang['Number_pms_attach'] = 'Totalt antal vedhæft i Private Beskeder';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Vedhæftsstatistik for %s'; // replace %s with username
$lang['Size_in_kb'] = 'Størrelse (KB)';
$lang['Downloads'] = 'Downloads';
$lang['Post_time'] = 'Postet';
$lang['Posted_in_topic'] = 'Postet i Emne';
$lang['Submit_changes'] = 'Gem ændringerne';

// Sort Types
$lang['Sort_Attachments'] = 'Vedhæft';
$lang['Sort_Size'] = 'Størrelse';
$lang['Sort_Filename'] = 'Filnavn';
$lang['Sort_Comment'] = 'Kommentar';
$lang['Sort_Extension'] = 'Filendelse';
$lang['Sort_Downloads'] = 'Downloads';
$lang['Sort_Posttime'] = 'Postet';
$lang['Sort_Posts'] = 'Posteringer';

// View Types
$lang['View_Statistic'] = 'Statistikker';
$lang['View_Search'] = 'Søg';
$lang['View_Username'] = 'Brugernavn';
$lang['View_Attachments'] = 'Vedhæft';

// Successfully updated
$lang['Attach_config_updated'] = 'Vedhæftskonfigurationen blev vellykket opdateret';
$lang['Click_return_attach_config'] = 'Klik %sHer%s for at gå tilbage til Vedhæftskonfigurationen';
$lang['Test_settings_successful'] = 'Testen er færdig, konfigurationen ser ud til at være i orden.';

// Some basic definitions
$lang['Attachments'] = 'Vedhæft';
$lang['Attachment'] = 'Vedhæft';
$lang['Extensions'] = 'Filendelser';
$lang['Extension'] = 'Filendelse';

// Auth pages
$lang['Auth_attach'] = 'Postere Filer';
$lang['Auth_download'] = 'Download Filer';

//
// That's all Folks!
// -------------------------------------------------

?>