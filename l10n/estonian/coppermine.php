<?php
/*********************************************
   Coppermine 1.3.1 for CPG Dragonfly™
  ********************************************
   Port Copyright © 2004-2009 CPG-Nuke Dev Team
   http://dragonflycms.org
  ********************************************
   v1.1 (c) by Grégory Demar http://coppermine.sf.net/
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
  ********************************************
  $Source: /cvs/l10n/estonian/coppermine.php,v $
  $Revision: 9.22 $
  $Author: estlane $
  $Date: 2009/02/05 15:36:59 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $module_name, $lang_usermgr_php, $lang_config_php, $lang_config_data, $lang_byte_units, $lang_day_of_week, $lang_month, $lang_bad_words, $lang_meta_album_names, $lang_config_data;
define('PIC_VIEWS', 'Vaadatud');//new in 1.2.2nuke
define('PIC_VOTES', 'Hääli');//new in 1.2.2nuke
define('PIC_COMMENTS', 'Kommentaare');//new in 1.2.2nuke

// lang_translation_info
define('LANG_NAME_ENGLISH', 'Estonian');
define('LANG_NAME_NATIVE', 'Eesti');
define('LANG_COUNTRY_CODE', 'et');
define('TRANS_NAME', 'Meelis Rüütli');
define('TRANS_NAME2', 'Vallo Jõeorg');
define('TRANS_EMAIL2', 'vallo@infonet.ee');
define('TRANS_WEBSITE2', 'http://pontu.infonet.ee');
define('TRANS_DATE', '2003-10-19');
define('CHARSET', 'utf-8');
define('TEXT_DIR', 'ltr');
// left is for port compliancy
define('YES', 'Jah');
define('NO', 'Ei');
// some common strings
define('BACK', 'TAGASI');
define('CONTINU', 'JÄTKA');
define('INFO', 'Teave');
//define('_ERROR', 'Viga'); //already in main lang file
define('ALBUM_DATE_FMT', '%A %d %B %Y');
define('LASTCOM_DATE_FMT', '%d %B %Y kell %H:%M');
define('LASTUP_DATE_FMT', '%A %d %B %Y');
define('REGISTER_DATE_FMT', '%A %d %B %Y');
define('LASTHIT_DATE_FMT', '%d %B %Y kell %H:%M');
define('COMMENT_DATE_FMT', '%d %B %Y kell %H:%M');

// lang_meta_album_names
define('RANDOM', 'Juhuslikud pildid');
define('LASTUP', 'Viimati lisatud');
define('LASTUPBY', 'Minu poolt viimati lisatud');
define('LASTALB', 'Viimati uuendatud albumid');
define('LASTCOM', 'Viimati kommenteeritud');
define('LASTCOMBY', 'Minu viimased kommentaarid');
define('TOPN', 'Enim vaadatud');
define('TOPRATED', 'Edetabel');
define('LASTHITS', 'Viimati vaadatud');
define('SEARCH', 'Otsingu tulemused');
define('FAVPICS', 'Lemmikpildid');

// lang_errors
define('ACCESS_DENIED', 'Teil pole õigusi sellele lehele pääsuks');
define('PERM_DENIED', 'Teil pole õigust toimingu tegemiseks');
define('PARAM_MISSING', 'Skripti käivitamiseks puuduvad vajalikud parameetrid.');
define('NON_EXIST_AP', 'Valitud pilt või album puudub.');
define('QUOTA_EXCEEDED', 'Lubatud kettakasutus ületatud<br /><br />Teil on lubatud kasutada [quota]K kettaruumi, Teie pildid võtavad hetkel [space]K  ruumi, selle pildi lisamisel võib lubatud maht olla ületatud.');
define('GD_FILE_TYPE_ERR', 'GD teegi puhul on lubatud ainult JPEG ja PNG tüüpi pildid.');
define('INVALID_IMAGE', 'Pilt on vigane või seda pole võimalik käsitleda GD teegi poolt.');
define('RESIZE_FAILED', 'Ei suuda luua pisipilti või vähendada pildi suurust.');
define('NO_IMG_TO_DISPLAY', 'Pole ühtegi pilti.');
define('NON_EXIST_CAT', 'Valitud kategooria puudub.');
define('ORPHAN_CAT', 'Kategoorial puudub vanem, kasuta kategooria-haldurit probleemi lahendamiseks.');
define('DIRECTORY_RO', 'Kataloogil %s puudub kirjutamisõigus, üilte ei saa kustutada.');
define('NON_EXIST_COMMENT', 'Valitud kommentaar puudub.');
define('PIC_IN_INVALID_ALBUM', 'Pilt asub olematus albumis (%s)!?');
define('BANNED', 'Sul on hetkel keelatud selle albumi kasutamine.');
define('NOT_WITH_UDB', 'See toiming on keelatud, kuna album on integreeritud foorumiga. Ehk tegevus mida sa üritad ei ole toetatud antud seadistustes või tuleks teha kasutades foorumi tarkvara.');
define('MEMBERS_ONLY', 'See toiming on vaid liikmetele, palun liitu.');
define('MUSTBE_GOD', 'See toiming on ainult saidi administraatorile. Sa pead olema sisselogitud kui peakasutaja et sellele funktsioonile ligi pääseda');
define('NO_IMG_TO_APPROVE', 'Pole ühtegi pilti mida kinnitada');

// lang_main_menu
define('ALB_LIST_TITLE', 'Mine albumite loetellu');
define('ALB_LIST_LNK', 'Albumite loetelu');
define('MY_GAL_TITLE', 'Mine minu isiklikku galeriisse');
define('MY_GAL_LNK', 'Minu galerii');
define('MY_PROF_LNK', 'Minu konto');
define('MY_PROF_TITLE','Kontrolli oma kettapiiranguid ja gruppe');
define('ADM_MODE_TITLE', 'Lülitu admin olekusse');
define('ADM_MODE_LNK', 'Admin olek');
define('USR_MODE_TITLE', 'Lülitu kasutaja olekusse');
define('USR_MODE_LNK', 'Kasutaja olek');
define('UPLOAD_PIC_TITLE', 'Lisa pilt albumisse');
define('UPLOAD_PIC_LNK', 'Lisa pilt');
define('REGISTER_TITLE', 'Loo konto');
define('REGISTER_LNK', 'Registreeri');
define('LOGIN_LNK', 'Logi sisse');
define('LOGOUT_LNK', 'Logi välja');
define('LASTUP_LNK', 'Viimati lisatud');
define('LASTUP_TITLE', 'Viimati õles laetud pildid');
define('LASTCOM_TITLE',  'Pildid viimati kommenteerimise järjekorras');
define('LASTCOM_LNK',  'Viimased kommentaarid');
define('TOPN_TITLE', 'Enim nähtud pildid');
define('TOPN_LNK', 'Enim vaadatud');
define('TOPRATED_TITLE', 'Enim hinnatud pildid');
define('TOPRATED_LNK',  'Edetabel');
define('SEARCH_TITLE', 'Otsi fotokogu');
define('SEARCH_LNK', 'Otsing');
define('FAV_TITLE', 'Minu lemmikud');
define('FAV_LNK', 'Minu lemmikud');
define('HELP_TITLE', 'ABI');
define('HELP_LNK', '<img src="modules/'.$module_name.'/images/help.gif" style="height:20px;width:20px;" alt="'.HELP_TITLE.'" />');

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Lisamise kinnitus');
define('CONFIG_LNK', 'Seadistus');
define('ALBUMS_LNK', 'Albumid');
define('CATEGORIES_LNK', 'Kategooriad');
define('USERS_LNK', 'Kasutajad');
define('GROUPS_LNK', 'Grupid');
define('COMMENTS_LNK', 'Kommentaarid');
define('SEARCHNEW_LNK', 'Lisa üles laetud pilte');
define('UTIL_LNK', 'Muuda piltide suurust');
define('BAN_LNK', 'Blokeeri kasutajaid');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Loo / telli minu albumeid');
define('MODIFYALB_LNK', 'Muuda minu albumeid');
//define('MY_PROF_LNK', 'Minu profiil');

// lang_cat_list
define('CATEGORY', 'Kategooria');
define('ALBUMS', 'Albumid');
//define('PICTURES', 'Pildid');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albumit %d lehel');
// lang_thumb_view
define('DATE', 'KUUPÄEV');
define('NAME', 'FAILI NIMI');
define('TITLE', 'PEALKIRI');
define('SORT_DA', 'Järjesta kuupäeva järgi kasvavalt');
define('SORT_DD', 'Järjesta kuupäeva järgi kahanevalt');
define('SORT_NA', 'Järjesta nime järgi kasvavalt');
define('SORT_ND', 'Järjesta nime järgi kahanevalt');
define('SORT_TA', 'Järjesta pealkirja järgi kasvavalt');
define('SORT_TD', 'Järjesta pealkirja järgi kahanevalt');
define('PIC_ON_PAGE', '%d pilt(i) on %d-el lehel');
define('USER_ON_PAGE', '%d kasutajat on %d-el lehel');
define('SORT_RA', 'Järjesta hinnangu järgi kasvavalt');
define('SORT_RD', 'Järjesta hinnangu järgi kahanevalt');
define('THUMB_RATING', 'HINNANG');
define('SORT_TITLE', 'Piltide järjestus:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Tagasi pisipiltide lehele');
define('PIC_INFO_TITLE', 'Näita/peida pildi info');
define('SLIDESHOW_TITLE', 'Slaidiesitus');
define('SLIDESHOW_DISABLED', 'e-kaartid on keelatud');
define('SLIDESHOW_DISABLED_MSG', 'See toiming on vaid liikmetele, palun registreeri.');
define('ECARD_TITLE', 'Saada see pilt e-kaardina');
define('ECARD_DISABLED', 'e-kaartid on keelatud');
define('ECARD_DISABLED_MSG', 'Teil pole õigust saata e-kaarte');
define('PREV_TITLE', 'Vaata eelmist pilti');
define('NEXT_TITLE', 'Vaata järgmist pilti');
define('PIC_POS', 'PILT %s/%s');
define('NO_MORE_IMAGES', 'Selles galeriis pole rohkem pilte');
define('NO_LESS_IMAGES', 'See on galeriis esimene pilt');

// lang_rate_pic
define('RATE_THIS_PIC', 'Hinda seda pilti ');
define('NO_VOTES', '(Hetkel veel hindamata)');
define('RATING', '(Hetke hinne : %s / 5-st %s häälega)');
define('RUBBISH', 'Kõlbmatu');
define('POOR', 'Kasin');
define('FAIR', 'Keskmine');
define('GOOD', 'Hea');
define('EXCELLENT', 'Suurepärane');
define('GREAT', 'Fantastiline');

// lang_cpg_die
//define('INFO', 'Informatsioon');
//define('ERROR', 'Viga');
define('_CRITICAL_ERROR', 'Kriitiline viga');
define('FILE', 'Fail: ');
define('LINE', 'Rida: ');

// lang_display_thumbnails
define('FILENAME', 'Failinimi: ');
define('FILESIZE', 'Failisuurus: ');
define('DIMENSIONS', 'Mõõtmed: ');
define('DATE_ADDED', 'Lisamise kuupäev: ');

// lang_get_pic_data
define('N_COMMENTS', '%s kommentaari');
define('N_VIEWS', '%s kord(a)');
define('N_VOTES', '(%s hääl(t))');


// lang_albmgr_php
define('ALB_NEED_NAME', 'Albumitel peab olema nimi!');
define('CONFIRM_MODIFS', 'Oled kindel, et tahad teha neid muudatusi?');
define('NO_CHANGE', 'Sa ei muutnud midagi!');
define('NEW_ALBUM', 'Uus album');
define('CONFIRM_DELETE1', 'Kindel, et tahad albumit kustutada?');
define('CONFIRM_DELETE2', 'Kõik siin sisalduvad pildid ja kommentaarid lähevad kaduma!');
define('SELECT_FIRST', 'Vali enne album');
define('ALB_MRG', 'Albumi-haldur');
define('MY_GALLERY', '* Minu Galerii *');
define('NO_CATEGORY', '* Kategooriata *');
define('DELETE', 'Kustuta');
define('NEW', 'Uus');
define('APPLY_MODIFS', 'Omista muudatused');
define('SELECT_CATEGORY', 'Vali kategooria');

// lang_catmgr_php
define('MISS_PARAM', 'Puuduvad parameetrid %stooimingut ei tehtud !');
define('UNKNOWN_CAT', 'Valitud kategooria puudub andmebaasis');
define('USERGAL_CAT_RO', 'Kasutaja galeriisid ei saa kustutada !');
define('MANAGE_CAT', 'Halda kategooriaid');
define('CONFIRM_DELETE_CAT', 'Oled kindel, et tahad KUSTUTADA seda kategooriat');
//define('CATEGORY', 'Kategooria');
define('OPERATIONS', 'Toimingud');
define('MOVE_INTO', 'Liigu');
define('UPDATE_CREATE', 'Uuenda/Loo Kategooria');
define('PARENT_CAT', 'Juurkategooria');
define('CAT_TITLE', 'Kategooria tiitel');
define('CAT_DESC', 'Kategooria kirjeldus');

// lang_config_php
define('CONFIG_TITLE', 'Seadistus');
define('RESTORE_CFG', 'Taasta tehase vaikeseaded');
define('SAVE_CFG', 'Salvesta uued seadistused');
define('NOTES', 'Märkused');
//define('INFO', 'Informatsioon');
define('UPD_SUCCESS', 'Seadistused uuendatud');
define('RESTORE_SUCCESS', 'Vaikeseadistus taastatud');
define('NAME_A', 'Nimed kasvavalt');
define('NAME_D', 'Nimed kahanevalt');
define('TITLE_A', 'Pealkirjad kasvavalt');
define('TITLE_D', 'Pealkirjad kahanevalt');
define('DATE_A', 'Kuupäev kasvavalt');
define('DATE_D', 'Kuupäev kahanevalt');
define('RATING_A', 'Hinnang kasvavalt');
define('RATING_D', 'Hinnang kahanevalt');
define('TH_ANY', 'Suurim külg');
define('TH_HT', 'Kõrgus');
define('TH_WD', 'Laius');


// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Sa pead trükkima oma nime ja kommentaari');
define('COM_ADDED', 'Kommentaar lisatud');
define('ALB_NEED_TITLE', 'Sinult oodatakse pealkirja albumile !');
define('NO_UDP_NEEDED', 'Uuendust pole vaja.');
define('ALB_UPDATED', 'Album uuendatud');
define('UNKNOWN_ALBUM', 'Valitud album puudub või sul pole õigusi salvestada sellesse albumisse');
define('NO_PIC_UPLOADED', 'Ühtegi pilti ei salvestatud !<br /><br />Kui sul tõesti on valitud pilt salvestamiseks, kontrolli et server lubaks failide salvestamist...');
define('ERR_MKDIR', 'Viga kataloogi %s loomisel !');
define('DEST_DIR_RO', 'Sihtkataloog %s pole skripti poolt kirjutamisõiguslik !');
define('ERR_MOVE', 'Võimatu liigutada %s -> %s !');
define('ERR_FSIZE_TOO_LARGE', 'Sinu poolt salvestatava pildi suurus liiga suur (maksimum lubatud %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Sinu poolt salvestatava faili suurus liiga suur (maksimum lubatud %s KB) !');
define('ERR_INVALID_IMG', 'Sinu poolt salvestatav fail pole sobiv pilt !');
define('ALLOWED_IMG_TYPES', 'Sa võid salvestada ainult %s pilti.');
define('ERR_INSERT_PIC', 'Pilti  %s ei saa lisada albumisse ');
define('UPLOAD_SUCCESS', 'Sinu pilt salvestati edukalt<br /><br />See saab nähtavaks pärast admini heakskiitu.');
//define('INFO', 'Informatsioon');
define('ERR_COMMENT_EMPTY', 'Sinu kommentaar on tühi !');
define('ERR_INVALID_FEXT', 'Ainult järgmised failitüübid aksepteeritakse : <br /><br />%s.');
define('NO_FLOOD', 'Vabandust, aga sa oled juba selle pildile viimati lisatud kommentaari autor<br /><br />Paranda oma lisatud kommentaari kui soovid seda muuta');
define('REDIRECT_MSG', 'Sind suunatakse ümber.<br /><br /><br />Klikka \'JÄTKA\' kui lehekülg automaatselt ei uuene');
define('UPL_SUCCESS', 'Sinu pilt edukalt lisatud');

// lang_delete_php
define('CAPTION', 'Selgitus');
define('FS_PIC', 'Täissuuruses pilt');
define('DEL_SUCCESS', 'edukalt kustutatud');
define('NS_PIC', 'normaal suuruses pilt');
define('ERR_DEL', 'ei saa kustutada');
define('THUMB_PIC', 'pisipilt');
//define('COMMENT', 'kommentaar');
define('IM_IN_ALB', 'pilt albumis');
define('ALB_DEL_SUCCESS', 'Album %s kustutatud');
define('ALB_MGR', 'Albumi haldur');
define('ERR_INVALID_DATA', 'Vigased andmed laekunud %s');
define('CREATE_ALB', 'Loon albumit %s');
define('UPDATE_ALB', 'Uuendan albumit %s pealkirjaga %s ja indeksiga %s');
define('DEL_PIC', 'Kustuta pilt');
define('DEL_ALB', 'Kustuta album');
define('DEL_USER', 'Kustuta kasutaja');
//define('ERR_UNKNOWN_USER', 'Valitud kasutajat pole olemas !');
define('COMMENT_DELETED', 'Kommentaar edukalt kustutatud');

// lang_display_image_php
define('PIC_CONFIRM_DEL', 'Oled kindel, et tahad seda pilti KUSTUTADA?<br />Kommentaarid kustutatakse samuti.');
define('DEL_THIS_PIC', 'KUSTUTA SEE PILT');
define('SIZE', '%s x %s pikslit');
define('VIEWS', '%s korda');
define('SLIDESHOW', 'Slaidivaade');
define('STOP_SLIDESHOW', 'PEATA SLAIDIVAADE');
define('VIEW_FS', 'Klikka vaatamaks täissuuruses pilti');
define('EDIT_PIC', 'MUUDA PILDI INFOT');

// lang_picinfo
define('PIC_INF_TITLE', 'Pildi informatsioon');
define('PIC_INF_FILENAME', 'Faili nimi');
define('ALBUM_NAME', 'Albumi nimi');
define('PIC_INFO_RATING', 'Reiting (%s votes)');
define('KEYWORDS', 'Märksõnad');
define('PIC_INF_FILE SIZE', 'Faili suurus');
define('PIC_INF_DIMENSIONS', 'Mõõdud');
define('DISPLAYED', 'Kuvatud');
define('CAMERA', 'Kaamera');
define('DATE_TAKEN', 'Ülesvõtte kuupäev');
define('APERTURE', 'Ava');
define('EXPOSURE_TIME', 'Säriaeg');
define('FOCAL_LENGTH', 'Fookus kaugus');
define('COMMENT', 'Kommentaar');
define('ADDFAV', 'Lisa lemmikutesse');
define('ADDFAVPHRASE', 'Lemmikud');
define('REMFAV', 'Eemalda lemmikutest');
define('IPTCTITLE', 'IPTC pealkiri');
define('IPTCCOPYRIGHT', 'IPTC autoriõigus');
define('IPTCKEYWORDS', 'IPTC võtmesõnad');
define('IPTCCATEGORY', 'IPTC kategooria');
define('IPTCSUBCATEGORIES', 'IPTC allkategooriad');
define('BOOKMARK_PAGE', 'Lisa järjehoidjatesse');
define('REMOVEFAV', 'Eemaldatud lemmikute albumist');
define('ADDEDTOFAV', 'Lisatud lemmikute albumisse');

// lang_display_comments
define('OK', 'Olgu');
define('COM_EDIT_TITLE', 'Muuda kommentaari');
define('CONFIRM_DELETE_COM', 'Oled kindel, et tahad seda kommentaari kustutada ?');
define('ADD_YOUR_COMMENT', 'Lisa oma kommentaar');
define('COM_NAME', 'Nimi');
//define('COMMENT', 'Kommentaar');
define('YOUR_NAME', 'Sinu nimi');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Akna sulgemiseks klõpsa pildil');

// lang_ecard_php
define('E_TITLE', 'Saada e-kaart');
define('INVALID_EMAIL', '<b>Hoiatus</b> : Vigane e-posti aadress !');
define('E_ECARD_TITLE', 'Sulle on e-kaart %s\' lt');
define('VIEW_ECARD', 'Kui e-kaarti ei kuvata korrektselt, klõpsake lingil');
define('VIEW_MORE_PICS', 'Rohkemate piltide vaatamiseks klõpsake lingil !');
define('SEND_SUCCESS', 'Sinu e-kaart on saadetud');
define('SEND_FAILED', 'Vabandust, kuid serveril ei õnnestu Sinu e-kaardi saatmine...');
define('FROM', 'Kellelt');
define('_YOUR_NAME', 'Sinu Nimi');
define('YOUR_EMAIL', 'Sinu e-posti aadress');
define('TO', 'Kellele');
define('RCPT_NAME', 'Aadressaadi nimi');
define('RCPT_EMAIL', 'Aadressaadi e-posti aadress');
define('GREETINGS', 'Tervitused');
define('MESSAGE', 'Sõnum');
define('ECARD_LINK_CORRUPT', 'Vabandust aga e-kaarti andmed on su e-maili kliendi poolt rikutud, palun proovi kleepida viide oma brauserisse'); //NEW

// lang_editpics_php
define('PIC_INFO', 'Pildi&nbsp;info');
define('ALBUM', 'Album');
define('EDIT_TITLE', 'Pealkiri');
define('DESC', 'Kirjeldus');
//define('KEYWORDS', 'Märksõnad');
define('PIC_INFO_STR', '%sx%s - %sKB - %s vaadet - %s häält');
define('APPROVE', 'Kinnita pilt');
define('POSTPONE_APP', 'Lükka kinnitus edasi');
//define('DEL_PIC', 'Kustuta pilt');
define('READ_EXIF', 'Loe EXIF info uuesti');
define('RESET_VIEW_COUNT', 'Nulli vaadete loendur');
define('RESET_VOTES', 'Nulli hääled');
define('DEL_COMM', 'Kustuta kommentaarid');
define('UPL_APPROVAL', 'Salvestuse kinnitus');
define('EDIT_PICS', 'Muuda pilte');
define('SEE_NEXT', 'Vaata järgmisi pilte');
define('SEE_PREV', 'Vaata eelmisi pilte');
define('N_PIC', '%s pilt(i)');
define('N_OF_PIC_TO_DISP', 'Piltide arv kuvamiseks');
define('APPLY', 'Omista muudatused');

// lang_groupmgr_php
define('GROUP_NAME', 'Grupi nimi');
define('DISK_QUOTA', 'Ketta kvoot');
define('CAN_RATE', 'Võib hinnata pilte');
define('CAN_SEND_ECARDS', 'Võib saata e-kaarte');
define('CAN_POST_COM', 'Võib kommenteerida');
define('CAN_UPLOAD', 'Võib salvestada pilte');
define('CAN_HAVE_GALLERY', 'Võib luua isikliku galerii');
//define('APPLY', 'Omista muudatused');
define('CREATE_NEW_GROUP', 'Loo uus grupp');
define('DEL_GROUPS', 'Kustuta valitud grupp(id)');
define('CONFIRM_DEL', 'Hoiatus, kui sa kustutad grupi, siis kustutava grupi kasutajad kantakse \'Registereeritud\' gruppi !<br />Tahad sa jätkata ?');
define('GROUP_TITLE', 'Korralda kasutajagruppe');
define('APPROVAL_1', 'Av. salv. kinnitus (1)');
define('APPROVAL_2', 'Isik. salv. kinnitus (2)');
define('NOTE1', '<b>(1)</b> Salvestused avalikku albumisse vajavad admini kinnitust');
define('NOTE2', '<b>(2)</b> Salvestused kasutaja albumisse vajavad admini kinnitust');
//define('NOTES', 'Märkused');

// lang_index_php
define('WELCOME', 'Tere tulemast !');

// lang_album_admin_menu
define('CONFIRM_DELETE_ALB', 'Oled kindel, et tahad seda albumit KUSTUDADA?<br />Kõik pildid ja kommentaarid kustutakse samuti.');
//define('DELETE', 'KUSTUTA');
define('MODIFY', 'OMADUSED');
//define('EDIT_PICS', 'REDIGEERI PILTE');

// lang_list_categories
define('HOME', _HOME);
define('STAT1', '<b>[pictures]</b> pilti <b>[albums]</b> albumit ja <b>[cat]</b> kategooriat koos <b>[comments]</b> kommentaariga vaadatud <b>[views]</b> korda');
define('STAT2', '<b>[pictures]</b> pilti <b>[albums]</b> albumit vaadatud <b>[views]</b> korda');
define('XX_S_GALLERY', '%s\' Galerii');
define('STAT3', '<b>[pictures]</b> pilti <b>[albums]</b> albumit koos <b>[comments]</b> kommentaariga vaadatud <b>[views]</b> korda');

// lang_list_users
define('USER_LIST', 'Kasutajate loetelu');
define('NO_USER_GAL', 'Kasutajate galeriid puuduvad');
define('N_ALBUMS', '%s album(it)');
define('N_PICS', '%s pilt(i)');

// lang_list_albums
define('N_PICTURES', '%s pilt(i)');
define('LAST_ADDED', ', viimane lisati %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Uuenda album %s');
define('GENERAL_SETTINGS', 'Üldised seaded');
define('ALB_TITLE', 'Albumi pealkiri');
define('ALB_CAT', 'Albumi kategooria');
define('ALB_DESC', 'Albumi kirjeldus');
define('ALB_THUMB', 'Albumi pisipilt');
define('ALB_PERM', 'Õigused sellele albumile');
define('CAN_VIEW', 'Albumit võivad vaadata');
define('MOD_CAN_UPLOAD', 'Külastajad võivad salvestada pilte');
define('CAN_POST_COMMENTS', 'Külastajad võivad kommenteerida');
define('MOD_CAN_RATE', 'Külastajad võivad hinnata pilte');
define('USER_GAL', 'Kasutaja Galerii');
define('NO_CAT', '* Kategooriata *');
define('ALB_EMPTY', 'Album on tühi');
define('LAST_UPLOADED', 'Viimati salvestatud');
define('PUBLIC_ALB', 'Igaüks (avalik album)');
define('ME_ONLY', 'Ainult mina');
define('OWNER_ONLY', 'Albumi omanik (%s) ainult');
define('GROUPP_ONLY', 'Grupi %s liikmed');
define('ERR_NO_ALB_TO_MODIFY', 'Ühtegi albumit sa ei saa muuta andmebaasis.');
define('UPDATE', 'Uuenda album');

// lang_rate_pic_php
define('ALREADY_RATED', 'Vabandust, aga sa oled juba seda pilti hinnanud');
define('RATE_OK', 'Sinu hääl on vastu võetud');

// lang_register_php
define('USERNAME', 'Kasutajanimi');
define('GROUP', 'Grupp');
define('DISK_USAGE', 'Ketta kasutus');
define('X_S_PROFILE', 'Konto omanik on %s');

// lang_reviewcom_php
define('REVIEW_TITLE', 'Kommentaaride ülevaade');
define('NO_COMMENT', 'Pole ühtegi kommentaari üle vaadata');
define('N_COMM_DEL', '%s kommentaar(i) kustutatud');
define('N_COMM_DISP', 'Kommentaaride arv kuvamiseks');
define('R_SEE_PREV', 'Vaata eelmist');
define('R_SEE_NEXT', 'Vaata järgmist');
define('R_DEL_COMM', 'Kustuta valitud kommentaarid');

// lang_search_php
define('S_SEARCH', 'Otsi pildikogumikku');

// lang_search_new_php
define('PAGE_TITLE', 'Otsi uusi pilte');
define('SELECT_DIR', 'Vali kataloog');
define('SELECT_DIR_MSG', 'See funktsioon lubab sul lisada suuremal hulgal pilte, mis sa oled salvestanud oma serverisse FTP kaudu.<br /><br />Vali kataloog kuhu sa oma pildid oled salvestanud');
define('NO_PIC_TO_ADD', 'Pole ühtegi pilti lisada');
define('NEED_ONE_ALBUM', 'Sa vajad vähemalt ühte albumit selle funktsiooni kasutamiseks');
define('WARNING', 'Hoiatus');
define('CHANGE_PERM', 'see skript ei saa kirjutada sellesse kataloogi, sa pead muutma selle õigusi (mood 755 või 777) enne kui üritad uuesti lisada pilte !');
define('TARGET_ALBUM', '<b>Pane &quot;</b>%s<b>&quot; pildid albumisse </b>%s');
define('FOLDER', 'Kaust');
define('IMAGE', 'Pilt');
//define('ALBUM', 'Album');
define('RESULT', 'Tulemus');
define('DIR_RO', 'Pole kirjutatav. ');
define('DIR_CANT_READ', 'Pole loetav. ');
define('INSERT', 'Lisan uued pildid galeriisse');
define('LIST_NEW_PIC', 'Uute piltide loetelu');
define('INSERT_SELECTED', 'Lisa valitud pildid');
define('NO_PIC_FOUND', 'Ei leitud uusi pilte');
define('BE_PATIENT', 'Palun ole kannatlik, skript vajab piltide lisamiseks aega');
define('SN_NOTES', '<ul><li><b>OK</b> : tähendab, et pilt lisati edukalt<li><b>DP</b> : tähendab, et pilt on duplikaat ja sisaldub juba andmebaasis<li><b>PB</b> : tähendab, et pilti ei saa lisada, kontrolli oma seadeid ja kataloogi õigusi kus su pildid asuvad<li>Kui märgid \'OK, DP, PB\' ei ilmu, klikka katkenud pildil nägemaks mistahes PHP poolt antud veateadet<li>Kui su sirvijal on \'timeout\', vajuta reload nuppu</ul>');
define('SELECT_ALBUM', 'Vali album');
define('NO_ALBUM', 'Ühtegi albumit ei valitud, mine tagasi ja vali album kuhu oma pildid panna');

// lang_upload_php
define('UP_TITLE', 'Salvesta pilt');
define('MAX_FSIZE', 'Suurim lubatud failisuurus on %s KB');
//define('ALBUM', 'Album');
define('PICTURE', 'Pilt');
define('PIC_TITLE', 'Pildi pealkiri');
define('DESCRIPTION', 'Pildi kirjeldus');
define('UP_KEYWORDS', 'Märksõnad (eralda tühikutega)');
define('ERR_NO_ALB_UPLOADABLES', 'Vabandust, kuid siin pole albumit, kuhu sul oleks piltide salvestamine lubatud');

// lang_usermgr_php
define('U_TITLE', 'Halda kasutajaid');
//define('NAME_A', 'Nimed kasvavalt');
//define('NAME_D', 'Nimed kahanevalt');
define('GROUP_A', 'Grupid kasvavalt');
define('GROUP_D', 'Grupid kahanevalt');
define('REG_A', 'Reg kuupäev kasvavalt');
define('REG_D', 'Reg kuupäev kahanevalt');
define('PIC_A', 'Piltide arv kasvavalt');
define('PIC_D', 'Piltide arv kahanevalt');
define('DISKU_A', 'Ketta kasutus kasvavalt');
define('DISKU_D', 'Ketta kasutus kahanevalt');
define('SORT_BY', 'Sordi kasutajaid');
define('ERR_NO_USERS', 'Kasutajate tabel tühi !');
define('ERR_EDIT_SELF', 'Sa võid muuta oma profiili, kasuta \'Minu profiil\' linki selleks');
define('EDIT', 'MUUDA');
//define('DELETE', 'KUSTUTA');
define('U_NAME', 'Kasutajanimi');
//define('GROUP', 'Grupp');
define('INACTIVE', 'Mitteaktiivne');
//define('OPERATIONS', 'Talitlused');
define('PICTURES', 'Pildid');
define('DISK_SPACE', 'Kasutatud ruumi / Kvoot');
define('REGISTERED_ON', 'Registreeritud');
define('U_USER_ON_P_PAGES', '%d kasutajat %d-el lehel');
define('USER_CONFIRM_DEL', 'Oled kindel, et tahad selle kasutaja KUSTUTADA?<br />Kõik tema pildid ja albumid kustutatakse samuti.');
define('MAIL', 'POST');
define('ERR_UNKNOWN_USER', 'Valitud kasutajat pole!');
define('MODIFY_USER', 'Muuda kasutaja');
//define('NOTES', 'Märkused');
define('NOTE_LIST', '<li>Kui sa ei taha muuta kasutuselolevat parooli, jäta \"parool\" väli tühjaks');
define('PASSWORD', 'Parool');
define('USER_ACTIVE_CP', 'Kasutaja aktiivne');
define('USER_GROUP_CP', 'Kasutaja grupp');
define('USER_EMAIL', 'Kasutaja epost');
define('USER_WEB_SITE', 'Kasutaja kodukas');
define('CREATE_NEW_USER', 'Loo uus kasutaja');
define('USER_FROM', 'Kasutaja elukoht');
define('USER_INTERESTS', 'Kasutaja huvid');
define('USER_OCC', 'Kasutaja elukutse');

// lang_util_php
define('UTIL_TITLE', 'Pildisuuruse muutmine');
define('WHAT_IT_DOES', 'Mida see teeb');
define('WHAT_UPDATE_TITLES', 'uuendab failist pealkirju');
define('WHAT_DELETE_TITLE', 'Kustutab pealkirju');
define('WHAT_REBUILD', 'Tekitab uued pisipildid ja muudetud suurusega pildid');
define('WHAT_DELETE_ORIGINALS', 'Kustutab orginaalsuurusega pildid, asendades need uue suurusega piltidega');
define('U_FILE', 'Fail');
define('TITLE_SET_TO', 'pealkiri muudetud ');
define('SUBMIT_FORM', 'sisesta');
define('UPDATED_SUCCESFULLY', 'uuendatud edukalt');
define('ERROR_CREATE', 'VIGA tekitamisel');
define('CONTIN', 'Vaata veel pilte läbi');
define('MAIN_SUCCESS', 'Faili %s kasutati õnnestunult kui põhipilti');
define('ERROR_RENAME', ' %s ümbernimetamine %s ebaõnnestus');
define('ERROR_NOT_FOUND', 'Faili %s ei leitud');
define('U_BACK', 'Tagasi pealehele');
define('THUMBS_WAIT', 'Uuendan pisipilte ja/või muudetud suurusega pilte, palun oota...');
define('THUMBS_CONTINUE_WAIT', 'Jätkan pisipiltidde ja/või muudetud suurusega piltide uuendamist...');
define('TITLES_WAIT', 'Uuendan pealkirju, palun oota...');
define('DELETE_WAIT', 'Kustutan pealkirju, palun oota...');
define('REPLACE_WAIT', 'Kustutan orginaalid ja asendan muudetud suurusega piltidega, palun oota ...');
define('INSTRUCTION', 'Lühijuhend');
define('INSTRUCTION_ACTION', 'Vali tegevus');
define('INSTRUCTION_PARAMETER', 'Sea parameetrid');
define('INSTRUCTION_ALBUM', 'Vali album');
define('INSTRUCTION_PRESS', 'Vajuta %s');
define('U_UPDATE', 'Uuenda pisipildid ja/või muudetud suurusega fotod');
define('UPDATE_WHAT', 'Mida tuleks uuendada');
define('UPDATE_THUMB', 'Ainult pisipildid');
define('UPDATE_PIC', 'Ainult muudetud suurusega pildid');
define('UPDATE_BOTH', 'Mõlemad, pisipildid ja muudetud suurusga pildid');
define('UPDATE_NUMBER', 'Töödeldud piltide arv kliki kohta');
define('UPDATE_OPTION', '(Sea see valik väiksemaks kui tekkib probleem ajalimiidiga (timeout))');
define('FILENAME_TITLE', 'Failinimi &rArr; Pildi pealkiri');
define('FILENAME_HOW', 'Kuidas tuleks failinime muuta');
define('FILENAME_REMOVE', 'Eemalda .jpg lõpp ja asenda _ (alakriipsud) tühikutega');
define('FILENAME_EURO', 'Muuda 2003_11_23_13_20_20.jpg to 23/11/2003 13:20');
define('FILENAME_US', 'Muuda 2003_11_23_13_20_20.jpg to 11/23/2003 13:20');
define('FILENAME_TIME', 'Muuda 2003_11_23_13_20_20.jpg to 13:20');
define('UT_DELETE', 'Pildi pealkirjade või orginaalsuurusega piltide kustutamine');
define('DELETE_TITLE', 'Kustuta pildi pealkirjad');
define('DELETE_ORIGINAL', 'Kustusta orginaalsuurusega fotod');
define('DELETE_REPLACE', 'Kustuta orginaalsuurusega fotod asendades need muudetud suurusega piltidega');
//define('SELECT_ALBUM', 'Vali album');

// lang_pagetitle_php
define('VIEWING', 'Foto vaatamine');
define('USR', ' fotogalerii');
define('PHOTOGALLERY', 'Fotogalerii');
$lang_usermgr_php = array(
    'name_a' => 'Nime järgi kasvavalt',
    'name_d' => 'Nime järgi kahanevalt',
    'group_a' => 'Grupi järgi kasvavalt',
    'group_d' => 'Grupi järgi kahanevalt',
    'reg_a' => 'Reg kuupäeva järgi kasvavalt',
    'reg_d' => 'Reg kuupäeva järgi kahanevalt',
    'pic_a' => 'Piltide arvu järgi kasvavalt',
    'pic_d' => 'Piltide arvu järgi kahanevalt',
    'disku_a' => 'Kettakasutuse järgi kasvavalt',
    'disku_d' => 'Kettakasutuse järgi kahanevalt',
    );
$lang_byte_units = array('Baiti','KB','MB',);
// Day of weeks and mounths
$lang_day_of_week = array('Pühapäev','Esmaspäev','Teisipäev','Kolmapäev','Neljapäev','Reede','Laupäev',);
$lang_month = array('Jaanuar','Veebruar','Märts','Aprill','Mai','Juuni','Juuli','August','September','Oktoober','November','Detsember',);
$lang_meta_album_names = array(
    'random' => 'Juhuslikud pildid',
    'lastup' => 'Viimati lisatud',
    'lastupby' => 'Viimati lisatud minu poolt', // new 1.2.2
    'lastalb' => 'Viimati uuendatud albumid',
    'lastcom' => 'Viimati kommenteeritud',
    'lastcomby' => 'Minu viimased kommentaarid', // new 1.2.2
    'topn' => 'Enim vaadatud',
    'toprated' => 'Edetabel',
    'lasthits' => 'Viimati vaadatud',
    'search' => 'Otsingu tulemused',
    'favpics' => 'Lemmikpildid'
    );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
$lang_config_php = array(
        'title' => 'Seadistus',
        'restore_cfg' => 'Taasta tehase vaikeseaded',
        'save_cfg' => 'Salvesta uus seadistus',
        'notes' => 'Märkused',
        'info' => 'Teave',
        'upd_success' => 'Seadistus uuendatud',
        'restore_success' => 'Vaikeseadistus taastatud',
        'name_a' => 'Nimed kasvavalt',
        'name_d' => 'Nimed kahanevalt',
        'title_a' => 'Pealkirjad kasvavalt',
        'title_d' => 'Pealkirjad kahanevalt',
        'date_a' => 'Kuupäev kasvavalt',
        'date_d' => 'Kuupäev kahanevalt',
        'rating_a' => 'Hinnangud kasvavalt', // new in cpg1.2.0nuke
        'rating_d' => 'Hinnangud kahanevalt', // new in cpg1.2.0nuke
        'th_any' => 'Suurim külg',
        'th_ht' => 'Kõrgus',
        'th_wd' => 'Laius',
    );
// start left side interpretation
$lang_config_data = array(
    // General settings
    'Üldised seaded',
    array('Galerii nimi', 'gallery_name', 0),
    array('Galerii kirjeldus', 'gallery_description', 0),
    //array('Gallery administrator email', 'gallery_admin_email', 0),
    //array('Address to nuke folder ie http://www.mysite.tld/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Aadress Dragonfly kataloogi, nt http://sinuveebileht.ee/html/', 'ecards_more_pic_target', 0), // new in cpg1.2.0nuke
    array('Kujundus', 'theme', 6),
    array('Lehekülje täpsusega pealkirjad >Galerii asemel', 'nice_titles', 1),
// Album list view
    'Albumite loetelu vaade',
    array('Peatabeli laius (pikslites või %)', 'main_table_width', 0),
    array('Number kategooria tasandeid kuvamiseks', 'subcat_level', 0),
    array('Number albumeid kuvamiseks', 'albums_per_page', 0),
    array('Number veergusid albumi loeteluks', 'album_list_cols', 0),
    array('Pisipildi suurus pikslites', 'alb_list_thumb_size', 0),
    array('Pealehe sisu', 'main_page_layout', 0),
    array('Näita esimese taseme albumite pisipilte kategooriates', 'first_level', 1),
// Thumbnail view
    'Pisipiltide vaade',
    array('Veergude arv pisipiltide lehel', 'thumbcols', 0),
    array('Ridade arv pisipiltide lehel', 'thumbrows', 0),
    array('Maksimaalne lahtrite arv kuvamiseks', 'max_tabs', 0),
    array('Kuva pildi selgitus (lisaks tiitlile) pisipildi all', 'caption_in_thumbview', 1),
    array('Kuva kommentaaride arv pisipildi all', 'display_comment_count', 1),
    array('Vaikejärjestus piltidele', 'default_sort_order', 3),
    array('Minimaalne häälte arv pildi sattumiseks \'Edetabel\' nimekirja', 'min_votes_for_rating', 0),
    array('Pisipildi näita pealkirja ja võtmesõna pildiinfo asemel alternatiivid(alt) ja pealkirja(title) sõnad', 'seo_alts', 1), // new in cpg1.2.0nuke
// Display Image & Comment settings
    'Pildivaade ja kommentaaride seaded',
    array('Tabeli laius pildi kuvamiseks (pikslites või %)', 'picture_table_width', 0),
    array('Pildi info on vaikimisi nähtav', 'display_pic_info', 1),
    array('Filtreeri kommentaarides olevad ropud sõnad', 'filter_bad_words', 1),
    array('Luba kommentaarides smailid', 'enable_smilies', 1),
    array('Luba mitu järjestikkust kommentaari ühe pildi kohta samalt kasutajalt', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
    array('Saada saidi administraatorile e-mail peale kommenteerimist' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
    array('Maksimaalne pildikirjelduse pikkus', 'max_img_desc_length', 0),
    array('Maksimaalne tähtede arv sõnas', 'max_com_wlength', 0),
    array('Maksimaalne ridade arv kommentaaris', 'max_com_lines', 0),
    array('Maksimaalne kommentaari pikkus', 'max_com_size', 0),
    array('Näita filmilinti', 'display_film_strip', 1),
    array('Kaadrite arv filmilindil', 'max_film_strip_items', 0),
    array('Luba anonüümsetel kasutajatel vaadata täissuuruses pilte', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
    array('Päevade arv, mille jooksul ei saa uuesti sama pildi poolt hääletada','keep_votes_time',0), // new in cpg1.2.2c nuke
    array('Näita slaidivaates täissuuruses pilte','fullsize_slideshow',1),
    array('Kui moodulil on parempoolsed plokid lubatud, näita neid ka pildi vaatamisel?', 'right_blocks', 1), // new 1.2.2
// Pictures and thumbnails settings
    'Piltide ja pisipiltide seaded',
    array('JPEG failide kvaliteet', 'jpeg_qual', 0),
    array('Pisipildi suurim lubatud laius või kõrgus <b>*</b>', 'thumb_width', 0),
    array('Suurus millest lähtuda piltide mõõtmete muutmisel <b>*</b>', 'thumb_use', 7),
    array('Loo keskmised pildid', 'make_intermediate', 1),
    array('Keskmiste piltide laius või kõrgus <b>*</b>', 'picture_width', 0),
    array('Salvestatud piltide suurim lubatud suurus (KB)', 'max_upl_size', 0),
    array('Salvestatud piltide suurim lubatud laius või kõrgus (pikslites)', 'max_upl_width_height', 0),
    array('Suurim laius või kõrgus üles laetud piltidele (pikslites)', 'max_upl_width_height', 0),
    array('Luba mitme samanimelise faili üleslaadimine', 'samename', 1),
   // User settings
    'Kasutajate seaded',
    array('Luba uute kasutajate registreerimine', 'allow_user_registration', 1),
/*
    array('Kasutaja registratsioon nõuab e-maili kinnitust', 'reg_requires_valid_email', 1),
    array('Luba kahel inimesel samat e-maili aadressi kasutada', 'allow_duplicate_emails_addr', 1),
*/
    array('Kasutajatel võivad olla isiklikud albumid', 'allow_private_albums', 1),
    array('Isiklikul albumil näita pildi asemel kasutaja avatari', 'avatar_private_album', 1),
