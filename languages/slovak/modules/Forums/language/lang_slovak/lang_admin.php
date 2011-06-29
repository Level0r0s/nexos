<?php
/***************************************************************************
 *                            lang_admin.php [Slovak]
 *                            ----------------------
 *     characterset         : Windows-1250
 *     begin                : 09-08-2002
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : kolenkas@stonline.sk
 *     convert2iso          : Kukymann
 *     www                  : 
 *
 *     $Id: lang_admin.php,v 1.1 2004/08/04 01:20:54 akamu Exp $
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

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Všeobecné";
$lang['Users'] = "Užívatelia";
$lang['Groups'] = "Skupiny";
$lang['Forums'] = "Fórum";
$lang['Styles'] = "Štýly";

$lang['Configuration'] = "Konfigurácia";
$lang['Permissions'] = "Povolenia";
$lang['Manage'] = "Administrácia";
$lang['Disallow'] = "Nepovolené mená";
$lang['Prune'] = "Prečistenie";
$lang['Mass_Email'] = "Hromadný e-mail";
$lang['Ranks'] = "Hodnotenia";
$lang['Smilies'] = "Smajlíky (emotikony)";
$lang['Ban_Management'] = "Zakázanie vstupu";
$lang['Word_Censor'] = "Cenzúra slov";
$lang['Export'] = "Exportovať";
$lang['Create_new'] = "Vytvoriť";
$lang['Add_new'] = "Pridať";
$lang['Backup_DB'] = "Zálohovať databázu";
$lang['Restore_DB'] = "Obnoviť databázu";


//
// Index
//
$lang['Admin'] = "Administrácia";
$lang['Not_admin'] = "Nemáte oprávnenie k administrácii tohto fóra";
$lang['Welcome_phpBB'] = "Vitajte na phpBB";
$lang['Admin_intro'] = "Ďakujeme, že ste si zvolil(a) phpBB ako riešenie pre Vaše fórum. Táto stránka slúží k rýchlemu zobrazeniu rôznych štatistík Vášho fóra. Pokiaľ sa budete chcieť vrátiť späť na túto stránku kliknite na odkaz <u>Obsah administrácie</u> v ľavom paneli. Pre návrat na obsah Vášho fóra, kliknite na logo fóra, ktoré je umiestnené tiež na ľavom paneli. Ostatné odkazy na ľavom paneli tejto stránky Vás dovedú k jednotlivým položkám možného nastavenia fóra podľa Vašich požiadaviek, každá stránka obsahuje návod ako použiť danú funkciu.";

$lang['Main_index'] = "Obsah fóra";
$lang['Forum_stats'] = "Štatistiky fóra";
$lang['Admin_Index'] = "Obsah administrácie";
$lang['Preview_forum'] = "Náhľad na fórum";

$lang['Click_return_admin_index'] = "Kliknite %ssem%s pre návrat na obsah administrácie";

$lang['Statistic'] = "Štatistiky";
$lang['Value'] = "Hodnota";
$lang['Number_posts'] = "Počet príspevkov";
$lang['Posts_per_day'] = "Príspevkov za deň";
$lang['Number_topics'] = "Počet tém";
$lang['Topics_per_day'] = "Tém za deň";
$lang['Number_users'] = "Počet užívateľov";
$lang['Users_per_day'] = "Užívateľov za deň";
$lang['Board_started'] = "Fórum spustené";
$lang['Avatar_dir_size'] = "Veľkosť adresára s obrázkami postavičiek";
$lang['Database_size'] = "Veľkosť databázy";
$lang['Gzip_compression'] ="GZIP kompresia";
$lang['Not_available'] = "Nedostupné";

$lang['ON'] = "Áno"; // This is for GZip compression
$lang['OFF'] = "Nie";


//
// DB Utils
//
$lang['Database_Utilities'] = "Databázové nástroje";

$lang['Restore'] = "Obnovenie";
$lang['Backup'] = "Zálohovanie";
$lang['Restore_explain'] = "Táto funkcia je určená k úplnému obnoveniu všetkých databázových tabuliek phpBB fóra z uložených súborov. Ak to Váš server podporuje, môžete použiť GZIP komprimované textové súbory a tie potom budú automaticky dekomprimované. <b>POZOR</b> Týmto budú prepísané všetky existujúce dáta. Obnovenie potrebuje dlhší čas na spracovanie, preto prosím neodchádzajte z tejto stránky pokiaľ nebude všetko dokončené.";
$lang['Backup_explain'] = "Táto funkcia je určená na kompletnú zálohu dát phpBB fóra. Ak používate niektoré ďalšie tabuľky spoločne s phpBB databázou, doporučujeme ich tiež zazálohovať, zadajte preto prosím názvy tabuliek a oddeľte ich oddeľovačom (,). Ak to Váš server podporuje, môžete použiť GZIP kompresiu dát pre zmenšenie veľkosti súborov pred ich stiahnutím do Vášho počítača.";

$lang['Backup_options'] = "Nastavenie zálohy";
$lang['Start_backup'] = "Spustiť zálohovanie";
$lang['Full_backup'] = "Kompletná záloha";
$lang['Structure_backup'] = "Zálohovať len štruktúru";
$lang['Data_backup'] = "Zálohovať len dáta";
$lang['Additional_tables'] = "Ďalšie tabuľky";
$lang['Gzip_compress'] = "GZIP kompresia súborov";
$lang['Select_file'] = "Zvoliť súbor";
$lang['Start_Restore'] = "Spustiť obnovenie";

$lang['Restore_success'] = "Databáza bola úspešne obnovená.<br><br>Vaše fórum by teraz malo byť v stave pred vykonaním zálohy.";
$lang['Backup_download'] = "Prosím počkajte na začiatok sťahovania";
$lang['Backups_not_supported'] = "Ľutujem, ale zálohovanie databázy nie je v súčasnej dobe vo vešom databázovom systéme podporované";

$lang['Restore_Error_uploading'] = "Vyskytla sa chyba pri nahrávaní súboru zálohy";
$lang['Restore_Error_filename'] = "Vyskytol sa problém s menom súboru, skúste iné";
$lang['Restore_Error_decompress'] = "Nebolo možné dekomprimovať GZIP súbor, použite textový súbor";
$lang['Restore_Error_no_file'] = "Nebol nahratý žiadny súbor";


//
// Auth pages
//
$lang['Select_a_User'] = "Zvoliť užívateľa";
$lang['Select_a_Group'] = "Zvoliť skupinu";
$lang['Select_a_Forum'] = "Zvoliť fórum";
$lang['Auth_Control_User'] = "Užívateľské oprávnenia";
$lang['Auth_Control_Group'] = "Oprávnenia skupiny";
$lang['Auth_Control_Forum'] = "Oprávnenia fóra";
$lang['Look_up_User'] = "Zvoliť užívateľa";
$lang['Look_up_Group'] = "Zvoliť skupinu";
$lang['Look_up_Forum'] = "Zvoliť fórum";

$lang['Group_auth_explain'] = "Tu môžete meniť oprávnenia a priradiť moderovanie skupine užívateľov. Nezabudnite, aby pred zmenou oprávnenia  skupina oprávnených mala stále povolený vstup užívateľa na fórum.";
$lang['User_auth_explain'] = "Tu môžete meniť oprávnenia a priradiť moderovánie zvolenému užívateľovi. Nezabudnite pred zmenou oprávnenia,,aby skupina oprávnených mala stále povolený vstup užívateľa na fórum.";
$lang['Forum_auth_explain'] = "Tu môžete nastaviť úroveň zabezpečenia fóra. Môžete zvoliť základný alebo rozšírený mód pre túto činnosť. Rozšírený mód ponúka oveľa väčšiu škálu možností pre nastavenie fóra. Pamätajte, že pred zmenou zabezpečenia fóra by sa na fóre nemali vykonávať iné operácie.";

$lang['Simple_mode'] = "Základný režim";
$lang['Advanced_mode'] = "Rozšírený režim";
$lang['Moderator_status'] = "Moderátor";

$lang['Allowed_Access'] = "Prístup povolený";
$lang['Disallowed_Access'] = "Prístup zamietnutý";
$lang['Is_Moderator'] = "Je moderátorom";
$lang['Not_Moderator'] = "Nie je moderátorom";

$lang['Conflict_warning'] = "Varovanie, autorizačný konflikt";
$lang['Conflict_access_userauth'] = "Tento užívateľ má požadované prístupové práva k tomuto fóre cez členstvo v skupine. Môžete povoliť oprávnenie skupine alebo odstrániť tohto užívateľa zo skupiny pre úplné zabránenie požadovaných prístupových práv.";
$lang['Conflict_mod_userauth'] = "Tento moderátor má požadované práva pre toto fórum cez členstvo v skupine. Môžete povoliť oprávnenie skupine alebo odstrániť tohto užívateľa zo skupiny pre úplné zabránenie požadovaných prístupových práv.";
$lang['Conflict_access_groupauth'] = "Nasledovný užívateľ (užívatelia) majú požadované práva pre toto fórum cez ich nastavené oprávnenia. Môžete povoliť oprávnenie skupine alebo odstrániť tohto užívateľa zo skupiny pre úplné zabránenie požadovaných prístupových práv.";
$lang['Conflict_mod_groupauth'] = "Následovný užívateľ (užívatelia) majú požadované práva pre toto fórum cez ich nastavené oprávnenia. Môžete povoliť oprávnenia skupine alebo odstrániť tohto užívateľa zo skupiny pre úplné zabránenie požadovaných prístupových práv.";

$lang['Public'] = "Verejný";
$lang['Private'] = "Súkromný";
$lang['Registered'] = "Registrovaný";
$lang['Administrators'] = "Administrátor";
$lang['Hidden'] = "Skrytý";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "Všetci";
$lang['Forum_REG'] = "Registrovaní";
$lang['Forum_PRIVATE'] = "Súkromné";
$lang['Forum_MOD'] = "Moderátor";
$lang['Forum_ADMIN'] = "Administrátor";

$lang['View'] = "Zobraziť";
$lang['Read'] = "Čítať";
$lang['Post'] = "Odoslať";
$lang['Reply'] = "Odpovedať";
$lang['Edit'] = "Upraviť";
$lang['Delete'] = "Odstrániť";
$lang['Sticky'] = "Dôležité";
$lang['Announce'] = "Oznámenia";
$lang['Vote'] = "Hlasovania";
$lang['Pollcreate'] = "Hlas pridaný";

$lang['Permissions'] = "Oprávnenia";
$lang['Simple_Permission'] = "Základné oprávnenie";

$lang['User_Level'] = "Užívateľská úroveň";
$lang['Auth_User'] = "Užívateľ";
$lang['Auth_Admin'] = "Administrátor";
$lang['Group_memberships'] = "Členstvo užívateľskej skupiny";
$lang['Usergroup_members'] = "Táto skupina má nasledovných členov";

$lang['Forum_auth_updated'] = "Oprávnenia fóra aktualizované";
$lang['User_auth_updated'] = "Užívateľské oprávnenia aktualizované";
$lang['Group_auth_updated'] = "Oprávnenia skupiny aktualizované";

$lang['Auth_updated'] = "Oprávnenie bolo aktualizované";
$lang['Click_return_userauth'] = "Kliknite %ssem%s pre návrat do užívateľského oprávnenia";
$lang['Click_return_groupauth'] = "Kliknite %ssem%s pre návrat do oprávnenia skupiny";
$lang['Click_return_forumauth'] = "Kliknite %ssem%s pre návrat do oprávnenia fóra";


//
// Banning
//
$lang['Ban_control'] = "Zakázanie vstupu";

$lang['Ban_explain'] = "Tu môžete zakázať vstup zvoleným užívateľom. Môžete zakázať konkrétneho užívateľa alebo rozsah IP adries alebo meno počítača. Touto metódou ochránite Vaše fórum proti vstupu nežiadúcich užívateľov na stránky fóra. Proti registrácii užívateľa pod iným menom môžete zakázať jeho e-mailovú adresu.";
$lang['Ban_explain_warn'] = "Dávajte si prosím pozor pri zadávaní rozsahu IP adries či sú všetky adresy od začiatku do konca v zozname. Doporučuje sa, aby bol zoznam uložených IP adries v databáze čo najmenší, preto sa pokúste radšej použiť znak \"*\" pre špecifikáciu namiesto zadávania rozsahu IP adries. Pokiaľ je aj tak porebné zadať rozsah IP adries, pokúste sa aby bol zoznam čo najkratší.";

$lang['Select_username'] = "Zvoľte užívateľa";
$lang['Select_ip'] = "Zvoľte IP";
$lang['Select_email'] = "Zvoľte e-mailovú adresu";

$lang['Ban_username'] = "Zakázánie vstupu zadaným užívateľom";
$lang['Ban_username_explain'] = "Ak chcete pridať do zakázaných niektorého užívateľa, zadajte tu jeho meno, prípadne ho vyhľadajte v zozname registrovaných užívateľov.";

$lang['Ban_IP'] = "Zakázanie vstupu podľa IP adresy alebo mena počítača";
$lang['Ban_IP_explain'] = "Tu môžete zadať názov počítača, či IP adresy, ktorým chcete zakázať vstup. Jednotlivé adresy či mená od seba oddeľte oddeľovačom. Ak chcete zadať rozsah IP adries, oddeľte ich od seba znakom \"-\". Môžete použiť i znak\"*\" pre nahradenie časti reťazca.";

$lang['IP_hostname'] = "IP adresa alebo meno počítača";

$lang['Ban_email'] = "Zakázanie vstupu podľa e-mailových adries";
$lang['Ban_email_explain'] = "Tu môžete zadať zoznam e-mailových adries, ktorým chcete zamedziť vstup, jednotlivé adresy od seba oddeľte oddeľovačom. Môžete použiť i znak \"*\" pre nahradenie časti adresy, napr. *@hotmail.com";

$lang['Unban_username'] = "Vyňatie užívateľov zo zoznamu zakázaných";
$lang['Unban_username_explain'] = "Ak chcete vyňať niekterých užívateľov z tohto zoznamu, označte ich pomocou myši či klávesnice a potvrďte odoslaním.";

$lang['Unban_IP'] = "Vyňatie IP adries zo zoznamu zakázaných";
$lang['Unban_IP_explain'] = "Ak chcete vyňať niektoré IP adresy z tohto zoznamu, označte ich pomocou myši či klávesnice a potvrďte odoslaním.";

$lang['Unban_email'] = "Vyňatie e-mailových adries zo zoznamu zakázaných";
$lang['Unban_email_explain'] = "Ak chcete vyňať niektoré e-mailové adresy z tohto zoznamu, označte ich pomocou myši či klávesnice a potvrďte odoslaním.";

$lang['No_banned_users'] = "Žiadni zakázaní užívatelia";
$lang['No_banned_ip'] = "Žiadne zakázané IP adresy";
$lang['No_banned_email'] = "Žiadne zakázané e-mail adresy";

$lang['Ban_update_sucessful'] = "Zoznam zakázaných užívateľov bol úspešne aktualizovaný";
$lang['Click_return_banadmin'] = "Kliknite %ssem%s pre návrat do ovládacieho panelu zakázanie vstupu";


//
// Configuration
//
$lang['General_Config'] = "Konfigurácia";
$lang['Config_explain'] = "Nižšie uvedené položky Vám umožnia nastaviť fórum podľa Vašich požiadaviek. Pre nastavenie užívateľov fóra používajte odkazy v ľavej časti stránky.";

$lang['Click_return_config'] = "Kliknite %ssem%s pre návrat do konfigurácie";

$lang['General_settings'] = "Všeobecné nastavenie fóra";
$lang['Server_name'] = "Meno domény";
$lang['Server_name_explain'] = "Doménové meno tohto fóra beží na";
$lang['Script_path'] = "Cesta ku skriptom";
$lang['Script_path_explain'] = "Cesta ku skriptom phpBB, relatívne umiestnenie v doméne";
$lang['Server_port'] = "Port servera";
$lang['Server_port_explain'] = "Port, na ktorom beží Váš server, štandardne 80";
$lang['Site_name'] = "Meno fóra";
$lang['Site_desc'] = "Popis fóra";
$lang['Board_disable'] = "Zablokovať fórum";
$lang['Board_disable_explain'] = "Týmto zneprístupníte fórum pre užívateľov. Neodhlasujte sa pokiaľ ste zneprístupnil fórum, inak sa nebudete môcť nalogovať späť!";

$lang['Acct_activation'] = "Spôsob aktivácie účtu";
$lang['Acc_None'] = "Žiadny"; // These three entries are the type of activation
$lang['Acc_User'] = "Užívateľom";
$lang['Acc_Admin'] = "Administrátorom";

$lang['Abilities_settings'] = "Základné nastavenie pre užívateľa a fórum";
$lang['Max_poll_options'] = "Maximálna hodnota pri hlasovaní";
$lang['Flood_Interval'] = "Ochranný interval";
$lang['Flood_Interval_explain'] = "Počet sekúnd, počas ktorých musí užívateľ počkať medzi príspevkami";
$lang['Board_email_form'] = "E-mail užívateľa cez toto fórum";
$lang['Board_email_form_explain'] = "Umožňuje zasielanie e-mailov iným užívateľom cez toto fórum";
$lang['Topics_per_page'] = "Tém na stránku";
$lang['Posts_per_page'] = "Príspevkov na stránku";
$lang['Hot_threshold'] = "Príspevky do prípustnej hranice";
$lang['Default_style'] = "Východzí vzhľad";
$lang['Override_style'] = "Nahradiť užívateľom zvolený vzhľad";
$lang['Override_style_explain'] = "Použije východzí vzhľad namiesto zvoleného užívateľom";
$lang['Default_language'] = "Východzí jazyk";
$lang['Date_format'] = "Formát dátumu";
$lang['System_timezone'] = "Časové pásmo fóra";
$lang['Enable_gzip'] = "Povoliť GZIP kompresiu";
$lang['Enable_prune'] = "Povoliť prečistenie fóra";
$lang['Allow_HTML'] = "Povoliť HTML";
$lang['Allow_BBCode'] = "Povoliť značky";
$lang['Allowed_tags'] = "Povolené HTML značky";
$lang['Allowed_tags_explain'] = "Oddeľte značky oddeľovačom (,)";
$lang['Allow_smilies'] = "Povoliť smajlíky (emotikony)";
$lang['Smilies_path'] = "Cesta k umiestneniu smajlíkov";
$lang['Smilies_path_explain'] = "Cesta mimo Váš phpBB kmeňový adresár, pr.: images/smilies";
$lang['Allow_sig'] = "Povoliť podpisy";
$lang['Max_sig_length'] = "Maximálna dĺžka podpisu";
$lang['Max_sig_length_explain'] = "Maximálny počet znakov užívateľovho podpisu";
$lang['Allow_name_change'] = "Povoliť zmenu užívateľského mena";

$lang['Avatar_settings'] = "Nastavenia obrázkov postavičiek";
$lang['Allow_local'] = "Povoliť galériu postavičiek";
$lang['Allow_remote'] = "Povoliť vzdialené obrázky postavičiek";
$lang['Allow_remote_explain'] = "Obrázok postavičky prepojený na iný WWW server";
$lang['Allow_upload'] = "Povoliť prihrávanie obrázkov postavičiek";
$lang['Max_filesize'] = "Maximálna veľkosť súboru s obrázkom postavičky";
$lang['Max_filesize_explain'] = "Pre prihrávanie súborov obrázkov postavičiek";
$lang['Max_avatar_size'] = "Maximálne rozmery obrázku postavičky";
$lang['Max_avatar_size_explain'] = "(výška x šírka v bodoch)";
$lang['Avatar_storage_path'] = "Cesta na ukladanie obrázkov postavičiek";
$lang['Avatar_storage_path_explain'] = "Cesta mimo Váš phpBB kmeňový adresár, pr.: images/avatars";
$lang['Avatar_gallery_path'] = "Cesta ku galérii obrázkov postavičiek";
$lang['Avatar_gallery_path_explain'] = "Cesta mimo Váš phpBB kmeňový adresár pre prednastavené obrázky, pr.:images/avatars/gallery";

$lang['COPPA_settings'] = "COPPA nastavenia";
$lang['COPPA_fax'] = "COPPA faxové číslo";
$lang['COPPA_mail'] = "COPPA e-mailové adresy";
$lang['COPPA_mail_explain'] = "Toto je zoznam adries na ktoré budú rodičia zasielať COPPA registračný formulár";

$lang['Email_settings'] = "Nastavenia e-mailov";
$lang['Admin_email'] = "Administrátorova e-mailová adresa:";
$lang['Email_sig'] = "Podpis e-mailu";
$lang['Email_sig_explain'] = "Tento text bude pripojený ku všetkým e-mailom odoslaným z tohto fóra";

$lang['Use_SMTP'] = "Použiť SMTP Server pre e-mail";
$lang['Use_SMTP_explain'] = "Zvoľte Áno ak chcete odosielať e-maily cez meno servra namiesto lokálnej mail funkcie.";
$lang['SMTP_server'] = "Adresa SMTP servera";
$lang['SMTP_username'] = "SMTP účet";
$lang['SMTP_username_explain'] = "Zadajte len v prípade, že to Váš SMTP server vyžaduje";
$lang['SMTP_password'] = "SMTP heslo";
$lang['SMTP_password_explain'] = "Zadajte len v prípade, že to Váš SMTP server vyžaduje";

$lang['Disable_privmsg'] = "Súkromné zprávy";
$lang['Inbox_limits'] = "Max. počet príspevkov v zložke doručené";
$lang['Sentbox_limits'] = "Max. počet príspevkov v zložke odoslané";
$lang['Savebox_limits'] = "Max. počet príspevkov v zložke uložené";

$lang['Cookie_settings'] = "Nastavení Cookie";
$lang['Cookie_settings_explain'] = "Toto detailné nastavenie definuje ako budú zasielané cookies vo Vašom prehliadači. Doporučujeme ponechať východzie hodnoty nastavení cookie ale je možné zmeniť hodnoty podľa Vašich požiadaviek, nastavenie sa prejeví až po novom prihlásení.";
$lang['Cookie_domain'] = "Doména Cookie";
$lang['Cookie_name'] = "Meno Cookie";
$lang['Cookie_path'] = "Cesta k Cookie";
$lang['Cookie_secure'] = "Zabezpečenie Cookie";
$lang['Cookie_secure_explain'] = "Ak váš server beží cez SSL nastavte na povolené, ak nie tak nastavte zakázané";
$lang['Session_length'] = "Dĺžka platnosti Session [ sekúnd ]";


//
// Forum Management
//
$lang['Forum_admin'] = "Administrácia fóra";
$lang['Forum_admin_explain'] = "Z tohto panelu môžete pridávať, odstrániť, upravovať, triediť a synchronizovať kategórie fóra";
$lang['Edit_forum'] = "Úprava fóra";
$lang['Create_forum'] = "Vytvoriť nové fórum";
$lang['Create_category'] = "Vytvoriť novú kategóriu";
$lang['Remove'] = "Vyňať";
$lang['Action'] = "Akcia";
$lang['Update_order'] = "Aktualizovať instrukcie";
$lang['Config_updated'] = "Zmena konfigurácie fóra bola úspešne dokončená";
$lang['Edit'] = "Upraviť";
$lang['Delete'] = "Odstrániť";
$lang['Move_up'] = "presunúť hore";
$lang['Move_down'] = "presunúť dole";
$lang['Resync'] = "Synchronizovať";
$lang['No_mode'] = "Mód nebol priradený";
$lang['Forum_edit_delete_explain'] = "Nižšie uvedený formulár Vám umožní úpravy všeobecných nastavení fóra. Pre nastavenia užívateľov a fóra používajte odkazy v ľavej časti stránky.";

$lang['Move_contents'] = "Presunúť celý obsah";
$lang['Forum_delete'] = "Odstrániť fórum";
$lang['Forum_delete_explain'] = "Nižšie uvedený formulár Vám umožní odstrániť fóra či kategórie a rozhodnúť kam chcete dať všetky témy, které sú v ňom obsiahnuté.";

$lang['Forum_settings'] = "Všeobecné nastavenia fóra";
$lang['Forum_name'] = "Meno fóra";
$lang['Forum_desc'] = "Popis";
$lang['Forum_status'] = "Stav fóra";
$lang['Forum_pruning'] = "Automatické prečistenie";

$lang['prune_freq'] = "Kontrolovať staršie témy každých";
$lang['prune_days'] = "Odstrániť témy ktoré sú staršie";
$lang['Set_prune_data'] = "Chcete nastaviť povolenie automatického prečistenia tohto fóra, ale nemáte nastavenú početnosť alebo počet dní. Vráťte sa prosím späť a zadajte požadované hodnoty.";

$lang['Move_and_Delete'] = "Presunúť a odstrániť";

$lang['Delete_all_posts'] = "Odstrániť všetky príspevky";
$lang['Nowhere_to_move'] = "Sem sa to nedá presunúť";

$lang['Edit_Category'] = "Úprava kategórie";
$lang['Edit_Category_explain'] = "Použite tento formulár pre úpravu mena kategórie.";

$lang['Forums_updated'] = "Fórum a informácie o skupine boli aktualizované";

$lang['Must_delete_forums'] = "Musíte odstrániť všetky fóra ešte pred odstránením tejto kategórie";

$lang['Click_return_forumadmin'] = "Kliknite %ssem%s pre návrat do administrácie fóra";


//
// Smiley Management
//
$lang['smiley_title'] = "Úprava smajlíkov (emotikon)";
$lang['smile_desc'] = "Na tejto stránke môžete pridávať, odoberať a upravovať smajlíky (emotikony), ktoré môžu Vaši užívatelia používať v príspevkoch a súkromných správach.";

$lang['smiley_config'] = "Nastavenia smajlíkov";
$lang['smiley_code'] = "Kód smajlíka";
$lang['smiley_url'] = "Grafický súbor smajlíka";
$lang['smiley_emot'] = "Výraz smajlíka";
$lang['smile_add'] = "Pridaj nový smajlík";
$lang['Smile'] = "Smajlík";
$lang['Emotion'] = "Výraz";

$lang['Select_pak'] = "Vyberte (.pak) súbor";
$lang['replace_existing'] = "Nahradiť doterajší smajlík";
$lang['keep_existing'] = "Ponechať existujúci smajlík";
$lang['smiley_import_inst'] = "Rozbaľte kolekciu smajlíkov a nahrajte všetky súbory do príslušného adresára smajlíkov pre inštaláciu.  Potom vyberte správnu informáciu v tomto formulári k importovaniu kolekcie smajlíkov.";
$lang['smiley_import'] = "Import kolekcie smajlíkov";
$lang['choose_smile_pak'] = "Vyberte súbor smajlíkov (.pak)";
$lang['import'] = "Importuj smajlíkov";
$lang['smile_conflicts'] = "Co urobiť v prípade konfliktov ?";
$lang['del_existing_smileys'] = "Pred importovaním zmažte doterajších smajlíkov";
$lang['import_smile_pack'] = "Importovať kolekciu smajlíkov";
$lang['export_smile_pack'] = "Vytvoriť kolekciiu smajlíkov";
$lang['export_smiles'] = "Pokiaľ chcete vytvoriť kolekciu smajlíkov z dosiaľ používaných smajlíkov, kliknite %ssem%s a stiahnite súbor smiles.pak. Pomenujte tento príslušný súbor, ale nezabudnite zachovať príponu (.pak). Potom vytvorte komprimovaný súbor všetkých Vašich smajlíkov aj s Vašim súborom nastavení .pak";

$lang['smiley_add_success'] = "Smajlík bol úspešne pridaný !";
$lang['smiley_edit_success'] = "Smajlík bol úspešne zmenený !";
$lang['smiley_import_success'] = "Súbor smajlíkov bol úspešne importovaný !";
$lang['smiley_del_success'] = "Smajlík bol úspešne odstránený";
$lang['Click_return_smileadmin'] = "Kliknite %ssem%s pre návrat do administrácie smajlíkov";


//
// User Management
//
$lang['User_admin'] = "Užívateľská administrácia";
$lang['User_admin_explain'] = "Tu môžete zmeniť informáciu o užívateľovi a niektoré špecifické nastavenia. K úprave práv použite užívateľa a skupinový povoľovací systém.";

$lang['Look_up_user'] = "Zvoliť užívateľa";

$lang['Admin_user_fail'] = "Nie je možné zmeniť nastavenia užívateľa.";
$lang['Admin_user_updated'] = "Zmena nastavení užívateľa prebehla úspešne.";
$lang['Click_return_useradmin'] = "Kliknite %ssem%s pre návrat do Užívateľskej administrácie";

$lang['User_delete'] = "Odstrániť tohto užívateľa";
$lang['User_delete_explain'] = "Tu zmažete tohto užívateľa. Nemožno vziať späť !";
$lang['User_deleted'] = "Užívateľ úspešne odstránený.";

$lang['User_status'] = "Užívateľ je aktívny";
$lang['User_allowpm'] = "Môže posielať súkromné správy";
$lang['User_allowavatar'] = "Môže zobrazovať postavičky";

$lang['Admin_avatar_explain'] = "Tu môžete vidieť a odstrániť súčasnú užívateľovu postavičku.";

$lang['User_special'] = "Zvláštne oblasti administrátorských nastavení";
$lang['User_special_explain'] = "Tieto oblasti nemôžu byť upravované užívateľmi. Tu môžete nastaviť ich zaradenie a ďalšie oblasti, ktoré nie sú užívateľom priradené.";



//
// Group Management
//
$lang['Group_administration'] = "Skupinová administrácia";
$lang['Group_admin_explain'] = "Z tohto panelu môžete spravovať všetky užívateľské skupiny, môžete odstrániť, vytvoriť a meniť súčasné skupiny, môžete vyberať moderátorov, zamknúť otvorené/uzavreté skupiny a nastaviť meno a popis skupiny";
$lang['Error_updating_groups'] = "Pri nahrávání skupín došlo k chybe";
$lang['Updated_group'] = "Skupina bola úspešne nahratá";
$lang['Added_new_group'] = "Nová skupina bola úspešne vytvorená";
$lang['Deleted_group'] = "Skupina bola úspešne odstránená";
$lang['New_group'] = "Vytvoriť novú skupinu";
$lang['Edit_group'] = "Zmeniť skupinu";
$lang['group_name'] = "Meno skupiny";
$lang['group_description'] = "Popis skupiny";
$lang['group_moderator'] = "Moderátor skupiny";
$lang['group_status'] = "Nastavenia skupiny";
$lang['group_open'] = "Otvorená skupina";
$lang['group_closed'] = "Uzavretá skupina";
$lang['group_hidden'] = "Skrytá skupina";
$lang['group_delete'] = "odstrániť skupinu";
$lang['group_delete_check'] = "odstrániť túto skupinu";
$lang['submit_group_changes'] = "Odoslať zmeny";
$lang['reset_group_changes'] = "Obnoviť zmeny";
$lang['No_group_name'] = "Musíte zadať meno pre túto skupinu";
$lang['No_group_moderator'] = "Musíte zadať moderátora pre túto skupinu";
$lang['No_group_mode'] = "Musíte zadať nastavenie tejto skupiny, otvorená alebo uzavretá.";
$lang['No_group_action'] = "Nebola vybratá žiadna akcia";
$lang['delete_group_moderator'] = "odstrániť moderátora pôvodnej skupiny ?";
$lang['delete_moderator_explain'] = "Pokiaľ meníte moderátora skupiny, zaškrtnite toto políčko k odstráneniu pôvodného moderátora z tejto skupiny.  V opačnom prípade sa tento užívateľ stane bežným členom tejto skupiny.";
$lang['Click_return_groupsadmin'] = "Kliknite %ssem%s pre návrat do Skupinovej administrácie.";
$lang['Select_group'] = "Vyberte skupinu";
$lang['Look_up_group'] = "Vyhľadajte skupinu";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Prečistenie fóra";
$lang['Forum_Prune_explain'] = "Táto funkcia odstráni všetky témy, ku ktorým neboli pridané príspevky za Vami zadaný počet dní. Pokiaľ nezadáte počet dní, potom budú odstránené všetky témy. Nebudú odstránené témy, v ktorých beží hlasovanie a rovnako tak sa neodstránia oznámenia. Tieto témy budete musieť odstrániť ručne.";
$lang['Do_Prune'] = "Prečistiť";
$lang['All_Forums'] = "Všetky fóra";
$lang['Prune_topics_not_posted'] = "Prečistiť témy bez odpovede staršie";
$lang['Topics_pruned'] = "Témy prečistené";
$lang['Posts_pruned'] = "Príspevky prečistené";
$lang['Prune_success'] = "Prečistenie fór prebehlo úspešne.";


//
// Word censor
//
$lang['Words_title'] = "Slovná cenzúra";
$lang['Words_explain'] = "Z tohto kontrolného panelu môžete pridať, zmeniť a odstrániť slová, ktoré budú automaticky cenzurované na Vašich fórach. Rovnako tak nebude možné zaregistrovať užívateľské mená obsahujúce tieto výrazy. Hviezdičku (*) je možné použiť za časť slova, takže napr. výraz 'test' vyhľadá výraz 'protestovať', test* potom 'testovať' a *test slovo 'protest'.";
$lang['Word'] = "Slovo";
$lang['Edit_word_censor'] = "Zmeniť slovnú cenzúru";
$lang['Replacement'] = "Náhrada";
$lang['Add_new_word'] = "Pridajte nové slovo";
$lang['Update_word'] = "Nahrajte slovnú cenzúru";

$lang['Must_enter_word'] = "Musíte vložiť slovo a jeho náhradu";
$lang['No_word_selected'] = "K úprave nebolo vybraté žiadne slovo";

$lang['Word_updated'] = "Vybraté slovo bolo úspešne nahraté do cenzúry";
$lang['Word_added'] = "Slovo bolo úspešne pridané do cenzúry";
$lang['Word_removed'] = "Cenzúrované slovo bolo úspešne odstránené";

$lang['Click_return_wordadmin'] = "Kliknite %ssem%s pre návrat do Administrácie slovnej cenzúry";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Odtiaľto môžete poslať správu akémukoľvek užívateľovi alebo všetkým z vybratej skupiny. Stane sa tak zaslatím e-mailu na zadanú administrátorskú adresu, pričom užívateľom bude zaslatá slepá kópia. Pokiaľ posielate správu väčšej skupine, prosím, majte chvíľku strpenia a nezastavujte akciu, keď sa vykonáva. Je celkom bežné, že hromadná korešpondencia trvá dlhšiu dobu a budete upozornený, keď sa akcia dokončí";
$lang['Compose'] = "Napísať";

$lang['Recipients'] = "Príjemcovia";
$lang['All_users'] = "Všetci užívatelia";

$lang['Email_successfull'] = "Vaša správa bola odoslaná";
$lang['Click_return_massemail'] = "Kliknite %ssem%s pre návrat na formulár Hromadnej korešpondencie";


//
// Ranks admin
//
$lang['Ranks_title'] = "Administrácia hodnotení";
$lang['Ranks_explain'] = "Týmto formulárom pridávate, meníte, prehliadate a mažete hodnotenia. Môžete tiež vytvoriť vlastné nastavenia hodnotení, ktoré môžu byť priradené cez funkcie nastavení užívateľa.";

$lang['Add_new_rank'] = "Pridať nové hodnotenie";

$lang['Rank_title'] = "Názov hodnotenia";
$lang['Rank_special'] = "Nastaviť ako zvláštne hodnotenie";
$lang['Rank_minimum'] = "Minimálny počet príspevkov";
$lang['Rank_maximum'] = "Maximálny počet príspevkov";
$lang['Rank_image'] = "Obrázok hodnotenia";
$lang['Rank_image_explain'] = "Použite túto funkciu na definovanie malého obrázku spojeného s daným hodnotením. Cesta mimo Váš phpBB kmeňový adresár a názov súboru, pr.: images/ranks/images1.gif";

$lang['Must_select_rank'] = "Musíte vybrať hodnotenie";
$lang['No_assigned_rank'] = "Nebolo zadané žiadne zvláštne hodnotenie";

$lang['Rank_updated'] = "Hodnotenie bolo úspešne zmenené";
$lang['Rank_added'] = "Hodnotenie bolo úspešne pridané";
$lang['Rank_removed'] = "Hodnotenie bolo úspešne zrušené";
$lang['No_update_ranks'] = "Hodnotenie bolo úspešne odstránené, avšak užívateľské účty spojené s týmto hodnotením sa nezmenili. Bude potrebné toto hodnotenie upraviť ručne";

$lang['Click_return_rankadmin'] = "Kliknite %ssem%s pre návrat do Administrácia hodnocení";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Správa nepovolených užívateľských mien";
$lang['Disallow_explain'] = "Tu môžete spravovať užívateľské mená, ktorá nebudú povoloené k použitiu. Nepovolené užívateľské mená môžu obsahovať \*\.  Upozorňujeme, že nebudete môcť určiť už zaregistrované užívateľské meno. Najskôr ho musíte odstrániť a následne ho nepovoliť";

$lang['Delete_disallow'] = "odstrániť";
$lang['Delete_disallow_title'] = "odstrániť nepovolené užívateľské meno";
$lang['Delete_disallow_explain'] = "môžete odstrániť nepovolené užívateľské meno tak, že ho vyberiete zo zoznamu a stlačte tlačítko odstrániť";

$lang['Add_disallow'] = "Pridať";
$lang['Add_disallow_title'] = "Pridať nepovolené užívateľské meno";
$lang['Add_disallow_explain'] = "Môžete zakázať niektoré nepovolené užívateľské mená. Tieto mená si nebude môcť žiadny užívateľ zaregistrovať. Môžete použíť aj znak \"*\" pre nahradenie časti mena";

$lang['No_disallowed'] = "Žiadne nepovolené užívateľské mená";

$lang['Disallowed_deleted'] = "Nepovolené užívateľské meno bolo úspešne odstránené";
$lang['Disallow_successful'] = "Nepovolené užívateľské meno bolo úspešne pridené";
$lang['Disallowed_already'] = "Meno, ktoré ste zadali, nemôže byť zakázané. Buď sa už vyskytuje v tomto zozname alebo v zozname cenzúrovaných slov, alebo existuje rovnaké užívateľské meno";

$lang['Click_return_disallowadmin'] = "Kliknite %ssem%s pre návrat do Administrácie nastavení nepovolených užívateľských mien";


//
// Styles Admin
//
$lang['Styles_admin'] = "Administrácia štýlov";
$lang['Styles_explain'] = "Tu môžete pridávať, odoberať a spravovať štýly (vzory a motívy) dostupné pre Vašich užívateľov";
$lang['Styles_addnew_explain'] = "Tento zoznam obsahuje všetky motívy, které sú dostupné pre vzory, ktoré nynímate. Časti na tomto zozname ešte neboli nainštalované do zodpovedajúcej databázy phpBB. Pre nainštalovanie kliknite na inštalačný odkaz vedľa zadania";

$lang['Select_template'] = "Vybrať vzor";

$lang['Style'] = "Štýl";
$lang['Template'] = "Vzor";
$lang['Install'] = "Nainštalovať";
$lang['Download'] = "Stiahnuť";

$lang['Edit_theme'] = "Upraviť motív";
$lang['Edit_theme_explain'] = "V spodnom formulári môžete upravovať nastavenia pre zvolený vzor";

$lang['Create_theme'] = "Vytvoriť motív";
$lang['Create_theme_explain'] = "V spodnom formulári môžete vytvoriť nový motív. Pri zadávání farieb (pre ktoré použijete hexadecimálne hodnoty) neuvádzajte znak #, tzn. hodnota CCCCCC je platná, #CCCCCC nie";

$lang['Export_themes'] = "Exportovať motívy";
$lang['Export_explain'] = "V tomto paneli môžete exportovať zadanie motívu pre zvolený vzor. Vyberte vzor zo spodného výberu a skript vytvorí konfiguračný súbor pre motív a bude ho chcieť uložiť do vybratého adresára vzorov. Pokiaľ sa mu to nepodarí, ponúkne Vám možnosť súbor stiahnuť na disk. Aby sa mohol súbor uložiť, je potrebné, aby bol povolený prístup na zápis pre príslušný adresár. Pre viac informácií si pozrite užívateľský manuál k phpBB 2.";
$lang['Theme_installed'] = "Vybratý motív bol úspešne nainštalovaný";
$lang['Style_removed'] = "Vybratý štýl bol odstránený z databázy. K plnému odstráneniu tohto stýlu zo systému musíte odstrániť príslušný stýl z adresára vzorov.";
$lang['Theme_info_saved'] = "Informácie k zvolenému vzoru boli uložené. Teraz nastavte povolenie na theme_info.cfg (a tiež vybratého adresára vzorov) na 'len na čítanie'";
$lang['Theme_updated'] = "Vybratý motív bol zmenený. Vyexportujte teraz nastavenia nového motívu";
$lang['Theme_created'] = "Motív vytvorený. Vyexportujte teraz nový motív do konfiguračného súboru kvôli bezpečnému uloženiu alebo použitiu pre iné prípady";

$lang['Confirm_delete_style'] = "Ste si istý, že chcete odstrániť tento štýl ?";

$lang['Download_theme_cfg'] = "Nie je možné zapisovať do konfiguračného súboru. Kliknite na spodné tlačítko na sttiahnutie súboru Vašim prehliadačom. Až ho stiahnete, môžete ho presunúť do adresára obsahujúceho súbory vzorov. Potom môžete zabaliť súbory pre distribúciu alebo použiť inde, keď chcete";
$lang['No_themes'] = "Ku vzoru, ktorý ste vybrali, sa neviažu žiadne motívy. Nový motív vytvoríte kliknutím na 'Vytvoriť nové' na ľavej strane panelu";
$lang['No_template_dir'] = "Nie je možné otvoriť adresár so vzormi. Možné je, že ho sa nedá cez server čítať alebo neexistuje";
$lang['Cannot_remove_style'] = "Nie je možné odstrániť vybratý štýl, ak je určený ako pôvodný pre fórum. Zmeňte, prosím, pôvodný stýl a skúste to znova.";
$lang['Style_exists'] = "Meno stýlu už existuje. Prosím vráťte sa späť a zvoľte iné meno.";

$lang['Click_return_styleadmin'] = "Kliknete %ssem%s pre návrat do Administrácie štýlov";

$lang['Theme_settings'] = "Nastavenia motívu";
$lang['Theme_element'] = "Súčasť vzoru";
$lang['Simple_name'] = "Jednoduchý názov";
$lang['Value'] = "Hodnota";
$lang['Save_Settings'] = "Ulož nastavenia";

$lang['Stylesheet'] = "Zadanie štýlu CSS";
$lang['Background_image'] = "Obrázok pozadia";
$lang['Background_color'] = "Farba pozadia";
$lang['Theme_name'] = "Meno motívu";
$lang['Link_color'] = "Farba odkazu";
$lang['Text_color'] = "Farba textu";
$lang['VLink_color'] = "Farba navštíveného odkazu";
$lang['ALink_color'] = "Farba aktívneho odkazu";
$lang['HLink_color'] = "Hover Link Colour";
$lang['Tr_color1'] = "Farba riadku tabuľky 1";
$lang['Tr_color2'] = "Farba riadku tabuľky 2";
$lang['Tr_color3'] = "Farba riadku tabuľky 3";
$lang['Tr_class1'] = "Trieda riadku tabuľky 1";
$lang['Tr_class2'] = "Trieda riadku tabuľky 2";
$lang['Tr_class3'] = "Trieda riadku tabuľky 3";
$lang['Th_color1'] = "Farba titulu tabuľky 1";
$lang['Th_color2'] = "Farba titulu tabuľky 2";
$lang['Th_color3'] = "Farba titulu tabuľky 3";
$lang['Th_class1'] = "Table Header Class 1";
$lang['Th_class2'] = "Table Header Class 2";
$lang['Th_class3'] = "Table Header Class 3";
$lang['Td_color1'] = "Farba bunky tabuľky 1";
$lang['Td_color2'] = "Farba bunky tabuľky 2";
$lang['Td_color3'] = "Farba bunky tabuľky 3";
$lang['Td_class1'] = "Table Cell Class 1";
$lang['Td_class2'] = "Table Cell Class 2";
$lang['Td_class3'] = "Table Cell Class 3";
$lang['fontface1'] = "Vzhľad písma 1";
$lang['fontface2'] = "Vzhľad písma 2";
$lang['fontface3'] = "Vzhľad písma 3";
$lang['fontsize1'] = "Veľkosť písma 1";
$lang['fontsize2'] = "Veľkosť písma 2";
$lang['fontsize3'] = "Veľkosť písma 3";
$lang['fontcolor1'] = "Farba písma 1";
$lang['fontcolor2'] = "Farba písma 2";
$lang['fontcolor3'] = "Farba písma 3";
$lang['span_class1'] = "Rozpätie tried 1";
$lang['span_class2'] = "Rozpätie tried 2";
$lang['span_class3'] = "Rozpätie tried 3";
$lang['img_poll_size'] = "Veľkosť obrázku pre hlasovanie [v pixeloch]";
$lang['img_pm_size'] = "Veľkosť obrázku pre súkromnú správu [v pixeloch]";


//
// Install Process
//
$lang['Welcome_install'] = "Vitajte v inštalácii phpBB 2";
$lang['Initial_config'] = "Základné nastavenia";
$lang['DB_config'] = "Nastavenia databázy";
$lang['Admin_config'] = "Administrátorské nastavenia";
$lang['continue_upgrade'] = "Po tom, čo ste stiahli konfiguračný súbor na Váš disk môžete spodným tlačítkom 'Pokračovať v inštalácii novšej verzie'. Počkajte s nahrávaním konfiguračného súboru dokiaľ nie je ukončená inštalácia novšej verzie.";
$lang['upgrade_submit'] = "Pokračovať v inštalácii novšej verzie";

$lang['Installer_Error'] = "Počas inštalácie sa vyskytla chyba";
$lang['Previous_Install'] = "Bola nájdená prechádzajúca inštalácia";
$lang['Install_db_error'] = "Počas nahrávania novšej inštalácie databázy sa vyskytla chyba";

$lang['Re_install'] = "Vaša predchádzajúca inštalácia je stále aktívna. <br /><br />Pokiaľ si prajete preinštalovať phpBB 2,pokračujte tlačítkem 'Áno'. Uvedomte si, prosím, že v tomto prípade sa zničia všetky dáta; nedôjde k zálohovaniu. Administrátorské užívateľské meno a heslo, ktoré ste používali k nalogovaniu budú po reinštalácii prerobené, žiadne ďalšie nastavenia nebudú zachované.<br /><br />Zamyslite sa pozorne pred stlačením tlačítka 'Áno'!";

$lang['Inst_Step_0'] = "Thank you for choosing phpBB 2. In order to complete this install please fill out the details requested below. Please note that the database you install into should already exist. If you are installing to a database that uses ODBC, e.g. MS Access you should first create a DSN for it before proceeding.";

$lang['Start_Install'] = "Začať inštaláciu";
$lang['Finish_Install'] = "Ukončiť inštaláciu";

$lang['Default_lang'] = "Pôvodný jazyk boardu";
$lang['DB_Host'] = "Database Server Hostname / DSN";
$lang['DB_Name'] = "Názov Vašej databázy";
$lang['DB_Username'] = "Užívateľské meno databázy";
$lang['DB_Password'] = "Heslo databázy";
$lang['Database'] = "Vaša databáza";
$lang['Install_lang'] = "Vyberte jazyk pre inštaláciu";
$lang['dbms'] = "Typ databázy";
$lang['Table_Prefix'] = "Predpona pre tabuľky v databázi";
$lang['Admin_Username'] = "Administrátorské uživ. meno";
$lang['Admin_Password'] = "Administrátorské heslo";
$lang['Admin_Password_confirm'] = "Administrátorské heslo [ Potvrdiť ]";

$lang['Inst_Step_2'] = "Vaše užívateľské meno bolo vytvorené. V tomto momente je základná inštalácia ukončená. Teraz budete prepnutý do ďalšej časti, ktorá Vám umožní ďalšiu administráciu novej inštalácie. Skontrolujte, prosím, detaily Všeobecných nastavení a urobte potrebné zmeny. Ďakujeme, že ste si vybrali phpBB 2.";

$lang['Unwriteable_config'] = "Do Vášho konfiguračného súboru nie je možné zapisovať. Kópia tohto súboru bude stiahnutá, keď kliknete na tlačítko dole. Potom nahrajte tento súbor do adresára phpBB 2. Ďalej sa prihláste ako administrátor s heslom, ktoré ste zadali v predchádzajúcom formulári a navštívte administrátorské centrum (odkaz sa objaví v spodnej časti každej stránky potom, čo sa nalogujete) a skontrolujte všeobecnú konfiguráciu. Ďakujeme, že ste si vybrali phpBB 2.";
$lang['Download_config'] = "Stiahnuť konfiguračný súbor";

$lang['ftp_choose'] = "Vyberte si spôsob stiahnutia";
$lang['ftp_option'] = "<br />Vzhľadom k tomu, že je v tejto verzii umožnený rozšírený prenos php môže Vám byť daný priestor najskôr preniesť Váš konfiguračný súbor automaticky.";
$lang['ftp_instructs'] = "Vybrali ste automatickú voľbu prenosu. Zadajte, prosím, informácie k uskutočneniu tohto procesu. Prosím, pamätajte na to, že cesta prenosu má byť presne taká, akú by ste zadávali cez akéhokoľvek bežného klienta.";
$lang['ftp_info'] = "Zadejte Vaše informácie prenosu FTP";
$lang['Attempt_ftp'] = "Pokus o prenos konfiguračného súboru na miesto";
$lang['Send_file'] = "Pošlite mi súbor a ja ho prenesiem sám";
$lang['ftp_path'] = "Cesta FTP na phpBB";
$lang['ftp_username'] = "Vaše užívateľské meno FTP";
$lang['ftp_password'] = "Vaše heslo FTP";
$lang['Transfer_config'] = "Začať prenos";
$lang['NoFTP_config'] = "Pokus preniesť súbor na miesto zlyhal. Prosím, stiahnite a potom nahrajte konfiguračný súbor sami.";

$lang['Install'] = "Inštalovať";
$lang['Upgrade'] = "Inovovať verziu";

$lang['Install_Method'] = "Vyberte druh inštalácie";

$lang['Install_No_Ext'] = "Nastavenia php na Vašom serveri nepodporuje databázu, ktorú ste zvolili";

$lang['Install_No_PCRE'] = "phpBB2 požaduje the Perl-Compatible Regular Expressions Module pre php, čo Vaša konfigurácia php pravdepodobne nepodporuje!";

//
// That's all Folks!
// -------------------------------------------------

$lang['Status_locked'] = 'Zamknúté'; 
$lang['Status_unlocked'] = 'Odomknúté';
?>