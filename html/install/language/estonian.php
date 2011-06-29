<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004 - 2005 by CPG-Nuke Dev Team
  http://www.dragonflycms.com

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/html/install/language/estonian.php,v $
  $Revision: 10.1 $
  $Author: djmaze $
  $Date: 2010/11/11 17:31:44 $
**********************************************/
if (!defined('INSTALL')) { exit; }

$instlang['installer'] = 'Paigaldaja';
$instlang['s_progress'] = 'Paigaldamise edenemine';
$instlang['s_license'] = 'Litsents';
$instlang['s_server'] = 'Kontrolli serverit';
$instlang['s_setconfig'] = 'Seadista config.php';
$instlang['s_builddb'] = 'Ehita andmebaas';
$instlang['s_gather'] = 'Kogu kokku tÃ¤htis info';
$instlang['s_create'] = 'Loo peakasutaja (super adminni) konto';
$instlang['welcome'] = 'Teretulemast Dragonfly\'sse!';
$instlang['info'] = 'See paigaldus juhatab sind Dragonfly '.CPG_NUKE.' Ã¼les seadistamiseks mÃµne minutiga.<br />Paigaldaja ehitab vajalikud andmebaasid ja esimese kasutaja vÃµi uuendab su eelnevalt paigaldatud CPG-Nuke\'i PHP-Nuke\'i.';
$instlang['click'] = 'Vajuta "Olen nÃµus" kui sa nÃµustud jÃ¤rgneva litsentsiga:';
//$instlang['license'] = 'CPG Dragonfly CMS tootjate meeskonna poolt tehtud muudatusi ja parandusi ei vÃµi kasutada Ã¼hegis Nuke\'i versioonis vÃµi veebilehel, mis nÃµuab paigalduse jaoks maksustamist, registratsiooni vÃµi tasu, GPL litsentsiga tarkvara tugi vÃµi allalaadimine ilma lubatud tasuta CPG Dragonfly CMS tootjate meeskonna poolt, kes vÃµttis ette selle mÃ¤rkimisvÃ¤Ã¤rse, tÃ¤htsa, ja silmapaistva Ã¼mber kirjutamise.<br /><b>See tÃ¤hendab et sa ei saa mÃ¼Ã¼a meie koodi kui osa mistahes kommertslikust versioonist.</b>';
$instlang['license_edited'] = 'Sinu litsentsi on muudetud. Palun vÃµta Ã¼hendust tootjate meeskonnaga dragonflycms.com\'ist  viivitamatult. TÃ¤name Sind.';
$instlang['no_zlib'] = 'Sinu server ei toeta Zlib kokkupakkimist. Seega ei saa sa meie litsentsi siit lehelt lugeda. Palun vaata faili GPL.txt, mille leiad oma CPG Dragonfly CMS distributsioonist ja vajuta allolevat "Olen nÃµus"';
$instlang['agree'] = 'Olen nÃµus';
$instlang['next'] = 'Edasi';

$instlang['s1_good'] = 'Oleme tÃ¤nulikud, et tegid valiku kasutada Dragonfly CMS\'i';
$instlang['s1_already'] = 'Sul on juba '.((CPG_NUKE < 9) ? 'CPG-Nuke' : 'Dragonfly').' <b>'.CPG_NUKE.'</b> paigaldatud.';
$instlang['s1_splatt'] = '<b>Hoiatus</b> Vana foorumi andmebaas kustutatakse! Kui sa tahad seda siiski proovida kasutada, siis jÃ¤ta tabelid alles.<br />SÃ¤ilita vana foorumi andmebaas? <select name="splatt" class="formfield"><option value="0">Ei</option><option value="1">Jah</option></select>';
$instlang['s1_new'] = 'Paigaldaja ei leidnud eelmist versiooni, seega paigaldab see sinu jaoks uue versiooni';
$instlang['s1_upgrade'] = 'Sinu praegune versioon on <b>%s</b> ja see uuendatakse/muudetakse versioonile Dragonfly '.CPG_NUKE.'<br /><b>Ole kindel et sul on oma andmebaasist tagavara koopia.</b>';
$instlang['s1_unknown'] = 'Paigaldaja ei suutnud aru saada millist versiooni CPG-Nuke\'ist/PHP-Nuke\'ist sa kasutad.<br />Sa ei saa paigaldusega jÃ¤tkata.<br />Palun vÃµta Ã¼hendust CPG Dragonfly CMS tootjate meeskonnaga';
$instlang['s1_database'] = 'See on kokkuvÃµte sellest mis sa oled seadistanud config.php failis andmebaasi Ã¼henduseks';

