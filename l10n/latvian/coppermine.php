<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2006 CPG-Nuke Dev Team
  http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/latvian/coppermine.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2008/03/20 11:59:32 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Skatījumi');//new in 1.2.2nuke
define('PIC_VOTES', 'Balsis');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Komentāri');//new in 1.2.2nuke

define('LANG_NAME_ENGLISH', 'Latvian');
define('LANG_NAME_NATIVE', 'Latviešu');
define('LANG_COUNTRY_CODE', 'lv');
define('TRANS_NAME', 'Kaspars Priedols');
define('TRANS_EMAIL', 'house@tvertne.nu');
define('TRANS_WEBSITE', 'http://foto.tvertne.nu/');
define('TRANS_DATE', '2003-10-15');
define('TRANS_NAME2', 'Latvijas Universitātes Linux Centrs');
define('TRANS_EMAIL2', 'fizmati@gmail.com');
define('TRANS_WEBSITE2', 'http://fizmati.lv/');
define('TRANS_DATE2', '2005-08-11');
define('CHARSET', 'UTF-8');
// ltr or rtl
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Jâ');
define('NO', 'Nç');
// some common strings
define('BACK', 'ATGRIEZTIES');
define('CONTINU', 'TURPINÂT');
define('INFO', 'Informâcija');
//define('ERROR', 'Kïûda');
define('ALBUM_DATE_FMT', '%d/%m/%Y %H:%M');
define('LASTCOM_DATE_FMT', '%d/%m/%Y %H:%M');
define('LASTUP_DATE_FMT', '%d/%m/%Y %H:%M');
define('REGISTER_DATE_FMT', '%d/%m/%Y %H:%M');
define('LASTHIT_DATE_FMT', '%d/%m/%Y %H:%M');
define('COMMENT_DATE_FMT', '%d/%m/%Y %H:%M');

// lang_meta_album_names
define('RANDOM', 'Izlases veida attēli');
define('LASTUP', 'Jaunākie papildinājumi');
define('LASTUPBY', 'Mani jaunākie papildinājumi');
define('LASTALB', 'Pēdējie atjauninātie albūmi');
define('LASTCOM', 'Pēdējie komentāri');
define('LASTCOMBY', 'Mani pēdējie komentāri');
define('TOPN', '10 Skatītākie');
define('TOPRATED', 'Vispopulārākie');
define('LASTHITS', 'Pçdçjie skatîtie');
define('SEARCH', 'Meklçğanas rezultâti');
define('FAVPICS', 'Attçlu favorîti');

