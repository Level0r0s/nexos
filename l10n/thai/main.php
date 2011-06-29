<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/thai/main.php,v $
  $Revision: 9.30 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:57 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','th');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A %d %b %y@ %T %Z');
define('_DATESTRING2','%A %d %b ');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','หน้าต่อไป');
define('_PREVIOUSPAGE','หน้าก่อนนี้');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','ค้นหา');
define('_LOGIN','เข้าสู่ระบบ');
define('_WRITES','บันทึก');
define('_POSTEDON','ติดประกาศ');
define('_NICKNAME','ชื่อเรียก');
define('_PASSWORD','รหัสผ่าน');
define('_WELCOMETO','ขอต้อนรับสู่');
define('_EDIT','แก้ไข');
define('_DELETE','ลบ');
define('_POSTEDBY','ผู้บันทึก');
define('_READS','คนอ่าน');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">ย้อนกลับ</a>' : '<a href="javascript:history.go(-1)">ย้อนกลับ</a>').' ]');
define('_COMMENTS','ข้อคิดเห็นต่างๆ');
define('_PASTARTICLES','บทความที่ผ่านมา');
define('_OLDERARTICLES','บทความเก่าๆ');
define('_BY','โดย');
define('_ON','เมื่อ');
define('_LOGOUT','ออกจากโปรแกรม');
define('_WAITINGCONT','เนื้อหารอการอนุมัติ');
define('_WREVIEWS','บทวิจารณ์ที่ส่งเข้ามา');
define('_WLINKS','ลิงก์ที่ส่งเข้ามา');
define('_ONEDAY','วันนี้ในอดีต...');
define('_ASREGISTERED','ถ้าท่านยังไม่ได้เป็นสมาชิก? ท่านสามารถ <a href="'.getlink('Your_Account').'">สมัครได้ที่นี่</a> ในการเป็นสมาชิก ท่านจะได้ประโยชน์จากการตั้งค่าส่วนตัวต่างๆ เช่น ฉากหรือพื้นโปรแกรม ค่าอ่านความคิดเห็น และการแสดงความเห็นด้วยชื่อท่านเอง');
define('_MENUFOR','เมนูสำหรับ');
define('_NOBIGSTORY','ยังไม่มีข่าวใหญ่สำหรับวันนี้');
define('_BIGSTORY','เรื่องที่คนอ่านมากที่สุดคือ :');
define('_SURVEY','สำรวจความเห็น');
define('_POLLS','แบบสำรวจอื่นๆ');
define('_PCOMMENTS','คำแนะนำ:');
define('_RESULTS','ผลสำรวจ');
define('_HREADMORE','อ่านต่อ...');
define('_CURRENTLY','ขณะนี้มี ');
define('_GUESTS','บุคคลทั่วไป และ');
define('_MEMBERS','สมาชิกเข้าชม ');
define('_YOUARELOGGED','ท่านใช้ชื่อสมาชิกว่า');
define('_YOUHAVE','คุณได้รับ');
define('_PRIVATEMSG','ข้อความใหม่');
define('_YOUAREANON','ท่านยังไม่ได้ลงทะเบียนเป็นสมาชิก หากท่านต้องการ กรุณาสมัครฟรีได้<a href="'.getlink('Your_Account').'">ที่นี่</a>');
define('_NOTE','หมายเหตุ:');
define('_ADMIN','ผู้ดูแลระบบ:');
define('_WERECEIVED','มีผู้เข้าเยี่ยมชม');
define('_PAGESVIEWS','คน ตั้งแต่');
define('_TOPIC','หัวข้อ');
define('_UDOWNLOADS','ดาวน์โหลด');
define('_VOTE','ลงคะแนน');
define('_VOTES','จำนวนผู้ลงคะแนน');
define('_MVIEWADMIN','แสดง: ผู้ดูแลระบบเท่านั้น');
define('_MVIEWUSERS','แสดง: ผู้สมัครสมาชิกเท่านั้น');
define('_MVIEWANON','แสดง: ผู้ไม่ประสงค์ออกนามเท่านั้น');
define('_MVIEWALL','แสดง: ทุกคน');
define('_EXPIRELESSHOUR','ยกเลิกใน 1 ชม.');
define('_EXPIREIN','ยกเลิกใน ');
define('_UNLIMITED','ตลอดชีพ');
define('_HOURS','ชั่วโมง');
define('_RSSPROBLEM','ขณะนี้มีปัญหาเรื่อง headlines จากเจ้าของเว็บ');
define('_SELECTLANGUAGE','โปรดเลือกภาษา');
define('_SELECTGUILANG','เลือกรูปแบบภาษา:');
define('_NONE','ไม่มี');
define('_BLOCKPROBLEM','<center>เมนูนี้มีปัญหา</center>');
define('_BLOCKPROBLEM2','<center>ยังไม่มีข้อมูล</center>');
define('_MODULENOTACTIVE','เสียใจโมดูลนี้ไม่ทำงาน!');
define('_NOACTIVEMODULES','โมดูลที่ยังไม่ได้นำมาใช้งาน');
define('_MODULENOEXIST','เสียใจ, ไฟล์, %s, ที่คุณเรียกใช้ ไม่มีอยู่ในระบบ');
define('_FORADMINTESTS','(สำหรับผู้ควบคุมระบบ)');
define('_BBFORUMS','กระดานข่าว');
define('_ACCESSDENIED','ระงับการใช้งาน');
define('_RESTRICTEDAREA','คุณพยายามที่จะใช้งานในที่ส่วนตัว');
define('_MODULEUSERS','เสียใจส่วนนี้ของเว็บสำหรับ <i>สมาชิกเท่านั้น</i><br /><br />คุณสามารถสมัครสมาชิกฟรีโดยคลิ๊ก<a href="'.getlink('Your_Account&amp;file=register').'">ที่นี่</a>คุณถึงสามารถ<br />ใช้งานในส่วนนี้ได้ ขอบคุณ <br /><br />');
define('_MODULEUSERS2','คุณสามารถสมัครสมาชิกได้ฟรีโดยเข้าไป <a href="'.getlink('Your_Account&amp;file=register').'">ที่นี่</a> ซึ่งจะทำให้คุณสามารถเข้าชมในส่วนนี้ได้<br /><br />ขอบคุณที่ให้ความร่วมมือ');
define('_MODULESADMINS','เสียใจส่วนนี้ของเว็บสำหรับ <i>ผู้ดูแลระบบเท่านั้น</i><br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','หน้าแรก');
define('_HOMEPROBLEM','ขณะนี้มีปัญหาใหญ่: เรายังไม่มีโฮมเพจ!!!');
define('_ADDAHOME','เพิ่มโมดูลในหน้าแรก');
define('_HOMEPROBLEMUSER','มีปัญหาเกิดขึ้นที่หน้าแรก กรุณากลับมาตรวจสอบอีกครั้ง');
define('_MORENEWS','More in News Section');
define('_ALLCATEGORIES','ทุกประเภท');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Maximum: %s characters');