$instlang['s1_dbconfig'] = 'Andmebaasi seadistus';
$instlang['s1_server'] = 'Serveri versioon';
$instlang['s1_server2'] = '%s-i versioon, mis on hetkel sinu serveril aktiivne';
$instlang['s1_layer'] = 'SQL kiht';
$instlang['s1_layer2'] = 'SQL kiht mida sinu veebilehega kasutada';
$instlang['s1_host'] = 'Majutuse nimi';
$instlang['s1_host2'] = 'MySQL serveri  DNS-i nimi vÃµi IP';
$instlang['s1_username'] = 'Sisselogimise nimi';
$instlang['s1_username2'] = 'SQL serverisse sisse logimiseks kasutatav kasutajanimi';
$instlang['s1_password'] = 'Sisse logimise salasÃµna';
$instlang['s1_password2'] = 'Kasutajanime salasÃµna et logida SQL serverisse sisse';
$instlang['s1_dbname'] = 'Andmebaasi nimi';
$instlang['s1_dbname2'] = 'Kindla andmebaasi nimi, mis sisaldab soovitud tabeleid andmetega';
$instlang['s1_prefix'] = 'Tabeli eesliide';
$instlang['s1_prefix2'] = 'Vaikimisi eesliide tabelite nimedele';
$instlang['s1_userprefix'] = 'Kasutajate tabeli eesliide';
$instlang['s1_userprefix2'] = 'Vaikimisi eesliide tabelile mis sisaldab kÃµiki kasutajate andmeid';
$instlang['s1_directory_write'] = 'Kataloogi kirjutamise ligipÃ¤Ã¤s';
$instlang['s1_directory_write2'] = 'Kataloogid mis vajavad kirjutamise ligipÃ¤Ã¤su teabe hoidmiseks, nagu nÃ¤iteks Ã¼les laetud pildid.<br />Kui mÃµni ebaÃµnnestub, siis "CHMOD 777" see kataloog';
$instlang['s1_dot_ok'] = 'OK';
$instlang['s1_dot_failed'] = 'EbaÃµnnestus aga ei ole vÃ¤ga tÃ¤htis';
$instlang['s1_dot_critical'] = 'Kriitiline';

$instlang['s1_server_settings'] = 'Serveri sÃ¤tted';
$instlang['s1_setting'] = 'sÃ¤te';
$instlang['s1_preferred'] = 'eelistatud';
$instlang['s1_yours'] = 'sinul';
$instlang['s1_on'] = 'Sees';
$instlang['s1_off'] = 'VÃ¤ljas';
$instlang['s1_leo_available'] = 'LEO kasutatav';
$instlang['s1_yes'] = 'Jah';
$instlang['s1_no'] = 'Ei';

$instlang['s1_cache'] = 'VahemÃ¤lu';
$instlang['s1_cache2'] = 'Salvestab vahemÃ¤lu seaded ja malli failid kiiremaks lehe tekitamiseks';
$instlang['s1_avatars'] = 'Avatarid';
$instlang['s1_avatars2'] = 'Kui liikmetel on lubatud avatari Ã¼leslaadimine, sisaldab see kataloog nende Ã¼leslaetud avatare';
$instlang['s1_albums'] = 'Albumid';
$instlang['s1_albums2'] = 'Hoiab kÃµiki pilte fotogaleriist, mis on Ã¼leslaetud lÃ¤bi FTP vÃµi mÃµnel teisel meetodil';
$instlang['s1_userpics'] = 'Kasutajate pildid';
$instlang['s1_userpics2'] = 'Hoiab alamkatalooge iga liikme ID-st ja sÃ¤ilitab seal liikmete Ã¼leslaetud pilte';
$instlang['s1_config'] = 'Lisandid';
$instlang['s1_config2'] = 'Hoiab sÃ¼steemi faile mida on vaja Dragonfly jooksutamiseks';