// Custom fields for image description
    'Kohandatavad väljad pildi kirjelduseks (jäta tühjaks kui ei kasuta)',
    array('1. välja nimi', 'user_field1_name', 0),
    array('2. välja nimi', 'user_field2_name', 0),
    array('3. välja nimi', 'user_field3_name', 0),
    array('4. välja nimi', 'user_field4_name', 0),
    // Pictures and thumbnails advanced settings
    'Piltide ja pisipiltide lisaseaded',
    array('Näita sisselogimata külastajatele isiklike albumite ikooni', 'show_private', 1),
    array('Faili nimes keelatud tähemärgid', 'forbiden_fname_char', 0),
    array('Lubatud failitüübid salvestatavatele piltidele', 'allowed_file_extensions', 0),
    array('Piltide suurusemuutmise vahend', 'thumb_method', 2),
    array('ImageMagick või netpbm puhul selle rada (näiteks /usr/bin/X11/)', 'impath', 0),
    array('ImageMagicku poolt lubatud pilditüübid', 'allowed_img_types', 0),
    array('ImageMagicku jaoks käsurea parameetrid', 'im_options', 0),
    array('Loe EXIF andmeid JPEG failidest', 'read_exif_data', 1),
    array('Loe IPTC andmed JPEG failidest', 'read_iptc_data', 1), // new in cpg1.2.0nuke
    array('Rada albumite jaoks <b>*</b>', 'fullpath', 0),
    array('Rada kasutajate albumite jaoks <b>*</b>', 'userpics', 0),
    array('Eesliide keskmise suurusega piltidele <b>*</b>', 'normal_pfx', 0),
    array('Eesliide pisipiltidele <b>*</b>', 'thumb_pfx', 0),
    array('Kuva pildiinfos faili nime', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
    array('Kuva pildiinfos albumi nime', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
    array('Kuva pildiinfos faili suurust', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
    array('Kuva pildiinfos mõõtmeid', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
    array('Kuva pildiinfos näitamiste arvu', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
    array('Kuva pildiinfos aadressit', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
    array('Kuva pildiinfos aadress lemmikviidana', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
    array('Kuva pildiinfos lemmikalbumi viita', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
    // Cookies & Charset settings
    'Küpsised (Cookies)',
    array('Galerii poolt kasutatava küpsise nimi', 'cookie_name', 0),
    array('Galerii poolt kasutatava küpsise rada', 'cookie_path', 0),
// 'Miscellaneous settings',
    'Muud seaded',
    array('Võimalda parandusmood', 'debug_mode', 1),
    '<br /><div align="center">(*) Tärniga märgitud välju ei tohi muuta, kui sul on juba mõni pilt galeriis</div><br />'
    );
// end left side interpretation
