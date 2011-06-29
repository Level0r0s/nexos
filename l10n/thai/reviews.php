<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/thai/reviews.php,v $
  $Revision: 9.5 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:40:06 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','ชื่อคุณ');
define('_SORTASC','เรียงจากน้อยไปมาก');
define('_SORTDESC','เรียงจากมากไปน้อย');
define('_CANCEL','ยกเลิก');
define('_SCORE','คะแนน:');
define('_REPLYMAIN','ร่วมวิจารณ์');
define('_ALLOWEDHTML',' HTML ที่สามารถใช้ได้:');
define('_POSTANON','บันทึก โดยไม่ประสงค์ออกนาม');
define('_WRITEREVIEW','เขียนบทวิจารณ์');
define('_WRITEREVIEWFOR','เขียนบทวิจารณ์สำหรับ');
define('_ENTERINFO','กรุณาใส่ข้อมูลตามเรื่องที่ต้องการจะวิจารณ์');
define('_PRODUCTTITLE','เรื่อง');
define('_NAMEPRODUCT','เรื่องของสิ่งที่จะวิจารณ์');
define('_REVIEW','วิจารณ์');
define('_CHECKREVIEW','กรุณาตรวจสอบรายละเอียดต่างๆ! และควรจะมีความยาวพอสมควร อนุญาตให้ใช้ HTML tags ได้');
define('_FULLNAMEREQ','ชือเต็ม(ต้องใส่)');
define('_REMAIL','อีเมล์คุณ');
define('_REMAILREQ','อีเมล์คุณ(ต้องใส่)');
define('_SELECTSCORE','คะแนนของเรื่องนี้');
define('_RELATEDLINK','ข้อมูลเชื่อมโยงที่เกี่ยวข้อง');
define('_PRODUCTSITE','เว็บอย่างเป็นทางการของเรื่อง แน่ใจว่าที่อยู่ Url  ขึ้นต้นด้วย "http://"');
define('_LINKTITLE','ชื่อเว็บไซต์');
define('_LINKTITLEREQ','ต้องใส่ด้วย(ถ้าคุณมีข้อมูลเชื่อมโยงที่เกี่ยวข้อง)');
define('_RIMAGEFILE','ชื่อรูปภาพ');
define('_RIMAGEFILEREQ','ที่อยู่ของรูปภาพต้องอยู่ใน images/reviews/ (ไม่จำเป็นต้องมีก็ได้)');
define('_CHECKINFO','กรุณาตรวจสอบความถูกต้องของข้อมูลว่า 100% ?');
define('_INVALIDTITLE','ต้องมีชื่อ... ห้ามว่าง');
define('_INVALIDSCORE','คะแนน... ต้องอยู่ระหว่าง 1 ถึง 10');
define('_INVALIDTEXT','ข้อความ... ห้ามว่าง');
define('_INVALIDHITS','จำนวนครั้ง ต้องเป็นเลขบวก');
define('_CHECKNAME','คุณต้องใส่ทั้งชื่อคุณและอีเมล์');
define('_INVALIDEMAIL','ใส่อีเมล์ผิด (ตย: you@hotmail.com)');
define('_INVALIDLINK','คุณต้องใส่ทั้งชื่อเว็บไซต์และเรื่องที่เกี่ยวข้อง หรือไม่ก็ไม่ต้องใส่เลย');
define('_ADDED','วันบันทึก:');
define('_REVIEWER','ผู้วิจารณ์');
define('_REVIEWID','รหัสบทวิจารณ์');
define('_LOOKSRIGHT','แน่ใจแล้ว?');
define('_RMODIFIED','ปรับปรุงแล้ว');
define('_RADDED','เพิ่มแล้ว');
define('_ADMINLOGGED','ขณะนี้ท่านเข้าสู่ระบบในฐานะผู้จัดการระบบ. บทวิจารณ์นี้จะถูกส่ง ');
define('_RTHANKS','ขอขอบคุณ คุณ');
define('_MODIFICATION','ปรับแต่ง');
define('_ISAVAILABLE','ขณะนี้เรื่องถูกส่งเข้าไปอยู่ในฐานข้อมูลเรียบร้อยแล้ว');
define('_EDITORWILLLOOK','กองบรรณาธิการจะพิจารณาเพื่อทำการเผยแพร่โดยเร็ว');
define('_RBACK','ย้อนกลับไปที่ดัชนีเรื่อง');
define('_RWELCOME','ขอต้อนรับสู่บทวิจารณ์');
define('_10MOSTPOP','10 บทวิจารณ์ที่นิยมอ่านมากที่สุด');
define('_10MOSTREC','10 บทวิจารณ์ล่าสุด');
define('_THEREARE','ขณะนี้มีบทวิจารณ์ทั้งหมด');
define('_REVIEWSINDB','เรื่องในฐานข้อมูล');
define('_REVIEWSLETTER','บทวิจารณ์สำหรับจดหมาย');
define('_NOREVIEWS','ไม่มีบทวิจารณ์สำหรับจดหมาย');
define('_TOTALREVIEWS','บทวิจารณ์ทั้งหมดที่พบ');
define('_RETURN2MAIN','กลับไปที่เมนูหลัก');
define('_REVIEWCOMMENT','ข้อเสนอแนะสำหรับบทวิจารณ์:');
define('_YOURNICK','ชื่อของคุณ:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'"> สมัครสมาชิก</a>');
define('_YOURCOMMENT','ข้อเสนอแนะของคุณ:');
define('_MYSCORE','คะแนน:');
define('_REVIEWMOD','ปรับปรุงบทวิจารณ์');
define('_RDATE','วัน:');
define('_RTITLE','เรื่อง:');
define('_RTEXT','ข้อความ:');
define('_REVEMAIL','อีเมล์:');
define('_RLINK','เว็บไซต์:');
define('_RLINKTITLE','ชื่อเว็บไซต์:');
define('_COVERIMAGE','รูปประกอบ:');
define('_PREMODS','ดูการปรับแต่งก่อน');
define('_PAGE','หน้า');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','จัดการบทวิจารณ์');
define('_REVTITLE','บทวิจารณ์');
define('_REVDESC','เป็นหน้าที่ให้วิจารณ์ในส่วนต่างๆได้อย่างเสรี');
define('_REVWAITING','บทวิจารณ์ที่อยู่ระหว่างการตรวจสอบ');
define('_REVIMGINFO','เก็บรูปขนาด 150*150 ใน images/reviews');
define('_NOREVIEW2ADD','ไม่มีบทวิจารณ์ที่จะเพิ่ม');
define('_ADDREVIEW','เพิ่มบทวิจารณ์');
define('_CLICK2ADDREVIEW','คลิ๊กที่นี่เพื่อเขียนบทวิจารณ์');
define('_DELMODREVIEW','ลบ/แก้ไขบทวิจารณ์');
define('_MODREVINFO','คุณสามารถลบ/แก้ไข บทวิจารณ์โดยเปิด <a href="'.getlink('Reviews').'">ที่นี่</a> ด้วยผู้ดูแลระบบ');
