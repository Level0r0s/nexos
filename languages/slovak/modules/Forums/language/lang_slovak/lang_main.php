<?php
/***************************************************************************
 *                            lang_main.php [Slovak]
 *                            ---------------------
 *     characterset         : Windows-1250
 *     begin                : 10-08-2002
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : kolenka@stonline.sk
 *     convert2iso          : Kukymann
 *     www                  : 
 *
 *     $Id: lang_main.php,v 1.1 2004/08/04 01:20:54 akamu Exp $
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
// Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = "utf-8";
$lang['DIRECTION'] = "LTR";
$lang['LEFT'] = "LEFT";
$lang['RIGHT'] = "RIGHT";
$lang['DATE_FORMAT'] =  "d.m.Y"; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "Fórum";
$lang['Category'] = "Kategória";
$lang['Topic'] = "Téma";
$lang['Topics'] = "Témy";
$lang['Replies'] = "Odpovede";
$lang['Views'] = "Prezreté";
$lang['Post'] = "Príspevok";
$lang['Posts'] = "Príspevky";
$lang['Posted'] = "Zaslal";
$lang['Username'] = "Užívateľ";
$lang['Password'] = "Heslo";
$lang['Email'] = "E-mail";
$lang['Poster'] = "Odosielateľ";
$lang['Author'] = "Autor";
$lang['Time'] = "Čas";
$lang['Hours'] = "Hodín";
$lang['Message'] = "Správa";

$lang['1_Day'] = "1 deň";
$lang['7_Days'] = "1 týždeň";
$lang['2_Weeks'] = "2 týždne";
$lang['1_Month'] = "1 mesiac";
$lang['3_Months'] = "3 mesiace";
$lang['6_Months'] = "6 mesiacov";
$lang['1_Year'] = "1 rok";

$lang['Go'] = "Zobraz";
$lang['Jump_to'] = "Prejdi na";
$lang['Submit'] = "Odoslať";
$lang['Reset'] = "Pôvodné hodnoty";
$lang['Cancel'] = "Storno";
$lang['Preview'] = "Náhľad";
$lang['Confirm'] = "Potvrdiť";
$lang['Spellcheck'] = "Kontrola pravopisu";
$lang['Yes'] = "Áno";
$lang['No'] = "Nie";
$lang['Enabled'] = "Povolené";
$lang['Disabled'] = "Zakázané";
$lang['Error'] = "Chyba";

$lang['Next'] = "Ďalší";
$lang['Previous'] = "Predchádzajúci";
$lang['Goto_page'] = "Choď na stránku";
$lang['Joined'] = "Založený";
$lang['IP_Address'] = "IP Adresa";

$lang['Select_forum'] = "Zvoľte fórum";
$lang['View_latest_post'] = "Zobraziť posledný príspevok";
$lang['View_newest_post'] = "Zobraz najnovšie príspevky";
$lang['Page_of'] = "Strana <b>%d</b> z <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ";
$lang['AIM'] = "AOL Instant Messenger";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "Obsah fóra %s";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Odoslať novú tému";
$lang['Reply_to_topic'] = "Odpovedať na tému";
$lang['Reply_with_quote'] = "Odpovedať s citátom";

$lang['Click_return_topic'] = "Kliknite %ssem%s pre návrat do zoznamu tém"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Kliknite %ssem%s pre opakovanie voľby";
$lang['Click_return_forum'] = "Kliknite %ssem%s pre návrat do fóra";
$lang['Click_view_message'] = "Kliknite %ssem%s pre zobrazenie Vašej správy";
$lang['Click_return_modcp'] = "Kliknite %ssem%s pre návrat do moderátorského ovládacieho panelu";
$lang['Click_return_group'] = "Kliknite %ssem%s pre návrat do informácií o skupinách";

$lang['Admin_panel'] = "Administrácia fóra";

$lang['Board_disable'] = "Prepáčte, ale toto fórum je momentálne nedostupné, skúste opakovať voľbu neskôr";


//
// Global Header strings
//
$lang['Registered_users'] = "Registrovaní užívateľia:";
$lang['Browsing_forum'] = "Užívatelia prezerajúci toto fórum:";
$lang['Online_users_zero_total'] = "Celkom je tu prítomných <b>0</b> užívateľov : ";
$lang['Online_users_total'] = "Celkom je tu prítomných <b>%d</b> užívateľov : ";
$lang['Online_user_total'] = "Celkom je tu prítomný <b>%d</b> užívateľ : ";
$lang['Reg_users_zero_total'] = "0 registrovaných, ";
$lang['Reg_users_total'] = "%d registrovaných, ";
$lang['Reg_user_total'] = "%d registrovaný, ";
$lang['Hidden_users_zero_total'] = "0 skrytých a ";
$lang['Hidden_user_total'] = "%d skrytý a ";
$lang['Hidden_users_total'] = "%d skrytých a ";
$lang['Guest_users_zero_total'] = "0 anonymných";
$lang['Guest_users_total'] = "%d Anonymných";
$lang['Guest_user_total'] = "%d Anonymný";
$lang['Record_online_users'] = "Najviac tu bolo súčasne prítomných <b>%s</b> užívateľov dňa %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sAdministrátori%s";
$lang['Mod_online_color'] = "%sModerátori%s";

$lang['You_last_visit'] = "Naposledy ste tu bol(a) %s"; // %s replaced by date/time
$lang['Current_time'] = "Práve je %s"; // %s replaced by time

$lang['Search_new'] = "Zobraziť nové príspevky od poslednej návštevy";
$lang['Search_your_posts'] = "Zobraziť vaše príspevky";
$lang['Search_unanswered'] = "Zobraziť príspevky bez odpovedí";

$lang['Register'] = "Registrácia";
$lang['Profile'] = "Nastavenia";
$lang['Edit_profile'] = "Zmena nastavení";
$lang['Search'] = "Hľadať";
$lang['Memberlist'] = "Zoznam užívateľov";
$lang['FAQ'] = "FAQ";
$lang['BBCode_guide'] = "Sprievodca značkami";
$lang['Usergroups'] = "Užívateľské skupiny";
$lang['Last_Post'] = "Posledný príspevok";
$lang['Moderator'] = "Moderátor";
$lang['Moderators'] = "Moderátori";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "Užívatelia zaslali celkom <b>0</b> príspevkov"; // Number of posts
$lang['Posted_articles_total'] = "Užívatelia zaslali celkom <b>%d</b> príspevkov"; // Number of posts
$lang['Posted_article_total'] = "Užívatelia zaslali celkom <b>%d</b> príspevok"; // Number of posts
$lang['Registered_users_zero_total'] = "Je tu <b>0</b> registrovaných užívateľov"; // # registered users
$lang['Registered_users_total'] = "Je tu <b>%d</b> registrovaných užívateľov"; // # registered users
$lang['Registered_user_total'] = "Je tu <b>%d</b> registrovaný užívateľ"; // # registered users
$lang['Newest_user'] = "Najnovším registrovaným užívateľom je <b>%s%s%s</b>"; // a href, username, /a

$lang['No_new_posts_last_visit'] = "Žiadne nové príspevky od Vašej poslednej návštevy";
$lang['No_new_posts'] = "Žiadne nové príspevky";
$lang['New_posts'] = "Nové príspevky";
$lang['New_post'] = "Nový príspevok";
$lang['No_new_posts_hot'] = "Žiadne nové príspevky [ obľúbené ]";
$lang['New_posts_hot'] = "Nové príspevky [ obľúbené ]";
$lang['No_new_posts_locked'] = "Žiadne nové príspevky [ zamknuté ]";
$lang['New_posts_locked'] = "Nové príspevky [ zamknuté ]";
$lang['Forum_is_locked'] = "Fórum je zamknuté";


//
// Login
//
$lang['Enter_password'] = "Zadajte prosím Vaše užívateľské meno a heslo";
$lang['Login'] = "Prihlásenie";
$lang['Logout'] = "Odhlásenie";

$lang['Forgotten_password'] = "Zabudli ste svoje heslo ?";

$lang['Log_me_in'] = "Prihlásiť automaticky pri ďalšej návšteve";

$lang['Error_login'] = "Bolo zadané neplatné užívateľské meno alebo heslo";


//
// Index page
//
$lang['Index'] = "Fórum";
$lang['No_Posts'] = "Žiadne príspevky";
$lang['No_forums'] = "Žiadne fóra";

$lang['Private_Message'] = "Súkromná správa";
$lang['Private_Messages'] = "Súkromné správy";
$lang['Who_is_Online'] = "Kto je prítomný";

$lang['Mark_all_forums'] = "Označiť všetky fóra ako prečítané";
$lang['Forums_marked_read'] = "Všetky fóra boli označené ako prečítané";


//
// Viewforum
//
$lang['View_forum'] = "Zobraziť fórum";

$lang['Forum_not_exist'] = "Zvolené fórum neexistuje";
$lang['Reached_on_error'] = "Došlo k chybe na tejto stránke";

$lang['Display_topics'] = "Zobraziť témy za predchádzajúce";
$lang['All_Topics'] = "Všetky témy";

$lang['Topic_Announcement'] = "<b>Oznámenia:</b>";
$lang['Topic_Sticky'] = "<b>Dôležité:</b>";
$lang['Topic_Moved'] = "<b>Presunuté:</b>";
$lang['Topic_Poll'] = "<b>[ Hlasovanie ]</b>";

$lang['Mark_all_topics'] = "Označiť všetky témy ako prečítané";
$lang['Topics_marked_read'] = "Témy tohto fóra boli označené ako prečítané";

$lang['Rules_post_can'] = "<b>Môžete</b> odosielať nové témy do tohto fóra";
$lang['Rules_post_cannot'] = "<b>Nemôžete</b> odosielať nové témy do tohto fóra";
$lang['Rules_reply_can'] = "<b>Môžete</b> odpovedať na témy v tomto fóre";
$lang['Rules_reply_cannot'] = "<b>Nemôžete</b> odpovedať na témy v tomto fóre";
$lang['Rules_edit_can'] = "<b>Môžete</b> upravovať svoje príspevky v tomto fóre";
$lang['Rules_edit_cannot'] = "<b>Nemôžete</b> upravovať svoje príspevky v tomto fóre";
$lang['Rules_delete_can'] = "<b>Môžete</b> mazať svoje príspevky v tomto fóre";
$lang['Rules_delete_cannot'] = "<b>Nemôžete</b> mazať svoje príspevky v tomto fóre";
$lang['Rules_vote_can'] = "<b>Môžete</b> hlasovať v tomto fóre";
$lang['Rules_vote_cannot'] = "<b>Nemôžete</b> hlasovať v tomto fóre";
$lang['Rules_moderate'] = "<b>Môžete</b> %smoderovať toto fórum%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "Toto fórum neobsahuje žiadne témy<br />Kliknite na odkaz <b>Nové téma</b> pre pridanie novej témy.";


//
// Viewtopic
//
$lang['View_topic'] = "Zobraziť tému";

$lang['Guest'] = 'Anonymný';
$lang['Post_subject'] = "Predmet";
$lang['View_next_topic'] = "Zobraziť nasledujúcu tému";
$lang['View_previous_topic'] = "Zobraziť predchádzajúcu tému";
$lang['Submit_vote'] = "Odoslať hlas";
$lang['View_results'] = "Zobraziť výsledok";

$lang['No_newer_topics'] = "V tomto fóre nie sú žiadne novšie témy";
$lang['No_older_topics'] = "V tomto fóre nie sú žiadne staršie témy";
$lang['Topic_post_not_exist'] = "Téma alebo príspevok, ktorý požadujete, nebol nájdený";
$lang['No_posts_topic'] = "Pre túto tému neexistujú žiadne príspevky";

$lang['Display_posts'] = "Zobraziť príspevky z predchádzajúcich";
$lang['All_Posts'] = "Všetky príspevky";
$lang['Newest_First'] = "Najskôr najnovšie";
$lang['Oldest_First'] = "Najskôr nejstaršie";

$lang['Back_to_top'] = "Návrat hore";

$lang['Read_profile'] = "Zobrazit informácie o autorovi";
$lang['Send_email'] = "Odoslať e-mail autorovi";
$lang['Visit_website'] = "Zobraziť autorove WWW stránky";
$lang['ICQ_status'] = "ICQ stav";
$lang['Edit_delete_post'] = "Upraviť/Odstrániť tento príspevok";
$lang['View_IP'] = "Zobrazit IP adresu odosielateľa";
$lang['Delete_post'] = "Odstrániť tento príspevok";

$lang['wrote'] = "Napísal"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Citácia"; // comes before bbcode quote output.
$lang['Code'] = "Kód"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Naposledy upravil %s dňa %s, celkom upravené %d krát"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "Naposledy upravil %s dňa %s, celkom upravené %d krát"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "Zamknúť túto tému";
$lang['Unlock_topic'] = "Odomknúť túto tému";
$lang['Move_topic'] = "Presunúť túto tému";
$lang['Delete_topic'] = "Odstrániť túto tému";
$lang['Split_topic'] = "Rozdeliť túto tému";

$lang['Stop_watching_topic'] = "Ukončiť sledovanie tejto témy";
$lang['Start_watching_topic'] = "Sledovať odpovede na túto tému";
$lang['No_longer_watching'] = "Prestal(a) ste sledovať túto tému";
$lang['You_are_watching'] = "Začal(a) ste sledovať túto tému";

$lang['Total_votes'] = "Celkom hlasov";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Telo správy";
$lang['Topic_review'] = "Prehľad témy";

$lang['No_post_mode'] = "Nebol zvolený typ odoslania"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Odoslať novú tému";
$lang['Post_a_reply'] = "Odoslať odpoveď";
$lang['Post_topic_as'] = "Odoslať tému ako";
$lang['Edit_Post'] = "Upraviť príspevok";
$lang['Options'] = "Predvoľby";

$lang['Post_Announcement'] = "Oznámenie";
$lang['Post_Sticky'] = "Dôležité";
$lang['Post_Normal'] = "Normálny";

$lang['Confirm_delete'] = "Skutočne chcete odstrániť tento príspevok ?";
$lang['Confirm_delete_poll'] = "Skutočne chcete odstrániť toto Vaše hlasovanie ?";

$lang['Flood_Error'] = "Nemôžete odoslať nový príspevok takto skoro po predchádzajúcom príspevku, chvíľu počkajte a skúste to znova";
$lang['Empty_subject'] = "Musíte zadať text predmetu";
$lang['Empty_message'] = "Musíte zadať text príspevku";
$lang['Forum_locked'] = "Toto fórum je zamknuté, nemôžete tu písať ani upravovať príspevky";
$lang['Topic_locked'] = "Táto téma je zamknutá bez možností úpravy príspevkov a písania odpovedí";
$lang['No_post_id'] = "Musíte zvoliť príspevok pre úpravu";
$lang['No_topic_id'] = "Musíte zvoliť tému na kterú chcete odpovedať";
$lang['No_valid_mode'] = "Môžete len odosielať, upravovať alebo citovať príspevky, vykonajte návrat späť a skúste to znova";
$lang['No_such_post'] = "Takýto príspevok neexistuje, vykovajte návrat späť a skúste to znova";
$lang['Edit_own_posts'] = "Prepáčte, ale môžete upravovať len svoje príspevky";
$lang['Delete_own_posts'] = "Prepáčte, ale môžete mazať len svoje príspevky";
$lang['Cannot_delete_replied'] = "Prepáčte, ale nemôžete mazať príspevky, na ktoré už bola odpoveď";
$lang['Cannot_delete_poll'] = "Prepáčte, ale nemôžete vymazať aktívne hlasovanie";
$lang['Empty_poll_title'] = "Musíte napísať hlasovaciu otázku";
$lang['To_few_poll_options'] = "Musíte napísať aspoň dve hlasovacie možnosti";
$lang['To_many_poll_options'] = "Pokúšate sa napísať príliš veľa hlasovacích možností";
$lang['Post_has_no_poll'] = "Tento príspevok nemá hlasovanie";
$lang['Already_voted'] = "V tomto hlasovaní ste už hlasoval(a)";
$lang['No_vote_option'] = "Pri hlasovaní musíte zvoliť niektorú z možností";

$lang['Add_poll'] = "Pridať Hlasovanie";
$lang['Add_poll_explain'] = "Ak nechcete pridať možnosť hlasovania k tejto téme, nechajte polia prázdne";
$lang['Poll_question'] = "Hlasovacia otázka";
$lang['Poll_option'] = "Možné odpovede";
$lang['Add_option'] = "Pridať odpoveď";
$lang['Update'] = "Aktualizovať";
$lang['Delete'] = "Odstrániť";
$lang['Poll_for'] = "Dĺžka trvania";
$lang['Days'] = "dní"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "(zadajte 0 alebo nevyplňujte pre neobmedzený čas hlasovania)";
$lang['Delete_poll'] = "Vymazať Hlasovanie";

$lang['Disable_HTML_post'] = "Zakázať HTML v tomto príspevku";
$lang['Disable_BBCode_post'] = "Zakázať značky v tomto príspevku";
$lang['Disable_Smilies_post'] = "Zakázať Smajlíky v tomto príspevku";

$lang['HTML_is_ON'] = "HTML: <u>POVOLENÉO</u>";
$lang['HTML_is_OFF'] = "HTML: <u>VYPNUTÉ</u>";
$lang['BBCode_is_ON'] = "%sZnačky%s: <u>POVOLENÉ</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sZnačky%s: <u>VYPNUTÉ</u>";
$lang['Smilies_are_ON'] = "Smajlíky: <u>POVOLENÉ</u>";
$lang['Smilies_are_OFF'] = "Smajlíky: <u>VYPNUTÉ</u>";

$lang['Attach_signature'] = "Pripojiť podpis (podpis môžete zmeniť ve Vašom nastavení)";
$lang['Notify'] = "Upozorniť ma, ak príde odpoveď";
$lang['Delete_post'] = "Odstrániť tento príspevok";

$lang['Stored'] = "Vaša správa bola úspešne odoslaná";
$lang['Deleted'] = "Vaša správa bola úspešne odstránená";
$lang['Poll_delete'] = "Váš hlas bol úspešne odstránený";
$lang['Vote_cast'] = "Váš hlas bol prijatý";

$lang['Topic_reply_notification'] = "Upozornenie na odpoveď";

$lang['bbcode_b_help'] = "Tučné: [b]text[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Kurzíva: [i]text[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Počiarknuté: [u]text[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Citácia: [quote]text[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Zobrazenie kódu: [code]code[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Zoznam: [list]text[/list] (alt+l)";
$lang['bbcode_o_help'] = "Usporiadaný zoznam: [list=]text[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Vložiť obrázok: [img]http://image_url[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Vložiť URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Zavrre všetky otvorené značky";
$lang['bbcode_s_help'] = "Farba písma: [color=red]text[/color]  Typ: môžete použiť tiež color=#FF0000";
$lang['bbcode_f_help'] = "Veľkosť písma: [size=x-small]malý text[/size]";

$lang['Emoticons'] = "Smajlíky (emotikony)";
$lang['More_emoticons'] = "Zobraziť ďalšie smajlíky (emotikony)";

$lang['Font_color'] = "Farba písma";
$lang['color_default'] = "Predvolená";
$lang['color_dark_red'] = "Gaštanová";
$lang['color_red'] = "Červená";
$lang['color_orange'] = "Oranžová";
$lang['color_brown'] = "Hnedá";
$lang['color_yellow'] = "Žltá";
$lang['color_green'] = "Zelená";
$lang['color_olive'] = "Olivová";
$lang['color_cyan'] = "Akvamarínová";
$lang['color_blue'] = "Modrá";
$lang['color_dark_blue'] = "Tmavomodrá";
$lang['color_indigo'] = "Fialová";
$lang['color_violet'] = "Fuchsiová";
$lang['color_white'] = "Biela";
$lang['color_black'] = "Čierna";

$lang['Font_size'] = "Veľkosť písma";
$lang['font_tiny'] = "Drobné";
$lang['font_small'] = "Malé";
$lang['font_normal'] = "Predvolené";
$lang['font_large'] = "Veľké";
$lang['font_huge'] = "Obrovské";

$lang['Close_Tags'] = "Zavrieť značky";
$lang['Styles_tip'] = "Tip: Štýl môžete aplikovať rýchlejšie na označenom texte";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Súkronmé správy";

$lang['Login_check_pm'] = "Prihlásiť, pre kontrolu súkromných správ";
$lang['New_pms'] = "Máte %d nových správ"; // You have 2 new messages
$lang['New_pm'] = "Máte %d novú správu"; // You have 1 new message
$lang['No_new_pm'] = "Nemáte nové správy";
$lang['Unread_pms'] = "Máte %d neprečítané správy";
$lang['Unread_pm'] = "Máte %d neprečítanú správu";
$lang['No_unread_pm'] = "Nemáte neprečítané správy";
$lang['You_new_pm'] = "Nová súkromná apráva čaká na prečítanie v doručených správach";
$lang['You_new_pms'] = "Nové súkromné správy čekajú na prečítanie v doručených správach";
$lang['You_no_new_pm'] = "Žiadne nové súkromné správy nečakajú";

$lang['Unread_message'] = 'Neprečítaná správa';
$lang['Read_message'] = 'Čítať správu';

$lang['Read_pm'] = 'Čítať správu';
$lang['Post_new_pm'] = 'Poslať správu';
$lang['Post_reply_pm'] = 'Odpovedať na správu';
$lang['Post_quote_pm'] = 'Citovať zo správy';
$lang['Edit_pm'] = 'Upraviť správu';

$lang['Inbox'] = "Doručené";
$lang['Outbox'] = "Nedoručené";
$lang['Savebox'] = "Uložené";
$lang['Sentbox'] = "Odoslané";
$lang['Flag'] = "Príznak";
$lang['Subject'] = "Predmet";
$lang['From'] = "Od";
$lang['To'] = "Komu";
$lang['Date'] = "Dátum";
$lang['Mark'] = "Označiť";
$lang['Sent'] = "Poslané";
$lang['Saved'] = "Uložené";
$lang['Delete_marked'] = "Odstrániť označené";
$lang['Delete_all'] = "Odstrániť všetko";
$lang['Save_marked'] = "Uložiť označené";
$lang['Save_message'] = "Uložiť správu";
$lang['Delete_message'] = "Odstránit správu";

$lang['Display_messages'] = "Zobraziť správy za predchádzajúce"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "Všetky správy";

$lang['No_messages_folder'] = "Nemáte žiadne správy v tejto zložke";

$lang['PM_disabled'] = "Súkromné správy tu boli vypnuté";
$lang['Cannot_send_privmsg'] = "Prepáčte, ale administrátor Vám neumožnil posielanie súkromných správ";
$lang['No_to_user'] = "Musíte zadať užívateľské meno aby ste mohol(a) odoslať túto správu";
$lang['No_such_user'] = "Tento užívateľ nie je zaregistrovaný";

$lang['Disable_HTML_pm'] = "Zakázať HTML v tejto správe";
$lang['Disable_BBCode_pm'] = "Zakázať Značky v tejto správe";
$lang['Disable_Smilies_pm'] = "Zakázať smajlíky (emotikony) v tejto správe";

$lang['Message_sent'] = "Vaša správa bola odoslaná";

$lang['Click_return_inbox'] = "Kliknite %ssem%s pre návrat do doručených";
$lang['Click_return_index'] = "Kliknete %ssem%s pre návrat na obsah";

$lang['Send_a_new_message'] = "Odoslať novú súkromnú správu";
$lang['Send_a_reply'] = "Odpovedať na súkromnú správu";
$lang['Edit_message'] = "Upraviť súkromnú správu";

$lang['Notification_subject'] = "Prišla nová súkromná správa";

$lang['Find_username'] = "Hľadať užívateľa";
$lang['Find'] = "Hťadať";
$lang['No_match'] = "Žiadny výsledok";

$lang['No_post_id'] = "Nebolo zvolené ID správy";
$lang['No_such_folder'] = "Požadovaná zložka neexistuje";
$lang['No_folder'] = "Nebola zvolená zložka";

$lang['Mark_all'] = "Označiť všetko";
$lang['Unmark_all'] = "Odznačiť všetko";

$lang['Confirm_delete_pm'] = "Skutočne chcete odstrániť túto správu ?";
$lang['Confirm_delete_pms'] = "Skutočne chcete odstrániť tieto správy ?";

$lang['Inbox_size'] = "Schránka je zaplnená z %d%%"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Schránka je zaplnená z %d%%";
$lang['Savebox_size'] = "Schránka je zaplnená z %d%%";

$lang['Click_view_privmsg'] = "Kliknite %ssem%s pre zobrazenie obsahu prichádzajúcich správ";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Informácie o užívateľovi: %s"; // %s is username
$lang['About_user'] = "Všetko o užívateľovi %s"; // %s is username

$lang['Preferences'] = "Možnosti";
$lang['Items_required'] = "Polia označené \"*\" sú povinné a musia byť vyplnené";
$lang['Registration_info'] = "Registračné údaje";
$lang['Profile_info'] = "Osobné údaje";
$lang['Profile_info_warn'] = "Tieto informácie budú verejne zobraziteľné";
$lang['Avatar_panel'] = "Obrázky postavičiek";
$lang['Avatar_gallery'] = "Galérie postavičiek";

$lang['Website'] = "WWW";
$lang['Location'] = "Bydlisko";
$lang['Contact'] = "Kontakt";
$lang['Email_address'] = "E-mailová adresa";
$lang['Email'] = "E-mail";
$lang['Send_private_message'] = "Odoslať súkromnú správu";
$lang['Hidden_email'] = "[ skrytý ]";
$lang['Search_user_posts'] = "Hľadať príspevky tohto užívateľia";
$lang['Interests'] = "Záujmy";
$lang['Occupation'] = "Povolanie"; 
$lang['Poster_rank'] = "Odosilateľovo hodnotenie";

$lang['Total_posts'] = "Príspevkov";
$lang['User_post_pct_stats'] = "%.2f%% zo všetkých príspevkov"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f príspevkov za deň"; // 1.5 posts per day
$lang['Search_user_posts'] = "Hľadať všetky príspevky od užívateľa %s"; // Find all posts by username

$lang['No_user_id_specified'] = "Prepáčte, ale tento užívateľ neexistuje";
$lang['Wrong_Profile'] = "Nemôžete modifikovať toto nastavenie, pretože nie ste jeho vlastníkom";

$lang['Only_one_avatar'] = "Môže byť vybratý len jeden obrázok postavičky";
$lang['File_no_data'] = "Súubor na zadanej URL adrese neobsahuje žiadne dáta";
$lang['No_connection_URL'] = "Nie je možné naviazať spojenie so zadanou URL adresou";
$lang['Incomplete_URL'] = "Vami zadaná URL adresa nie je kompletná";
$lang['Wrong_remote_avatar_format'] = "URL adresa vzdialeného obrázku postavičky nie je dostupná";
$lang['No_send_account_inactive'] = "Prepáčte, ale Vaše heslo nemôže byť nájdené, pretože je Váš účet momentálne aktívny. Pre viac informácií kontaktujte administrátora tohto fóra";

$lang['Always_smile'] = "Vždy povoliť smajlíky";
$lang['Always_html'] = "Vždy povoliť HTML";
$lang['Always_bbcode'] = "Vždy povoliť značky";
$lang['Always_add_sig'] = "Vždy pripojiť môj podpis";
$lang['Always_notify'] = "Vždy ma upozorniť na odpovede";
$lang['Always_notify_explain'] = "Poslať e-mail, keď nikto odpovie na Vami poslanú tému. Toto môže byť zmenené kedykoľvek pred odoslaním";

$lang['Board_style'] = "Vzhľad fóra";
$lang['Board_lang'] = "Jazyk fóra";
$lang['No_themes'] = "Vzhľad nie je v databáze";
$lang['Timezone'] = "Časové pásmo";
$lang['Date_format'] = "Formát dátumu a času";
$lang['Date_format_explain'] = "Použitá syntax je zhodná s PHP funkciou <a href=\"http://www.php.net/date\" target=\"_other\">date()</a>";
$lang['Signature'] = "Podpis";
$lang['Signature_explain'] = "Text, ktorý môže byť pridávaný do Vašich príspevkov<br>Maximálne %d znakov";
$lang['Public_view_email'] = "Vždy zobrazovať moju e-mailovú adresu";

$lang['Current_password'] = "Aktuálne heslo";
$lang['New_password'] = "Nové heslo";
$lang['Confirm_password'] = "Potvdenie hesla";
$lang['Confirm_password_explain'] = "Pokiaľ chcete zmeniť heslo alebo upraviť e-mailovú adresu, musíte zadaľ Vaše aktuálne heslo";
$lang['password_if_changed'] = "Vyplňte pokiaľ chcete zmeniť aktuálne heslo";
$lang['password_confirm_if_changed'] = "Vyplňte pre potvrdenie, pokiaľ chcete zmeniť vaše aktuálne heslo";

$lang['Avatar'] = "Obrázok postavičky";
$lang['Avatar_explain'] = "Zobraziť malý obrázok postavičky pod podrobnosťami v príspevkoch. Len jeden obrázok postavičky bude zobrazený, jeho šírka by nemala byť väčšia ako %d bodov a výška %d bodov a veľkosť súboru by nemala presahovať %dkB.";
$lang['Upload_Avatar_file'] = "Prihrať obrázok postavičky zo svojho počítača";
$lang['Upload_Avatar_URL'] = "Nahrať obrázok postavičky z URL";
$lang['Upload_Avatar_URL_explain'] = "Zadajte URL umiestnenia obrázku postavičky, pre skopírovanie na tento server.";
$lang['Pick_local_Avatar'] = "Zvoľte obrázok postavičky z galérie";
$lang['Link_remote_Avatar'] = "Odkaz na vzdialený obrázok postavičky";
$lang['Link_remote_Avatar_explain'] = "Zadajte URL umiestnenia obrázku postavičky, na ktorý chcete odkázať.";
$lang['Avatar_URL'] = "URL adresa obrázku s postavičkou";
$lang['Select_from_gallery'] = "Zvoľte obrázok postavičky z galérie";
$lang['View_avatar_gallery'] = "Zobrazit galériu postavičiek";

$lang['Select_avatar'] = "Zvoľte obrázok postavičky";
$lang['Return_profile'] = "Návrat do nastavení";
$lang['Select_category'] = "Voľba kategórie";

$lang['Delete_Image'] = "Odstrániť obrázok";
$lang['Current_Image'] = "Aktuálny obrázok";

$lang['Notify_on_privmsg'] = "Upozorniť na príchod novej súkromnej správy";
$lang['Popup_on_privmsg'] = "Otvoriť nové okno pri príchode novej súkromnej správy";
$lang['Popup_on_privmsg_explain'] = "Niektoré šablóny môžu otvoriť nové okno, aby Vás informovali o novej doručenej súkromnej správe";
$lang['Hide_user'] = "Skryť Vašu prítomnosť vo fóre";

$lang['Profile_updated'] = "Vaše nastavenia boli aktualizované";
$lang['Profile_updated_inactive'] = "Vaše nastavenia boli aktualizované, ale keďže ste zmenil(a) dôležité informácie, je teraz Váš účet neaktívny. Skontrolujte Váš e-mail pre informácie ako ho znova aktivovať, alebo pokiaľ je potrebná administrátorská aktivácia, počkajte až administrátor Váš účet znova aktivuje";

$lang['Password_mismatch'] = "Zadané heslá sa nezhodujú";
$lang['Current_password_mismatch'] = "Vami zadané aktuálne heslo nie je správne";
$lang['Password_long'] = "Vaše heslo nesmie presahovať 32 znakov";
$lang['Username_taken'] = "Prepáčte, ale tento užívateľ je už zaregistrovaný";
$lang['Username_invalid'] = "Prepáčte, ale toto užívateľské meno obsahuje nepovolené znaky \"";
$lang['Username_disallowed'] = "Prepáčte, ale toto užívateľské meno je zakázané";
$lang['Email_taken'] = "Prepáčte, ale túto e-mailovú adresu má už registrovanú niektorý užívateľ";
$lang['Email_banned'] = "Prepáčte, ale táto e-mailová adresa bola zakázaná";
$lang['Email_invalid'] = "Prepáčte, táto e-mailová adresa nie je platná";
$lang['Signature_too_long'] = "Váš podpis je príliš dlhý";
$lang['Fields_empty'] = "Musíte zadať požadované údaje";
$lang['Avatar_filetype'] = "Obrázok postavičky musí byť typu .jpg, .gif alebo .png";
$lang['Avatar_filesize'] = "Súbor obrázku postavičky musí byť menší ako %d kB"; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = "Obrázok postavičky musí mať šírku maximálne %d bodov a výšku %d bodov";

$lang['Welcome_subject'] = "Vítejte na %s fóre"; // Welcome to my.com forums
$lang['New_account_subject'] = "Nový užívateľský účet";
$lang['Account_activated_subject'] = "Účet aktivovaný";

$lang['Account_added'] = "Ďakujeme za registráciu, Váš účet bol vytvorený. Teraz sa môžete prihlásiť pod svojím menom a heslom";
$lang['Account_inactive'] = "Váš užívateľský účet byl vytvorený. Avšak toto fórum vyžaduje aktiváciu účtu. Aktivačný kľuč, Vám bol zaslaný na Vami poskytnutú e-mailovú adresu. Bližšie informácie obdržíte na Vašu e-mailovú adresu";
$lang['Account_inactive_admin'] = "Váš užívateľský účet bol vytvorený. Avšak toto fórum vyžaduje aktiváciu účtu administrátorom. Po aktivácii administrátorom, budete vyrozumený(á) na Vašu e-mailovú adresu";
$lang['Account_active'] = "Váš účet bol aktivovaný. Ďakujeme za registráciu";
$lang['Account_active_admin'] = "Účet bol aktivovaný";
$lang['Reactivate'] = "Reaktivujte svoj účet!";
$lang['Already_activated'] = 'Váš účet ste už aktivoval';
$lang['COPPA'] = "Váš účet bol vytvorený, ale nemusí byť ešte akceptovaný. Pre potvrdenie si prečítajte bližšie informácie v zaslanom e-maile";

$lang['Registration'] = "Registračné podmienky";
$lang['Reg_agreement'] = "Aj keď sa administrátori a moderátori tohto fóra pokúsia odstrániť alebo upraviť akýkoľvek všeobecne nežiadúci materiál tak rýchlo ako je to len možné, je nemožné kontrolovať každý príspevok. Preto berte na vedomie, že všetky príspevky do tohto fóra vyjadrujú pohľady a názory autora príspevku a nie administrátorov, moderátorov a webmastera (okrem príspevkov od týchto ľudí) a preto za ne nemôžu byť zodpovední.<br><br>Súhlasíte s tým, že nebudete posielať žiadne hanlivé, neslušné, vulgárne, nenávistné, zastrašujúce, sexuálne orientované alebo iné materiály, ktoré môžu porušovať zákony. Posielanie takýchto materiálov Vám môže privodiť okamžité a trvalé vyhostenie z fóra (a Váš ISP bude o Vašej činnosti informovaný). IP adresa všetkých príspevkov je zaznamenávaná pre prípad potreby vynútenia týchto podmienok. Súhlasíte, že webmaster, administrátor a moderátori tohto fóra majú právo odstrániť, upraviť, presunúť alebo ukončiť akúkoľvek tému kedykoľvek zistia, že odporuje týmto podmienkam. Ako užívateľ súhlasíte, že akékoľvek informácie, ktoré vložíte budú uložené v databáze. Dokiať nebudú tieto informácie prezradené tretej strane bez Vášho povolenia nemôžu byť webmaster, administrátor a moderátori považovaní za zodpovedných za akékoľvek hackerské pokusy, ktoré môžu viesť k tomu, že dáta budú kompromitované.<br><br>Systém tohto fóra používa cookies k ukladaniu informácií na Vašom počítači. Tieto cookies neobsahujú žiadne informácie, ktoré ste vložil(a), slúžia len k zvýšeniu Vášho pohodlia pri prehliadaní. E-mailová adresa je používaná len pre potvrdenie Vašich registračných detailov a hesla (a pre poslanie nového hesla, pokiaľ ste zabudol aktuálne).<br><br>Kliknutím na Registráciu nižšie súhlasíte byť viazaný týmito podmienkami.";

$lang['Agree_under_13'] = "Súhlasím s týmito podmienkami a je mi <b>menej</b> ako 13 rokov";
$lang['Agree_over_13'] = "Súhlasím s týmito podmienkami a je mi <b>viac</b> ako 13 rokov";
$lang['Agree_not'] = "Nesúhlasím s týmito podmienkami";

$lang['Wrong_activation'] = "Vami poskytnutý aktivačný kľúč nezodpovedá žiadnemu z databázy";
$lang['Send_password'] = "Zašlite mi nové heslo";
$lang['Password_updated'] = "Nové heslo bolo vytvorené, očakávejte e-mail s informáciami ako ho aktivovať";
$lang['No_email_match'] = "E-mailová adresa nesúhlasí s adresou priradenou k Vášmu užívateľskému menu";
$lang['New_password_activation'] = "Aktivácia nového hesla";
$lang['Password_activated'] = "Váš účet bol reaktivovaný. Pre prihlásenie použite heslo, ktore Vám bolo zaslané e-mailom";

$lang['Send_email_msg'] = "Odoslať e-mailovú správu";
$lang['No_user_specified'] = "Nebol zvolená žiadny užívateľ";
$lang['User_prevent_email'] = "Tento užívateľ si nepraje prijímať odpovede e-mailom. Skúste mu poslať súkromnú správu";
$lang['User_not_exist'] = "Tento užívateľ neexistuje";
$lang['CC_email'] = "Odoslať kópiu tohto e-mailu sebe";
$lang['Email_message_desc'] = "Táto správa bude zaslaná ako prostý text, nebude obsahovať žiadne HTML ani značky. Adresa pre odpoveď na túto správu bude nastavená na Vašu e-mailovú adresu.";
$lang['Flood_email_limit'] = "Nemôžete teraz odoslať ďalší e-mail, skúste opakovať neskôr";
$lang['Recipient'] = "Príjemca";
$lang['Email_sent'] = "E-mail bol odoslaný";
$lang['Send_email'] = "Odoslať e-mail";
$lang['Empty_subject_email'] = "Musíte zadať predmet e-mailu";
$lang['Empty_message_email'] = "Musíte zadať text správy";


//
// Memberslist
//
$lang['Select_sort_method'] = "Zoradiť podľa";
$lang['Sort'] = "Zoradiť";
$lang['Sort_Top_Ten'] = "Najčastejší prispievatelia";
$lang['Sort_Joined'] = "Dátumu registrácie";
$lang['Sort_Username'] = "Mena užívateľa";
$lang['Sort_Location'] = "Bydliska";
$lang['Sort_Posts'] = "Počtu príspevkov";
$lang['Sort_Email'] = "E-mailu";
$lang['Sort_Website'] = "WWW stránky";
$lang['Sort_Ascending'] = "Vzostupne";
$lang['Sort_Descending'] = "Zostupne";
$lang['Order'] = "Podľa poradia";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Skupina - Ovládací panel";
$lang['Group_member_details'] = "Detaily členstva v skupine";
$lang['Group_member_join'] = "Vstúpiť do skupiny";

$lang['Group_Information'] = "Informácie o skupine";
$lang['Group_name'] = "Meno skupiny";
$lang['Group_description'] = "Popis skupiny";
$lang['Group_membership'] = "Vaše členstvo";
$lang['Group_Members'] = "Členovia skupiny";
$lang['Group_Moderator'] = "Moderátor skupiny";
$lang['Pending_members'] = "Čakajúci členovia";

$lang['Group_type'] = "Typ skupiny";
$lang['Group_open'] = "Otvorená skupina";
$lang['Group_closed'] = "Uzavretá skupina";
$lang['Group_hidden'] = "Skrytá skupina";

$lang['Current_memberships'] = "Aktuálne členstvo";
$lang['Non_member_groups'] = "Skupiny bez členov";
$lang['Memberships_pending'] = "Čakacie členstvo";

$lang['No_groups_exist'] = "Neexistuje žiadna skupina";
$lang['Group_not_exist'] = "Táto skupina neexistuje";

$lang['Join_group'] = "Prihlásiť sa do skupiny";
$lang['No_group_members'] = "Táto skupina nemá členov";
$lang['Group_hidden_members'] = "Táto skupina je skrytá, nemôžete vidieť zoznam ich členov";
$lang['No_pending_group_members'] = "Táto skupina nemá čakajúcich členov";
$lang["Group_joined"] = "Úspešne ste vstúpil do tejto skupiny<br>Budete informovaný až bude Váš vstup moderátorom tejto skupiny odsúhlasený";
$lang['Group_request'] = "Vaša žiadosť o vstup do skupiny bola odoslaná";
$lang['Group_approved'] = "Vaša žiadosť bola odsúhlasená";
$lang['Group_added'] = "Bol ste prijatý do tejto skupiny";
$lang['Already_member_group'] = "Už ste členom tejto skupiny";
$lang['User_is_member_group'] = "Užívateľ už je členom tejto skupiny";
$lang['Group_type_updated'] = "Typ skupiny bol úspešne aktualizovaný";

$lang['Could_not_add_user'] = "Zvolený užívateľ neexistuje";
$lang['Could_not_anon_user'] = "Anonymný užívateľ nemôže byť členom skupiny";

$lang['Confirm_unsub'] = "Skutočne chcete ukončiť členstvo v tejto skupine ?";
$lang['Confirm_unsub_pending'] = "Vaše členstvo v tejto skupine zatiaľ nebolo odsúhlasené, skutočne ho chcete ukončiť ?";

$lang['Unsub_success'] = "Prestal ste byť členom tejto skupiny";

$lang['Approve_selected'] = "Akceptovať zvolené";
$lang['Deny_selected'] = "Zamietnuť zvolené";
$lang['Not_logged_in'] = " Pre vstup do skupiny musíte byť prihlásený.";
$lang['Remove_selected'] = "Odstrániť zvolené";
$lang['Add_member'] = "Pridať člena";
$lang['Not_group_moderator'] = "Nie ste moderátorom tejto skupiny, preto nemôžete vykonať túto akciu";

$lang['Login_to_join'] = "Prihlásiť pre vstup do skupiny alebo úpravy členstva";
$lang['This_open_group'] = "Toto je otvorená skupina, kliknite pre požiadanie o členstvo";
$lang['This_closed_group'] = "Toto je uzavretá skupina, žiadni ďalší užívatelia nie sú príjímaní";
$lang['This_hidden_group'] = "Toto je skrytá skupina, automatické pridávanie užívateľov nie je povolené";
$lang['Member_this_group'] = "Ste členom tejto skupiny";
$lang['Pending_this_group'] = "Vaše členstvo v tejto skupine čaká na odsúhlasenie";
$lang['Are_group_moderator'] = "Ste moderátorom skupiny";
$lang['None'] = "Nikto nie je prítomný";

$lang['Subscribe'] = "Požiadať o členstvo";
$lang['Unsubscribe'] = "Ukončiť členstvo";
$lang['View_Information'] = "Zobraziť informácie";


//
// Search
//
$lang['Search_query'] = "Hľadaný reťazec";
$lang['Search_options'] = "Možnosti hľadania";

$lang['Search_keywords'] = "Kľúčové slová";
$lang['Search_keywords_explain'] = "Môžete použiť <u>AND</u> pre slová, ktoré musia byť vo výsledkoch, <u>OR</u> pre také, ktoré tam môžu byť a <u>NOT</u> pre také, ktoré by vo výsledkoch nemali byť. Znak \"*\" nahradí časť reťazca pri vyhľadávaní";
$lang['Search_author'] = "Autora";
$lang['Search_author_explain'] = "Znak \"*\" nahradí časť reťazca pri vyhľadávaní";

$lang['Search_for_any'] = "Hľadať ktorékoľvek slovo alebo výraz ak je zadaný";
$lang['Search_for_all'] = "Hľadať všetky slová";
$lang['Search_title_msg'] = "Hľadať názov témy a text správy";
$lang['Search_msg_only'] = "Hľadať len text správy";

$lang['Return_first'] = "Zobraz prvých"; // followed by xxx characters in a select box
$lang['characters_posts'] = "znakov z príspevku";

$lang['Search_previous'] = "Prehľadaj predchádzajúce"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "Zotriediť podľa";
$lang['Sort_Time'] = "Čas odoslania";
$lang['Sort_Post_Subject'] = "Predmetu";
$lang['Sort_Topic_Title'] = "Hlavičky témy";
$lang['Sort_Author'] = "Autora";
$lang['Sort_Forum'] = "Fóra";

$lang['Display_results'] = "Zobraziť výsledok ako";
$lang['All_available'] = "Všetky dostupné";
$lang['No_searchable_forums'] = "Pokiaľ nechcete povoliť vyhľadávanie v ľubovoľných fórach tohto serveru";

$lang['No_search_match'] = "Žiadna téma alebo príspevok neboli nájdené podľa zvolených kritérií";
$lang['Found_search_match'] = "Bol nájdený %d výsledok hľadania"; // eg. Search found 1 match
$lang['Found_search_matches'] = "Bolo nájdených %d výsledkov hľadania"; // eg. Search found 24 matches

$lang['Close_window'] = "Zavrieť okno";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Prepáčte, ale len %s môžu posielať oznámenia do tohto fóra";
$lang['Sorry_auth_sticky'] = "Prepáčte, ale len %s môžu posielať dôležité správy do tohoto fóra";
$lang['Sorry_auth_read'] = "Prepáčte, ale len %s môžu čítať témy v tomto fóre";
$lang['Sorry_auth_post'] = "Prepáčte, ale len %s môžu posielať témy do tohto fóra";
$lang['Sorry_auth_reply'] = "Prepáčte, ale len %s môžu odpovedať na príspevky v tomto fóre";
$lang['Sorry_auth_edit'] = "Prepáčte, ale len %s môžu upravovať príspevky v tomto fóre";
$lang['Sorry_auth_delete'] = "Prepáčte, ale len %s môžu mazať príspevky v tomto fóre";
$lang['Sorry_auth_vote'] = "Prepáčte, ale len %s môžu hlasovať v hlasovaní tohto fóra";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>Anonymní užívatelia</b>";
$lang['Auth_Registered_Users'] = "<b>Registrovaní užívatelia</b>";
$lang['Auth_Users_granted_access'] = "<b>Užívatelia so zvláštnym oprávnením</b>";
$lang['Auth_Moderators'] = "<b>Moderátori</b>";
$lang['Auth_Administrators'] = "<b>Administrátori</b>";

$lang['Not_Moderator'] = "Nie ste moderátorom tohto fóra";
$lang['Not_Authorised'] = "Neautorizovaný";

$lang['You_been_banned'] = "Bol jste vykázaný z tohto fóra<br>Prosím kontaktujte webmastera alebo administrátora tohto fóra pre získánie bližších informácií";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "Je tu 0 registrovaných užívateľov a "; // There ae 5 Registered and
$lang['Reg_users_online'] = "Je tu %d registrovaných užívateľov a "; // There ae 5 Registered and
$lang['Reg_user_online'] = "Je tu %d registrovaný užívateľ a "; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = "0 skrytých užívateľov"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d skrytých užívateľov"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d skrytý užívateľ"; // 6 Hidden users online
$lang['Guest_users_online'] = "Je tu %d anonymných užívateľov"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "Je tu 0 anonymných užívateľov"; // There are 10 Guest users online
$lang['Guest_user_online'] = "Je tu %d anonymný užívateľ"; // There is 1 Guest user online
$lang['No_users_browsing'] = "Momentálne tu nie sú žiadni užívatelia";

$lang['Online_explain'] = "Tieto dáta sú založené na aktivite užívateľov počas posledných 5 minút";

$lang['Forum_Location'] = "Nachádza sa";
$lang['Last_updated'] = "Posledná aktualizácia";

$lang['Forum_index'] = "Obsah fóra";
$lang['Logging_on'] = "Prihlasuje sa";
$lang['Posting_message'] = "Odosiela správu";
$lang['Searching_forums'] = "Prehľadáva fóra";
$lang['Viewing_profile'] = "Prehliada nastavenia";
$lang['Viewing_online'] = "Prehliada zoznam prítomných užívateľov";
$lang['Viewing_member_list'] = "Prehliada zoznam užívateľov";
$lang['Viewing_priv_msgs'] = "Prehliada súkromné správy";
$lang['Viewing_FAQ'] = "Prehliada FAQ";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Moderátor - Ovládací panel";
$lang['Mod_CP_explain'] = "Pomocou nasledujúceho formulára môžete vykonávať hromadné zásahy do tohto fóra. Môžete zamykať, odomykať, presúvať a mazať akýkoľvek počet tém";

$lang['Select'] = "Zvoliť";
$lang['Delete'] = "Odstrániť";
$lang['Move'] = "Presunúť";
$lang['Lock'] = "Zamknúť";
$lang['Unlock'] = "Odomknúť";

$lang['Topics_Removed'] = "Zvolené témy boli úspešne odstránené z databázy.";
$lang['Topics_Locked'] = "Zvolené témy boli uzamknuté";
$lang['Topics_Moved'] = "Zvolené témy boli presunuté";
$lang['Topics_Unlocked'] = "Zvolené témy boli odomknuté";
$lang['No_Topics_Moved'] = "Žiadne témy neboli presunuté";

$lang['Confirm_delete_topic'] = "Skutočne chcete odstrániť zvolené témy ?";
$lang['Confirm_lock_topic'] = "Skutočne chcete zamknúť zvolené témy ?";
$lang['Confirm_unlock_topic'] = "Skutočne chcete odomknúť zvolené témy ?";
$lang['Confirm_move_topic'] = "Skutočne chcete presunúť zvolené témy ?";

$lang['Move_to_forum'] = "Presunúť do fóra";
$lang['Leave_shadow_topic'] = "Ponechať tieňovú tému v starom fóre.";

$lang['Split_Topic'] = "Rozdelenie témy - Ovládací panel";
$lang['Split_Topic_explain'] = "Pomocou nasledujúceho formulára môžete tému rozdeliť na dve, buď vybratím príspevkov jednotlivo, alebo rozdelením od vybratého príspevku";
$lang['Split_title'] = "Titulok novej témy";
$lang['Split_forum'] = "Fórum pre novú tému";
$lang['Split_posts'] = "Rozdeliť vybraté príspevky";
$lang['Split_after'] = "Rozdeliť od vybratého príspevku";
$lang['Topic_split'] = "Vybratá téma bola úspešne rozdelená";

$lang['Too_many_error'] = "Vybal(a) ste príliš veľa príspevkov. Môžete vybrať len jeden príspevok, od ktorého chcete tému rozdeliť!";

$lang['None_selected'] = "Nebola vybratá žiadna téma pre vykonanie tejto operácie. Vráťte sa späť a zvoľte aspoň jednu tému";
$lang['New_forum'] = "Nové fórum";

$lang['This_posts_IP'] = "IP adresa príspevku";
$lang['Other_IP_this_user'] = "Ďalšie IP adresy, z ktorých užívateľ odosielal príspevky";
$lang['Users_this_IP'] = "Užívatelia zasielajúci príspevok z tejto IP adresy";
$lang['IP_info'] = "Informace o IP adresách";
$lang['Lookup_IP'] = "Hľadať IP adresu";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "Časy uvádzané v %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 hodín";
$lang['-11'] = "GMT - 11 hodín";
$lang['-10'] = "GMT - 10 hodín";
$lang['-9'] = "GMT - 9 hodín";
$lang['-8'] = "GMT - 8 hodín";
$lang['-7'] = "GMT - 7 hodín";
$lang['-6'] = "GMT - 6 hodín";
$lang['-5'] = "GMT - 5 hodín";
$lang['-4'] = "GMT - 4 hodiny";
$lang['-3.5'] = "GMT - 3.5 hodiny";
$lang['-3'] = "GMT - 3 hodiny";
$lang['-2'] = "GMT - 2 hodiny";
$lang['-1'] = "GMT - 1 hodina";
$lang['0'] = "GMT";
$lang['1'] = "GMT + 1 hodina";
$lang['2'] = "GMT + 2 hodiny";
$lang['3'] = "GMT + 3 hodiny";
$lang['3.5'] = "GMT + 3.5 hodiny";
$lang['4'] = "GMT + 4 hodiny";
$lang['4.5'] = "GMT + 4.5 hodiny";
$lang['5'] = "GMT + 5 hodín";
$lang['5.5'] = "GMT + 5.5 hodiny";
$lang['6'] = "GMT + 6 hodín";
$lang['6.5'] = "GMT + 6.5 hodiny";
$lang['7'] = "GMT + 7 hodín";
$lang['8'] = "GMT + 8 hodín";
$lang['9'] = "GMT + 9 hodín";
$lang['9.5'] = "GMT + 9.5 hodín";
$lang['10'] = "GMT + 10 hodín";
$lang['11'] = "GMT + 11 hodín";
$lang['12'] = "GMT + 12 hodín";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "(GMT -12:00 hodín) Eniwetok, Kwajalein";
$lang['tz']['-11'] = "(GMT -11:00 hodín) Midway Island, Samoa";
$lang['tz']['-10'] = "(GMT -10:00 hodín) Hawaii";
$lang['tz']['-9'] = "(GMT -9:00 hodín) Alaska";
$lang['tz']['-8'] = "(GMT -8:00 hodín) Pacific Time (US &amp; Canada), Tijuana";
$lang['tz']['-7'] = "(GMT -7:00 hodín) Mountain Time (US &amp; Canada), Arizona";
$lang['tz']['-6'] = "(GMT -6:00 hodín) Central Time (US &amp; Canada), Mexico City";
$lang['tz']['-5'] = "(GMT -5:00 hodín) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$lang['tz']['-4'] = "(GMT -4:00 hodiny) Atlantic Time (Canada), Caracas, La Paz";
$lang['tz']['-3.5'] = "(GMT -3.5 hodiny) Newfoundland";
$lang['tz']['-3'] = "(GMT -3:00 hodiny) Brassila, Buenos Aires, Georgetown, Falkland Is";
$lang['tz']['-2'] = "(GMT -2:00 hodiny) Mid-Atlantic, Ascension Is., St. Helena";
$lang['tz']['-1'] = "(GMT -1:00 hodina) Azores, Cape Verde Islands";
$lang['tz']['0'] = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$lang['tz']['1'] = "(GMT +1:00 hodina) Prague, Amsterdam, Berlin, Brussels, Madrid, Paris";
$lang['tz']['2'] = "(GMT +2:00 hodiny) Cairo, Helsinki, Kaliningrad, South Africa";
$lang['tz']['3'] = "(GMT +3:00 hodiny) Baghdad, Riyadh, Moscow, Nairobi";
$lang['tz']['3.5'] = "(GMT +3.5 hodiny) Tehran";
$lang['tz']['4'] = "(GMT +4:00 hodiny) Abu Dhabi, Baku, Muscat, Tbilisi";
$lang['tz']['4.5'] = "(GMT +4.5 hodiny) Kabul";
$lang['tz']['5'] = "(GMT +5:00 hodín) Ekaterinburg, Islamabad, Karachi, Tashkent";
$lang['tz']['5.5'] = "(GMT +5.5 hodiny) Bombay, Calcutta, Madras, New Delhi";
$lang['tz']['6'] = "(GMT +6:00 hodín) Almaty, Colombo, Dhaka, Novosibirsk";
$lang['tz']['6.5'] = "(GMT +6.5 hodiny) Rangoon";
$lang['tz']['7'] = "(GMT +7:00 hodín) Bangkok, Hanoi, Jakarta";
$lang['tz']['8'] = "(GMT +8:00 hodín) Beijing, Hong Kong, Perth, Singapore, Taipei";
$lang['tz']['9'] = "(GMT +9:00 hodín) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$lang['tz']['9.5'] = "(GMT +9.5 hodiny) Adelaide, Darwin";
$lang['tz']['10'] = "(GMT +10:00 hodín) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$lang['tz']['11'] = "(GMT +11:00 hodín) Magadan, New Caledonia, Solomon Islands";
$lang['tz']['12'] = "(GMT +12:00 hodín) Auckland, Wellington, Fiji, Marshall Island";

$lang['datetime']['Sunday'] = "Nedeľa";
$lang['datetime']['Monday'] = "Pondelok";
$lang['datetime']['Tuesday'] = "Utorok";
$lang['datetime']['Wednesday'] = "Streda";
$lang['datetime']['Thursday'] = "Štvrtok";
$lang['datetime']['Friday'] = "Piatok";
$lang['datetime']['Saturday'] = "Sobota";
$lang['datetime']['Sun'] = "Ne";
$lang['datetime']['Mon'] = "Po";
$lang['datetime']['Tue'] = "Ut";
$lang['datetime']['Wed'] = "St";
$lang['datetime']['Thu'] = "Št";
$lang['datetime']['Fri'] = "Pi";
$lang['datetime']['Sat'] = "So";
$lang['datetime']['January'] = "januára";
$lang['datetime']['February'] = "februára";
$lang['datetime']['March'] = "marca";
$lang['datetime']['April'] = "apríla";
$lang['datetime']['May'] = "mája";
$lang['datetime']['June'] = "júna";
$lang['datetime']['July'] = "júla";
$lang['datetime']['August'] = "augusta";
$lang['datetime']['September'] = "septembra"; 
$lang['datetime']['October'] = "októbra";
$lang['datetime']['November'] = "novembra";
$lang['datetime']['December'] = "decembra";
$lang['datetime']['Jan'] = "Jan";
$lang['datetime']['Feb'] = "Feb";
$lang['datetime']['Mar'] = "Mar";
$lang['datetime']['Apr'] = "Apr";
$lang['datetime']['May'] = "Máj";
$lang['datetime']['Jun'] = "Jún";
$lang['datetime']['Jul'] = "Júl";
$lang['datetime']['Aug'] = "Aug";
$lang['datetime']['Sep'] = "Sep";
$lang['datetime']['Oct'] = "Okt";
$lang['datetime']['Nov'] = "Nov";
$lang['datetime']['Dec'] = "Dec";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Informácia";
$lang['Critical_Information'] = "Kritická informácia";

$lang['General_Error'] = "Všeobecná chyba";
$lang['Critical_Error'] = "Kritická chyba";
$lang['An_error_occured'] = "Vyskytla sa chyba";
$lang['A_critical_error'] = "Vyskytla sa kritická chyba";

//
// That's all Folks!
// -------------------------------------------------

?>