$instlang['s1_correct'] = 'Kui Ã¼leval olev teave on Ãµige, siis alusta andmebaasi ehitamist';
$instlang['s1_fixerrors'] = 'Palun paranda ennem Ã¼leval mainitud vead';
$instlang['s1_fatalerror'] = 'Palun vÃµta Ã¼hendust CPG Dragonfly CMS tootjate meeskonnaga vea kohta<br />Sa ei saa paigaldamisega jÃ¤tkata';
$instlang['s1_build_db'] = 'Ehitame andmebaasi';
$instlang['s1_necessary_info'] = 'Vajalik teave';
$instlang['s1_php'] = '<p style="color:#FF0000; font-style:bold">Me ei saa garanteerida et Dragonfly jookseb korralikult sinu vana PHP versiooniga<br />KÃ¼si oma serveri administraatoril uuendada PHP versioonini PHP 4.3.10 vÃµi 5.0.3 vÃµi uuemale</p>';
$instlang['s1_mysql'] = '<p style="color: #FF0000; font-style: bold;">Meil on kahju, kuid ainult MySQL 4 vÃµi uuem on toetatud<br />KÃ¼si oma serveri administraatoril uuendada MySQL versioonini 4 vÃµi uuemale</p>Sinu praegune versioon on: %s';
$instlang['s1_donenew'] = 'Andmebaas on korralikult paigaldatud, seadistame nÃ¼Ã¼d vajaliku informatsiooni!';
$instlang['s1_optimiz'] = 'Andmebaasi optimiseerimine. Selle sammu tegemine võib suure andmebaasi puhul pÃ¤ris palju aega vÃµtta.';
$instlang['s1_doneup'] = 'Andmebaas on korralikult uuendatud, mÃ¶lla oma uskumatu Dragonfly\'ga!<br /><h2>Kustuta install.php ja install kataloog kohe!</h2>';
$instlang['s1_trying_to_connect'] = 'SQL serveriga Ã¼hendamise proovimine';
$instlang['s1_wrong_database_name'] = 'Sa pead valima mingi muu andmebaasi nime.<br />Vabandust ebameeldivuse pÃ¤rast, kuid sa ei saa andmebaasi nimena "<b>public</b>" kasutada.';
$instlang['s1_fail_create_database'] = 'Andmebaasi %s loomine ebaÃµnnestus';
$instlang['s1_save_conf_succeed'] = 'Seadete salvestamine Ãµnnestus';
$instlang['s1_save_conf_failed'] = 'Seadete salvestamine ebaÃµnnestus';
$instlang['s1_db_connection_succeeded'] = 'Andmebaasiga Ã¼hendamine Ãµnnestus';

$instlang['s2_info'] = 'Seadistame vajaliku info:';
$instlang['s2_error'] = 'KÃµik informatsiooni peab sisestama.';
$instlang['s2_account'] = 'Vajalik info on lisatud. Teeme sulle esimese konto!';
$instlang['s2_create'] = 'Loo konto';