define('_SYS_MESSAGE','ข้อความจากระบบ');
define('_SYS_MESSAGES','ข้อความจากระบบ ');
define('_SYS_MAINTENANCE','ขณะนี้คุณกำลังอยู่ในโหมดปรับปรุง');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','วันที่');
define('_HOUR','ชม.');
define('_UMONTH','เดือน');
define('_YEAR','ปี');
define('_JANUARY','มกราคม');
define('_FEBRUARY','กุมภาพันธ์');
define('_MARCH','มีนาคม');
define('_APRIL','เมษายน');
define('_MAY','พฤษภาคม');
define('_JUNE','มิถุนายน');
define('_JULY','กรกฎาคม');
define('_AUGUST','สิงหาคม');
define('_SEPTEMBER','กันยายน');
define('_OCTOBER','ตุลาคม');
define('_NOVEMBER','พฤศจิกายน');
define('_DECEMBER','ธันวาคม');

define('_MONDAY','วันจันทร์');
define('_TUESDAY','วันอังคาร');
define('_WEDNESDAY','วันพุธ');
define('_THURSDAY','วันพฤหัสบดี');
define('_FRIDAY','วันศุกร์');
define('_SATURDAY','วันเสาร์');
define('_SUNDAY','วันอาทิตย์');
//three letter abbrev.
define('_ABR_MONDAY','จันทร์ ');
define('_ABR_TUESDAY','อังคาร');
define('_ABR_WEDNESDAY','พุธ');
define('_ABR_THURSDAY','พฤหัสบดี');
define('_ABR_FRIDAY','ศุกร์');
define('_ABR_SATURDAY','เสาร์');
define('_ABR_SUNDAY','อาทิตย์');

define('_BWEL','สวัสดี');
define('_BPM','ข่าวสารส่วนตัว');
define('_BUNREAD','ยังไม่อ่าน');
define('_BREAD','อ่านแล้ว');
define('_BMEMP','ข้อมูลสมาชิก');
define('_BLATEST','สมาชิกคนล่าสุด');
define('_BTD','สมาชิกใหม่วันนี้');
define('_BYD','สมาชิกใหม่เมื่อวาน');
define('_BOVER','สมาชิกทั้งหมด');
define('_BVISIT','ผู้ที่กำลังใช้งานขณะนี้');
define('_BVIS','บุคคลทั่วไป');
define('_BMEM','สมาชิก');
define('_BTT','ทั้งหมด');
define('_BON','กำลังใช้งานขณะนี้');
define('_BREG','สมัครสมาชิก');
define('_BROADCAST','กระจายข่าวสารสาธารณะ');
define('_BROADCASTFROM','ข่าวสารสาธารณะจาก');
define('_TURNOFFMSG','ปิดข่าวสารสาธารณะ');
define('_JOURNAL','วรสาร');
define('_READMYJOURNAL','อ่านวรสารของเรา');
define('_ADD','เพิ่ม');
define('_YES','ตกลง');
define('_NO','ไม่ตกลง');
define('_INVISIBLEMODULES','โมดูลที่ไม่แสดง');
define('_ACTIVEBUTNOTSEE','(ทำงานแต่ไม่ปรากฏลิงก์)');
define('_BOTS','Bots');

