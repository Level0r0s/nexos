<?php
/***************************************************************************
 *                            lang_main.php [Slovenian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2004/08/04 01:26:29 akamu Exp $
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
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Nataša Holy, natasa.holy@guest.arnes.si, www.uciteljska.net
// 2002-08-27  Philip M. White        - fixed many grammar problems
//  	Začetni prevod v slovenščino: Gregor Kokalj - Frizbi (frizbi@frizbinet.com) 28/03/2002
//	Popravek prevoda: Tomaž Koštial (m5@cyberdude.com) 13/10/2002
//      Prevedel do konca Ladislav Golouh, www.Razmerje.com, info@razmerje.com in vzporedil s prevodom:
//      Nataša Holy, natasa.holy@guest.arnes.si, www.uciteljska.net /19/2/2003


//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'LEFT';
$lang['RIGHT'] = 'RIGHT';
$lang['DATE_FORMAT'] = 'D M Y G:i'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Področje';
$lang['Topic'] = 'Tema';
$lang['Topics'] = 'Teme';
$lang['Replies'] = 'Odgovorov';
$lang['Views'] = 'Ogledov';
$lang['Post'] = 'Prispevek';
$lang['Posts'] = 'Prispevkov';
$lang['Posted'] = 'Objavljeno';
$lang['Username'] = 'Uporabniško ime';
$lang['Password'] = 'Geslo';
$lang['Email'] = 'E-pošta';
$lang['Poster'] = 'Pošilja';
$lang['Author'] = 'Avtor';
$lang['Time'] = 'Čas';
$lang['Hours'] = 'Ur';
$lang['Message'] = 'Sporočilo';

$lang['1_Day'] = '1 dan';
$lang['7_Days'] = '7 dni';
$lang['2_Weeks'] = '2 tedna';
$lang['1_Month'] = '1 mesec';
$lang['3_Months'] = '3 mesece';
$lang['6_Months'] = '6 mesecev';
$lang['1_Year'] = '1 leto';

$lang['Go'] = 'Pojdi';
$lang['Jump_to'] = 'Pojdi na';
$lang['Submit'] = 'Pošlji';
$lang['Reset'] = 'Izvorno';
$lang['Cancel'] = 'Prekliči';
$lang['Preview'] = 'Predogled';
$lang['Confirm'] = 'Potrdi';
$lang['Spellcheck'] = 'Črkovanje';
$lang['Yes'] = 'Da';
$lang['No'] = 'Ne';
$lang['Enabled'] = 'Omogočeno';
$lang['Disabled'] = 'Ni omogočeno';
$lang['Error'] = 'Napaka';

$lang['Next'] = 'Naslednja';
$lang['Previous'] = 'Prejšnja';
$lang['Goto_page'] = 'Pojdi na stran';
$lang['Joined'] = 'Pridružen/-a';
$lang['IP_Address'] = 'IP naslov';

$lang['Select_forum'] = 'Izberi forum';
$lang['View_latest_post'] = 'Poglej zadnje objave';
$lang['View_newest_post'] = 'Poglej najnovejše objave';
$lang['Page_of'] = 'Stran <b>%d</b> od <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ številka';
$lang['AIM'] = 'AIM - AOL Instant - naslov';
$lang['MSNM'] = 'MSN Messenger - naslov';
$lang['YIM'] = 'Yahoo Messenger - naslov';

$lang['Forum_Index'] = '%s Seznam forumov';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Objavi novo temo';
$lang['Reply_to_topic'] = 'Odgovori na to temo';
$lang['Reply_with_quote'] = 'Odgovori s citatom';

$lang['Click_return_topic'] = 'Klikni %sTukaj%s za vrnitev na temo'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Klikni %sTukaj%s in poskusi znova';
$lang['Click_return_forum'] = 'Klikni %sTukaj%s za vrnitev na forum';
$lang['Click_view_message'] = 'Klikni %sTukaj%s za pregled tvojega prispevka';
$lang['Click_return_modcp'] = 'Klikni %sTukaj%s za vrnitev na Moderatorjevo nadzorno ploščo';
$lang['Click_return_group'] = 'Klikni %sTukaj%s za vrnitev v informacije o skupini';

$lang['Admin_panel'] = 'Administrativni kotiček';

$lang['Board_disable'] = 'Oprostite, forum trenutno ni dostopen, prosimo, poskusite pozneje.';

    
//
// Global Header strings
//
$lang['Registered_users'] = 'Registrirani uporabniki:';
$lang['Browsing_forum'] = 'Forum pregleduje/jo uporabnik/i:';
$lang['Online_users_zero_total'] = 'Na zvezi ni <b>0</b> uporabnikov :: ';
$lang['Online_users_total'] = 'Trenutno forum  pregleduje <b>%d</b> uporabnikov :: ';
$lang['Online_user_total'] = 'Trenutno forum  pregleduje <b>%d</b> uporabnik :: ';
$lang['Reg_users_zero_total'] = '0 registriranih, ';
$lang['Reg_users_total'] = '%d registriranih, ';
$lang['Reg_user_total'] = '%d registriranih, ';
$lang['Hidden_users_zero_total'] = '0 skritih in  ';
$lang['Hidden_user_total'] = '%d skrit in  ';
$lang['Hidden_users_total'] = '%d skriti in ';
$lang['Guest_users_zero_total'] = '0 gostov';
$lang['Guest_users_total'] = '%d gostov';
$lang['Guest_user_total'] = '%d gost';
$lang['Record_online_users'] = 'Največ obiskovalcev na forumu je bilo: <b>%s</b>,  dne %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = 'Tvoj zadnji obisk: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Danes je %s'; // %s replaced by time

$lang['Search_new'] = 'Poglej nove objave od prejšnjega obiska';
$lang['Search_your_posts'] = 'Poglej svoje prispevke';
$lang['Search_unanswered'] = 'Poglej neodgovorjena sporočila';

$lang['Register'] = 'Registriraj se';
$lang['Profile'] = 'Tvoj profil';
$lang['Edit_profile'] = 'Uredi svoj profil';
$lang['Search'] = 'Išči';
$lang['Memberlist'] = 'Seznam članov';
$lang['FAQ'] = 'Pomoč pogostih vprašanj';
$lang['BBCode_guide'] = 'BBCode vodič';
$lang['Usergroups'] = 'Skupine uporabnikov';
$lang['Last_Post'] = 'Zadnja objava';
$lang['Moderator'] = 'Moderator';
$lang['Moderators'] = 'Moderatorji';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Uporabniki so objavili doslej <b>0</b> prispevkov '; // Number of posts
$lang['Posted_articles_total'] = 'Uporabniki so skupaj objavili že <b>%d</b> prispevkov'; // Number of posts
$lang['Posted_article_total'] = 'Uporabniki so doslej objavili <b>%d</b> prispevek'; // Number of posts
$lang['Registered_users_zero_total'] = 'Imamo <b>0</b> prijavljenih uporabnikov'; // # registered users
$lang['Registered_users_total'] = 'Imamo že <b>%d</b> prijavljenih uporabnikov'; // # registered users
$lang['Registered_user_total'] = 'Imamo <b>%d</b> prijavljenega uporabnika'; // # registered users
$lang['Newest_user'] = 'Dobrodošlica! Novopridruženi/-a uporabnik/-ca je <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Od tvojega zadnjega obiska še ni novih objav';
$lang['No_new_posts'] = 'Ni novih objav';
$lang['New_posts'] = 'Nove objave';
$lang['New_post'] = 'Nova objava';
$lang['No_new_posts_hot'] = 'Ni novih objav [priljubljenih]';
$lang['New_posts_hot'] = 'Nove objave [priljubljene]';
$lang['No_new_posts_locked'] = 'Ni novih objav [zaklenjenih]';
$lang['New_posts_locked'] = 'Nove objave [zaklenjene]';
$lang['Forum_is_locked'] = 'Forum je zaklenjen';


//
// Login
//
$lang['Enter_password'] = 'Prosim, vnesi svoje uporabniško ime in geslo';
$lang['Login'] = 'Prijava';
$lang['Logout'] = 'Odjava';

$lang['Forgotten_password'] = 'Pozabil/a sem geslo';

$lang['Log_me_in'] = 'Avtomatična prijava ob vsakem obisku (priporočamo)';

$lang['Error_login'] = 'Vpisal si napačno ali še neaktivno uporabniško ime ali geslo';


//
// Index page
//
$lang['Index'] = 'Forum: seznam';
$lang['No_Posts'] = 'Ni objav';
$lang['No_forums'] = 'Še ni forumov';

$lang['Private_Message'] = 'Zasebno sporočilo';
$lang['Private_Messages'] = 'Zasebna sporočila';
$lang['Who_is_Online'] = 'Kdo je z nami';

$lang['Mark_all_forums'] = 'Označi forume kot prebrane';
$lang['Forums_marked_read'] = 'Vsi forumi so označeni kot prebrani';


//
// Viewforum
//
$lang['View_forum'] = 'Preglej forum';

$lang['Forum_not_exist'] = 'Izbrani forum ne obstaja.';
$lang['Reached_on_error'] = 'Na tej strani se je pojavila napaka';

$lang['Display_topics'] = 'Prikaži prejšnje teme';
$lang['All_Topics'] = 'Vse teme';

$lang['Topic_Announcement'] = '<b>Obvestilo:</b>';
$lang['Topic_Sticky'] = '<b>Ne prezri:</b>';
$lang['Topic_Moved'] = '<b>Premaknjeno:</b>';
$lang['Topic_Poll'] = '<b>[Z anketo]</b>';

$lang['Mark_all_topics'] = 'Označi vse teme kot prebrane';
$lang['Topics_marked_read'] = 'Teme tega foruma so označene kot prebrane';

$lang['Rules_post_can'] = 'Da, <b>lahko</b> dodajaš nove teme v tem forumu';
$lang['Rules_post_cannot'] ='Ne, <b>ne moreš</b> dodajati novih tem v tem forumu';
$lang['Rules_reply_can'] = 'Da, <b>lahko</b> odgovarjaš na teme v tem forumu';
$lang['Rules_reply_cannot'] ='Ne, <b>ne moreš</b> odgovarjati na teme v tem forumu';
$lang['Rules_edit_can'] = 'Da, <b>lahko</b> urejaš svoje prispevke v tem forumu';
$lang['Rules_edit_cannot'] = 'Ne, <b>ne moreš</b> urejati svojih prispevkov v tem forumu';
$lang['Rules_delete_can'] = 'Da, <b>lahko</b> brišeš svoje prispevke v tem forumu';
$lang['Rules_delete_cannot'] = 'Ne, <b>ne moreš</b> brisati svojih prispevkov v tem forumu';
$lang['Rules_vote_can'] = 'Da, <b>lahko</b> glasuješ v anketi v tem forumu';
$lang['Rules_vote_cannot'] = 'Ne <b>ne moreš</b> glasovati v anketi v tem forumu';
$lang['Rules_moderate'] = 'Da, <b>lahko</b> %surejaš ta forum%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'V tem forumu še ni prispevkov<br/>Klikni na povezavo <b>Nova tema</b>';


//
// Viewtopic
//
$lang['View_topic'] = 'Poglej temo';

$lang['Guest'] = 'Gost';
$lang['Post_subject'] = 'Naslov sporočila';
$lang['View_next_topic'] = 'Poglej naslednjo temo';
$lang['View_previous_topic'] = 'Poglej prejšnjo temo';
$lang['Submit_vote'] = 'Glasuj';
$lang['View_results'] = 'Rezultati ankete';

$lang['No_newer_topics'] = 'V tem razdelku ni novejših tem';
$lang['No_older_topics'] = 'V tem razdelku ni starejših tem';
$lang['Topic_post_not_exist'] = 'Tema ali sporočilo ne obstaja';
$lang['No_posts_topic'] = 'V tej temi še ni sporočil';

$lang['Display_posts'] = 'Pokaži sporočila';
$lang['All_Posts'] = 'Vse objave';
$lang['Newest_First'] = 'Najprej najnovejše';
$lang['Oldest_First'] = 'Najprej najstarejše';

$lang['Back_to_top'] = 'Nazaj na vrh';

$lang['Read_profile'] = 'Poglej uporabnikov profil'; 
$lang['Send_email'] = 'Pošlji elektronsko pošto uporabniku';
$lang['Visit_website'] = 'Obišči avtorjevo spletno stran';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Popravi/Izbriši to sporočilo';
$lang['View_IP'] = 'Prikaži IP avtorja';
$lang['Delete_post'] = 'Izbriši to sporočilo';

$lang['wrote'] = 'je napisal/a'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citiram'; // comes before bbcode quote output.
$lang['Code'] = 'Koda'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Nazadnje urejal/a %s %s; skupaj popravljeno %d krat'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Nazadnje urejal/a %s %s; skupaj popravljeno %d krat'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Zakleni temo';
$lang['Unlock_topic'] = 'Odkleni temo';
$lang['Move_topic'] = 'Premakni temo';
$lang['Delete_topic'] = 'Izbriši temo';
$lang['Split_topic'] = 'Razdeli temo';

$lang['Stop_watching_topic'] = 'Nehaj slediti novim sporočilom na to temo';
$lang['Start_watching_topic'] = 'Začni slediti novim sporočilom na to temo';
$lang['No_longer_watching'] = 'Ne sledim več novim sporočilom na to temo';
$lang['You_are_watching'] = 'Sledim novim sporočilom na to temo';

$lang['Total_votes'] = 'Skupaj glasov';


//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Telo sporočila';
$lang['Topic_review'] = 'Pregled teme';

$lang['No_post_mode'] = 'Nobeno sporočilo ni bilo pravilno izbrano'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Objavi novo temo'; 
$lang['Post_a_reply'] = 'Odgovori';
$lang['Post_topic_as'] = 'Objavi novo temo kot';
$lang['Edit_Post'] = 'Uredi sporočilo';
$lang['Options'] = 'Možnosti';

$lang['Post_Announcement'] = 'Obvestilo';
$lang['Post_Sticky'] = 'NE PREZRI!';
$lang['Post_Normal'] = 'Navadno';

$lang['Confirm_delete'] = 'Ali res želiš izbrisati to sporočilo?';
$lang['Confirm_delete_poll'] = 'Ali res želiš izbrisati to anketo?';

$lang['Flood_Error'] = 'Prosim, poskusi malce kasneje. Novega sporočila ne moreš objaviti tako hitro za prejšnjim.';
$lang['Empty_subject'] = 'Vpisati moraš naslov, ko objavljaš novo temo.';
$lang['Empty_message'] = 'Napisati moraš vsebino, predno pošlješ.';
$lang['Forum_locked'] = 'Ta forum je zaklenjen: ne moreš urejati, pošiljati ali odgovarjati na sporočila.';
$lang['Topic_locked'] = 'Ta tema je zaklenjena: ne moreš urejati sporočil ali odgovarjati na objave.';
$lang['No_post_id'] = 'Izberi sporočilo, ki ga želiš urejati';
$lang['No_topic_id'] = 'Izberi temo, v kateri želiš odgovoriti';
$lang['No_valid_mode'] = 'Lahko samo objavljaš, odgovarjaš, urejaš ali citiraš sporočila. Prosim, vrni se in poskusi znova.';
$lang['No_such_post'] = 'Tako sporočilo (objava) ne obstaja. Prosim, vrni se in poskusi znova.';
$lang['Edit_own_posts'] = 'Žal, urejaš lahko le svoja sporočila.';
$lang['Delete_own_posts'] = 'Žal, brišeš lahko le svoja sporočila.';
$lang['Cannot_delete_replied'] = 'Žal, toda sporočil, na katera je nekdo odgovoril, ne moreš brisati.';
$lang['Cannot_delete_poll'] = 'Žal, aktivne ankete ne moreš izbrisati.';
$lang['Empty_poll_title'] = 'Za svojo anketo moraš vnesti naslov.';
$lang['To_few_poll_options'] = 'Vnesti moraš vsaj dve izbiri.';
$lang['To_many_poll_options'] = 'Poskušal si vnesti preveč izbir.';
$lang['Post_has_no_poll'] = 'To sporočilo ne vsebuje ankete.';
$lang['Already_voted'] = 'V tej anketi si že glasoval/a.';
$lang['No_vote_option'] = 'Izberi eno možnost, ko glasuješ';

$lang['Add_poll'] = 'Dodaj anketo';
$lang['Add_poll_explain'] = 'Če ankete temi ne želiš dodati, pusti polja prazna.';
$lang['Poll_question'] = 'Anketno vprašanje';
$lang['Poll_option'] = 'Anketna možnost';
$lang['Add_option'] = 'Dodaj možnost';
$lang['Update'] = 'Posodobi';
$lang['Delete'] = 'Izbriši';
$lang['Poll_for'] = 'Anketa naj teče';
$lang['Days'] = 'dni'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[Vnesi 0 ali pusti prazno za anketo, ki časovno ni omejena.]';
$lang['Delete_poll'] = 'Izbriši anketo';

$lang['Disable_HTML_post'] = 'Izklopi HTML v tem sporočilu';
$lang['Disable_BBCode_post'] = 'Izklopi BBCode v tem sporočilu';
$lang['Disable_Smilies_post'] = 'Izklopi Smeške v tem sporočilu';

$lang['HTML_is_ON'] = 'HTML je <u>vklopljen</u>';
$lang['HTML_is_OFF'] = 'HTML je <u>izklopljen</u>';
$lang['BBCode_is_ON'] = '%s(Navodila) BBkoda%s je <u>vklopljena</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%s(Navodila) BBkoda%s je <u>izklopljena</u>';
$lang['Smilies_are_ON'] = 'Smeški so <u>vklopljeni</u>';
$lang['Smilies_are_OFF'] = 'Smeški so <u>izklopljeni</u>';

$lang['Attach_signature'] = 'Dodaj podpis (podpis lahko spremeniš v profilu)';
$lang['Notify'] = 'Obvesti me, ko bo prispelo novo sporočilo';
$lang['Delete_post'] = 'Izbriši to sporočilo';

$lang['Stored'] = 'Sporočilo je uspešno sprejeto.';
$lang['Deleted'] = 'Sporočilo je uspešno izbrisano.';
$lang['Poll_delete'] = 'Anketa je uspešno izbrisana.';
$lang['Vote_cast'] = 'Tvoj glas je prištet.';

$lang['Topic_reply_notification'] = 'Obveščanje o odgovorih na temo';

$lang['bbcode_b_help'] = 'Krepko: [b]besedilo[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Ležeče: [i]besedilo[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Podčrtano: [u]besedilo[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Citat: [quote]besedilo[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Prikaz kode: [code]koda[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Seznam: [list]besedilo[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Urejen seznam: [list=]besedilo[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Vstavi sliko: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Vstavi URL povezavo: [url]http://url[/url] ali [url=http://url]URL besedilo[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Zaključne označbe bbCode pri vseh odprtih ukazih';
$lang['bbcode_s_help'] = 'Barva besedila: [color=red]besedilo[/color]';
$lang['bbcode_f_help'] = 'Velikost pisave: [size=x-small]majhno besedilo[/size]';

$lang['Emoticons'] = 'Smeški';
$lang['More_emoticons'] = 'Več Smeškov';

$lang['Font_color'] = 'Barva pisave';
$lang['color_default'] = 'Privzeto';
$lang['color_dark_red'] = 'Temno rdeča';
$lang['color_red'] = 'Rdeča';
$lang['color_orange'] = 'Oranžna';
$lang['color_brown'] = 'Rjava';
$lang['color_yellow'] = 'Rumena';
$lang['color_green'] = 'Zelena';
$lang['color_olive'] = 'Olivna';
$lang['color_cyan'] = 'Sinje modra';
$lang['color_blue'] = 'Modra';
$lang['color_dark_blue'] = 'Temno modra';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Vijolična';
$lang['color_white'] = 'Bela';
$lang['color_black'] = 'Črna';

$lang['Font_size'] = 'Velikost pisave';
$lang['font_tiny'] = 'Drobna';
$lang['font_small'] = 'Majhna';
$lang['font_normal'] = 'Normalna';
$lang['font_large'] = 'Velika';
$lang['font_huge'] = 'Ogromna';

$lang['Close_Tags'] = 'Zaključne označbe odprtih ukazov';
$lang['Styles_tip'] = 'Namig: Oblike hitro določiš prej označenemu besedilu.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Zasebna sporočila';

$lang['Login_check_pm'] = 'Prijava za pregled zasebnih sporočil';
$lang['New_pms'] = 'Imaš %d novih sporočil'; // You have 2 new messages
$lang['New_pm'] = 'Imaš %d novo sporočilo'; // You have 1 new message
$lang['No_new_pm'] = 'Nimaš novih sporočil';
$lang['Unread_pms'] = 'Imaš %d neprebranih sporočil';
$lang['Unread_pm'] = 'Imaš %d neprebrano sporočilo';
$lang['No_unread_pm'] = 'Nimaš neprebranih sporočil';
$lang['You_new_pm'] = 'Imaš novo zasebno sporočilo v mapi Prejeto';
$lang['You_new_pms'] = 'Imaš nova zasebna sporočila v mapi Prejeto';
$lang['You_no_new_pm'] = 'Nimaš novih zasebnih sporočil';

$lang['Unread_message'] = 'Neprebrano sporočilo';
$lang['Read_message'] = 'Prebrano sporočilo';

$lang['Read_pm'] = 'Preberi sporočilo';
$lang['Post_new_pm'] = 'Pošlji sporočilo';
$lang['Post_reply_pm'] = 'Odgovori na sporočilo';
$lang['Post_quote_pm'] = 'Citiraj sporočilo';
$lang['Edit_pm'] = 'Uredi sporočilo';

$lang['Inbox'] = 'Prejeto';
$lang['Outbox'] = 'Odposlano';
$lang['Savebox'] = 'Shranjeno';
$lang['Sentbox'] = 'Poslano';
$lang['Flag'] = 'Zastavica';
$lang['Subject'] = 'Naslov sporočila';
$lang['From'] = 'Od';
$lang['To'] = 'Za';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Označi';
$lang['Sent'] = 'Poslano';
$lang['Saved'] = 'Shranjeno';
$lang['Delete_marked'] = 'Izbriši označene';
$lang['Delete_all'] = 'Izbriši vse';
$lang['Save_marked'] = 'Shrani označene'; 
$lang['Save_message'] = 'Shrani sporočilo';
$lang['Delete_message'] = 'Izbriši sporočilo';

$lang['Display_messages'] = 'Pokaži sporočila novejša kot'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Vsa sporočila';

$lang['No_messages_folder'] = 'V tej mapi nimaš sporočil';

$lang['PM_disabled'] = 'Na tej plošči so zasebna sporočila onemogočena.';
$lang['Cannot_send_privmsg'] = 'Žal, pošiljanje zasebnih sporočil je onemogočeno.';
$lang['No_to_user'] = 'Določi uporabnikovo ime.';
$lang['No_such_user'] = 'Žal, ta uporabnik ne obstaja.';

$lang['Disable_HTML_pm'] = 'Onemogoči HTML v tem sporočilu';
$lang['Disable_BBCode_pm'] = 'Onemogoči BBCode v tem sporočilu';
$lang['Disable_Smilies_pm'] = 'Onemogoči Smeške v tem sporočilu';

$lang['Message_sent'] = 'Sporočilo je bilo poslano.';

$lang['Click_return_inbox'] = 'Klikni %sTukaj%s, za vrnitev v mapo Prejeto';
$lang['Click_return_index'] = 'Klikni %sTukaj%s za vrnitev na seznam';

$lang['Send_a_new_message'] = 'Pošlji novo zasebno sporočilo';
$lang['Send_a_reply'] = 'Odgovori na zasebno sporočilo';
$lang['Edit_message'] = 'Uredi zasebno sporočilo';

$lang['Notification_subject'] = 'Prispelo je novo zasebno sporočilo!'; 

$lang['Find_username'] = 'Najdi uporabnika';
$lang['Find'] = 'Najdi';
$lang['No_match'] = 'Ni zadetkov.';

$lang['No_post_id'] = 'ID sporočila ni določen';
$lang['No_such_folder'] = 'Ta mapa ne obstaja';
$lang['No_folder'] = 'Nobena mapa ni izbrana';

$lang['Mark_all'] = 'Označi vse';
$lang['Unmark_all'] = 'Od-znači vse';

$lang['Confirm_delete_pm'] = 'Ali res želiš izbrisati to sporočilo?';
$lang['Confirm_delete_pms'] = 'Ali res želiš izbrisati ta sporočila?';

$lang['Inbox_size'] = 'Mapa s prejeto pošto je %d%% zasedena'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Mapa s poslano pošto je %d%% zasedena'; 
$lang['Savebox_size'] = 'Mapa s shranjeno pošto je %d%% zasedena'; 

$lang['Click_view_privmsg'] = 'Klikni %sTukaj%s za pregled Prejete pošte';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Pregled profila - predstavitev :: %s'; // %s is username 
$lang['About_user'] = 'Vse o %s'; // %s is username

$lang['Preferences'] = 'Nastavitve';
$lang['Items_required'] = 'Točke označene z *, je obvezno treba izpolniti.';
$lang['Registration_info'] = 'Podatki o registraciji';
$lang['Profile_info'] = 'Podatki o profilu - predstavitev';
$lang['Profile_info_warn'] = 'Te podatke bodo lahko videli vsi';
$lang['Avatar_panel'] = 'Nadzorna plošča podob';
$lang['Avatar_gallery'] = 'Galerija podob';

$lang['Website'] = 'Spletna stran';
$lang['Location'] = 'Kraj';
$lang['Contact'] = 'Stiki';
$lang['Email_address'] = 'Elektronski naslov';
$lang['Email'] = 'E-pošta';
$lang['Send_private_message'] = 'Pošlji zasebno sporočilo';
$lang['Hidden_email'] = '[ Skrito ]';
$lang['Search_user_posts'] = 'Išči sporočila tega uporabnika';
$lang['Interests'] = 'Zanima me';
$lang['Occupation'] = 'Poklic'; 
$lang['Poster_rank'] = 'Uporabniška Stopnja';

$lang['Total_posts'] = 'Vse objave';
$lang['User_post_pct_stats'] = '%.2f%% vseh objav'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f objav na dan'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Najdi vse prispevke pod imenom %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Žal, tak uporabnik ne obstaja.';
$lang['Wrong_Profile'] = 'Profila, ki ni tvoj, ne moreš spreminjati.';

$lang['Only_one_avatar'] = 'Izbereš lahko le eno podobo';
$lang['File_no_data'] = 'Datoteka na vnešenem URL naslovu ne vsebuje podatkov';
$lang['No_connection_URL'] = 'Povezava do vnešenega URL naslova ni uspela';
$lang['Incomplete_URL'] = 'URL naslov je nepopoln';
$lang['Wrong_remote_avatar_format'] = 'URL naslov oddaljene podobe ni veljaven';
$lang['No_send_account_inactive'] = 'Žal tvojega gesla ne morem obnoviti, ker je tvoj račun trenutno neaktiviran. Za več informacij se,prosim, poveži z Administratorjem foruma.';

$lang['Always_smile'] = 'Vedno omogoči Smeške';
$lang['Always_html'] = 'Vedno omogoči HTML';
$lang['Always_bbcode'] = 'Vedno omogoči BBCode';
$lang['Always_add_sig'] = 'Vedno dodaj moj podpis';
$lang['Always_notify'] = 'Vedno obveščaj o odgovorih';
$lang['Always_notify_explain'] = 'Vedno, ko nekdo odgovori na temo, ki ste jo zastavili, dobite obvestilo po e-pošti. To lahko spremenite vedno, ko pošiljate sporočilo.';

$lang['Board_style'] = 'Izgled foruma';
$lang['Board_lang'] = 'Jezik';
$lang['No_themes'] = 'Ni še tem v bazi podatkov';
$lang['Timezone'] = 'Časovni pas';
$lang['Date_format'] = 'Oblika datuma';
$lang['Date_format_explain'] = 'Oblika zapisa je enaka kot pri PHP funkciji <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> function.';
$lang['Signature'] = 'Podpis';
$lang['Signature_explain'] = 'Podpis je besedilo, ki se samodejno doda na koncu vsake vaše objave. Dolžina besedila je omejena na %d črk';
$lang['Public_view_email'] = 'Vedno pokaži moj Elektronski naslov';

$lang['Current_password'] = 'Trenutno geslo';
$lang['New_password'] = 'Novo geslo';
$lang['Confirm_password'] = 'Potrdi geslo';
$lang['Confirm_password_explain'] = 'Potrdi z geslom vedno, kadar spreminjaš geslo ali elektronski naslov.';
$lang['password_if_changed'] = 'Geslo lahko spremeniš le, ko vpišeš tudi prejšnje geslo.';
$lang['password_confirm_if_changed'] = 'Geslo moraš tudi potrditi, ko ga zamenjaš.';

$lang['Avatar'] = 'Moja podoba';
$lang['Avatar_explain'] = 'Prikaže se majhna slika med podatki na levi ob vsakem tvojem prispevku. Prikaže se lahko samo ena slika, in sicer ne sme biti širša %d pikslov in ne višja od %d pikslov, dolžina datoteka pa ne sme biti večja od %dkB.';
$lang['Upload_Avatar_file'] = 'Naloži podobo iz svojega računalnika';
$lang['Upload_Avatar_URL'] = 'Naloži podobo iz URL naslova';
$lang['Upload_Avatar_URL_explain'] = 'Vnesi URL naslov, kjer je sličica tvoje podobe, preslikana bo na to stran.';
$lang['Pick_local_Avatar'] = 'Izberi podobo v naši galeriji';
$lang['Link_remote_Avatar'] = 'Povezava do podobe na neki drugi spletni strani';
$lang['Link_remote_Avatar_explain'] = 'Vnesi URL naslov, kjer je podoba, na katero se želiš povezati.';
$lang['Avatar_URL'] = 'URL naslov sličice - podobe';
$lang['Select_from_gallery'] = 'Izberi podobo iz naše galerije';
$lang['View_avatar_gallery'] = 'Pokaži galerijo';

$lang['Select_avatar'] = 'Izberi podobo';
$lang['Return_profile'] = 'Prekliči podobo';
$lang['Select_category'] = 'Izberi kategorijo (zvrst)';

$lang['Delete_Image'] = 'Izbriši sličico';
$lang['Current_Image'] = 'Trenutna sličica';

$lang['Notify_on_privmsg'] = 'Obvesti me, ko prejmem novo zasebno sporočilo';
$lang['Popup_on_privmsg'] = 'Pojavi se okno ob novem zasebnem sporočilu'; 
$lang['Popup_on_privmsg_explain'] = 'Nekatere predloge odprejo novo okno, kot obvestilo o novem zasebnem sporočilu.';
$lang['Hide_user'] = 'Skrij me, da ne bom viden med pregledovanjem foruma';

$lang['Profile_updated'] = 'Tvoj profil je posodobljen';
$lang['Profile_updated_inactive'] = 'Tvoj profil je posodobljen. Ker so bili spremenjeni ključni podatki, je tvoj račun zdaj neaktiviran. V tvojem elektronskem predalu te čaka elektronska pošta z navodili, kako ponovno aktivirati svoj račun. Če ga mora aktivirati Administrator, počakaj, da ga bo aktiviral.';

$lang['Password_mismatch'] = 'Gesli se ne ujemata.';
$lang['Current_password_mismatch'] = 'Vpisano geslo se ne ujema s tistim v bazi podatkov.';
$lang['Password_long'] = 'Geslo ne sme biti daljše od 32 znakov.';
$lang['Username_taken'] = 'To uporabniško ime je žal že zasedeno.';
$lang['Username_invalid'] = 'Vnešeno uporabniško ime vsebuje nedovoljen znak kot na primer \'.';
$lang['Username_disallowed'] = 'Žal, tako uporabniško ime ni dovoljeno.';
$lang['Email_taken'] = 'Žal, toda ta elektronski naslov je že registriral drug uporabnik.';
$lang['Email_banned'] = 'Žal, toda ta elektronski naslov je blokiran.';
$lang['Email_invalid'] = 'Vnešeni elektronski naslov je neveljaven.';
$lang['Signature_too_long'] = 'Tvoj podpis je predolg.';
$lang['Fields_empty'] = 'Izpolniti moraš zahtevana polja.';
$lang['Avatar_filetype'] = 'Tip datoteke za podobo mora biti .jpg, .gif ali .png';
$lang['Avatar_filesize'] = 'Datoteka podobe mora biti manjša od %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Podoba mora biti ožja od %d pikslov in nižja od %d pikslov'; 

$lang['Welcome_subject'] = 'Dobrodošli na  %s forumih'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Nov uporabniški račun';
$lang['Account_activated_subject'] = 'Račun je aktiviran';

$lang['Account_added'] = 'Zahvaljujemo se ti za registracijo. Tvoj račun je ustvarjen. Sedaj se lahko prijaviš s svojim uporabniškim imenom in geslom';
$lang['Account_inactive'] = 'Tvoj račun je ustvarjen. No, na tem forumu ga je potrebno aktivirati. Ključ za aktivacijo je bil poslan na tvoj e-poštni naslov, ki si ga vnesel/-la. Preveri elektronsko pošto, v sporočilu so nadaljnje informacije';
$lang['Account_inactive_admin'] = 'Tvoj račun je ustvarjen. No, na tem forumu ga mora aktivirati administrator. Poslano je E-sporočilo administratorju. Obveščen/a boš, ko bo račun aktiviran.';
$lang['Account_active'] = 'Tvoj račun sedaj aktiviran. Zahvaljujemo se ti za registracijo.';
$lang['Account_active_admin'] = 'Tvoj Račun je zdaj aktiviran.';
$lang['Reactivate'] = 'Ponovno aktiviraj svoj račun!';
$lang['Already_activated'] = 'Ta račun si že aktiviral.';
$lang['COPPA'] = 'Tvoj račun je ustvarjen, vendar mora biti še odobren. Prosim, preberi podrobnosti v E-pismu.';

$lang['Registration'] = 'Sprejmi naslednje postavke za registracijo';
$lang['Reg_agreement'] = 'Čeprav skušajo Administratorji in moderatorji tega foruma odstraniti ali popraviti neprimerna besedila tako hitro, kot je mogoče, ni mogoče preverjati vsakega sporočila. Zato vas obveščamo, da vsa sporočila, objavljena v tem forumu, izražajo mnenja in poglede avtorja sporočila in ne mnenja in pogleda upraviteljev, moderatorjev ali Administratorja (razen za njihova lastna sporočila) in zato za objavljena sporočila niso odgovorni.<br /><br />Zavezujete se, da ne boste objavljali sporočil z zlonamerno, žaljivo, nespodobno, vulgarno, obrekljivo, sovražno, grozečo, obsceno ali katerokoli vsebino, ki lahko prizadene druge uporabnike, člane tega foruma. Upravitelj strani si pridržuje pravico, da vam kadarkoli, trajno ali začasno, delno ali popolno prepreči dostop do forumov (lahko obvesti tudi vašega ponudnika interneta). Zaradi tega so IP številke vseh objavljenih sporočil shranjene, da se uredijo sporni primeri. Strinjate se, da ima Administrator, upravitelj ali moderator tega foruma pravico odstraniti, popraviti, premakniti ali zapreti katerokoli temo, ko se mu zdi to potrebno. Kot uporabnik se strinjate, da se vsi podatki, ki ste jih vpisali shranijo v bazo podatkov. Podatki ne bodo posredovani tretji strani brez vaše privolitve upravitelju strani. Upravitelj, Administratorji in Moderatorji ne prevzemajo odgovornosti za morebitni poskus vdora v bazo, ki bi ogrozil te podatke.<br /><br /> Sistem na tem forumu uporablja piškotke (cookies), ki shranijo podatke na vaš osebni računalnik. Ti piškotki ne vsebujejo nobene informacije, ki ste jo vnesli zgoraj; služijo samo za to, da olajšajo spremljanje foruma v vaše zadovoljstvo. Vaš elektronski naslov bo uporabljen le za potrditev podrobnosti in gesla pri vaši registraciji, (ter za pošiljanje novega gesla, če je pozabite obstoječe geslo).<br /><br /> Klikni Registriraj se spodaj, če se strinjaš z omejitvami teh pogojev. Če si v dvomih, se posvetuj z upravljalci strani.';

$lang['Agree_under_13'] = 'Sprejemam pogoje in sem star(a) <b>manj</b>  kot 13 let.';
$lang['Agree_over_13'] = 'Sprejemam pogoje in sem star(a) <b>več kot</b> ali <b>točno</b> 13 let.';
$lang['Agree_not'] = 'Ne strinjam se s temi pogoji.';

$lang['Wrong_activation'] = 'Aktivacijski ključ se ne ujema s tistim v naši bazi podatkov.';
$lang['Send_password'] = 'Pošlji mi novo geslo'; 
$lang['Password_updated'] = 'Ustvarjeno je novo geslo; preveri elektronsko pošto, kjer najdeš navodila za aktiviranje.';
$lang['No_email_match'] = 'Elektronski naslov se ne ujema s tistim, ki si ga vpisal/a ob uporabniškem imenu.';
$lang['New_password_activation'] = 'Aktiviranje novega gesla';
$lang['Password_activated'] = 'Tvoj račun je ponovno aktiviran. Za prijavo uporabi novo geslo, ki si ga prejel/a po elektronski pošti.';

$lang['Send_email_msg'] = 'Pošlji E-poštno sporočilo';
$lang['No_user_specified'] = 'Nisi določil Uporabnika';
$lang['User_prevent_email'] = 'Ta uporabnik ne želi sprejemati elektronske pošte. Poskusi poslati zasebno sporočilo.';
$lang['User_not_exist'] = 'Ta uporabnik ne obstaja';
$lang['CC_email'] = 'Pošlji kopijo tega E-sporočila tudi na svoj E-poštni naslov';
$lang['Email_message_desc'] = 'To sporočilo bo poslano kot navadno besedilo, zato ne vključuj HTML ali BBCode. Za odgovor na to sporočilo bo podan tvoj E-poštni naslov.';
$lang['Flood_email_limit'] = 'Trenutno ne moreš poslati še enega E-sporočila. Poskusi ponovno kasneje.';
$lang['Recipient'] = 'Prejemnik';
$lang['Email_sent'] = 'E-sporočilo je bilo poslano.';
$lang['Send_email'] = 'Pošlji E-sporočilo';
$lang['Empty_subject_email'] = 'Določiti moraš naslov E-sporočila.';
$lang['Empty_message_email'] = 'Vpisati moraš vsebino sporočila, ki ga pošiljaš.';

//
// Memberslist
//
$lang['Select_sort_method'] = 'Izberi način razvrščanja';
$lang['Sort'] = 'Razvrsti';
$lang['Sort_Top_Ten'] = '10 najbolj pridnih';
$lang['Sort_Joined'] = 'Po Datumu registracije';
$lang['Sort_Username'] = 'Po Uporabniškem imenu';
$lang['Sort_Location'] = 'Po kraju';
$lang['Sort_Posts'] = 'Po številu prispevkov';
$lang['Sort_Email'] = 'Po E-naslovu';
$lang['Sort_Website'] = 'Po spletni strani';
$lang['Sort_Ascending'] = 'Naraščajoče';
$lang['Sort_Descending'] = 'Padajoče';
$lang['Order'] = 'Razporedi';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Nadzorna plošča za skupine';
$lang['Group_member_details'] = 'Podrobnosti o članih skupine';
$lang['Group_member_join'] = 'Pridruži se skupini';

$lang['Group_Information'] = 'Informacije o skupini';
$lang['Group_name'] = 'Ime skupine';
$lang['Group_description'] = 'Opis skupine';
$lang['Group_membership'] = 'Članstvo skupine';
$lang['Group_Members'] = 'Člani in članice skupine';
$lang['Group_Moderator'] = 'Moderator/ka skupine';
$lang['Pending_members'] = 'Čakajoči člani';

$lang['Group_type'] = 'Tip skupine';
$lang['Group_open'] = 'Odprta skupina';
$lang['Group_closed'] = 'Zaprta skupina';
$lang['Group_hidden'] = 'Skrita skupina';

$lang['Current_memberships'] = 'Trenutno število članov';
$lang['Non_member_groups'] = 'Skupine brez članov';
$lang['Memberships_pending'] = 'Neodločeni člani';

$lang['No_groups_exist'] = 'Ni skupin';
$lang['Group_not_exist'] = 'Ta skupina ne obstaja';

$lang['Join_group'] = 'Pridruži se skupini';
$lang['No_group_members'] = 'Ta skupina nima članov';
$lang['Group_hidden_members'] = 'Ta skupina je skrita; ne moreš videti članstva';
$lang['No_pending_group_members'] = 'Ta skupina nima čakajočih članov';
$lang['Group_joined'] = 'Uspešno si se pridružil/a tej skupini.<br /> Obveščen/a boš, ko boš sprejet v skupino s strani moderatorja.';
$lang['Group_request'] = 'Zahteva za članstvo je bila posredovana.';
$lang['Group_approved'] = 'Tvoja zahteva je bila odobrena.';
$lang['Group_added'] = 'Včlanil si se v to skupino.'; 
$lang['Already_member_group'] = 'Si že član te skupine';
$lang['User_is_member_group'] = 'Uporabnik je že član te skupine';
$lang['Group_type_updated'] = 'Tip skupine je bil uspešno spremenjen.';

$lang['Could_not_add_user'] = 'Izbrani uporabnik ne obstaja.';
$lang['Could_not_anon_user'] = 'Če nisi registriran prej, ne moreš postati član skupine.';

$lang['Confirm_unsub'] = 'Ali se res želiš izpisati se iz te skupine?';
$lang['Confirm_unsub_pending'] = 'Tvoja zahteva za članstvo v tej skupini še ni bila odobrena; se res želiš izpisati?';

$lang['Unsub_success'] = 'Iz te skupine si izpisan.';

$lang['Approve_selected'] = 'Potrdi označene';
$lang['Deny_selected'] = 'Zavrni označene';
$lang['Not_logged_in'] = 'Če se želiš pridružiti tej skupini, se moraš prijaviti.';
$lang['Remove_selected'] = 'Odstrani označene';
$lang['Add_member'] = 'Dodaj člana';
$lang['Not_group_moderator'] = 'Nisi moderator skupine; to lahko napravi le moderator te skupine.';

$lang['Login_to_join'] = 'Prijavi se, če se želiš pridružiti skupini ali voditi člane.';
$lang['This_open_group'] = 'Ta skupina je odprta: klikni, če želiš postati član.';
$lang['This_closed_group'] = 'Ta skupina je zaprta: ne sprejemamo novih uporabnikov.';
$lang['This_hidden_group'] = 'Ta skupina je skrita: dodajanje uporabnikov ni omogočeno.';
$lang['Member_this_group'] = 'Si član te skupine';
$lang['Pending_this_group'] = 'Čakaš na članstvo v tej skupini.';
$lang['Are_group_moderator'] = 'Si moderator skupine';
$lang['None'] = 'Noben';

$lang['Subscribe'] = 'Vpiši se';
$lang['Unsubscribe'] = 'Izpiši se';
$lang['View_Information'] = 'Poglej podatke';


//
// Search
//
$lang['Search_query'] = 'Vsebina iskanja';
$lang['Search_options'] = 'Možnosti iskanja';

$lang['Search_keywords'] = 'Išči po ključnih besedah';
$lang['Search_keywords_explain'] = 'Za napredno iskanje lahko uporabljaš <u>AND</u> za besede, ki morajo biti v zadetkih, <u>OR</u> za besede ki so lahko v zadetkih in <u>NOT</u> za besede, ki ne smejo biti v zadetkih iskanja. Uporabi * kot iskalno kartico, s katero iščeš različice dela besede.';
$lang['Search_author'] = 'Išči po avtorju';
$lang['Search_author_explain'] = 'Uporabi * kot iskalno kartico, s katero iščeš različice dela besede';

$lang['Search_for_any'] = 'Išči poljuben izraz ali uporabi vnešeno poizvedbo.';
$lang['Search_for_all'] = 'Išči po vseh izrazih';
$lang['Search_title_msg'] = 'Išči v naslovu tem in besedilu sporočil.';
$lang['Search_msg_only'] = 'Išči samo v besedilu sporočil.';

$lang['Return_first'] = 'Prikaži prvih '; // followed by xxx characters in a select box
$lang['characters_posts'] = 'znakov/črk sporočil';

$lang['Search_previous'] = 'Išči sporočila novejša kot'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Razvrsti po';
$lang['Sort_Time'] = 'času objave';
$lang['Sort_Post_Subject'] = 'naslovu objave';
$lang['Sort_Topic_Title'] = 'naslovu teme';
$lang['Sort_Author'] = 'avtorju';
$lang['Sort_Forum'] = 'forumu';

$lang['Display_results'] = 'Prikaži zadetke v obliki';
$lang['All_available'] = 'Vse ustrezne';
$lang['No_searchable_forums'] = 'Nimaš dovoljenja za iskanje po forumih na tej strani.';

$lang['No_search_match'] = 'Nobena tema ali objava ne ustreza kriterijem iskanja';
$lang['Found_search_match'] = 'Najden %d zadetek'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Najdeno %d zadetkov'; // eg. Search found 24 matches

$lang['Close_window'] = 'Zapri okno';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Žal, vendar v tem forumu lahko objavljajo <b>kot obvestilo</b> le %s.';
$lang['Sorry_auth_sticky'] = 'Žal, vendar v tem forumu lahko objavljajo <b>kot ne prezri</b> le %s.'; 
$lang['Sorry_auth_read'] = 'Žal, vendar v tem forumu lahko prebirajo teme le %s.'; 
$lang['Sorry_auth_post'] = 'Žal, vendar v tem forumu lahko objavljajo teme le %s.'; 
$lang['Sorry_auth_reply'] = 'Žal, vendar v tem forumu lahko odgovarjajo na sporočila le %s.';
$lang['Sorry_auth_edit'] = 'Žal, vendar v tem forumu lahko urejajo/popravljajo prispevke le %s.'; 
$lang['Sorry_auth_delete'] = 'Žal, vendar v tem forumu lahko brišejo prispevke le %s.';
$lang['Sorry_auth_vote'] = 'Žal, vendar v tem forumu lahko glasujejo v anketah le %s.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>Gosti</b>';
$lang['Auth_Registered_Users'] = '<b>Registrirani uporabniki</b>';
$lang['Auth_Users_granted_access'] = '<b>Uporabniki s posebnim dovoljenjem za dostop</b>';
$lang['Auth_Moderators'] = '<b>Moderatorji</b>';
$lang['Auth_Administrators'] = '<b>Administratorji</b>';

$lang['Not_Moderator'] = 'Nisi moderator v tem forumu.';
$lang['Not_Authorised'] = 'Nepooblaščeni';

$lang['You_been_banned'] = 'Iz tega foruma si bil izločen.<br />Za dodatne informacije se, prosim, poveži z Administratorjem ali z upraviteljem foruma.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Trenutno na zvezi ni registriranih uporabnikov in '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Trenutno je na zvezi %d registriranih uporabnikov in '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Trenutno je na zvezi %d registriran uporabnik in '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'Na zvezi ni skritih uporabnikov'; // 6 Hidden users online
$lang['Hidden_users_online'] = 'Na zvezi je %d skritih uporabnikov'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d skrit uporabnik na zvezi'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Na zvezi je %d gostov'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Na zvezi ni gostov'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Na zvezi je %d gost'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Trenutno foruma nihče ne pregleduje priključen';

$lang['Online_explain'] = 'Podatki veljajo za uporabnike, ki so aktivni zadnjih pet minut.';

$lang['Forum_Location'] = 'Mesto na forumu';
$lang['Last_updated'] = 'Nazadnje osveženo';

$lang['Forum_index'] = 'Seznam foruma';
$lang['Logging_on'] = 'Prijavljanje';
$lang['Posting_message'] = 'Pošilja sporočilo';
$lang['Searching_forums'] = 'Išče po forumih';
$lang['Viewing_profile'] = 'Pregleduje profil';
$lang['Viewing_online'] = 'Pregleduje, kdo je na zvezi?';
$lang['Viewing_member_list'] = 'Pregleduje seznam članov';
$lang['Viewing_priv_msgs'] = 'Pregleduje zasebna sporočila';
$lang['Viewing_FAQ'] = 'Pregleduje Pomoč FAQ';
 
 
//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderatorjeva nadzorna plošča';
$lang['Mod_CP_explain'] = 'S pomočjo tega obrazca lahko izvršite množico opravkov za ta forum. Lahko zaklenete, odklenete, premaknete ali izbrišete poljubno število tem.';

$lang['Select'] = 'Izberi';
$lang['Delete'] = 'Izbriši';
$lang['Move'] = 'Premakni';
$lang['Lock'] = 'Zakleni';
$lang['Unlock'] = 'Odkleni';

$lang['Topics_Removed'] = 'Izbrane teme so bile uspešno odstranjene iz baze podatkov.';
$lang['Topics_Locked'] = 'Izbrane teme so zaklenjene.';
$lang['Topics_Moved'] = 'Izbrane teme so premaknjene.';
$lang['Topics_Unlocked'] = 'Izbrane teme so odklenjene.';
$lang['No_Topics_Moved'] = 'Nobena tema ni premaknjena.';

$lang['Confirm_delete_topic'] = 'Ali res želiš odstraniti izbrane teme?';
$lang['Confirm_lock_topic'] = 'Ali res želiš zakleniti izbrane teme?';
$lang['Confirm_unlock_topic'] = 'Ali res želiš odkleniti izbrane teme?';
$lang['Confirm_move_topic'] = 'Ali res želiš premakniti izbrane teme?';

$lang['Move_to_forum'] = 'Premakni v forum';
$lang['Leave_shadow_topic'] = 'Pusti sled teme v starem forumu.';

$lang['Split_Topic'] = 'Nadzorna plošča za Razdelitev teme.';
$lang['Split_Topic_explain'] = 'Z uporabo spodnjega obrazca lahko temo razdeliš na dve; ali tako, da <b>označiš posamezne objave</b> vsako posebej ali prelomiš <b>pri</b> označeni objavi.';
$lang['Split_title'] = 'Naslov nove teme';
$lang['Split_forum'] = 'Forum, v katerem bo nova tema';
$lang['Split_posts'] = 'Od-razdeli SAMO OZNAČENA sporočila';
$lang['Split_after'] = 'Prelomi in razdeli OD izbranega sporočila naprej';
$lang['Topic_split'] = 'Izbrana tema je bila uspešno razdeljena.';

$lang['Too_many_error'] = 'Izbral si preveč objav. Za prelom in oddelitev lahko izbereš le eno!';

$lang['None_selected'] = 'Za ta opravek nisi izbral nobene teme. Vrni se in izberi vsaj eno.';
$lang['New_forum'] = 'Nov forum';

$lang['This_posts_IP'] = 'IP naslov za ta prispevek (post)';
$lang['Other_IP_this_user'] = 'Drugi IP naslovi, od koder ta uporabnik objavlja';
$lang['Users_this_IP'] = 'Uporabniki, ki objavljajo s tega IP naslova';
$lang['IP_info'] = 'Podatki iz IP naslova';
$lang['Lookup_IP'] = 'Prikaži IP naslov';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Časovni pas %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 ur';
$lang['-11'] = 'GMT - 11 ur';
$lang['-10'] = 'GMT - 10 ur, HST (Hawaii)';
$lang['-9'] = 'GMT - 9 ur';
$lang['-8'] = 'GMT - 8 ur, PST (U.S./Canada)';
$lang['-7'] = 'GMT - 7 ur, MST (U.S./Canada)';
$lang['-6'] = 'GMT - 6 ur, CST (U.S./Canada)';
$lang['-5'] = 'GMT - 5 ur, EST (U.S./Canada)';
$lang['-4'] = 'GMT - 4 ur';
$lang['-3.5'] = 'GMT - 3.5 ure';
$lang['-3'] = 'GMT - 3 ure';
$lang['-2'] = 'GMT - 2 ure, Mid-Atlantic';
$lang['-1'] = 'GMT - 1 uro';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 ura, srednjeevropski - zimski čas';
$lang['2'] = 'GMT + 2 uri, srednjeevropski - poletni čas';
$lang['3'] = 'GMT + 3 ure';
$lang['3.5'] = 'GMT + 3.5 ure';
$lang['4'] = 'GMT + 4 ure';
$lang['4.5'] = 'GMT + 4.5 ure';
$lang['5'] = 'GMT + 5 ur';
$lang['5.5'] = 'GMT + 5.5 ur';
$lang['6'] = 'GMT + 6 ur';
$lang['6.5'] = 'GMT + 6.5 ur';
$lang['7'] = 'GMT + 7 ur';
$lang['8'] = 'GMT + 8 ur, WST (Australia)';
$lang['9'] = 'GMT + 9 ur';
$lang['9.5'] = 'GMT + 9.5 ur, CST (Australia)';
$lang['10'] = 'GMT + 10 ur, EST (Australia)';
$lang['11'] = 'GMT + 11 ur';
$lang['12'] = 'GMT + 12 ur';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 ur';
$lang['tz']['-11'] = 'GMT - 11 ur';
$lang['tz']['-10'] = 'GMT - 10 ur';
$lang['tz']['-9'] = 'GMT - 9 ur';
$lang['tz']['-8'] = 'GMT - 8 ur';
$lang['tz']['-7'] = 'GMT - 7 ur';
$lang['tz']['-6'] = 'GMT - 6 ur';
$lang['tz']['-5'] = 'GMT - 5 ur';
$lang['tz']['-4'] = 'GMT - 4 ure'; 
$lang['tz']['-3.5'] = 'GMT - 3.5 ure';
$lang['tz']['-3'] = 'GMT - 3 ure';
$lang['tz']['-2'] = 'GMT - 2 uri';
$lang['tz']['-1'] = 'GMT - 1 uro';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = '(GMT +1:00 ura) Slovenija, zimski čas';
$lang['tz']['2'] = '(GMT +2:00 uri) Slovenija, poletni čas';
$lang['tz']['3'] = 'GMT + 3 ure';
$lang['tz']['3.5'] = 'GMT + 3.5 ure';
$lang['tz']['4'] = 'GMT + 4 ure';
$lang['tz']['4.5'] = 'GMT + 4.5 ure';
$lang['tz']['5'] = 'GMT + 5 ur';
$lang['tz']['5.5'] = 'GMT + 5.5 ur';
$lang['tz']['6'] = 'GMT + 6 ur';
$lang['tz']['6.5'] = 'GMT + 6.5 ur';
$lang['tz']['7'] = 'GMT + 7 ur';
$lang['tz']['8'] = 'GMT + 8 ur';
$lang['tz']['9'] = 'GMT + 9 ur';
$lang['tz']['9.5'] = 'GMT + 9.5 ur';
$lang['tz']['10'] = 'GMT + 10 ur';
$lang['tz']['11'] = 'GMT + 11 ur';
$lang['tz']['12'] = 'GMT + 12 ur';
$lang['tz']['13'] = 'GMT + 13 ur';

$lang['datetime']['Sunday'] = 'Nedelja';
$lang['datetime']['Monday'] = 'Ponedeljek';
$lang['datetime']['Tuesday'] = 'Torek';
$lang['datetime']['Wednesday'] = 'Sreda';
$lang['datetime']['Thursday'] = 'Četrtek';
$lang['datetime']['Friday'] = 'Petek';
$lang['datetime']['Saturday'] = 'Sobota';
$lang['datetime']['Sun'] = 'Ned';
$lang['datetime']['Mon'] = 'Pon';
$lang['datetime']['Tue'] = 'Tor';
$lang['datetime']['Wed'] = 'Sre';
$lang['datetime']['Thu'] = 'Čet';
$lang['datetime']['Fri'] = 'Pet';
$lang['datetime']['Sat'] = 'Sob';
$lang['datetime']['January'] = 'Januar';
$lang['datetime']['February'] = 'Februar';
$lang['datetime']['March'] = 'Marec';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['June'] = 'Junij';
$lang['datetime']['July'] = 'Julij';
$lang['datetime']['August'] = 'Avgust';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'Oktober';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'December';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Avg';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dec';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Obvestilo';
$lang['Critical_Information'] = 'Pomembno obvestilo';

$lang['General_Error'] = 'Splošna napaka. Ojoj.';
$lang['Critical_Error'] = 'Kritična napaka. Ojoj.';
$lang['An_error_occured'] = 'Nastala je napaka. Ojoj.';
$lang['A_critical_error'] = 'Nastala je kritična napaka. Ojoj.';

//
// That's all, Folks!
// -------------------------------------------------

?>