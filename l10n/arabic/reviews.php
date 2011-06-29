<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/arabic/reviews.php,v $
  $Revision: 9.5 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:47 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','اسمك');
define('_SORTASC','ترتيب تصاعدي');
define('_SORTDESC','ترتيب تنازلي');
define('_CANCEL','الغاء');
define('_SCORE','التقييم:');
define('_REPLYMAIN','أرسل تعليق');
define('_ALLOWEDHTML','HTML مسموح:');
define('_POSTANON','Post Anonymously');
define('_WRITEREVIEW','اكتب تعقيبا');
define('_WRITEREVIEWFOR','اكتب تعليقا على');
define('_ENTERINFO','الرجاء ادخال معلومات حسب المواصفات');
define('_PRODUCTTITLE','عنوان المنتج');
define('_NAMEPRODUCT','اسم المنتج الذي ستكتب تقريرا عنه.');
define('_REVIEW','التقرير');
define('_CHECKREVIEW','تقريرك عن المنتج. الرجاء كتابة 100 كلمة على الأقل, تستطيع استخدام لغة HTML اذا كنت تعرف استخدامها.');
define('_FULLNAMEREQ','اسمك الكامل. مطلوب.');
define('_REMAIL','بريدك الإلكتروني');
define('_REMAILREQ','بريدك الإلكتروني. مطلوب.');
define('_SELECTSCORE','نتيجة تقييم الموضوع');
define('_RELATEDLINK','روابط ذات صلة');
define('_PRODUCTSITE','عنوان صفحة المنتج. تأكد أن الرابط يحتوي على "http://"');
define('_LINKTITLE','عنوان الرابط');
define('_LINKTITLEREQ','مطلوب اذا كان يوجد عندك روابط ذات صلة وعدا ذلك فهو غير مطلوب.');
define('_RIMAGEFILE','اسم ملف الصورة');
define('_RIMAGEFILEREQ','اسم صورة الغلاف والموجودة في الدليل images/reviews/. غير مطلوبة.');
define('_CHECKINFO','الرجاء التأكد من أن جميع المعلومات المدخلة صحيحة والتأكد من التزام قواعد اللغة.');
define('_INVALIDTITLE','خطأ في العنوان... لا يمكن ان يكون خالي');
define('_INVALIDSCORE','تقييم خاطئ... يجب أن يكون بين 1 و 10');
define('_INVALIDTEXT','لا يمكن ارسال التعقيب...يجب أن لا يكون فارغا');
define('_INVALIDHITS','التقييم يجب أن يكون رقم صحيح');
define('_CHECKNAME','يجب ادخال اسمك وبريدك الإلكتروني');
define('_INVALIDEMAIL','بريد غير صحيح (مثال: you@hotmail.com)');
define('_INVALIDLINK','يجب ادخال اسم الرابط وروابط ذات صلة معا أو تركهما معا');
define('_ADDED','أضيف:');
define('_REVIEWER','المراجع:');
define('_REVIEWID','رقم المراجع');
define('_LOOKSRIGHT','هل يبدوا هذا صحيحا؟');
define('_RMODIFIED','عدلت');
define('_RADDED','أضيفت');
define('_ADMINLOGGED','تم دخولك حاليا كمشرف عام... سيتم نشر تقرير المراجعه مباشرة');
define('_RTHANKS','نشكرك لكتابة هذا التقرير');
define('_MODIFICATION','تعديلات');
define('_ISAVAILABLE','التقرير موجود الأن في قاعدة بيانات تقارير المراجعة.');
define('_EDITORWILLLOOK','سنقوم بمراجعة مقالتك. سيتم وضعها قريبا!');
define('_RBACK','عودة الى قائمة المراجعات');
define('_RWELCOME','أهلا بك في قائمة المراجعات');
define('_10MOSTPOP','أشهر 10 مراجعات');
define('_10MOSTREC','أخر 10 مراجعات');
define('_THEREARE','يوجد حاليا');
define('_REVIEWSINDB','مراجعة في قاعدة البيانات');
define('_REVIEWSLETTER','مراجعات للرسائل');
define('_NOREVIEWS','لا يوجد مراجعات للرسائل');
define('_TOTALREVIEWS','مجموع المراجعات الموجودة.');
define('_RETURN2MAIN','العودة للقائمة الرئيسية');
define('_REVIEWCOMMENT','التعليق في المراجعات:');
define('_YOURNICK','الكنية:');
define('_RCREATEACCOUNT','<a href="'.getlink('Your_Account').'">اشتراك </a> جديد');
define('_YOURCOMMENT','تعليقك:');
define('_MYSCORE','تقييمي:');
define('_REVIEWMOD','تعديل المراجعات');
define('_RDATE','التاريخ:');
define('_RTITLE','العنوان:');
define('_RTEXT','النص:');
define('_REVEMAIL','البريد الإلكتروني:');
define('_RLINK','الرابط:');
define('_RLINKTITLE','عنوان الرابط:');
define('_COVERIMAGE','صورة الغلاف:');
define('_PREMODS','استعراض التعديلات');
define('_PAGE','صفحة');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Reviews Administration');
define('_REVTITLE','Reviews Page Title');
define('_REVDESC','Reviews Page Description');
define('_REVWAITING','Reviews Waiting for Validation');
define('_REVIMGINFO','Store your 150*150 image in images/reviews');
define('_NOREVIEW2ADD','No reviews to add');
define('_ADDREVIEW','Add Review');
define('_CLICK2ADDREVIEW','Click here to write a review');
define('_DELMODREVIEW','Delete / Modify a review');
define('_MODREVINFO','You can simply delete/modify reviews by browsing <a href="'.getlink('Reviews').'">Reviews</a> as Admin.');