define('_UM','ติดตามความเคลื่อนไหวของ Dragonfly');
define('_UM_F','มีปัญหาในขณะติดต่อเพือ่อัพเดต กรุณาทดลองใหม่อีกครั้งหลังจากนี้ซักพักนึง');
define('_UM_G','คุณกำลังใช้เวอร์ชั่นล่าสุดของ Dragonfly');
define('_UM_R','กรุณา <a href="%2$s" target="_blank">อัพเกรด</a> tเป็น Dragonfly %1$s');

define('_TEAM','ทีมงาน');
define('_LINKAPPROVEDMSG','ขอแสดงความยินดี ลิ้งค์ที่คุณส่งไปได้รับการอนุมัติ โปรดลิ้งค์กลับมายังเว็บของเราและส่งที่อยู่เว็บของคุณกลับมายังเรา');
define('_MODREQLINKS','คำขอแก้ไขลิงก์');
define('_BROKENLINKS','ลิงก์เสีย');
define('_MODREQDOWN','คำขอแก้ไขดาวน์โหลด');
define('_BROKENDOWN','ดาวน์โหลดเสีย');
define('_PAGEGENERATION','การสร้างหน้าเอกสาร:');
define('_SECONDS','วินาที');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','ว็บเพจสร้างเสร็จใน %1$s วินาทีและ ข้อมูล %2$s ข้อมูลได้รับการค้นหาใน %3$s วินาที');
define('_YOUHAVEONEMSG','คุณมีข้อความใหม่');
define('_NEWPMSG','ข่าวสารส่วนตัวใหม่');
define('_CONTRIBUTEDBY','ส่งมาโดย');
define('_CHAT','แชท');
define('_REGISTERED','ลงทะเบียนแล้ว');
define('_CHATGUESTS','ผู้มาเยี่ยม');
define('_USERSTALKINGNOW','ผู้ใช้กำลังคุยอยู่ในขณะนี้');
define('_ENTERTOCHAT','เข้าไปแชทด้วย');
define('_CHATROOMS','ห้องที่ยังว่างอยู่');
define('_ALLTOPICS','ทุกหัวข้อ');
define('_ASSOTOPIC','หัวข้อที่เกี่ยวข้อง');
define('_HELLO','สวัสดี');
define('_ALL','ทั้งหมด');
define('_URL','URL');
define('_SUBJECT','เรื่อง');
define('_PREVIEW','ทดลองแสดงผลบนจอภาพ');
define('_SEND','ส่ง');
define('_ANONYMOUS','ไม่ประสงค์ออกนาม');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','เริ่มต้นระบบใหม');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','หน้าเอกสารสำหรับเครื่องพิมพ์');

define('_CREDITS_TITLE','เครดิต');
define('_CREDITS_PRODUCT','ผลผลิต');
define('_CREDITS_DESC','คำอธิบาย');
define('_CREDITS_AUTHORS','ผู้เขียน');

define('_PP_TITLE','นโยบายความเป็นส่วนตัว');
define('_PP_MODIFY','แก้ไขข้อความนี');