$instlang['s2_domain'] = 'Domeeni nimi';
$instlang['s2_domain2'] = 'Domeeni nimi kus su Dragonfly mootoril jooksev veebilehekÃ¼lg asub, nÃ¤iteks <i>www.minuleht.ee</i>';
$instlang['s2_path'] = 'Asukoht';
$instlang['s2_path2'] = 'Asukoht kus su Dragonfly mootoril jooksev veebileht asub, nÃ¤iteks <i>/html/</i>';
$instlang['s2_email2'] = 'PÃµhiline e-maili aadress kuhu veebiteave saadetakse';
$instlang['s2_session_path'] = 'Sessiooni salvestamise asukoht';
$instlang['s2_session_path2'] = 'See on asukoht kus sÃ¤iltatakse andmefaile.<br />Sa pead muutma seda vÃ¤Ã¤rtust et kasutada Dragonfly sessiooni funktsioone.<br />Asukoht peav olema PHP kaudu kÃ¤ttesaadav, nÃ¤iteks /home/minunimi/tmp/sessiondata ja arvatavasti CHMOD vÃ¤Ã¤rtusega 777.';
$instlang['s2_cookie_domain'] = 'KÃ¼psise domeen';
$instlang['s2_cookie_domain2'] = 'TÃ¤is- vÃµi kÃµige Ã¼lemise taseme domeen kus sÃ¤ilitatakse kÃ¼psiseid, nÃ¤iteks <i>minuleht.ee</i> vÃµi jÃ¤ta lihtsalt tÃ¼hjaks';
$instlang['s2_cookie_path'] = 'KÃ¼psise asukoht';
$instlang['s2_cookie_path2'] = 'Veebiaadress milleni kÃ¼psist piirata, nÃ¤iteks <i>/html/</i>';
$instlang['s2_cookie_admin'] = 'Admininistraatori kÃ¼psise nimi';
$instlang['s2_cookie_admin2'] = 'Selle veebilehe administraatori sisselogimise teavet sisaldava kÃ¼psise nimi';
$instlang['s2_cookie_member'] = 'Liikme kÃ¼psise nimi';
$instlang['s2_cookie_member2'] = 'Selle veebilehe liikme sisselogimise teavet sisaldava kÃ¼psise nimi';
$instlang['s2_cookie_cpg'] = 'Fotogalerii kÃ¼psise nimi';
$instlang['s2_cookie_cpg2'] = 'Selle veebilehe fotogaleriiga seonduvat teavet sisaldava kÃ¼psise nimi';

$instlang['s2_error_email'] = 'Kehtetu e-mail';
$instlang['s2_error_empty'] = 'MÃµned vÃ¤ljad jÃ¤id tÃ¤itmata';
$instlang['s2_error_cookiename'] = 'Kehtetu kÃ¼psise nimi';
$instlang['s2_error_cookiesettings'] = 'Kehtetud kÃ¼psiste seadistused';
$instlang['s2_error_sessionsettings'] = 'Valed sessiooni seaded';

$instlang['s2_cookietest'] = 'Enne jÃ¤tkamist kontrollime kÃ¼psiste seadeid, mis sa eelnevalt sisestasid.';
$instlang['s2_test_settings'] = 'Kontrolli seadeid';

$instlang['s3_sync_schema'] = 'Synchronizing Database Schema';
$instlang['s3_sync_data']   = 'Synchronizing Database Data';
$instlang['s3_exec_queries'] = 'PÃ¤ringute lÃ¤biviimine';
$instlang['s3_nick2'] = 'Nimi mida sa sellel veebilehel hakkad kasutama et administraatorina sisse logida';
$instlang['s3_email2'] = 'Sinu e-mail';
$instlang['s3_pass2'] = 'SalasÃµna mida sa sellel veebilehel sisselogimiseks kasutama hakkad. Sa vÃµid kasutada Ã¼kskÃµik milliseid mÃ¤rke';
$instlang['s3_timezone'] = 'AjavÃ¶Ã¶nd';
$instlang['s3_timezone2'] = 'AjavÃ¶Ã¶nd milles sa tahad nÃ¤ha postitatud kirjade aega';

$instlang['s3_warning'] = 'SalasÃµnas peab olema vÃ¤hemalt: 1 suurtÃ¤ht, 1 vÃ¤iketÃ¤ht ja 1 number.';
$instlang['s3_finnish'] = '<h2>Dragonfly '.CPG_NUKE.' on edukalt paigaldatud.<br />Kustuta install.php ja install kataloog kohe!<br />Siis mÃ¶lla palju sÃ¼da lustib!</h2><a href="'.$adminindex.'" style="font-size: 14px;">Sisene mu veebilehele et kÃµik paika panna</a>';
