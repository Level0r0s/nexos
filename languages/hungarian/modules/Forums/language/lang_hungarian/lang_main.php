<?php
/***************************************************************************
 *                            lang_main.php [Magyar]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2004/07/31 19:07:49 akamu Exp $
 *
 *     translated by   : Szilard Andai
 *     web                    : http://iranon.ezustkep.hu
 *     version              : 2.0.6
 *
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// CONTRIBUTORS:
//         Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'Y.m.d., l, G:i'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'Magyar fordítás &copy; 2004. <a class="copyright" href="http://iranon.ezustkep.hu">Andai Szilárd</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Fórum';
$lang['Category'] = 'Témakör';
$lang['Topic'] = 'Téma';
$lang['Topics'] = 'Témák';
$lang['Replies'] = 'Válaszok';
$lang['Views'] = 'Megtekintve';
$lang['Post'] = 'Hozzászólás';
$lang['Posts'] = 'Hozzászólások';
$lang['Posted'] = 'Elküldve';
$lang['Username'] = 'Felhasználónév';
$lang['Password'] = 'Jelszó';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Küldő';
$lang['Author'] = 'Szerző';
$lang['Time'] = 'Idő';
$lang['Hours'] = 'Óra';
$lang['Message'] = 'Üzenet';

$lang['1_Day'] = '1 nap';
$lang['7_Days'] = '7 nap';
$lang['2_Weeks'] = '2 hét';
$lang['1_Month'] = '1 hónap';
$lang['3_Months'] = '3 hónap';
$lang['6_Months'] = '6 hónap';
$lang['1_Year'] = '1 év';

$lang['Go'] = 'Mehet';
$lang['Jump_to'] = 'Ugrás';
$lang['Submit'] = 'Elküld';
$lang['Reset'] = 'Töröl';
$lang['Cancel'] = 'Mégsem';
$lang['Preview'] = 'Előnézet';
$lang['Confirm'] = 'Elfogad';
$lang['Spellcheck'] = 'Helyesírás';
$lang['Yes'] = 'Igen';
$lang['No'] = 'Nem';
$lang['Enabled'] = 'Bekapcsolva';
$lang['Disabled'] = 'Kikapcsolva';
$lang['Error'] = 'Hiba';

$lang['Next'] = 'Következő';
$lang['Previous'] = 'Előző';
$lang['Goto_page'] = 'Ugrás az oldalra:';
$lang['Joined'] = 'Csatlakozott';
$lang['IP_Address'] = 'IP-cím';

$lang['Select_forum'] = 'Fórum kiválasztása';
$lang['View_latest_post'] = 'Legutóbbi hozzászólások';
$lang['View_newest_post'] = 'Legújabb hozzászólások';
$lang['Page_of'] = '<b>%d</b> / <b>%d</b> oldal'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Tartalomjegyzék';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Új téma nyitása';
$lang['Reply_to_topic'] = 'Hozzászólás a témához';
$lang['Reply_with_quote'] = 'Hozzászólás, az előzmény idézésével';

$lang['Click_return_topic'] = '%sVisszatérés%s a témához'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Kattints %side%s, hogy ismét megpróbáld';
$lang['Click_return_forum'] = 'Kattints %side%s, hogy visszatérj a fórumba.';
$lang['Click_view_message'] = 'Kattints %side%s, a hozzászólásod megtekintéséhez.';
$lang['Click_return_modcp'] = '%sVisszatérés%s a Moderátor Vezérlőpulthoz.';
$lang['Click_return_group'] = '%sVisszatérés%s a Csoporthoz.';

$lang['Admin_panel'] = 'Fórum Adminisztráció';

$lang['Board_disable'] = 'A fórum ideiglenesen szünetel, kérlek próbáld később.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Regisztrált felhasználók:';
$lang['Browsing_forum'] = 'Jelenlévő fórumozók:';
$lang['Online_users_zero_total'] = 'Összesen <b>0</b> felhasználó van jelen :: ';
$lang['Online_users_total'] = 'Jelenleg <b>%d</b> felhasználó van itt :: ';
$lang['Online_user_total'] = 'Jelenleg <b>%d</b> felhasználó van itt :: ';
$lang['Reg_users_zero_total'] = '0 Regisztrált, ';
$lang['Reg_users_total'] = '%d Regisztrált, ';
$lang['Reg_user_total'] = '%d Regisztrált, ';
$lang['Hidden_users_zero_total'] = '0 Rejtett és ';
$lang['Hidden_user_total'] = '%d Rejtett és ';
$lang['Hidden_users_total'] = '%d Rejtett és ';
$lang['Guest_users_zero_total'] = '0 Vendég';
$lang['Guest_users_total'] = '%d Vendég';
$lang['Guest_user_total'] = '%d Vendég';
$lang['Record_online_users'] = 'A legtöbb felhasználó (<b>%s</b> fő) %s-kor volt itt.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdminisztrátor%s';
$lang['Mod_online_color'] = '%sModerátor%s';

$lang['You_last_visit'] = 'Legutolsó látogatásod dátuma: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Pontos idő: %s'; // %s replaced by time

$lang['Search_new'] = 'Hozzászólások a legutolsó látogatás óta';
$lang['Search_your_posts'] = 'Üzeneteid megtekintése';
$lang['Search_unanswered'] = 'Megválaszolatlan üzenetek megtekintése';

$lang['Register'] = 'Regisztráció';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profil szerkesztése';
$lang['Search'] = 'Keresés';
$lang['Memberlist'] = 'Taglista';
$lang['FAQ'] = 'Gy.I.K.';
$lang['BBCode_guide'] = 'BBCode Kalauz';
$lang['Usergroups'] = 'Csoportok';
$lang['Last_Post'] = 'Legutolsó üzenet';
$lang['Moderator'] = 'Moderátor';
$lang['Moderators'] = 'Moderátorok';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Jelenleg összesen <b>0</b> hozzászólás olvasható.'; // Number of posts
$lang['Posted_articles_total'] = 'Jelenleg összesen <b>%d</b> hozzászólás olvasható.'; // Number of posts
$lang['Posted_article_total'] = 'Eddig összesen <b>%d</b> hozzászólás olvasható.'; // Number of posts
$lang['Registered_users_zero_total'] = 'Összesen <b>0</b> regisztrált felhasználónk van.'; // # registered users
$lang['Registered_users_total'] = 'Összesen <b>%d</b> regisztrált felhasználónk van.'; // # registered users
$lang['Registered_user_total'] = 'Összesen <b>%d</b> regisztrált felhasználónk van.'; // # registered users
$lang['Newest_user'] = 'Legújabb regisztrált tagunk: <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Nincsen új hozzászólás a legutolsó látogatásod óta';
$lang['No_new_posts'] = 'Nincsenek új hozzászólások';
$lang['New_posts'] = 'Új hozzászólások';
$lang['New_post'] = 'Új hozzászólás';
$lang['No_new_posts_hot'] = 'Nincsenek új hozzászólások [ Népszerű ]';
$lang['New_posts_hot'] = 'Új hozzászólások [ Népszerű ]';
$lang['No_new_posts_locked'] = 'Nincsenek új hozzászólások [ Zárt ]';
$lang['New_posts_locked'] = 'Új hozzászólások [ Zárt ]';
$lang['Forum_is_locked'] = 'Lezárt fórum';


//
// Login
//
$lang['Enter_password'] = 'A belépéshez add meg a felhasználóneved és jelszavad.';
$lang['Login'] = 'Belépés';
$lang['Logout'] = 'Kilépés';

$lang['Forgotten_password'] = 'Elfelejtettem a jelszót!';

$lang['Log_me_in'] = 'Automatikus bejelentkezés';

$lang['Error_login'] = 'Hibás, vagy inaktív felhasználónevet és/vagy hibás jelszót adtál meg!';


//
// Index page
//
$lang['Index'] = 'Index';
$lang['No_Posts'] = 'Nincs hozzászólás';
$lang['No_forums'] = 'Nincsenek fórumok';

$lang['Private_Message'] = 'Privát Üzenet';
$lang['Private_Messages'] = 'Privát Üzenetek';
$lang['Who_is_Online'] = 'Ki van itt?';

$lang['Mark_all_forums'] = 'Összes fórum megjelölése olvasottként';
$lang['Forums_marked_read'] = 'Összes fórum megjelölve olvasottként';


//
// Viewforum
//
$lang['View_forum'] = 'Fórum megtekintése';

$lang['Forum_not_exist'] = 'A kiválsztott fórum nem létezik.';
$lang['Reached_on_error'] = 'Hiba.';

$lang['Display_topics'] = 'Összes téma mutatása';
$lang['All_Topics'] = 'Összes téma';

$lang['Topic_Announcement'] = '<b>Közlemény:</b>';
$lang['Topic_Sticky'] = '<b>Kiemelt:</b>';
$lang['Topic_Moved'] = '<b>Árnyék:</b>';
$lang['Topic_Poll'] = '<b>[ Szavazás ]</b>';

$lang['Mark_all_topics'] = 'Összes téma megjelölése olvasottként';
$lang['Topics_marked_read'] = 'Összes téma megjelölve olvasottként';

$lang['Rules_post_can'] = '<b>Készíthetsz</b> új témákat ebben a fórumban';
$lang['Rules_post_cannot'] = '<b>Nem</b> készíthetsz új témákat ebben a fórumban';
$lang['Rules_reply_can'] = '<b>Válaszolhatsz</b> egy témára ebben a fórumban';
$lang['Rules_reply_cannot'] = '<b>Nem</b> válaszolhatsz egy témára ebben a fórumban';
$lang['Rules_edit_can'] = '<b>Módosíthatod</b> a hozzászólásaidat a fórumban';
$lang['Rules_edit_cannot'] = '<b>Nem</b> módosíthatod a hozzászólásaidat a fórumban';
$lang['Rules_delete_can'] = '<b>Törölheted</b> a hozzászólásaidat a fórumban';
$lang['Rules_delete_cannot'] = '<b>Nem</b> törölheted a hozzászólásaidat a fórumban';
$lang['Rules_vote_can'] = '<b>Szavazhatsz</b> ebben a fórumban';
$lang['Rules_vote_cannot'] = '<b>Nem</b> szavazhatsz ebben fórumban';
$lang['Rules_moderate'] = '<b>%sModerálhatod%s</b> ezt a fórumot'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Nincsenek témák a fórumban<br />Kattints az <b>Új Téma készítésére</b>.';


//
// Viewtopic
//
$lang['View_topic'] = 'Téma megtekintése';

$lang['Guest'] = 'Vendég';
$lang['Post_subject'] = 'Hozzászólás témája';
$lang['View_next_topic'] = 'Következő téma megtekintése';
$lang['View_previous_topic'] = 'Előző téma megtekintése';
$lang['Submit_vote'] = 'Szavazás küldése';
$lang['View_results'] = 'Eredmény megtekintése';

$lang['No_newer_topics'] = 'Nincsenek újabb témák a fórumban';
$lang['No_older_topics'] = 'Nincsenek régbbi témák a fórumban';
$lang['Topic_post_not_exist'] = 'A téma vagy hozzászólás nem létezik';
$lang['No_posts_topic'] = 'Nincs hozzászólás a témában';

$lang['Display_posts'] = 'Hozzászólások megtekintése';
$lang['All_Posts'] = 'Összes';
$lang['Newest_First'] = 'Újak előre';
$lang['Oldest_First'] = 'Régebbiek előre';

$lang['Back_to_top'] = 'Vissza az elejére';

$lang['Read_profile'] = 'Felhasználó profiljának megtekintése';
$lang['Send_email'] = 'Email küldése a felhasználónak';
$lang['Visit_website'] = 'Felhasználó weblapjának megtekintése';
$lang['ICQ_status'] = 'ICQ Státusz';
$lang['Edit_delete_post'] = 'Hozzászólás szerkesztése/törlése';
$lang['View_IP'] = 'Felhasználó IP-címe';
$lang['Delete_post'] = 'Hozzászólás törlése';

$lang['wrote'] = 'írta'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Idézet'; // comes before bbcode quote output.
$lang['Code'] = 'Kód'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Legutóbb %s szerkesztette (%s), összesen %d alkalommal'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Legutóbb %s szerkesztette (%s), összesen %d alkalommal'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Téma lezárása';
$lang['Unlock_topic'] = 'Téma megnyitása';
$lang['Move_topic'] = 'Téma áthelyezése';
$lang['Delete_topic'] = 'Téma törlése';
$lang['Split_topic'] = 'Téma szétválasztása';

$lang['Stop_watching_topic'] = 'Leiratkozás a témáról';
$lang['Start_watching_topic'] = 'Feliratkozás a témára';
$lang['No_longer_watching'] = 'Téma figyelése megszüntetve!';
$lang['You_are_watching'] = 'Feliratkoztál a témára.';

$lang['Total_votes'] = 'Összes szavazat';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Üzenet tartalma';
$lang['Topic_review'] = 'Téma Előnézet';

$lang['No_post_mode'] = 'Nincs hozzászólás-típus kiválasztva'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Új téma küldése';
$lang['Post_a_reply'] = 'Új válasz küldése';
$lang['Post_topic_as'] = 'Téma küldése, mint';
$lang['Edit_Post'] = 'Hozzászólás szerkesztése';
$lang['Options'] = 'Beállítások';

$lang['Post_Announcement'] = 'Közlemény';
$lang['Post_Sticky'] = 'Kiemelt';
$lang['Post_Normal'] = 'Sima';

$lang['Confirm_delete'] = 'Biztosan törölni akarod a hozzászólást?';
$lang['Confirm_delete_poll'] = 'Biztosan törölni akarod a szavazást?';

$lang['Flood_Error'] = 'Nem küldhetsz rövid időn belül több hozzászólást, várj egy kicsit.';
$lang['Empty_subject'] = 'Új téma indításakor add meg a címét.';
$lang['Empty_message'] = 'Nem küldhetsz üres hozzászólást.';
$lang['Forum_locked'] = 'Zárt fórum: ide nem küldhetsz témát, választ, nem szerkesztheted a hozzászólásaidat.';
$lang['Topic_locked'] = 'Zárt téma: ide nem írhatsz választ, és nem szerkesztheted a hozzászólásaidat.';
$lang['No_post_id'] = 'A szerkesztéshez válassz ki egy hozzászólást';
$lang['No_topic_id'] = 'Válaszüzenet küldéséhez válassz ki egy topicot';
$lang['No_valid_mode'] = 'Csak küldhetsz, szerkeszthetsz, vagy idézhetsz hozzászólást. Lépj vissza, és próbáld újra.';
$lang['No_such_post'] = 'Nincsen ilyen hozzászólás. Lépj vissza, és próbáld újra.';
$lang['Edit_own_posts'] = 'Csak szerkesztheted a hozzászólásaidat.';
$lang['Delete_own_posts'] = 'Csak törölheted a hozzászólásaidat.';
$lang['Cannot_delete_replied'] = 'Nem törölhetsz a hozzászólást, melyre már érkezett válasz.';
$lang['Cannot_delete_poll'] = 'Nem törölhetsz aktív szavazást.';
$lang['Empty_poll_title'] = 'Adj meg egy címet a szavazásnak.';
$lang['To_few_poll_options'] = 'Legalább két választási lehetőséget adj meg.';
$lang['To_many_poll_options'] = 'Túl sok választási lehetőséget adtál meg.';
$lang['Post_has_no_poll'] = 'A hozzászólásnak nincs szavazása.';
$lang['Already_voted'] = 'Egyszer már szavaztál.';
$lang['No_vote_option'] = 'Válassz egy lehetőséget a szavazásnál.';

$lang['Add_poll'] = 'Szavazás hozzáadása';
$lang['Add_poll_explain'] = 'Ha nem akarsz szavazást adni a témához, hagyd üresen a mezőket.';
$lang['Poll_question'] = 'A szavazás kérdése';
$lang['Poll_option'] = 'Választási lehetőség';
$lang['Add_option'] = 'Hozzáadás';
$lang['Update'] = 'Frissítés';
$lang['Delete'] = 'Törlés';
$lang['Poll_for'] = 'A szavazás érvényes';
$lang['Days'] = 'nap'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Hagyd üresen, ha soha sem jár le a szavazás ]';
$lang['Delete_poll'] = 'Szavazás törlése';

$lang['Disable_HTML_post'] = 'HTML kikapcsolása a hozzászólásban';
$lang['Disable_BBCode_post'] = 'BBCode kikapcsolása a hozzászólásban';
$lang['Disable_Smilies_post'] = 'Emotikonok kikapcsolása a hozzászólásban';

$lang['HTML_is_ON'] = 'HTML <u>bekapcsolva</u>';
$lang['HTML_is_OFF'] = 'HTML <u>kikapcsolva</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>bekapcsolva</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>kikapcsolva</u>';
$lang['Smilies_are_ON'] = 'Emotikonok <u>bekapcsolva</u>';
$lang['Smilies_are_OFF'] = 'Emotikonok <u>kikapcsolva</u>';

$lang['Attach_signature'] = 'Aláírás hozzáadása (az aláírás megváltoztatható a Profilban)';
$lang['Notify'] = 'Értesítés, ha válasz érkezik';
$lang['Delete_post'] = 'Hozzászólás törlése';

$lang['Stored'] = 'A hozzászólás sikeresen bekerült a fórumba!';
$lang['Deleted'] = 'A hozzászólás törlése sikerült.';
$lang['Poll_delete'] = 'A szavazás törlése sikerült.';
$lang['Vote_cast'] = 'Szavazás elfogadva.';

$lang['Topic_reply_notification'] = 'Téma emlékeztető';

$lang['bbcode_b_help'] = 'Félkövér: [b]szöveg[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Dőlt: [i]szöveg[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Aláhúzás: [u]szöveg[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Idézet: [quote]szöveg[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kód: [code]kód[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]szöveg[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Rendezett lista: [list=]szöveg[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Kép beillesztése: [img]http://kép_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL beillesztése: [url]http://url[/url]vagy[url=http://url]URL szöveg[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Nyitott bbCode tag-ek lezárása';
$lang['bbcode_s_help'] = 'Betűszín: [color=red]text[/color] \(a \"color=#FF0000 is használható\)';
$lang['bbcode_f_help'] = 'Betűméret: [size=x-small]kis szöveg[/size]';

$lang['Emoticons'] = 'Emotikonok';
$lang['More_emoticons'] = 'A többi emotikon megtekintése';

$lang['Font_color'] = 'Betűszín';
$lang['color_default'] = 'Alap';
$lang['color_dark_red'] = 'Sötétpiros';
$lang['color_red'] = 'Piros';
$lang['color_orange'] = 'Narancs';
$lang['color_brown'] = 'Barna';
$lang['color_yellow'] = 'Sárga';
$lang['color_green'] = 'Zöld';
$lang['color_olive'] = 'Olíva';
$lang['color_cyan'] = 'Cián';
$lang['color_blue'] = 'Kék';
$lang['color_dark_blue'] = 'Sötétkék';
$lang['color_indigo'] = 'Indigó';
$lang['color_violet'] = 'Ibolya';
$lang['color_white'] = 'Fehér';
$lang['color_black'] = 'Fekete';

$lang['Font_size'] = 'Betűméret';
$lang['font_tiny'] = 'Apró';
$lang['font_small'] = 'Kicsi';
$lang['font_normal'] = 'Normál';
$lang['font_large'] = 'Nagy';
$lang['font_huge'] = 'Óriási';

$lang['Close_Tags'] = 'Tag-ek lezárása';
$lang['Styles_tip'] = 'Tipp: stílusok gyors alkalmazása az adott szövegen.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Privát Üzenet';

$lang['Login_check_pm'] = 'Privát üzeneteid olvasásához be kell jelentkezned';
$lang['New_pms'] = '%d új privát üzeneted van'; // You have 2 new messages
$lang['New_pm'] = '%d új privát üzeneted van'; // You have 1 new message
$lang['No_new_pm'] = 'Nincsen új privát üzeneted';
$lang['Unread_pms'] = '%d olvasatlan privát üzeneted van';
$lang['Unread_pm'] = '%d olvasatlan privát üzeneted van';
$lang['No_unread_pm'] = 'Nincsen olvasatlan privát üzeneted';
$lang['You_new_pm'] = 'Új privát üzenet érkezett!';
$lang['You_new_pms'] = 'Új privát üzenet érkezett';
$lang['You_no_new_pm'] = 'Nincs új privát üzenet';

$lang['Unread_message'] = 'Olvasatlan üzenetek';
$lang['Read_message'] = 'Olvasott üzenetek';

$lang['Read_pm'] = 'Üzenet olvasása';
$lang['Post_new_pm'] = 'Üzenet küldése';
$lang['Post_reply_pm'] = 'Válasz az üzenetre';
$lang['Post_quote_pm'] = 'Üzenet idézése';
$lang['Edit_pm'] = 'Üzenet szerkesztése';

$lang['Inbox'] = 'Érkezett fiók';
$lang['Outbox'] = 'Kimenő fiók';
$lang['Savebox'] = 'Mentés fiók';
$lang['Sentbox'] = 'Elküldött fiók';
$lang['Flag'] = 'Jelölt';
$lang['Subject'] = 'Téma';
$lang['From'] = 'Feladó';
$lang['To'] = 'Címzett';
$lang['Date'] = 'Dátum';
$lang['Mark'] = 'Kijelölés';
$lang['Sent'] = 'Elküldött';
$lang['Saved'] = 'Elmentett';
$lang['Delete_marked'] = 'Kijelöltek törlése';
$lang['Delete_all'] = 'Összes törlése';
$lang['Save_marked'] = 'Kijelöltek mentése';
$lang['Save_message'] = 'Üzenet mentése';
$lang['Delete_message'] = 'Üzenet törlése';

$lang['Display_messages'] = 'Üzenetek megjelenítése'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Összes üzenet';

$lang['No_messages_folder'] = 'Nincs üzeneted ebben a fiókban.';

$lang['PM_disabled'] = 'Nincs lehetőség Privát üzenet küldésére.';
$lang['Cannot_send_privmsg'] = 'Sajnos nem küldhetsz Privát üzeneteket. Lépj kapcsolatba az Adminisztrátorral.';
$lang['No_to_user'] = 'Az üzenet küldéséhez meg kell adnod a feladónevet.';
$lang['No_such_user'] = 'Ilyen nevű felhasználó nem létezik.';

$lang['Disable_HTML_pm'] = 'HTML kikapcsolása az üzenetben';
$lang['Disable_BBCode_pm'] = 'BBCode kikapcsolása az üzenetben';
$lang['Disable_Smilies_pm'] = 'Emotikonok kikapcsolása az üzenetben';

$lang['Message_sent'] = 'Üzenet elküldve.';

$lang['Click_return_inbox'] = 'Kattints %side%s, hogy visszatérj az Érkezett üzenetekhez';
$lang['Click_return_index'] = 'Kattints %side%s, hogy visszatérj a Tartalomjegyzékhez';

$lang['Send_a_new_message'] = 'Új Privát üzenet küldése';
$lang['Send_a_reply'] = 'Válasz a Privát üzenetre';
$lang['Edit_message'] = 'Priváte üzenet szerkesztése';

$lang['Notification_subject'] = 'Új Privát üzenet érkezett!';

$lang['Find_username'] = 'Felhasználónév keresése';
$lang['Find'] = 'Találat';
$lang['No_match'] = 'Nincs találat.';

$lang['No_post_id'] = 'No post ID was specified';
$lang['No_such_folder'] = 'Nem létezik ilyen fiók';
$lang['No_folder'] = 'Nincs fiók meghatározva';

$lang['Mark_all'] = 'Összes kijelölése';
$lang['Unmark_all'] = 'Összes kijelölésének megszüntetése';

$lang['Confirm_delete_pm'] = 'Biztosan törölni akarod az üzenetet?';
$lang['Confirm_delete_pms'] = 'Biztosan törölni akarod az üzeneteket?';

$lang['Inbox_size'] = 'Az Érkezett fiók %d%%-a betelt.'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Az Elküldött fiók %d%%-a betelt.';
$lang['Savebox_size'] = 'A Mentés fiók %d%%-a betelt.';

$lang['Click_view_privmsg'] = 'Kattints %side%s az Érkezett fiókod megtekintéséhez';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profil megtekintése :: %s'; // %s is username
$lang['About_user'] = '%s adatlapja'; // %s is username

$lang['Preferences'] = 'Beállítások';
$lang['Items_required'] = 'A csillaggal megjelölt mezők kitöltése kötelező.';
$lang['Registration_info'] = 'Regisztráció információ';
$lang['Profile_info'] = 'Profil Információ';
$lang['Profile_info_warn'] = 'Ezek az információk mindenki számára láthatóak lesznek.';
$lang['Avatar_panel'] = 'Avatar Beállítás';
$lang['Avatar_gallery'] = 'Avatar Galéria';

$lang['Website'] = 'Honlap';
$lang['Location'] = 'Tartózkodási hely';
$lang['Contact'] = 'Kapcsolat: ';
$lang['Email_address'] = 'Email-cím';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Privát üzenet küldése';
$lang['Hidden_email'] = '[ Rejtett ]';
$lang['Search_user_posts'] = 'Felhasználó hozzászólásainak keresése';
$lang['Interests'] = 'Érdeklődési kör';
$lang['Occupation'] = 'Foglalkozás';
$lang['Poster_rank'] = 'Rang';

$lang['Total_posts'] = 'Összes hozzászólása';
$lang['User_post_pct_stats'] = 'Az összes %.2f%%-ka'; // 1.25% of total
$lang['User_post_day_stats'] = 'Naponta %.2f hozzászólás'; // 1.5 posts per day
$lang['Search_user_posts'] = '%s hozzászólásainak keresése'; // Find all posts by username

$lang['No_user_id_specified'] = 'A felhasználó nem létezik.';
$lang['Wrong_Profile'] = 'Nem módosíthatod más Profilját.';

$lang['Only_one_avatar'] = 'Csak egy Avatart válassz ki';
$lang['File_no_data'] = 'A megadott webcím nem tartalmaz adatot!';
$lang['No_connection_URL'] = 'A megadott webcímhez nem lehet csatlakozni!';
$lang['Incomplete_URL'] = 'A megadott webcím hiányos';
$lang['Wrong_remote_avatar_format'] = 'A távoli avatar webcíme nem érvényes';
$lang['No_send_account_inactive'] = 'A jelszó sajnos nem kérhető le, mivel a felhasználónév jelenleg inaktív. Lépj kapcsolatba az Adminisztrátorral.';

$lang['Always_smile'] = 'Mindig engedélyezze a Emotikonokat';
$lang['Always_html'] = 'Mindig engedélyezze a HTML-t';
$lang['Always_bbcode'] = 'Mindig engedélyezze a BBCode-ot';
$lang['Always_add_sig'] = 'Mindig csatolja az aláírásomat';
$lang['Always_notify'] = 'Mindig értesítsen, ha válasz érkezik';
$lang['Always_notify_explain'] = 'Küld egy emailt, ha hozzászólás érkezik az adott témában. Ez bármikor megváltoztatható, ha egy újabb hozzászólást küldesz.';

$lang['Board_style'] = 'Sablon';
$lang['Board_lang'] = 'Nyelv';
$lang['No_themes'] = 'Nincsenek sablonok az adatbázisban';
$lang['Timezone'] = 'Időzóna';
$lang['Date_format'] = 'Dátum formátum';
$lang['Date_format_explain'] = 'A PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> szerint használandó.';
$lang['Signature'] = 'Aláírás';
$lang['Signature_explain'] = 'A hozzászólások végére kerülő szöveg. Maximum %d karakter lehet';
$lang['Public_view_email'] = 'Email-cím megjelenítése';

$lang['Current_password'] = 'Jelenlegi jelszó';
$lang['New_password'] = 'Új jelszó';
$lang['Confirm_password'] = 'Jelszó megismétlése';
$lang['Confirm_password_explain'] = 'Új jelszót kell megadnod, ha meg akarod változtatni a régit, vagy ha az emailcímet akarsz cserélni.';
$lang['password_if_changed'] = 'Csak akkor kell megadnod a jelszót, ha meg akarod változtatni';
$lang['password_confirm_if_changed'] = 'A fenti jelszó érvényesítéséhez szükséges';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Egy kép, mely a hozzászólásokban a nevednél lesz látható.<br \>Az avatar nem lehet szélesebb, mint %d pixel, és nem lehet magasabb, mint %d pixel. A mérete nem lehet nagyobb, mint %dKByte.';
$lang['Upload_Avatar_file'] = 'Avatar feltöltése a számítógépről';
$lang['Upload_Avatar_URL'] = 'Avatar feltöltése webcímről';
$lang['Upload_Avatar_URL_explain'] = 'Írd be az Avatar képének webcímét (a kép át lesz másolva erre az oldalra).';
$lang['Pick_local_Avatar'] = 'Avatar kiválasztása a galériából';
$lang['Link_remote_Avatar'] = 'Avatar kép belinkelése';
$lang['Link_remote_Avatar_explain'] = 'Írd be az Avatar képének webcímét, amelyet be szeretnél linkelni (a kép nem lesz átmásolva erre az oldalra).';
$lang['Avatar_URL'] = 'Avatar képének webcíme';
$lang['Select_from_gallery'] = 'Avatar kiválasztása a galériából';
$lang['View_avatar_gallery'] = 'Galéria megtekintése';

$lang['Select_avatar'] = 'Avatar kiválasztása';
$lang['Return_profile'] = 'Mégsem';
$lang['Select_category'] = 'Kategória kiválasztása';

$lang['Delete_Image'] = 'Kép törlése';
$lang['Current_Image'] = 'Jelenlegi kép';

$lang['Notify_on_privmsg'] = 'Értesítés új Privát üzenet érkezésekor';
$lang['Popup_on_privmsg'] = 'Felugró ablak új Privát üzenet érkezésekor';
$lang['Popup_on_privmsg_explain'] = 'Néhány sablon új ablakot nyit, ha új üzeneted érkezik.';
$lang['Hide_user'] = 'Jelenlét elrejtése';

$lang['Profile_updated'] = 'A Profil megváltozott!';
$lang['Profile_updated_inactive'] = 'A Profil megváltozott, de mivel néhány alapvető információn
változtattál, így a hozzáférésed inaktívra változott. Ellenőrizd az email-címedet, melyben a megtalálod az újraaktiváláshoz szükséges információkat, vagy ha ehhez Adminisztrátor szükséges, várj míg ő reaktiválja a hozzáférésedet.';

$lang['Password_mismatch'] = 'A beírt jelszavak nem egyeznek meg.';
$lang['Current_password_mismatch'] = 'A jelenlegi jelszó nem egyezik meg az adatbázisban találhatóval.';
$lang['Password_long'] = 'A jelszó nem lehet több mint 32 karakter.';
$lang['Too_many_registers'] = 'Túl sok regisztráció történt. Próbáld később.';
$lang['Username_taken'] = 'Ez a felhasználónév már foglalt.';
$lang['Username_invalid'] = 'A felhasználónév érvénytelen karaktert tartalmaz.';
$lang['Username_disallowed'] = 'Ez a felhasználónév nem engedélyezett.';
$lang['Email_taken'] = 'Ezt az emailcímet már regisztrálta egy másik felhasználó.';
$lang['Email_banned'] = 'Ez az emailcím le van tiltva.';
$lang['Email_invalid'] = 'Érvénytelen emailcím.';
$lang['Signature_too_long'] = 'Túl hosszú aláírás.';
$lang['Fields_empty'] = 'A csillaggal jelölt mezők kitöltése kötelező.';
$lang['Avatar_filetype'] = 'Az avatar kép típusa csak JPG, GIF vagy PNG lehet';
$lang['Avatar_filesize'] = 'Az avatar kép nem lehet nagyobb mint %d KByte'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Az avatar nem lehet nagyobb mint %d pixel széles és %d pixel magas';

$lang['Welcome_subject'] = 'Üdvözlünk a fórumban!'; // Welcome to dollar-s forums
$lang['New_account_subject'] = 'Új felhasználó';
$lang['Account_activated_subject'] = 'Felhasználó aktiválva';

$lang['Account_added'] = 'Köszönjük a regisztrációdat, mely sikeresen befejeződött. Most már bejelentkezhetsz a neveddel, és a hozzá tartozó jelszóval.';
$lang['Account_inactive'] = 'A regisztráció sikeres volt, de a belépés előtt még aktiválnod kell az azonosítódat.<br \>Az ezzel kapcsolatos információkért nézd meg a regisztrációnál megadott emailcímet.';
$lang['Account_inactive_admin'] = 'A regisztráció sikeres volt, de a fórum használatához az Adminisztrátor jóváhagyása szükséges.<br \>Rövidesen értesít az regisztrációd befejezéséről, a felhasználóneved aktiválásáról.';
$lang['Account_active'] = 'A felhasználóneved aktiválva van. Köszönjük a regisztrációt.';
$lang['Account_active_admin'] = 'A felhasználó aktiválva van.';
$lang['Reactivate'] = 'Felhasználónév reaktiválása!';
$lang['Already_activated'] = 'Már aktiváltad a felhasználónevedet.';
$lang['COPPA'] = 'A felhasználónév elkészült, de ellenőrzés ügyében előbb nézd meg az emailcímedet.';

$lang['Registration'] = 'Felhasználói Szabályzat';
$lang['Reg_agreement'] = 'Noha az Adminisztrátor, és a Moderátorok mindent megtesznek, hogy minél hamarabb eltávolítsák a Fórumból az általánosan kifogásolható anyagokat, lehetetlen, hogy minden egyes hozzászólást átnézzenek. Ebből adódóan elfogadom, hogy a Fórumon található összes hozzászólás a szerző nézeteit tükrözi, és nem az Adminisztrátorok, Moderátorok, vagy a webmester álláspontját - így ők nem vállalnak felelősséget a hozzászólások tartalmáért.<br /><br
/>Beleegyezek, hogy nem küldök sértegető, obszcén, vulgáris, rágalmazó, gyűlöletkeltő, támadó,
vagy bármely más olyan tartalmat, illetve anyagot, mely törvényt sért. Mivel ez egy nyilvános fórum, ezért olyan anyagot sem küldök, mely ellentétes az általános közízléssel. A fentiek megsértése azonnali és végleges törlést von maga után.<br
/>Elfogadom, hogy a Fórum webmesterének, az Adminisztrátornak és bármely Moderátornak jogában áll
eltávolítani, szerkeszteni a hozzászólásaimat, vagy lezárni az általam nyitott témákat,
amennyiben úgy ítélik meg hogy ez szükséges. Mint felhasználó, elfogadom, hogy néhány, általam
megadott adat tárolásra kerül a Fórum adatbázisában. Ezek az információk semmilyen módon nem kerülnek ki egy
harmadik félhez, de sem az Adminisztrátor sem a Moderátorok nem tudnak felelősséget vállalni az adatokért egy esetleges "hacker-támadás" esetén.<br /><br />A Fórum "cookie"-kat (sütiket) használ, hogy adatokat tároljon a felhasználó számítógépén, de egyik sem tartalmaz személyes adatokat, melyek a regisztrációnál kerültek megadásra: a cookie-k pusztán technikai szempontból szükségesek.<br />A megadott emailcím csak a regisztráció (és új jelszó) érvényesítéséhez szükségeltetik, semmilyen más felhasználásra nem kerül a megadott email-cím, és a hozzátartozó személyes adatok.<br /><br />';

$lang['Agree_under_13'] = '<b>Elfogadom</b> a feltételeket, és 13 évesnél <i>fiatalabb</i> vagyok';
$lang['Agree_over_13'] = '<b>Elfogadom</b> a feltételeket';
$lang['Agree_not'] = '<b>Nem fogadom el</b> a feltételeket';

$lang['Wrong_activation'] = 'Az aktivációs kulcs nem egyezik meg az adatbázisban lévővel.';
$lang['Send_password'] = 'Új jelszó küldése';
$lang['Password_updated'] = 'Az új jelszó elkészült, ellenőrizd az emailcímedet a további információkért.';
$lang['No_email_match'] = 'A megadott emailcím nem egyezik meg a hozzá adott felhasználónévhez.';
$lang['New_password_activation'] = 'Új jelszó aktiváció';
$lang['Password_activated'] = 'A hozzáférésedet újra aktiváltuk. A bejelentkezéshez írd be az emailben megadott jelszót.';

$lang['Send_email_msg'] = 'Email üzenet küldése';
$lang['No_user_specified'] = 'Nem adtál meg felhasználónevet';
$lang['User_prevent_email'] = 'A felhasználó nem akar emailokat fogadni. Próbálj Privát üzenetet küldeni.';
$lang['User_not_exist'] = 'Ilyen felhasználó nem létezik';
$lang['CC_email'] = 'Másolat küldése magadnak';
$lang['Email_message_desc'] = 'Az üzenet sima szövegként lesz elküldve, ezért ne használj HTML-t vagy BBCode tageket. A válaszcím a te emailcímed lesz.';
$lang['Flood_email_limit'] = 'Most nem küldhetsz több emailt, próbáld később.';
$lang['Recipient'] = 'Címzett';
$lang['Email_sent'] = 'Email elküldve.';
$lang['Send_email'] = 'Email küldése';
$lang['Empty_subject_email'] = 'Kötelező a téma megadása.';
$lang['Empty_message_email'] = 'Üres üzenet.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Az érvényesítő kód hibás.';
$lang['Too_many_registers'] = 'Egyszerre túl sok regisztrációval próbálkoztál. Próbáld később.';
$lang['Confirm_code_impaired'] = 'Ha látási (vagy egyéb) problémák folytán nem tudnád elolvasni a kódot, vedd fel a kapcsolatot az %sAdminisztrátorral%s.';
$lang['Confirm_code'] = 'Érvényesítő kód';
$lang['Confirm_code_explain'] = 'A kódot úgy kell begépelni, ahogy itt látod. Ügyelj a kis és nagybetűkre, a 0 pedig egy átlós vonallal van áthúzva.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Rendezési mód kiválasztása';
$lang['Sort'] = 'Rendezés';
$lang['Sort_Top_Ten'] = 'A legtöbb hozzászólást küldő 10 felhasználó';
$lang['Sort_Joined'] = 'Regisztráció dátuma';
$lang['Sort_Username'] = 'Felhasználónév';
$lang['Sort_Location'] = 'Tartózkodási hely';
$lang['Sort_Posts'] = 'Összes hozzászólás';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Honlap';
$lang['Sort_Ascending'] = 'Növekvő';
$lang['Sort_Descending'] = 'Csökkenő';
$lang['Order'] = 'Sorrend';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Csoport Vezérlőpult';
$lang['Group_member_details'] = 'Csoporttagság Részletek';
$lang['Group_member_join'] = 'Csatlakozás egy csoporthoz';

$lang['Group_Information'] = 'Csoport Információ';
$lang['Group_name'] = 'A csoport neve';
$lang['Group_description'] = 'A csoport leírása';
$lang['Group_membership'] = 'Csoporttagság';
$lang['Group_Members'] = 'Csoporttagok';
$lang['Group_Moderator'] = 'Csoport Moderátor';
$lang['Pending_members'] = 'Kérelmezett tagságok';

$lang['Group_type'] = 'A csoport típusa';
$lang['Group_open'] = 'Nyílt csoport';
$lang['Group_closed'] = 'Zárt csoport';
$lang['Group_hidden'] = 'Rejtett csoport';

$lang['Current_memberships'] = 'Aktuális tagságok';
$lang['Non_member_groups'] = 'Csoportok';
$lang['Memberships_pending'] = 'Tagsági kérelmek';

$lang['No_groups_exist'] = 'Jelenleg még nincsen csoport a Fórumon.';
$lang['Group_not_exist'] = 'A megadott csoport nem létezik';

$lang['Join_group'] = 'Csatlakozás a csoporthoz';
$lang['No_group_members'] = 'A csoportnak nincsenek tagjai';
$lang['Group_hidden_members'] = 'A csoport rejtett, nem tudod megnézni a tagjait';
$lang['No_pending_group_members'] = 'A csoportnak nincsenek függő kérelmezésben lévő tagjai';
$lang['Group_joined'] = 'A jelentkezés sikeresen megtörtént!<br />A Csoport Moderátora értesíteni fog, ha elfogadta a kérelmedet.';
$lang['Group_request'] = 'A csatlakozási kérelmed elkészült.';
$lang['Group_approved'] = 'Csatlakozási kérelmed elfogadva.';
$lang['Group_added'] = 'Csatlakoztál a csoporthoz.';
$lang['Already_member_group'] = 'Már tagja vagy ennek a csoportnak';
$lang['User_is_member_group'] = 'A felhasználó már most is tagja ennek a csoportnak';
$lang['Group_type_updated'] = 'Sikeresen megváltozott a Csoport típusa.';

$lang['Could_not_add_user'] = 'A kiválasztott felhasználó nem létezik.';
$lang['Could_not_anon_user'] = 'Nem készíthetsz Névtelen csoporttagot.';

$lang['Confirm_unsub'] = 'Biztos le akarod mondani ezt a csoporttagságot?';
$lang['Confirm_unsub_pending'] = 'A jelentkezésed még nincs jóváhagyva ehhez a csoporthoz, biztosan le akarod mondani?';

$lang['Unsub_success'] = 'Sikeresen lemondtad a Csoporttagságot.';

$lang['Approve_selected'] = 'Kiválasztottak elfogadása';
$lang['Deny_selected'] = 'Kiválaszottak elutasítása';
$lang['Not_logged_in'] = 'Be kell jelentkezned, hogy csatlakozhass egy csoporthoz.';
$lang['Remove_selected'] = 'Kijelölt tagok törlése';
$lang['Add_member'] = 'Tag hozzáadása';
$lang['Not_group_moderator'] = 'Nem vagy a Csoport Moderátora, így nem végezheted el ezeket a módosításokat.';

$lang['Login_to_join'] = 'A csatlakozáshoz, vagy a csoporttagságok irányításához először be kell jelentkezned.';
$lang['This_open_group'] = 'Nyitott csoport, kattints a Tagság kérelmezéséshez';
$lang['This_closed_group'] = 'Zárt csoport, több felhasználó nem engedélyezett.';
$lang['This_hidden_group'] = 'Ehhez a rejtett csoporthoz nem lehet automatikusan új felhasználókat adni!';
$lang['Member_this_group'] = 'A csoport tagja vagy.';
$lang['Pending_this_group'] = 'A csoport Moderátora még nem döntött a felvételedről.';
$lang['Are_group_moderator'] = 'A csoport moderátora vagy.';
$lang['None'] = 'nincsen';

$lang['Subscribe'] = 'Jelentkezés';
$lang['Unsubscribe'] = 'Lemondás';
$lang['View_Information'] = 'Információk a csoportról';


//
// Search
//
$lang['Search_query'] = 'Keresési Feltételek';
$lang['Search_options'] = 'Keresési Beállítások';

$lang['Search_keywords'] = 'Keresés kulcsszó által';
$lang['Search_keywords_explain'] = 'Használhatod az <u>AND</u> (és) szót, hogy a keresésben megadott összes szó benne legyen a találatban, az <u>OR</u> (vagy) szót mellyel a "benne lehet" szavakat választhatod el, és a <u>NO</u> (nem) szót, mellyel kizárhatsz szavakat.<br />Használj *-ot a részleges szavakhoz.';
$lang['Search_author'] = 'Szerző keresése';
$lang['Search_author_explain'] = 'Használj *-ot a részleges szavakhoz';

$lang['Search_for_any'] = 'Keresés bármely kifejezésre';
$lang['Search_for_all'] = 'Keresés az összes kifejezésre';
$lang['Search_title_msg'] = 'Keresés téma címre, és szövegre';
$lang['Search_msg_only'] = 'Csak szövegben keresse';

$lang['Return_first'] = 'A talált témák első'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'karakterének megjelenítése';

$lang['Search_previous'] = 'Régebbi keresés'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Rendezési feltétel';
$lang['Sort_Time'] = 'Beküldés ideje';
$lang['Sort_Post_Subject'] = 'Téma';
$lang['Sort_Topic_Title'] = 'Téma címe';
$lang['Sort_Author'] = 'Szerző';
$lang['Sort_Forum'] = 'Fórum';

$lang['Display_results'] = 'Találatok megjelenítése';
$lang['All_available'] = 'Összes találat';
$lang['No_searchable_forums'] = 'Nincs jogod keresni a fórumban.';

$lang['No_search_match'] = 'A keresési feltételeknek egy fórum, és egy téma sem felelt meg.';
$lang['Found_search_match'] = '%d találat'; // eg. Search found 1 match
$lang['Found_search_matches'] = '%d találat'; // eg. Search found 24 matches

$lang['Close_window'] = 'Ablak bezárása';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Csak a %s küldhetnek Közleményt ebbe a fórumba.';
$lang['Sorry_auth_sticky'] = 'Csak a %s küldhetnek Kiemelt üzenetet ebbe a fórumba.';
$lang['Sorry_auth_read'] = 'Csak a %s olvashatják a fórum témáit.';
$lang['Sorry_auth_post'] = 'Csak a %s nyithatnak új témát ebben a fórumban.';
$lang['Sorry_auth_reply'] = 'Csak a %s válaszolhatnak egy hozzászólásra ebben a fórumban.';
$lang['Sorry_auth_edit'] = 'Csak a %s szerkeszthetnek hozzászólásokat ebben a fórumban.';
$lang['Sorry_auth_delete'] = 'Csak a %s törölhetnek hozzászólásokat ebben a fórumban.';
$lang['Sorry_auth_vote'] = 'Csak a %s szavazhatnak ebben a fórumban.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>vendégek</b>';
$lang['Auth_Registered_Users'] = '<b>regisztrált felhasználók</b>';
$lang['Auth_Users_granted_access'] = '<b>privát engedéllyel rendelkező felhasználók</b>';
$lang['Auth_Moderators'] = '<b>moderátorok</b>';
$lang['Auth_Administrators'] = '<b>adminisztrátorok</b>';

$lang['Not_Moderator'] = 'Nem vagy a fórum moderátora!';
$lang['Not_Authorised'] = 'Nem vagy jogosult erre a műveletre!';

$lang['You_been_banned'] = 'Ki lettél tiltva a Fórumról!<br />A további tudnivalókért vedd fel a kapcsolatot a webmesterrel, vagy az Adminisztrátorral.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 Regisztrált felhasználó és  '; // There are 5 Registered and
$lang['Reg_users_online'] = '%d Regisztrált felhasználó és '; // There are 5 Registered and
$lang['Reg_user_online'] = '%d Regisztrált felhasználó és '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 Rejtett felhasználó van jelen'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d Rejtett felhasználó van jelen'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d Rejtett felhasználó van jelen'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d Vendég van jelen'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 Vendég van jelen'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d Vendég van jelen'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Jelenleg egy felhasználó sem böngészi a Fórum oldalait';

$lang['Online_explain'] = 'A fenti adat az elmúlt 5 perc alapján készült.';

$lang['Forum_Location'] = 'Fórum helye';
$lang['Last_updated'] = 'Legutóbb frissített';

$lang['Forum_index'] = 'Fórum index';
$lang['Logging_on'] = 'Bejelentkezés';
$lang['Posting_message'] = 'Üzenet küldése';
$lang['Searching_forums'] = 'Fórumok keresése';
$lang['Viewing_profile'] = 'Profil megtekintése';
$lang['Viewing_online'] = 'Jelenlévő felhasználók megtekintése';
$lang['Viewing_member_list'] = 'Taglista megtekintése';
$lang['Viewing_priv_msgs'] = 'Privát üzenetek megtekintése';
$lang['Viewing_FAQ'] = 'Gy.I.K. megtekintése';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderátor Vezérlőpult';
$lang['Mod_CP_explain'] = 'Az alábbi mezők használatával lehet kezelni a fórumot, pld. lezárás, megnyitás, áthelyezés, törlés.';

$lang['Select'] = 'Kiválaszt';
$lang['Delete'] = 'Töröl';
$lang['Move'] = 'Áthelyez';
$lang['Lock'] = 'Lezár';
$lang['Unlock'] = 'Megnyit';

$lang['Topics_Removed'] = 'A kiválaszott témák sikeresen törölve lettek az adatbázisból!';
$lang['Topics_Locked'] = 'A kiválaszott témák le lettek zárva!';
$lang['Topics_Moved'] = 'A kiválaszott témák sikeresen átkerültek az új helyre!';
$lang['Topics_Unlocked'] = 'A kiválaszott témák megnyíltak!';
$lang['No_Topics_Moved'] = 'Nem lett áthelyezve téma!';

$lang['Confirm_delete_topic'] = 'Biztosan el akarod távolítani a kiválaszott témá(ka)t?';
$lang['Confirm_lock_topic'] = 'Biztosan le akarod zárni a kiválasztott témá(ka)t?';
$lang['Confirm_unlock_topic'] = 'Biztosan meg akarod nyitni a kiválasztott témá(ka)t?';
$lang['Confirm_move_topic'] = 'Biztosan át akarod helyezni a kiválasztott témá(ka)t?';

$lang['Move_to_forum'] = 'Áthelyezés a következő fórumba:';
$lang['Leave_shadow_topic'] = 'Árnyék-téma hagyása a régi fórumban.';

$lang['Split_Topic'] = 'Téma-szétválasztó';
$lang['Split_Topic_explain'] = 'Az alábbi mezők használatával egy témát kétféleképpen választhatsz szét: vagy az adott hozzászólások kiemelésével, vagy egy adott hozzászólástól számítva';
$lang['Split_title'] = 'A téma új címe';
$lang['Split_forum'] = 'A téma új fóruma';
$lang['Split_posts'] = 'Megjelölt hozzászólások szétválasztása';
$lang['Split_after'] = 'Szétválasztás a bejelölt hozzászólástól';
$lang['Topic_split'] = 'A téma szétválasztása sikerült!';

$lang['Too_many_error'] = 'Túl sok hozzászólást választottál ki. Csak egy hozzászólást válassz ki, az utána következők is kiemelődnek!';

$lang['None_selected'] = 'A művelet végrahajtásához témát is ki kell választani. Lépj vissza, és válassz ki legalább egyet.';
$lang['New_forum'] = 'Új fórum';

$lang['This_posts_IP'] = 'A hozzászólás IP-je';
$lang['Other_IP_this_user'] = 'A felhasználóhoz tartozó egyéb IP-címek';
$lang['Users_this_IP'] = 'Az IP-hez tartozó felhasználók';
$lang['IP_info'] = 'IP információ';
$lang['Lookup_IP'] = 'IP keresése';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Időzóna: %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = '(GMT -12 óra)';
$lang['-11'] = '(GMT -11 óra)';
$lang['-10'] = '(GMT -10 óra)';
$lang['-9'] = '(GMT -9 óra)';
$lang['-8'] = '(GMT -8 óra)';
$lang['-7'] = '(GMT -7 óra)';
$lang['-6'] = '(GMT -6 óra)';
$lang['-5'] = '(GMT -5 óra)';
$lang['-4'] = '(GMT -4 óra)';
$lang['-3.5'] = '(GMT -3.5 óra)';
$lang['-3'] = '(GMT -3 óra)';
$lang['-2'] = '(GMT -2 óra)';
$lang['-1'] = '(GMT -1 óra)';
$lang['0'] = '(GMT 0) ';
$lang['1'] = '(GMT +1 óra)';
$lang['2'] = '(GMT +2 óra)';
$lang['3'] = '(GMT +3 óra)';
$lang['3.5'] = '(GMT +3.5 óra)';
$lang['4'] = '(GMT +4 óra)';
$lang['4.5'] = '(GMT +4.5 óra)';
$lang['5'] = '(GMT +5 óra)';
$lang['5.5'] = '(GMT +5.5 óra)';
$lang['6'] = '(GMT +6 óra)';
$lang['6.5'] = '(GMT +6.5 óra)';
$lang['7'] = '(GMT +7 óra)';
$lang['8'] = '(GMT +8 óra)';
$lang['9'] = '(GMT +9 óra)';
$lang['9.5'] = '(GMT +9.5 óra)';
$lang['10'] = '(GMT +10 óra)';
$lang['11'] = '(GMT +11 óra)';
$lang['12'] = '(GMT +12 óra)';
$lang['13'] = 'GMT + 13 óra';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 óra) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 óra) Midway-sziget, Szamoa';
$lang['tz']['-10'] = '(GMT -10 óra) Hawaii';
$lang['tz']['-9'] = '(GMT -9 óra) Alaszka';
$lang['tz']['-8'] = '(GMT -8 óra) Csendes-óceáni idő, Tijuana';
$lang['tz']['-7'] = '(GMT -7 óra) Arizona, Hegyi idő';
$lang['tz']['-6'] = '(GMT -6 óra) Amerikai középidő, Közép-Amerika, Mexikóváros';
$lang['tz']['-5'] = '(GMT -5 óra) Bogota, Lima, Quito, Indiana, Keleti idő';
$lang['tz']['-4'] = '(GMT -4 óra) Atlanti-óceáni idő, Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 óra) Új-Founland';
$lang['tz']['-3'] = '(GMT -3 óra) Brazília, Buenos Aires, Georgetown, Grönland';
$lang['tz']['-2'] = '(GMT -2 óra) Közép-atlanti időzóna';
$lang['tz']['-1'] = '(GMT -1 óra) Azori-szigetek, Zöld-foki-szigetek';
$lang['tz']['0'] = '(GMT 0) Greenwich, London, Dublin, Lisszabon';
$lang['tz']['1'] = '(GMT +1 óra) Belgrád, Budapest, Ljubljana, Pozsony, Prága';
$lang['tz']['2'] = '(GMT +2 óra) Athén, Isztambul, Minszk, Helsinki';
$lang['tz']['3'] = '(GMT +3 óra) Bagdad, Kuvait, Rijád, Moszkva, Szentpétervár';
$lang['tz']['3.5'] = '(GMT +3.5 óra) Teherán';
$lang['tz']['4'] = '(GMT +4 óra) Baku, Tbiliszi';
$lang['tz']['4.5'] = '(GMT +4.5 óra) Kabul';
$lang['tz']['5'] = '(GMT +5 óra) Iszlámbád, Karacsi, Taskent, Jekatyerinburg';
$lang['tz']['5.5'] = '(GMT +5.5 óra) Chennai, Kalkutta, Mumbai, Új-Delhi';
$lang['tz']['6'] = '(GMT +6 óra) Almaty, Novoszibirszk, Astana, Dhaka';
$lang['tz']['6.5'] = '(GMT +6.5 óra) Rangun';
$lang['tz']['7'] = '(GMT +7 óra) Bangkok, Dzsakarta, Hanoi, Krasznojarszk';
$lang['tz']['8'] = '(GMT +8 óra) Hongkong, Peking, Irkutszk, Ulánbátor, Perth';
$lang['tz']['9'] = '(GMT +9 óra) Jakutszk, Oszkara, Szapporo, Tokió, Szöul';
$lang['tz']['9.5'] = '(GMT +9.5 óra) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 óra) Brisbane, Canberra, Melbourne, Sydney, Guam';
$lang['tz']['11'] = '(GMT +11 óra) Magadán, Salamon-szigetek, Új Kaledónia';
$lang['tz']['12'] = '(GMT +12 óra) Auckland, Wellington, Fidzsi-szigetek, Kamcsatka';

$lang['datetime']['Sunday'] = 'Vasárnap';
$lang['datetime']['Monday'] = 'Hétfő';
$lang['datetime']['Tuesday'] = 'Kedd';
$lang['datetime']['Wednesday'] = 'Szerda';
$lang['datetime']['Thursday'] = 'Csütörtök';
$lang['datetime']['Friday'] = 'Péntek';
$lang['datetime']['Saturday'] = 'Szombat';
$lang['datetime']['Sun'] = 'Vas.';
$lang['datetime']['Mon'] = 'Hétf.';
$lang['datetime']['Tue'] = 'Kedd.';
$lang['datetime']['Wed'] = 'Szer.';
$lang['datetime']['Thu'] = 'Csüt.';
$lang['datetime']['Fri'] = 'Pént.';
$lang['datetime']['Sat'] = 'Szomb.';
$lang['datetime']['January'] = 'Január';
$lang['datetime']['February'] = 'Február';
$lang['datetime']['March'] = 'Március';
$lang['datetime']['April'] = 'Április';
$lang['datetime']['May'] = 'Május';
$lang['datetime']['June'] = 'Június';
$lang['datetime']['July'] = 'Július';
$lang['datetime']['August'] = 'Augusztus';
$lang['datetime']['September'] = 'Szeptember';
$lang['datetime']['October'] = 'Október';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'December';
$lang['datetime']['Jan'] = 'Jan.';
$lang['datetime']['Feb'] = 'Feb.';
$lang['datetime']['Mar'] = 'Márc.';
$lang['datetime']['Apr'] = 'Ápr.';
$lang['datetime']['May'] = 'Máj.';
$lang['datetime']['Jun'] = 'Jún.';
$lang['datetime']['Jul'] = 'Júl.';
$lang['datetime']['Aug'] = 'Aug.';
$lang['datetime']['Sep'] = 'Szept.';
$lang['datetime']['Oct'] = 'Okt.';
$lang['datetime']['Nov'] = 'Nov.';
$lang['datetime']['Dec'] = 'Dec.';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Információ';
$lang['Critical_Information'] = 'Kritikus információ';

$lang['General_Error'] = 'Általános hiba';
$lang['Critical_Error'] = 'Kritikus hiba';
$lang['An_error_occured'] = 'Hiba adódott';
$lang['A_critical_error'] = 'Kritikus hiba adódott';

//
// That's all, Folks!
// -------------------------------------------------

?>