define('_SENDEREMAIL','อีเมล์ผู้ส่ง');
define('_SENDERNAME','ชื่อผู้ส่ง');
define('_RECIPIENTNAME','Recipient Name');
define('_RECIPIENTEMAIL','Recipient Email');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesting');
define('_REASONS_7','Informative');
define('_REASONS_8','Funny');
define('_REASONS_9','Overrated');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','เครื่องมือในการจัดการข้อมูลส่วนตัวของคุณ');
define('_TB_TASKS','งาน');
define('_TB_INFO','ข่าวสาร');
define('_TB_PROFILE_INFO','รายละเอียดเกี่ยวกับตัวคุณ');
define('_TB_EDIT_PROFILE','ข้อมูลส่วนตัวของคุณ');
define('_TB_EDIT_REG','รายละเอียดการลงทะเบียนของคุณ');
define('_TB_EDIT_PRIVATE','รายละเอียดส่วนตัว');
define('_TB_EDIT_AVATAR','สัญลักษณ์ของคุณ');
define('_TB_DELETE','ลบ account ทิ้ง');
define('_TB_CONFIG','Configuration');
define('_TB_EDIT_PREFS','My preferences');
define('_TB_EDIT_HOME','ข้อกำหนดเกี่ยวกับโฮมเพจของคุณ');
define('_TB_EDIT_COMM','ข้อกำหนดเกี่ยวกับข้อเสนอแนะของคุณ');
define('_TB_PERSONAL','ส่วนตัว');
define('_TB_PERSONAL_GALLERY','แกลลอรี่ส่วนตัว');
define('_TB_PERSONAL_JOURNAL','บล็อกของคุณ');
define('_TB_PRIVMSGS','ข้อความส่วนตัว');
define('_TB_PRIVMSGS_INBOX','จดหมายเข้า');
define('_TB_PRIVMSGS_OUTBOX','จดหมายออก');
define('_TB_PRIVMSGS_SENTBOX','จดหมายที่ส่งออกไป');
define('_TB_PRIVMSGS_SAVEBOX','จดหมายที่เก็บไว้');
define('_TB_PRIVMSGS_SEND','ส่งข้อความ');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','ข้อมูลผู้ใช้');
define('_SECURITYCODE','โค้ดเพื่อความปลอดภัย');
define('_TYPESECCODE','โค้ดในการพิมพ');
define('_MEMBERSOPTIONS','ทางเลือกการเป็นสมาชิก');
define('_READSEND','อ่านข้อความส่วนตัวและส่งข้อความไปยังผู้อื่น');
define('_INBOX','จดหมายเข้า');
define('_NEW','ข้อความใหม');
define('_ACCOUNTOPTIONS','My Account. Update preferences and read my messages.');
define('_LOGOUTACCT','Log out of this account.');
define('_LOGOUTADMINACCT','Log out of admin account.');
define('_BLOGIN','Your Account');
define('_BFLOGIN','ข้อมูลส่วนตัว');
define('_BHID','ไม่แสดง');
define('_WHOWHERE','Who Is Where');
define('_STAFFONL','Staff Online');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Community');
define('_BlogsLANG','วารสาร');
define('_ContentLANG','บทความที่น่าสนใจ');
define('_coppermineLANG','ห้องแสดงภาพ');
define('_CPGlangLANG','Help Translate');
define('_DownloadsLANG','ดาวน์โหลด');
define('_EncyclopediaLANG','สารานุกรม');
define('_ForumsLANG','กระดานข่าว');
define('_ContactLANG','ติดต่อสอบถาม');
define('_FAQLANG','ถามตอบ');
define('_Members_ListLANG','รายนามสมาชิก');
define('_NewsLANG','ข่าวสารและบทความ');
define('_ReviewsLANG','บทวิจารณ์');
define('_SearchLANG','ค้นหา');
define('_StatisticsLANG','สถิติการเข้าชม');
define('_Stories_ArchiveLANG','ข่าวสารและบทความทั้งหมด');
define('_Submit_NewsLANG','เผยแพร่ข่าวสารและบทความ');
define('_SurveysLANG','แบบสำรวจ');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','หัวข้อเรื่อง');
define('_Private_MessagesLANG','ข่าวสารส่วนตัว');
define('_Tell_a_FriendLANG','แนะนำบอกต่อ');
define('_Web_LinksLANG','สารบัญเว็บ');
define('_Your_AccountLANG','สำหรับสมาชิก');
define('_CPG_EventsLANG','ปฏิทิน');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Communication');
define('_FRIENDS','Friends');
define('_STORE','Store');
define('_PRODUCTS','Products');
define('_DONATE','Donate');
define('_HELP','Help');
define('_GALLERIES','Galleries');
define('_DOCS','Documentation');
define('_RULES','Rules & regulations');
define('_MENU','Main Menu');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','คุณต้องเป็น<br /><strong>สมาชิก</strong><br />เพื่อที่จะได้รับจดหมายข่าว');
define('_NEWSLETTERBLOCKSUBSCRIBE','Subscribe');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Unsubscribe');
define('_NEWSLETTERBLOCKREGISTERNOW','Register Now!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'You must provide at least one recipient email address.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer is not supported.';
$PHPMAILER_LANG['execute'] = 'Could not execute: ';
$PHPMAILER_LANG['instantiate'] = 'Could not instantiate mail function.';
$PHPMAILER_LANG['authenticate'] = 'SMTP Error: Could not authenticate.';
$PHPMAILER_LANG['from_failed'] = 'The following From address failed: ';
$PHPMAILER_LANG['recipients_failed'] = 'SMTP Error: The following recipients failed: ';
$PHPMAILER_LANG['data_not_accepted'] = 'SMTP Error: Data not accepted.';
$PHPMAILER_LANG['connect_host'] = 'SMTP Error: Could not connect to SMTP host.';
$PHPMAILER_LANG['file_access'] = 'Could not access file: ';
$PHPMAILER_LANG['file_open'] = 'File Error: Could not open file: ';
$PHPMAILER_LANG['encoding'] = 'Unknown encoding: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','บันทึกการเปลี่ยนแปลง');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','ภาษา');
define('_FUNCTIONS','การจัดการ');
define('_SHOW','แสดง');
define('_TO','ถึง');
define('_DAY','วัน');
define('_LAST','บทความสุดท้าย');
define('_ACTIVE','ทำงาน');
define('_DEACTIVATE','ไม่ทำงาน');
define('_INACTIVE','ไม่ทำงาน');
define('_ACTIVATE','ทำงาน');
define('_ACTIVATE2','ทำงาน?');
define('_VIEW','ผู้สามารถอ่านข้อมูลได้');
define('_VIEWPRIV','ใครสามารถเห็น?');
define('_MVADMIN','เฉพาะผู้ดูแลระบบ');
define('_MVUSERS','เฉพาะสมาชิก');
define('_MVANON','เฉพาะผู้ไม่ประสงค์ออกนาม');
define('_MVALL','ทุกคน');
define('_IMAGE','รูป');
define('_GO','ส่ง!');
define('_OPTION','ตัวเลือก');
define('_CATEGORY','กลุ่ม');
define('_SUBCATEGORY','Sub-Category');
define('_ID','เรื่องที่');
define('_EXPIRATION','ระยะการใช้งาน');
define('_DAYS','วัน');
define('_WARNING','คำเตือน');
define('_POLLTITLE','ชื่อแบบสำรวจ');
define('_POLLEACHFIELD','กรุณาใส่คำตอบในแต่ละช่อง');
define('_ADDCATEGORY','เพิ่มหมวดหมู่');
define('_PAGEBREAK','ถ้าคุณต้องการที่จะแบ่งหน้ากรุณาใส่<b>&lt;!--pagebreak--&gt;</b>ด้วย');
define('_SIGNATURE','ลายเซ็น');
define('_DESCRIPTION','รายละเอียด');
define('_EDITCATEGORY','แก้ไขหมวด');
define('_IN','ไป');
define('_DESCRIPTION255','คำอธิบาย: (ไม่เกิน 255 ตัวอักษร)');
define('_MODCATEGORY','แก้ไขหมวด');
define('_SUBMITTER','ผู้ส่งมา');
define('_VISIT','เยี่ยมชม');
define('_EXTENDEDTEXT','เพิ่มเติม');
define('_CHECKCATEGORIES','ตรวจสอบหมวดหลัก');
define('_INCLUDESUBCATEGORIES','(รวมทั้งหมวดย่อย)');
define('_CHECKSUBCATEGORIES','ตรวจสอบหมวดย่อย');
define('_VALIDATELINKS','ตรวจสอบลิงก์');
define('_FAILED','เสีย!');
define('_BEPATIENT','(กรุณารอสักครู่...)');
define('_VALIDATINGCAT','กำลังตรวจสอบหมวดหลัก (และหมวดย่อยทั้งหมด)');
define('_VALIDATINGSUBCAT','กำลังตรวจสอบหมวดย่อย');
define('_OK','ตกลง!');
define('_CHECK','ตรวจสอบ');
define('_IGNORE','ยกเลิก');
define('_HITS','จำนวนครั้งผู้อ่าน');
define('_FILESIZE', 'ขนาดไฟล์');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","ลิงค์เสีย ");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','โมดูลหน้าแรก(Default)');
define('_MODULEINHOME','โมดูลที่ทำงานในหน้าแรก:');
define('_CHANGE','เปลี่ยน');
define('_WHOSONLINE','ผู้เข้าชม');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Move article up');
define('_ARTICLEDOWN','Move article down');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','บทความโปรแกรม');
define('_STORYID','รหัสเรื่อง');
define('_CURRENTPOLL','ผลคะแนน');