// lang_errors
define('ACCESS_DENIED', 'Tev nav pieejas tiesîbu ğai lapai.');
define('PERM_DENIED', 'Tev nav tiesîbu veikt ğâdu darbîbu.');
define('PARAM_MISSING', 'Tika izsaukta komanda bez parametriem.');
define('NON_EXIST_AP', 'Izvçlçtais albums/attçls neeksistç!');
define('QUOTA_EXCEEDED', 'Nav vietas uz diska.<br /><br />Tev ir pieğíirts ierobeşojums [quota]K, bet pağlaik jau aizòemti [space]K, tâpçc ğî attçla pievienoğana nav ieteicama (tiks pârsniegts ierobeşojums).');
define('GD_FILE_TYPE_ERR', 'Izmantojot GD attçlu bibliotçku, atïauts izmantot tikai JPEG un PNG formâtus.');
define('INVALID_IMAGE', 'Attçls bojâts vai arî sistçmas GD attçlu bibliotçka nespçj to atkodçt.');
define('RESIZE_FAILED', 'Nav iespçjams izveidot mazo attçlu vai izmainît tâ izmçrus.');
define('NO_IMG_TO_DISPLAY', 'Nav attçla');
define('NON_EXIST_CAT', 'Izvçlçtâ sadaïa neeksistç');
define('ORPHAN_CAT', 'Ğai apakğsadaïai nav sadaïas, kam tâ piederçtu, lûdzu izmanto sadaïu menedşeri, lai atrisinâtu problçmu.');
define('DIRECTORY_RO', 'Direktorijâ \'%s\' nav atïauts rakstît, tâpçc attçlus nav iespçjams izdzçst.');
define('NON_EXIST_COMMENT', 'Izvçlçtais komentârs neeksistç.');
define('PIC_IN_INVALID_ALBUM', 'Attçls atrodas neeksistçjoğâ albumâ (%s)!?');
define('BANNED', 'Pieeja foto galerijai aizliegta.');
define('NOT_WITH_UDB', 'Ğî iespçja ir atslçgta, jo tai jâbût integrçtai kopâ ar foruma programmatûru. Trûkst attiecîgâs konfigurâcijas, vai nepiecieğams uzinstalçt forumu.');
define('MEMBERS_ONLY', 'This function is for members only, please join.');
define('MUSTBE_GOD', 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function');
define('NO_IMG_TO_APPROVE', 'No images to approve');

// lang_main_menu
define('ALB_LIST_TITLE', 'Pāriet uz albūmu sarakstu');
define('ALB_LIST_LNK', 'Albūmu saraksts');
define('MY_GAL_TITLE', 'Pāriet uz manu personisko galeriju');
define('MY_GAL_LNK', 'Mana Galerija');
define('MY_PROF_LNK', 'Mans Profils');
define('MY_PROF_TITLE','Diska vietas ierobežojuma un grupu piederības pārbaude');
define('ADM_MODE_TITLE', 'Pārslēgties uz administrēšanas režīmu');
define('ADM_MODE_LNK', 'Administrēšanas režīms');
define('USR_MODE_TITLE', 'Pārslēgties uz lietotāja režīmu');
define('USR_MODE_LNK', 'Lietotāja režīms');
define('UPLOAD_PIC_TITLE', 'Jaunu albūma bilžu pievienošana');
define('UPLOAD_PIC_LNK', 'Pievienot bildi');
define('REGISTER_TITLE', 'Izveidot lietotāja kontu');
define('REGISTER_LNK', 'Reģistrēties');
define('LOGIN_LNK', 'Pieslēgties');
define('LOGOUT_LNK', 'Beigt darbu');
define('LASTUP_LNK', 'Jaunākie attēli');
define('LASTUP_TITLE', 'Jaunākie attēli');
define('LASTCOM_TITLE',  'Attēli dilstošā komentāru pievienošanas secībā');
define('LASTCOM_LNK',  'Pēdējie komentāri');
define('TOPN_TITLE', 'Attēli, kas aplūkoti visbiežāk');
define('TOPN_LNK', 'Skatītākie attēli');
define('TOPRATED_TITLE', 'Visaugstāk novērtētie attēli');
define('TOPRATED_LNK', 'Augstāk novērtētie');
define('SEARCH_TITLE', 'Meklēt attēlus');
define('SEARCH_LNK', 'Meklēt');
define('FAV_TITLE', 'Mana attēlu izlase');
define('FAV_LNK', 'Mana izlase');
define('HELP_TITLE', 'Palīdziet!');
define('HELP_LNK', "<img src=\"modules/$module_name/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"".HELP_TITLE."\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Pievienošanas apstiprināšana');
define('CONFIG_LNK', 'Konfigurācija');
define('ALBUMS_LNK', 'Albūmi');
define('CATEGORIES_LNK', 'Sadaļas');
define('USERS_LNK', 'Lietotāji');
define('GROUPS_LNK', 'Grupas');
define('COMMENTS_LNK', 'Pārskatīt komentārus');
define('SEARCHNEW_LNK', 'Pievienot attēlu paketi');
define('UTIL_LNK', 'Mainīt attēlu izmērus');
define('BAN_LNK', 'Bloķēt lietotājus');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Izveidot / pārkārtot albūmus');
define('MODIFYALB_LNK', 'Izmainīt manus albūmus');
//define('MY_PROF_LNK', 'Mans profils');

// lang_cat_list
define('CATEGORY', 'Sadaļas');
define('ALBUMS', 'Albūmi');
//define('PICTURES', 'Attēli');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albūms(i) %d lapā(s)');
// lang_thumb_view
define('DATE', 'Datums');
define('NAME', 'Faila nosaukums');
define('TITLE', 'Virsraksts');
define('SORT_DA', 'Atlasīt pēc datuma augošā secībā');
define('SORT_DD', 'Atlasīt pēc datuma dilstošā secībā');
define('SORT_NA', 'Atlasīt pēc nosaukuma augošā secībā');
define('SORT_ND', 'Atlasīt pēc nosaukuma dilstosā secībā');
define('SORT_TA', 'Atlasīt pēc virsraksta augošā secībā');
define('SORT_TD', 'Atlasīt pēc virsraksta dilstošā secībā');
define('PIC_ON_PAGE', '%d attēls(i) %d lapā(s)');
define('USER_ON_PAGE', '%d lietotājs(i) %d lapā(s)');
define('SORT_RA', 'Atlasīt pēc vērtējuma augošā secībā');
define('SORT_RD', 'Atlasīt pēc vērtējuma dilstošā secībā');
define('THUMB_RATING', 'Vērtējums');
define('SORT_TITLE', 'Atlasīt attēlus pēc:');

// lang_img_nav_bar
define('THUMB_TITLE', 'atgriezties uz sīktēlu lapu');
define('PIC_INFO_TITLE', 'Rādīt/slēpt attēla informāciju');
define('SLIDESHOW_TITLE', 'Slīdrāde');
define('SLIDESHOW_DISABLED', 'Slīdrāde ir atslēgta');
define('SLIDESHOW_DISABLED_MSG', 'Šī funkcija ir pieejama tikai reģistrētiem lietotājiem, lūdzu pievienojies.');
define('ECARD_TITLE', 'Nosūtīt šo attēlu kā elektronisku atklāni');
define('ECARD_DISABLED', 'elektroniskās atklātnes ir atslēgtas');
define('ECARD_DISABLED_MSG', 'Jums nav tiesību sūtīt elektroniskās atklātnes');
define('PREV_TITLE', 'Apskatīt iepriekšējo attēlu');
define('NEXT_TITLE', 'Apskatīt nākamo attēlu');
define('PIC_POS', '%s attēls no %s');
define('NO_MORE_IMAGES', 'Šajā galerijā vairāk attēlu nav');
define('NO_LESS_IMAGES', 'Šis ir šīs galerijas pirmais attēls');

// lang_rate_pic
define('RATE_THIS_PIC', 'Novērtēt šo attēlu ');
define('NO_VOTES', '(Vēl nav novērtēts)');
define('RATING', '(pašreizējais vērtējums: %s / 5, balsots %s reizi(es))');
define('RUBBISH', 'Mēsls');
define('POOR', 'Vāji');
define('FAIR', 'Pieņemami');
define('GOOD', 'Labi');
define('EXCELLENT', 'Teicami');
define('GREAT', 'Izcili');

// lang_cpg_die
//define('INFO', 'Ziņojums');
//define('ERROR', 'Kļūda');
define('_CRITICAL_ERROR', 'Kritiska kļūda');
define('FILE', 'Fails: ');
define('LINE', 'Rinda: ');

// lang_display_thumbnails
define('FILENAME', 'Faila nosaukums: ');
define('FILESIZE', 'Faila izmērs: ');
define('DIMENSIONS', 'Attēla izmērs: ');
define('DATE_ADDED', 'Pievienšanas datums: ');

// lang_get_pic_data
define('N_COMMENTS', '%s komentāri');
define('N_VIEWS', '%s skatījumi');
define('N_VOTES', '(%s balsis)');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Albūmiem vajag nosaukumu!');
define('CONFIRM_MODIFS', 'Vai esat pārliecināts, ka gribat veikt šīs izmaiņas?');
define('NO_CHANGE', 'Vai tad Jūs kaut ko izmainījāt?!');
define('NEW_ALBUM', 'Jauns Albūms');
define('CONFIRM_DELETE1', 'Vai tiešām vēlaties dzēst šo albūmu?');
define('CONFIRM_DELETE2', 'Visi tā attēli un to komentāri tiks pazaudēti!');
define('SELECT_FIRST', 'Vispirms izvēlies albūmu');
define('ALB_MRG', 'Albūmu pārvaldnieks');
define('MY_GALLERY', '* Mana Galerija *');
define('NO_CATEGORY', '* Bez sadaļas *');
define('DELETE', 'Dzēst');
define('NEW', 'Jauns');
define('APPLY_MODIFS', 'Uzstādīt izmaiņas');
define('SELECT_CATEGORY', 'Izvēlies sadaļu');

// lang_catmgr_php
define('MISS_PARAM', 'Nav norādīti visi \'%s\' darbībai nepieciešamie parametri!');
define('UNKNOWN_CAT', 'Šāda sadaļa datu bāze neeksistē');
define('USERGAL_CAT_RO', 'Lietotāja galeriju sadaļu nevar izdzēst!');
define('MANAGE_CAT', 'Rediģēt sadaļas');
define('CONFIRM_DELETE_CAT', 'Vai tiešām gribat DZĒST šo sadaļu');
//define('CATEGORY', 'Sadaļa');
define('OPERATIONS', 'Pieejamās darbības');
define('MOVE_INTO', 'Pārvietot uz');
define('UPDATE_CREATE', 'Izveidot/Atjaunināt sadaļu');
define('PARENT_CAT', 'Mātes sadaļa');
define('CAT_TITLE', 'Sadaļas nosaukums');
define('CAT_DESC', 'Sadaļas apraksts');

// lang_config_php
define('CONFIG_TITLE', 'Konfigurācija');
define('RESTORE_CFG', 'Atjaunot noklusētos iestatījumus');
define('SAVE_CFG', 'Saglabāt jauno konfigurāciju');
define('NOTES', 'Piezīmes');
//define('INFO', 'Informācija');
define('UPD_SUCCESS', 'Galerijas konfigurācija veiksmīgi atjaunināta');
define('RESTORE_SUCCESS', 'Galerijas noklusētie iestatījumi atjaunināti');
define('NAME_A', 'Vārdi augošā secībā');
define('NAME_D', 'Vārdi dilstošā secībā');
define('TITLE_A', 'Nosaukumi augošā secībā');
define('TITLE_D', 'Nosaukumi dilstošā secībā');
define('DATE_A', 'Pievienošanas datumi augošā secībā');
define('DATE_D', 'Pievienošanas datumi dilstošā secībā');
define('RATING_A', 'Vērtējumi augošā secībā');
define('RATING_D', 'Vērtējumi dilstošā secībā');
define('TH_ANY', 'Maksimālais Aspekts');
define('TH_HT', 'Augstums');
define('TH_WD', 'Platums');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Ievadiet savu vārdu un komentāru');
define('COM_ADDED', 'Jūsu kmentārs pievienots');
define('ALB_NEED_TITLE', 'Jums jānorāda albūma nosaukums!');
define('NO_UDP_NEEDED', 'Atjaunināšana nav nepieciešama');
define('ALB_UPDATED', 'Albūms atjaunināts');
define('UNKNOWN_ALBUM', 'Izvēlētais albūms neeksistē vai arī jums nav tiesību pievienot attēlus šim albūmam');
define('NO_PIC_UPLOADED', 'Attēls(i) netika pievienots(i)!<br /><br />Ja patiešām mēģinājāt pievienot kādu attēlu, pārliecinieties vai jūsu serveris ļauj pievienot jaunas bildes un vai ".gif" attēls nesatur animācijas.');
define('ERR_MKDIR', 'Izveidot directoriju %s neizdevās!');
define('DEST_DIR_RO', 'Skriptam nav tiesību rakstīt izvēlētajā direktorijā %s!');
define('ERR_MOVE', 'Pārvietot %s no %s uz %s nav iespējams!');
define('ERR_FSIZE_TOO_LARGE', 'Jūsu pievienotais attēls ir pārāk liels (maksimālais atļautais izmērs ir %s x %s)!');
define('ERR_IMGSIZE_TOO_LARGE', 'Jūsu pievienotais fails ir pārāk liels  (maksimālais atļautais izmērs ir %s KB)!');
define('ERR_INVALID_IMG', 'Jūsu pievientais attēls nav korekts!');
define('ALLOWED_IMG_TYPES', 'Jūs varat pievienot tikai %s attēlus.');
define('ERR_INSERT_PIC', 'Izvēlēto attēlu \'%s\' nevar pievienot albūmam');
define('UPLOAD_SUCCESS', 'Jūsu attēls tika veiksmīgi pievienots<br /><br />'.((is_admin())? '' :'Tas būs radzams pēc administratora apstiprinājuma'));
//define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Nav komentāra!');
define('ERR_INVALID_FEXT', 'Atļauti tikai faili ar sekojošiem paplašinājumiem: <br /><br />%s');
define('NO_FLOOD', 'Atvaino, bet tu esi pievienojis arī iepriekšējo šīs bildes komentāru<br /><br />Ja gribi teikt ko jaunu, izmaini ieprieksējo komentāru');
define('REDIRECT_MSG', 'Jūs tiekat pāradresēts...<br /><br /><br />Klikšķiniet \'Turpināt\' ja šī lapa nepārlādējas automātiski');
define('UPL_SUCCESS', 'Jūsu attēli ir veiksmīgi pievienoti');

// lang_delete_php
define('CAPTION', 'Virsraksts');
define('FS_PIC', 'pilna izmēra attēls');
define('DEL_SUCCESS', 'veiksmīgi dzēsts');
define('NS_PIC', 'normāla izmēra attēls');
define('ERR_DEL', 'nevar izdzēst');
define('THUMB_PIC', 'sīktēls');
//define('COMMENT', 'komentārs');
define('IM_IN_ALB', 'attēls albūmā');
define('ALB_DEL_SUCCESS', 'Albūms \'%s\' dzēsts');
define('ALB_MGR', 'Albūmu pārvaldnieks');
define('ERR_INVALID_DATA', 'Saņemta nekorekta informācija \'%s\'');
define('CREATE_ALB', 'Tiek veidots albūms \'%s\'');
define('UPDATE_ALB', 'Atjauninam albūmu \'%s\' ar virsrakstu \'%s\' un indeksu \'%s\'');
define('DEL_PIC', 'Dzēst attēlu');
define('DEL_ALB', 'Dzēst albūmu');
define('DEL_USER', 'Dzēst lietotāju');
//define('ERR_UNKNOWN_USER', 'The selected user does not exist !');
define('COMMENT_DELETED', 'Izvēlētais komentārs ir veismīgi izdzēsts');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Vai tiešām vēlaties DZĒST šo attēlu? <br />Visi tā komentāri arī tiks izdzēsti.');
define('DEL_THIS_PIC', 'Dzēst šo attēlu');
define('SIZE', '%s x %s piseļi');
define('VIEWS', '%s reizes');
define('SLIDESHOW', 'Slīdrāde');
define('STOP_SLIDESHOW', 'Pārtraukt Slīdrādi');
define('VIEW_FS', 'Klukšķiniet, lai apskatītu lielāku attēlu');
define('EDIT_PIC', 'Rediģēt attēla informāciju');

// lang_picinfo
define('PIC_INF_TITLE', 'Attēla informācija');
define('PIC_INF_FILENAME', 'Faila nosaukums');
define('ALBUM_NAME', 'Albūma nosaukums');
define('PIC_INFO_RATING', 'Vērtējums (%s balsis)');
define('KEYWORDS', 'Atslēgas vārdi');
define('PIC_INF_FILE_SIZE', 'Faila izmērs');
define('PIC_INF_DIMENSIONS', 'Attēla izmērs');
define('DISPLAYED', 'Parādīts');
define('CAMERA', 'Kamera');
define('DATE_TAKEN', 'Uzņemšanas datums');
define('APERTURE', 'Diafragmas atvērums');
define('EXPOSURE_TIME', 'Ekspozīcijas laiks');
define('FOCAL_LENGTH', 'Fokusa attālums');
define('COMMENT', 'Komentārs');
define('ADDFAV', 'Pievienot izlases albūmam');
define('ADDFAVPHRASE', 'Izlase');
define('REMFAV', 'Dzēst no izlases albūma');
define('IPTCTITLE', 'IPTC Virstaksts');
define('IPTCCOPYRIGHT', 'IPTC Autortiesības');
define('IPTCKEYWORDS', 'IPTC Atslēgas vārdi');
define('IPTCCATEGORY', 'IPTC Sadaļa');
define('IPTCSUBCATEGORIES', 'IPTC Apakšsadaļa');
define('BOOKMARK_PAGE', 'Atcerēties attēlu');
define('REMOVEFAV', 'Dzēst no izlases albūma');
define('ADDEDTOFAV', 'Pievienot izlases albūmam');

// lang_display_comments
define('OK', 'OK');
define('COM_EDIT_TITLE', 'Rediģēt šo komentāru');
define('CONFIRM_DELETE_COM', 'VAi tiešām vēlaties dzēst šo komentāru?');
define('ADD_YOUR_COMMENT', 'Pievienot komentāru');
define('COM_NAME', 'Vārds');
//define('COMMENT', 'Komentārs');
define('YOUR_NAME', 'Anonīms');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Aizvērt logu');

// lang_ecard_php
define('E_TITLE', 'Nosūtīt elektronikso atklātnīti');
define('INVALID_EMAIL', '<b>Uzmanību</b>: Nepareiza e-pasta adrese!');
define('E_ECARD_TITLE', 'Elektroniska atkātnīte no %s');
define('VIEW_ECARD', 'Šo elektronisko atklētnīti var aplukot arī sekojošā adresē');
define('VIEW_MORE_PICS', 'Klikšķiniet šeit, lai apskatītu vairāk attēlu!');
define('SEND_SUCCESS', 'Elektroniskā atklātnītenosūtīta');
define('SEND_FAILED', 'Atvainojiet, bet šis serveris nevar nosūtīt Jūsu atklātnīti...');
define('FROM', 'No');
define('_YOUR_NAME', 'Jūsu vārds');
define('YOUR_EMAIL', 'Jūsu e-pasta adrese');
define('TO', 'Kam');
define('RCPT_NAME', 'Saņēmēja vārds');
define('RCPT_EMAIL', 'Saņēmēja e-pasta adrese');
define('GREETINGS', 'Apsveikums');
define('MESSAGE', 'Apsveikuma teksts');
define('ECARD_LINK_CORRUPT', 'Diemžēl jūsu e-pasta pārlūkprogramma ir sabojājusi šo atklātnīti, mēģiniet iekopēt tās adresi savā interneta pārlūkā'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Attēla&nbsp;Informācija');
define('ALBUM', 'Albūms');
define('EDIT_TITLE', 'Nosaukums');
define('DESC', 'Apraksts');
//define('KEYWORDS', 'Atslēgas vārdi');
define('PIC_INFO_STR', '%sx%s - %sKB - %s skatījumi - %s balsis');
define('APPROVE', 'Apstiprināt attēla pievienošanu');
define('POSTPONE_APP', 'Noraidīt attēla pievienošanu');
//define('DEL_PIC', 'Dzēst attēlu');
define('READ_EXIF', 'Nolasīt EXIF infotmāciju vēlreiz');
define('RESET_VIEW_COUNT', 'Atiestatīt skatījumu skaitītāju');
define('RESET_VOTES', 'Atiestatīt balsojumus');
define('DEL_COMM', 'Dzēst komentārus');
define('UPL_APPROVAL', 'Pievienošanas apstiprinājums');
define('EDIT_PICS', 'Rediģēt attēlus');
define('SEE_NEXT', 'Apskatīt nākamos attēlus');
define('SEE_PREV', 'Apskatīt iepriekšējos attēlus');
define('N_PIC', '%s attēls(i)');
define('N_OF_PIC_TO_DISP', 'Rādāmo attēlu skaits');
define('APPLY', 'Apstiprināt izmaiņas');

// lang_groupmgr_php
define('GROUP_NAME', 'Grupa');
define('DISK_QUOTA', 'Diska vietas ierobežojums');
define('CAN_RATE', 'Var vērtēt attēlus');
define('CAN_SEND_ECARDS', 'Var sūtīt elektroniskās atklātnītes');
define('CAN_POST_COM', 'Var pievienot komentārus');
define('CAN_UPLOAD', 'Var pievienot attēlus');
define('CAN_HAVE_GALLERY', 'Drīkst veidot personisku galeriju');
//define('APPLY', 'Apstiprināt izmaiņas');
define('CREATE_NEW_GROUP', 'Izveidot jaunu grupu');
define('DEL_GROUPS', 'Dzēst izvēlēto(tās) grupu(as)');
define('CONFIRM_DEL', 'Uzmanību dzēšot grupu tās lietotāji tiks pārvietoti uz \'Reģistrēto lietotāju\' grupu!\\n\\nVai vēlaties turpināt?');
define('GROUP_TITLE', 'Rediģēt lietotāu grupas');
define('APPROVAL_1', 'Publisks pievienošanas apstiprinājums (1)');
define('APPROVAL_2', 'Privāts pievienošanas apstiprinājums (2)');
define('NOTE1', '<b>(1)</b> Lai pievienotu attēlus publiskam albūmam ir nepieciešams administratora apstiprinājums');
define('NOTE2', '<b>(2)</b> Lai pievienotu attēlus albūmam, kas pieder kādam lietotājam ir nepieciešams administratora apstiprinājums');
//define('NOTES', 'Piezīmes');

// lang_index_php
define('WELCOME', 'Esiet sveicināti!');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Vai tiešām vēlaties DZĒST šo albūmu? <br />Visas bildes un to komentāri arī tiks izdzēsti!');
//define('DELETE', 'Dzēst');
define('MODIFY', 'Parametrus');
//define('EDIT_PICS', 'Rediģēt attēlus');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> attēli <b>[albums]</b> albūmos <b>[cat]</b> sadaļās ar <b>[comments]</b> komentāriem, skatītas <b>[views]</b> reizes');
define('STAT2', '<b>[pictures]</b> attēli <b>[albums]</b> albūmos skatīti <b>[views]</b> reizes');
define('XX_S_GALLERY', 'Autors %s');
define('STAT3', '<b>[pictures]</b> attēli <b>[albums]</b> albūmos ar <b>[comments]</b> komentāriem, skatīti <b>[views]</b> reizes');

// lang_list_users
define('USER_LIST', 'Lietotāju saraksts');
define('NO_USER_GAL', 'Nav nevienas galerijas');
define('N_ALBUMS', '%s albūmi(s)');
define('N_PICS', '%s attēli(s)');

// lang_list_albums
define('N_PICTURES', '%s attēli');
define('LAST_ADDED', ', Pēdējais attēls pievienots %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Atjaunināt albūmu %s');
define('GENERAL_SETTINGS', 'Vispārējie iestatījumi');
define('ALB_TITLE', 'Albūma nosaukums');
define('ALB_CAT', 'Albūma kategorija');
define('ALB_DESC', 'Albūma apraksts');
define('ALB_THUMB', 'Albūma sīktēls');
define('ALB_PERM', 'Lietotāju tiesības šim albūmam');
define('CAN_VIEW', 'Albūmu drīkst aplūkot');
define('MOD_CAN_UPLOAD', 'Jaunus attēlus drīkst pievienot');
define('CAN_POST_COMMENTS', 'Savus komentārus drīkst pievienot');
define('MOD_CAN_RATE', 'Bildes vēŗtēt drīkst');
define('USER_GAL', 'Lietotāja galerija');
define('NO_CAT', '* Bez sadaļas *');
define('ALB_EMPTY', 'Albūms ir tukšs');
define('LAST_UPLOADED', 'Pēdējais attēls pievienots');
define('PUBLIC_ALB', 'Ikviens (publisks albūms)');
define('ME_ONLY', 'Tikai es');
define('OWNER_ONLY', 'Tikai Albūma īpašnieks (%s)');
define('GROUPP_ONLY', 'Tikai \'%s\' grupas locekļi');
define('ERR_NO_ALB_TO_MODIFY', 'Nav neviena albūma ko rediģēt. Vispirms izveidojiet kādu albūmu!');
define('UPDATE', 'Atjaununāt albūmu');

// lang_rate_pic_php
define('ALREADY_RATED', 'Atvainojiet, bet Jūs šo bdi jau esat novērtējis(usi)');
define('RATE_OK', 'Paldies par balsojumu');

// lang_register_php
define('USERNAME', 'Lietotājvārds');
define('GROUP', 'Grupa');
define('DISK_USAGE', 'Diska piepildījums');
define('X_S_PROFILE', '%s\ profils');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Pārskatīt komentārus');
define('NO_COMMENT', 'Nav neviena konentāra!');
define('N_COMM_DEL', 'Dzēsti %s comentāti');
define('N_COMM_DISP', 'Rādāmo komentāru skaits');
define('R_SEE_PREV', 'Apskatīt iepriekšējos');
define('R_SEE_NEXT', 'Apskatīt nākamos');
define('R_DEL_COMM', 'Dzēst izvēlētos komentārus');

// lang_search_php
define('S_SEARCH', 'Meklēt attēlu kolekcijā');

// lang_search_new_php
define('PAGE_TITLE', 'Meklēt jaunus attēlus');
define('SELECT_DIR', 'Izvēlies direktoriju');
define('SELECT_DIR_MSG', 'Šī funkcijaļauj pievienot vairāku attēlu paketi, kas pirms tam tikuši noglabāti uz jūsu servera.<br /><br />Izvēlieties direktoriju, kurā esat iepriekš noglabājis vajadzīgos attēlus');
define('NO_PIC_TO_ADD', 'Nav attēlu ko pievienot');
define('NEED_ONE_ALBUM', 'Jums jāizvēlas vismaz viens albūms, lai lietotu šo funkciju');
define('WARNING', 'Brīdinājums');
define('CHANGE_PERM', 'skripts nevar ierakstīt šajā direktorijā, Jums jāizmaina tās parametri (chmod no 755 uz 777), tad varēsiet vēlreiz mēģināt pievienot attēlus!');
define('TARGET_ALBUM', '<b>Ievietot attēlus no &quot;</b>%s<b>&quot; </b>%s');
define('FOLDER', 'Mape');
define('IMAGE', 'Attēls');
//define('ALBUM', 'Albūms');
define('RESULT', 'Rezultāts');
define('DIR_RO', 'Nav rakstīšanas tiesību. ');
define('DIR_CANT_READ', 'Nav lasīšanas tiesību. ');
define('INSERT', 'Notiek jaunu attēlu pievienošana');
define('LIST_NEW_PIC', 'Jauono attēlu saraksts');
define('INSERT_SELECTED', 'Ievietot izvēlētos attēlus');
define('NO_PIC_FOUND', 'Jaunu attēlu nav');
define('BE_PATIENT', 'Saglabājiet mieru, mums ir nepieciešans zināms laiks, lai pievienotu jaunos attēlus');
define('SN_NOTES', '<ul><li><b>OK</b> : nozīmē, ka jaunie attēli ir veiksmīgi pievienoti<li><b>DB</b> : nozīmē, ka jaunais attēls ir kāda jau datu bāzē esoša attēla dublikāts<li><b>ER</b> : nozīmē, ka jauno attēlu pievienot nav iespējams, pārbaudiet savu konfigurāciju un pieejas tiesības direktorijai kurā atrodas jaunie attēli<li>Ja neparādā ne OK, ne DB, nedzarī ER klikšķiniet uz attiecīgā attēla, lai apskatītu PHP ģenerēto kļūdas paziņojumu<li>Ja rodas problēmas ar jūsu interneta pārlūku, pārlādējiet lapu</ul>');
define('SELECT_ALBUM', 'Izvēlies albūmu');
define('NO_ALBUM', 'Nav izvēlēts neviens albūms, atgriezies atpakaļ un izvēlies albūmu, kuram pievienot savus attēlus');

// lang_upload_php
define('UP_TITLE', 'Attēla pievienošana');
define('MAX_FSIZE', 'Maksimālais atļautais faila izmērs ir %s KB');
//define('ALBUM', 'Albūms');
define('PICTURE', 'Attēls');
define('PIC_TITLE', 'Attēla nosaukums');
define('DESCRIPTION', 'Attēla apraksts');
define('UP_KEYWORDS', 'Atslēgas vārdi (atdalīt ar atstarpi)');
define('ERR_NO_ALB_UPLOADABLES', 'Atvaino, bet tev nevienā albūmā nav atļauts pievienot bildes. Vispirms izveido kādu albūmu!');

// lang_usermgr_php
define('U_TITLE', 'Lietotāju pārvaldība');
//define('NAME_A', 'Name ascending');
//define('NAME_D', 'Name descending');
define('GROUP_A', 'Grupas augošā secībā');
define('GROUP_D', 'Grupas dilstošā secībā');
define('REG_A', 'Reģistrācijas datuma augošā secībā');
define('REG_D', 'Reģistrācijas datuma dilstošā secībā');
define('PIC_A', 'Attēlu skaita augošā secībā');
define('PIC_D', 'Attēlu skaita dilstošā secībā');
define('DISKU_A', 'Aizņemtās diska vietas augošā secībā');
define('DISKU_D', 'Aizņemtās diska vietas dilstošā secībā');
define('SORT_BY', 'Atlasīt pietotājus pēc');
define('ERR_NO_USERS', 'Lietotāju tabula ir tukša!');
define('ERR_EDIT_SELF', 'Jūs nevarat izmainīt savu profilu, lai to darītu izmantojiet saiti \'Mans profils\' ');
define('EDIT', 'Rediģēt');
//define('DELETE', 'DELETE');
define('U_NAME', 'Lietotāja vārds');
//define('GROUP', 'Group');
define('INACTIVE', 'Neaktīvs');
//define('OPERATIONS', 'Operations');
define('PICTURES', 'Attēli');
define('DISK_SPACE', 'Aizņemtā diska vieta / ierobežojums');
define('REGISTERED_ON', 'Piereģistrējies');
define('U_USER_ON_P_PAGES', '%d lietotāji %d lapā(s)');
define('USER_CONFIRM_DEL', 'Vai tiešām vēlaties DZĒST šo lietotāju?<br />Visi viņa attēli un albūmi arī tiks izdzēsti.');
define('MAIL', 'Pasts');
define('ERR_UNKNOWN_USER', 'Izvēlētais lietoājs neeksistē!');
define('MODIFY_USER', 'Rediģēt lietotāju');
//define('NOTES', 'Notes');
define('NOTE_LIST', '<li>Ja nevēlaties mainīt pašreizēko paroli, atstājiet \"parole\" laiku tukšu');
define('PASSWORD', 'Parole');
define('USER_ACTIVE_CP', 'Lietotājs ir aktivivizēts');
define('USER_GROUP_CP', 'Lietotāju grupa');
define('USER_EMAIL', 'Lietotāja e-pasts');
define('USER_WEB_SITE', 'Lietotāja tīmekļa lappuse');
define('CREATE_NEW_USER', 'Izveidot jaunu lietotāju');
define('USER_FROM', 'Lietotāja dzīvesvieta');
define('USER_INTERESTS', 'Lietotāja hobiji');
define('USER_OCC', 'Lietotāja nodarbošanās');

// lang_util_php
define('UTIL_TITLE', 'Mainīt attēlu izmēru');
define('WHAT_IT_DOES', 'Ko tas data');
define('WHAT_UPDATE_TITLES', 'Atjaunina virsrakstus no failu vārdiem');
define('WHAT_DELETE_TITLE', 'Dzēš virsrakstus');
define('WHAT_REBUILD', 'No jauna izveido sīktēlus un izmaina attēlu izmērus');
define('WHAT_DELETE_ORIGINALS', 'Dzēš sākotnējā izmēra attēlus aizstājot tos ar to samazinātajām versijām');
define('U_FILE', 'Fails');
define('TITLE_SET_TO', 'virsraksts uzstādīts');
define('SUBMIT_FORM', 'Apstiprināt');
define('UPDATED_SUCCESFULLY', 'veiksmīgi atjaunināti');
define('ERROR_CREATE', 'Kļūda izceidošanas procesā');
define('CONTIN', 'Apstrādāt jaunus attēlus');
define('MAIN_SUCCESS', 'Fails %s veiksmīgi pārveidots par galveno attēlu');
define('ERROR_RENAME', 'Kļūda pārsaucot %s par %s');
define('ERROR_NOT_FOUND', 'Fails %s neeksistē');
define('U_BACK', 'atgriezties uz galveno lapu');
define('THUMBS_WAIT', 'Notiek sīktēlu atjaunināšana un vai attēlu izmēru maiņa, lūdzu gaidiet...');
define('THUMBS_CONTINUE_WAIT', 'Notiek tālāka sīktēlu atjaunināšana un/vai attēlu izmēru maiņa...');
define('TITLES_WAIT', 'Notiek virstrakstu maiņa, lūdzu gaidiet...');
define('DELETE_WAIT', 'Notiek virsrakstu dzēšana, lūdzu gaidiet...');
define('REPLACE_WAIT', 'Notiek oriģinālo attēlu dzēšana un aizstāšana ar to samazinātajām versijām, lūdzu gaidiet...');
define('INSTRUCTION', 'Instrukcijas');
define('INSTRUCTION_ACTION', 'Vēlamā darbība');
define('INSTRUCTION_PARAMETER', 'Darbības parametri');
define('INSTRUCTION_ALBUM', 'Izvēlies albūmu');
define('INSTRUCTION_PRESS', 'Nospied %s');
define('U_UPDATE', 'Atjaunināt sīktēlus un/vai mainīt attēlu izmēru');
define('UPDATE_WHAT', 'Kas būtu jāatjaunina');
define('UPDATE_THUMB', 'Tikai sīktēlus');
define('UPDATE_PIC', 'Tikai izmaniītie attēli');
define('UPDATE_BOTH', 'Gan sīktēli, gan izmainītie attēli');
define('UPDATE_NUMBER', 'Cik attēlus apstrādāt ar vienu klikšķi');
define('UPDATE_OPTION', '(Ja rodas problēmas mēģiniet šeit norādīt mazāku vērtību)');
define('FILENAME_TITLE', 'Faila nosaukums &rArr; Attēla virsraksts');
define('FILENAME_HOW', 'Kā būtu jāizmaina faila nosaukums');
define('FILENAME_REMOVE', 'Aizvāciet .jpg nobeigumu un aizstājiet _ (apakšsvītras) ar atstarpēm');
define('FILENAME_EURO', 'Izmainiet 2003_11_23_13_20_20.jpg uz 23/11/2003 13:20');
define('FILENAME_US', 'Izmainiet 2003_11_23_13_20_20.jpg uz 11/23/2003 13:20');
define('FILENAME_TIME', 'Izmainiet 2003_11_23_13_20_20.jpg uz 13:20');
define('UT_DELETE', 'Dzēsiet attēlu virsrakstus vai oriģinālos attēlus');
define('DELETE_TITLE', 'Dzēsiet attēlu virsrakstus');
define('DELETE_ORIGINAL', 'Dzēsiet oriģinālos attēlus');
define('DELETE_REPLACE', 'Dzēsiet oriģinālos attēlus un aizstājiet tos at to samazinātajām versijām');
//define('SELECT_ALBUM', 'Select album');

// lang_pagetitle_php
define('VIEWING', 'Foto');
define('USR', ' Attēlu Galerija');
define('PHOTOGALLERY', 'Attēlu Galerija');
$lang_usermgr_php = array(
    'name_a' => 'Vārdi augošā sec.',
    'name_d' => 'Vārdi dilstošā sec.',
    'group_a' => 'Grupas augošā sec.',
    'group_d' => 'Grupas dilstošā sec.',
    'reg_a' => 'Reģ. datumi augošā sec.',
    'reg_d' => 'Reģ. datumi dilstošā sec.',
    'pic_a' => 'Attēlu sk. augošā sec.',
    'pic_d' => 'Attēlu sk. dilstošā sec.',
    'disku_a' => 'Diska izmant. augošā sec.',
    'disku_d' => 'Diska izmant. dilstošā sec.',
    );
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Svētd', 'Pirmd', 'Otrd', 'Trešd', 'Ceturtd', 'Piektd', 'Sestd');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$lang_meta_album_names = array(
    'random' => 'Dažādi attēli',
    'lastup' => 'Pēdējie pievienotie',
    'lastupby' => 'Mani pēdējie pievienotie', // new 1.2.2
    'lastalb' => 'Nesenāk atjuninātie albūmi',
    'lastcom' => 'Nesenāk komentētie',
    'lastcomby' => 'Mani nesenāk komentētie', // new 1.2.2
    'topn' => 'Visvairāk skatītie',
    'toprated' => 'Visaugstāk novērtētie',
    'lasthits' => 'Nesenāk skatītie',
    'search' => 'Meklēšanas resultāti',
    'favpics' => 'Izlasītie attēli' // changed in cpg1.2.0nuke
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
    'title' => 'Konfigurācija',
    'restore_cfg' => 'Atjaunot noklusētos iestatījumus',
    'save_cfg' => 'Saglabāt konfigurāciju',
    'notes' => 'Piecīmes',
    'info' => 'Ziņojums',
    'upd_success' => 'Jaunā konfigurācija veiksmīgi saglabāta',
    'restore_success' => 'Noklusētā konfigurācija veiksmīgi atjaunināta',
    'name_a' => 'Vārdi augošā sec.',
    'name_d' => 'Vārdi dilstošā sec.',
    'title_a' => 'Virsraksti augošā sec.',
    'title_d' => 'Virsraksti dilstošā sec.',
    'date_a' => 'Datumi augošā sec.',
    'date_d' => 'Datumi dilstošā sec.',
    'rating_a' => 'Vērtējumi augošā sec.', // new in cpg1.2.0nuke
    'rating_d' => 'Vērtējumi dilstošā sec.', // new in cpg1.2.0nuke
    'th_any' => 'Maksimālais Aspekts',
    'th_ht' => 'Augstums',
    'th_wd' => 'Platums',
    );
// start left side interpretation
$lang_config_data = array(
    // 'General settings',
    'Vispārīgie iestatījumi',
    array('Galerijas vārds', 'gallery_name', 0),
    array('Galerijas apraksts', 'gallery_description', 0),
    array('Galerijas administratora e-pasts', 'gallery_admin_email', 0),
    array('Nuke mapes adrese piem. http://example.com/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Izvēlētā tēma', 'theme', 6),
    array('Lapai atbilstoši virsraksti >Coppermine vietā', 'nice_titles', 1),
//'Album list view',
    'Albūmu saraksta skats',
    array('Galvenās tabulas platums (pikseļos vai %)', 'main_table_width', 0),
    array('Rādāmo apakškategoriju skaits', 'subcat_level', 0),
    array('Rādāmo albūmu skaits', 'albums_per_page', 0),
    array('Albūmu saraksts rādāmo kolonu skaits', 'album_list_cols', 0),
    array('Sīktēlu izmērs pikseļos', 'alb_list_thumb_size', 0),
    array('Galvenās lapas saturs', 'main_page_layout', 0),
    array('Sadaļās rādīt pirmā līmeņa albūmu sīktēlus', 'first_level', 1), 
//'Thumbnail view',
    'Sīktēlu skats',
    array('Sīktēlu lapā rādāmo kolonu skaits', 'thumbcols', 0),
    array('Sīktēlu lapā rādāmo rindu skaits', 'thumbrows', 0),
    array('Maksimālais šķirkļu skaits', 'max_tabs', 0),
    array('Zem attēla sīktēla rādīt arī attēla virsrakstu (papildus nosaukumam)', 'caption_in_thumbview', 1),
    array('Zem sīktēla rādāmo komentāru skaits', 'display_comment_count', 1),
    array('Noklusētā attēlu šķirošana', 'default_sort_order', 3),
    array('Minimālais balsu skaits, kas jāsasniedz, lai attēls parādītos \'visaugstāk novērtēto\' sarakstā', 'min_votes_for_rating', 0),
    array('Rādāmā sīktēla alti in virsraksta tagi un atslēgas vārdi, kas rādāmi attēla informācijas vietā', 'seo_alts', 1), // new in cpg1.2.0nuke
 //'Display Image &amp; Comment settings',
    'Rādāmā attēla &amp; Komentāru iestatījumi',
    array('Rādāmā attēla tabulas platums (pikseļos vai %)', 'picture_table_width', 0),
    array('Attēla informācija pēc noklusējuma ir redzama', 'display_pic_info', 1),
    array('Nofiltrēt sliktos vārdus komentāros', 'filter_bad_words', 1),
    array('Atļaut lietot emocijas komentāros', 'enable_smilies', 1),
    array('Ļaut vienam lietotājam vienam attēlam pievienot vairākus komentārus pēc kārtas', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Nosūtīt lapas administratoram e-pastu par katru saņemto komentāru' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Maksimālais attēla apraksta garums', 'max_img_desc_length', 0),
    array('Maksimālais simbolu skaits vārdā', 'max_com_wlength', 0),
    array('Maksimālais rindiņu skaits komentārā', 'max_com_lines', 0),
    array('Maksimālais komentāra garums', 'max_com_size', 0),
    array('Rādīt filmas joslu', 'display_film_strip', 1),
    array('Filmas joslā esošo vienību skaits', 'max_film_strip_items', 0),
    array('Ļaut anonīmiem lietotājiem apskatīt lielos (oriģinālajā izmērā) attēlus', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Dienu skaits, kas jāgaida lai varētu atkal balsot par to pašu attēlu','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Slīdrādē rādīt lielos (oriģinālā izmēra) attēlus','fullsize_slideshow',1),
    array('Vai rādīt labās puses moduļus, ja tie ir aktivizēti?', 'right_blocks', 1), // new 1.2.2
// 'Pictures and thumbnails settings',
    'Attēlu un sīktēlu iestatījumi',
    array('JPEG failu kvalitāte', 'jpeg_qual', 0),
    array('Rādīt ūdenszīmi uz attēliem', 'watermark', 1),
    array('Maksimālais sīktēla izmērs <b>*</b>', 'thumb_width', 0),
    array('Lietot sekojošu sīktēla izmēru ( augstums vai platums vai maksimālā sīktēla attiecība )<b>*</b>', 'thumb_use', 7),
    array('Izveidot viduvējus attēlus', 'make_intermediate', 1),
    array('Maksimālais viduvēja attēla augstums un platums <b>*</b>', 'picture_width', 0),
    array('Maksimālais pievienojamo failu izmērs (KB)', 'max_upl_size', 0),
    array('Maksimālais pievienojamo attēlu platums vai augstums (pikseļos)', 'max_upl_width_height', 0), 
    array('Ļaut pievienot vairākus failus ar vienādiem nosaukumiem', 'samename', 1), 
//'User settings',
    'Lietotāja iestatījumi',
    array('Ļaut reģistrēties jauniem lietotājiem', 'allow_user_registration', 1),
/*
    array('User registration requires email verification', 'reg_requires_valid_email', 1),
    array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
*/
    array('Lietotāji drīkst veidot vienkāršus albūmus', 'allow_private_albums', 1),
    array('Rādīt lietotāju iemiesojumus privāto albūmu attēlu vietā', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
    'Papildus lauki attēlu aprakstam (Ja neizmantojat atstājiet tukšus)',
    array('Lauka 1 vārds ', 'user_field1_name', 0),
    array('Lauka 2 vārds', 'user_field2_name', 0),
    array('Lauka 3 vārds', 'user_field3_name', 0),
    array('Lauka 4 vārds', 'user_field4_name', 0), 
	//'Pictures and thumbnails advanced settings',
    'Papildus attēlu un sīktēlu iestatījumi',
    array('Rādīt privāto albūmu ikonas anonīmiem lietotājiem', 'show_private', 1),
    array('Failu nosaukumos aizliegtie simboli', 'forbiden_fname_char', 0),
    array('Pievienojamo bilžu pieļaujamie faiu paplašinājumi', 'allowed_file_extensions', 0),
    array('Attēlu izmēta maiņas metode', 'thumb_method', 2),
    array('Ceļš līdz ImageMagick / netpbm \'konvertēšanas\' utilītai (piemēram /usr/bin/X11/)', 'impath', 0),
    array('Pieļaujamie attēlu tipi (attiecas vienīgi uz ImageMagick)', 'allowed_img_types', 0),
    array('ImageMagick komandrindas parametri', 'im_options', 0),
    array('Nolasīt JPEG failu EXIF informāciju', 'read_exif_data', 1),
    array('Nolasīt IPTC failu EXIF informāciju', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Albūmu direktorija <b>*</b>', 'fullpath', 0),
    array('Lietotāja attēlu direktorija <b>*</b>', 'userpics', 0),
    array('Viduvēju attēlu prefikss <b>*</b>', 'normal_pfx', 0),
    array('Sīktēlu prefikss <b>*</b>', 'thumb_pfx', 0),
    array('Picinfo rādāmais faila nosaukums', 'picinfo_display_filename', 1), 
    array('Picinfo rādāmais albūma nosaukums', 'picinfo_display_album_name', 1), 
    array('Picinfo display_file_size', 'picinfo_display_file_size', 1), 
    array('Picinfo display_dimensions', 'picinfo_display_dimensions', 1), 
    array('Picinfo display_count_displayed', 'picinfo_display_count_displayed', 1), 
    array('Picinfo display_URL', 'picinfo_display_URL', 1), 
    array('Picinfo kā grāmatzīmes saite rādāmais URL', 'picinfo_display_URL_bookmark', 1), 
    array('Picinfo rādāmā izlases albūma saite', 'picinfo_display_favorites', 1), 
//    'Cookies &amp; Charset settings',
    'Cookies &amp; Charset iestatījumi',
    array('Skripta izmantojamo Cepumiņu nosaukums', 'cookie_name', 0),
    array('Ceļš līdz skripta izmantojamajiem Cepumiņiem', 'cookie_path', 0),
//    'Miscellaneous settings',
    'Citi iestatījumi',
    array('Aktivizēt atkļūdošanas režīmu', 'debug_mode', 1),
    '<br /><div align="center">(*) Ja jūsu galerijā jau ir kāds attēls, Jums jāizmaina lauku, kas atzīmēti ar \"*\" </div><br />'
    );
// end left side interpretation
