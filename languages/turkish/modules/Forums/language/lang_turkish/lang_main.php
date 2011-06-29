<?php
/***************************************************************************
 *                            lang_main.php [Turkish]
 *                              -------------------
 *     begin                : Wed Jan 9 2002
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2004/08/04 02:23:47 akamu Exp $
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
// Translation by:
//
// Onur Turgay (postexitus)  :: onurturgay@isnet.net.tr :: http://welcome.to/aaal2000
// Erdem Corapcioglu (erdem) :: erdem@smtg.org         :: http://www.smtg.org
//
// For questions and comments use: onurturgay@isnet.net.tr
//

// Comment out the line below if you use windows based server
// setlocale(LC_ALL, 'tr_TR.utf-8');

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategori';
$lang['Topic'] = 'Başlık';
$lang['Topics'] = 'Başlıklar';
$lang['Replies'] = 'Cevaplar';
$lang['Views'] = 'Görüntüleme';
$lang['Post'] = 'Mesaj';
$lang['Posts'] = 'Mesajlar';
$lang['Posted'] = 'Tarih';
$lang['Username'] = 'Kullanıcı Adı';
$lang['Password'] = 'Şifre';
$lang['Email'] = 'E-mail';
$lang['Poster'] = 'Gönderen';
$lang['Author'] = 'Yazar';
$lang['Time'] = 'Saat';
$lang['Hours'] = 'Saat';
$lang['Message'] = 'Mesaj';

$lang['1_Day'] = '1 Günlük';
$lang['7_Days'] = '7 Günlük';
$lang['2_Weeks'] = '2 Haftalık';
$lang['1_Month'] = '1 Aylık';
$lang['3_Months'] = '3 Aylık';
$lang['6_Months'] = '6 Aylık';
$lang['1_Year'] = '1 Yıllık';

$lang['Go'] = 'OK';
$lang['Jump_to'] = 'Forum Seçin';
$lang['Submit'] = 'Gönder';
$lang['Reset'] = 'Sil';
$lang['Cancel'] = 'İptal';
$lang['Preview'] = 'Önizleme';
$lang['Confirm'] = 'Onayla';
$lang['Spellcheck'] = 'Spellcheck';
$lang['Yes'] = 'Evet';
$lang['No'] = 'Hayır';
$lang['Enabled'] = 'Açık';
$lang['Disabled'] = 'Kapalı';
$lang['Error'] = 'Hata';

$lang['Next'] = 'Sonraki';
$lang['Previous'] = 'Önceki';
$lang['Goto_page'] = 'Sayfa';
$lang['Joined'] = 'Kayıt';
$lang['IP_Address'] = 'IP Adresi';

$lang['Select_forum'] = 'Bir Forum Seçin';
$lang['View_latest_post'] = 'Son Mesajları Gör';
$lang['View_newest_post'] = 'Yeni Mesajları Gör';
$lang['Page_of'] =  '<b>%d</b>. sayfa  (Toplam <b>%d</b> sayfa)'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Numarası';
$lang['AIM'] = 'AIM Adresi';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Forum Ana Sayfası';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Yeni Başlık Gönder';
$lang['Reply_to_topic'] = 'Cevap Gönder';
$lang['Reply_with_quote'] = 'Alıntıyla Cevap Ver';

$lang['Click_return_topic'] = 'Mesajlara dönmek için %sburaya%s tıklayın'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Bir daha denemek için %sburaya%s tıklayın';
$lang['Click_return_forum'] = 'Foruma dönmek için %sburaya%s tıklayın';
$lang['Click_view_message'] = 'Mesajınızı görmek için %sburaya%s tıklayın';
$lang['Click_return_modcp'] = 'Moderator Kontrol Paneline dönmek için %sburaya%s tıklayın';
$lang['Click_return_group'] = 'Grup bilgilerine dönmek için %sburaya%s tıklayın';

$lang['Admin_panel'] = 'Yönetim Paneli';

$lang['Board_disable'] = 'Üzgünüz, forumumuz şimdilik kapalıdır. Lütfen daha sonra tekrar deneyiniz.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Kayıtlı Kullanıcılar:';
$lang['Browsing_forum'] = 'Bu forumu gezen kullanıcılar:';
$lang['Online_users_zero_total'] = 'Toplam <b>0</b> kullanıcı online :: ';
$lang['Online_users_total'] = 'Toplam <b>%d</b> kullanıcı online :: ';
$lang['Online_user_total'] = $lang['Online_users_total'];
$lang['Reg_users_zero_total'] = '0 Kayıtlı, ';
$lang['Reg_users_total'] = '%d Kayıtlı, ';
$lang['Reg_user_total'] = '%d Kayıtlı, ';
$lang['Hidden_users_zero_total'] = '0 Gizli ve ';
$lang['Hidden_user_total'] = '%d Gizli ve ';
$lang['Hidden_user_total'] = '%d Gizli ve ';
$lang['Guest_users_zero_total'] = '0 Misafir';
$lang['Guest_users_total'] = '%d Misafir';
$lang['Guest_user_total'] = '%d Misafir';
$lang['Record_online_users'] = 'Sitede bugüne kadar en çok <b>%s</b> kişi %s tarihinde online oldu.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdmin%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = 'Son ziyaretiniz: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Forum Saati: %s'; // %s replaced by time

$lang['Search_new'] = 'Son gelişinizden bu yana gönderilen mesajlar';
$lang['Search_your_posts'] = 'Kendi mesajlarınız';
$lang['Search_unanswered'] = 'Cevaplanmamış mesajlar';

$lang['Register'] = 'Kayıt Ol';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profilinizi Değiştirin';
$lang['Search'] = 'Arama';
$lang['Memberlist'] = 'Üye Listesi';
$lang['FAQ'] = 'SSS';
$lang['BBCode_guide'] = 'BBCode Kullanma Kılavuzu';
$lang['Usergroups'] = 'Kullanıcı Grupları';
$lang['Last_Post'] = 'Son Gönderilen';
$lang['Moderator'] = 'Moderator';
$lang['Moderators'] = 'Moderator';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Kullanıcılarımız toplam <b>0</b> mesaj attılar'; // Number of posts
$lang['Posted_articles_total'] = 'Kullanıcılarımız toplam <b>%d</b> mesaj attılar'; // Number of posts
$lang['Posted_article_total'] = 'Kullanıcılarımız toplam <b>%d</b> mesaj attılar'; // Number of posts
$lang['Registered_users_zero_total'] = 'Toplam <b>0</b> kayıtlı kullanıcımız var'; // # registered users
$lang['Registered_users_total'] = 'Toplam <b>%d</b> kayıtlı kullanıcımız var'; // # registered users
$lang['Registered_user_total'] = 'Toplam <b>%d</b> kayıtlı kullanıcımız var'; // # registered users
$lang['Newest_user'] = 'Son kaydolan kullanıcımız: <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Son ziyaretinizden bu yana hiç yeni mesaj yok';
$lang['No_new_posts'] = 'Yeni mesaj yok';
$lang['New_posts'] = 'Yeni mesaj var';
$lang['New_post'] = 'Yeni mesaj var';
$lang['No_new_posts_hot'] = 'Yeni mesaj yok [ Popüler ]';
$lang['New_posts_hot'] = 'Yeni mesaj var [ Popüler ]';
$lang['No_new_posts_locked'] = 'Yeni mesaj yok [ Kilitli ]';
$lang['New_posts_locked'] = 'Yeni mesaj var [ Kilitli ]';
$lang['Forum_is_locked'] = 'Forum kilitlenmiştir';


//
// Login
//
$lang['Enter_password'] = 'Lütfen Kullanıcı İsminizi ve Şifrenizi Giriniz';
$lang['Login'] = 'Login';
$lang['Logout'] = 'Logout';

$lang['Forgotten_password'] = 'Şifremi Unuttum';

$lang['Log_me_in'] = 'Beni hatırla';

$lang['Error_login'] = 'Yanlış ya da aktive edilmemiş bir kullanıcı adı veya yanlış bir şifre girdiniz';


//
// Index page
//
$lang['Index'] = 'Ana Sayfa';
$lang['No_Posts'] = 'Mesaj Yok';
$lang['No_forums'] = 'Bu sitenin henüz hiç forumu yok';

$lang['Private_Message'] = 'Özel Mesaj';
$lang['Private_Messages'] = 'Özel Mesajlar';
$lang['Who_is_Online'] = 'Kimler Online';

$lang['Mark_all_forums'] = 'Tüm forumları okunmuş say';
$lang['Forums_marked_read'] = 'Tüm forumlar okunmuş sayıldı';


//
// Viewforum
//
$lang['View_forum'] = 'Forumu görüntüle';

$lang['Forum_not_exist'] = 'Seçtiğiniz forum bu sitede bulunmamaktadır';
$lang['Reached_on_error'] = 'Bu sayfaya bir hata sonucu geldiniz';

$lang['Display_topics'] = 'Mesajları göster';
$lang['All_Topics'] = 'Hepsi';

$lang['Topic_Announcement'] = '<b>Duyuru:</b>';
$lang['Topic_Sticky'] = '<b>Sabit:</b>';
$lang['Topic_Moved'] = '<b>Taşındı:</b>';
$lang['Topic_Poll'] = '<b>[ Anket ]</b>';

$lang['Mark_all_topics'] = 'Tüm mesajları okunmuş say';
$lang['Topics_marked_read'] = 'Bu forumdaki tüm mesajlar okunmuş sayıldı';

$lang['Rules_post_can'] = 'Bu forumda yeni konular <b>açabilirsiniz</b>';
$lang['Rules_post_cannot'] = 'Bu forumda yeni konular <b>açamazsınız</b>';
$lang['Rules_reply_can'] = 'Bu forumdaki mesajlara cevap <b>verebilirsiniz</b>';
$lang['Rules_reply_cannot'] = 'Bu forumdaki mesajlara cevap <b>veremezsiniz</b>';
$lang['Rules_edit_can'] = 'Bu forumdaki mesajlarınızı <b>değiştirebilirsiniz</b>';
$lang['Rules_edit_cannot'] = 'Bu forumdaki mesajlarınızı <b>değiştiremezsiniz</b>';
$lang['Rules_delete_can'] = 'Bu forumdaki mesajlarınızı <b>silebilirsiniz</b>';
$lang['Rules_delete_cannot'] = 'Bu forumdaki mesajlarınızı <b>silemezsiniz</b>';
$lang['Rules_vote_can'] = 'Bu forumdaki anketlerde oy <b>kullanabilirsiniz</b>';
$lang['Rules_vote_cannot'] = 'Bu forumdaki anketlerde oy <b>kullanamazsınız</b>';
$lang['Rules_moderate'] = 'Bu forumu %smodere%s <b>edebilirsiniz</b>'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Bu forumda hiç mesaj yok<br />Yeni bir tane göndermek için<b>Yeni Başlık Yolla</b> linkine tıklayın';


//
// Viewtopic
//
$lang['View_topic'] = 'Başlığı Görüntüle';

$lang['Guest'] = 'Misafir';
$lang['Post_subject'] = 'Mesaj konusu';
$lang['View_next_topic'] = 'Sonraki başlık';
$lang['View_previous_topic'] = 'Önceki başlık';
$lang['Submit_vote'] = 'Oy Ver';
$lang['View_results'] = 'Sonuçları Gör';

$lang['No_newer_topics'] = 'Bu forumda daha yeni başlık yok';
$lang['No_older_topics'] = 'Bu forumda daha eski başlık yok';
$lang['Topic_post_not_exist'] = 'Seçtiğiniz başlık bu forumda yok';
$lang['No_posts_topic'] = 'Bu başlığa hiç cevap gelmemiş';

$lang['Display_posts'] = 'Mesajları göster';
$lang['All_Posts'] = 'Hepsi';
$lang['Newest_First'] = 'yeniden-eskiye';
$lang['Oldest_First'] = 'eskiden-yeniye';

$lang['Back_to_top'] = 'Başa dön';

$lang['Read_profile'] = 'Kullanıcı profilini gör';
$lang['Send_email'] = 'Kullanıcıya e-mail gönder';
$lang['Visit_website'] = 'Kullanıcının web sitesini ziyaret et';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Mesajı değiştir/sil';
$lang['View_IP'] = 'Bu mesajı gönderenin IP adresine bak';
$lang['Delete_post'] = 'Bu mesajı sil';

$lang['wrote'] = 'demiş ki'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Alıntı'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'En son %s tarafından %s tarihinde değiştirildi, toplamda %d kere değiştirildi'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'En son %s tarafından %s tarihinde değiştirildi, toplamda %d kere değiştirildi'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Bu başlığı kilitle';
$lang['Unlock_topic'] = 'Bu başlığın kilidini aç';
$lang['Move_topic'] = 'Bu başlığı taşı';
$lang['Delete_topic'] = 'Bu başlığı sil';
$lang['Split_topic'] = 'Bu başlığı böl';

$lang['Stop_watching_topic'] = 'Bu başlığı takip etmeyi bırak';
$lang['Start_watching_topic'] = 'Bu başlığı cevaplar için takip et';
$lang['No_longer_watching'] = 'Artık bu başlığı takip etmiyorsunuz';
$lang['You_are_watching'] = 'Şu anda bu başlığı cevaplar için takip ediyorsunuz';

$lang['Total_votes'] = 'Toplam Oylar';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Mesaj Gövdesi';
$lang['Topic_review'] = 'Orjinal Mesaj';

$lang['No_post_mode'] = 'Hiçbir post metodu seçilmedi'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Yeni bir başlık gönder';
$lang['Post_a_reply'] = 'Cevap Gönder';
$lang['Post_topic_as'] = 'Mesaj Türü';
$lang['Edit_Post'] = 'Mesajı Değiştir';
$lang['Options'] = 'Seçenekler';

$lang['Post_Announcement'] = 'Duyuru';
$lang['Post_Sticky'] = 'Sabit';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Bu mesajı silmek istediğinize emin misiniz?';
$lang['Confirm_delete_poll'] = 'Bu anketi silmek istediğinize emin misiniz?';

$lang['Flood_Error'] = 'Son mesajınızdan bu kadar kısa süre sonra bir yenisini gönderemezsiniz, lütfen kısa bir süre sonra tekrar deneyiniz';
$lang['Empty_subject'] = 'Yeni bir başlık açarken konu belirtmek zorundasınız';
$lang['Empty_message'] = 'Boş bir mesaj gönderemezsiniz';
$lang['Forum_locked'] = 'Bu forum kilitlenmiştir, yeni bir başlık açamazsınız, cevap gönderebilir ya da mesajları değiştirebilirsiniz';
$lang['Topic_locked'] = 'Bu başlık kilitlenmiştir, cevap yazamaz ya da mesajları değiştiremezsiniz';
$lang['No_post_id'] = 'Değiştirmek için bir mesaj seçmelisiniz';
$lang['No_topic_id'] = 'Cevap vermek için bir mesaj seçmelisiniz';
$lang['No_valid_mode'] = 'Sadece mesaj gonderebilir, değiştirebilir, cevap verebilir, alıntı yapabilirsiniz; lütfen geri dönüp tekrar deneyin';
$lang['No_such_post'] = 'Böyle bir mesaj yok, lütfen geri dönüp tekrar deneyin';
$lang['Edit_own_posts'] = 'Üzgünüz, sadece kendi mesajlarınızı değiştirebilirsiniz';
$lang['Delete_own_posts'] = 'Üzgünüz, sadece kendi mesajlarınızı silebilirsiniz';
$lang['Cannot_delete_replied'] = 'Üzgünüz, cevap verilmiş olan mesajlarınızı silemezsiniz';
$lang['Cannot_delete_poll'] = 'Üzgünüz, aktif bir anketi silemezsiniz';
$lang['Empty_poll_title'] = 'Anketiniz için bir başlık girmelisiniz';
$lang['To_few_poll_options'] = 'Anket için en az iki şık girmelisiniz';
$lang['To_many_poll_options'] = 'Anket için çok fazla şık girdiniz';
$lang['Post_has_no_poll'] = 'Bu mesajda anket yoktur';
$lang['Already_voted'] = 'Bu anket için daha önce oy kullandınız';
$lang['No_vote_option'] = 'Oy kullanırken bir şık belirtmelisiniz';

$lang['Add_poll'] = 'Anket Ekle';
$lang['Add_poll_explain'] = 'Eğer mesajınıza bir anket eklemek istemiyorsanız, aşağıdaki bölümleri boş bırakın';
$lang['Poll_question'] = 'Anket sorusu';
$lang['Poll_option'] = 'Anket şıkkı';
$lang['Add_option'] = 'Bu şıkkı ekle';
$lang['Update'] = 'Güncelle';
$lang['Delete'] = 'Sil';
$lang['Poll_for'] = 'Gösterim süresi';
$lang['Days'] = 'Gün'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Sınırlama koymamak için 0 yazın ya da boş bırakın ]';
$lang['Delete_poll'] = 'Anketi sil';

$lang['Disable_HTML_post'] = 'Bu mesajda HTML kullanma';
$lang['Disable_BBCode_post'] = 'Bu mesajda BBCode kullanma';
$lang['Disable_Smilies_post'] = 'Bu mesajda Smilileri kullanma';

$lang['HTML_is_ON'] = 'HTML <u>Açık</u>';
$lang['HTML_is_OFF'] = 'HTML <u>Kapalı</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>Açık</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>Kapalı</u>';
$lang['Smilies_are_ON'] = 'Smililer <u>Açık</u>';
$lang['Smilies_are_OFF'] = 'Smililer <u>Kapalı</u>';

$lang['Attach_signature'] = 'İmzamı ekle (imzanız profil bölümünden değiştirilebilir)';
$lang['Notify'] = 'Cevap geldiğinde bana haber ver';
$lang['Delete_post'] = 'Bu mesajı sil';

$lang['Stored'] = 'Mesajınız başarıyla gönderilmiştir';
$lang['Deleted'] = 'Mesajınız başarıyla silinmiştir';
$lang['Poll_delete'] = 'Anketiniz başarıyla silinmiştir';
$lang['Vote_cast'] = 'Oyunuz ankete eklendi';

$lang['Topic_reply_notification'] = 'Cevap gözleme';

$lang['bbcode_b_help'] = 'Kalın yazı: [b]metin[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Italic yazı: [i]metin[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Altçizgili yazı: [u]metin[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Alıntı: [quote]metin[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kod görüntüleme: [code]kod[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Liste: [list]liste[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Sıralı liste: [list=]metin[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Resim koy: [img]http://adres[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL koy: [url]http://url[/url] ya da [url=http://url]metin[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Açık tüm BBCode komutlarını sonlandırır.';
$lang['bbcode_s_help'] = 'Font rengi: [color=red]metin[/color]  Tiyo: color=#FF0000 diye de kullanılailbir';
$lang['bbcode_f_help'] = 'Font boyutu: [size=x-small]küçük font[/size]';

$lang['Emoticons'] = 'Smiley Paneli';
$lang['More_emoticons'] = 'Tüm smilileri göster';

$lang['Font_color'] = 'Font rengi';
$lang['color_default'] = 'Standart';
$lang['color_dark_red'] = 'Koyu kırmızı';
$lang['color_red'] = 'Kırmızı';
$lang['color_orange'] = 'Turuncu';
$lang['color_brown'] = 'Kahverengi';
$lang['color_yellow'] = 'Sarı';
$lang['color_green'] = 'Yeşil';
$lang['color_olive'] = 'Haki';
$lang['color_cyan'] = 'Turkuaz';
$lang['color_blue'] = 'Mavi';
$lang['color_dark_blue'] = 'Koyu mavi';
$lang['color_indigo'] = 'Mor';
$lang['color_violet'] = 'Eflatun';
$lang['color_white'] = 'Beyaz';
$lang['color_black'] = 'Siyah';

$lang['Font_size'] = 'Font boyutu';
$lang['font_tiny'] = 'Ufacık';
$lang['font_small'] = 'Küçük';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Büyük';
$lang['font_huge'] = 'Kocaman';

$lang['Close_Tags'] = 'Komutları Sonlandır';
$lang['Styles_tip'] = 'Tavsiye: Yazıyı seçerek burdaki stilleri daha rahat uygulayabilirsiniz';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Özel Mesajlar';

$lang['Login_check_pm'] = 'Özel mesajlarınızı kontrol etmek için login olun';
$lang['New_pms'] = '%d adet yeni mesajınız var'; // You have 2 new messages
$lang['New_pm'] = '%d adet yeni mesajınız var'; // You have 1 new message
$lang['No_new_pm'] = 'Yeni mesajınız yok';
$lang['Unread_pms'] = '%d adet okunmamış mesajınız var';
$lang['Unread_pm'] = '%d adet okunmamış mesajınız var';
$lang['No_unread_pm'] = 'Okunmamış mesajınız yok';
$lang['You_new_pm'] = 'Yeni bir özel mesaj sizi bekliyor';
$lang['You_new_pms'] = 'Yeni özel mesajlar sizi bekliyor';
$lang['You_no_new_pm'] = 'Bekleyen yeni mesajınız yok';

$lang['Unread_message'] = 'Okunmamış mesaj';
$lang['Read_message'] = 'Okunmuş mesaj';

$lang['Read_pm'] = 'Mesajı oku';
$lang['Post_new_pm'] = 'Mesajı gönder';
$lang['Post_reply_pm'] = 'Mesaja cevap ver';
$lang['Post_quote_pm'] = 'Alıntı yap';
$lang['Edit_pm'] = 'Mesajı düzenle';

$lang['Inbox'] = 'Gelenler';
$lang['Outbox'] = 'Gönderilenler';
$lang['Savebox'] = 'Saklananlar';
$lang['Sentbox'] = 'Ulaşanlar';
$lang['Flag'] = 'Durum';
$lang['Subject'] = 'Konu';
$lang['From'] = 'Kimden';
$lang['To'] = 'Kime';
$lang['Date'] = 'Tarih';
$lang['Mark'] = 'İşaret';
$lang['Sent'] = 'Gönderildi';
$lang['Saved'] = 'Kaydedildi';
$lang['Delete_marked'] = 'Seçilenleri Sil';
$lang['Delete_all'] = 'Hepsini Sil';
$lang['Save_marked'] = 'Seçilenleri Sakla';
$lang['Save_message'] = 'Mesajı Sakla';
$lang['Delete_message'] = 'Mesajı Sil';

$lang['Display_messages'] = 'mesajları göster'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Tüm';

$lang['No_messages_folder'] = 'Bu klasörde hiç mesajınız yok';

$lang['PM_disabled'] = 'Bu sitede Özel Mesajlaşma engellenmiştir';
$lang['Cannot_send_privmsg'] = 'Üzgünüz, administrator sizin özel mesaj atma hakkınızı iptal etmiştir';
$lang['No_to_user'] = 'Bu mesajı göndermek için bir kullanıcı adı belirtmelisiniz';
$lang['No_such_user'] = 'Üzgünüz, böyle bir kullanıcı bulunmamaktadır';

$lang['Disable_HTML_pm'] = 'Bu mesajda HTML\'i kapa';
$lang['Disable_BBCode_pm'] = 'Bu mesajda BBCode\'u kapa';
$lang['Disable_Smilies_pm'] = 'Bu mesajda Smilileri kullanma';

$lang['Message_sent'] = 'Mesajınız gönderilmiştir';

$lang['Click_return_inbox'] = 'Gelenler Kutusuna dönmek için %sburaya%s tıklayın';
$lang['Click_return_index'] = 'Ana Sayfaya gitmek için %sburaya%s tıklayın';

$lang['Send_a_new_message'] = 'Yeni bir özel mesaj gönder';
$lang['Send_a_reply'] = 'Özel bir mesaja cevap ver';
$lang['Edit_message'] = 'Özel mesajı değiştir';

$lang['Notification_subject'] = 'Yeni bir özel mesaj geldi';

$lang['Find_username'] = 'Kullanıcı adı bul';
$lang['Find'] = 'Bul';
$lang['No_match'] = 'Kullanıcı adı bulunamadı';

$lang['No_post_id'] = 'Mesaj ID\'si belirtilmemiş';
$lang['No_such_folder'] = 'Böyle bir klasör yok';
$lang['No_folder'] = 'Klasör belirtilmemiş';

$lang['Mark_all'] = 'Hepsini işaretle';
$lang['Unmark_all'] = 'İşaretleri kaldır';

$lang['Confirm_delete_pm'] = 'Bu mesajı silmek istediğinize emin misiniz?';
$lang['Confirm_delete_pms'] = 'Bu mesajları silmek istediğinize emin misiniz?';

$lang['Inbox_size'] = 'Gelenler Kutunuz %d%% dolu'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Ulaşanlar Kutunuz %d%% dolu';
$lang['Savebox_size'] = 'Saklananlar Kutunuz %d%% dolu';

$lang['Click_view_privmsg'] = 'Gelenler Kutunuza gitmek için %sburaya%s tıklayınız';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profili görüntülenen :: %s'; // %s is username
$lang['About_user'] = '%s hakkında'; // %s is username

$lang['Preferences'] = 'Seçenekler';
$lang['Items_required'] = '* işaretli bölümler aksi belirtilmedikçe doldurulmak zorundadır';
$lang['Registration_info'] = 'Kayıt bilgileri';
$lang['Profile_info'] = 'Profil';
$lang['Profile_info_warn'] = 'Bu bilgiler herkes tarafından görülebilecektir';
$lang['Avatar_panel'] = 'Avatar kontrol paneli';
$lang['Avatar_gallery'] = 'Avatar galerisi';

$lang['Website'] = 'Web sitesi';
$lang['Location'] = 'Nerden';
$lang['Contact'] = 'Haberleşme:';
$lang['Email_address'] = 'E-mail adresi';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Özel mesaj gönder';
$lang['Hidden_email'] = '[ Gizli ]';
$lang['Search_user_posts'] = 'Bu kullanıcının gönderdiği mesajları bul';
$lang['Interests'] = 'İlgi alanları';
$lang['Occupation'] = 'Meslek';
$lang['Poster_rank'] = 'Kullanıcı derecesi';

$lang['Total_posts'] = 'Mesaj Sayısı';
$lang['User_post_pct_stats'] = 'Tüm mesajların %.2f%%'; // 1.25% of total
$lang['User_post_day_stats'] = 'Ortalama hergün %.2f mesaj'; // 1.5 posts per day
$lang['Search_user_posts'] = '%s tarafından gönderilen tüm mesajları bul'; // Find all posts by username

$lang['No_user_id_specified'] = 'Üzgünüz, böyle bir kullanıcı yok';
$lang['Wrong_Profile'] = 'Kendinizin olmayan bir profili değiştiremezsiniz';

$lang['Only_one_avatar'] = 'Sadece bir tip avatar seçilebilir';
$lang['File_no_data'] = 'Verdiğiniz URL\'deki dosya bilgi içermiyor';
$lang['No_connection_URL'] = 'Verdiğiniz URL ile bağlantı kurulamadı';
$lang['Incomplete_URL'] = 'Verdiğiniz URL tamamlanmamış';
$lang['Wrong_remote_avatar_format'] = 'URL\'sini verdiğiniz avatar, doğru bir formatta değil';
$lang['No_send_account_inactive'] = 'Şu anda şifreniz belirlenemiyor çünkü hesabınız aktif değil. Lütfen forum admini ile görüşünüz';

$lang['Always_smile'] = 'Smilileri her zaman kullan';
$lang['Always_html'] = 'Her zaman HTML kullan';
$lang['Always_bbcode'] = 'Her zaman BBCode kullan';
$lang['Always_add_sig'] = 'Her zaman imzamı ekle';
$lang['Always_notify'] = 'Her zaman beni cevaplardan haberdar et';
$lang['Always_notify_explain'] = 'Sizin gönderdiğiniz biz başlığa her cevap geldiğinde sizi e-mail ile haberdar eder. Bu her mesaj gönderişinizde de değiştirilebilir.';

$lang['Board_style'] = 'Ana tema';
$lang['Board_lang'] = 'Dil';
$lang['No_themes'] = 'Kayıtlı tema yok';
$lang['Timezone'] = 'Zaman dilimi';
$lang['Date_format'] = 'Saat formatı';
$lang['Date_format_explain'] = 'Kullanılan yazım tarzı PHP\'deki <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> fonksiyonuna eştir';
$lang['Signature'] = 'İmza';
$lang['Signature_explain'] = 'Bu gönderdiğiniz mesajlara eklenebilecek bir yazı bloğudur. %d karakterlik bir limit vardır';
$lang['Public_view_email'] = 'Herzaman e-mail adresimi göster';

$lang['Current_password'] = 'Şimdiki şifreniz';
$lang['New_password'] = 'Yeni şifreniz';
$lang['Confirm_password'] = 'Yeni şifrenizi tekrar girin';
$lang['Confirm_password_explain'] = 'Şifrenizi ya da e-mail adresinizi değiştirmek için şifrenizi tekrar girerek onaylamanız gerekmektedir';
$lang['password_if_changed'] = 'Sadece değiştirmek istiyorsanız şifrenizi yazmalısınız';
$lang['password_confirm_if_changed'] = 'Sadece şifrenizi değiştirdiyseniz yeni şifrenizi onaylamalısınız';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Mesajlarınızın yanındaki küçük resim. Bir seferde sadece bir resim gösterilebilir, genişliği %d pixelden, yüksekliği %d pixelden ve boyutu %dkB\'tan büyük olamaz.';
$lang['Upload_Avatar_file'] = 'Bilgisayarınızdan bir avatar yollayın';
$lang['Upload_Avatar_URL'] = 'Bir URL\'den Avatar gönderin';
$lang['Upload_Avatar_URL_explain'] = 'Avatar\'ın olduğu sitenin URL\'sini girin, buraya kopyalanacaktır';
$lang['Pick_local_Avatar'] = 'Avatar\'ı galeriden seçin';
$lang['Link_remote_Avatar'] = 'Başka bir siteden Avatar seçin';
$lang['Link_remote_Avatar_explain'] = 'İstediğiniz başka bir Avatarın URLsini girin. Bu siteye kopyalanmayacaktır';
$lang['Avatar_URL'] = 'Avatar URL\'si';
$lang['Select_from_gallery'] = 'Galeriden Avatar seçin';
$lang['View_avatar_gallery'] = 'Galeriyi göster';

$lang['Select_avatar'] = 'Avatarı Seç';
$lang['Return_profile'] = 'İptal';
$lang['Select_category'] = 'Kategori seç';

$lang['Delete_Image'] = 'Avatarı sil';
$lang['Current_Image'] = 'Şu andaki Avatar';

$lang['Notify_on_privmsg'] = 'Özel Mesaj gelince beni haberdar et';
$lang['Popup_on_privmsg'] = 'Özel Mesaj gelince yeni bir pencere aç';
$lang['Popup_on_privmsg_explain'] = 'Bu seçeneği seçerek, yeni bir Özel Mesaj geldiğinde yeni bir pencere ile haberdar edilirsiniz';
$lang['Hide_user'] = 'Online olduğumu gizle';

$lang['Profile_updated'] = 'Profiliniz güncellendi';
$lang['Profile_updated_inactive'] = 'Profiliniz güncellendi, ama bazı önemli bilgileri değiştirdiğiniz için hesabınız aktif değil. Yeniden aktif hale getirmek için yapmanız gerekenleri bulmak için e-mail\'inizi kontrol edin, eğer admin onayı gerekiyorsa, adminin onaylamasını bekleyin';

$lang['Password_mismatch'] = 'Girdiğiniz şifreler birbirini tutmuyor';
$lang['Current_password_mismatch'] = 'Girdiğiniz şifre şu andaki şifrenizi tutmuyor';
$lang['Password_long'] = 'Şifreniz 32 karakterden uzun olamaz';
$lang['Username_taken'] = 'Üzgünüz bu kullanıcı ismi daha önce alınmış';
$lang['Username_invalid'] = 'Üzgünüz bu kullanıcı ismi \' gibi izin verilmeyen bir karakter içeriyor';
$lang['Username_disallowed'] = 'Üzgünüz bu kullanıcı ismine izin verilmiyor';
$lang['Email_taken'] = 'Üzgünüz bu e-mail adresi başka bir kullanıcı tarafınaan kullanılıyor';
$lang['Email_banned'] = 'Üzgünüz bu e-mail adresi yasaklanmış (banlanmış)';
$lang['Email_invalid'] = 'Üzgünüz bu e-mail adresi doğru değil';
$lang['Signature_too_long'] = 'İmzanız çok uzun';
$lang['Fields_empty'] = 'Zorunlu bölümleri doldurmalısınız';
$lang['Avatar_filetype'] = 'Avatarın formatı .jpg, .gif ya da .png olmalıdır';
$lang['Avatar_filesize'] = 'Avatar dosyası %d kB\'tan az olmalıdır'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Avatarın genişliği %d pixelden, yüksekliği %d pixelden küçük olmalıdır';

$lang['Welcome_subject'] = '%s Forumlarına Hoşgeldiniz'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Yeni kullanıcı hesabı';
$lang['Account_activated_subject'] = 'Hesap aktif hale getirilmiştir';

$lang['Account_added'] = 'Kaydolduğunuz için teşekkürler, hesabınız yaratılmıştır. Kullanıcı isminiz ve Şifrenizle login olabilirsiniz';
$lang['Account_inactive'] = 'Hesabınız yaratılmıştır. Aktivasyon kodu e-mail\'inize gönderilmiştir. Daha fazla bilgi için e-mail\'inizi kontrol ediniz';
$lang['Account_inactive_admin'] = 'Hesabınız yaratılmıştır. Ama hesabınızın aktif hale gelmesi için admin onayı gerekmektedir. Onlara bir e-mail gönderilmiştir ve hesabınız aktif hale geldiğinde size haber verilecektir';
$lang['Account_active'] = 'Hesabınız aktif hale getirilmiştir. Kaydolduğunuz için teşekkür ederiz';
$lang['Account_active_admin'] = 'Hesap aktif hale getirilmiştir';
$lang['Already_activated'] = 'Hesabınızı daha önce aktif hale getirmiştiniz';
$lang['Reactivate'] = 'Hesabınızı yeniden aktif hale getirmelisiniz!';
$lang['COPPA'] = 'Hesabınız yaratılmıştır ama onaylanması gerekmektedir, detaylar için e-mail\'inizi kontrol ediniz.';

$lang['Registration'] = 'Kayıt Anlaşması';
$lang['Reg_agreement'] = 'Bu forumun yöneticileri ve moderatörleri her ne kadar itiraz edilebilecek her türlü materyali mümkün olduğu kadar kısa sürede siteden kaldıracak da olsa, bütün mesajların incelenmesi mümkün olmamaktadır. Bu durumda siz buraya gönderilen her mesajın, onu gönderen kullanıcının görüşlerini yansıttığını, moderatörlerin, adminlerin ya da webmasterların (kendilerine ait mesajlar dışında) sorumlu tutulamıyacağını peşinen kabul etmiş bulunuyorsunuz.<br /><br />Aşağılayıcı, müstehcen, kaba, iftira niteliğinde, nefret dolu, tehdit edici, sekse yönelik ya da kanunlarla çelişecek içerikler göndermeyeceğinizi kabul ediyorsunuz. Bunları dikkate almamanız durumunda hemen ve süresizce siteden uzaklaştırılırsınız (ve servis sağlayıcınız da haberdar edilir). Her mesajın IP adresi bunları engellemek için kaydedilmektedir. Bu forumun moderatörleri, adminleri ya da webmasterının, kendi iradeleri doğrultusuna herhangi bir başlığı silme, taşıma, kilitleme yetkisi olduğunu kabul ediyorsunuz. Bir kullanıcı olarak her girdiğiniz bilginin veritabanında saklanacağını kabul ediyorsunuz. Her ne kadar bu bilgiler sizin bilginiz dışında 3. şahıslara verilmeyecek olsa da, herhangi bir \'hack\' olayı sonucunda bu bilgiler 3. şahıslara dağılırsa bundan webmaster, moderatör ya da adminleri sorumlu tutamazsınız.<br /><br />Bu forum sistemi, bazı bilgileri bilgisayarınızda saklamak için cookie\'leri kullanmaktadır. Girdiğiniz özel bilgilerin hiçbiri bu cookie\'lerde bulunmamaktadır, bunların tek amacı forumda daha rahat bir gezinti yapabilmenizdir. E-mail adresiniz sadece kaydınızı onaylamak ve şifrenizi yollamak içindir (Ve unuttuğunuz zaman şifrenizi yeniden yollamak için).<br /><br />Aşağıdaki kabul ediyorum linkine basmak sureti ile yukarıdaki bütün koşulların bağlayıcılığını kabul edersiniz.';

$lang['Agree_under_13'] = 'Yukarıdaki koşulları kabul ediyorum ve 13 yaşın <b>altındayım</b>';
$lang['Agree_over_13'] = 'Yukarıdaki koşulları kabul ediyorum ve 13 yaşın <b>üstündeyim</b>';
$lang['Agree_not'] = 'Bu koşulları kabul etmiyorum';

$lang['Wrong_activation'] = 'Girdiğiniz aktivasyon kodu veritabanındaki ile uyuşmuyor.';
$lang['Send_password'] = 'Bana yeni bir şifre gönder';
$lang['Password_updated'] = 'Yeni şifreniz yaratıldı, nasıl aktif hale getireceğinizi öğrenmek için e-mail\'inizi kontrol ediniz';
$lang['No_email_match'] = 'Bu kullanıcı için verdiğiniz e-mail adresi veritabanındaki ile uyuşmuyor';
$lang['New_password_activation'] = 'Yeni şifre aktivasyonu';
$lang['Password_activated'] = 'Hesabınız yeniden aktif hale getirilmiştir. Login olmak için e-mail\'inize gönderilen şifreyi kullanın';

$lang['Send_email_msg'] = 'E-mail gönder';
$lang['No_user_specified'] = 'Kullanıcı ismi seçilmedi';
$lang['User_prevent_email'] = 'Bu kullanıcı e-mail almak istemiyor. Özel Mesaj göndermeyi deneyin';
$lang['User_not_exist'] = 'Böyle bir kullanıcı yok';
$lang['CC_email'] = 'Bu e-mail\'in bir kopyasını kendinize gönderin';
$lang['Email_message_desc'] = 'Bu mesaj düz metin içercektir, BBCode ya da HTML kullanılmayacaktır. Cevap adresi olarak sizin e-mail adresiniz girilmiştir';
$lang['Flood_email_limit'] = 'Şu anda başka bir e-mail gönderemezsiniz, lütfen daha sonra tekrar deneyiniz';
$lang['Recipient'] = 'Alıcı';
$lang['Email_sent'] = 'E-mail gönderilmiştir';
$lang['Send_email'] = 'E-mail\'i gönder';
$lang['Empty_subject_email'] = 'E-mail için bir konu belirtmelisiniz';
$lang['Empty_message_email'] = 'E-mail\'le gönderilecek bir mesaj yazmalısınız';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Sıralama stilini seçiniz';
$lang['Sort'] = 'Sırala';
$lang['Sort_Top_Ten'] = 'TOP 10';
$lang['Sort_Joined'] = 'Giriş tarihi';
$lang['Sort_Username'] = 'Kullanıcı ismi';
$lang['Sort_Location'] = 'Yer';
$lang['Sort_Posts'] = 'Toplam mesaj';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Web sitesi';
$lang['Sort_Ascending'] = 'Artan';
$lang['Sort_Descending'] = 'Azalan';
$lang['Order'] = 'Düzen';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Grup Kontrol Paneli';
$lang['Group_member_details'] = 'Grup Üyeliği Detayları';
$lang['Group_member_join'] = 'Bir Gruba Katıl';

$lang['Group_Information'] = 'Grup Bilgileri';
$lang['Group_name'] = 'Grup adı';
$lang['Group_description'] = 'Grup açıklaması';
$lang['Group_membership'] = 'Grup üyeliği';
$lang['Group_Members'] = 'Grup Üyeleri';
$lang['Group_Moderator'] = 'Grup Moderatorü';
$lang['Pending_members'] = 'Onay bekleyen üyeler';

$lang['Group_type'] = 'Grup türü';
$lang['Group_open'] = 'Açık grup';
$lang['Group_closed'] = 'Kapalı grup';
$lang['Group_hidden'] = 'Gizli grup';

$lang['Current_memberships'] = 'Şu andaki üyelikler';
$lang['Non_member_groups'] = 'Üye olunmamış gruplar';
$lang['Memberships_pending'] = 'Onay bekleyen üyelikler';

$lang['No_groups_exist'] = 'Hiç kullanıcı grubu yok';
$lang['Group_not_exist'] = 'Böyle bir kullanıcı grubu yok';

$lang['Join_group'] = 'Gruba katıl';
$lang['No_group_members'] = 'Bu grubun hiç üyesi yok';
$lang['Group_hidden_members'] = 'Bu grup gizlenmiş, üyelikleri göremezsiniz';
$lang['No_pending_group_members'] = 'Bu grupta hiç onay bekleyen üyelik yok';
$lang['Group_joined'] = 'Bu gruba başarıyla kaydoldunuz<br />Üyeliğiniz moderator tarafından onaylandığına haberdar edileceksiniz';
$lang['Group_request'] = 'Grubunuza katılmak için bir başvuru var';
$lang['Group_approved'] = 'Başvurunuz onaylanmıştır';
$lang['Group_added'] = 'Bu gruba eklendiniz';
$lang['Already_member_group'] = 'Zaten bu grubun üyesisiniz';
$lang['User_is_member_group'] = 'Kullanıcı zaten bu grubun üyesi';
$lang['Group_type_updated'] = 'Grup türü güncellendi';

$lang['Could_not_add_user'] = 'Seçtiğiniz kullanıcı yok';
$lang['Could_not_anon_user'] = 'Misafir bir kullanıcıyı üye yapamazsınız';

$lang['Confirm_unsub'] = 'Bu gruptan üyeliğinizi sildirmek istediğinize emin misiniz?';
$lang['Confirm_unsub_pending'] = 'Bu gruba üyeliğiniz henüz onaylanmadı, gene de sildirmek istediğinize emin misiniz?';

$lang['Unsub_success'] = 'Bu gruptan kaydınız silinmiştir';

$lang['Approve_selected'] = 'Seçilenleri onayla';
$lang['Deny_selected'] = 'Seçilenleri reddet';
$lang['Not_logged_in'] = 'Bir gruba katılmak için login olmanız lazım.';
$lang['Remove_selected'] = 'Seçilenleri çıkar';
$lang['Add_member'] = 'Üye Ekle';
$lang['Not_group_moderator'] = 'Bu grubun moderatoru değilsiniz, bunu yapamazsınız.';

$lang['Login_to_join'] = 'Gruba katılmak ya da grubu yönetmek için login olmalısınız';
$lang['This_open_group'] = 'Bu açık bir grup, üyelik istemek için tıklayın';
$lang['This_closed_group'] = 'Bu kapalı bir grup, yeni üyelik alınmıyor';
$lang['This_hidden_group'] = 'Bu gizli bir grup, otomatik üye alımına izin verilmiyor';
$lang['Member_this_group'] = 'Bu grubun üyesisiniz';
$lang['Pending_this_group'] = 'Bu gruba üyeliğiniz onay için beklemede';
$lang['Are_group_moderator'] = 'Bu grubun moderatorüsünüz';
$lang['None'] = 'Yok';

$lang['Subscribe'] = 'Üye ol';
$lang['Unsubscribe'] = 'Üyelik sildir';
$lang['View_Information'] = 'Grup hakkında';


//
// Search
//
$lang['Search_query'] = 'Arama';
$lang['Search_options'] = 'Arama Seçenekleri';

$lang['Search_keywords'] = 'Anahtar Kelimeleri Ara';
$lang['Search_keywords_explain'] = '<u>AND</u> ile sonuçlarda bulunması zorunlu kelimeleri, <u>OR</u> ile sonuçlarda olabilecek kelimeleri ve <u>NOT</u> ile sonuçta olmaması gereken kelimeleri tanımlayabilirsiniz. * işareti ile kelimenin bir bölümünü girip gerisinin bulunmasını sağlayabilirsiniz';
$lang['Search_author'] = 'Yazarı Ara';
$lang['Search_author_explain'] = '* ile kelimenin bir kısmını girip tutan sonucları bulabilirsiniz';

$lang['Search_for_any'] = 'Herhangi bir terim için ara ya da girilen önermeyi kullan';
$lang['Search_for_all'] = 'Bütün terimler için ara';
$lang['Search_title_msg'] = 'Başlık ve mesaj metninde ara';
$lang['Search_msg_only'] = 'Sadece mesaj metninde ara';

$lang['Return_first'] = 'Mesajın ilk'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'karakterini göster';

$lang['Search_previous'] = 'Süre'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sıralama';
$lang['Sort_Time'] = 'Zaman';
$lang['Sort_Post_Subject'] = 'Konu';
$lang['Sort_Topic_Title'] = 'Başlık';
$lang['Sort_Author'] = 'Yazar';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Sonuçlar';
$lang['All_available'] = 'Tümü';
$lang['No_searchable_forums'] = 'Bu sitedeki hiçbir forumda arama yapma yetkiniz yok';

$lang['No_search_match'] = 'Arama kriterlerinize uygun mesaj ya da başlık bulunamadı';
$lang['Found_search_match'] = 'Arama sonucunda %d adet mesaj bulundu'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Arama sonucunda %d adet mesaj bulundu'; // eg. Search found 24 matches

$lang['Close_window'] = 'Pencereyi kapat';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Üzgünüz, sadece %s bu foruma duyuru gönderebilir';
$lang['Sorry_auth_sticky'] = 'Üzgünüz, sadece %s bu foruma sabit mesaj gönderebilir';
$lang['Sorry_auth_read'] = 'Üzgünüz, sadece %s bu forumdaki mesajları okuyabilir';
$lang['Sorry_auth_post'] = 'Üzgünüz, sadece %s bu foruma başlık gönderebilir';
$lang['Sorry_auth_reply'] = 'Üzgünüz, sadece %s bu forumdaki mesajlara cevap verebilir';
$lang['Sorry_auth_edit'] = 'Üzgünüz, sadece %s bu forumdaki mesajları değiştirebilir';
$lang['Sorry_auth_delete'] = 'Üzgünüz, sadece %s bu forumdaki mesajları silebilir';
$lang['Sorry_auth_vote'] = 'Üzgünüz, sadece %s bu forumdaki anketlere oy verebilir';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>misafirler</b>';
$lang['Auth_Registered_Users'] = '<b>kayıtlı kullanıcılar</b>';
$lang['Auth_Users_granted_access'] = '<b>özel haklara sahip kullanıcılar</b>';
$lang['Auth_Moderators'] = '<b>moderatorler</b>';
$lang['Auth_Administrators'] = '<b>administratorler</b>';

$lang['Not_Moderator'] = 'Bu forumun moderatörü değilsiniz';
$lang['Not_Authorised'] = 'İzniniz yok';

$lang['You_been_banned'] = 'Bu forumdan atıldınız<br />Ayrıntılı bilgi için webmaster ya da forum admini ile bağlantıya geçin';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 kayıtlı kullanıcı ve '; // There ae 5 Registered and
$lang['Reg_users_online'] = '%d kayıtlı kullanıcı ve '; // There ae 5 Registered and
$lang['Reg_user_online'] = '%d kayıtlı kullanıcı ve '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 gizli kullanıcı online'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d gizli kullanıcı online'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d gizli kullanıcı online'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d misafir online'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 misafir online'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d misafir online'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Şu anda bu forumu dolaşan kullanıcı yok';

$lang['Online_explain'] = 'Bu bilgi son 5 dakika içinde aktif olan kullanıcılara dayanmaktadır';

$lang['Forum_Location'] = 'Forumdaki Yeri';
$lang['Last_updated'] = 'Son güncelleme';

$lang['Forum_index'] = 'Forum Ana Sayfa';
$lang['Logging_on'] = 'Giriş yapıyor';
$lang['Posting_message'] = 'Mesaj gönderiyor';
$lang['Searching_forums'] = 'Arama yapıyor';
$lang['Viewing_profile'] = 'Profil görüntülüyor';
$lang['Viewing_online'] = 'Kimin online olduğuna bakıyor';
$lang['Viewing_member_list'] = 'Üye listesine bakıyor';
$lang['Viewing_priv_msgs'] = 'Özel mesajlarına bakıyor';
$lang['Viewing_FAQ'] = 'SSS\'ı görüntülüyor';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderator Kontrol Paneli';
$lang['Mod_CP_explain'] = 'Aşağıdaki formu kullanarak bu forumda moderasyon yapabilirsiniz. İstediğiniz sayıda forumu silebilir, taşıyabilir, kilitleyebilir ya da kilidini açabilirsiniz';

$lang['Select'] = 'Seç';
$lang['Delete'] = 'Sil';
$lang['Move'] = 'Taşı';
$lang['Lock'] = 'Kilitle';
$lang['Unlock'] = 'Kilidi Aç';

$lang['Topics_Removed'] = 'Seçtiğiniz başlıklar veritabanından başarıyla silinmişlerdir';
$lang['Topics_Locked'] = 'Seçtiğiniz başlıklar kilitlenmişlerdir';
$lang['Topics_Moved'] = 'Seçtiğiniz başlıklar taşınmıştır';
$lang['Topics_Unlocked'] = 'Seçtiğiniz başlıkların kilidi açılmıştır';
$lang['No_Topics_Moved'] = 'Hiçbir başlık taşınmamıştır';

$lang['Confirm_delete_topic'] = 'Seçtiğiniz başlığın/başlıkların silinmesini istediğinize emin misiniz?';
$lang['Confirm_lock_topic'] = 'Seçtiğiniz başlığın/başlıkların kilitlenmesini istediğinize emin misiniz?';
$lang['Confirm_unlock_topic'] = 'Seçtiğiniz başlığın/başlıkların kilitlerinin açılmasını istediğinize emin misiniz?';
$lang['Confirm_move_topic'] = 'Seçtiğiniz başlığın/başlıkların taşınmasını istediğinize emin misiniz?';

$lang['Move_to_forum'] = 'Bu foruma taşı:';
$lang['Leave_shadow_topic'] = 'Eski forumda gölgesini bırak';

$lang['Split_Topic'] = 'Başlık Bölme Kontrol Paneli';
$lang['Split_Topic_explain'] = 'Bu form ile bir ana başlığı, ister tek tek mesaj seçerek ister belli bir mesajdan ayırarak ikiye bölebilirsiniz';
$lang['Split_title'] = 'Yeni konu başlığı';
$lang['Split_forum'] = 'Yeni başlığın forumu';
$lang['Split_posts'] = 'Seçilen mesajları ayır';
$lang['Split_after'] = 'Seçilen mesajdan ayır';
$lang['Topic_split'] = 'Seçilen başlı başarıyla ayrılmıştır';

$lang['Too_many_error'] = 'Çok fazla mesaj seçtiniz. Başlığı sadece bir mesajdan ayırabilirsiniz!';

$lang['None_selected'] = 'Bu işlemi yapmak için hiçbir başlığı seçmediniz. Lütfen geri dönüp bir tane seçiniz';
$lang['New_forum'] = 'Yeni forum';

$lang['This_posts_IP'] = 'Bu mesajı gönderenin IP adresi';
$lang['Other_IP_this_user'] = 'Bu kullanıcının diğer IP adresleri';
$lang['Users_this_IP'] = 'Bu IP adresini kullanan diğer kullanıcılar';
$lang['IP_info'] = 'IP bilgisi';
$lang['Lookup_IP'] = 'Bu IP adresini ara';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Tüm saatler %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Saat';
$lang['-11'] = 'GMT - 11 Saat';
$lang['-10'] = 'GMT - 10 Saat';
$lang['-9'] = 'GMT - 9 Saat';
$lang['-8'] = 'GMT -8 Saat';
$lang['-7'] = 'GMT -7 Saat';
$lang['-6'] = 'GMT -6 Saat';
$lang['-5'] = 'GMT -5 Saat';
$lang['-4'] = 'GMT - 4 Saat';
$lang['-3.5'] = 'GMT - 3.5 Saat';
$lang['-3'] = 'GMT - 3 Saat';
$lang['-2'] = 'GMT -2 Saat';
$lang['-1'] = 'GMT - 1 Saat';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT +1 Saat';
$lang['2'] = 'GMT +2 Saat';
$lang['3'] = 'GMT + 3 Saat';
$lang['3.5'] = 'GMT + 3.5 Saat';
$lang['4'] = 'GMT + 4 Saat';
$lang['4.5'] = 'GMT + 4.5 Saat';
$lang['5'] = 'GMT + 5 Saat';
$lang['5.5'] = 'GMT + 5.5 Saat';
$lang['6'] = 'GMT + 6 Saat';
$lang['6.5'] = 'GMT + 6.5 Saat';
$lang['7'] = 'GMT + 7 Saat';
$lang['8'] = 'GMT +8 Saat';
$lang['9'] = 'GMT + 9 Saat';
$lang['9.5'] = 'GMT +9.5 Saat';
$lang['10'] = 'GMT +10 Saat';
$lang['11'] = 'GMT + 11 Saat';
$lang['12'] = 'GMT + 12 Saat';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT -12:00 Saat';
$lang['tz']['-11'] = 'GMT -11:00 Saat';
$lang['tz']['-10'] = 'GMT -10:00 Saat';
$lang['tz']['-9'] = 'GMT -9:00 Saat';
$lang['tz']['-8'] = 'GMT -8:00 Saat';
$lang['tz']['-7'] = 'GMT -7:00 Saat';
$lang['tz']['-6'] = 'GMT -6:00 Saat';
$lang['tz']['-5'] = 'GMT -5:00 Saat';
$lang['tz']['-4'] = 'GMT -4:00 Saat';
$lang['tz']['-3.5'] = 'GMT -3:30 Saat';
$lang['tz']['-3'] = 'GMT -3:00 Saat';
$lang['tz']['-2'] = 'GMT -2:00 Saat';
$lang['tz']['-1'] = 'GMT -1:00 Saat';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT +1:00 Saat';
$lang['tz']['2'] = 'GMT +2:00 Saat';
$lang['tz']['3'] = 'GMT +3:00 Saat';
$lang['tz']['3.5'] = 'GMT +3:30 Saat';
$lang['tz']['4'] = 'GMT +4:00 Saat';
$lang['tz']['4.5'] = 'GMT +4:30 Saat';
$lang['tz']['5'] = 'GMT +5:00 Saat';
$lang['tz']['5.5'] = 'GMT +5:30 Saat';
$lang['tz']['6'] = 'GMT +6:00 Saat';
$lang['tz']['6.5'] = 'GMT +6:30 Saat';
$lang['tz']['7'] = 'GMT +7:00 Saat';
$lang['tz']['8'] = 'GMT +8:00 Saat';
$lang['tz']['9'] = 'GMT +9:00 Saat';
$lang['tz']['9.5'] = 'GMT +9:30 Saat';
$lang['tz']['10'] = 'GMT +10:00 Saat';
$lang['tz']['11'] = 'GMT +11:00 Saat';
$lang['tz']['12'] = 'GMT +12:00 Saat';

$lang['datetime']['Sunday'] = 'Pazar';
$lang['datetime']['Monday'] = 'Pazartesi';
$lang['datetime']['Tuesday'] = 'Salı';
$lang['datetime']['Wednesday'] = 'Çarşamba';
$lang['datetime']['Thursday'] = 'Perşembe';
$lang['datetime']['Friday'] = 'Cuma';
$lang['datetime']['Saturday'] = 'Cumartesi';
$lang['datetime']['Sun'] = 'Pzr';
$lang['datetime']['Mon'] = 'Pts';
$lang['datetime']['Tue'] = 'Sal';
$lang['datetime']['Wed'] = 'Çrş';
$lang['datetime']['Thu'] = 'Prş';
$lang['datetime']['Fri'] = 'Cum';
$lang['datetime']['Sat'] = 'Cmt';
$lang['datetime']['January'] = 'Ocak';
$lang['datetime']['February'] = 'Şubat';
$lang['datetime']['March'] = 'Mart';
$lang['datetime']['April'] = 'Nisan';
$lang['datetime']['May'] = 'Mayıs';
$lang['datetime']['June'] = 'Haziran';
$lang['datetime']['July'] = 'Temmuz';
$lang['datetime']['August'] = 'Ağustos';
$lang['datetime']['September'] = 'Eylül';
$lang['datetime']['October'] = 'Ekim';
$lang['datetime']['November'] = 'Kasım';
$lang['datetime']['December'] = 'Aralık';
$lang['datetime']['Jan'] = 'Oca';
$lang['datetime']['Feb'] = 'Şub';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Nis';
$lang['datetime']['May'] = 'May';
$lang['datetime']['Jun'] = 'Hzr';
$lang['datetime']['Jul'] = 'Tem';
$lang['datetime']['Aug'] = 'Ağu';
$lang['datetime']['Sep'] = 'Eyl';
$lang['datetime']['Oct'] = 'Ekm';
$lang['datetime']['Nov'] = 'Ksm';
$lang['datetime']['Dec'] = 'Arl';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Bilgi';
$lang['Critical_Information'] = 'Kritik Bilgi';

$lang['General_Error'] = 'Genel Hata';
$lang['Critical_Error'] = 'Kritik Hata';
$lang['An_error_occured'] = 'Bir hata oluştu';
$lang['A_critical_error'] = 'Kritik bir hata oluştu';

// Translator credit
$lang['TRANSLATION_INFO'] = "Türkçe Çeviri : Onur Turgay & Erdem Çorapçıoğlu";
//
// That's all Folks!
// -------------------------------------------------

?>