// admin.php
define('_ADMINISTRATION','การจัดการระบบ');
define('_NOADMINYET','ยังไม่มีผู้ดูแลระบบ คุณต้องการสร้าง Super User:');
define('_CREATEUSERDATA','คุณต้องการที่จะสร้างสมาชิกทั่วไปด้วยชุดข้อมูลเดียวกัน?');
define('_ADMINLOGIN','เข้าสู่ผู้ควบคุมระบบ');
define('_ADMINID','รหัสผู้ควบคุมระบบ');
define('_EMAIL','อีเมล์');
define('_SUBMIT','ส่ง');
define('_YOUARELOGGEDOUT','คุณออกจากระบบแล้ว!');
define('_PASSWDNOMATCH','รหัสผ่านใหม่ไม่ถูกต้อง กลับไปลองใหม่');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','จัดการผู้ดูแลระบบ');
define('_NAME','ชื่อ');
define('_REQUIRED','(ข้อมูลจำเป็น)');
define('_MODIFYINFO','แก้ไขข้อมูล');
define('_DELAUTHOR','ลบผู้ดูแลระบบ');
define('_ADDAUTHOR','เพิ่มผู้ดูแลระบบ');
define('_PERMISSIONS','สิทธิ');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','คำเตือน: ถ้า Super User ถูกเลือกจะมีสิทธิอำนาจเต็ม!');
define('_ADDAUTHOR2','เพิ่มผู้ดูแลระบบ');
define('_RETYPEPASSWD','ใส่รหัสผ่านอีกครั้ง');
define('_FORCHANGES','(สำหรับเปลี่ยนแปลงเท่านั้น)');
define('_COMPLETEFIELDS','คุณต้องใส่ให้ครบทุกช่อง');
define('_CREATIONERROR','เพิ่มผู้ดูแลระบบผิดพลาด');
define('_AUTHORDEL','ลบผู้ดูแลระบบ');
define('_PUBLISHEDSTORIES','ผู้ดูแลระบบส่งเรื่องมา');
define('_SELECTNEWADMIN','โปรดเลือกผู้ดูแลระบบใหม่เพื่อ re-assign');
define('_GODNOTDEL','*(GOD ไม่สามารถลบได้)');
define('_MAINACCOUNT','God ผู้ดูแลระบบ*');
define('_USERS','สมาชิก');

