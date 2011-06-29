<?php

/***************************************************************************
 *                            lang_admin.php [Finnish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1 2004/07/27 20:01:09 akamu Exp $
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
//	Translation produced by Jorma Aaltonen (bullitt)
//	http://www.pitro.com/
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Yleinen yll&auml;pito';
$lang['Users'] = 'K&auml;ytt&auml;jien yll&auml;pito';
$lang['Groups'] = 'Ryhmien yll&auml;pito';
$lang['Forums'] = 'Foorumien yll&auml;pito';
$lang['Styles'] = 'Tyylien yll&auml;pito';

$lang['Configuration'] = 'Konfigurointi';
$lang['Permissions'] = 'Suojaukset';
$lang['Manage'] = 'Hallinta';
$lang['Disallow'] = 'Kielletyt nimet';
$lang['Prune'] = 'Siivous';
$lang['Mass_Email'] = 'Ryhm&auml;s&auml;hk&ouml;posti';
$lang['Ranks'] = 'Tittelit';
$lang['Smilies'] = 'Hymi&ouml;t';
$lang['Ban_Management'] = 'Kieltojen hallinta';
$lang['Word_Censor'] = 'Sanasensuuri';
$lang['Export'] = 'Vie';
$lang['Create_new'] = 'Luo';
$lang['Add_new'] = 'Lis&auml;&auml;';
$lang['Backup_DB'] = 'Tietokannan varmuuskopiointi';
$lang['Restore_DB'] = 'Varmuuskopion palautus';


//
// Index
//
$lang['Admin'] = 'Yll&auml;pito';
$lang['Not_admin'] = 'Sinulla ei ole oikeutta hallinnoida t&auml;t&auml; sivustoa';
$lang['Welcome_phpBB'] = 'Tervetuloa phpBB:hen';
$lang['Admin_intro'] = 'Kiitoksia, ett&auml; valitsit phpBB:n foorumiratkaisuksi. T&auml;ll&auml; ruudulla n&auml;et pikaisen silm&auml;yksen foorumien erilaisista tilastoinneista. P&auml;&auml;set takaisin t&auml;lle sivulle klikkaamalla <u>Hallinnan p&auml;&auml;valikko</u> linkki&auml; vasemmalla reunalla. Palataksesi foorumien p&auml;&auml;valikkoon, klikkaa phpBB logoa, joka on my&ouml;skin vasemmalla reunalla. Muut linkit t&auml;m&auml;n sivun vasemmassa reunassa p&auml;&auml;st&auml;v&auml;t sinut yll&auml;pit&auml;m&auml;&auml;n jokaista osa-aluetta foorumien toiminnassa. Jokaisella sivulla on ohjeet ty&ouml;kalujen k&auml;ytt&ouml;&ouml;n.';
$lang['Main_index'] = 'Foorumien p&auml;&auml;valikko';
$lang['Forum_stats'] = 'Foorumien tilastointi';
$lang['Admin_Index'] = 'Hallinnan p&auml;&auml;valikko';
$lang['Preview_forum'] = 'Esikatsele Foorumi';

$lang['Click_return_admin_index'] = 'Klikkaa %st&auml;st&auml;%s palataksesi hallinnan p&auml;&auml;valikkoon';

$lang['Statistic'] = 'Tilastointi';
$lang['Value'] = 'Arvo';
$lang['Number_posts'] = 'Viestien lukum&auml;&auml;r&auml;';
$lang['Posts_per_day'] = 'Viestej&auml; p&auml;iv&auml;ss&auml;';
$lang['Number_topics'] = 'Aiheiden lukum&auml;&auml;r&auml;';
$lang['Topics_per_day'] = 'Aiheita p&auml;iv&auml;ss&auml;';
$lang['Number_users'] = 'K&auml;ytt&auml;jien lukum&auml;&auml;r&auml;';
$lang['Users_per_day'] = 'K&auml;ytt&auml;ji&auml; p&auml;iv&auml;ss&auml;';
$lang['Board_started'] = 'Sivusto aloitti';
$lang['Avatar_dir_size'] = 'Avatar hakemiston koko';
$lang['Database_size'] = 'Tietokannan koko';
$lang['Gzip_compression'] ="Gzip pakkaus";
$lang['Not_available'] = 'Ei k&auml;ytett&auml;viss&auml;';

$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Tietokantaty&ouml;kalut';

$lang['Restore'] = 'Palauta';
$lang['Backup'] = 'Varmista';
$lang['Restore_explain'] = 'T&auml;ll&auml; toimenpiteell&auml; suoritetaan phpBB tietokannan t&auml;ydellinen palautus. Jos palvelimesi tukee, voit  siirt&auml;&auml; gzip pakatun tekstitiedoston ja se puretaan automaattisesti. <b>VAROITUS</b> Kaikki olemassa oleva tieto korvataan. Palautus voi kest&auml;&auml; pitk&auml;&auml;n, &auml;l&auml; poistu t&auml;lt&auml; sivulta ennen kuin toiminto on valmis.';
$lang['Backup_explain'] = 'T&auml;ss&auml; voit varmuuskopioida kaiken phpBB liittyv&auml;n tiedon. Jos sinulla on ylim&auml;&auml;r&auml;isi&auml; lis&auml;ttyj&auml; tauluja samassa tietokannassa phpBB:n kanssa ja haluaisit kopioida my&ouml;s ne, ole hyv&auml; ja anna taulujen nimet pilkuilla eroteltuna Lis&auml;kent&auml;t teksti-ikkunaan alapuolella. Jos palvelimesi tukee gzip pakkausta voit pakata tiedostot pienemp&auml;&auml;n tilaan ennen siirtoa.';

$lang['Backup_options'] = 'Varmuuskopion valinnat';
$lang['Start_backup'] = 'Aloita varmuuskopiointi';
$lang['Full_backup'] = 'T&auml;ysi varmuuskopio';
$lang['Structure_backup'] = 'Vain rakenteen varmuuskopio';
$lang['Data_backup'] = 'Vain tietojen varmuuskopio';
$lang['Additional_tables'] = 'Lis&auml;kent&auml;t';
$lang['Gzip_compress'] = 'Gzip pakattu tiedosto';
$lang['Select_file'] = 'Valitse tiedosto';
$lang['Start_Restore'] = 'Aloita palautus';

$lang['Restore_success'] = 'Tietokanta on onnistuneesti palautettu.<br /><br />Foorumisi on j&auml;lleen siin&auml; tilassa, jossa se oli kun varmuuskopio otettiin.';
$lang['Backup_download'] = 'Tiedoston siirto alkaa hetken kuluttua, ole hyv&auml; ja odota';
$lang['Backups_not_supported'] = 'Valitettavasti tietokantaj&auml;rjestelm&auml;si ei t&auml;ll&auml; hetkell&auml; tue varmuuskopiointia';

$lang['Restore_Error_uploading'] = 'Virhe siirrett&auml;ess&auml; varmuuskopiotiedostoa';
$lang['Restore_Error_filename'] = 'Tiedoston nime&auml;misongelma, ole hyv&auml; ja yrit&auml; toista nime&auml;';
$lang['Restore_Error_decompress'] = 'Gzip pakatun tiedoston purku ei onnistu, ole hyv&auml; ja siirr&auml; pakkaamaton tiedosto';
$lang['Restore_Error_no_file'] = 'Tiedostoa ei siirretty';


//
// Auth pages
//
$lang['Select_a_User'] = 'Valitse k&auml;ytt&auml;j&auml;';
$lang['Select_a_Group'] = 'Valitse ryhm&auml;';
$lang['Select_a_Forum'] = 'Valitse foorumi';
$lang['Auth_Control_User'] = 'K&auml;ytt&auml;j&auml;n oikeuksien m&auml;&auml;rittely'; 
$lang['Auth_Control_Group'] = 'Ryhm&auml;n oikeuksien m&auml;&auml;rittely'; 
$lang['Auth_Control_Forum'] = 'Foorumin oikeuksien m&auml;&auml;rittely'; 
$lang['Look_up_User'] = 'N&auml;yt&auml; k&auml;ytt&auml;j&auml;'; 
$lang['Look_up_Group'] = 'N&auml;yt&auml; ryhm&auml;'; 
$lang['Look_up_Forum'] = 'N&auml;yt&auml; foorumi'; 

$lang['Group_auth_explain'] = 'T&auml;ss&auml; voit muuttaa oikeuksia ja moderaattoristatusta jokaiselle k&auml;ytt&auml;j&auml;ryhm&auml;lle. &Auml;l&auml; unohda muuttaessasi ryhm&auml;n oikeuksia, ett&auml; jokin k&auml;ytt&auml;j&auml; voi oikeuksiensa perusteella silti p&auml;&auml;st&auml; foorumiin jne. Saat t&auml;llaisessa tilanteessa varoituksen ko. mahdollisuudesta.';
$lang['User_auth_explain'] = 'T&auml;ss&auml; voit muuttaa oikeuksia ja moderaattoristatusta jokaiselle k&auml;ytt&auml;j&auml;lle. &Auml;l&auml; unohda muuttaessasi k&auml;ytt&auml;j&auml;n oikeuksia, ett&auml; ryhm&auml;n oikeudet saattavat silti sallia k&auml;ytt&auml;j&auml;n p&auml;&auml;st&auml; foorumiin jne. Saat t&auml;llaisessa tilanteessa varoituksen ko. mahdollisuudesta.';
$lang['Forum_auth_explain'] = 'T&auml;ss&auml; voi muuttaa yll&auml;pito-oikeuksia kaikille foorumeille. Sinulla on sek&auml; yksinkertainen, ett&auml; yksityiskohtaisempi mahdollisuus. Yksityiskohtaisempi antaa enemm&auml;n mahdollisuuksia m&auml;&auml;ritell&auml; foorumin toimintaa. Muista, ett&auml; foorumin oikeustason muuttaminen vaikuttaa siihen ketk&auml; k&auml;ytt&auml;j&auml;t voivat tehd&auml; tiettyj&auml; toimenpiteit&auml; niiss&auml;.';

$lang['Simple_mode'] = 'Yksinkertainen';
$lang['Advanced_mode'] = 'Yksityiskohtainen';
$lang['Moderator_status'] = 'Moderaattori status';

$lang['Allowed_Access'] = 'K&auml;ytt&ouml; sallittu';
$lang['Disallowed_Access'] = 'K&auml;ytt&ouml; estetty';
$lang['Is_Moderator'] = 'On moderaattori';
$lang['Not_Moderator'] = 'Ei ole moderaattori';

$lang['Conflict_warning'] = 'Varoitus oikeustasojen ristiriidasta';
$lang['Conflict_access_userauth'] = 'T&auml;ll&auml; k&auml;ytt&auml;j&auml;ll&auml; on yh&auml; oikeus t&auml;h&auml;n foorumiin ryhm&auml;ns&auml; kautta. Voit muuttaa ryhm&auml;n oikeuksia tai poistaa k&auml;ytt&auml;j&auml;n/ryhm&auml;n est&auml;&auml;ksesi heilt&auml; p&auml;&auml;syn. Ryhm&auml;n oikeudet (ja foorumit joihin vaikuttavat) on mainittu alapuolella.';
$lang['Conflict_mod_userauth'] = 'T&auml;ll&auml; k&auml;ytt&auml;j&auml;ll&auml; on yh&auml; moderaattorin oikeudet t&auml;h&auml;n foorumiin ryhm&auml;ns&auml; kautta. VOit muuttaa ryhm&auml;n oikeuksia tai poistaa k&auml;ytt&auml;j&auml;n/ryhm&auml;n est&auml;&auml;ksesi heilt&auml; moderaattorioikeudet. Ryhm&auml;n oikeudet (ja foorumit joihin vaikuttavat) on mainittu alapuolella.';

$lang['Conflict_access_groupauth'] = 'Seuraavalla k&auml;ytt&auml;j&auml;ll&auml; (k&auml;ytt&auml;jill&auml;) on yh&auml; oikeus t&auml;h&auml;n foorumiin k&auml;ytt&auml;j&auml;oikeuksien kautta. VOit muuttaa k&auml;ytt&auml;j&auml;n oikeuksia est&auml;&auml;ksesi h&auml;nelt&auml; p&auml;&auml;syn foorumiin. K&auml;ytt&auml;j&auml;n oikeudet (ja foorumit joihin vaikuttavat) on mainittu alapuolella.';
$lang['Conflict_mod_groupauth'] = 'Seuraavalla k&auml;ytt&auml;j&auml;ll&auml; (k&auml;ytt&auml;jill&auml;) on yh&auml; moderaattorin oikeudet t&auml;h&auml;n foorumiin k&auml;ytt&auml;j&auml;oikeuksien kautta. VOit muuttaa k&auml;ytt&auml;j&auml;n oikeuksia est&auml;&auml;ksesi h&auml;nelt&auml; moderaattorioikeudet foorumiin. K&auml;ytt&auml;j&auml;n oikeudet (ja foorumit joihin vaikuttavat) on mainittu alapuolella.';

$lang['Public'] = 'Yleinen';
$lang['Private'] = 'Yksityinen';
$lang['Registered'] = 'Rekister&ouml;ity';
$lang['Administrators'] = 'Yll&auml;pit&auml;j&auml;t';
$lang['Hidden'] = 'Piilotettu';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'KAIKKI';
$lang['Forum_REG'] = 'REKIST.';
$lang['Forum_PRIVATE'] = 'YKSITYINEN';
$lang['Forum_MOD'] = 'MODER.';
$lang['Forum_ADMIN'] = 'YLL&Auml;PITO';

$lang['View'] = 'N&auml;yt&auml;';
$lang['Read'] = 'Lue';
$lang['Post'] = 'Kirjoita';
$lang['Reply'] = 'Vastaa';
$lang['Edit'] = 'Muokkaa';
$lang['Delete'] = 'Poista';
$lang['Sticky'] = 'Tiedote';
$lang['Announce'] = 'Ilmoitus'; 
$lang['Vote'] = '&Auml;&auml;nest&auml;';
$lang['Pollcreate'] = 'Luo &auml;&auml;nestys';

$lang['Permissions'] = 'Oikeudet';
$lang['Simple_Permission'] = 'Yksinkertainen lupa';

$lang['User_Level'] = 'K&auml;ytt&auml;j&auml;taso'; 
$lang['Auth_User'] = 'K&auml;ytt&auml;j&auml;';
$lang['Auth_Admin'] = 'Yll&auml;pit&auml;j&auml;';
$lang['Group_memberships'] = 'K&auml;ytt&auml;j&auml;ryhmien j&auml;senyydet';
$lang['Usergroup_members'] = 'T&auml;ll&auml; ryhm&auml;ll&auml; on seuraavat j&auml;senet';

$lang['Forum_auth_updated'] = 'Foorumin oikeudet p&auml;ivitetty';
$lang['User_auth_updated'] = 'K&auml;ytt&auml;j&auml;oikeudet p&auml;ivitetty';
$lang['Group_auth_updated'] = 'Ryhm&auml;n oikeudet p&auml;ivitetty';

$lang['Auth_updated'] = 'Oikeudet on p&auml;ivitetty';
$lang['Click_return_userauth'] = 'Klikkaa %st&auml;st&auml;%s palataksesi k&auml;ytt&auml;j&auml;oikeuksiin';
$lang['Click_return_groupauth'] = 'Klikkaa %st&auml;st&auml;%s palataksesi ryhm&auml;oikeuksiin';
$lang['Click_return_forumauth'] = 'Klikkaa %st&auml;st&auml;%s palataksesi foorumin oikeuksiin';


//
// Banning
//
$lang['Ban_control'] = 'Porttikieltojen hallinnointi';
$lang['Ban_explain'] = 'T&auml;&auml;ll&auml; voit yll&auml;pit&auml;&auml; porttikieltoja. Voit antaa porttikiellon yksitt&auml;iselle k&auml;ytt&auml;j&auml;lle ja/tai ketjulle IP osoitteita tai koneita. N&auml;ill&auml; toimilla estet&auml;&auml;n k&auml;ytt&auml;j&auml;n p&auml;&auml;sy edes foorumien p&auml;&auml;sivulle. Est&auml;&auml;ksesi k&auml;ytt&auml;j&auml;&auml; rekister&ouml;itym&auml;st&auml; toisella nimell&auml; voit m&auml;&auml;ritell&auml; porttikiellon my&ouml;s s&auml;hk&ouml;postiosoitteelle. Huomaa kuitenkin, ett&auml; pelkk&auml; s&auml;hk&ouml;postiosoitteen porttikielto ei est&auml; k&auml;ytt&auml;j&auml;&auml; kirjautumasta tai kirjoittamasta foorumeihin, t&auml;m&auml; estet&auml;&auml;n k&auml;ytt&auml;m&auml;ll&auml; jompaa kumpaa kahdesta ensimm&auml;isest&auml; tavasta.';
$lang['Ban_explain_warn'] = 'Huomaa, ett&auml; antamalla IP osoitteiden sarjan, kaikki alku- ja loppuosoitteen v&auml;lill&auml; olevat IP osoitteet asetetaan porttikieltoon. Osoitteiden lukum&auml;&auml;r&auml;&auml; tietokannassa pyrit&auml;&auml;n v&auml;hent&auml;m&auml;&auml;n k&auml;ytt&auml;m&auml;ll&auml; jokerimerkkej&auml; automaattisesti miss&auml; vain mahdollista. Jos todella t&auml;ytyy antaa sarja IP osoitteita, pyri pit&auml;m&auml;&auml;n sarja mahdollisimman pienen&auml; tai jos vain mahdollista k&auml;yt&auml; yksitt&auml;isi&auml; osoitteita';

$lang['Select_username'] = 'Valitse k&auml;ytt&auml;j&auml;tunnus';
$lang['Select_ip'] = 'Valitse IP';
$lang['Select_email'] = 'Valitse s&auml;hk&ouml;postiosoite';

$lang['Ban_username'] = 'Anna porttikielto yhdelle tai useammalle k&auml;ytt&auml;j&auml;lle';
$lang['Ban_username_explain'] = 'Voit antaa porttikiellon samalla kertaa usealle k&auml;ytt&auml;j&auml;lle k&auml;ytt&auml;en sopivasti yhdistellen tietokoneesi hiirt&auml; ja n&auml;pp&auml;imist&ouml;&auml;';

$lang['Ban_IP'] = 'Anna porttikielto yhdelle tai useammalle IP:lle tai koneelle';
$lang['IP_hostname'] = 'IP osoite tai koneen nimi';
$lang['Ban_IP_explain'] = 'M&auml;&auml;rittele useampi IP osoite tai kone erittelem&auml;ll&auml; ne pilkuilla. M&auml;&auml;rittele sarja IP osoitteita sy&ouml;tt&auml;m&auml;ll&auml; alku- ja loppuosoitteiden v&auml;liin miinusmerkki (-), jokerina k&auml;ytet&auml;&auml;n *';

$lang['Ban_email'] = 'Anna porttikielto yhdelle tai useammalle s&auml;hk&ouml;postiosoitteelle';
$lang['Ban_email_explain'] = 'M&auml;&auml;ritt&auml;&auml;ksesi monta s&auml;hk&ouml;postiosoitetta, erittele ne pilkuilla. jokerina k&auml;ytet&auml;&auml;n*, esimerkiksi *@hotmail.com';

$lang['Unban_username'] = 'Poista porttikielto yhdelt&auml; tai useammalta k&auml;ytt&auml;j&auml;lt&auml;';
$lang['Unban_username_explain'] = 'Voit poistaa porttikiellon samalla kertaa useammalta k&auml;ytt&auml;j&auml;lt&auml; k&auml;ytt&auml;en sopivasti yhdistellen tietokoneesi hiirt&auml; ja n&auml;pp&auml;imist&ouml;&auml;';

$lang['Unban_IP'] = 'Poista porttikielto yhdelt&auml; tai useammalta IP osoitteelta';
$lang['Unban_IP_explain'] = 'Voit poistaa porttikiellon samalla kertaa useammalta IP osoitteelta k&auml;ytt&auml;en sopivasti yhdistellen tietokoneesi hiirt&auml; ja n&auml;pp&auml;imist&ouml;&auml;';

$lang['Unban_email'] = 'Poista porttikielto yhdelt&auml; tai useammalta s&auml;hk&ouml;postiosoitteelta';
$lang['Unban_email_explain'] = 'Voit poistaa porttikiellon samalla kertaa useammalta s&auml;hk&ouml;postiosoitteelta k&auml;ytt&auml;en sopivasti yhdistellen tietokoneesi hiirt&auml; ja n&auml;pp&auml;imist&ouml;&auml;';

$lang['No_banned_users'] = 'Ei porttikiellossa olevia k&auml;ytt&auml;j&auml;tunnuksia';
$lang['No_banned_ip'] = 'Ei porttikiellossa olevia IP osoitteita';
$lang['No_banned_email'] = 'Ei porttikiellossa olevia s&auml;hk&ouml;postiosoitteita';

$lang['Ban_update_sucessful'] = 'Porttikieltolista on p&auml;ivitetty onnistuneesti';
$lang['Click_return_banadmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi porttikieltojen yll&auml;pitoon';


//
// Configuration
//
$lang['General_Config'] = 'Yleinen konfigurointi';
$lang['Config_explain'] = 'Alla olevalla lomakkeella voit yll&auml;pit&auml;&auml; sivuston yleisi&auml; toimintoja. K&auml;ytt&auml;jien ja foorumien yll&auml;pitoon on linkit sivun vasemmassa reunassa.';

$lang['Click_return_config'] = 'Klikkaa %st&auml;st&auml;%s palataksesi yleistietojen konfigurointiin';

$lang['General_settings'] = 'Sivuston yleisasetukset';
$lang['Server_name'] = 'Domain nimi';
$lang['Server_name_explain'] = 'Domain nimi jolla sivusto toimii';
$lang['Script_path'] = 'Skriptien polku';
$lang['Script_path_explain'] = 'Polku, jossa phpBB2 sijaitsee suhteessa domain nimeen';
$lang['Server_port'] = 'Palvelimen portti';
$lang['Server_port_explain'] = 'Portti, jossa palvelin toimii, yleens&auml; 80, muuta jos jokin muu';
$lang['Site_name'] = 'Sivuston nimi';
$lang['Site_desc'] = 'Sivuston kuvaus';
$lang['Board_disable'] = 'Passivoi sivusto';
$lang['Board_disable_explain'] = 'T&auml;m&auml; toimenpide est&auml;&auml; sivuston k&auml;yt&ouml;n. &Auml;l&auml; kirjaudu ulos kun sivusto on passivoituna, et p&auml;&auml;se t&auml;ll&ouml;in takaisin!';
$lang['Acct_activation'] = 'K&auml;ytt&auml;j&auml;tunnukset aktivoi';
$lang['Acc_None'] = 'Ei kukaan'; // These three entries are the type of activation
$lang['Acc_User'] = 'K&auml;ytt&auml;j&auml;';
$lang['Acc_Admin'] = 'Yll&auml;pito';

$lang['Abilities_settings'] = 'K&auml;ytt&auml;jien ja foorumien perusasetukset';
$lang['Max_poll_options'] = '&Auml;&auml;nestysvaihtoehtojen maksimi lukum&auml;&auml;r&auml;';
$lang['Flood_Interval'] = 'Ylivuoto (flood) tauko';
$lang['Flood_Interval_explain'] = 'Kuinka monta sekuntia k&auml;ytt&auml;j&auml;n pit&auml;&auml; odottaa viestien l&auml;hetysten v&auml;lill&auml;'; 
$lang['Board_email_form'] = 'S&auml;hk&ouml;postin k&auml;ytt&ouml; sivuston v&auml;lityksell&auml;';
$lang['Board_email_form_explain'] = 'K&auml;ytt&auml;j&auml;t l&auml;hett&auml;v&auml;t toisilleen s&auml;hk&ouml;postia sivuston v&auml;lityksell&auml;';
$lang['Topics_per_page'] = 'Aiheita sivulla';
$lang['Posts_per_page'] = 'Viestej&auml; sivulla';
$lang['Hot_threshold'] = 'Suositun viestin raja';
$lang['Default_style'] = 'Oletustyyli';
$lang['Override_style'] = 'Ohita k&auml;ytt&auml;j&auml;n m&auml;&auml;rittelem&auml; tyyli';
$lang['Override_style_explain'] = 'Korvaa k&auml;ytt&auml;j&auml;n tyyli oletustyylill&auml;';
$lang['Default_language'] = 'Oletuskieli';
$lang['Date_format'] = 'P&auml;iv&auml;yksen muoto';
$lang['System_timezone'] = 'J&auml;rjestelm&auml;n aikavy&ouml;hyke';
$lang['Enable_gzip'] = 'Salli GZip pakkaus';
$lang['Enable_prune'] = 'Salli Foorumien siivous';
$lang['Allow_HTML'] = 'Salli HTML';
$lang['Allow_BBCode'] = 'Salli BBCode';
$lang['Allowed_tags'] = 'Sallitut HTML tagit';
$lang['Allowed_tags_explain'] = 'Erota tagit pilkuilla';
$lang['Allow_smilies'] = 'Salli hymi&ouml;t';
$lang['Smilies_path'] = 'Tallennuspolku hymi&ouml;ille';
$lang['Smilies_path_explain'] = 'Polku phpBB juurihakemiston alla, esim. images/smilies';
$lang['Allow_sig'] = 'Salli allekirjoitukset';
$lang['Max_sig_length'] = 'Allekirjoituksen maksimipituus';
$lang['Max_sig_length_explain'] = 'K&auml;ytt&auml;j&auml;n allekirjoituksen maksimi merkkim&auml;&auml;r&auml;';
$lang['Allow_name_change'] = 'Salli k&auml;ytt&auml;j&auml;tunnuksen vaihto';

$lang['Avatar_settings'] = 'Avatar asetukset';
$lang['Allow_local'] = 'Salli avatar galleria';
$lang['Allow_remote'] = 'Salli et&auml;-avatarit';
$lang['Allow_remote_explain'] = 'Avatarit, jotka on linkattu toiselta sivustolta';
$lang['Allow_upload'] = 'Salli avatarin lataus';
$lang['Max_filesize'] = 'Avatar tiedoston maksimi koko';
$lang['Max_filesize_explain'] = 'Ladatuille avatar tiedostoille';
$lang['Max_avatar_size'] = 'Avatarin maksimikoko';
$lang['Max_avatar_size_explain'] = '(Korkeus x leveys pikselein&auml;)';
$lang['Avatar_storage_path'] = 'Avatarien tallennuspolku';
$lang['Avatar_storage_path_explain'] = 'Polku phpBB juurihakemiston alla, esim. images/avatars';
$lang['Avatar_gallery_path'] = 'Avatar Gallerian polku';
$lang['Avatar_gallery_path_explain'] = ' Polku phpBB juurihakemiston alle valmiiksi tallennetuille kuville, esim. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA asetukset';
$lang['COPPA_fax'] = 'COPPA Faksi numero';
$lang['COPPA_mail'] = 'COPPA postiosoite';
$lang['COPPA_mail_explain'] = 'T&auml;h&auml;n osoitteeseen huoltajat l&auml;hett&auml;v&auml;t COPPA rekister&ouml;inti-ilmoitukset';

$lang['Email_settings'] = 'S&auml;hk&ouml;posti asetukset';
$lang['Admin_email'] = 'Hallinnon s&auml;hk&ouml;postiosoite';
$lang['Email_sig'] = 'S&auml;hk&ouml;posti allekirjoitus';
$lang['Email_sig_explain'] = 'T&auml;m&auml; teksti liitet&auml;&auml;n kaikkiin t&auml;m&auml;n sivuston l&auml;hett&auml;miin s&auml;hk&ouml;posteihin';
$lang['Use_SMTP'] = 'K&auml;yt&auml; SMTP serveri&auml; s&auml;hk&ouml;postiin';
$lang['Use_SMTP_explain'] = 'Vastaa kyll&auml;, jos haluat l&auml;hett&auml;&auml; s&auml;hk&ouml;postin nimetyn palvelimen kautta, paikallisen mail toiminnon sijasta';
$lang['SMTP_server'] = 'SMTP serverin osoite';
$lang['SMTP_username'] = 'SMTP k&auml;ytt&auml;j&auml;tunnus';
$lang['SMTP_username_explain'] = 'Anna k&auml;ytt&auml;j&auml;tunnus vain jos smtp palvelin vaatii sit&auml;';
$lang['SMTP_password'] = 'SMTP salasana';
$lang['SMTP_password_explain'] = 'Anna salasana vain jos smtp palvelin vaatii sit&auml;';

$lang['Disable_privmsg'] = 'Yksityiset viestit';
$lang['Inbox_limits'] = 'Maks. viestit Saapunut kansiossa';
$lang['Sentbox_limits'] = 'Maks. viestit L&auml;hetetyt kansiossa';
$lang['Savebox_limits'] = 'Maks. viestit Tallennetut kansiossa';

$lang['Cookie_settings'] = 'Cookie asetukset'; 
$lang['Cookie_settings_explain'] = 'Kuinka selaimelle l&auml;hetett&auml;v&auml;t cookiet m&auml;&auml;ritell&auml;&auml;n. Yleens&auml; oletusarvot ovat riitt&auml;vi&auml;. Jos n&auml;it&auml; on tarvetta muuttaa, tee se huolella. V&auml;&auml;r&auml;t asetukset voivat est&auml;&auml; k&auml;ytt&auml;jien kirjautumisen.';
$lang['Cookie_domain'] = 'Cookie domain';
$lang['Cookie_name'] = 'Cookie nimi';
$lang['Cookie_path'] = 'Cookie polku';
$lang['Cookie_secure'] = 'Suojattu cookie  [ https ]';
$lang['Cookie_secure_explain'] = 'Jos palvelimesi toimii SSL:n kautta aktivoi t&auml;m&auml;, muussa tapauksessa j&auml;t&auml; pois k&auml;yt&ouml;st&auml;';
$lang['Session_length'] = 'Istunnon pituus [ sekunteja ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Ota k&auml;ytt&ouml;&ouml;n Visuaalinen Vahvistus';
$lang['Visual_confirm_explain'] = 'Vaatii k&auml;ytt&auml;j&auml;n antamaan rekister&ouml;innin yhteydess&auml; vahvistuskoodin joka on luettava kuvasta.';

//
// Forum Management
//
$lang['Forum_admin'] = 'Foorumien hallinta';
$lang['Forum_admin_explain'] = 'T&auml;ll&auml; sivulla voit lis&auml;t&auml;, poistaa, muokata, j&auml;rjestell&auml; ja synkronoida kategorioita ja foorumeita';
$lang['Edit_forum'] = 'Muokkaa foorumia';
$lang['Create_forum'] = 'Luo uusi foorumi';
$lang['Create_category'] = 'Luo uusi kategoria';
$lang['Remove'] = 'Poista';
$lang['Action'] = 'Toiminta';
$lang['Update_order'] = 'P&auml;ivit&auml; j&auml;rjestys';
$lang['Config_updated'] = 'Foorumien konfigurointitiedot p&auml;ivitetty onnistuneesti';
$lang['Edit'] = 'Muokkaa';
$lang['Delete'] = 'Poista';
$lang['Move_up'] = 'Siirr&auml; yl&ouml;sp&auml;in';
$lang['Move_down'] = 'Siirr&auml; alasp&auml;in';
$lang['Resync'] = 'Synkronoi';
$lang['No_mode'] = 'Toimintoa ei asetettu';
$lang['Forum_edit_delete_explain'] = 'Alapuolella olevalla lomakkeella voit muokata kaikkia foorumien yleisi&auml; toimintoja. Muihin konfigurointitietoihin p&auml;&auml;set sivun vasemman reunan linkeist&auml;';

$lang['Move_contents'] = 'Siirr&auml; kaikki sis&auml;lt&ouml;';
$lang['Forum_delete'] = 'Poista foorumi';
$lang['Forum_delete_explain'] = 'Alapuolella olevalla lomakkeella voit poistaa foorumin (tai kategorian) ja voit m&auml;&auml;ritell&auml; mihin haluat siirt&auml;&auml; foorumin kaikki aiheet (tai foorumit).';

$lang['Status_locked'] = 'Lukittu';
$lang['Status_unlocked'] = 'Avoin';
$lang['Forum_settings'] = 'Yleiset foorumin asetukset';
$lang['Forum_name'] = 'Foorumin nimi';
$lang['Forum_desc'] = 'Kuvaus';
$lang['Forum_status'] = 'Foorumin status';
$lang['Forum_pruning'] = 'Autosiivous';

$lang['prune_freq'] = 'Tarkista aiheiden ik&auml; joka';
$lang['prune_days'] = 'Poista aiheet, joihin ei ole kirjoitettu';
$lang['Set_prune_data'] = 'Olet m&auml;&auml;ritellyt automaattisen siivouksen t&auml;lle foorumille mutta et ole antanut siivoustiheytt&auml; tai p&auml;ivien lukum&auml;&auml;r&auml;&auml;. Ole hyv&auml; ja anna tiedot';

$lang['Move_and_Delete'] = 'Siirr&auml; ja poista';

$lang['Delete_all_posts'] = 'Poista kaikki viestit';
$lang['Nowhere_to_move'] = 'Ei ole paikkaa johon siirt&auml;&auml;';

$lang['Edit_Category'] = 'Muokkaa kategoriaa';
$lang['Edit_Category_explain'] = 'T&auml;ll&auml; lomakkeella m&auml;&auml;ritell&auml;&auml;n kategorian nimi.';

$lang['Forums_updated'] = 'Foorumi- ja kategoriatiedot p&auml;ivitetty onnistuneesti';

$lang['Must_delete_forums'] = 'Kaikki foorumit on poistettava ennen kuin t&auml;m&auml; kategoria voidaan poistaa';

$lang['Click_return_forumadmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi foorumien hallintaan';


//
// Smiley Management
//
$lang['smiley_title'] = 'Hymi&ouml;iden hallinta';
$lang['smile_desc'] = 'T&auml;ll&auml; sivulla voit lis&auml;t&auml;, poistaa ja muokata hymi&ouml;it&auml;, joita k&auml;ytt&auml;j&auml;t voivat k&auml;ytt&auml;&auml; tavallisissa ja yksityisiss&auml; viesteiss&auml;.';

$lang['smiley_config'] = 'Hymi&ouml;iden konfigurointi';
$lang['smiley_code'] = 'Hymi&ouml;n koodi';
$lang['smiley_url'] = 'Hymi&ouml;n kuvatiedosto';
$lang['smiley_emot'] = 'Hymi&ouml;n Emotio';
$lang['smile_add'] = 'Lis&auml;&auml; uusi hymi&ouml;';
$lang['Smile'] = 'Hymi&ouml;';
$lang['Emotion'] = 'Emotio';

$lang['Select_pak'] = 'Valitse kokoelma (.pak) tiedosto';
$lang['replace_existing'] = 'Korvaa olemassa oleva hymi&ouml;';
$lang['keep_existing'] = 'S&auml;ilyt&auml; olemassa oleva hymi&ouml;';
$lang['smiley_import_inst'] = 'Sinun pit&auml;&auml; purkaa hymi&ouml; kokoelma ja ladata kaikki tiedostot oikeaan hymi&ouml;-hakemistoon. Valitse sitten oikeat tiedot t&auml;ll&auml; lomakkeella lukeaksesi sis&auml;&auml;n hymi&ouml;kokoelman.';
$lang['smiley_import'] = 'Hymi&ouml;kokoelman sis&auml;&auml;nluku';
$lang['choose_smile_pak'] = 'Valitse hymi&ouml;kokoelman .pak tiedosto';
$lang['import'] = 'Lue sis&auml;&auml;n hymi&ouml;t';
$lang['smile_conflicts'] = 'Mit&auml; pit&auml;&auml; tehd&auml; mahdollisissa p&auml;&auml;llekk&auml;isyyksiss&auml;';
$lang['del_existing_smileys'] = 'Poista olemassa olevat hymi&ouml;t ennen sis&auml;&auml;n lukua';
$lang['import_smile_pack'] = 'Lue sis&auml;&auml;n hymi&ouml;kokoelma';
$lang['export_smile_pack'] = 'Luo hymi&ouml;kokoelma';
$lang['export_smiles'] = 'Luodaksesi hymi&ouml;kokoelman nykyisist&auml; hymi&ouml;ist&auml;, klikkaa %st&auml;st&auml;%s siirt&auml;&auml;ksesi hymi&ouml; (smiles.pak) tiedoston. Nime&auml; tiedosto s&auml;ilytt&auml;en .pak tarkenne. Luo zip tiedosto joka sis&auml;lt&auml;&auml; kaikki hymi&ouml;tiedostot ja t&auml;m&auml;n .pak konfigurointi tiedoston.';

$lang['smiley_add_success'] = 'Hymi&ouml;n lis&auml;ys onnistui';
$lang['smiley_edit_success'] = 'Hymi&ouml;n p&auml;ivitys onnistui';
$lang['smiley_import_success'] = 'Hymi&ouml;kokoelman sis&auml;&auml;nluku onnistui!';
$lang['smiley_del_success'] = 'Hymi&ouml;n poisto onnistui';
$lang['Click_return_smileadmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi hymi&ouml;iden hallintaan';


//
// User Management
//
$lang['User_admin'] = 'K&auml;ytt&auml;jien hallinta';
$lang['User_admin_explain'] = 'T&auml;ss&auml; voit muuttaa k&auml;ytt&auml;j&auml;n tietoja ja joitain tiettyj&auml; asetuksia. Muokataksesi k&auml;ytt&auml;j&auml;n oikeuksia, k&auml;yt&auml; k&auml;ytt&auml;jien ja ryhmien hallintaan tarkoitettua ty&ouml;kalua.';

$lang['Look_up_user'] = 'N&auml;yt&auml; k&auml;ytt&auml;j&auml;';

$lang['Admin_user_fail'] = 'K&auml;ytt&auml;j&auml;tietoja ei voitu p&auml;ivitt&auml;&auml;.';
$lang['Admin_user_updated'] = 'K&auml;ytt&auml;j&auml;tietojen p&auml;ivitys onnistui.';
$lang['Click_return_useradmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi k&auml;ytt&auml;jien hallintaan';

$lang['User_delete'] = 'Poista t&auml;m&auml; k&auml;ytt&auml;j&auml;';
$lang['User_delete_explain'] = 'Klikkaa t&auml;st&auml; poistaaksesi t&auml;m&auml; k&auml;ytt&auml;j&auml;, toimintoa ei voi peruuttaa.';
$lang['User_deleted'] = 'K&auml;ytt&auml;j&auml;n poisto onnistui.';

$lang['User_status'] = 'K&auml;ytt&auml;j&auml; on aktiivinen';
$lang['User_allowpm'] = 'Yksityiset viestit';
$lang['User_allowavatar'] = 'Avatarin k&auml;ytt&ouml;';

$lang['Admin_avatar_explain'] = 'T&auml;st&auml; n&auml;et ja voit poistaa k&auml;ytt&auml;j&auml;n nykyisen avatarin.';

$lang['User_special'] = 'Yll&auml;pidon erikoiskent&auml;t';
$lang['User_special_explain'] = 'N&auml;it&auml; kentti&auml; ei tavallinen k&auml;ytt&auml;j&auml; voi muuttaa. T&auml;ss&auml; voit m&auml;&auml;ritell&auml; k&auml;ytt&auml;j&auml;n statuksen ja muita asetuksia, joita ei sallita tavallisille k&auml;ytt&auml;jille.';


//
// Group Management
//
$lang['Group_administration'] = 'Ryhmien hallinta';
$lang['Group_admin_explain'] = 'T&auml;ll&auml; lomakkeella voit hallinnoida kaikkia k&auml;ytt&auml;j&auml;ryhmi&auml;. Voit poistaa, luoda ja muokata ryhmi&auml;. Voit valita moderaattorit, muuttaa avoin/suljettu statusta ja m&auml;&auml;ritell&auml; ryhm&auml;n nimen sek&auml; kuvauksen';
$lang['Error_updating_groups'] = 'Ryhmien p&auml;ivityksess&auml; tapahtui virhe';
$lang['Updated_group'] = 'Ryhm&auml;n p&auml;ivitys onnistui';
$lang['Added_new_group'] = 'Uuden ryhm&auml;n luonti onnistui';
$lang['Deleted_group'] = 'Ryhm&auml;n poisto onnistui';
$lang['New_group'] = 'Luo uusi ryhm&auml;';
$lang['Edit_group'] = 'Muokkaa ryhm&auml;&auml;';
$lang['group_name'] = 'Ryhm&auml;n nimi';
$lang['group_description'] = 'Ryhm&auml;n kuvaus';
$lang['group_moderator'] = 'Ryhm&auml;n moderaattori';
$lang['group_status'] = 'Ryhm&auml;n status';
$lang['group_open'] = 'Avoin ryhm&auml;';
$lang['group_closed'] = 'Suljettu ryhm&auml;';
$lang['group_hidden'] = 'Piilotettu ryhm&auml;';
$lang['group_delete'] = 'Poista ryhm&auml;';
$lang['group_delete_check'] = 'Poista t&auml;m&auml; ryhm&auml;';
$lang['submit_group_changes'] = 'Tallenna muutokset';
$lang['reset_group_changes'] = 'Resetoi muutokset';
$lang['No_group_name'] = 'Ryhm&auml;lle on annettava nimi';
$lang['No_group_moderator'] = 'Ryhm&auml;lle on m&auml;&auml;ritett&auml;v&auml; moderaattori';
$lang['No_group_mode'] = 'Ryhm&auml;lle on m&auml;&auml;ritelt&auml;v&auml; onko se avoin vai suljettu';
$lang['No_group_action'] = 'Toimintoa ei ole m&auml;&auml;ritelty';
$lang['delete_group_moderator'] = 'Poistetaanko ryhm&auml;n entinen moderaattori?';
$lang['delete_moderator_explain'] = 'Jos muutat ryhm&auml;n moderaattoria laita rasti t&auml;h&auml;n ruutuun poistaaksesi vanhan moderaattoritiedon. Muussa tapauksessa &auml;l&auml; laita raksia ja k&auml;ytt&auml;j&auml;st&auml; tulee tavallinen ryhm&auml;n j&auml;sen.';
$lang['Click_return_groupsadmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi ryhm&auml;n hallintaan.';
$lang['Select_group'] = 'Valitse ryhm&auml;';
$lang['Look_up_group'] = 'N&auml;yt&auml; ryhm&auml;';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Foorumin siivous';
$lang['Forum_Prune_explain'] = 'T&auml;ll&auml; poistetaan kaikki aiheet, joihin ei ole kirjoitettu antamasi p&auml;iv&auml;rajauksen sis&auml;ll&auml;. Jos et anna rajausta, niin kaikki aiheet poistetaan. Aiheita, joissa on aktiivinen &auml;&auml;nestys ja ilmoitustyyppisi&auml; aiheita ei poisteta. N&auml;m&auml; aiheet on poistettava k&auml;sin.';
$lang['Do_Prune'] = 'Suorita siivous';
$lang['All_Forums'] = 'Kaikki foorumit';
$lang['Prune_topics_not_posted'] = 'Siivoa aiheet, joissa ei ole vastauksia annetun ajan sis&auml;ll&auml;';
$lang['Topics_pruned'] = 'Siivottuja aiheita';
$lang['Posts_pruned'] = 'Siivottuja viestej&auml;';
$lang['Prune_success'] = 'Foorumien siivous onnistui';


//
// Word censor
//
$lang['Words_title'] = 'Sanojen sensurointi';
$lang['Words_explain'] = 'T&auml;st&auml; hallintapaneelista voi lis&auml;t&auml;, muokata ja poistaa sanoja jotka automaattisesti sensuroidaan foorumeissa. Lis&auml;ksi k&auml;ytt&auml;j&auml;tunnuksissa ei sallita n&auml;it&auml; sanoja. Jokerit (*) ovat hyv&auml;ksyttyj&auml; sana kent&auml;ss&auml;, esim. *testi* t&auml;sm&auml;&auml; kestotestin kanssa, test* t&auml;sm&auml;&auml; testaus kanssa, *testi t&auml;sm&auml;&auml; epotesti kanssa.';
$lang['Word'] = 'Sana';
$lang['Edit_word_censor'] = 'Muokkaa sanan sensuuria';
$lang['Replacement'] = 'Korvaus';
$lang['Add_new_word'] = 'Lis&auml;&auml; uusi sana';
$lang['Update_word'] = 'P&auml;ivit&auml; sanasensuuri';

$lang['Must_enter_word'] = 'Sinun t&auml;ytyy antaa sana ja sen korvike';
$lang['No_word_selected'] = 'Sanaa ei ole valittu muokattavaksi';

$lang['Word_updated'] = 'Valittu sanasensuuri on p&auml;ivitetty';
$lang['Word_added'] = 'Sanasensuuri on lis&auml;tty';
$lang['Word_removed'] = 'Valittu sanasensuuri on poistettu';

$lang['Click_return_wordadmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi Sanojen sensurointiin';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'T&auml;st&auml; voit l&auml;hett&auml;&auml; s&auml;hk&ouml;postia joko kaikille k&auml;ytt&auml;jille tai tietyn ryhm&auml;n k&auml;ytt&auml;jille. Yll&auml;pidon s&auml;hk&ouml;postiosoitteeseen l&auml;hetet&auml;&auml;n s&auml;hk&ouml;posti ja piilokopio kaikille vastaanottajille. Jos l&auml;het&auml;t isolle ryhm&auml;lle vastaanottajia ole k&auml;rsiv&auml;llinen &auml;l&auml;k&auml; keskeyt&auml; toimintoa. On normaalia, ett&auml; joukkopostitus kest&auml;&auml; pitk&auml;&auml;n. Saat ilmoituksen kun komento on suoritettu.';
$lang['Compose'] = 'S&auml;hk&ouml;postin luonti'; 

$lang['Recipients'] = 'Vastaanottajat'; 
$lang['All_users'] = 'Kaikki k&auml;ytt&auml;j&auml;t';

$lang['Email_successfull'] = 'Viestisi on l&auml;hetetty';
$lang['Click_return_massemail'] = 'Klikkaa %st&auml;st&auml;%s palataksesi s&auml;hk&ouml;postin l&auml;hetykseen';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Tittelien hallinta';
$lang['Ranks_explain'] = 'T&auml;ll&auml; lomakkeella voit muokata, tarkastaa ja poistaa titteleit&auml;. Voit my&ouml;s muodostaa erityisi&auml; titteleit&auml; joita voidaan liitt&auml;&auml; k&auml;ytt&auml;jiin k&auml;ytt&auml;j&auml;tietojen yll&auml;pidon kautta';

$lang['Add_new_rank'] = 'Lis&auml;&auml; uusi titteli';

$lang['Rank_title'] = 'Tittelin nimi';
$lang['Rank_special'] = 'M&auml;&auml;rit&auml; erikoistitteliksi';
$lang['Rank_minimum'] = 'Minimi viestien m&auml;&auml;r&auml;';
$lang['Rank_maximum'] = 'Maksimi viestien m&auml;&auml;r&auml;';
$lang['Rank_image'] = 'Tittelin kuvake (Suhteessa phpBB2 juurihakemistoon)';
$lang['Rank_image_explain'] = 'T&auml;ll&auml; voit m&auml;&auml;ritell&auml; pienen kuvakkeen tittelille';

$lang['Must_select_rank'] = 'Sinun t&auml;ytyy valita titteli';
$lang['No_assigned_rank'] = 'Erikoistitteleit&auml; ei asetettu';

$lang['Rank_updated'] = 'Tittelin p&auml;ivitys onnistui';
$lang['Rank_added'] = 'Tittelin lis&auml;ys onnistui';
$lang['Rank_removed'] = 'Tittelin poisto onnistui';
$lang['No_update_ranks'] = 'Titteli on poistettu mutta k&auml;ytt&auml;j&auml;tietoja, joilla titteli oli, ei ole p&auml;ivitetty. N&auml;iden k&auml;ytt&auml;jien tiedot on muutettava k&auml;sin';

$lang['Click_return_rankadmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi Tittelien hallintaan';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Kiellettyjen k&auml;ytt&auml;j&auml;tunnusten hallinta';
$lang['Disallow_explain'] = 'T&auml;ss&auml; voit m&auml;&auml;ritell&auml; k&auml;ytt&auml;j&auml;tunnukset, joita ei sallita. Voit k&auml;ytt&auml;&auml; k&auml;ytt&auml;j&auml;tunnuksen m&auml;&auml;rittelyss&auml; jokerimerkki&auml; *.  Huomaa, ett&auml; et voi kielt&auml;&auml; k&auml;ytt&auml;j&auml;nime&auml;, joka on jo rekister&ouml;ity, vaan t&auml;llainen k&auml;ytt&auml;j&auml;tunnus t&auml;ytyy ensin poistaa ja lis&auml;t&auml; sitten kiellettyjen listalle';

$lang['Delete_disallow'] = 'Poista';
$lang['Delete_disallow_title'] = 'Poista kielletty k&auml;ytt&auml;j&auml;tunnus';
$lang['Delete_disallow_explain'] = 'Voit poistaa kielletyn k&auml;ytt&auml;j&auml;tunnuksen valitsemalla k&auml;ytt&auml;j&auml;tunnus listalta ja klikkaamalla poista';

$lang['Add_disallow'] = 'Lis&auml;&auml;';
$lang['Add_disallow_title'] = 'Lis&auml;&auml; kielletty k&auml;ytt&auml;j&auml;tunnus';
$lang['Add_disallow_explain'] = 'Voit kielt&auml;&auml; k&auml;ytt&auml;j&auml;tunnuksen ja k&auml;ytt&auml;&auml; jokerimerkki&auml; * korvaamaan mink&auml; tahansa merkin';

$lang['No_disallowed'] = 'Ei kiellettyj&auml; k&auml;ytt&auml;j&auml;tunnuksia';

$lang['Disallowed_deleted'] = 'Kielletty k&auml;ytt&auml;j&auml;tunnus on poistettu';
$lang['Disallow_successful'] = 'Kielletty k&auml;ytt&auml;j&auml;tunnus on lis&auml;tty';
$lang['Disallowed_already'] = 'Antamaasi tunnusta ei voida kielt&auml;&auml;. Se joko on jo listalla, sis&auml;ltyy sensuroituihin sanoihin tai k&auml;ytt&auml;j&auml;tunnus on jo olemassa';

$lang['Click_return_disallowadmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi Kiellettyjen k&auml;ytt&auml;j&auml;tunnusten hallintaan';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Tyylien hallinta';
$lang['Styles_explain'] = 'T&auml;ss&auml; voit lis&auml;t&auml;, poistaa ja muokata tyylej&auml; (malleja ja teemoja) joita k&auml;ytt&auml;j&auml;t voivat k&auml;ytt&auml;&auml;';
$lang['Styles_addnew_explain'] = 'Seuraava listaus sis&auml;lt&auml;&auml; kaikki teemat, jotka ovat k&auml;ytett&auml;viss&auml; malleille (templates) joita sinulla on. T&auml;m&auml;n listan kohteita ei ole asennettu viel&auml; phpBB tietokantaan. Lis&auml;t&auml;ksesi teeman klikkaa vain asenna linkki&auml; kohteen vieress&auml;';

$lang['Select_template'] = 'Valitse malli';

$lang['Style'] = 'Tyyli';
$lang['Template'] = 'Malli';
$lang['Install'] = 'Asenna';
$lang['Download'] = 'Lataa';

$lang['Edit_theme'] = 'Muokkaa teemaa';
$lang['Edit_theme_explain'] = 'Alapuolella olevalla lomakkeella voit muokata valitun teeman asetuksia.';

$lang['Create_theme'] = 'Luo teema';
$lang['Create_theme_explain'] = 'K&auml;yt&auml; alla olevaa lomaketta luodaksesi uuden teeman valitulle mallille. Kun m&auml;&auml;rittelet v&auml;rej&auml; (jotka pit&auml;&auml; antaa heksalukuina) et saa k&auml;ytt&auml;&auml; alussa #, Esim. CCCCCC on oikein, #CCCCCC on v&auml;&auml;rin';

$lang['Export_themes'] = 'Siirr&auml; teemat';
$lang['Export_explain'] = 'T&auml;ll&auml; lomakkeella voit siirt&auml;&auml; teematiedot valitusta mallista. Valitse malli alla olevasta listasta ja komentojono luo teeman konfigurointitiedoston ja pyrkii tallentamaan sen valitun mallin hakemistoon. Jos tiedostoa ei voi tallentaa annetaan sinulle mahdollisuus ladata tiedosto. Jotta komentojono voisi tallentaa tiedoston on sinun annettava kirjoitusoikeus web palvelimella valittuun mallin hakemistoon. Lis&auml;tietoja phpBB 2 k&auml;ytt&auml;j&auml;n ohjeessa.';

$lang['Theme_installed'] = 'Valittu teema on asennettu onnistuneesti';
$lang['Style_removed'] = 'Valittu tyyli on poistettu tietokannasta. Poistaaksesi kokonaan tyylin j&auml;rjestelm&auml;st&auml; t&auml;ytyy sinun poistaa tyylitiedosto mallien hakemistosta.';
$lang['Theme_info_saved'] = 'Teeman tiedot valitussa mallissa on tallennettu. Sinun t&auml;ytyy nyt palauttaa k&auml;ytt&ouml;oikeudeksi pelkk&auml; luku (read-only) tiedostoon theme_info.cfg (ja tarvittaessa valittuun mallihakemistoon)';
$lang['Theme_updated'] = 'Valittu teema on p&auml;ivitetty. Siirr&auml; nyt uudet teeman asetukset';
$lang['Theme_created'] = 'Teema luotu. Siirr&auml; nyt teema konfigurointitiedostoon varmuuden vuoksi, tai k&auml;ytett&auml;v&auml;ksi my&ouml;s muualla';

$lang['Confirm_delete_style'] = 'Oletko varma, ett&auml; haluat poistaa t&auml;m&auml;n tyylin';

$lang['Download_theme_cfg'] = 'Siirrossa ei voitu kirjoittaa teeman m&auml;&auml;rittelytiedostoon. Klikkaa kuvaketta alapuolella ladataksesi t&auml;m&auml;n tiedoston selaimesi avulla. Kun olet ladannut tiedoston voit siirt&auml;&auml; sen hakemistoon joka sis&auml;lt&auml;&auml; mallitiedostot. Voit sen j&auml;lkeen pakata tiedostot jakeluun tai k&auml;ytt&ouml;&ouml;n muuaalla halutessasi';
$lang['No_themes'] = 'Valitsemassasi mallissa ei ole teemoja. Luodaksesi uuden teeman klikkaa Luo Uusi linkki&auml; sivun vasemmassa reunassa';
$lang['No_template_dir'] = 'Mallihakemistoa ei saatu avattua. Sen luku voi olla estetty selaimelta tai hakemisto voi puuttua';
$lang['Cannot_remove_style'] = 'Et voi poistaa tyyli&auml;, koska se on t&auml;ll&auml; hetkell&auml; oletustyyli. Ole hyv&auml; ja vaihda oletustyyli ja yrit&auml; uudestaan.';
$lang['Style_exists'] = 'Annetun niminen tyyli on jo olemassa, ole hyv&auml; ja anna toinen nimi.';

$lang['Click_return_styleadmin'] = 'Klikkaa %st&auml;st&auml;%s palataksesi Tyylien hallintaan';

$lang['Theme_settings'] = 'Teemojen asetukset';
$lang['Theme_element'] = 'Teeman elementti';
$lang['Simple_name'] = 'Yksinkertainen nimi';
$lang['Value'] = 'Arvo';
$lang['Save_Settings'] = 'Tallenna asetukset';

$lang['Stylesheet'] = 'CSS tyylisivu';
$lang['Background_image'] = 'Taustakuva';
$lang['Background_color'] = 'Taustan v&auml;ri';
$lang['Theme_name'] = 'Teeman nimi';
$lang['Link_color'] = 'Linkin v&auml;ri';
$lang['Text_color'] = 'Tekstin v&auml;ri';
$lang['VLink_color'] = 'K&auml;ytetyn linkin v&auml;ri';
$lang['ALink_color'] = 'Aktiivisen linkin v&auml;ri';
$lang['HLink_color'] = 'Hover linkin v&auml;ri';
$lang['Tr_color1'] = 'Taulukon rivin v&auml;ri 1';
$lang['Tr_color2'] = 'Taulukon rivin v&auml;ri 2';
$lang['Tr_color3'] = 'Taulukon rivin v&auml;ri 3';
$lang['Tr_class1'] = 'Taulukon rivin luokka 1';
$lang['Tr_class2'] = 'Taulukon rivin luokka 2';
$lang['Tr_class3'] = 'Taulukon rivin luokka 3';
$lang['Th_color1'] = 'Taulukon otsikon v&auml;ri 1';
$lang['Th_color2'] = 'Taulukon otsikon v&auml;ri 2';
$lang['Th_color3'] = 'Taulukon otsikon v&auml;ri 3';
$lang['Th_class1'] = 'Taulukon otsikon luokka 1';
$lang['Th_class2'] = 'Taulukon otsikon luokka 2';
$lang['Th_class3'] = 'Taulukon otsikon luokka 3';
$lang['Td_color1'] = 'Taulukon solun v&auml;ri 1';
$lang['Td_color2'] = 'Taulukon solun v&auml;ri 2';
$lang['Td_color3'] = 'Taulukon solun v&auml;ri 3';
$lang['Td_class1'] = 'Taulukon solun luokka 1';
$lang['Td_class2'] = 'Taulukon solun luokka 2';
$lang['Td_class3'] = 'Taulukon solun luokka 3';
$lang['fontface1'] = 'Fontti 1';
$lang['fontface2'] = 'Fontti 2';
$lang['fontface3'] = 'Fontti 3';
$lang['fontsize1'] = 'Fontin koko 1';
$lang['fontsize2'] = 'Fontin koko 2';
$lang['fontsize3'] = 'Fontin koko 3';
$lang['fontcolor1'] = 'Font v&auml;ri 1';
$lang['fontcolor2'] = 'Font v&auml;ri 2';
$lang['fontcolor3'] = 'Font v&auml;ri 3';
$lang['span_class1'] = 'V&auml;listys 1';
$lang['span_class2'] = 'V&auml;listys 2';
$lang['span_class3'] = 'V&auml;listys 3';
$lang['img_poll_size'] = '&Auml;&auml;nestyksen kuvakkeen koko [px]';
$lang['img_pm_size'] = 'Yksityisviestin statuksen koko [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Tervetuloa phpBB 2 asennukseen';
$lang['Initial_config'] = 'Perus konfiguraatio';
$lang['DB_config'] = 'Tietokanta konfiguraatio';
$lang['Admin_config'] = 'Yll&auml;pidon konfiguraatio';
$lang['continue_upgrade'] = 'Kun olet ladannut konfigurointitiedoston paikalliselle koneelle voit klikata\"jatka p&auml;ivityst&auml;\" painiketta alapuolella jatkaaksesi p&auml;ivityst&auml;.  Ole hyv&auml; ja odota konfigurointitiedoston lataamista kunnes p&auml;ivitys on valmis.';
$lang['upgrade_submit'] = 'Jatka p&auml;ivityst&auml;';

$lang['Installer_Error'] = 'Asennuksen yhteydess&auml; tapahtui virhe';
$lang['Previous_Install'] = 'Aikaisempi asennus l&ouml;ydetty';
$lang['Install_db_error'] = 'Tietokannan p&auml;ivityksess&auml; tapahtui virhe';

$lang['Re_install'] = 'Aikaisempi asennus on yh&auml; aktiivinen. <br /><br />Jos haluat asentaa uudestaan phpBB 2:n, klikkaa Yes nappulaa alapuolella. Huomaa kuitenkin, ett&auml; n&auml;in menet&auml;t kaiken olemassa olevan datan, varmuuskopiointia ei suoriteta! Yll&auml;pit&auml;j&auml;n k&auml;ytt&auml;j&auml;tunnus ja salasana joita olet k&auml;ytt&auml;nyt sis&auml;&auml;n kirjautumiseen luodaan uudestaan asennuksen j&auml;lkeen, muita asetuksia ei s&auml;ilytet&auml;. <br /><br />Harkitse tarkoin ennen kuin klikkaat Yes!';

$lang['Inst_Step_0'] = 'Kiitos, ett&auml; valintasi on phpBB 2. Jotta asennus voidaan suorittaa loppuun, t&auml;yt&auml; alla olevat yksityiskohdat. Huomaa, ett&auml; tietokannan johon asennus tehd&auml;&auml;n,  tulee olla jo olemassa. Jos asennat tietokantaan joka k&auml;ytt&auml;&auml; ODBC:ta, esim. MS Access sinun t&auml;ytyy ensin luoda DSN sille.';

$lang['Start_Install'] = 'Aloita asennus';
$lang['Finish_Install'] = 'Lopeta asennus';

$lang['Default_lang'] = 'Sivuston oletuskieli';
$lang['DB_Host'] = 'Tietokantapalvelimen nimi / DSN';
$lang['DB_Name'] = 'Tietokannan nimi';
$lang['DB_Username'] = 'Tietokannan k&auml;ytt&auml;j&auml;tunnus';
$lang['DB_Password'] = 'Tietokannan salasana';
$lang['Database'] = 'Tietokanta';
$lang['Install_lang'] = 'Valitse asennuskieli';
$lang['dbms'] = 'Tietokannan tyyppi';
$lang['Table_Prefix'] = 'Etuliite tauluille tietokannassa';
$lang['Admin_Username'] = 'Yll&auml;pit&auml;j&auml;n k&auml;ytt&auml;j&auml;tunnus';
$lang['Admin_Password'] = 'Yll&auml;pit&auml;j&auml;n salasana';
$lang['Admin_Password_confirm'] = 'Yll&auml;pit&auml;j&auml;n salasana [ Vahvista ]';

$lang['Inst_Step_2'] = 'Yll&auml;pit&auml;j&auml;n k&auml;ytt&auml;j&auml;tunnus on luotu. T&auml;ss&auml; vaiheessa perusasennus on valmis. Nyt saat seuraavan sivun jolla voit hallinnoida uutta asennustasi. Ole hyv&auml; ja varmista peruskonfiguraation tiedot ja tee tarvittavat muutokset. Kiitoksia, ett&auml; valitsit phpBB 2:n.';

$lang['Unwriteable_config'] = 'Konfigurointitiedostosi ei ole kirjoituskelpoinen t&auml;ll&auml; hetkell&auml;. Kopio konfigurointitiedostosta ladataan sinulle kun klikkaat painiketta alapuolella. Sinun tulee siirt&auml;&auml; t&auml;m&auml; tiedosto samaan hakemistoon kuin phpBB 2. Kun t&auml;m&auml; on tehty kirjaudu sis&auml;&auml;n yll&auml;pit&auml;j&auml;n k&auml;ytt&auml;j&auml;tunnuksella ja salasanalla ja k&auml;y yll&auml;pidon hallintasivuilla  (Linkki ilmestyy sivun alareunaan sis&auml;&auml;n kirjautumisen j&auml;lkeen) tarkistaaksesi yleiset asetukset. Kiitos kun valitsit phpBB 2:n.';
$lang['Download_config'] = 'Lataa konfigurointitiedosto';

$lang['ftp_choose'] = 'Valitse tiedonsiirtotapa';
$lang['ftp_option'] = '<br />Koska my&ouml;s FTP on mahdollista t&auml;ss&auml; PHP versiossa sinulle voidaan antaa mahdollisuus automaattisesti siirt&auml;&auml; ftp:ll&auml; tiedosto oikeaan paikkaan.';
$lang['ftp_instructs'] = 'Olet valinnut tiedoston siirrett&auml;v&auml;ksi automaattisesti ftp:ll&auml;. Ole hyv&auml; ja anna alla kysytyt tiedot, jotta tiedonsiirto onnistuu.  Huomioi, ett&auml; FTP polun tulee olla tarkka polku ftp:ll&auml; phpBB2 asennushakemistoon kuten siirt&auml;isit mit&auml; tahansa tietoa ftp:ll&auml;.';
$lang['ftp_info'] = 'Anna FTP tiedot ';
$lang['Attempt_ftp'] = 'Yritet&auml;&auml;n siirt&auml;&auml; konfigurointitiedosto ftp:ll&auml;';
$lang['Send_file'] = 'L&auml;het&auml; tiedosto minulle ja siirr&auml;n sen ftp:ll&auml; manuaalisesti';
$lang['ftp_path'] = 'FTP polku phpBB 2:lle';
$lang['ftp_username'] = 'FTP k&auml;ytt&auml;j&auml;tunnus';
$lang['ftp_password'] = 'FTP salasana';
$lang['Transfer_config'] = 'Aloita siirto';
$lang['NoFTP_config'] = 'Konfigurointitiedoston ftp siirto ei onnistunut. Ole hyv&auml; ja lataa konfigurointitiedosto ja k&auml;yt&auml; ftp:t&auml; manuaalisesti.';

$lang['Install'] = 'Asennus';
$lang['Upgrade'] = 'P&auml;ivitys';


$lang['Install_Method'] = 'Valitse asennustapa';

$lang['Install_No_Ext'] = 'Palvelimen php asetukset eiv&auml;t tue valitsemaasi tietokantaa.';

$lang['Install_No_PCRE'] = 'PhpBB2 tarvitsee moduulin (Perl-Compatible Regular Expressions Module) php:lle jota php asetuksesi eiv&auml;t n&auml;yt&auml; tukevan!';

//
// That's all Folks!
// -------------------------------------------------

?>