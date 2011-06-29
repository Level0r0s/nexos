<?php
/***************************************************************************
 *                            lang_main.php [Finnish]
 *                              -------------------
 *     begin                : Tue Dec 18 2001
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2004/07/27 20:01:09 akamu Exp $
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

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  "d M Y"; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION_INFO'] = 'K&auml;&auml;nn&ouml;s Jorma Aaltonen, <a href="mailto:jorma&#64;pitro.com">jorma&#64;pitro.com</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Foorumi';
$lang['Category'] = 'Kategoria';
$lang['Topic'] = 'Aihe';
$lang['Topics'] = 'Aiheet';
$lang['Replies'] = 'Vastaukset';
$lang['Views'] = 'Luettu';
$lang['Post'] = 'L&auml;het&auml;';
$lang['Posts'] = 'Viestej&auml;';
$lang['Posted'] = 'L&auml;hetetty';
$lang['Username'] = 'K&auml;ytt&auml;j&auml;tunnus';
$lang['Password'] = 'Salasana';
$lang['Email'] = 'S&auml;hk&ouml;posti';
$lang['Poster'] = 'L&auml;hett&auml;j&auml;';
$lang['Author'] = 'Kirjoittaja';
$lang['Time'] = 'Aika';
$lang['Hours'] = 'Tunnit';
$lang['Message'] = 'Viesti';

$lang['1_Day'] = '1 p&auml;iv&auml;';
$lang['7_Days'] = '7 p&auml;iv&auml;&auml;';
$lang['2_Weeks'] = '2 viikkoa';
$lang['1_Month'] = '1 kuukausi';
$lang['3_Months'] = '3 kuukautta';
$lang['6_Months'] = '6 kuukautta';
$lang['1_Year'] = '1 vuosi';

$lang['Go'] = 'Siirry';
$lang['Jump_to'] = 'Siirry';
$lang['Submit'] = 'L&auml;het&auml;';
$lang['Reset'] = 'Resetoi';
$lang['Cancel'] = 'Peruuta';
$lang['Preview'] = 'Esikatselu';
$lang['Confirm'] = 'Vahvista';
$lang['Spellcheck'] = 'Oikeinkirjoitus';
$lang['Yes'] = 'Kyll&auml;';
$lang['No'] = 'Ei';
$lang['Enabled'] = 'Aktivoitu';
$lang['Disabled'] = 'Ei k&auml;yt&ouml;ss&auml;';
$lang['Error'] = 'Virhe';

$lang['Next'] = 'Seuraava';
$lang['Previous'] = 'Edellinen';
$lang['Goto_page'] = 'Siirry sivulle';
$lang['Joined'] = 'Liittynyt';
$lang['IP_Address'] = 'IP osoite';

$lang['Select_forum'] = 'Valitse foorumi';
$lang['View_latest_post'] = 'Katso viimeisin viesti';
$lang['View_newest_post'] = 'Katso uusin viesti';
$lang['Page_of'] = 'Sivu <b>%d</b> Yht. <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Numero';
$lang['AIM'] = 'AIM Osoite';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Foorumin p&auml;&auml;valikko';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'L&auml;het&auml; uusi viesti';
$lang['Reply_to_topic'] = 'Vastaa viestiin';
$lang['Reply_with_quote'] = 'Vastaa lainaamalla viesti&auml;';

$lang['Click_return_topic'] = 'Klikkaa %st&auml;st&auml;%s palataksesi viestiin'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Klikkaa %st&auml;st&auml;%s yritt&auml;&auml;ksesi uudelleen';
$lang['Click_return_forum'] = 'Klikkaa %st&auml;st&auml;%s palataksesi foorumiin';
$lang['Click_view_message'] = 'Klikkaa %st&auml;st&auml;%s n&auml;hd&auml;ksesi viestisi';
$lang['Click_return_modcp'] = 'Klikkaa %st&auml;st&auml;%s palataksesi Moderaattorin ohjauspaneeliin';
$lang['Click_return_group'] = 'Klikkaa %st&auml;st&auml;%s palataksesi ryhm&auml;n tietoihin';

$lang['Admin_panel'] = 'Siirry Hallintapaneeliin';

$lang['Board_disable'] = 'Valitettavasti t&auml;m&auml; sivusto on juuri nyt pois k&auml;yt&ouml;st&auml;, yrit&auml; my&ouml;hemmin uudestaan';


//
// Global Header strings
//
$lang['Registered_users'] = 'Rekister&ouml;ityj&auml; k&auml;ytt&auml;ji&auml;:';
$lang['Browsing_forum'] = 'K&auml;ytt&auml;ji&auml; selaamassa t&auml;t&auml; foorumia:';
$lang['Online_users_zero_total'] = 'Yhteens&auml; <b>0</b> k&auml;ytt&auml;j&auml;&auml; t&auml;ll&auml; hetkell&auml; :: ';
$lang['Online_users_total'] = 'Yhteens&auml; <b>%d</b> k&auml;ytt&auml;j&auml;&auml; t&auml;ll&auml; hetkell&auml; :: ';
$lang['Online_user_total'] = 'Yhteens&auml; <b>%d</b> k&auml;ytt&auml;j&auml; t&auml;ll&auml; hetkell&auml; :: ';
$lang['Reg_users_zero_total'] = '0 Rekister&ouml;ity&auml;, ';
$lang['Reg_users_total'] = '%d Rekister&ouml;ityj&auml;, ';
$lang['Reg_user_total'] = '%d Rekister&ouml;ity, ';
$lang['Hidden_users_zero_total'] = '0 Piilotettua ja ';
$lang['Hidden_user_total'] = '%d Piilotettuja ja ';
$lang['Hidden_users_total'] = '%d Piilotettu ja ';
$lang['Guest_users_zero_total'] = '0 Vierasta';
$lang['Guest_users_total'] = '%d Vieraita';
$lang['Guest_user_total'] = '%d Vieras';
$lang['Record_online_users'] = 'Eniten k&auml;ytt&auml;ji&auml; online on ollut <b>%s</b> ,p&auml;iv&auml;ys %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sYll&auml;pit&auml;j&auml;%s';
$lang['Mod_online_color'] = '%sModeraattori%s';

$lang['You_last_visit'] = 'Edellinen k&auml;yntisi oli %s'; // %s replaced by date/time
$lang['Current_time'] = 'Kellonaika on nyt %s'; // %s replaced by time

$lang['Search_new'] = 'Katso viime k&auml;yntisi j&auml;lkeen tulleet uudet viestit';
$lang['Search_your_posts'] = 'Katso omat viestisi';
$lang['Search_unanswered'] = 'Katso viestit joihin ei ole vastattu';

$lang['Register'] = 'Rekister&ouml;idy';
$lang['Profile'] = 'K&auml;ytt&auml;j&auml;tiedot';
$lang['Edit_profile'] = 'Muokkaa k&auml;ytt&auml;j&auml;tietoja';
$lang['Search'] = 'Haku';
$lang['Memberlist'] = 'K&auml;ytt&auml;j&auml;lista';
$lang['FAQ'] = 'Ohje';
$lang['BBCode_guide'] = 'BBCode ohje';
$lang['Usergroups'] = 'K&auml;ytt&auml;j&auml;ryhm&auml;t';
$lang['Last_Post'] = 'Viimeinen viesti';
$lang['Moderator'] = 'Moderaattori';
$lang['Moderators'] = 'Moderaattorit';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'K&auml;ytt&auml;j&auml;mme ovat kirjoittaneet yhteens&auml; <b>0</b> viesti&auml;'; // Number of posts
$lang['Posted_articles_total'] = 'K&auml;ytt&auml;j&auml;mme ovat kirjoittaneet yhteens&auml; <b>%d</b> viesti&auml;'; // Number of posts
$lang['Posted_article_total'] = 'K&auml;ytt&auml;j&auml;mme ovat kirjoittaneet yhteens&auml; <b>%d</b> viestin'; // Number of posts
$lang['Registered_users_zero_total'] = 'Meill&auml; on  <b>0</b> rekister&ouml;ity&auml; k&auml;ytt&auml;j&auml;&auml;'; // # registered users
$lang['Registered_users_total'] = 'Meill&auml; on  <b>%d</b> rekister&ouml;ity&auml; k&auml;ytt&auml;j&auml;&auml;'; // # registered users
$lang['Registered_user_total'] = 'Meill&auml; on <b>%d</b> rekister&ouml;ity k&auml;ytt&auml;j&auml;'; // # registered users
$lang['Newest_user'] = 'Uusin rekister&ouml;itynyt k&auml;ytt&auml;j&auml; on <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Ei uusia viestej&auml; edellisen k&auml;yntisi j&auml;lkeen';
$lang['No_new_posts'] = 'Ei uusia viestej&auml;';
$lang['New_posts'] = 'Uusia viestej&auml;';
$lang['New_post'] = 'Uusi viesti';
$lang['No_new_posts_hot'] = 'Ei uusia viestej&auml; [ Suosittu ]';
$lang['New_posts_hot'] = 'Uusia viestej&auml; [ Suosittu ]';
$lang['No_new_posts_locked'] = 'Ei uusia viestej&auml; [ Lukittu ]';
$lang['New_posts_locked'] = 'Uusia viestej&auml; [ Lukittu ]';
$lang['Forum_is_locked'] = 'Foorumi on lukittu';


//
// Login
//
$lang['Enter_password'] = 'Ole hyv&auml; ja anna k&auml;ytt&auml;j&auml;tunnus sek&auml; salasana kirjautumiseen';
$lang['Login'] = 'Kirjaudu sis&auml;&auml;n';
$lang['Logout'] = 'Kirjaudu ulos';

$lang['Forgotten_password'] = 'Unohdin salasanani';

$lang['Log_me_in'] = 'Kirjaa minut aina sis&auml;&auml;n automaattisesti';

$lang['Error_login'] = 'Annoit v&auml;&auml;r&auml;n tai passiivisen k&auml;ytt&auml;j&auml;tunnuksen tai salasana oli v&auml;&auml;rin';


//
// Index page
//
$lang['Index'] = 'P&auml;&auml;valikko';
$lang['No_Posts'] = 'Ei viestej&auml;';
$lang['No_forums'] = 'T&auml;ll&auml; sivustolla ei ole foorumeita';

$lang['Private_Message'] = 'Yksityisviesti';
$lang['Private_Messages'] = 'Yksityiset viestit';
$lang['Who_is_Online'] = 'Ket&auml; on paikalla';

$lang['Mark_all_forums'] = 'Merkitse kaikki foorumit luetuiksi';
$lang['Forums_marked_read'] = 'Kaikki foorumit on merkitty luetuiksi';


//
// Viewforum
//
$lang['View_forum'] = 'Siirry foorumiin';

$lang['Forum_not_exist'] = 'Valitsemaasi foorumia ei ole olemassa';
$lang['Reached_on_error'] = 'Olet t&auml;ll&auml; sivulla virhetilanteen vuoksi';

$lang['Display_topics'] = 'N&auml;yt&auml; edelliset aiheet';
$lang['All_Topics'] = 'Kaikki aiheet';

$lang['Topic_Announcement'] = '<b>Ilmoitus:</b>';
$lang['Topic_Sticky'] = '<b>Tiedote:</b>';
$lang['Topic_Moved'] = '<b>Siirretty:</b>';
$lang['Topic_Poll'] = '<b>[ &Auml;&auml;nestys ]</b>';

$lang['Mark_all_topics'] = 'Merkitse kaikki aiheet luetuiksi';
$lang['Topics_marked_read'] = 'T&auml;m&auml;n foorumin aiheet on merkitty luetuiksi';

$lang['Rules_post_can'] = '<b>Voit</b> kirjoittaa uusia viestej&auml; t&auml;ss&auml; foorumissa';
$lang['Rules_post_cannot'] = '<b>Et voi</b> kirjoittaa uusia viestej&auml; t&auml;ss&auml; foorumissa';
$lang['Rules_reply_can'] = '<b>Voit</b> vastata viesteihin t&auml;ss&auml; foorumissa';
$lang['Rules_reply_cannot'] = '<b>Et voi</b> vastata viesteihin t&auml;ss&auml; foorumissa';
$lang['Rules_edit_can'] = '<b>Voit</b> muokata viestej&auml;si t&auml;ss&auml; foorumissa';
$lang['Rules_edit_cannot'] = '<b>Et voi</b> muokata viestej&auml;si t&auml;ss&auml; foorumissa';
$lang['Rules_delete_can'] = '<b>Voit</b> poistaa viestej&auml;si t&auml;ss&auml; foorumissa';
$lang['Rules_delete_cannot'] = '<b>Et voi</b> poistaa viestej&auml;si t&auml;ss&auml; foorumissa';
$lang['Rules_vote_can'] = '<b>Voit</b> &auml;&auml;nest&auml;&auml; t&auml;ss&auml; foorumissa';
$lang['Rules_vote_cannot'] = '<b>Et voi</b> &auml;&auml;nest&auml;&auml; t&auml;ss&auml; foorumissa';
$lang['Rules_moderate'] = '<b>Voit</b> %smoderoida t&auml;t&auml; foorumia%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'T&auml;ss&auml; foorumissa ei ole viestej&auml;<br />Klikkaa <b>Uusi aihe</b> linkki&auml; t&auml;ll&auml; sivulla kirjoittaaksi viestin';


//
// Viewtopic
//
$lang['View_topic'] = 'N&auml;yt&auml; viesti';

$lang['Guest'] = 'Vieras';
$lang['Post_subject'] = 'Viestin aihe';
$lang['View_next_topic'] = 'N&auml;yt&auml; seuraava aihe';
$lang['View_previous_topic'] = 'N&auml;yt&auml; edellinen aihe';
$lang['Submit_vote'] = '&Auml;&auml;nest&auml;';
$lang['View_results'] = 'N&auml;yt&auml; tulokset';

$lang['No_newer_topics'] = 'T&auml;ss&auml; foorumissa ei ole uudempia aiheita';
$lang['No_older_topics'] = 'T&auml;ss&auml; foorumissa ei ole vanhempia aiheita';
$lang['Topic_post_not_exist'] = 'Hakemaasi aihetta tai viesti&auml; ei l&ouml;ydy';
$lang['No_posts_topic'] = 'Otsikolla ei ole viestej&auml;';

$lang['Display_posts'] = 'N&auml;yt&auml; edelliset viestit';
$lang['All_Posts'] = 'Kaikki viestit';
$lang['Newest_First'] = 'Uusin ensin';
$lang['Oldest_First'] = 'Vanhin ensin';

$lang['Back_to_top'] = 'Takaisin alkuun';

$lang['Read_profile'] = 'N&auml;yt&auml; k&auml;ytt&auml;j&auml;n tiedot'; 
$lang['Send_email'] = 'L&auml;het&auml; s&auml;hk&ouml;postia k&auml;ytt&auml;j&auml;lle';
$lang['Visit_website'] = 'K&auml;y l&auml;hett&auml;j&auml;n sivustolla';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Muokkaa/Poista viesti';
$lang['View_IP'] = 'N&auml;yt&auml; l&auml;hett&auml;j&auml;n IP';
$lang['Delete_post'] = 'Poista viesti';

$lang['wrote'] = 'kirjoitti'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Lainaus'; // comes before bbcode quote output.
$lang['Code'] = 'Koodi'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Viimeinen muokkaaja, %s pvm %s, muokattu %d kertaa'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Viimeinen muokkaaja, %s pvm %s, muokattu %d kertaa'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Lukitse aihe';
$lang['Unlock_topic'] = 'Poista aiheen lukitus';
$lang['Move_topic'] = 'Siirr&auml; aihe';
$lang['Delete_topic'] = 'Poista t&auml;m&auml; aihe';
$lang['Split_topic'] = 'Jaa t&auml;m&auml; aihe';

$lang['Stop_watching_topic'] = 'Lopeta aiheen seuraaminen';
$lang['Start_watching_topic'] = 'Seuraa aiheen vastauksia';
$lang['No_longer_watching'] = 'Aihetta ei en&auml;&auml; seurata';
$lang['You_are_watching'] = 'Aihe on nyt seurannassa';

$lang['Total_votes'] = '&Auml;&auml;ni&auml; yhteens&auml;';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Viestin teksti';
$lang['Topic_review'] = 'Aiheen tarkistus';

$lang['No_post_mode'] = 'Viestin muotoa ei ole m&auml;&auml;ritetty'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Luo uusi aihe';
$lang['Post_a_reply'] = 'Vastaa';
$lang['Post_topic_as'] = 'Viestin muoto';
$lang['Edit_Post'] = 'Muokkaa viesti&auml;';
$lang['Options'] = 'Vaihtoehdot';

$lang['Post_Announcement'] = 'Ilmoitus';
$lang['Post_Sticky'] = 'Tiedote';
$lang['Post_Normal'] = 'Normaali';

$lang['Confirm_delete'] = 'Oletko varma, ett&auml; haluat poistaa t&auml;m&auml;n viestin?';
$lang['Confirm_delete_poll'] = 'Oletko varma, ett&auml; haluat poistaa t&auml;m&auml;n &auml;&auml;nestyksen?';

$lang['Flood_Error'] = 'Et voi tehd&auml; uutta viesti&auml; heti edellisen j&auml;lkeen, ole hyv&auml; ja yrit&auml; hetken kuluttua uudelleen';
$lang['Empty_subject'] = 'Sinun on annettava uudelle aiheelle selite';
$lang['Empty_message'] = 'Sinun on kirjoitettava jotain viestiin';
$lang['Forum_locked'] = 'T&auml;m&auml; foorumi on lukittu, et voi kirjoittaa uusia viestej&auml;, vastata vanhoihin tai muokata viestej&auml;';
$lang['Topic_locked'] = 'T&auml;m&auml; aihe on lukittu, et voi muokata vastauksia tai kirjoittaa uusia vastauksia';
$lang['No_post_id'] = 'Sinun on valittava viesti jota muokkaat';
$lang['No_topic_id'] = 'Sinun on valittava aihe, johon vastaat';
$lang['No_valid_mode'] = 'Voit vain luoda viestej&auml;, vastata, muokata tai lainata viestej&auml;, ole hyv&auml; ja yrit&auml; uudelleen';
$lang['No_such_post'] = 'Haluttua aihetta ei l&ouml;ydy, ole hyv&auml; ja yrit&auml; uudelleen';
$lang['Edit_own_posts'] = 'Valitettavasti voit muokata vain omia viestej&auml;si';
$lang['Delete_own_posts'] = 'Valitettavasti voit poistaa vain omia viestej&auml;si';
$lang['Cannot_delete_replied'] = 'Valitettavasti et voi poistaa viestej&auml; joihin on vastattu';
$lang['Cannot_delete_poll'] = 'Valitettavasti et voi poistaa aktiivista &auml;&auml;nestyst&auml;';
$lang['Empty_poll_title'] = 'Sinun on annettava &auml;&auml;nestykselle nimi';
$lang['To_few_poll_options'] = '&Auml;&auml;nestykselle on annettava v&auml;hint&auml;&auml;n kaksi vaihtoehtoa';
$lang['To_many_poll_options'] = 'Annoit liikaa vaihtoehtoja &auml;&auml;nestykseen';
$lang['Post_has_no_poll'] = 'T&auml;ss&auml; viestiss&auml; ei ole &auml;&auml;nestyst&auml;';
$lang['Already_voted'] = 'Olet jo &auml;&auml;nest&auml;nyt t&auml;ss&auml; &auml;&auml;nestyksess&auml;';
$lang['No_vote_option'] = 'Sinun valittava vaihtoehto &auml;&auml;nest&auml;ess&auml;si';

$lang['Add_poll'] = 'Lis&auml;&auml; &auml;&auml;nestys';
$lang['Add_poll_explain'] = 'Jos et halua lis&auml;t&auml; &auml;&auml;nestyst&auml; viestiisi j&auml;t&auml; t&auml;m&auml; kentt&auml; tyhj&auml;ksi';
$lang['Poll_question'] = '&Auml;&auml;nestyksen aihe';
$lang['Poll_option'] = '&Auml;&auml;nestysvaihtoehto';
$lang['Add_option'] = 'Lis&auml;&auml; vaihtoehto';
$lang['Update'] = 'P&auml;ivit&auml;';
$lang['Delete'] = 'Poista';
$lang['Poll_for'] = '&Auml;&auml;nestys on voimassa';
$lang['Days'] = 'P&auml;iv&auml;&auml;'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Anna 0 tai j&auml;t&auml; tyhj&auml;ksi ikuiselle &auml;&auml;nestykselle ]';
$lang['Delete_poll'] = 'Poista &auml;&auml;nestys';

$lang['Disable_HTML_post'] = '&Auml;l&auml; salli HTML muotoiluja t&auml;ss&auml; viestiss&auml;';
$lang['Disable_BBCode_post'] = '&Auml;l&auml; salli BBCode muotoiluja t&auml;ss&auml; viestiss&auml;';
$lang['Disable_Smilies_post'] = '&Auml;l&auml; salli hymi&ouml;it&auml; t&auml;ss&auml; viestiss&auml;';

$lang['HTML_is_ON'] = 'HTML on <u>P&Auml;&Auml;LL&Auml;</u>';
$lang['HTML_is_OFF'] = 'HTML on <u>POIS P&Auml;&Auml;LT&Auml;</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s on <u>P&Auml;&Auml;LL&Auml;</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s on <u>POIS P&Auml;&Auml;LT&Auml;</u>';
$lang['Smilies_are_ON'] = 'Hymi&ouml;t ovat <u>P&Auml;&Auml;LL&Auml;</u>';
$lang['Smilies_are_OFF'] = 'Hymi&ouml;t ovat <u>POIS P&Auml;&Auml;LT&Auml;</u>';

$lang['Attach_signature'] = 'Liit&auml; allekirjoitus (allekirjoitusta voidaan vaihtaa k&auml;ytt&auml;j&auml;tiedoissa)';
$lang['Notify'] = 'Ilmoita vastauksesta';
$lang['Delete_post'] = 'Poista t&auml;m&auml; viesti';

$lang['Stored'] = 'Viestisi on talletettu';
$lang['Deleted'] = 'Viestisi on poistettu';
$lang['Poll_delete'] = '&Auml;&auml;nestyksesi on poistettu';
$lang['Vote_cast'] = '&Auml;&auml;nesi on rekister&ouml;ity';

$lang['Topic_reply_notification'] = 'Ilmoitus vastauksesta aiheeseen';

$lang['bbcode_b_help'] = 'Lihavointi: [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kursivointi: [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Alleviivaus: [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Lainaus: [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Koodin n&auml;ytt&ouml;: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Luettelo: [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'J&auml;rjestetty luettelo: [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Lis&auml;&auml; kuva: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Lis&auml;&auml; URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Sulje kaikki avoimet bbCode tagit';
$lang['bbcode_s_help'] = 'Fontin v&auml;ri: [color=red]text[/color]  Vihje: voit k&auml;ytt&auml;&auml; my&ouml;s color=#FF0000';
$lang['bbcode_f_help'] = 'Fontin koko: [size=x-small]small text[/size]';

$lang['Emoticons'] = 'Hymi&ouml;t';
$lang['More_emoticons'] = 'Lis&auml;&auml; hymi&ouml;it&auml;';

$lang['Font_color'] = 'Fontin v&auml;ri';
$lang['color_default'] = 'Oletus';
$lang['color_dark_red'] = 'Tumman punainen';
$lang['color_red'] = 'Punainen';
$lang['color_orange'] = 'Oranssi';
$lang['color_brown'] = 'Ruskea';
$lang['color_yellow'] = 'Keltainen';
$lang['color_green'] = 'Vihre&auml;';
$lang['color_olive'] = 'Oliivi';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Sininen';
$lang['color_dark_blue'] = 'Tumman Sininen';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violetti';
$lang['color_white'] = 'Valkoinen';
$lang['color_black'] = 'Musta';

$lang['Font_size'] = 'Fontin koko';
$lang['font_tiny'] = 'Eritt&auml;in pieni';
$lang['font_small'] = 'Pieni';
$lang['font_normal'] = 'Normaali';
$lang['font_large'] = 'Iso';
$lang['font_huge'] = 'Eritt&auml;in iso';

$lang['Close_Tags'] = 'Sulje tagit';
$lang['Styles_tip'] = 'Vihje: Tyylej&auml; voi k&auml;ytt&auml;&auml; valittuun tekstiin nopeasti';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Yksityiset viestit';

$lang['Login_check_pm'] = 'Kirjaudu sis&auml;&auml;n tarkistaaksesi yksityiset viestit';
$lang['New_pms'] = 'Sinulla on  %d uutta viesti&auml;'; // You have 2 new messages
$lang['New_pm'] = 'Sinulla on %d uusi viesti'; // You have 1 new message
$lang['No_new_pm'] = 'Sinulla ei ole uusia viestej&auml;';
$lang['Unread_pms'] = 'Sinulla on  %d lukematonta viesti&auml;';
$lang['Unread_pm'] = 'Sinulla on  %d lukematon viesti';
$lang['No_unread_pm'] = 'Sinulla ei ole lukemattomia viestej&auml;';
$lang['You_new_pm'] = 'Uusi yksityinen viesti odottaa postilaatikossasi';
$lang['You_new_pms'] = 'Uusia yksityisi&auml; viestej&auml; odottaa postilaatikossasi';
$lang['You_no_new_pm'] = 'Sinulla ei ole uusia yksityisi&auml; viestej&auml;';

$lang['Unread_message'] = 'Lukematon viesti';
$lang['Read_message'] = 'Lue viesti';

$lang['Read_pm'] = 'Lue viesti';
$lang['Post_new_pm'] = 'Uusi viesti';
$lang['Post_reply_pm'] = 'Vastaa viestiin';
$lang['Post_quote_pm'] = 'Lainaa viesti&auml;';
$lang['Edit_pm'] = 'Muokkaa viesti&auml;';

$lang['Inbox'] = 'Tulevat';
$lang['Outbox'] = 'L&auml;htev&auml;t';
$lang['Savebox'] = 'Tallennetut';
$lang['Sentbox'] = 'L&auml;hetetyt';
$lang['Flag'] = 'Lippu';
$lang['Subject'] = 'Aihe';
$lang['From'] = 'Kenelt&auml;';
$lang['To'] = 'Kenelle';
$lang['Date'] = 'P&auml;iv&auml;ys';
$lang['Mark'] = 'Merkki';
$lang['Sent'] = 'L&auml;hetetty';
$lang['Saved'] = 'Tallennettu';
$lang['Delete_marked'] = 'Poista merkityt';
$lang['Delete_all'] = 'Poista kaikki';
$lang['Save_marked'] = 'Tallenna merkityt'; 
$lang['Save_message'] = 'Tallenna viesti';
$lang['Delete_message'] = 'Poista viesti';

$lang['Display_messages'] = 'N&auml;yt&auml; viestit edellisilt&auml;'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Kaikki viestit';

$lang['No_messages_folder'] = 'Sinulla ei ole viestej&auml; t&auml;ss&auml; kansiossa';

$lang['PM_disabled'] = 'Yksityisviestit eiv&auml;t ole k&auml;yt&ouml;ss&auml; t&auml;ll&auml; sivustolla';
$lang['Cannot_send_privmsg'] = 'Valitettavasti yll&auml;pito est&auml;&auml; yksityisviestin l&auml;hett&auml;misen';
$lang['No_to_user'] = 'Sinun on annettava vastaanottavan henkil&ouml;n k&auml;ytt&auml;j&auml;tunnus';
$lang['No_such_user'] = 'Valitettavasti k&auml;ytt&auml;j&auml;tunnusta ei l&ouml;ydy';

$lang['Disable_HTML_pm'] = '&Auml;l&auml; salli HTML muotoiluja t&auml;ss&auml; viestiss&auml;';
$lang['Disable_BBCode_pm'] = '&Auml;l&auml; salli BBCode muotoiluja t&auml;ss&auml; viestiss&auml;';
$lang['Disable_Smilies_pm'] = '&Auml;l&auml; salli hymi&ouml;it&auml; t&auml;ss&auml; viestiss&auml;';

$lang['Message_sent'] = 'Viestisi on l&auml;hetetty';

$lang['Click_return_inbox'] = 'Klikkaa %st&auml;st&auml;%s palataksesi saapuvan postin kansioon';
$lang['Click_return_index'] = 'Klikkaa %st&auml;st&auml;%s palataksesi p&auml;&auml;sivulle.';

$lang['Send_a_new_message'] = 'L&auml;het&auml; uusi yksityinen viesti';
$lang['Send_a_reply'] = 'Vastaa yksityiseen viestiin';
$lang['Edit_message'] = 'Muokkaa yksityist&auml; viesti&auml;';

$lang['Notification_subject'] = 'Uusi yksityinen viesti on saapunut';

$lang['Find_username'] = 'Etsi k&auml;ytt&auml;j&auml;tunnus';
$lang['Find'] = 'Etsi';
$lang['No_match'] = 'Tietoja ei l&ouml;ytynyt';

$lang['No_post_id'] = 'Viestin ID ei ole m&auml;&auml;ritelty';
$lang['No_such_folder'] = 'Kansiota ei ole olemassa';
$lang['No_folder'] = 'Kansiota ei ole m&auml;&auml;ritelty';

$lang['Mark_all'] = 'Merkitse kaikki';
$lang['Unmark_all'] = 'Poista merkint&auml; kaikista';

$lang['Confirm_delete_pm'] = 'Oletko varma, ett&auml; haluat poistaa t&auml;m&auml;n viestin?';
$lang['Confirm_delete_pms'] = 'Oletko varma, ett&auml; haluat poistaa n&auml;m&auml; viestit?';

$lang['Inbox_size'] = 'Sis&auml;&auml;ntulevan postin kansiosta on %d%% k&auml;ytetty'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'L&auml;htev&auml;n postin kansiosta on %d%% k&auml;ytetty'; 
$lang['Savebox_size'] = 'Tallennetun postin kansiosta on  %d%% k&auml;ytetty'; 

$lang['Click_view_privmsg'] = 'Klikkaa %st&auml;st&auml;%s siirty&auml;ksesi sis&auml;&auml;ntulevan postin kansioon';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'K&auml;ytt&auml;j&auml;tiedot :: %s'; // %s is username 
$lang['About_user'] = 'Kaikki k&auml;ytt&auml;j&auml;st&auml; %s'; // %s is username

$lang['Preferences'] = 'Valinnat';
$lang['Items_required'] = 'Kent&auml;t, jotka on merkitty * ovat pakollisia ellei muuta mainita';
$lang['Registration_info'] = 'Rekister&ouml;intitiedot';
$lang['Profile_info'] = 'K&auml;ytt&auml;j&auml;tiedot';
$lang['Profile_info_warn'] = 'N&auml;m&auml; tiedot ovat kaikille n&auml;kyviss&auml;';
$lang['Avatar_panel'] = 'Avatarien ohjauspaneeli';
$lang['Avatar_gallery'] = 'Avatar galleria';

$lang['Website'] = 'Kotisivu';
$lang['Location'] = 'Paikkakunta';
$lang['Contact'] = 'Yhteystiedot';
$lang['Email_address'] = 'S&auml;hk&ouml;postiosoite';
$lang['Email'] = 'S&auml;hk&ouml;posti';
$lang['Send_private_message'] = 'L&auml;het&auml; yksityinen viesti';
$lang['Hidden_email'] = '[ Piilotettu ]';
$lang['Search_user_posts'] = 'Etsi t&auml;m&auml;n k&auml;ytt&auml;j&auml;n kirjoittamat viestit';
$lang['Interests'] = 'Harrastukset';
$lang['Occupation'] = 'Ammatti'; 
$lang['Poster_rank'] = 'K&auml;ytt&auml;j&auml;titteli';

$lang['Total_posts'] = 'Viestej&auml; yhteens&auml;';
$lang['User_post_pct_stats'] = '%.2f%% kaikista viesteist&auml;'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f viesti&auml; per p&auml;iv&auml;'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Etsi kaikki viestit, jotka on kirjoittanut %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Valitettavasti k&auml;ytt&auml;j&auml;tunnusta ei ole olemassa';
$lang['Wrong_Profile'] = 'Et voi muokata toisen k&auml;ytt&auml;j&auml;tunnuksen tietoja.';

$lang['Only_one_avatar'] = 'Voit m&auml;&auml;ritell&auml; vain yhden Avatarin';
$lang['File_no_data'] = 'Antamassasi URL:ssa ei ole dataa';
$lang['No_connection_URL'] = 'Yhteytt&auml; antamaasi URL:iin ei saatu';
$lang['Incomplete_URL'] = 'Antamasi URL ei ole t&auml;ydellinen';
$lang['Wrong_remote_avatar_format'] = 'URL ulkoiselle Avatarille ei ole kelvollinen';
$lang['No_send_account_inactive'] = 'Valitettavasti salasanaasi ei voida selvitt&auml;&auml; koska k&auml;ytt&auml;j&auml;tunnuksesi ei ole aktiivinen. Ole hyv&auml; ja ota yhteytt&auml; yll&auml;pitoon mik&auml;li haluat lis&auml;tietoja';

$lang['Always_smile'] = 'Salli aina hymi&ouml;t';
$lang['Always_html'] = 'Salli aina HTML';
$lang['Always_bbcode'] = 'Salli aina BBCode';
$lang['Always_add_sig'] = 'Liit&auml; aina allekirjoitus';
$lang['Always_notify'] = 'L&auml;het&auml; aina ilmoitus vastauksista';
$lang['Always_notify_explain'] = 'Saat s&auml;hk&ouml;postia kun joku vastaa luomaasi aiheeseen. Voit muuttaa t&auml;t&auml; jokaiselle viestille';

$lang['Board_style'] = 'Sivuston tyyli';
$lang['Board_lang'] = 'Sivuston kieli';
$lang['No_themes'] = 'Ei teemoja tietokannassa';
$lang['Timezone'] = 'Aikavy&ouml;hyke';
$lang['Date_format'] = 'P&auml;iv&auml;yksen muoto';
$lang['Date_format_explain'] = 'Syntaksin muoto vastaa PHP:n <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> funktiota';
$lang['Signature'] = 'Allekirjoitus';
$lang['Signature_explain'] = 'T&auml;m&auml; teksti voidaan lis&auml;t&auml; kirjoittamiisi viesteihin. K&auml;yt&ouml;ss&auml; on %d merkin rajoitus.';
$lang['Public_view_email'] = 'N&auml;yt&auml; aina s&auml;hk&ouml;postiosoitteeni';

$lang['Current_password'] = 'Nykyinen salasana';
$lang['New_password'] = 'Uusi salasana';
$lang['Confirm_password'] = 'Vahvista salasana';
$lang['Confirm_password_explain'] = 'Sinun t&auml;ytyy varmentaa nykyinen salasanasi jos haluat muuttaa sit&auml; tai s&auml;hk&ouml;postiosoitettasi';
$lang['password_if_changed'] = 'Anna salasana vain jos haluat vaihtaa sit&auml;';
$lang['password_confirm_if_changed'] = 'Vahvistus tarvitaan vain jos muutit salasanaa yl&auml;puolella olevassa kent&auml;ss&auml;';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'N&auml;ytt&auml;&auml; pienen graafisen kuvan tietojesi alla viestiruudussa. Vain yksi Avatar kerrallaan, jonka leveys ei voi olla suurempi kuin %d pixeli&auml;, ja korkeus ei voi ylitt&auml;&auml; %d pixeli&auml; ja tiedoston koko korkeintaan %dkB.'; $lang['Upload_Avatar_file'] = 'Lataa Avatar omalta koneeltasi';
$lang['Upload_Avatar_URL'] = 'Lataa Avatar URL:sta';
$lang['Upload_Avatar_URL_explain'] = 'Anna URL, Avatar tiedostoon, tiedosto kopioidaan t&auml;lle palvelimelle.';
$lang['Pick_local_Avatar'] = 'Valitse Avatar galleriasta';
$lang['Link_remote_Avatar'] = 'Linkki ulkopuoliseen Avatariin';
$lang['Link_remote_Avatar_explain'] = 'Anna URL tiedostoon, jonka Avatar kuvan haluat linkitt&auml;&auml;.';
$lang['Avatar_URL'] = 'Avatar kuvan URL';
$lang['Select_from_gallery'] = 'Valitse Avatar galleriasta';
$lang['View_avatar_gallery'] = 'N&auml;yt&auml; galleria';

$lang['Select_avatar'] = 'Valitse avatar';
$lang['Return_profile'] = 'Peruuta avatar valinta';
$lang['Select_category'] = 'Valitse categoria';

$lang['Delete_Image'] = 'Poista kuva';
$lang['Current_Image'] = 'Nykyinen kuva';

$lang['Notify_on_privmsg'] = 'Ilmoita uudesta yksityisest&auml; viestist&auml;';
$lang['Popup_on_privmsg'] = 'Pop up ikkuna uudesta yksityisest&auml; viestist&auml;'; 
$lang['Popup_on_privmsg_explain'] = 'Jotkut sivumallit voivat avata uuden ikkunan kun uusi yksityinen viesti saapuu'; 
$lang['Hide_user'] = 'Piilota online status';

$lang['Profile_updated'] = 'K&auml;ytt&auml;j&auml;tietosi on p&auml;ivitetty';
$lang['Profile_updated_inactive'] = 'K&auml;ytt&auml;j&auml;tietosi on p&auml;ivitetty, Olet kuitenkin muuttanut joitakin t&auml;rkeit&auml; tietoja tunnuksesi ei ole aktiivinen. Tarkista s&auml;hk&ouml;postistasi kuinka saat tunnuksesi taas aktivoitua. Jos sivuston yll&auml;pito suorittaa aktivoinnin odota kunnes tunnuksesi on j&auml;lleen aktivoitu';

$lang['Password_mismatch'] = 'Antamasi salasanat eiv&auml;t t&auml;sm&auml;nneet';
$lang['Current_password_mismatch'] = 'Antamasi nykyinen salasana ei t&auml;sm&auml;&auml; tietokantaan tallennetun kanssa';
$lang['Password_long'] = 'Salasana saa olla korkeintaan 32 merkki&auml;';
$lang['Username_taken'] = 'Valitettavasti k&auml;ytt&auml;j&auml;tunnus on jo varattu';
$lang['Username_invalid'] = 'Valitettavsti k&auml;ytt&auml;j&auml;tunnus sis&auml;lt&auml;&auml; kielletyn merkin kuten \"';
$lang['Username_disallowed'] = 'Valitettavasti k&auml;ytt&auml;j&auml;tunnus ei ole sallittu';
$lang['Email_taken'] = 'Valitettavasti s&auml;hk&ouml;postiosoite on jo k&auml;yt&ouml;ss&auml; rekister&ouml;idyll&auml; k&auml;ytt&auml;j&auml;ll&auml;';
$lang['Email_banned'] = 'Valitettavasti s&auml;hk&ouml;postiosoite on porttikiellossa';
$lang['Email_invalid'] = 'Valitettavasti antamasi s&auml;hk&ouml;postiosoite ei ole oikeassa muodossa';
$lang['Signature_too_long'] = 'Allekirjoituksesi on liian pitk&auml;';
$lang['Fields_empty'] = 'Kaikki pakolliset kent&auml;t on t&auml;ytett&auml;v&auml;';
$lang['Avatar_filetype'] = 'Avatarin tiedostotyypin tulee olla .jpg, .gif tai .png';
$lang['Avatar_filesize'] = 'Avatarin tiedoston koko pit&auml;&auml; olla v&auml;hemm&auml;n kuin %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Avatarin tulee olla v&auml;hemm&auml;n kuin %d pixeli&auml; leve&auml; ja %d pixeli&auml; korkea'; 

$lang['Welcome_subject'] = 'Tervetuloa %s Foorumeihin'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Uusi k&auml;ytt&auml;j&auml;tunnus';
$lang['Account_activated_subject'] = 'K&auml;ytt&auml;j&auml;tunnus aktivoitu';

$lang['Account_added'] = 'Kiitoksia rekister&ouml;itymisest&auml;, k&auml;ytt&auml;j&auml;tunnuksesi on luotu. Voit nyt kirjautua sis&auml;&auml;n k&auml;ytt&auml;j&auml;tunnuksellasi ja salasanalla';
$lang['Account_inactive'] = 'K&auml;ytt&auml;j&auml;tunnuksesi on luotu. T&auml;m&auml; sivusto vaatii kuitenkin tunnuksen aktivoinnin, aktivointiavain on l&auml;hetetty s&auml;hk&ouml;postiosoitteeseen jonka annoit. Tarkista s&auml;hk&ouml;postistasi lis&auml;ohjeet.';
$lang['Account_inactive_admin'] = 'K&auml;ytt&auml;j&auml;tunnuksesi on luotu. T&auml;m&auml; sivusto vaatii kuitenkin, ett&auml; yll&auml;pito aktivoi k&auml;ytt&auml;j&auml;tunnuksen. Heille on l&auml;hetetty s&auml;hk&ouml;posti ja saat tiedon kun k&auml;ytt&auml;j&auml;tunnuksesi on aktivoitu';
$lang['Account_active'] = 'K&auml;ytt&auml;j&auml;tunnuksesi on aktivoitu. Kiitoksia rekister&ouml;itymisest&auml;';
$lang['Account_active_admin'] = 'K&auml;ytt&auml;j&auml;tunnus on nyt aktivoitu';
$lang['Reactivate'] = 'Aktivoi uudelleen k&auml;ytt&auml;j&auml;tunnuksesi!';
$lang['Already_activated'] = 'Olet jo aktivoinut k&auml;ytt&auml;j&auml;tunnukses';
$lang['COPPA'] = 'K&auml;ytt&auml;j&auml;tunnuksesi on luotu mutta vaatii vahvistuksen. Tarkista s&auml;hk&ouml;postistasi lis&auml;ohjeet.';

$lang['Registration'] = 'Rekister&ouml;intisopimus';
$lang['Reg_agreement'] = 'Vaikka t&auml;m&auml;n sivuston yll&auml;pit&auml;j&auml;t ja moderaattorit pyrkiv&auml;t poistamaan tai muokkaamaan kaiken yleisesti arvelluttavan sis&auml;ll&ouml;n niin nopeasti kuin mahdollista, on mahdotonta tarkistaa jokaista viesti&auml;. Tiedostatte siis, ett&auml; viestit sivuilla ovat kirjoittajiensa mielipiteit&auml; eiv&auml;tk&auml; yll&auml;pidon, moderaattoreiden tai webmasterin (lukuunottamatta heid&auml;n itsens&auml; kirjoittamia viestej&auml;) ja siksi he eiv&auml;t ole vastuussa n&auml;ist&auml; kirjoituksista.<br /><br />Suostut olemaan esitt&auml;m&auml;tt&auml; mit&auml;&auml;n loukkaavaa, vihamielist&auml;, ep&auml;moraalista tai muutakaan materiaalia joka voisi loukata voimassa olevia lakeja. Toimimalla t&auml;t&auml; vastoin voidaan sinut v&auml;litt&ouml;m&auml;sti ja lopullisesti poistaa j&auml;rjestelm&auml;n k&auml;ytt&auml;jist&auml; (tarvittaessa yhteydentarjoajaasi otetaan yhteytt&auml;). Kaikkien viestien IP-osoite tallennetaan t&auml;m&auml;n vuoksi. Suostut siihen, ett&auml; webmaster, yll&auml;pito ja moderaattorit ovat oikeutettuja poistamaan, muokkaamaan, siirt&auml;m&auml;&auml;n tai sulkemaan mink&auml; tahansa aiheen milloin tahansa. K&auml;ytt&auml;j&auml;n&auml; suostut siihen, ett&auml; kaikki yll&auml; annettu tieto tallennetaan tietokantaan. T&auml;t&auml; tietoa ei anneta millek&auml;&auml;n kolmannelle osapuolelle ilman suostumustasi. Webmaster, yll&auml;pito ja moderaattorit eiv&auml;t ole vastuullisia jos tietoturva vaarantuu hakkerointiyrityksist&auml; tms. johtuen.<br /><br />T&auml;m&auml; sivusto k&auml;ytt&auml;&auml; avusteita (cookies) tallentamaan tietoa paikalliselle tietokoneelle. N&auml;m&auml; avusteet eiv&auml;t sis&auml;ll&auml; mit&auml;&auml;n yll&auml; annetuista tiedoista, niiden ainoa tarkoitus on helpottaa k&auml;ytt&ouml;&auml;. S&auml;hk&ouml;postiosoitetta k&auml;ytet&auml;&auml;n vain k&auml;ytt&auml;j&auml;n tarvitsemien tietojen l&auml;hett&auml;miseen (Sek&auml; salasanan l&auml;hett&auml;miseen jos unohdat sen).<br /><br /> Klikkaamalla Hyv&auml;ksyn hyv&auml;ksyt n&auml;m&auml; ehdot.';

$lang['Agree_under_13'] = 'Hyv&auml;ksyn ehdot ja olen <b>alle</b> 13 vuotias';
$lang['Agree_over_13'] = 'Hyv&auml;ksyn ehdot ja olen <b>yli</b> tai <b>tasan</b> 13 vuotias';
$lang['Agree_not'] = 'En hyv&auml;ksy ehtoja';

$lang['Wrong_activation'] = 'Antamasi aktivointiavain ei t&auml;sm&auml;&auml; tietokantaan tallennetun kanssa';
$lang['Send_password'] = 'L&auml;het&auml; minulle uusi salasana'; 
$lang['Password_updated'] = 'Uusi salasana on luotu, tarkista s&auml;hk&ouml;postistasi lis&auml;ohjeet';
$lang['No_email_match'] = 'Antamasi s&auml;hk&ouml;postiosoite ei t&auml;sm&auml;&auml; k&auml;ytt&auml;j&auml;tunnuksen tiedoissa annettuun';
$lang['New_password_activation'] = 'Uuden salasanan aktivointi';
$lang['Password_activated'] = 'K&auml;ytt&auml;j&auml;tunnuksesi on aktivoitu uudelleen. Kirjaudu sis&auml;&auml;n k&auml;ytt&auml;en uutta salasanaa joka l&auml;hetettiin s&auml;hk&ouml;postiisi';

$lang['Send_email_msg'] = 'L&auml;het&auml; s&auml;hk&ouml;postia';
$lang['No_user_specified'] = 'K&auml;ytt&auml;j&auml;&auml; ei ole m&auml;&auml;ritelty';
$lang['User_prevent_email'] = 'T&auml;m&auml; k&auml;ytt&auml;j&auml; ei halua vastaanottaa s&auml;hk&ouml;postia. Yrit&auml; l&auml;hett&auml;&auml; yksityinen viesti';
$lang['User_not_exist'] = 'K&auml;ytt&auml;j&auml;tunnusta ei ole olemassa';
$lang['CC_email'] = 'L&auml;het&auml; kopio s&auml;hk&ouml;postista itsellesi';
$lang['Email_message_desc'] = 'T&auml;m&auml; viesti l&auml;hetet&auml;&auml;n pelkk&auml;n&auml; tekstin&auml;, &auml;l&auml; k&auml;yt&auml; HTML tai BBCode koodeja. Paluuosoitteeksi t&auml;lle viestille asetetaan s&auml;hk&ouml;postiosoitteesi.';
$lang['Flood_email_limit'] = 'Et voi l&auml;hett&auml;&auml; uutta s&auml;hk&ouml;postia nyt, yrit&auml; my&ouml;hemmin uudelleen';
$lang['Recipient'] = 'Vastaanottaja';
$lang['Email_sent'] = 'S&auml;hk&ouml;posti on l&auml;hetetty';
$lang['Send_email'] = 'L&auml;het&auml; s&auml;hk&ouml;posti';
$lang['Empty_subject_email'] = 'Sinun t&auml;ytyy antaa otsikko s&auml;hk&ouml;postille';
$lang['Empty_message_email'] = 'Sinun t&auml;ytyy kirjoittaa viesti s&auml;hk&ouml;postiin';

//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Antamasi vahvistuskoodi oli virheellinen';
$lang['Too_many_registers'] = 'Ylet ylitt&auml;nyt rekister&ouml;ntiyritysten yl&auml;rajan t&auml;ll&auml; kirjautumiskerralla. Ole hyv&auml; ja yrit&auml; my&ouml;hemmin uudelleen.';
$lang['Confirm_code_impaired'] = 'Jos olet n&auml;k&ouml;rajoitteinen tai et muusta syyst&auml; kykene lukemaan t&auml;t&auml; koodia, ole hyv&auml; ja ota yhteytt&auml; %sAdministrator%s:iin avun saamiseksi.';
$lang['Confirm_code'] = 'Vahvistuskoodi';
$lang['Confirm_code_explain'] = 'Sy&ouml;t&auml; koodi t&auml;sm&auml;lleen siin&auml; muodossa kuin n&auml;et sen. Isoilla ja pienill&auml; kirjaimilla on merkitysero. Nollaa tarkoittavassa merkiss&auml; on vinoviiva keskell&auml;.';

//
// Memberslist
//
$lang['Select_sort_method'] = 'Valitse j&auml;rjestys';
$lang['Sort'] = 'J&auml;rjest&auml;';
$lang['Sort_Top_Ten'] = 'Top Ten kirjoittajat';
$lang['Sort_Joined'] = 'Liittymisp&auml;iv&auml;';
$lang['Sort_Username'] = 'K&auml;ytt&auml;j&auml;tunnus';
$lang['Sort_Location'] = 'Paikkakunta';
$lang['Sort_Posts'] = 'Viestej&auml; yhteens&auml;';
$lang['Sort_Email'] = 'S&auml;hk&ouml;posti';
$lang['Sort_Website'] = 'Kotisivu';
$lang['Sort_Ascending'] = 'Laskeva';
$lang['Sort_Descending'] = 'Nouseva';
$lang['Order'] = 'Lajittelu';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Ryhm&auml;n ohjauspaneeli';
$lang['Group_member_details'] = 'Ryhm&auml;n j&auml;sentiedot';
$lang['Group_member_join'] = 'Liity ryhm&auml;&auml;n';

$lang['Group_Information'] = 'Ryhm&auml;n tiedot';
$lang['Group_name'] = 'Ryhm&auml;n nimi';
$lang['Group_description'] = 'Ryhm&auml;n kuvaus';
$lang['Group_membership'] = 'Ryhm&auml;n j&auml;senyys';
$lang['Group_Members'] = 'Ryhm&auml;n j&auml;senet';
$lang['Group_Moderator'] = 'Ryhm&auml;n moderaattori';
$lang['Pending_members'] = 'Odottavat j&auml;senet';

$lang['Group_type'] = 'Ryhm&auml;n tyyppi';
$lang['Group_open'] = 'Avoin ryhm&auml;';
$lang['Group_closed'] = 'Suljettu ryhm&auml;';
$lang['Group_hidden'] = 'Piilotettu ryhm&auml;';

$lang['Current_memberships'] = 'Nykyiset j&auml;senyydet';
$lang['Non_member_groups'] = 'Ryhm&auml;t joissa ei j&auml;senen&auml;';
$lang['Memberships_pending'] = 'J&auml;senyys haussa';

$lang['No_groups_exist'] = 'Ryhmi&auml; ei ole olemassa';
$lang['Group_not_exist'] = 'Ryhm&auml;&auml; ei ole olemassa';

$lang['Join_group'] = 'Liity ryhm&auml;&auml;n';
$lang['No_group_members'] = 'T&auml;ss&auml; ryhm&auml;ss&auml; ei ole j&auml;seni&auml;';
$lang['Group_hidden_members'] = 'T&auml;m&auml; ryhm&auml; on piilotettu, et voi katsoa sen tietoja';
$lang['No_pending_group_members'] = 'T&auml;ll&auml; ryhm&auml;ll&auml; ei ole j&auml;seni&auml; odottamassa';
$lang["Group_joined"] = 'Hakemuksesi ryhm&auml;&auml;n on j&auml;tetty<br />Ryhm&auml;n moderaattori ilmoittaa sinulle kun j&auml;senyytesi on hyv&auml;ksytty';
$lang['Group_request'] = 'Ryhm&auml;&auml;n on tehty j&auml;seneksi liittymispyynt&ouml;';
$lang['Group_approved'] = 'Hakemuksesi on hyv&auml;ksytty';
$lang['Group_added'] = 'Sinut on lis&auml;tty t&auml;h&auml;n k&auml;ytt&auml;j&auml;ryhm&auml;&auml;n'; 
$lang['Already_member_group'] = 'Olet jo j&auml;sen t&auml;ss&auml; k&auml;ytt&auml;j&auml;ryhm&auml;ss&auml;';
$lang['User_is_member_group'] = 'K&auml;ytt&auml;j&auml; on jo t&auml;m&auml;n ryhm&auml;n j&auml;sen';
$lang['Group_type_updated'] = 'Ryhm&auml;n tyypin p&auml;ivitys suoritettu';

$lang['Could_not_add_user'] = 'Valitsemaasi k&auml;ytt&auml;j&auml;&auml; ei ole olemassa';
$lang['Could_not_anon_user'] = 'Anonyymi k&auml;ytt&auml;j&auml; ei voi olla ryhm&auml;n j&auml;sen';

$lang['Confirm_unsub'] = 'Oletko varma, ett&auml; haluat poistua ryhm&auml;st&auml;?';
$lang['Confirm_unsub_pending'] = 'J&auml;senyytt&auml;si ryhm&auml;&auml;n ei ole viel&auml; hyv&auml;ksytty, Oletko varma, ett&auml; haluat perua j&auml;senyyden?';

$lang['Unsub_success'] = 'J&auml;senyytesi t&auml;h&auml;n ryhm&auml;&auml;n on poistettu.';

$lang['Approve_selected'] = 'Hyv&auml;ksy valitut';
$lang['Deny_selected'] = 'Hylk&auml;&auml; valitut';
$lang['Not_logged_in'] = 'Sinun t&auml;ytyy kirjautua sis&auml;&auml;n voidaksesi liitty&auml; ryhm&auml;&auml;n.';
$lang['Remove_selected'] = 'Poista valitut';
$lang['Add_member'] = 'Lis&auml;&auml; j&auml;sen';
$lang['Not_group_moderator'] = 'Et ole t&auml;m&auml;n ryhm&auml;n moderaattori joten et voi suorittaa t&auml;t&auml; toimenpidett&auml;.';

$lang['Login_to_join'] = 'Kirjaudu sis&auml;&auml;n liitty&auml;ksesi ryhm&auml;&auml;n tai yll&auml;pit&auml;&auml;ksesi ryhm&auml;n j&auml;senyystietoja';
$lang['This_open_group'] = 'T&auml;m&auml; on avoin ryhm&auml;, klikkaa hakeaksesi j&auml;senyytt&auml;';
$lang['This_closed_group'] = 'T&auml;m&auml; on suljettu ryhm&auml;, lis&auml;&auml; j&auml;seni&auml; ei hyv&auml;ksyt&auml;';
$lang['This_hidden_group'] = 'T&auml;m&auml; on piilotettu ryhm&auml;, automaattinen k&auml;ytt&auml;jien lis&auml;ys ei ole sallittua';
$lang['Member_this_group'] = 'Olet t&auml;m&auml;n ryhm&auml;n j&auml;sen';
$lang['Pending_this_group'] = 'J&auml;senyytesi t&auml;h&auml;n ryhm&auml;&auml;n on k&auml;sittelyss&auml;';
$lang['Are_group_moderator'] = 'Olet ryhm&auml;n moderaattori';
$lang['None'] = 'Ei kukaan';

$lang['Subscribe'] = 'Liity';
$lang['Unsubscribe'] = 'Eroa';
$lang['View_Information'] = 'N&auml;yt&auml; tiedot';


//
// Search
//
$lang['Search_query'] = 'Haku ';
$lang['Search_options'] = 'Haun vaihtoehdot';

$lang['Search_keywords'] = 'Etsi avainsanoja';
$lang['Search_keywords_explain'] = 'Voit k&auml;ytt&auml;&auml; <u>AND</u> m&auml;&auml;ritt&auml;m&auml;&auml;n sanat joiden t&auml;ytyy l&ouml;yty&auml; haussa, <u>OR</u> sanoille jotka voivat olla vaihtoehtoisesti haussa ja <u>NOT</u> m&auml;&auml;ritt&auml;m&auml;&auml;n sanat, joita ei saa olla haussa. K&auml;yt&auml; * jokerimerkkin&auml;';
$lang['Search_author'] = 'Etsi kirjoittajaa';
$lang['Search_author_explain'] = 'K&auml;yt&auml; * jokerimerkkin&auml;';

$lang['Search_for_any'] = 'Hae mill&auml; tahansa ehdolla tai k&auml;yt&auml; annettua hakujonoa';
$lang['Search_for_all'] = 'Etsi kaikilla annetuilla ehdoilla';
$lang['Search_title_msg'] = 'Etsi viestin aiheesta ja tekstist&auml;';
$lang['Search_msg_only'] = 'Etsi vain viestin tekstist&auml;';

$lang['Return_first'] = 'N&auml;yt&auml; ensimm&auml;iset'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'merkki&auml; viestist&auml;';

$lang['Search_previous'] = 'Hae edelliset'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'J&auml;rjest&auml;';
$lang['Sort_Time'] = 'Viestin aika';
$lang['Sort_Post_Subject'] = 'Viestin otsikko';
$lang['Sort_Topic_Title'] = 'Aiheen otsikko';
$lang['Sort_Author'] = 'Kirjoittaja';
$lang['Sort_Forum'] = 'Foorumi';

$lang['Display_results'] = 'N&auml;yt&auml; tulokset';
$lang['All_available'] = 'Kaikki mahdolliset';
$lang['No_searchable_forums'] = 'Sinulle ei ole lupaa etsi&auml; foorumeista t&auml;ll&auml; sivustolla';

$lang['No_search_match'] = 'Yksik&auml;&auml;n aihe tai viesti ei vastannut hakuehtoja';
$lang['Found_search_match'] = 'Haussa l&ouml;ytyi %d osuma'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Haussa l&ouml;ytyi %d osumaa'; // eg. Search found 24 matches

$lang['Close_window'] = 'Sulje ikkuna';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Valitettavasti vain %s voivat tehd&auml; ilmoituksia t&auml;ss&auml; foorumissa';
$lang['Sorry_auth_sticky'] = 'Valitettavasti vain %s voivat tehd&auml; tiedotuksia t&auml;ss&auml; foorumissa'; 
$lang['Sorry_auth_read'] = 'Valitettavasti vain %s voivat lukea aiheita t&auml;ss&auml; foorumissa'; 
$lang['Sorry_auth_post'] = 'Valitettavasti vain %s voivat luoda aiheita t&auml;ss&auml; foorumissa'; 
$lang['Sorry_auth_reply'] = 'Valitettavasti vain %s voivat kirjoittaa vastauksia t&auml;ss&auml; foorumissa'; 
$lang['Sorry_auth_edit'] = 'Valitettavasti vain %s voivat muokata viestej&auml; t&auml;ss&auml; foorumissa'; 
$lang['Sorry_auth_delete'] = 'Valitettavasti vain %s voivat poistaa viestej&auml; t&auml;ss&auml; foorumissa'; 
$lang['Sorry_auth_vote'] = 'Valitettavasti vain %s voivat &auml;&auml;nest&auml;&auml; t&auml;ss&auml; foorumissa'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>rekister&ouml;itym&auml;tt&ouml;m&auml;t k&auml;ytt&auml;j&auml;t</b>';
$lang['Auth_Registered_Users'] = '<b>rekister&ouml;idyt k&auml;ytt&auml;j&auml;t</b>';
$lang['Auth_Users_granted_access'] = '<b>k&auml;ytt&auml;j&auml;t, joille on erikoisoikeuksia</b>';
$lang['Auth_Moderators'] = '<b>moderaattorit</b>';
$lang['Auth_Administrators'] = '<b>yll&auml;pit&auml;j&auml;t</b>';

$lang['Not_Moderator'] = 'Et ole t&auml;m&auml;n foorumin moderaattori';
$lang['Not_Authorised'] = 'Sinulla ei ole lupaa';

$lang['You_been_banned'] = 'Sinulla on porttikielto t&auml;h&auml;n foorumiin<br />Ole hyv&auml; ja ota yhteytt&auml; webmasteriin tai yll&auml;pitoon jos haluat lis&auml;tietoja';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'T&auml;ll&auml; hetkell&auml; on 0 rekister&ouml;ity&auml; k&auml;ytt&auml;j&auml;&auml; ja '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'T&auml;ll&auml; hetkell&auml; on %d rekister&ouml;ity k&auml;ytt&auml;j&auml; ja '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'T&auml;ll&auml; hetkell&auml; on %d rekister&ouml;ity&auml; k&auml;ytt&auml;j&auml;&auml; ja '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 piilotettua k&auml;ytt&auml;j&auml;&auml; online'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d piilotettu k&auml;ytt&auml;j&auml; online'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d piilotettua k&auml;ytt&auml;j&auml;&auml; online'; // 6 Hidden users online
$lang['Guest_users_online'] = 'T&auml;ll&auml; hetkell&auml; on  %d vierasta online'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'T&auml;ll&auml; hetkell&auml; on 0 vierailijaa online'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'T&auml;ll&auml; hetkell&auml; on  %d vieras online'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'T&auml;ll&auml; hetkell&auml; foorumeilla ei ole k&auml;ytt&auml;ji&auml;';

$lang['Online_explain'] = 'Tieto perustuu viimeisen viiden minuutin aikana olleisiin aktiiveihin k&auml;ytt&auml;jiin';

$lang['Forum_Location'] = 'Sijainti foorumissa';
$lang['Last_updated'] = 'Viimeksi p&auml;ivitetty';

$lang['Forum_index'] = 'Foorumin p&auml;&auml;valikko';
$lang['Logging_on'] = 'Kirjautuu';
$lang['Posting_message'] = 'L&auml;hett&auml;&auml; viesti&auml;';
$lang['Searching_forums'] = 'Etsii foorumeita';
$lang['Viewing_profile'] = 'Katsoo  k&auml;ytt&auml;j&auml;tietoja';
$lang['Viewing_online'] = 'Katsoo keit&auml; on online';
$lang['Viewing_member_list'] = 'Katsoo k&auml;ytt&auml;j&auml;listaa';
$lang['Viewing_priv_msgs'] = 'Katsoo yksityisi&auml; viestej&auml;';
$lang['Viewing_FAQ'] = 'Katsoo ohjeita';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderaattorin ohjauspaneeli';
$lang['Mod_CP_explain'] = 'K&auml;ytt&auml;m&auml;ll&auml; alla olevaa lomaketta voit suorittaa useita moderointitoimia t&auml;ss&auml; foorumissa. Voit lukita, vapauttaa, siirt&auml;&auml; tai poistaa mit&auml; tahansa aiheita.';

$lang['Select'] = 'Valitse';
$lang['Delete'] = 'Poista';
$lang['Move'] = 'Siirr&auml;';
$lang['Lock'] = 'Lukitse';
$lang['Unlock'] = 'Vapauta';

$lang['Topics_Removed'] = 'Valitut aiheet on onnistuneesti poistettu tietokannasta.';
$lang['Topics_Locked'] = 'Valitut aiheet on lukittu';
$lang['Topics_Moved'] = 'Valitut aiheet on siirretty';
$lang['Topics_Unlocked'] = 'Valitut aiheet on vapautettu';
$lang['No_Topics_Moved'] = 'Aiheita ei siirretty';

$lang['Confirm_delete_topic'] = 'Oletko varma, ett&auml; haluat poistaa valitun/valitut aiheen/aiheet?';
$lang['Confirm_lock_topic'] = 'Oletko varma, ett&auml; haluat lukita valitun/valitut aiheen/aiheet?';
$lang['Confirm_unlock_topic'] = 'Oletko varma, ett&auml; haluat vapauttaa valitun/valitut aiheen/aiheet?';
$lang['Confirm_move_topic'] = 'Oletko varma, ett&auml; haluat siirt&auml;&auml; valitun/valitut aiheen/aiheet?';

$lang['Move_to_forum'] = 'Siirr&auml; foorumiin';
$lang['Leave_shadow_topic'] = 'J&auml;t&auml; varjo-otsikko vanhaan foorumiin.';

$lang['Split_Topic'] = 'Aiheen jakamisen hallintapaneeli';
$lang['Split_Topic_explain'] = 'K&auml;ytt&auml;m&auml;ll&auml; alla olevaa lomaketta voit jakaa aiheen kahtia, joko valitsemalla viestit erikseen tai jakamalla valitusta kohdasta';
$lang['Split_title'] = 'Uuden aiheen otsikko';
$lang['Split_forum'] = 'Uuden aiheen foorumi';
$lang['Split_posts'] = 'Jaa valitut viestit';
$lang['Split_after'] = 'Valitun viestin jako';
$lang['Topic_split'] = 'Valittu aihe on onnistuneesti jaettu';

$lang['Too_many_error'] = 'Olet valinnut liikaa viestej&auml;. Voit valita vain yhden viestin, josta aihe jaetaan!';

$lang['None_selected'] = 'Et ole valinnut yht&auml;&auml;n aihetta. Ole hyv&auml; ja valitse ainakin yksi.';
$lang['New_forum'] = 'Uusi foorumi';

$lang['This_posts_IP'] = 'T&auml;m&auml;n viestin IP';
$lang['Other_IP_this_user'] = 'Muut IP\'t joista k&auml;ytt&auml;j&auml; on kirjoittanut';
$lang['Users_this_IP'] = 'K&auml;ytt&auml;j&auml;t, jotka kirjoittavat t&auml;st&auml; IP:st&auml;';
$lang['IP_info'] = 'IP Informaatio';
$lang['Lookup_IP'] = 'Tarkista IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Kaikki ajat ovat %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 tuntia';
$lang['-11'] = 'GMT - 11 tuntia';
$lang['-10'] = 'GMT - 10 tuntia';
$lang['-9'] = 'GMT - 9 tuntia';
$lang['-8'] = 'GMT - 8 tuntia';
$lang['-7'] = 'GMT - 7 tuntia';
$lang['-6'] = 'GMT - 6 tuntia';
$lang['-5'] = 'GMT - 5 tuntia';
$lang['-4'] = 'GMT - 4 tuntia';
$lang['-3.5'] = 'GMT - 3.5 tuntia';
$lang['-3'] = 'GMT - 3 tuntia';
$lang['-2'] = 'GMT - 2 tuntia';
$lang['-1'] = 'GMT - 1 tuntia';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 tunti';
$lang['2'] = 'GMT + 2 tuntia';
$lang['3'] = 'GMT + 3 tuntia';
$lang['3.5'] = 'GMT + 3.5 tuntia';
$lang['4'] = 'GMT + 4 tuntia';
$lang['4.5'] = 'GMT + 4.5 tuntia';
$lang['5'] = 'GMT + 5 tuntia';
$lang['5.5'] = 'GMT + 5.5 tuntia';
$lang['6'] = 'GMT + 6 tuntia';
$lang['6.5'] = 'GMT + 6.5 tuntia';
$lang['7'] = 'GMT + 7 tuntia';
$lang['8'] = 'GMT + 8 tuntia';
$lang['9'] = 'GMT + 9 tuntia';
$lang['9.5'] = 'GMT + 10 tuntia';
$lang['10'] = 'GMT + 11 tuntia';
$lang['11'] = 'GMT + 11 tuntia';
$lang['12'] = 'GMT + 12 tuntia';
$lang['13'] = 'GMT + 13 tuntia';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT -12:00 tuntia';
$lang['tz']['-11'] = 'GMT -11:00 tuntia';
$lang['tz']['-10'] = 'GMT -10:00 tuntia';
$lang['tz']['-9'] = 'GMT -9:00 tuntia';
$lang['tz']['-8'] = 'GMT -8:00 tuntia';
$lang['tz']['-7'] = 'GMT -7:00 tuntia';
$lang['tz']['-6'] = 'GMT -6:00 tuntia';
$lang['tz']['-5'] = 'GMT -5:00 tuntia';
$lang['tz']['-4'] = 'GMT -4:00 tuntia';
$lang['tz']['-3.5'] = 'GMT -3:30 tuntia';
$lang['tz']['-3'] = 'GMT -3:00 tuntia';
$lang['tz']['-2'] = 'GMT -2:00 tuntia';
$lang['tz']['-1'] = 'GMT -1:00 tuntia';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT +1:00 tuntia';
$lang['tz']['2'] = 'GMT +2:00 tuntia';
$lang['tz']['3'] = 'GMT +3:00 tuntia';
$lang['tz']['3.5'] = 'GMT +3:30 tuntia';
$lang['tz']['4'] = 'GMT +4:00 tuntia';
$lang['tz']['4.5'] = 'GMT +4:30 tuntia';
$lang['tz']['5'] = 'GMT +5:00 tuntia';
$lang['tz']['5.5'] = 'GMT +5:30 tuntia';
$lang['tz']['6'] = 'GMT +6:00 tuntia';
$lang['tz']['6.5'] = 'GMT +6:30 tuntia';
$lang['tz']['7'] = 'GMT +7:00 tuntia';
$lang['tz']['8'] = 'GMT +8:00 tuntia';
$lang['tz']['9'] = 'GMT +9:00 tuntia';
$lang['tz']['9.5'] = 'GMT +9:30 tuntia';
$lang['tz']['10'] = 'GMT +10:00 tuntia';
$lang['tz']['11'] = 'GMT +11:00 tuntia';
$lang['tz']['12'] = 'GMT +12:00 tuntia';
$lang['tz']['13'] = 'GMT +13:00 tuntia';

$lang['datetime']['Sunday'] = 'Sunnuntai';
$lang['datetime']['Monday'] = 'Maanantai';
$lang['datetime']['Tuesday'] = 'Tiistai';
$lang['datetime']['Wednesday'] = 'Keskiviikko';
$lang['datetime']['Thursday'] = 'Torstai';
$lang['datetime']['Friday'] = 'Perjantai';
$lang['datetime']['Saturday'] = 'Lauantai';
$lang['datetime']['Sun'] = 'Sun';
$lang['datetime']['Mon'] = 'Maa';
$lang['datetime']['Tue'] = 'Tii';
$lang['datetime']['Wed'] = 'Kes';
$lang['datetime']['Thu'] = 'Tor';
$lang['datetime']['Fri'] = 'Per';
$lang['datetime']['Sat'] = 'Lau';
$lang['datetime']['January'] = 'Tammikuu';
$lang['datetime']['February'] = 'Helmikuu';
$lang['datetime']['March'] = 'Maaliskuu';
$lang['datetime']['April'] = 'Huhtikuu';
$lang['datetime']['May'] = 'Toukokuu';
$lang['datetime']['June'] = 'Kes&auml;kuu';
$lang['datetime']['July'] = 'Hein&auml;kuu';
$lang['datetime']['August'] = 'Elokuu';
$lang['datetime']['September'] = 'Syyskuu';
$lang['datetime']['October'] = 'Lokakuu';
$lang['datetime']['November'] = 'Marraskuu';
$lang['datetime']['December'] = 'Joulukuu';
$lang['datetime']['Jan'] = 'Tam';
$lang['datetime']['Feb'] = 'Hel';
$lang['datetime']['Mar'] = 'Maa';
$lang['datetime']['Apr'] = 'Huh';
$lang['datetime']['May'] = 'Tou';
$lang['datetime']['Jun'] = 'Kes';
$lang['datetime']['Jul'] = 'Hei';
$lang['datetime']['Aug'] = 'Elo';
$lang['datetime']['Sep'] = 'Syy';
$lang['datetime']['Oct'] = 'Lok';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Jou';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informaatio';
$lang['Critical_Information'] = 'T&auml;rke&auml;&auml; informaatiota';

$lang['General_Error'] = 'Yleinen virhe';
$lang['Critical_Error'] = 'Kriittinen virhe';
$lang['An_error_occured'] = 'Tapahtui virhe';
$lang['A_critical_error'] = 'Tapahtui kriittinen virhe';

//
// That's all Folks!
// -------------------------------------------------

?>