// banners.php
define('_BANNERSADMIN','การจัดการแถบโฆษณา');
define('_DELETEBANNER','ลบป้ายโฆษณา ');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','แก้ไขป้ายโฆษณา');

// blocks.php
define('_BLOCKSADMIN','จัดการเมนู');
define('_CENTER','กลาง');
define('_CENTERUP','เลื่อนตรงกลางขึ้น');
define('_CENTERDOWN','เลื่อนตรงกลางลง');
define('_BLOCKFILE','(ไฟล์เมนู)');
define('_BLOCKFILE2','ไฟล์');
define('_BLOCKSYSTEM','ระบบ');
define('_ADDNEWBLOCK','เพิ่มเมนูใหม่');
define('_RSSFILE','RSS/RDF ไฟล์ URL');
define('_ONLYHEADLINES','(สำหรับ Headlines เท่านั้น)');
define('_REFRESHTIME','เวลาโหลดใหม่');
define('_CREATEBLOCK','สร้างเมนู');
define('_EDITBLOCK','แก้เมนู');
define('_BLOCK','เมนู');
define('_SAVEBLOCK','บันทึกเมนู');
define('_BLOCKACTIVATION','เมนูทำงาน');
define('_BLOCKPREVIEW','แสดงตัวอย่างก่อนส่ง');
define('_WANT2ACTIVATE','คุณต้องการให้เมนูนี้ทำงาน?');
define('_ARESUREDELBLOCK','แน่ใจว่าจะลบเมนูนี้');
define('_BLOCKUP','เลื่อนเมนูขึ้น');
define('_BLOCKDOWN','เลื่อนเมนูลง');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','ชื่อ');
define('_POSITION','ตำแหน่ง');
define('_WEIGHT','ลำดับที่');
define('_STATUS','สถานะ');
define('_LEFTBLOCK','เมนูซ้าย');
define('_LEFT','ซ้าย');
define('_RIGHTBLOCK','เมนูขวา');
define('_RIGHT','ขวา');
define('_TYPE','ประเภท');
define('_CUSTOM','ทำเอง');
define('_FILENAME','ชื่อไฟล์');
define('_FILEINCLUDE','(เลือกเมนูส่วนตัวที่จะเพิ่ม ข้อมูลอื่นทั้งหมดจะถูกยกเลิก)');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','ลบข้อเสนอแนะ');
define('_SURETODELCOMMENTS','คุณแน่ใจที่จะลบข้อเสนอแนะและข้อความตอบทั้งหมด?');

// database.php
define('_SAVEDATABASE','สำรองข้อมูล');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','สถานะปัจจุบัน');
define('_ACTIVATEPAGE','หน้านี้ทำงาน?');

// history.php
define('_EPHEMADMIN','จัดการเนื้อหาอัตโนมัติ');
define('_ADDEPHEM','เพิ่มเนื้อหาอัตโนมัติ');
define('_EPHEMDESC','คำอธิบายเนื้อหาอัตโนมัติ');
define('_EPHEMMAINT','ปรับเนื้อหาอัตโนมัติ (แก้ไข/ลบ):');
define('_EPHEMEDIT','แก้ไขเนื้อหาอัตโนมัติ');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','มีปัญหาเกี่ยวกับ  RSS file URL');
define('_RSSTRYAGAIN','กรุณาตรวจสอบ URL and RSS file name และพยายามอีกครั้ง');
define('_RSSCONTENT','(RSS/RDF Content)');
define('_IFRSSWARNING','ถ้าคุณใส่ URL เนื้อหาที่คุณเขียนจะไม่แสดง!');
define('_SETUPHEADLINES','(เขียน URL เองหรือเลือกจากเว็บที่กำหนด)');
define('_HEADLINESADMIN','จัดการหัวข้อข่าว');
define('_ADDHEADLINE','เพิ่มหัวข้อข่าว');
define('_EDITHEADLINE','แก้หัวข้อข่าว');
define('_SURE2DELHEADLINE','คำเตือน: แน่ใจหรือที่จะลบหัวข้อข่าว?');

// messages.php
define('_MESSAGESADMIN','จัดการประกาศ');
define('_MESSAGETITLE','เรื่อง');
define('_MESSAGECONTENT','เนื้อหา');
define('_ALLMESSAGES','ดูประกาศทั้งหมด');
define('_EDITMSG','แก้ไขประกาศ');
define('_ADDMSG','เพิ่มประกาศ');
define('_REMOVEMSG','คุณแน่ใจที่จะลบประกาศ ');
define('_CHANGEDATE','เปลี่ยนวันเริ่มต้นเป็นวันนี้?');
define('_IFYOUACTIVE','(ถ้าคุณเริ่มใช้งานข่าวสารเดี๋ยวนี้วันเริ่มต้นคือวันนี้)');

// modules.php
define('_MODULESADMIN','จัดการโมดูล');
define('_HOMECONFIG','ปรับแต่งหน้าแรก');
define('_MODULESADDONS','โมดูล');
define('_INHOME','ในหน้าแรก');
define('_MODULEHOMENOTE','<b>-= คำเตือน =-</b><br />โมดูลที่เป็นตัวหนา หมายถึง โมดูลที่กำลังทำงานในหน้าแรก<br />คุณไม่สามารถยกเลิกการทำงานโมดูลนี้ขณะที่โมดูลนี้เป็น default อยู่!<br />ถ้าคุณลบไดเรคทอรี่ของโมดูลนี้ออก จะเกิดข้อผิดพลาดที่หน้าแรกทันที<br />เพราะโมดูลนี้จะถูกแทนที่ด้วย <i>หน้าแรก</i> ของลิงก์ในเมนูโมดูล');
define('_PUTINHOME','ใส่ในหน้าแรก');
define('_SURETOCHANGEMOD','คุณแน่ใจที่จะเปลี่ยนโฮมเพจคุณจาก');
define('_NOTINMENU','[ <big><strong>&middot;</strong></big> ] หมายความว่า โมดูลชื่อนี้และส่วนของลิงก์จะไม่ปรากฏในเมนูหลัก(Modules Block)');
define('_SHOWINMENU','แสดงในเมนูหลัก(Modules Block)?');
define('_CUSTOMTITLE','ชื่อที่ตั้งเอง');
define('_MODULEEDIT','แก้ไขโมดูล');
define('_VERSION','รุ่น');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','ผู้ส่ง');
define('_STAFF','ทีมงาน');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','สมาชิกที่ลงทะเบียน');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','กรุณาทบทวนและตรวจสอบข้อความ:');
define('_MANYUSERSNOTE','คำเตือน! มีสมาชิกจำนวนมากที่จะได้รับข้อความนี้ กรุณารอจนกระทั่งทำงานเสร็จ ซึ่งจะใช้เวลาหลายนาทีจึงจะสมบูรณ์ !');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','สมาชิกจะได้รับจดหมายนี้');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','จดหมายถูกส่งแล้ว');

// referers.php
define('_WHOLINKS','ใครที่เว็บไซต์มาเว็บนี้?');
define('_DELETEREFERERS','ลบ Referers');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','ปรับแต่งเว็บไซต์');
define('_GENSITEINFO','ข้อมูลทั่วไปของเว็บ');
define('_SITENAME','ชื่อเว็บ');
define('_SITEURL','ที่อยู่ Url ');
define('_SITELOGO','สัญญลักษณ์');
define('_SITESLOGAN','คำขวัญ');
define('_STARTDATE','วันเริ่มต้น');
define('_ADMINEMAIL','อีเมล์ผู้ดูแ%ระบบ');
define('_ITEMSTOP','จำนวนรายการในหน้ายอดฮิต');
define('_STORIESHOME','จำนวนเรื่อง/บทความในหน้าแรก');
define('_OLDSTORIES','จำนวนเรื่องในบทความที่ผ่านมา');
define('_ALLOWANONPOST','อนุญาตให้ผู้ไม่ประสงค์ออกนามส่ง?');
define('_DEFAULTTHEME','ธีมที่ใช้');
define('_SHOWSEC','Show security code');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Service');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','เลือกแบบหลายภาษา');
define('_SELLANGUAGE','เลือกภาษา');
define('_LOCALEFORMAT','เวลาท้องถิ่น');
define('_ACTMULTILINGUAL','แบบหลายภาษาทำงาน? ');
define('_ACTUSEFLAGS','แสดงธงชาติ? ');
// banners
define('_BANNERSOPT','ใช้ป้ายโฆษณา');
define('_ACTBANNERS','ป้ายโฆษณาทำงาน?');
// footer
define('_FOOTERMSG','ข่าวสารท้ายหน้า');
define('_FOOTERLINE1','บรรทัดที่ 1');
define('_FOOTERLINE2','บรรทัดที่ 2');
define('_FOOTERLINE3','บรรทัดที่ 3');
// backend
define('_BACKENDCONF','ปรับแต่ง Backend');
define('_BACKENDTITLE','ชื่อ Backend ');
define('_BACKENDLANG','ภาษา Backend ');
// mail stories
define('_MAIL2ADMIN','เมล์เรื่องใหม่ไปผู้ดูแลระบบ');
define('_NOTIFYSUBMISSION','แจ้งข่าวสารใหม่ทางอีเมล์?');
define('_EMAIL2SENDMSG','อีเมล์ที่ส่งข่าว/เรื่อง');
define('_EMAILSUBJECT','ชื่อเรื่องของอีเมล์');
define('_EMAILMSG','ข่าวสารอีเมล์');
define('_EMAILFROM','อีเมล์สมาชิก (จาก)');
// comments
define('_COMMENTSOPT','ส่วนเพิ่ม : ข้อเสนอแนะ');
define('_COMMENTSLIMIT','จำกัดปริมาณข้อมูลของข้อเสนอแนะ');
define('_COMMENTSMOD','รูปแบบการตรวจสอบ');
define('_MODADMIN','ตรวจสอบโดยผู้ดูแลระบบ');
define('_MODUSERS','ตรวจสอบโดยสมาชิก ');
define('_NOMOD','ไม่ตรวจสอบ');
// adminmenu
define('_GRAPHICOPT','ส่วนเพิ่ม : รูปภาพ');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','ส่วนเพิ่ม : อื่นๆ');
define('_ACTIVATEHTTPREF','เปิดใช้งานบันทึก HTTP Referers ?');
define('_MAXREF','ให้แสดง Referers สูงสุดเท่าใด?');
define('_COMMENTSPOLLS','ให้มีข้อเสนอแนะในแบบสำรวจ?');
define('_COMMENTSARTICLES','ให้มีข้อเสนอแนะในบทความ?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','ส่วนของการตัดคำหยาบ');
define('_CENSORMODE','งานตัดคำหยาบ');
define('_NOFILTERING','ไม่มีการกรองคำ');
define('_EXACTMATCH','ตรงกันหมดทุกคำ');
define('_MATCHBEG','ตรงกับคำเริ่มต้น');
define('_MATCHANY','ตรงกับส่วนใดๆในข้อความ');
define('_CENSORREPLACE','เปลี่ยนคำที่ต้องการตัดคำหยาบด้วย:');
// email
define('_EMAILOPTIONS','Mail');
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','เมนูผู้ควบคุมระบบ');
define('_ADMINLOGOUT','ออกจากระบบ/เลิกโปรแกรม');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Modules');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','ค่าติดตั้งเฉพาะระบบ');
define('_DATABASE','Database');
define('_BLOCKS','เมนู');
define('_MODULES','โมดูล');
define('_EDITADMINS','แก้ไขผู้ควบคุมระบบ');
define('_MESSAGES','ประกาศ');
define('_BANNERS','ป้ายโฆษณา');
define('_HTTPREFERERS','HTTP ที่ส่งผู้ชมเข้ามา');
define('_EDITUSERS','แก้ไขสมาชิก');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','จดหมาย');
define('_SUBMISSIONS','เรื่องที่ส่งเข้ามา');
define('_ADDSTORY','เพิ่มเรื่อง');
define('_TOPICS','หัวข้อ');
define('_ADMPOLLS','การสำรวจ/ผลสำรวจ');
define('_EPHEMERIDS','เนื้อหาอัตโนมัติ');
define('_REVIEWS','บทวิจารณ์');
define('_ENCYCLOPEDIA','พจนานุกรม');
define('_SURVEYS','แบบสำรวจ');
define('_SECTIONS','เรื่องพิเศษ');
define('_ARTICLES','บทความ');
define('_FAQ','ถาม/ตอบ');
define('_DOWNLOAD','ดาวน์โหลด');
define('_WEBLINKS','เว็บลิงก์');
define('_CONTENT','เนื้อหา');
define('_SYSINFO','System Info');
define('_REPORTABUG','Report a Bug');
//coppermine admin
define('_W_INSTALL','Which Installation?');
define('_W_PAGE','Which Page?');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protection');
define('_EMAIL_DOMAINS','E-Mail Domains');
define('_FLOODING','Flooding');
define('_UUA','Unknown User-Agents');
define('_FLOODING_TIP','Flooding: Delay<br /><em>timing between each warning</em>');
define('_BAN_TIP','Flooding: Ban Duration<br /><em>how long the ban will last for</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>clean ban after duration time expires</em>');
define('_FOREVER','forever');
define('_REMOVE_SELECTED','Remove selected');

//errors for cpg_error
define('_ERROR','ERROR');
define('_SEC_ERROR','Security Error');
define('_ERROR_NOT_SET','%s was not set');
define('_ERROR_NO_POST','Posting from another host is disallowed...');
define('_ERROR_NO_GET','GET requests are not allowed for this function...');
define('_ERROR_BAD_CHAR','The characters that you tried to include in your %s request are forbidden...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','You tried to access this page through a bad link...');
define('_ERROR_NONE_TO_DISPLAY','There are no %s to display');
define('_ERROR_DELETE_CONF','Are you sure that you want to delete %s?');
define('_ERROR_NO_EXIST','%s does not exist');
define('_ERROR_ALREADYEXIST','%s already exists');
define('_TASK_COMPLETED','Operation complete!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
